<!DOCTYPE html>
<html>
   <head profile="http://www.w3.org/2005/10/profile">
     <?php echo $__env->make('includes.adminhead', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
     <title> <?php echo $__env->yieldContent('title'); ?></title>
     <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">
    <meta name="author" content="<?php echo $__env->yieldContent('author'); ?>">
    <style>
.footer {
  position: fixed;
  right: 20;
  bottom: 0;
  width: 80%;
  background-color: #B6B8BD;
  color: white;
  text-align: center;
}
</style>
   </head>
   
   <body class="common home">
    
      <div class="layout">
         
        <div class="dashboard-main-wrapper">
         
         <?php echo $__env->make('includes.adminheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         <?php echo $__env->make('includes.adminsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
         
          
        
        <div class="dashboard-wrapper">
           <?php echo $__env->yieldContent('content'); ?>
         <?php echo $__env->make('includes.adminfooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
      </div>
      </div>
      
     <?php echo $__env->yieldContent('extrajs'); ?>
   </body>
</html>