<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Language_master;
use Auth;
use App\Contractor;
use App\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
//use Mail;
//use App\Mail\Client as clientMail;
//use App\Websitesetting;

class ContractorController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['auth', 'clearance']);
      //self::setUser();
    }

    public function setUser(){
      
    }

    public function index()
    {
        $query = Contractor::orderBy('id','DESC');

        if(isset($_GET['type'])){
            if($_GET['type'] !="all" ){
                $query->where('type',$_GET['type']);
            }
        }
       // $query->where('createdby',Auth::user()->id);
        $products = $query->get();
        $page_title ="University List";
       //dd($products);
         $page_title ="Product List";
        $page ="Product";
        return view('contractor.index', compact('products','page_title','page'));
    }


    public function viewDetail($id)
    {
        $query = Contractor::orderBy('id','DESC');
        $query->where('id',$id);
        if(isset($_GET['type'])){
            if($_GET['type'] !="all" ){
                $query->where('type',$_GET['type']);
            }
        }
        $product = $query->first();
        $page_title ="Contractor Detail";
        $page ="Contractor";
        return view('contractor.detail', compact('product','page_title','page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data['error']='';
         $page_title ="Create Contractor Detail";
         $page ="Contractor Detail";
        return view('contractor.create',compact('data','page_title','page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function checkMobile(Request $request)
    {
      
      $validator = Validator::make($request->all(), [
           'mobile' => 'required|min:10|max:10'
        ]);

        if ($validator->fails()) {
            $response = array('status'=>'failed','code'=>401,'message'=>'mobile required','error'=>$validator->errors());
            echo json_encode($response);
            die;
        }

      $data = $request->all();

      $count = Contractor::where('mobile',$data['mobile'])->count();
      
      if($count){
        $response = array('status'=>'failed','code'=>401,'message'=>'This Mobile Already Exist');
      }else{        
        $response = array('status'=>'success','code'=>200,'message'=>'valid mobile number');
      }
      return json_encode($response);
    }


   public function checklogin(Request $request)
      {
        $data = $request->all();
        $id = $data['id'];
        if($id == ''){
          $validator = Validator::make($request->all(), [
          'loginId' => 'required|unique:tbl_tender'
          ]);
        }else{

          $validator = Validator::make($request->all(), [
            'loginId' => 'required|unique:tbl_tender,loginId,'.$id,
          ]);
          // $this->validate($request, [
          // 'loginId'=>'required|unique:tbl_tender,mobile,'.$id,
          // ]);
        }

        if ($validator->fails()) {
            $response = array('status'=>'failed','code'=>401,'message'=>'invalid login','error'=>$validator->errors());
            echo json_encode($response);
            die;
        }

       

        // $count = Contractor::where('loginId',$data['login'])->count();
        
        // if($count){
        //   $response = array('status'=>'failed','code'=>401,'message'=>'This Login Already Exist');
        // }else{        
        //   $response = array('status'=>'success','code'=>200,'message'=>'valid Login Detail');
        // }
        $response = array('status'=>'success','code'=>200,'message'=>'valid Login Detail');
        return json_encode($response);
      }


      public function store(Request $request)
      {
        

          $this->validate($request, [
              //'mobile'=>'required|unique:tbl_tender|min:10|max:10',
              'loginId'=>'required|unique:tbl_tender',
          ]);

        
             
              $data = $request->all();
              // print_r($data);
              // die;
              $tender =  Contractor::create([          
                'mobile'             => $data['mobile'],
                'loginId'            => $data['loginId'],
                'password'             => $data['password'],
                'company_name'               => $data['company_name'],
                'registrationNo'            => $data['registrationNo'],
                'address'        => $data['address'],
                'city'       => $data['city'],
                'state'       => $data['state'],
                'panNumber'       => $data['panNumber'],
                'tenderTitle'       => $data['tenderTitle'],
                'companyNature'       => $data['companyNature'],
                'contactName'       => $data['contactName'],
                'email'       => $data['email'],
                'contact'       => $data['contact'],
                'tenderId'       => $data['tenderId'],
                'createdby'            => Auth::user()->id,         
               ]);
             if(isset($tender)) {
              return redirect()->route('contractor.create')
                  ->with('message',
                   'contractor successfully added.');
              }else{
                  return redirect()->route('contractor.create')
                  ->with('error',
                   'Action Failed Please try again.');
              }
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
          
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
          $tender = Contractor::findOrFail($id);


          $page_title ="Edit Tender Detail";
          return view('contractor.create', compact('tender','page_title'));
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
          $this->validate($request, [
              //'mobile'=>'required|unique:tbl_tender,mobile,'.$id,
              'loginId'=>'required|unique:tbl_tender,loginId,'.$id,
              ]);
          $tender = Contractor::findOrFail($id);
          //dd($request->file('file'));

          
          $tender->mobile            = $request->input('mobile');
          $tender->loginId            = $request->input('loginId');
          $tender->password            = $request->input('password');
          $tender->company_name            = $request->input('company_name');
          $tender->registrationNo            = $request->input('registrationNo');
          $tender->address            = $request->input('address');
          $tender->city            = $request->input('city');
          $tender->state            = $request->input('state');
          $tender->contact       = $request->input('contact');

          $tender->email        = $request->input('email');
          $tender->contactName          = $request->input('contactName');
          $tender->companyNature       = $request->input('companyNature');
          $tender->tenderTitle   = $request->input('tenderTitle');
          $tender->panNumber  = $request->input('panNumber');
          $tender->tenderId  = $request->input('tenderId');

          $upate = $tender->save();


          if(isset($upate)) {
              return redirect()->route('contractor.index')->with('message','contractor successfully Updated.');
          }else{
              return redirect()->route('contractor.index')->with('message','Action Failed Please try again.');
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
          $product   = Contractor::findOrFail($id);
          $delete     = $product->delete();
          if(isset($delete)) {
             return redirect()->route('contractor.index')->with('message','Contractor successfully Deleted.');
          }else{
              return redirect()->route('contractor.index')->with('message','Action Failed Please try again.');
          }
      }
      
      
      public function updateContractor($id, $keyword){
          if($keyword == 'deactive'){
              $product = Contractor::findOrFail($id); 
              $updatedata = $product->fill(array('IsActive'=>'0'))->save();
              return redirect('admin/contractor')->with('message','Deactive Successfully.');   
          }
          if($keyword == 'active'){
              $product = Contractor::findOrFail($id); 
              $updatedata = $product->fill(array('IsActive'=>'1'))->save();
              return redirect('admin/contractor')->with('message','Active Successfully.');
              
          }
      }

      public function getContractor(){
          $draw = $_REQUEST['draw'];
          $start = $_REQUEST['start'];
          $length = $_REQUEST['length'];
          $searchArray = $_REQUEST['search'];
          // echo json_encode($searchArray);
          // die;
        
          $query = Contractor::orderBy('id','DESC');

            if($searchArray['value'] !="" ){
                //$query->where('mobile',$_REQUEST['mobile']);
                $query->where('mobile', 'LIKE', '%' . $searchArray['value'] . '%');
                $query->orWhere('email', 'LIKE', '%' . $searchArray['value'] . '%');
                $query->orWhere('contactName', 'LIKE', '%' . $searchArray['value'] . '%');
                $query->orWhere('company_name', 'LIKE', '%' . $searchArray['value'] . '%');
            }
       
          if(isset($_REQUEST['status'])){
              if($_REQUEST['status'] !="all" && $_REQUEST['status'] !="" ){
                  //$query->where('mobile',$_REQUEST['mobile']);
                  $query->where('IsActive', $_REQUEST['status']);;
              }
          }

          if(isset($_REQUEST['mobile'])){
              if($_REQUEST['mobile'] !="all" && $_REQUEST['mobile'] !="" ){
                  //$query->where('mobile',$_REQUEST['mobile']);
                  $query->where('mobile', 'LIKE', '%' . $_REQUEST['mobile'] . '%');;
              }
          }

          if(isset($_REQUEST['email'])){
              if($_REQUEST['email'] !="all" && $_REQUEST['email'] !="" ){
                  $query->where('email',$_REQUEST['email']);
              }
          }

          if(isset($_REQUEST['contrator_name'])){
              if($_REQUEST['contrator_name'] !="all" && $_REQUEST['contrator_name'] !="" ){
                  $query->where('contactName',$_REQUEST['contrator_name']);
              }
          }

          if(isset($_REQUEST['company_name'])){
              if($_REQUEST['company_name'] !="all" && $_REQUEST['company_name'] !="" ){
                  $query->where('company_name',$_REQUEST['company_name']);
              }
          }
          //$query->where('createdby',Auth::user()->id);
          $products = $query->get();



          $totalCount=Contractor::count();
          $scheduleData = array();
          foreach ($products as $key => $value) {
            $action = "";
            $status = "";
            if($value->IsActive){

            }else{

            }
            
            if(Auth::user()->role_id == Config::get('constants.VENDOR')){
            $str1 = "admin/contractor/".$value->id."/delete";
            $action .='<a class="btn btn-info pull-left " style="margin-right: 3px;"  href="'.URL($str1).'"  title="Delete Contractor"><i class="fa fa-trash"></i></a>';
            
            $action .='<a class="btn btn-info pull-left" style="margin-right: 3px;" href="'.URL('admin/contractor/viewDetail/'.$value->id).'"  title="View item detail"><i class="fa fa-list"></i></a> ';
            $str = "admin/contractor/".$value->id."/edit";
            $action .= '<a href="'.URL($str).'" class="btn btn-info pull-left" style="margin-right: 3px;" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>';
          }
          if($value->IsActive){
             if(Auth::user()->role_id == Config::get('constants.VENDOR')){
              $action .='<a href="'.URL('admin/updateContractor/'.$value->id.'/deactive').'" class="btn btn-danger pull-left" style="margin-right: 3px;" onclick="return confirm(\'Are You Sure To Dctivated?\')" title="Click to Deactive"><i class="fa fa-ban"></i></a>';
              }
              $status = '<span class="text text-success fa fa-check"></span>';
          }else{
           if(Auth::user()->role_id == Config::get('constants.VENDOR')){ 
              $action .='<a href="'.URL('admin/updateContractor/'.$value->id.'/active').'" class="btn btn-success pull-left" style="margin-right: 3px;" onclick="return confirm(\'Are You Sure To Activated?\')" title="Click to Active"><i class="fa fa-check"></i></a>';
            }
              $status = '<span class="text text-danger fa fa-remove"></span>';
           }                                            

            // $image = "assets/gallery.png";
            // if($value->defaultImage->url){
            //     $image = "assets/img/product/".$value->defaultImage->url;
            // }
             // $imageUrl = '<img class="img-circle" src="'.asset($image).'" alt="product image" />';
              $name = '<a href="'.URL('admin/viewDetail/'.$value->id).'">'.$value->contactName.'</a>';
              $result=array(
                    'sno'       =>$key+1,
                    'name'        =>$value->contactName,
                    'mobile'        =>$value->contact,
                    'email'      =>$value->email,
                    'companyName'   =>$value->company_name,
                    'status'      =>$status,
                    'action'      =>$action
              );
              $scheduleData[] =$result;
          }

          $data=array(
            "draw"            => $draw,
            "recordsTotal"    => $totalCount,
            "recordsFiltered" => $totalCount,
            "data"            =>$scheduleData
          );

          echo json_encode($data);
    }

    


}
