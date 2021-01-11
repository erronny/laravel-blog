<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Language_master;
use Auth;
use App\Service4;
use App\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
//use Mail;
//use App\Mail\Client as clientMail;
//use App\Websitesetting;

class Service4Controller extends Controller
{
    public function __construct()
    {
        
    }

    public function setUser(){
      
    }

    

    
      public function edit($id)
      {
          $service = Service4::findOrFail($id);


          $page_title ="Edit Tender Detail";
          return view('services.4', compact('service','page_title'));
      }

      
      public function update(Request $request, $id)
      {
          $this->validate($request, [
              
              ]);
          $service = Service4::findOrFail($id);
          //dd($request->file('file'));

          
         
          // $service->id            = $request->input('id');
          $service->d            = $request->input('d');
          $service->d1            = $request->input('d1');
          $service->d2            = $request->input('d2');
          $service->d3            = $request->input('d3');
          $service->d4            = $request->input('d4');
          $service->d5            = $request->input('d5');
          $service->d6            = $request->input('d6');
          $service->d7            = $request->input('d7');
          $service->d8            = $request->input('d8');
          $service->d9            = $request->input('d9');
          $service->d10            = $request->input('d10');
          $service->d11            = $request->input('d11');
          $service->d12            = $request->input('d12');
          $service->d13            = $request->input('d13');
          $service->d14            = $request->input('d14');
          $service->d15            = $request->input('d15');
          $service->d16            = $request->input('d16');
          $service->d17            = $request->input('d17');
          $service->d18            = $request->input('d18');
          $service->d19            = $request->input('d19');
          $service->d20            = $request->input('d20');
          $service->d21            = $request->input('d21');
          $service->d22            = $request->input('d22');
          $service->d23            = $request->input('d23');
          $service->d24            = $request->input('d24');
          $service->d25            = $request->input('d25');
          $service->d26            = $request->input('d26');
          $service->d27            = $request->input('d27');
          $service->d28            = $request->input('d28');
          $service->d29            = $request->input('d29');
          $service->d30            = $request->input('d30');
          $service->d31            = $request->input('d31');
          $service->d32            = $request->input('d32');
          $service->d33            = $request->input('d33');
          $service->d34            = $request->input('d34');
          $service->d35            = $request->input('d35');
          $service->d36            = $request->input('d36');
          $service->d37            = $request->input('d37');
          $service->d38            = $request->input('d38');
          $service->d39            = $request->input('d39');
          $service->d40            = $request->input('d40');
          $service->d41            = $request->input('d41');
          $service->d42            = $request->input('d42');
          $service->d43            = $request->input('d43');
          // $service->d44            = $request->input('d44');
          // $service->d45            = $request->input('d45');
          // $service->d46            = $request->input('d46');
          // $service->d47            = $request->input('d47');
          // $service->d48            = $request->input('d48');
          // $service->d49            = $request->input('d49');
          // $service->d50            = $request->input('d50');
          // $service->d51           = $request->input('d51');
          // $service->d52           = $request->input('d52');
          // $service->d53            = $request->input('d53');
          // $service->d54            = $request->input('d54');
          // $service->d55            = $request->input('d55');
          // $service->d56            = $request->input('d56');
          // $service->d57            = $request->input('d57');
          // $service->d58            = $request->input('d58');
          // $service->d59            = $request->input('d59');
          // $service->d60            = $request->input('d60');
          // $service->d61            = $request->input('d61');
          // $service->d62            = $request->input('d62');
          // $service->d63            = $request->input('d63');
          // $service->d64            = $request->input('d64');
          // $service->d65            = $request->input('d65');
          // $service->d66            = $request->input('d66');
          // $service->d67            = $request->input('d67');
          // $service->d68            = $request->input('d68');
          // $service->d69            = $request->input('d69');
          // $service->d70            = $request->input('d70');
          // $service->d71            = $request->input('d71');
          // $service->d72            = $request->input('d72');
          // $service->d73            = $request->input('d73');
          // $service->d74            = $request->input('d74');
          // $service->d75            = $request->input('d75');
          // $service->d76            = $request->input('d76');
          // $service->d77            = $request->input('d77');
          // $service->d78            = $request->input('d78');
          // $service->d79            = $request->input('d79');
          // $service->d80            = $request->input('d80');
          // $service->d81            = $request->input('d81');
          // $service->d82            = $request->input('d82');
          // $service->d83            = $request->input('d83');
          // $service->d84            = $request->input('d84');
          // $service->d85            = $request->input('d85');
          // $service->d86            = $request->input('d86');
          // $service->d87            = $request->input('d87');
          // $service->d88            = $request->input('d88');
          // $service->d89            = $request->input('d89');
          // $service->d90            = $request->input('d90');
          // $service->d91            = $request->input('d91');
          // $service->d92            = $request->input('d92');
          // $service->d93            = $request->input('d93');
          // $service->d94            = $request->input('d94');
          // $service->d95            = $request->input('d95');
          // $service->d96            = $request->input('d96');
          // $service->d97            = $request->input('d97');
          // $service->d98            = $request->input('d98');
          // $service->d99            = $request->input('d99');
          // $service->d100            = $request->input('d100');


          


          
         

          $upate = $service->save();


          if(isset($upate)) {
              return redirect('admin/service4/1/edit')->with('message','successfully Updated.');
          }else{
              return redirect()->route('admin/service4/1/edit')->with('message','Action Failed Please try again.');
          }
      }

      

    


}
