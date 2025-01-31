@extends('layouts.app')

@section('content')
<div class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="background-color: rgba(0,0,0, 0.1);">
                    <h4 class="card-header text-light">Update Profile <a class="btn btn-primary text-light" style="float: right;" href="{{ route('profile') }}">My Profile</a></h4>
                    <div class="card-body card">
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
                                <button type="submit" class="btn btn-success btn-block"><b>Update Profile</b></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection