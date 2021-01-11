@extends('layouts.master3')



@section('content')

<style>
    textarea {
  
}
</style>

                                         @if(Request::segment(4)==='edit')
                                        {{ Form::model($service, array('route' => array('service8.update', $service->id), 'method' => 'PUT','enctype'=>'multipart/form-data')) }}
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
                                        @else
                                        {{ Form::open(array('url' => 'admin/service2','enctype'=>'multipart/form-data','autocomplete'=>"off")) }}

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
    <section class="pt-8 pb-11 pt-md-9 pb-md-12 py-lg-14 bg-light bg-between" style="background-image: url(assets/ui/img/illustrations/illustration-6-cropped.png), url(assets/ui/img/illustrations/illustration-4-cropped.png);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 text-center" data-aos="fade-up">

            <!-- Image (mobile) -->
            <img src="{{asset ('assets/ui/img/illustrations/illustration-8.png')}}" alt="..." class="img-fluid mb-6 d-lg-none">
            
            <!-- Heading -->
            <h1 class="display-2 font-weight-bold">
              <input type="text" name="d" id="d" value="{{old('d')?old('d'):$d}}" /> <br>
              <input type="text" name="d1" id="d1" value="{{old('d1')?old('d1'):$d1}}" />
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-6 mb-md-8">
              <textarea name="d2" style="width:500px;  height:150px; ">{{old('d2')?old('d2'):$d2}}</textarea>
            </p>

            <!-- Button -->
            <a  class="btn btn-primary mr-1 lift">
              <input type="text" name="d3" id="d3" value="{{old('d3')?old('d3'):$d3}}" /> <i class="fe fe-arrow-right ml-3"></i>
            </a>
            <a  class="btn btn-primary-soft lift">
              <input type="text" name="d4" id="d4" value="{{old('d4')?old('d4'):$d4}}" />
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
                  <input type="text" name="d5" id="d5" value="{{old('d5')?old('d5'):$d5}}" />
                  
                </span>

                <!-- Heading -->
                <h4 class="font-weight-bold">
                  <input type="text" name="d6" id="d6" value="{{old('d6')?old('d6'):$d6}}" />
                </h4>

                <!-- Text -->
                <p class="text-muted">
                  <textarea name="d7" style="width:150px;  height:150px;">{{old('d7')?old('d7'):$d7}}</textarea>
                </p>

                <!-- Link -->
                <a  class="font-size-sm font-weight-bold text-decoration-none">
                  <input type="text" name="d8" id="d8" value="{{old('d8')?old('d8'):$d8}}" /> <i class="fe fe-arrow-right ml-3"></i>
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
                  <input type="text" name="d9" id="d9" value="{{old('d9')?old('d9'):$d9}}" />
                </span>

                <!-- Heading -->
                <h4 class="font-weight-bold">
                  <input type="text" name="d10" id="d10" value="{{old('d10')?old('d10'):$d10}}" />
                </h4>

                <!-- Text -->
                <p class="text-muted">
                  <textarea name="d11" id="d11" style="width:150px;  height:150px;">{{old('d11')?old('d11'):$d11}}</textarea>
                </p>

                <!-- Link -->
                <a href="#!" class="font-size-sm font-weight-bold text-decoration-none">
                  <input type="text" name="d12" id="d12" value="{{old('d12')?old('d12'):$d12}}" /> <i class="fe fe-arrow-right ml-3"></i>
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
                  <input type="text" name="d13" id="d13" value="{{old('d13')?old('d13'):$d13}}" />
                </span>

                <!-- Heading -->
                <h4 class="font-weight-bold">
                  <input type="text" name="d14" id="d14" value="{{old('d14')?old('d14'):$d14}}" />
                </h4>

                <!-- Text -->
                <p class="text-muted">
                  <textarea name="d15" style="width:150px;  height:150px; ">{{old('d15')?old('d15'):$d15}}</textarea>
                </p>

                <!-- Link -->
                <a href="#!" class="font-size-sm font-weight-bold text-decoration-none">
                  <input type="text" name="d16" id="d14" value="{{old('d16')?old('d16'):$d16}}" /> <i class="fe fe-arrow-right ml-3"></i>
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
              <input type="text" name="d17" id="d17" value="{{old('d17')?old('d17'):$d17}}" />
            </h6>

            <!-- Heading -->
            <h1 class="font-weight-bold">
             <input type="text" name="d18" id="d18" value="{{old('d18')?old('d18'):$d18}}" />
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7">
              <textarea name="d19" style="width:150px;  height:150px; ">{{old('d19')?old('d19'):$d19}}</textarea>
            </p>
            
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 order-md-2">
            
            <!-- Macbook + iPhone -->
            <div class="device-combo device-combo-macbook-iphonex mb-6 mb-md-0">

              <!-- Macbook -->
              <div class="device device-macbook">
                <img src="{{asset ('assets/ui/img/screenshots/desktop/dashkit-alt.jpg')}}" class="device-screen" alt="...">
                <img src="{{asset ('assets/ui/img/devices/macbook.svg')}}" class="img-fluid" alt="...">
              </div>

              <!-- iPhone -->
              <div class="device device-iphonex">
                <img src="{{asset ('assets/ui/img/screenshots/mobile/dashkit-alt.jpg')}}" class="device-screen" alt="...">
                <img src="{{asset ('assets/ui/img/devices/iphonex.svg')}}" class="img-fluid" alt="...">
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
                    <input type="text" name="d21" id="d21" value="{{old('d21')?old('d21'):$d21}}" />
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
                    <input type="text" name="d22" id="d22" value="{{old('d22')?old('d22'):$d22}}" />
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
                    <input type="text" name="d24" id="d24" value="{{old('d24')?old('d24'):$d24}}" />
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
                    <input type="text" name="d25" id="d25" value="{{old('d25')?old('d25'):$d25}}" /> 
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
              <input type="text" name="d26" id="d26" value="{{old('d26')?old('d26'):$d26}}" />
            </h6>

            <!-- Heading -->
            <h1 class="font-weight-bold">
              <input type="text" name="d27" id="d27" value="{{old('d27')?old('d27'):$d27}}" />
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7 mb-md-9">
             <textarea name="d28" style="width:300px;  height:150px; ">{{old('d28')?old('d28'):$d28}}</textarea>
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
              <input type="text" name="d29" id="d29" value="{{old('d29')?old('d29'):$d29}}" />
              
            </h3>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0">
              <textarea name="d31" style="width:300px;  height:150px; ">{{old('d31')?old('d31'):$d31}}</textarea>

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
              <input type="text" name="d32" id="d32" value="{{old('d32')?old('d32'):$d32}}" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0">
              <textarea name="d34" style="width:300px;  height:150px; ">{{old('d34')?old('d34'):$d34}}</textarea>
              
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
              <input type="text" name="d35" id="d35" value="{{old('d35')?old('d35'):$d35}}" />
            </h3>

            <!-- Text -->
            <p class="text-muted mb-0">
              <textarea name="d37" style="width:300px;  height:150px; ">{{old('d37')?old('d37'):$d37}}</textarea>
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">
            
            

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
              <input type="text" name="d64" id="d64" value="{{old('d64')?old('d64'):$d64}}" />
            </h6>

            <!-- Heading -->
            <h1 class="font-weight-bold text-white">
              <input type="text" name="d65" id="d65" value="{{old('d65')?old('d65'):$d65}}" />
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-gray-500 mb-7 mb-md-9">
             <input type="text" name="d66" id="d66" value="{{old('d66')?old('d66'):$d66}}" />
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            
            <!-- Heading -->
            <h4 class="font-weight-bold text-white mb-5">
              <input type="text" name="d38" id="d38" value="{{old('d38')?old('d38'):$d38}}" />
            </h4>

            <!-- List -->
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <input type="text" name="d39" id="d39" value="{{old('d39')?old('d39'):$d39}}" />
              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <input type="text" name="d40" id="d40" value="{{old('d40')?old('d40'):$d40}}" />
              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <input type="text" name="d41" id="d41" value="{{old('d41')?old('d41'):$d41}}" />
              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300 mb-6 mb-lg-0">
                <input type="text" name="d42" id="d42" value="{{old('d42')?old('d42'):$d42}}" />
              </p>

            </div> <!-- / .row -->

          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            
            <!-- Heading -->
            <h4 class="font-weight-bold text-white mb-5">
              <input type="text" name="d43" id="d43" value="{{old('d43')?old('d43'):$d43}}" />
            </h4>

            <!-- List -->
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <input type="text" name="d44" id="d44" value="{{old('d44')?old('d44'):$d44}}" />
              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <input type="text" name="d45" id="d45" value="{{old('d45')?old('d45'):$d45}}" />
              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <input type="text" name="d46" id="d46" value="{{old('d46')?old('d46'):$d46}}" />
              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300 mb-6 mb-lg-0">
                <input type="text" name="d47" id="d47" value="{{old('d47')?old('d47'):$d47}}" />
              </p>

            </div> <!-- / .row -->

          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            
            <!-- Heading -->
            <h4 class="font-weight-bold text-white mb-5">
              <input type="text" name="d48" id="d48" value="{{old('d48')?old('d48'):$d48}}" />
            </h4>

            <!-- List -->
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <input type="text" name="d49" id="d49" value="{{old('d49')?old('d49'):$d49}}" />
              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <input type="text" name="d50" id="d50" value="{{old('d50')?old('d50'):$d50}}" />
              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <input type="text" name="d51" id="d51" value="{{old('d51')?old('d51'):$d51}}" />
              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300 mb-6 mb-lg-0">
                <input type="text" name="d52" id="d52" value="{{old('d52')?old('d52'):$d52}}" />
              </p>

            </div> <!-- / .row -->

          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            
            <!-- Heading -->
            <h4 class="font-weight-bold text-white mb-5">
              <input type="text" name="d53" id="d53" value="{{old('d53')?old('d53'):$d53}}" />
            </h4>

            <!-- List -->
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <input type="text" name="d54" id="d54" value="{{old('d54')?old('d54'):$d54}}" />
              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <input type="text" name="d55" id="d55" value="{{old('d55')?old('d55'):$d55}}" />
              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300">
                <input type="text" name="d56" id="d56" value="{{old('d56')?old('d56'):$d56}}" />
              </p>

            </div>
            <div class="d-flex">
                
              <!-- Badge -->
              <div class="badge badge-rounded-circle badge-success mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>
              
              <!-- Text -->
              <p class="text-gray-300 mb-0">
                <input type="text" name="d57" id="d57" value="{{old('d57')?old('d57'):$d57}}" />
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
              <input type="text" name="d58" id="d58" value="{{old('d58')?old('d58'):$d58}}" />
            </h3>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-6 mb-md-0">
              <input type="text" name="d59" id="d59" value="{{old('d59')?old('d59'):$d59}}" />
            </p>

          </div>
          <div class="col-12 col-md-auto">
                
            <!-- Button -->
            <a  class="btn btn-primary-soft mr-1 lift">
              <input type="text" name="d60" id="d60" value="{{old('d60')?old('d60'):$d60}}" />
            </a>
            <input type="text" name="d61" id="d61" value="{{old('d61')?old('d61'):$d61}}" />
            
            <a  class="btn btn-primary lift">
              <input type="text" name="d62" id="d62" value="{{old('d62')?old('d62'):$d62}}" />
            </a>
            <input type="text" name="d63" id="d63" value="{{old('d63')?old('d63'):$d63}}" />

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
@endsection