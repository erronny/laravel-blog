<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Websitesetting;
class WebsiteController extends Controller
{
    public function index()
    {  
        if(!Auth::check()){
             return redirect('/');
        }
        $userdata = User::where('id','=',Auth::user()->id)->first();
        $webseting = Websitesetting::first();
        return view('admin/websitesetting',compact('webseting', 'userdata'));
    }


    public function websettingupd(Request $request)
    {   
        $this->validate($request, [
            'locktimeout'           => 'required',
        ]);


        $data  = $request->all();
        $websitesetting = Websitesetting::findOrFail($data['id']);
        $websitesetting->fill($data)->save();
        if($websitesetting){
            return \Redirect::back()->with('message','Update Successfully');
        }else{
            return \Redirect::back()->with('message','Action Failed...');
        }
       
    }


}
