<!DOCTYPE html>
<html>
   <head profile="">
     <?php echo $__env->make('ui.includes.uihead', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
     <title> <?php echo $__env->yieldContent('title'); ?></title>
     <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon" />

     <meta name="tag" content="<?php echo $__env->yieldContent('meta_tag'); ?>">
     <meta name="description" content="<?php echo $__env->yieldContent('meta_description'); ?>">
    <meta name="Keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">
    <meta name="author" content="<?php echo $__env->yieldContent('author'); ?>">
   </head>
   
   <body class="common home">
      <div id="wrapper" class="home_two">
         
         <?php echo $__env->make('ui.includes.uiheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         <!-- Side Navigation -->
<nav class="s-sidebar s-bar-block s-card s-animate-left s-center" style="display: none; width: 100%; font-size: 40px; padding-top: 0;" id="mySidebar">
  <!-- <h1 class="s-xxxlarge s-text-theme">THEDSOLUTION.COM</h1> -->
  <button class="s-bar-item s-button" onclick="s_close()">Close <i class="fa fa-remove"></i></button>
  <a hreff="<?php echo e(URL('/')); ?>" class="s-bar-item s-button">Home</a>
  <a hreff="<?php echo e(URL('page/about')); ?>" class="s-bar-item s-button">About</a>
  <a hreff="<?php echo e(URL('page/service')); ?>" class="s-bar-item s-button">Services</a>
  <a hreff="<?php echo e(URL('post')); ?>" class="s-bar-item s-button">Blog</a>
  <a hreff="<?php echo e(URL('contact')); ?>" class="s-bar-item s-button">Contact</a>
</nav>
         
         <?php echo $__env->yieldContent('content'); ?>
         
         <?php echo $__env->make('ui.includes.uifooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         
          
        
      </div>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function s_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

function s_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" s-theme-dark", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " s-theme-dark";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("s-show") == -1) {
    x.className += " s-show";
  } else { 
    x.className = x.className.replace(" s-show", "");
  }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>

      
     <?php echo $__env->yieldContent('extrajs'); ?>
   </body>
</html>