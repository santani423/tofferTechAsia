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
                              <span class="d-none d-md-inline-block ml-1">
                                  David M. Bailey <i class="mdi mdi-chevron-down"></i>
                              </span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">

                              <div class="dropdown-divider"></div>

                              <!-- Logout Form -->
                              <form id="logout-form" action="{{ route('cms.logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                              <a class="dropdown-item" href="#"
                                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                  <i class="dripicons-exit text-muted"></i> Logout
                              </a>
                          </div>
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
