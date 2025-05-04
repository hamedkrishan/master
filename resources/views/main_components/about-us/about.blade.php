@extends('welcome')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: #007bff; color: white;">
    <div class="container text-center py-5 mt-4">
        <h1 class="display-2 mb-3 animated slideInDown">About</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0" style="background-color: transparent;">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" style="color: white;">Home</a></li>
                <li class="breadcrumb-item"><a href="#" style="color: white;">Pages</a></li>
                <li class="breadcrumb-item" aria-current="page" style="color: white;">About</li>
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
            <p class="mb-3" style="font-size: 1.1rem; color: #555;">We offer comprehensive lab services with the latest technologies and the most accurate methods, focusing on precise results and customer satisfaction.</p>
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
<!-- About End -->

<div class="container py-5 wow fadeIn" data-wow-delay="0.6s" style="background-color: #f1f1f1; border-bottom: 2px solid #ddd;">
    <h2 class="text-center mb-4 text-primary">Our Services</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4 shadow-lg" style="transition: transform 0.3s ease;">
                <img src="img/service1.jpg" class="card-img-top" alt="Service Image">
                <div class="card-body">
                    <h5 class="card-title">Clinical Testing</h5>
                    <p class="card-text">We provide a wide range of clinical tests for accurate diagnosis and treatment planning.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 shadow-lg" style="transition: transform 0.3s ease;">
                <img src="img/service2.jpg" class="card-img-top" alt="Service Image">
                <div class="card-body">
                    <h5 class="card-title">Genetic Testing</h5>
                    <p class="card-text">Our genetic testing services help in detecting inherited diseases and provide insights into genetic conditions.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Start -->
<div class="container-fluid feature my-5 wow fadeInUp" data-wow-delay="0.1s" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 pt-lg-5">
                <div class="bg-white p-5 mt-lg-5">
                    <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">The Best Medical Test & Laboratory Solution</h1>
                    <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-person-plus text-dark"></i>
                            </div>
                            <h5 class="mb-3">Experience Doctors</h5>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-check-all text-dark"></i>
                            </div>
                            <h5 class="mb-3">Advanced Microscopy</h5>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 wow fadeIn" data-wow-delay="0.5s" href="#">Explore More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row h-100 align-items-end">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;">
                            <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
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
                                    <span class="text-white">Lab Equipments</span>
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
<!-- Features End -->

<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->

<!-- FAQ Section Start -->
<!-- FAQ Section Start -->
<div class="container py-5">
    <h2 class="text-center mb-5">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">
        <div class="accordion-item mb-3">
            <h2 class="accordion-header">
                <button class="accordion-button" style="transition: 0.3s;" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    What is the lab's working time?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show">
                <div class="accordion-body">We operate from 8:00 AM to 10:00 PM every day.</div>
            </div>
        </div>
        <div class="accordion-item mb-3">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" style="transition: 0.3s;" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    How do I book a test?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse">
                <div class="accordion-body">You can book a test online or by visiting our lab.</div>
            </div>
        </div>
        <div class="accordion-item mb-3">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" style="transition: 0.3s;" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    Do I need to make an appointment for tests?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse">
                <div class="accordion-body">While appointments are recommended, we accept walk-ins as well.</div>
            </div>
        </div>
        <div class="accordion-item mb-3">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" style="transition: 0.3s;" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                    How long does it take to get results?
                </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse">
                <div class="accordion-body">Results are typically available within 24 to 48 hours depending on the type of test.</div>
            </div>
        </div>
        <div class="accordion-item mb-3">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" style="transition: 0.3s;" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                    Can I visit any branch for my test?
                </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse">
                <div class="accordion-body">Yes, you can visit any of our branches for the tests. We have multiple locations across the region.</div>
            </div>
        </div>
        <div class="accordion-item mb-3">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" style="transition: 0.3s;" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                    Do you offer home sample collection?
                </button>
            </h2>
            <div id="faq6" class="accordion-collapse collapse">
                <div class="accordion-body">Yes, we offer home sample collection services. You can book it through our website or by calling us.</div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Section End -->

<!-- FAQ Section End -->

@endsection
