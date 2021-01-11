<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
   <?php echo $__env->make('includes.fronthead', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
</head>
<body>
    <!-- Page loader start -->
    <div class="page-loader"></div>
    <!-- Page loader end -->
    <!-- Header start -->
    <?php echo $__env->make('includes.frontheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('includes.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Header end -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Footer start -->
    <?php echo $__env->make('includes.frontfooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('extrajs'); ?>
</body>

</html>




