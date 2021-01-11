<?php

namespace App\Http\Controllers;


use App\General;
use App\Pages;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\PagesRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Pages::get();
        $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('pages.index', compact('pages','settings'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
        

            
            
      
    public function edit($id)
    {
        
        $pages = Pages::findOrFail($id);

        $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('pages.edit', compact('pages','settings'));

    }

    public function create()
    {
        $pages = Pages::get();


        $settings = General::orderBy('id','desc')->limit('1')->get();
        
        

        return view('pages.create', compact('settings','pages'));
    }



    public function store(Request $request)
            {
                $pages = Pages::get();
                  $this->validate($request, [
                       'name'=>'required|min:2'
                      
                      
                  ]);
            
                  $data = $request->all();
                

           
               
            
       
                  $pages = Pages::create([          
                    
                    'name'    => $data['name'],
                    'url'    => $data['url']
                    
                           
                   ]);
                 if(isset($pages)) {
                  return redirect()->route('pages.index')->with('message','Student successfully added.');
                  }else{
                      return redirect()->back();
                  }
            }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pages $pages)
    {
        $pages = Pages::get();
        $settings = General::orderBy('id','desc')->limit('1')->get();

        return view('pages.show', compact('pages','settings'));
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
        // $this->validate($request, [
            //     'name'=>'required|min:2',
             // ]);
        $pages = Pages::findOrFail($id);

        
       
        $pages->name         =$request->input('name');
        
       
        $upate = $pages->save();


        if(isset($upate)) {
            return redirect()->route('pages.index');
        }else{
            return redirect()->back();
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
        $product   = Pages::findOrFail($id);
        $delete     = $product->delete();
        if(isset($delete)) {
           return redirect()->route('pages.index');
        }else{
            return redirect()->back();
        }
    }


    public function updatepages($id, $keyword){
        if($keyword == 'deactive'){
            $product = Pages::findOrFail($id); 
            $updatedata = $product->fill(array('is_published'=>'0'))->save();
            return redirect('admin/pages')->with('message','Deactive Successfully.');   
        }
        if($keyword == 'active'){
            $product = Pages::findOrFail($id); 
            $updatedata = $product->fill(array('is_published'=>'1'))->save();
            return redirect('admin/pages')->with('message','Active Successfully.');
            
        }
    }
}
