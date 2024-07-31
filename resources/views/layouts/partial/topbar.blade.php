<!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="dist/image/bid-icon.png" width="45px" alt="Logo" class="light-logo" />
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        @guest
                            <span class="brand-text font-weight-light">Guest Dashboard</span>
                        @elseif(Auth::user()->role == 'user')
                            <span class="brand-text font-weight-light">User Dashboard</span>
                        @elseif(Auth::user()->role == 'admin')
                            <span class="brand-text font-weight-light">Admin Dashboard</span>
                        @endguest 
                        </b>                        
                        <!--End Logo text -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index')}}">Home</a>
                                {{-- {{ route('index')}} --}}
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('runningBidIndex')}}">Running Bid</a>
                                {{-- {{ route('runningBidIndex')}} --}}
                            </li>
                        @elseif(Auth::user()->role == 'user')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('userDashboard')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('create')}}">Create Bid</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('runningBidUser')}}">Running Bid</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('myBid')}}">My Bid</a>
                            </li>
                        @elseif(Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('runningBidAdmin')}}">Running Bid</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('totalBid')}}">Total Bid</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('requestedBid')}}">Requested Bid</a>
                            </li> 
                        @endguest
              
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            {{-- {{ route('login') }} --}}
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            {{-- {{ route('register') }} --}}
                        </li>                       
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated mt-2" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile')}}"><i class="ti-user me-1 ms-1"></i>
                                    {{-- {{ route('profile') }} --}}
                                    My Profile</a>
                                <a class="dropdown-item" href="{{ route('update')}}"><i class="ti-wallet me-1 ms-1"></i>
                                    {{-- {{ route('update') }} --}}
                                Update Profile</a>
                                <a class="dropdown-item" href="{{ route('pass')}}"><i class=" fas fa-address-card"></i> 
                                    {{-- {{ route('pass') }} --}}
                                Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('signout') }}"><i
                                        class="fa fa-power-off me-1 ms-1"></i> 
                                        {{-- {{ route('signout') }} --}}
                                        Logout</a>
                                <div class="dropdown-divider"></div>
                            </ul>
                        </li>
                        @endguest
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->