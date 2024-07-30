@extends('layouts.app')

@section('content')
<div class="container col-md-3">   
    <div class="card">            
            <h3 class="card-header">My Profile <a class="btn btn-primary text-light" style="float: right;" href="{{ route('update') }}">Update Profile</a></h3>
            <div class="card-body">
                <div class="col-12">
                    <label for="">Name: {{ Auth::user()->name }}</label>
                </div>
                <div class="col-12">
                    <label for="">Email: {{ Auth::user()->email }}</label>
                </div>
                <div class="col-12">
                    <label for="">Phone Number: {{ Auth::user()->phone_number }}</label>
                </div>
                <div class="col-12">
                    <label for="">Role: {{ Auth::user()->role }}</label>
                </div>
            </div>
        </div>
    </div>   
@endsection