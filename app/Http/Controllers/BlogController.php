<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\General;

use App\Pages;
use App\Post;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */



    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function contacts()
    // {
    //     return view('ui.contact');
    // }

   





   
    
    

    public function index()
    {
    	$posts = Post::get()->all();
        return view('ui.blog.index', compact('posts'));
    }
    public function post($id)
    {
        
        $settings = General::orderBy('id','desc')->limit('1')->get();

        //$id = str_replace('-',' ',$id); 
        $postquery = Post::orderBy('id','DESC');
        $postquery->where('slug',$id);
        $post = $postquery->first();

        return view('ui.blog.single', compact('post','settings'));
    }





   







    


}

