<?php $__env->startSection('title', 'Pan | thedsolution'); ?>
<?php $__env->startSection('description', ''); ?>
<?php $__env->startSection('keywords', 'Pan | thedsolution'); ?>
<?php $__env->startSection('author', 'thedsolution'); ?>


<?php $__env->startSection('content'); ?>
<!-- breadcrumbs -->
<div class="brdc">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-left">
        <h4>Pancard</h4>
      </div>
      <div class="col-md-6 text-right">
        <a href="">Home</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;
        Pancard
      </div>
    </div>
  </div>
</div>
<!-- breadcrumbs end -->

<div class="content">
  <div class="container">
    <div class="row m_b_4">
      <div class="col-md-12">
        <img src="<?php echo e(asset('assets/dsolution/img/lotus-banner.png')); ?>" style="border:solid 1px #ccc;" alt="Pancard" class="img-responsive">
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h3>Pancard</h3>
        <p>Permanent Account Number (PAN) card has come to serve you during many identity crisis situations. But for governement, our PAN cards are a tool to check information related to investment for taxpayers.</p>
        
      </div>
    </div>
  </div>
</div>

<!-- team -->
<div class="team">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3>Want to know more about Pancard</h3>
        <a href="http://www.thedsolution.com/" target="_blank">Visit Website</a>
      </div>
    </div>
  </div>
</div>
	 

	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ui.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>