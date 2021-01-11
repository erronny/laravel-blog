<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Language_master;
use Auth;
use App\Tenders;
use App\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
//use Mail;
//use App\Mail\Client as clientMail;
//use App\Websitesetting;

class TendersController extends Controller
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
        $query = Tenders::orderBy('id','DESC');

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
        return view('tenders.index', compact('products','page_title','page'));
    }


    public function viewDetail($id)
    {
        $query = Tenders::orderBy('id','DESC');
        $query->where('id',$id);
        if(isset($_GET['type'])){
            if($_GET['type'] !="all" ){
                $query->where('type',$_GET['type']);
            }
        }
        $product = $query->first();
        $page_title ="Tender Detail";
        $page ="Tender";
        return view('tenders.detail', compact('product','page_title','page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data['error']='';
         $page_title ="Create Tender";
         $page ="Tender Detail";
        return view('tenders.create',compact('data','page_title','page'));
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

      $count = Tenders::where('mobile',$data['mobile'])->count();
      
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

       

        // $count = Tenders::where('loginId',$data['login'])->count();
        
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
              // 'loginId'=>'required|unique:tbl_tender',
          ]);

        
             
              $data = $request->all();
              // print_r($data);
              // die;
              $tender =  Tenders::create([          
                'tenderId'             => $data['tenderId'],
                'InvitingAuthority'            => $data['InvitingAuthority'],
                'PublishedDate'             => $data['PublishedDate'],
                'BidSubmissionEndDate'               => $data['BidSubmissionEndDate'],
                'StartTime'               => $data['StartTime'],
                'EndTime'               => $data['EndTime'],
                'TenderValue'            => $data['TenderValue'],
                'EMD_Ammount'        => $data['EMD_Ammount'],
                'TenderFee'       => $data['TenderFee'],
                'Website'       => $data['Website'],
                'NIT'       => $data['NIT'],
                'Schedule'       => $data['Schedule'],
                'BOQ'       => $data['BOQ'],
                'MoreInfo'       => $data['MoreInfo'],
                'WorkDescription'       => $data['WorkDescription'],
                'department'       => $data['department'],
                'trn'       => $data['trn'],
                'location'       => $data['location'],
                'product_category'       => $data['product_category'],
                'keawords'       => $data['keawords'],
                
                'createdby'            => Auth::user()->id,         
               ]);
             if(isset($tender)) {
              return redirect()->route('tenders.index')
                  ->with('message',
                   'Tender successfully added.');
              }else{
                  return redirect()->route('tenders.create')
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
          $tender = Tenders::findOrFail($id);


          $page_title ="Edit Tender Detail";
          return view('tenders.create', compact('tender','page_title'));
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
              //'loginId'=>'required|unique:tbl_tender,loginId,'.$id,
              ]);
          $tender = Tenders::findOrFail($id);
          //dd($request->file('file'));

          
         
          $tender->tenderId            = $request->input('tenderId');
          $tender->InvitingAuthority            = $request->input('InvitingAuthority');
          $tender->PublishedDate            = $request->input('PublishedDate');
          $tender->BidSubmissionEndDate            = $request->input('BidSubmissionEndDate');
          $tender->StartTime            = $request->input('StartTime');
          $tender->EndTime            = $request->input('EndTime');
          $tender->TenderValue            = $request->input('TenderValue');
          $tender->EMD_Ammount            = $request->input('EMD_Ammount');
          $tender->TenderFee            = $request->input('TenderFee');
          $tender->Website       = $request->input('Website');

          $tender->NIT        = $request->input('NIT');
          $tender->Schedule          = $request->input('Schedule');
          $tender->BOQ       = $request->input('BOQ');
          $tender->MoreInfo   = $request->input('MoreInfo');
          $tender->WorkDescription  = $request->input('WorkDescription');
         

          $upate = $tender->save();


          if(isset($upate)) {
              return redirect()->route('tenders.index')->with('message','Tender successfully Updated.');
          }else{
              return redirect()->route('tenders.index')->with('message','Action Failed Please try again.');
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
          $product   = Tenders::findOrFail($id);
          $delete     = $product->delete();
          if(isset($delete)) {
             return redirect()->route('tenders.index')->with('message','Tender successfully Deleted.');
          }else{
              return redirect()->route('tenders.index')->with('message','Action Failed Please try again.');
          }
      }
      
      
      public function updateTender($id, $keyword){
          if($keyword == 'deactive'){
              $product = Tenders::findOrFail($id); 
              $updatedata = $product->fill(array('IsActive'=>'0'))->save();
              return redirect('admin/tender')->with('message','Deactive Successfully.');   
          }
          if($keyword == 'active'){
              $product = Tenders::findOrFail($id); 
              $updatedata = $product->fill(array('IsActive'=>'1'))->save();
              return redirect('admin/tender')->with('message','Active Successfully.');
              
          }
      }

      public function getTender(){
          $draw = $_REQUEST['draw'];
          $start = $_REQUEST['start'];
          $length = $_REQUEST['length'];
          $searchArray = $_REQUEST['search'];
          // echo json_encode($searchArray);
          // die;
        
          $query = Tenders::orderBy('id','DESC');

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



          $totalCount=Tenders::count();
          $scheduleData = array();
          foreach ($products as $key => $value) {
            $action = "";
            $status = "";
            if($value->IsActive){

            }else{

            }
            
            if(Auth::user()->role_id == Config::get('constants.VENDOR')){
              $str1 = "admin/tenders/".$value->id."/delete";
            $action .='<a class="btn btn-info pull-left " style="margin-right: 3px;"  href="'.URL($str1).'"  title="Delete Tender"><i class="fa fa-trash"></i></a>';
            
            $action .='<a class="btn btn-info pull-left" style="margin-right: 3px;" href="'.URL('admin/tenders/viewDetail/'.$value->id).'"  title="View item detail"><i class="fa fa-list"></i></a> ';
            $str = "admin/tenders/".$value->id."/edit";
            $action .= '<a href="'.URL($str).'" class="btn btn-info pull-left" style="margin-right: 3px;" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>';
          }
          if($value->IsActive){
             if(Auth::user()->role_id == Config::get('constants.VENDOR')){
              $action .='<a href="'.URL('admin/updateTender/'.$value->id.'/deactive').'" class="btn btn-danger pull-left" style="margin-right: 3px;" onclick="return confirm(\'Are You Sure To Dctivated?\')" title="Click to Deactive"><i class="fa fa-ban"></i></a>';
              }
              $status = '<span class="text text-success fa fa-check"></span>';
          }else{
           if(Auth::user()->role_id == Config::get('constants.VENDOR')){ 
              $action .='<a href="'.URL('admin/updateTender/'.$value->id.'/active').'" class="btn btn-success pull-left" style="margin-right: 3px;" onclick="return confirm(\'Are You Sure To Activated?\')" title="Click to Active"><i class="fa fa-check"></i></a>';
            }
              $status = '<span class="text text-danger fa fa-remove"></span>';
           }                                            

            
              $name = '<a href="'.URL('admin/viewDetail/'.$value->id).'">'.$value->contactName.'</a>';
              $result=array(
                    'sno'       =>$key+1,
                    'name'        =>$value->name,
                    'tenderId'        =>$value->tenderId,
                    
                    'PublishedDate'      =>$value->PublishedDate,
                    'BidSubmissionEndDate'   =>$value->BidSubmissionEndDate,
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
