<?php $__env->startSection('content'); ?>
<div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    
                                    <div class="col-sm-6"><h1>Products <span class="table-project-n">List</span></h1></div>
                                    <div class="col-sm-6 text text-right">
                                      <a href="<?php echo e(URL("admin/language/create")); ?>">Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                 
                                   <table id="myTable">
                                <tr>
                                    <th>Image</th>
                                    <th>Product Title</th>
                                    <th>Status</th>
                                    <th>Purchases</th>
                                    <th>Product sales</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Setting</th>
                                </tr>
                                <tr>
                                    <td style="width: 10%"><img class="img-circle" src="<?php echo e(asset('assets/img/new-product/5-small.jpg')); ?>" alt="" /></td>
                                    <td>Jewelery Title 1</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>50</td>
                                    <td>$750</td>
                                    <td>Out Of Stock</td>
                                    <td>$15</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                    <td>Jewelery Title 2</td>
                                    <td>
                                        <button class="ps-setting">Paused</button>
                                    </td>
                                    <td>60</td>
                                    <td>$1020</td>
                                    <td>In Stock</td>
                                    <td>$17</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                    <td>Jewelery Title 3</td>
                                    <td>
                                        <button class="ds-setting">Disabled</button>
                                    </td>
                                    <td>70</td>
                                    <td>$1050</td>
                                    <td>Low Stock</td>
                                    <td>$15</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/5-small.jpg" alt="" /></td>
                                    <td>Jewelery Title 4</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>120</td>
                                    <td>$1440</td>
                                    <td>In Stock</td>
                                    <td>$12</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                    <td>Jewelery Title 5</td>
                                    <td>
                                        <button class="pd-setting">Active</button>
                                    </td>
                                    <td>30</td>
                                    <td>$540</td>
                                    <td>Out Of Stock</td>
                                    <td>$18</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                    <td>Jewelery Title 6</td>
                                    <td>
                                        <button class="ps-setting">Paused</button>
                                    </td>
                                    <td>400</td>
                                    <td>$4000</td>
                                    <td>In Stock</td>
                                    <td>$10</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
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
<style type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable({
      "lengthMenu": [[25, 50, 100, 500, 1000],[25, 50, 100, 500, "Max"]],
"pageLength": '500',
    });
} );

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>