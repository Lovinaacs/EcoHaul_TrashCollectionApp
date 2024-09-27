@extends('layout')

@section('title', 'Newsletter')

@section('content')
<div class="container" style="margin-bottom: 300px">
    <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Newsletter</p>
        <h1 class="mb-5">EcoKnowledge!</h1>
    </div>

    <div class="d-flex justify-content-center">
        @foreach ($newsletters as $newsletter)
        <div class="card mx-lg-3" style="width: 18rem; margin-bottom:100px">
            <img src="{{ asset('images/' . $newsletter->image) }}" class="card-img-top uniform-img" style="">
            <div class="card-body">
                <h5 class="card-title"><strong>{{$newsletter->title}}</strong></h5>
                <p class="card-text">{{$newsletter->short_desc}}</p>
            </div>
        </div>
        @endforeach
    </div>
    {{ $newsletters->links() }}
</div>
@endsection