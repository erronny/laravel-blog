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
                                        <?php echo e(Form::open(array('url' => 'admin/tender','enctype'=>'multipart/form-data'))); ?>


                                        <?php 
                                                                              
                                          $mobile="9856985644";
                                          $loginId="123123";
                                          $password="";
                                          $company_name="";
                                          
                                          $registrationNo = '';
                                          $address = "";
                                          $city = "";

                                          $state="";
                                          $panNumber ="";
                                          $companyNature ="";
                                          $contactName ="test";

                                          $email ="";
                                          $contact = "";
                                          $tenderId = "";
                                          $tenderTitle = "";

                                        ?>
                                        <?php endif; ?>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Mobile No</label>
                                                                  <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo e(old('mobile')?old('mobile'):$mobile); ?>" placeholder="Enter Mobile" />
                                                                  <?php if($errors->has('mobile')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('mobile')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Login Id</label>
                                                                  <input type="text" class="form-control" name="loginId" value="<?php echo e(old('loginId')?old('loginId'):$loginId); ?>" placeholder="Enter Login Id" />
                                                                  <?php if($errors->has('loginId')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('loginId')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Password</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="password" value="<?php echo e(old('password')?old('password'):$password); ?>" placeholder="Enter Password" />
                                                                  <?php if($errors->has('password')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('password')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                         
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
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

                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">City</label>
                                                                  <input type="text" autocomplete="off" class="form-control" name="city" value="<?php echo e(old('city')?old('city'):$city); ?>" placeholder="Enter City" />
                                                                  <?php if($errors->has('city')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('city')); ?></div>
                                                                  <?php endif; ?>
                                                          </div> 
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
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

                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Company Nature of Business</label>
                                                                  <input type="password" autocomplete="off" class="form-control" name="companyNature" value="<?php echo e(old('companyNature')?old('companyNature'):$companyNature); ?>" placeholder="Enter Company Nature" />
                                                                  <?php if($errors->has('companyNature')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('companyNature')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                          
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
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
                                                          <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Contact/Phone No</label>
                                                                  <input type="text" class="form-control" name="contact" value="<?php echo e(old('contact')?old('contact'):$contact); ?>" placeholder="Enter contact/Mobile" />
                                                                  <?php if($errors->has('contact')): ?>
                                                                    <div class="text text-danger"><?php echo e($errors->first('contact')); ?></div>
                                                                  <?php endif; ?>
                                                          </div>

                                                        
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                  <label class="pull-right-pro">Tender Id</label>
                                                                  <input type="password" autocomplete="off" class="form-control" name="tenderId" value="<?php echo e(old('tenderId')?old('tenderId'):$tenderId); ?>" placeholder="Enter tender Id" />
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


                                                            <div class="col-sm-4">
                                                              <label class="col-sm-12 login2 pull-right pull-right-pro">Status</label>
                                                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <input type="radio" name="status" checked="">Enable
                                                                <input type="radio" name="status">Disable
                                                                  
                                                              </div>
                                                            </div>

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
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left">
                                                                        <button class="btn btn-white" type="submit">Cancel</button>
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
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
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/summernote/summernote.css')); ?>  ">
    <script src="<?php echo e(asset('assets/js/summernote/summernote.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/summernote/summernote-active.js')); ?>"></script>
      <script type="text/javascript">



$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {

    $("#files").on("change", function(e) {
      console.log("change");
      var files = e.target.files,
      filesLength = files.length;
    
      for (var i = 0; i < filesLength; i++) {
        console.log("counter",i);
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");

          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});


  function readURL(input) {
  if (input.file && input.file[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#imagePreview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#image").change(function() {
  readURL(this);
});
      </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>