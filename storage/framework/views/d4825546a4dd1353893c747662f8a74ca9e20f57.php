<?php $__env->startSection('content'); ?>
<div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    
                                    <div class="col-sm-6"><h1><?php echo e($page_title); ?></span></h1></div>
                                    <div class="col-sm-6 text text-right">
                                      <a class="btn btn-primary" href="<?php echo e(URL("admin/courier/create")); ?>"><span class="fa fa-plus"></span>&nbsp;Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                 
                                   <table id="myTable" style="width: 100%;">
                                <tr>
                                    <th width="5%">Image</th>
                                    <th width="10%">Name</th>
                                    <th width="10%">Email</th>
                                    <th width="10%">Mobile</th>
                                    <th width="10%">Fax</th>
                                    <th width="20%">Address</th>
                                    <th width="5%">Status</th>
                                    <th width="20%">Action</th>
                                </tr>

                                <?php $__currentLoopData = $couriers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$courier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="width: 10%">
                                        <?php
                                            $url="assets/gallery.png";
                                            if($courier->logo){
                                                $url="assets/img/courier/".$courier->logo;
                                            }
                                        ?>
                                        <img class="img-circle" src="<?php echo e(asset($url)); ?>" alt="" />
                                    </td>
                                    <td><?php echo e($courier->name); ?></td>
                                    <td>
                                        <?php echo e($courier->email); ?>

                                    </td>
                                    <td><?php echo e($courier->mobile); ?></td>
                                    <td><?php echo e($courier->fax); ?></td>
                                    <td><?php echo e($courier->address); ?></td>
                                    <td>
                                        <?php if($courier->IsActive): ?>
                                            <span class="text text-success fa fa-check"></span>
                                        <?php else: ?>
                                            <span class="text text-danger fa fa-remove"></span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('courier.edit',$courier->id)); ?>" class="btn btn-info pull-left" style="margin-right: 3px;" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>

                                        <?php echo e(Form::open(['method' => 'DELETE', 'route' => ['courier.destroy', $courier->id] ])); ?>

                  
                                            <button type="submit" class="btn btn-danger pull-left" title="Delete" onclick="return confirm('Do You want to Delete?')"><i class="fa fa-trash"></i></button>
                                        <?php echo e(Form::close()); ?>

                 
                <?php if($courier->IsActive){ ?>
                <a href="<?php echo e(URL::to('admin/updateCourier/'.$courier->id.'/deactive')); ?>" class="btn btn-warning pull-left" style="margin-right: 3px;" onclick="return confirm('Are You Sure To Dctivated?')" title="Click to Deactive"><i class="fa fa-eye-slash"></i></a>
                   <?php }else{ ?>
                <a href="<?php echo e(URL::to('admin/updateCourier/'.$courier->id.'/active')); ?>" class="btn btn-success pull-left" style="margin-right: 3px;" onclick="return confirm('Are You Sure To Activated?')" title="Click to Active"><i class="fa fa-eye"></i></a>
                   <?php } ?>

                                       
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
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

<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.dataTables.min.js')); ?>"></script>
<style type="text/css" href="<?php echo e(asset('assets/css/jquery.dataTables.min.css')); ?>"></style>


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