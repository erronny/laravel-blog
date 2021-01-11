
<?php $__env->startSection('title', 'Organization Signing | Digital In-Corporation'); ?>
<?php $__env->startSection('description', ''); ?>
<?php $__env->startSection('keywords', 'home | Digital In-Corporation'); ?>
<?php $__env->startSection('author', 'Digital In-Corporation'); ?>

<?php $__env->startSection('content'); ?>

<?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
   
   
    <!-- WELCOME
    ================================================== -->
    <section class="py-8 py-md-11 border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">

            <!-- Preheader -->
            <h6 class="text-uppercase text-primary" data-aos="fade-up">
              <?php echo e($service->d); ?>

            </h6>

            <!-- Headin -->
            <h1 class="display-1 font-weight-bold" data-aos="fade-up" data-aos-delay="50">
              <?php echo e($service->d1); ?>

            </h1>

            <!-- Text -->
            <p class="lead text-muted mb-6" data-aos="fade-up" data-aos-delay="100">
              <?php echo e($service->d2); ?>

            </p>

            

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12" data-aos="fade-up" data-aos-delay="200">

            <!-- Video -->
            <div class="embed-responsive embed-responsive-16by9">
              <video class="embed-responsive-item rounded-lg bg-light shadow-lg" src="<?php echo e(asset ('assets/ui/video/video-1.mp4')); ?>" autoplay loop muted>
                Sorry, your browser doesn't support embedded videos,
                but don't worry, you can <a href="<?php echo e(asset ('assets/ui/video/video-1.mp4')); ?>">download it</a>
                and watch it with your favorite video player!
              </video>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- STEPS
    ================================================== -->
    <div class="position-relative mt-n12 mt-md-n15">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-black">
        <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M720 125L2160 0h720v250H0V125h720z" fill="currentColor"/></svg>
      </div>
    </div>

    <!-- STEPS
    ================================================== -->
    <div class="section bg-black pt-12 pt-md-15 pb-8 pb-md-11">
      <div class="container">
        <div class="row justify-content-between align-items-center mb-5">
          <div class="col-12 col-md-4 order-md-2 text-center">

            <!-- Image -->
            <img class="img-fluid w-75 w-md-100 mb-6 mb-md-0" src="<?php echo e(asset ('assets/ui/img/illustrations/illustration-1-dark.png')); ?>" alt="...">

          </div>
          <div class="col-12 col-md-7 order-md-1">

            <!-- Heading -->
            <h2 class="text-white" style="max-width: 450px;">
              <?php echo e($service->d5); ?>

            </h2>

            <!-- Text -->
            <div class="lead text-muted-80 mb-0">
              <?php echo e($service->d6); ?>

            </div>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="row">
              <div class="col-auto col-md-12">

                <!-- Step -->
                <div class="row no-gutters align-items-center mb-md-5">
                  <div class="col-auto">

                    <!-- Number -->
                    <a class="btn btn-sm btn-rounded-circle btn-gray-400-10 disabled opacity-1" href="#!">
                      <span>1</span>
                    </a>

                  </div>
                  <div class="col">

                    <!-- Divider -->
                    <hr class="d-none d-md-block border-gray-900-50 mr-n7">

                  </div>
                </div> <!-- / .row -->

              </div>
              <div class="col col-md-12 ml-n5 ml-md-0">

                <!-- Heading -->
                <h3 class="text-white">
                  <?php echo e($service->d7); ?>

                </h3>

                <!-- Text -->
                <p class="text-muted-80 mb-6 mb-md-0">
                  <?php echo e($service->d8); ?>

                </p>

              </div>
            </div> <!-- / .row -->
          </div>
          <div class="col-12 col-md-4">
            <div class="row">
              <div class="col-auto col-md-12">

                <!-- Step -->
                <div class="row no-gutters align-items-center mb-md-5">
                  <div class="col-auto">

                    <!-- Number -->
                    <a href="#!" class="btn btn-sm btn-rounded-circle btn-gray-400-10 disabled opacity-1">
                      <span>2</span>
                    </a>

                  </div>
                  <div class="col">

                    <!-- Divider -->
                    <hr class="d-none d-md-block border-gray-900-50 mr-n7">

                  </div>
                </div> <!-- / .row -->

              </div>
              <div class="col col-md-12 ml-n5 ml-md-0">

                <!-- Heading -->
                <h3 class="text-white">
                  <?php echo e($service->d9); ?>

                </h3>

                <!-- Text -->
                <p class="text-muted-80 mb-6 mb-md-0">
                  <?php echo e($service->d10); ?>

                </p>

              </div>
            </div> <!-- / .row -->
          </div>
          <div class="col-12 col-md-4">
            <div class="row">
              <div class="col-auto col-md-12">

                <!-- Step -->
                <div class="row no-gutters align-items-center mb-md-5">
                  <div class="col-auto">

                    <!-- Number -->
                    <a href="#!" class="btn btn-sm btn-rounded-circle btn-gray-400-10 disabled opacity-1">
                      <span>3</span>
                    </a>

                  </div>
                </div> <!-- / .row -->

              </div>
              <div class="col col-md-12 ml-n5 ml-md-0">

                <!-- Heading -->
                <h3 class="text-white">
                  <?php echo e($service->d11); ?>

                </h3>

                <!-- Text -->
                <p class="text-muted-80 mb-0">
                  <?php echo e($service->d12); ?>

                </p>

              </div>
            </div> <!-- / .row -->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container-->
    </div>

    <!-- STEPS
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-top shape-fluid-x shape-flip-x svg-shim text-black">
        <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h2880v125h-720L720 250H0V0z" fill="currentColor"/></svg>
      </div>
    </div>

    <!-- ABOUT
    ================================================== -->
    <section>
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <!-- <div class="col-12 col-md-6 col-lg-5 order-md-2">

            
            <div class="d-flex flex-column w-md-130 mb-6 mb-md-0">

             
              <img class="img-fluid rounded shadow align-self-start" data-jarallax-element="-20" src="<?php echo e(asset ('assets/ui/img/screenshots/ui/analytics-2.png')); ?>" alt="..." style="min-height: 1px; max-width: 50%; margin-left: 40%;">

              
              <img class="img-fluid rounded shadow align-self-start" data-jarallax-element="-50" src="<?php echo e(asset ('assets/ui/img/screenshots/ui/analytics-1.png')); ?>" alt="..." style="min-height: 1px; max-width: 50%; margin-top: -35%;">

              
              <img class=" img-fluid rounded shadow align-self-center" data-jarallax-element="-80" src="<?php echo e(asset ('assets/ui/img/screenshots/ui/analytics-3.png')); ?>" alt="..." style="min-height: 1px; max-width: 50%; margin-top: -20%;">

            </div>

          </div> -->
          <div class="col-12 col-md-6 order-md-1 pt-md-12">

            <!-- Heading -->
            <h1>
              <?php echo e($service->d13); ?>

            </h1>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-6">
              <?php echo e($service->d14); ?>

            </p>

            <!-- List -->
            <div class="row">
              <div class="col-12 col-lg-6">

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                  </div>

                  <!-- Text -->
                  <p class="text-success">
                    <?php echo e($service->d15); ?>

                  </p>

                </div>

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                  </div>

                  <p class="text-success mb-lg-0">
                    <?php echo e($service->d16); ?>

                  </p>

                </div>

              </div>
              <div class="col-12 col-lg-6">

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <span class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                  </span>

                  <!-- Text -->
                  <p class="text-success">
                    <?php echo e($service->d17); ?>

                  </p>

                </div>

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-success-soft mr-1 mr-4">
                    <i class="fe fe-check"></i>
                  </div>

                  <!-- Text -->
                  <p class="text-success mb-0">
                    <?php echo e($service->d18); ?>

                  </p>

                </div>

              </div>
            </div> <!-- / .row -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="py-8 py-md-11">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          
          <div class="col-12 col-md-5">

            <!-- Heading -->
            <h2>
              <?php echo e($service->d19); ?>

            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700">
              <?php echo e($service->d20); ?>

            </p>

            <!-- Link -->
            <a class="font-weight-bold text-decoration-none" href="<?php echo e($service->d22); ?>">
              <?php echo e($service->d21); ?> <i class="fe fe-arrow-right ml-3"></i>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- DOWNLOAD
    ================================================== -->
    <section class="border-top">
      <div class="container">
        <div class="row justify-content-between align-items-stretch">
          <div class="col-12 col-md-6 py-8 py-md-13">

            <!-- Heading -->
            <h2>
              <?php echo e($service->d23); ?>

            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-7">
              <?php echo e($service->d24); ?>

            </p>

            

          </div>
          
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    
   
    <!-- CTA
    ================================================== -->
    <section class="bg-black">
      <div class="container py-6 py-md-8 border-top border-bottom border-gray-900-50">
        <div class="row align-items-center">
          <div class="col-12 col-md">

            <!-- Heading -->
            <h3 class="font-weight-bold text-white mb-1">
              <?php echo e($service->d40); ?>

            </h3>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-5 mb-md-0">
              <?php echo e($service->d41); ?>

            </p>

          </div>
          <div class="col-12 col-md-auto">

            <!-- Button -->
            <a href="<?php echo e($service->d43); ?>" class="btn btn-primary lift">
              <?php echo e($service->d42); ?>

            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="2">No data available.</td>
                                    </tr>
<?php endif; ?>  

<?php echo $__env->make('ui.includes.uifooter3', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('ui.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>