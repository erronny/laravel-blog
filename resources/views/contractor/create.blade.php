@extends('layouts.master')


@section('content')
<div class="basic-form-area mg-tb-15">
 <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <div class="col-sm-6"><h1>{{$page_title}}</h1></div>
                                    <div class="col-sm-6 text text-right">
                                      <a href="{{ URL("admin/contractor")}}">List</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                

                                        @if(Request::segment(4)==='edit')
                                        {{ Form::model($tender, array('route' => array('contractor.update', $tender->id), 'method' => 'PUT','enctype'=>'multipart/form-data')) }}
                                        <?php  
                                          $id           = $tender->id;
                                          $mobile           = $tender->mobile;
                                          $loginId          = $tender->loginId;
                                          $password         = $tender->password;
                                          $company_name     = $tender->company_name;
                                          
                                          $registrationNo   = $tender->registrationNo;
                                          $address          = $tender->address;
                                          $city             = $tender->city;

                                          $state            = $tender->state;
                                          $panNumber        = $tender->panNumber;
                                          $companyNature    = $tender->companyNature;
                                          $contactName      = $tender->contactName;

                                          $email            = $tender->email;
                                          $contact          = $tender->contact;
                                          $tenderId         = $tender->tenderId;
                                          $tenderTitle      = $tender->tenderTitle;
                                        ?>
                                        @else
                                        {{ Form::open(array('url' => 'admin/contractor','enctype'=>'multipart/form-data','autocomplete'=>"off")) }}

                                        <?php 
                                                                              
                                          $id="";
                                          $mobile="";
                                          $loginId="";
                                          $password="";
                                          $company_name="";
                                          
                                          $registrationNo = '';
                                          $address = "";
                                          $city = "";

                                          $state="";
                                          $panNumber ="";
                                          $companyNature ="";
                                          $contactName ="";

                                          $email ="";
                                          $contact = "";
                                          $tenderId = "";
                                          $tenderTitle = "";

                                        ?>
                                        @endif
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                          <div class="col-sm-4" style="display: none">
                                                                  <label class="pull-right-pro">Mobile No</label>
                                                                  <input type="text" class="form-control" name="mobile" id="mobileChange" value="{{old('mobile')?old('mobile'):$mobile}}" placeholder="Enter Mobile" />
                                                                  <div class="text text-danger" id="mobileErro"></div>
                                                                  @if($errors->has('mobile'))
                                                                    <div class="text text-danger">{{ $errors->first('mobile') }}</div>
                                                                  @endif
                                                          </div>
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Login Id</label>
                                                                  <input type="text" class="form-control" autocomplete="off" name="loginId" id="loginId" value="{{old('loginId')?old('loginId'):$loginId}}" autocomplete="none" placeholder="Enter Login Id" />
                                                                  <div class="text text-danger" id="loginIdError"></div>
                                                                  @if($errors->has('loginId'))
                                                                    <div class="text text-danger">{{ $errors->first('loginId') }}</div>
                                                                  @endif
                                                          </div>

                                                          <div class="col-sm-4"style="display: none">
                                                                  <label class="pull-right-pro">Password</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="password" value="{{old('password')?old('password'):$password}}" placeholder="Enter Password" />
                                                                  @if($errors->has('password'))
                                                                    <div class="text text-danger">{{ $errors->first('password') }}</div>
                                                                  @endif
                                                          </div>

                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Registration No</label>
                                                                  <input type="text" class="form-control" name="registrationNo" id="registrationNo" value="{{old('registrationNo')?old('registrationNo'):$registrationNo}}" placeholder="Enter registration Number" />
                                                                  @if($errors->has('registrationNo'))
                                                                    <div class="text text-danger">{{ $errors->first('registrationNo') }}</div>
                                                                  @endif
                                                          </div>
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Company Name</label>
                                                                  <input type="text" class="form-control" name="company_name" value="{{old('company_name')?old('company_name'):$company_name}}" placeholder="Enter Password" />
                                                                  @if($errors->has('company_name'))
                                                                    <div class="text text-danger">{{ $errors->first('company_name') }}</div>
                                                                  @endif
                                                          </div>

                                                         
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">City</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="city" value="{{old('city')?old('city'):$city}}" placeholder="Enter City" />
                                                                  @if($errors->has('city'))
                                                                    <div class="text text-danger">{{ $errors->first('city') }}</div>
                                                                  @endif
                                                          </div> 
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">State</label>
                                                                  <input type="text" class="form-control" name="state" id="state" value="{{old('state')?old('state'):$state}}" placeholder="Enter state" />
                                                                  @if($errors->has('state'))
                                                                    <div class="text text-danger">{{ $errors->first('state') }}</div>
                                                                  @endif
                                                          </div>
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Pan Number</label>
                                                                  <input type="text" class="form-control" name="panNumber" value="{{old('panNumber')?old('panNumber'):$panNumber}}" placeholder="Enter Pan Number" />
                                                                  @if($errors->has('panNumber'))
                                                                    <div class="text text-danger">{{ $errors->first('panNumber') }}</div>
                                                                  @endif
                                                          </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">

                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Company Nature of Business</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="companyNature" value="{{old('companyNature')?old('companyNature'):$companyNature}}" placeholder="Enter Company Nature" />
                                                                  @if($errors->has('companyNature'))
                                                                    <div class="text text-danger">{{ $errors->first('companyNature') }}</div>
                                                                  @endif
                                                          </div>

                                                           <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Contractor Name</label>
                                                                  <input type="text" class="form-control" name="contactName" value="{{old('contactName')?old('contactName'):$contactName}}" placeholder="Enter Contact Name" />
                                                                  @if($errors->has('contactName'))
                                                                    <div class="text text-danger">{{ $errors->first('contactName') }}</div>
                                                                  @endif
                                                          </div>
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Email</label>
                                                                  <input type="text" class="form-control" name="email" id="email" value="{{old('email')?old('email'):$email}}" placeholder="Enter Email" />
                                                                  @if($errors->has('email'))
                                                                    <div class="text text-danger">{{ $errors->first('email') }}</div>
                                                                  @endif
                                                          </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                         
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Contact/Phone No</label>
                                                                  <input type="text" class="form-control" name="contact" value="{{old('contact')?old('contact'):$contact}}" placeholder="Enter contact/Mobile" />
                                                                  @if($errors->has('contact'))
                                                                    <div class="text text-danger">{{ $errors->first('contact') }}</div>
                                                                  @endif
                                                          </div>

                                                        
                                                            <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Tender Id</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="tenderId" value="{{old('tenderId')?old('tenderId'):$tenderId}}" placeholder="Enter tender Id" />
                                                                  @if($errors->has('tenderId'))
                                                                    <div class="text text-danger">{{ $errors->first('tenderId') }}</div>
                                                                  @endif
                                                          </div>

                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Tender Title</label>
                                                                  <input type="text" class="form-control" name="tenderTitle" value="{{old('tenderTitle')?old('tenderTitle'):$tenderTitle}}" placeholder="Enter Tender Title" />
                                                                  @if($errors->has('tenderTitle'))
                                                                    <div class="text text-danger">{{ $errors->first('tenderTitle') }}</div>
                                                                  @endif
                                                          </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">


                                                         {{--    <div class="col-sm-4">
                                                              <label class="col-sm-12 login2 pull-right pull-right-pro">Status</label>
                                                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <input type="radio" name="status" checked="">Enable
                                                                <input type="radio" name="status">Disable
                                                                  {{-- <input type="text" name="author" class="form-control" value="{{old('author')?old('author'):$author}}" placeholder="Enter Author Name" />                                                               </div>
                                                            </div> --}}

                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                          <div class="col-sm-12">
                                                                  <label class="pull-right-pro">Address</label>
                                                                  {{-- <input type="text" class="form-control" name="address" value="{{old('address')?old('address'):$address}}" placeholder="Enter Address" /> --}}
                                                                  <textarea class="form-control" name="address" placeholder="Enter Address" >{{old('address')?old('address'):$address}}</textarea>
                                                                  @if($errors->has('address'))
                                                                    <div class="text text-danger">{{ $errors->first('address') }}</div>
                                                                  @endif
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-6"></div>
                                                                <div class="col-lg-6">
                                                                    <div class="login-horizental cancel-wp ">
                                                                        <!--<button class="btn btn-white" type="submit">Cancel</button>-->
                                                                        <button class="btn btn-sm btn-primary login-submit-cs pull-centre" type="submit">Save</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
@endsection
@section('extrajs')
<style>
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
</style>
 <link rel="stylesheet" href="{{ asset('assets/css/form/all-type-forms.css')}}">

  <script type="text/javascript">

// $('#mobileChange').keyup(function(){
//     var flag = false;
   

//     var mobile = ($(this).val());

//     console.log('mobile',mobile);
//     var pattern = /^[7-9][0-9]{9}$/;
//     if(pattern.test(mobile)){
//       console.log('valid mobile number');
//       flag = true;
//     }else{
//       console.log('invallid  mobile number');
//       flag = false;
//     }
    
//     var _token = "{{ csrf_token() }}";
//     if(flag){
//       $.ajax({
//         type: "POST",
//         url: "{{ URL('admin/checkMobile') }}",
//         data:{
//             _token:_token,
//             mobile:mobile,
//           },
//         beforeSend(xhr){
//             //alert('before');
//         },
//         success: function(result){
//           flag = true;
//           console.log(result);
//           var obj = JSON.parse(result);
//           console.log(obj);
//           if(obj.status == "success"){
//             console.log('success');
//             //$('#myModal').modal('hide');
//             //window.location.reload();
//             $('#mobileErro').html(obj.message);
//           }
//           if(obj.status == "failed"){
//             console.log('failed');
//             $('#mobileErro').html(obj.message);
//           }
//              //console.log(result);
//         },error: function(data){
//                 //alert("error");
//         },complete: function(){
//                 //alert('complete');
//         } 
//       }); 
//     }
//    //return flag; 
// });


$('#loginId').keyup(function(){
    var flag = true;
   

    var login = ($(this).val());

    console.log('mobile',login);
    
    var _token = "{{ csrf_token() }}";
    var id = "{{ $id }}";
    if(flag){
      $.ajax({
        type: "POST",
        url: "{{ URL('admin/checklogin') }}",
        data:{
            _token:_token,
            loginId:login,
            id:id,
          },
        beforeSend(xhr){
            //alert('before');
        },
        success: function(result){
          flag = true;
          console.log(result);
          var obj = JSON.parse(result);
          console.log(obj);
          if(obj.status == "success"){
            console.log('success');
            //$('#myModal').modal('hide');
            //window.location.reload();
            //$('#loginIdError').html(obj.message);
            $('#loginIdError').html("");
          }
          if(obj.status == "failed"){
            console.log('failed');
            $('#loginIdError').html("This login id is already registred");
          }
             //console.log(result);
        },error: function(data){
                //alert("error");
        },complete: function(){
                //alert('complete');
        } 
      }); 
    }
   //return flag; 
});
  </script>

@endsection