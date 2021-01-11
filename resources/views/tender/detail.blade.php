@extends('layouts.master')
@section('content')
<div class="">
            

    <!-- Single pro tab start-->
     <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                
                                <div class="col-sm-6"><h1></h1></div>
                                <div class="col-sm-6 text text-right">
                                     @if(Auth::user()->role_id == Config::get('constants.VENDOR'))
                                  <a class="btn btn-primary" href="{{ URL("admin/tender")}}">Back</a>
                                  @endif
                                </div>
                            </div>
                            <br/>
                        </div>
                       
        <div class="single-product-tab-area mg-t-15 mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="single-product-details res-pro-tb">
                            <h1>{{$product->name}}</h1>
                            
                            <div class="row form-group">

                                <div class="col-sm-6">
                                    <div class="col-sm-4">Login Id</div>
                                    <div class="col-sm-8">{{$product->loginId}}</div>
                                    {{-- <span class="single-old"><del>{{$product->selling_price}}</del></span> --}}
                                </div>
                            </div>

                             <div class="row form-group">

                                <div class="col-sm-6">
                                    <div class="col-sm-4">Company name</div>
                                    <div class="col-sm-8">{{$product->company_name}}</div>
                                    {{-- <span class="single-old"><del>{{$product->selling_price}}</del></span> --}}
                                </div>
                            </div>

                             <div class="row form-group">
                                <div class="col-sm-6">
                                    <div class="col-sm-4">Registration Number</div>
                                    <div class="col-sm-8">{{$product->registrationNo}}</div>
                                    {{-- <span class="single-old"><del>{{$product->selling_price}}</del></span> --}}
                                </div>

                                <div class="col-sm-6">
                                    <div class="col-sm-4">City</div>
                                    <div class="col-sm-8">{{$product->city}}</div>
                                    {{-- <span class="single-old"><del>{{$product->selling_price}}</del></span> --}}
                                </div>
                            </div>

                             <div class="row form-group">
                                <div class="col-sm-6">
                                    <div class="col-sm-4">State</div>
                                    <div class="col-sm-8">{{$product->state}}</div>
                                    {{-- <span class="single-old"><del>{{$product->selling_price}}</del></span> --}}
                                </div>

                                <div class="col-sm-6">
                                    <div class="col-sm-4">PAN Number</div>
                                    <div class="col-sm-8">{{$product->panNumber}}</div>
                                    {{-- <span class="single-old"><del>{{$product->selling_price}}</del></span> --}}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <div class="col-sm-4">Tender Title</div>
                                    <div class="col-sm-8">{{$product->tenderTitle}}</div>
                                    {{-- <span class="single-old"><del>{{$product->selling_price}}</del></span> --}}
                                </div>
                                <div class="col-sm-6">
                                    <div class="col-sm-4">Company Nature</div>
                                    <div class="col-sm-8">{{$product->companyNature}}</div>
                                    {{-- <span class="single-old"><del>{{$product->selling_price}}</del></span> --}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <div class="col-sm-4">Contact Name</div>
                                    <div class="col-sm-8">{{$product->contactName}}</div>
                                    {{-- <span class="single-old"><del>{{$product->selling_price}}</del></span> --}}
                                </div>
                                <div class="col-sm-6">
                                    <div class="col-sm-4">Email</div>
                                    <div class="col-sm-8">{{$product->email }}</div>
                                    {{-- <span class="single-old"><del>{{$product->selling_price}}</del></span> --}}
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <div class="col-sm-4">Contact Number</div>
                                    <div class="col-sm-8">{{$product->contact}}</div>
                                    {{-- <span class="single-old"><del>{{$product->selling_price}}</del></span> --}}
                                </div>
                                <div class="col-sm-6">
                                    <div class="col-sm-4">Tender Id</div>
                                    <div class="col-sm-8">{{$product->tenderId}}</div>
                                    {{-- <span class="single-old"><del>{{$product->selling_price}}</del></span> --}}
                                </div>
                            </div>
                          
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <h3>Address</h3>
                                    <p>{{$product->address}} </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      
</div>




@endsection
@section('extrajs')
{{-- <style type="text/css" href="{{asset('assets/css/jquery.dataTables.min.css')}}"></style>
<script type="text/javascript" src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
 --}}

 <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


<script type="text/javascript">
$('.addToCart').click(function(){
    var id = $(this).attr('pid');
    var _token = "{{ csrf_token() }}";
    if(true){
      $.ajax({
        type: "POST",
        url: "{{ URL('admin/addToCart') }}",
        data:{_token:_token,id:id},
        beforeSend(xhr){
            //alert('before');
        },
        success: function(result){
          console.log(result);
          var obj = JSON.parse(result);
          if(obj.status == "success"){
            $('#cartMessage').html(obj.message);
            $('#cortCount').html(obj.count);
            //window.location.reload();
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

})
var token = "{{ csrf_token() }}";
   

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
              'url':"{{ URL('admin/getProduct') }}",
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