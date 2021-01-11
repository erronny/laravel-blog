@extends('layouts.master')
@section('content')
    <div class="data-table-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div>
                            @if(Session::has('message'))
                            <div class="alert alert-success login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {!! Session::get('message') !!} </div>
                            @endif

                            @if(Session::has('error'))
                            <div class="alert alert-danger login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {!! Session::get('error') !!} </div>
                            @endif
                        </div>
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                
                                <div class="col-sm-6"><h1>{{$page_title}}</h1></div>
                                <div class="col-sm-6 text text-right">
                                     @if(Auth::user()->role_id == Config::get('constants.VENDOR'))
                                  <a class="btn btn-primary" href="{{ URL("admin/contractor/create")}}">Add</a>
                                  @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="sparkline13-graph">
                            
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <form>
                                    <div class="row form-group">
                                        
                                        <div class="col-sm-3">
                                            <label>Mobile No</label>
                                            <input type="text" name="mobile" class="form-control" placeholder="Mobole" value="<?php if(isset($_REQUEST['mobile'])){ echo $_REQUEST['mobile']; } ?>">
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Mobole" value="<?php if(isset($_REQUEST['email'])){ echo $_REQUEST['email']; } ?>">
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Contractor Name</label>
                                            <input type="text" name="contractor_name" class="form-control" placeholder="Mobole" value="<?php if(isset($_REQUEST['contractor_name'])){ echo $_REQUEST['contractor_name']; } ?>">
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Commpany Name</label>
                                            <input type="text" name="company_name" class="form-control" placeholder="Mobole" value="<?php if(isset($_REQUEST['company_name'])){ echo $_REQUEST['company_name']; } ?>">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3 text text-left">
                                            <select class="form-control" name="status" id="status">
                                                <option value="all" selected="" <?php if(isset($_REQUEST['status'])){ if($_REQUEST['status']=='all'){echo "selected";} } ?>>All</option>
                                                <option value="1" <?php if(isset($_REQUEST['status'])){ if($_REQUEST['status']=='1'){echo "selected";} } ?>>Active</option>
                                                <option value="0" <?php if(isset($_REQUEST['status'])){ if($_REQUEST['status']=='0'){echo "selected";} } ?>>Deactive</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 text text-left">
                                            <a href="{{URL('admin/tender')}}" title="Reset Filter" class="btn btn-primary">Reset</a>
                                        </div>
                                        <div class="col-sm-3 text text-right">
                                            <button type="submit" class="btn btn-warning">Search</button>
                                        </div>
                                    </div>
                                </form>

                                
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="2%">SNO</th>
                                            <th width="10%">Contractor Name</th>
                                            <th width="10%">Mobile</th>
                                            <th width="10%">Email</th>
                                            <th width="10%">Company Name</th>
                                            <th width="5%">Status</th>
                                            <th width="10%">Action</th>
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
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <div id="imageShow">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" id="updateDefault" >Update</button>
            </div>
        </div>

        </div>
    </div>


    <div id="stockPopup" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-sm-4">Current Stock</div>
                    <div class="col-sm-8">
                        <label id="currentStock">0</label>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-4">data</div>
                    <div class="col-sm-8">
                        <input type="number" id="newStock" name="stock" class="form-control" placeholder="Enter Stock">
                        <input type="hidden" id="product_id" name="product_id" class="form-control" placeholder="Enter Stock">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-4">Remark</div>
                    <div class="col-sm-8">
                        <textarea id="remark" placeholder="Enter Remart" class="form-control" name="remark"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" id="updateStock" >Add</button>
            </div>
        </div>

        </div>
    </div>

@endsection
@section('extrajs')
{{-- <style type="text/css" href="{{asset('assets/css/jquery.dataTables.min.css')}}"></style>
<script type="text/javascript" src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
 --}}

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


<script type="text/javascript">

var token           = "{{ csrf_token() }}";
var mobile          = "{{ isset($_REQUEST['mobile'])?$_REQUEST['mobile']:'' }}";
var email           = "{{ isset($_REQUEST['email'])?$_REQUEST['email']:'' }}";
var contractor_name = "{{ isset($_REQUEST['contractor_name'])?$_REQUEST['contractor_name']:'' }}";
var company_name    = "{{ isset($_REQUEST['company_name'])?$_REQUEST['company_name']:'' }}";
var status    = "{{ isset($_REQUEST['status'])?$_REQUEST['status']:'' }}";
   

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
              'url':"{{ URL('admin/getContractor') }}",
              "type": "POST",
              "data":{"_token":token,'mobile':mobile,'email':email,'contractor_name':contractor_name,
              'company_name':company_name,
              "status":status}
            }, "columns": [
                { "data": "sno"},
                { "data": "name"},
                { "data": "mobile"},
                { "data": "email"},
                { "data": "companyName"},
                { "data": "status"},
                { "data": "action" },
            ]
        } ); 
    }

    $(document).on('click','#updateStock',function(){
        var stock = ($("#newStock").val());
        var remark = ($("#remark").val());
        var product_id = ($("#product_id").val());

        var _token = "{{ csrf_token() }}";
        if(true){
          $.ajax({
            type: "POST",
            url: "{{ URL('admin/updateStock') }}",
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

        var _token = "{{ csrf_token() }}";
        if(true){
          $.ajax({
            type: "POST",
            url: "{{ URL('admin/updateImages') }}",
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
            url: "{{URL('admin/getCurrentStock')}}"+'/'+pid, 
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
            url: "{{URL('admin/getImages')}}"+'/'+pid, 
            success: function(result){
                var data = JSON.parse(result);
                $("#imageShow").html(data.html);
            }
        });

    })

// $.ajax({url: "demo_test.txt", success: function(result){
//      $("#div1").html(result);
// }});


// var _token = "{{ csrf_token() }}";
//     if(true){
//       $.ajax({
//         type: "POST",
//         url: "{{ URL('admin/repushStatus') }}",
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

@endsection