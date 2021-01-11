@extends('ui.layouts.app')
@section('title', 'Organization Combo | Digital In-Corporation')
@section('description', '')
@section('keywords', 'home | Digital In-Corporation')
@section('author', 'Digital In-Corporation')

@section('content')

@forelse ($services as $service)
   
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
              {{ $service->d }}
            </h1>

            <!-- Text -->
            <p class="lead text-white mb-8">
              {{ $service->d1 }}
            </p>

            <!-- Button -->
            <a href="{{ $service->d4 }}" class="btn btn-white shadow lift">
              {{ $service->d2 }}
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
              {{ $service->d3 }}
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-9">
              {{ $service->d5 }}
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
                  {{ $service->d6 }}
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-0">
                  {{ $service->d7 }}
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
                  {{ $service->d8 }} 
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-0">
                  {{ $service->d9 }}
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
                  {{ $service->d10 }}
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-0">
                  {{ $service->d11 }}
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
                  {{ $service->d12 }}
                </h3>

                <!-- Text -->
                <p class="text-gray-700 mb-0">
                  {{ $service->d13 }}
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
              <span class="h6 text-uppercase">{{ $service->d14 }}</span>
            </span>

            <!-- Heading -->
            <h2 class="font-weight-bold">
              {{ $service->d15 }} <br>
              <span class="text-success">{{ $service->d16 }}</span>.
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700">
              {{ $service->d17 }}
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
                  <button class="btn btn-success-soft">
                    {{ $service->d18 }}
                  </button>

                </div>
              </div>
            </form>

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
                        {{ $service->d19 }}
                      </p>

                      <!-- Text -->
                      <p class="font-size-sm text-muted mb-0">
                        {{ $service->d20 }}
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
                        {{ $service->d21 }}
                      </p>

                      <!-- Text -->
                      <p class="font-size-sm text-muted mb-0">
                        {{ $service->d22 }}
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
                        {{ $service->d23 }}
                      </p>

                      <!-- Text -->
                      <p class="font-size-sm text-muted mb-0">
                        {{ $service->d24 }}
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
                        {{ $service->d25}}
                      </p>

                      <!-- Text -->
                      <p class="font-size-sm text-muted mb-0">
                        {{ $service->d26 }}
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
              {{ $service->d27 }}
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- TESTIMONIALS
    ================================================== -->
    <section data-jarallax data-speed=".8" class="py-15 overlay overlay-black overlay-60 jarallax" style="background-image: url(assets/ui/img/covers/co.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-7">
            
            <!-- Blockquote -->
            <blockquote class="blockquote mb-0">

              <!-- Text -->
              <p class="h2 text-white">
                {{ $service->d28 }}
              </p>

              <!-- Footer -->
              <footer class="blockquote-footer text-white-50 mb-0">
                {{ $service->d29 }}
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
              <span class="h6 text-uppercase">{{ $service->d30 }}</span>
            </span>

            <!-- Heading -->
            <h2 class="font-weight-bold">
              {{ $service->d31 }}
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-9">
             {{ $service->d32 }}
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
              <span class="h6 text-uppercase">{{ $service->d45 }}</span>
            </span>

            <!-- Heading -->
            <h2 class="font-weight-bold">
              {{ $service->d46 }}
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-9">
              {{ $service->d47 }}
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
              {{$service->d72 }}
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8">
              {{ $service->d48 }}
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up" >

            <!-- Icon -->
            <div class="icon icon-lg mb-4">
             
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              {{ $service->d49 }}
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8 mb-lg-0">
              {{ $service->d50 }}
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
              
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
            
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              {{ $service->d51 }}
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8 mb-md-0">
              {{ $service->d52}}
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
            
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
             
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              {{ $service->d53 }}
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8">
              {{ $service->d54 }}
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
              
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
              
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              {{ $service->d55 }}
            </h3>

            <!-- Text -->
            <p class="text-muted mb-8">
              {{ $service->d56 }}
            </p>

          </div>
          <div class="col-12 col-md-6 col-lg-4 text-center" data-aos="fade-up">
              
            <!-- Icon -->
            <div class="icon icon-lg mb-4">
              
            </div>

            <!-- Heading -->
            <h3 class="font-weight-bold">
              {{ $service->d57 }}
            </h3>

            <!-- Text -->
            <p class="text-muted mb-0">
              {{ $service->d58 }}
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
                     <!--  <img src="{{asset ('assets/ui/img/illustrations/illustration-1.png')}}" alt="..." class="img-fluid mb-3" style="width: 200px;"> -->
                    </div>

                    <!-- Heading -->
                    <h2 class="font-weight-bold text-center mb-1">
                      {{ $service->d59 }}
                    </h2>

                    <!-- Text -->
                    <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
                     {{ $service->d60 }}
                    </p>

                    <!-- Form -->
                    <form>
                      <div class="row">
                        <div class="col-12 col-md-6">

                          <!-- First name -->
                          <div class="form-label-group">
                            <input type="text" class="form-control form-control-flush" id="registrationFirstName" placeholder="First name">
                            <label for="registrationFirstName">First name</label>
                          </div>

                        </div>
                        <div class="col-12 col-md-6">

                          <!-- Last name -->
                          <div class="form-label-group">
                            <input type="text" class="form-control form-control-flush" id="registrationLastName" placeholder="Last name">
                            <label for="registrationLastName">Last name</label>
                          </div>

                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md-6">

                          <!-- Email -->
                          <div class="form-label-group">
                            <input type="email" class="form-control form-control-flush" id="registrationEmail" placeholder="Email">
                            <label for="registrationEmail">Email</label>
                          </div>

                        </div>
                        <div class="col-12 col-md-6">

                          <!-- Password -->
                          <div class="form-label-group">
                            <input type="password" class="form-control form-control-flush" id="registrationPassword" placeholder="Password">
                            <label for="registrationPassword">Password</label>
                          </div>

                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          
                          <!-- Submit -->
                          <button class="btn btn-block btn-primary mt-3 lift">
                            {{ $service->d61 }}
                          </button>

                        </div>
                      </div>
                    </form>
                  
                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- CURVE
    ================================================== -->
    <div class="position-relative mt-n16">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
      </div>
    </div>

@empty
                                    <tr>
                                        <td colspan="2">No data available.</td>
                                    </tr>
@endforelse  
    



@include('ui.includes.uifooter4')

@endsection