@extends('layout')

@section('title', 'About')

@section('content')
<style>
    .justify-text {
        text-align: justify;
        text-justify: inter-word;
    }
</style>

<div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
    <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">About Us</p>
    <h1 class="mb-5">EcoHaul</h1>
</div>

<!-- About Section -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title mb-4">Our Mission</h2>
                    <p class="card-text justify-text">At EcoHaul, our mission is to empower communities in low and middle-income countries to manage their waste sustainably and create economic opportunities. We believe that waste is a valuable resource that can be transformed into a source of income and livelihoods, while also protecting the environment and public health.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title mb-4">Our Vision</h2>
                    <p class="card-text justify-text">Our vision is a world where waste is no longer a problem, but a resource that benefits everyone. We envision a future where communities are empowered to manage their waste sustainably, where waste is reduced, reused, and recycled, and where the environment is protected for future generations.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- What We Do Section -->
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title mb-4">What We Do</h2>
                    <p class="card-text justify-text">We work with communities, local governments, and businesses to develop sustainable waste management solutions that are tailored to their needs. Our approach is based on the principles of circular economy, and we focus on building local capacity and creating economic opportunities through waste management.</p>
                    <ul class="list-unstyled mb-0 justify-text">
                        <li><strong>Training:</strong> We provide training and capacity building to local waste managers, entrepreneurs, and community leaders.</li>
                        <li><strong>Innovation:</strong> We support the development of innovative waste management technologies and business models.</li>
                        <li><strong>Advocacy:</strong> We advocate for policies and practices that support sustainable waste management and circular economy.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="mb-4">Meet Our Team</h2>
            <div class="row">
                @foreach (['member1.png', 'member2.jpg', 'member3.jpg'] as $member)
                    <div class="col-md-4 text-center mb-4">
                        <div class="card shadow-sm" style="padding-top: 20px;">
                            <img src="{{ asset('images/' . $member) }}" alt="Team Member" class="card-img-top rounded-circle mb-3" style="width: 150px; height: 150px; display: block; margin: 0 auto;">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Member Name</h5>
                                <p class="card-text text-muted">Co-founder</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection