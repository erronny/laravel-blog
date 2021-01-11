<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Address;


class AddressController extends Controller
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

   





   
    
    

    public function edit($id)
    {
        
        $address = Address::findOrFail($id);

       

        return view('address.update', compact('pagemanager'));

    }

    



   
    
    

    public function update(Request $request, $id)
    {
        
        $address = Address::findOrFail($id);

        
       
        
        
        $pagemanager->detail         =$request->input('detail');
        
       
        $upate = $address->save();


        if(isset($upate)) {
            return redirect()->route('address.update');
        }else{
            return redirect()->back();
        }
    }




   







    


}

