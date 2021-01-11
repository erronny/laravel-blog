<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class viewcontactcontroller extends Controller {
public function index(){
$contact = DB::select('select * from contact');
return view('contacts.view_contact',['contact'=>$contact]);
}
}