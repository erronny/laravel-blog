 <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html">
                    <span style="font-size: 35px;">SMS</span>
                    
                </a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        
                       <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('/')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Dashboard</span></a>
                        </li>

<?php if(Auth::user()->role_id == 20): ?>
                        <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/product')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Product</span></a>
                        </li>
                         <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/courier')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Courier Partner</span></a>
                        </li>
                        <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/order')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Order</span></a>
                        </li>

                         <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/users/represntative')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Represntative</span></a>
                        </li>
<?php endif; ?>
<?php if(Auth::user()->role_id == 18): ?>


                        <li><a>Represntative</a></li>
                         <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/university')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Univercity</span></a>
                        </li>

                         <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/college')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">College</span></a>
                        </li>

                         <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/order')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Order</span></a>
                        </li>
                        
                        <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/users/agent')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Agent</span></a>
                        </li>
<?php endif; ?>
<?php if(Auth::user()->role_id == 19): ?>
                        <li><a>Agent</a></li>
                         <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/place_order')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Place Order</span></a>
                        </li>

                        <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/myOrder')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">My Order</span></a>
                        </li>  

<?php endif; ?>                      
                    </ul>
                </nav>
            </div>
        </nav>
    </div>