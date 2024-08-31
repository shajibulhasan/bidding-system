@extends('layouts.app')

@section('content')
<div class="container col-md-3">   
    <div class="card" style="background-color: rgba(0,0,0, 0.1);">            
            <h3 class="card-header text-light text-light">My Profile <a class="btn btn-primary text-light" style="float: right;" href="{{ route('update') }}">Update Profile</a></h3>
            @if(session()->has('success'))
            <strong class="text-success">{{session()->get('success')}}</strong>
            <br>
            @endif
            <div class="card-body card">
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