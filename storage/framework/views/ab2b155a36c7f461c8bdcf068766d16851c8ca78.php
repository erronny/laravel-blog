<?php $__env->startSection('content'); ?>
<style>
    .panel-body{
        background-color:;
        color:;
    }
</style>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>
                            Posts

                            <a href="<?php echo e(url('admin/posts/create')); ?>" class="btn btn-default pull-right"><span class="fa fa-plus-square author-log-ic"></span>&nbsp;Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><span><h3>Title</h3></span></th>
                                    <th><span><h3>Body</h3></span></th>
                                    
                                    
                                    <th><span><h3>Tags</h3></span></th>
                                    <th><span><h3>Published</h3></span></th>
                                    <th><span><h3>Action</h3></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><span style="font-size:18px;"><?php echo e($post->title); ?></span></td>
                                        <td><span style="font-size:18px;"><?php echo str_limit($post->body, 60); ?></span></td>
                                        
                                        
                                        
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

                        <?php echo $posts->links(); ?>


                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>