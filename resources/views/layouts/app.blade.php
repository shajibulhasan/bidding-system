<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" sizes="16x16" href="dist/image/bid-icon.png">
  <title>Bidding System</title>

  <link rel="stylesheet" href="/resources/css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    .cards:hover {
    box-shadow: 0 4px 10px rgba(0,0,0,0.4), 0 4px 10px rgba(0,0,0,0.4);
  }
  </style>
</head>
<body style="background-image: url(images/bg2.jpg); width: 100%; height: 100vh; background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('index')}}">
            <b class="logo-icon ps-2">
                <img src="dist/image/bid-icon.png" width="45px" alt="Logo" class="light-logo" />
            @guest
                <span class="brand-text font-weight-light">Guest Dashboard</span>
            @elseif(Auth::user()->role == 'user')
                <span class="brand-text font-weight-light">User Dashboard</span>
            @elseif(Auth::user()->role == 'admin')
                <span class="brand-text font-weight-light">Admin Dashboard</span>
            @endguest 
            </b>                        
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('wonBid')}}">Won Bid</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('bidSold')}}">Sold Bid</a>
                  </li>
              @elseif(Auth::user()->role == 'admin')
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('admin')}}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('runningBidAdmin')}}">Running Bid</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('totalBid')}}">All Bid</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('requestedBid')}}">Requested Bid</a>
                  </li> 
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('pendingSold')}}">Pending Product</a>
                  </li> 
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('deliveredProduct')}}">Delivered Product</a>
                  </li> 
              @endguest
    
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              @guest
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#helpSupportMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Help & Support
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('contact') }}">Contact</a></li>
                    <li><a class="dropdown-item" href="{{ route('faqs') }}">FaQs</a></li>
                </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  {{-- {{ route('login') }} --}}
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  {{-- {{ route('register') }} --}}
              </li>                       
              @else
                @if(Auth::user()->role == 'user')                     
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#helpSupportMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Help & Support
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('contact') }}">Contact</a></li>
                            <li><a class="dropdown-item" href="{{ route('faqs') }}">FaQs</a></li>
                        </ul>
                    </li>
                @endif
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle mr-3" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b class="text-light"> {{ Auth::user()->name }}</b>
                        {{-- <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"> --}}
                     </a>
     
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile') }}">My Profile</a>
                        <a class="dropdown-item" href="{{ route('update') }}">Update Profile</a>
                        <a class="dropdown-item" href="{{ route('pass') }}">Change Password</a>
                        <div class="dropdown-divider"></div>
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
          </div>
        </div>
      </nav>
    
      <br>
      @yield('content')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>