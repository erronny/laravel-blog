<?php $__env->startSection('title', 'About | thedsolution'); ?>
<?php $__env->startSection('description', ''); ?>
<?php $__env->startSection('keywords', 'Blog | thedsolution'); ?>
<?php $__env->startSection('author', 'About'); ?>

<?php $__env->startSection('content'); ?>


<style>
* {
  box-sizing: border-box;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 100%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


</style>
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
        <div class="col-md-6 col-sm-6 about_l"> <img src="<?php echo e(asset('assets/dsolution/images/about/desk.jpg')); ?>" height="300" width="470" alt="desk" /> </div>
        <div class="header">
  <h2><?php echo e($pages->name); ?></h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2><?php echo e($pages->title); ?></h2>
      
      <!-- <div class="fakeimg" style="height:200px;">Image</div> -->
      
      <p><?php echo e($pages->detail); ?></p>
    </div>
    
  
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
            <div class="img-holder"> <img src="<?php echo e(asset('assets/dsolution/images/about/Team1.png')); ?>" class="img-circle" alt="Awesome Image"> </div>
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
            <div class="img-holder"> <img src="<?php echo e(asset('assets/dsolution/images/about/Team2.png')); ?>" class="img-circle" alt="Awesome Image"> </div>
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
            <div class="img-holder"> <img src="<?php echo e(asset('assets/dsolution/images/about/Team3.png')); ?>" class="img-circle" alt="Awesome Image"> </div>
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
            <div class="img-holder"> <img src="<?php echo e(asset('assets/dsolution/images/about/Team2.png')); ?>" class="img-circle" alt="Awesome Image"> </div>
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
<?php echo $__env->make('ui.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>