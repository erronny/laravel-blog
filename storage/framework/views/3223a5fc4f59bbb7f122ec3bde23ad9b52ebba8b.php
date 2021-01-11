<?php $__env->startSection('content'); ?>
<style type="text/css">
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    border: 1px solid #ddd;
}
</style>
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
                                        <div class="text text-danger" id="errorMessage"></div>
                                        <?php if(Session::has('message')): ?>
                                        <div class="alert alert-success login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo Session::get('message'); ?> </div>
                                        <?php endif; ?>

                                        <?php if(Session::has('error')): ?>
                                        <div class="alert alert-danger login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo Session::get('error'); ?> </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="product-status-wrap border-pdt-ct">
                                        <table class="table">
                                            <tr>
                                                <th width="10%">Image</th>
                                                <th width="30%">Product Title</th>
                                                <th width="10%" style="text-align: center;">Price</th>
                                                <th width="10%">Quality</th>
                                                <th width="10%" style="text-align: center;">Discount</th>
                                                <th width="10%" style="text-align: center;">Total</th>
                                                <th width="10%" style="text-align: center;">Action</th>
                                            </tr>
                                            <?php 
                                                $total=$subtotal=$grandtotal = 0;
                                             ?>
                                             <?php if(!empty($products) && count($products) !=0): ?>
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php 
                                                        $total+=$product->quantity*$product->price;
                                                        $subtotal+=$product->quantity*$product->price;
                                                        $grandtotal+=$product->quantity*$product->price; 
                                                    ?>
                                                    <tr>
                                                        <td><img style="width: 100px" src="<?php echo e(asset("assets/img/product/".$product->attributes->image)); ?>" alt="" /></td>
                                                        <td>
                                                            <h3><a href="<?php echo e(URL('/admin/updateDetail/'.$product->id)); ?>"><?php echo e($product->name); ?></a></h3>
                                                            
                                                           <!--  <p>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum.</p> -->
                                                        </td>
                                                        <td style="text-align: center;">$<?php echo e(number_format($product->price,2)); ?></td>
                                                        <td>
                                                            <form method="POST" action="<?php echo e(URL('admin/updateCart/')); ?>">
                                                                 <?php echo e(csrf_field()); ?>

                                                                <input type="hidden" name="id" value="<?php echo e($product->id); ?>">     
                                                                <input type="text" style="display: inline-block;width: 50px;" class="form-control quantity" name="quantity" id="quantity" pqty="<?php echo e($product->quantity); ?>" pid="<?php echo e($product->id); ?>" value="<?php echo e($product->quantity); ?>">
                                                                <button class="btn btn-warning hidden " ><i class="fa fa-refresh" aria-hidden="true"></i></button>     
                                                                
                                                            </form>
                                                            


                                                        </td>
                                                        <td style="text-align: center;"><?php echo e($product->attributes->discount); ?></td>
                                                        <td style="text-align: center;">$<?php echo e(number_format($product->quantity*$product->price,2)); ?></td>
                                                        <td style="text-align: center;">
                                                            
                                                            <a href="<?php echo e(URL('admin/removeItem/'.$product->id)); ?>" data-toggle="tooltip" title="Trash" class="pd-setting-ed btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                                                             

                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 <tr>
                                           <td colspan="5" style="text-align: right;"><b>Total&nbsp;&nbsp;</b></td>
                                        
                                           <td  colspan="2" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>$<?php echo e(number_format($total,2)); ?></b></td>
                                       </tr>
                                        <tr>
                                           <td colspan="5" style="text-align: right;"><b>Sub Total&nbsp;&nbsp;</b></td>
                                          
                                           <td  colspan="2" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>$<?php echo e(number_format($subtotal,2)); ?></b></td>
                                       </tr>
                                        <tr>
                                           <td colspan="5" style="text-align: right;"><b>Grand Total&nbsp;&nbsp;</b></td>
                                           
                                           <td  colspan="2" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>$<?php echo e(number_format($grandtotal,2)); ?></b></td>
                                       </tr>


                                        <tr class="text text-center">
                                            <td colspan="7" style="text-align: center;">
                                                <a href="<?php echo e(URL('admin/order_place')); ?>" class="btn btn-primary">Place Order</a>
                                            </td>
                                        </tr>

                                            <?php else: ?>
                                            <tr>
                                                <td colspan="7" class="alert alert-danger">No Item</td>
                                            </tr>
                                            <?php endif; ?>
                                           
                                        </table>
                                    </div>

                                     <?php if(!empty($products) && count($products) !=0): ?>

                                    <div class="row form-group">
                                  
                                 
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
<style type="text/css">
    
    .actions{
        display: none !important;
    }
</style>
 <script src="<?php echo e(asset('assets/js/wizard/jquery.steps.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/wizard/steps-active.js')); ?>"></script>
    <script type="text/javascript">
        $('.quantity').change(function(){
            $(this).val();
            var pid = $(this).attr('pid');
            var qty = $(this).attr('pqty');
            var newqty = $(this).val();
            var ths = this;
            $('#errorMessage').html('');
            if(qty == newqty){
                console.log('same');
            }else{
                console.log('change');

                $.ajax({
                    url: "<?php echo e(URL('admin/getProductById')); ?>"+'/'+pid, 
                    success: function(result){
                        var data = JSON.parse(result);
                        if(data.status == 'success'){
                            console.log('status',data.status);
                            console.log(data);
                            if(newqty > data.stock){
                                $('#errorMessage').html('out of stock');
                                $(ths).val(qty);
                            }else{
                                //alert('process');
                                $(ths).next('button').removeClass('hidden');
                                $('#errorMessage').html('');
                            }
                            //$("#status").val(data.results.status);
                        }
                    }
                });
                
                console.log('update');
            }
            
            

           

        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>