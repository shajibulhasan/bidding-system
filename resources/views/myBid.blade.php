@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card">
            <h4 class="card-header text-center">My Bid</h4>
            <table class="table table-striped">
                <thead>
                    <th>Bid ID</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Starting Price</th>
                    <th>Ending Price</th> 
                    <th>Starting Date</th>
                    <th>Ending Date</th> 
                    <th>Product Image</th>                 
                    <th>Status</th>                   
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
                        <td>{{$bid->status}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>   
@endsection