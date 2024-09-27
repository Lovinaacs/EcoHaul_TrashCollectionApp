@extends('layout')

@section('title', 'Rewards')

@section('content')
@auth
@if(session('success'))
    <div class="alert alert-success">
        Reward successfully redeemed!
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <div class="container" style="margin-bottom: 300px">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; margin-bottom: 75px">
            <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Rewards</p>
            <h1 class="mb-5">EcoRewards!</h1>
            <h4 style="color: #404A3D">Your EcoPoints: {{ Auth::user()->points }}</h4>
        </div>

        <div class="d-flex justify-content-center">
            
            @foreach ($rewards as $reward)
            <div class="card mx-lg-3" style="width: 20rem; margin-bottom: 100px;">
                <div class="image-container" style="width: 100%; height: 300px; overflow: hidden;">
                    <img src="{{ asset('images/' . $reward->image) }}" class="card-img-top uniform-img" alt="Image of {{$reward->name}}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body text-start">
                    <h5 class="card-title"><strong>{{$reward->name}}</strong></h5>
                    <p class="card-text">Stock: {{$reward->stock}}</p>
                    <p class="card-text">Points required: {{$reward->points}}</p>
                </div>
                <div class="card-body text-end">
                    <form action="{{ route('redeem.rewards') }}" method="POST">
                        @csrf
                        <input type="hidden" name="reward_id" value="{{ $reward->id }}">
                        <button type="submit" class="btn btn-primary" {{ $reward->stock <= 0 ? 'disabled' : '' }}>Redeem</button>
                    </form>
                </div>
            </div>
            @endforeach
            
        </div>
        {{$rewards->links()}}
    </div>
    
@endauth

@guest
    <div class="py-5 text-center" style="margin-bottom: 300px">
        <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
        <h2 style="font-weight: bolder">You are not logged in</h2>
        <a class="btn btn-lg btn-block" href="{{ route('login') }}" style="margin-top: 25px; background-color:#EDDD5E;">Log In</a>
    </div>
@endguest
@endsection
