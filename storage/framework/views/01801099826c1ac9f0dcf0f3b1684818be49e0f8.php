<?php $__env->startSection('title', 'Admin LakeACR.com '); ?>
<?php $__env->startSection('description', 'LakeACR is one of the Top Software Company, Business Analyst, Web Solution and ERP development company bhopal we offer all comprehensive solutions.'); ?>
<?php $__env->startSection('keywords', 'Software Development ,Responsive Website ,Web Application  ,Android Application
,Desktop Application,E-Commerce, ERP'); ?>
<?php $__env->startSection('author', 'LakeACR.in'); ?>
<?php $__env->startSection('content'); ?>


<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">contact view </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
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


<table border = "1">
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>City Name</td>
<td>Email</td>
</tr>
<?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($contact->id); ?></td>
<td><?php echo e($contact->name); ?></td>
<td><?php echo e($contact->email); ?></td>
<td><?php echo e($contact->subject); ?></td>
<td><?php echo e($contact->message); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminmaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>