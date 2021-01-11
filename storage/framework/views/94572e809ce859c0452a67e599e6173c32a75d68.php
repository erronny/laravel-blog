<?php $__env->startSection('content'); ?>

<div class="section-admin container-fluid" style="margin-top: 90px;">
    <?php if(Auth::user()->role_id == Config::get('constants.VENDOR') || Auth::user()->role_id == Config::get('constants.REPRASNTATIVE')): ?>
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b><a href="<?php echo e(URL('admin/order')); ?>">Orders</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">Total</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo e($countarray['order']); ?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b><a href="<?php echo e(URL('admin/order?status=pending')); ?>">Pending</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">Total</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo e($countarray['pending']); ?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b><a href="<?php echo e(URL('admin/order?status=accept')); ?>">Accept</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">Total</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo e($countarray['accept']); ?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>  

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b><a href="<?php echo e(URL('admin/order?status=dispatched')); ?>">Dispatched</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">Total</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo e($countarray['dispatched']); ?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>

                       <!--  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b><?php echo e(isset($data['user']['label'])?$data['user']['label']:'User'); ?></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo e(isset($data['user'])?$data['user']['value']:0); ?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div> -->
                       
                    </div>

                </div>
            </div>

            <div class="row admin text-center">
                 <div class="col-md-12">
                        <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="margin-top: 15px;">
                                <h4 class="text-left text-uppercase"><b><a href="<?php echo e(URL($url)); ?>"><?php echo e(isset($data['user']['label'])?$data['user']['label']:'User'); ?></a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">Total</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo e(isset($data['user'])?$data['user']['value']:0); ?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                         <?php if(Auth::user()->role_id == Config::get('constants.VENDOR')): ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="margin-top: 15px;">
                                <h4 class="text-left text-uppercase"><b><a href="<?php echo e(URL('admin/order')); ?>">Revanue</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">Total</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">$<?php echo e(number_format($countarray['revanue'],2)); ?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="margin-top: 15px;">
                                <h4 class="text-left text-uppercase"><b><a href="<?php echo e(URL('admin/product')); ?>">Product</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">Total</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo e($countarray['product']); ?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                         <?php if(Auth::user()->role_id == Config::get('constants.VENDOR')): ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="margin-top: 15px;">
                                <h4 class="text-left text-uppercase"><b><a href="<?php echo e(URL('admin/courier')); ?>">Courier Partner</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">Total</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo e($countarray['courier']); ?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                         <?php if(Auth::user()->role_id == Config::get('constants.REPRASNTATIVE')): ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15" style="margin-top: 15px;">
                                <h4 class="text-left text-uppercase"><b><a href="<?php echo e(URL('admin/order')); ?>">Inactive Agent</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">Total</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo e($countarray['inactiveagent']); ?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        </div>
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    
                     <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="product-sales-chart">
                            <h4 class="text-left text-uppercase"><b><a href="#">Agents</a></b></h4>
                            <div class="analytics-rounded-content">
                               <!--  <h5>Percentage distribution</h5> -->
                                <!--< h2><span class="counter">60</span>/20</h2> -->
                               <!--  <div class="text-center">
                                    <div id="sparkline2"></div>
                                </div> -->
                            </div>
                             <?php if(Auth::user()->role_id == Config::get('constants.AGENT')): ?>
                                <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Reprasntative</th>
                                                    <th>Agent</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($agentcount): ?>

                                                <?php $__currentLoopData = $agentcount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td style="text-align: left;"><?php echo e($key); ?></td>
                                                    <td style="text-align: left;"><?php echo e($agent); ?></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                                
                                            </tbody>
                                 </table>
                             <?php else: ?>
                              <table class="table">
                                            <thead>
                                                <tr>
                                                     <?php if(Auth::user()->role_id == Config::get('constants.VENDOR')): ?>
                                                <th>Reprasntative</th>
                                                <?php endif; ?>
                                                
                                                    <th>Agent</th>
                                                    <?php if(Auth::user()->role_id == Config::get('constants.REPRASNTATIVE')): ?>
                                                <th>Status</th>
                                                <?php endif; ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($agentcount): ?>

                                                <?php $__currentLoopData = $agentcount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                   <td style="text-align: left;"><?php echo e($key); ?></td>
                                                     <?php if(Auth::user()->role_id == Config::get('constants.VENDOR')): ?>
                                               <td style="text-align: left;"><?php echo e($agent); ?></td>
                                                <?php endif; ?>
                                                 <?php if(Auth::user()->role_id == Config::get('constants.REPRASNTATIVE')): ?>
                                                <td><b><?php if($agent==0): ?> Active <?php else: ?> Inactive <?php endif; ?></b></td>
                                                <?php endif; ?>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                                
                                            </tbody>
                                 </table>
                             <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b>Top Three 
                                                <?php if(Auth::user()->role_id == Config::get('constants.VENDOR')): ?>
                                                Product
                                                <?php endif; ?>
                                                 <?php if(Auth::user()->role_id == Config::get('constants.REPRASNTATIVE')): ?>
                                                Agent
                                                <?php endif; ?>
                                             </b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline cus-product-sl-rp">
                                <?php if($topproduct): ?>
                                <?php $colorarray=array('#24caa1','#00b5c2','#ff7f5a'); ?>
                                <?php $__currentLoopData = $topproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <h5><i class="fa fa-circle" style="color: <?php echo e($colorarray[$key]); ?>;"></i><?php echo e(ucwords($product->name)); ?></h5>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                            </ul>
                            <div id="morris-area-chart" style="height: 356px;"></div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
   <?php endif; ?>
        <?php if(Auth::user()->role_id == Config::get('constants.AGENT')): ?>
         <div class="row admin text-center">
            <div class="col-md-12">
                    <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b><a href="<?php echo e(URL('admin/myOrder')); ?>">Orders</a></b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">Total</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo e($countarray['order']); ?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                     </div>
                    </div>
            </div>
         </div>
        <?php endif; ?>

<?php $__env->stopSection(); ?> 

<!-- <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>