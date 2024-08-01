<!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
          <!-- Sidebar scroll-->
          <div class="scroll-sidebar">
              <!-- Sidebar navigation-->
              <nav class="sidebar-nav">
                  <ul id="sidebarnav" class="pt-4">
                    @guest
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="{{ route('index')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                  class="hide-menu">Home</span></a></li>
                                  {{-- {{ route('index')}} --}}
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="{{ route('runningBidIndex')}}" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                                  class="hide-menu">Running Bid</span></a></li>
                                  {{-- {{ route('runningBidIndex')}} --}}
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="{{ route('login')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                                  class="hide-menu">Login</span></a></li>
                                  {{-- {{ route('login')}} --}}
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="{{ route('register')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                                  class="hide-menu">Register</span></a></li>
                                  {{-- {{ route('register')}} --}}
                      @elseif(Auth::user()->role == 'user')
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="{{ route('userDashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                  class="hide-menu">Home</span></a></li>
                                  {{-- {{ route('userDashboard')}} --}}
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="{{ route('create')}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                                  class="hide-menu">Create Bid</span></a></li>
                                  {{-- {{ route('create')}} --}}
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="{{ route('runningBidUser')}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                                  class="hide-menu">Running Bid</span></a></li>
                                  {{-- {{ route('runningBidUser')}} --}}
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="{{ route('myBid')}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                                  class="hide-menu">My Bid</span></a></li>
                                  {{-- {{ route('myBid')}} --}}
                      <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                              href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                  class="hide-menu">Profile </span></a>
                          <ul aria-expanded="false" class="collapse  first-level">
                              <li class="sidebar-item"><a href="{{ route('profile')}}" class="sidebar-link"><i
                                          class="mdi mdi-note-outline"></i><span class="hide-menu"> My Profile
                                      </span></a></li>
                                      {{-- {{ route('profile')}} --}}
                              <li class="sidebar-item"><a href="{{ route('update')}}" class="sidebar-link"><i
                                          class="mdi mdi-note-plus"></i><span class="hide-menu"> Update Profile
                                      </span></a></li>
                                      {{-- {{ route('update')}} --}}
                              <li class="sidebar-item"><a href="{{ route('pass')}}" class="sidebar-link"><i
                                          class="mdi mdi-note-plus"></i><span class="hide-menu"> Change Password
                                      </span></a></li>
                                      {{-- {{ route('pass')}} --}}
                          </ul>
                      </li>
                      @elseif(Auth::user()->role == 'admin')
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="{{ route('admin')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                  class="hide-menu">Home</span></a></li>
                                  {{-- {{ route('admin')}} --}}
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="{{ route('runningBidAdmin')}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                                  class="hide-menu">Running Bid</span></a></li>
                                  {{-- {{ route('runningBidAdmin')}} --}}
                      <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                              href="{{ route('requestedBid')}}" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                                  class="hide-menu">Requested Bid</span></a></li>
                                  {{-- {{ route('requestedBid')}} --}}
                     <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                              href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                  class="hide-menu">Profile </span></a>
                          <ul aria-expanded="false" class="collapse  first-level">
                              <li class="sidebar-item"><a href="{{ route('profile')}}" class="sidebar-link"><i
                                          class="mdi mdi-note-outline"></i><span class="hide-menu"> My Profile
                                      </span></a></li>
                                      {{-- {{ route('profile')}} --}}
                              <li class="sidebar-item"><a href="{{ route('update')}}" class="sidebar-link"><i
                                          class="mdi mdi-note-plus"></i><span class="hide-menu"> Update Profile
                                      </span></a></li>
                                      {{-- {{ route('update')}} --}}
                              <li class="sidebar-item"><a href="{{ route('pass')}}" class="sidebar-link"><i
                                          class="mdi mdi-note-plus"></i><span class="hide-menu"> Change Password
                                      </span></a></li>
                                      {{-- {{ route('pass')}} --}}
                          </ul>
                      </li>
                      @endguest
                  </ul>
              </nav>
              <!-- End Sidebar navigation -->
          </div>
          <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->