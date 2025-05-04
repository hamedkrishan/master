@extends('welcome')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Appoinment</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Appoinment</li>
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

                <div class="col-lg-3 col-md-6">
                    <div class="bg-white text-center p-4 shadow rounded h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-4">
                                <i class="bi bi-heart-pulse text-primary" style="font-size:40px;"></i>
                            </div>
                            <h5 class="mb-3">Pathology Testing</h5>
                            <p class="mb-3 text-muted">Blood, tissue, infection detection</p>
                            <p class="text-success fw-bold mb-4">20 JOD</p>
                        </div>
                        
                        @auth
                        <a href="{{ url('request-package') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endauth

                        @guest
                        <a href="{{ route('login') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endguest
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="bg-white text-center p-4 shadow rounded h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-4">
                                <i class="bi bi-lungs text-primary" style="font-size:40px;"></i>
                            </div>
                            <h5 class="mb-3">Microbiology Tests</h5>
                            <p class="mb-3 text-muted">Bacterial, viral, parasitology</p>
                            <p class="text-success fw-bold mb-4">25 JOD</p>
                        </div>

                        @auth
                        <a href="{{ url('request-package') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endauth

                        @guest
                        <a href="{{ route('login') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endguest
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="bg-white text-center p-4 shadow rounded h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-4">
                                <i class="bi bi-virus text-primary" style="font-size:40px;"></i>
                            </div>
                            <h5 class="mb-3">Biochemistry Tests</h5>
                            <p class="mb-3 text-muted">Sugar, liver, kidney panels</p>
                            <p class="text-success fw-bold mb-4">30 JOD</p>
                        </div>

                        @auth
                        <a href="{{ url('request-package') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endauth

                        @guest
                        <a href="{{ route('login') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endguest
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="bg-white text-center p-4 shadow rounded h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-4">
                                <i class="bi bi-capsule-pill text-primary" style="font-size:40px;"></i>
                            </div>
                            <h5 class="mb-3">Histopathology Tests</h5>
                            <p class="mb-3 text-muted">Tumors, biopsy, cell studies</p>
                            <p class="text-success fw-bold mb-4">40 JOD</p>
                        </div>

                        @auth
                        <a href="{{ url('request-package') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endauth

                        @guest
                        <a href="{{ route('login') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endguest
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="bg-white text-center p-4 shadow rounded h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-4">
                                <i class="bi bi-capsule text-primary" style="font-size:40px;"></i>
                            </div>
                            <h5 class="mb-3">Urine Tests</h5>
                            <p class="mb-3 text-muted">Routine, culture, cytology</p>
                            <p class="text-success fw-bold mb-4">15 JOD</p>
                        </div>

                        @auth
                        <a href="{{ url('request-package') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endauth

                        @guest
                        <a href="{{ route('login') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endguest
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="bg-white text-center p-4 shadow rounded h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-4">
                                <i class="bi bi-prescription2 text-primary" style="font-size:40px;"></i>
                            </div>
                            <h5 class="mb-3">Blood Tests</h5>
                            <p class="mb-3 text-muted">CBC, clotting, blood groups</p>
                            <p class="text-success fw-bold mb-4">18 JOD</p>
                        </div>

                        @auth
                        <a href="{{ url('request-package') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endauth

                        @guest
                        <a href="{{ route('login') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endguest
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="bg-white text-center p-4 shadow rounded h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-4">
                                <i class="bi bi-clipboard2-pulse text-primary" style="font-size:40px;"></i>
                            </div>
                            <h5 class="mb-3">Fever Tests</h5>
                            <p class="mb-3 text-muted">Typhoid, malaria, dengue</p>
                            <p class="text-success fw-bold mb-4">22 JOD</p>
                        </div>

                        @auth
                        <a href="{{ url('request-package') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endauth

                        @guest
                        <a href="{{ route('login') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endguest
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="bg-white text-center p-4 shadow rounded h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-4">
                                <i class="bi bi-file-medical text-primary" style="font-size:40px;"></i>
                            </div>
                            <h5 class="mb-3">Allergy Tests</h5>
                            <p class="mb-3 text-muted">Skin, food, respiratory panels</p>
                            <p class="text-success fw-bold mb-4">35 JOD</p>
                        </div>

                        @auth
                        <a href="{{ url('request-package') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endauth

                        @guest
                        <a href="{{ route('login') }}" class="btn btn-outline-primary mt-auto">Request Package</a>
                        @endguest
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Appoinment Start -->
    
    <!-- Appoinment End -->

@endsection
