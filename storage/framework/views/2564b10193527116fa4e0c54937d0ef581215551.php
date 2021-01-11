<header id= "header" data-spy="affix" data-offset-top="60" data-offset-bottom="60">
    <div class="container">
      <div class="row">
        <div class="col-md-8  col-sm-12 col-xs-12 col-sm-12">
          <nav class="navbar"> 
            
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
        
              <button type="button" onclick="s_open()" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

              <a class="navbar-brand" href="#"><img class="logo-dark hidden-xs" height="70" width="100" src="<?php echo e(asset('assets/dsolution/img/1111.jpeg')); ?>" alt="" /> <img class="logo-dark hidden-lg hidden-md hidden-sm" height="40" width="70" src="<?php echo e(asset('assets/dsolution/img/1111.jpeg')); ?>" alt="" /></a> </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="main-menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="<?php echo e(URL('/')); ?>">Home</a></li>
                <li><a href="<?php echo e(URL('page/about')); ?>">About</a></li>
                <li><a href="<?php echo e(URL('page/service')); ?>">Service</a></li>
                <li><a href="<?php echo e(URL('post')); ?>">Blog</a></li>
                <li><a href="<?php echo e(URL('contact')); ?>">Contact</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse --> 
          </nav>
        </div>
        <div class="col-md-4  col-sm-12 col-xs-12 col-sm-12 hidden-xs">
          <ul class="right-contact">
            <li><i class="fa fa-phone" aria-hidden="true"></i> +91 - 89821 27757</li>
            <li><a href="<?php echo e(URL('/contact')); ?>" class=""><button class="btn btn-secondary">Get Free Quote</button></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.container --> 
  </header>