<?php $__env->startSection('content'); ?>

    <section class="pt-8 pt-md-11">
      <?php echo e(Form::open(array('url' => 'admin/posts','class' => 'form-horizontal','enctype'=>'multipart/form-data','autocomplete'=>"off"))); ?>



                        

                            <?php 
                                                                  
                              $title           ="";
                              $body          ="";
                              $meta_tag          ="";
                              $meta_description          ="";
                              $slug          ="";
                              $keywords      ="";
                              
                              $tags   = '';
                              
                            
                            
                            
      ?>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Link -->
            <a href="<?php echo e(url('admin/posts')); ?>" class="font-weight-bold font-size-sm text-decoration-none mb-3">
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
            <a href="<?php echo e(url('admin/posts')); ?>" class="btn btn-primary-soft mr-1">
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
           
              <?php echo $__env->make('posts._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
          </div>
          <div class="col-12 col-md-3">
            <div class="">
            
            <div class="collapse d-lg-block" id="sidenavCollapse">
              <div class="">

                <!-- Heading -->
                <h6 class="text-uppercase font-weight-bold">
                  Title
                </h6>

                <!-- Links -->
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" class="form-control" name="title"   value="<?php echo e(old('title')?old('title'):$title); ?>" placeholder="" />
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
                    <input type="text" class="form-control" name="slug"   value="<?php echo e(old('slug')?old('slug'):$slug); ?>" placeholder="Enter Slug" />
                  <div class="text text-danger" id="slugErro"></div>
                  <?php if($errors->has('slug')): ?>
                   <div class="text text-danger"><?php echo e($errors->first('slug')); ?></div>
                  <?php endif; ?>
                  </li>
                  
                </ul>

                <h6 class="text-uppercase font-weight-bold">
                  Image
                </h6>
                <ul class="list mb-6">
                  <li class="list-item">
                     <input type="file" name="images"   />
                    <div class="text text-danger" id="imagesErro"></div>
                    <?php if($errors->has('images')): ?>
                     <div class="text text-danger"><?php echo e($errors->first('images')); ?></div>
                    <?php endif; ?>
                  </li>
                </ul>

                
                <h6 class="text-uppercase font-weight-bold">
                  Tag
                </h6>
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" class="form-control" name="tags"   value="<?php echo e(old('tags')?old('tags'):$tags); ?>" placeholder="" />
                  <div class="text text-danger" id="tagsErro"></div>
                  <?php if($errors->has('tags')): ?>
                   <div class="text text-danger"><?php echo e($errors->first('tags')); ?></div>
                  <?php endif; ?>
                  </li>
                </ul>

                <h6 class="text-uppercase font-weight-bold">
                  Meta Tag
                </h6>
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" class="form-control" name="meta_tag"   value="<?php echo e(old('meta_tag')?old('meta_tag'):$meta_tag); ?>" placeholder="" />
                  <div class="text text-danger" id="meta_tagErro"></div>
                  <?php if($errors->has('meta_tag')): ?>
                   <div class="text text-danger"><?php echo e($errors->first('meta_tag')); ?></div>
                  <?php endif; ?>
                  </li>
                </ul>

                <h6 class="text-uppercase font-weight-bold">
                  Meta Description
                </h6>
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" class="form-control" name="meta_description"   value="<?php echo e(old('meta_description')?old('meta_description'):$meta_description); ?>" placeholder="" />
                  <div class="text text-danger" id="meta_descriptionErro"></div>
                  <?php if($errors->has('meta_description')): ?>
                   <div class="text text-danger"><?php echo e($errors->first('meta_description')); ?></div>
                  <?php endif; ?>
                  </li>
                </ul>

                <h6 class="text-uppercase font-weight-bold">
                  Focus Keywords
                </h6>
                <ul class="list mb-6">
                  <li class="list-item">
                    <input type="text" class="form-control" name="keywords"   value="<?php echo e(old('keywords')?old('keywords'):$keywords); ?>" placeholder="" />
                  <div class="text text-danger" id="keywordsErro"></div>
                  <?php if($errors->has('keywords')): ?>
                   <div class="text text-danger"><?php echo e($errors->first('keywords')); ?></div>
                  <?php endif; ?>
                  </li>
                </ul>


                
              </div>
            </div>


          </div>
            
            

            

          </div>
        </div> <!-- / .row -->
        <?php echo e(Form::close()); ?>

     
    </section>

    
<script type="text/javascript">
function readURL(input) {
  if (input.images && input.images[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#imagePreview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>