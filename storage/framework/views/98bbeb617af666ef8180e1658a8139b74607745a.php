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
                  Admin
                </span>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <span class="text-white">
                  Users
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
                      <a class="list-link text-reset" href="<?php echo e(URL ('/admin/profile')); ?>">
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
                    
                    <li class="list-item active">
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

            <!-- Card -->
            <div class="card card-bleed shadow-light-lg">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Heading -->
                    <h4 class="mb-0">
                      User List
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Button -->
                    <a href="<?php echo e(URL("admin/users/create/".$key)); ?>">
                    <button class="btn btn-xs btn-primary">
                      Add
                    </button></a>

                  </div>
                </div>
              </div>
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-xl">
                            <?php $url = "assets/gallery.png"; ?>
                          <img class="avatar-img rounded-circle" src="<?php echo e(asset('assets/user/user.png')); ?>" alt="...">
                        </div>

                      </div>
                      <div class="col-6 ml-n5">

                        <!-- Heading -->
                        <p class="mb-0">
                          <?php echo e($user->name); ?>

                        </p>

                        <!-- Text -->
                        <a class="d-block small text-truncate text-gray-700" href="mailto:ab.hadley@company.com">
                          <?php echo e($user->email); ?>

                        </a>

                      </div>
                      <div class="col-auto ml-auto">

                        <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-info pull-left" style="margin-right: 3px;" data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-edit"></i>Edit</a> 

                                            <?php if($user->IsActive){ ?>
                                                <a href="<?php echo e(URL::to('admin/updateUser/'.$user->id.'/deactive')); ?>" class="btn btn-danger pull-left" style="margin-right: 3px;" onclick="return confirm('Are You Sure To Dctivated?')" title="Click to Deactive"><i class="fa fa-ban"></i>Deactive</a>
                                                   <?php }else{ ?>
                                                <a href="<?php echo e(URL::to('admin/updateUser/'.$user->id.'/active')); ?>" class="btn btn-success pull-left" style="margin-right: 3px;" onclick="return confirm('Are You Sure To Activated?')" title="Click to Active"><i class="fa fa-check"></i>Active</a>
                                                   <?php } ?>

                                            <?php echo e(Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ])); ?>

                                                <button type="submit" class="btn btn-danger pull-left" title="Delete" onclick="return confirm('Do You want to Delete?')"><i class="fa fa-trash"></i>Delete</button>
                                            <?php echo e(Form::close()); ?>


                      </div>
                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                  
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
<?php $__env->startSection('extrajs'); ?>
<style type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable({
      "lengthMenu": [[25, 50, 100, 500, 1000],[25, 50, 100, 500, "Max"]],
"pageLength": '500',
    });
} );

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>