<!doctype html>
<html lang="en">
  <head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="{{ route('admin')}}">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
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
            <li class="nav-item">
                <a class="nav-link" href="{{ route('signout')}}">Logout</a>
            </li>      
            </ul>
        </div>  
    </nav>
    <br>
    <div class="container">
  <h1 class="text-center">Admin Dashboard</h1>
  <br>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Welcome Shajibul Hasan Soaib!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
  <br>
     <div class="row">
        <div class="col">
          <div class="card bg-primary text-light" style="width: 18rem;">
            <div class="card-body text-center">
              <h5 class="card-title">Total Bid</h5>
              <h4 class="card-text">{{$totalBid}}</h4>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card bg-success text-light" style="width: 18rem;">
            <div class="card-body text-center">
              <h5 class="card-title">Total Running Bid</h5>
              <h4 class="card-text">{{$runningBid}}</h4>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card bg-danger text-light" style="width: 18rem;">
            <div class="card-body text-center">
              <h5 class="card-title">Total Requested Bid</h5>
              <h4 class="card-text">{{$requestBid}}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>