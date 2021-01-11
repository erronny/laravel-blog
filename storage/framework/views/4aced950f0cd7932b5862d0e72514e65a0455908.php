 <?php $__env->startSection('title', 'Service | thedsolution'); ?>
<?php $__env->startSection('description', ''); ?>
<?php $__env->startSection('keywords', ''); ?>
<?php $__env->startSection('author', ''); ?>

<?php $__env->startSection('content'); ?>
   
    
<!--Page Title Section Satrt-->
  <div id="page_title">
    <div class="container text-center">
      <div class="panel-heading">services</div>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Services</li>
      </ol>
    </div>
  </div>
  <!--Page Title Section End--> 
  
  <!--Service Page Start-->
  <section id="service_page">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 srevice_img"> <a href="<?php echo e(URL('pan')); ?>"><img src="<?php echo e(asset('images/service/pan.png')); ?>" class="img-circle htw" alt="pan card" style="color:white"/></a>
          <h4><a href="<?php echo e(URL('pan')); ?>">Pan Card</a></h4>
          <p>A PAN is a unique identifier issued to all judicial entities identifiable under the Indian Income Tax Act, 1961. It is issued by the Indian Income Tax Department.</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 srevice_img active"> <a href="<?php echo e(URL('pwd')); ?>"><img src="<?php echo e(asset('images/service/PWD.png')); ?>" class="img-circle htw" alt="pwd" /></a>
          <h4><a href="<?php echo e(URL('pwd')); ?>">PWD</a></h4>
          <p>The Central Public Works Department of India commonly referred to as the CPWD, is a premier Central Government authority in charge of public sector works.</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 srevice_img"><a href="<?php echo e(URL('etender')); ?>"> <img src="<?php echo e(asset('images/service/etender.jpg')); ?>" class="img-circle htw" alt="tender" /></a>
          <h4><a href="<?php echo e(URL('etender')); ?>">E-Tender</a></h4>
          <p>An internet based process wherein the complete tendering process; from advertising to receiving and submitting tender-related information are done online.</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 srevice_img"> <a href="<?php echo e(URL('dsignature')); ?>"><img src="<?php echo e(asset('images/service/dsignature.jpg')); ?>" class="img-circle htw" alt="digital Signature" /></a>
          <h4><a href="<?php echo e(URL('dsignature')); ?>">Digital Signature</a></h4>
          <p>A digital signature is a mathematical scheme for verifying the authenticity of digital messages or documents..</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 srevice_img"><a href="<?php echo e(URL('epf')); ?>"> <img src="<?php echo e(asset('images/service/epf.png')); ?>" class="img-circle htw" alt="EPF" /></a>
          <h4><a href="<?php echo e(URL('epf')); ?>">EPF</a></h4>
          <p>The Employee Provident Fund is the retirement saving scheme available to all the salaried employees.</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 srevice_img"> <a href="<?php echo e(asset('gumasta')); ?>"><img src="<?php echo e(asset('images/service/gumasta.png')); ?>" class="img-circle htw" alt="gumasta" /></a>
          <h4><a href="<?php echo e(asset('gumasta')); ?>">Gumasta</a></h4>
          <p>Gumasta License gives recognition to a business before any Government or Bank for different purposes.</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 srevice_img"> <a href="<?php echo e(URL('esic')); ?>"><img src="<?php echo e(asset('images/service/ESIC.jpg')); ?>" class="img-circle htw" alt="ESIC" /></a>
          <h4><a href="<?php echo e(URL('esic')); ?>">ESIC</a></h4>
          <p>Employees' State Insurance is a self-financing social security and health insurance scheme for Indian workers.</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 srevice_img"> <a href="<?php echo e(URL('gst')); ?>"><img src="<?php echo e(asset('images/service/gst.jpg')); ?>" class="img-circle htw" alt="GST" /></a>
          <h4><a href="<?php echo e(URL('gst')); ?>">GST</a></h4>
          <p>Goods and Services Tax (GST) is an indirect tax (or consumption tax) used in India on the supply of goods and services.</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 srevice_img"> <a href="<?php echo e(URL('msme')); ?>"><img src="<?php echo e(asset('images/service/msme.jpg')); ?>"  class="img-circle htw" alt="MSME" /></a>
          <h4><a href="<?php echo e(URL('msme')); ?>">MSME</a></h4>
          <p>The Ministry of Micro, Small and Medium Enterprises, a branch of the Government of India, regulations and laws relating to micro, small and medium enterprises in India.</p>
        </div>
        
        
        

      </div>
    </div>
  </section>
  <!--Service Page End--> 
  
  <!--Service Provider Satrt-->
  <section id="service_provider">
    <div class="container text-center">
      <h1 class="panel-heading">MP's largest Digital service provider</h1>
      <div class="row">
        <div class="col-md-12"> 
          <!--counter box-->
          <div class="counter_box">
            <div class="counter_number_right">
              <div class="counter_number counter"><span class="stat-count">20000</span>+</div>
              <h4 class="counter_name">HAPPY CUSTOMERS</h4>
            </div>
          </div>
          <!--counter box end--> 
          <!--counter box-->
          <div class="counter_box">
            <div class="counter_number_right">
              <div class="counter_number counter"><span class="stat-count">10</span>+</div>
              <h4 class="counter_name">SERVICES</h4>
            </div>
          </div>
          <!--counter box end--> 
        </div>
      </div>
    </div>
  </section>
  <!--/Service Provider Satrt End--> 
  
  
  
 
	 

	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>