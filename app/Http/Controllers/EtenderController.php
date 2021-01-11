<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tenders;

class EtenderController extends Controller
{
    
   


    public function etender()
    {
        $etenders = Tenders::get()->all();
    
        return view('ui.etender', compact('etenders'));
    }

}


   