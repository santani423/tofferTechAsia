  <header id="topnav">
      <div class="topbar-main d-print-none">
          <div class="container-fluid">

              <!-- Logo-->
              <div>

                  <a href="index.html" class="logo">
                      <img src="{{ asset('assets/images/logo/faficon.png') }}" alt="" height="26">
                  </a>

              </div>
              <!-- End Logo-->

              <div class="menu-extras topbar-custom navbar p-0">





                  <ul class="list-inline ml-auto mb-0">

                      <!-- notification-->



                      <!-- User-->
                      <li class="list-inline-item dropdown notification-list nav-user">
                          <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown"
                              href="#" role="button" aria-haspopup="false" aria-expanded="false">
                              <img src="{{ asset('template/assets/images/users/avatar-6.jpg') }}" alt="user"
                                  class="rounded-circle">
                              <span class="d-none d-md-inline-block ml-1">David M. Bailey <i
                                      class="mdi mdi-chevron-down"></i> </span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                              <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i>
                                  Profile</a>
                              <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My
                                  Wallet</a>
                              <a class="dropdown-item" href="#"><span
                                      class="badge badge-success float-right m-t-5">5</span><i
                                      class="dripicons-gear text-muted"></i> Settings</a>
                              <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock
                                  screen</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i>
                                  Logout</a>
                          </div>
                      </li>
                      <li class="menu-item list-inline-item">
                          <!-- Mobile menu toggle-->
                          <a class="navbar-toggle nav-link">
                              <div class="lines">
                                  <span></span>
                                  <span></span>
                                  <span></span>
                              </div>
                          </a>
                          <!-- End mobile menu toggle-->
                      </li>

                  </ul>

              </div>
              <!-- end menu-extras -->

              <div class="clearfix"></div>

          </div> <!-- end container -->
      </div>
      <!-- end topbar-main -->

      <!-- MENU Start -->
      @include('cms.layout.nav')
  </header>
