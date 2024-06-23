<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="/">Bidding System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/runningBidIndex">Running Bid</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register">Register</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>

<div class="container">
  <h1 class="text-center">BIDDING SYSTEM</h1>
  <br>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Welcome user!</strong> enjoy your time.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
<br>
     <div class="row">
        <div class="col">
          <div class="card bg-primary text-light" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Total Bid</h5>
              <p class="card-text">00</p>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card bg-success text-light" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Total Running Bid</h5>
              <p class="card-text">00</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card bg-danger text-light" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Total Users</h5>
              <p class="card-text">00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>