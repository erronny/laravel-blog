<?php

namespace App\Http\Controllers;
use Excel;
use App\Imports\TendersImport;
use App\Exports\TenderExport;
use App\Tenders;

use Illuminate\Http\Request;

class ImportExportController extends Controller
{
     public function importExportView()
    {
    	$data = Tenders::get();
    	$page_title ="Import Exports Tender";
         $page ="Import Exports Detail";
       return view('uploadbulk.importexport',compact('data','page_title','page'));
    }

     public function export() 
    {
        return Excel::download(new TenderExport, 'tenders.xlsx');
    }



    public function import(Request $request) 
    {
    	$this->validate($request, [
      'file'  => 'required|mimes:xls,xlsx'
     ]);

 
        Excel::import(new TendersImport,request()->file('file')->store('temp'));
           
        return back()->with('success', 'Excel Data Imported successfully.');
    }
}
