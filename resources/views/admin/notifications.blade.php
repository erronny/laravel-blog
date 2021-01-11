@extends('layouts.master2')



@section('content')

<style type="text/css">
	.dot {
    height: 15px;
    width: 15px;
    background-color: red;
    border-radius: 50%;
    display: inline-block;
  }

.sec{
    position: relative;
    right: -13px;
    top:-22px;
}

.counter.counter-lg {
    top: -24px !important;
}
</style>


<!-- BREADCRUMB
    ================================================== -->
    <nav class="bg-dark d-md-none">
      <div class="container-md">
        <div class="row align-items-center">
          <div class="col">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <span class="text-white">
                  Account
                </span>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <span class="text-white">
                  Notifications
                </span>
              </li>
            </ol>

          </div>
          <div class="col-auto">

            <!-- Toggler -->
            <div class="navbar-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenavCollapse" aria-controls="sidenavCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>

    <!-- HEADER
    ================================================== -->
    <header class="bg-dark pt-9 pb-11 d-none d-md-block">
      <div class="container-md">
        <div class="row align-items-center">
          <div class="col">

            <!-- Heading -->
            <h1 class="font-weight-bold text-white mb-2">
              Account Settings
            </h1>

            <!-- Text -->
            <p class="font-size-lg text-white-75 mb-0">
             <a class="text-reset" href="mailto:{{ $userdata->email }}">{{ $userdata->email }}</a>
            </p>

          </div>
          <div class="col-auto">

            <!-- Button -->
            <button class="btn btn-sm btn-gray-300-20">
              <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                          </form>
            </button>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </header>

    <!-- MAIN
    ================================================== -->
    <main class="pb-8 pb-md-11 mt-md-n6">
      <div class="container-md">
        <div class="row">
          <div class="col-12 col-md-3">

            <!-- Card -->
            <div class="card card-bleed border-bottom border-bottom-md-0 shadow-light-lg">

              <!-- Collapse -->
              <div class="collapse d-md-block" id="sidenavCollapse">
                <div class="card-body">
                  <h6><a class="list-link text-reset" href="{{URL ('/admin/dashboard')}}">
                        Dashboard
                      </a></h6>

                  <!-- Heading -->
                  <h6 class="font-weight-bold text-uppercase mb-3">
                    Account
                  </h6>

                  <!-- List -->
                  <ul class="card-list list text-gray-700 mb-6">
                    
                      
                    
                    <li class="list-item">
                      <a class="list-link text-reset" href="{{URL ('/admin/websitesetting')}}">
                        General
                      </a>
                    </li>
                    <li class="list-item">
                      <a class="list-link text-reset" href="{{URL ('/admin/security')}}">
                        Security
                      </a>
                    </li>
                    <li class="list-item active">
                      <a class="list-link text-reset" href="{{URL ('/admin/notifications')}}">
                        Notifications
                      </a>
                    </li>
                  </ul>

                  <!-- Heading -->
                  <h6 class="font-weight-bold text-uppercase mb-3">
                    Users
                  </h6>

                  <!-- List -->
                  <ul class="card-list list text-gray-700 mb-0">
                    
                    <li class="list-item">
                      <a class="list-link text-reset" href="{{URL ('/admin/users')}}">
                        Users List
                      </a>
                    </li>
                    <li class="list-item">
                      <a class="list-link text-reset" href="{{URL ('/admin/logged-in-devices')}}">
                        Device History
                      </a>
                    </li>
                    
                  </ul>

                </div>
              </div>

            </div>

          </div>
          <div class="col-12 col-md-9">
          	<!-- Card -->
            <div class="card card-bleed shadow-light-lg mb-6">
              <div class="card-header">

                <!-- Title -->
                <h4 class="mb-0">
                  User Notification
                </h4>

              </div>

              @foreach(Auth::user()->notifications  as $notification)
               <p hidden>Auth::user()->unreadNotifications->markAsRead();</p>
             

   
              <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">

                        <!-- Heading -->
                        <p class="mb-0">
                           <i class="fa fa-bell text-success"></i>New User <a href="{{ URL('admin/users')}}">{{$notification->data['email']}}</a>
                        </p>

                        <!-- Text -->
                        <small class="text-gray-700">
                          Registered {{$notification->created_at}}
                        </small>

                      </div>
                      <div class="col-auto">

                        <!-- Badge -->
                        
                          @if($notification->read_at == null)
                          <span class="badge badge-pill badge-success-soft">
                          <span class="h6 text-uppercase font-weight-bold">New</span>
                          </span>
                          @else
                            <span class="badge badge-pill badge-success-soft">
                          <span class="h6 text-uppercase font-weight-bold">READED</span>
                          </span>
                          
                          @endif

                          
                        

                      </div>
                    </div>
                  </div>
                @endforeach
              
              
            </div>

            <!-- Card -->
            <div class="card card-bleed shadow-light-lg mb-6">
              <div class="card-header">

                <!-- Title -->
                <h4 class="mb-0">
                  Application Notifications
                </h4>

              </div>
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">

                        <!-- Heading -->
                        <p class="mb-0">
                          Direct messages
                        </p>

                        <!-- Text -->
                        <small class="text-gray-700">
                          Messages from people you follow
                        </small>

                      </div>
                      <div class="col-auto">

                        <!-- Switch -->
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="switchOne" checked>
                          <label class="custom-control-label" for="switchOne"></label>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">

                        <!-- Heading -->
                        <p class="mb-0">
                          Reminders
                        </p>

                        <!-- Text -->
                        <small class="text-gray-700">
                          Wrap up emails about content you missed
                        </small>

                      </div>
                      <div class="col-auto">

                        <!-- Select -->
                        <select class="custom-select custom-select-xs" data-choices>
                          <option value="weekly">Daily</option>
                          <option value="weekly">Weekly</option>
                          <option value="weekly">Monthly</option>
                        </select>

                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">

                        <!-- Heading -->
                        <p class="mb-0">
                          Follower updates
                        </p>

                        <!-- Text -->
                        <small class="text-gray-700">
                          Changes to who’s following you
                        </small>

                      </div>
                      <div class="col-auto">

                        <!-- Switch -->
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="switchTwo" checked>
                          <label class="custom-control-label" for="switchTwo"></label>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">

                        <!-- Heading -->
                        <p class="mb-0">
                          Reposts
                        </p>

                        <!-- Text -->
                        <small class="text-gray-700">
                          When others repost your content
                        </small>

                      </div>
                      <div class="col-auto">

                        <!-- Switch -->
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="switchThree" checked>
                          <label class="custom-control-label" for="switchThree"></label>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Card -->
            <div class="card card-bleed shadow-light-lg">
              <div class="card-header">

                <!-- Title -->
                <h4 class="mb-0">
                  Marketing Communications
                </h4>

              </div>
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">

                        <!-- Heading -->
                        <p class="mb-0">
                          Sales & Promotions
                        </p>

                        <!-- Text -->
                        <small class="text-gray-700">
                          We only notify you for significant promotions
                        </small>

                      </div>
                      <div class="col-auto">

                        <!-- Switch -->
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="switchFour" checked>
                          <label class="custom-control-label" for="switchFour"></label>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">

                        <!-- Heading -->
                        <p class="mb-0">
                          Product updates
                        </p>

                        <!-- Text -->
                        <small class="text-gray-700">
                          Major changes in our product offering
                        </small>

                      </div>
                      <div class="col-auto">

                        <!-- Switch -->
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="switchFive" checked>
                          <label class="custom-control-label" for="switchFive"></label>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">

                        <!-- Heading -->
                        <p class="mb-0">
                          Newsletter
                        </p>

                        <!-- Text -->
                        <small class="text-gray-700">
                          Updates on what’s going on here at Landkit.
                        </small>

                      </div>
                      <div class="col-auto">

                        <!-- Switch -->
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="switchSix" checked>
                          <label class="custom-control-label" for="switchSix"></label>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </main>

    <!-- CURVE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
      </div>
    </div>


@endsection
