<?php $__env->startSection('content'); ?>
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <div class="col-sm-12"><h1><span><?php echo e($page_title); ?> </span></h1></div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row form-group">
                            <form id="statusFilterForm">
                                
                                <div class="col-sm-3">
                                    
                                    <?php $status = array('pending','accept','dispatched','discard','placed');
                                     ?>
                                    <label>Order Status</label>
                                    <select class="form-control" name="status" id="statusChange">
                                        <option value="all" selected="">All</option>
                                        <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value); ?>" <?php 
                                               if(isset($_REQUEST['status'])){ 
                                                   if($_REQUEST['status'] == $value){ 
                                                        echo "selected"; 
                                                    }
                                                }
                                            ?>><?php echo e(ucfirst($value)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    
                                </div>
                                <div class="col-sm-2">
                                    <label>From Date</label>
                                  <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From" autocomplete="off" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>">
                                </div>
                                <div class="col-sm-2">
                                    <label>To Date</label>
                                  <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To" autocomplete="off" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>">
                                </div>
                                <div class="col-sm-2" style="margin-top:23px;">
                                  <button class="btn btn-warning" id="search_data">Search</button>
                                  <a href="<?php echo e(URL('admin/order')); ?>" class="btn btn-warning" >Reset</a>
                                </div>
                            </form>        
                        </div>
                        <hr/>                     
                    </div>

                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>
                                <th width="2%">SNO</th>
                                <th width="10%">Order Id</th>
                                <th width="10%">Discount</th>
                                <th width="20%">Amonut</th>
                                <th width="20%">Courier Partner</th>
                                <th width="20%">Tracking Link</th>
                                <th width="5%">Status</th>
                                <th width="30%">Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('extrajs'); ?>

 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/jquery.datetimepicker.css')); ?>">
<script src="<?php echo e(asset('assets/js/jquery.datetimepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.datetimepicker.full.min.js')); ?>"></script>


<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable({
      "lengthMenu": [[25, 50, 100, 500, 1000],[25, 50, 100, 500, "Max"]],
"pageLength": '500',
    });
} );

var token = "<?php echo e(csrf_token()); ?>";
var status = "<?= isset($_REQUEST['status'])?$_REQUEST['status']:'';  ?>";
var from_date = "<?= isset($_REQUEST['from_date'])?$_REQUEST['from_date']:'';  ;  ?>";
var to_date = "<?= isset($_REQUEST['to_date'])?$_REQUEST['to_date']:'';  ?>";


$('#statusChange').change(function(){
    $('#statusFilterForm').submit();
});


jQuery(function(){
 jQuery('#from_date').datetimepicker({
  format:'Y/m/d',
  maxDate:0,
  onShow:function( ct ){
   this.setOptions({
    maxDate:jQuery('#to_date').val()?jQuery('#to_date').val():0
   })
  },
  timepicker:false,
  // onChangeDateTime:function(dp,$input){
  //   console.log($input.val());
  // }
 });
 jQuery('#to_date').datetimepicker({
  format:'Y/m/d',
  onShow:function( ct ){
   this.setOptions({
    minDate:jQuery('#from_date').val()?jQuery('#from_date').val():false,
   })
  },
  timepicker:false,
  maxDate:0,
  //  onChangeDateTime:function(dp,$input){
  //   console.log($input.val());
  // }
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
              'url':"<?php echo e(URL('admin/getMyOrder')); ?>",
              "type": "POST",
              "data":{"_token":token,'status':status,'from_date':from_date,'to_date':to_date}
            }, "columns": [
                { "data": "sno"},
                { "data": "orderId"},
                { "data": "discount"},
                { "data": "amount"},
                { "data": "courier"},
                { "data": "link"},
                { "data": "status"},
                { "data": "action" },
            ]
        } ); 
    }

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>