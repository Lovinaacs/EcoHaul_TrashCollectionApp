@extends('layout')

@section('title', 'Pickup')

@section('content')
@auth
    <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Pick Up</p>
        <h1 class="mb-5">Start your EcoJourney!</h1>
        <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
    </div>

    <div class="page-wrapper p-t-30">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-body">
                <form action="/pickup" method="POST" id="pickUpForm">
                    @csrf

                    <div class="form-row">
                        <div class="name">Waste Type</div>
                        <select class="form-select" name="wastetype_id" id="" required>
                        <option selected>Choose One:</option>
                            @foreach ($wastetypes as $wastetype)
                                <option value="{{$wastetype->id}}">{{$wastetype->name}}</option>
                            @endforeach
                        </select>
                        @error('wastetype_id')
                            <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-row">
                        <div class="name">Waste Weight</div>
                        <input type="text" class="form-control" name="waste_weight" id="waste_weight" required>
                        @error('waste_weight')
                            <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-row">
                        <div class="name">Recycle Bank</div>
                        <select class="form-select" name="recyclebank_id" id="">
                        <option selected>Choose One:</option>
                            @foreach ($recyclebanks as $recyclebank)
                                <option value="{{$recyclebank->id}}">{{$recyclebank->name}}</option>
                            @endforeach
                        </select>
                        @error('recyclebank_id')
                            <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-row">
                        <div class="name">Pickup Address</div>
                        <textarea class="form-control" name="pickup_address" id="" required></textarea>
                        @error('pickup_address')
                            <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-row">
                        <div class="name">Pick Up Date</div>
                        <input type="date" class="form-control" name="transaction_date" id="transaction_date" min="{{ now()->toDateString() }}" required>
                        @error('transaction_date')
                            <span class="error-message" style="color: red;font-size: 0.9em; display: block;">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-lg btn-block" style="background-color:#EDDD5E;">Submit</button>
                    </form>
                </div>
            </div> 
        </div>    
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
