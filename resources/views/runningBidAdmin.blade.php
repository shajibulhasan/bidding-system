@extends('layouts.app')

@section('content')
<div class="container">
     <div class="card" style="background-color: rgba(0,0,0, 0.1);">
        <h4 class="card-header text-light text-center">Running Bid</h4>
        <div class="card-body card">
            <div class="row">
                @foreach($data as $mybid=>$bid)
                <div class="card cards m-2" style="width: 18rem;">                    
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
                    </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
            {{-- <table class="table table-striped">
                <thead>
                    <th>Bid ID</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Starting Price</th>
                    <th>Bidding Price</th>
                    <th>Starting Date</th>
                    <th>Bidding Date</th> 
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
            </table> --}}
     </div>
    </div>    

@endsection