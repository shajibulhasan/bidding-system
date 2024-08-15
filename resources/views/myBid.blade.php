@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card">
            <h4 class="card-header text-center">My Bid</h4>
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong class="text-dark">{{session()->get('success')}}!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong class="text-dark">{{session()->get('error')}}!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card-body">
                <div class="row">
                    @foreach($data as $mybid=>$bid)
                    <div class="card m-2" style="width: 18rem;">                    
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
                            Status: {{$bid->status}} <br>
                            @if ($bid->status == 'Not Approve')                            
                                {{-- <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('bidDelete',$bid->id)}}">Delete</a> --}}
                                <a class="btn btn-success" href="{{route('bidUpdate',$bid->id)}}">Update</a>
                                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal">
                                    Delete
                                </a>                                  
                                  <!-- The Modal -->
                                  <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                  
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                          <h4 class="modal-title">Delete Bid</h4>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Are you sure?
                                        </div>
                                  
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                                          <a class="btn btn-danger" href="{{route('bidDelete',$bid->id)}}">Delete</a>
                                        </div>                                  
                                      </div>
                                    </div>
                                  </div>
                            @endif
                        </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- <table class="table table-striped">
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
            </table> --}}
        </div>
    </div>   
@endsection