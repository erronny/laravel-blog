<html lang="<?php echo e(app()->getLocale()); ?>">
  
<!-- Mirrored from rudhisasmito.com/demo/walls/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 18:56:06 GMT -->
<!--- header-->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAKEACR IT SOLUTION PRIVATE LIMITED</title>
    <meta name="description" content="LakeACR is one of the Top Software Company, Business Analyst, Web Solution and ERP development company bhopal we offer all comprehensive solutions.">
    <meta name="keywords" content="Software Development ,Responsive Website ,Web Application  ,Android Application
,Desktop Application,E-Commerce, ERP">
    <meta name="author" content="LakeACR.in"> 
    
    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.ico')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('images/logo.png')); ?>">

    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('images/logo.png')); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('images/logo.png')); ?>">
    
    <!-- ==============================================
    CSS VENDOR
    =============================================== -->

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/vendor/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/vendor/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/vendor/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/vendor/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/vendor/magnific-popup.css')); ?>">
    
    <!-- ==============================================
    Custom Stylesheet
    =============================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>" />
    <!--Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116670674-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116670674-1');
</script>
    <script type="text/javascript" src="<?php echo e(asset('js/vendor/modernizr.min.js')); ?>"></script>

</head>

<body>

    <!-- LOAD PAGE -->
    <div class="animationload">
        <div class="loader"></div>
    </div>
    
    <!-- BACK TO TOP SECTION -->
    <a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

    <!-- HEADER -->
   <!-- <div class="header header-1">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <div class="topbar-left">
                            <div class="welcome-text">
                            We help the world in growing since 2018
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6">
                        <div class="topbar-right">
                            <ul class="topbar-menu">
                                <li><a href="#" title="Career">Career</a></li>
                                <li><a href="#" title="Give Feedback">Give Feedback</a></li>
                                <li><a href="contact.html" title="Contact Us">Contact Us</a></li>
                                <li><a href="login.php" title="Login/Sign Up">Login  Sign Up</a></li>
                            </ul>
                            <ul class="topbar-sosmed">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <!-- NAVBAR SECTION -->
     <div class="container">
    <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
 
    <!-- BANNER -->
    <div id="slides" class="section banner">
        <ul class="slides-container">
            <li>
                <img src="images/slide-2.png" alt="">
                <!--<div class="overlay-bg"></div>-->
                <div class="container">
                    <div class="wrap-caption">
                        <h2 class="caption-heading" style=color:black;>
                            We provide </n> best in industry </n> software solutions
                        </h2>
                        <a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="<?php echo e(URL('contact')); ?>" class="btn btn-secondary" title="CONTACT US">CONTACT US</a>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slide-3.jpg" alt="">
                <!--<div class="overlay-bg"></div>-->
                <div class="container">
                    <div class="wrap-caption right">
                        <h2 class="caption-heading">
                            ERP Application providers for Business Solutions
                        </h2>
                        <a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/new2.jpg" alt="">
                <!--<div class="overlay-bg"></div>-->
                <div class="container">
                    <div class="wrap-caption right">
                        
                        <h2 class="caption-heading" style=color:black;>
                            Delivering Solutions that improve lives
                        </h2>
                        <a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a>
                    </div>
                </div>
            </li>
            
        </ul>

        <!--<nav class="slides-navigation">-->
        <!--    <div class="container">-->
        <!--        <a href="#" class="next">-->
        <!--            <i class="fa fa-chevron-right"></i>-->
        <!--        </a>-->
        <!--        <a href="#" class="prev">-->
        <!--            <i class="fa fa-chevron-left"></i>-->
        <!--        </a>-->
     <!--       </div>-->
     <!--   </nav>-->
        
    </div>

    <!-- ABOUT -->
    <div class="section feature">
        <div class="container">
            
            <div class="row">
                <div class="spacer-70">
                    <div class="col-sm-12 col-md-12">
                    <div class="jumbo-heading" style="text-align:center;">
                        <h2>LEADING THE WAY IN SOFTWARE SOLUTION</h2>
                    </div>
                    <div>
                        <p style="text-align:center;">LakeACR is the leading India based IT and consultancy, offering software solutions for large and medium sized for various government / private organisation.Having a core team, for developing any software. LakeACR furthermore provides software analysis,LakeACR successfully Software corporate clients as well as small and medium sized Company in strategic planning,</p>
                    <p style="text-align:center;">Trust, reliability and sustainability have made us grow with our projects over the years. Today happy customers from various industries contribute to our continued growth.Your cultural and technological guide on the way to a better collaboration and communication across the Company.</p>
                    </div>
                </div>
           </div>
           </div>
           </div>
           </div>
    <!--<div class="section project">-->
        <!--<div class="container">-->
            <div class="row">       
           <div>
               <img src="images/details.png" alt="" class="img-responsive">
           </div>
           </div>
           <!--</div>-->
           <!--</div>-->
          
            
  <!--  <div class="section feature">-->
        <!--<div class="container">-->
        <!--    <div class="row">-->
        <!--        <div class="spacer-70"></div>-->
        <!--        <div class="col-sm-5 col-md-5">-->
                    <!--<div class="jumbo-heading">-->
                    <!--    <h2>LEADING THE WAY IN SOFTWARE SOLUTION</h2>-->
                    <!--</div>-->
                
                
        <!--            <a class="btn btn-secondary">READ MORE</a>-->
        <!--        </div>-->
        <!--        <div class="col-sm-7 col-md-7">-->
        <!--            <div class="about-img">-->
        <!--                <div class="about-img-top">-->
        <!--                    <div class="hover-img">-->
        <!--                        <img src="images/about-img-2.jpg" alt="" class="img-responsive">-->
        <!--                    </div>-->
        <!--                </div>-->
                        
        <!--                <div class="about-img-bottom">-->
        <!--                    <div class="hover-img">-->
        <!--                        <img src="images/about-img-1.jpg" alt="" class="img-responsive">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="clearfix"></div>-->
        <!--        <div class="spacer-70"></div>-->
        <!--    </div>-->
            
<!--<div class="section feature">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-12 col-md-12">-->
<!--                    <div class="row overlap feature-gutter">-->
<!--                        <div class="col-sm-4 col-md-4 border-right">-->
                            <!-- BOX 1 -->
<!--                            <div class="feature-box-8">-->
<!--                                <div class="media">-->
<!--                                    <img src="images/why-thumb-1.png" alt="rud" class="img-responsive">-->
<!--                                </div>-->
<!--                                <div class="body">-->
<!--                                    <a href="services-detail.html" class="title">Technology &amp; Innovation</a>-->
<!--                                    <p>Technology has the power to reshape in turn the society that shapes it.</p>-->
                                    <!-- <a href="services-detail.html" class="readmore">READ MORE</a> -->
<!--                                    <a href="" class="readmore">READ MORE</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-sm-4 col-md-4 border-right">-->
                            <!-- BOX 2 -->
<!--                            <div class="feature-box-8">-->
<!--                                <div class="media">-->
<!--                                    <img src="images/why-thumb-3.jpg" alt="rud" class="img-responsive">-->
<!--                                </div>-->
<!--                                <div class="body">-->
<!--                                    <a href="services-detail.html" class="title">Smart Security Network</a>-->
<!--                                    <p>Security used to be an inconvenience sometimes, but now it’s a necessity all..</p>-->
<!--                                    <a href="" class="readmore">READ MORE</a>-->
<!--                                </div>-->
<!--                            </div>-->
                            
<!--                        </div>-->
<!--                        <div class="col-sm-4 col-md-4">-->
                            <!-- BOX 3 -->
<!--                            <div class="feature-box-8">-->
<!--                                <div class="media">-->
<!--                                    <img src="images/why-thumb-2.jpg" alt="rud" class="img-responsive">-->
<!--                                </div>-->
<!--                                <div class="body">-->
<!--                                    <a href="services-detail.html" class="title">Our Work</a>-->
<!--                                    <p>Experience is not important but mind is important</p>-->
<!--                                    <a href="services-detail.html" class="readmore">READ MORE</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--</div>-->
            

        </div>
    </div>
     
    <!-- SERVICES -->
    <div class="section services" style="align:center;">
        <div class="container">
            <div class="row">
                <div class="jumbo-heading" style="text-align:center;">
                        <h2>SERVING INDUSTRIES</h2>
                    </div>
                    </div>
                <div class="clearfix" style="align:center;"></div>
                <!-- Services 1 -->
                <div class="col-sm-8 col-md-12" style="align:center;">
                    <!--<div class="box-icon-5">-->
                        <div class="icon">
                            <i class=" "></i>
                        </div>
                        <div class="body-content">
                            <div style="align:center;">
                            <img src="images/indus.png" alt="rud" class="img-responsive">
                            </div>
                            <!--<h4 class="title">E-COMMERCE</h4>-->
                            <div class="text"></div>
                            <!--<a href="services.html" class="readmore">READ MORE</a>-->
                        </div>
             <!--           <div class="box-icon-5">-->
             <!--               <div class="icon">-->
             <!--               <i class=" "></i>-->
             <!--           </div>-->
             <!--           <div style="align:center;">-->
                         <!--   <img src="images/edu.png" alt="rud" class="img-responsive">-->
                         <!--</div>-->
                        <!--<div class="body-content">-->
             <!--               <h4 class="title">EDUCATION</h4>-->
             <!--               <div class="text"></div>-->
                            <!--<a href="services.html" class="readmore">READ MORE</a>-->
             <!--           </div>-->
                    </div>
                </div>
                <!-- Services 2 -->
                <!--<div class="col-sm-4 col-md-4">-->
                <!--    <div class="box-icon-5">-->
                <!--          <div class="icon">-->
          <!--                  <i class=" "></i>-->
          <!--              </div>-->
          <!--              <div style="align:center;">-->
                <!--            <img src="images/elec.png" alt="rud" class="img-responsive">-->
                <!--         </div>-->
                        <!--<div class="body-content">-->
          <!--                  <h4 class="title">ENERGY & UTILITIES</h4>-->
          <!--                  <div class="text"> </div>-->
                            <!--<a href="#" class="readmore">READ MORE</a>-->
          <!--              </div>-->
          <!--              <div class="box-icon-5">-->
          <!--                    <div class="icon">-->
          <!--                  <i class=" "></i>-->
          <!--              </div>-->
          <!--              <div style="align:center;">-->
                <!--            <img src="images/skills.png" alt="rud" class="img-responsive">-->
                <!--         </div>-->
                        <!--<div class="body-content">-->
          <!--                  <h4 class="title">SKILLS & TRAINING</h4>-->
          <!--                  <div class="text"></div>-->
                            <!--<a href="services.html" class="readmore">READ MORE</a>-->
          <!--              </div>-->
          <!--          </div>-->
                <!--</div>-->
                <!-- Services 3 -->
                <!--<div class="col-sm-4 col-md-4">-->
                <!--    <div class="box-icon-5">-->
          <!--              <div style="align:center;">-->
                <!--            <img src="images/skills.png" alt="rud" class="img-responsive">-->
                <!--         </div>-->
                        <!--<div class="body-content">-->
          <!--                  <h4 class="title">SKILLS & TRAINING</h4>-->
          <!--                  <div class="text"></div>-->
                            <!--<a href="services.html" class="readmore">READ MORE</a>-->
          <!--              </div>-->
          <!--          </div>-->
                <!--</div>-->
                <!-- Services 4 -->
                <!--<div class="col-sm-4 col-md-4">-->
                <!--    <div class="box-icon-5">-->
          <!--              <div class="icon">-->
          <!--                  <i class=" "></i>-->
          <!--              </div>-->
          <!--              <div class="body-content">-->
          <!--                  <h4 class="title">SOFTWARE/WEB SOLUTIONS</h4>-->
          <!--                  <div class="text"></div>-->
          <!--                  <a href="services.html" class="readmore">READ MORE</a>-->
          <!--              </div>-->
          <!--          </div>-->
                <!--</div>-->
                <!-- Services 5 -->
                <!--<div class="col-sm-4 col-md-4">-->
                <!--    <div class="box-icon-5">-->
          <!--              <div class="icon">-->
          <!--                  <i class=" "></i>-->
          <!--              </div>-->
          <!--              <div class="body-content">-->
          <!--                  <h4 class="title">CONSULTING SERVICE</h4>-->
          <!--                  <div class="text"></div>-->
          <!--                  <a href="#" class="readmore">READ MORE</a>-->
          <!--              </div>-->
          <!--          </div>-->
                <!--</div>-->
                <!-- Services 6 -->
                <!--<div class="col-sm-4 col-md-4">-->
                <!--    <div class="box-icon-5">-->
          <!--              <div class="icon">-->
          <!--                  <i class=" "></i>-->
          <!--              </div>-->
          <!--              <div class="body-content">-->
          <!--                  <h4 class="title">DIGITAL MARKETING</h4>-->
          <!--                  <div class="text"> </div>-->
          <!--                  <a href="#" class="readmore">READ MORE</a>-->
          <!--              </div>-->
          <!--          </div>-->
                </div>
                
            </div>
        </div>
    </div>

    <!-- PROJECTS -->
    <div class="section project bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-12" style="color:#fff; text-align:center;">
                    <p>
                    <strong>“ Software Solutions developed by LakeACR IT Solution provides good option for large multinationals that want intelligent solutions for both streams, that too in a single & cost-effective solution. ” </strong>
                   </p>
              </div>
                <!--<div class="clearfix"></div>-->

                <!--<div id="caro-project">-->
                    <!-- Item 1 -->
                <!--    <div class="item">-->
                <!--        <div class="feature-box-7">-->
                <!--            <div class="media">-->
                <!--                <img src="images/first_project.png" alt="rud" class="img-responsive">-->
                <!--            </div>-->
                <!--            <div class="body">-->
                <!--                <div class="info-box">-->
                <!--                    <div class="text">-->
                <!--                        <div class="title">Wed Design</div>-->
                <!--                        <p> </p>-->
                <!--                        <a href="project-detail.html" class="readmore">READ MORE</a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                    <!-- Item 2 -->
                    <!--<div class="item">-->
                    <!--    <div class="feature-box-7">-->
                    <!--        <div class="media">-->
                    <!--            <img src="images/second_project.jpg" alt="rud" class="img-responsive">-->
                    <!--        </div>-->
                    <!--        <div class="body">-->
                    <!--            <div class="info-box">-->
                    <!--                <div class="text">-->
                    <!--                    <div class="title">App Design</div>-->
                    <!--                    <p> </p>-->
                    <!--                    <a href="project-detail.html" class="readmore">READ MORE</a>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--        <div class="item">-->
                    <!--    <div class="feature-box-7">-->
                    <!--        <div class="media">-->
                    <!--            <img src="images/project-img7.jpg" alt="rud" height="80px" class="img-responsive">-->
                    <!--        </div>-->
                    <!--        <div class="body">-->
                    <!--            <div class="info-box">-->
                    <!--                <div class="text">-->
                    <!--                    <div class="title">Desktop Application </div>-->
                    <!--                    <p></p>-->
                    <!--                    <a href="project-detail.html" class="readmore">READ MORE</a>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- Item 3 -->
                    <!--<div class="item">-->
                    <!--    <div class="feature-box-7">-->
                    <!--        <div class="media">-->
                    <!--            <img src="images/project-img6.jpg" alt="rud" class="img-responsive">-->
                    <!--        </div>-->
                    <!--        <div class="body">-->
                    <!--            <div class="info-box">-->
                    <!--                <div class="text">-->
                    <!--                    <div class="title">Logo Design</div>-->
                    <!--                    <p></p>-->
                    <!--                    <a href="project-detail.html" class="readmore">READ MORE</a>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- Item 4 -->
            
                    
                    
                    
                </div>

            </div>
            
        </div>
        
    </div>
        
    <!-- TESTIMONIALS --> 
    <!--<div class="section testimony">-->
    <!--    <div class="container">-->
            
    <!--        <div class="row">-->
                
    <!--            <div class="col-sm-12 col-md-12">-->

    <!--                <div class="row">-->
    <!--                    <div class="col-sm-12 col-md-12">-->
    <!--                        <h2 class="section-heading">-->
    <!--                             TEAM MEMBER-->
    <!--                        </h2>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--                <div id="owl-testimony">-->
    <!--                    <div class="item">-->
                        
    <!--                    </div>-->
    <!--                    <div class="item">-->
    <!--                        <div class="testimonial-1">-->
    <!--                          <div class="media"><img src="images/anurag.jpg" alt="" class="img-responsive"></div>-->
    <!--                          <div class="body">-->
    <!--                            <div class="title">ANURAG GUPTA</div>-->
    <!--                            <div class="company">Founder </div>-->
    <!--                            <p> </p>-->
    <!--                          </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
                    
                    
                        
                        
    <!--                </div>-->
                    
    <!--            </div>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
    <!-- CTA -->
    <div class="section cta">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="cta-1">
                        <div class="body-text">
                            <h3>We’ll identify your needs and enhance your business growth.</h3>
                        </div>
                        <div class="body-action">
                            <a href="#" class="btn btn-secondary">REQUEST A QUICK QUOTE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BLOG -->
    <div class="section blog">
        <div class="container">
            <div class="row">
                
                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading">
                        RECENT PROJECTS
                    </h2>
                </div>

                <div class="col-sm-4 col-md-4">
                    <!-- BOX 1 -->
                    <div class="box-news-1">
                        <div class="media gbr">
                            <img src="images/project2.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="title"><a href="news-detail.html" title=""> </a></div>
                            <div class="meta">
                                <!--<span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2018</span>-->
                                <!--<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <!-- BOX 2 -->
                    <div class="box-news-1">
                        <div class="media gbr">
                            <img src="images/project3.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="title"><a href="news-detail.html" title=""></a></div>
                            <div class="meta">
                                <!--<span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2018</span>-->
                                <!--<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <!-- BOX 3 -->
                    <div class="box-news-1">
                        <div class="media gbr">
                            <img src="images/project4.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="title"><a href="news-detail.html" title=""></a></div>
                            <div class="meta">
                                <!--<span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2018</span>-->
                                <!--<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>-->
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div> 

    <!-- PARTNER -->
    
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
                         Office Telephone: +91 7554930332 <br>
                            Mobile: +91 8871224770
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
                                 >info@lakeacr.com
                        </div>
                    </div>
                </div>          

                
            </div>

        </div>
    </div>


    
     
    <!-- FOOTER SECTION -->
    <div class="particles-bg"></div>
<div class="particles-animation-wrapper">
<div class="particle particle-1"></div>
<div class="particle particle-2"></div>
<div class="particle particle-3"></div>
<div class="particle particle-4"></div>
</div>
    <div class="footer">
        
        <div class="container">
            
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="footer-item">
                        <a style=color:white;>LakeACR IT Solution Private Limited</a>
                        <!--<img src="images/logo.png" alt="logo bottom" class="logo-bottom">-->
                        
                        <div class="footer-sosmed">
                            <a href="#" title="">
                                <div class="item">
                                    <i class="fa fa-facebook"></i>
                                </div>
                            </a>
                            <a href="#" title="">
                                <div class="item">
                                    <i class="fa fa-twitter"></i>
                                </div>
                            </a>
                            <a href="#" title="">
                                <div class="item">
                                    <i class="fa fa-instagram"></i>
                                </div>
                            </a>
                            <a href="#" title="">
                                <div class="item">
                                    <i class="fa fa-pinterest"></i>
                                </div>
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="footer-item">
                        <div class="footer-title">
                            Recent Post
                        </div>
                        <ul class="recent-post">
                            <li><a href="#" title=""></a>
                            <span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2019</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="footer-item">
                        <div class="footer-title">
                            Our Services
                        </div>
                        <ul class="list">
                            <li><a href="<?php echo e(URL('software-development')); ?>">Software Development</a></li>
                                <li><a href="<?php echo e(URL('Responsive Website')); ?>">Responsive Website</a></li>
                                <li><a href="<?php echo e(URL('Web Application')); ?>">Web Development</a></li>
                                <li><a href="<?php echo e(URL('Android Application')); ?>">Android Application</a></li>
                                <li><a href="<?php echo e(URL('Web Application')); ?>">Web Application</a></li>
                                <li><a href="<?php echo e(URL('E-Commerce')); ?>">E-Commerce</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="footer-item">
                        <div class="footer-title">
                            Subscribe
                        </div>
                        <p> </p>
                        <form action="#" class="footer-subscribe">
                          <input type="email" name="EMAIL" class="form-control" placeholder="enter your email">
                          <input id="p_submit" type="submit" value="send">
                          <label for="p_submit"><i class="fa fa-envelope"></i></label>
                          <p>Get latest updates and offers.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="fcopy">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p class="ftex">&copy; 2019 All rights reserved LAKEACR IT SOLUTION PRIVATE LIMITED</p> 
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <!-- JS VENDOR -->
    <script type="text/javascript" src="js/vendor/jquery.min.js"></script>
    <script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/vendor/jquery.superslides.js"></script>
    <script type="text/javascript" src="js/vendor/owl.carousel.js"></script>
    <script type="text/javascript" src="js/vendor/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="js/vendor/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/vendor/easings.js"></script>
    <script type="text/javascript" src="js/vendor/isotope.pkgd.min.js"></script>

    <!-- sendmail -->
    <script type="text/javascript" src="js/vendor/validator.min.js"></script>
    <script type="text/javascript" src="js/vendor/form-scripts.js"></script>
    
    <script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>

    <script type="text/javascript" src="js/script.js"></script>

   <!--   <script>
        @charset  "UTF-8";.mat-elevation-z0{box-shadow:0 0 0 0 rgba(0,0,0,.2),0 0 0 0 rgba(0,0,0,.14),0 0 0 0 rgba(0,0,0,.12)}.mat-elevation-z1{box-shadow:0 2px 1px -1px rgba(0,0,0,.2),0 1px 1px 0 rgba(0,0,0,.14),0 1px 3px 0 rgba(0,0,0,.12)}.mat-elevation-z2{box-shadow:0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12)}.mat-elevation-z3{box-shadow:0 3px 3px -2px rgba(0,0,0,.2),0 3px 4px 0 rgba(0,0,0,.14),0 1px 8px 0 rgba(0,0,0,.12)}.mat-elevation-z4{box-shadow:0 2px 4px -1px rgba(0,0,0,.2),0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12)}.mat-elevation-z5{box-shadow:0 3px 5px -1px rgba(0,0,0,.2),0 5px 8px 0 rgba(0,0,0,.14),0 1px 14px 0 rgba(0,0,0,.12)}.mat-elevation-z6{box-shadow:0 3px 5px -1px rgba(0,0,0,.2),0 6px 10px 0 rgba(0,0,0,.14),0 1px 18px 0 rgba(0,0,0,.12)}.mat-elevation-z7{box-shadow:0 4px 5px -2px rgba(0,0,0,.2),0 7px 10px 1px rgba(0,0,0,.14),0 2px 16px 1px rgba(0,0,0,.12)}.mat-elevation-z8{box-shadow:0 5px 5px -3px rgba(0,0,0,.2),0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12)}.mat-elevation-z9{box-shadow:0 5px 6px -3px rgba(0,0,0,.2),0 9px 12px 1px rgba(0,0,0,.14),0 3px 16px 2px rgba(0,0,0,.12)}.mat-elevation-z10{box-shadow:0 6px 6px -3px rgba(0,0,0,.2),0 10px 14px 1px rgba(0,0,0,.14),0 4px 18px 3px rgba(0,0,0,.12)}.mat-elevation-z11{box-shadow:0 6px 7px -4px rgba(0,0,0,.2),0 11px 15px 1px rgba(0,0,0,.14),0 4px 20px 3px rgba(0,0,0,.12)}.mat-elevation-z12{box-shadow:0 7px 8px -4px rgba(0,0,0,.2),0 12px 17px 2px rgba(0,0,0,.14),0 5px 22px 4px rgba(0,0,0,.12)}.mat-elevation-z13{box-shadow:0 7px 8px -4px rgba(0,0,0,.2),0 13px 19px 2px rgba(0,0,0,.14),0 5px 24px 4px rgba(0,0,0,.12)}.mat-elevation-z14{box-shadow:0 7px 9px -4px rgba(0,0,0,.2),0 14px 21px 2px rgba(0,0,0,.14),0 5px 26px 4px rgba(0,0,0,.12)}.mat-elevation-z15{box-shadow:0 8px 9px -5px rgba(0,0,0,.2),0 15px 22px 2px rgba(0,0,0,.14),0 6px 28px 5px rgba(0,0,0,.12)}.mat-elevation-z16{box-shadow:0 8px 10px -5px rgba(0,0,0,.2),0 16px 24px 2px rgba(0,0,0,.14),0 6px 30px 5px rgba(0,0,0,.12)}.mat-elevation-z17{box-shadow:0 8px 11px -5px rgba(0,0,0,.2),0 17px 26px 2px rgba(0,0,0,.14),0 6px 32px 5px rgba(0,0,0,.12)}.mat-elevation-z18{box-shadow:0 9px 11px -5px rgba(0,0,0,.2),0 18px 28px 2px rgba(0,0,0,.14),0 7px 34px 6px rgba(0,0,0,.12)}.mat-elevation-z19{box-shadow:0 9px 12px -6px rgba(0,0,0,.2),0 19px 29px 2px rgba(0,0,0,.14),0 7px 36px 6px rgba(0,0,0,.12)}.mat-elevation-z20{box-shadow:0 10px 13px -6px rgba(0,0,0,.2),0 20px 31px 3px rgba(0,0,0,.14),0 8px 38px 7px rgba(0,0,0,.12)}.mat-elevation-z21{box-shadow:0 10px 13px -6px rgba(0,0,0,.2),0 21px 33px 3px rgba(0,0,0,.14),0 8px 40px 7px rgba(0,0,0,.12)}.mat-elevation-z22{box-shadow:0 10px 14px -6px rgba(0,0,0,.2),0 22px 35px 3px rgba(0,0,0,.14),0 8px 42px 7px rgba(0,0,0,.12)}.mat-elevation-z23{box-shadow:0 11px 14px -7px rgba(0,0,0,.2),0 23px 36px 3px rgba(0,0,0,.14),0 9px 44px 8px rgba(0,0,0,.12)}.mat-elevation-z24{box-shadow:0 11px 15px -7px rgba(0,0,0,.2),0 24px 38px 3px rgba(0,0,0,.14),0 9px 46px 8px rgba(0,0,0,.12)}.mat-h1,.mat-headline,.mat-typography h1{font:400 24px/32px Roboto,"Helvetica Neue",sans-serif;margin:0 0 16px}.mat-h2,.mat-title,.mat-typography h2{font:500 20px/32px Roboto,"Helvetica Neue",sans-serif;margin:0 0 16px}.mat-h3,.mat-subheading-2,.mat-typography h3{font:400 16px/28px Roboto,"Helvetica Neue",sans-serif;margin:0 0 16px}.mat-h4,.mat-subheading-1,.mat-typography h4{font:400 15px/24px Roboto,"Helvetica Neue",sans-serif;margin:0 0 16px}.mat-h5,.mat-typography h5{font:400 11.62px/20px Roboto,"Helvetica Neue",sans-serif;margin:0 0 12px}.mat-h6,.mat-typography h6{font:400 9.38px/20px Roboto,"Helvetica Neue",sans-serif;margin:0 0 12px}.mat-body-2,.mat-body-strong{font:500 14px/24px Roboto,"Helvetica Neue",sans-serif}.mat-body,.mat-body-1,.mat-typography{font:400 14px/20px Roboto,"Helvetica Neue",sans-serif}.mat-body p,.mat-body-1 p,.mat-typography p{margin:0 0 12px}.mat-caption,.mat-small{font:400 12px/20px Roboto,"Helvetica Neue",sans-serif}.mat-display-4,.mat-typography .mat-display-4{font:300 112px/112px Roboto,"Helvetica Neue",sans-serif;margin:0 0 56px;letter-spacing:-.05em}.mat-display-3,.mat-typography .mat-display-3{font:400 56px/56px Roboto,"Helvetica Neue",sans-serif;margin:0 0 64px;letter-spacing:-.02em}.mat-display-2,.mat-typography .mat-display-2{font:400 45px/48px Roboto,"Helvetica Neue",sans-serif;margin:0 0 64px;letter-spacing:-.005em}.mat-display-1,.mat-typography .mat-display-1{font:400 34px/40px Roboto,"Helvetica Neue",sans-serif;margin:0 0 64px}.mat-button,.mat-fab,.mat-flat-button,.mat-icon-button,.mat-mini-fab,.mat-raised-button,.mat-stroked-button{font-family:Roboto,helvetica neue,sans-serif;font-size:14px;font-weight:500}.mat-button-toggle,.mat-card{font-family:Roboto,helvetica neue,sans-serif}.mat-card-title{font-size:24px;font-weight:400}.mat-card-content,.mat-card-header .mat-card-title,.mat-card-subtitle{font-size:14px}.mat-checkbox{font-family:Roboto,helvetica neue,sans-serif}.mat-checkbox-layout .mat-checkbox-label{line-height:24px}.mat-chip{font-size:13px;line-height:18px}.mat-chip .mat-chip-remove.mat-icon{font-size:18px}.mat-table{font-family:Roboto,helvetica neue,sans-serif}.mat-header-cell{font-size:12px;font-weight:500}.mat-cell{font-size:14px}.mat-calendar{font-family:Roboto,helvetica neue,sans-serif}.mat-calendar-body{font-size:13px}.mat-calendar-body-label,.mat-calendar-period-button{font-size:14px;font-weight:500}.mat-calendar-table-header th{font-size:11px;font-weight:400}.mat-dialog-title{font:500 20px/32px Roboto,"Helvetica Neue",sans-serif}.mat-expansion-panel-header{font-family:Roboto,helvetica neue,sans-serif;font-size:15px;font-weight:400}.mat-expansion-panel-content{font:400 14px/20px Roboto,"Helvetica Neue",sans-serif}.mat-form-field{font-size:inherit;font-weight:400;line-height:1.125;font-family:Roboto,helvetica neue,sans-serif}.mat-form-field-wrapper{padding-bottom:1.25em}.mat-form-field-prefix .mat-icon,.mat-form-field-suffix .mat-icon{font-size:150%;line-height:1.125}.mat-form-field-prefix .mat-icon-button,.mat-form-field-suffix .mat-icon-button{height:1.5em;width:1.5em}.mat-form-field-prefix .mat-icon-button .mat-icon,.mat-form-field-suffix .mat-icon-button .mat-icon{height:1.125em;line-height:1.125}.mat-form-field-infix{padding:.4375em 0;border-top:.84375em solid transparent}.mat-form-field-can-float .mat-input-server:focus+.mat-form-field-label-wrapper .mat-form-field-label,.mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label{transform:translateY(-1.28125em) scale(.75) perspective(100px) translateZ(.001px);-ms-transform:translateY(-1.28125em) scale(.75);width:133.33333333%}.mat-form-field-can-float .mat-form-field-autofill-control:-webkit-autofill+.mat-form-field-label-wrapper .mat-form-field-label{transform:translateY(-1.28125em) scale(.75) perspective(100px) translateZ(.00101px);-ms-transform:translateY(-1.28124em) scale(.75);width:133.33334333%}.mat-form-field-can-float .mat-input-server[label]:not(:label-shown)+.mat-form-field-label-wrapper .mat-form-field-label{transform:translateY(-1.28125em) scale(.75) perspective(100px) translateZ(.00102px);-ms-transform:translateY(-1.28123em) scale(.75);width:133.33335333%}.mat-form-field-label-wrapper{top:-.84375em;padding-top:.84375em}.mat-form-field-label{top:1.28125em}.mat-form-field-underline{bottom:1.25em}.mat-form-field-subscript-wrapper{font-size:75%;margin-top:.54166667em;top:calc(100% - 1.66666667em)}.mat-grid-tile-footer,.mat-grid-tile-header{font-size:14px}.mat-grid-tile-footer .mat-line,.mat-grid-tile-header .mat-line{white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;box-sizing:border-box}.mat-grid-tile-footer .mat-line:nth-child(n+2),.mat-grid-tile-header .mat-line:nth-child(n+2){font-size:12px}input.mat-input-element{margin-top:-.0625em}.mat-menu-item{font-family:Roboto,helvetica neue,sans-serif;font-size:16px;font-weight:400}.mat-paginator,.mat-paginator-page-size .mat-select-trigger{font-family:Roboto,helvetica neue,sans-serif;font-size:12px}.mat-radio-button,.mat-select{font-family:Roboto,helvetica neue,sans-serif}.mat-select-trigger{height:1.125em}.mat-slide-toggle-content{font:400 14px/20px Roboto,"Helvetica Neue",sans-serif}.mat-slider-thumb-label-text{font-family:Roboto,helvetica neue,sans-serif;font-size:12px;font-weight:500}.mat-stepper-horizontal,.mat-stepper-vertical{font-family:Roboto,helvetica neue,sans-serif}.mat-step-label{font-size:14px;font-weight:400}.mat-step-label-selected{font-size:14px;font-weight:500}.mat-tab-group{font-family:Roboto,helvetica neue,sans-serif}.mat-tab-label,.mat-tab-link{font-family:Roboto,helvetica neue,sans-serif;font-size:14px;font-weight:500}.mat-toolbar,.mat-toolbar h1,.mat-toolbar h2,.mat-toolbar h3,.mat-toolbar h4,.mat-toolbar h5,.mat-toolbar h6{font:500 20px/32px Roboto,"Helvetica Neue",sans-serif;margin:0}.mat-tooltip{font-family:Roboto,helvetica neue,sans-serif;font-size:10px;padding-top:6px;padding-bottom:6px}.mat-tooltip-handset{font-size:14px;padding-top:9px;padding-bottom:9px}.mat-list-item,.mat-list-option{font-family:Roboto,helvetica neue,sans-serif}.mat-list .mat-list-item,.mat-nav-list .mat-list-item,.mat-selection-list .mat-list-item{font-size:16px}.mat-list .mat-list-item .mat-line,.mat-nav-list .mat-list-item .mat-line,.mat-selection-list .mat-list-item .mat-line{white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;box-sizing:border-box}.mat-list .mat-list-item .mat-line:nth-child(n+2),.mat-nav-list .mat-list-item .mat-line:nth-child(n+2),.mat-selection-list .mat-list-item .mat-line:nth-child(n+2){font-size:14px}.mat-list .mat-list-option,.mat-nav-list .mat-list-option,.mat-selection-list .mat-list-option{font-size:16px}.mat-list .mat-list-option .mat-line,.mat-nav-list .mat-list-option .mat-line,.mat-selection-list .mat-list-option .mat-line{white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;box-sizing:border-box}.mat-list .mat-list-option .mat-line:nth-child(n+2),.mat-nav-list .mat-list-option .mat-line:nth-child(n+2),.mat-selection-list .mat-list-option .mat-line:nth-child(n+2){font-size:14px}.mat-list[dense] .mat-list-item,.mat-nav-list[dense] .mat-list-item,.mat-selection-list[dense] .mat-list-item{font-size:12px}.mat-list[dense] .mat-list-item .mat-line,.mat-nav-list[dense] .mat-list-item .mat-line,.mat-selection-list[dense] .mat-list-item .mat-line{white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;box-sizing:border-box}.mat-list[dense] .mat-list-item .mat-line:nth-child(n+2),.mat-list[dense] .mat-list-option,.mat-nav-list[dense] .mat-list-item .mat-line:nth-child(n+2),.mat-nav-list[dense] .mat-list-option,.mat-selection-list[dense] .mat-list-item .mat-line:nth-child(n+2),.mat-selection-list[dense] .mat-list-option{font-size:12px}.mat-list[dense] .mat-list-option .mat-line,.mat-nav-list[dense] .mat-list-option .mat-line,.mat-selection-list[dense] .mat-list-option .mat-line{white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;box-sizing:border-box}.mat-list[dense] .mat-list-option .mat-line:nth-child(n+2),.mat-nav-list[dense] .mat-list-option .mat-line:nth-child(n+2),.mat-selection-list[dense] .mat-list-option .mat-line:nth-child(n+2){font-size:12px}.mat-list[dense] .mat-subheader,.mat-nav-list[dense] .mat-subheader,.mat-selection-list[dense] .mat-subheader{font-family:Roboto,helvetica neue,sans-serif;font-size:12px;font-weight:500}.mat-option{font-family:Roboto,helvetica neue,sans-serif;font-size:16px;color:rgba(0,0,0,.87)}.mat-optgroup-label{font:500 14px/24px Roboto,"Helvetica Neue",sans-serif;color:rgba(0,0,0,.54)}.mat-simple-snackbar{font-family:Roboto,helvetica neue,sans-serif;font-size:14px}.mat-ripple{overflow:hidden}@media  screen and (-ms-high-contrast:active){.mat-ripple{display:none}}.mat-ripple.mat-ripple-unbounded{overflow:visible}.mat-ripple-element{position:absolute;border-radius:50%;pointer-events:none;transition:opacity,transform 0s cubic-bezier(0,0,.2,1);transform:scale(0)}.cdk-visually-hidden{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;outline:0;-webkit-appearance:none;-moz-appearance:none}.cdk-global-overlay-wrapper,.cdk-overlay-container{pointer-events:none;top:0;left:0;height:100%;width:100%}.cdk-overlay-container{position:fixed;z-index:1000}.cdk-overlay-container:empty{display:none}.cdk-global-overlay-wrapper{display:flex;position:absolute;z-index:1000}.cdk-overlay-pane{position:absolute;pointer-events:auto;box-sizing:border-box;z-index:1000}.cdk-overlay-backdrop{position:absolute;top:0;bottom:0;left:0;right:0;z-index:1000;pointer-events:auto;-webkit-tap-highlight-color:transparent;transition:opacity .4s cubic-bezier(.25,.8,.25,1);opacity:0}.cdk-overlay-backdrop.cdk-overlay-backdrop-showing{opacity:1}.cdk-overlay-dark-backdrop{background:rgba(0,0,0,.288)}.cdk-overlay-transparent-backdrop,.cdk-overlay-transparent-backdrop.cdk-overlay-backdrop-showing{opacity:0}.cdk-global-scrollblock{position:fixed;width:100%;overflow-y:scroll}.mat-ripple-element{background-color:rgba(0,0,0,.1)}.mat-option:focus:not(.mat-option-disabled),.mat-option:hover:not(.mat-option-disabled){background:rgba(0,0,0,.04)}.mat-primary .mat-option.mat-selected:not(.mat-option-disabled){color:#ff6c03}.mat-accent .mat-option.mat-selected:not(.mat-option-disabled){color:#4b5368}.mat-warn .mat-option.mat-selected:not(.mat-option-disabled){color:#f44336}.mat-option.mat-selected:not(.mat-option-multiple):not(.mat-option-disabled){background:rgba(0,0,0,.04)}.mat-option.mat-active{background:rgba(0,0,0,.04);color:rgba(0,0,0,.87)}.mat-option.mat-option-disabled{color:rgba(0,0,0,.38)}.mat-optgroup-disabled .mat-optgroup-label{color:rgba(0,0,0,.38)}.mat-pseudo-checkbox{color:rgba(0,0,0,.54)}.mat-pseudo-checkbox::after{color:#fafafa}.mat-accent .mat-pseudo-checkbox-checked,.mat-accent .mat-pseudo-checkbox-indeterminate,.mat-pseudo-checkbox-checked,.mat-pseudo-checkbox-indeterminate{background:#4b5368}.mat-primary .mat-pseudo-checkbox-checked,.mat-primary .mat-pseudo-checkbox-indeterminate{background:#ff6c03}.mat-warn .mat-pseudo-checkbox-checked,.mat-warn .mat-pseudo-checkbox-indeterminate{background:#f44336}.mat-pseudo-checkbox-checked.mat-pseudo-checkbox-disabled,.mat-pseudo-checkbox-indeterminate.mat-pseudo-checkbox-disabled{background:#b0b0b0}.mat-app-background{background-color:#fafafa;color:rgba(0,0,0,.87)}.mat-theme-loaded-marker{display:none}.mat-autocomplete-panel{background:#fff;color:rgba(0,0,0,.87)}.mat-autocomplete-panel .mat-option.mat-selected:not(.mat-active):not(:hover){background:#fff}.mat-autocomplete-panel .mat-option.mat-selected:not(.mat-active):not(:hover):not(.mat-option-disabled){color:rgba(0,0,0,.87)}.mat-button,.mat-icon-button,.mat-stroked-button{background:0 0}.mat-button.mat-primary .mat-button-focus-overlay,.mat-icon-button.mat-primary .mat-button-focus-overlay,.mat-stroked-button.mat-primary .mat-button-focus-overlay{background-color:rgba(255,108,3,.12)}.mat-button.mat-accent .mat-button-focus-overlay,.mat-icon-button.mat-accent .mat-button-focus-overlay,.mat-stroked-button.mat-accent .mat-button-focus-overlay{background-color:rgba(75,83,104,.12)}.mat-button.mat-warn .mat-button-focus-overlay,.mat-icon-button.mat-warn .mat-button-focus-overlay,.mat-stroked-button.mat-warn .mat-button-focus-overlay{background-color:rgba(244,67,54,.12)}.mat-button[disabled] .mat-button-focus-overlay,.mat-icon-button[disabled] .mat-button-focus-overlay,.mat-stroked-button[disabled] .mat-button-focus-overlay{background-color:transparent}.mat-button.mat-primary,.mat-icon-button.mat-primary,.mat-stroked-button.mat-primary{color:#ff6c03}.mat-button.mat-accent,.mat-icon-button.mat-accent,.mat-stroked-button.mat-accent{color:#4b5368}.mat-button.mat-warn,.mat-icon-button.mat-warn,.mat-stroked-button.mat-warn{color:#f44336}.mat-button.mat-accent[disabled],.mat-button.mat-primary[disabled],.mat-button.mat-warn[disabled],.mat-button[disabled][disabled],.mat-icon-button.mat-accent[disabled],.mat-icon-button.mat-primary[disabled],.mat-icon-button.mat-warn[disabled],.mat-icon-button[disabled][disabled],.mat-stroked-button.mat-accent[disabled],.mat-stroked-button.mat-primary[disabled],.mat-stroked-button.mat-warn[disabled],.mat-stroked-button[disabled][disabled]{color:rgba(0,0,0,.26)}.mat-fab,.mat-mini-fab,.mat-raised-button{color:rgba(0,0,0,.87);background-color:#fff}.mat-fab.mat-primary,.mat-mini-fab.mat-primary,.mat-raised-button.mat-primary{color:#000;background-color:#ff6c03}.mat-fab.mat-accent,.mat-fab.mat-warn,.mat-mini-fab.mat-accent,.mat-mini-fab.mat-warn,.mat-raised-button.mat-accent,.mat-raised-button.mat-warn{color:#fff}.mat-fab.mat-accent[disabled],.mat-fab.mat-primary[disabled],.mat-fab.mat-warn[disabled],.mat-fab[disabled][disabled],.mat-mini-fab.mat-accent[disabled],.mat-mini-fab.mat-primary[disabled],.mat-mini-fab.mat-warn[disabled],.mat-mini-fab[disabled][disabled],.mat-raised-button.mat-accent[disabled],.mat-raised-button.mat-primary[disabled],.mat-raised-button.mat-warn[disabled],.mat-raised-button[disabled][disabled]{color:rgba(0,0,0,.26);background-color:rgba(0,0,0,.12)}.mat-fab.mat-accent,.mat-mini-fab.mat-accent,.mat-raised-button.mat-accent{background-color:#4b5368}.mat-fab.mat-warn,.mat-mini-fab.mat-warn,.mat-raised-button.mat-warn{background-color:#f44336}.mat-fab.mat-primary .mat-ripple-element,.mat-mini-fab.mat-primary .mat-ripple-element,.mat-raised-button.mat-primary .mat-ripple-element{background-color:rgba(0,0,0,.2)}.mat-fab.mat-accent .mat-ripple-element,.mat-fab.mat-warn .mat-ripple-element,.mat-mini-fab.mat-accent .mat-ripple-element,.mat-mini-fab.mat-warn .mat-ripple-element,.mat-raised-button.mat-accent .mat-ripple-element,.mat-raised-button.mat-warn .mat-ripple-element{background-color:rgba(255,255,255,.2)}.mat-button.mat-primary .mat-ripple-element{background-color:rgba(255,108,3,.1)}.mat-button.mat-accent .mat-ripple-element{background-color:rgba(75,83,104,.1)}.mat-button.mat-warn .mat-ripple-element{background-color:rgba(244,67,54,.1)}.mat-flat-button{color:rgba(0,0,0,.87);background-color:#fff}.mat-flat-button.mat-primary{color:#000;background-color:#ff6c03}.mat-flat-button.mat-accent,.mat-flat-button.mat-warn{color:#fff}.mat-flat-button.mat-accent[disabled],.mat-flat-button.mat-primary[disabled],.mat-flat-button.mat-warn[disabled],.mat-flat-button[disabled][disabled]{color:rgba(0,0,0,.26);background-color:rgba(0,0,0,.12)}.mat-flat-button.mat-accent{background-color:#4b5368}.mat-flat-button.mat-warn{background-color:#f44336}.mat-flat-button.mat-primary .mat-ripple-element{background-color:rgba(0,0,0,.2)}.mat-flat-button.mat-accent .mat-ripple-element,.mat-flat-button.mat-warn .mat-ripple-element{background-color:rgba(255,255,255,.2)}.mat-icon-button.mat-primary .mat-ripple-element{background-color:rgba(255,108,3,.2)}.mat-icon-button.mat-accent .mat-ripple-element{background-color:rgba(75,83,104,.2)}.mat-icon-button.mat-warn .mat-ripple-element{background-color:rgba(244,67,54,.2)}.mat-button-toggle{color:rgba(0,0,0,.38)}.mat-button-toggle.cdk-focused .mat-button-toggle-focus-overlay{background-color:rgba(0,0,0,.12)}.mat-button-toggle-checked{background-color:#e0e0e0;color:rgba(0,0,0,.54)}.mat-button-toggle-disabled{background-color:#eee;color:rgba(0,0,0,.26)}.mat-button-toggle-disabled.mat-button-toggle-checked{background-color:#bdbdbd}.mat-card{background:#fff;color:rgba(0,0,0,.87)}.mat-card-subtitle{color:rgba(0,0,0,.54)}.mat-checkbox-frame{border-color:rgba(0,0,0,.54)}.mat-checkbox-checkmark{fill:#fafafa}.mat-checkbox-checkmark-path{stroke:#fafafa!important}.mat-checkbox-mixedmark{background-color:#fafafa}.mat-checkbox-checked.mat-primary .mat-checkbox-background,.mat-checkbox-indeterminate.mat-primary .mat-checkbox-background{background-color:#ff6c03}.mat-checkbox-checked.mat-accent .mat-checkbox-background,.mat-checkbox-indeterminate.mat-accent .mat-checkbox-background{background-color:#4b5368}.mat-checkbox-checked.mat-warn .mat-checkbox-background,.mat-checkbox-indeterminate.mat-warn .mat-checkbox-background{background-color:#f44336}.mat-checkbox-disabled.mat-checkbox-checked .mat-checkbox-background,.mat-checkbox-disabled.mat-checkbox-indeterminate .mat-checkbox-background{background-color:#b0b0b0}.mat-checkbox-disabled:not(.mat-checkbox-checked) .mat-checkbox-frame{border-color:#b0b0b0}.mat-checkbox-disabled .mat-checkbox-label{color:#b0b0b0}.mat-checkbox:not(.mat-checkbox-disabled).mat-primary .mat-checkbox-ripple .mat-ripple-element{background-color:rgba(255,108,3,.26)}.mat-checkbox:not(.mat-checkbox-disabled).mat-accent .mat-checkbox-ripple .mat-ripple-element{background-color:rgba(75,83,104,.26)}.mat-checkbox:not(.mat-checkbox-disabled).mat-warn .mat-checkbox-ripple .mat-ripple-element{background-color:rgba(244,67,54,.26)}.mat-chip:not(.mat-basic-chip){background-color:#e0e0e0;color:rgba(0,0,0,.87)}.mat-chip:not(.mat-basic-chip) .mat-chip-remove{color:rgba(0,0,0,.87);opacity:.4}.mat-chip:not(.mat-basic-chip) .mat-chip-remove:hover{opacity:.54}.mat-chip.mat-chip-selected.mat-primary{background-color:#ff6c03;color:#000}.mat-chip.mat-chip-selected.mat-primary .mat-chip-remove{color:#000;opacity:.4}.mat-chip.mat-chip-selected.mat-primary .mat-chip-remove:hover{opacity:.54}.mat-chip.mat-chip-selected.mat-warn{background-color:#f44336;color:#fff}.mat-chip.mat-chip-selected.mat-warn .mat-chip-remove{color:#fff;opacity:.4}.mat-chip.mat-chip-selected.mat-warn .mat-chip-remove:hover{opacity:.54}.mat-chip.mat-chip-selected.mat-accent{background-color:#4b5368;color:#fff}.mat-chip.mat-chip-selected.mat-accent .mat-chip-remove{color:#fff;opacity:.4}.mat-chip.mat-chip-selected.mat-accent .mat-chip-remove:hover{opacity:.54}.mat-table{background:#fff}.mat-header-row,.mat-row{border-bottom-color:rgba(0,0,0,.12)}.mat-header-cell{color:rgba(0,0,0,.54)}.mat-cell{color:rgba(0,0,0,.87)}.mat-datepicker-content{background-color:#fff;color:rgba(0,0,0,.87)}.mat-calendar-arrow{border-top-color:rgba(0,0,0,.54)}.mat-calendar-next-button,.mat-calendar-previous-button{color:rgba(0,0,0,.54)}.mat-calendar-table-header{color:rgba(0,0,0,.38)}.mat-calendar-table-header-divider::after{background:rgba(0,0,0,.12)}.mat-calendar-body-label{color:rgba(0,0,0,.54)}.mat-calendar-body-cell-content{color:rgba(0,0,0,.87);border-color:transparent}.mat-calendar-body-disabled>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected){color:rgba(0,0,0,.38)}.cdk-keyboard-focused .mat-calendar-body-active>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),.cdk-program-focused .mat-calendar-body-active>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected){background-color:rgba(0,0,0,.04)}.mat-calendar-body-selected{background-color:#ff6c03;color:#000}.mat-calendar-body-disabled>.mat-calendar-body-selected{background-color:rgba(255,108,3,.4)}.mat-calendar-body-today:not(.mat-calendar-body-selected){border-color:rgba(0,0,0,.38)}.mat-calendar-body-today.mat-calendar-body-selected{box-shadow:inset 0 0 0 1px #000}.mat-calendar-body-disabled>.mat-calendar-body-today:not(.mat-calendar-body-selected){border-color:rgba(0,0,0,.18)}.mat-datepicker-toggle-active{color:#ff6c03}.mat-dialog-container{background:#fff;color:rgba(0,0,0,.87)}.mat-divider{border-top-color:rgba(0,0,0,.12)}.mat-divider-vertical{border-right-color:rgba(0,0,0,.12)}.mat-expansion-panel{background:#fff;color:rgba(0,0,0,.87)}.mat-action-row{border-top-color:rgba(0,0,0,.12)}.mat-expansion-panel:not(.mat-expanded) .mat-expansion-panel-header:not([aria-disabled=true]).cdk-keyboard-focused,.mat-expansion-panel:not(.mat-expanded) .mat-expansion-panel-header:not([aria-disabled=true]).cdk-program-focused,.mat-expansion-panel:not(.mat-expanded) .mat-expansion-panel-header:not([aria-disabled=true]):hover{background:rgba(0,0,0,.04)}.mat-expansion-panel-header-title{color:rgba(0,0,0,.87)}.mat-expansion-indicator::after,.mat-expansion-panel-header-description{color:rgba(0,0,0,.54)}.mat-expansion-panel-header[aria-disabled=true]{color:rgba(0,0,0,.26)}.mat-expansion-panel-header[aria-disabled=true] .mat-expansion-panel-header-description,.mat-expansion-panel-header[aria-disabled=true] .mat-expansion-panel-header-title{color:inherit}.mat-form-field-label,.mat-hint{color:rgba(0,0,0,.54)}.mat-focused .mat-form-field-label{color:#ff6c03}.mat-focused .mat-form-field-label.mat-accent{color:#4b5368}.mat-focused .mat-form-field-label.mat-warn{color:#f44336}.mat-focused .mat-form-field-required-marker{color:#4b5368}.mat-form-field-underline{background-color:rgba(0,0,0,.42)}.mat-form-field-disabled .mat-form-field-underline{background-image:linear-gradient(to right,rgba(0,0,0,.42) 0,rgba(0,0,0,.42) 33%,transparent 0);background-size:4px 1px;background-repeat:repeat-x}.mat-form-field-ripple{background-color:#ff6c03}.mat-form-field-ripple.mat-accent{background-color:#4b5368}.mat-form-field-ripple.mat-warn{background-color:#f44336}.mat-form-field-invalid .mat-form-field-label,.mat-form-field-invalid .mat-form-field-label .mat-form-field-required-marker,.mat-form-field-invalid .mat-form-field-label.mat-accent{color:#f44336}.mat-form-field-invalid .mat-form-field-ripple{background-color:#f44336}.mat-error{color:#f44336}.mat-icon.mat-primary{color:#ff6c03}.mat-icon.mat-accent{color:#4b5368}.mat-icon.mat-warn{color:#f44336}.mat-input-element:disabled{color:rgba(0,0,0,.38)}.mat-input-element{caret-color:#ff6c03}.mat-input-element::-ms-input-placeholder{color:rgba(0,0,0,.42)}.mat-input-element::placeholder{color:rgba(0,0,0,.42)}.mat-input-element::-moz-placeholder{color:rgba(0,0,0,.42)}.mat-input-element::-webkit-input-placeholder{color:rgba(0,0,0,.42)}.mat-input-element:-ms-input-placeholder{color:rgba(0,0,0,.42)}.mat-accent .mat-input-element{caret-color:#4b5368}.mat-form-field-invalid .mat-input-element,.mat-warn .mat-input-element{caret-color:#f44336}.mat-list .mat-list-item,.mat-list .mat-list-option,.mat-nav-list .mat-list-item,.mat-nav-list .mat-list-option,.mat-selection-list .mat-list-item,.mat-selection-list .mat-list-option{color:rgba(0,0,0,.87)}.mat-list .mat-subheader,.mat-nav-list .mat-subheader,.mat-selection-list .mat-subheader{font-family:Roboto,helvetica neue,sans-serif;font-size:14px;font-weight:500;color:rgba(0,0,0,.54)}.mat-list-item-disabled{background-color:#eee}.mat-list-option.mat-list-item-focus,.mat-list-option:hover,.mat-nav-list .mat-list-item.mat-list-item-focus,.mat-nav-list .mat-list-item:hover{background:rgba(0,0,0,.04)}.mat-menu-panel{background:#fff}.mat-menu-item{background:0 0;color:rgba(0,0,0,.87)}.mat-menu-item[disabled]{color:rgba(0,0,0,.38)}.mat-menu-item .mat-icon:not([color]),.mat-menu-item-submenu-trigger::after{color:rgba(0,0,0,.54)}.mat-menu-item-highlighted:not([disabled]),.mat-menu-item.cdk-keyboard-focused:not([disabled]),.mat-menu-item.cdk-program-focused:not([disabled]),.mat-menu-item:hover:not([disabled]){background:rgba(0,0,0,.04)}.mat-paginator{background:#fff}.mat-paginator,.mat-paginator-page-size .mat-select-trigger{color:rgba(0,0,0,.54)}.mat-paginator-decrement,.mat-paginator-increment{border-top:2px solid rgba(0,0,0,.54);border-right:2px solid rgba(0,0,0,.54)}.mat-paginator-first,.mat-paginator-last{border-top:2px solid rgba(0,0,0,.54)}.mat-icon-button[disabled] .mat-paginator-decrement,.mat-icon-button[disabled] .mat-paginator-first,.mat-icon-button[disabled] .mat-paginator-increment,.mat-icon-button[disabled] .mat-paginator-last{border-color:rgba(0,0,0,.38)}.mat-progress-bar-background{fill:#ffebb2}.mat-progress-bar-buffer{background-color:#ffebb2}.mat-progress-bar-fill::after{background-color:#ff6c03}.mat-progress-bar.mat-accent .mat-progress-bar-background{fill:#d0d5e2}.mat-progress-bar.mat-accent .mat-progress-bar-buffer{background-color:#d0d5e2}.mat-progress-bar.mat-accent .mat-progress-bar-fill::after{background-color:#4b5368}.mat-progress-bar.mat-warn .mat-progress-bar-background{fill:#ffcdd2}.mat-progress-bar.mat-warn .mat-progress-bar-buffer{background-color:#ffcdd2}.mat-progress-bar.mat-warn .mat-progress-bar-fill::after{background-color:#f44336}.mat-progress-spinner circle,.mat-spinner circle{stroke:#ff6c03}.mat-progress-spinner.mat-accent circle,.mat-spinner.mat-accent circle{stroke:#4b5368}.mat-progress-spinner.mat-warn circle,.mat-spinner.mat-warn circle{stroke:#f44336}.mat-radio-outer-circle{border-color:rgba(0,0,0,.54)}.mat-radio-disabled .mat-radio-outer-circle{border-color:rgba(0,0,0,.38)}.mat-radio-disabled .mat-radio-inner-circle,.mat-radio-disabled .mat-radio-ripple .mat-ripple-element{background-color:rgba(0,0,0,.38)}.mat-radio-disabled .mat-radio-label-content{color:rgba(0,0,0,.38)}.mat-radio-button.mat-primary.mat-radio-checked .mat-radio-outer-circle{border-color:#ff6c03}.mat-radio-button.mat-primary .mat-radio-inner-circle{background-color:#ff6c03}.mat-radio-button.mat-primary .mat-radio-ripple .mat-ripple-element{background-color:rgba(255,108,3,.26)}.mat-radio-button.mat-accent.mat-radio-checked .mat-radio-outer-circle{border-color:#4b5368}.mat-radio-button.mat-accent .mat-radio-inner-circle{background-color:#4b5368}.mat-radio-button.mat-accent .mat-radio-ripple .mat-ripple-element{background-color:rgba(75,83,104,.26)}.mat-radio-button.mat-warn.mat-radio-checked .mat-radio-outer-circle{border-color:#f44336}.mat-radio-button.mat-warn .mat-radio-inner-circle{background-color:#f44336}.mat-radio-button.mat-warn .mat-radio-ripple .mat-ripple-element{background-color:rgba(244,67,54,.26)}.mat-select-content,.mat-select-panel-done-animating{background:#fff}.mat-select-value{color:rgba(0,0,0,.87)}.mat-select-placeholder{color:rgba(0,0,0,.42)}.mat-select-disabled .mat-select-value{color:rgba(0,0,0,.38)}.mat-select-arrow{color:rgba(0,0,0,.54)}.mat-select-panel .mat-option.mat-selected:not(.mat-option-multiple){background:rgba(0,0,0,.12)}.mat-form-field.mat-focused.mat-primary .mat-select-arrow{color:#ff6c03}.mat-form-field.mat-focused.mat-accent .mat-select-arrow{color:#4b5368}.mat-form-field .mat-select.mat-select-invalid .mat-select-arrow,.mat-form-field.mat-focused.mat-warn .mat-select-arrow{color:#f44336}.mat-form-field .mat-select.mat-select-disabled .mat-select-arrow{color:rgba(0,0,0,.38)}.mat-drawer-container{background-color:#fafafa;color:rgba(0,0,0,.87)}.mat-drawer{background-color:#fff;color:rgba(0,0,0,.87)}.mat-drawer.mat-drawer-push{background-color:#fff}.mat-drawer-backdrop.mat-drawer-shown{background-color:rgba(0,0,0,.6)}.mat-slide-toggle.mat-checked:not(.mat-disabled) .mat-slide-toggle-thumb{background-color:#6b7590}.mat-slide-toggle.mat-checked:not(.mat-disabled) .mat-slide-toggle-bar{background-color:rgba(107,117,144,.5)}.mat-slide-toggle:not(.mat-checked) .mat-ripple-element{background-color:rgba(0,0,0,.06)}.mat-slide-toggle .mat-ripple-element{background-color:rgba(107,117,144,.12)}.mat-slide-toggle.mat-primary.mat-checked:not(.mat-disabled) .mat-slide-toggle-thumb{background-color:#ffbe03}.mat-slide-toggle.mat-primary.mat-checked:not(.mat-disabled) .mat-slide-toggle-bar{background-color:rgba(255,190,3,.5)}.mat-slide-toggle.mat-primary:not(.mat-checked) .mat-ripple-element{background-color:rgba(0,0,0,.06)}.mat-slide-toggle.mat-primary .mat-ripple-element{background-color:rgba(255,190,3,.12)}.mat-slide-toggle.mat-warn.mat-checked:not(.mat-disabled) .mat-slide-toggle-thumb{background-color:#f44336}.mat-slide-toggle.mat-warn.mat-checked:not(.mat-disabled) .mat-slide-toggle-bar{background-color:rgba(244,67,54,.5)}.mat-slide-toggle.mat-warn:not(.mat-checked) .mat-ripple-element{background-color:rgba(0,0,0,.06)}.mat-slide-toggle.mat-warn .mat-ripple-element{background-color:rgba(244,67,54,.12)}.mat-disabled .mat-slide-toggle-thumb{background-color:#bdbdbd}.mat-disabled .mat-slide-toggle-bar{background-color:rgba(0,0,0,.1)}.mat-slide-toggle-thumb{background-color:#fafafa}.mat-slide-toggle-bar{background-color:rgba(0,0,0,.38)}.mat-slider-track-background{background-color:rgba(0,0,0,.26)}.mat-primary .mat-slider-thumb,.mat-primary .mat-slider-thumb-label,.mat-primary .mat-slider-track-fill{background-color:#ff6c03}.mat-primary .mat-slider-thumb-label-text{color:#000}.mat-accent .mat-slider-thumb,.mat-accent .mat-slider-thumb-label,.mat-accent .mat-slider-track-fill{background-color:#4b5368}.mat-accent .mat-slider-thumb-label-text{color:#fff}.mat-warn .mat-slider-thumb,.mat-warn .mat-slider-thumb-label,.mat-warn .mat-slider-track-fill{background-color:#f44336}.mat-warn .mat-slider-thumb-label-text{color:#fff}.mat-slider-focus-ring{background-color:rgba(75,83,104,.2)}.cdk-focused .mat-slider-track-background,.mat-slider:hover .mat-slider-track-background{background-color:rgba(0,0,0,.38)}.mat-slider-disabled .mat-slider-thumb,.mat-slider-disabled .mat-slider-track-background,.mat-slider-disabled .mat-slider-track-fill,.mat-slider-disabled:hover .mat-slider-track-background{background-color:rgba(0,0,0,.26)}.mat-slider-min-value .mat-slider-focus-ring{background-color:rgba(0,0,0,.12)}.mat-slider-min-value.mat-slider-thumb-label-showing .mat-slider-thumb,.mat-slider-min-value.mat-slider-thumb-label-showing .mat-slider-thumb-label{background-color:rgba(0,0,0,.87)}.mat-slider-min-value.mat-slider-thumb-label-showing.cdk-focused .mat-slider-thumb,.mat-slider-min-value.mat-slider-thumb-label-showing.cdk-focused .mat-slider-thumb-label{background-color:rgba(0,0,0,.26)}.mat-slider-min-value:not(.mat-slider-thumb-label-showing) .mat-slider-thumb{border-color:rgba(0,0,0,.26);background-color:transparent}.mat-slider-min-value:not(.mat-slider-thumb-label-showing).cdk-focused .mat-slider-thumb,.mat-slider-min-value:not(.mat-slider-thumb-label-showing):hover .mat-slider-thumb{border-color:rgba(0,0,0,.38)}.mat-slider-min-value:not(.mat-slider-thumb-label-showing).cdk-focused.mat-slider-disabled .mat-slider-thumb,.mat-slider-min-value:not(.mat-slider-thumb-label-showing):hover.mat-slider-disabled .mat-slider-thumb{border-color:rgba(0,0,0,.26)}.mat-slider-has-ticks .mat-slider-wrapper::after{border-color:rgba(0,0,0,.7)}.mat-slider-horizontal .mat-slider-ticks{background-image:repeating-linear-gradient(to right,rgba(0,0,0,.7),rgba(0,0,0,.7) 2px,transparent 0,transparent);background-image:-moz-repeating-linear-gradient(.0001deg,rgba(0,0,0,.7),rgba(0,0,0,.7) 2px,transparent 0,transparent)}.mat-slider-vertical .mat-slider-ticks{background-image:repeating-linear-gradient(to bottom,rgba(0,0,0,.7),rgba(0,0,0,.7) 2px,transparent 0,transparent)}.mat-step-header.cdk-keyboard-focused,.mat-step-header.cdk-program-focused,.mat-step-header:hover{background-color:rgba(0,0,0,.04)}.mat-step-header .mat-step-label,.mat-step-header .mat-step-optional{color:rgba(0,0,0,.38)}.mat-step-header .mat-step-icon{background-color:#ff6c03;color:#000}.mat-step-header .mat-step-icon-not-touched{background-color:rgba(0,0,0,.38);color:#000}.mat-step-header .mat-step-label.mat-step-label-active{color:rgba(0,0,0,.87)}.mat-stepper-horizontal,.mat-stepper-vertical{background-color:#fff}.mat-stepper-vertical-line::before{border-left-color:rgba(0,0,0,.12)}.mat-stepper-horizontal-line{border-top-color:rgba(0,0,0,.12)}.mat-tab-header,.mat-tab-nav-bar{border-bottom:1px solid rgba(0,0,0,.12)}.mat-tab-group-inverted-header .mat-tab-header,.mat-tab-group-inverted-header .mat-tab-nav-bar{border-top:1px solid rgba(0,0,0,.12);border-bottom:none}.mat-tab-label,.mat-tab-link{color:rgba(0,0,0,.87)}.mat-tab-label.mat-tab-disabled,.mat-tab-link.mat-tab-disabled{color:rgba(0,0,0,.38)}.mat-tab-header-pagination-chevron{border-color:rgba(0,0,0,.87)}.mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron{border-color:rgba(0,0,0,.38)}.mat-tab-group[class*=mat-background-] .mat-tab-header,.mat-tab-nav-bar[class*=mat-background-]{border-bottom:none;border-top:none}.mat-tab-group.mat-primary .mat-tab-label:not(.mat-tab-disabled):focus,.mat-tab-group.mat-primary .mat-tab-link:not(.mat-tab-disabled):focus,.mat-tab-nav-bar.mat-primary .mat-tab-label:not(.mat-tab-disabled):focus,.mat-tab-nav-bar.mat-primary .mat-tab-link:not(.mat-tab-disabled):focus{background-color:rgba(255,235,178,.3)}.mat-tab-group.mat-primary .mat-ink-bar,.mat-tab-nav-bar.mat-primary .mat-ink-bar{background-color:#ff6c03}.mat-tab-group.mat-primary.mat-background-primary .mat-ink-bar,.mat-tab-nav-bar.mat-primary.mat-background-primary .mat-ink-bar{background-color:#000}.mat-tab-group.mat-accent .mat-tab-label:not(.mat-tab-disabled):focus,.mat-tab-group.mat-accent .mat-tab-link:not(.mat-tab-disabled):focus,.mat-tab-nav-bar.mat-accent .mat-tab-label:not(.mat-tab-disabled):focus,.mat-tab-nav-bar.mat-accent .mat-tab-link:not(.mat-tab-disabled):focus{background-color:rgba(208,213,226,.3)}.mat-tab-group.mat-accent .mat-ink-bar,.mat-tab-nav-bar.mat-accent .mat-ink-bar{background-color:#4b5368}.mat-tab-group.mat-accent.mat-background-accent .mat-ink-bar,.mat-tab-nav-bar.mat-accent.mat-background-accent .mat-ink-bar{background-color:#fff}.mat-tab-group.mat-warn .mat-tab-label:not(.mat-tab-disabled):focus,.mat-tab-group.mat-warn .mat-tab-link:not(.mat-tab-disabled):focus,.mat-tab-nav-bar.mat-warn .mat-tab-label:not(.mat-tab-disabled):focus,.mat-tab-nav-bar.mat-warn .mat-tab-link:not(.mat-tab-disabled):focus{background-color:rgba(255,205,210,.3)}.mat-tab-group.mat-warn .mat-ink-bar,.mat-tab-nav-bar.mat-warn .mat-ink-bar{background-color:#f44336}.mat-tab-group.mat-warn.mat-background-warn .mat-ink-bar,.mat-tab-nav-bar.mat-warn.mat-background-warn .mat-ink-bar{background-color:#fff}.mat-tab-group.mat-background-primary .mat-tab-label:not(.mat-tab-disabled):focus,.mat-tab-group.mat-background-primary .mat-tab-link:not(.mat-tab-disabled):focus,.mat-tab-nav-bar.mat-background-primary .mat-tab-label:not(.mat-tab-disabled):focus,.mat-tab-nav-bar.mat-background-primary .mat-tab-link:not(.mat-tab-disabled):focus{background-color:rgba(255,235,178,.3)}.mat-tab-group.mat-background-primary .mat-tab-header,.mat-tab-group.mat-background-primary .mat-tab-links,.mat-tab-nav-bar.mat-background-primary .mat-tab-header,.mat-tab-nav-bar.mat-background-primary .mat-tab-links{background-color:#ff6c03}.mat-tab-group.mat-background-primary .mat-tab-label,.mat-tab-group.mat-background-primary .mat-tab-link,.mat-tab-nav-bar.mat-background-primary .mat-tab-label,.mat-tab-nav-bar.mat-background-primary .mat-tab-link{color:#000}.mat-tab-group.mat-background-primary .mat-tab-label.mat-tab-disabled,.mat-tab-group.mat-background-primary .mat-tab-link.mat-tab-disabled,.mat-tab-nav-bar.mat-background-primary .mat-tab-label.mat-tab-disabled,.mat-tab-nav-bar.mat-background-primary .mat-tab-link.mat-tab-disabled{color:rgba(0,0,0,.4)}.mat-tab-group.mat-background-primary .mat-tab-header-pagination-chevron,.mat-tab-nav-bar.mat-background-primary .mat-tab-header-pagination-chevron{border-color:#000}.mat-tab-group.mat-background-primary .mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron,.mat-tab-nav-bar.mat-background-primary .mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron{border-color:rgba(0,0,0,.4)}.mat-tab-group.mat-background-primary .mat-ripple-element,.mat-tab-nav-bar.mat-background-primary .mat-ripple-element{background-color:rgba(0,0,0,.12)}.mat-tab-group.mat-background-accent .mat-tab-label:not(.mat-tab-disabled):focus,.mat-tab-group.mat-background-accent .mat-tab-link:not(.mat-tab-disabled):focus,.mat-tab-nav-bar.mat-background-accent .mat-tab-label:not(.mat-tab-disabled):focus,.mat-tab-nav-bar.mat-background-accent .mat-tab-link:not(.mat-tab-disabled):focus{background-color:rgba(208,213,226,.3)}.mat-tab-group.mat-background-accent .mat-tab-header,.mat-tab-group.mat-background-accent .mat-tab-links,.mat-tab-nav-bar.mat-background-accent .mat-tab-header,.mat-tab-nav-bar.mat-background-accent .mat-tab-links{background-color:#4b5368}.mat-tab-group.mat-background-accent .mat-tab-label,.mat-tab-group.mat-background-accent .mat-tab-link,.mat-tab-nav-bar.mat-background-accent .mat-tab-label,.mat-tab-nav-bar.mat-background-accent .mat-tab-link{color:#fff}.mat-tab-group.mat-background-accent .mat-tab-label.mat-tab-disabled,.mat-tab-group.mat-background-accent .mat-tab-link.mat-tab-disabled,.mat-tab-nav-bar.mat-background-accent .mat-tab-label.mat-tab-disabled,.mat-tab-nav-bar.mat-background-accent .mat-tab-link.mat-tab-disabled{color:rgba(255,255,255,.4)}.mat-tab-group.mat-background-accent .mat-tab-header-pagination-chevron,.mat-tab-nav-bar.mat-background-accent .mat-tab-header-pagination-chevron{border-color:#fff}.mat-tab-group.mat-background-accent .mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron,.mat-tab-nav-bar.mat-background-accent .mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron{border-color:rgba(255,255,255,.4)}.mat-tab-group.mat-background-accent .mat-ripple-element,.mat-tab-nav-bar.mat-background-accent .mat-ripple-element{background-color:rgba(255,255,255,.12)}.mat-tab-group.mat-background-warn .mat-tab-label:not(.mat-tab-disabled):focus,.mat-tab-group.mat-background-warn .mat-tab-link:not(.mat-tab-disabled):focus,.mat-tab-nav-bar.mat-background-warn .mat-tab-label:not(.mat-tab-disabled):focus,.mat-tab-nav-bar.mat-background-warn .mat-tab-link:not(.mat-tab-disabled):focus{background-color:rgba(255,205,210,.3)}.mat-tab-group.mat-background-warn .mat-tab-header,.mat-tab-group.mat-background-warn .mat-tab-links,.mat-tab-nav-bar.mat-background-warn .mat-tab-header,.mat-tab-nav-bar.mat-background-warn .mat-tab-links{background-color:#f44336}.mat-tab-group.mat-background-warn .mat-tab-label,.mat-tab-group.mat-background-warn .mat-tab-link,.mat-tab-nav-bar.mat-background-warn .mat-tab-label,.mat-tab-nav-bar.mat-background-warn .mat-tab-link{color:#fff}.mat-tab-group.mat-background-warn .mat-tab-label.mat-tab-disabled,.mat-tab-group.mat-background-warn .mat-tab-link.mat-tab-disabled,.mat-tab-nav-bar.mat-background-warn .mat-tab-label.mat-tab-disabled,.mat-tab-nav-bar.mat-background-warn .mat-tab-link.mat-tab-disabled{color:rgba(255,255,255,.4)}.mat-tab-group.mat-background-warn .mat-tab-header-pagination-chevron,.mat-tab-nav-bar.mat-background-warn .mat-tab-header-pagination-chevron{border-color:#fff}.mat-tab-group.mat-background-warn .mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron,.mat-tab-nav-bar.mat-background-warn .mat-tab-header-pagination-disabled .mat-tab-header-pagination-chevron{border-color:rgba(255,255,255,.4)}.mat-tab-group.mat-background-warn .mat-ripple-element,.mat-tab-nav-bar.mat-background-warn .mat-ripple-element{background-color:rgba(255,255,255,.12)}.mat-toolbar{background:#f5f5f5;color:rgba(0,0,0,.87)}.mat-toolbar.mat-primary{background:#ff6c03;color:#000}.mat-toolbar.mat-accent{background:#4b5368;color:#fff}.mat-toolbar.mat-warn{background:#f44336;color:#fff}.mat-tooltip{background:rgba(97,97,97,.9)}.mat-snack-bar-container{background:#323232;color:#fff}.mat-simple-snackbar-action{line-height:1;font-family:inherit;font-size:inherit;font-weight:500;color:#4b5368}.modal-from-below{position:fixed;top:0;left:0;right:0;bottom:0;z-index:255;overflow:hidden;transition:transform .5s;transform:translateY(calc(100% + 70px))}.modal-from-below--open{transform:translateY(0)!important}.close-cross{background-image:url(assets/images/ic_close.svg);background-size:cover;position:absolute;top:20px;right:20px;width:20px;height:20px;cursor:pointer}.particles-animation-wrapper,.particles-bg{position:absolute;top:0;left:0;width:100%;height:100%;overflow:hidden}.particles-bg{background:#1d202a}@media  screen and (min-width:1280px){.particles-animation-wrapper .particle,.particles-animation-wrapper .particle:after{background:0 0}.particles-animation-wrapper .particle:after{position:absolute;content:"";top:2560px}.particles-animation-wrapper .particle-1{-webkit-animation:60s linear infinite animParticle;animation:60s linear infinite animParticle;box-shadow:0 0 #fff,1073px 118px #fff,396px 1587px #fff,1593px 1364px #fff,2460px 2188px #fff,348px 2450px #fff,1938px 1555px #fff,1575px 1394px #fff,870px 1289px #fff,1643px 1527px #fff,517px 2066px #fff,1155px 1854px #fff,895px 2554px #fff,1108px 1897px #fff,1784px 99px #fff,2025px 1805px #fff,2298px 2375px #fff,171px 1652px #fff,1259px 2350px #fff,1332px 590px #fff,926px 2324px #fff,248px 1344px #fff,1426px 2192px #fff,1194px 2451px #fff,2407px 1032px #fff,2040px 2489px #fff,1443px 20px #fff,96px 142px #fff,372px 1763px #fff,1791px 2421px #fff,1294px 983px #fff,2404px 1988px #fff,891px 2335px #fff,1978px 2288px #fff,962px 1737px #fff,506px 226px #fff,1276px 646px #fff,80px 663px #fff,528px 1657px #fff,757px 506px #fff,2287px 643px #fff,2385px 817px #fff,2001px 2293px #fff,283px 2445px #fff,722px 2140px #fff,1759px 2242px #fff,931px 1802px #fff,593px 850px #fff,2085px 51px #fff,1216px 1363px #fff,1281px 710px #fff,559px 131px #fff,1897px 1919px #fff,593px 1598px #fff,75px 557px #fff,2476px 1024px #fff,477px 833px #fff,1605px 2457px #fff,659px 2083px #fff,1383px 912px #fff,796px 1689px #fff,1748px 2501px #fff,562px 938px #fff,1524px 2549px #fff,1641px 198px #fff,841px 694px #fff,1936px 482px #fff,1628px 614px #fff,1156px 665px #fff,1706px 282px #fff,2487px 798px #fff,320px 102px #fff,1462px 1222px #fff,30px 1704px #fff,1365px 467px #fff,748px 32px #fff,2301px 2363px #fff,1301px 1824px #fff,1557px 2524px #fff,324px 685px #fff,1198px 2421px #fff,394px 1312px #fff,539px 2516px #fff,1252px 131px #fff,383px 2168px #fff,1548px 1735px #fff,1463px 1666px #fff,1301px 21px #fff,821px 1901px #fff,834px 1417px #fff,2091px 1529px #fff,2072px 1187px #fff,2376px 1460px #fff,73px 2323px #fff,1666px 856px #fff,1957px 344px #fff,2340px 1318px #fff,2390px 375px #fff,1789px 67px #fff,2161px 2232px #fff,634px 1344px #fff,744px 1796px #fff,1259px 546px #fff,1942px 2064px #fff,1688px 1580px #fff,1413px 2277px #fff,456px 904px #fff,387px 2362px #fff,774px 432px #fff,358px 821px #fff,464px 379px #fff,2338px 2501px #fff,236px 395px #fff,1211px 343px #fff,208px 2463px #fff,470px 1070px #fff,514px 950px #fff,1570px 1751px #fff,2383px 1432px #fff,2104px 94px #fff,764px 1481px #fff,2452px 1476px #fff,1060px 2259px #fff,1658px 2437px #fff,850px 33px #fff,1571px 667px #fff,563px 2519px #fff,1090px 848px #fff,55px 1898px #fff,2090px 96px #fff,1907px 2168px #fff,2410px 833px #fff,1044px 341px #fff,1840px 2099px #fff,1040px 1958px #fff,1208px 1609px #fff,1385px 1912px #fff,387px 2002px #fff,460px 717px #fff,1257px 1239px #fff,2179px 2313px #fff,181px 1461px #fff,1836px 2431px #fff,763px 686px #fff,2446px 115px #fff,2023px 1379px #fff,1900px 108px #fff,1415px 1094px #fff,964px 1612px #fff,572px 2394px #fff,2326px 2305px #fff,1779px 1106px #fff,2px 1272px #fff,2367px 1458px #fff,1560px 2220px #fff,454px 1813px #fff,1920px 2450px #fff,2385px 1258px #fff,1610px 79px #fff,2555px 1487px #fff,784px 2227px #fff,1067px 2188px #fff,1102px 2480px #fff,269px 340px #fff,2287px 513px #fff,579px 2002px #fff,1246px 2087px #fff,2524px 329px #fff,55px 352px #fff,536px 1969px #fff,2165px 2475px #fff,1858px 914px #fff,912px 491px #fff,1380px 500px #fff,371px 2063px #fff,2489px 1100px #fff,893px 2487px #fff,81px 89px #fff,1243px 1903px #fff,1791px 1004px #fff,1630px 1133px #fff,86px 685px #fff,2521px 2052px #fff,1276px 1965px #fff,232px 557px #fff,59px 2558px #fff,2061px 667px #fff,2395px 1646px #fff,1945px 47px #fff,1006px 1839px #fff,31px 797px #fff,1864px 1373px #fff,1156px 1414px #fff,2451px 1940px #fff,1466px 185px #fff,880px 2004px #fff,171px 1630px #fff,125px 1764px #fff,22px 614px #fff,1104px 824px #fff,2074px 2354px #fff,167px 1407px #fff,1993px 2446px #fff,1184px 2058px #fff,1709px 1903px #fff,1887px 598px #fff,1680px 1246px #fff,1699px 66px #fff,2231px 554px #fff,1945px 2065px #fff,979px 2354px #fff,1031px 181px #fff,1690px 2351px #fff,1886px 141px #fff,1678px 2301px #fff,1101px 2193px #fff,1592px 691px #fff,808px 521px #fff,418px 2145px #fff,691px 2057px #fff,653px 876px #fff,1409px 1613px #fff,622px 367px #fff,450px 706px #fff,962px 1885px #fff,893px 2152px #fff,1423px 1666px #fff,442px 2196px #fff,1640px 2494px #fff,2414px 1441px #fff,1939px 1148px #fff,80px 750px #fff,688px 2215px #fff,957px 709px #fff,148px 1678px #fff,2020px 2411px #fff,966px 91px #fff,795px 681px #fff,1241px 2388px #fff,1953px 1244px #fff,453px 1639px #fff,2533px 1589px #fff,1151px 1245px #fff,837px 1975px #fff,1901px 237px #fff,1058px 1597px #fff,1208px 2278px #fff,260px 1634px #fff,2281px 942px #fff,1050px 2124px #fff,348px 2423px #fff,702px 1981px #fff,478px 1850px #fff,2096px 681px #fff,1934px 439px #fff,972px 168px #fff,1027px 2297px #fff,108px 2228px #fff,956px 87px #fff,2159px 2490px #fff,1631px 663px #fff,1423px 1368px #fff,1509px 91px #fff,1037px 279px #fff,514px 1474px #fff,2051px 1967px #fff,1933px 549px #fff,307px 373px #fff,2195px 297px #fff,1339px 566px #fff,1927px 648px #fff,1774px 1267px #fff,1615px 1684px #fff,1597px 2013px #fff,2530px 672px #fff,27px 2406px #fff,2285px 2473px #fff,1170px 331px #fff,2306px 2132px #fff,1778px 2146px #fff,2009px 1141px #fff,2417px 1297px #fff,10px 2318px #fff,2119px 1651px #fff,2274px 2287px #fff,1856px 2284px #fff,1116px 2096px #fff,2027px 1684px #fff,1881px 2178px #fff,262px 71px #fff,1689px 48px #fff,341px 567px #fff,1363px 1706px #fff,833px 93px #fff,198px 1771px #fff,2314px 2302px #fff,1414px 2512px #fff,2389px 2457px #fff,1737px 668px #fff,2004px 481px #fff,223px 1171px #fff,1075px 1690px #fff,1937px 498px #fff,235px 853px #fff,2161px 2296px #fff,2382px 1575px #fff,885px 1426px #fff,2061px 2240px #fff,652px 336px #fff,430px 92px #fff,2244px 1075px #fff,646px 215px #fff,2265px 11px #fff,460px 834px #fff,1557px 940px #fff,2363px 2418px #fff,2223px 1172px #fff,1466px 2523px #fff,2456px 1996px #fff,1896px 658px #fff,129px 2376px #fff,1060px 2473px #fff,1703px 2408px #fff,600px 343px #fff,1607px 246px #fff,487px 2165px #fff,434px 1195px #fff,2487px 2303px #fff,188px 46px #fff,1572px 881px #fff,1390px 1054px #fff,1498px 1101px #fff,853px 2526px #fff,2515px 1732px #fff,769px 1325px #fff,1439px 966px #fff,2496px 831px #fff,693px 682px #fff,888px 2067px #fff,2206px 279px #fff,2241px 1108px #fff,3px 1506px #fff,38px 416px #fff,2062px 1160px #fff,940px 2180px #fff,2449px 1293px #fff,1396px 1537px #fff,2193px 2287px #fff,223px 1713px #fff,1427px 2249px #fff,629px 2070px #fff,2045px 2008px #fff,1017px 1145px #fff,700px 1473px #fff,812px 1839px #fff,2073px 2168px #fff,1621px 1262px #fff,2535px 807px #fff,156px 205px #fff,2055px 2226px #fff,2363px 1690px #fff,2429px 301px #fff,1498px 1005px #fff,2099px 285px #fff,1490px 2206px #fff,1427px 698px #fff,1674px 1535px #fff,300px 1294px #fff,872px 655px #fff,1496px 1682px #fff,885px 2203px #fff,504px 1173px #fff,1974px 299px #fff,1440px 964px #fff,1060px 1103px #fff,855px 1226px #fff,545px 1822px #fff,1082px 2200px #fff,1908px 1469px #fff,1733px 1176px #fff,1340px 2029px #fff,39px 2255px #fff,187px 1396px #fff,1646px 94px #fff,1646px 1568px #fff,593px 2199px #fff,237px 699px #fff,394px 2216px #fff,504px 1037px #fff,1847px 808px #fff,19px 56px #fff,2026px 2336px #fff,1885px 443px #fff,2201px 489px #fff,446px 2238px #fff,1499px 1362px #fff,1155px 1440px #fff,1543px 603px #fff,2362px 794px #fff,191px 1454px #fff,2033px 1122px #fff,179px 395px #fff,618px 23px #fff,1491px 608px #fff,516px 1275px #fff,1904px 2014px #fff,1235px 1871px #fff,1416px 2233px #fff,2356px 690px #fff,155px 2189px #fff,938px 427px #fff,1753px 1786px #fff,2499px 2461px #fff,1955px 2019px #fff,2017px 673px #fff,1625px 2242px #fff,596px 48px #fff,2369px 1720px #fff,1746px 636px #fff,1210px 1996px #fff,379px 603px #fff,2463px 1452px #fff,222px 307px #fff,1214px 2025px #fff,259px 562px #fff,514px 1931px #fff,835px 2493px #fff,2432px 838px #fff,1316px 346px #fff,1915px 865px #fff,1399px 273px #fff,597px 51px #fff,1153px 1715px #fff,1851px 1668px #fff,1661px 505px #fff,2013px 1724px #fff,1781px 2485px #fff,956px 2352px #fff,2235px 1597px #fff,172px 257px #fff,2054px 1727px #fff,181px 899px #fff,977px 1214px #fff,763px 2464px #fff,370px 1623px #fff,947px 1439px #fff,61px 2128px #fff,486px 2269px #fff,1047px 1172px #fff,946px 2554px #fff,2127px 2068px #fff,2097px 152px #fff,1281px 2079px #fff,1619px 1447px #fff,29px 991px #fff,1767px 2190px #fff,527px 1494px #fff,1024px 755px #fff,2236px 1111px #fff,1661px 1976px #fff,2464px 182px #fff,2460px 327px #fff,1082px 393px #fff,1967px 1765px #fff,1875px 1054px #fff,196px 2500px #fff,597px 1706px #fff,1039px 2147px #fff,657px 2416px #fff,545px 262px #fff,1040px 1883px #fff,2493px 1051px #fff,844px 102px #fff,1615px 2069px #fff,870px 2453px #fff,2504px 1425px #fff,1849px 1183px #fff,845px 865px #fff,335px 202px #fff,2056px 2063px #fff,754px 515px #fff,1525px 2316px #fff,1399px 1683px #fff,488px 2323px #fff,1758px 600px #fff,724px 1322px #fff,199px 124px #fff,2167px 2486px #fff,844px 1277px #fff,1851px 452px #fff,2418px 869px #fff,2446px 152px #fff,86px 2393px #fff,977px 927px #fff,1916px 533px #fff,2388px 24px #fff,1828px 870px #fff,1997px 1009px #fff,781px 1746px #fff,1538px 800px #fff,2516px 994px #fff,2119px 1610px #fff,2153px 2560px #fff,236px 434px #fff,848px 369px #fff,2523px 2329px #fff,1282px 642px #fff,249px 2108px #fff,322px 1288px #fff,1157px 1026px #fff,58px 1046px #fff,1937px 666px #fff,1201px 1853px #fff,1737px 1230px #fff,86px 500px #fff,2192px 931px #fff,439px 367px #fff,944px 1744px #fff,668px 1817px #fff,256px 247px #fff,775px 1505px #fff,849px 597px #fff,677px 1015px #fff,976px 485px #fff,2010px 2492px #fff,668px 1137px #fff,2431px 1870px #fff,2190px 1346px #fff,895px 1067px #fff,2228px 1420px #fff,138px 1176px #fff,352px 1913px #fff,517px 620px #fff,160px 1474px #fff,2435px 181px #fff,1836px 333px #fff,111px 1389px #fff,394px 2244px #fff,866px 1764px #fff,240px 723px #fff,137px 151px #fff,1722px 501px #fff,1855px 356px #fff,84px 1192px #fff,1216px 326px #fff,1322px 905px #fff,1227px 2110px #fff,2429px 1368px #fff,1876px 460px #fff,2375px 897px #fff,2334px 2207px #fff,1882px 2181px #fff,2281px 527px #fff,934px 329px #fff,635px 306px #fff,2090px 2513px #fff,420px 348px #fff,1331px 1709px #fff,2505px 1360px #fff,1598px 1430px #fff,1703px 2053px #fff,1560px 1758px #fff,1516px 908px #fff,1997px 1204px #fff,1115px 514px #fff,2402px 1822px #fff,255px 578px #fff,2086px 1px #fff,1850px 822px #fff,557px 1120px #fff,2446px 2134px #fff,325px 1801px #fff,2268px 314px #fff,1710px 1801px #fff,36px 357px #fff,521px 94px #fff,1203px 965px #fff,2438px 750px #fff,2346px 1917px #fff,2488px 687px #fff,1609px 568px #fff,554px 1931px #fff,1756px 757px #fff,1985px 343px #fff,729px 1461px #fff,2419px 872px #fff,1670px 603px #fff,316px 2387px #fff,1998px 1596px #fff,2363px 2236px #fff,2066px 2551px #fff,1827px 1206px #fff,1280px 393px #fff,1628px 1116px #fff,1065px 984px #fff,940px 700px #fff,2336px 193px #fff,1204px 341px #fff,365px 850px #fff,916px 197px #fff,662px 1630px #fff;height:1px;width:1px}.particles-animation-wrapper .particle-1:after{box-shadow:0 0 #fff,410px 1602px #fff,1845px 1415px #fff,1924px 188px #fff,85px 938px #fff,248px 1194px #fff,1678px 87px #fff,1215px 2491px #fff,902px 704px #fff,2096px 1000px #fff,835px 2538px #fff,580px 299px #fff,1972px 2165px #fff,1623px 181px #fff,2339px 1607px #fff,2548px 1058px #fff,1001px 1421px #fff,884px 321px #fff,253px 2453px #fff,1299px 608px #fff,774px 1276px #fff,2041px 981px #fff,1790px 1016px #fff,237px 595px #fff,69px 515px #fff,948px 1987px #fff,2303px 2253px #fff,933px 599px #fff,784px 242px #fff,897px 1843px #fff,2342px 1511px #fff,1715px 2244px #fff,599px 1860px #fff,2168px 2400px #fff,1967px 2297px #fff,507px 1718px #fff,1029px 1516px #fff,417px 748px #fff,143px 2127px #fff,246px 1011px #fff,812px 2062px #fff,2221px 2396px #fff,1580px 62px #fff,1868px 1672px #fff,925px 1856px #fff,1322px 1202px #fff,724px 2551px #fff,71px 2021px #fff,1071px 137px #fff,2221px 1296px #fff,1261px 2454px #fff,1737px 1198px #fff,2122px 2230px #fff,1066px 2042px #fff,445px 1709px #fff,1379px 1467px #fff,564px 1544px #fff,41px 1359px #fff,1106px 2120px #fff,248px 1231px #fff,717px 1766px #fff,2493px 1473px #fff,2351px 1504px #fff,749px 7px #fff,541px 1581px #fff,1130px 1405px #fff,1674px 2232px #fff,521px 1673px #fff,2364px 947px #fff,277px 2444px #fff,2258px 185px #fff,2098px 750px #fff,1993px 1143px #fff,1760px 2298px #fff,396px 925px #fff,1887px 707px #fff,2289px 2178px #fff,2159px 1874px #fff,382px 918px #fff,1292px 626px #fff,2508px 1326px #fff,1994px 1696px #fff,1074px 1680px #fff,1650px 737px #fff,1587px 1908px #fff,1611px 256px #fff,1109px 2155px #fff,619px 2129px #fff,2366px 1150px #fff,2036px 2149px #fff,2368px 1030px #fff,1150px 1305px #fff,2463px 2078px #fff,890px 2036px #fff,2063px 2022px #fff,1793px 2413px #fff,6px 1893px #fff,1137px 155px #fff,741px 712px #fff,729px 2174px #fff,639px 1715px #fff,1530px 377px #fff,1935px 1295px #fff,1457px 1822px #fff,1746px 1062px #fff,2077px 1968px #fff,1871px 1131px #fff,1778px 1514px #fff,417px 2220px #fff,1497px 1048px #fff,281px 303px #fff,1535px 2341px #fff,1289px 496px #fff,1065px 1857px #fff,776px 2502px #fff,1282px 1803px #fff,2105px 934px #fff,574px 2357px #fff,2281px 2469px #fff,2197px 808px #fff,882px 61px #fff,2177px 696px #fff,114px 1144px #fff,1755px 11px #fff,314px 1873px #fff,1260px 2157px #fff,1019px 2282px #fff,1775px 1819px #fff,491px 1317px #fff,2486px 822px #fff,1066px 596px #fff,2539px 2082px #fff,211px 362px #fff,195px 2447px #fff,751px 1575px #fff,1839px 1588px #fff,289px 1769px #fff,788px 75px #fff,650px 1419px #fff,2546px 2085px #fff,510px 1770px #fff,2061px 512px #fff,839px 1141px #fff,897px 2023px #fff,1802px 619px #fff,152px 1018px #fff,2532px 1855px #fff,399px 266px #fff,651px 2361px #fff,1113px 2077px #fff,548px 2107px #fff,470px 1486px #fff,1315px 490px #fff,790px 996px #fff,352px 633px #fff,193px 165px #fff,1040px 1971px #fff,1666px 1307px #fff,710px 2382px #fff,2069px 2130px #fff,1058px 287px #fff,2077px 606px #fff,1269px 757px #fff,2216px 1217px #fff,1547px 976px #fff,2503px 1910px #fff,1356px 1760px #fff,1712px 169px #fff,2092px 1046px #fff,537px 469px #fff,1854px 1206px #fff,302px 1283px #fff,49px 1833px #fff,1613px 1848px #fff,375px 2429px #fff,1177px 954px #fff,2278px 1323px #fff,1574px 1289px #fff,1344px 1172px #fff,591px 95px #fff,105px 740px #fff,2017px 1276px #fff,1657px 1331px #fff,850px 917px #fff,1975px 707px #fff,970px 885px #fff,2108px 362px #fff,2106px 118px #fff,1627px 979px #fff,1889px 982px #fff,557px 1496px #fff,246px 2075px #fff,2315px 1930px #fff,1453px 692px #fff,2192px 711px #fff,1308px 1905px #fff,1915px 2089px #fff,782px 396px #fff,621px 2028px #fff,1681px 557px #fff,1078px 270px #fff,2378px 2520px #fff,1555px 2343px #fff,924px 2251px #fff,900px 606px #fff,1620px 2160px #fff,2525px 1185px #fff,1634px 2183px #fff,1618px 1891px #fff,2183px 2195px #fff,1065px 2325px #fff,1298px 193px #fff,2087px 106px #fff,1908px 1657px #fff,887px 1874px #fff,1476px 854px #fff,1285px 1079px #fff,93px 1241px #fff,40px 776px #fff,1588px 1551px #fff,908px 1428px #fff,522px 967px #fff,1933px 1764px #fff,789px 2262px #fff,153px 1563px #fff,432px 702px #fff,265px 1004px #fff,1462px 888px #fff,2102px 358px #fff,1488px 2424px #fff,100px 590px #fff,974px 117px #fff,1711px 2501px #fff,1954px 1977px #fff,326px 1458px #fff,1810px 161px #fff,2398px 984px #fff,1334px 498px #fff,278px 1729px #fff,168px 724px #fff,190px 445px #fff,685px 1467px #fff,34px 2060px #fff,661px 644px #fff,1031px 2362px #fff,975px 2186px #fff,1883px 2211px #fff,626px 1270px #fff,905px 2441px #fff,348px 549px #fff,884px 1448px #fff,402px 2429px #fff,449px 2203px #fff,1729px 2344px #fff,1237px 141px #fff,2345px 658px #fff,2474px 1620px #fff,365px 1116px #fff,1754px 217px #fff,977px 2067px #fff,2100px 164px #fff,2241px 379px #fff,702px 2383px #fff,2364px 1180px #fff,217px 241px #fff,354px 2318px #fff,1438px 2258px #fff,745px 1221px #fff,2054px 1040px #fff,369px 2499px #fff,815px 2012px #fff,2276px 2176px #fff,2425px 1339px #fff,1410px 538px #fff,210px 2071px #fff,205px 759px #fff,1198px 411px #fff,209px 597px #fff,1706px 1172px #fff,48px 891px #fff,2035px 2023px #fff,2377px 514px #fff,1465px 2436px #fff,1955px 2040px #fff,2352px 323px #fff,1903px 1202px #fff,519px 1329px #fff,2426px 1078px #fff,1601px 1700px #fff,456px 2170px #fff,684px 2402px #fff,2115px 2376px #fff,2114px 2323px #fff,389px 616px #fff,1057px 1474px #fff,823px 2457px #fff,592px 1855px #fff,1720px 2487px #fff,666px 72px #fff,2366px 135px #fff,293px 111px #fff,2381px 224px #fff,866px 1796px #fff,1138px 2438px #fff,1074px 1540px #fff,887px 2188px #fff,2095px 2325px #fff,194px 1175px #fff,1247px 1719px #fff,922px 2145px #fff,854px 11px #fff,2069px 882px #fff,1093px 1373px #fff,236px 2248px #fff,2385px 1943px #fff,173px 1404px #fff,1387px 171px #fff,1316px 1349px #fff,191px 2281px #fff,310px 820px #fff,2404px 755px #fff,2346px 1019px #fff,84px 842px #fff,747px 1058px #fff,2335px 793px #fff,213px 957px #fff,2425px 1665px #fff,1031px 1700px #fff,1381px 1673px #fff,860px 925px #fff,2523px 1624px #fff,1407px 1511px #fff,900px 2431px #fff,748px 1230px #fff,400px 1679px #fff,1883px 793px #fff,1616px 1401px #fff,2108px 723px #fff,255px 21px #fff,615px 1192px #fff,764px 1506px #fff,257px 1240px #fff,845px 2555px #fff,488px 746px #fff,338px 2507px #fff,2290px 1531px #fff,660px 1352px #fff,1248px 178px #fff,944px 1165px #fff,453px 1069px #fff,1415px 685px #fff,2010px 575px #fff,155px 2224px #fff,118px 710px #fff,1698px 1620px #fff,1682px 501px #fff,1505px 2335px #fff,508px 333px #fff,2197px 1964px #fff,1567px 1884px #fff,1406px 551px #fff,434px 2513px #fff,2252px 2383px #fff,1416px 1837px #fff,1107px 2020px #fff,789px 1086px #fff,158px 447px #fff,614px 879px #fff,447px 2428px #fff,1977px 2539px #fff,1665px 2271px #fff,2530px 571px #fff,2291px 1006px #fff,2346px 870px #fff,1340px 855px #fff,921px 1294px #fff,1328px 1230px #fff,1528px 2280px #fff,1228px 160px #fff,24px 2212px #fff,595px 1387px #fff,464px 686px #fff,2312px 828px #fff,1867px 2090px #fff,27px 1277px #fff,652px 1915px #fff,1651px 1412px #fff,508px 2369px #fff,1749px 1714px #fff,832px 575px #fff,504px 1585px #fff,466px 1987px #fff,2339px 1203px #fff,1670px 2px #fff,2418px 1180px #fff,1338px 545px #fff,1750px 1968px #fff,2131px 486px #fff,1821px 2039px #fff,61px 1375px #fff,2520px 2454px #fff,946px 2067px #fff,2303px 1000px #fff,651px 2233px #fff,2162px 1864px #fff,1358px 1059px #fff,2410px 1076px #fff,1789px 1646px #fff,2208px 830px #fff,574px 1961px #fff,1147px 2121px #fff,157px 865px #fff,1380px 1702px #fff,431px 544px #fff,2528px 2476px #fff,1333px 130px #fff,1879px 966px #fff,35px 1721px #fff,2524px 994px #fff,2291px 500px #fff,2248px 2188px #fff,225px 323px #fff,1378px 907px #fff,2320px 1308px #fff,1958px 1342px #fff,2533px 1626px #fff,297px 501px #fff,1948px 1408px #fff,2282px 139px #fff,1244px 389px #fff,2560px 1491px #fff,2042px 2191px #fff,339px 1569px #fff,1915px 1839px #fff,1404px 2071px #fff,1590px 2499px #fff,181px 204px #fff,1755px 240px #fff,1809px 1379px #fff,1613px 225px #fff,913px 303px #fff,280px 1089px #fff,1996px 1772px #fff,2045px 1292px #fff,2069px 716px #fff,152px 2497px #fff,752px 24px #fff,1944px 916px #fff,2343px 496px #fff,1989px 92px #fff,2374px 1292px #fff,1793px 930px #fff,1128px 883px #fff,293px 1621px #fff,748px 1003px #fff,1379px 1224px #fff,807px 210px #fff,1400px 1601px #fff,1708px 1798px #fff,1616px 1680px #fff,982px 469px #fff,1427px 530px #fff,2059px 1064px #fff,1058px 111px #fff,1864px 1035px #fff,534px 1639px #fff,2012px 1px #fff,376px 976px #fff,2269px 2153px #fff,503px 2179px #fff,131px 2452px #fff,995px 1880px #fff,280px 498px #fff,8px 677px #fff,1100px 1654px #fff,2034px 2391px #fff,151px 937px #fff,2003px 1789px #fff,707px 984px #fff,676px 215px #fff,2141px 641px #fff,409px 2106px #fff,1063px 1560px #fff,1487px 2331px #fff,112px 1515px #fff,443px 830px #fff,1452px 2511px #fff,563px 1103px #fff,1101px 1422px #fff,409px 1305px #fff,2432px 889px #fff,345px 1293px #fff,909px 1894px #fff,2489px 2517px #fff,1230px 2464px #fff,2256px 2365px #fff,683px 1871px #fff,2181px 668px #fff,1576px 805px #fff,77px 1053px #fff,951px 555px #fff,1044px 1118px #fff,1809px 1536px #fff,633px 1821px #fff,1970px 782px #fff,934px 1361px #fff,125px 2474px #fff,1119px 1222px #fff,751px 1882px #fff,626px 824px #fff,1827px 2515px #fff,420px 1611px #fff,1098px 1917px #fff,673px 755px #fff,1066px 1945px #fff,2484px 2411px #fff,1632px 103px #fff,1673px 1287px #fff,799px 1773px #fff,2446px 727px #fff,267px 2214px #fff,1083px 1896px #fff,1301px 170px #fff,450px 889px #fff,297px 1440px #fff,591px 2333px #fff,739px 1080px #fff,1510px 1808px #fff,233px 742px #fff,72px 693px #fff,946px 2211px #fff,555px 1215px #fff,1230px 1924px #fff,1295px 980px #fff,1631px 934px #fff,1421px 2103px #fff,2170px 415px #fff,559px 1868px #fff,1333px 2452px #fff,1069px 1386px #fff,1997px 622px #fff,1717px 1503px #fff,43px 335px #fff,392px 2187px #fff,2432px 1287px #fff,2340px 1107px #fff,1433px 2534px #fff,2536px 1783px #fff,1836px 113px #fff,706px 1320px #fff,419px 36px #fff,569px 1277px #fff,638px 2431px #fff,420px 2189px #fff,2443px 1148px #fff,1563px 1690px #fff,141px 420px #fff,178px 1522px #fff,1126px 370px #fff,1028px 1214px #fff,1574px 2083px #fff,779px 1846px #fff,426px 2280px #fff,65px 1740px #fff,2219px 2470px #fff,1458px 1275px #fff,691px 958px #fff,1171px 96px #fff,1358px 1604px #fff,1586px 647px #fff,1525px 309px #fff,696px 147px #fff,2060px 1767px #fff,850px 569px #fff,1393px 440px #fff,471px 1559px #fff,1229px 84px #fff,2556px 2464px #fff,2267px 2506px #fff,1081px 798px #fff,181px 1173px #fff,1868px 2507px #fff,2325px 1353px #fff,276px 1036px #fff,348px 1517px #fff,1905px 754px #fff,1595px 1021px #fff,2061px 941px #fff,2013px 317px #fff,1349px 927px #fff,637px 1486px #fff,1231px 1290px #fff,178px 1258px #fff,733px 11px #fff,1104px 511px #fff,604px 534px #fff,699px 1330px #fff,905px 571px #fff,2152px 1737px #fff,996px 2386px #fff,1058px 911px #fff;height:1px;width:1px}.particles-animation-wrapper .particle-2{-webkit-animation:120s linear infinite animParticle;animation:120s linear infinite animParticle;box-shadow:0 0 #fff,994px 1038px #fff,1543px 201px #fff,896px 450px #fff,2016px 1285px #fff,641px 2370px #fff,784px 2380px #fff,563px 1939px #fff,2303px 884px #fff,1092px 1319px #fff,38px 2122px #fff,988px 954px #fff,1087px 1915px #fff,1071px 1087px #fff,2086px 988px #fff,2095px 2357px #fff,520px 2067px #fff,1824px 136px #fff,2316px 1171px #fff,155px 251px #fff,44px 1828px #fff,508px 432px #fff,437px 1449px #fff,73px 174px #fff,1437px 553px #fff,566px 2508px #fff,1058px 2264px #fff,174px 754px #fff,1492px 1930px #fff,981px 455px #fff,1784px 1572px #fff,817px 2243px #fff,929px 509px #fff,709px 1718px #fff,468px 1166px #fff,2141px 2559px #fff,1599px 151px #fff,658px 1375px #fff,1150px 2250px #fff,1553px 2044px #fff,2284px 112px #fff,587px 1863px #fff,1455px 1753px #fff,848px 1368px #fff,519px 278px #fff,1071px 2475px #fff,1602px 142px #fff,1081px 829px #fff,490px 1496px #fff,371px 350px #fff,1520px 131px #fff,1950px 131px #fff,2227px 110px #fff,2195px 2240px #fff,194px 1693px #fff,516px 1059px #fff,2234px 742px #fff,168px 1892px #fff,1538px 1579px #fff,533px 876px #fff,2447px 14px #fff,1277px 1381px #fff,141px 2219px #fff,428px 923px #fff,1192px 1376px #fff,2061px 1139px #fff,301px 1754px #fff,335px 312px #fff,2232px 176px #fff,1580px 2536px #fff,941px 2318px #fff,1589px 483px #fff,68px 2184px #fff,1129px 1819px #fff,116px 1743px #fff,182px 2185px #fff,816px 395px #fff,2120px 1761px #fff,353px 2145px #fff,1793px 1965px #fff,1905px 2178px #fff,1976px 1382px #fff,2551px 2128px #fff,443px 149px #fff,110px 1493px #fff,802px 2536px #fff,1656px 2262px #fff,2127px 2011px #fff,1095px 516px #fff,2252px 1775px #fff,98px 1547px #fff,2241px 2385px #fff,1438px 2507px #fff,1727px 1709px #fff,38px 2458px #fff,896px 555px #fff,2089px 19px #fff,1022px 721px #fff,2219px 187px #fff,2386px 302px #fff,459px 298px #fff,746px 342px #fff,619px 1055px #fff,1168px 2244px #fff,579px 1292px #fff,1679px 2215px #fff,2007px 1556px #fff,785px 2278px #fff,450px 2328px #fff,497px 291px #fff,720px 1028px #fff,1031px 1262px #fff,1573px 182px #fff,1167px 1218px #fff,1668px 883px #fff,1047px 2309px #fff,652px 2301px #fff,912px 427px #fff,685px 1730px #fff,1332px 2164px #fff,2117px 1020px #fff,2481px 802px #fff,2397px 2474px #fff,1089px 2445px #fff,961px 501px #fff,1935px 2059px #fff,163px 1190px #fff,2210px 305px #fff,1826px 1160px #fff,1639px 1783px #fff,1369px 773px #fff,1241px 2173px #fff,2329px 1191px #fff,1501px 2167px #fff,284px 47px #fff,684px 1190px #fff,149px 790px #fff,320px 1025px #fff,895px 1523px #fff,1438px 2488px #fff,1611px 385px #fff,1276px 2289px #fff,86px 268px #fff,733px 2356px #fff,279px 652px #fff,1275px 817px #fff,497px 1146px #fff,2393px 1069px #fff,702px 947px #fff,2495px 2344px #fff,977px 1813px #fff,2291px 198px #fff,1594px 2028px #fff,1684px 717px #fff,839px 1158px #fff,865px 178px #fff,720px 2286px #fff,351px 2452px #fff,1786px 1263px #fff,1672px 468px #fff,614px 1469px #fff,1899px 1952px #fff,617px 505px #fff,2388px 2256px #fff,923px 1516px #fff,1470px 376px #fff,2498px 2559px #fff,354px 1449px #fff,436px 130px #fff,2124px 349px #fff,1059px 503px #fff,208px 1608px #fff,496px 2174px #fff,1447px 1560px #fff,1478px 337px #fff,250px 1250px #fff,1695px 155px #fff,2171px 1103px #fff,1891px 1643px #fff,1571px 1833px #fff,888px 986px #fff,1824px 1703px #fff,1186px 1757px #fff,1172px 2186px #fff,1687px 1634px #fff,1146px 1677px #fff,1834px 1767px #fff,1760px 1368px #fff,1937px 464px #fff,1458px 2007px #fff,1622px 2335px #fff,405px 739px #fff,2457px 1843px #fff,2494px 937px #fff,1213px 1319px #fff,2045px 1580px #fff,1642px 575px #fff,1052px 1201px #fff,1332px 1924px #fff,217px 487px #fff,1269px 762px #fff;height:2px;width:2px}.particles-animation-wrapper .particle-2:after{box-shadow:0 0 #fff,441px 203px #fff,1244px 361px #fff,1703px 391px #fff,1003px 198px #fff,738px 1198px #fff,2038px 897px #fff,1348px 1689px #fff,2467px 728px #fff,1198px 1163px #fff,1242px 2383px #fff,878px 1419px #fff,1945px 414px #fff,281px 1168px #fff,572px 732px #fff,722px 1194px #fff,1022px 349px #fff,984px 2120px #fff,1914px 79px #fff,1956px 1579px #fff,1625px 464px #fff,1693px 2420px #fff,1546px 1620px #fff,2206px 1870px #fff,871px 45px #fff,1272px 313px #fff,726px 2536px #fff,1623px 2127px #fff,1052px 724px #fff,1525px 27px #fff,381px 111px #fff,2472px 239px #fff,1305px 2548px #fff,536px 516px #fff,1365px 900px #fff,51px 2309px #fff,810px 1173px #fff,454px 2013px #fff,2423px 489px #fff,2306px 1327px #fff,208px 896px #fff,346px 951px #fff,672px 756px #fff,2135px 484px #fff,1417px 1527px #fff,161px 2115px #fff,1141px 86px #fff,2230px 325px #fff,1585px 892px #fff,517px 979px #fff,1194px 688px #fff,1029px 2403px #fff,2161px 2322px #fff,1936px 829px #fff,1305px 130px #fff,1671px 525px #fff,290px 2008px #fff,1912px 448px #fff,487px 2265px #fff,1551px 407px #fff,1602px 847px #fff,2526px 102px #fff,1545px 2138px #fff,1559px 400px #fff,624px 451px #fff,1037px 544px #fff,1686px 612px #fff,1483px 2172px #fff,2446px 1489px #fff,1015px 1762px #fff,423px 9px #fff,338px 335px #fff,987px 1019px #fff,1732px 730px #fff,1948px 868px #fff,1601px 1491px #fff,124px 1543px #fff,1189px 733px #fff,2519px 1181px #fff,2118px 1250px #fff,856px 2218px #fff,617px 907px #fff,528px 788px #fff,416px 1905px #fff,2146px 1016px #fff,1387px 1247px #fff,743px 2525px #fff,580px 976px #fff,2230px 842px #fff,1423px 1768px #fff,1387px 284px #fff,1516px 560px #fff,1274px 66px #fff,217px 119px #fff,1958px 656px #fff,2199px 1753px #fff,1731px 782px #fff,127px 576px #fff,49px 297px #fff,543px 2333px #fff,1322px 2511px #fff,261px 33px #fff,1842px 1059px #fff,651px 2281px #fff,2462px 1273px #fff,1252px 317px #fff,335px 1866px #fff,2150px 1400px #fff,819px 2330px #fff,1789px 1600px #fff,18px 1822px #fff,2072px 334px #fff,482px 2463px #fff,108px 403px #fff,1063px 359px #fff,2071px 2195px #fff,549px 582px #fff,1263px 1318px #fff,597px 1737px #fff,118px 2069px #fff,2275px 988px #fff,1381px 1167px #fff,1208px 1475px #fff,1738px 265px #fff,2438px 542px #fff,45px 1873px #fff,1820px 84px #fff,1379px 90px #fff,2415px 1841px #fff,92px 2335px #fff,2342px 699px #fff,769px 2493px #fff,2550px 557px #fff,1708px 42px #fff,116px 2106px #fff,677px 765px #fff,862px 2318px #fff,1227px 2441px #fff,1543px 1721px #fff,1136px 2277px #fff,891px 652px #fff,981px 1715px #fff,1588px 2056px #fff,1021px 1588px #fff,837px 1899px #fff,940px 802px #fff,1713px 1642px #fff,2517px 834px #fff,1893px 2491px #fff,1002px 117px #fff,1544px 213px #fff,2236px 1279px #fff,1193px 2017px #fff,789px 1574px #fff,687px 2193px #fff,595px 235px #fff,1613px 1337px #fff,1401px 172px #fff,1815px 27px #fff,2208px 1986px #fff,1419px 152px #fff,657px 1325px #fff,2555px 2384px #fff,813px 1059px #fff,1728px 2405px #fff,1762px 1446px #fff,2108px 1881px #fff,1641px 1351px #fff,824px 1474px #fff,2144px 520px #fff,353px 1941px #fff,213px 1720px #fff,238px 1480px #fff,438px 2262px #fff,653px 202px #fff,2510px 1927px #fff,1950px 249px #fff,2164px 1182px #fff,2044px 375px #fff,778px 1845px #fff,1403px 901px #fff,1510px 1317px #fff,557px 522px #fff,1358px 644px #fff,2094px 2468px #fff,408px 2410px #fff,1412px 2287px #fff,527px 269px #fff,700px 97px #fff,170px 884px #fff,559px 889px #fff,2265px 916px #fff,1549px 1496px #fff,219px 1024px #fff,252px 2453px #fff,2344px 1664px #fff,604px 1847px #fff,74px 1850px #fff,1181px 1860px #fff,1224px 1260px #fff,1479px 826px #fff;height:2px;width:2px}.particles-animation-wrapper .particle-3{-webkit-animation:180s linear infinite animParticle;animation:180s linear infinite animParticle;box-shadow:0 0 #fff,2052px 2128px #fff,844px 105px #fff,1686px 1211px #fff,1223px 622px #fff,351px 1235px #fff,1307px 2285px #fff,1156px 1765px #fff,171px 538px #fff,886px 1907px #fff,1696px 552px #fff,1519px 249px #fff,43px 1545px #fff,1805px 1939px #fff,1733px 1336px #fff,537px 1586px #fff,182px 9px #fff,676px 1363px #fff,1982px 1112px #fff,518px 978px #fff,1077px 1567px #fff,2394px 2476px #fff,97px 1347px #fff,2388px 534px #fff,2094px 2211px #fff,2180px 60px #fff,1725px 2297px #fff,1085px 1440px #fff,873px 1029px #fff,1986px 729px #fff,467px 1674px #fff,405px 1062px #fff,1586px 294px #fff,2021px 1064px #fff,702px 134px #fff,910px 2248px #fff,1373px 2103px #fff,130px 1925px #fff,1858px 1455px #fff,1495px 1333px #fff,1325px 171px #fff,1582px 1674px #fff,1940px 2096px #fff,1211px 1036px #fff,1129px 923px #fff,1751px 951px #fff,2442px 1417px #fff,499px 1475px #fff,581px 344px #fff,1619px 826px #fff,564px 81px #fff,2521px 676px #fff,1038px 1842px #fff,1123px 1789px #fff,180px 1725px #fff,1543px 724px #fff,1351px 1369px #fff,2250px 1514px #fff,1867px 2139px #fff,2119px 2081px #fff,1368px 1977px #fff,793px 114px #fff,1305px 1309px #fff,748px 2163px #fff,1180px 799px #fff,2243px 2042px #fff,1800px 311px #fff,881px 15px #fff,2007px 624px #fff,2536px 921px #fff,2031px 2444px #fff,2215px 1030px #fff,429px 1074px #fff,2498px 2205px #fff,2089px 2232px #fff,1015px 342px #fff,1899px 1327px #fff,652px 682px #fff,1533px 2273px #fff,2040px 1300px #fff,268px 2546px #fff,1680px 732px #fff,2306px 43px #fff,2218px 1697px #fff,1306px 2314px #fff,217px 1210px #fff,1361px 1899px #fff,340px 749px #fff,814px 1839px #fff,691px 2503px #fff,1113px 274px #fff,834px 2003px #fff,1933px 577px #fff,1391px 2534px #fff,2348px 1926px #fff,2097px 1918px #fff,2132px 1137px #fff,1451px 47px #fff,958px 1612px #fff,2139px 529px #fff,529px 2452px #fff;height:3px;width:3px}.particles-animation-wrapper .particle-3:after{box-shadow:0 0 #fff,460px 2411px #fff,1576px 1656px #fff,1345px 1885px #fff,847px 142px #fff,2268px 1195px #fff,1991px 1344px #fff,302px 965px #fff,641px 1270px #fff,683px 1137px #fff,2143px 314px #fff,673px 252px #fff,1792px 444px #fff,2062px 1744px #fff,619px 840px #fff,2449px 1275px #fff,2191px 2539px #fff,1987px 368px #fff,598px 1156px #fff,1008px 2069px #fff,2002px 2123px #fff,247px 536px #fff,2258px 1764px #fff,2050px 190px #fff,495px 790px #fff,242px 2389px #fff,1537px 1612px #fff,2088px 1627px #fff,1307px 2502px #fff,586px 1213px #fff,2487px 849px #fff,1526px 862px #fff,1830px 1013px #fff,1003px 166px #fff,2127px 1048px #fff,345px 388px #fff,1567px 1301px #fff,2461px 1734px #fff,507px 2398px #fff,2488px 21px #fff,1536px 699px #fff,2487px 2330px #fff,1153px 2555px #fff,815px 642px #fff,1769px 2450px #fff,2350px 1768px #fff,44px 2094px #fff,1335px 2112px #fff,984px 1518px #fff,22px 1392px #fff,1100px 1037px #fff,786px 1552px #fff,2382px 1849px #fff,682px 649px #fff,1868px 718px #fff,2477px 1430px #fff,2264px 2385px #fff,1993px 984px #fff,2404px 510px #fff,663px 338px #fff,1343px 1684px #fff,2071px 885px #fff,1084px 186px #fff,2470px 1902px #fff,2240px 923px #fff,2344px 1264px #fff,357px 518px #fff,1029px 562px #fff,840px 764px #fff,1191px 2493px #fff,2505px 697px #fff,2398px 2294px #fff,252px 2202px #fff,2159px 14px #fff,1112px 768px #fff,1576px 637px #fff,2294px 565px #fff,1012px 160px #fff,2325px 187px #fff,783px 2272px #fff,25px 994px #fff,1967px 2176px #fff,866px 1791px #fff,383px 2364px #fff,207px 189px #fff,1041px 588px #fff,1732px 1500px #fff,1301px 998px #fff,2279px 58px #fff,1989px 835px #fff,1739px 7px #fff,880px 2420px #fff,2490px 1097px #fff,1112px 305px #fff,2494px 1634px #fff,338px 1502px #fff,1757px 1932px #fff,2362px 679px #fff,2054px 1752px #fff,1000px 1374px #fff,563px 519px #fff;height:3px;width:3px}.particles-animation-wrapper .particle-4{-webkit-animation:600s linear infinite animParticle;animation:600s linear infinite animParticle;box-shadow:0 0 #fff,1032px 1594px #fff,593px 1203px #fff,590px 68px #fff,616px 655px #fff,787px 339px #fff,1495px 2497px #fff,1380px 642px #fff,316px 2332px #fff,782px 1541px #fff,2078px 2544px #fff,1590px 2263px #fff,1760px 587px #fff,524px 1585px #fff,882px 2277px #fff,1114px 1674px #fff,2261px 2250px #fff,1902px 2532px #fff,2528px 1063px #fff,445px 1228px #fff,2251px 1360px #fff,1427px 1256px #fff,775px 1714px #fff,2051px 2211px #fff,695px 910px #fff,2183px 864px #fff,2005px 1696px #fff,2478px 993px #fff,2008px 1944px #fff,1984px 1342px #fff,1028px 2444px #fff,1857px 67px #fff,945px 2558px #fff,1122px 1939px #fff,233px 200px #fff,2167px 1194px #fff,1171px 2194px #fff,2335px 1205px #fff,1871px 2371px #fff,2414px 1647px #fff,464px 2191px #fff,2093px 2398px #fff,1707px 1934px #fff,1675px 145px #fff,1802px 1283px #fff,1433px 1982px #fff,2254px 917px #fff,2228px 2359px #fff,574px 962px #fff,2152px 317px #fff,2542px 1052px #fff,1601px 1401px #fff,362px 1319px #fff,41px 2052px #fff,1983px 1448px #fff,1px 626px #fff,105px 1342px #fff,1680px 949px #fff,191px 2449px #fff,173px 850px #fff,875px 1047px #fff,1676px 1821px #fff,2048px 2389px #fff,461px 283px #fff,613px 1050px #fff,1611px 654px #fff,190px 1876px #fff,1748px 464px #fff,2069px 2531px #fff,955px 2431px #fff,714px 1364px #fff,1970px 77px #fff,1403px 711px #fff,48px 1186px #fff,1795px 52px #fff,544px 2059px #fff,278px 2454px #fff,2005px 1274px #fff,892px 1311px #fff,875px 2217px #fff,1672px 877px #fff,2502px 1863px #fff,1198px 1832px #fff,923px 2311px #fff,2516px 281px #fff,2393px 342px #fff,1439px 611px #fff,641px 1579px #fff,1461px 1333px #fff,172px 1789px #fff,129px 445px #fff,2011px 1318px #fff,2111px 741px #fff,1729px 233px #fff,2137px 1967px #fff,671px 235px #fff,963px 1153px #fff,2152px 1239px #fff,2114px 959px #fff,1929px 189px #fff,2278px 2186px #fff,549px 220px #fff,1973px 1795px #fff,658px 1704px #fff,1783px 2475px #fff,2302px 1213px #fff,394px 1589px #fff,539px 1843px #fff,247px 708px #fff,1187px 2554px #fff,2210px 544px #fff,1329px 2027px #fff,560px 797px #fff,413px 774px #fff,654px 1531px #fff,1752px 2374px #fff,92px 1297px #fff,1067px 795px #fff,2232px 1955px #fff,1166px 179px #fff,546px 283px #fff,2352px 1527px #fff,92px 136px #fff,2548px 1917px #fff,67px 2060px #fff,814px 1040px #fff,357px 203px #fff,663px 1937px #fff,1990px 1590px #fff,2189px 2543px #fff,760px 2556px #fff,2282px 2313px #fff,2030px 482px #fff,1198px 2041px #fff,1261px 220px #fff,570px 2516px #fff,757px 2429px #fff,2522px 1378px #fff,1251px 128px #fff,2360px 1132px #fff,449px 273px #fff,2546px 2493px #fff,2345px 2098px #fff,168px 1493px #fff,875px 408px #fff,1087px 670px #fff,829px 552px #fff,114px 351px #fff,609px 2445px #fff,1195px 2344px #fff,40px 2392px #fff,304px 2031px #fff,1344px 841px #fff,664px 1614px #fff,1409px 2553px #fff,2233px 1720px #fff,601px 54px #fff,1689px 1596px #fff,739px 1131px #fff,13px 1765px #fff,1381px 1279px #fff,420px 757px #fff,1903px 593px #fff,2269px 200px #fff,1800px 2255px #fff,232px 2279px #fff,1388px 1558px #fff,1504px 12px #fff,1042px 1384px #fff,1726px 1511px #fff,273px 2385px #fff,1871px 316px #fff,1706px 82px #fff,1538px 1025px #fff,2028px 1250px #fff,685px 2376px #fff,2251px 1816px #fff,1567px 927px #fff,793px 903px #fff,914px 2392px #fff,1833px 464px #fff,2187px 1975px #fff,1164px 1052px #fff,471px 244px #fff,1985px 2358px #fff,447px 112px #fff,888px 208px #fff,1175px 1767px #fff,39px 2424px #fff,1705px 2389px #fff,2455px 1807px #fff,1447px 599px #fff,1931px 333px #fff,1582px 1139px #fff,1940px 1533px #fff,2430px 1698px #fff,2237px 2262px #fff,598px 133px #fff,1343px 445px #fff,1248px 1335px #fff,2101px 1150px #fff,1448px 1840px #fff,2455px 789px #fff,45px 814px #fff,2385px 286px #fff,1338px 1967px #fff,1634px 2413px #fff,1486px 779px #fff,1617px 1297px #fff,694px 481px #fff,2136px 1714px #fff,1156px 81px #fff,2311px 1189px #fff,489px 551px #fff,2179px 2450px #fff,1931px 2042px #fff,1388px 2463px #fff,448px 2262px #fff,1635px 2472px #fff,2373px 1101px #fff,805px 591px #fff,1313px 1997px #fff,919px 587px #fff,1562px 1356px #fff,695px 343px #fff,2343px 2087px #fff,196px 2393px #fff,2530px 1623px #fff,2382px 1234px #fff,89px 2506px #fff,1479px 2431px #fff,2151px 12px #fff,2155px 1930px #fff,2269px 1007px #fff,386px 344px #fff,2051px 1189px #fff,222px 192px #fff,1002px 369px #fff,1562px 934px #fff,641px 541px #fff,921px 1640px #fff,1587px 475px #fff,1361px 1086px #fff,1604px 2047px #fff,2525px 2314px #fff,168px 197px #fff,150px 297px #fff,1781px 637px #fff,2522px 1505px #fff,1729px 542px #fff,919px 132px #fff,1222px 1432px #fff,2442px 1087px #fff,142px 1166px #fff,2034px 1128px #fff,2103px 2289px #fff,1668px 698px #fff,449px 1440px #fff,2323px 47px #fff,320px 2242px #fff,1352px 500px #fff,1369px 2180px #fff,1363px 321px #fff,1766px 2062px #fff,166px 2428px #fff,1624px 1437px #fff,2405px 910px #fff,1924px 177px #fff,1698px 1315px #fff,1383px 1653px #fff,1296px 570px #fff,1296px 1532px #fff,152px 619px #fff,2066px 1002px #fff,572px 925px #fff,2243px 822px #fff,2163px 1836px #fff,107px 2282px #fff,477px 544px #fff,1343px 1168px #fff,2311px 641px #fff,1545px 498px #fff,1614px 1393px #fff,933px 944px #fff,2150px 1621px #fff,1888px 559px #fff,564px 2083px #fff,324px 2358px #fff,1358px 1161px #fff,1553px 2290px #fff,1836px 1244px #fff,709px 1072px #fff,1633px 753px #fff,41px 857px #fff,981px 2451px #fff,496px 47px #fff,1607px 1364px #fff,428px 484px #fff,89px 818px #fff,2523px 775px #fff,1559px 1409px #fff,53px 2507px #fff,2342px 1749px #fff,2405px 1552px #fff,2441px 730px #fff,1533px 1658px #fff,1710px 1536px #fff,1364px 356px #fff,232px 1592px #fff,638px 1707px #fff,925px 256px #fff,909px 2041px #fff,328px 1012px #fff,1601px 2528px #fff,1811px 1931px #fff,2328px 1300px #fff,2529px 684px #fff,585px 88px #fff,817px 212px #fff,1616px 1423px #fff,1280px 2302px #fff,1300px 1453px #fff,1512px 495px #fff,1844px 340px #fff,207px 914px #fff,2204px 714px #fff,2546px 1371px #fff,2307px 1757px #fff,875px 1875px #fff,651px 1992px #fff,247px 1483px #fff,477px 1558px #fff,2085px 319px #fff,298px 345px #fff,2025px 2273px #fff,1190px 1637px #fff,1447px 39px #fff,2391px 219px #fff,315px 526px #fff,1557px 374px #fff,491px 1915px #fff,1964px 1799px #fff,498px 2551px #fff,1263px 242px #fff,626px 1711px #fff,1666px 1295px #fff,2019px 216px #fff,512px 802px #fff,155px 671px #fff,1875px 1676px #fff,169px 972px #fff,2158px 1576px #fff,2238px 1783px #fff,1458px 1393px #fff,168px 1178px #fff,950px 204px #fff,1224px 1826px #fff,2272px 293px #fff,1007px 1835px #fff,539px 1279px #fff,943px 1300px #fff,1608px 251px #fff,2090px 412px #fff,861px 238px #fff,1554px 544px #fff,1676px 2537px #fff,618px 1580px #fff,812px 807px #fff,858px 1660px #fff,1387px 31px #fff,2014px 1308px #fff,1425px 436px #fff,1758px 1274px #fff,1560px 2208px #fff,660px 2391px #fff,2079px 1457px #fff,446px 412px #fff,353px 628px #fff,1304px 1349px #fff,1023px 815px #fff,2153px 44px #fff,1495px 1225px #fff,1617px 1473px #fff,2249px 1006px #fff,469px 1868px #fff,1557px 348px #fff,2506px 1841px #fff,891px 1554px #fff,1963px 772px #fff,1129px 334px #fff,45px 96px #fff,943px 320px #fff,661px 1426px #fff,842px 1389px #fff,2545px 106px #fff,673px 2281px #fff,347px 1733px #fff,1289px 2223px #fff,845px 2294px #fff,398px 1448px #fff,374px 1769px #fff;height:1px;width:1px}.particles-animation-wrapper .particle-4:after{box-shadow:0 0 #fff,171px 1153px #fff,1590px 2314px #fff,2468px 2078px #fff,1116px 1043px #fff,5px 1965px #fff,1278px 1415px #fff,954px 82px #fff,2064px 338px #fff,437px 1858px #fff,2377px 1079px #fff,137px 602px #fff,874px 2126px #fff,1421px 940px #fff,2556px 524px #fff,1860px 1688px #fff,1646px 1004px #fff,1779px 1210px #fff,2160px 682px #fff,1545px 911px #fff,2547px 327px #fff,1553px 352px #fff,2055px 1141px #fff,1797px 598px #fff,1028px 185px #fff,932px 1050px #fff,1307px 441px #fff,2010px 1076px #fff,2508px 2282px #fff,620px 1936px #fff,557px 2433px #fff,1844px 837px #fff,129px 947px #fff,364px 2115px #fff,2488px 760px #fff,84px 162px #fff,1677px 428px #fff,667px 684px #fff,1013px 1877px #fff,1706px 594px #fff,1178px 1651px #fff,2197px 604px #fff,497px 940px #fff,752px 1152px #fff,1227px 1668px #fff,1726px 1896px #fff,1900px 649px #fff,1531px 803px #fff,1388px 1805px #fff,1792px 794px #fff,379px 221px #fff,362px 1382px #fff,2139px 559px #fff,1592px 459px #fff,17px 656px #fff,1241px 2293px #fff,2145px 2500px #fff,2057px 182px #fff,332px 95px #fff,1189px 2508px #fff,705px 1628px #fff,1093px 2087px #fff,1524px 1102px #fff,1876px 2173px #fff,663px 2144px #fff,549px 568px #fff,1323px 26px #fff,1591px 1343px #fff,1609px 2385px #fff,1513px 1876px #fff,1610px 747px #fff,760px 519px #fff,539px 2481px #fff,1619px 2497px #fff,1151px 1017px #fff,473px 160px #fff,335px 1967px #fff,456px 1073px #fff,1163px 2351px #fff,1748px 401px #fff,666px 2257px #fff,1995px 2554px #fff,746px 270px #fff,657px 1445px #fff,583px 2352px #fff,1015px 149px #fff,1562px 460px #fff,1899px 993px #fff,1864px 1393px #fff,601px 2210px #fff,2118px 818px #fff,144px 1650px #fff,1803px 1372px #fff,2414px 275px #fff,931px 182px #fff,78px 1143px #fff,2418px 712px #fff,2377px 1760px #fff,2466px 2049px #fff,2461px 895px #fff,2252px 2043px #fff,373px 737px #fff,1880px 882px #fff,799px 338px #fff,1588px 90px #fff,594px 2120px #fff,969px 2153px #fff,404px 1694px #fff,1128px 1256px #fff,2043px 1526px #fff,644px 542px #fff,995px 1644px #fff,1630px 618px #fff,1628px 871px #fff,1244px 1716px #fff,269px 1852px #fff,1211px 1811px #fff,1997px 1467px #fff,368px 293px #fff,2299px 773px #fff,1812px 1393px #fff,1059px 1384px #fff,1403px 2512px #fff,1464px 2140px #fff,979px 2328px #fff,1027px 2394px #fff,1095px 838px #fff,1206px 1622px #fff,1145px 2352px #fff,817px 545px #fff,2383px 600px #fff,968px 699px #fff,668px 1780px #fff,515px 585px #fff,1331px 1036px #fff,898px 707px #fff,1127px 1148px #fff,987px 215px #fff,2257px 1040px #fff,658px 199px #fff,593px 377px #fff,1589px 807px #fff,55px 1437px #fff,489px 1769px #fff,467px 2027px #fff,679px 141px #fff,633px 1004px #fff,1430px 269px #fff,1403px 1090px #fff,2176px 1583px #fff,48px 1079px #fff,633px 331px #fff,1834px 282px #fff,483px 526px #fff,2543px 1195px #fff,2254px 773px #fff,1572px 2301px #fff,664px 635px #fff,2297px 438px #fff,356px 510px #fff,2469px 2038px #fff,833px 592px #fff,2040px 1668px #fff,1715px 2229px #fff,1629px 1782px #fff,2353px 1418px #fff,127px 2318px #fff,1271px 711px #fff,388px 930px #fff,1499px 1491px #fff,1654px 2367px #fff,2525px 2540px #fff,2496px 895px #fff,1571px 370px #fff,1446px 776px #fff,1849px 1695px #fff,372px 745px #fff,599px 2364px #fff,1502px 1072px #fff,2093px 1916px #fff,1214px 1261px #fff,1155px 585px #fff,1342px 257px #fff,2166px 1939px #fff,1517px 757px #fff,2430px 479px #fff,1208px 987px #fff,429px 1356px #fff,1859px 1079px #fff,1405px 1197px #fff,840px 460px #fff,754px 1835px #fff,1985px 2299px #fff,661px 842px #fff,193px 1599px #fff,1481px 1332px #fff,1238px 642px #fff,1028px 2132px #fff,621px 343px #fff,2200px 1170px #fff,1086px 1335px #fff,651px 1768px #fff,940px 13px #fff,1549px 587px #fff,902px 1514px #fff,275px 1208px #fff,797px 410px #fff,858px 277px #fff,914px 2502px #fff,1507px 1316px #fff,39px 2150px #fff,829px 450px #fff,587px 590px #fff,1562px 2081px #fff,622px 2278px #fff,1444px 2480px #fff,2448px 491px #fff,1681px 1378px #fff,282px 1460px #fff,405px 1305px #fff,2452px 1795px #fff,975px 2431px #fff,1946px 2131px #fff,547px 1704px #fff,2555px 804px #fff,2286px 291px #fff,1478px 2442px #fff,1536px 628px #fff,1735px 985px #fff,2226px 703px #fff,722px 475px #fff,148px 624px #fff,689px 2156px #fff,712px 1494px #fff,1822px 1482px #fff,893px 1868px #fff,682px 1854px #fff,1074px 272px #fff,53px 644px #fff,82px 1913px #fff,264px 1398px #fff,2110px 369px #fff,1377px 188px #fff,1113px 1349px #fff,1821px 1713px #fff,867px 1674px #fff,482px 15px #fff,1345px 1403px #fff,848px 1802px #fff,2334px 1578px #fff,1245px 179px #fff,583px 708px #fff,1084px 1156px #fff,2168px 1453px #fff,792px 32px #fff,779px 542px #fff,2052px 935px #fff,2184px 1025px #fff,545px 465px #fff,2140px 2176px #fff,1621px 670px #fff,2370px 212px #fff,578px 259px #fff,496px 1441px #fff,1007px 2311px #fff,2394px 687px #fff,470px 1710px #fff,1415px 2362px #fff,2227px 1006px #fff,29px 557px #fff,100px 2497px #fff,393px 339px #fff,405px 795px #fff,212px 1303px #fff,1215px 458px #fff,1032px 550px #fff,2228px 189px #fff,260px 455px #fff,2393px 2200px #fff,2290px 689px #fff,1665px 1118px #fff,2031px 64px #fff,630px 1537px #fff,137px 1335px #fff,2500px 2228px #fff,1431px 1362px #fff,1017px 1652px #fff,867px 1005px #fff,1845px 248px #fff,670px 208px #fff,47px 2302px #fff,2435px 2184px #fff,1711px 1999px #fff,401px 292px #fff,1386px 370px #fff,2452px 1314px #fff,1679px 618px #fff,537px 743px #fff,1946px 1588px #fff,40px 1141px #fff,1696px 1314px #fff,1717px 797px #fff,1443px 1885px #fff,1274px 1081px #fff,460px 839px #fff,177px 848px #fff,2308px 499px #fff,338px 918px #fff,592px 1870px #fff,818px 1231px #fff,2178px 1413px #fff,1018px 1828px #fff,463px 540px #fff,2111px 2355px #fff,2084px 1459px #fff,1323px 504px #fff,2210px 1528px #fff,723px 1785px #fff,1266px 132px #fff,1005px 1796px #fff,2275px 1404px #fff,2293px 993px #fff,584px 1723px #fff,1969px 1764px #fff,870px 2038px #fff,1662px 1190px #fff,993px 2459px #fff,1509px 905px #fff,6px 2549px #fff,287px 58px #fff,925px 1849px #fff,1978px 2292px #fff,2102px 894px #fff,839px 486px #fff,1537px 810px #fff,1630px 1795px #fff,551px 1577px #fff,2445px 267px #fff,11px 2213px #fff,1715px 1549px #fff,89px 2089px #fff,1576px 52px #fff,1990px 2103px #fff,1291px 683px #fff,1441px 1610px #fff,396px 72px #fff,464px 467px #fff,738px 916px #fff,2441px 1471px #fff,1763px 2124px #fff,4px 342px #fff,1673px 714px #fff,1327px 197px #fff,528px 1581px #fff,665px 1748px #fff,1586px 532px #fff,1901px 2102px #fff,1574px 668px #fff,1354px 1064px #fff,1173px 80px #fff,2056px 480px #fff,1858px 157px #fff,652px 1518px #fff,169px 2340px #fff,96px 1018px #fff,811px 1794px #fff,2395px 538px #fff,2325px 1171px #fff,479px 375px #fff,2339px 805px #fff,2223px 2293px #fff,181px 245px #fff,1768px 2079px #fff,333px 1132px #fff,296px 1813px #fff,1477px 1253px #fff,2041px 834px #fff,2262px 1254px #fff,1461px 1755px #fff,2547px 286px #fff,465px 1800px #fff,113px 2439px #fff,2114px 1834px #fff,1923px 1542px #fff,1618px 2046px #fff,1582px 145px #fff,2410px 72px #fff,155px 2399px #fff,2033px 1329px #fff,2342px 1222px #fff,1555px 1274px #fff,1521px 1875px #fff,2151px 987px #fff,2182px 2199px #fff,1296px 1804px #fff,1393px 622px #fff,2116px 500px #fff,2442px 2391px #fff,2072px 639px #fff,1234px 725px #fff,203px 2399px #fff;height:1px;width:1px}@-webkit-keyframes animParticle{from{transform:translateY(0)}to{transform:translateY(-2560px)}}@keyframes  animParticle{from{transform:translateY(0)}to{transform:translateY(-2560px)}}}.fa,.fab,.fal,.far,.fas{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.fa-lg{font-size:1.33333em;line-height:.75em;vertical-align:-.0667em}.fa-xs{font-size:.75em}.fa-sm{font-size:.875em}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.fa-ul>li{position:relative}.fa-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.fa-border{border:.08em solid #eee;border-radius:.1em;padding:.2em .25em .15em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left{margin-right:.3em}.fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right{margin-left:.3em}.fa-spin{-webkit-animation:2s linear infinite fa-spin;animation:2s linear infinite fa-spin}.fa-pulse{-webkit-animation:1s steps(8) infinite fa-spin;animation:1s steps(8) infinite fa-spin}@-webkit-keyframes fa-spin{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes  fa-spin{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}.fa-rotate-90{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";transform:rotate(90deg)}.fa-rotate-180{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";transform:rotate(180deg)}.fa-rotate-270{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";transform:rotate(270deg)}.fa-flip-horizontal{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";transform:scale(-1,1)}.fa-flip-vertical{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";transform:scale(1,-1)}.fa-flip-horizontal.fa-flip-vertical{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";transform:scale(-1,-1)}:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90{-webkit-filter:none;filter:none}.fa-stack{display:inline-block;height:2em;line-height:2em;position:relative;vertical-align:middle;width:2.5em}.fa-stack-1x,.fa-stack-2x{left:0;position:absolute;text-align:center;width:100%}.fa-stack-1x{line-height:inherit}.fa-stack-2x{font-size:2em}.fa-inverse{color:#fff}.fa-500px:before{content:"\f26e"}.fa-facebook-f:before{content:"\f39e"}.fa-twitter:before{content:"\f099"}.fa-linkedin-in:before{content:"\f0e1"}.fa-instagram:before{content:"\f16d"}.fa-youtube:before{content:"\f167"}.fa-dribbble:before{content:"\f17d"}.fa-arrow-left:before{content:"\f060"}.fa-arrow-right:before{content:"\f061"}.fa-bars:before{content:"\f0c9"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-chevron-up:before{content:"\f077"}.fa-chevron-down:before{content:"\f078"}.fa-check:before{content:"\f00c"}.fa-times:before{content:"\f00d"}.fa-paperclip:before{content:"\f0c6"}.fa-cogs:before{content:"\f085"}.fa-life-ring:before{content:"\f1cd"}.fa-rocket:before{content:"\f135"}.fa-magic:before{content:"\f0d0"}.fa-lightbulb:before{content:"\f0eb"}.fa-puzzle-piece:before{content:"\f12e"}.fa-book:before{content:"\f02d"}.fa-list-alt:before{content:"\f022"}.fa-language:before{content:"\f1ab"}.fa-skype:before{content:"\f17e"}.fa-home:before{content:"\f015"}.fa-calendar:before{content:"\f133"}.fa-sitemap:before{content:"\f0e8"}.fa-users:before{content:"\f0c0"}.fa-paper-plane:before{content:"\f1d8"}.fa-edit:before{content:"\f044"}.fa-map-marker:before{content:"\f041"}.fa-phone:before{content:"\f095"}.fa-globe:before{content:"\f0ac"}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}@font-face{font-family:'font awesome 5 brands';font-style:normal;font-weight:400;font-display:swap;src:url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-brands-400.eot);src:url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-brands-400.eot?#iefix) format("embedded-opentype"),url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-brands-400.woff2) format("woff2"),url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-brands-400.woff) format("woff"),url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-brands-400.ttf) format("truetype"),url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-brands-400.svg#fontawesome) format("svg")}.fab{font-family:'font awesome 5 brands'}@font-face{font-family:'font awesome 5 free';font-style:normal;font-weight:400;font-display:swap;src:url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-regular-400.eot);src:url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"),url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-regular-400.woff2) format("woff2"),url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-regular-400.woff) format("woff"),url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-regular-400.ttf) format("truetype"),url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-regular-400.svg#fontawesome) format("svg")}.far{font-family:'font awesome 5 free';font-weight:400}@font-face{font-family:'font awesome 5 free';font-style:normal;font-weight:900;font-display:swap;src:url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-solid-900.eot);src:url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"),url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-solid-900.woff2) format("woff2"),url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-solid-900.woff) format("woff"),url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-solid-900.ttf) format("truetype"),url(https://use.fontawesome.com/releases/v5.5.0/webfonts/fa-solid-900.svg#fontawesome) format("svg")}.fa,.fas{font-family:'font awesome 5 free';font-weight:900}@font-face{font-family:Poppins;font-style:italic;font-weight:300;font-display:swap;src:local("Poppins Light Italic"),local("Poppins-LightItalic"),url(https://fonts.gstatic.com/s/poppins/v5/pxiDyp8kv8JHgFVrJJLm21lVF9eO.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:Poppins;font-style:italic;font-weight:400;font-display:swap;src:local("Poppins Italic"),local("Poppins-Italic"),url(https://fonts.gstatic.com/s/poppins/v5/pxiGyp8kv8JHgFVrJJLucHtA.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:Poppins;font-style:italic;font-weight:600;font-display:swap;src:local("Poppins SemiBold Italic"),local("Poppins-SemiBoldItalic"),url(https://fonts.gstatic.com/s/poppins/v5/pxiDyp8kv8JHgFVrJJLmr19VF9eO.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:Poppins;font-style:italic;font-weight:700;font-display:swap;src:local("Poppins Bold Italic"),local("Poppins-BoldItalic"),url(https://fonts.gstatic.com/s/poppins/v5/pxiDyp8kv8JHgFVrJJLmy15VF9eO.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:Poppins;font-style:normal;font-display:swap;font-weight:300;src:local("Poppins Light"),local("Poppins-Light"),url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:Poppins;font-style:normal;font-display:swap;font-weight:400;src:local("Poppins Regular"),local("Poppins-Regular"),url(https://fonts.gstatic.com/s/poppins/v5/pxiEyp8kv8JHgFVrJJfecg.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:Poppins;font-style:normal;font-display:swap;font-weight:600;src:local("Poppins SemiBold"),local("Poppins-SemiBold"),url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:Poppins;font-style:normal;font-display:swap;font-weight:700;src:local("Poppins Bold"),local("Poppins-Bold"),url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}.headline-1{font-size:56px;font-weight:600;line-height:61px;color:#282d3b}.headline-2{font-size:37px;font-weight:600;line-height:48px;color:#282d3b}.headline-3{font-size:27px;font-weight:600;line-height:36px;color:#282d3b}.headline-4{font-size:20px;font-weight:600;line-height:29px;color:#282d3b}.headline-5{font-size:16px;font-weight:600;line-height:26px;color:#282d3b}.body-1{font-size:16px;line-height:24px;font-weight:400;color:#383d4c}.body-2{font-size:18px;line-height:26px;font-weight:400;color:#383d4c}.caption-1{font-size:16px;line-height:25px;font-weight:400;color:#b2b4bc}.link-1{font-size:inherit;line-height:inherit;font-weight:inherit;color:#4ea7ff}.link-1:hover{color:#1e85d9}.link-2{font-size:12px;height:auto;font-weight:600;letter-spacing:.4px;text-transform:uppercase}*,:after,:before{box-sizing:border-box;font-family:proxima nova regular,sans-serif;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;outline:0;-webkit-tap-highlight-color:transparent}html.menu-open,html.modal-open{overflow:hidden!important;width:100%}body{margin:0;font-size:14px;background-color:#fff;overflow-x:hidden}body.menu-open,body.modal-open{overflow:hidden!important;width:100%}body.faded-back{background-color:#999}@media  screen and (max-device-width:520px){body{-webkit-text-size-adjust:none}}h1,h2,h3,h4,h5,h6{font-weight:400}img{width:100%}div.jx-image img{width:initial;height:100%;z-index:5;position:absolute;max-height:none;max-width:none;max-height:initial;max-width:initial}a.jx-knightlab{display:none!important}div.jx-control{background-color:#f5a623!important;width:2px!important}div.jx-controller{width:45px!important;height:45px!important;background-color:#f5a623!important;margin-left:-20.5px!important;border-radius:50%;box-shadow:0 2px 7px 0 rgba(29,32,42,.2)}div.jx-arrow{z-index:6}div.jx-arrow.jx-left{left:6px!important;border-width:6px 6px 6px 0!important;border-style:solid;border-color:transparent #fff transparent transparent}div.jx-arrow.jx-right{right:6px!important;border-width:6px 0 6px 6px!important;border-style:solid;border-color:transparent transparent transparent #fff}div.jx-arrow.jx-left:after,div.jx-arrow.jx-right:after{content:'';position:absolute;margin:auto;top:0;bottom:0;width:0;height:0}div.jx-arrow.jx-left:after{left:3px;border-style:solid;border-width:6px 6px 6px 0;border-color:transparent #f5a623 transparent transparent}div.jx-arrow.jx-right:after{right:3px;border-style:solid;border-width:6px 0 6px 6px;border-color:transparent transparent transparent #f5a623}a{text-decoration:none}button{border:0;outline:0;cursor:pointer;background-color:#79d1e0;font-size:14px;font-weight:600;color:#fff;letter-spacing:.02em;text-transform:uppercase}textarea.mat-input-element{resize:none!important}.fa:before,.fab:before,.fal:before,.far:before,.fas:before{font:inherit!important}pagination li{list-style-type:none}pagination .pagination{display:flex}pagination .page-link{margin-right:30px;font-size:16px;font-weight:600;color:#607d8b}pagination .active{height:34px;width:34px;margin:-7px 20px 0 -13px;border:2px solid rgba(96,125,139,.2);border-radius:34px;line-height:33px;text-align:center}pagination .active .page-link{display:contents;color:#f5a623}.quote-request-modal quote-request-form .title{padding-right:75px}.blog-width-limiter,.global-width-limiter{padding-left:58px;padding-right:58px;max-width:1256px;margin:0 auto;width:100%}[hidden]{display:none!important}.disabled-button{pointer-events:none;opacity:.5}.relative-block{position:relative}.btn{position:relative;border:0;outline:0;background-color:#ff9f00;color:#fff;white-space:nowrap;font-weight:600;font-size:14px;text-transform:uppercase;cursor:pointer;letter-spacing:.04em;z-index:0;transition:all .2s;border-radius:3px}.btn:after{width:100%;height:0;bottom:0;left:0;background-color:#e68900;content:'';position:absolute;z-index:-1;transition:all .2s;border-radius:3px}.btn:hover:after{color:#fff;height:100%}@media  screen and (max-width:520px){.btn:not(.btn--preserve-width){width:100%!important}}.line{margin-bottom:15px;height:4px;width:60px;background-color:#ff9f00}a:link,span.blog-link{color:#51a9ff;cursor:pointer}a:visited{color:#438cd4}a:hover,span.blog-link:hover{color:#9bd4ff}a:active{color:#51a9ff}.scrollable{overflow-y:auto;margin:0 -50px;padding:10px 50px 52px}.scrollable::-webkit-scrollbar{display:none}@media(max-width:1199px){.global-width-limiter{padding-left:58px;padding-right:58px}}@media(max-width:520px){.global-width-limiter{padding-left:26px;padding-right:26px}}@media  only screen and (max-width:900px){.blog-width-limiter{padding-left:54px;padding-right:54px}}@media  only screen and (max-width:520px){.blog-width-limiter{padding-left:26px;padding-right:26px}div.jx-controller{width:25px!important;height:25px!important;background-color:#f5a623!important;margin-left:-20.5px!important;border-radius:50%;box-shadow:0 2px 7px 0 rgba(29,32,42,.2);left:28px}div.jx-arrow.jx-left{left:12px!important;border-width:4px 4px 4px 0!important}div.jx-arrow.jx-left:after{left:1px;border-width:4px 4px 4px 0}div.jx-arrow.jx-right{right:12px!important;border-width:4px 0 4px 4px!important}div.jx-arrow.jx-right:after{right:1px;border-width:4px 0 4px 4px}}.section-main-title{font-size:37px;font-family:proxima nova bold,Poppins,sans-serif;line-height:48px;text-align:center;width:100%}.section-main-subtitle{width:100%;font-size:18px;line-height:26px;text-align:center}h1.inheriting,h2.inheriting,h3.inheriting{font-family:proxima nova bold;display:inherit;margin:0;font-size:inherit;font-weight:inherit}.progressive-image__not-ready{-webkit-filter:blur(10px);filter:blur(10px)}.progressive-image__ready{transition:-webkit-filter .3s ease-in;transition:filter .3s ease-in;transition:filter .3s ease-in,-webkit-filter .3s ease-in;-webkit-filter:blur(0);filter:blur(0)}.btn.quote-request-button{padding:15px 35px;margin-top:30px;width:-webkit-min-content;width:-moz-min-content;width:min-content;height:57px;border:3px solid #ff9f00;border-radius:3px;background:0 0;font-size:16px;font-family:proxima nova bold,Poppins,sans-serif}.btn.quote-request-button:after{background-color:#ff9f00}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem;opacity:0;pointer-events:none;transition:opacity .5s}.open>.dropdown-menu{opacity:1;pointer-events:all}div.juxtapose{width:100%}div.jx-slider{width:100%;height:100%;position:relative;overflow:hidden;cursor:pointer}div.jx-handle{position:absolute;height:100%;width:40px;cursor:col-resize;z-index:15;margin-left:-20px}.vertical div.jx-handle{height:40px;width:100%;cursor:row-resize;margin-top:-20px;margin-left:0}div.jx-control{height:100%;margin-right:auto;margin-left:auto}.vertical div.jx-control{height:3px;width:100%;background-color:#fff;position:relative;top:50%;transform:translateY(-50%)}div.jx-controller{position:absolute;margin:auto auto auto -3px;top:0;bottom:0}.vertical div.jx-controller{height:9px;width:100px;margin-left:auto;margin-right:auto;top:-3px;position:relative}div.jx-arrow{position:absolute;margin:auto;top:0;bottom:0;width:0;height:0;transition:all .2s ease}.vertical div.jx-arrow{position:absolute;margin:0 auto;left:0;right:0;width:0;height:0;transition:all .2s ease}.vertical div.jx-arrow.jx-left{left:0;top:2px;border-style:solid;border-width:0 8px 8px;border-color:transparent transparent #fff}.vertical div.jx-arrow.jx-right{right:0;top:initial;bottom:2px;border-style:solid;border-width:8px 8px 0;border-color:#fff transparent transparent}div.jx-handle:active div.jx-arrow.jx-left,div.jx-handle:hover div.jx-arrow.jx-left{left:-1px}div.jx-handle:active div.jx-arrow.jx-right,div.jx-handle:hover div.jx-arrow.jx-right{right:-1px}.vertical div.jx-handle:active div.jx-arrow.jx-left,.vertical div.jx-handle:hover div.jx-arrow.jx-left{left:0;top:0}.vertical div.jx-handle:active div.jx-arrow.jx-right,.vertical div.jx-handle:hover div.jx-arrow.jx-right{right:0;bottom:0}div.jx-image{position:absolute;height:100%;display:inline-block;top:0;overflow:hidden;-webkit-backface-visibility:hidden}.vertical div.jx-image{width:100%;left:0;top:initial}.vertical div.jx-image img{height:initial;width:100%}div.jx-image.jx-left{left:0;background-position:left}div.jx-image.jx-left img{left:0}div.jx-image.jx-right{right:0;background-position:right}div.jx-image.jx-right img{right:0;bottom:0}.veritcal div.jx-image.jx-left{top:0;background-position:top}.veritcal div.jx-image.jx-left img{top:0}.vertical div.jx-image.jx-right{bottom:0;background-position:bottom}.veritcal div.jx-image.jx-right img{bottom:0}div.jx-image div.jx-label{font-size:1em;padding:.25em .75em;position:relative;display:inline-block;top:0;background-color:rgba(0,0,0,.7);color:#fff;z-index:10;white-space:nowrap;line-height:18px;vertical-align:middle}div.jx-image.jx-left div.jx-label{float:left;left:0}div.jx-image.jx-right div.jx-label{float:right;right:0}.vertical div.jx-image div.jx-label{display:table;position:absolute}.vertical div.jx-image.jx-right div.jx-label{left:0;bottom:0;top:initial}div.jx-credit{line-height:1.1;font-size:.75em}div.jx-credit em{font-weight:700;font-style:normal}div.jx-image.transition{transition:width .5s ease}div.jx-handle.transition{transition:left .5s ease}.vertical div.jx-image.transition{transition:height .5s ease}.vertical div.jx-handle.transition{transition:top .5s ease}a.jx-knightlab{background-color:rgba(0,0,0,.25);bottom:0;height:14px;line-height:14px;padding:1px 4px 1px 5px;position:absolute;right:0;text-decoration:none;z-index:10}a.jx-knightlab div.knightlab-logo{display:inline-block;vertical-align:middle;height:8px;width:8px;background-color:#c34528;transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);top:-1.25px;position:relative;cursor:pointer}a.jx-knightlab:hover{background-color:rgba(0,0,0,.35)}a.jx-knightlab:hover div.knightlab-logo{background-color:#ce4d28}a.jx-knightlab span.juxtapose-name{display:table-cell;margin:0;padding:0 0 0 .375em;font-weight:300;color:#fff;font-size:10px;vertical-align:middle;line-height:normal}a.jx-knightlab:focus,div.jx-controller:focus,div.jx-image.jx-left div.jx-label:focus,div.jx-image.jx-right div.jx-label:focus{background:#eae34a;color:#000}a.jx-knightlab:focus span.juxtapose-name{color:#000;border:none}.slick-slider{position:relative;display:block;box-sizing:border-box;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{position:relative;overflow:hidden;display:block;margin:0;padding:0}.slick-list:focus{outline:0}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-list,.slick-slider .slick-track{transform:translate3d(0,0,0)}.slick-track{position:relative;left:0;top:0;display:block;margin-left:auto;margin-right:auto}.slick-track:after,.slick-track:before{content:"";display:table}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{float:left;height:100%;min-height:1px;display:none}[dir=rtl] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-loading .slick-slide{visibility:hidden}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}.slick-loading .slick-list{background:url(ajax-loader.c5cd7f5300576ab4c882.gif) center center no-repeat #fff}.slick-next,.slick-prev{position:absolute;display:block;height:20px;width:20px;line-height:0;font-size:0;cursor:pointer;background:0 0;color:transparent;top:50%;transform:translate(0,-50%);padding:0;border:none;outline:0}.slick-next:focus,.slick-next:hover,.slick-prev:focus,.slick-prev:hover{outline:0;background:0 0;color:transparent}.slick-next:focus:before,.slick-next:hover:before,.slick-prev:focus:before,.slick-prev:hover:before{opacity:1}.slick-next.slick-disabled:before,.slick-prev.slick-disabled:before{opacity:.25}.slick-next:before,.slick-prev:before{font-size:20px;line-height:1;color:#fff;opacity:.75;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.slick-prev{left:-25px}[dir=rtl] .slick-prev{left:auto;right:-25px}.slick-prev:before{content:"←"}[dir=rtl] .slick-prev:before{content:"→"}.slick-next{right:-25px}[dir=rtl] .slick-next{left:-25px;right:auto}.slick-next:before{content:"→"}[dir=rtl] .slick-next:before{content:"←"}.slick-dotted.slick-slider{margin-bottom:30px}.slick-dots{position:absolute;bottom:-25px;list-style:none;display:block;text-align:center;padding:0;margin:0;width:100%}.slick-dots li{position:relative;display:inline-block;height:20px;width:20px;margin:0 5px;padding:0;cursor:pointer}.slick-dots li button{border:0;background:0 0;display:block;height:20px;width:20px;outline:0;line-height:0;font-size:0;color:transparent;padding:5px;cursor:pointer}.slick-dots li button:focus,.slick-dots li button:hover{outline:0}.slick-dots li button:focus:before,.slick-dots li button:hover:before{opacity:1}.slick-dots li button:before{position:absolute;top:0;left:0;content:"•";width:20px;height:20px;font-size:6px;line-height:20px;text-align:center;color:#000;opacity:.25;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.slick-dots li.slick-active button:before{color:#000;opacity:.75}
    </script> -->
</body>

</html>