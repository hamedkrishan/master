@extends('welcome')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: #007bff; color: white;">
    <div class="container text-center py-5 mt-4">
        <h1 class="display-2 text-white mb-3 animated slideInDown">About</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" style="color: white;">Home</a></li>
                <li class="breadcrumb-item"><a href="#" style="color: white;">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: white;">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container py-5 wow fadeIn" data-wow-delay="0.3s" style="background-color: #f8f9fa; border-bottom: 2px solid #ddd;">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <img src="img/about-1.jpg" class="img-fluid rounded shadow-lg" alt="Center Lab Image" style="transition: transform 0.3s ease;">
        </div>
        <div class="col-lg-6">
            <h2 class="mb-4 text-primary">Center Lab Medical - Expertise in Accurate Testing</h2>
            <p class="mb-3" style="font-size: 1.1rem; color: #555;">
                We offer comprehensive lab services with the latest technologies and the most accurate methods, focusing on precise results and customer satisfaction.
            </p>
            <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Clinical, hormonal, genetic, and immunological tests</li>
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Pre-employment and home testing</li>
                <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Reliable results delivered on time</li>
                <li><i class="bi bi-check-circle text-primary me-2"></i>Customer service and precise follow-up</li>
            </ul>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Core Values -->
<div class="container py-5 wow fadeIn" data-wow-delay="0.4s" style="background-color: #fff; border-bottom: 2px solid #f1f1f1;">
    <h2 class="text-center mb-4 text-secondary">Our Core Values</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <h4 class="hover-text">Integrity</h4>
            <p>We adhere to the highest standards of integrity and transparency in all our processes.</p>
        </div>
        <div class="col-md-4">
            <h4 class="hover-text">Innovation</h4>
            <p>We continuously innovate to keep up with the latest scientific advancements and technologies.</p>
        </div>
        <div class="col-md-4">
            <h4 class="hover-text">Excellence</h4>
            <p>We are committed to providing the highest quality services for every patient, every time.</p>
        </div>
    </div>
</div>
<!-- Core Values End -->

<!-- Services -->
<div class="container py-5 wow fadeIn" data-wow-delay="0.6s" style="background-color: #f1f1f1; border-bottom: 2px solid #ddd;">
    <h2 class="text-center mb-4 text-primary">Our Services</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4 shadow-lg" style="transition: transform 0.3s ease;">
                <img src="https://i.postimg.cc/RZfSwbr4/Screenshot-2025-05-19-011806.png " class="card-img-top" alt="Clinical Testing">
                <div class="card-body">
                    <h5 class="card-title">Clinical Testing</h5>
                    <p class="card-text">We provide a wide range of clinical tests for accurate diagnosis and treatment planning.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 shadow-lg" style="transition: transform 0.3s ease;">
                <img src="https://i.postimg.cc/65tgMjGB/Screenshot-2025-05-19-013726.png " class="card-img-top" alt="Genetic Testing">
                <div class="card-body">
                    <h5 class="card-title">Genetic Testing</h5>
                    <p class="card-text">Our genetic testing services help in detecting inherited diseases and provide insights into genetic conditions.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Highlight Start -->
<div class="container-fluid feature mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 pt-lg-5">
                <div class="bg-white p-5 mt-lg-5">
                    <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">Comprehensive Medical Testing & Digital Reporting</h1>
                    <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">
                        Our test menu spans molecular diagnostics, clinical chemistry, hematology, microbiology, histopathology, immunology, and toxicology—all interfaced via HL7 to hospital EMR systems.
                    </p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-person-plus text-dark"></i>
                            </div>
                            <h5 class="mb-3">Consultant Pathologists</h5>
                            <span>Fellowship‑trained in UK, USA & Germany for subspecialty reporting.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-check-all text-dark"></i>
                            </div>
                            <h5 class="mb-3">High‑Resolution Microscopy</h5>
                            <span>Olympus digital scanners with 0.25 µm optical limit enable telepathology.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row h-100 align-items-end">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;">
                            <button type="button" class="btn-play" data-bs-toggle="modal"
                                    data-src="https://www.youtube.com/embed/DWRcNpR6Kdc " data-bs-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary p-5">
                            <div class="experience mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-white">Sample Preparation</span>
                                    <span class="text-white">90%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="experience mb-4 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-white">Result Accuracy</span>
                                    <span class="text-white">95%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="experience mb-0 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-white">Lab Equipment</span>
                                    <span class="text-white">90%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Highlight End -->

<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Laboratory Overview</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->

<!-- FAQ Section Start -->
<div class="container py-5">
    <h2 class="text-center mb-5">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">
        @foreach([
            "What is the lab's working time?" => "We operate from 8:00 AM to 10:00 PM every day.",
            "How do I book a test?" => "You can book a test online or by visiting our lab.",
            "Do I need to make an appointment for tests?" => "While appointments are recommended, we accept walk-ins as well.",
            "How long does it take to get results?" => "Results are typically available within 24 to 48 hours depending on the type of test.",
            "Can I visit any branch for my test?" => "Yes, you can visit any of our branches for the tests. We have multiple locations across the region.",
            "Do you offer home sample collection?" => "Yes, we offer home sample collection services. You can book it through our website or by calling us."
        ] as $question => $answer)
            <div class="accordion-item mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $loop->index + 1 }}">
                        {{ $question }}
                    </button>
                </h2>
                <div id="faq{{ $loop->index + 1 }}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">{{ $answer }}</div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- FAQ Section End -->

@endsection