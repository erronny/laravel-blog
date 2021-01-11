<?php $__env->startSection('title', $pages->name); ?>
<?php $__env->startSection('meta_tag', ''); ?>
<?php $__env->startSection('meta_description', ''); ?>
<?php $__env->startSection('keywords', 'Blog | thedsolution'); ?>
<?php $__env->startSection('author', 'thedsolution'); ?>

<?php $__env->startSection('content'); ?>


<style>
* {
  box-sizing: border-box;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 100%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.brdc{
  background-color: #aaa;

}


</style>
 <!-- breadcrumbs -->
<div class="brdc">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-left">
        
      </div>
      <div class="col-md-6 text-right">
        <a href="<?php echo e(URL('/')); ?>">Home</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;
        <?php echo e($pages->name); ?>

      </hr>
      </div>
    </div>
  </div>
</div>

<!-- breadcrumbs end -->
  
  <!--page content Section Satrt-->
  
        

<div class="row">
  <div class="leftcolumn">
    <div class="container">
    <div class="card">
      
      
      <p><?php echo $pages->detail; ?></p>
    </div>
    </div>
    
  
</div>
      </div>
    
      
  </section>
  <!--/Service Provider Satrt End--> 
  
  

	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ui.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>