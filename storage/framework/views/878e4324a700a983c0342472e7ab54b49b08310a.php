<!DOCTYPE html>
<html>
   <head profile="http://www.w3.org/2005/10/profile">
     <?php echo $__env->make('includes.uihead', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
     <title> <?php echo $__env->yieldContent('title'); ?></title>
     <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">
    <meta name="author" content="<?php echo $__env->yieldContent('author'); ?>">
   </head>
   
   <body class="common home">
      <div class="layout">
         
         <?php echo $__env->make('includes.uiheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         
         <?php echo $__env->yieldContent('content'); ?>
         <?php echo $__env->make('includes.social', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         <?php echo $__env->make('includes.uifooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         
          
        
      </div>
      
     <?php echo $__env->yieldContent('extrajs'); ?>
   </body>
</html>