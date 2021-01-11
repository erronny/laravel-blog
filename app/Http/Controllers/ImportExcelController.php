<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\BulkImport;
use DB;
use Excel;

class ImportExcelController extends Controller
{
    function index()
    {
     $data = DB::table('tbl_tenders')->orderBy('id', 'DESC')->get();
     return view('import_excel', compact('data'));
    }

    function import(Request $request)
    {

     $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
     ]);

     $path = $request->file('select_file')->getRealPath();

     $data = Excel::import(new BulkImport, $path)->get();

     if($data->count() > 1)
     {
      foreach($data->toArray() as $key => $value)
      {
       foreach($value as $row)
       {
        $insert_data[] = array(
         	'tenderId'     => $row['tenderId'],
            'InvitingAuthority'    => $row['InvitingAuthority'],
            'BidSubmissionEndDate'    => $row['BidSubmissionEndDate'],
            'StartTime'    => $row['StartTime'],
            'EndTime'    => $row['EndTime'],
            'TenderValue'    => $row['TenderValue'],
            'EMD_Ammount'    => $row['EMD_Ammount'],
            'TenderFee'    => $row['TenderFee'],
            'Website'    => $row['Website'],
            'NIT'    => $row['NIT'],
            'Schedule'    => $row['Schedule'],
            'BOQ'    => $row['BOQ'],
            'MoreInfo'    => $row['MoreInfo'],
            'WorkDescription'    => $row['WorkDescription'],
            'department'    => $row['department'],
            'trn'    => $row['trn'],
            'location'    => $row['location'],
            'product_category'    => $row['product_category'],
            'keawords'    => $row['keawords']
        );
       }
      }

      if(!empty($insert_data))
      {
       DB::table('tbl_tenders')->insert($insert_data);
      }
     }
     return back()->with('success', 'Excel Data Imported successfully.');
    }
}