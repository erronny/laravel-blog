<div class="notice">
	<table class="table">
                            <thead>
                                <tr>
                                    <th style="color:#fff; font: bold 20px 'Times New Roman';" class="bg-primary"><b>page </b></th>
                                    
                                    
                                    
                                    <th style="color:#fff; font: bold 20px 'Times New Roman';" class="bg-primary"><b>Action</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr class="table-info">
                                        <td><h3><?php echo e($page->name); ?></h3></td>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
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