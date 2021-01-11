<?php $__env->startSection('content'); ?>
<div class="basic-form-area mg-tb-15">
 <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                  <div class="form-group">
                                      <div class="col-sm-6"><h1>Courier Operator <span class="table-project-n">Create</span></h1></div>
                                      <div class="col-sm-6 text text-right">
                                        <a class="btn btn-primary" href="<?php echo e(URL("admin/courier")); ?>" title="Courier Partner List"><span class="fa fa-list"></span>&nbsp;List</a>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                


                                        <?php if(Request::segment(4)==='edit'): ?>
                                        <?php echo e(Form::model($coriour, array('route' => array('courier.update', $coriour->id), 'method' => 'PUT','enctype'=>'multipart/form-data'))); ?>

                                        <?php  
                                            $name= $coriour->name;
                                            $mobile= $coriour->mobile;
                                            $email= $coriour->email;
                                            $fax= $coriour->fax;
                                            $address= $coriour->address;
                                            $logo= $coriour->logo;
                                        ?>
                                        <?php else: ?>
                                        <?php echo e(Form::open(array('url' => 'admin/courier','enctype'=>'multipart/form-data'))); ?>


                                        <?php 
                                            
                                            $name= "";
                                            $mobile= "";
                                            $email= "";
                                            $logo= "";
                                            $address= "";
                                            $logo= "";
                                            $fax= "";
                                    
                                        ?>
                                        <?php endif; ?>



                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Courier Partner Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="name"  value="<?php echo e(old('name')?old('name'):$name); ?>"  placeholder="Courier Partner Name" />
                                                                 <?php if($errors->has('name')): ?>
                                                                  <div class="text text-danger"><?php echo e($errors->first('name')); ?></div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Mobile</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="mobile"  value="<?php echo e(old('mobile')?old('mobile'):$mobile); ?>"  placeholder="Enter Mobile" />
                                                                 <?php if($errors->has('mobile')): ?>
                                                                  <div class="text text-danger"><?php echo e($errors->first('mobile')); ?></div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Email</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="email"  value="<?php echo e(old('email')?old('email'):$email); ?>"  placeholder="Courier Partner email" />
                                                                <?php if($errors->has('email')): ?>
                                                                  <div class="text text-danger"><?php echo e($errors->first('email')); ?></div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Fax</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="fax"  value="<?php echo e(old('fax')?old('fax'):$fax); ?>"  placeholder="Courier Partner fax" />
                                                                 <?php if($errors->has('fax')): ?>
                                                                  <div class="text text-danger"><?php echo e($errors->first('fax')); ?></div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Address</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <textarea class="form-control" name="address" placeholder="Address"><?php echo e(old('address')?old('address'):$address); ?></textarea>
                                                                <?php if($errors->has('address')): ?>
                                                                  <div class="text text-danger"><?php echo e($errors->first('address')); ?></div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Logo </label>
                                                            </div>
                                                             <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro"> 
                                                                    <?php
                                                                        if($logo){
                                                                            $url = "assets/img/courier/".$logo;
                                                                        }else{
                                                                            $url = "assets/gallery.png";
                                                                        }
                                                                    ?>

                                                                    <img style="width: 50%;" src="<?php echo e(asset($url)); ?>" id="imagePreview"> </label>
                                                            </div>
                                                           
                                                            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                    <div class="input append-big-btn">
                                                                        <label class="icon-left" for="append-big-btn">
                                                                         <i class="fa fa-download"></i>
                                                                          </label>
                                                                        <div class="file-button">
                                                                            Browse
                                                                            <input id="image" type="file" name="file" onchange="document.getElementById('append-big-btn').value = this.value;">
                                                                        </div>
                                                                        <input type="text" id="append-big-btn" placeholder="no file selected">
                                                                    </div>
                                                                </div>
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
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/form/all-type-forms.css')); ?>">
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/summernote/summernote.css')); ?>  ">
    <script src="<?php echo e(asset('assets/js/summernote/summernote.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/summernote/summernote-active.js')); ?>"></script>
      <script type="text/javascript">
        
  function readURL(input) {
  if (input.files && input.files[0]) {
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