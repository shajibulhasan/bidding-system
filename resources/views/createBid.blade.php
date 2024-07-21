<!doctype html>
<html lang="en">
  <head>
    <title>Create Bid</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="/userDashboard">User Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
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
                  <a class="nav-link" href=" {{ route('signout')}} ">Logout</a>
              </li>    
            </ul>
        </div>  
    </nav>
    <br>
<main class="signup-form">    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="card-header text-center">Create Bid</h3>
                    <div class="card-body">
                        <form action="{{ route('createbid.post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="col-12">
                                <label for="name"><b>Product Name:</b></label>
                                <input type="text" placeholder="Product Name" class="form-control" value="" id="name" name="name">
                                @if($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="description"><b>Product Description:</b></label>
                                <input type="text" placeholder="Product Description" class="form-control" value="" id="description" name="description">
                                @if($errors->has('description'))
                                <span class="text-danger">{{$errors->first('description')}}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="price"><b>Biding Price:</b></label>
                                <input type="number" placeholder="Biding Price" class="form-control" value="" id="price" name="starting_price">
                                @if($errors->has('starting_price'))
                                <span class="text-danger">{{$errors->first('starting_price')}}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="start"><b>Starting Bid:</b></label>
                                <input type="date" placeholder="Starting Bid" class="form-control" value="" id="start" name="starting_date">
                                @if($errors->has('starting_date'))
                                <span class="text-danger">{{$errors->first('starting_date')}}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="end"><b>Ending Bid:</b></label>
                                <input type="date" placeholder="Ending Bid" class="form-control" value="" id="end" name="ending_date">
                                @if($errors->has('ending_date'))
                                <span class="text-danger">{{$errors->first('ending_date')}}</span>
                                @endif
                            </div>
                            <br>
                            <div class="col-12 d-grid mx-auto">
                                <button type="submit" class="btn btn-primary" name="btnCreate">Request Bid</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </div> 
</main>     


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>