@extends('layouts.master3')



@section('content')

<style>
    textarea {
  
}
</style>

                                         @if(Request::segment(4)==='edit')
                                        {{ Form::model($service, array('route' => array('service3.update', $service->id), 'method' => 'PUT','enctype'=>'multipart/form-data')) }}
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
                                        @else
                                        {{ Form::open(array('url' => 'admin/service3','enctype'=>'multipart/form-data','autocomplete'=>"off")) }}

                                        <?php 
                                                                              
                                          

                                        ?>
                                        @endif
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

          

          <a href="{{URL ('admin/dashboard')}}" class="navbar-brand">Cancel</a>
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
              <input type="text" name="d" id="d" value="{{old('d')?old('d'):$d}}" />
            </h1>

            <!-- Text -->
            <p class="lead text-white mb-8">
              <textarea name="d1" style="width:500px;  height:150px;">{{old('d1')?old('d1'):$d1}}</textarea>
            </p>

            <!-- Button -->
            <a class="btn btn-white shadow lift">
              <input type="text" name="d2" id="d2" value="{{old('d2')?old('d2'):$d2}}" />
            </a>
            <p>URL
            <input type="text" name="d4" id="d4" value="{{old('d4')?old('d4'):$d4}}" /></p>

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
              <input type="text" name="d3" id="d3" value="{{old('d3')?old('d3'):$d3}}" /> 
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-9">
              <textarea name="d5" style="width:500px;  height:150px;">{{old('d5')?old('d5'):$d5}}</textarea>
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-lg-6">
            
            <!-- Item -->
            <div class="row align-items-center mb-8"data-aos="fade-up">
              <div class="col-4 col-lg-5">
                
                <!-- Image -->
                <img src="{{asset ('assets/ui/img/illustrations/illustration-4.png')}}" alt="..." class="img-fluid">

              </div>
              <div class="col-8 col-lg-7">
                
                <!-- Heading -->
                <h3 class="font-weight-bold mb-2">
                  <input type="text" name="d6" id="d6" value="{{old('d6')?old('d6'):$d6}}" />
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-0">
                  <textarea name="d7" style="width:300px;  height:150px;">{{old('d7')?old('d7'):$d7}}</textarea>
                </p>

              </div>
            </div> <!-- / .row -->

            <!-- Item -->
            <div class="row align-items-center mb-8" data-aos="fade-up">
              <div class="col-4 col-lg-5">
                
                <!-- Image -->
                <img src="{{asset ('assets/ui/img/illustrations/illustration-8.png')}}" alt="..." class="img-fluid">

              </div>
              <div class="col-8 col-lg-7">
                
                <!-- Heading -->
                <h3 class="font-weight-bold mb-2">
                  <input type="text" name="d8" id="d8" value="{{old('d8')?old('d8'):$d8}}" /> 
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-0">
                  <textarea name="d9" style="width:300px;  height:150px;">{{old('d9')?old('d9'):$d9}}</textarea>
                </p>

              </div>
            </div> <!-- / .row -->


          </div>
          <div class="col-12 col-lg-6">
            <!-- Item -->
            <div class="row align-items-center mb-8" data-aos="fade-up">
              <div class="col-4 col-lg-5">
                
                <!-- Image -->
                <img src="{{asset ('assets/ui/img/illustrations/illustration-7.png')}}" alt="..." class="img-fluid">

              </div>
              <div class="col-8 col-lg-7">
                
                <!-- Heading -->
                <h3 class="font-weight-bold mb-2">
                  <input type="text" name="d10" id="d10" value="{{old('d10')?old('d10'):$d10}}" />
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-0">
                  <textarea name="d11" style="width:300px;  height:150px;">{{old('d11')?old('d11'):$d11}}</textarea>
                </p>

              </div>
            </div> <!-- / .row -->

            <!-- Item -->
            <div class="row align-items-center mb-8" data-aos="fade-up">
              <div class="col-4 col-lg-5">
                
                <!-- Image -->
                <img src="{{asset ('assets/ui/img/illustrations/illustration-6.png')}}" alt="..." class="img-fluid">

              </div>
              <div class="col-8 col-lg-7">
                
                <!-- Heading -->
                <h3 class="font-weight-bold mb-2">
                  <input type="text" name="d12" id="d12" value="{{old('d12')?old('d12'):$d12}}" />
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-0">
                  <textarea name="d13" style="width:300px;  height:150px;">{{old('d13')?old('d13'):$d13}}</textarea>
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
              <span class="h6 text-uppercase"><input type="text" name="d14" id="d14" value="{{old('d14')?old('d14'):$d14}}" /></span>
            </span>

            <!-- Heading -->
            <h2 class="font-weight-bold">
              <input type="text" name="d15" id="d15" value="{{old('d15')?old('d15'):$d15}}" /> <br>
              <span class="text-success"><input type="text" name="d16" id="d16" value="{{old('d16')?old('d16'):$d16}}" /></span>.
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700">
              <textarea name="d17" style="width:300px;  height:150px;">{{old('d17')?old('d17'):$d17}}</textarea>
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
                    <input type="text" name="d18" id="d18" value="{{old('d18')?old('d18'):$d18}}" />
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
                        <input type="text" name="d19" id="d19" value="{{old('d19')?old('d19'):$d19}}" />
                      </p>

                      <!-- Text -->
                      <p class="font-size-sm text-muted mb-0">
                        <input type="text" name="d20" id="d20" value="{{old('d20')?old('d20'):$d20}}" />
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
                        <input type="text" name="d21" id="d21" value="{{old('d21')?old('d21'):$d21}}" />
                      </p>

                      <!-- Text -->
                      <p class="font-size-sm text-muted mb-0">
                        <input type="text" name="d22" id="d22" value="{{old('d22')?old('d22'):$d22}}" />
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
                        <input type="text" name="d23" id="d23" value="{{old('d23')?old('d23'):$d23}}" />
                      </p>

                      <!-- Text -->
                      <p class="font-size-sm text-muted mb-0">
                       <input type="text" name="d24" id="d24" value="{{old('d24')?old('d24'):$d24}}" />
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
                        <input type="text" name="d25" id="d25" value="{{old('d25')?old('d25'):$d25}}" />
                      </p>

                      <!-- Text -->
                      <p class="font-size-sm text-muted mb-0">
                        <input type="text" name="d26" id="d26" value="{{old('d26')?old('d26'):$d26}}" />
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
              <input type="text" name="d27" id="d27" value="{{old('d27')?old('d27'):$d27}}" />
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- TESTIMONIALS
    ================================================== -->
    <section data-jarallax data-speed=".8" class="py-15 overlay overlay-black overlay-60 jarallax" style="background-image: url(assets/ui/img/covers/.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-7">
            
            <!-- Blockquote -->
            <blockquote class="blockquote mb-0">

              <!-- Text -->
              <p class="h2 text-white">
                <textarea name="d28" id="d28" style="width:700px;  height:300px;">{{old('d28')?old('d28'):$d28}}</textarea>
              </p>

              <!-- Footer -->
              <footer class="blockquote-footer text-white-50 mb-0">
                <input type="text" name="d29" id="d29" value="{{old('d29')?old('d29'):$d29}}" />
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
              <span class="h6 text-uppercase"><input type="text" name="d30" id="d30" value="{{old('d30')?old('d30'):$d30}}" /></span>
            </span>

            <!-- Heading -->
            <h2 class="font-weight-bold">
              <input type="text" name="d31" id="d31" value="{{old('d31')?old('d31'):$d31}}" />
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-9">
              <textarea name="d32" style="width:500px;  height:150px;">{{old('d32')?old('d32'):$d32}}</textarea>
            </p>

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
              <span class="h6 text-uppercase"><input type="text" name="d45" id="d45" value="{{old('d45')?old('d45'):$d45}}" /></span>
            </span>

            <!-- Heading -->
            <h2 class="font-weight-bold">
              <input type="text" name="d46" id="d46" value="{{old('d46')?old('d46'):$d46}}" />
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-9">
              <textarea name="d47" style="width:500px;  height:150px;">{{old('d47')?old('d47'):$d47}}</textarea>
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
              
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
             
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              <input type="text" name="d72" id="d72" value="{{old('d72')?old('d72'):$d72}}" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8">
              <textarea name="d48" style="width:300px;  height:150px;">{{old('d48')?old('d48'):$d48}}</textarea>
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up" >

            <!-- Icon -->
            <div class="icon icon-lg mb-4">
             
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              <input type="text" name="d49" id="d49" value="{{old('d49')?old('d49'):$d49}}" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8 mb-lg-0">
              <textarea name="d50" style="width:300px;  height:150px;">{{old('d50')?old('d50'):$d50}}</textarea>
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
              
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
              
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              <input type="text" name="d51" id="d51" value="{{old('d51')?old('d51'):$d51}}" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8 mb-md-0">
              <textarea name="d52" style="width:300px;  height:150px;">{{old('d52')?old('d52'):$d52}}</textarea>
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
            
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
             
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              <input type="text" name="d53" id="d53" value="{{old('d53')?old('d53'):$d53}}" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8">
              <textarea name="d54" style="width:300px;  height:150px;">{{old('d54')?old('d54'):$d54}}</textarea>
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
              
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
             
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              <input type="text" name="d55" id="d55" value="{{old('d55')?old('d55'):$d55}}" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8">
              <textarea name="d56" style="width:300px;  height:150px;">{{old('d56')?old('d56'):$d56}}</textarea>
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
              
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
              
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              <input type="text" name="d57" id="d57" value="{{old('d57')?old('d57'):$d57}}" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-0">
              <textarea name="d58" style="width:300px;  height:150px;">{{old('d58')?old('d58'):$d58}}</textarea>
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
                      <!-- <img src="{{asset ('assets/ui/img/illustrations/illustration-1.png')}}" alt="..." class="img-fluid mb-3" style="width: 200px;"> -->
                    </div>

                    <!-- Heading -->
                    <h2 class="font-weight-bold text-center mb-1">
                      <input type="text" name="d59" id="d59" value="{{old('d59')?old('d59'):$d59}}" />
                    </h2>

                    <!-- Text -->
                    <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
                      <input type="text" name="d60" id="d60" value="{{old('d60')?old('d60'):$d60}}" />
                    </p>

                    <!-- Form -->
                    
                      <div class="row">
                        <div class="col-12 col-md-6">

                          <!-- First name -->
                          <div class="form-label-group">
                            <input type="text" class="form-control form-control-flush" id="registrationFirstName" placeholder="First name">
                            <label for="registrationFirstName"><input type="text" name="d61" id="d61" value="{{old('d61')?old('d61'):$d61}}" /></label>
                          </div>

                        </div>
                        <div class="col-12 col-md-6">

                          <!-- Last name -->
                          <div class="form-label-group">
                            <input type="text" class="form-control form-control-flush" id="registrationLastName" placeholder="Last name">
                            <label for="registrationLastName"><input type="text" name="d62" id="d62" value="{{old('d62')?old('d62'):$d62}}" /></label>
                          </div>

                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md-6">

                          <!-- Email -->
                          <div class="form-label-group">
                            <input type="email" class="form-control form-control-flush" id="registrationEmail" placeholder="Email">
                            <label for="registrationEmail"><input type="text" name="d63" id="d63" value="{{old('d63')?old('d63'):$d63}}" /></label>
                          </div>

                        </div>
                        <div class="col-12 col-md-6">

                          <!-- Password -->
                          <div class="form-label-group">
                            <input type="password" class="form-control form-control-flush" id="registrationPassword" placeholder="Password">
                            <label for="registrationPassword"><input type="text" name="d64" id="d64" value="{{old('d64')?old('d64'):$d64}}" /></label>
                          </div>

                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          
                          <!-- Submit -->
                          <button class="btn btn-block btn-primary mt-3 lift">
                            <input type="text" name="d65" id="d65" value="{{old('d65')?old('d65'):$d65}}" />
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
@endsection