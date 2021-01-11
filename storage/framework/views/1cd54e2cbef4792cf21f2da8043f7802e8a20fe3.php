

<?php $__env->startSection('title', '| Permissions'); ?>

<?php $__env->startSection('content'); ?>
<div class="basic-form-area mg-tb-15">
 <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="sparkline12-list">
              <div class="sparkline12-hd">
                  <div class="main-sparkline12-hd">
                      <div class="col-sm-12"><h1>Update <span class="table-project-n">Profile</span></h1></div>
                      
                  </div>


                    <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                    <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    </div>
                    <?php endif; ?>
                    <?php if(Session::has('message')): ?>
                    <div class="alert alert-success login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo Session::get('message'); ?> </div>
                    <?php endif; ?>
                    
                    <div class="card-body">


                      <?php echo Form::open(array('url' => 'admin/profileupdate')); ?>

                      <?php echo e(Form::hidden('id',$userdata->id)); ?>



                      <div class="form-group">
                      <?php echo e(Form::label('email', 'Email')); ?>

                      <div>
                      <?php echo e(Form::text('email',$userdata->email , array('class' => 'form-control','required'=>'required','readonly'))); ?>


                      </div>
                      </div>

                      <div class="form-group">
                      <?php echo e(Form::label('password', 'Old Password')); ?>

                      <div>
                      <?php echo e(Form::password('oldpassword', array('class' => 'form-control','required'=>'required','placeholder'=>'Old password'))); ?>


                      </div>
                      </div>

                      <div class="form-group">
                      <?php echo e(Form::label('password', 'New Password')); ?>

                      <div>
                      <?php echo e(Form::password('password', array('class' => 'form-control','required'=>'required','placeholder'=>'New password'))); ?>


                      </div>
                      </div>

                      <div class="form-group">
                      <?php echo e(Form::label('password', 'Confirm Password')); ?>

                      <div>
                      <?php echo e(Form::password('password_confirmation', array('class' => 'form-control','required'=>'required','placeholder'=>'Confirm password'))); ?>


                      </div>
                      </div>

                      <div class="form-group m-b-0">
                      <div>
                      <button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>
                      <button type="reset" class="btn btn-secondary waves-effect m-l-5"> Cancel </button>
                      </div>
                      </div>
                      <?php echo Form::close(); ?>

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