@extends('welcome')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Tests</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Tests</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Reliable & High-Quality Laboratory Service</h1>
                <p class="mb-5">Center Lab operates ISO‑15189‑accredited facilities across Jordan, delivering rapid, clinician‑ready results for more than 1,200 diagnostic assays.</p>
            </div>
            <div class="row g-4">

                @foreach ($tests as $index => $test)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="{{ $test->icon_class ?? 'bi bi-file-medical' }} text-dark"></i>
                            </div>
                            <h5 class="mb-3">{{ $test->name }}</h5>
                            <p class="mb-4">{{ $test->description ?? 'No description available.' }}</p>
                            <a href="{{ route('exam-request.create', ['type' => 'test', 'id' => $test->id]) }}" class="btn btn-primary">
                                Request Test
                            </a>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection
