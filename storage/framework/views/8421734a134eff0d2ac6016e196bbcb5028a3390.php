<?php $__env->startSection('content'); ?>
    <div class="product-cart-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-cart-inner">
                        <div id="example-basic">
                            <h3>Shopping Cart</h3>
                            <section>
                                <h3 class="product-cart-dn">Shopping</h3>
                                <div class="product-list-cart">
                                    <div>
                                        <?php if(Session::has('message')): ?>
                                        <div class="alert alert-success login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo Session::get('message'); ?> </div>
                                        <?php endif; ?>

                                        <?php if(Session::has('error')): ?>
                                        <div class="alert alert-danger login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo Session::get('error'); ?> </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="text text-right">
                                        <a href="<?php echo e(URL('admin/order')); ?>" class="btn btn-primary"><i class="fa fa-list1"></i>Back</a>
                                    </div>
                                    <div class="product-status-wrap border-pdt-ct">
                                        <table>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product Title</th>
                                                <th>Price</th>
                                                <th>Quality</th>
                                                <th>Discount</th>
                                                <th>Total</th>
                                           
                                            </tr>
                                            <?php 
                                                $total=$subtotal=$grandtotal = 0;
                                             ?>
                                             <?php if(!empty($products)): ?>
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php 
                                                        $total+=$product->quantity*$product->price;
                                                        $subtotal+=$product->quantity*$product->price;
                                                        $grandtotal+=$product->quantity*$product->price; 
                                                    ?>
                                                    <tr>
                                                        <td><img src="<?php echo e(asset("assets/img/product/".$product->attributes->image)); ?>" alt="" /></td>
                                                        <td><h3><?php echo e($product->name); ?></h3></td>
                                                        <td><?php echo e($product->price); ?></td>
                                                        <td><?php echo e($product->quantity); ?></td>
                                                        <td><?php echo e($product->attributes->discount); ?></td>
                                                        <td>$<?php echo e($product->quantity*$product->price); ?></td>
                                                       
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                            <tr>
                                                <td colspan="6" class="alert alert-danger">No Item</td>
                                            </tr>
                                            <?php endif; ?>
                                           
                                        </table>
                                    </div>

                                     <?php if(!empty($products)): ?>

                                    <div class="row form-group">
                                   
                                    <div class="col-sm-4">
                                        <div class="row form-group">
                                            <div class="row form-group">
                                                <div class="col-sm-6">Total</div>
                                                <div class="col-sm-6"><?php echo e($total); ?></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-6">Sub Total</div>
                                                <div class="col-sm-6"><?php echo e($subtotal); ?></div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-6">Grand Total</div>
                                                <div class="col-sm-6"><?php echo e($grandtotal); ?></div>
                                            </div>

                                        </div>
                                    </div>
                                     <div class="col-sm-8"></div>
                                </div>
                                 <?php else: ?>
                                    <div class="text text-center" style="margin-top: 50px;">
                                    <a href="<?php echo e(URL('admin/place_order')); ?>" class="btn btn-primary">Contonues shopping</a>
                                    </div>
                                           
                                <?php endif; ?>
                                
                                </div>


                                
                            </section>
                           
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extrajs'); ?>
 <script src="<?php echo e(asset('assets/js/wizard/jquery.steps.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/wizard/steps-active.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>