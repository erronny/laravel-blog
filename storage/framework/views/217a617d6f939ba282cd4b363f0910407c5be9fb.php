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
<br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Tenders</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th>Tenders Id</th>
        <th>Published Date</th>
        <th>Bid Submission End Date</th>
        <th>Start Time</th>
        <th>End Time</th>
        
        
       </tr>
       <!-- <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
        <td><?php echo e($row->tenderId); ?></td>
        <td><?php echo e($row->PublishedDate); ?></td>
        <td><?php echo e($row->BidSubmissionEndDate); ?></td>
         <td><?php echo e($row->StartTime); ?></td>
        <td><?php echo e($row->EndTime); ?></td>
       </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
      </table>
     </div>
    </div>
   </div>
  </div>
</div></div></div></div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>