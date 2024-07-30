@extends('layouts.app')

@section('content')
<div class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h4 class="card-header">Update Profile <a class="btn btn-primary text-light" style="float: right;" href="{{ route('profile') }}">My Profile</a></h4>
                    <div class="card-body">

                        <form action="{{ route('update.profile') }}" method="POST">
                            @csrf
                            <div class="col-12 mb-2">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ Auth::user()->name }}">
                                @error('name')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="col-12 mb-2">
                                <label for="phone_number" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone_number"
                                    value="{{ Auth::user()->phone_number }}">
                                @error('phone_number')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ Auth::user()->email }}">
                                @error('email')<small class="text-danger">{{$message}}</small>@enderror
                            </div>
                            <br>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Update Profile</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection