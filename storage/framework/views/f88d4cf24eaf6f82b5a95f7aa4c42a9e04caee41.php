<?php $__env->startSection('title', 'About | thedsolution'); ?>
<?php $__env->startSection('description', ''); ?>
<?php $__env->startSection('keywords', 'Blog | thedsolution'); ?>
<?php $__env->startSection('author', 'About'); ?>

<?php $__env->startSection('content'); ?>
 <!--page_title Section Satrt-->
  <div id="page_title">
    <div class="container text-center">
      <div class="panel-heading">About Us</div>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">About Us</li>
      </ol>
    </div>
  </div>
  <!--page_title Section End--> 
  
  <!--page content Section Satrt-->
  <div id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 about_l"> <img src="<?php echo e(asset('images/about/desk.jpg')); ?>" height="300" width="470" alt="desk" /> </div>
        <div class="col-md-6 col-sm-6">
          <p>Digital Solution is a company established in 2018 provides insights about your business and plans it accordingly which will ultimately fulfill your business goals. We offer a wide range of services for small to medium sized businesses throughout the India. Our business services are affordable whilst never compromising on the high levels of service offered to all of our clients.


Our staff are highly skilled and marketing experts work hard to ensure that our clients have the best exposure possible online, helping them stand out from their competition. We started off working on a few individual projects for existing clients, and before long we were undertaking projects from other companies who had been recommended to use our services to help them move forward online.


Digital Solution main vision to reach every people from anywhere in India is to connect next generation Digital World by walk of life. We provide many of services not only for business just to spread the facilities and working given by us. The aim to company's thinking break the line of every barrier that takes company beyond the business.</p>
            
          
        </div>
      </div>
    </div>
  </div>
  <!--page content Section End--> 
  
  <!--Start team area-->
  <section class="team-area">
    <div class="container">
      <h1 class="panel-heading text-center">Our Team</h1>
      <div class="row"> 
        <!--Start single team member-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="single-team-member text-center">
            <div class="img-holder"> <img src="<?php echo e(asset('images/about/Team1.png')); ?>" class="img-circle" alt="Awesome Image"> </div>
            <div class="text-holder text-center">
              <h3>Aman singh</h3>
              <p>GST Expert</p>
              
            </div>
          </div>
        </div>
        <!--End single team member--> 
        <!--Start single team member-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="single-team-member text-center">
            <div class="img-holder"> <img src="<?php echo e(asset('images/about/Team2.png')); ?>" class="img-circle" alt="Awesome Image"> </div>
            <div class="text-holder text-center">
              <h3>Sandeep Sahu</h3>
              <p>Pan Expert </p>
              
            </div>
          </div>
        </div>
        <!--End single team member--> 
        <!--Start single team member-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="single-team-member text-center">
            <div class="img-holder"> <img src="<?php echo e(asset('images/about/Team3.png')); ?>" class="img-circle" alt="Awesome Image"> </div>
            <div class="text-holder text-center">
              <h3>Hemant Kushwaha</h3>
              <p>Gumasta Expert</p>
              
            </div>
          </div>
        </div>
        <!--End single team member--> 
        <!--Start single team member-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="single-team-member text-center">
            <div class="img-holder"> <img src="<?php echo e(asset('images/about/Team2.png')); ?>" class="img-circle" alt="Awesome Image"> </div>
            <div class="text-holder text-center">
              <h3>Nupur Kashyap</h3>
              <p>Digital Expert</p>
              
            </div>
          </div>
        </div>
        <!--End single team member--> 
      </div>
    </div>
  </section>
  <!--/End Start team area--> 
  
  <!--Service Provider Satrt-->
  <section id="service_provider">
    <div class="container text-center">
      <h1 class="panel-heading">Mp's largest digital service provider</h1>
      <div class="row">
        <div class="col-md-12"> 
          <!--counter box-->
          <div class="counter_box">
            <div class="counter_number_right">
              <div class="counter_number counter"><span class="stat-count">1000</span>+</div>
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