<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class NewUserNotificationController extends Controller
{
    public function show()
    {
    	if(!Auth::check()){
             return redirect('/');
        }
        $userdata = User::where('id','=',Auth::user()->id)->first();

    	$user = User::find(1);
    	return view('admin.notifications', compact('user','userdata'));

    }

    public function MarkAsRead (Request $request)
        {
              //What Do I do Here........
        }
}
