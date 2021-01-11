<?php $__env->startSection('content'); ?>

<section class="pt-8 pt-md-11">
<div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            <a href="<?php echo e(URL ('/admin/dashboard')); ?>" class="font-weight-bold font-size-sm text-decoration-none mb-3">
              <i class="fe fe-arrow-left mr-3"></i> Back
            </a>

            

          </div>
          <div class="col-auto">
            
            <!-- Buttons -->
            
            <a href="<?php echo e(URL ('/admin/page_content_manager')); ?>" class="btn btn-primary">
               Content Manager
            </a>

          </div>
        </div> <!-- / .row -->
      </div><!-- / .container -->
</section>
<div class="row">
          <div class="col-12">
            
            <!-- Divider -->
            <hr class=" border-gray-300">

          </div>
        </div> <!-- / .row -->
<section class="pt-6 pt-md-8">
      <div class="container pb-8 pb-md-11 border-bottom border-gray-300">
<div class="row">
          <div class="col-12">
            <div class="row">
          <div class="col-12 col-md-7">
           <!-- Table -->
            <div class="table-responsive mb-7 mb-md-9">
              <table class="table table-align-right">
                <thead>
                  <tr>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        Page
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        Action
                      </span>
                    </th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                    <td>
                      
                      <a href="<?php echo e(url("admin/page_content_manager/".$page->id."/edit")); ?>" class="text-reset text-decoration-none">
                        <p class="mb-1">
                          <?php echo e($page->name); ?>

                        </p>
                        <p class="font-size-sm text-muted mb-0">
                          <?php echo e($page->title); ?>

                        </p>
                      </a>

                    </td>
                    <td>
                      
                       <?php
                                                    if($page->is_published == 1) {
                                                        $label = 'Unpulish';
                                                        $key = 'active';
                                                    } else {
                                                        $label = 'Publish';
                                                        $key = 'deactive';
                                                        
                                                    }
                                                ?>
                                                <a href="<?php echo e(url("admin/updatepages/".$page->id."/$key")); ?>" data-method="PUT" data-token="<?php echo e(csrf_token()); ?>" data-confirm="Are you sure?" class="btn btn-xs btn-warning"><?php echo e($label); ?></a>
                                            
                                            
                                            <a href="<?php echo e(url("admin/pages/".$page->id."/edit")); ?>" class="btn btn-xs btn-info"><span class="fa fa-edit author-log-ic"></span>&nbsp;Edit</a>
                                            <a href="<?php echo e(url("/admin/pages/{$page->id}/delete")); ?>" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>" data-confirm="Are you sure?" class="btn btn-xs btn-danger"><span class="fa fa-trash author-log-ic"></span>&nbsp;Delete</a>

                    </td>
                    
                  </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5">No page available.</td>
                                    </tr>
                                <?php endif; ?>
                  
                </tbody>
              </table>
            </div>
              
            
          </div>
          <div class="col-12 col-md-5">
            <div class="">
            
            <div class="collapse d-lg-block" id="sidenavCollapse">
              <div class="">

                

                

                
                <h6 class="text-uppercase font-weight-bold">
                  <label class="pull-right-pro">Create Page<span class="required">*</span></label>
                </h6>

                <div class="panel-body">
                        <?php echo e(Form::open(array('url' => 'admin/pages','enctype'=>'multipart/form-data','autocomplete'=>"off"))); ?>


                            <?php 
                              $name      ="";
                              $url      ="";                                    
                              
                              
                              
                            
                            ?>

                            <?php echo $__env->make('pages._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <br>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-8">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fa fa-floppy-o author-log-ic"></span>&nbsp;Create
                                    </button>
                                </div>
                            </div>

                        <?php echo e(Form::close()); ?>

                    </div>

                
              </div>
            </div>


          </div>
            
            

            

          </div>
        </div> <!-- / .row -->
            

          </div>
        </div> 
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>