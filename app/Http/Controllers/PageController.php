<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\General;
use App\Pages;
use App\Service1;
use App\Service2;
use App\Service3;
use App\Service4;
use App\Service5;
use App\Service6;
use App\Service7;

use App\Service8;
use App\Service9;
use App\Service10;
use App\Service11;
use App\Servic12;
use App\Service13;


class PageController extends Controller
{
    
    public function uipages($name)
    
    {
        


       
        
        $name = str_replace('-',' ',$name); 
        $query = Pages::orderBy('id','DESC');
        $query->where('name','=',$name);
        $pages = $query->first();
       
        
    return view('ui.pages', compact('pages'));
}
    


   
    
    

    public function homes()
    {
        return view('ui.welcome');
    }


     public function invidual_combo()
    {
        $services = Service2::orderBy('id','desc')->limit('1')->get();
        return view('ui.invidual_combo', compact('services'));
    }

    
     public function invidual_signing()
    {
        $services = Service1::orderBy('id','desc')->limit('1')->get();
        return view('ui.invidual_signing', compact('services'));
    }

    

     public function organization_combo()
    {
        $services = Service3::orderBy('id','desc')->limit('1')->get();
        return view('ui.organization_combo', compact('services'));
    }

     public function organization_signing()
    {
        $services = Service4::orderBy('id','desc')->limit('1')->get();
        return view('ui.organization_signing', compact('services'));
    }

     public function document_signer()
    {
        $services = Service5::orderBy('id','desc')->limit('1')->get();
        return view('ui.document_signer', compact('services'));
    }

    public function foreign_signing()
    {
        $services = Service6::orderBy('id','desc')->limit('1')->get();
        return view('ui.foreign_signing', compact('services'));
    }
    public function service7()
    {
        $services = Service7::orderBy('id','desc')->limit('1')->get();
        return view('ui.service7', compact('services'));
    }
    
    public function service8()
    {
        $services = Service8::orderBy('id','desc')->limit('1')->get();
        return view('ui.service8', compact('services'));
    }
    public function service9()
    {
        $services = Service9::orderBy('id','desc')->limit('1')->get();
        return view('ui.service9', compact('services'));
    }
    public function service10()
    {
        $services = Service10::orderBy('id','desc')->limit('1')->get();
        return view('ui.service10', compact('services'));
    }
    public function service11()
    {
        $services = Service11::orderBy('id','desc')->limit('1')->get();
        return view('ui.service11', compact('services'));
    }
    public function service12()
    {
        
        return view('ui.service12');
    }
    public function service13()
    {
        $services = Service13::orderBy('id','desc')->limit('1')->get();
        return view('ui.service13', compact('services'));
    }

    public function demo()
    {
        return view('ui.demo');
    }
    public function dgft()
    {
        return view('ui.dgft');
    }
    public function etender()
    {
        return view('ui.e-tender');
    }
    public function gst()
    {
        return view('ui.gst');
    }

    public function search()
    {
        return view('ui.blog.search');
    }
    


     







    
    public function dashboard()
    {
        return view('ui.admin.dashboard');
    }





   







    


}

