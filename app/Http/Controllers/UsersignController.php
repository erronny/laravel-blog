<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\User;
use Auth;
use Hash;
use Notification;
use App\Notifications\NewUser;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;
use Mail;
use Validator;
//use Illuminate\Support\Facades\Hash;

class UsersignController extends Controller
{
    public function __construct() 
    {
        //$this->middleware(['auth','clearance']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        
        $page_title = "User Create";
        $page = "User";
        return view('ui.users.create',compact('page_title','page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users',
            'Phone'=>'required|max:15',
            //'language'=>'required'
        ]);

        $data = $request->all();
        //print_r($data );
        $usertype = $roles = $request['roles']; 
        
        $user = User::create([
              'role_id' =>'18',
              'vendor_id' =>'0',
              'name' =>$data['name'],
              'email' =>$data['email'],
              'Phone' =>$data['Phone'],
              'password' => $data['password'],
              'IsVerify' => '1',
              'Designation' =>'user',
              'CreatedBy' =>'1'
        ]);
        $code = 'u'.date('Y').$user->id;
        User::where('id',$user->id)->update(['user_code'=>$code]);
        auth()->user()->notify(new NewUser($user)); 
        


        if (isset($roles)) {
            $role_r = Role::where('id', '=', $roles)->firstOrFail();            
            $user->assignRole($role_r);
        }    
        //varification link


        // $getWebInfo = Websitesetting::select('website_name', 'website_logo', 'email', 'address', 'mobile')->first();
        // $user = User::find($user->id);
        // //dd($user->name);
        //  $content = [
        //      'title'         => 'Varification Link with SubTitle', 
        //      'body'          => 'The body of your message.',
        //      'address'       => $getWebInfo->address,
        //      'mobile'        => $getWebInfo->mobile,
        //      'website_name'  => $getWebInfo->website_name,
        //      'website_logo'  => $getWebInfo->website_logo,
        //      'email'         => $getWebInfo->email,
        //      'user'          => $user,
        //      'name'          => $data['name'],
        //      ];
        // $receiverAddress = array('manish09.chakravarti@gmail.com');
        // //$receiverAddress = array($data['email']);

        // // //return view('emails.CandidateApply',compact('content'));
        // $mail = Mail::to($receiverAddress)->bcc('manish09.chakravarti@gmail.com')->send(new Verification($content) );
        // if (count(Mail::failures()) > 0) {
        //     //echo "There was one or more failures. They were: <br />";
        //     foreach (Mail::failures as $email_address) {
        //       //  echo " - $email_address <br />";
        //     }
        // }else {
        //     //echo "No errors, all sent successfully!";
        // }

        /////////////    

        return redirect()->route('login')->with('message','User successfully added.');
    }

    public function checkEmail(Request $request){
        $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:users',
                'mobile_no' => 'required|unique:users',
            ]);
            $error = array('email'=>false,'mobile'=>false);
            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
                foreach ($errors as $key => $value) {
                    if($key =='email'){
                        $error['email'] = true;
                    }
                    if($key =='mobile_no'){
                        $error['mobile'] = true;
                    }
                }

                $response = array(
                    'success'=>false,
                    'code'=>201,
                    'message'=>'This mobile no  already registered',
                    'results'=>[],
                    'error'=>$error
                );
               
            }else{
                 $response = array(
                    'success'=>true,
                    'code'=>200,
                    'message'=>'This mobile no  already registered',
                    'results'=>[],
                    'error'=>$error
                );   
            }
            echo json_encode($response);
    }
    public function userRegister(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile_no = $request->mobile;
        $user->user_type = 1;
        $user->address = '';
        $user->password = bcrypt($request->password);
        $userFlag = $user->save();

            if ($userFlag) {
               $response = array(
                    'success'=>true,
                    'code'=>200,
                    'message'=>'user register',
                    'results'=>[],
                    //'error'=>$error
                );
            }else{
                  
                $response = array(
                    'success'=>false,
                    'code'=>201,
                    'message'=>'Try again! Operation failed',
                    'results'=>[],
                    //'error'=>$error
                );
                 
            }
            echo json_encode($response);
    }
    public function verifyOtp(Request $request){
        $data = $request->all();
        
        $curl = curl_init();
        $auth_key = "319797Ak7HzxTsW15e6c86faP1";
        $template_id = '5e6c88d7d6fc0546bb56c85d';
        $mobile = $data['mobile'];
        $otp = $data['otp'];
        $url = "https://api.msg91.com/api/v5/otp/verify?mobile=".$mobile."&otp=".$otp."&authkey=".$auth_key;
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
            $arr = json_decode($response);
            // print_r($arr->type);
            // die;
            if($arr->type == 'success'){
               $res = array('success' => true,
                    'code' => 200,
                    'IsData'=>false,
                    'message' => $arr->message,
                    );
            }else{
                $res = array('success' => false,
                    'code' => 201,
                    'IsData'=>false,
                    'message' => $arr->message,
                    );
            }
            echo json_encode($res);
        }
    } 
      
    public function sendOtp(Request $request){
        $data = $request->all();
        
        $mobile = $data['mobile'];
        $curl = curl_init();
        $auth_key = "319797Ak7HzxTsW15e6c86faP1";
        $template_id = '5e6c88d7d6fc0546bb56c85d';
        $extra_param = '';
        $url = "https://api.msg91.com/api/v5/otp?authkey=".$auth_key."&template_id=".$template_id."&extra_param=".$extra_param."&mobile=".$mobile."&";
        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_HTTPHEADER => array(
            "content-type: application/json"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          // echo "cURL Error #:" . $err;
        } else {
            $arr = json_decode($response);
            // print_r($arr);
            // die;
           if($arr->type == "success"){
               $res = array('success' => true,
                    'code' => 200,
                    'IsData'=>false,
                    'message' => "otp sent",
                    );
            }else{
                $res = array('success' => false,
                    'code' => 201,
                    'IsData'=>false,
                    'message' => "opt failed",
                    );
            }
            echo json_encode($res);
        }
    }



    public function show($id)
    {
        return redirect('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //$rolename = Auth::user()->roles()->pluck('name')->implode(' '); 
    //     $user = User::findOrFail($id); 
        
    //     $vendor_id = '0';
    //     $rolename[] = Auth::user()->roles()->pluck('name')->implode(' '); 
    //     if($user->role_id == 18){
    //         $vendor_id = Auth::user()->id;
    //         $rolename[]= "Agent";
    //     }

    //     if($user->role_id == 19){
    //      $vendor_id = Auth::user()->vendor_id; 
    //      $rolename[]= "Representative";
    //     }
        
    //     $users = User::where('CreatedBy',Auth::user()->id)->get();
    //     $roles = Role::where('userid','0')->whereNotIn('name',$rolename)->get();
    //     $page_title = "User List";
    //     $page = "User";
    //     //$roles = Role::where('userid','0')->get();
    //     return view('users.create', compact('user', 'roles','users','page_title','page','vendor_id'));
    // }
    public function change_password($id)
    {
        $user = User::findOrFail($id); 
        $users = User::where('CreatedBy',Auth::user()->id)->get();
        $roles = Role::where('userid','0')->get();
        return view('ui.users.change_password', compact('user', 'roles','users'));
    }
    public function update_password(Request $request)
    {
        $data = $request->all();
        $user = User::findOrFail($data['userId']); 
         $this->validate($request, [
            'password'=>'required|min:6|confirmed',
        ]);
        $input = $request->only(['password']);
        $user->fill($input)->save();
          return redirect()->route('users.index')
            ->with('message',
             'Password update successfully.');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {

    //     $this->validate($request, [
    //         'name'=>'required|max:120',
    //         'email'=>'required|email|unique:users,email,'.$id,
    //         'Phone'=>'required|max:15',
    //         'Designation'=>'required|max:50'
    //     ]);
    //     $user = User::findOrFail($id);
    //     $user->email              = $request->email;
    //     $user->name               = $request->name;
    //     $user->Phone              = $request->Phone;
    //     $user->Designation        = $request->Designation;
    //     $update = $user->save();
        
    //     if ($update) {        
    //         return redirect()->route('users.index')
    //         ->with('message',
    //          'User successfully edited.');
    //     }        
    //     else {
    //         return redirect()->route('users.index')
    //         ->with('error',
    //          'Operation Failed.');
    //     }
    //   }

    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $delete = $user->delete();
        if(isset($delete)) {
        return redirect()->route('users.index')
            ->with('message',
             'User successfully Deleted.');
        }else{
            return redirect()->route('users.index')
            ->with('message',
             'Action Failed Please try again.');
        }
    }

      public function updateUser($id, $keyword){
        
        if($keyword == 'deactive'){
           
            $user = User::findOrFail($id); 
            $updatedata = $user->fill(array('IsActive'=>'0'))->save();
            return redirect('admin/users')->with('message',
             'Deactive Successfully.');
            
        }
        
        if($keyword == 'active'){
            $user = User::findOrFail($id); 
            $updatedata = $user->fill(array('IsActive'=>'1'))->save();
            return redirect('admin/users')->with('message',
             'Active Successfully.');
            
        }
    }
}
