<?php $__env->startSection('title', 'Contact Us | thedsolution'); ?>
<?php $__env->startSection('description', ''); ?>
<?php $__env->startSection('keywords', 'Blog | thedsolution'); ?>
<?php $__env->startSection('author', 'thedsolution'); ?>


<?php $__env->startSection('content'); ?>
   
 <!--Page Title Section Satrt-->
  <div id="page_title">
    <div class="container text-center">
      <div class="panel-heading">contact us</div>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Contact us</li>
      </ol>
    </div>
  </div>
  <!--Page Title Section End--> 
  
  <!--Contacts Section Satrt--> 
  <!--Contacts Section End--> 
  
  <!--Contact Form Start-->
  <section id="Contact_form">
    <div class="contacts_mape">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1229.5864897864183!2d75.76904979762698!3d26.886852269789564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1499667244188" width="1600" height="490" allowfullscreen></iframe>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="booking_form">
            <div class="container-fluid">
              <div class="row">
                <form action = "/welcome" method = "post" class="form-contact" ata-toggle="validator" novalidate="true">
						<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                  <h2>Contact Form</h2>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control" id="name" name='name' placeholder="Full Name" type="text"/>
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control" id="Email" name='email' placeholder="Email" type="text"/>
                  </div>
                  
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control" id="Phone_number" name='number' placeholder="Phone Number" type="text"/>
                  </div>
                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <div class="input-group">
                      <textarea class="form-control" name='message' rows="6" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div id="success"></div>
				<input type = 'submit' class="btn btn-primary btn-skin" value = "Send"/>
								
				</div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="about_info">
            <h2>Contact info</h2>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>Digital Solution Shop No 1, First Floor,Chitransh Bhawan, Near Govt School and SBI ATM, Anand Nagar, Bhopal, Madhya Pradesh 462022</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> +91 - 89821 27757</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Contact Form End--> 
	 

	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>