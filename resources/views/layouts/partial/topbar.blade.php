  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/bid-icon.png" alt="Bid Logo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('index')}}">Home</a>
              {{--  --}}
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('runningBidIndex')}}">Running Bid</a>
              {{--  --}}
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

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      @guest
       <li class="nav-item">
           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
           {{--  --}}
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
           {{--  --}}
       </li>
       @else
           <li class="nav-item dropdown">
               <a id="navbarDropdown" class="nav-link dropdown-toggle mr-3" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{ Auth::user()->name }}
                </a>

               <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="{{ route('change.password.view') }}">Change Password</a>
                   <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       {{ __('Logout') }}
                    </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                   </form>
               </div>
           </li>
       @endguest
    </ul>
  </nav>
  <!-- /.navbar -->