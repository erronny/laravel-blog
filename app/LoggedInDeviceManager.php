<?php

namespace App;

use Carbon\Carbon;
use App\User;
use App\Tag;
use App\Comment;
use App\Category;
use App\Subcategory;



public function logoutAllDevicesIncludingMyself(Request $request)
    {
        \DB::table('sessions')
            ->where('user_id', \Auth::user()->id)->delete();

        return redirect('/login');
    }