 <?php $__env->startSection('title', 'LakeACR.in'); ?>
<?php $__env->startSection('description', 'LakeACR is one of the Top Software Company, Business Analyst, Web Solution and ERP development company bhopal we offer all comprehensive solutions.'); ?>
<?php $__env->startSection('keywords', 'Software Development ,Responsive Website ,Web Application  ,Android Application
,Desktop Application,E-Commerce, ERP'); ?>
<?php $__env->startSection('author', 'LakeACR.in'); ?>

<?php $__env->startSection('content'); ?>
   
    
	<!-- BANNER -->
	<div class="section banner-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Contact</div>
					<ol class="breadcrumb">
						<li><a href="<?php echo e(URL('/')); ?>">Index</a></li>
						<li class="active">Contact Us</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- CONTACT -->
	<div class="section contact">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 col-md-12">
					<!-- MAPS -->
					<div class="maps-wraper">
						<div id="cd-zoom-in"></div>
						<div id="cd-zoom-out"></div>
						<div id="maps" class="maps" data-lat="23.259933" data-lng="77.412613">
						</div>
					</div>
					<div class="spacer-90"></div>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-3 col-md-3">
					<div class="widget download">
						<a href="#" class="btn btn-secondary btn-block btn-sidebar"><span class="fa  fa-file-pdf-o"></span> Company </a>
					</div>
					<div class="widget contact-info-sidebar">
						<div class="widget-title">
							Contact Info
						</div>
						<ul class="list-info">
							<li>
								<div class="info-icon">
									<span class="fa fa-map-marker"></span>
								</div>
								<div class="info-text">  Bhopal(MP) INDIA</div> </li>
							<li>
								<div class="info-icon">
									<span class="fa fa-phone"></span>
								</div>
								<div class="info-text">+91 8871224770</div>
							</li>
							<li>
								<div class="info-icon">
									<span class="fa fa-envelope"></span>
								</div>
								<div class="info-text">>info@lakeacr.com</div>
							</li>
							<li>
								<div class="info-icon">
									<span class="fa fa-clock-o"></span>
								</div>
								<div class="info-text">Mon - Sat 09:00 - 17:00</div>
							</li>
						</ul>
					</div> 

				</div>
				<div class="col-sm-9 col-md-9">
					<div class="content">
						<p class="section-heading-3"> </p>
						<div class="margin-bottom-30"></div>
						<h3 class="section-heading-2">
							Contact Details
						</h3>
						<form action = "/welcome" method = "post" class="form-contact" ata-toggle="validator" novalidate="true">
						<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
						
							<div class="form-group">
								<input type="text" class="form-control" name='name' placeholder="Full Name..." required="">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name='email' placeholder="Enter Address..." required="">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name='subject' placeholder="Subject...">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								 <textarea name='message' class="form-control" rows="6" placeholder="Write message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<div id="success"></div>
								<input type = 'submit' class="btn btn-primary" value = "Send"/>
								
							</div>
						</form>
						<div class="margin-bottom-50"></div>
						
					 </div>
				</div>

			</div>
			
		</div>
	</div>	

	
	<!-- INFO BOX -->
	<div class="section info overlap-bottom">
		<div class="container">
			<div class="row gutter-20">
			
				<div class="col-sm-4 col-md-4">
					<!-- BOX 1 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-phone"></i></div>
					<div class="body-content">
								<div class="heading">CALL US NOW</div>
							 <br>
							Mobile: +91 8847559315
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- BOX 2 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-map-marker"></i></div>
						<div class="body-content">
							<div class="heading">COME VISIT US</div>
							 Bhopal(MP) INDIA
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- BOX 3 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-envelope"></i></div>
						<div class="body-content">
							<div class="heading">SEND US A MESSAGE</div>
							Email<br>
							   info@lakeacr.com
						</div>
					</div>
				</div>			

				
			</div>

		</div>
	</div>

	 

	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>