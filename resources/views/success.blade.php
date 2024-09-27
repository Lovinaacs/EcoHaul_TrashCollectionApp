@extends('layout')

@section('title', 'Success, Yay!')

@section('content')

<div class="py-5 text-center" style="margin-bottom: 300px">
    <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
    <h2 style="font-weight: bolder">Transaction Success!</h2>

    <p style="padding-top: 10px"> 
        Want to cancel your order?
        <a class="btn btn-danger" href="{{ route('transaction.history') }}" style="margin-left: 50px">Cancel</a>
    </p> 
</div>

@endsection