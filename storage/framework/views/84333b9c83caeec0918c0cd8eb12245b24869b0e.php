<!-- NAVBAR
    ================================================== -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="<?php echo e(URL('/')); ?>">
          <img src="<?php echo e(asset ('assets/logo/dic.png')); ?>" class="navbar-brand-img" alt="Digital In-Corporation Logo">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>

          <!-- Navigation -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarLandings" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Digital Signature
              </a>
              <div class="dropdown-menu dropdown-menu-xl p-0" aria-labelledby="navbarLandings">
                <div class="row no-gutters">
                  <div class="col-12 col-lg-4">
                    <div class="dropdown-img-left" style="background-image: url(assets/img/photos/photo-3.jpg);">

                      <!-- Heading -->
                      <h4 class="font-weight-bold text-white mb-0">
                        Want to see an overview?
                      </h4>

                      <!-- Text -->
                      <p class="font-size-sm text-white">
                        See all the pages at once.
                      </p>

                      <!-- Button -->
                      <a href="<?php echo e(URL('/')); ?>" class="btn btn-sm btn-white shadow-dark fonFt-size-sm">
                        View all pages
                      </a>

                    </div>
                  </div>
                  <div class="col-12 col-lg-8">
                    <div class="dropdown-body">
                      <div class="row no-gutters">
                        <div class="col-6">

                          <!-- Heading -->
                          <h6 class="dropdown-header">
                            CLASS 2
                          </h6>

                          <!-- List -->
                          <a class="dropdown-item" href="<?php echo e(URL('/class2-invidual-signing')); ?>">
                            Individual Signing
                          </a>
                          <a class="dropdown-item" href="<?php echo e(URL('/class2-invidual-combo')); ?>">
                            Individual Combo
                          </a>
                          <a class="dropdown-item mb-5" href="<?php echo e(URL('/class2-organization-combo')); ?>">
                            Organization Combo
                          </a>
                          <a class="dropdown-item" href="<?php echo e(URL('/class2-organization-signing')); ?>">
                            Organization Signing
                          </a>
                          <a class="dropdown-item" href="<?php echo e(URL('/class2-document-signer')); ?>">
                            Document Signer
                          </a>
                          <a class="dropdown-item" href="<?php echo e(URL('/class2-foreign-signing')); ?>">
                            Foreign Signing
                          </a>

                        </div>
                        <div class="col-6">

                          <!-- Heading -->
                          <h6 class="dropdown-header">
                            CLASS 3
                          </h6>

                          <!-- List -->
                          <a class="dropdown-item" href="<?php echo e(URL('/class3-invidual-combo')); ?>">
                            Individual Signing
                          </a>
                          <a class="dropdown-item" href="<?php echo e(URL('/class3-invidual-combo')); ?>">
                            Individual Combo
                          </a>
                          <a class="dropdown-item mb-5" href="<?php echo e(URL('/class3-organization-combo')); ?>">
                            Organization Combo
                          </a>
                          <a class="dropdown-item" href="<?php echo e(URL('/class3-organization-signing')); ?>">
                            Organization Signing
                          </a>
                          <a class="dropdown-item" href="<?php echo e(URL('/class3-document-signer')); ?>">
                            Document Signer
                          </a>
                          <a class="dropdown-item" href="<?php echo e(URL('/class3-foreign-signing')); ?>">
                            Foreign Signing
                          </a>

                        </div>
                      </div> <!-- / .row -->
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarPages" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarPages">
                <div class="row no-gutters">
                  <div class="col-6">
                    <div class="row no-gutters">
                      <div class="col-12 col-lg-6">

                        <!-- Heading -->
                        <h6 class="dropdown-header">
                          Type1
                        </h6>

                        <!-- List -->
                        <a class="dropdown-item" href="<?php echo e(URL('/service')); ?>">
                          Service
                        </a>
                        <a class="dropdown-item mb-5" href="<?php echo e(URL('/service2')); ?>">
                          Service2
                        </a>

                        <!-- Heading -->
                        <h6 class="dropdown-header">
                          Type2
                        </h6>

                        <!-- List -->
                        <a class="dropdown-item" href="<?php echo e(URL('/service3')); ?>">
                          Service3
                        </a>
                        <a class="dropdown-item" href="<?php echo e(URL('/service4')); ?>">
                          Service4
                        </a>
                        <a class="dropdown-item mb-5 mb-lg-0" href="<?php echo e(URL('/service5')); ?>">
                          Service5
                        </a>

                      </div>
                      <div class="col-12 col-lg-6">

                        <!-- Heading -->
                        <h6 class="dropdown-header">
                          Type3
                        </h6>

                        <!-- List -->
                        <a class="dropdown-item" href="<?php echo e(URL('/service6')); ?>">
                          Service6
                        </a>
                        <a class="dropdown-item mb-5" href="<?php echo e(URL('/service7')); ?>">
                          Service6
                        </a>

                        <!-- Heading -->
                        <h6 class="dropdown-header">
                          Type4
                        </h6>

                        <!-- List -->
                        <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                          Service1
                        </a>
                        <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                          Cover
                        </a>

                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="row no-gutters">
                      
                      <div class="col-12 col-lg-8">

                        <!-- Heading -->
                        <h6 class="dropdown-header">
                          Digital Signature Certificate
                        </h6>

                        <!-- List -->
                        <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                          E-Tenders
                        </a>
                        <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                          DGFT 
                        </a>
                        <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                          Foreign Trade
                        </a>
                        <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                          GST Registration
                        </a>
                        <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                          ICEGATE
                        </a>
                        <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                          MCA21 E-Filing
                        </a>
                        <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                          IRCTC/E-Ticketing/Railway
                        </a>
                        <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                          Income Tax
                        </a>
                        <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                        Dsc Pki Component Solutions
                        </a>
                        <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                        Fips Usb Cryptographic E-Tokens
                        </a>

                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- / .row -->
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarAccount" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Custom
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarAccount">
                <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="<?php echo e(URL('/')); ?>">
                    Account
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                      Sign In
                    </a>
                    <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                      Sign Up
                    </a>
                    
                  </div>
                </li>
                <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="<?php echo e(URL('/')); ?>">
                    Contact
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                      For Sales
                    </a>
                    <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                      For Supports
                    </a>
                    
                  </div>
                </li>
                <!-- <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="<?php echo e(URL('/')); ?>">
                    Sign Up
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                      Basic
                    </a>
                    <a class="dropdown-item" data-toggle="modal" href="<?php echo e(URL('/')); ?>">
                      Modal Horizontal
                    </a>
                    <a class="dropdown-item" data-toggle="modal" href="<?php echo e(URL('/')); ?>">
                      Modal Vertical
                    </a>
                  </div>
                </li> -->
                <!-- <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="<?php echo e(URL('/')); ?>">
                    Password Reset
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="password-reset.html">
                      Basic
                    </a>
                  </div>
                </li> -->
                <!-- <li class="dropdown-item dropright">
                  <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="<?php echo e(URL('/')); ?>">
                    Error
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="<?php echo e(URL('/')); ?>">
                      Basic
                    </a>
                  </div>
                </li>
 -->              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDocumentation" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Agency
              </a>
              <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDocumentation">
                <div class="list-group list-group-flush">
                  <a class="list-group-item" href="<?php echo e(URL('/post')); ?>">

                    <!-- Icon -->
                    <div class="icon icon-sm text-primary">
                      <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M8 3v.5A1.5 1.5 0 009.5 5h5A1.5 1.5 0 0016 3.5V3h2a2 2 0 012 2v16a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h2z" fill="#335EEA" opacity=".3"/><path d="M11 2a1 1 0 012 0h1.5a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-5a.5.5 0 01-.5-.5v-1a.5.5 0 01.5-.5H11z" fill="#335EEA"/><rect fill="#335EEA" opacity=".3" x="7" y="10" width="5" height="2" rx="1"/><rect fill="#335EEA" opacity=".3" x="7" y="14" width="9" height="2" rx="1"/></g></svg>
                    </div>

                    <!-- Content -->
                    <div class="ml-4">

                      <!-- Heading -->
                      <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                        Posts
                      </h6>

                      <!-- Text -->
                      <p class="font-size-sm text-gray-700 mb-0">
                        Tutorial and Basic Use
                      </p>

                    </div>

                  </a>
                  <!-- <a class="list-group-item" href="<?php echo e(URL('/')); ?>"> -->

                    <!-- Icon -->
                    <!-- <div class="icon icon-sm text-primary">
                      <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><rect fill="#335EEA" x="4" y="4" width="7" height="7" rx="1.5"/><path d="M5.5 13h4a1.5 1.5 0 011.5 1.5v4A1.5 1.5 0 019.5 20h-4A1.5 1.5 0 014 18.5v-4A1.5 1.5 0 015.5 13zm9-9h4A1.5 1.5 0 0120 5.5v4a1.5 1.5 0 01-1.5 1.5h-4A1.5 1.5 0 0113 9.5v-4A1.5 1.5 0 0114.5 4zm0 9h4a1.5 1.5 0 011.5 1.5v4a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-4a1.5 1.5 0 011.5-1.5z" fill="#335EEA" opacity=".3"/></g></svg>
                    </div> -->

                    <!-- Content -->
                    <!-- <div class="ml-4"> -->

                      <!-- Heading -->
                      <!-- <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                        Components
                      </h6> -->

                      <!-- Text -->
                      <!-- <p class="font-size-sm text-gray-700 mb-0">
                        Full list of components
                      </p>

                    </div>

                  </a>
                  <a class="list-group-item" href="<?php echo e(URL('/')); ?>"> -->

                    <!-- Icon -->
                    <!-- <div class="icon icon-sm text-primary">
                      <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M5.857 2h7.88a1.5 1.5 0 01.968.355l4.764 4.029A1.5 1.5 0 0120 7.529v12.554c0 1.79-.02 1.917-1.857 1.917H5.857C4.02 22 4 21.874 4 20.083V3.917C4 2.127 4.02 2 5.857 2z" fill="#335EEA" opacity=".3"/><rect fill="#335EEA" x="6" y="11" width="9" height="2" rx="1"/><rect fill="#335EEA" x="6" y="15" width="5" height="2" rx="1"/></g></svg> -->
                    <!-- </div> -->

                    <!-- Content -->
                    <!-- <div class="ml-4"> -->

                       <!-- Heading -->
                      <!-- <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                        Changelog
                      </h6> -->

                      <!-- Text -->
                      <!-- <p class="font-size-sm text-gray-700 mb-0">
                        Keep track of changes
                      </p>

                    </div> -->

                    <!-- Badge -->
                    <!-- <span class="badge badge-pill badge-primary-soft ml-auto">
                      1.2.1
                    </span>

                  </a> -->
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="<?php echo e(URL ('/contact')); ?>"  >
                Contact Us
              </a>
              
            </li>

          </ul>

          <!-- Button -->
          <a class="navbar-btn btn btn-sm btn-primary lift ml-auto" href="<?php echo e(URL('/')); ?>" target="_blank">
            Buy now
          </a>

        </div>

      </div>
    </nav>
















