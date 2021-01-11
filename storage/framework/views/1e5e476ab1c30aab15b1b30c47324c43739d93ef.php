<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('success')): ?>
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong><?php echo e($message); ?></strong>
   </div>
   <?php endif; ?>
<div class="basic-form-area mg-tb-15">
 <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">

                                <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <div class="col-sm-6"><h1><?php echo e($page_title); ?></h1></div>
                                    <div class="col-sm-6 text text-right">
                                      <a href="<?php echo e(URL("admin/tenders")); ?>">Tenders List</a>
                                    </div>
                                </div>
                            </div>
	<div class="container">
    <div class="card bg-light mt-3">
        
        <div class="card-body">
            <form action="<?php echo e(route('import')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Tenders</button>
                <a class="btn btn-warning" href="<?php echo e(route('export')); ?>">Export Tenders</a>
            </form>
        </div>
    </div>
</div>
</div></div></div></div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>