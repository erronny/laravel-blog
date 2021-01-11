<?php $__env->startSection('content'); ?>
<div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    
                                    <div class="col-sm-12"><h1>Order <span class="table-project-n">List</span></h1></div>
                                    
                                </div>
                            </div>
<div class="container-fluid">
<div class="row form-group">
    <form id="statusFilterForm">
        <div class="col-sm-3">
            <label>User</label>
             <?php $status = array('pending','accept','dispatched','discard','placed') ?>
            <select class="form-control" name="user" id="user">
                <option value="all" selected="">All</option>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($value->id); ?>" <?php 
                   if(isset($_REQUEST['user'])){ 
                       if($_REQUEST['user']== $value->id){ 
                            echo "selected"; 
                        }
                    }
                    ?>><?php echo e(ucfirst($value->name)); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="col-sm-3">
            
            <?php $status = array('pending','accept','dispatched','discard','placed') ?>
            <label>Order Status</label>
            <select class="form-control" name="status" id="statusChange">
                <option value="all" selected="">All</option>
                <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($value); ?>" <?php 
                   if($currentstatus == $value){ 
                        echo "selected"; 
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
                                        <th width="10%">Amonut</th>
                                        <th width="10%">Order By</th>
                                        <th width="10%">Status</th>
                                        <th width="10%">Tracking Link</th>
                                        <th width="10%">Date</th>
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


<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Change Status</h4>
        </div>
        <div class="modal-body">
            <form id="statusForm" onsubmit="return statusForm(this)">
            <input type="hidden" name="order_id" id="order_id">
            <div class="row form-group">

                <div class="col-sm-4">Status</div>
                <div class="col-sm-8">
                    <select class="form-control" name="status" id="status" required="">
                        <option value="" selected="">Select Status</option>
                        <option value="pending" >Pending</option>
                        <option value="accept">Accept</option>
                        <option value="dispatched">Dispatched</option>
                        <option value="discard">Discard</option>
                    </select>
                </div>
            </div>

            <div class="row form-group" id="track_url_section" style="display: none;">

                <div class="row form-group">

                    <div class="col-sm-4">Corious Partner</div>
                    <div class="col-sm-8">
                        <select class="form-control" name="courier" id="courier">
                            <option value="" selected="">Select Corious Partner</option>
                            <?php $__currentLoopData = $couriers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$courier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($courier->id); ?>"><?php echo e($courier->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </select>
                    </div>
                </div>


                <div class="col-sm-4">Tracking Url</div>
                <div class="col-sm-8">
                    <input type="" placeholder="Enter Tracking Url" class="form-control" name="track_url" id="track_url">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-4">Remark</div>
                <div class="col-sm-8">
                    <textarea placeholder="Remark" name="remark" id="remark" class="form-control"></textarea>
                </div>
            </div>

                <button class="btn btn-default" id="updateStatus1" >Update</button>
            </form>

        </div>
        <div class="modal-footer">
            
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

$('#statusChange').change(function(){
    $('#statusFilterForm').submit();
});

var token = "<?php echo e(csrf_token()); ?>";
var status = "<?= $currentstatus;  ?>";
var from_date = "<?= isset($_REQUEST['from_date'])?$_REQUEST['from_date']:'';  ;  ?>";
var to_date = "<?= isset($_REQUEST['to_date'])?$_REQUEST['to_date']:'';  ?>";
var user = "<?= isset($_REQUEST['user'])?$_REQUEST['user']:'';  ?>";

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
              'url':"<?php echo e(URL('admin/getOrder')); ?>",
              "type": "POST",
              "data":{"_token":token,'status':status,'from_date':from_date,'to_date':to_date,'user':user}
            }, "columns": [
                { "data": "sno"},
                { "data": "orderId"},
                { "data": "discount"},
                { "data": "amount"},
                { "data": "orderby"},
                { "data": "status"},
                { "data": "link"},
                { "data": "date"},
                { "data": "action" },
            ]
        } ); 
    }


function statusForm(obj){
    var flag = false;
   
// }
// $(document).on('click','#updateStatus',function(){
    var status = ($("#status").val());
    var track_url = ($("#track_url").val());
    var remark = ($("#remark").val());
    var order_id = ($("#order_id").val());
    var courier = ($("#courier").val());


    var _token = "<?php echo e(csrf_token()); ?>";
    if(true){
      $.ajax({
        type: "POST",
        url: "<?php echo e(URL('admin/updateStatus')); ?>",
        data:{
            _token:_token,
            order_id:order_id,
            track_url:track_url,
            remark:remark,
            status:status,
            courier:courier
        },
        beforeSend(xhr){
            //alert('before');
        },
        success: function(result){
            flag = true;
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
   return flag; 
}
// });


// $(document).on('click','#updateDefault',function(){
//     var id = ($("input[name=image]:checked").val());

//     var _token = "<?php echo e(csrf_token()); ?>";
//     if(true){
//       $.ajax({
//         type: "POST",
//         url: "<?php echo e(URL('admin/updateImages')); ?>",
//         data:{_token:_token,id:id},
//         beforeSend(xhr){
//             //alert('before');
//         },
//         success: function(result){
//           console.log(result);
//           var obj = JSON.parse(result);
//           if(obj.status == "success"){
//             $('#myModal').modal('hide');
//             //window.location.reload();
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
// });

$(document).on('click','.changeStatus',function(){
    var pid = $(this).attr('pid');
    $('#order_id').val(pid);
    $("#remark").val('');
    $('#myModal').modal('show');

    $.ajax({
        url: "<?php echo e(URL('admin/getCurrentorder')); ?>"+'/'+pid, 
        success: function(result){
            var data = JSON.parse(result);
            if(data.status == 'success'){
                console.log(data.results.status);
                $("#status").val(data.results.status);
            }
        }
    });
})
$(document).on('change','#status',function(){
    console.log($(this).val());
    $('#track_url_section').hide();
    $("#courier").prop("required", false);
    $("#track_url").prop("required", false);
    if($(this).val() == 'dispatched'){
        
        $("#courier").prop("required", true);
        $("#track_url").prop("required", true);
         $('#track_url_section').show();
    }
    
});

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>