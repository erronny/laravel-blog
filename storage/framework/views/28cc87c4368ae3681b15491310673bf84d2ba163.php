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
            <div class="notice">
    <table class="table">
                            <thead>
                                <tr>
                                    <th style="color:#fff; font: bold 20px 'Times New Roman';" class="bg-primary"><b>page </b></th>
                                    
                                    
                                    
                                    
                                    
                                    <th style="color:#fff; font: bold 20px 'Times New Roman';" class="bg-primary"><b>Action</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $pagemanager; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr class="table-info">
                                        <td><h3><?php echo e($page->name); ?></h3></td>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <td>
                                           
                                                
                                            
                                            
                                            <a href="<?php echo e(url("admin/page_content_manager/".$page->id."/edit")); ?>" class="btn btn-xs btn-info"><span class="fa fa-edit author-log-ic"></span>&nbsp;Edit</a>
                                            
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>