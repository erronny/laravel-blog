<?php $__env->startSection('content'); ?>
<div class="basic-form-area mg-tb-15">
 <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <div class="col-sm-6"><h1><?php echo e($page_title); ?></h1></div>
                                    <div class="col-sm-6 text text-right">
                                      <a href="<?php echo e(URL("admin/product")); ?>">List</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                

                                        <?php if(Request::segment(4)==='edit'): ?>
                                        <?php echo e(Form::model($tender, array('route' => array('tender.update', $tender->id), 'method' => 'PUT','enctype'=>'multipart/form-data'))); ?>

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
                                        <?php else: ?>
                                        <?php echo e(Form::open(array('url' => 'admin/tender','enctype'=>'multipart/form-data','autocomplete'=>"off"))); ?>


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
                                        <?php endif; ?>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                          <div class="col-sm-4" style="display: none">
                                                                  <label class="pull-right-pro">Mobile No</label>
                                                                  <input type="text" class="form-control" name="mobile" id="mobileChange" value="<?php echo e(old('mobile')?old('mobile'):$mobile); ?>" placeholder="Enter Mobile" />
                                                                  <div class="text text-danger" id="mobileErro"></div>
                                                                  <?php if($errors->has('mobile')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('mobile')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Login Id</label>
                                                                  <input type="text" class="form-control" autocomplete="off" name="loginId" id="loginId" value="<?php echo e(old('loginId')?old('loginId'):$loginId); ?>" autocomplete="none" placeholder="Enter Login Id" />
                                                                  <div class="text text-danger" id="loginIdError"></div>
                                                                  <?php if($errors->has('loginId')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('loginId')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                          <div class="col-sm-4"style="display: none">
                                                                  <label class="pull-right-pro">Password</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="password" value="<?php echo e(old('password')?old('password'):$password); ?>" placeholder="Enter Password" />
                                                                  <?php if($errors->has('password')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('password')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Registration No</label>
                                                                  <input type="text" class="form-control" name="registrationNo" id="registrationNo" value="<?php echo e(old('registrationNo')?old('registrationNo'):$registrationNo); ?>" placeholder="Enter registration Number" />
                                                                  <?php if($errors->has('registrationNo')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('registrationNo')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Company Name</label>
                                                                  <input type="text" class="form-control" name="company_name" value="<?php echo e(old('company_name')?old('company_name'):$company_name); ?>" placeholder="Enter Password" />
                                                                  <?php if($errors->has('company_name')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('company_name')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                         
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">City</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="city" value="<?php echo e(old('city')?old('city'):$city); ?>" placeholder="Enter City" />
                                                                  <?php if($errors->has('city')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('city')); ?></div>
                                                                  <?php endif; ?>
                                                          </div> 
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">State</label>
                                                                  <input type="text" class="form-control" name="state" id="state" value="<?php echo e(old('state')?old('state'):$state); ?>" placeholder="Enter state" />
                                                                  <?php if($errors->has('state')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('state')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Pan Number</label>
                                                                  <input type="text" class="form-control" name="panNumber" value="<?php echo e(old('panNumber')?old('panNumber'):$panNumber); ?>" placeholder="Enter Pan Number" />
                                                                  <?php if($errors->has('panNumber')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('panNumber')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">

                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Company Nature of Business</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="companyNature" value="<?php echo e(old('companyNature')?old('companyNature'):$companyNature); ?>" placeholder="Enter Company Nature" />
                                                                  <?php if($errors->has('companyNature')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('companyNature')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                           <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Contractor Name</label>
                                                                  <input type="text" class="form-control" name="contactName" value="<?php echo e(old('contactName')?old('contactName'):$contactName); ?>" placeholder="Enter Contact Name" />
                                                                  <?php if($errors->has('contactName')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('contactName')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Email</label>
                                                                  <input type="text" class="form-control" name="email" id="email" value="<?php echo e(old('email')?old('email'):$email); ?>" placeholder="Enter Email" />
                                                                  <?php if($errors->has('email')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('email')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                         
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Contact/Phone No</label>
                                                                  <input type="text" class="form-control" name="contact" value="<?php echo e(old('contact')?old('contact'):$contact); ?>" placeholder="Enter contact/Mobile" />
                                                                  <?php if($errors->has('contact')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('contact')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                        
                                                            <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Tender Id</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="tenderId" value="<?php echo e(old('tenderId')?old('tenderId'):$tenderId); ?>" placeholder="Enter tender Id" />
                                                                  <?php if($errors->has('tenderId')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('tenderId')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Tender Title</label>
                                                                  <input type="text" class="form-control" name="tenderTitle" value="<?php echo e(old('tenderTitle')?old('tenderTitle'):$tenderTitle); ?>" placeholder="Enter Tender Title" />
                                                                  <?php if($errors->has('tenderTitle')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('tenderTitle')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">


                                                         

                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                          <div class="col-sm-12">
                                                                  <label class="pull-right-pro">Address</label>
                                                                  
                                                                  <textarea class="form-control" name="address" placeholder="Enter Address" ><?php echo e(old('address')?old('address'):$address); ?></textarea>
                                                                  <?php if($errors->has('address')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('address')); ?></div>
                                                                  <?php endif; ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extrajs'); ?>
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
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/form/all-type-forms.css')); ?>">

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
    
//     var _token = "<?php echo e(csrf_token()); ?>";
//     if(flag){
//       $.ajax({
//         type: "POST",
//         url: "<?php echo e(URL('admin/checkMobile')); ?>",
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
    
    var _token = "<?php echo e(csrf_token()); ?>";
    var id = "<?php echo e($id); ?>";
    if(flag){
      $.ajax({
        type: "POST",
        url: "<?php echo e(URL('admin/checklogin')); ?>",
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>