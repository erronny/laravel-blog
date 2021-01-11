@extends('ui.layouts.app')
@section('title', 'Foreign Signing | Digital In-Corporation')
@section('description', '')
@section('keywords', 'home | Digital In-Corporation')
@section('author', 'Digital In-Corporation')

@section('content')

@forelse ($services as $service)
   
   
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
                <img src="{{asset ('assets/ui/img/covers/cover-12.jpg')}}" alt="..." class="img-fluid">

              </div>
              <div class="w-100">
                
                <!-- Image -->
                <img src="{{asset ('assets/ui/img/covers/cover-2.jpg')}}" alt="..." class="img-fluid">

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
              {{ $service->d }} <span class="text-success">{{ $service->d1 }}.</span>
            </h1>

            <!-- Text -->
            <p class="lead text-muted mb-6 mb-md-8">
              {{ $service->d2 }}
            </p>

            <!-- Text -->
            <p>
              {{ $service->d3 }}
            </p>

            <!-- Form -->
           <!--  <form>
              <div class="form-row">
                <div class="col-12 col-lg"> -->
                  
                  <!-- Search -->
                 <!--  <div class="form-group mb-lg-0">
                    <input type="search" class="form-control" value="Los Angeles">
                  </div>

                </div>
                <div class="col-12 col-lg-auto"> -->
                  
                  <!-- Button -->
                  <!-- <button type="submit" class="btn btn-block btn-primary shadow lift">
                    {{ $service->d4 }}
                  </button>

                </div> -->
             <!--  </div>  --><!-- / .form-row -->
           <!--  </form> -->

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
              <span class="h6 text-uppercase">{{ $service->d5 }}</span>
            </span>

            <!-- Heading -->
            <h1>
              {{ $service->d6 }}
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-7 mb-md-9">
              {{ $service->d7 }}
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-4" data-aos="fade-up">
            
            <!-- Card -->
            <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">
              
              <!-- Image -->
              <img src="{{asset ('assets/ui/img/photos/photo-4.jpg')}}" alt="..." class="card-img-top">

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
                    <span class="h6 text-uppercase">{{ $service->d8 }}</span>
                  </span>
                </div>
                
                <!-- Heading -->
                <h3>
                  {{ $service->d9 }}
                </h3>

                <!-- Text -->
                <p class="text-muted">
                  {{ $service->d10 }}
                </p>

                <!-- Link -->
                <a href="{{ $service->d12 }}" class="font-weight-bold text-decoration-none">
                  {{ $service->d11 }} <i class="fe fe-arrow-right ml-3"></i>
                </a>

              </div>

            </div>

          </div>
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
            
            <!-- Card -->
            <div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">
              
              <!-- Image -->
              <img src="{{ asset ('assets/ui/img/photos/photo-4.jpg')}}" alt="..." class="card-img-top">

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
                    <span class="h6 text-uppercase">{{ $service->d13 }}</span>
                  </span>
                </div>
                
                <!-- Heading -->
                <h3>
                  {{ $service->d14 }}
                </h3>

                <!-- Text -->
                <p class="text-muted">
                  {{ $service->d15 }}
                </p>

                <!-- Link -->
                <a href="{{ $service->d17 }}" class="font-weight-bold text-decoration-none">
                  {{ $service->d16 }} <i class="fe fe-arrow-right ml-3"></i>
                </a>

              </div>

            </div>

          </div>
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
            
            <!-- Card -->
            <div class="card shadow-light-lg lift lift-lg">
              
              <!-- Image -->
              <img src="{{asset ('assets/ui/img/photos/photo-4.jpg')}}" alt="..." class="card-img-top">

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
                    <span class="h6 text-uppercase">{{ $service->d18 }}</span>
                  </span>
                </div>
                
                <!-- Heading -->
                <h3>
                  {{ $service->d19 }}
                </h3>

                <!-- Text -->
                <p class="text-muted">
                  {{ $service->d20 }}
                </p>

                <!-- Link -->
                <a href="{{ $service->d22 }}" class="font-weight-bold text-decoration-none">
                  {{ $service->d21 }} <i class="fe fe-arrow-right ml-3"></i>
                </a>

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
            <img src="{{asset ('assets/ui/img/illustrations/illustration-1.png')}}" alt="..." class="img-fluid mb-6 mb-md-0">

          </div>
          <div class="col-12 col-md-6 order-md-1">
            
            <!-- Badge -->
            <span class="badge badge-pill badge-primary-soft mb-3">
              <span class="h6 text-uppercase">{{ $service->d23 }}</span>
            </span>

            <!-- Heading -->
            <h2>
              {{ $service->d24 }} <br>
              <span class="text-primary">{{ $service->d25 }}</span>.
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
             {{ $service->d26 }}
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
                    {{ $service->d27 }}
                  </p>

                </div>

                <!-- Item -->
                <div class="d-flex">

                  <!-- Check -->
                  <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                    <i class="fe fe-check"></i>
                  </div>
                  
                  <p class="mb-lg-0">
                    {{ $service->d28 }}
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
                    {{ $service->d29 }}
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
                    {{ $service->d30 }}
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
         <!--  <div class="col-12 col-md-6 col-lg-5 offset-lg-1 py-8 py-md-11 py-lg-12"> -->
            
            <!-- Heading -->
            <!-- <h2>
              {{ $service->d31 }} <span data-toggle="countup" data-from="{{ $service->d32 }}" data-to="{{ $service->d33 }}" data-aos data-aos-id="countup:in">100</span> {{ $service->d34 }} <br>
              <span class="text-success">{{ $service->d35 }}</span>.
            </h2>
 -->
            <!-- Text -->
            <!-- <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
              {{ $service->d36 }}
            </p>
 -->
            <!-- Stats -->
            <!-- <div class="d-flex">
              <div class="pr-5">
                <h3 class="text-success mb-0">
                  {{ $service->d37 }}
                </h3>
                <p class="text-gray-700 mb-0">
                  {{ $service->d38 }}
                </p>
              </div>
              <div class="border-left"></div>
              <div class="px-5">
                <h3 class="text-success mb-0">
                  {{ $service->d39 }}
                </h3>
                <p class="text-gray-700 mb-0">
                  {{ $service->d40 }}
                </p>
              </div>
              <div class="border-left"></div>
              <div class="pl-5">
                <h3 class="text-success mb-0">
                  {{ $service->d41 }}
                </h3>
                <p class="text-gray-700 mb-0">
                  {{ $service->d42 }}
                </p>
              </div>
            </div>

          </div> -->
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
              <span class="text-primary">{{ $service->d43 }}</span> {{ $service->d44 }}
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7 mb-md-9 px-md-9">
              {{ $service->d45 }}
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
                          {{ $service->d46 }}
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-muted mb-0">
                          {{ $service->d47 }}
                        </p>

                      </div>
                        
                      <!-- Badge -->
                      <span class="badge badge-pill badge-success-soft ml-4">
                        <span class="h6 text-uppercase">{{ $service->d48 }}</span>
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
                          {{ $service->d49 }}
                        </p>
                        <a href="{{ $service->d51 }}" class="font-weight-bold text-decoration-none">
                          {{ $service->d50 }} <i class="fe fe-arrow-right ml-3"></i>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="list-group-item">
                    
                    <!-- Toggle -->
                    <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#featuresTwo" role="button" aria-expanded="false" aria-controls="featuresTwo">
                      <div class="mr-auto">
                        
                        <!-- Title -->
                        <p class="font-weight-bold mb-0">
                          {{ $service->d52 }}
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-muted mb-0">
                          {{ $service->d53 }}
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
                          {{ $service->d54 }}
                        </p>
                        <a href="{{ $service->d62 }}" class="font-weight-bold text-decoration-none">
                          {{ $service->d55 }} <i class="fe fe-arrow-right ml-3"></i>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="list-group-item">
                    
                    <!-- Toggle -->
                    <a class="d-flex align-items-center text-reset text-decoration-none" data-toggle="collapse" href="#featuresThree" role="button" aria-expanded="false" aria-controls="featuresThree">
                      <div class="mr-auto">
                        
                        <!-- Title -->
                        <p class="font-weight-bold mb-0">
                          {{ $service->d56 }}
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-muted mb-0">
                          {{ $service->d57 }}
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
                          {{ $service->d58 }}
                        </p>
                        <a href="{{ $service->d60 }}" class="font-weight-bold text-decoration-none">
                          {{ $service->d59 }} <i class="fe fe-arrow-right ml-3"></i>
                        </a>
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

    
    
@empty
                                    <tr>
                                        <td colspan="2">No data available.</td>
                                    </tr>
@endforelse  


@include('ui.includes.uifooter4')

@endsection