@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
  <div class="card-header">
    <h1 class="text-center">Admin Dashboard</h1>
  </div>
    <br>
   <div class="card-body">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Welcome {{ Auth::user()->name }}!</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <br>
       <div class="row">
          <div class="col mt-2">
            <div class="card bg-primary text-light" style="width: 18rem;">
              <div class="card-body text-center">
                <h5>Total Bid</h5>
                <h4 class="card-text">{{$totalBid}}</h4>
              </div>
            </div>
          </div>
    
          <div class="col mt-2">
            <div class="card bg-success text-light" style="width: 18rem;">
              <div class="card-body text-center">
                <h5>Total Running Bid</h5>
                <h4 class="card-text">{{$runningBid}}</h4>
              </div>
            </div>
          </div>
    
          <div class="col mt-2">
            <div class="card bg-danger text-light" style="width: 18rem;">
              <div class="card-body text-center">
                <h5>Total Requested Bid</h5>
                <h4 class="card-text">{{$requestBid}}</h4>
              </div>
            </div>
          </div>
  
          <div class="col mt-2">
            <div class="card bg-info text-light" style="width: 18rem;">
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