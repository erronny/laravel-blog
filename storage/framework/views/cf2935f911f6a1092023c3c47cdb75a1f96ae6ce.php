<?php $__env->startSection('content'); ?>
<div class="basic-form-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                        <div class="col-sm-6"><h1><?php echo e($page_title); ?></span></h1></div>
                            <div class="col-sm-6 text text-right">
                                <a class="btn btn-primary" href="<?php echo e(URL("admin/university")); ?>">List</a>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="all-form-element-inner">
                                        <?php if(Request::segment(4)==='edit'): ?>
                                        <?php echo e(Form::model($university, array('route' => array('university.update', $university->id), 'method' => 'PUT','enctype'=>'multipart/form-data'))); ?>

                                        <?php  
                                            $reg_name = $university->reg_no;
                                            $name= $university->name;
                                            $email= $university->email;
                                            $mobile= $university->mobile;
                                            $city= $university->city;
                                            $image= $university->image;
                                            $address= $university->address;
                                        ?>
                                        <?php else: ?>
                                        <?php echo e(Form::open(array('url' => 'admin/university','enctype'=>'multipart/form-data'))); ?>


                                        <?php 
                                            
                                            $reg_name = "";
                                            $name= "";
                                            $email= "";
                                            $mobile= "";
                                            $city= "";
                                            $image= "";
                                            $address= "";

                                        ?>
                                        <?php endif; ?>


                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Registration Number</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" name="reg_no" class="form-control" value="<?php echo e(old('reg_no')?old('reg_no'):$reg_name); ?>" placeholder="Enter Registration Number"/>
                                                    <?php if($errors->has('reg_no')): ?>
                                                    <div class="text text-danger"><?php echo e($errors->first('reg_no')); ?></div>
                                                    <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Name</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="name" class="form-control" value="<?php echo e(old('name')?old('name'):$name); ?>" placeholder="Enter Univercity Name"/>
                                                        <?php if($errors->has('name')): ?>
                                                    <div class="text text-danger"><?php echo e($errors->first('name')); ?></div>
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
                                                        <input type="text"name="email" class="form-control" value="<?php echo e(old('email')?old('email'):$email); ?>" placeholder="Enter Enail"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Phone/mobile</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="mobile" class="form-control" value="<?php echo e(old('mobile')?old('mobile'):$mobile); ?>" placeholder="Enter Mobile"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">City</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="city" class="form-control" value="<?php echo e(old('city')?old('city'):$city); ?>" placeholder="Enter Mobile" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Image </label>
                                                    </div>
                                                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro"> 
                                        <?php  
                                            $image_url = "assets/gallery.png";
                                            if($image){
                                            $image_url = "assets/img/university/".$image;
                                            }
                                        ?>
                                        <img style="width: 50%;" src="<?php echo e(asset($image_url)); ?>" id="imagePreview"> </label>
                                                    </div>
                                                    
                                                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                            <div class="input append-big-btn">
                                                                <label class="icon-left" for="append-big-btn">
                                                                    <i class="fa fa-download"></i>
                                                                    </label>
                                                                <div class="file-button">
                                                                    Browse
                                                                    <input id="image" name="file" type="file" onchange="document.getElementById('append-big-btn').value = this.value;">
                                                                </div>
                                                                <input type="text" id="append-big-btn" placeholder="no file selected">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                                <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">Address</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <textarea placeholder="Enter Address" name="address" class="form-control"><?php echo e(old('address')?old('address'):$address); ?></textarea>
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