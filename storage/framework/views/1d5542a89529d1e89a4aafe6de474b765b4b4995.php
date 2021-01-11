<?php $__env->startSection('content'); ?>


   
   
    <section class="pt-8 pt-md-11">
      <?php echo e(Form::model($pagemanager, array('route' => array('page_content_manager.update', $pagemanager->id), 'method' => 'PUT','enctype'=>'multipart/form-data'))); ?>

                            <?php
                              
                              
                              $detail           =$pagemanager->detail;
                              $name           =$pagemanager->name;
                              $title           =$pagemanager->title;
                              $url           =$pagemanager->url;
                              
                              
                            ?>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            <a href="<?php echo e(URL ('/admin/page_content_manager')); ?>" class="font-weight-bold font-size-sm text-decoration-none mb-3">
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
            <a href="<?php echo e(URL ('/admin/page_content_manager')); ?>" class="btn btn-primary-soft mr-1">
              Cancel
            </a>
            <button type="submit" class="btn btn-primary">
              Update
            </button>

          </div>
        </div> <!-- / .row -->
      </div><!-- / .container -->
        <div class="row">
          <div class="col-12">
            
            <!-- Divider -->
            <hr class=" border-gray-300">

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-9">
           
              <?php echo $__env->make('pagemanager._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
          </div>
          <div class="col-12 col-md-3">
            <div class="">
            
            <div class="collapse d-lg-block" id="sidenavCollapse">
              <div class="">
                <h6 class="text-uppercase font-weight-bold">
                  Name
                </h6>

                <!-- Links -->
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" name="name" id="name" value="<?php echo e(old('name')?old('name'):$name); ?>" />
              <div class="text text-danger" id="nameErro"></div>
              <?php if($errors->has('name')): ?>
               <div class="text text-danger"><?php echo e($errors->first('name')); ?></div>
              <?php endif; ?>
                  </li>
                  
                </ul>

                <!-- Heading -->
                <h6 class="text-uppercase font-weight-bold">
                  Title
                </h6>

                <!-- Links -->
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" name="title" id="title" value="<?php echo e(old('title')?old('title'):$title); ?>" />
              <div class="text text-danger" id="titleErro"></div>
              <?php if($errors->has('title')): ?>
               <div class="text text-danger"><?php echo e($errors->first('title')); ?></div>
              <?php endif; ?>
                  </li>
                  
                </ul>

                <!-- Heading -->
                <h6 class="text-uppercase font-weight-bold">
                  permalink
                </h6>

                <!-- Links -->
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" name="url" id="url" value="<?php echo e(old('url')?old('url'):$url); ?>" />
              <div class="text text-danger" id="urlErro"></div>
              <?php if($errors->has('url')): ?>
               <div class="text text-danger"><?php echo e($errors->first('url')); ?></div>
              <?php endif; ?>
                  </li>
                  
                </ul>

                
                <h6 class="text-uppercase font-weight-bold">
                  Tag
                </h6>

                
                <ul class="list mb-6">
                  <li class="list-item">
                    <!-- <textarea></textarea> -->
                  </li>
                  
                </ul>


                
              </div>
            </div>


          </div>
            
            

            

          </div>
        </div> <!-- / .row -->
        <?php echo e(Form::close()); ?>

     
    </section>

    

   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>