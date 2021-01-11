<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>SMS</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesdesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App Icons -->
    <link rel="shortcut icon" href="old/assets/images/favicon.ico">
    <!-- App css -->
    <link href="<?php echo e(asset('assets/old/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/old/css/icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/old/css/style.css')); ?>" rel="stylesheet">
</head>
<body>
   

        <?php echo $__env->yieldContent('content'); ?>
   
    <!-- Scripts -->
    <!-- jQuery  -->
<script src="<?php echo e(asset('assets/old/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/modernizr.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/waves.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/jquery.slimscroll.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/jquery.nicescroll.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/jquery.scrollTo.min.js')); ?>"></script>
<!-- App js -->
<script src="<?php echo e(asset('assets/old/js/app.js')); ?>"></script>
    
</body>
</html>
