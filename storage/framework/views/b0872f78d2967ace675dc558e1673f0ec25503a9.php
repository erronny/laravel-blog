<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
</head>


    <body>
        <?php echo $__env->make('includes.side_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
        <!-- Loader -->
        <div class="all-content-wrapper">
        <!-- Navigation Bar-->
        <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- End Navigation Bar-->
          <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        

<script type="text/javascript">
    const url='<?php echo URL('/'); ?>';
</script>
    <!-- jquery
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/vendor/jquery-1.11.3.min.js')); ?>"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/wow.min.js')); ?>"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/jquery-price-slider.js')); ?>"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/jquery.meanmenu.js')); ?>"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/jquery.sticky.js')); ?>"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/jquery.scrollUp.min.js')); ?>"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scrollbar/mCustomScrollbar-active.js')); ?>"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/metisMenu/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/metisMenu/metisMenu-active.js')); ?>"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/morrisjs/raphael-min.js')); ?>"></script>
     <!-- calendar JS
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/calendar/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/calendar/fullcalendar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/calendar/fullcalendar-active.js')); ?>"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
     <?php if(Auth::user()->role_id == Config::get('constants.VENDOR') || Auth::user()->role_id == Config::get('constants.REPRASNTATIVE')): ?>
     <script src="<?php echo e(asset('assets/js/morrisjs/morris.js')); ?>"></script>
     <script src="<?php echo e(asset('assets/js/morrisjs/morris-active.js')); ?>"></script>
    <!-- morrisjs JS
        ============================================ -->
     <script src="<?php echo e(asset('assets/js/sparkline/jquery.sparkline.min.js')); ?>"></script>
     <script src="<?php echo e(asset('assets/js/sparkline/jquery.charts-sparkline.js')); ?>"></script>
  
     <?php endif; ?>
    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('extrajs'); ?>
    </body>

</html>