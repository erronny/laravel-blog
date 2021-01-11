<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ContactController extends Controller {
public function insertform(){
return view('ui.contact');
}
public function insert(Request $request){
$name = $request->input('name');
$email = $request->input('email');
$number = $request->input('number');
$message = $request->input('message');

$data=array('name'=>$name,"email"=>$email, "number"=>$number,"message"=>$message);
DB::table('contact')->insert($data);
// echo ('thank you for contacting us, our team get in touch soon');
return view('ui.welcome');

}





}