<?php $__env->startSection('title', '| Permissions'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <!-- Page-Title -->
  <div class="row">
    <div class="col-sm-12">
      <div class="page-title-box">
        
        <h4 class="page-title"><i class="fa fa-key"></i>Available Permissions</h4>
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
          
           
            <?php echo Form::open(array('url' => 'admin/websettingupd')); ?>

            <?php echo e(Form::hidden('id',$webseting->id)); ?>

            
            
            <div class="form-group">
              <?php echo e(Form::label('website_name', 'Website Name')); ?>

              <div>
                <?php echo e(Form::text('website_name',$webseting->website_name , array('class' => 'form-control','required'=>'required'))); ?>

                
              </div>
            </div>

            <div class="form-group">
              <?php echo e(Form::label('locktimeout', 'Lock Time')); ?>

              <div>
                <?php echo e(Form::text('locktimeout',$webseting->locktimeout , array('class' => 'form-control','required'=>'required'))); ?>

                
              </div>
            </div>

            <div class="form-group">
              <?php echo e(Form::label('email', 'Email')); ?>

              <div>
                <?php echo e(Form::email('email',$webseting->email , array('class' => 'form-control','required'=>'required'))); ?>

                
              </div>
            </div>

            <div class="form-group">
              <?php echo e(Form::label('address', 'Address')); ?>

              <div>
                <?php echo e(Form::text('address',$webseting->address , array('class' => 'form-control','required'=>'required'))); ?>

                
              </div>
            </div>

            <div class="form-group">
              <?php echo e(Form::label('mobile', 'Mobile')); ?>

              <div>
                <?php echo e(Form::number('mobile',$webseting->mobile , array('class' => 'form-control','required'=>'required'))); ?>

                
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
    <!-- end col -->
    
    <!-- end col -->
  </div>
  <!-- end row -->
</div>
<!-- end container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>