<?php $__env->startSection('content'); ?>
<div class="basic-form-area mg-tb-15">
 <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                  <div class="form-group">
                                      <div class="col-sm-6"><h1><?php echo e($page_title); ?></span></h1></div>
                                      <div class="col-sm-6 text text-right">
                                        <a class="btn btn-primary" href="<?php echo e(URL("admin/users")); ?>">List</a>
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
           <?php echo e(Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT', 'id' => 'userForm'))); ?> 
            
            <?php  
                $roleid             = old('roles')?old('roles'):$user->role_id;
                $name               = old('name')?old('name'):$user->name;
                $email              = $user->email;
                $Phone              = $user->Phone;
                $Designation        = $user->Designation;
                $Language           = $user->language_known;
                $readonly = 'readonly';
                
            ?>
            <?php echo Form::hidden('id',$user->id); ?>

            
            <?php else: ?>
            <?php echo e(Form::open(array('url' => 'admin/users', 'id' => 'userForm'))); ?>

            <?php echo Form::hidden('CreatedBy',Auth::user()->id); ?>

            <?php 
               
                //$roleid           = '';
                if(old('roles')){
                  $roleid  = old('roles');
                }else{
                  $roleid  = '';
                }
                
                $name             = '';
                $email            = '';
                $Phone            = '';
                $Designation      = '';
                $Language      = '';
                $readonly = '';
               
                             
            ?>
            <?php endif; ?>

          
          <div class="row">
          <input type="hidden" name="vendor_id" value="<?php echo e($vendor_id); ?>">
          </div>
            <div class="col-md-6">
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
            </div>

            
            <div class="col-md-6">
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
            </div>
            <div class="col-md-6">
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
            </div>

            
            <div class="col-md-6">
              <div class="form-group">
              <?php echo e(Form::label('Designation', 'Designation')); ?>

              <div>

              <?php echo e(Form::text('Designation', $Designation, array('class' => 'form-control','placeholder'=>'Designation'))); ?>

              </div>
              </div>
            </div>
            <div class='col-md-6 form-group'>
                <?php echo e(Form::label('Role', 'Role')); ?>

                <span class="text text-danger">*</span>
                <select class="form-control" name="roles" id="roles" required="">
                 <option value="0" selected="" disabled="">Select Role</option> 
                  <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                      <option value="<?php echo e($role->id); ?>" <?php if($roleid==$role->id): ?> selected <?php endif; ?>><?php echo e($role->name); ?></option> 
                    
                   
                    
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            
            </div>
           
            <div class="col-sm-12 form-group m-b-0">
              <div>
                <button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>
                <a href="<?php echo e(URL('admin/users')); ?>" type="reset" class="btn btn-secondary waves-effect m-l-5"> Cancel </a>
              </div>
            </div>
         <?php echo Form::close(); ?>

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

 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>