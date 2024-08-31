@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card" style="background-color: rgba(0,0,0, 0.1);">
    <h4 class="card-header text-light text-center">Delivered Product</h4>
    <div class="card-body card">
      <div class="row">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong class="text-dark">{{session()->get('success')}}!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
          @foreach($data as $mybid=>$bid)
          <div class="card cards m-2" style="width: 20rem;">                    
              <div class="card-body">
              <img src="{{asset('images/'.$bid->image)}}" alt="" width="230px" height="180px">
              <h5 class="card-title mt-2">Bid Information</h5>
              <p class="card-text">
                  Product Name: {{$bid->name}} <br>
                  Product Description: {{$bid->description}} <br>
                  Starting Price: {{$bid->starting_price}} <br>
                  Ending Price: {{$bid->ending_price}} <br>
                  Starting Date: {{$bid->starting_date}} <br>
                  Ending Date: {{$bid->ending_date}} <br>
                  <b>Delivery Status: {{$bid->delivery_status}}</b> <br>
                  <b>Buyer Name: {{$bid->buyer_name}}</b> <br>
                  <b>Buyer Email: {{$bid->buyer_gmail}}</b> <br>
                  <b>Buyer Phone: {{$bid->buyer_phone}}</b> <br>
              </p>
              </div>
          </div>
          @endforeach
      </div>
    </div>
  </div>
  </div>
</div>

@endsection