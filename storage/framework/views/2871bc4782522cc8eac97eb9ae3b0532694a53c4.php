<?php $__env->startSection('content'); ?>
       <!-- <div class="p-10 m-10 container text">
          <div class="card">
                <div class="card-body">
                      <h3 class="mt-0 m-b-15"> <a href="#" class="logo logo-admin">
                        Supply Management System
                        
                      </a> </h3>
                      <h4 class="text-muted font-18"><b>Sign In</b></h4>
                      <div class="">
                         <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                                        <?php echo e(csrf_field()); ?>


                                        <div class="row form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                            <div class="col-sm-6">
                                                <label for="name" class="col-md-4 control-label">Name</label>
                                                    <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                                                    <?php if($errors->has('name')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                
                                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                                    <?php if($errors->has('email')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="row form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                            <div class="col-sm-6">
                                                <label for="password" class="col-md-4 control-label">Password</label>

                                                    <input id="password" type="password" class="form-control" name="password" required>

                                                    <?php if($errors->has('password')): ?>
                                                        <span class="help-block">
                                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Register
                                                </button>
                                            </div>
                                        </div>
                         </form>
                      </div>
                </div>
          </div>
        </div>
 --><?php $__env->stopSection(); ?>




<?php echo $__env->make('ui.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>