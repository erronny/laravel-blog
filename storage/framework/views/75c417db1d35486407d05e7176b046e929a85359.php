<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>
                            <?php echo e($post->title); ?>


                            <a href="<?php echo e(url('admin/posts')); ?>" class="btn btn-default pull-right">Go Back</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <p><?php echo e($post->body); ?></p>

                        
                        <p><strong>Tags: </strong><?php echo e($post->tags); ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>