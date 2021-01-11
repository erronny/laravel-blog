<?php $__env->startSection('title', $pages->title); ?>
<?php $__env->startSection('meta_tag', ''); ?>
<?php $__env->startSection('meta_description', 'Digital In-Corporation'); ?>
<?php $__env->startSection('keywords', 'Blog | Digital In-Corporation'); ?>
<?php $__env->startSection('author', 'Digital In-Corporation'); ?>

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





</style>
<br>





      <div class="col-sm-12 ">
        
      </hr>
      </div>
    


  
  <!--page content Section Satrt-->
  
        

<div class="row">
  <div class="leftcolumn">
    
    
      
      
      <p><?php echo $pages->detail; ?></p>
    
    </div>
  

      </div>
    
      
  </section>
  
  <br><br><br><br>
  
<?php echo $__env->make('ui.includes.uifooter1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ui.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>