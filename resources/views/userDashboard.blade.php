@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center">User Dashboard</h1>
  <br>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Welcome {{ Auth::user()->name }}!</strong>
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
              <h5 class="card-title">Total My Bid</h5>
              <h4 class="card-text">{{$myBid}}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection