@extends('layouts.app')

@section('content')
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

@endsection