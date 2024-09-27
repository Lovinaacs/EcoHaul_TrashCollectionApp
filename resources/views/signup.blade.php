@extends('layout')

@section('title', 'Sign Up')

@section('content')
@if (@session('success'))
    <div class="alert alert-success" role="alert">
        <strong>Sign Up Successful</strong>
    </div>
@endif


@guest
    <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Sign Up</p>
        <h1 class="mb-5">EcoFriend Registration</h1>
        <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
    </div>
    <div class="page-wrapper p-t-30">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-body">
                    <form action="{{ route('signup') }}" method="post" enctype="multipart/form-data" class="row g-3">
                        @csrf

                        <h5 style="text-align: center">Have an Account? <a href="{{ route('login') }}" style="color: #5B8C51">Login</a></h5>
                        <div class="col-5">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="inputName" value="{{old('name')}}">
                            @error('name')
                                <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-5">
                            <label for="inputGender" class="form-label">Gender</label>
                            <select id="inputGender" class="form-select" name="gender">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Rather Not Say">Rather Not Say</option>
                            </select>
                            @error('gender')
                                <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <label for="inputAge" class="form-label">Age</label>
                            <input type="integer" class="form-control" name="age" id="inputAge" value="{{old('age')}}">
                            @error('age')
                                <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="inputAddress">
                            @error('address')
                                <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputPhone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="inputPhone">
                            @error('phone')
                                <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail4">
                            @error('email')
                                <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="inputPassword4">
                            @error('password')
                                <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" name="terms">
                                <label class="form-check-label" for="gridCheck">
                                    Terms & Conditions
                                </label>
                                @error('terms')
                                    <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-lg btn-block" style="background-color:#EDDD5E; align: center">Submit</button>
                    </form>
                </div>
            </div> 
        </div>    
    </div>
@endguest

@auth
    <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Sign Up</p>
        <h1 class="mb-5">EcoFriend Registration</h1>
    </div>
    <div class="py-5 text-center" style="margin-bottom: 300px">
        <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
        <h2 style="font-weight: bolder">You are logged in</h2>
        <p style="margin-top: 25px">Log Out First</p>
        <div class="mt-4 text-center">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Log Out</button>
            </form>
        </div>
    </div>
    
@endauth
@endsection
