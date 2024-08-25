@extends('layouts.app')
@section('content')
<div class="signup-form">    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card" style="background-color: rgba(0,0,0, 0.1);">
                    <h3 class="card-header text-light text-center">Change Password</h3>
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
                        <form action="{{ route('change.password') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="col-12">
                                <label for="currentpassword"><b>Current Password:</b></label>
                                <input type="password" placeholder="Current Password" class="form-control @error('currentpassword') is-invalid @enderror" value="" id="currentpassword" name="currentpassword">
                                @error('currentpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="newpassword"><b>New Password:</b></label>
                                <input type="password" placeholder="New Password" class="form-control @error('newpassword') is-invalid @enderror" value="" id="newpassword" name="newpassword">
                                @error('newpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="col-12 d-grid mx-auto">
                                <button type="submit" class="btn btn-primary" name="btnCreate">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </div> 
</div>     
@endsection