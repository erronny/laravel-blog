<?php

namespace App\Http\Controllers;


use Auth;
use App\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;



class LoggedInDeviceManagerController extends Controller
{

    /**
     * Display a listing of the currently logged in devices.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::check()){
             return redirect('/');
        }
        $userdata = User::where('id','=',Auth::user()->id)->first();

        $devices = \DB::table('sessions')
            ->where('user_id', \Auth::user()->id)
            ->get()->reverse();

        return view('admin.device_list')
                ->with('devices', $devices)
                ->with('userdata', $userdata)
                ->with('current_session_id', \Session::getId());
    }


    /**
     * Logout a session based on session id.
     *
     * @return \Illuminate\Http\Response
     */
    public function logoutDevice(Request $request, $device_id)
    {

        \DB::table('sessions')
            ->where('id', $device_id)->delete();

        return redirect('/logged-in-devices');
    }



    /**
     * Logouts a user from all other devices except the current one.
     *
     * @return \Illuminate\Http\Response
     */
    public function logoutAllDevices(Request $request)
    {
        \DB::table('sessions')
            ->where('user_id', \Auth::user()->id)
            ->where('id', '!=', \Session::getId())->delete();

        return redirect('/logged-in-devices');
    }

}