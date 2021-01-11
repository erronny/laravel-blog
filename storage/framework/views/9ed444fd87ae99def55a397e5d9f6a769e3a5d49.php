<?php $__env->startSection('content'); ?>

<style>
    textarea {
  
}
</style>

                                         <?php if(Request::segment(4)==='edit'): ?>
                                        <?php echo e(Form::model($service, array('route' => array('service6.update', $service->id), 'method' => 'PUT','enctype'=>'multipart/form-data'))); ?>

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
                                          // $d63           = $service->d63;
                                          // $d64           = $service->d64;
                                          // $d65           = $service->d65;
                                          // $d66           = $service->d66;
                                          // $d67           = $service->d67;
                                          // $d68           = $service->d68;
                                          // $d69          = $service->d69;
                                          // $d70          = $service->d70;
                                          // $d71          = $service->d71;
                                          // $d72           = $service->d72;
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
                                        <?php echo e(Form::open(array('url' => 'admin/service6','enctype'=>'multipart/form-data','autocomplete'=>"off"))); ?>


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
    <section class="border-bottom">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-12 col-md-6 offset-md-1 order-md-2">

            <!-- Slider (mobile) -->
            <div class="d-md-none img-cover" data-flickity='{"imagesLoaded": true, "wrapAround": true, "prevNextButtons": false, "pageDots": false}'>
              <div class="w-100">
                
                <!-- Image -->
                <img src="<?php echo e(asset ('assets/ui/img/covers/cover-12.jpg')); ?>" alt="..." class="img-fluid">

              </div>
              <div class="w-100">
                
                <!-- Image -->
                <img src="<?php echo e(asset ('assets/ui/img/covers/cover-2.jpg')); ?>" alt="..." class="img-fluid">

              </div>
            </div>

            <!-- Slider -->
            <div class="position-relative h-100 vw-50 d-none d-md-block" data-aos="fade-left">

              <!-- Slider -->
              <div class="flickity-button-bottom flickity-button-white h-100 w-100" data-flickity='{"imagesLoaded": true, "setGallerySize": false, "wrapAround": true, "pageDots": false}'>
                <div class="w-100 h-100 bg-cover" style="background-image: url(assets/ui/img/covers/cover-9.jpg);"></div>
                <div class="w-100 h-100 bg-cover" style="background-image: url(assets/ui/img/covers/cover-2.jpg);"></div>
              </div>
  
              <!-- Shape -->
              <div class="shape shape-left shape-fluid-y svg-shim text-white">
                <svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h100v386l-50 772v386H0V0z" fill="currentColor"/></svg>
              </div>

            </div>

          </div>
          <div class="col-12 col-md-5 py-8 py-md-14 order-md-1" data-aos="fade-right">
            
            <!-- Heading -->
            <h1 class="display-3">
              <input type="text" name="d" id="d" value="<?php echo e(old('d')?old('d'):$d); ?>" /> <span class="text-success"><input type="text" name="d1" id="d1" value="<?php echo e(old('d1')?old('d1'):$d1); ?>" /></span>
            </h1>

            <!-- Text -->
            <p class="lead text-muted mb-6 mb-md-8">
              <textarea name="d2" style="height:150px; width:200px" ><?php echo e(old('d2')?old('d2'):$d2); ?></textarea>
            </p>

            <!-- Text -->
            <p>
              <input type="text" name="d3" id="d3" value="<?php echo e(old('d3')?old('d3'):$d3); ?>" />
            </p>

            <!-- Form -->
            
              <div class="form-row">
                <div class="col-12 col-lg">
                  
                  <!-- Search -->
                  <div class="form-group mb-lg-0">
                    <input type="search" class="form-control" value="Los Angeles">
                  </div>

                </div>
                <div class="col-12 col-lg-auto">
                  
                  <!-- Button -->
                  <a  class="btn btn-block btn-primary shadow lift">
                    <input type="text" name="d4" id="d4" value="<?php echo e(old('d4')?old('d4'):$d4); ?>" />
                  </a>
                  <p>URL<input type="text" name="d61" id="d61" value="<?php echo e(old('d61')?old('d61'):$d61); ?>" /> </p>

                </div>
              </div> <!-- / .form-row -->
            

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- FLEXIBILITY
    ================================================== -->
    <section class="pt-8 pt-md-11 bg-gradient-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Badge -->
            <span class="badge badge-pill badge-success-soft mb-3">
              <span class="h6 text-uppercase"><input type="text" name="d5" id="d5" value="<?php echo e(old('d5')?old('d5'):$d5); ?>" /></span>
            </span>

            <!-- Heading -->
            <h1>
              <input type="text" name="d6" id="d6" value="<?php echo e(old('d6')?old('d6'):$d6); ?>" />
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-7 mb-md-9">
              <textarea name="d7" style="height:150px; width:200px" ><?php echo e(old('d7')?old('d7'):$d7); ?></textarea>
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-4" data-aos="fade-up">
            
            <!-- Card -->
            <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">
              
              <!-- Image -->
              <img src="<?php echo e(asset ('assets/ui/img/photos/photo-4.jpg')); ?>" alt="..." class="card-img-top">

              <!-- Shape -->
              <div class="position-relative">
                <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                  <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
                </div>
              </div>

              <!-- Body -->
              <div class="card-body position-relative">

                <!-- Badge -->
                <div class="position-relative text-right mt-n8 mr-n4 mb-3">
                  <span class="badge badge-pill badge-success">
                    <span class="h6 text-uppercase"><input type="text" name="d8" id="d8" value="<?php echo e(old('d8')?old('d8'):$d8); ?>" /></span>
                  </span>
                </div>
                
                <!-- Heading -->
                <h3>
                  <input type="text" name="d9" id="d9" value="<?php echo e(old('d9')?old('d9'):$d9); ?>" />
                </h3>

                <!-- Text -->
                <p class="text-muted">
                  <textarea name="d10" style="height:150px; width:200px" ><?php echo e(old('d10')?old('d10'):$d10); ?></textarea>
                </p>

                <!-- Link -->
                <a  class="font-weight-bold text-decoration-none">
                  <input type="text" name="d11" id="d11" value="<?php echo e(old('d11')?old('d11'):$d11); ?>" /> <i class="fe fe-arrow-right ml-3"></i>
                </a></br>
                <p>URL<input type="text" name="d12" id="d12" value="<?php echo e(old('d12')?old('d12'):$d12); ?>" /></p>

              </div>

            </div>

          </div>
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
            
            <!-- Card -->
            <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">
              
              <!-- Image -->
              <img src="<?php echo e(asset ('assets/ui/img/photos/photo-5.jpg')); ?>" alt="..." class="card-img-top">

              <!-- Shape -->
              <div class="position-relative">
                <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                  <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
                </div>
              </div>

              <!-- Body -->
              <div class="card-body position-relative">

                <!-- Badge -->
                <div class="position-relative text-right mt-n8 mr-n4 mb-3">
                  <span class="badge badge-pill badge-warning">
                    <span class="h6 text-uppercase"><input type="text" name="d13" id="d13" value="<?php echo e(old('d13')?old('d13'):$d13); ?>" /></span>
                  </span>
                </div>
                
                <!-- Heading -->
                <h3>
                  <input type="text" name="d14" id="d14" value="<?php echo e(old('d14')?old('d14'):$d14); ?>" />
                </h3>

                <!-- Text -->
                <p class="text-muted">
                  <textarea name="d15" style="height:150px; width:200px" ><?php echo e(old('d15')?old('d15'):$d15); ?></textarea>
                </p>

                <!-- Link -->
                <a  class="font-weight-bold text-decoration-none">
                  <input type="text" name="d16" id="d16" value="<?php echo e(old('d16')?old('d16'):$d16); ?>" /> <i class="fe fe-arrow-right ml-3"></i>
                </a>
                <p>URL<input type="text" name="d17" id="d17" value="<?php echo e(old('d17')?old('d17'):$d17); ?>" /></p>

              </div>

            </div>

          </div>
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
            
            <!-- Card -->
            <div class="card shadow-light-lg lift lift-lg">
              
              <!-- Image -->
              <img src="<?php echo e(asset ('assets/ui/img/photos/photo-6.jpg')); ?>" alt="..." class="card-img-top">

              <!-- Shape -->
              <div class="position-relative">
                <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
                  <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
                </div>
              </div>

              <!-- Body -->
              <div class="card-body position-relative">

                <!-- Badge -->
                <div class="position-relative text-right mt-n8 mr-n4 mb-3">
                  <span class="badge badge-pill badge-success">
                    <span class="h6 text-uppercase"><input type="text" name="d18" id="d18" value="<?php echo e(old('d18')?old('d18'):$d18); ?>" /></span>
                  </span>
                </div>
                
                <!-- Heading -->
                <h3>
                  <input type="text" name="d19" id="d19" value="<?php echo e(old('d19')?old('d19'):$d19); ?>" />
                </h3>

                <!-- Text -->
                <p class="text-muted">
                  <textarea name="d20" style="height:150px; width:200px" ><?php echo e(old('d20')?old('d20'):$d20); ?></textarea>
                </p>

                <!-- Link -->
                <a  class="font-weight-bold text-decoration-none">
                  <input type="text" name="d21" id="d21" value="<?php echo e(old('d21')?old('d21'):$d21); ?>" /> <i class="fe fe-arrow-right ml-3"></i>
                </a>
                <p>URL<input type="text" name="d22" id="d22" value="<?php echo e(old('d22')?old('d22'):$d22); ?>" /></p>

              </div>

            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SCALABLE
    ================================================== -->
    <section class="py-8 py-md-11 border-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 order-md-2">
            
            <!-- Image -->
            <img src="<?php echo e(asset ('assets/ui/img/illustrations/illustration-1.png')); ?>" alt="..." class="img-fluid mb-6 mb-md-0">

          </div>
          <div class="col-12 col-md-6 order-md-1">
            
            <!-- Badge -->
            <span class="badge badge-pill badge-primary-soft mb-3">
              <span class="h6 text-uppercase"><input type="text" name="d23" id="d23" value="<?php echo e(old('d23')?old('d23'):$d23); ?>" /></span>
            </span>

            <!-- Heading -->
            <h2>
              <input type="text" name="d24" id="d24" value="<?php echo e(old('d24')?old('d24'):$d24); ?>" /> <br>
              <span class="text-primary"><input type="text" name="d25" id="d25" value="<?php echo e(old('d25')?old('d25'):$d25); ?>" /></span>.
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
              <textarea name="d26" style="height:150px; width:200px" ><?php echo e(old('d26')?old('d26'):$d26); ?></textarea>
            </p>

            <!-- List -->
            <div class="row">
              <div class="col-12 col-lg-6">
                
                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                  </div>
                  
                  <!-- Text -->
                  <p>
                    <input type="text" name="d27" id="d27" value="<?php echo e(old('d27')?old('d27'):$d27); ?>" />
                  </p>

                </div>

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                  </div>
                  
                  <p class="mb-lg-0">
                    <input type="text" name="d28" id="d28" value="<?php echo e(old('d28')?old('d28'):$d28); ?>" />
                  </p>

                </div>

              </div>
              <div class="col-12 col-lg-6">

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <span class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                  </span>
                  
                  <!-- Text -->
                  <p>
                    <input type="text" name="d29" id="d29" value="<?php echo e(old('d29')?old('d29'):$d29); ?>" />
                  </p>

                </div>

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-primary-soft mr-1 mr-4">
                    <i class="fe fe-check"></i>
                  </div>
                  
                  <!-- Text -->
                  <p class="mb-0">
                    <input type="text" name="d30" id="d30" value="<?php echo e(old('d30')?old('d30'):$d30); ?>" />
                  </p>

                </div>

              </div>
            </div> <!-- / .row -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- LOCATION
    ================================================== -->
    <section class="pt-8 pt-md-0 border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">

            <!-- Map (mobile) -->
            <div class="embed-responsive embed-responsive-1by1 d-md-none">
              <div class="embed-responsive-item" data-toggle="map" data-options='{"center": [-118.244615, 34.052979], "zoom": 12}'></div>
            </div>

            <!-- Map -->
            <div class="position-relative h-100 vw-50 float-right d-none d-md-block
            ">
            
              <!-- Map -->
              <div class="w-100 h-100" data-toggle="map" data-options='{"center": [-118.244615, 34.052979], "zoom": 12}'></div>

              <!-- Shape -->
              <div class="shape shape-right shape-fluid-y svg-shim text-white">
                <svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 386V0h100v1544H50v-386L0 386z" fill="currentColor"/></svg>
              </div>

            </div>

          </div>
          <div class="col-12 col-md-6 col-lg-5 offset-lg-1 py-8 py-md-11 py-lg-12">
            
            <!-- Heading -->
            <h2>
              <input type="text" name="d31" id="d31" value="<?php echo e(old('d31')?old('d31'):$d31); ?>" /> <span data-toggle="countup" data-from="100" data-to="400" data-aos data-aos-id="countup:in"></span><br>From<input type="text" name="d32" id="d32" value="<?php echo e(old('d32')?old('d32'):$d32); ?>" />TO<input type="text" name="d33" id="d33" value="<?php echo e(old('d33')?old('d33'):$d33); ?>" /> <input type="text" name="d34" id="d34" value="<?php echo e(old('d34')?old('d34'):$d34); ?>" /> <br>
              <span class="text-success"><input type="text" name="d35" id="d35" value="<?php echo e(old('d35')?old('d35'):$d35); ?>" /></span>.
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
              <textarea name="d36" style="height:150px; width:200px" ><?php echo e(old('d36')?old('d36'):$d36); ?></textarea>
            </p>

            <!-- Stats -->
            <div class="d-flex">
              <div class="pr-5">
                <h3 class="text-success mb-0">
                  <input type="text" name="d37" id="d37" value="<?php echo e(old('d37')?old('d37'):$d37); ?>" />
                </h3>
                <p class="text-gray-700 mb-0">
                  <input type="text" name="d38" id="d38" value="<?php echo e(old('d38')?old('d38'):$d38); ?>" />
                </p>
              </div>
              <div class="border-left"></div>
              <div class="px-5">
                <h3 class="text-success mb-0">
                  <input type="text" name="d39" id="d39" value="<?php echo e(old('d39')?old('d39'):$d39); ?>" />
                </h3>
                <p class="text-gray-700 mb-0">
                  <input type="text" name="d40" id="d40" value="<?php echo e(old('d40')?old('d40'):$d40); ?>" />
                </p>
              </div>
            </div>
            </br>
              <div class="border-left"></div>
              <div class="pl-5">
                <h3 class="text-success mb-0">
                  <input type="text" name="d41" id="d41" value="<?php echo e(old('d41')?old('d41'):$d41); ?>" />
                </h3>
                <p class="text-gray-700 mb-0">
                  <input type="text" name="d42" id="d42" value="<?php echo e(old('d42')?old('d42'):$d42); ?>" />
                </p>
              </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- FEATURES
    ================================================== -->
    <section class="py-8 py-md-11 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Heading -->
            <h2>
              <span class="text-primary"><input type="text" name="d43" id="d43" value="<?php echo e(old('d43')?old('d43'):$d43); ?>" /></span> <input type="text" name="d44" id="d44" value="<?php echo e(old('d44')?old('d44'):$d44); ?>" />
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7 mb-md-9 px-md-9">
              <textarea name="d45" style="height:150px; width:200px" ><?php echo e(old('d45')?old('d45'):$d45); ?></textarea>
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8">
            
            <!-- Card -->
            <div class="card accordion" id="featuresAccordion">
              <div class="card-body">
                
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    
                    <!-- Toggle -->
                    <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#featuresOne" role="button" aria-expanded="true" aria-controls="featuresOne">
                      <div class="mr-auto">
                        
                        <!-- Title -->
                        <p class="font-weight-bold mb-0">
                          <input type="text" name="d46" id="d46" value="<?php echo e(old('d46')?old('d46'):$d46); ?>" />
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-muted mb-0">
                          <input type="text" name="d47" id="d47" value="<?php echo e(old('d47')?old('d47'):$d47); ?>" />
                        </p>

                      </div>
                        
                      <!-- Badge -->
                      <span class="badge badge-pill badge-success-soft ml-4">
                        <span class="h6 text-uppercase"><input type="text" name="d48" id="d48" value="<?php echo e(old('d48')?old('d48'):$d48); ?>" /></span>
                      </span>

                      <!-- Chevron -->
                      <span class="collapse-chevron text-muted ml-4">
                        <i class="fe fe-lg fe-chevron-down"></i>
                      </span>

                    </a> <!-- / .row -->
                    
                    <!-- Collapse -->
                    <div class="collapse show" id="featuresOne" data-parent="#featuresAccordion">
                      <div class="py-5 py-mb-6">
                        <p>
                          <textarea name="d49" style="height:150px; width:500px" ><?php echo e(old('d49')?old('d49'):$d49); ?></textarea>
                        </p>
                        <a  class="font-weight-bold text-decoration-none">
                          <input type="text" name="d50" id="d50" value="<?php echo e(old('d50')?old('d50'):$d50); ?>" /> <i class="fe fe-arrow-right ml-3"></i>
                        </a><br>
                        <p>URL<input type="text" name="d51" id="d51" value="<?php echo e(old('d51')?old('d51'):$d51); ?>" /></p>
                      </div>
                    </div>

                  </div>
                  <div class="list-group-item">
                    
                    <!-- Toggle -->
                    <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#featuresTwo" role="button" aria-expanded="false" aria-controls="featuresTwo">
                      <div class="mr-auto">
                        
                        <!-- Title -->
                        <p class="font-weight-bold mb-0">
                          <input type="text" name="d52" id="d52" value="<?php echo e(old('d52')?old('d52'):$d52); ?>" />
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-muted mb-0">
                          <input type="text" name="d53" id="d53" value="<?php echo e(old('d53')?old('d53'):$d53); ?>" />
                        </p>

                      </div>
                        
                      <!-- Chevron -->
                      <span class="collapse-chevron text-muted ml-4">
                        <i class="fe fe-lg fe-chevron-down"></i>
                      </span>

                    </a> <!-- / .row -->
                    
                    <!-- Collapse -->
                    <div class="collapse" id="featuresTwo" data-parent="#featuresAccordion">
                      <div class="py-5 py-md-6">
                        <p>
                          <textarea name="d54" style="height:150px; width:500px" ><?php echo e(old('d54')?old('d54'):$d54); ?></textarea>
                        </p>
                        <a  class="font-weight-bold text-decoration-none">
                          <input type="text" name="d55" id="d55" value="<?php echo e(old('d55')?old('d55'):$d55); ?>" /> <i class="fe fe-arrow-right ml-3"></i>
                        </a><br>
                        <p>URL<input type="text" name="d62" id="d62" value="<?php echo e(old('d62')?old('d62'):$d62); ?>" /> </p>
                      </div>
                    </div>

                  </div>
                  <div class="list-group-item">
                    
                    <!-- Toggle -->
                    <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#featuresThree" role="button" aria-expanded="false" aria-controls="featuresThree">
                      <div class="mr-auto">
                        
                        <!-- Title -->
                        <p class="font-weight-bold mb-0">
                          <input type="text" name="d56" id="d56" value="<?php echo e(old('d56')?old('d56'):$d56); ?>" />
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-muted mb-0">
                          <input type="text" name="d57" id="d57" value="<?php echo e(old('d57')?old('d57'):$d57); ?>" />
                        </p>

                      </div>
                        
                      <!-- Chevron -->
                      <span class="collapse-chevron text-muted ml-4">
                        <i class="fe fe-lg fe-chevron-down"></i>
                      </span>

                    </a> <!-- / .row -->
                    
                    <!-- Collapse -->
                    <div class="collapse" id="featuresThree" data-parent="#featuresAccordion">
                      <div class="py-5 py-md-6">
                        <p>
                          <textarea name="d58" style="height:150px; width:500px" ><?php echo e(old('d58')?old('d58'):$d58); ?></textarea>
                        </p>
                        <a  class="font-weight-bold text-decoration-none">
                          <input type="text" name="d59" id="d59" value="<?php echo e(old('d59')?old('d59'):$d59); ?>" /> <i class="fe fe-arrow-right ml-3"></i>
                        </a>
                        <p>URL<input type="text" name="d60" id="d60" value="<?php echo e(old('d60')?old('d60'):$d60); ?>" /></p>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative mt-n16">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
      </div>
    </div>
</form>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master3', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>