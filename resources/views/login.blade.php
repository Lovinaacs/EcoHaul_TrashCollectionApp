@extends('layout')

@section('title', 'Login')

@section('content')

<div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
    <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Log In</p>
    <h1 class="mb-5">Welcome back, EcoFriend!</h1>
</div>
@guest
    <div class="page-wrapper p-t-30">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-body">
                    <form class="row g-3" action="{{ route('login') }}" method="POST">
                        @csrf

                        <h5 style="text-align: center">New EcoFriends? <a href="{{ route('signup') }}" style="color: #5B8C51">Sign Up</a></h5>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email">
                            @error('email')
                                <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name="password">
                            @error('password')
                                <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-lg btn-block" style="background-color:#EDDD5E;">Submit</button>
                    </form>
                    
                </div>
            </div> 
        </div>    
    </div>
@endguest

@auth
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
