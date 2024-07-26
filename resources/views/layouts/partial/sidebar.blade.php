  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('index')}}" class="brand-link text-decoration-none text-monospace">
      <img src="dist/img/bid-icon.png" alt="Bid Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      @guest
          <span class="brand-text font-weight-light">Guest Dashboard</span>
      @elseif(Auth::user()->role == 'user')
          <span class="brand-text font-weight-light">User Dashboard</span>
      @elseif(Auth::user()->role == 'admin')
          <span class="brand-text font-weight-light">Admin Dashboard</span>
      @endguest 
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item menu-open"> --}}
            @guest
                <li class="nav-item menu-open">
                    <a class="nav-link" href="{{ route('index')}}">
                      <i class="nav-icon fas fa-th-large text-info"></i>
                      <p>Home</p>
                    </a>
                    {{--  --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('runningBidIndex')}}">
                      <i class="nav-icon far fa-circle text-danger"></i>
                      <p>Running Bid</p>
                    </a>
                    {{--  --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login')}}">
                      <i class="nav-icon fas fa-edit text-primary"></i>
                      <p>Login</p>
                    </a>
                    {{--  --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register')}}">
                      <i class="nav-icon far fa-plus-square text-success"></i>
                      <p>Register</p>
                    </a>
                    {{--  --}}
                </li>
            @elseif(Auth::user()->role == 'user')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('userDashboard')}}">
                      <i class="nav-icon fas fa-th-large text-info"></i>
                      <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create')}}">
                      <i class="nav-icon far fa-edit text-primary"></i>
                      <p>Create Bid</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('runningBidUser')}}">
                      <i class="nav-icon far fa-circle text-danger"></i>
                      <p>Running Bid</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('myBid')}}">
                      <i class="nav-icon fas fa-table text-warning"></i>
                      <p>My Bid</p>
                    </a>
                </li>
            @elseif(Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin')}}">
                      <i class="nav-icon fas fa-th-large text-info"></i>
                      <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('runningBidAdmin')}}">
                      <i class="nav-icon far fa-circle text-danger"></i>
                      <p>Running Bid</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('totalBid')}}">
                      <i class="nav-icon fas fa-table text-success"></i>
                      <p>Total Bid</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('requestedBid')}}">
                      <i class="nav-icon far fa-file text-warning"></i>
                      <p>Requested Bid</p>
                    </a>
                </li> 
            @endguest
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>