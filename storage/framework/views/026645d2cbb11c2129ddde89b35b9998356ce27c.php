<?php $__env->startSection('title', 'E-Tender | thedsolution'); ?>
<?php $__env->startSection('description', ''); ?>
<?php $__env->startSection('keywords', 'E-Tender | thedsolution'); ?>
<?php $__env->startSection('author', 'thedsolution'); ?>


<?php $__env->startSection('content'); ?>

<style>
fieldset {
    display: block;
    margin-inline-start: 2px;
    margin-inline-end: 2px;
    padding-block-start: 0.35em;
    padding-inline-start: 0.75em;
    padding-inline-end: 0.75em;
    padding-block-end: 0.625em;
    min-inline-size: min-content;
    border-width: 2px;
    border-style: groove;
    border-color: threedface;
    border-image: initial;
}
table {
    border-collapse: separate;
    white-space: normal;
    line-height: normal;
    font-weight: normal;
    font-size: medium;
    font-style: normal;
    color: -internal-quirk-inherit;
    text-align: start;
    border-spacing: 2px;
    
    font-variant: normal;
}



  .col-sm-3{
    border : 1px solid #ddd;
    padding: 10px;
    column-gap: 10px;
    
  }

 
</style>
<div class="">
  <div class="row">
<div class="col-sm-12">
<?php $__currentLoopData = $etenders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="col-sm-6">

<fieldset>
	<legend style="background-color:#006699;color:white;">Tender Details:</legend>
	<table border="" align="center" class="sample1" width="100%" style="font-family:tahoma;font-size:12px;border-collapse:collapse;" cellspacing="3" cellpadding="3">
	
	<tbody><tr>
	    <td style="background-color:#E4E4E4;color:black;">Tender ID</td><td> <?php echo e($etender->tenderId); ?></td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Inviting Authority</td><td> <?php echo e($etender->InvitingAuthority); ?></td>
	</tr>
	
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Published Date</td><td> <?php echo e($etender->PublishedDate); ?>, From <?php echo e($etender->StartTime); ?></td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Bid Submission End Date</td><td> <?php echo e($etender->BidSubmissionEndDate); ?>, To <?php echo e($etender->EndTime); ?></td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Tender Value</td><td> <?php echo e($etender->TenderValue); ?></td>
	</tr>
	
	
	
	<tr>
		<td style="background-color:#E4E4E4;color:black;">EMD Ammount</td><td> <?php echo e($etender->EMD_Ammount); ?></td>
	</tr>
	
	
	
	
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Tender Fee</td><td> <?php echo e($etender->TenderFee); ?></td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Work Description</td><td> <?php echo e($etender->WorkDescription); ?></td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Website</td><td><a href="<?php echo e($etender->Website); ?>" target="_blank"> Website</a></td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Download NIT</td><td><a href="<?php echo e($etender->NIT); ?>" target="_blank"> NIT</a></td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Download Schedule</td><td><a href="<?php echo e($etender->Schedule); ?>" target="_blank"> Schedule</a></td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">Download BOQ</td><td><a href="<?php echo e($etender->BOQ); ?>" target="_blank"> BOQ</a></td>
	</tr>
	<tr>
		<td style="background-color:#E4E4E4;color:black;">More Info</td><td> <?php echo e($etender->MoreInfo); ?></td>
	</tr>
	
	</tbody></table>
	</fieldset>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

</div>
</div>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('ui.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>