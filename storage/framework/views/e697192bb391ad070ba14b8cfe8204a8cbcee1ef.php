



<?php $__env->startSection('content'); ?>

<style>
    textarea {
  
}
</style>

                                         <?php if(Request::segment(4)==='edit'): ?>
                                        <?php echo e(Form::model($service, array('route' => array('service.update', $service->id), 'method' => 'PUT','enctype'=>'multipart/form-data'))); ?>

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
                                          // $d40           = $service->d40;
                                          $d41           = $service->d41;
                                          // $d42           = $service->d42;
                                          $d43           = $service->d43;
                                          // $d44           = $service->d44;
                                          $d45           = $service->d45;
                                          $d46           = $service->d46;
                                          $d47           = $service->d47;
                                          $d48           = $service->d48;
                                          $d49           = $service->d49;
                                          $d50           = $service->d50;
                                          $d51           = $service->d51;
                                          
                                        ?>
                                        <?php else: ?>
                                        <?php echo e(Form::open(array('url' => 'admin/service','enctype'=>'multipart/form-data','autocomplete'=>"off"))); ?>


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
    <section class="position-relative pt-12 pt-md-14 mt-n11">


      <!-- Shape -->
      <div class="shape shape-fluid-x shape-blur-2 svg-shim text-light">
        <svg viewBox="0 0 1313 768" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M442.794 768c163.088 0 305.568-88.227 382.317-219.556l.183.556s.249-.749.762-2.181a440.362 440.362 0 0033.192-71.389C901.996 397.81 989.306 277.09 1144.29 206l-.92-.693C1230.34 171.296 1295.63 94.049 1312.83 0H1.294v295.514c-.663 9.909-1 19.908-1 29.986 0 244.386 198.114 442.5 442.5 442.5z" fill="currentColor"/></svg>
      </div>

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center text-center text-md-left">
          <div class="col-12 col-md-6">
            
            <!-- Image -->
            <img src="<?php echo e(asset ('assets/ui/img/illustrations/illustration-8.png')); ?>" alt="..." class="img-fluid mw-130 float-right mb-6 mb-md-0" data-aos="fade-right"><a class="dropdown-item" data-toggle="modal">
                      Change</a><input  id="image1" name="image1" type="file">

                    <div class="text text-danger" id="image1Erro"></div>
                    <?php if($errors->has('image1')): ?>
                     <div class="text text-danger"><?php echo e($errors->first('image1')); ?></div>
                    <?php endif; ?>


          </div>
          <div class="col-12 col-md-6">
            
            <!-- Heading -->
            <h1 class="display-1 font-weight-bold">
              <div data-aos="fade-left"><input type="text" name="d" id="d" value="<?php echo e(old('d')?old('d'):$d); ?>" /></div>
              <div data-aos="fade-left" data-aos-delay="100"><input type="text" name="d1" id="d1" value="<?php echo e(old('d1')?old('d1'):$d1); ?>" /></div>
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-0" data-aos="fade-left" data-aos-delay="200"><textarea name="d2" style="width:500px;  height:150px; "><?php echo e(old('d2')?old('d2'):$d2); ?></textarea></p>

          </div>
        </div> 
      </div> 

    </section>

    <!-- HUB
    ================================================== -->
    <section class="py-8 py-md-11">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 text-center" data-aos="fade-up">
            
            <!-- Icon -->
            <div class="icon text-primary mb-3">
              <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M7 3h10a4 4 0 110 8H7a4 4 0 110-8zm0 6a2 2 0 100-4 2 2 0 000 4z" fill="#335EEA"/><path d="M7 13h10a4 4 0 110 8H7a4 4 0 110-8zm10 6a2 2 0 100-4 2 2 0 000 4z" fill="#335EEA" opacity=".3"/></g></svg>
            </div>

            <!-- Heading -->
            <h3>
              <input type="text" name="d3" id="d3" value="<?php echo e(old('d3')?old('d3'):$d3); ?>" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0"><textarea name="d4" style="width:300px;  height:150px; "><?php echo e(old('d4')?old('d4'):$d4); ?></textarea></p>

          </div>
          <div class="col-12 col-md-4 text-center" data-aos="fade-up" data-aos-delay="50">

            <!-- Icon -->
            <div class="icon text-primary mb-3">
              <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M5.5 4h4A1.5 1.5 0 0111 5.5v1A1.5 1.5 0 019.5 8h-4A1.5 1.5 0 014 6.5v-1A1.5 1.5 0 015.5 4zm9 12h4a1.5 1.5 0 011.5 1.5v1a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-1a1.5 1.5 0 011.5-1.5z" fill="#335EEA"/><path d="M5.5 10h4a1.5 1.5 0 011.5 1.5v7A1.5 1.5 0 019.5 20h-4A1.5 1.5 0 014 18.5v-7A1.5 1.5 0 015.5 10zm9-6h4A1.5 1.5 0 0120 5.5v7a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-7A1.5 1.5 0 0114.5 4z" fill="#335EEA" opacity=".3"/></g></svg>
            </div>

            <!-- Heading -->
            <h3>
              <input type="text" name="d5" id="d5" value="<?php echo e(old('d5')?old('d5'):$d5); ?>" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0"><textarea name="d6" style="width:300px;  height:150px; "><?php echo e(old('d6')?old('d6'):$d6); ?></textarea></p>

          </div>
          <div class="col-12 col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
              
            <!-- Icon -->
            <div class="icon text-primary mb-3">
              <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M17.272 8.685a1 1 0 111.456-1.37l4 4.25a1 1 0 010 1.37l-4 4.25a1 1 0 01-1.456-1.37l3.355-3.565-3.355-3.565zm-10.544 0L3.373 12.25l3.355 3.565a1 1 0 01-1.456 1.37l-4-4.25a1 1 0 010-1.37l4-4.25a1 1 0 011.456 1.37z" fill="#335EEA"/><rect fill="#335EEA" opacity=".3" transform="rotate(15 12 12)" x="11" y="4" width="2" height="16" rx="1"/></g></svg>
            </div>

            <!-- Heading -->
            <h3>
              <input type="text" name ="d7" id="d7" value="<?php echo e(old('d7')?old('d7'):$d7); ?>" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-0"><textarea name="d8" style="width:300px;  height:150px; "><?php echo e(old('d8')?old('d8'):$d8); ?></textarea></p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="py-8 py-md-11 bg-gray-200">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 text-center">
            
            <!-- Heading -->
            <h2 class="font-weight-bold">
              <input type="text" name ="d9" id="d9" value="<?php echo e(old('d9')?old('d9'):$d9); ?>" />
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7 mb-md-9">
              <textarea name="d10" style="width:500px;  height:80px; "><?php echo e(old('d10')?old('d10'):$d10); ?></textarea>
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="form-row">
          <div class="col-12 col-lg-6 d-lg-flex pb-1 mb-4">
            
            <!-- Card -->
            <div class="card shadow-light-lg overflow-hidden" data-aos="fade-up">
              <div class="row">
                <div class="col-md-4 position-relative">
                  
                  <!-- Image -->
                  <img src="<?php echo e(asset ('assets/ui/img/illustrations/illustration-8.png')); ?>" class="h-75 position-absolute right-0 mt-7 mr-n4" alt="...">



                </div>

                <div class="col-md-8">
                  
                  <!-- Body -->
                  <div class="card-body py-7 py-md-9 text-center">
                    
                    <!-- Heading -->
                    <h4 class="font-weight-bold">
                      <input type="text" name="d11" id="d11" value="<?php echo e(old('d11')?old('d11'):$d11); ?>" />
                    </h4>

                    <!-- Text -->
                    <p class="text-muted mb-0"><textarea name="d12" style="width:220px;  height:120px; "><?php echo e(old('d12')?old('d12'):$d12); ?></textarea>
                    </p>
                    
                  </div>

                </div>
                <input  id="image2" name="image2" type="file">

                    <div class="text text-danger" id="image2Erro"></div>
                    <?php if($errors->has('image2')): ?>
                     <div class="text text-danger"><?php echo e($errors->first('image2')); ?></div>
                    <?php endif; ?>
              </div> <!-- / .row -->
            </div>

          </div>
          <div class="col-12 col-lg-6 d-lg-flex pb-1 mb-4">
            
            <!-- Card -->
            <div class="card shadow-light-lg overflow-hidden text-center" data-aos="fade-up">
              <div class="row">
                <div class="col-md-8">
                  
                  <!-- Body -->
                  <div class="card-body py-7 py-md-9">
                    
                    <!-- Heading -->
                    <h4 class="font-weight-bold">
                      <input type="text" name="d13" id="d13" value="<?php echo e(old('d13')?old('d13'):$d13); ?>" />
                    </h4>

                    <!-- Text -->
                    <p class="text-muted mb-0">
                      <textarea name="d14" style="width:230px;  height:140px; "><?php echo e(old('d14')?old('d14'):$d14); ?></textarea>
                    </p>
                    
                  </div>
                  <input  id="image3" name="image3" type="file">

                    <div class="text text-danger" id="image3Erro"></div>
                    <?php if($errors->has('image3')): ?>
                     <div class="text text-danger"><?php echo e($errors->first('image3')); ?></div>
                    <?php endif; ?>
                </div>

                <div class="col-md-4">
                  
                  <!-- Image -->
                  <img src="<?php echo e(asset ('assets/ui/img/illustrations/illustration-6.png')); ?>" class="h-75 position-absolute left-0 mt-7" alt="...">

                </div>
              </div> <!-- / .row -->
            </div>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">
            
            <!-- Card -->
            <div class="card shadow-light-lg overflow-hidden text-center text-lg-left" data-aos="fade-up">
              <div class="row">
                <div class="col-md-4 position-relative">
                  
                  <!-- Image -->
                  <img src="<?php echo e(asset ('assets/ui/img/illustrations/illustration-2.png')); ?>" class="h-75 position-absolute right-0 mt-6" alt="...">

                </div>
                <div class="col-md-8">

                  <!-- Body -->
                  <div class="card-body py-7 py-md-9">
                  
                    <!-- Heading -->
                    <h4 class="font-weight-bold">
                      <input type="text" name="d15"  id="d15" value="<?php echo e(old('d15')?old('d15'):$d15); ?>" />
                    </h4>

                    <!-- Text -->
                    <p class="text-muted mb-0"><textarea name="d16" style="width:510px;  height:200px; ">
                      <?php echo e(old('d16')?old('d16'):$d16); ?></textarea>
                    </p>

                  </div>

                </div>
                <input  id="image4" name="image4" type="file">

                    <div class="text text-danger" id="image4Erro"></div>
                    <?php if($errors->has('image4')): ?>
                     <div class="text text-danger"><?php echo e($errors->first('image4')); ?></div>
                    <?php endif; ?>
              </div> <!-- / .row -->
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- TESTIMONIALS
    ================================================== -->
    <section class="pt-8 pt-md-11">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Heading -->
            <h2 class="font-weight-bold">
              <input name="d17" value="<?php echo e(old('d17')?old('d17'):$d17); ?>" />
            </h2>

            <!-- Text -->
            <p class="text-muted mb-7 mb-md-9"><textarea name="d18" style="width:600px;  height:200px; ">
              <?php echo e(old('d18')?old('d18'):$d18); ?></textarea>
            </p>

          </div>
        </div> <!-- / .row -->
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
                      <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M1447.629 301.83c0 28.119-22.658 50.76-50.777 50.76-28.118 0-50.76-22.641-50.76-50.76s21.87-50.76 50.76-50.76c28.915.78 50.777 23.43 50.777 50.76zm-209.316 102.317v12.5s-24.202-31.256-75.75-31.256c-85.121 0-151.517 64.828-151.517 154.638 0 89.037 65.615 154.638 151.517 154.638 52.328 0 75.75-32.02 75.75-32.02v13.271c0 6.25 4.697 10.923 10.939 10.923h63.252V393.177h-63.252c-6.242.024-10.939 5.5-10.939 10.97zm0 188.21c-11.703 17.189-35.14 32.028-63.251 32.028-49.98 0-88.258-31.24-88.258-84.356 0-53.11 38.277-84.349 88.258-84.349 27.338 0 52.328 15.62 63.251 32.02v104.658zm121.058-199.156h74.97v293.664h-74.97V393.2zm1119.954-7.818c-51.548 0-75.766 31.255-75.766 31.255V251.85h-74.97v435.015h63.267c6.25 0 10.923-5.47 10.923-10.94v-13.27s24.218 32.02 75.75 32.02c85.137 0 151.518-65.585 151.518-154.623s-66.38-154.669-150.722-154.669zm-12.499 238.214c-28.906 0-51.548-14.824-63.267-32.02V486.92c11.719-15.62 36.709-32.02 63.267-32.02 49.98 0 88.25 31.24 88.25 84.349 0 53.109-38.261 84.348-88.25 84.348zm-177.28-110.891v174.939h-74.985V521.288c0-48.412-15.62-67.949-57.767-67.949-22.642 0-46.08 11.72-60.942 28.907v204.626h-74.955V393.21h59.335c6.25 0 10.938 5.469 10.938 10.938v12.5c21.87-22.658 50.76-31.256 79.652-31.256 32.808 0 60.147 9.386 82.016 28.126 26.543 21.87 36.709 49.98 36.709 99.189zm-450.65-127.323c-51.532 0-75.75 31.255-75.75 31.255V251.85h-74.97v435.015h63.251c6.25 0 10.939-5.47 10.939-10.94v-13.27s24.218 32.02 75.75 32.02c85.137 0 151.518-65.585 151.518-154.623.78-89.045-65.6-154.669-150.737-154.669zm-12.498 238.214c-28.891 0-51.533-14.824-63.252-32.02V486.92c11.719-15.62 36.709-32.02 63.252-32.02 49.996 0 88.257 31.24 88.257 84.349 0 53.109-38.261 84.348-88.257 84.348zm-203.05-238.214c22.641 0 34.36 3.917 34.36 3.917v69.5s-62.48-21.088-101.52 23.438v205.399H1481.2V393.2h63.267c6.25 0 10.923 5.469 10.923 10.938v12.5c14.075-16.409 44.535-31.256 67.957-31.256zM844.705 660.306c-3.901-9.37-7.81-19.52-11.711-28.119-6.258-14.051-12.507-27.338-17.96-39.83l-.781-.78c-53.897-117.156-111.68-235.858-172.606-352.999l-2.34-4.696a1536.65 1536.65 0 01-18.734-36.71c-7.817-14.067-15.62-28.89-28.119-42.958-24.99-31.24-60.918-48.427-99.18-48.427-39.057 0-74.198 17.188-99.96 46.859-11.72 14.052-20.317 28.891-28.12 42.958a1695.173 1695.173 0 01-18.732 36.71l-2.349 4.696c-60.138 117.141-118.709 235.85-172.598 353l-.788 1.552c-5.462 12.514-11.719 25.786-17.968 39.83-3.901 8.597-7.803 17.968-11.704 28.118-10.158 28.892-13.287 56.23-9.37 84.357 8.59 58.578 47.632 107.763 101.529 129.647 20.309 8.598 41.398 12.5 63.26 12.5 6.249 0 14.051-.78 20.308-1.569 25.779-3.12 52.33-11.703 78.107-26.543 32.02-17.968 62.48-43.73 96.84-81.22 34.36 37.49 65.6 63.252 96.84 81.22 25.786 14.84 52.329 23.422 78.1 26.543 6.249.796 14.066 1.568 20.316 1.568 21.87 0 43.73-3.9 63.252-12.499 54.677-21.884 92.938-71.85 101.536-129.647 6.203-27.331 3.082-54.654-7.068-83.56zm-352.219 40.61c-42.178-53.109-69.517-103.09-78.88-145.252-3.9-17.968-4.688-33.588-2.34-47.647 1.553-12.5 6.25-23.438 12.499-32.808 14.84-21.074 39.83-34.36 68.729-34.36 28.907 0 54.677 12.498 68.736 34.36 6.25 9.37 10.931 20.316 12.507 32.808 2.333 14.067 1.553 30.46-2.348 47.647-9.402 41.383-36.74 91.37-78.903 145.252zm311.6 36.71c-5.46 40.61-32.8 75.765-71.06 91.385-18.742 7.802-39.058 10.15-59.352 7.802-19.52-2.348-39.057-8.598-59.35-20.3-28.119-15.636-56.23-39.83-89.038-75.767 51.54-63.252 82.78-121.058 94.5-172.59 5.469-24.218 6.257-46.08 3.9-66.397-3.113-19.52-10.15-37.489-21.081-53.109-24.226-35.156-64.843-55.45-110.127-55.45-45.283 0-85.901 21.09-110.111 55.45-10.93 15.62-17.968 33.588-21.09 53.11-3.12 20.316-2.348 42.958 3.902 66.395 11.71 51.533 43.73 110.112 94.491 173.371-32.02 35.929-60.919 60.147-89.037 75.766-20.31 11.72-39.822 17.969-59.343 20.302a124.96 124.96 0 01-59.359-7.803c-38.261-15.62-65.6-50.776-71.061-91.386-2.341-19.52-.788-39.042 7.03-60.91 2.332-7.819 6.249-15.62 10.15-24.991 5.47-12.499 11.703-25.786 17.96-39.057l.788-1.553c53.882-116.376 111.672-235.085 171.81-350.666l2.341-4.697c6.258-11.703 12.507-24.202 18.749-35.92 6.25-12.5 13.271-24.219 21.87-34.377 16.4-18.725 38.26-28.891 62.478-28.891 24.218 0 46.08 10.166 62.48 28.891 8.598 10.182 15.62 21.9 21.87 34.376 6.256 11.719 12.506 24.218 18.74 35.921l2.348 4.697a10341.109 10341.109 0 01171.038 351.446v.78c6.257 12.515 11.719 26.559 17.968 39.073 3.901 9.355 7.81 17.157 10.15 24.975 6.235 20.285 8.575 39.822 5.447 60.123z" fill="currentColor" fill-rule="nonzero"/></svg><input  id="image5" name="image5" type="file">

                    <div class="text text-danger" id="image5Erro"></div>
                    <?php if($errors->has('image5')): ?>
                     <div class="text text-danger"><?php echo e($errors->first('image5')); ?></div>
                    <?php endif; ?>
                    </div>

                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                      <textarea name="d19" style="width:200px;  height:200px; "><?php echo e(old('d19')?old('d19'):$d19); ?></textarea>
                    </p>

                    <!-- Link -->
                    <input type="text" id="d20" name="d20" value="<?php echo e(old('d20')?old('d20'):$d20); ?>" /></br>
                    <input type="text" id="d21" name="d21" value="<?php echo e(old('d21')?old('d21'):$d21); ?>" />
                    
                  </div>
                </div>

              </div>
              <div class="col-12 col-md-5 col-lg-4">
                
                <!-- Card -->
                <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #B81D24;">
                  <div class="card-body text-center">

                    <!-- Icon -->
                    <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #B81D24;">
                      <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M2140.629 749.008c29.915 2.896 59.815 6.007 89.644 9.225l65.859-162.412 62.6 177.393a7894.176 7894.176 0 0196.232 12.643l-109.75-311.073L2455 204.021h-92.981l-.967 1.33-59.307 146.273-52.068-147.581h-91.807l94.779 268.625-112.013 276.34h-.007zm-69.432-6.364V204.02h-91.77v531.064c30.609 2.36 61.233 4.892 91.77 7.552v.007zm-689.374-30.12c24.774 0 49.52.186 74.222.386V515.03h110.244v-84.267h-110.237V288.388h126.97v-84.367h-219.099v508.575c5.95 0 11.929-.093 17.9-.072zm-284.928 5.149a8147.87 8147.87 0 0191.82-2.746V288.402h85.779v-84.36h-263.377v84.36h85.792v429.27h-.014zm-701.862 56.793V453.568l108.662 307.94a7954.136 7954.136 0 01100.442-10.605V204.03h-88.055v332.396L398.828 204.03H307V786h.551c29.092-4.019 58.284-7.837 87.482-11.534zM922.625 288.38v-84.352h-219.12v537.757a7890.227 7890.227 0 01218.941-15.81v-84.432a7642.138 7642.138 0 00-126.805 8.445V515.066h110.244v-84.317H795.64V288.38h126.984zm842.27 349.13V204h-92.171v513.98c73.32 2.69 146.352 6.436 219.142 11.156v-84.481a8007.367 8007.367 0 00-126.97-7.151v.007z" fill="currentColor" fill-rule="nonzero"/></svg><input  id="image6" name="image6" type="file">

                    <div class="text text-danger" id="image6Erro"></div>
                    <?php if($errors->has('image6')): ?>
                     <div class="text text-danger"><?php echo e($errors->first('image6')); ?></div>
                    <?php endif; ?>
                    </div>

                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                      <textarea name="d22" style="width:200px;  height:200px; "><?php echo e(old('d22')?old('d22'):$d22); ?></textarea>
                    </p>

                    <!-- Link -->
                    <input type="text" id="d23" name="d23" value="<?php echo e(old('d23')?old('d23'):$d23); ?>" /></br>
                    <input type="text" id="d24" name="d24" value="<?php echo e(old('d24')?old('d24'):$d24); ?>" />
                    
                  </div>
                </div>

              </div>
              <div class="col-12 col-md-5 col-lg-4">
                
                <!-- Card -->
                <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #0081C9;">
                  <div class="card-body text-center">

                    <!-- Icon -->
                    <div class="img-fluid mb-5 w-50 svg-shim mx-auto" style="color: #0081C9;">
                      <svg viewBox="0 0 2761 991" xmlns="http://www.w3.org/2000/svg"><path d="M326.558 759C247.442 759 170 702.045 170 573.476c0-128.987 77.442-185.105 156.558-185.105 38.93 0 69.489 10.051 91.256 24.29l-23.86 52.349c-14.652-10.47-36.42-17.17-58.187-17.17-47.72 0-91.255 37.69-91.255 124.799 0 87.108 44.79 125.636 91.255 125.636 21.768 0 43.535-6.7 58.186-17.17l23.861 53.605C395.209 749.787 365.488 759 326.558 759zm272.512 0c-100.884 0-156.558-79.989-156.558-185.524s55.255-185.105 156.558-185.105c100.883 0 156.558 79.151 156.558 185.105C755.628 679.011 699.953 759 599.07 759zm0-313.255c-56.093 0-83.721 50.255-83.721 126.894 0 76.638 27.628 127.312 83.72 127.312 56.094 0 83.722-50.674 83.722-127.312 0-76.639-27.628-126.894-83.721-126.894zm253.674-114.748c-23.86 0-43.116-18.427-43.116-41.042 0-22.614 19.256-41.041 43.116-41.041s43.116 18.427 43.116 41.041c0 22.615-19.674 41.042-43.116 41.042zm-36.418 64.493h72.837v355.972h-72.837V395.49zm358.325 355.972V514.008c0-41.46-25.116-67.425-74.511-67.425-26.373 0-50.652 4.606-65.303 10.47V751.88h-72V413.498c35.582-14.657 81.21-25.127 136.884-25.127 99.628 0 147.767 43.554 147.767 118.936v244.574h-72.837v-.42zm264.14 7.538c-46.047 0-91.675-11.307-119.721-25.127V233h72v171.704c17.163-7.957 44.79-14.658 69.488-14.658 91.675 0 154.047 66.169 154.047 175.054 0 134.432-69.489 193.9-175.814 193.9zM1448 446.583c-19.674 0-43.116 4.606-56.93 11.726v233.685c10.465 4.606 30.977 9.213 51.488 9.213 57.349 0 99.628-39.785 99.628-130.662.419-77.895-36.419-123.962-94.186-123.962zM1810.512 759c-102.14 0-154.047-41.46-154.047-111.817 0-99.253 105.488-116.842 213.07-122.705v-22.615c0-44.81-29.721-60.724-75.349-60.724-33.488 0-74.512 10.47-98.372 21.777l-18.419-49.418c28.465-12.563 76.605-25.127 124.326-25.127 84.977 0 136.884 33.084 136.884 121.03v224.472c-25.535 13.82-77.86 25.127-128.093 25.127zm59.441-186.361c-72.837 3.769-145.255 10.05-145.255 73.288 0 37.69 28.883 60.724 83.72 60.724 23.024 0 50.233-3.769 61.535-9.213v-124.8zM2101.023 759c-41.442 0-84.976-11.307-110.93-25.127l24.28-55.28c18.418 11.307 57.348 23.033 84.557 23.033 38.93 0 64.884-19.265 64.884-48.999 0-32.246-27.21-44.81-63.21-58.211-47.72-18.008-100.883-39.785-100.883-106.373 0-58.63 45.628-99.672 124.744-99.672 43.116 0 78.698 10.47 103.814 25.127l-22.605 50.255c-15.907-10.05-47.72-20.94-73.255-20.94-37.675 0-58.605 19.684-58.605 45.649 0 32.247 26.372 43.554 61.535 56.955 49.395 18.427 104.232 38.948 104.232 108.467C2239.163 717.12 2190.186 759 2101.023 759zm489.35-187.199l-236.513 33.084c7.117 64.075 48.977 96.322 108.838 96.322 35.581 0 74.093-8.795 98.372-21.777l20.93 54.024c-27.628 14.657-75.349 25.127-124.326 25.127-112.186 0-174.976-72.032-174.976-185.524 0-108.885 60.697-185.105 160.325-185.105 92.512 0 147.35 60.725 147.35 156.628.836 8.794.836 18.008 0 27.221zm-147.768-130.662c-55.256 0-91.675 42.297-92.93 116.423l172.465-23.87c-.838-61.982-32.233-92.553-79.535-92.553z" fill="currentColor" fill-rule="nonzero"/></svg><input  id="image7" name="image7" type="file">

                    <div class="text text-danger" id="image7Erro"></div>
                    <?php if($errors->has('image7')): ?>
                     <div class="text text-danger"><?php echo e($errors->first('image7')); ?></div>
                    <?php endif; ?>
                    </div>


                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                      <textarea name="d25" style="width:200px;  height:200px; "><?php echo e(old('d25')?old('d25'):$d25); ?></textarea>
                    </p>

                    <!-- Link -->
                    <input type="text" id="d26" name="d26" value="<?php echo e(old('d26')?old('d26'):$d26); ?>" /></br>
                    <input type="text" id="d27" name="d27" value="<?php echo e(old('d27')?old('d27'):$d27); ?>" />
                    
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
                      <input  id="image8" name="image8" type="file">

                    <div class="text text-danger" id="image8Erro"></div>
                    <?php if($errors->has('image8')): ?>
                     <div class="text text-danger"><?php echo e($errors->first('image8')); ?></div>
                    <?php endif; ?>
                    </div>


                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                      <textarea name="d28" style="width:200px;  height:200px; "><?php echo e(old('d28')?old('d28'):$d28); ?></textarea>
                    </p>

                    <input type="text" id="d29" name="d29" value="<?php echo e(old('d29')?old('d29'):$d29); ?>" /></br>
                    <input type="text" name="d30" id="d30" value="<?php echo e(old('d33')?old('d30'):$d30); ?>" />
                    
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
                      <input  id="image9" name="image9" type="file">

                    <div class="text text-danger" id="image9Erro"></div>
                    <?php if($errors->has('image9')): ?>
                     <div class="text text-danger"><?php echo e($errors->first('image9')); ?></div>
                    <?php endif; ?>
                    </div>


                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                      <textarea name="d31" style="width:200px;  height:200px; "><?php echo e(old('d31')?old('d31'):$d31); ?></textarea>
                    </p>

                    <input type="text" id="d32" name="d32" value="<?php echo e(old('d32')?old('d32'):$d32); ?>" /></br>
                    <input type="text" name="d33" id="d33" value="<?php echo e(old('d33')?old('d33'):$d33); ?>" />
                    
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
                      <input  id="image10" name="image10" type="file">

                    <div class="text text-danger" id="image10Erro"></div>
                    <?php if($errors->has('image10')): ?>
                     <div class="text text-danger"><?php echo e($errors->first('image10')); ?></div>
                    <?php endif; ?>
                    </div>

                    <!-- Text -->
                    <p class="text-gray-700 mb-5">
                      <textarea name="d34" style="width:200px;  height:200px; "><?php echo e(old('d34')?old('d34'):$d34); ?></textarea>
                    </p>

                    <input type="text" id="d35" name="d35" value="<?php echo e(old('d35')?old('d35'):$d35); ?>" /></br>
                    <input type="text" name="d36" id="d36" value="<?php echo e(old('d36')?old('d36'):$d36); ?>" />
                    
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="pt-5 pt-md-7">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">
            
            <!-- Heading -->
            <h2 class="font-weight-bold">
              <input type="text" name="d37"  value="<?php echo e(old('d37')?old('d37'):$d37); ?>" />
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-5"><textarea name="d38" style="width:500px;  height:200px; ">
              <?php echo e(old('d38')?old('d38'):$d38); ?></textarea>
            </p>

            <!-- Button -->
            <a href="#!" class="btn btn-primary-desat mb-6 mb-md-0 lift">
              <input type="text" name="d39" id="d39" value="<?php echo e(old('d39')?old('d39'):$d39); ?>" /> <i class="fe fe-arrow-right ml-3"></i>
            </a>

          </div>
          <div class="col-12 col-md-6">
            
            <!-- iPhone + Macbook -->
            <div class="w-md-130">
              <div class="device-combo device-combo-iphonex-macbook">

                <!-- iPhone -->
                <div class="device device-iphonex">
                  <img src="<?php echo e(asset ('assets/ui/img/screenshots/mobile/dashkit-alt.jpg')); ?>" class="device-screen" alt="...">
                  
                </div>

                <!-- Macbook -->
                <div class="device device-macbook">
                  <img src="<?php echo e(asset ('assets/ui/img/screenshots/desktop/dashkit-alt.jpg')); ?>" class="device-screen" alt="...">
                  <img src="<?php echo e(asset ('assets/ui/img/devices/macbook.svg')); ?>" class="img-fluid" alt="...">
                </div>

                
              </div>
              <input  id="image11" name="image11" type="file">

                    <div class="text text-danger" id="image11Erro"></div>
                    <?php if($errors->has('image11')): ?>
                     <div class="text text-danger"><?php echo e($errors->first('image11')); ?></div>
                    <?php endif; ?>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- STATS
    ================================================== -->
    <section class="py-8 pt-md-11 pb-md-12">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 text-center">
            
            <!-- Heading -->
            <h1 class="display-2 font-weight-bold text-primary-desat">
             <input type="text" name="d49" id="d49" value="<?php echo e(old('d49')?old('d49'):$d49); ?>" />
            </h1>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0">
             <textarea name="d41" style="width:300px;  height:150px;" ><?php echo e(old('d41')?old('d41'):$d41); ?></textarea>
            </p>

          </div>
          <div class="col-12 col-md-4 text-center">
            
            <!-- Heading -->
            <h1 class="display-2 font-weight-bold text-primary-desat">
              <input type="text" name="d50" id="d50" value="<?php echo e(old('d50')?old('d50'):$d50); ?>" />
            </h1>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0">
              <textarea name="d43" style="width:300px;  height:150px;" ><?php echo e(old('d43')?old('d43'):$d43); ?></textarea>
            </p>

          </div>
          <div class="col-12 col-md-4 text-center">
            
            <!-- Heading -->
            <h1 class="display-2 font-weight-bold text-primary-desat">
              <input type="text" name="d51" id="d51" value="<?php echo e(old('d51')?old('d51'):$d51); ?>" />
            </h1>

            <!-- Text -->
            <p class="text-muted mb-0">
              <textarea name="d45" style="width:300px;  height:150px;" ><?php echo e(old('d45')?old('d45'):$d45); ?> </textarea>
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- CTA
    ================================================== -->
    <section class="py-10 py-md-13 bg-gray-200 bg-between" style="background-image: url(assets/ui/img/illustrations/illustration-1-cropped.png), url(assets/ui/img/illustrations/illustration-3-cropped.png);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Heading -->
            <h2 class="font-weight-bold">
              <input type="text" name="d46" id="d46" value="<?php echo e(old('d46')?old('d46'):$d46); ?>" />
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-8 px-lg-9">
              <textarea name="d47" style="width:500px;  height:150px;" ><?php echo e(old('d47')?old('d47'):$d47); ?></textarea>
            </p>

            
              <input type="text" name="d48" id="d48" value="<?php echo e(old('d48')?old('d48'):$d48); ?>" />
            

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
    
</form>
    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
      </div>
    </div>
    
<script type="text/javascript">
function readURL(input) {
  if (input.image1 && input.image1[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#img1Preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

</script>

<script type="text/javascript">
function readURL(input) {
  if (input.image2 && input.image2[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#img2Preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

</script>

<script type="text/javascript">
function readURL(input) {
  if (input.image3 && input.image3[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#img3Preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

</script>

<script type="text/javascript">
function readURL(input) {
  if (input.image4 && input.image4[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#img4Preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

</script>

<script type="text/javascript">
function readURL(input) {
  if (input.image5 && input.image5[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#img5Preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

</script>

<script type="text/javascript">
function readURL(input) {
  if (input.image6 && input.image6[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#img6Preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

</script>

<script type="text/javascript">
function readURL(input) {
  if (input.image7 && input.image7[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#img7Preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

</script>

<script type="text/javascript">
function readURL(input) {
  if (input.image8 && input.image8[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#img8Preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

</script>
<script type="text/javascript">
function readURL(input) {
  if (input.image9 && input.image9[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#img9Preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

</script>
<script type="text/javascript">
function readURL(input) {
  if (input.image10 && input.image10[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#img10Preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

</script>
<script type="text/javascript">
function readURL(input) {
  if (input.image11 && input.image11[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#img11Preview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master3', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>