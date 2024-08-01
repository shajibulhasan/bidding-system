@extends('layouts.app')

@section('content')
<div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Login if you want to participate in the bid!!</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <div class="card">
    <h4 class="card-header text-center">Running Bid</h4>
    <table class="table table-striped">
      <thead>
        <th>ID</th>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Starting Price</th>
        <th>Bidding Price</th> 
        <th>Starting Date</th>
        <th>Ending Date</th>  
        <th>Product Image</th>                  
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
          <td><img src="{{asset('images/'.$bid->image)}}" alt="" width="80px" height="80px"></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </div>
</div>

@endsection