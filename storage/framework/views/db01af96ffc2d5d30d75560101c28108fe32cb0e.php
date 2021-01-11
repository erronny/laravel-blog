<?php $__env->startSection('content'); ?>
<section class="pt-8 pt-md-11">
<div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            <a href="<?php echo e(URL ('/admin/dashboard')); ?>" class="font-weight-bold font-size-sm text-decoration-none mb-3">
              <i class="fe fe-arrow-left mr-3"></i> Back
            </a>

            <!-- Heading -->
            <!-- <h1 class="display-4 mb-2">
              
            </h1> -->

            <!-- Text -->
            <!-- <p class="font-size-lg text-gray-700 mb-5 mb-md-0">
              
            </p> -->

          </div>
          <div class="col-auto">
            
            <!-- Buttons -->
            
            <a href="<?php echo e(URL ('/admin/pages')); ?>" class="btn btn-primary">
              Create Page
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
            
            <!-- Table -->
            <div class="table-responsive mb-7 mb-md-9">
              <table class="table table-align-middle">
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
                <?php $__empty_1 = true; $__currentLoopData = $pagemanager; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
                      
                      <a href="<?php echo e(url("admin/page_content_manager/".$page->id."/edit")); ?>" class="text-reset text-decoration-none">
                        <p class="font-size-sm mb-0">
                          <a href="<?php echo e(url("admin/page_content_manager/".$page->id."/edit")); ?>" class="btn btn-xs btn-info"><span class="fa fa-edit author-log-ic"></span>&nbsp;Edit</a>
                        </p>
                      </a>

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
        </div> 
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>