<?php $__env->startSection('content'); ?>

<div class="section-admin container-fluid" style="margin-top: 90px;">
    <div class="container-fluid" style="    margin-bottom: 80px;padding: 0px 19px;">
    <div class="row">
        <div style="margin-left: 200px; height:280px; background-size: 80% 80%;
    background-repeat: no-repeat; background-image:url('<?php echo e(asset('assets/thedsolutionprocess.png')); ?>')"></div>
    </div>
    </div>
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <!--<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  "style="color:green;">-->
                        <!--    <div class="admin-content analysis-progrebar-ctn res-mg-t-15">-->
                        <!--        <h4 class="text-left text-uppercase"><b><a style="color:green;" href="<?php echo e(URL('admin/tender?status=1')); ?>">Active Contractor</a></b></h4>-->
                        <!--        <div class="row vertical-center-box vertical-center-box-tablet">-->
                        <!--            <div class="col-xs-3 mar-bot-15 text-left">-->
                        <!--                <label class="label bg-green">Total</label>-->
                        <!--            </div>-->
                        <!--            <div class="col-xs-9 cus-gh-hd-pro">-->
                        <!--                <h2 class="text-right no-margin"><?php echo e($list['active']); ?></h2>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="progress progress-mini">-->
                        <!--            <div style="width: 78%;" class="progress-bar bg-green"></div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
      
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-15 bg-danger" style="background-color: #d5480f;">
                            <h4 class="text-left text-uppercase"><b>
                                <a style="color:#fff;" href="<?php echo e(URL('admin/document?status=1')); ?>">Active Contractor</a></b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="col-xs-3 mar-bot-15 text-left">
                                    <label class="label bg-green">Total</label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin" style="color:#fff;"><?php echo e($list['active']); ?></h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 78%;" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                    </div> 

                        <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">-->
                        <!--    <div class="admin-content analysis-progrebar-ctn res-mg-t-15">-->
                        <!--        <h4 class="text-left text-uppercase"><b><a style="color:red;" href="<?php echo e(URL('admin/tender?status=0')); ?>">Inactive Contractor</a></b></h4>-->
                        <!--        <div class="row vertical-center-box vertical-center-box-tablet">-->
                        <!--            <div class="col-xs-3 mar-bot-15 text-left">-->
                        <!--                <label class="label bg-green">Total</label>-->
                        <!--            </div>-->
                        <!--            <div class="col-xs-9 cus-gh-hd-pro">-->
                        <!--                <h2 class="text-right no-margin"><?php echo e($list['inactive']); ?></h2>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="progress progress-mini">-->
                        <!--            <div style="width: 78%;" class="progress-bar bg-green"></div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn bg-primary res-mg-t-15" style="background-color: #ee8f03;">
                            <h4 class="text-left text-uppercase"><b><a style="color:#fff;" href="<?php echo e(URL('admin/document?status=0')); ?>">Inactive Contractor</a></b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="col-xs-3 mar-bot-15 text-left">
                                    <label class="label bg-green">Total</label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin" style="color:#fff;"><?php echo e($list['inactive']); ?></h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 78%;" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                    </div>
                        <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">-->
                        <!--    <div class="admin-content analysis-progrebar-ctn res-mg-t-15">-->
                        <!--        <h4 class="text-left text-uppercase"><b><a style="color:orange;" href="<?php echo e(URL('admin/tender')); ?>">Total Contractor</a></b></h4>-->
                        <!--        <div class="row vertical-center-box vertical-center-box-tablet">-->
                        <!--            <div class="col-xs-3 mar-bot-15 text-left">-->
                        <!--                <label class="label bg-green">Total</label>-->
                        <!--            </div>-->
                        <!--            <div class="col-xs-9 cus-gh-hd-pro">-->
                        <!--                <h2 class="text-right no-margin"><?php echo e($list['total']); ?></h2>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="progress progress-mini">-->
                        <!--            <div style="width: 78%;" class="progress-bar bg-green"></div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn bg-info res-mg-t-15" style="background-color: #0a7eb4;">
                            <h4 class="text-left text-uppercase"><b><a style="color:#fff;" href="<?php echo e(URL('admin/document')); ?>">Total Contractor</a></b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="col-xs-3 mar-bot-15 text-left">
                                    <label class="label bg-green">Total</label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin" style="color:#fff;"><?php echo e($list['total']); ?></h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 78%;" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                    </div>
                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn bg-info res-mg-t-15" style="background-color: #DAF7A6;">
                                <a href="<?php echo e(URL('admin/tender/create')); ?>" class="btn btn-primary">Add Contractor</a>
                                
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green"></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"></h2>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                       
                    </div>

                </div>
            </div>

            
        </div>
        


<?php $__env->stopSection(); ?> 


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>