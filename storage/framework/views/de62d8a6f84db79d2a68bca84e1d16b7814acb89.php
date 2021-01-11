<?php $__env->startSection('title', '| settings'); ?>

<?php $__env->startSection('content'); ?>
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
                  General Settings
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
             <a class="text-reset" href="mailto:dhgamache@gmail.com"><?php echo e($userdata->email); ?></a>
            </p>

          </div>
          <div class="col-auto">

            <!-- Button -->
            <button class="btn btn-sm btn-gray-300-20">
              <a class="" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                            <?php echo e(csrf_field()); ?>

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
                  <h6><a class="list-link text-reset" href="<?php echo e(URL ('/admin/dashboard')); ?>">
                        Dashboard
                      </a></h6>

                  <!-- Heading -->
                  <h6 class="font-weight-bold text-uppercase mb-3">
                    Account
                  </h6>

                  <!-- List -->
                  <ul class="card-list list text-gray-700 mb-6">
                    
                      
                    
                    <li class="list-item active">
                      <a class="list-link text-reset" href="<?php echo e(URL ('/admin/websitesetting')); ?>">
                        General
                      </a>
                    </li>
                    <li class="list-item">
                      <a class="list-link text-reset" href="<?php echo e(URL ('/admin/security')); ?>">
                        Security
                      </a>
                    </li>
                    <li class="list-item">
                      <a class="list-link text-reset" href="<?php echo e(URL ('/admin/notifications')); ?>">
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
                      <a class="list-link text-reset" href="<?php echo e(URL ('/admin/users')); ?>">
                        Users List
                      </a>
                    </li>
                    <li class="list-item">
                      <a class="list-link text-reset" href="<?php echo e(URL ('/admin/logged-in-devices')); ?>">
                        Device History
                      </a>
                    </li>
                    
                  </ul>

                </div>
              </div>

            </div>
              

          </div>
          <div class="col-12 col-md-9">
<?php if(count($errors) > 0): ?>
  <div class="alert alert-danger">
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
  </div>
<?php endif; ?>
  <?php if(Session::has('message')): ?>
    <div class="alert alert-success login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo Session::get('message'); ?> </div>
  <?php endif; ?>
            <!-- Card -->
            <div class="card card-bleed shadow-light-lg mb-6">
              <div class="card-header">

                <!-- Heading -->
                <h4 class="mb-0">
                  Basic Information
                </h4>

              </div>
              <div class="card-body">
          
           
            <?php echo Form::open(array('url' => 'admin/websettingupd')); ?>

            <?php echo e(Form::hidden('id',$webseting->id)); ?>

            
            
            <div class="form-group">
              <?php echo e(Form::label('website_name', 'Website Name')); ?>

              <div>
                <?php echo e(Form::text('website_name',$webseting->website_name , array('class' => 'form-control','required'=>'required'))); ?>

                
              </div>
            </div>

            <div class="form-group">
              <?php echo e(Form::label('locktimeout', 'Lock Time')); ?>

              <div>
                <?php echo e(Form::text('locktimeout',$webseting->locktimeout , array('class' => 'form-control','required'=>'required'))); ?>

                
              </div>
            </div>

            <div class="form-group">
              <?php echo e(Form::label('email', 'Email')); ?>

              <div>
                <?php echo e(Form::email('email',$webseting->email , array('class' => 'form-control','required'=>'required'))); ?>

                
              </div>
            </div>

            <div class="form-group">
              <?php echo e(Form::label('address', 'Address')); ?>

              <div>
                <?php echo e(Form::text('address',$webseting->address , array('class' => 'form-control','required'=>'required'))); ?>

                
              </div>
            </div>

            <div class="form-group">
              <?php echo e(Form::label('mobile', 'Mobile')); ?>

              <div>
                <?php echo e(Form::number('mobile',$webseting->mobile , array('class' => 'form-control','required'=>'required'))); ?>

                
              </div>
            </div>




            
            

             

            
           
            <div class="form-group m-b-0">
              <div>
                <button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>
                <button type="reset" class="btn btn-secondary waves-effect m-l-5"> Cancel </button>
              </div>
            </div>
         <?php echo Form::close(); ?>

        </div>
              <div class="card-body">

                <!-- Form -->
                <form>
                  <div class="row">
                    <div class="col-12 col-md-6">

                      <!-- Name -->
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Full name">
                      </div>

                    </div>
                    <div class="col-12 col-md-6">

                      <!-- Email -->
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" type="email" placeholder="name@address.com">
                      </div>

                    </div>
                    <div class="col-12">

                      <!-- Bio -->
                      <div class="form-group">
                        <label>Bio</label>
                        <div data-quill='{"placeholder": "Quill WYSIWYG"}'></div>
                      </div>

                    </div>
                    <div class="col-12 col-md-auto">

                      <!-- Button -->
                      <button class="btn btn-block btn-primary" type="submit">
                        Save changes
                      </button>

                    </div>
                  </div>
                </form>

              </div>
            </div>

            <!-- Card -->
            <div class="card card-bleed shadow-light-lg mb-6">
              <div class="card-header">

                <!-- Heading -->
                <h4 class="mb-0">
                  Your media
                </h4>

              </div>
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-xl">
                          <img class="avatar-img rounded-circle" src="<?php echo e(asset ('assets/user/user.png')); ?>" alt="...">
                        </div>

                      </div>
                      <div class="col ml-n5">

                        <!-- Heading -->
                        <p class="mb-0">
                          Your avatar
                        </p>

                        <!-- Text -->
                        <small class="text-gray-700">
                          PNG or JPG no larger than 1000px
                        </small>


                      </div>
                      <div class="col-12 col-md-auto">

                        <!-- Button -->
                        <button class="btn btn-xs btn-block btn-primary mt-5 mt-md-0">
                          Upload
                        </button>

                      </div>
                    </div>
                  </div>
                  <div class="list-group-item">

                    <!-- Heading -->
                    <p class="mb-0">
                      Profile cover
                    </p>

                    <!-- Text -->
                    <p class="small text-gray-700">
                      PNG or JPG at 16:9 ratio no larger than 2MB
                    </p>

                    <!-- Dropzone -->
                    <div class="dropzone dropzone-single" data-dropzone='{"url": "https://", "maxFiles": 1, "acceptedFiles": "image/*"}'>

                      <!-- Fallback -->
                      <div class="fallback">
                        <div class="custom-file">
                          <input class="custom-file-input" id="projectCoverUploads" type="file">
                          <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                        </div>
                      </div>

                      <!-- Preview -->
                      <div class="dz-preview dz-preview-single">
                        <div class="dz-preview-cover">
                          <img class="dz-preview-img" data-dz-thumbnail src="data:image/svg+xml,%3csvg3c/svg%3e" alt="...">
                        </div>
                      </div>

                    </div>

                  </div>
                </div>

              </div>
            </div>

            <!-- Card -->
            <div class="card card-bleed shadow-light-lg mb-8">
              <div class="card-header">

                <!-- Title -->
                <h4 class="mb-0">
                  Privacy
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
                          Public Profile
                        </p>

                        <!-- Text -->
                        <small class="text-gray-700">
                          Making your profile public means anyone can see your information.
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
                          Expose your email
                        </p>

                        <!-- Text -->
                        <small class="text-gray-700">
                          This lets users find you by your email address.
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

   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>