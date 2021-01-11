@extends('layouts.master2')


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
                  Users
                </span>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <span class="text-white">
                  Create/Edit
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
                    
                    <li class="list-item active">
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
            <div class="card card-bleed shadow-light-lg">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Heading -->
                    <h4 class="mb-0">
                      User Create/Edit
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Button -->
                    <a href="{{URL ('/admin/users')}}">
                    <button class="btn btn-xs btn-primary">
                      Back
                    </button>
                    </a>

                  </div>
                </div>
              </div>



              @if(Request::segment(4)==='edit')
           {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT', 'id' => 'userForm')) }} 
            
            <?php  
                $roleid             = old('roles')?old('roles'):$user->role_id;
                $name               = old('name')?old('name'):$user->name;
                $email              = $user->email;
                $Phone              = $user->Phone;
                $Designation        = $user->Designation;
                $Language           = $user->language_known;
                $readonly = 'readonly';
                
            ?>
            {!! Form::hidden('id',$user->id) !!}
            
            @else
            {{ Form::open(array('url' => 'admin/users', 'id' => 'userForm')) }}
            {!! Form::hidden('CreatedBy',Auth::user()->id) !!}
            <?php 
               
                //$roleid           = '';
                if(old('roles')){
                  $roleid  = old('roles');
                }else{
                  $roleid  = '';
                }
                
                $name             = '';
                $email            = '';
                $Phone            = '';
                $Designation      = '';
                $Language      = '';
                $readonly = '';
               
                             
            ?>
            @endif










              <div class="card-body">

<div class="col-12 col-md-9">
            
            
            
              
              
                <div class="row">
          <input type="hidden" name="vendor_id" value="{{$vendor_id}}">
          </div>
                <div class="form-group">
               {{ Form::label('name', 'Name') }}

               <span class="text text-danger">*</span>
                <div>
                   
               {{ Form::text('name', $name, array('class' => 'form-control','placeholder'=>'Name','id'=>'name','required')) }}
               @if($errors->has('name'))
                <div class="text text-danger">{{ $errors->first('name') }}</div>
              @endif
                </div>

              </div>
                <!-------------------- Email ------------------------ -->
                <div class="form-group">
                {{ Form::label('email', 'Email') }}
                <span class="text text-danger">*</span>
                <div>
                  {{ Form::email('email', $email, array('class' => 'form-control','placeholder'=>'Email','id'=>'email','required',$readonly)) }}
                   @if($errors->has('email'))
                <div class="text text-danger">{{ $errors->first('email') }}</div>
              @endif
                </div>
              </div>

                <!-- Contact detail -->
                <div class="form-group">
              {{ Form::label('Contact Number', 'Contact Number') }}
              <span class="text text-danger">*</span>
              <div>
                 
              {{ Form::text('Phone', $Phone, array('class' => 'form-control only-numeric','placeholder'=>'Contact Number')) }}
              @if($errors->has('Phone'))
                <div class="text text-danger">{{ $errors->first('Phone') }}</div>
              @endif
              </div>
              </div>

              <!--------------------------------------------------->
              <div class="form-group">
              {{ Form::label('Designation', 'Designation') }}
              <div>

              {{ Form::text('Designation', $Designation, array('class' => 'form-control','placeholder'=>'Designation')) }}
              </div>
              </div>

              <!--------------------------------------------------------------->
              <div class='form-group'>
                {{ Form::label('Role', 'Role') }}
                <span class="text text-danger">*</span>
                <select class="form-control" name="roles" id="roles" required="">
                 <option value="0" selected="" disabled="">Select Role</option> 
                  @foreach ($roles as $role)
                    
                      <option value="{{$role->id}}" @if($roleid==$role->id) selected @endif>{{$role->name}}</option> 
                        
                    
                   {{-- <input type="radio" name="roles" value="{{$role->id}}" @if($roleid==$role->id) checked @endif> --}}
                    {{-- {{ Form::label($role->name, ucfirst($role->name)) }}<br> --}}
                  @endforeach
                </select>
            </div>

              <div class="card-footer">
                <div class="row">
                  <div class="col-12 col-md-auto">
                    <div class="form-group m-b-0">
                      <div>
                      <button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>
                      <a type="reset" href="{{ URL('admin/users') }}" class="btn btn-secondary waves-effect m-l-5"> Cancel </a>
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('public/css/jquery.datetimepicker.css') }}">
<script src="{{ asset('public/js/jquery.datetimepicker.js') }}"></script>
<script src="{{ asset('public/js/jquery.datetimepicker.full.min.js') }}"></script>

<script type="text/javascript">
  $( function() {
    $('.select').select2({
      width: '100%',
      placeholder: 'Select Language',
    });  
  });

 
@endsection