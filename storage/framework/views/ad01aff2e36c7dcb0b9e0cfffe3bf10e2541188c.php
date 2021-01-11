<?php $__env->startSection('title', '| Roles'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <!-- Page-Title -->
  <div class="row">
    <div class="col-sm-12">
      <div class="page-title-box">
        
        <h4 class="page-title"><i class="fa fa-key"></i>Available Roles</h4>
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
    <div class="col-lg-4">
      
      <div class="card m-b-30 ">
        
        <div class="card-body " >
          <div class="col-md-12">
           <?php if(Request::segment(4)!=='edit'): ?>
            <a class="addnew btn btn-info" style="color: #ffffff; margin-bottom: 10px;">Add Role</a>
          <?php endif; ?>
          </div>
          
           <?php if(Request::segment(4)==='edit'): ?>
           <div class="addnewrole">
            <?php echo e(Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT'))); ?>

            
            <?php 
                
                $name             = $role->name;
                $permission_id    = $role->permissions
                
            ?>
            
            <?php else: ?>
            <div class="addnewrole"  style="display: none;">
            <?php echo Form::open(array('url' => 'admin/roles')); ?>

            
            <?php 
                $permission_id      = '';
                $name               = '';
                
            ?>
            <?php endif; ?>

           

            <div class="form-group">
              <?php echo e(Form::label('name', 'Add Role')); ?>

              <div>
                <?php echo e(Form::text('name', null, array('class' => 'form-control','placeholder'=>'Name','required'=>'required'))); ?>

                
              </div>
            </div>
             <div class="form-group">
              <div>
                <input type="checkbox" id="selectAll">
                <?php echo e(Form::label('name', 'Select All')); ?>

              </div>
            </div>
            <div class='form-group'>

            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php echo e(Form::checkbox('permissions[]',  $permission["parent"]["id"], $permission_id, array('class' => 'module parentModule parentModule_'.$key,'id'=>$key) )); ?>

            <?php echo e(Form::label($permission["parent"]["name"], ucfirst($permission["parent"]["name"]) )); ?><br>
              <?php if(count($permission["child"])>0): ?> 
                <div class='form-group' style="padding-left: 15px;">
                <?php $__currentLoopData = $permission["child"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e(Form::checkbox('permissions[]',  $child["id"], $permission_id, array('class' => 'module childModule childModule_'.$key,'id'=>$key) )); ?>

                <?php echo e(Form::label($child["name"], ucfirst($child["name"]))); ?>&nbsp;
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              <?php endif; ?>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            <div class="form-group m-b-0">
              <div>
                <button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>
                <a href="<?php echo e(URL('admin/roles')); ?>" class="btn btn-secondary waves-effect m-l-5"> Cancel </a>
              </div>
            </div>
          <?php echo Form::close(); ?>

        </div>
        </div>
      </div>
    </div>
    <!-- end col -->
    <div class="col-lg-8">
      <div class="card m-b-30">
        <div class="card-body">
          <h4 class="mt-0 header-title">Role List</h4>
         
          <table class="table table-dark">
            <thead>
              <tr>
                <th width="5%">#</th>
                <th width="10%">Role</th>
                <th width="60%">Permissions</th>
                <th width="25%">Operation</th>
              </tr>
            </thead>
            <tbody>
           <?php $count = 1; ?>
           <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
            <tr>
                <td><?php echo e($count); ?></td>
                <td><?php echo e($role->name); ?></td>

<td>
<?php
      $parentModules = DB::table('role_has_permissions')->select('role_has_permissions.permission_id','permissions.*')
                ->join('permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where('permissions.parent_id','0')
                ->where('role_has_permissions.role_id',$role->id)->get();
                $permissions = array();
        foreach ($parentModules as $key => $parentModule) {
             $permissions[$key]['parent']=$parentModule;
            $childModules = DB::table('role_has_permissions')->select('role_has_permissions.permission_id','permissions.*')
                ->join('permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                ->where('permissions.parent_id',$parentModule->id)
                ->where('role_has_permissions.role_id',$role->id)->get();
              $permissions[$key]['child']=$childModules;
        }
//dd($permissions)
?>  
<?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <ul>
    <li>
      <?php echo e($permission['parent']->name); ?>

      <?php if(!empty($permission['child'])): ?>
      &nbsp;(&nbsp;
      <?php $__currentLoopData = $permission['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($child->name); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      &nbsp;)&nbsp;
      <?php endif; ?>
    </li>
  </ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </td>
                    <td>
                    <a href="<?php echo e(URL::to('admin/roles/'.$role->id.'/edit')); ?>" class="btn btn-info pull-left" style="margin-right: 3px;" title="Edit Role">Edit</a>
<?php if($role->userType != 0): ?>
                    <?php echo Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]); ?>

                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure to delete?')"> Delete </button>
                    <?php echo Form::close(); ?>

<?php endif; ?>
                    </td>
            </tr>
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


<?php $__env->startSection('extrajs'); ?>
<script type="text/javascript">
  //alert();
  $(document).ready(function(){
    $(".addnew").click(function(){
     $( ".addnewrole" ).toggle();
   });
  });
  $('.module').change(function(event) {
    var flag = true;
    $('.module').each(function(){
      if(!$(this).is(":checked")){
        flag =false;
      }
    });
    $('#selectAll').prop('checked',flag);
  });

  $('.childModule').change(function(event) {
    var id = $(this).attr('id');
    var flag = false;
    $('.childModule_'+id).each(function(){
      if($(this).is(":checked")){
        flag =true;
      }
    });
    $('.parentModule_'+id).prop('checked',flag);
  });

  $('.parentModule').change(function(event) {
    var id = $(this).attr('id');
    $('.childModule_'+id).prop('checked', this.checked);

    //childModule_1
  });
  $('#selectAll').change(function(event) {
    $('input:checkbox').not(this).prop('checked', this.checked);
  //   if ($(this).is('checked')) {
  //     $('.module').attr('checked','checked');
  // } else {
  //     $('.module').removeAttr('checked');
  // }   
  });


</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>