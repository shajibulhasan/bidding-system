@extends('layouts.app')

@section('content')
<main class="signup-form">    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-header text-center">Update Bid</h3>
                    <div class="card-body">
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
                        <form action="{{ route('updateBid',$bid->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="col-12">
                                <label for="name"><b>Product Name:</b></label>
                                <input type="text" placeholder="Product Name" class="form-control" value="{{ $bid->name }}" id="name" name="name">
                            </div>
                            <div class="col-12">
                                <label for="description"><b>Product Description:</b></label>
                                <input type="text" placeholder="Product Description" class="form-control" value="{{ $bid->description }}" id="description" name="description">
                            </div>
                            <div class="col-12">
                                <label for="price"><b>Biding Price:</b></label>
                                <input type="number" placeholder="Biding Price" class="form-control" value="{{ $bid->starting_price }}" id="price" name="starting_price">
                            </div>
                            <div class="col-12">
                                <label for="start"><b>Starting Bid:</b></label>
                                <input type="date" placeholder="Starting Bid" class="form-control" value="{{ $bid->starting_date }}" id="start" name="starting_date">
                            </div>
                            <div class="col-12">
                                <label for="end"><b>Ending Bid:</b></label>
                                <input type="date" placeholder="Ending Bid" class="form-control" value="{{ $bid->ending_date }}" id="end" name="ending_date">
                            </div>
                            <div class="col-12">
                                <label for="image"><b>Product Image</b></label>
                                <input type="file" name="image" id="image" class="form-control">
                            <br>
                            <div class="col-12 d-grid mx-auto">
                                <button type="submit" class="btn btn-primary" name="btnCreate">Request Bid</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </div> 
</main>     

@endsection