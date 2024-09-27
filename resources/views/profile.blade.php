@extends('layout')

@section('title', 'Profile')

@section('content')
<style>
    .content-container.custom-profile-container {
        width:900px;
        margin-bottom: 300px !important;  
    }
</style>
@if (@session('success'))
    <div class="alert alert-success" role="alert">
        <strong>Data has been saved</strong>
    </div>
@endif
@auth
    <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Welcome, {{ Auth::user()->name }}!</p>
        <h1 class="mb-5">Your EcoProfile</h1>
    </div>

    <div class="container rounded mt-5 mb-5 content-container text-white custom-profile-container" style="background-color: #404A3D;">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="p-1 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Information</h4>
                        <h5 class="text-right" style="color:#EDDD5E">Your Ecopoints: {{ Auth::user()->points }}</h5>
                    </div>
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                @error('name')
                                    <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Gender</label>
                                <select class="form-select" name="gender">
                                    <option selected>{{ Auth::user()->gender }}</option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    <option value="Rather Not Say">Rather Not Say</option>
                                </select>
                                @error('gender')
                                    <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">Age</label>
                                <input type="text" class="form-control" name="age" value="{{ Auth::user()->age }}">
                                @error('age')
                                    <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" value="{{ Auth::user()->address }}">
                                @error('address')
                                    <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}">
                                @error('phone')
                                    <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                @error('email')
                                    <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <button type="submit" class="btn" style="background-color:#EDDD5E;">Save Profile</button>
                        </div>
                    </form>
                    <div class="mt-4 text-center">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger">Log Out</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endauth

@guest
    <div class="py-5 text-center" style="margin-bottom: 300px">
        <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
        <h2 style="font-weight: bolder">You are not logged in</h2>
        <a class="btn btn-primary" href="{{ route('login') }}" style="margin-top: 25px">Log In</a>
    </div>
@endguest
@endsection

