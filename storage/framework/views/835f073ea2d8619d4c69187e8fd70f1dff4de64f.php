<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <title> 404 Error</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
      .cs-page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .cs-page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .cs-page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .cs-page-loading.active > .cs-page-loading-inner {
        opacity: 1;
      }
      .cs-page-loading-inner > span {
        display: block;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #737491;
      }
      .cs-page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #766df4;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes  spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      
    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.cs-page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 2000);
        };
      })();
      
    </script>
    
    
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="<?php echo e(asset ('assets/404/css/theme.min.css')); ?>">
    
    
  </head>
  <!-- Body-->
  <body>
   
    <!-- Page loading spinner-->
    <div class="cs-page-loading active">
      <div class="cs-page-loading-inner">
        <div class="cs-page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <main class="cs-page-wrapper d-flex flex-column">
      <!-- Sign In Modal-->
     
     
      <!-- Page content-->
      <div class="container d-flex flex-column justify-content-center pt-5 mt-n6" style="flex: 1 0 auto;">
        <div class="pt-7 pb-5">
          <div class="text-center mb-2 pb-4">
            <h1 class="mb-grid-gutter"><img class="d-inline-block" src="<?php echo e(asset ('assets/404/img/pages/404/404-illustration.svg')); ?>" alt="Error 404"/><span class="sr-only">Error 404</span><span class="d-block pt-3 font-size-sm font-weight-semibold text-danger">Error code: 404</span>
            </h1>
            <h2>Page not found!</h2>
            <p class="pb-2">It seems we can’t find the page you are looking for.</p><a class="btn btn-translucent-primary mr-3" href="<?php echo e(('/')); ?>">Go to homepage</a><span>Or try</span>
          </div>
          <div class="input-group-overlay mx-auto" style="max-width: 390px;">
            <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="fe-search"></i></span></div>
            <input class="form-control prepended-form-control" type="text" placeholder="Search">
          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    <footer class="cs-footer py-4">
      <div class="container d-md-flex align-items-center justify-content-between py-2 text-center text-md-left">
        <ul class="list-inline font-size-sm mb-3 mb-md-0 order-md-2">
          <li class="list-inline-item my-1"><a class="nav-link-style" href="#">Support</a></li>
          <li class="list-inline-item my-1"><a class="nav-link-style" href="#">Contacts</a></li>
          <li class="list-inline-item my-1"><a class="nav-link-style" href="#">Terms &amp; Conditions</a></li>
        </ul>
        <p class="font-size-sm mb-0 mr-3 order-md-1"><span class="text-muted mr-1">© All rights reserved. Made by</span><a class="nav-link-style font-weight-normal" href="https://createx.studio/" target="_blank" rel="noopener">LakeAcr</a></p>
      </div>
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon fe-arrow-up">   </i></a>
</body>
</html>

