<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="fa fa-bars"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                            <span class="admin-name"> 
                                                               <?php
                                                               echo Auth::user()->name;
                                                               
                                                               ?>
                                                               </span>
                                                            <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                     
                                                        <li><a href="<?php echo e(URL('admin/profile')); ?>"><span class="fa fa-user author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="<?php echo URL('/'); ?>/admin/websitesetting"><span class="fa fa-cog author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo e(route('logout')); ?>" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="dripicons-exit text-muted"></i><span class="fa fa-lock author-log-ic"></span>Logout</a>
                                                          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                            <?php echo e(csrf_field()); ?>

                                                          </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <?php if(Auth::user()->role_id == Config::get('constants.AGENT')): ?>
                                                <li>
                                                    <a href="<?php echo e(URL('admin/cart')); ?>">
                                                        <span id="cortCount" style="background: #a94242;border-radius: 50px;padding: 5px;color: #fff;">
                                                            <?php 
                                                            $uid=\Auth::user()->id; 
                                                            \Cart::session($uid);
                                                            $count=count(\Cart::getContent()); ?> <?php echo e($count); ?></span>
                                                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#<?php echo e(URL('admin/dashboard')); ?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod"><?php echo e(isset($page)?$page:''); ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>