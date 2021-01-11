<?php $__env->startSection('content'); ?>

<style>
  .col-md-10{
    border : 5px solid #ddd;
    padding: 10px;
    column-gap: 10px;
    
  }
  .table-primary{
    text-align: center;
  }

  b{
    
    font-size:15px;
  }

  .classWithPad { margin:10px; padding:10px; }

  .table-primary{
    background-color: blue;
    color: yellow;
  }
</style>
<?php if(Auth::user()->role_id == Config::get('constants.VENDOR')): ?>
     <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                
                                <div class="col-sm-6"><h1></h1></div>
                                <div class="col-sm-6 text text-right">
                                     
                                  <a class="btn btn-primary" href="<?php echo e(URL("admin/tenders")); ?>">Back</a>
                                  
                                </div>
                            </div>
                            <br/>
                        </div>
<div class="col-md-10">
<div class="classWithPad">
  <table class="table table-striped">
  <thead >
    <h1 class="table-primary"> E-tender: </h1>
  </thead>
  <tbody>
    <tr>
      <td><b>Tender ID</b></td>
      <td><?php echo e($product->tenderId); ?></td>
      
    </tr>
    <tr>
      <td><b>Inviting Authority</b></td>
      <td><?php echo e($product->InvitingAuthority); ?></td>
      
    </tr>
    <tr>
      <td><b>Published Date</b></td>
      <td><?php echo e($product->PublishedDate); ?></td>
      
    </tr>
    <tr>
      <td><b>Bid Submission End Date</b></td>
      <td><?php echo e($product->BidSubmissionEndDate); ?></td>
      
    </tr>
    <tr>
      <td><b>Tender Value</b></td>
      <td><?php echo e($product->TenderValue); ?></td>
      
    </tr>
    <tr>
      <td><b>EMD Ammount</b></td>
      <td><?php echo e($product->EMD_Ammount); ?></td>
      
    </tr>
    <tr>
      <td><b>Tender Fee</b></td>
      <td><?php echo e($product->TenderFee); ?></td>
      
    </tr>
    <tr>
      <td><b>Work Description</b></td>
      <td><?php echo e($product->WorkDescription); ?></td>
      
    </tr>
    <tr>
      <td><b>Website</b></td>
      <td><?php echo e($product->Website); ?></td>
      
    </tr>
    <tr>
      <td><b>Download NIT</b></td>
      <td><?php echo e($product->NIT); ?></td>
      
    </tr>
    <tr>
      <td><b>Download Schedule</b></td>
      <td><?php echo e($product->Schedule); ?></td>
      
    </tr>
    <tr>
      <td><b>Download BOQ</b></td>
      <td><?php echo e($product->BOQ); ?></td>
      
    </tr>
    <tr>
      <td><p>More Info</p></td>
      <td><?php echo e($product->MoreInfo); ?></td>
      
    </tr>
  </tbody>
</table>

</div>
</div>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('extrajs'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>