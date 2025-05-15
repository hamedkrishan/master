@extends('welcome')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5 mt-4">
        <h1 class="display-2 text-white mb-3 animated slideInDown">Appointment</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item" aria-current="page">Appointment</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container-fluid py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-6 mb-3">Reliable & High-Quality Laboratory Packages</h1>
            <p>Choose the right package for your medical needs</p>
        </div>
        <div class="row g-4">
            @foreach($packages as $package)
                <div class="col-lg-3 col-md-6">
                    <div class="bg-white text-center p-4 shadow rounded h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-4">
                                <i class="bi {{ $package->icon }} text-primary" style="font-size:40px;"></i>
                            </div>
                            <h5 class="mb-3">{{ $package->name }}</h5>
                            <p class="mb-3 text-muted">{{ $package->description }}</p>
                            <p class="text-success fw-bold mb-4">{{ $package->price }} JOD</p>
                        </div>

                        @auth
                        <a href="{{ route('request-package', ['id' => $package->id]) }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endauth

                        @guest
                        <a href="{{ route('login') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endguest
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
