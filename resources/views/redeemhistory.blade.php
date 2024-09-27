@extends('layout')

@section('title', 'Redeem History')

@section('content')
<div class="content">
    <div class="container" style="margin-bottom: 300px">
        @auth
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
          <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Redeem History</p>
          <h1 class="mb-5">Your EcoPrints!</h1>
        </div>
        <div class="table-responsive" style="font-size: 1.25em;">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th scope="col">Redeem Date</th>
                        <th scope="col">Reward</th>
                        <th scope="col">Points Deducted</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($redeems as $redeem)
                    <tr>
                        <td>{{ $redeem->redeem_date }}</td>
                        <td>{{ $redeem->reward->name }}</td>
                        <td>-{{ $redeem->reward->points }} EcoPoints</td>
                    </tr>
                    @empty
                    <tr><td colspan="6">No data found</td></tr>
                    @endforelse
                </tbody>
            </table>
            {{$redeems->links()}}
        </div>
        @endauth
        @guest
        <div class="py-5 text-center" style="margin-bottom: 300px">
            <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
            <h2 style="font-weight: bolder">You are not logged in</h2>
            <a class="btn btn-lg btn-block" href="{{ route('login') }}" style="margin-top: 25px; background-color:#EDDD5E;">Log In</a>
        </div>
        @endguest
    </div>
    
</div>

@endsection
