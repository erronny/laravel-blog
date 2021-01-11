<?php

namespace App\Http\Controllers;


use App\General;
use App\Pages;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PagesRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class PageManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagemanager = Pages::get();
        $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('pagemanager.index', compact('pagemanager','settings'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
        

            
            
      
    public function edit($id)
    {
        
        $pagemanager = Pages::findOrFail($id);

        $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('pagemanager.edit', compact('pagemanager','settings'));

    }

    



   
    
    

    public function update(Request $request, $id)
    {
        // $this->validate($request, [
            //     'name'=>'required|min:2',
             // ]);
        $pagemanager = Pages::findOrFail($id);

        
       
        $pagemanager->name         =$request->input('name');
        $pagemanager->url         =$request->input('url');
        $pagemanager->title         =$request->input('title');        
        $pagemanager->detail         =$request->input('detail');
        
       
        $upate = $pagemanager->save();


        if(isset($upate)) {
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    

    
}
