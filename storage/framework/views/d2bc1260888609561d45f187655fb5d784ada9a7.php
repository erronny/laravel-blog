<?php $__env->startSection('content'); ?>
<div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div>
                                <?php if(Session::has('message')): ?>
                                <div class="alert alert-success login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo Session::get('message'); ?> </div>
                                <?php endif; ?>

                                <?php if(Session::has('error')): ?>
                                <div class="alert alert-danger login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo Session::get('error'); ?> </div>
                                <?php endif; ?>
                            </div>
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    
                                    <div class="col-sm-6"><h1><?php echo e($page_title); ?></h1></div>
                                    <div class="col-sm-6 text text-right">
                                      <a class="btn btn-primary" href="<?php echo e(URL("admin/university/create")); ?>">Add</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sparkline13-graph">
                                
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                 
                                   <table id="myTable">
                                    <tr>
                                        <th>Image</th>
                                        <th>R_no</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php $count = 1; ?>
                                    <?php if(isset($universities) && !empty($universities)): ?>
                                    <?php $__currentLoopData = $universities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $university): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                <tr>
                                    <td style="width: 10%">
                                        <?php  
                                        $image = "assets/gallery.png";
                                        if($university->image){
                                            $image = "assets/img/university/".$university->image;
                                        }
                                        ?>
                                        <img class="img-circle" src="<?php echo e(asset($image)); ?>" alt="University image" /></td>
                                    <td><?php echo e($university->reg_no); ?></td>
                                    <td><?php echo e($university->name); ?></td>
                                    <td><?php echo e($university->email); ?></td>
                                    <td><?php echo e($university->mobile); ?></td>
                                    <td><?php echo e($university->address); ?></td>
                                    <td>
                                        <?php if($university->IsActive): ?>
                                            <i class="text text-success fa fa-check" aria-hidden="true"></i>
                                        <?php else: ?>
                                            <i class="text text-danger fa fa-remove" aria-hidden="true"></i>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('university.edit', $university->id)); ?>" class="btn btn-info pull-left" style="margin-right: 3px;" data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-edit"></i></a> 

                                            <?php if($university->IsActive){ ?>
                                                <a href="<?php echo e(URL::to('admin/updateUniversity/'.$university->id.'/deactive')); ?>" class="btn btn-danger pull-left" style="margin-right: 3px;" onclick="return confirm('Are You Sure To Dctivated?')" title="Click to Deactive"><i class="fa fa-ban"></i></a>
                                                   <?php }else{ ?>
                                                <a href="<?php echo e(URL::to('admin/updateUniversity/'.$university->id.'/active')); ?>" class="btn btn-success pull-left" style="margin-right: 3px;" onclick="return confirm('Are You Sure To Activated?')" title="Click to Active"><i class="fa fa-check"></i></a>
                                                   <?php } ?>

                                            <?php echo e(Form::open(['method' => 'DELETE', 'route' => ['university.destroy', $university->id] ])); ?>

                                            <button type="submit" class="btn btn-danger pull-left" title="Delete" onclick="return confirm('Do You want to Delete?')"><i class="fa fa-trash"></i></button>
                                        <?php echo e(Form::close()); ?>

                                        
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                               
                            </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('extrajs'); ?>
<style type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable({
      "lengthMenu": [[25, 50, 100, 500, 1000],[25, 50, 100, 500, "Max"]],
"pageLength": '500',
    });
} );

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>