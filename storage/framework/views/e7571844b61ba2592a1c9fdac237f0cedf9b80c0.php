<?php $__env->startSection('title', 'Digital In Corporation | Blog'); ?>
<?php $__env->startSection('description', ''); ?>
<?php $__env->startSection('keywords', 'Blog | '); ?>
<?php $__env->startSection('author', 'Blog | '); ?>

<?php $__env->startSection('content'); ?>

 
   

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="pt-7 pt-md-10">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <!-- Card -->
            <div class="card card-row shadow-light-lg mb-6 lift lift-lg">
              <div class="row no-gutters">
                
                <a class="col-12 col-md-6 order-md-2 bg-cover card-img-right" style="background-image: url(<?php echo e(asset('assets/post/' .$post->image)); ?> );" href="<?php echo e(url("/Posts/{$post->slug}")); ?>">

                  <!-- Image (placeholder) -->
                  <img src="<?php echo e(asset ('assets/post/' .$post->image )); ?>" alt="..." class="img-fluid d-md-none invisible">

                  <!-- Shape -->
                  <div class="shape shape-left shape-fluid-y svg-shim text-white d-none d-md-block">
                    <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h62.759v172C38.62 384 112 517 112 517v173H0V0z" fill="currentColor"/></svg>
                  </div>

                </a>
                <div class="col-12 col-md-6 order-md-1">

                  <!-- Body -->
                  <a class="card-body" href="<?php echo e(url("/Posts/{$post->slug}")); ?>">

                    <!-- Heading -->
                    <h3>
                      <?php echo e(str_limit($post->title, 60)); ?>

                    </h3>

                    <!-- Text -->
                    <p class="mb-0 text-muted">
                      <?php echo str_limit($post->body, 100); ?>

                    </p>

                  </a>

                  <!-- Meta -->
                  <a class="card-meta" href="#!">

                    <!-- Divider -->
                    <hr class="card-meta-divider">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm mr-2">
                      <img src="<?php echo e(asset ('assets/logo/favicon.png')); ?>" alt="..." class="avatar-img rounded-circle">
                    </div>

                    <!-- Author -->
                    <h6 class="text-uppercase text-muted mr-2 mb-0">
                      Admin
                    </h6>

                    <!-- Date -->
                    <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                      <time datetime="2019-05-02"><?php echo e($post->updated_at); ?></time>
                    </p>

                  </a>

                </div>

              </div> <!-- / .row -->
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  

   

    <!-- MORE
    ================================================== -->
    <section class="py-7 py-md-10">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-9 col-lg-8 col-xl-7">

            <!-- Button -->
            <a href="<?php echo e(URL ('/post')); ?>" class="btn btn-block btn-outline-gray-300 d-flex align-items-center">
              <span class="mx-auto">Load more</span> <i class="fe fe-arrow-right"></i>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-gray-200">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
      </div>
    </div>

    <!-- CTA
    ================================================== -->
    <section class="pt-6 pt-md-8 bg-gray-200">
      <div class="container pb-6 pb-md-8 border-bottom border-gray-300">
        <div class="row align-items-center">
          <div class="col-12 col-md">

            <!-- Heading -->
            <h3 class="mb-1 font-weight-bold">
              Get our stories delivered
            </h3>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-6 mb-md-0">
              From us to your inbox weekly.
            </p>

          </div>
          <div class="col-12 col-md-5">

            <!-- Form -->
            <form>
              <div class="row">
                <div class="col">

                  <!-- Input -->
                  <input type="email" class="form-control" placeholder="Enter your email">

                </div>
                <div class="col-auto ml-n5">

                  <!-- Button -->
                  <button class="btn btn-primary" type="submit">
                    Subscribe
                  </button>

                </div>
              </div> <!-- / .row -->
            </form>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
  
  
<?php echo $__env->make('ui.includes.uifooter2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>