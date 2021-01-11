<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>SMS</title>
<meta content="Admin Dashboard" name="description" />
<meta content="Themesdesign" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App Icons -->
<link rel="shortcut icon" href="old/assets/images/favicon.ico">
<!-- App css -->
<link href="<?php echo e(asset('assets/old/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('assets/old/css/icons.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/old/css/style.css')); ?>" rel="stylesheet">
</head>
<body>
<!-- Begin page -->
<div class="accountbg"></div>
<div class="wrapper-page">
  <div class="card">
    <div class="card-body">
      <h3 class="text-center mt-0 m-b-15"> <a href="#" class="logo logo-admin">
        Tender Alert
        
      </a> </h3>
      <h4 class="text-muted text-center font-18"><b>Sign In</b></h4>
      <div class="p-3">
        <form class="form-horizontal m-t-20" method="POST" action="<?php echo e(route('login')); ?>">
          <?php echo e(csrf_field()); ?>

          
          <div class="form-group row<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <div class="col-12">
              <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo e(old('email')); ?>" required autofocus>
               <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
               <?php endif; ?>
            </div>
          </div>
          <div class="form-group row<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <div class="col-12">
              <input  type="password" class="form-control" name="password" required placeholder="Password">

                <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-12">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                
              </div>
            </div>
          </div>
          <div class="form-group text-center row m-t-20">
            <div class="col-12">
              <button type="submit" class="btn btn-info btn-block waves-effect waves-light" >Log In</button>
            </div>
          </div>
          <div class="form-group m-t-10 mb-0 row">
            
            <!--<div class="col-sm-5 m-t-20"> <a href="pages-register.html" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a> </div>-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- jQuery  -->
<script src="<?php echo e(asset('assets/old/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/modernizr.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/waves.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/jquery.slimscroll.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/jquery.nicescroll.js')); ?>"></script>
<script src="<?php echo e(asset('assets/old/js/jquery.scrollTo.min.js')); ?>"></script>
<!-- App js -->
<script src="<?php echo e(asset('assets/old/js/app.js')); ?>"></script>
</body>
</html>
