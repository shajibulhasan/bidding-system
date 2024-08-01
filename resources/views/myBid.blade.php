@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card">
            <h4 class="card-header text-center">My Bid</h4>
            @if(session()->has('success'))
            <strong class="text-success">{{session()->get('success')}}</strong>
            <br>
            @endif
            <table class="table table-striped">
                <thead class="dropdown-divider">
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
                        @if ($bid->status == 'Not Approve')
                            <th>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('bidDelete',$bid->id)}}">Delete</a>
                                <a class="btn btn-success" href="{{route('bidUpdate',$bid->id)}}">Update</a>
                            </th>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>   
@endsection