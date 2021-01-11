<?php $__env->startSection('content'); ?>
<div class="">
            

    <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-t-15 mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div id="myTabContent1" class="tab-content">
                            <?php $__currentLoopData = $product->image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($k == 0): ?>
                                    <?php $class="active in"; ?>
                                <?php else: ?>
                                <?php $class=""; ?>
                                <?php endif; ?>
                            <div class="product-tab-list tab-pane fade <?php echo e($class); ?>" id="single-tab<?php echo e($k); ?>">
                                <img src="<?php echo e(asset('assets/img/product/'.$value->url)); ?>" alt="" />
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </div>
                        <ul id="single-product-tab">
                             <?php $__currentLoopData = $product->image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($k == 0): ?>
                                    <?php $class="active"; ?>
                                <?php else: ?>
                                <?php $class=""; ?>
                                <?php endif; ?>
                            <li class="<?php echo e($class); ?>">
                                <a href="#single-tab<?php echo e($k); ?>"><img src="<?php echo e(asset('assets/img/product/'.$value->url)); ?>" alt="" /></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            
                           
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="single-product-details res-pro-tb">
                            <h1><?php echo e($product->name); ?></h1>
                            <span class="single-pro-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                            <div class="single-pro-price">
                                <span class="single-regular"><?php echo e($product->selling_price); ?></span>
                                
                            </div>

                            <div class="single-pro-price">
                               Author : <span class="single-regular"><?php echo e($product->author); ?></span>
                                
                            </div>

                            <div class="single-pro-price">
                               Publisher : <span class="single-regular"><?php echo e($product->publisher); ?></span>
                                
                            </div>
                           
                            <div class="color-quality-pro1">
                                
                                
                                <?php if(Auth::user()->role_id == Config::get('constants.AGENT')): ?>
                                <div class="color-quality1">
                                    <h4>Quality</h4>
                                    <div class="quantity">
                                        <div class="pro-quantity-changer">
                                            <input type="text" value="1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="single-pro-button">
                                    <div class="pro-button">
                                        <a href="#">ADD TO Cart</a>
                                    </div>
                                   
                                </div>
                                <?php else: ?>
                                    <br/>
                                    <br/>
                                    <br/>
                                <?php endif; ?>
                                <div class="clear"></div>
                               

                            </div>
                            <div class="single-pro-cn">
                                <h3>OVERVIEW</h3>
                                <p><?php echo e($product->short_des); ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab End-->
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul id="myTab" class="tab-review-design">
                            <li class="active"><a href="#description">description</a></li>

                            
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="product-tab-list product-details-ect tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div><p><?php echo $product->long_des; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="reviews">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="review-content-section">
                                                <div class="card-block">
                                                    <div class="text-muted f-w-400">
                                                        <p>No reviews yet.</p>
                                                    </div>
                                                    <div class="m-t-10">
                                                        <div class="txt-primary f-18 f-w-600">
                                                            <p>Your Rating</p>
                                                        </div>
                                                        <div class="stars stars-example-css detail-stars">
                                                            <div class="review-rating">
                                                                <fieldset class="rating">
                                                                    <input type="radio" id="star5" name="rating" value="5">
                                                                    <label class="full" for="star5"></label>
                                                                    <input type="radio" id="star4half" name="rating" value="4 and a half">
                                                                    <label class="half" for="star4half"></label>
                                                                    <input type="radio" id="star4" name="rating" value="4">
                                                                    <label class="full" for="star4"></label>
                                                                    <input type="radio" id="star3half" name="rating" value="3 and a half">
                                                                    <label class="half" for="star3half"></label>
                                                                    <input type="radio" id="star3" name="rating" value="3">
                                                                    <label class="full" for="star3"></label>
                                                                    <input type="radio" id="star2half" name="rating" value="2 and a half">
                                                                    <label class="half" for="star2half"></label>
                                                                    <input type="radio" id="star2" name="rating" value="2">
                                                                    <label class="full" for="star2"></label>
                                                                    <input type="radio" id="star1half" name="rating" value="1 and a half">
                                                                    <label class="half" for="star1half"></label>
                                                                    <input type="radio" id="star1" name="rating" value="1">
                                                                    <label class="full" for="star1"></label>
                                                                    <input type="radio" id="starhalf" name="rating" value="half">
                                                                    <label class="half" for="starhalf"></label>
                                                                </fieldset>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mg-b-15 mg-t-15">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="User Name">
                                                    </div>
                                                    <div class="input-group mg-b-15">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Last Name">
                                                    </div>
                                                    <div class="input-group mg-b-15">
                                                        <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group review-pro-edt">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit
                                                            </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                                beatae vitae dicta sunt explicabo.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labo nisi ut aliquip ex
                                                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ut labore et dolore magna aliqua. Ut enim ad , quis nostrud exercitation ullamco
                                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>




<?php $__env->stopSection(); ?>
<?php $__env->startSection('extrajs'); ?>


 <script src="<?php echo e(asset('assets/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


<script type="text/javascript">

var token = "<?php echo e(csrf_token()); ?>";
   

$(document).ready( function () {
    $('#myTable').DataTable({
      "lengthMenu": [[25, 50, 100, 500, 1000],[25, 50, 100, 500, "Max"]],
      "pageLength": '500',
    });
});
getRecord();
    function getRecord(){
        var table=$('#example').DataTable( {
            "processing": true,
            "serverSide": true,
            "destroy": true,
            "lengthMenu": [[25, 50, 100, 500, 1000],[25, 50, 100, 500, "Max"]],
             "pageLength": '500',
            "ajax": {
              'url':"<?php echo e(URL('admin/getProduct')); ?>",
              "type": "POST",
              "data":{"_token":token}
            }, "columns": [
                { "data": "image"},
                { "data": "name"},
                { "data": "price"},
                { "data": "author"},
                { "data": "publisher"},
                { "data": "shot_des"},
                { "data": "stock"},
                { "data": "status"},
                { "data": "action" },
            ]
        } ); 
    }    
$(document).on('click','#updateStock',function(){
    var stock = ($("#newStock").val());
    var remark = ($("#remark").val());
    var product_id = ($("#product_id").val());

    var _token = "<?php echo e(csrf_token()); ?>";
    if(true){
      $.ajax({
        type: "POST",
        url: "<?php echo e(URL('admin/updateStock')); ?>",
        data:{
            _token:_token,
            product_id:product_id,
            stock:stock,
            remark:remark,
            status:'add'
        },
        beforeSend(xhr){
            //alert('before');
        },
        success: function(result){
          console.log(result);
          var obj = JSON.parse(result);
          if(obj.status == "success"){
            $('#stockPopup').modal('hide');
            //window.location.reload();
            $('#example').DataTable().ajax.reload();
          }
          if(obj.status == "failed"){
            alert(obj.message);
          }
             //console.log(result);
        },error: function(data){
                //alert("error");
        },complete: function(){
                //alert('complete');
        } 
      }); 
  } 
});


$(document).on('click','#updateDefault',function(){
    var id = ($("input[name=image]:checked").val());

    var _token = "<?php echo e(csrf_token()); ?>";
    if(true){
      $.ajax({
        type: "POST",
        url: "<?php echo e(URL('admin/updateImages')); ?>",
        data:{_token:_token,id:id},
        beforeSend(xhr){
            //alert('before');
        },
        success: function(result){
          console.log(result);
          var obj = JSON.parse(result);
          if(obj.status == "success"){
            $('#myModal').modal('hide');
            //window.location.reload();
            $('#example').DataTable().ajax.reload();
          }
          if(obj.status == "failed"){
            alert(obj.message);
          }
             //console.log(result);
        },error: function(data){
                //alert("error");
        },complete: function(){
                //alert('complete');
        } 
      }); 
  } 
});

$(document).on('click','.stock',function(){
    var pid = $(this).attr('pid');
    $('#product_id').val(pid);
    $("#newStock").val(0);
    $('#stockPopup').modal('show');

    $.ajax({
        url: "<?php echo e(URL('admin/getCurrentStock')); ?>"+'/'+pid, 
        success: function(result){
            var data = JSON.parse(result);
            if(data.status == 'success'){
                $("#currentStock").html(data.stock);
            }
        }
    });
})
// $('.stock').click(function(){
    
// });

$(document).on('click','.imagePopup',function(){
    var pid = $(this).attr('pid');
    $('#myModal').modal('show');

    $.ajax({
        url: "<?php echo e(URL('admin/getImages')); ?>"+'/'+pid, 
        success: function(result){
            var data = JSON.parse(result);
            $("#imageShow").html(data.html);
        }
    });

})
 // $.ajax({url: "demo_test.txt", success: function(result){
 //      $("#div1").html(result);
 // }});


// var _token = "<?php echo e(csrf_token()); ?>";
//     if(true){
//       $.ajax({
//         type: "POST",
//         url: "<?php echo e(URL('admin/repushStatus')); ?>",
//         data:{_token:_token,status:status,id:id},
//         beforeSend(xhr){
//             //alert('before');
//         },
//         success: function(result){
//           console.log(result);
//           var obj = JSON.parse(result);
//           if(obj.status == "success"){
//             console.log(obj.data);
//             console.log(obj.data[0].advertise.location.deviceId);
//             $('#example').DataTable().ajax.reload();
//           }
//           if(obj.status == "failed"){
//             alert(obj.message);
//           }
//              //console.log(result);
//         },error: function(data){
//                 //alert("error");
//         },complete: function(){
//                 //alert('complete');
//         } 
//       }); 
//   } 
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>