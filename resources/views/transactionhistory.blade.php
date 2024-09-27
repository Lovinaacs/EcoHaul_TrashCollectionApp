@extends('layout')

@section('title', 'Transaction History')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        Transaction cancelled!
    </div>
@endif
<div class="content">
    <div class="container" style="margin-bottom: 300px">
        @auth
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
          <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Transaction History</p>
          <h1 class="mb-5">Your EcoPrints!</h1>
        </div>
        <div class="table-responsive" style="font-size: 1.25em;">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th scope="col">Waste Type</th>
                        <th scope="col">Service Type</th>
                        <th scope="col">Waste Weight</th>
                        <th scope="col">Recycle Bank</th>
                        <th scope="col">Transaction Date</th>
                        <th scope="col">Earned Points</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->wastetype->name }}</td>
                        <td>{{ $transaction->servtype->name }}</td>
                        <td>{{ $transaction->waste_weight }} g</td>
                        <td>{{ $transaction->recyclebank->name }}</td>
                        <td>{{ $transaction->transaction_date }}</td>
                        <td>{{ $transaction->points_earned }} EcoPoints</td>
                        <td>
                            @if(\Carbon\Carbon::parse($transaction->transaction_date)->isFuture())
                                <form action="{{ route('transaction.cancel', $transaction->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel this transaction?');">Cancel</button>
                                </form>
                            @else
                                <button class="btn btn-secondary" disabled>Cancel</button>
                            @endif

                    </tr>
                    @empty
                        <tr><td colspan="6">No data found</td></tr>
                    @endforelse
                </tbody>
            </table>
            {{$transactions->links()}}
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
