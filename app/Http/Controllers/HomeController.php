<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;
use App\Tenders;
use App\Contractor;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\ContactMail;
use App\Mail\Forgot;
use App\Order;
use App\Websitesetting;
use Illuminate\Support\Facades\Config;
//use Illuminate\Support\Facades\Hash;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware(['auth', 'isAdmin','clearance']);
        //$this->middleware(['auth','clearance']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function my_profile(){
        // echo "string";
        // die;
        if(session()->has('front-login')){
            $session = session()->get('front-login')[0];
            //echo $session['id'];
            $client = Client::where('id',$session['id'])->first();
           // die;
            return view('profile',compact('client'));
        }else{
              return redirect('/');
        }
        
       
        
    }

    public function forgot(Request $request){
        return view('forgot');
    }

    public function forgot_submit(Request $request){
        //print_r($request);
        $data = $request->all();
        $client = Client::where('email',$data['email'])->first();
        if (empty($client)) {
            return back()->with('error','Invalid Email Try Again!');
        }


        $getWebInfo = Websitesetting::select('website_name', 'website_logo', 'email', 'address', 'mobile')->first();
         $content = [
             'title'         => 'Forgot Password with FirstAd', 
             'address'       => $getWebInfo->address,
             'mobile'        => $getWebInfo->mobile,
             'website_name'  => $getWebInfo->website_name,
             'website_logo'  => $getWebInfo->website_logo,
             'email'         => $getWebInfo->email,
             'client'        => $client,
             'name'          => $client->fname.' '.$client->lname,
             ];

        $receiverAddress = array($data['email']);
        $mail = Mail::to($receiverAddress)->bcc('manish09.chakravarti@gmail.com')->send(new Forgot($content) );
        if (count(Mail::failures()) > 0) {
            return back()->with('error','Please Try Again!');
        }else {
            //echo "No errors, all sent successfully!";
            return back()->with('message','Reset password send in your Email');
        }

        
    }
//verify
    public function verify($id){
        $title = "Set Password";
        $user_id = decrypt($id);
        $user = User::find($user_id);
        $email = $user->email;
        $IsVerifyFlag = false;
        if($user->IsVerify){
            $title = " ";
            $IsVerifyFlag = true;
        }
        return view('forgot_password',compact('email','id','title','IsVerifyFlag'));
    }
    public function verify_user(Request $request){
        $this->validate($request, [
            'user_id'              => 'required',
            'password'              => 'required|min:4',
            'password_confirmation' => 'required|same:password'
        ]);
        $data = $request->all();
        $id = decrypt($data['user_id']);
        $user = User::find($id);
        //$new_password = Hash::make($data['password']);
        $new_password = $data['password'];
        $user->password = $new_password;
        $user->IsVerify = 1;
        if($user->save()){
            return back()->with('message','Verify Email and Password change Successfully.');
        }else{
            return back()->with('error','Please Try Again!');
        }
    }

    public function forgot_password($id){
        //dd(decrypt($id));
        return view('forgot_password',compact('id'));
    }
    
    public function forgot_password_submit(Request $request){
        $this->validate($request, [
            'user_id'              => 'required',
            'password'              => 'required|min:4',
            'password_confirmation' => 'required|same:password'
        ]);
        $data = $request->all();
        $id = decrypt($data['user_id']);
        $client = Client::find($id);
        $new_password = sha1($data['password']);
        $client->password = $new_password;
        if($client->save()){
            return back()->with('message','Password change Successfully');
        }else{
            return back()->with('error','Please Try Again!');
        }
    }

    public function change_password_submit(Request $request){
        $this->validate($request, [
            'old_password'          => 'required',
            'password'              => 'required|min:4',
            'password_confirmation' => 'required|same:password'
        ]);
        $data = $request->all();
        $session = session()->get('front-login')[0];
        $client = Client::find($session['id']);
        $old_password = sha1($data['old_password']);
        $new_password = sha1($data['password']);
        if($old_password == $client->password){
            // update password
            //$flight = App\Flight::find(1);

            $client->password = $new_password;
            if($client->save()){
                return back()->with('message','Password change Successfully');
            }else{
                return back()->with('error','Please Try Again!');
            }
            
        }else{
            //echo "error worng";
              return back()->with('error','The specified password does not match the database password');

        }
    }
    public function change_password(){
        if(session()->has('front-login')){
            $session = session()->get('front-login')[0];
            //echo $session['id'];
            $client = Client::where('id',$session['id'])->first();
           // die;
            return view('change_password',compact('client'));
        }else{
              return redirect('/');
        }
        
    }
    public function send(Request $request){
        $data=$request->all();

        $user=array(
            'name'=>$data['name'],
            'email'=>$data['email'],
            'number'=>$data['number'],
            'message'=>$data['message']
        );
         $content = [
             'title'      => 'Enquiry with FirstAd', 
             'name'       => $data['name'],
             'email'       => $data['email'],
             'number'       => $data['number'],
             'message'       => $data['message']
             ];

        $receiverAddress = array('info@firstaddigital.com');
        $mail = Mail::to($receiverAddress)->bcc('manish09.chakravarti@gmail.com')->send(new ContactMail($content) );
        if (count(Mail::failures()) > 0) {
            $response = array('status'=>'failed');
        }else {
         $response = array('status'=>'success','message'=>'Message Send Success');
        }
        echo json_encode($response);
    }
    public function index($key=null)
    {
       
        $slider = Slider::where('IsActive',1)->orderBy('id','DESC')->get();
        return view('home',compact('slider'));
    }


    public function dashboard1()
    {
      $data=array();
      $count = Contractor::count();
      return view('admin/dashboard1',compact('count'));
    }

    public function dashboard()
    {
        $list['total'] = Contractor::count();
        $list['active'] = Contractor::where('IsActive',1)->count();
        $list['inactive'] = Contractor::where('IsActive',0)->count();
      return view('admin/dashboard',compact('list'));
    }

    public function security()
    {  
        if(!Auth::check()){
             return redirect('/');
        }
        $userdata = User::where('id','=',Auth::user()->id)->first();
        
        return view('admin/security',compact('userdata'));
    }

    public function profileupdate(Request $request)
    {   
        $this->validate($request, [
            'oldpassword'           => 'required',
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);
        $data  = $request->all();
        $datavalue = array(
          'password'  => bcrypt($data['password'])
        );
        $oldpasswords   = $data['oldpassword'];
        $matchpassword  = User::find($data['id'])->password;
        if(\Hash::check($oldpasswords, $matchpassword))
        {
            $check = 0;
            $check = User::where('id',$data['id'])->update($datavalue);
            if($check>0)
            {
              \Session::flash('message', 'Account Information Successfully Updated...');
              return \Redirect::to('/admin/profile');
            }
            else
            {
              
              return \Redirect::back()->with('message', 'Action Failed...Please Try Again!!!');
            }
        }
        else
        {
            return \Redirect::back()->with('message', 'Old Password Does Not Match...Please Try Again!!!');;
            
        }
        
    }

    public function screenlock($currtime,$id,$randnum)
    {
        Auth::logout();
        $user_record = User::where('id',$id)->first();
        return View('admin/screenlock')->with('currtime', $currtime)->with('user_record', $user_record)->with('randnum',$randnum);
    }

    public function errorCode404()
    {
     return view('errors.404');
    }



    public function errorCode405()
    {
      return view('errors.405');
    }

    
    
    
}
