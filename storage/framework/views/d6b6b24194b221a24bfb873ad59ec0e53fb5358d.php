<?php $__env->startSection('content'); ?>
  

   

    <!-- MAIN
    ================================================== -->
    <main class="pb-8 pb-md-11 mt-md-n6">
      <div class="container-md">
        <div class="row">
          
          <div class="col-12 col-md-9">

            <!-- Card -->
            <div class="card card-bleed shadow-light-lg">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Heading -->
                    <h4 class="mb-0">
                      User Create/Edit
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Button -->
                    <a href="<?php echo e(URL ('/admin/users')); ?>">
                    <button class="btn btn-xs btn-primary">
                      Back
                    </button>
                    </a>

                  </div>
                </div>
              </div>



             
            <?php echo e(Form::open(array('url' => 'Sign_Up', 'id' => 'userForm'))); ?>

            
            <?php 
               
                
                
                $name             = '';
                $email            = '';
                $Phone            = '';
                $password         = '';
                $Designation      = 'user';
                $Language      = '';
                $readonly = '';
               
                             
            ?>
            










              <div class="card-body">

<div class="col-12 col-md-9">
            
            
            
              
              
                <div class="row">
          
          </div>
                <div class="form-group">
               <?php echo e(Form::label('name', 'Name')); ?>


               <span class="text text-danger">*</span>
                <div>
                   
               <?php echo e(Form::text('name', $name, array('class' => 'form-control','placeholder'=>'Name','id'=>'name','required'))); ?>

               <?php if($errors->has('name')): ?>
                <div class="text text-danger"><?php echo e($errors->first('name')); ?></div>
              <?php endif; ?>
                </div>

              </div>
                <!-------------------- Email ------------------------ -->
                <div class="form-group">
                <?php echo e(Form::label('email', 'Email')); ?>

                <span class="text text-danger">*</span>
                <div>
                  <?php echo e(Form::email('email', $email, array('class' => 'form-control','placeholder'=>'Email','id'=>'email','required',$readonly))); ?>

                   <?php if($errors->has('email')): ?>
                <div class="text text-danger"><?php echo e($errors->first('email')); ?></div>
              <?php endif; ?>
                </div>
              </div>

                <!-- Contact detail -->
                <div class="form-group">
              <?php echo e(Form::label('Contact Number', 'Contact Number')); ?>

              <span class="text text-danger">*</span>
              <div>
                 
              <?php echo e(Form::text('Phone', $Phone, array('class' => 'form-control only-numeric','placeholder'=>'Contact Number'))); ?>

              <?php if($errors->has('Phone')): ?>
                <div class="text text-danger"><?php echo e($errors->first('Phone')); ?></div>
              <?php endif; ?>
              </div>
              </div>
              <div class="form-group">
                <?php echo e(Form::label('password', 'Password')); ?>

                <span class="text text-danger">*</span>
                <div>
                  <?php echo e(Form::text('password', $password, array('class' => 'form-control','placeholder'=>'Password','id'=>'password','required'))); ?>

                   <?php if($errors->has('password')): ?>
                <div class="text text-danger"><?php echo e($errors->first('password')); ?></div>
              <?php endif; ?>
                </div>
              </div>


              

              

              <div class="card-footer">
                <div class="row">
                  <div class="col-12 col-md-auto">
                    <div class="form-group m-b-0">
                      <div>
                      <button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>
                      <a type="reset" href="<?php echo e(URL('admin/users')); ?>" class="btn btn-secondary waves-effect m-l-5"> Cancel </a>
                      </div>
                      </div>
                      <?php echo Form::close(); ?>


                    

                  </div>
                </div>
              </div>

              </div>
            
            

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </main>

    <!-- CURVE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
      </div>
    </div>

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
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/css/jquery.datetimepicker.css')); ?>">
<script src="<?php echo e(asset('public/js/jquery.datetimepicker.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/jquery.datetimepicker.full.min.js')); ?>"></script>

<script type="text/javascript">
  $( function() {
    $('.select').select2({
      width: '100%',
      placeholder: 'Select Language',
    });  
  });

<?php $__env->stopSection(); ?>
<?php echo $__env->make('ui.layouts.app2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>