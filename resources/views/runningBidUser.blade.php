<!doctype html>
<html lang="en">
  <head>
    <title>Running Bid</title>
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

    <div class="container">
        <div class="card">
            <h4 class="card-header text-center">Running Bid</h4>
            <table class="table table-striped">
                <thead>
                    <th>Bid ID</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Starting Price</th>
                    <th>Ending Price</th> 
                    <th>Starting Date</th>
                    <th>Ending Date</th>       
                    <th>Action</th>                    
                </thead>
                    <tbody>
                        @foreach($data as $mybid=>$bid)
                        <tr>
                            <td>{{$bid->id}}</td>
                            <td>{{$bid->name}}</td>
                            <td>{{$bid->description}}</td>
                            <td>{{$bid->starting_price}}</td>
                            <td>{{$bid->ending_price}}</td>
                            <td>{{$bid->starting_date}}</td>
                            <td>{{$bid->ending_date}}</td>
                            <th>                            
                                <form action="{{ route('biddingprice.post', $bid->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <input type="text" placeholder="Biding Price" class="form-control" value="" id="" name="price">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="btnCreate">Participate</button>
                                    </div>
                                </form>
                            </th>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>      


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>