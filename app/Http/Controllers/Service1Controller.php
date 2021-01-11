<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Language_master;
use Auth;
use App\Service1;
use App\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
//use Mail;
//use App\Mail\Client as clientMail;
//use App\Websitesetting;

class Service1Controller extends Controller
{
    public function __construct()
    {
        
    }

    public function setUser(){
      
    }

    

    
      public function edit($id)
      {
          $service = Service1::findOrFail($id);
          $services = Service1::orderBy('id','desc')->limit('1')->get();
          $page_title ="Edit Tender Detail";
          return view('services.1', compact('services','service','page_title'));
      }

      
      public function update(Request $request, $id)
      {
          $this->validate($request, [
              //'mobile'=>'required|unique:tbl_tender,mobile,'.$id,
              //'loginId'=>'required|unique:tbl_tender,loginId,'.$id,
              ]);
          $service = Service1::findOrFail($id);
          //dd($request->file('file'));

          
         
          $path = 'assets/services/images/';        
                $destinationPath    = $path;
                $img1_file         =$request->file('image1');
                $img1 = '';
                if($img1_file){
                $file_size = $img1_file->getSize();
                    
                    $img1_name         = $img1_file->getClientOriginalName();
                    $extention          = $img1_file->getClientOriginalExtension();
                    $img1 = value(function() use ($img1_file){
                    $filename = time().'.'. $img1_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $img1_file->move($destinationPath, $img1);

        $service->img1            = $img1;
        }

        $path2 = 'assets/services1/images/';        
                $destinationPath2    = $path2;
                $img2_file         =$request->file('image2');
                $img2 = '';
                if($img2_file){
                $file_size = $img2_file->getSize();
                    
                    $img2_name         = $img2_file->getClientOriginalName();
                    $extention          = $img2_file->getClientOriginalExtension();
                    $img2 = value(function() use ($img2_file){
                    $filename = time().'.'. $img2_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $img2_file->move($destinationPath2, $img2);

        $service->img2            = $img2;
        }

        $path3 = 'assets/services2/images/';        
                $destinationPath3    = $path3;
                $img3_file         =$request->file('image3');
                $img3 = '';
                if($img3_file){
                $file_size = $img3_file->getSize();
                    
                    $img3_name         = $img3_file->getClientOriginalName();
                    $extention          = $img3_file->getClientOriginalExtension();
                    $img3 = value(function() use ($img3_file){
                    $filename = time().'.'. $img3_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $img3_file->move($destinationPath3, $img3);

        $service->img3            = $img3;
        }

        $path4 = 'assets/services4/images/';        
                $destinationPath4    = $path4;
                $img4_file         =$request->file('image4');
                $img4 = '';
                if($img4_file){
                $file_size = $img4_file->getSize();
                    
                    $img4_name         = $img4_file->getClientOriginalName();
                    $extention          = $img4_file->getClientOriginalExtension();
                    $img4 = value(function() use ($img4_file){
                    $filename = time().'.'. $img4_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $img4_file->move($destinationPath4, $img4);

        $service->img4            = $img4;
        }

        $path5 = 'assets/services5/images/';        
                $destinationPath5    = $path5;
                $img5_file         =$request->file('image5');
                $img5 = '';
                if($img5_file){
                $file_size = $img5_file->getSize();
                    
                    $img5_name         = $img5_file->getClientOriginalName();
                    $extention          = $img5_file->getClientOriginalExtension();
                    $img5 = value(function() use ($img5_file){
                    $filename = time().'.'. $img5_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $img5_file->move($destinationPath5, $img5);

        $service->img5            = $img5;
        }
        $path6 = 'assets/services6/images/';        
                $destinationPath6    = $path6;
                $img6_file         =$request->file('image6');
                $img6 = '';
                if($img6_file){
                $file_size = $img6_file->getSize();
                    
                    $img6_name         = $img6_file->getClientOriginalName();
                    $extention          = $img6_file->getClientOriginalExtension();
                    $img6 = value(function() use ($img6_file){
                    $filename = time().'.'. $img6_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $img6_file->move($destinationPath6, $img6);

        $service->img6            = $img6;
        }
        $path7 = 'assets/services7/images/';        
                $destinationPath7    = $path7;
                $img7_file         =$request->file('image7');
                $img7 = '';
                if($img7_file){
                $file_size = $img7_file->getSize();
                    
                    $img7_name         = $img7_file->getClientOriginalName();
                    $extention          = $img7_file->getClientOriginalExtension();
                    $img7 = value(function() use ($img7_file){
                    $filename = time().'.'. $img7_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $img7_file->move($destinationPath7, $img7);

        $service->img7            = $img7;
        }
        $path8 = 'assets/services8/images/';        
                $destinationPath8    = $path8;
                $img8_file         =$request->file('image8');
                $img8 = '';
                if($img8_file){
                $file_size = $img8_file->getSize();
                    
                    $img8_name         = $img8_file->getClientOriginalName();
                    $extention          = $img8_file->getClientOriginalExtension();
                    $img8 = value(function() use ($img8_file){
                    $filename = time().'.'. $img8_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $img8_file->move($destinationPath8, $img8);

        $service->img8           = $img8;
        }
        $path9 = 'assets/services9/images/';        
                $destinationPath9    = $path9;
                $img9_file         =$request->file('image9');
                $img9 = '';
                if($img9_file){
                $file_size = $img9_file->getSize();
                    
                    $img9_name         = $img9_file->getClientOriginalName();
                    $extention          = $img9_file->getClientOriginalExtension();
                    $img9 = value(function() use ($img9_file){
                    $filename = time().'.'. $img9_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $img9_file->move($destinationPath9, $img9);

        $service->img9          = $img9;
        }

        $path10 = 'assets/services10/images/';        
                $destinationPath10    = $path10;
                $img10_file         =$request->file('image10');
                $img10 = '';
                if($img10_file){
                $file_size = $img10_file->getSize();
                    
                    $img10_name         = $img10_file->getClientOriginalName();
                    $extention          = $img10_file->getClientOriginalExtension();
                    $img10 = value(function() use ($img10_file){
                    $filename = time().'.'. $img10_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $img10_file->move($destinationPath10, $img10);

        $service->img10          = $img10;
        }
        $path11 = 'assets/services11/images/';        
                $destinationPath11    = $path11;
                $img11_file         =$request->file('image11');
                $img11 = '';
                if($img11_file){
                $file_size = $img11_file->getSize();
                    
                    $img11_name         = $img11_file->getClientOriginalName();
                    $extention          = $img11_file->getClientOriginalExtension();
                    $img11 = value(function() use ($img11_file){
                    $filename = time().'.'. $img11_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $img11_file->move($destinationPath11, $img11);

        $service->img11          = $img11;
        }



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
          // $service->d40            = $request->input('d40');
          $service->d41            = $request->input('d41');
          // $service->d42            = $request->input('d42');
          $service->d43            = $request->input('d43');
          // $service->d44            = $request->input('d44');
          $service->d45            = $request->input('d45');
          $service->d46            = $request->input('d46');
          $service->d47            = $request->input('d47');
          $service->d48            = $request->input('d48');

          $service->d49            = $request->input('d49');
          $service->d50            = $request->input('d50');
          $service->d51            = $request->input('d51');


          


          
         

          $upate = $service->save();


          if(isset($upate)) {
              return redirect('admin/service/1/edit')->with('message','successfully Updated.');
          }else{
              return redirect()->route('service.edit')->with('message','Action Failed Please try again.');
          }
      }

      

    


}
