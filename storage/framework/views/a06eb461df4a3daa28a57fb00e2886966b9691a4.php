<?php $__env->startSection('content'); ?>

<style>
    textarea {
  
}
</style>

                                         <?php if(Request::segment(4)==='edit'): ?>
                                        <?php echo e(Form::model($service, array('route' => array('service3.update', $service->id), 'method' => 'PUT','enctype'=>'multipart/form-data'))); ?>

                                        <?php  
                                          $id           = $service->id;
                                          $d           = $service->d;
                                          $d1           = $service->d1;
                                          $d2           = $service->d2;
                                          $d3           = $service->d3;
                                          $d4           = $service->d4;
                                          $d5           = $service->d5;
                                          $d6           = $service->d6;
                                          $d7           = $service->d7;
                                          $d8           = $service->d8;
                                          $d9           = $service->d9;
                                          $d10           = $service->d10;
                                          $d11           = $service->d11;
                                          $d12           = $service->d12;
                                          $d13           = $service->d13;
                                          $d14           = $service->d14;
                                          $d15           = $service->d15;
                                          $d16           = $service->d16;
                                          $d17           = $service->d17;
                                          $d18           = $service->d18;
                                          $d19           = $service->d19;
                                          $d20           = $service->d20;
                                          $d21           = $service->d21;
                                          $d22           = $service->d22;
                                          $d23           = $service->d23;
                                          $d24           = $service->d24;
                                          $d25           = $service->d25;
                                          $d26           = $service->d26;
                                          $d27           = $service->d27;
                                          $d28           = $service->d28;
                                          $d29           = $service->d29;
                                          $d30           = $service->d30;
                                          $d31           = $service->d31;
                                          $d32           = $service->d32;
                                          $d33           = $service->d33;
                                          $d34           = $service->d34;
                                          $d35           = $service->d35;
                                          $d36           = $service->d36;
                                          $d37           = $service->d37;
                                          $d38           = $service->d38;
                                          $d39           = $service->d39;
                                          $d40           = $service->d40;
                                          $d41           = $service->d41;
                                          $d42           = $service->d42;
                                          $d43           = $service->d43;
                                          $d44           = $service->d44;
                                          $d45           = $service->d45;
                                          $d46           = $service->d46;
                                          $d47           = $service->d47;
                                          $d48           = $service->d48;
                                          $d49           = $service->d49;
                                          $d50           = $service->d50;
                                          $d51           = $service->d51;
                                          $d52           = $service->d52;
                                          $d53           = $service->d53;
                                          $d54           = $service->d54;
                                          $d55           = $service->d55;
                                          $d56           = $service->d56;
                                          $d57           = $service->d57;
                                          $d58           = $service->d58;
                                          $d59           = $service->d59;
                                          $d60           = $service->d60;
                                          $d61           = $service->d61;
                                          $d62           = $service->d62;
                                          $d63           = $service->d63;
                                          $d64           = $service->d64;
                                          $d65           = $service->d65;
                                          $d66           = $service->d66;
                                          $d67           = $service->d67;
                                          $d68           = $service->d68;
                                          $d69          = $service->d69;
                                          $d70          = $service->d70;
                                          $d71          = $service->d71;
                                          $d72           = $service->d72;
                                          // $d73           = $service->d73;
                                          // $d74           = $service->d74;
                                          // $d75           = $service->d75;
                                          // $d76           = $service->d76;
                                          // $d77           = $service->d77;
                                          // $d78           = $service->d78;
                                          // $d79           = $service->d79;
                                          // $d80           = $service->d80;
                                          // $d81           = $service->d81;
                                          // $d82           = $service->d82;
                                          // $d83           = $service->d83;
                                          // $d84           = $service->d84;
                                          // $d85           = $service->d85;
                                          // $d86           = $service->d86;
                                          // $d87           = $service->d87;
                                          // $d88           = $service->d88;
                                          // $d89           = $service->d89;
                                          // $d90           = $service->d90;
                                          // $d91           = $service->d91;
                                          // $d92           = $service->d92;
                                          // $d93           = $service->d93;
                                          // $d94           = $service->d94;
                                          // $d95           = $service->d95;
                                          // $d96           = $service->d96;
                                          // $d97           = $service->d97;
                                          // $d99           = $service->d99;
                                          // $d100           = $service->d100;
                                          
                                        ?>
                                        <?php else: ?>
                                        <?php echo e(Form::open(array('url' => 'admin/service3','enctype'=>'multipart/form-data','autocomplete'=>"off"))); ?>


                                        <?php 
                                                                              
                                          

                                        ?>
                                        <?php endif; ?>
<!-- NAVBAR
    ================================================== -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
      <div class="container">

        

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>

          

          <a href="<?php echo e(URL ('admin/dashboard')); ?>" class="navbar-brand">Cancel</a>
            <button class="navbar-btn btn btn-sm btn-primary lift ml-auto" type="submit">update</button>
          

        </div>

      </div>
    </nav>

    
  
    <!-- WELCOME
    ================================================== -->
    <section class="py-10 py-md-14 bg-primary" id="welcome">

      <!-- Shape -->
      <div class="shape shape-blur-3 svg-shim text-white">
        <svg viewBox="0 0 1738 487" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h1420.92s713.43 457.505 0 485.868C707.502 514.231 0 0 0 0z" fill="url(#paint0_linear)"/><defs><linearGradient id="paint0_linear" x1="0" y1="0" x2="1049.98" y2="912.68" gradientUnits="userSpaceOnUse"><stop stop-color="currentColor" stop-opacity=".075"/><stop offset="1" stop-color="currentColor" stop-opacity="0"/></linearGradient></defs></svg>
      </div>

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Heading -->
            <h1 class="display-2 font-weight-bold text-white">
              <input type="text" name="d" id="d" value="<?php echo e(old('d')?old('d'):$d); ?>" />
            </h1>

            <!-- Text -->
            <p class="lead text-white mb-8">
              <textarea name="d1" style="width:500px;  height:150px;"><?php echo e(old('d1')?old('d1'):$d1); ?></textarea>
            </p>

            <!-- Button -->
            <a class="btn btn-white shadow lift">
              <input type="text" name="d2" id="d2" value="<?php echo e(old('d2')?old('d2'):$d2); ?>" />
            </a>
            <p>URL
            <input type="text" name="d4" id="d4" value="<?php echo e(old('d4')?old('d4'):$d4); ?>" /></p>

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

    <!-- ABOUT
    ================================================== -->
    <section class="pt-8 pt-md-10" id="about">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            
            <!-- Button -->
            <a href="#about" class="btn btn-white btn-rounded-circle shadow mt-n12 mt-md-n14" data-toggle="smooth-scroll">
              <i class="fe fe-arrow-down"></i>
            </a>

          </div>
        </div> <!-- / .row -->
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Heading -->
            <h2 class="font-weight-bold">
              <input type="text" name="d3" id="d3" value="<?php echo e(old('d3')?old('d3'):$d3); ?>" /> 
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-9">
              <textarea name="d5" style="width:500px;  height:150px;"><?php echo e(old('d5')?old('d5'):$d5); ?></textarea>
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-lg-6">
            
            <!-- Item -->
            <div class="row align-items-center mb-8"data-aos="fade-up">
              <div class="col-4 col-lg-5">
                
                <!-- Image -->
                <img src="<?php echo e(asset ('assets/ui/img/illustrations/illustration-4.png')); ?>" alt="..." class="img-fluid">

              </div>
              <div class="col-8 col-lg-7">
                
                <!-- Heading -->
                <h3 class="font-weight-bold mb-2">
                  <input type="text" name="d6" id="d6" value="<?php echo e(old('d6')?old('d6'):$d6); ?>" />
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-0">
                  <textarea name="d7" style="width:300px;  height:150px;"><?php echo e(old('d7')?old('d7'):$d7); ?></textarea>
                </p>

              </div>
            </div> <!-- / .row -->

            <!-- Item -->
            <div class="row align-items-center mb-8" data-aos="fade-up">
              <div class="col-4 col-lg-5">
                
                <!-- Image -->
                <img src="<?php echo e(asset ('assets/ui/img/illustrations/illustration-8.png')); ?>" alt="..." class="img-fluid">

              </div>
              <div class="col-8 col-lg-7">
                
                <!-- Heading -->
                <h3 class="font-weight-bold mb-2">
                  <input type="text" name="d8" id="d8" value="<?php echo e(old('d8')?old('d8'):$d8); ?>" /> 
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-0">
                  <textarea name="d9" style="width:300px;  height:150px;"><?php echo e(old('d9')?old('d9'):$d9); ?></textarea>
                </p>

              </div>
            </div> <!-- / .row -->


          </div>
          <div class="col-12 col-lg-6">
            <!-- Item -->
            <div class="row align-items-center mb-8" data-aos="fade-up">
              <div class="col-4 col-lg-5">
                
                <!-- Image -->
                <img src="<?php echo e(asset ('assets/ui/img/illustrations/illustration-7.png')); ?>" alt="..." class="img-fluid">

              </div>
              <div class="col-8 col-lg-7">
                
                <!-- Heading -->
                <h3 class="font-weight-bold mb-2">
                  <input type="text" name="d10" id="d10" value="<?php echo e(old('d10')?old('d10'):$d10); ?>" />
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-0">
                  <textarea name="d11" style="width:300px;  height:150px;"><?php echo e(old('d11')?old('d11'):$d11); ?></textarea>
                </p>

              </div>
            </div> <!-- / .row -->

            <!-- Item -->
            <div class="row align-items-center mb-8" data-aos="fade-up">
              <div class="col-4 col-lg-5">
                
                <!-- Image -->
                <img src="<?php echo e(asset ('assets/ui/img/illustrations/illustration-6.png')); ?>" alt="..." class="img-fluid">

              </div>
              <div class="col-8 col-lg-7">
                
                <!-- Heading -->
                <h3 class="font-weight-bold mb-2">
                  <input type="text" name="d12" id="d12" value="<?php echo e(old('d12')?old('d12'):$d12); ?>" />
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-0">
                  <textarea name="d13" style="width:300px;  height:150px;"><?php echo e(old('d13')?old('d13'):$d13); ?></textarea>
                </p>

              </div>
            </div> <!-- / .row -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- UNIFIED
    ================================================== -->
    <section class="py-8 py-md-11">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 col-lg-5" data-aos="fade-up">
            
            <!-- Badge -->
            <span class="badge badge-pill badge-success-soft mb-3">
              <span class="h6 text-uppercase"><input type="text" name="d14" id="d14" value="<?php echo e(old('d14')?old('d14'):$d14); ?>" /></span>
            </span>

            <!-- Heading -->
            <h2 class="font-weight-bold">
              <input type="text" name="d15" id="d15" value="<?php echo e(old('d15')?old('d15'):$d15); ?>" /> <br>
              <span class="text-success"><input type="text" name="d16" id="d16" value="<?php echo e(old('d16')?old('d16'):$d16); ?>" /></span>.
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700">
              <textarea name="d17" style="width:300px;  height:150px;"><?php echo e(old('d17')?old('d17'):$d17); ?></textarea>
            </p>

            <!-- Form -->
            <form class="mb-8">
              <div class="form-row">
                <div class="col-12 col-md">
                  
                  <!-- Input -->
                  <div class="form-group mb-md-0">
                    <input type="url" class="form-control bg-light border-0" placeholder="www.yoursite.com">
                  </div>

                </div>
                <div class="col-12 col-md-auto">
                  
                  <!-- Submit -->
                  <a class="btn btn-success-soft">
                    <input type="text" name="d18" id="d18" value="<?php echo e(old('d18')?old('d18'):$d18); ?>" />
                  </a>

                </div>
              </div>
            

          </div>
          <div class="col-12 col-md-6 col-lg-6 offset-lg-1">
            
            <!-- Card -->
            <div class="card card-border border-success shadow-lg mb-5" data-aos="fade-up">
              <div class="card-body">
                
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item d-flex align-items-center">
                    
                    <!-- Text -->
                    <div class="mr-auto">
                      
                      <!-- Heading -->
                      <p class="font-weight-bold mb-1">
                        <input type="text" name="d19" id="d19" value="<?php echo e(old('d19')?old('d19'):$d19); ?>" />
                      </p>

                      <!-- Text -->
                      <p class="font-size-sm text-muted mb-0">
                        <input type="text" name="d20" id="d20" value="<?php echo e(old('d20')?old('d20'):$d20); ?>" />
                      </p>

                    </div>
                      
                    <!-- Check -->
                    <div class="badge badge-rounded-circle badge-success-soft ml-4">
                      <i class="fe fe-check"></i>
                    </div>

                  </div>
                  <div class="list-group-item d-flex align-items-center">
                      
                    <!-- Text -->                
                    <div class="mr-auto">
                      
                      <!-- Heading -->
                      <p class="font-weight-bold mb-1">
                        <input type="text" name="d21" id="d21" value="<?php echo e(old('d21')?old('d21'):$d21); ?>" />
                      </p>

                      <!-- Text -->
                      <p class="font-size-sm text-muted mb-0">
                        <input type="text" name="d22" id="d22" value="<?php echo e(old('d22')?old('d22'):$d22); ?>" />
                      </p>

                    </div>
                      
                    <!-- Check -->
                    <div class="badge badge-rounded-circle badge-success-soft ml-4">
                      <i class="fe fe-check"></i>
                    </div>

                  </div>
                  <div class="list-group-item d-flex align-items-center">
                      
                    <!-- Text -->
                    <div class="mr-auto">
                      
                      <!-- Heading -->
                      <p class="font-weight-bold mb-1">
                        <input type="text" name="d23" id="d23" value="<?php echo e(old('d23')?old('d23'):$d23); ?>" />
                      </p>

                      <!-- Text -->
                      <p class="font-size-sm text-muted mb-0">
                       <input type="text" name="d24" id="d24" value="<?php echo e(old('d24')?old('d24'):$d24); ?>" />
                      </p>

                    </div>
                      
                    <!-- Check -->
                    <div class="badge badge-rounded-circle badge-success-soft ml-4">
                      <i class="fe fe-check"></i>
                    </div>

                  </div>
                  <div class="list-group-item d-flex align-items-center">
                      
                    <!-- Text -->
                    <div class="mr-auto">
                      
                      <!-- Heading -->
                      <p class="font-weight-bold mb-1">
                        <input type="text" name="d25" id="d25" value="<?php echo e(old('d25')?old('d25'):$d25); ?>" />
                      </p>

                      <!-- Text -->
                      <p class="font-size-sm text-muted mb-0">
                        <input type="text" name="d26" id="d26" value="<?php echo e(old('d26')?old('d26'):$d26); ?>" />
                      </p>

                    </div>
                      
                    <!-- Check -->
                    <div class="badge badge-rounded-circle badge-success-soft ml-4">
                      <i class="fe fe-check"></i>
                    </div>

                  </div>
                </div>

              </div>
            </div>

            <!-- Text -->
            <p class="font-size-sm text-center text-gray-500 mb-0">
              <input type="text" name="d27" id="d27" value="<?php echo e(old('d27')?old('d27'):$d27); ?>" />
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- TESTIMONIALS
    ================================================== -->
    <section data-jarallax data-speed=".8" class="py-15 overlay overlay-black overlay-60 jarallax" style="background-image: url(assets/ui/img/covers/cover-1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-7">
            
            <!-- Blockquote -->
            <blockquote class="blockquote mb-0">

              <!-- Text -->
              <p class="h2 text-white">
                <textarea name="d28" id="d28" style="width:700px;  height:300px;"><?php echo e(old('d28')?old('d28'):$d28); ?></textarea>
              </p>

              <!-- Footer -->
              <footer class="blockquote-footer text-white-50 mb-0">
                <input type="text" name="d29" id="d29" value="<?php echo e(old('d29')?old('d29'):$d29); ?>" />
              </footer>

            </blockquote>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
        <svg viewBox="0 0 2880 56" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M720 28H0v28h2880V28h-720S1874 0 1440 0 720 28 720 28z" fill="currentColor"/></svg>
      </div>
    </div>

    <!-- CASE STUDIES
    ================================================== -->
    <section class="pt-10">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Badge -->
            <span class="badge badge-pill badge-success-soft mb-3">
              <span class="h6 text-uppercase"><input type="text" name="d30" id="d30" value="<?php echo e(old('d30')?old('d30'):$d30); ?>" /></span>
            </span>

            <!-- Heading -->
            <h2 class="font-weight-bold">
              <input type="text" name="d31" id="d31" value="<?php echo e(old('d31')?old('d31'):$d31); ?>" />
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-9">
              <textarea name="d32" style="width:500px;  height:150px;"><?php echo e(old('d32')?old('d32'):$d32); ?></textarea>
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- CASE STUDIES (CAROUSEL)
    ================================================== -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12">
            
            <!-- Flickity -->
            <div class="flickity-viewport-visible pt-2 pb-9" data-flickity='{"cellAlign": "left", "imagesLoaded": true, "pageDots": false, "prevNextButtons": false, "contain": true}'>
              <div class="col-12 col-md-5 col-lg-4">
                
                <!-- Card -->
                <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #FF5A5F;">
                  <div class="card-body text-center">

                    <!-- Icon -->
                    <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #FF5A5F;">
                      <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M1447.629 301.83c0 28.119-22.658 50.76-50.777 50.76-28.118 0-50.76-22.641-50.76-50.76s21.87-50.76 50.76-50.76c28.915.78 50.777 23.43 50.777 50.76zm-209.316 102.317v12.5s-24.202-31.256-75.75-31.256c-85.121 0-151.517 64.828-151.517 154.638 0 89.037 65.615 154.638 151.517 154.638 52.328 0 75.75-32.02 75.75-32.02v13.271c0 6.25 4.697 10.923 10.939 10.923h63.252V393.177h-63.252c-6.242.024-10.939 5.5-10.939 10.97zm0 188.21c-11.703 17.189-35.14 32.028-63.251 32.028-49.98 0-88.258-31.24-88.258-84.356 0-53.11 38.277-84.349 88.258-84.349 27.338 0 52.328 15.62 63.251 32.02v104.658zm121.058-199.156h74.97v293.664h-74.97V393.2zm1119.954-7.818c-51.548 0-75.766 31.255-75.766 31.255V251.85h-74.97v435.015h63.267c6.25 0 10.923-5.47 10.923-10.94v-13.27s24.218 32.02 75.75 32.02c85.137 0 151.518-65.585 151.518-154.623s-66.38-154.669-150.722-154.669zm-12.499 238.214c-28.906 0-51.548-14.824-63.267-32.02V486.92c11.719-15.62 36.709-32.02 63.267-32.02 49.98 0 88.25 31.24 88.25 84.349 0 53.109-38.261 84.348-88.25 84.348zm-177.28-110.891v174.939h-74.985V521.288c0-48.412-15.62-67.949-57.767-67.949-22.642 0-46.08 11.72-60.942 28.907v204.626h-74.955V393.21h59.335c6.25 0 10.938 5.469 10.938 10.938v12.5c21.87-22.658 50.76-31.256 79.652-31.256 32.808 0 60.147 9.386 82.016 28.126 26.543 21.87 36.709 49.98 36.709 99.189zm-450.65-127.323c-51.532 0-75.75 31.255-75.75 31.255V251.85h-74.97v435.015h63.251c6.25 0 10.939-5.47 10.939-10.94v-13.27s24.218 32.02 75.75 32.02c85.137 0 151.518-65.585 151.518-154.623.78-89.045-65.6-154.669-150.737-154.669zm-12.498 238.214c-28.891 0-51.533-14.824-63.252-32.02V486.92c11.719-15.62 36.709-32.02 63.252-32.02 49.996 0 88.257 31.24 88.257 84.349 0 53.109-38.261 84.348-88.257 84.348zm-203.05-238.214c22.641 0 34.36 3.917 34.36 3.917v69.5s-62.48-21.088-101.52 23.438v205.399H1481.2V393.2h63.267c6.25 0 10.923 5.469 10.923 10.938v12.5c14.075-16.409 44.535-31.256 67.957-31.256zM844.705 660.306c-3.901-9.37-7.81-19.52-11.711-28.119-6.258-14.051-12.507-27.338-17.96-39.83l-.781-.78c-53.897-117.156-111.68-235.858-172.606-352.999l-2.34-4.696a1536.65 1536.65 0 01-18.734-36.71c-7.817-14.067-15.62-28.89-28.119-42.958-24.99-31.24-60.918-48.427-99.18-48.427-39.057 0-74.198 17.188-99.96 46.859-11.72 14.052-20.317 28.891-28.12 42.958a1695.173 1695.173 0 01-18.732 36.71l-2.349 4.696c-60.138 117.141-118.709 235.85-172.598 353l-.788 1.552c-5.462 12.514-11.719 25.786-17.968 39.83-3.901 8.597-7.803 17.968-11.704 28.118-10.158 28.892-13.287 56.23-9.37 84.357 8.59 58.578 47.632 107.763 101.529 129.647 20.309 8.598 41.398 12.5 63.26 12.5 6.249 0 14.051-.78 20.308-1.569 25.779-3.12 52.33-11.703 78.107-26.543 32.02-17.968 62.48-43.73 96.84-81.22 34.36 37.49 65.6 63.252 96.84 81.22 25.786 14.84 52.329 23.422 78.1 26.543 6.249.796 14.066 1.568 20.316 1.568 21.87 0 43.73-3.9 63.252-12.499 54.677-21.884 92.938-71.85 101.536-129.647 6.203-27.331 3.082-54.654-7.068-83.56zm-352.219 40.61c-42.178-53.109-69.517-103.09-78.88-145.252-3.9-17.968-4.688-33.588-2.34-47.647 1.553-12.5 6.25-23.438 12.499-32.808 14.84-21.074 39.83-34.36 68.729-34.36 28.907 0 54.677 12.498 68.736 34.36 6.25 9.37 10.931 20.316 12.507 32.808 2.333 14.067 1.553 30.46-2.348 47.647-9.402 41.383-36.74 91.37-78.903 145.252zm311.6 36.71c-5.46 40.61-32.8 75.765-71.06 91.385-18.742 7.802-39.058 10.15-59.352 7.802-19.52-2.348-39.057-8.598-59.35-20.3-28.119-15.636-56.23-39.83-89.038-75.767 51.54-63.252 82.78-121.058 94.5-172.59 5.469-24.218 6.257-46.08 3.9-66.397-3.113-19.52-10.15-37.489-21.081-53.109-24.226-35.156-64.843-55.45-110.127-55.45-45.283 0-85.901 21.09-110.111 55.45-10.93 15.62-17.968 33.588-21.09 53.11-3.12 20.316-2.348 42.958 3.902 66.395 11.71 51.533 43.73 110.112 94.491 173.371-32.02 35.929-60.919 60.147-89.037 75.766-20.31 11.72-39.822 17.969-59.343 20.302a124.96 124.96 0 01-59.359-7.803c-38.261-15.62-65.6-50.776-71.061-91.386-2.341-19.52-.788-39.042 7.03-60.91 2.332-7.819 6.249-15.62 10.15-24.991 5.47-12.499 11.703-25.786 17.96-39.057l.788-1.553c53.882-116.376 111.672-235.085 171.81-350.666l2.341-4.697c6.258-11.703 12.507-24.202 18.749-35.92 6.25-12.5 13.271-24.219 21.87-34.377 16.4-18.725 38.26-28.891 62.478-28.891 24.218 0 46.08 10.166 62.48 28.891 8.598 10.182 15.62 21.9 21.87 34.376 6.256 11.719 12.506 24.218 18.74 35.921l2.348 4.697a10341.109 10341.109 0 01171.038 351.446v.78c6.257 12.515 11.719 26.559 17.968 39.073 3.901 9.355 7.81 17.157 10.15 24.975 6.235 20.285 8.575 39.822 5.447 60.123z" fill="currentColor" fill-rule="nonzero"/></svg>
                    </div>

                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                     <textarea name="d33" style="width:200px;  height:150px;"><?php echo e(old('d33')?old('d33'):$d33); ?></textarea> 
                    </p>

                    <!-- Link -->
                    <a  style="color: #FF5A5F;"><input type="text" name="d34" id="d34" value="<?php echo e(old('d34')?old('d34'):$d34); ?>" /></a>
                    <input type="text" name="d66" id="d66" value="<?php echo e(old('d66')?old('d66'):$d66); ?>" />
                    
                  </div>
                </div>

              </div>
              <div class="col-12 col-md-5 col-lg-4">
                
                <!-- Card -->
                <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #B81D24;">
                  <div class="card-body text-center">

                    <!-- Icon -->
                    <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #B81D24;">
                      <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M2140.629 749.008c29.915 2.896 59.815 6.007 89.644 9.225l65.859-162.412 62.6 177.393a7894.176 7894.176 0 0196.232 12.643l-109.75-311.073L2455 204.021h-92.981l-.967 1.33-59.307 146.273-52.068-147.581h-91.807l94.779 268.625-112.013 276.34h-.007zm-69.432-6.364V204.02h-91.77v531.064c30.609 2.36 61.233 4.892 91.77 7.552v.007zm-689.374-30.12c24.774 0 49.52.186 74.222.386V515.03h110.244v-84.267h-110.237V288.388h126.97v-84.367h-219.099v508.575c5.95 0 11.929-.093 17.9-.072zm-284.928 5.149a8147.87 8147.87 0 0191.82-2.746V288.402h85.779v-84.36h-263.377v84.36h85.792v429.27h-.014zm-701.862 56.793V453.568l108.662 307.94a7954.136 7954.136 0 01100.442-10.605V204.03h-88.055v332.396L398.828 204.03H307V786h.551c29.092-4.019 58.284-7.837 87.482-11.534zM922.625 288.38v-84.352h-219.12v537.757a7890.227 7890.227 0 01218.941-15.81v-84.432a7642.138 7642.138 0 00-126.805 8.445V515.066h110.244v-84.317H795.64V288.38h126.984zm842.27 349.13V204h-92.171v513.98c73.32 2.69 146.352 6.436 219.142 11.156v-84.481a8007.367 8007.367 0 00-126.97-7.151v.007z" fill="currentColor" fill-rule="nonzero"/></svg>
                    </div>

                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                      <textarea name="d35" style="width:200px;  height:150px;"><?php echo e(old('d35')?old('d35'):$d35); ?></textarea>
                    </p>

                    <!-- Link -->
                    <a  style="color: #B81D24;"><input type="text" name="d36" id="d36" value="<?php echo e(old('d36')?old('d36'):$d36); ?>" /></a>
                    <input type="text" name="d67" id="d67" value="<?php echo e(old('d67')?old('d67'):$d67); ?>" />
                    
                  </div>
                </div>

              </div>
              <div class="col-12 col-md-5 col-lg-4">
                
                <!-- Card -->
                <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #0081C9;">
                  <div class="card-body text-center">

                    <!-- Icon -->
                    <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #0081C9;">
                      <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M326.558 759C247.442 759 170 702.045 170 573.476c0-128.987 77.442-185.105 156.558-185.105 38.93 0 69.489 10.051 91.256 24.29l-23.86 52.349c-14.652-10.47-36.42-17.17-58.187-17.17-47.72 0-91.255 37.69-91.255 124.799 0 87.108 44.79 125.636 91.255 125.636 21.768 0 43.535-6.7 58.186-17.17l23.861 53.605C395.209 749.787 365.488 759 326.558 759zm272.512 0c-100.884 0-156.558-79.989-156.558-185.524s55.255-185.105 156.558-185.105c100.883 0 156.558 79.151 156.558 185.105C755.628 679.011 699.953 759 599.07 759zm0-313.255c-56.093 0-83.721 50.255-83.721 126.894 0 76.638 27.628 127.312 83.72 127.312 56.094 0 83.722-50.674 83.722-127.312 0-76.639-27.628-126.894-83.721-126.894zm253.674-114.748c-23.86 0-43.116-18.427-43.116-41.042 0-22.614 19.256-41.041 43.116-41.041s43.116 18.427 43.116 41.041c0 22.615-19.674 41.042-43.116 41.042zm-36.418 64.493h72.837v355.972h-72.837V395.49zm358.325 355.972V514.008c0-41.46-25.116-67.425-74.511-67.425-26.373 0-50.652 4.606-65.303 10.47V751.88h-72V413.498c35.582-14.657 81.21-25.127 136.884-25.127 99.628 0 147.767 43.554 147.767 118.936v244.574h-72.837v-.42zm264.14 7.538c-46.047 0-91.675-11.307-119.721-25.127V233h72v171.704c17.163-7.957 44.79-14.658 69.488-14.658 91.675 0 154.047 66.169 154.047 175.054 0 134.432-69.489 193.9-175.814 193.9zM1448 446.583c-19.674 0-43.116 4.606-56.93 11.726v233.685c10.465 4.606 30.977 9.213 51.488 9.213 57.349 0 99.628-39.785 99.628-130.662.419-77.895-36.419-123.962-94.186-123.962zM1810.512 759c-102.14 0-154.047-41.46-154.047-111.817 0-99.253 105.488-116.842 213.07-122.705v-22.615c0-44.81-29.721-60.724-75.349-60.724-33.488 0-74.512 10.47-98.372 21.777l-18.419-49.418c28.465-12.563 76.605-25.127 124.326-25.127 84.977 0 136.884 33.084 136.884 121.03v224.472c-25.535 13.82-77.86 25.127-128.093 25.127zm59.441-186.361c-72.837 3.769-145.255 10.05-145.255 73.288 0 37.69 28.883 60.724 83.72 60.724 23.024 0 50.233-3.769 61.535-9.213v-124.8zM2101.023 759c-41.442 0-84.976-11.307-110.93-25.127l24.28-55.28c18.418 11.307 57.348 23.033 84.557 23.033 38.93 0 64.884-19.265 64.884-48.999 0-32.246-27.21-44.81-63.21-58.211-47.72-18.008-100.883-39.785-100.883-106.373 0-58.63 45.628-99.672 124.744-99.672 43.116 0 78.698 10.47 103.814 25.127l-22.605 50.255c-15.907-10.05-47.72-20.94-73.255-20.94-37.675 0-58.605 19.684-58.605 45.649 0 32.247 26.372 43.554 61.535 56.955 49.395 18.427 104.232 38.948 104.232 108.467C2239.163 717.12 2190.186 759 2101.023 759zm489.35-187.199l-236.513 33.084c7.117 64.075 48.977 96.322 108.838 96.322 35.581 0 74.093-8.795 98.372-21.777l20.93 54.024c-27.628 14.657-75.349 25.127-124.326 25.127-112.186 0-174.976-72.032-174.976-185.524 0-108.885 60.697-185.105 160.325-185.105 92.512 0 147.35 60.725 147.35 156.628.836 8.794.836 18.008 0 27.221zm-147.768-130.662c-55.256 0-91.675 42.297-92.93 116.423l172.465-23.87c-.838-61.982-32.233-92.553-79.535-92.553z" fill="currentColor" fill-rule="nonzero"/></svg>
                    </div>


                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                      <textarea name="d37" style="width:200px;  height:150px;"><?php echo e(old('d37')?old('d37'):$d37); ?></textarea>
                    </p>

                    <!-- Link -->
                    <a  style="color: #0081C9;"><input type="text" name="d38" id="d38" value="<?php echo e(old('d38')?old('d38'):$d38); ?>" /></a>
                    <input type="text" name="d68" id="d68" value="<?php echo e(old('d68')?old('d68'):$d68); ?>" />
                    
                  </div>
                </div>

              </div>
              <div class="col-12 col-md-5 col-lg-4">
                
                <!-- Card -->
                <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #6772E5;">
                  <div class="card-body text-center">

                    <!-- Icon -->
                    <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #6772E5;">
                      <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M666.751 420.38c0-17.962 14.764-24.873 39.222-24.873 35.063 0 79.355 10.597 114.42 29.482V316.742c-38.293-15.2-76.126-21.188-114.42-21.188-93.665 0-155.952 48.827-155.952 130.358 0 127.126 175.326 106.861 175.326 161.676 0 21.185-18.453 28.096-44.292 28.096-38.294 0-87.203-15.662-125.96-36.85V688.46c42.91 18.425 86.28 26.253 125.96 26.253 95.968 0 161.947-47.44 161.947-129.892-.46-137.263-176.25-112.852-176.25-164.442zM978.65 203.432l-112.579 23.95-.46 368.954c0 68.175 51.215 118.378 119.5 118.378 37.834 0 65.516-6.908 80.741-15.2V606.01c-14.76 5.988-87.663 27.176-87.663-40.996V401.495h87.663v-98.11H978.19l.46-99.953zm230.697 134.037l-7.384-34.084h-99.66v403.038h115.349V433.28c27.218-35.467 73.36-29.019 87.663-23.954v-105.94c-14.764-5.53-68.747-15.663-95.968 34.083zm124.111-34.084h115.81v403.038h-115.81V303.385zm0-35.007l115.81-24.873V150l-115.81 24.413v93.965zm356.654 27.176c-45.217 0-74.284 21.188-90.43 35.93l-6.002-28.559h-101.502V840l115.345-24.41.464-130.355c16.61 11.977 41.061 29.019 81.665 29.019 82.589 0 157.795-66.329 157.795-212.343-.461-133.58-76.591-206.357-157.335-206.357zm-27.682 317.364c-27.222 0-43.374-9.67-54.443-21.647l-.464-170.89c11.997-13.357 28.607-22.568 54.907-22.568 41.986 0 71.053 46.98 71.053 107.32 0 61.724-28.607 107.785-71.053 107.785zm548.59-106.401c0-117.918-57.213-210.963-166.56-210.963-109.814 0-176.254 93.048-176.254 210.043 0 138.643 78.44 208.657 191.015 208.657 54.907 0 96.432-12.437 127.806-29.939V592.19c-31.37 15.663-67.361 25.337-113.039 25.337-44.756 0-84.435-15.663-89.509-70.015h225.62c0-5.991.922-29.941.922-40.995zm-227.926-43.758c0-52.05 31.838-73.7 60.905-73.7 28.143 0 58.135 21.65 58.135 73.7h-119.04z" fill="currentColor" fill-rule="nonzero"/></svg>
                    </div>


                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                      <textarea name="d39" style="width:200px;  height:150px;"><?php echo e(old('d39')?old('d39'):$d39); ?></textarea>
                    </p>

                    <!-- Link -->
                    <a  style="color: #6772E5;"><input type="text" name="d40" id="d40" value="<?php echo e(old('d40')?old('d40'):$d40); ?>" /></a>
                    <input type="text" name="d69" id="d69" value="<?php echo e(old('d69')?old('d69'):$d69); ?>" />
                    
                  </div>
                </div>

              </div>
              <div class="col-12 col-md-5 col-lg-4">
                
                <!-- Card -->
                <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #CB2027;">
                  <div class="card-body text-center">

                    <!-- Icon -->
                    <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #CB2027;">
                      <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M705.019 399.95c27.127 0 53.153-22.584 57.68-50.446 5.35-27.119-13.037-49.703-40.144-49.703-27.115 0-53.145 22.584-57.74 49.703-5.29 27.862 12.342 50.446 40.204 50.446zm1840.855 80.607h60.682c8.316 0 13.186-3.377 15.059-11.137a2716.172 2716.172 0 018.961-35.996c1.796-6.984-2.271-12.278-10.015-12.278h-59.879c4.314-17.161 21.107-72.876 21.107-109.2 0-72.54-61.598-134.244-149-134.244-98.708 0-162.925 66.243-162.925 159.455 0 27.188 10.144 58.879 22.717 78.537-5.411-.309-10.83-.462-16.25-.46-75.002 0-122.244 40.685-122.244 99.887 0 55.562 43.8 77.153 85.038 91.522 36.63 12.766 70.362 18.706 70.362 47.322 0 19.295-18.56 30.618-54.884 30.618-43.098 0-66.783-20.296-72.803-27.995 4.083-3.208 10.156-10.846 10.156-23.573 0-17.802-12.505-32.332-35.73-32.332-19.65 0-36.263 16.027-40.435 37.11-31.561 25.82-66.008 42.553-114.864 42.553-48.105 0-73.074-25.021-73.074-78.263 11.278 3.434 40.645 7.558 60.053 7.558 81.455 0 136.968-37.01 136.968-111.124 0-39.854-34.987-81.709-104.204-81.709h-.157c-91.038 0-142.032 57.668-164.297 121.098a1300.764 1300.764 0 00-18.747-4.374c4.98-14.07 8.554-30.375 8.554-48.452 0-31.328-19.4-68.272-71.314-68.272-36.162 0-70.463 23.685-94.237 59.185 5.915-23.157 9.837-38.578 10.091-39.611 1.55-6.057-.972-12.803-10.418-12.803h-53.282c-7.594 0-12.953 2.683-15.112 11.33-1.448 5.766-19.755 77.597-37.577 147.54-11.226 43.61-69.298 97.897-142.287 97.897-48.113 0-73.061-26.667-73.061-79.93 12.589 5.012 40.64 9.22 60.04 9.22 84.768 0 136.968-37.008 136.968-111.123 0-39.854-34.983-81.709-104.207-81.709h-.15c-102.513 0-165.31 79.623-175.95 169.902-4.426 37.53-36.101 89.064-70.439 89.064-16.729 0-26.058-10.507-26.058-28.346 0-15.405 10.846-53.076 22.733-100.286 3.983-15.793 10.027-39.886 16.73-66.581h55.73c8.297 0 13.163-3.377 15.047-11.137 2.668-11.173 7.562-30.666 8.95-35.996 1.796-6.984-2.247-12.278-10.015-12.278h-54.803s25.23-100.674 25.832-103.26c2.429-10.237-6.137-16.144-15.1-14.26 0 0-42.359 8.292-50.215 9.93-7.896 1.598-14.025 5.936-16.878 17.319l-22.435 90.27h-44.005c-8.296 0-13.175 3.386-15.035 11.13a3732.041 3732.041 0 01-8.95 36.003c-1.82 6.985 2.244 12.279 10.003 12.279h43.155c-.307 1.235-15.587 59.363-27.947 111.418-5.818 25.033-25.303 83.61-57.212 83.61-19.061 0-27.115-9.616-27.115-30.239 0-32.477 31.97-113.779 31.97-150.67 0-49.28-26.438-77.832-80.6-77.832-34.14 0-69.54 22.044-84.541 41.391 0 0 4.551-15.837 6.109-21.926 1.662-6.432-1.788-12.75-10.233-12.75H837.25c-11.27 0-14.385 6.024-16.04 12.65-.661 2.658-19.743 77.588-38.062 149.52-12.528 49.255-42.972 90.412-75.523 90.412-16.737 0-24.19-10.503-24.19-28.341 0-15.414 9.959-53.448 21.842-100.653 14.457-57.471 27.212-104.797 28.576-110.325 1.78-7.086-1.388-13.26-10.52-13.26H670.06c-9.652 0-13.098 5.065-15.132 12.102 0 0-14.994 56.76-30.871 119.948-11.532 45.858-24.267 92.567-24.267 114.513 0 39.164 17.585 68.684 65.928 68.684 37.312 0 66.84-18.92 89.387-43.03-3.312 13.05-5.427 21.31-5.64 22.153-1.946 7.46.41 14.054 9.2 14.054h54.516c9.49 0 13.138-3.817 15.12-12.093 1.908-7.897 42.625-168.05 42.625-168.05 10.761-43.02 37.38-71.508 74.829-71.508 17.758 0 33.127 11.758 31.348 34.608-1.977 25.138-32.292 115.446-32.292 155.081 0 30 11.124 68.813 67.598 68.813 38.494 0 66.832-18.456 87.438-42.275 7.546 25.28 27.535 42.275 64.201 42.275 60.937 0 97.667-36.141 119.247-72.444 17.907 42.178 59.847 72.424 121.348 72.424 62.684 0 111.193-26.425 145.57-62.349l-10.72 42.053c-1.95 7.574 1.347 13.53 10.24 13.53h53.957c7.388 0 12.645-3.757 14.562-11.517.948-3.809 8.744-33.938 19.755-76.75 21.059-81.922 54.904-166.915 105.762-166.915 17.935 0 25.29 10.027 25.29 25.824 0 7.449-2.162 13.884-4.03 17.334-24.65-4.898-44.482 7.271-44.482 33.592 0 17.148 18.045 32.736 42.4 32.736 18.61 0 33.995-4.564 46.265-12.824a1729.855 1729.855 0 0136.15 7.86 237.795 237.795 0 00-2.829 35.904c0 65.754 46.951 121.518 131.11 121.518 65.947 0 111.204-24.125 150.27-55.054 18.78 30.727 66.195 55.558 128.402 55.558 85.26 0 133.615-44.332 133.615-102.932 0-53.04-43.541-72.562-88.443-88.815-36.5-13.186-66.944-20.356-66.944-46.152 0-21.144 16.644-30.815 45.171-30.815 18.509 0 32.405 3.986 39.826 6.068 7.36 18.42 22.588 38.817 48.585 38.817 21.999 0 31.877-17.399 31.877-33.422 0-45.612-75.98-50.393-75.98-148.214 0-60.827 34.42-111.006 105.702-111.006 49.53 0 81.874 31.408 81.874 82.1 0 41.794-25.348 116.196-25.348 116.196h-43.086c-8.28 0-13.166 3.385-15.038 11.128a3072.974 3072.974 0 01-8.966 36.004c-1.812 6.985 2.251 12.279 10.015 12.279h42.069s-43.49 160.391-43.49 189.56c0 39.164 22.072 68.676 70.435 68.676 68.406 0 111.152-44.454 129.738-109.095 1.444-4.999-1.388-9.07-6.452-9.07h-26.099c-5.209 0-8.231 2.97-9.546 8.062-5.896 22.947-20.506 47.088-49.276 47.088-16.729 0-26.054-10.507-26.054-28.342 0-15.41 10.2-51.486 22.75-100.285 5.98-23.238 16.624-66.59 16.624-66.59zm-539.375-2.74c24.19 0 35.682 16.092 35.682 35.27 0 32.437-25.158 52.217-64.508 52.217-14.082 0-33.769-3.337-45.393-7.21 4.886-29.831 26.477-80.277 74.22-80.277zm-569.035 0c26.477 0 35.67 16.092 35.67 35.27 0 32.437-25.147 52.217-64.492 52.217-14.086 0-33.773-3.337-45.394-7.21 4.858-29.831 24.004-80.277 74.216-80.277zM390.64 177C218.03 177 131 300.753 131 403.952c0 62.486 23.657 118.077 74.397 138.788 8.32 3.406 15.773.117 18.186-9.095 1.679-6.375 5.649-22.454 7.42-29.156 2.438-9.112 1.49-12.307-5.225-20.248-14.63-17.258-23.98-39.6-23.98-71.246 0-91.812 68.692-174.005 178.872-174.005 97.566 0 151.163 59.613 151.163 139.227 0 104.753-46.354 193.164-115.18 193.164-38.005 0-66.456-31.433-57.337-69.983 10.919-46.023 32.07-95.694 32.07-128.914 0-29.738-15.962-54.542-48.996-54.542-38.853 0-70.064 40.193-70.064 94.036 0 34.294 11.588 57.487 11.588 57.487s-39.76 168.465-46.729 197.969c-13.88 58.757-2.09 130.786-1.093 138.061.589 4.31 6.129 5.335 8.638 2.082 3.584-4.676 49.853-61.804 65.59-118.89 4.45-16.165 25.553-99.859 25.553-99.859 12.621 24.077 49.513 45.285 88.746 45.285 116.785 0 196.024-106.472 196.024-248.988C620.643 277.363 529.367 177 390.64 177z" fill="currentColor" fill-rule="nonzero"/></svg>
                    </div>


                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                      <textarea name="d41" style="width:200px;  height:150px;"><?php echo e(old('d41')?old('d41'):$d41); ?></textarea>
                    </p>

                    <!-- Link -->
                    <a  style="color: #CB2027;"><input type="text" name="d42" id="d42" value="<?php echo e(old('d42')?old('d42'):$d42); ?>" /></a>
                    <input type="text" name="d70" id="d70" value="<?php echo e(old('d70')?old('d70'):$d70); ?>" />
                    
                  </div>
                </div>

              </div>
              <div class="col-12 col-md-5 col-lg-4">
                
                <!-- Card -->
                <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #DA5988;">
                  <div class="card-body text-center">

                    <!-- Icon -->
                    <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #DA5988;">
                      <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M951.211 442.866c25.294 0 45.797-20.48 45.797-45.739 0-25.263-20.503-45.738-45.797-45.738-25.294 0-45.797 20.475-45.797 45.738 0 25.26 20.503 45.739 45.797 45.739zm1511.432 156.271c-6.967-4.891-12.345-5.702-16.808 3.797-76.919 166.334-206.54 83.33-193.664 90.636 28.751-13.132 104.37-73.682 92.94-157.289-6.94-51.095-50.864-73.76-97.486-65.644-81.381 14.166-111.32 101.806-96.078 179.397 2.667 13.325 7.432 24.315 12.193 35.08-91.965 74.669-128.486-66.842-132.63-83.753-.164-.905 71.01-60.137 90.805-201.281 20.748-147.928-26.516-174.864-74.847-174.023-89.436 1.556-113.603 188.124-81.135 343.615-2.72.707-15.375 7.706-35.71 8.49-14.632-45.97-77.156-86.266-93.519-70.738-40.954 38.842 9.932 114.782 45.737 120.738-21.51 132.267-156.021 99.51-130.982-66.2 43.803-81.215 77.117-201.975 71.173-274.877-2.106-25.81-21.219-60.39-64.443-58.675-83.139 3.284-92.177 189.904-82.43 322.356-.484-3.263-5.111 16.092-39.18 25.715-8.06-44.66-80.083-89.49-97.038-67.937-31.738 40.338 23.266 112.262 49.32 117.278-21.51 132.263-156.017 99.505-130.977-66.204 43.802-81.21 77.112-201.971 71.168-274.873-2.106-25.814-21.215-60.395-64.443-58.684-83.139 3.288-92.177 189.908-82.43 322.36-.489-3.314-5.224 16.679-40.683 26.142-1.187-57.942-73.474-84.511-90.839-66.023-30.948 32.956 7.088 100.574 42.275 117.282-21.508 132.263-156.016 99.505-130.977-66.204 43.803-81.21 77.117-201.971 71.17-274.873-2.103-25.814-21.216-60.395-64.445-58.684-83.134 3.288-89.824 199.29-80.078 331.738-27.383 117.14-119.214 263.426-107.284-29.616 1.179-20.557 2.465-28.361-7.8-36.058-7.691-5.982-25.181-3.103-34.742-2.866-11.62.465-14.534 7.253-17.102 17.514-5.982 26.496-7.057 52.181-7.912 87.227-.56 16.394-1.877 24.043-8.201 46.397-6.315 22.35-42.344 63.201-62.07 56.37-27.366-9.395-18.388-86.528-13.26-139.524 4.273-41.88-9.41-60.688-44.467-67.527-20.525-4.271-32.995-3.616-54.37-10.344-20.213-6.36-24.785-44.535-67.897-31.813-23.58 6.964-8.421 56.848-14.089 93.82-27.862 181.871-85.835 186.866-112.731 98.518 121.131-296.205 35.04-412.978-15.353-412.978-52.488 0-112.486 36.097-87.08 267.059-12.353-3.599-16.152-5.538-29.675-5.538-76.482 0-128.59 61.731-128.59 137.882 0 76.151 52.112 137.887 128.595 137.887 45.15 0 76.849-20.501 100.857-52.216 15.664 22.397 34.738 52.56 69.619 51.203 103.969-4.043 134.205-216.977 137.775-228.854 11.115 1.71 21.63 4.947 31.894 6.658 17.102 2.564 18.345 9.322 17.956 26.496-4.532 144.82 22.234 195.528 82.948 195.528 33.828 0 63.978-33.185 84.749-56.913 15.513 31.968 40.233 55.934 73.396 56.908 80.358 1.996 111.126-125.884 108.32-109.055-2.201 13.205 26.071 108.335 108.8 108.68 102.475.431 121.523-112.085 123.794-130.93.284-3.75.41-3.362 0 0l-.078 1.142c32.533-6.043 49.32-23.458 49.32-23.458s26.122 154.996 122.887 153.25c100.486-1.818 119.435-103.525 121.921-123.358.328-4.706.522-4.155 0 0l-.039.582c38.645-14.037 48.81-28.125 48.81-28.125s20.762 151.914 122.888 153.242c91.007 1.19 124.736-91.86 124.934-130.806 15.35.164 43.743-9.093 43.078-9.62 0 0 33.335 132.824 126.427 139.646 43.708 3.202 76.495-24.557 95.186-37.218 43.923 35.515 190.185 80.879 282.538-75.453 13.036-22.436-14.99-48.94-19.911-52.401zM400.883 712.64c-44.623 0-73.236-41.196-73.236-85.615 0-44.415 26.265-85.611 70.888-85.611 20.08 0 31.25 2.206 46.889 15.786 2.836 11.158 10.873 36.895 14.784 48.582 5.24 15.64 11.473 28.953 17.757 43.441-8.978 37.162-38.411 63.417-77.082 63.417zm108.739-154.134c-1.856-2.952-1.468-1.138-3.544-3.926-8.18-22.216-23.943-71.803-25.769-128.126-2.063-63.713 8.572-138.395 39.927-138.395 21.245 0 43.824 151.355-10.619 270.447h.005zm628.3-66.386c-5.033-37.808-5.297-206.358 35.23-201.716 22.376 9.05-14.188 168.097-35.23 201.716zm295.928 0c-5.033-37.808-5.296-206.358 35.23-201.716 22.377 9.05-14.188 168.097-35.23 201.716zm293.58 2.349c-5.037-37.813-5.296-206.362 35.226-201.72 22.376 9.05-14.188 168.1-35.226 201.72zm324.11-213.93c37.052-3.835 35.524 157.715-38.848 259.707-9.59-36.865-24.297-247.05 38.848-259.711v.004zm155.736 347.623c-11.9-60.02 18.85-99.44 50.55-103.763 11.08-1.767 27.136 5.4 30.34 18.799 5.265 25.25-.765 62.705-71.714 110.227.104.405-6.522-11.894-9.172-25.263h-.004z" fill="currentColor" fill-rule="nonzero"/></svg>
                    </div>

                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                      <textarea name="d43" style="width:200px;  height:150px;"><?php echo e(old('d43')?old('d43'):$d43); ?></textarea>
                    </p>

                    <!-- Link -->
                    <a  style="color: #DA5988;"><input type="text" name="d44" id="d44" value="<?php echo e(old('d44')?old('d44'):$d44); ?>" /></a>
                    <input type="text" name="d71" id="d71" value="<?php echo e(old('d71')?old('d71'):$d71); ?>" />

                    
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- INTEGRATIONS
    ================================================== -->
    <section class="pt-8 pt-md-11">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Badge -->
            <span class="badge badge-pill badge-success-soft mb-3">
              <span class="h6 text-uppercase"><input type="text" name="d45" id="d45" value="<?php echo e(old('d45')?old('d45'):$d45); ?>" /></span>
            </span>

            <!-- Heading -->
            <h2 class="font-weight-bold">
              <input type="text" name="d46" id="d46" value="<?php echo e(old('d46')?old('d46'):$d46); ?>" />
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-9">
              <textarea name="d47" style="width:500px;  height:150px;"><?php echo e(old('d47')?old('d47'):$d47); ?></textarea>
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
              
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
              <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero" fill="none"><path d="M401.392 126c-41.22.03-74.578 33.513-74.548 74.77-.03 41.258 33.36 74.74 74.578 74.77H476v-74.739c.03-41.258-33.359-74.74-74.608-74.801.03 0 .03 0 0 0zm0 199.429H202.578c-41.219.03-74.608 33.512-74.578 74.77-.06 41.258 33.329 74.74 74.548 74.801h198.844c41.219-.03 74.608-33.513 74.578-74.77.03-41.289-33.36-74.77-74.578-74.801z" fill="#36C5F0"/><path d="M873 400.199c.03-41.258-33.362-74.74-74.584-74.77-41.223.03-74.615 33.512-74.585 74.77V475h74.585c41.222-.03 74.614-33.513 74.584-74.801zm-198.861 0V200.77c.03-41.227-33.332-74.709-74.554-74.77-41.223.03-74.615 33.513-74.585 74.77V400.2c-.06 41.258 33.332 74.74 74.554 74.801 41.223-.03 74.615-33.513 74.585-74.801z" fill="#2EB67D"/><path d="M599.578 874c41.219-.03 74.608-33.51 74.578-74.764.03-41.254-33.36-74.733-74.578-74.764H525v74.764c-.03 41.224 33.359 74.703 74.578 74.764zm0-199.442h198.844c41.219-.03 74.608-33.51 74.578-74.764.06-41.254-33.329-74.733-74.548-74.794H599.608c-41.219.03-74.608 33.51-74.578 74.764-.03 41.285 33.329 74.764 74.548 74.794z" fill="#ECB22E"/><path d="M128 599.77c-.03 41.258 33.362 74.74 74.584 74.77 41.223-.03 74.615-33.512 74.585-74.77V525h-74.585c-41.222.03-74.614 33.513-74.584 74.77zm198.861 0V799.2c-.06 41.258 33.332 74.74 74.554 74.801 41.223-.03 74.615-33.513 74.585-74.77V599.83c.06-41.257-33.332-74.74-74.554-74.8-41.253 0-74.615 33.482-74.585 74.74 0 0 0 .03 0 0z" fill="#E01E5A"/></g></svg>
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              <input type="text" name="d72" id="d72" value="<?php echo e(old('d72')?old('d72'):$d72); ?>" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8">
              <textarea name="d48" style="width:300px;  height:150px;"><?php echo e(old('d48')?old('d48'):$d48); ?></textarea>
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up" >

            <!-- Icon -->
            <div class="icon icon-lg mb-4">
              <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero" fill="none"><path d="M828.449 821.266c-2.54 2.542-5.717 3.813-9.528 3.813-3.81 0-6.986-1.27-9.527-3.813-2.54-2.541-3.81-5.719-3.81-9.532 0-3.813 1.27-7.308 4.128-9.85 2.54-2.542 5.716-3.495 9.21-3.495 3.81 0 6.986 1.271 9.527 3.813 2.54 2.542 3.81 5.72 3.81 9.532.318 3.813-.952 6.99-3.81 9.532m-17.15-17.475c-2.222 2.224-3.175 4.766-3.175 7.625 0 3.178.953 5.72 3.176 7.944 2.223 2.224 4.763 3.177 7.939 3.177s5.716-.953 7.94-3.177c2.222-2.224 3.175-4.766 3.175-7.944 0-2.86-.953-5.719-3.176-7.625-2.223-2.225-4.763-3.496-7.939-3.496-3.176.318-5.716 1.271-7.94 3.496m12.068 14.616c-1.27.953-2.54 1.27-3.81 1.27-1.906 0-3.811-.635-5.4-2.223-1.587-1.59-2.222-3.496-2.222-5.72 0-2.224.635-4.13 1.905-5.72 1.27-1.588 3.176-2.223 5.399-2.223 1.27 0 2.54.317 3.81.953 1.589.953 2.86 2.542 3.177 5.084h-3.494c-.317-.953-.635-1.907-1.27-2.224-.635-.318-1.27-.636-1.905-.636-.953 0-1.906.318-2.541 1.271-.635.953-.953 2.224-.953 3.813s.318 2.86.953 3.495c.635.636 1.588 1.271 2.54 1.271.953 0 1.588-.318 2.224-.635l.952-1.907h3.176c-.317 1.907-1.27 3.178-2.54 4.13M857.03 677.33c0-1.271-.318-2.542-.318-3.813 0-.953-.318-1.589-.318-2.224-.317-1.907-.635-3.495-1.27-5.402-1.27-3.495-3.176-6.99-5.716-9.85-2.54-2.86-5.4-5.084-8.257-6.672-3.176-1.59-6.352-2.542-8.892-3.178-.953 0-1.588-.318-2.223-.318 3.493-15.251-.953-27.008-3.811-32.41l.635-.635c3.81-3.813 6.987-7.308 9.845-10.803l.635-.636c2.223-3.177 3.493-6.354 4.446-9.214.635-2.542 1.27-4.766 1.27-6.99v-6.037c-.317-4.767-.953-10.804-4.128-17.476-1.588-3.178-3.811-6.673-6.67-9.85a38.938 38.938 0 00-10.48-8.262c-.317-.317-.635-.317-.952-.635-8.575-12.392-18.102-22.242-26.676-29.55a192.77 192.77 0 00-12.068-9.533c-3.494-2.542-6.352-4.448-7.94-5.719-3.81-2.86-6.669-4.448-7.94-5.084-3.175-1.906-5.398-3.495-6.668-4.448-.953-.953-1.588-1.271-1.906-1.589 0 0 0-.318-.317-.953-.318-.953-.318-2.224-.318-4.449 0-3.177 0-7.943.318-14.298.635-10.168 1.588-23.83 2.858-42.578.317-6.037.317-11.756.317-16.84-.317-8.579-1.587-16.205-3.175-23.195-.318-1.589-.953-3.178-1.27-4.766-.318-1.271-.636-1.907-.953-2.542-.318-.953-.636-1.907-1.27-3.178-.318-.635-.318-1.27-.953-1.906-.636-1.589-1.27-3.178-2.223-4.766l-.318-.318-.318-.953-.317-.636c-1.588-2.86-3.493-5.401-5.399-7.626-.953-4.448-2.54-10.803-5.399-18.11-2.54-6.356-5.716-13.346-10.48-20.336-1.588-2.542-3.493-4.767-5.399-6.99l.636-.636c.952-.953 23.183-24.466 40.967-54.97 32.71-56.876 21.913-91.51 6.987-110.574l-.318-.636-.318-.635c-14.29-15.887-33.98-25.42-57.798-28.597-49.86-6.355-106.388 18.429-121.314 25.42l-27.312-29.868c-2.54-2.542-5.081-5.084-7.94-6.99-2.858-1.907-6.033-3.814-9.21-5.402-6.35-2.86-13.337-4.767-20.96-5.72-14.925-1.906-32.074 0-50.494 4.766-27.629 6.99-58.434 20.971-90.826 40.354-32.393 19.382-66.056 44.484-98.767 74.352-40.014 36.222-73.042 74.67-97.178 111.527-12.068 18.112-21.913 35.905-29.217 53.063-7.304 16.84-12.068 33.046-13.973 47.662-1.27 10.803-1.27 20.97.953 30.185.952 4.13 2.223 7.944 4.128 11.757 2.223 4.766 5.081 9.214 8.575 13.027l28.264 29.55 3.176 3.178-.318.317-.953 1.907c-.635.953-.952 1.906-1.588 2.542l-.952 1.906c-.318.954-.953 1.907-1.27 2.86l-.953 1.906c-.318.954-.953 1.907-1.27 2.86-.318.636-.636 1.271-.636 1.907l-.953 2.86c-.317.635-.317 1.27-.635 1.906-.317.953-.635 1.906-.952 3.177 0 .318-.318.636-.318.953 0 .318-.318.636-.318.954-.317.953-.635 2.224-.952 3.177 0 .636-.318 1.271-.318 1.907 0 .317-.317.953-.317 1.27 0 .636-.318 1.271-.318 1.907 0 .635-.318 1.27-.318 1.906-.317 1.271-.317 2.542-.635 4.131 0 .318 0 .636-.317 1.271v.318c0 .953-.318 1.906-.318 2.542 0 1.27-.317 2.86-.317 4.13v15.888c0 .635 0 1.27.317 1.906 0 .635 0 1.589.318 2.542v.953c0 .636.317 1.589.317 2.224 0 .636.318 1.271.318 2.225 0 .317 0 .635.317.953 0 .318.318.953.318 1.27v.636c0 .636.318 1.271.635 2.542 0 .318 0 .318.318.636.317.635.317 1.27.317 1.588l.318.636c0 .318 0 .318.317.635l.318.636v.953c0 .318 0 .318.318.636l.317.635c0 .636.318.953.318 1.589.317.635.317 1.27.635 2.542v-.318.318c0 .317 0 .317.317.635.318.953.636 1.589.636 1.907.317.635.635 1.27.952 2.542l.318.317c.318.636.318 1.271.635 1.589l.318.636c0 .317.317.635.317.953 0 .317.318.953.635 1.27l.318.636c.318.318.318.953.635 1.271.318.318.318.636.318.953.317.636.635 1.271.952 2.225l.318.317c.318.318.318.636.635.954.318.317.318.953.635 1.27.318.318.635.954.953 1.907l.318.318c.317.317.317.635.635.953.317.635.635.953.635 1.27.317.319.635.954.953 1.59v.317c.317.318.317.636.635.954.317.635.635.953.953 1.27.317.318.635.954 1.27 1.907.317.318.635.636.635.953.318.636.635.954.953 1.271.317.318.635.953.952 1.589.318.318.636.953.953 1.27.318.636.635.954 1.27 1.272l.953.953.318.318c.635.635.952 1.27 1.588 1.906l.635.636.953.953 1.905 1.906.635.636.953.953.317.318c.636.635 1.588 1.27 2.223 2.224l.318.318c.318.318.635.318.953.953.952.953 1.905 1.589 2.858 2.542l.635.318.318.318.635.317c.953.636 1.588 1.271 2.54 1.907l.318.317c.318.318.635.318.635.318l.635.636c.635.635 1.27.953 1.906 1.588l.635.318.635.636.318.317c.635.318 1.588.954 2.223 1.271.317.318.635.636 1.27.636l.635.318.318.317h.317c1.27.636 2.223 1.271 3.176 1.907l.635.318 3.811 1.906h.318l.635.318 1.905.953c.318 0 .635.318.953.318.318.317.635.317 1.27.635h.318c.635.318 1.27.636 1.905.636h.318c.635.317 1.27.635 2.223.953h.318l.635.318c.317 0 .635.317.952.317h.318c.953.318 1.905.636 3.176.954h.317c1.588.635 3.176.953 4.764 1.27h.318c1.27.318 2.858.636 4.128.954h1.27c1.27.318 2.541.635 3.811.635h1.27c.953 0 1.588.318 2.541.318 0 .318.318.636.318.953 2.223 6.037 4.446 12.075 6.986 17.794 37.474 103.902 141.322 184.608 259.778 199.542 118.455 14.617 245.168-64.184 296.616-170.628a213.825 213.825 0 006.034-12.074c5.08-5.401 9.21-10.803 11.75-16.522 4.128-3.496 5.081-10.486 4.764-16.523m-657.7-41.307h.317-.317" fill="#664F44"/><path d="M756.514 157.596c-5.72-6.369-12.392-11.145-19.7-14.648-1.271-.637-2.542-.955-4.13-1.274-.636-.318-1.272-.955-1.907-1.274-6.355-2.547-13.028-4.14-20.018-5.094-34.316-4.459-73.716 8.279-95.958 17.195-1.271.637-2.542.955-3.813 1.592-1.907.955-3.813 1.592-5.72 2.547-3.177 1.274-6.354 2.866-9.85 4.459-.635.318-.953.318-1.588.636l-6.037-7.005-2.86-3.184-2.542-2.866-.953-1.274-23.195-26.748-1.907-2.23-2.542-2.865h-.318l-6.672 1.592-7.626 1.592c-4.13-1.91-9.214-3.184-14.934-4.14-11.439-1.592-26.055 0-42.577 4.14-16.523 4.14-35.27 11.464-54.97 21.335-39.717 19.743-83.566 49.994-126.143 88.843-14.934 13.374-28.597 27.385-41.307 41.077-12.392 13.375-23.513 27.067-33.68 40.123-20.654 27.067-36.223 53.178-46.39 76.742-6.673 15.603-10.804 29.933-12.393 42.352-1.27 8.916-.953 16.877.636 23.245.635 2.23 1.27 3.821 1.906 5.732 1.589 3.821 3.495 7.005 6.037 9.871l25.737 27.067 2.86 2.866.318-.318a9.681 9.681 0 012.542-2.548l.318-.318.953-.956c.635-.955 1.588-1.592 2.224-2.547.635-.637.953-.955 1.589-1.274.635-.318.953-.955 1.588-1.274l.636-.636c.635-.319.953-.956 1.589-1.274.635-.637 1.588-1.274 2.224-1.91.317-.32.953-.638 1.27-.956h.318c.954-.637 1.59-1.274 2.542-1.91.636-.32.954-.637 1.59-1.274.952-.637 1.588-1.274 2.541-1.91.636-.32.953-.638 1.589-.956.953-.637 1.906-1.274 2.86-1.592.635-.319.953-.637 1.588-.956.953-.637 1.907-.955 2.86-1.592.635-.318.953-.637 1.589-.955l.635-.319c.953-.318 1.589-.955 2.542-1.273.318-.319.953-.319 1.27-.637.636-.319 1.272-.637 2.225-.955l1.907-.956.635-.318 4.766-1.91c.636-.32.953-.32 1.589-.638.635-.318.953-.318 1.589-.637l.635-.318c.318 0 .636-.318.953-.318.636-.319 1.271-.319 2.225-.637h.635c.953-.319 1.589-.319 2.542-.637.635-.319 1.589-.319 2.224-.637.953-.318 1.907-.318 2.86-.637.318 0 .635-.318 1.27-.318.319 0 .954 0 1.272-.319.953-.318 1.906-.318 2.86-.318.953 0 1.588-.319 2.541-.319.636 0 1.271-.318 1.907-.318h2.542c3.177 0 6.99 0 10.803.318h.635c3.813.319 8.262.956 12.71 1.911.953.318 2.224.318 3.178.637.317-.319.317-.955.635-1.274 2.542-4.14 4.766-8.598 7.308-12.737 14.299-23.883 29.55-44.9 45.12-63.368 5.401-6.369 10.803-12.1 16.204-17.832a421.464 421.464 0 0165.455-55.726c4.449-3.184 9.215-6.05 13.345-8.916 6.038-3.821 11.757-7.006 17.159-10.19 4.448-2.547 8.579-4.777 12.71-6.687 6.672-3.503 12.709-6.369 18.11-8.598l4.767-1.91c2.224-.956 4.448-1.911 6.354-2.548-1.588-.318-3.495-.318-5.083-.318h-6.355c-1.589 0-3.495 0-5.084.318-3.178.319-6.673.637-10.168.955-1.27.319-2.224.319-3.495.637 8.579-4.458 17.158-7.642 25.102-10.19a163.363 163.363 0 0115.887-3.82c6.99-1.274 13.663-2.23 19.7-2.548 4.13-.319 7.943-.319 11.438-.319 3.496 0 6.99.319 9.85.319 10.486.637 16.84 2.229 16.84 2.229-1.588-2.23-3.494-3.821-5.4-5.413-3.814-2.866-7.944-4.777-11.757-6.37-1.589-.636-2.86-.954-4.13-1.591-.954-.319-1.907-.637-2.543-.637 1.907-.319 3.495-.637 5.084-.637 1.906-.318 3.495-.318 5.402-.637 14.934-1.274 28.279 0 38.129 1.592 11.756 2.23 19.064 5.095 19.064 5.095-1.588-3.184-4.13-6.05-6.99-8.597-1.907-1.593-4.13-3.185-6.037-4.459 4.13.956 7.626 1.911 11.439 3.185 9.532 2.866 17.475 6.368 23.83 9.234l5.72 2.866c.635.319.953.637 1.27.637 5.72 3.184 8.897 5.413 8.897 5.413-.953-3.502-2.86-6.687-5.401-9.553-.636-.636-1.271-1.592-1.907-2.229h.318c.318 0 .635.319 1.27.319.319 0 .954.318 1.59.637 2.542.955 6.354 2.547 10.803 4.776.318 0 .318.319.635.319l1.907.955c1.589.955 3.177 1.592 4.766 2.866l4.766 2.866c.953.637 1.589.955 2.542 1.592 1.589 1.274 3.495 2.547 5.084 4.14 1.906 1.592 3.495 3.184 5.084 4.776l.953.955c1.271 1.274 2.542 2.548 3.495 3.821 2.224 2.548 4.13 5.414 6.037 8.28 2.224 3.502 3.813 7.642 5.402 11.782 0 .318 0 .637.318.637.953-.956 2.86-2.866 5.083-5.414 18.43-21.653 73.717-91.708 40.354-134.378" fill="#132134"/><path d="M838.03 680.275s.636-4.764-1.905-9.211c0-.318-.317-.635-.317-.635l-.318-.318-.952-.953c-.635-.635-1.27-1.27-2.223-1.905-.317-.318-.953-.636-1.588-.953-1.587-.635-3.175-1.27-5.398-1.588-1.587-.318-3.175-.318-5.08-.318h-2.54v.635c0 .318.317.636.317 1.27 0 .318 0 .636.317.636.318.953.635 2.54.953 3.811 0 0 0 .318-.318.953v.318c-.952 2.223-3.492 7.305-9.208 13.657-.953 1.27-1.905 2.224-3.176 3.494-15.876 16.516-50.17 39.702-122.57 52.724-24.45 3.494-47.312 3.811-66.365 1.27-28.578-3.493-49.853-12.704-60.014-25.091-.953-.953-1.588-2.223-2.54-3.176-.636-.953-.953-1.588-1.588-2.541-.318-.318-.318-.635-.635-.953a50.08 50.08 0 01-6.033-23.821c0-9.846 3.175-19.057 8.256-26.044 4.128-5.718 9.526-10.164 16.194-12.07 3.175-.953 6.668-1.588 10.161-1.27.635 0 1.588 0 2.858.317 2.223.318 5.716.636 9.844 1.27.317 0 .952 0 1.27.318 13.654 1.589 35.247 3.812 61.285 2.224 47.63-2.859 110.185-17.787 167.025-69.24v-.318c.317-4.446-.318-12.07-5.716-18.104-.953-.953-1.905-1.905-3.176-2.858-.635-.636-1.587-.953-2.222-1.588-.953-.318-1.588-.953-2.223-1.27l-2.858-1.906v-.318c-.317-.635-.635-1.27-1.27-1.906-14.607-22.233-34.93-35.255-43.185-41.29-3.81-2.858-6.351-4.129-6.351-4.129-17.465-10.798-20.005-14.292-18.417-43.195.635-10.481 1.588-24.139 2.858-42.878 0-2.54.317-4.764.317-6.988v-9.21c0-1.588-.317-3.176-.317-4.447 0-.635 0-1.27-.318-1.906-.317-1.588-.317-3.176-.635-4.764 0-.635-.317-1.588-.317-2.223 0-.953-.318-1.588-.636-2.541-.317-.635-.317-1.588-.635-2.223-.317-.953-.635-1.906-.635-2.859 0-.317-.317-.635-.317-.953 0-.317-.318-.635-.318-.953v-.317l-.317-.953c-.318-.635-.635-1.27-.635-1.906v-.317l-.318-.636-.317-.635c-.636-1.27-.953-2.54-1.588-3.494l-.318-.952c-.635-.953-1.27-2.224-1.905-3.177l-.317-.317-.318-.318c-.635-.635-.953-1.27-1.588-1.905l-.635-.953c-.635-.953-1.27-1.588-1.905-2.224v-2.54c-.318-1.27-.635-2.859-.953-4.447 0-.318-.317-.953-.317-1.27v-.318c0-.635-.318-.953-.318-1.588-.317-1.27-.635-2.541-1.27-3.812 0-.317-.317-.952-.317-1.27l-.953-2.859c-.318-.635-.318-1.27-.635-1.588-.318-.952-.635-1.905-1.27-2.858l-.953-1.906c-.317-.953-.952-1.906-1.27-2.858l-.953-1.906c-.635-.953-.952-1.906-1.587-2.859l-.953-1.905c-.635-.953-1.27-1.906-1.905-3.176-.318-.636-.635-.953-.953-1.588-.317-.318-.635-.953-.952-1.27-.953-.954-1.588-1.907-2.54-2.86l-.636-.317c-1.27-1.27-2.222-2.541-3.493-3.494l-.317-.317c-.635-.318-1.27-.953-1.588-1.27h-.317c-.635-.319-.953-.636-1.588-.954l-.318-.317c-.635-.318-1.587-.953-2.857-1.588-.318-.318-.953-.318-1.588-.636-2.858-.952-6.35-2.223-10.796-3.493-.318 0-.636 0-.953-.318-3.493-.953-7.62-1.906-12.066-2.54-1.588-.319-2.858-.319-4.446-.636-.635 0-1.27 0-2.223-.318h-.952c-3.493-.317-6.669-.635-10.162-.635h-.317c-4.446 0-8.891.318-13.02 1.27.953-1.588 3.811-3.493 6.352-5.081 3.492-1.906 6.668-3.177 6.668-3.177-1.905 0-3.81.318-5.716.636-.635 0-1.27.317-1.905.317-.318 0-.953 0-1.27.318h-.318c-.317 0-.635 0-.952.318-9.844 2.223-19.37 5.717-24.768 7.94l-1.906.953h-.317c-.635 0-.953 0-1.588.317 3.81-7.305 9.526-11.116 13.972-13.022.635-.317 1.588-.635 2.223-.953.317 0 .317 0 .635-.317.635-.318 1.27-.318 1.587-.636.953-.317 1.588-.317 1.588-.317h-5.08c-10.797 1.27-20.64 4.764-28.896 9.528-5.716 3.176-10.797 6.67-15.242 10.164-1.27.318-2.223.635-3.493.635-12.067 2.541-25.72 5.717-40.01 10.164-5.398 1.588-10.796 3.494-16.194 5.4-4.128 1.587-8.574 3.175-12.702 4.763-3.175 1.27-6.033 2.541-9.208 3.812-21.91 9.846-43.82 22.868-61.92 40.337l-1.906 1.906-4.763 4.764-1.905 1.905c-.635.953-1.588 1.906-2.223 2.541-3.493 3.812-6.668 7.94-9.843 12.387-2.223 3.176-4.446 6.67-6.351 10.164l-.318.318c-4.128 7.305-7.938 14.927-10.796 23.503-1.588 4.129-2.858 8.576-4.128 13.022-.317 1.27-.635 2.223-.952 3.494l-.318.635c-1.27 4.764-2.223 9.846-2.858 14.928 0 .953-.317 1.906-.317 3.176-.318 2.541-.635 5.082-.635 7.94-.318 2.541-.318 4.765-.318 7.306v9.846c0 2.858 0 5.717.318 8.575v.318c0 2.858.317 5.717.635 8.893 0 1.27.317 2.541.317 3.811v.953c0 .636 0 1.27.318 2.224.317 3.176.952 6.67 1.27 10.163 0 .953.317 1.906.317 2.859.635 2.858.953 6.034 1.588 8.893 0 0-.635-3.811-.317-9.528 0-1.27.317-2.859.317-4.13.318-3.176.953-6.987 2.223-10.48l.952-2.86c0-.317.318-.634.636-1.27.635-1.588 1.587-3.493 2.54-5.082.317 1.27.317 2.541.635 3.494v16.834c.317 10.799 1.27 23.82 3.493 34.937 0 0 .317-20.01 3.81-22.55 0 0 6.034 37.478 11.432 51.453.635 1.906 1.587 3.176 2.222 4.13v-3.812l-.635-20.645v-2.223c4.128 8.575 8.891 17.15 14.29 26.362 1.587 2.54 2.857 5.081 4.445 7.622-10.161 8.894-19.687 21.916-26.673 37.161-.953 2.541-2.223 5.082-3.175 7.623-.636 1.588-.953 2.858-1.588 4.446 0 .318-.318.953-.318 1.271-.317.953-.635 2.223-.952 3.176 0 .635-.318.953-.318 1.588-.317.953-.635 2.223-.952 3.176 0 .636-.318.953-.318 1.588l-.953 4.765c-.317 1.588-.635 3.176-.635 4.764 0 .635 0 .953-.317 1.588 0 1.27-.318 2.223-.318 3.494 0 .635 0 1.27-.317 1.905 0 1.27-.318 2.224-.318 3.494v11.117c0 1.27 0 2.54.318 4.129v.952c0 1.588.317 3.177.635 5.082 0 .635 0 .953.317 1.588 0 1.27.318 2.224.635 3.494 0 .635.318 1.27.318 1.906.317.953.317 2.223.635 3.176 0 .635.318 1.27.318 1.906.317.952.635 1.905.635 3.176.317.635.317 1.27.635 2.223.317.953.635 2.223.952 3.176.318.635.318 1.27.635 1.906.318.953.635 2.223.953 3.176.318.635.318 1.27.635 1.906.318 1.27.953 2.54 1.27 3.493.318.636.318.953.635 1.588l4.763 10.482c.318.635.635.953.953 1.588l1.905 3.811c.318.635.635 1.27 1.27 1.906.635.953 1.27 2.223 1.906 3.176.317.635.952 1.27 1.27 1.906.635.953 1.27 2.223 2.222 3.176.636.635.953 1.27 1.588 2.223.635.953 1.588 2.223 2.223 3.176.635.635.953 1.27 1.588 2.224.952.952 1.587 2.223 2.54 3.176.635.635.953 1.27 1.588 1.905.952 1.27 1.905 2.224 3.175 3.494l1.588 1.588c1.587 1.588 3.175 3.494 4.763 5.082 0 0-.953-1.27-2.223-3.811-.318-.318-.635-.953-.635-1.588l-.953-1.906c-.317-.635-.635-1.27-.952-2.223-2.54-5.717-4.763-13.975-4.446-22.869l2.858 3.812c.953 2.223 2.54 5.082 4.128 8.258.635.953 1.27 2.223 1.588 3.176 2.54 4.446 5.08 9.528 8.256 14.292 3.81 6.035 7.62 11.752 11.749 17.152 0 0-4.764-10.164-6.351-16.834-.318-1.906-.635-3.494-.318-4.446.318.317.635.952 1.27 1.27.318.318.635.953 1.27 1.27.636.953 1.588 2.224 2.858 3.812l.635.635c.636.635.953 1.588 1.588 2.223.635.953 1.27 1.906 2.223 2.859 6.668 8.575 15.877 20.01 22.228 26.044 2.222 1.906 4.128 3.494 5.398 4.13l-9.209-16.517c20.958 17.151 107.963 39.067 193.38 14.61 10.48-2.858 20.64-6.67 30.802-11.116 6.033-2.54 12.066-5.717 18.1-8.893l.952-.635c4.128-2.224 8.256-4.765 12.384-7.306 3.175-1.905 6.35-4.129 9.209-6.034a238.2 238.2 0 0015.241-11.434c.318-.318.636-.636.953-.636 4.763-4.129 9.526-8.575 13.654-13.022 5.716-6.034 10.796-12.07 15.242-18.104l.318-.317c1.27-1.588 2.222-2.859 3.175-4.447l.317-.318c.318-.635.636-.952.953-1.588 1.588-2.223 2.858-4.129 4.446-6.352.317-.635.635-.953.952-1.588.635-1.27 1.27-2.223 2.223-3.494.635-.953.953-1.588 1.588-2.54.635-.953 1.27-1.906 1.587-2.86.953-1.587 1.906-3.493 2.858-5.081l.953-1.906 1.905-3.811.953-1.906.317-.635c.635-1.588 1.588-3.176 2.223-4.764v-.318c2.858-2.54 4.763-5.082 6.668-7.305.318-.318.635-.635.635-.953 1.906-6.034 3.176-10.799 3.176-15.245m-510.919-61.617c0-.318 0-.636-.317-1.27-.953-5.4-1.905-11.117-2.223-16.834v-1.27c-.953.317-1.905 1.587-3.175 3.175-.318.636-.953 1.27-1.27 2.224-2.858 5.4-5.399 13.022-5.399 13.022.318-2.541.635-5.082.635-7.623v-.953c.318-2.54.636-5.4.953-7.94v-.953c.318-3.176.953-6.035 1.588-8.893 0-.318 0-.635.317-1.27v-.318c0-.318 0-.635.318-.953 0-.635.317-.953.317-1.588.318-2.223.953-4.447 1.27-6.67.318-1.906.636-3.811.953-5.4v-.635c0-.317 0-.635.318-.635v-.635c0-.318.317-.953.317-1.27 0-.318 0-.636.318-.953 0-.636.317-1.27.317-1.589 0-.317.318-.952.318-1.27 0-.635.317-1.27.317-1.588 0-.318 0-.635.318-.953 0-.318 0-.635.317-.635 0-.635.318-.953.318-1.27v-.953l-.635.635c-.635.317-.953.953-1.588 1.27l-.635.635c-.635.636-1.27 1.27-1.588 1.906l-.317.318-1.905 2.858-.318.318c0 .318-.317.318-.317.635l-.953 1.906v.635c-.318.953-.953 1.906-1.27 2.859-.953 2.54-1.905 5.081-2.54 7.305-.318.635-.318 1.588-.635 1.905-.318 1.27-.636 2.541-.636 2.859v.318-.318c0-.953 0-1.588.318-2.541 0-1.588.318-3.494.318-5.082 0-1.27.317-2.858.635-4.129 0-.317 0-.953.317-1.27 0-.635.318-1.27.318-1.906 0-.635.317-1.27.317-1.906v-.952c0-.636.318-1.589.318-2.224v-2.223c0-.318 0-.635.317-.953.318-.953.635-2.223.635-3.176v-.318c.318-.635.318-1.588.635-2.223v-.318c.318-1.588.953-3.176 1.27-4.764v-.635c0-.318 0-.635.318-.953.635-2.54 1.588-5.082 2.223-7.305v-.318c.635-1.905 1.588-4.129 2.223-6.034v-.318c.317-.953.635-1.588.952-2.54.635-1.271.953-2.542 1.588-3.812 0-.318.317-.953.953-2.223.317-.318.317-.953.635-1.27.317-.636.635-1.271.952-2.224l.318-.635 5.398-9.846c.317-.318.317-.953.635-1.27v-.319l.318-.635c.635-.953 1.27-2.223 1.905-3.176.952-1.588 1.587-3.176 2.54-4.447 1.588-2.858 2.858-5.399 3.81-6.67.318-.952.636-1.27.953-1.587-.317 0-1.905-1.27-4.445-2.859-3.176-1.906-7.621-4.447-13.02-6.988-1.905-.952-3.492-1.588-5.398-2.54-2.222-.953-4.763-1.906-7.303-2.859-.635-.318-1.27-.318-1.905-.635-2.223-.635-4.128-1.27-6.35-1.906-1.589-.317-3.176-.635-4.446-.953-1.27-.317-2.54-.317-3.81-.635-.636 0-1.271 0-1.906-.318-.635 0-1.27 0-1.905-.317-1.588 0-3.493-.318-5.081-.318h-2.54c-3.81 0-7.304.318-10.797.953h-.635c-6.35.953-12.384 2.541-18.417 4.764-1.905.635-3.81 1.588-6.033 2.541-.635.318-.953.635-1.588.635l-1.905.953c-5.716 2.859-11.114 6.67-16.194 10.8h-.318c-4.445 3.493-8.256 7.622-11.749 11.75l-2.858 3.812c-1.27 1.588-2.222 3.176-3.175 4.764-1.905 2.859-3.81 6.035-5.398 9.211-.635 1.27-1.27 2.224-1.588 3.494 0 .318-.317.318-.317.635-3.176 7.623-5.716 15.563-6.669 24.139-.317 1.588-.317 3.176-.635 5.082v.635c0 1.27-.317 2.54-.317 4.129v5.717c0 1.27 0 2.54.317 3.811v1.588c0 .953.318 1.906.318 2.859v.318c0 .635 0 .952.317 1.588 0 .952.318 1.905.318 2.54 0 .636.317 1.271.317 1.906.318.953.318 1.588.635 2.541 0 .635.318 1.27.636 1.906v.317l.317.636v.635l.318.635c.317.635.317 1.27.635 1.906.317.635.317 1.588.635 2.223.317.635.635 1.27.635 2.223l.317.636c.318.635.318.952.635 1.588.318.635.635 1.27.953 2.223l.953 1.906c.317.317.317.635.635.953.317.317.317.635.635.952l.952 1.906c.318.635.635 1.588 1.27 2.223.318.636.636 1.27.953 1.588.318.636.953 1.589 1.27 2.224.318.635.635.953.953 1.588.317.635.953 1.588 1.588 2.223.317.635.635.953.952 1.27.635.636.953 1.589 1.588 2.224.317.317.635.953.953 1.27.635.636 1.27 1.588 1.905 2.224.317.317.635.635.952 1.27.635.635 1.27 1.588 1.906 2.223l.952.953c.635.635 1.27 1.588 2.223 2.224l.953.952 2.222 2.224c.318.317.635.635.953.635.635.635 1.588 1.27 2.54 2.223.318.318.635.318.953.635.953.636 1.588 1.27 2.54 1.906.318.318.635.318.635.635l2.858 1.906.635.318 2.858 1.905.635.318c.953.635 2.223 1.27 3.175 1.906l.636.317c.952.635 2.222 1.27 3.175 1.588l.635.318c1.27.635 2.223.953 3.493 1.588l.317.318c1.27.635 2.54.952 3.493 1.588h.318c1.27.317 2.54.952 3.81 1.27h.318c.635.318 1.27.318 1.905.635.635.318 1.27.318 2.223.636h.317c1.27.317 2.858.635 4.128.952 1.27.318 2.858.636 4.128.636 4.446.635 8.891.952 13.337 1.27h3.175c1.588 0 2.858 0 4.446-.318 1.905-.317 4.128-.317 6.35-.635 1.906-.317 3.811-.635 5.399-.953 2.858-.635 5.716-1.27 8.256-2.223 8.256-2.223 15.242-5.4 19.687-8.893 0 0-2.858-12.705-5.08-25.41-.636-.634-.953-1.905-1.27-3.175" fill="#90694C"/><path d="M531.06 146.132l-.953-12.737 6.352-14.011 2.541-.637c-4.129-1.91-9.21-3.184-14.927-4.14-11.433-1.592-26.042 0-42.557 4.14s-35.252 11.464-54.943 21.335c-39.699 19.743-83.526 49.994-126.084 88.843-14.926 13.374-28.583 27.385-41.286 41.077-12.386 13.375-23.502 27.067-33.665 40.123-20.643 27.067-36.205 53.178-46.368 76.742-6.67 15.603-10.798 29.933-12.386 42.352-1.27 8.916-.953 16.877.635 23.245.635 2.23 1.27 3.821 1.906 5.732 1.588 3.821 3.493 7.005 6.034 9.871l25.725 27.067 2.858 2.866.318-.318a9.679 9.679 0 012.54-2.548l.318-.318.953-.956c.635-.955 1.588-1.592 2.223-2.547.635-.637.953-.955 1.588-1.274.635-.318.953-.955 1.588-1.274l.635-.636c.635-.319.953-.956 1.588-1.274.635-.637 1.588-1.274 2.223-1.91.318-.32.953-.638 1.27-.956h.318c.953-.637 1.588-1.274 2.54-1.91.636-.32.953-.637 1.589-1.274.952-.637 1.588-1.274 2.54-1.91.635-.32.953-.638 1.588-.956.953-.637 1.906-1.274 2.859-1.592.635-.319.952-.637 1.588-.956.952-.637 1.905-.955 2.858-1.592.635-.318.953-.637 1.588-.955l.635-.319c6.034-16.877 15.244-35.664 27.313-54.77 14.609-23.564 33.347-48.402 55.578-73.24 13.974-15.603 29.218-31.206 45.733-46.172 21.279-19.424 43.192-36.938 64.789-52.223 14.609-10.19 28.9-19.424 42.874-27.385 1.27-.637 2.541-1.592 4.129-2.23a190.921 190.921 0 0111.116-6.05c7.94-4.14 15.88-7.96 23.501-11.145l-3.81-4.458-.636-.636-4.764-5.414-26.36-31.843.318-22.927-.318-.319 18.738-5.731 35.57 18.15" fill="#2F83C1"/><path d="M838.03 679.432s.635-4.76-1.905-9.202c0-.317-.317-.635-.317-.635l-.318-.317-.952-.952c-.635-.635-1.27-1.27-2.223-1.904-.317-.317-.952-.634-1.587-.952-1.588-.634-3.175-1.269-5.398-1.586-1.587-.317-3.175-.317-5.08-.317h-2.54v.634c0 .318.318.635.318 1.27 0 .317 0 .634.318.634.317.952.635 2.538.952 3.808 0 0 0 .317-.317.951v.318c-.953 2.22-3.493 7.298-9.208 13.644-.952 1.269-1.905 2.22-3.175 3.49-15.875 16.5-50.164 39.662-122.554 52.671-24.447 3.49-47.307 3.808-66.357 1.27-28.574-3.49-49.847-12.692-60.007-25.067-.952-.952-1.587-2.221-2.54-3.173-.635-.952-.952-1.586-1.587-2.538-.318-.318-.318-.635-.635-.952a49.997 49.997 0 01-6.032-23.798c0-9.836 3.174-19.038 8.254-26.018 4.128-5.711 9.525-10.154 16.193-12.057 3.175-.952 6.667-1.587 10.16-1.27.635 0 1.587 0 2.857.318 2.223.317 5.715.634 9.843 1.269.317 0 .952 0 1.27.317 13.652 1.587 35.242 3.808 61.277 2.221 47.624-2.855 110.171-17.768 167.003-69.17v-.318c.317-4.442-.318-12.057-5.715-18.086-.952-.952-1.905-1.904-3.175-2.856-.635-.634-1.587-.952-2.222-1.586-.953-.318-1.588-.952-2.223-1.27l-2.857-1.903v-.318c-.318-.634-.635-1.269-1.27-1.903-14.605-22.211-34.925-35.22-43.18-41.25-3.81-2.855-6.35-4.124-6.35-4.124-17.462-10.788-20.002-14.278-18.415-43.153.635-10.47 1.588-24.114 2.858-42.835 0-2.538.317-4.76.317-6.98v-9.202c0-1.587-.317-3.173-.317-4.442 0-.635 0-1.27-.318-1.904-.317-1.587-.317-3.173-.635-4.76 0-.634-.317-1.586-.317-2.22 0-.953-.318-1.587-.635-2.539-.318-.635-.318-1.587-.635-2.221-.318-.952-.635-1.904-.635-2.856 0-.317-.318-.634-.318-.952 0-.317-.317-.634-.317-.952v-.317l-.318-.952c-.317-.634-.635-1.269-.635-1.904v-.317l-.317-.634-.318-.635c-.635-1.27-.952-2.538-1.587-3.49l-.318-.952c-.635-.952-1.27-2.221-1.905-3.173l-.317-.318-.318-.317c-.635-.634-.952-1.269-1.587-1.904l-.635-.952c-.635-.951-1.27-1.586-1.905-2.22l-2.54-2.539c-.953-.635-1.905-1.27-2.858-1.586-.317-.318-.635-.318-.952-.318l-1.905-.952c-.318 0-.635-.317-.953-.317-.635-.317-1.27-.317-1.587-.635-.318 0-.635-.317-1.27-.317s-.953-.317-1.588-.317h-6.984c-.318 0-.635 0-.953.317-.317 0-.635 0-.952.317-.635 0-1.27.318-2.223.635h-.635c-1.905.635-3.492 1.27-5.397 1.904l-.635.317c-.635.317-1.27.635-2.223.952l-.952.317-1.905.952-.953.635-1.905.952-.952.634c-.635.318-1.27.952-1.905 1.27l-.635.317c-.635.634-1.588.952-2.223 1.586l-.317.318c-.953.634-1.588 1.269-2.54 1.586-1.588.952-3.175 2.221-4.763 3.173-1.27.952-2.54 1.904-4.127 2.856l-.635.317a28.989 28.989 0 01-4.128 2.538l-.635.318c-1.27.952-2.857 1.586-4.127 2.538l-.635.317c-1.27.952-2.857 1.587-4.445 2.221l-.635.318c-1.587.634-2.857 1.269-4.445 1.904l-.635.317c-1.587.634-3.175.952-4.762 1.586h-.318c-1.587.318-3.492.635-5.08.952-2.857.318-6.032.635-8.89.635-4.762 0-9.525-.317-14.605-.952l-4.762-.952c-.635 0-1.27-.317-1.588-.317-4.127-.952-8.572-1.904-12.7-2.856-1.904-.317-3.492-.952-5.397-1.27-2.857-.634-5.715-1.268-8.89-1.903-.635 0-1.27-.317-1.587-.317-.318 0-.953-.317-1.27-.317-.635 0-1.27-.318-1.905-.318s-1.27-.317-1.905-.317h-.635c-.635 0-1.27-.317-1.588-.317-1.27-.318-2.54-.635-4.127-.635-.318 0-.953 0-1.27-.317-.953 0-1.905-.318-2.858-.318-.635 0-.952 0-1.587-.317-.953 0-1.588-.317-2.54-.317h-14.605c-1.587 0-2.857.317-4.445.317h-1.27c-.952 0-1.905.317-2.857.317h-.318c-.635 0-.952.318-1.587.318-.953.317-1.905.317-2.858.634-.635 0-1.27.318-1.587.318-.953.317-1.905.634-2.858.634-.635 0-.952.318-1.587.635-.953.317-2.223.634-3.175.952-.635.317-.953.317-1.27.634-1.588.635-3.175 1.27-4.445 1.904-12.065 6.98-22.543 16.5-30.48 27.288-2.857 3.807-5.397 7.615-7.62 11.422-2.54 4.125-4.445 8.568-6.35 13.01-.635 1.269-.952 2.538-1.587 3.807-.635 2.221-1.588 4.442-2.223 6.664 0 .317 0 .634-.317.634-.635 2.539-1.27 5.077-1.905 7.933-.635 2.855-.953 5.394-1.27 8.25-.318 1.586-.318 2.855-.318 4.442a76.434 76.434 0 000 12.057v.952c0 .952 0 1.904.318 3.173.317 2.855.635 5.711 1.27 8.567.317.952.635 1.904.635 3.173.317.952.317 1.904.635 2.856 1.905 7.297 4.762 13.96 8.255 19.672 13.017 22.528 34.607 36.172 50.482 43.47 6.032 2.538 12.382 5.077 19.05 7.298l-.635.634c-1.27.318-2.54.635-4.128.952-2.222.635-5.08 1.587-7.937 2.539-3.175.952-6.985 2.538-10.795 4.125-10.16 4.124-21.59 10.153-31.75 18.403-1.27.952-2.54 2.22-3.81 3.173a54.098 54.098 0 00-6.032 6.028l-.635.635-.953.952c-.635.952-1.587 1.586-2.222 2.538l-.953.952c-.952 1.27-1.905 2.539-2.54 3.808-.952 1.269-1.587 2.538-2.54 3.807-6.032 10.471-9.525 23.163-8.572 38.394v-.635c0-.317 0-.635.317-.952v-.317c0-.318.318-.635.318-1.27v-.317c0-.317.317-.952.317-1.586 0-.635.318-.952.635-1.587v-.317c.318-.635.318-1.27.635-1.904v-.317c.318-.635.318-1.27.635-1.904v-.317c.318-.635.635-1.27.953-2.221l.317-.318c.318-.634.635-1.586 1.27-2.22.635-1.27 1.27-2.222 1.905-3.491.318-.317.635-.952.953-1.27l.317-.316 1.905-2.856c.635-.635 1.27-1.587 1.905-2.221l.635-.635c.635-.634.953-1.269 1.588-1.586l.635-.635c.635-.635 1.587-1.27 2.222-2.221 0 0-13.652 31.095-7.62 55.527v-4.759c0-.635 0-1.27.318-1.904 0-.635 0-1.27.317-1.904v-.317c0-.635.318-1.587.318-2.221v-.635c.317-.952.317-1.586.635-2.538v-.318c.317-.951.635-1.903.635-2.538 0-.317.317-.634.317-.952l.318-.634c.317-.635.635-1.587.952-2.221.318-.952.953-1.904 1.588-2.856 0-.317.317-.635.317-.635l1.905-2.855s-.635 7.615-.635 16.816c0 1.587 0 2.856.318 4.443 0 .951 0 1.903.317 2.855.635-9.836 2.54-19.038 5.08-27.605-2.54 8.567-4.445 17.769-5.08 27.605-.317 6.346-.317 12.692.318 19.355.952 11.106 3.81 23.163 8.572 35.538 0 0-4.445-14.279 1.905-28.557l1.905 3.808c.635 4.124 1.27 10.153 2.54 16.816 1.27 11.106 6.35 44.422 29.21 67.585 0 0-8.573-11.105-7.303-25.384.953 1.904 1.905 3.49 2.54 5.077 3.81 7.298 11.43 20.624 20.003 30.143 0 0-6.668-13.009-5.08-15.865 0 0 22.224 27.605 29.21 30.144l-9.208-15.23-.318-.318c32.068 23.48 76.517 32.047 131.127 16.817 9.525-2.539 19.05-6.029 29.21-10.154 6.032-2.538 12.064-5.711 18.097-8.884l.952-.635c4.128-2.22 8.255-4.76 12.383-7.298 3.175-1.903 6.35-4.124 9.207-6.028 5.08-3.49 10.16-7.298 15.24-11.423.317-.317.635-.635.952-.635 4.763-4.124 9.525-8.567 13.653-13.009 5.715-6.028 10.795-12.057 15.24-18.086l.317-.317c1.27-1.587 2.223-2.856 3.175-4.442l.318-.318c.317-.634.635-.951.952-1.586 1.588-2.221 2.858-4.125 4.445-6.346.318-.635.635-.952.953-1.587.635-1.269 1.27-2.22 2.222-3.49.635-.952.953-1.586 1.588-2.538.635-.952 1.27-1.904 1.587-2.856.953-1.586 1.905-3.49 2.858-5.077l.952-1.903 1.905-3.808.952-1.904.318-.634c.635-1.587 1.587-3.173 2.222-4.76v-.317c2.858-2.539 4.763-5.077 6.668-7.298.317-.317.635-.635.635-.952 2.857-4.125 4.127-8.884 4.127-13.326M324.638 598.52c-.953.318-1.905 1.587-3.175 3.173-.318.635-.953 1.27-1.27 2.222-2.858 5.394-5.398 13.009-5.398 13.009.318-2.539.635-5.077.635-7.615v-.952c.318-2.539.635-5.394.953-7.933v-.952c.317-3.173.952-6.028 1.587-8.884 0-.317 0-.635.318-1.27v-.317c0-.317 0-.634.317-.951 0-.635.318-.952.318-1.587.317-2.221.952-4.442 1.27-6.663.317-1.904.635-3.808.952-5.394v-.635c0-.317 0-.634.318-.634v-.635c0-.317.317-.952.317-1.27 0-.317 0-.634.318-.951 0-.635.317-1.27.317-1.587 0-.317.318-.952.318-1.269 0-.634.317-1.269.317-1.586 0-.318 0-.635.318-.952 0-.317 0-.635.317-.635 0-.634.318-.952.318-1.269v-.952l-.635.635c-.635.317-.953.952-1.588 1.269l-.635.635c-.635.634-1.27 1.269-1.587 1.903l-.318.318-1.905 2.855-.317.318c0 .317-.318.317-.318.634l-.952 1.904v.635c-.318.951-.953 1.903-1.27 2.855-.953 2.539-1.905 5.077-2.54 7.298-.318.635-.318 1.587-.635 1.904-.318 1.27-.635 2.538-.635 2.856v.317-.317c0-.952 0-1.587.317-2.539 0-1.586.318-3.49.318-5.077 0-1.269.317-2.855.635-4.124 0-.318 0-.952.317-1.27 0-.634.318-1.269.318-1.903 0-.635.317-1.27.317-1.904v-.952c0-.635.318-1.587.318-2.221v-2.221c0-.318 0-.635.317-.952.318-.952.635-2.221.635-3.173v-.317c.318-.635.318-1.587.635-2.222v-.317c.318-1.586.953-3.173 1.27-4.76v-.634c0-.317 0-.635.318-.952.635-2.538 1.587-5.077 2.222-7.298v-.317c.635-1.904 1.588-4.125 2.223-6.029v-.317c.317-.952.635-1.586.952-2.538.635-1.27.953-2.539 1.588-3.808 0-.317.317-.952.952-2.221.318-.317.318-.952.635-1.27.318-.634.635-1.268.953-2.22l.317-.635c-.317-.317-.952-.317-1.27-.634h-.317l-.635-.318c-2.858-1.269-6.033-2.538-9.208-3.49h-.635c-2.222-.635-4.127-.952-6.35-1.27-1.27 0-2.54-.317-3.81-.317h-3.175c-1.587 0-3.175.318-4.762.318-.635 0-.953 0-1.588.317-.635 0-1.587.317-2.222.317-.318 0-.635 0-.953.318-.635 0-.952.317-1.587.317-.953.317-2.223.635-3.175.952-.318 0-.953.317-1.27.317-1.27.635-2.858.952-4.128 1.587-.635.317-.952.634-1.587.634l-1.905.952-.635.317c-.635.318-1.27.635-1.905 1.27-.635.317-1.27.634-1.905 1.269-.635.317-1.27.952-1.905 1.269-.317.317-.952.635-1.27.952-.952.952-2.222 1.904-3.175 2.856l-1.587 1.586c-.953.952-1.588 1.904-2.54 2.856l-.318.317c-.317.635-.952.952-1.27 1.587l-.952.951c-1.588 2.222-3.175 4.76-4.445 7.298-.318.318-.318.635-.635.952-.635 1.27-.953 2.539-1.588 3.808-.317.634-.317.952-.635 1.586-.317 1.27-.952 2.539-1.27 4.125v1.27c-.317.951-.317 1.903-.635 2.855 0 .635 0 .952-.317 1.587 0 .634 0 .951-.318 1.586v1.27c0 1.586-.317 3.172 0 4.759 0 1.269 0 2.538.318 3.807v.635c0 .634.317 1.269.317 1.904.318 2.538.953 4.76 1.588 7.298.635 1.903 1.27 3.49 1.905 5.076 1.27 3.173 2.857 6.029 4.762 8.885 3.81 5.711 8.89 10.788 14.923 14.595 3.174 2.221 6.984 3.808 10.794 5.077 3.493 1.27 7.303 2.221 11.43 2.539.953 0 1.905.317 2.54.317h4.128c1.27 0 2.54-.317 3.81-.317.635 0 1.587 0 2.222-.318 1.905-.317 3.493-.634 5.398-.952h.317c.635-.317 1.27-.317 2.223-.634 2.222-.635 4.445-1.587 6.35-2.539l.317-.317c.635-.317 1.27-.635 1.588-.635-.953-5.394-1.905-11.105-2.223-16.816 1.588-.635 1.588-.952 1.588-1.27" fill="#FCE9CD"/><path d="M539.05 150.2l.9.6-.9-.6z" fill="#4D9ED7"/><path d="M817.683 667.351c0-.318 0-.636-.316-.636-.317-.636-.317-.954-.317-1.272-1.584-5.09-3.484-8.907-5.385-11.77-2.217-3.5-4.117-5.408-4.117-5.408l.95-3.818c.317-1.59.634-3.18.634-4.771 1.266-11.452-1.584-20.36-4.118-25.45-.317-.954-.633-1.59-.95-2.226-1.9 1.272-3.484 2.545-5.385 3.817-34.206 23.223-72.53 38.174-114.023 44.536-28.505 4.454-58.595 4.772-89.951.954l.633.318s-19.003 2.545-24.071 20.678l.317.318L570 694.709c.633 16.542 7.918 26.721 16.47 32.13 8.868 3.499 19.637 6.044 31.673 7.634 20.588 2.545 44.659 1.909 68.73-1.909 32.307-4.453 77.916-21.631 110.54-43.899 7.284-5.09 14.252-10.498 19.954-15.906l.316-.318.317-.318c0-2.227-.317-3.5-.317-4.772" fill="#FFF"/><g fill="#F2D2AC"><path d="M756.467 510.312c-17.459-10.817-19.998-14.317-18.411-43.27.635-10.5 1.587-24.181 2.857-42.953 0-2.546.317-4.773.317-7v-9.227c0-1.59-.317-3.182-.317-4.454 0-.637 0-1.273-.318-1.91-.317-1.59-.317-3.181-.635-4.772 0-.636-.317-1.59-.317-2.227 0-.955-.318-1.59-.635-2.545-.317-.637-.317-1.591-.635-2.228-2.54-3.818-5.396-7-8.888-9.863l-.635-.636-.635-.318h-.317c-.635-.318-.952-.637-1.587-.955-.635-.318-1.27-.636-1.587-.954-5.08-3.182-11.11-5.091-17.141-6.045-3.492-.637-6.984-.637-10.476-.637-1.587 0-3.491.318-5.078.318-4.444.637-8.888 1.591-13.65 2.864-1.587.954-3.174 2.227-4.761 3.182-1.27.954-2.54 1.909-4.127 2.863l-.635.318a28.968 28.968 0 01-4.126 2.546l-.635.318c-1.27.954-2.857 1.59-4.127 2.545l-.635.318c-1.27.955-2.856 1.591-4.444 2.227l-.634.319c-1.588.636-2.857 1.272-4.444 1.909l-.635.318c-1.587.636-3.175.954-4.762 1.59h-.317c-1.587.319-3.492.637-5.079.955-2.857.318-6.031.636-8.888.636-4.761 0-9.523-.318-14.602-.954l-4.761-.955c-.635 0-1.27-.318-1.587-.318-4.127-.954-8.57-1.909-12.697-2.863-1.905-.318-3.492-.955-5.397-1.273-2.857-.636-5.713-1.273-8.888-1.909-.635 0-1.27-.318-1.587-.318-2.54 0-5.079.318-7.3.636h-.636c-7.3.955-14.284 2.546-21.585 5.091-.317 0-.635.318-1.27.318-1.27.318-2.221.955-3.491 1.273-1.587.636-2.857 1.272-4.444 1.909-10.475 4.454-20.316 10.818-29.838 18.772-3.81 3.181-7.301 6.681-10.793 10.181-5.079 5.409-9.523 11.136-13.65 17.181-.317.318-.317.637-.634.955-2.222 3.181-4.127 6.681-5.714 9.863-.635 1.273-1.27 2.545-1.905 3.5v.318c-1.904 4.136-3.491 7.954-4.761 12.09 0 .319 0 .637-.317.637-.318.636-.318 1.272-.635 1.909-.635 1.909-1.27 3.818-1.587 5.727-.635 1.909-.953 3.818-1.27 6.045 0 .318-.318.955-.318 1.273-.317 1.272-.317 2.545-.634 3.5-.635 4.454-.953 8.908-1.27 13.363v3.181c1.904 7.318 4.761 14 8.253 19.727 13.015 22.59 34.6 36.271 50.471 43.589 6.031 2.545 12.38 5.09 19.046 7.318l.317.318.318-.318c.952-.637 1.587-1.273 2.54-1.91.317-.317.634-.317.951-.636l2.857-1.909c.318-.318.635-.318.953-.636l2.856-1.909c.318-.318.635-.318.953-.636.952-.637 1.904-1.273 3.174-1.91.317-.317.635-.317.952-.636.953-.636 2.222-1.272 3.175-1.909.317-.318.634-.318.952-.636.952-.636 2.222-1.273 3.174-1.909.318-.318.952-.318 1.27-.636.952-.637 2.222-1.273 3.174-1.91.318-.318.952-.636 1.27-.636.952-.636 2.222-1.272 3.492-1.909.634-.318.952-.636 1.587-.636 1.27-.636 2.222-1.273 3.491-1.59.635-.319.953-.637 1.588-.637 1.27-.637 2.222-.955 3.491-1.591l1.905-.955c1.27-.636 2.222-.954 3.492-1.59.634-.319 1.27-.637 2.222-.955 1.27-.318 2.222-.954 3.491-1.273.635-.318 1.587-.636 2.222-.954 1.27-.318 2.222-.955 3.492-1.273.952-.318 1.587-.636 2.54-.954 1.27-.318 2.221-.955 3.491-1.273l2.857-.954c.952-.319 2.222-.637 3.174-1.273.953-.318 2.222-.636 3.175-.955.952-.318 2.222-.636 3.174-.954 1.27-.318 2.54-.636 3.492-.955.952-.318 1.904-.636 3.174-.954 1.27-.318 2.54-.636 4.126-1.273.635-.318 1.27-.318 1.905-.636 5.079-13.045 20.633-45.498 46.98-48.998 2.856-.318 5.396-.636 7.935-.636h1.905c-.318-1.91-.635-3.818-.635-6.046-.952-14 3.492-25.771 9.523-26.09 4.761-.318 8.57 6.682 9.205 8.91 1.905 4.135 3.174 9.544 3.492 15.59.317 5.408-.318 10.5-1.27 14.953.635.637.952 1.273 1.587 1.591 6.031 7.636 6.984 17.818 6.666 25.454 2.222-.318 4.762-.318 7.301-.637.635 0 1.27 0 1.905-.318h1.27c2.856-.318 6.03-.636 9.205-.636 6.983-.636 13.967-.955 21.268-1.273-4.127-2.227-6.666-3.5-6.666-3.5m66.342 195.992c-11.427 10.182-23.49 18.454-35.552 25.136-6.031 3.181-12.062 6.045-17.776 8.59-13.014 5.727-25.394 9.545-36.504 12.409-24.442 6.045-41.266 6.045-41.266 6.045 13.332 7.318 30.156 7.318 41.583 6.363 7.936-.636 13.332-2.227 13.332-2.227-.317 4.773-.952 9.227-1.587 13.681-.952 4.773-2.222 8.91-3.809 12.727v.318c-1.905 4.773-4.444 8.909-6.983 12.727-.318.318-.635.955-.953 1.273l.953-.637c4.126-2.227 8.253-4.772 12.38-7.317 3.174-1.91 6.348-4.137 9.205-6.046a238.158 238.158 0 0015.236-11.454c.318-.318.635-.636.953-.636 4.761-4.136 9.522-8.59 13.649-13.045 5.714-6.045 10.793-12.09 15.237-18.136l.317-.318c1.27-1.59 2.222-2.863 3.174-4.454l.318-.318c.317-.637.635-.955.952-1.591 1.587-2.227 2.857-4.136 4.444-6.364.317-.636.635-.954.952-1.59.635-1.273 1.27-2.228 2.222-3.5.635-.955.953-1.591 1.587-2.546.635-.954 1.27-1.909 1.588-2.863.952-1.591 1.904-3.5 2.856-5.09l.953-1.91 1.904-3.818.953-1.909.317-.636c.635-1.591 1.587-3.182 2.222-4.773-1.27.318-1.905.955-2.857 1.91M533.314 578.081c-3.174.955-6.983 2.546-10.792 4.136-10.158 4.137-21.585 10.182-31.743 18.454-1.27.955-2.54 2.227-3.81 3.182a54.166 54.166 0 00-6.03 6.045l-.635.637-.953.954c-.634.955-1.587 1.59-2.222 2.545l-.952.955c-.952 1.273-1.904 2.545-2.54 3.818-.952 1.273-1.586 2.545-2.539 3.818-6.03 10.5-9.523 23.226-8.57 38.498v-.636c0-.318 0-.636.317-.955v-.318c0-.318.318-.636.318-1.272v-.319c0-.318.317-.954.317-1.59 0-.637.317-.955.635-1.591v-.318c.317-.637.317-1.273.635-1.91v-.318c.317-.636.317-1.272.635-1.909v-.318c.317-.636.634-1.272.952-2.227l.317-.318c.318-.636.635-1.59 1.27-2.227.635-1.273 1.27-2.227 1.905-3.5.317-.318.634-.955.952-1.273l.317-.318 1.905-2.863c.635-.637 1.27-1.591 1.904-2.228l.635-.636c.635-.636.953-1.273 1.587-1.59l.635-.637c.635-.637 1.587-1.273 2.222-2.227 0 0-13.65 31.18-7.618 55.68v-4.773c0-.637 0-1.273.317-1.91 0-.636 0-1.272.318-1.908v-.319c0-.636.317-1.59.317-2.227v-.636c.318-.955.318-1.59.635-2.545v-.319c.318-.954.635-1.909.635-2.545 0-.318.317-.636.317-.954l.318-.637c.317-.636.635-1.59.952-2.227.318-.954.952-1.909 1.587-2.864 0-.318.318-.636.318-.636l1.904-2.863s-.635 7.636-.635 16.863c0 1.59 0 2.863.318 4.454 0 .954 0 1.909.317 2.863.635-9.863 2.54-19.09 5.08-27.68.634-2.227 1.586-4.773 2.221-7 0-.318.318-.636.318-.954.952-2.228 1.587-4.137 2.539-6.364.317-.318.317-.636.635-1.272.952-1.91 1.904-4.137 2.857-6.046.317-.318.317-.636.317-.954 2.222-4.136 4.444-7.954 6.666-11.454.318-.318.318-.637.635-.955.952-1.272 1.905-2.545 2.857-4.136.317-.318.317-.636.635-.954.317-.319.317-.637.635-.955 1.27-1.59 2.222-3.182 3.491-4.773.318-.318.318-.636.635-.636 1.27-1.59 2.54-3.182 3.81-4.454 1.586-1.91 3.174-3.5 4.76-5.41 1.27-1.272 2.223-2.544 3.492-3.499l1.27-1.273c2.54-2.545 5.079-5.09 7.618-7.317 6.984-6.364 12.698-10.5 14.602-11.773-1.27.318-2.54.637-4.126.955-1.905.954-4.444 1.909-7.619 2.863"/><path d="M716.153 509.04s0-.637-.317-1.91c-1.27-4.454-5.714-15.271-23.173-13.68-18.41 1.908-24.759 16.862-26.346 21.953-.318.955-.318 1.59-.318 1.59l.635.32c2.222-1.91 6.666-1.91 10.793.954 1.904 1.272 3.174 2.545 4.444 4.136 1.587 2.545 1.904 5.09.952 7l-.952.954s.635.318 1.904.636c5.08 1.591 19.364 4.455 26.982-5.409.317-.636.635-.954.952-1.59-1.587-.637-2.222-2.864-2.222-5.727 0-1.273.318-2.546.635-4.137.952-3.818 3.81-6.045 6.031-5.09m-91.737 136.176c-12.062 2.545-22.537 4.454-30.473 5.727.318 0 .952 0 1.27.318 13.65 1.59 35.234 3.818 61.264 2.227 47.614-2.863 110.147-17.817 166.967-69.36v-.319c.317-4.454-.317-12.09-5.714-18.135-.952-.955-1.904-1.91-3.174-2.864-.317 0-.317-.318-.635-.318-1.587-.954-2.857-1.59-4.126-2.545l-2.857-1.91v-.317c-3.492 5.09-7.619 9.863-12.063 14.317-1.587 1.59-3.174 3.182-5.078 4.773-15.554 14-35.87 26.09-57.772 35.635-36.187 15.908-76.818 26.408-107.609 32.77m-300.922-83.041c-.635.318-.952.954-1.587 1.273l-.635.636c-.635.636-1.27 1.273-1.587 1.909l-.318.318-1.904 2.864-.318.318c0 .318-.317.318-.317.636l-.952 1.91v.635c-.318.955-.953 1.91-1.27 2.864-.952 2.545-1.905 5.09-2.54 7.318-.317.636-.317 1.59-.634 1.909-.318 1.273-.635 2.545-.635 2.863v.319-.319c0-.954 0-1.59.317-2.545 0-1.59.318-3.5.318-5.09 0-1.273.317-2.864.635-4.137 0-.318 0-.954.317-1.273 0-.636.317-1.272.317-1.909 0-.636.318-1.272.318-1.909v-.954c0-.636.317-1.59.317-2.227v-2.227c0-.319 0-.637.318-.955.317-.954.635-2.227.635-3.182v-.318c.317-.636.317-1.59.634-2.227v-.318c.318-1.591.953-3.182 1.27-4.773v-.636c0-.318 0-.636.318-.955.634-2.545 1.587-5.09 2.222-7.317v-.319c.634-1.909 1.587-4.136 2.222-6.045v-.318c.317-.954.634-1.59.952-2.545.635-1.273.952-2.546 1.587-3.818 0-.318.317-.955.952-2.227.318-.319.318-.955.635-1.273.318-.637.635-1.273.952-2.227l.318-.637c-.318-.318-.952-.318-1.27-.636h-.317l-.635-.318c-2.857-1.273-6.031-2.546-9.206-3.5h-.634c-2.222-.636-4.127-.955-6.349-1.273-1.27 0-2.54-.318-3.81-.318h-3.173c-1.588 0-3.175.318-4.762.318-.635 0-.952 0-1.587.318-.635 0-1.587.319-2.222.319-.317 0-.635 0-.952.318-.635 0-.953.318-1.587.318-.953.318-2.222.636-3.175.954-.317 0-.952.319-1.27.319-1.27.636-2.856.954-4.126 1.59-.635.319-.952.637-1.587.637l-1.905.954-.635.318c-.634.319-1.27.637-1.904 1.273-.635.318-1.27.636-1.905 1.273-.635.318-1.27.954-1.904 1.273-.318.318-.953.636-1.27.954-.952.955-2.222 1.909-3.174 2.864l-1.587 1.59c-.953.955-1.588 1.91-2.54 2.864l-.317.318c-.318.636-.953.955-1.27 1.59l-.952.955c-1.587 2.228-3.175 4.773-4.444 7.318-.318.318-.318.637-.635.955-.635 1.272-.952 2.545-1.587 3.818-.318.636-.318.954-.635 1.59 0 .319.317.637.317.955.318 1.273.635 2.227.953 3.5v.636c.317.955.952 2.228 1.27 3.182 1.269 3.182 2.539 6.045 4.126 8.59.317.319.317.637.635.955v.318l.317.318c.952 1.91 1.905 3.5 2.857 4.773 1.587 2.227 2.857 3.818 3.81 5.09l.634.637c0 .318.317.318.317.318l.635.637c0-.637-.317-1.273-.317-1.591-.952-4.137-1.27-7.955-1.27-12.09v-.637c0-2.545 0-5.09.318-7.318l.952 2.864c.317 1.272.952 2.545 1.27 3.818v.636c1.904 5.409 4.126 9.863 6.348 13.363 2.54 4.454 4.762 7.318 6.349 9.227.317.318.635.636.635.954l.634.637c-.952-4.455-1.587-8.59-1.587-12.727v-4.136c0-1.91 0-3.5.318-5.09.635 2.863 1.587 5.726 2.54 8.271v.319c3.49 9.227 7.617 15.908 10.474 20.044l.318.318c.635.637.952 1.273 1.27 1.91.317.318.634.636.634.954l.635.636.318.318v-.636c0-.636-.318-1.273-.318-1.909-.317-2.227-.635-4.454-.952-6.363 0-1.273-.318-2.864-.318-4.136v-7c0-1.591.318-3.5.318-5.09.317.954.635 2.226.952 3.18.318.637.635 1.592.952 2.228v.318l.318.318c.317.955.635 1.91.952 2.546.635 1.59 1.27 3.181 2.222 4.454.952 1.91 1.587 3.5 2.54 4.773.634.954.952 1.59 1.27 2.227.634.954 1.269 1.909 1.586 2.545.635.636.953 1.273 1.27 1.91l.318.317c.317.637.952.955 1.27 1.591.317.318.634.636.634.955.635.636.952 1.272 1.27 1.272l.317.318v-.954c.318-2.545.635-5.409.953-7.954v-.955c.317-3.181.952-6.045 1.587-8.908 0-.319 0-.637.317-1.273v-.318c0-.318 0-.637.318-.955 0-.636.317-.954.317-1.59.317-2.228.952-4.455 1.27-6.682.317-1.91.635-3.818.952-5.41v-.635c0-.319 0-.637.317-.637v-.636c0-.318.318-.955.318-1.273 0-.318 0-.636.317-.954 0-.637.318-1.273.318-1.591 0-.318.317-.955.317-1.273 0-.636.318-1.272.318-1.59 0-.319 0-.637.317-.955 0-.318 0-.636.317-.636 0-.637.318-.955.318-1.273v-.955l1.587.955m384.723 132.994c4.444-1.59 8.254-2.863 11.428-4.136 6.031-2.545 9.205-4.454 9.205-5.09-.317-.637-3.809-.319-10.157 1.272-3.175.636-6.984 1.273-11.745 2.546-2.222.636-4.762.954-7.301 1.272-2.54.318-5.396.955-8.253 1.273-5.714.954-12.063 1.59-19.046 2.227l-10.475.955c-3.492.318-7.301.318-11.11.636-15.237.318-32.06-.318-49.202-3.5-8.888-1.59-21.267-5.727-29.838-10.5l-.317-.318c5.079-18.135 24.124-20.68 24.124-20.68l-.635-.319h-.952c-2.857-.318-5.079-.636-7.3-.954-1.588-.319-2.858-.319-3.81-.637-.952 0-1.904-.318-2.222-.318-11.427-.636-17.776 8.909-19.68 13.045l-.953 1.91c-1.587 3.817-2.857 7.953-3.174 12.726-.635 8.59 1.587 17.817 8.253 25.771 4.444 5.41 12.062 10.182 21.903 14-8.57-5.409-16.19-15.909-16.507-32.135 9.84 4.136 20.95 6.681 29.521 8.272 18.094 3.5 35.87 3.818 51.424 2.864 3.809-.318 7.935-.637 11.427-.955 3.81-.636 7.301-.954 10.793-1.272 6.983-1.273 13.014-2.228 19.045-3.5 2.857-.637 5.714-1.273 8.254-2.227 2.856-.637 5.078-1.273 7.3-2.228"/></g><path d="M693.27 482.117c9.541.318 15.902 3.18 20.355 7.63a53.421 53.421 0 001.272-14.942c-.318-6.04-1.59-11.445-3.498-15.578-.636-2.543-4.453-9.219-9.224-8.901-6.043.318-10.496 12.08-9.542 26.069 0 1.907.318 3.815.637 5.722m15.902 35.924c0 2.543.955 4.769 2.227 5.723 2.226 1.271 5.089-1.272 6.361-5.405 0-.318.318-.636.318-.954.954-3.815 0-7.63-2.226-8.583-2.227-1.272-5.09 1.271-6.362 5.404 0 1.272-.318 2.544-.318 3.815m-43.255 6.994c.954 1.59 2.544 3.18 4.452 4.451 4.135 2.543 8.588 2.861 11.132.636l.955-.954c.954-1.907.636-4.45-.955-6.994-.954-1.59-2.544-3.18-4.452-4.133-4.135-2.543-8.588-2.861-10.814-.954-.318.318-.637.636-.955 1.272-.954 1.59-.636 4.133.637 6.676m152.985 146.24a151.885 151.885 0 01-20.355 16.213c-32.76 22.254-78.56 39.74-111.003 43.872-24.49 3.815-48.344 4.45-69.018 1.907-12.086-1.59-22.582-4.132-31.806-7.63-9.86-3.814-17.493-8.583-21.946-13.988-6.68-7.947-8.588-17.485-8.27-25.75.319-4.451 1.273-8.902 3.181-12.717l.954-1.907c2.227-4.133 8.27-13.988 19.72-13.035.318 0 1.272 0 2.226.318.954 0 2.545.318 3.817.636 2.226.318 4.453.636 7.315.954h.954c31.488 3.815 61.704 3.497 90.329-.954 41.666-6.358 80.15-21.3 114.5-44.508 1.91-1.271 3.5-2.543 5.408-3.815l18.765-27.976c-56.932 51.82-119.59 66.762-167.298 69.623-26.081 1.59-47.709-.318-61.385-2.226-.637 0-.955 0-1.273-.317-4.134-.636-7.315-.954-9.86-1.272-1.272 0-2.226-.318-2.862-.318-3.499-.318-6.997.318-10.178 1.272-6.361 1.907-12.086 6.358-16.22 12.08-5.09 6.994-8.27 16.532-8.27 26.069a50.1 50.1 0 006.043 23.843c.318.318.318.636.636.954.636.954.954 1.59 1.59 2.543.636.954 1.59 2.226 2.545 3.18 9.86 12.398 31.487 21.3 60.113 25.115 19.401 2.543 41.983 2.225 66.474-1.272 72.517-13.034 106.867-36.56 122.77-52.773 1.272-1.272 2.227-2.226 3.18-3.497 5.726-6.677 8.27-11.763 9.224-13.67v-.319c.319-.635.319-.953.319-.953l-.319.318" fill="#664F44"/><path d="M588.016 420.147c-2.22-1.274-4.757-2.228-7.294-2.865a151.213 151.213 0 00-5.074-.955c-.635 0-1.269 0-1.903-.318-8.563-.637-15.857.636-15.857.636-1.586.319-3.172.637-4.44 1.274-11.418 3.501-19.346 9.549-25.055 16.552-4.44 5.73-7.611 11.777-9.197 17.825-.317.637-.317.955-.317 1.592-.317 1.591-.952 3.183-1.269 4.456-.951 5.093-1.585 9.55-1.585 13.37 0 5.092.317 8.276.317 8.276 1.903-4.457 4.123-8.277 6.343-12.096 5.391-9.231 11.1-16.871 17.125-22.919 11.418-11.777 23.152-18.144 32.032-21.327 9.514-3.183 16.174-3.501 16.174-3.501m137.324-16.234l-.317-.637c-1.269-1.591-2.854-3.183-4.757-4.456-4.44-2.865-10.466-4.457-18.712-2.865 0 0-9.831 2.228-15.54 8.913 0 0 17.126-7.321 35.52 5.73 1.586 1.273 3.489 2.546 5.075 4.137 1.585 1.592 3.488 3.184 5.074 5.412 0 0-.634-7.958-5.392-14.961-.317-.637-.634-.955-.951-1.273" fill="#E9B784"/><path d="M590.687 531c6.531-1.912 13.373-3.824 21.148-5.736 1.245-6.055 1.556-13.384.623-21.351-2.178-18.483-10.264-32.824-18.35-31.868-8.086.956-12.75 16.89-10.574 35.373 1.244 9.56 3.732 17.846 7.153 23.582" fill="#664F44"/><path d="M553.925 115l-17.176 3.78 3.499 30.866-45.483-22.992L476 132.323l.318.315L531.66 195l.636-.315.637-.315c1.59-.945 3.498-2.205 5.089-3.15.636-.314 1.272-.63 1.908-1.26 2.544-1.574 5.089-3.149 7.633-4.409l-23.536-26.771 37.849 18.267c1.272-.63 2.226-1.26 3.499-1.89l-3.499-26.771 17.175 19.842h.318c1.59-.63 2.863-1.574 4.453-2.204l.636-.315.636-.315c.318 0 .636-.315.636-.315l1.909-.945s.318 0 .318-.315c1.908-.945 4.135-1.89 6.043-2.835L553.925 115" fill="#FFD250"/><path d="M536.15 119.662v-.951.95m0-.95l2.533-.634c-4.117-1.901-9.185-3.169-14.886-4.12-11.402-1.584-25.971 0-42.441 4.12-16.47 4.12-35.157 11.409-54.793 21.233-39.591 19.648-83.3 49.753-125.74 88.416-14.887 13.31-28.506 27.253-41.175 40.88l51.31 63.38c13.936-15.21 28.822-30.422 45.291-45.317 21.855-19.964 44.025-37.711 65.88-52.922 21.22-14.895 42.44-27.57 62.394-37.712l-8.868-40.563.317-22.817-.317-.317 18.687-5.704 36.423 18.697-.95-12.676 6.334-13.944" fill="#4D9ED7"/><path d="M536.188 119.318l-6.433 13.977.965 13.025 9.006 4.448-3.538-31.45zM523 159.663l38.599 18.743-14.796 8.26L523 159.662zm38.599-10.484l3.538 27.003 13.831-6.99-17.37-20.013z" fill="#132134"/><path d="M704.378 139.412h6.985c6.35 0 12.382.953 18.097 2.223.318 0 .635 0 .953.318h.317l.635.318H732c-.635-.318-1.27-.953-1.905-1.27-6.35-2.542-13.017-4.13-20.002-5.084-34.29-4.448-73.66 8.26-95.885 17.155-1.27.636-2.54.954-3.81 1.589-1.905.953-3.81 1.588-5.715 2.542-3.175 1.27-6.35 2.859-9.842 4.447-.635.318-.953.318-1.588.636-1.905.953-4.127 1.906-6.032 2.859 0 0-.318 0-.318.318l-1.905.953c-.317 0-.635.317-.635.317h-1.27l-.317.318c-1.588.635-2.858 1.27-4.445 2.224h-.318c-.317.318-.635.318-.952.635h-.318c-.317 0-.635.318-.635.318-2.222 1.27-4.445 2.224-6.667 3.495-1.587.953-3.175 1.588-4.762 2.541h-.318c-1.27.636-2.222 1.27-3.492 1.906-3.81 1.906-7.303 4.13-11.113 6.354-.317.318-.635.318-1.27.636-.317.317-.635.317-.952.635-.318.318-.635.318-.953.635l-.317.318c-2.54 1.589-5.08 2.86-7.62 4.448-.635.317-1.27.635-1.905 1.27-1.588.954-3.493 2.224-5.08 3.178l-.635.317-.635.318-14.288 9.53c-7.937 5.402-15.557 10.802-23.177 16.52-.953.636-1.905 1.59-2.857 2.225-20.003 14.931-39.053 31.134-57.468 47.654-19.367 17.79-38.1 35.9-55.562 54.326-9.525 9.53-17.78 18.108-24.13 25.097-13.335 14.297-20.637 23.192-20.32 23.51 0 0 1.27-.953 3.493-3.177-1.588 1.906-3.493 4.13-5.08 6.036 29.21-31.134 61.277-62.903 95.884-92.767 20.955-18.108 42.863-35.581 65.405-51.784 9.842-6.99 20.002-13.978 30.162-20.65 3.175-2.224 6.668-4.13 9.843-6.354 1.587-.953 3.175-1.906 5.08-2.86.952-.635 1.905-1.27 2.857-1.588 1.905-.953 3.493-2.223 5.398-3.177 1.587-.953 3.492-1.906 5.08-3.176.952-.636 1.905-.954 2.857-1.589l6.668-3.812c1.27-.636 2.54-1.589 3.81-2.224 4.127-2.224 8.254-4.448 12.7-6.672.317-.317.634-.317.952-.635l1.905-.953c.952-.318 1.587-.953 2.54-1.271.317-.318.635-.318.952-.635l1.905-.953s.318 0 .318-.318h.317c1.905-.953 3.81-1.906 5.398-2.542.317 0 .635-.317.952-.635l1.905-.953c2.223-.953 4.128-1.906 6.35-2.86.635-.317 1.27-.635 1.588-.952.317 0 .635-.318.952-.318.635-.318 1.27-.636 1.905-.636 2.54-.953 4.763-2.223 7.303-3.177 2.222-.953 4.127-1.906 6.35-2.859 12.065-5.083 23.177-9.213 33.654-12.708 19.685-5.4 37.148-8.895 52.388-9.53" fill="#FFF"/></g></svg>
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              <input type="text" name="d49" id="d49" value="<?php echo e(old('d49')?old('d49'):$d49); ?>" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8 mb-lg-0">
              <textarea name="d50" style="width:300px;  height:150px;"><?php echo e(old('d50')?old('d50'):$d50); ?></textarea>
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
              
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
              <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M290.75 143L81 277.493l209.75 132.515L500.5 277.493 290.75 143zm419.5 0L500.5 277.493l209.75 132.515L920 277.493 710.25 143zM81 544.501l209.75 134.493L500.5 544.501 290.75 410.008 81 544.501zm629.25-134.493L500.5 544.501l209.75 134.493L920 544.501 710.25 410.008zm-419.5 312.499L500.5 857l209.75-134.493L500.5 589.992 290.75 722.507z" fill="#0062FF" fill-rule="nonzero"/></svg>
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              <input type="text" name="d51" id="d51" value="<?php echo e(old('d51')?old('d51'):$d51); ?>" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8 mb-md-0">
              <textarea name="d52" style="width:300px;  height:150px;"><?php echo e(old('d52')?old('d52'):$d52); ?></textarea>
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
            
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
              <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><defs><radialGradient cx="170.278%" cy="15.281%" fx="170.278%" fy="15.281%" r="646.076%" gradientTransform="matrix(.31628 .50031 -.18275 .86585 1.192 -.831)" id="a"><stop stop-color="#4387FD" offset="0%"/><stop stop-color="#3078F0" offset="65%"/><stop stop-color="#2B72EA" offset="90.99%"/><stop stop-color="#286EE6" offset="100%"/></radialGradient><radialGradient cx="186.109%" cy="108.165%" fx="186.109%" fy="108.165%" r="344.826%" gradientTransform="scale(.83846 1) rotate(30.021 2.04 1.75)" id="b"><stop stop-color="#FFD24D" offset="0%"/><stop stop-color="#F6C338" offset="100%"/></radialGradient></defs><g fill-rule="nonzero" fill="none"><path fill="#0DA960" d="M241.888 842.579L104 603.645 362.112 156 500 394.934z"/><path fill="url(#a)" d="M137.888 686.579l137.888-238.934H792L654.112 686.579z" transform="translate(104 156)"/><path fill="url(#b)" d="M792 447.645H516.224L258.112 0h275.776z" transform="translate(104 156)"/><path fill="#2D6FDD" d="M500 603.645H379.776l59.827-104.356-197.715 343.29z"/><path fill="#E5B93C" d="M620.224 603.645H896L560.397 499.289z"/><path fill="#0C9B57" d="M439.603 499.29L500 394.933 362.112 156z"/></g></svg>
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              <input type="text" name="d53" id="d53" value="<?php echo e(old('d53')?old('d53'):$d53); ?>" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8">
              <textarea name="d54" style="width:300px;  height:150px;"><?php echo e(old('d54')?old('d54'):$d54); ?></textarea>
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
              
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
              <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><g transform="translate(98.995 83)" fill-rule="nonzero" fill="none"><path d="M779.595 452.504L452.486 779.62c-29.84 29.841-78.247 29.841-108.088 0-29.874-29.842-29.841-78.249 0-108.09L671.539 344.38c29.842-29.841 78.248-29.841 108.089 0 29.841 29.875 29.841 78.249-.033 108.123z" fill="#FBBC04"/><circle fill="#34A853" transform="rotate(-45 398.417 725.66)" cx="398.417" cy="725.66" r="76.424"/><path d="M510.56 183.402L347.005 346.929 455.072 455l163.556-163.528c29.836-29.836 29.836-78.234 0-108.07-29.868-29.87-78.232-29.87-108.068 0z" fill="#FBBC04"/><path d="M291.463 618.62l163.542-163.54L346.925 347 183.384 510.541c-29.839 29.839-29.839 78.241 0 108.08s78.24 29.839 108.08 0z" fill="#3B80EF"/><circle fill="#34A853" transform="rotate(-45 401.254 400.682)" cx="401.254" cy="400.682" r="76.424"/><path d="M457.623 130.472L130.476 457.619c-29.841 29.841-78.248 29.841-108.09 0-29.842-29.842-29.842-78.249 0-108.09L349.533 22.38c29.842-29.841 78.249-29.841 108.09 0 29.842 29.842 29.842 78.249 0 108.09z" fill="#3B80EF"/><circle fill="#34A853" cx="403.505" cy="76.5" r="76.5"/></g></svg>
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              <input type="text" name="d55" id="d55" value="<?php echo e(old('d55')?old('d55'):$d55); ?>" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8">
              <textarea name="d56" style="width:300px;  height:150px;"><?php echo e(old('d56')?old('d56'):$d56); ?></textarea>
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
              
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
              <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient x1="80.814%" y1="15.801%" x2="43.696%" y2="97.438%" id="a"><stop stop-color="#0052CC" offset="0%"/><stop stop-color="#2684FF" offset="92.3%"/></linearGradient></defs><g fill-rule="nonzero" fill="none"><path d="M196.328 303.036c-9.813-10.483-25.103-9.889-31.772 3.45L3.634 628.335A19.237 19.237 0 0020.84 656.18h224.106c7.336.17 14.082-4 17.21-10.637 48.323-99.913 19.046-251.825-65.828-342.507z" fill="url(#a)" transform="translate(171 171)"/><path d="M485.4 181.306c-90.005 142.604-84.067 300.54-24.782 419.114l108.061 216.123a19.237 19.237 0 0017.207 10.634h224.103a19.237 19.237 0 0017.206-27.844s-301.487-603.06-309.071-618.15c-6.781-13.507-24.005-13.69-32.723.123z" fill="#2681FF"/></g></svg>
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              <input type="text" name="d57" id="d57" value="<?php echo e(old('d57')?old('d57'):$d57); ?>" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-0">
              <textarea name="d58" style="width:300px;  height:150px;"><?php echo e(old('d58')?old('d58'):$d58); ?></textarea>
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- REGISTRATION
    ================================================== -->
    <section class="py-11">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8">
            
            <!-- Card -->
            <div class="card card-border border-primary shadow-light-lg" data-jarallax-element="-40">
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-12 col-xl-11">
                
                    <!-- Image -->
                    <div class="text-center">
                      <img src="<?php echo e(asset ('assets/ui/img/illustrations/illustration-1.png')); ?>" alt="..." class="img-fluid mb-3" style="width: 200px;">
                    </div>

                    <!-- Heading -->
                    <h2 class="font-weight-bold text-center mb-1">
                      <input type="text" name="d59" id="d59" value="<?php echo e(old('d59')?old('d59'):$d59); ?>" />
                    </h2>

                    <!-- Text -->
                    <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
                      <input type="text" name="d60" id="d60" value="<?php echo e(old('d60')?old('d60'):$d60); ?>" />
                    </p>

                    <!-- Form -->
                    
                      <div class="row">
                        <div class="col-12 col-md-6">

                          <!-- First name -->
                          <div class="form-label-group">
                            <input type="text" class="form-control form-control-flush" id="registrationFirstName" placeholder="First name">
                            <label for="registrationFirstName"><input type="text" name="d61" id="d61" value="<?php echo e(old('d61')?old('d61'):$d61); ?>" /></label>
                          </div>

                        </div>
                        <div class="col-12 col-md-6">

                          <!-- Last name -->
                          <div class="form-label-group">
                            <input type="text" class="form-control form-control-flush" id="registrationLastName" placeholder="Last name">
                            <label for="registrationLastName"><input type="text" name="d62" id="d62" value="<?php echo e(old('d62')?old('d62'):$d62); ?>" /></label>
                          </div>

                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md-6">

                          <!-- Email -->
                          <div class="form-label-group">
                            <input type="email" class="form-control form-control-flush" id="registrationEmail" placeholder="Email">
                            <label for="registrationEmail"><input type="text" name="d63" id="d63" value="<?php echo e(old('d63')?old('d63'):$d63); ?>" /></label>
                          </div>

                        </div>
                        <div class="col-12 col-md-6">

                          <!-- Password -->
                          <div class="form-label-group">
                            <input type="password" class="form-control form-control-flush" id="registrationPassword" placeholder="Password">
                            <label for="registrationPassword"><input type="text" name="d64" id="d64" value="<?php echo e(old('d64')?old('d64'):$d64); ?>" /></label>
                          </div>

                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          
                          <!-- Submit -->
                          <button class="btn btn-block btn-primary mt-3 lift">
                            <input type="text" name="d65" id="d65" value="<?php echo e(old('d65')?old('d65'):$d65); ?>" />
                          </button>

                        </div>
                      </div>
                    
                  
                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
</form>
    <!-- CURVE
    ================================================== -->
    <div class="position-relative mt-n16">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master3', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>