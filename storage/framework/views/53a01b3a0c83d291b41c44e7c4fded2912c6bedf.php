<?php $__env->startSection('title', 'service2 | Digital In-Corporation'); ?>
<?php $__env->startSection('description', ''); ?>
<?php $__env->startSection('keywords', 'home | Digital In-Corporation'); ?>
<?php $__env->startSection('author', 'Digital In-Corporation'); ?>

<?php $__env->startSection('content'); ?>

  <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <!-- WELCOME
    ================================================== -->
    <section class="pt-8 pb-11 pt-md-9 pb-md-12 py-lg-14 bg-light bg-between" style="background-image: url(assets/ui/img/illustrations/illustration-6-cropped.png), url(assets/ui/img/illustrations/illustration-4-cropped.png);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 text-center" data-aos="fade-up">

            <!-- Image (mobile) -->
            <img src="<?php echo e(asset ('assets/ui/img/illustrations/illustration-8.png')); ?>" alt="..." class="img-fluid mb-6 d-lg-none">
            
            <!-- Heading -->
            <h1 class="display-2 font-weight-bold">
              <?php echo e($service->d); ?> <br>
              <?php echo e($service->d1); ?>

            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-6 mb-md-8">
              <?php echo e($service->d2); ?>

            </p>

            <!-- Button -->
            <a href="#!" class="btn btn-primary mr-1 lift">
              <?php echo e($service->d3); ?> <i class="fe fe-arrow-right ml-3"></i>
            </a>
            <a href="#!" class="btn btn-primary-soft lift">
              <?php echo e($service->d4); ?>

            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
      </div>
    </div>

    <!-- PRICING
    ================================================== -->
    <section class="mt-n8">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="50">
            
            <!-- Card -->
            <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">
              <div class="card-body">

                <!-- Badge -->
                <span class="badge badge-pill badge-primary-desat badge-float badge-float-outside">
                  <?php echo e($service->d5); ?>

                </span>

                <!-- Heading -->
                <h4 class="font-weight-bold">
                  <?php echo e($service->d6); ?>

                </h4>

                <!-- Text -->
                <p class="text-muted">
                  <?php echo e($service->d7); ?>

                </p>

                <!-- Link -->
                <a href="#!" class="font-size-sm font-weight-bold text-decoration-none">
                  <?php echo e($service->d8); ?> <i class="fe fe-arrow-right ml-3"></i>
                </a>
                
              </div>
            </div>

          </div>
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
            
            <!-- Card -->
            <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">
              <div class="card-body">

                <!-- Badge -->
                <span class="badge badge-pill badge-primary-desat badge-float badge-float-outside">
                  <?php echo e($service->d9); ?>

                </span>

                <!-- Heading -->
                <h4 class="font-weight-bold">
                  <?php echo e($service->d10); ?>

                </h4>

                <!-- Text -->
                <p class="text-muted">
                  <?php echo e($service->d11); ?>

                </p>

                <!-- Link -->
                <a href="#!" class="font-size-sm font-weight-bold text-decoration-none">
                  <?php echo e($service->d12); ?> <i class="fe fe-arrow-right ml-3"></i>
                </a>
                
              </div>
            </div>

          </div>
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="150">
            
            <!-- Card -->
            <div class="card shadow-light-lg lift lift-lg">
              <div class="card-body">

                <!-- Badge -->
                <span class="badge badge-pill badge-primary-desat badge-float badge-float-outside">
                  <?php echo e($service->d13); ?>

                </span>

                <!-- Heading -->
                <h4 class="font-weight-bold">
                  <?php echo e($service->d14); ?>

                </h4>

                <!-- Text -->
                <p class="text-muted">
                  <?php echo e($service->d15); ?>

                </p>

                <!-- Link -->
                <a href="#!" class="font-size-sm font-weight-bold text-decoration-none">
                  <?php echo e($service->d16); ?> <i class="fe fe-arrow-right ml-3"></i>
                </a>
                
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- CONTROL
    ================================================== -->
    <section class="pt-8 pt-md-11">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">

            <!-- Preheading -->
            <h6 class="text-uppercase text-primary font-weight-bold">
              <?php echo e($service->d17); ?>

            </h6>

            <!-- Heading -->
            <h1 class="font-weight-bold">
              <?php echo e($service->d18); ?>

            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7">
              <?php echo e($service->d19); ?>

            </p>
            
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 order-md-2">
            
            <!-- Macbook + iPhone -->
            <div class="device-combo device-combo-macbook-iphonex mb-6 mb-md-0">

              <!-- Macbook -->
              <div class="device device-macbook">
                <img src="<?php echo e(asset ('assets/ui/img/screenshots/desktop/dashkit-alt.jpg')); ?>" class="device-screen" alt="...">
                <img src="<?php echo e(asset ('assets/ui/img/devices/macbook.svg')); ?>" class="img-fluid" alt="...">
              </div>

              <!-- iPhone -->
              <div class="device device-iphonex">
                <img src="<?php echo e(asset ('assets/ui/img/screenshots/mobile/dashkit-alt.jpg')); ?>" class="device-screen" alt="...">
                <img src="<?php echo e(asset ('assets/ui/img/devices/iphonex.svg')); ?>" class="img-fluid" alt="...">
              </div>
              
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- STATS
    ================================================== -->
    <section class="pt-8 pt-md-11">
      <div class="container">
        <div class="row">
          <div class="col-12">
            
            <!-- Card -->
            <div class="card-group card-border card-border-lg border-primary shadow-light-lg">
              <div class="card">
                <div class="card-body">

                  <!-- Heading -->
                  <h2 class="font-weight-bold text-center mb-0">
                    <span data-toggle="countup" data-from="0" data-to="15" data-aos data-aos-id="countup:in"></span>M+
                  </h2>

                  <!-- Text -->
                  <p class="text-center text-muted mb-0">
                    <?php echo e($service->d21); ?>

                  </p>
                  
                </div>
              </div>
              <div class="card border-left-md">
                <div class="card-body">

                  <!-- Heading -->
                  <h2 class="font-weight-bold text-center mb-0">
                    0
                  </h2>

                  <!-- Text -->
                  <p class="text-center text-muted mb-0">
                    <?php echo e($service->d22); ?>

                  </p>
                  
                </div>
              </div>
              <div class="card border-left-md">
                <div class="card-body">

                  <!-- Heading -->
                  <h2 class="font-weight-bold text-center mb-0">
                    <span data-toggle="countup" data-from="0.00" data-to="99.99" data-decimals="2" data-aos data-aos-id="countup:in"></span>%
                  </h2>

                  <!-- Text -->
                  <p class="text-center text-muted mb-0">
                    <?php echo e($service->d24); ?>

                  </p>
                  
                </div>
              </div>
              <div class="card border-left-md">
                <div class="card-body">

                  <!-- Heading -->
                  <h2 class="font-weight-bold text-center mb-0">
                    <span data-toggle="countup" data-from="0" data-to="95" data-aos data-aos-id="countup:in"></span>M+
                  </h2>

                  <!-- Text -->
                  <p class="text-center text-muted mb-0">
                    <?php echo e($service->d25); ?> 
                  </p>
                  
                </div>
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- INTEGRATION
    ================================================== -->
    <section class="py-8 py-md-11">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Preheading -->
            <h6 class="text-uppercase text-gray-500 font-weight-bold">
              <?php echo e($service->d26); ?>

            </h6>

            <!-- Heading -->
            <h1 class="font-weight-bold">
              <?php echo e($service->d27); ?>

            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7 mb-md-9">
              <?php echo e($service->d28); ?>

            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row no-gutters mb-7 mb-md-9">
          <div class="col-12 col-md-4 text-center">
            
            <div class="row mb-5">
              <div class="col">
                
                <!-- Placeholder -->

              </div>
              <div class="col-auto">
                
                <!-- Icon -->
                <div class="icon text-primary mb-3">
                  <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M12 11a4 4 0 110-8 4 4 0 010 8z" fill="#335EEA" opacity=".3"/><path d="M3 20.2c.388-4.773 4.262-7.2 8.983-7.2 4.788 0 8.722 2.293 9.015 7.2.012.195 0 .8-.751.8H3.727c-.25 0-.747-.54-.726-.8z" fill="#335EEA"/></g></svg>
                </div>

              </div>
              <div class="col">
                
                <!-- Divider -->
                <hr class="d-none d-md-block">

              </div>
            </div> <!-- / .row -->

            <!-- Headin -->
            <h3 class="font-weight-bold">
              <?php echo e($service->d29); ?>

            </h3>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0">
              <?php echo e($service->d31); ?>

            </p>

          </div>
          <div class="col-12 col-md-4 text-center">
            
            <div class="row mb-5">
              <div class="col">
                
                <!-- Divider -->
                <hr class="d-none d-md-block">

              </div>
              <div class="col-auto">
                
                <!-- Icon -->
                <div class="icon text-primary mb-3">
                  <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M5.747 13.043A6 6 0 1114.811 6.5h2.439a3.75 3.75 0 010 7.5h-9c-.962 0-1.84-.362-2.503-.957z" fill="#335EEA" opacity=".3"/><path d="M9.032 19.492h1.956V21.5a.5.5 0 00.5.5h1.024a.5.5 0 00.5-.5v-2.008h1.956a.5.5 0 00.382-.823l-2.968-3.505a.5.5 0 00-.764 0L8.65 18.669a.5.5 0 00.382.823z" fill="#335EEA"/></g></svg>
                </div>

              </div>
              <div class="col">
                
                <!-- Divider -->
                <hr class="d-none d-md-block">

              </div>
            </div> <!-- / .row -->

            <!-- Headin -->
            <h3 class="font-weight-bold">
              <?php echo e($service->d32); ?> 
            </h3>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0">
               <?php echo e($service->d34); ?>

            </p>

          </div>
          <div class="col-12 col-md-4 text-center">
            
            <div class="row mb-5">
              <div class="col">
                
                <!-- Divider -->
                <hr class="d-none d-md-block">

              </div>
              <div class="col-auto">
                
                <!-- Icon -->
                <div class="icon text-primary mb-3">
                  <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M8 7a1 1 0 110-2h8a4 4 0 110 8H8a2 2 0 100 4h9a1 1 0 010 2H8a4 4 0 110-8h8a2 2 0 100-4H8z" fill="#335EEA" opacity=".3"/><path d="M9.707 8.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 1.414L7.414 6l2.293 2.293zM14.293 20.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 00-1.414 1.414L16.586 18l-2.293 2.293z" fill="#335EEA"/></g></svg>
                </div>

              </div>
              <div class="col">
                
                <!-- Placeholder -->

              </div>
            </div> <!-- / .row -->

            <!-- Headin -->
            <h3 class="font-weight-bold">
              <?php echo e($service->d35); ?>

            </h3>

            <!-- Text -->
            <p class="text-muted mb-0">
              <?php echo e($service->d37); ?>

            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">
            
            <!-- Text -->
            <p class="font-size-sm text-center text-gray-500 mb-0">
              * Some integrations require a custom API 
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
      </div>
    </div>

    <!-- SOLUTION
    ================================================== -->
    <section class="py-8 pt-md-11 pb-md-12 bg-dark">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Preheading -->
            <h6 class="text-uppercase text-success font-weight-bold">
              <?php echo e($service->d64); ?>

            </h6>

            <!-- Heading -->
            <h1 class="font-weight-bold text-white">
              <?php echo e($service->d65); ?>

            </h1>

            <!-- Text -->
            <p class="font-size-lg text-gray-500 mb-7 mb-md-9">
              <?php echo e($service->d66); ?>

            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            
            <!-- Heading -->
            <h4 class="font-weight-bold text-white mb-5">
              <?php echo e($service->d38); ?>

            </h4>

            <!-- List -->
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <?php echo e($service->d39); ?>

              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <?php echo e($service->d40); ?>

              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <?php echo e($service->d41); ?>

              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300 mb-6 mb-lg-0">
                <?php echo e($service->d42); ?>

              </p>

            </div> <!-- / .row -->

          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            
            <!-- Heading -->
            <h4 class="font-weight-bold text-white mb-5">
              <?php echo e($service->d43); ?>

            </h4>

            <!-- List -->
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <?php echo e($service->d44); ?>

              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <?php echo e($service->d45); ?>

              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <?php echo e($service->d46); ?>

              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300 mb-6 mb-lg-0">
                <?php echo e($service->d47); ?>

              </p>

            </div> <!-- / .row -->

          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            
            <!-- Heading -->
            <h4 class="font-weight-bold text-white mb-5">
              <?php echo e($service->d48); ?>

            </h4>

            <!-- List -->
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <?php echo e($service->d49); ?>

              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <?php echo e($service->d50); ?>

              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <?php echo e($service->d51); ?>

              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300 mb-6 mb-lg-0">
                <?php echo e($service->d52); ?>

              </p>

            </div> <!-- / .row -->

          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            
            <!-- Heading -->
            <h4 class="font-weight-bold text-white mb-5">
              <?php echo e($service->d53); ?>

            </h4>

            <!-- List -->
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <?php echo e($service->d54); ?>

              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <?php echo e($service->d55); ?>

              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <?php echo e($service->d56); ?>

              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300 mb-0">
                <?php echo e($service->d57); ?>

              </p>

            </div> <!-- / .row -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- CTA
    ================================================== -->
    <section class="pt-6 pt-md-8">
      <div class="container pb-6 pb-md-8 border-bottom">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Heading -->
            <h3 class="font-weight-bold mb-1">
              <?php echo e($service->d58); ?>

            </h3>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-6 mb-md-0">
              <?php echo e($service->d59); ?>

            </p>

          </div>
          <div class="col-12 col-md-auto">
                
            <!-- Button -->
            <a href="<?php echo e($service->d61); ?>" class="btn btn-primary-soft mr-1 lift">
              <?php echo e($service->d60); ?>

            </a>
            
            <a href="<?php echo e($service->d63); ?>" class="btn btn-primary lift">
              <?php echo e($service->d62); ?>

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

<?php echo $__env->make('ui.includes.uifooter2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('ui.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>