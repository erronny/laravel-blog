 <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="<?php echo e(URL('admin/dashboard')); ?>">
                    <span style="font-size: 35px;">Tender</span>
                    
                </a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                    
                       <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('/')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Dashboard</span></a>
                        </li>
                         <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/contractor')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Contractor</span></a>
                        </li>
                        <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/tenders')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Tender</span></a>
                        </li>
                        <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/page_content_manager')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Pages</span></a>
                        </li>
                        <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/posts')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Posts</span></a>
                        </li>
                        <li class="active">
                            <a title="Landing Page" href="<?php echo e(URL('admin/view_contact')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">Contact Request</span></a>
                        </li>

                        <?php if(Auth::user()->role_id == 20): ?>
                            <li class="active">
                                <a title="Landing Page" href="<?php echo e(URL('admin/users/represntative')); ?>" aria-expanded="false"><i class="fa fa-bookmark icon-wrap sub-icon-mg" aria-hidden="true"></i> <span class="mini-click-non">User</span></a>
                            </li>
                        <?php endif; ?>
                    
                    </ul>
                </nav>
            </div>
        </nav>
    </div>