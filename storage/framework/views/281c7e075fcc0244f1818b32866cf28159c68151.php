<?php $__env->startSection('content'); ?>


<style>
    .panel-body{
        background-color:#CFE5F6;
        color:#264B68;
    }
    .panel-body2{
      background-color:#264B68;
      width: 520px;
      height:310px;
      


    }
    

.notice {
	height:100%;
  text-align: center;
  border-radius: 5px;
  background-color:#CFE5F6;
  
  color:#264B68;
  font-size: 15px;
}


</style>

<div class="container">
        <div class="row">
        	<div class="col-md-12">
            <div class="col-md-6">
                <?php echo $__env->make('pages.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2>
                            Create Page

                            <!-- <a href="<?php echo e(url('admin/pages')); ?>" class="btn btn-default pull-right"><span class="fa fa-chevron-circle-left author-log-ic"></span>&nbsp; Go Back</a> -->
                        </h2>
                    </div>

                    <div class="panel-body">
                        <?php echo e(Form::open(array('url' => 'admin/pages','enctype'=>'multipart/form-data','autocomplete'=>"off"))); ?>


                            <?php 
                              $name      ="";                                    
                              
                              
                              
                            
                            ?>

                            <?php echo $__env->make('pages._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <br><br><br><br>
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
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>