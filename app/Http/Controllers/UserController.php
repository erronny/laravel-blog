<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;
use Mail;
use Validator;
//use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
    public function index($key='reprasentative')
    {   
        if(!Auth::check()){
             return redirect('/');
        }
        $userdata = User::where('id','=',Auth::user()->id)->first();
        $rolename = Auth::user()->roles()->pluck('name')->implode(' ');
        $users = User::with(['roleName'])->where('CreatedBy',Auth::user()->id)->get();
        $page_title = "User List";
        $page = "User";
        return view('users.index',compact('users','key','page_title','page','userdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id='')
    {
        $vendor_id = '0';
        $rolename[] = Auth::user()->roles()->pluck('name')->implode(' '); 
        if($id == "represntative"){
            $vendor_id = Auth::user()->id;
            $rolename[]= "Agent";
        }
        if($id == "agent"){
         $vendor_id = Auth::user()->vendor_id; 
         $rolename[]= "Representative";
        }
        
        $users = User::where('CreatedBy',Auth::user()->id)->get();
        $roles = Role::where('userid','0')->whereNotIn('name',$rolename)->get();
        $page_title = "User Create";
        $page = "User";
        return view('users.create',compact('users','roles','vendor_id','page_title','page'));
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
              'role_id' =>$usertype,
              'vendor_id' =>$data['vendor_id'],
              'name' =>$data['name'],
              'email' =>$data['email'],
              'Phone' =>$data['Phone'],
              'password' => '123123',
              'IsVerify' => '1',
              'Designation' =>$data['Designation'],
              'CreatedBy' =>Auth::user()->id
        ]);
        $code = 'u'.date('Y').$user->id;
        User::where('id',$user->id)->update(['user_code'=>$code]);


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

        return redirect()->route('users.index')->with('message','User successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function edit($id)
    {
        //$rolename = Auth::user()->roles()->pluck('name')->implode(' '); 
        if(!Auth::check()){
             return redirect('/');
        }
        $userdata = User::where('id','=',Auth::user()->id)->first();
        $user = User::findOrFail($id); 
        
        $vendor_id = '0';
        $rolename[] = Auth::user()->roles()->pluck('name')->implode(' '); 
        if($user->role_id == 18){
            $vendor_id = Auth::user()->id;
            $rolename[]= "Agent";
        }

        if($user->role_id == 19){
         $vendor_id = Auth::user()->vendor_id; 
         $rolename[]= "Representative";
        }
        
        $users = User::where('CreatedBy',Auth::user()->id)->get();
        $roles = Role::where('userid','0')->whereNotIn('name',$rolename)->get();
        $page_title = "User List";
        $page = "User";
        //$roles = Role::where('userid','0')->get();
        return view('users.create', compact('user', 'roles','users','page_title','page','vendor_id','userdata'));
    }
    public function change_password($id)
    {
        $user = User::findOrFail($id); 
        $users = User::where('CreatedBy',Auth::user()->id)->get();
        $roles = Role::where('userid','0')->get();
        return view('users.change_password', compact('user', 'roles','users'));
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
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$id,
            'Phone'=>'required|max:15',
            'Designation'=>'required|max:50'
        ]);
        $user = User::findOrFail($id);
        $user->email              = $request->email;
        $user->name               = $request->name;
        $user->Phone              = $request->Phone;
        $user->Designation        = $request->Designation;
        $update = $user->save();
        
        if ($update) {        
            return redirect()->route('users.index')
            ->with('message',
             'User successfully edited.');
        }        
        else {
            return redirect()->route('users.index')
            ->with('error',
             'Operation Failed.');
        }
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
