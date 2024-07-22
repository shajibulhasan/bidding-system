@extends('layouts.app')

@section('content')
<main class="signup-form">    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-header text-center">Create Bid</h3>
                    <div class="card-body">
                        <form action="{{ route('createbid.post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="col-12">
                                <label for="name"><b>Product Name:</b></label>
                                <input type="text" placeholder="Product Name" class="form-control" value="" id="name" name="name">
                                @if($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="description"><b>Product Description:</b></label>
                                <input type="text" placeholder="Product Description" class="form-control" value="" id="description" name="description">
                                @if($errors->has('description'))
                                <span class="text-danger">{{$errors->first('description')}}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="price"><b>Biding Price:</b></label>
                                <input type="number" placeholder="Biding Price" class="form-control" value="" id="price" name="starting_price">
                                @if($errors->has('starting_price'))
                                <span class="text-danger">{{$errors->first('starting_price')}}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="start"><b>Starting Bid:</b></label>
                                <input type="date" placeholder="Starting Bid" class="form-control" value="" id="start" name="starting_date">
                                @if($errors->has('starting_date'))
                                <span class="text-danger">{{$errors->first('starting_date')}}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="end"><b>Ending Bid:</b></label>
                                <input type="date" placeholder="Ending Bid" class="form-control" value="" id="end" name="ending_date">
                                @if($errors->has('ending_date'))
                                <span class="text-danger">{{$errors->first('ending_date')}}</span>
                                @endif
                            </div>
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