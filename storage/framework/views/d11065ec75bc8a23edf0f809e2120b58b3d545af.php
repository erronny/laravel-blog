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
          
           <?php if(Request::segment(4)==='edit'): ?>
            <?php echo e(Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT'))); ?>

            
            <?php 
                
                $name          = $permission->name;
                
            ?>
            <?php echo Form::hidden('id',$permission->id); ?>

            
            <?php else: ?>
            <?php echo Form::open(array('url' => 'admin/permissions')); ?>

            
            <?php 
                $id              = '';
                $name            = '';
                
            ?>
            <?php endif; ?>
           

            <div class="form-group row">
                <div class="col-sm-4">
                  <?php echo e(Form::label('name', 'Permission Name')); ?>

                  <div>
                    <?php echo e(Form::text('name', $name, array('class' => 'form-control','required'=>'required'))); ?>

                    
                  </div>  
                </div>
                <div class="col-sm-6">
                  <?php echo e(Form::label('Operation', 'Operation')); ?>

                  <div class="row">
                    <div class="col-sm-2">
                      <input type="checkbox" name="operation[]" value="add">
                      <label>Add</label>
                    </div>

                    <div class="col-sm-2">
                      <input type="checkbox" name="operation[]" value="edit">
                      <label>Edit</label>
                    </div>

                    <div class="col-sm-2">
                      <input type="checkbox" name="operation[]" value="delete">
                      <label>Delete</label>
                    </div>

                    <div class="col-sm-2">
                      <input type="checkbox" name="operation[]" value="view">
                      <label>View</label>
                    </div>
                  </div>
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
    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-body">
          <h4 class="mt-0 header-title">Permission List</h4>
          
          <table class="table table-dark">
            <thead>
              <tr>
                <th>#</th>
                <th>Permissions</th>
               <!-- <th>Operation</th>-->
              </tr>
            </thead>
            <tbody>
           <?php $count = 1; ?>
           <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <?php if($permission->parent_id == '0'): ?>
            <tr>
                <td><?php echo e($count); ?></td>
                <td><?php echo e($permission->name); ?></td> 
               <!-- <td>
                <a href="<?php echo e(URL::to('admin/permissions/'.$permission->id.'/edit')); ?>" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                <?php echo Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]); ?>

                <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                <?php echo Form::close(); ?>


                </td>-->
            </tr>
            <?php endif; ?>
            <?php $count++; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- end col -->
  </div>
  <!-- end row -->
</div>
<!-- end container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>