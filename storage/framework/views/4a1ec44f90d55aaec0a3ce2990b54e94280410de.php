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
            
            <a href="<?php echo e(URL ('/admin/posts/create')); ?>" class="btn btn-primary">
               Write post
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
          <div class="col-12 col-md-12">
           <!-- Table -->
            <div class="table-responsive mb-7 mb-md-9">
              <table class="table table-align-right">
                <thead>
                  <tr>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        Title
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        Body
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        Tags
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase font-weight-bold">
                        Published
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
                    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><span style="font-size:18px;"><?php echo e($post->title); ?></span></td>
                                        <td><span style="font-size:18px;"><?php echo str_limit($post->body, 200); ?></span></td>
                                        <td><span style="font-size:18px;"><?php echo e($post->tags); ?></span></td>
                                        
                                        
                                        
                                        <td><span style="font-size:18px;"><?php echo e($post->published); ?></span></td>
                                        <td>
                                            <?php if(Auth::user()->is_admin): ?>
                                                <?php
                                                    if($post->published == 'Yes') {
                                                        $label = 'Draft';
                                                    } else {
                                                        $label = 'Publish';
                                                    }
                                                ?>
                                                <a href="<?php echo e(url("/admin/posts/{$post->id}/publish")); ?>" data-method="PUT" data-token="<?php echo e(csrf_token()); ?>" data-confirm="Are you sure?" class="btn btn-xs btn-warning"><?php echo e($label); ?></a>
                                            <?php endif; ?>
                                            <a href="<?php echo e(url("/admin/posts/{$post->id}")); ?>" class="btn btn-xs btn-success"><span class="fa fa-eye author-log-ic"></span>&nbsp;Show</a>
                                            <a href="<?php echo e(url("/admin/posts/{$post->id}/edit")); ?>" class="btn btn-xs btn-info"><span class="fa fa-edit author-log-ic"></span>&nbsp;Edit</a>
                                            <a href="<?php echo e(url("/admin/posts/{$post->id}/delete")); ?>" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>" data-confirm="Are you sure?" class="btn btn-xs btn-danger"><span class="fa fa-trash author-log-ic"></span>&nbsp;Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5">No post available.</td>
                                    </tr>
                                <?php endif; ?>
                  
                </tbody>
              </table>
            </div>
              
            
          </div>
          
        </div> <!-- / .row -->
            

          </div>
        </div> 
    </div>
</div>
    
                        

                        

                   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>