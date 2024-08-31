@extends('layouts.app')

@section('content')
<div class="container" >
  <div class="card" style="background-color: rgba(0,0,0, 0.1);">
    <h1 class="text-center text-light card-header">Guest Dashboard</h1>
  <div class="card-body card">
    <br>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Welcome user!</strong> enjoy your time.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<br>
     <div class="row">
        <div class="col mt-2">
          <div class="card cards bg-primary text-light" style="width: 18rem;">
            <div class="card-body text-center">
              <h5>Total Bid</h5>
              <h4 class="card-text">{{$totalBid}}</h4>
            </div>
          </div>
        </div>
  
        <div class="col mt-2">
          <div class="card cards bg-success text-light" style="width: 18rem;">
            <div class="card-body text-center">
              <h5>Total Running Bid</h5>
              <h4 class="card-text">{{$runningBid}}</h4>
            </div>
          </div>
        </div>
        <div class="col mt-2">
          <div class="card cards bg-danger text-light" style="width: 18rem;">
            <div class="card-body text-center">
              <h5>Total Users</h5>
              <h4 class="card-text">{{$totalUser}}</h4>
            </div>
          </div>
        </div>

      </div> <br>
    </div>
  </div>
  </div>
</div>   

@endsection