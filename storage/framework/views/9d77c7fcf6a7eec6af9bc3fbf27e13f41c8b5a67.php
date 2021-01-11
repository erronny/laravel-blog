<?php $__env->startSection('title', '| Users'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <!-- Page-Title -->
  <div class="row">
    <div class="col-sm-12">
      <div class="page-title-box">
        
        <h4 class="page-title"><i class="fa fa-key"></i>Users Administration
        </h4>
      </div>
    </div> 
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
  <!-- end page title end breadcrumb -->
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-body">
          
          
        <?php echo e(Form::open(array('url' => 'admin/update_password'))); ?>

        <?php echo Form::hidden('CreatedBy',Auth::user()->id); ?>

        <?php echo Form::hidden('userId',$user->id); ?>

<!--            <div class="row"> 
           <div class="col-md-6">
            <div class="form-group">
             <?php echo e(Form::label('old_password', 'Old Password')); ?>

             ( <span class="text text-danger">*</span> )
              <div>
                 
              <?php echo e(Form::password('old_password',array('class' => 'form-control','required'=>'required','placeholder'=>'Old Password'))); ?>

              </div>
            </div>
            </div>
           
            </div>-->
            
            <div class="row"> 

              <div class="col-md-12 card-body">
                <div class="col-md-12">
                  <label class="col-md-2">User Name</label>
                  <label><?php echo e($user->name); ?></lable>
                </div>
                
                <div class="col-md-12">
                  <label class="col-md-2">Email</label>
                  <label><?php echo e($user->email); ?></lable>
                </div>
                
               
              </div>
           <div class="col-md-6">
            <div class="form-group">
             <?php echo e(Form::label('password', 'Password')); ?>

             ( <span class="text text-danger">*</span> )
              <div>
                 
              <?php echo e(Form::password('password',array('class' => 'form-control','required'=>'required','placeholder'=>'Password'))); ?>

              </div>
            </div>
            </div>
           <div class="col-md-6">
            <div class="form-group">
                <?php echo e(Form::label('password', 'Confirm Password')); ?>

                ( <span class="text text-danger">*</span> )
                <div>
                <?php echo e(Form::password('password_confirmation', array('class' => 'form-control','required'=>'required','placeholder'=>'Confirm password'))); ?>

                </div>
            </div>
            </div>
            </div>

           
            <div class="form-group m-b-0">
              <div>
                <button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>
                <a href="<?php echo e(URL('admin/Users')); ?>" class="btn btn-secondary waves-effect m-l-5"> Cancel </a>
              </div>
            </div>
         <?php echo Form::close(); ?>

        </div>
      </div>
    </div>
    <!-- end col -->
    
    <!-- end col -->
  </div>
  <!-- end row -->
</div>
<!-- end container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>