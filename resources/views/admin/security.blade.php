@extends('layouts.master2')

@section('title', '| Permissions')

@section('content')
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
                  Security
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
                    <li class="list-item active">
                      <a class="list-link text-reset" href="{{URL ('/admin/security')}}">
                        Security
                      </a>
                    </li>
                    <li class="list-item">
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
            @if (count($errors) > 0)
                    <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                    @endif
                    @if(Session::has('message'))
                    <div class="alert alert-success login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {!! Session::get('message') !!} </div>
                    @endif
            
            {!! Form::open(array('url' => 'admin/profileupdate')) !!}
                      {{ Form::hidden('id',$userdata->id) }}
            <!-- Card -->
            <div class="card card-bleed shadow-light-lg mb-6">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Heading -->
                    <h4 class="mb-0">
                      Password
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Link -->
                    <a class="small text-gray-700" href="#!">
                      Forgot your password?
                    </a>

                  </div>
                </div>
              </div>
              <div class="card-body">

                <!-- Current password -->
                <div class="form-group">
                      {{ Form::label('password', 'Old Password') }}
                      <div>
                      {{ Form::password('oldpassword', array('class' => 'form-control','required'=>'required','placeholder'=>'Old password')) }}

                      </div>
                      </div>

                <!-- New password -->
                <div class="form-group">
                      {{ Form::label('password', 'New Password') }}
                      <div>
                      {{ Form::password('password', array('class' => 'form-control','required'=>'required','placeholder'=>'New password')) }}

                      </div>
                      </div>

                <!-- Confirm password -->
                <div class="form-group">
                      {{ Form::label('password', 'Confirm Password') }}
                      <div>
                      {{ Form::password('password_confirmation', array('class' => 'form-control','required'=>'required','placeholder'=>'Confirm password')) }}

                      </div>
                      </div>


                <div class="row">
                  <div class="col-12 col-md-auto">
                    <div class="form-group m-b-0">
                      <div>
                      <button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>
                      <button type="reset" class="btn btn-secondary waves-effect m-l-5"> Cancel </button>
                      </div>
                      </div>
                      {!! Form::close() !!}

                    

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

@section('extrajs')
    <link rel="stylesheet" href="{{ asset('assets/css/form/all-type-forms.css')}}">
 <link rel="stylesheet" href="{{ asset('assets/css/summernote/summernote.css')}}  ">
    <script src="{{ asset('assets/js/summernote/summernote.min.js')}}"></script>
    <script src="{{ asset('assets/js/summernote/summernote-active.js')}}"></script>
      <script type="text/javascript">
        
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#imagePreview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#image").change(function() {
  readURL(this);
});
      </script>
@endsection