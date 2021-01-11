<?php $__env->startSection('title', 'Admin '); ?>
<?php $__env->startSection('description', ''); ?>
<?php $__env->startSection('keywords', ''); ?>
<?php $__env->startSection('author', ''); ?>
<?php $__env->startSection('content'); ?>


<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">contact view </h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">contact view</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

<div class="container">
<h2>List of Visiters who contact</h2>
<p>Contact Details</p>            
<table class="table table-dark table-striped">
<tr>
<td>Id</td>
<td> Name</td>
<td>Email</td>
<td>Phone</td>
<td>Message</td>
</tr>
<?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($contact->id); ?></td>
<td><?php echo e($contact->name); ?></td>
<td><?php echo e($contact->email); ?></td>
<td><?php echo e($contact->number); ?></td>
<td><?php echo e($contact->message); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>








<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminmaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>