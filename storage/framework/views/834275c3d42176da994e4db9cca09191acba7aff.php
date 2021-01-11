<?php $__env->startSection('title', $post->title); ?>
<?php $__env->startSection('keywords', $post->keywords); ?>
<?php $__env->startSection('meta_tag', $post->meta_tag); ?>
<?php $__env->startSection('meta_description', $post->meta_description); ?>

<?php $__env->startSection('author', 'thedsolution'); ?>


<?php $__env->startSection('content'); ?>


  
  <!--Blog Page Start-->

   <section id="blog-area" class="blog-with-sidebar-area">
    <div class="container">
     <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12">
         <div class="blog-post">
            <!--Start single blog post-->
            
            <div class="single-blog-post">
              
                <div class="date_more">
                  
                  <div class="text-holder">
                    <h3><?php echo e($post->title); ?></h3>
                    <div class="meta-info clearfix">
                      <ul class="post-info">
                        <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Mano</a></li>
                        <li><i class="fa fa-eye" aria-hidden="true"></i><a href="#">95 Views</a></li>
                        <li><i class="fa fa-comment-o" aria-hidden="true"></i> <a href="#">5 Comments</a></li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="text">
                  <p><?php echo $post->body; ?></p>
                  </div>
                
             
            </div>
            
            
            
          
          </div>
        </div>
        <!--Start sidebar Wrapper-->
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="sidebar-wrapper">
            <div class="single-sidebar">
              <form class="search-form" action="#">
                <input placeholder="Search..." type="text">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div>
            
          </div>
        </div>
        <!--End Sidebar Wrapper--> 
      </div>
    </div>
  </section>
  <!--Blog Page End--> 
  
  



      
 


<?php $__env->stopSection(); ?>

<?php echo $__env->make('ui.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>