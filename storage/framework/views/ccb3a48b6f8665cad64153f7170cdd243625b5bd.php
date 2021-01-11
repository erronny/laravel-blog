

<?php $__env->startSection('title', '| Active User'); ?>

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
                  Logged In Devices
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
              <a class="text-reset" href="mailto:<?php echo e($userdata->email); ?>"><?php echo e($userdata->email); ?></a>
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
                    
                      
                    
                    <li class="list-item">
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
                    <li class="list-item active">
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
            
                      
            <!-- Card -->
            <div class="card card-bleed shadow-light-lg mb-6">
              
              

                

            
            <!-- Card -->
            <div class="card card-bleed shadow-light-lg">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Heading -->
                    <h4 class="mb-0">
                      Device History
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Link -->
                    <a class="small text-gray-700" href="<?php echo e(count($devices) > 1 ? '/logout/all' : '#'); ?>" class="btn btn-danger <?php echo e(count($devices) == 1 ? 'disabled' : ''); ?>">
                      Log out all
                    </a>

                  </div>
                </div>
              </div>
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush">

                <?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Icon -->
                        <div class="icon icon-sm text-gray-400">
                          <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M5 5v11h14V5H5zm0-2h14c1.42 0 2 .716 2 1.6v12.8c0 .884-.58 1.6-2 1.6H5c-1.42 0-2-.716-2-1.6V4.6C3 3.716 3.58 3 5 3zm7 15a.5.5 0 100-1 .5.5 0 000 1z" fill="#335EEA"/><path fill="#335EEA" opacity=".3" d="M5 5v11h14V5z"/><rect fill="#335EEA" opacity=".3" x="10" y="20" width="4" height="1" rx=".5"/></g></svg>
                        </div>

                      </div>
                      <div class="col ml-n5">

                        <!-- Heading -->
                        <p class="mb-0">
                          <?php echo e($device->user_agent); ?>

                        </p>

                        <!-- Text -->
                        <small class="text-gray-700">
                          IP <?php echo e($device->ip_address); ?> · at 

                           <?php echo e(date('d-m-Y', ($device->last_activity))); ?> 

                          

                          

                    
                        </small>

                      </div>
                      <div class="col-auto">
                      <?php if($current_session_id == $device->id): ?>
                        <small class="text-gray-700">This Device</small><br>
                        <a class="btn btn-danger" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                            <?php echo e(csrf_field()); ?>

                                                          </form>
                      <?php else: ?>
                      <a href="/logout/<?php echo e($device->id); ?>" class="btn btn-danger">Log Out</a>
                      <?php endif; ?>
            
            

                        <!-- Button -->
                        <!-- <button class="btn btn-xs btn-outline-white">
                          Log out
                        </button> -->

                      </div>
                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                  
                  <!-- <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->

                        <!-- Icon -->
                        <!-- <div class="icon icon-sm text-gray-400">
                          <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M5 5v11h14V5H5zm0-2h14c1.42 0 2 .716 2 1.6v12.8c0 .884-.58 1.6-2 1.6H5c-1.42 0-2-.716-2-1.6V4.6C3 3.716 3.58 3 5 3zm7 15a.5.5 0 100-1 .5.5 0 000 1z" fill="#335EEA"/><path fill="#335EEA" opacity=".3" d="M5 5v11h14V5z"/><rect fill="#335EEA" opacity=".3" x="10" y="20" width="4" height="1" rx=".5"/></g></svg>
                        </div>

                      </div>
                      <div class="col ml-n5"> -->

                        <!-- Heading -->
                        <!-- <p class="mb-0">
                          iMac OSX · Chrome v80.02
                        </p>
 -->
                        <!-- Text -->
                        <!-- <small class="text-gray-700">
                          Los Angeles, CA · April 20 at 4:16PM
                        </small>

                      </div>
                      <div class="col-auto"> -->

                        <!-- Button -->
                       <!--  <button class="btn btn-xs btn-outline-white">
                          Log out
                        </button>

                      </div>
                    </div>
                  </div> -->
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

<?php $__env->startSection('extrajs'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/form/all-type-forms.css')); ?>">
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/summernote/summernote.css')); ?>  ">
    <script src="<?php echo e(asset('assets/js/summernote/summernote.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/summernote/summernote-active.js')); ?>"></script>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>