<!--Start Banner Section--->
<section class="bannersec">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- Indicators -->
   
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php
       $count=1; 
      ?>
      <?php if($slider): ?>
       <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item <?php if($count==1): ?> active <?php endif; ?>">
              <ul class="itemUL">
                        <li class="itemcontent">
                          <div class="itemouterdiv">
                            <div class="itemcontentdiv">
                              <h2 class="bighead"><?php echo e($val->title); ?><span><?php echo e($val->subtitle); ?></span></h2>
                              <p><?php echo e($val->description); ?></p>
                            </div>
                          </div>
                        </li>
                        <li class="itemimage">
                          <?php if($val->type=='image'): ?>
                              <div class="imgdiv_slider" style=" background-image: url('<?php echo e(URL('/')); ?>/public/slider/<?php echo e($val->path); ?>');">
                              </div>
                           <?php else: ?>
                            <video autoplay muted loop id="myVideo">
                          <source src="<?php echo e(URL('/')); ?>/public/slider/<?php echo e($val->path); ?>" type="video/mp4">
                          Your browser does not support HTML5 video.
                       </video>
                           <?php endif; ?>
                            
                        </li>
              </ul>
          </div>
        <?php
        $count++; 
        ?>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
 
    </div>

    <!-- Left and right controls -->
  </div>
  <div class="carsolarrow"> 
    <a class="carousel-control arrowleft" role="button" href="#myCarousel" 
    data-slide="prev"><img src="<?php echo e(URL('assets/frontend')); ?>/img/arrowleft.png"></a>
    <a class="carousel-control arrowright" role="button" href="#myCarousel" 
    data-slide="next"><img src="<?php echo e(URL('assets/frontend')); ?>/img/arrowright.png"></a>   
  </div>
</section>
<!--End Banner Section--->