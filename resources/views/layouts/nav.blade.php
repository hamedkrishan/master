<!-- Topbar Start -->
<div class="container-fluid py-2 d-none d-lg-flex">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Sat 09am-5pm, Sun Closed</small>
            </div>
            <nav class="breadcrumb mb-0">
                <a class="breadcrumb-item small text-body" href="#">Career</a>
                <a class="breadcrumb-item small text-body" href="#">Support</a>
                <a class="breadcrumb-item small text-body" href="#">Terms</a>
                <a class="breadcrumb-item small text-body" href="#">FAQs</a>
            </nav>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Brand Start -->
<div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
    <div class="container pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="h1 text-white mb-0 mx-auto">Center<span class="text-dark">Lab</span></a>
            <div class="d-flex align-items-center gap-2">
                {{-- @guest
                    <a href="{{ url('/Log') }}" class="btn btn-light btn-sm px-3 py-1 rounded-pill d-flex align-items-center justify-content-center">
                        <i class="bi bi-box-arrow-in-right"></i> <!-- Login Icon -->
                    </a>
                @endguest

                @auth
                    <form method="POST" action="{{ route('logout') }}" class="mb-0">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm px-3 py-1 rounded-pill d-flex align-items-center justify-content-center">
                            <i class="bi bi-box-arrow-right"></i> <!-- Logout Icon -->
                        </button>
                    </form>
                @endauth --}}
            </div>
        </div>
    </div>
</div>
<!-- Brand End -->

<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
            <a href="{{ url('/') }}" class="navbar-brand d-lg-none">
                <h1 class="text-white m-0">Center<span class="text-dark">Lab</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('/Service') }}" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="{{ url('/Our Team') }}" class="dropdown-item">Our Team</a>
                            <a href="{{ url('/Appoinment') }}" class="dropdown-item">Appoinment</a>
                        </div>
                    </div>
                    <a href="{{ url('/Contact') }}" class="nav-item nav-link">Contact</a>
                </div>
                <div class="ms-auto d-none d-lg-flex">
                    @guest
                        <a href="{{ url('/Log') }}" class="btn btn-primary btn-lg px-4 py-2 rounded-pill d-flex align-items-center justify-content-center shadow-lg border-0">
                            <i class="bi bi-box-arrow-in-right me-2"></i> <!-- Login Icon -->
                            
                        </a>
                    @endguest

                    @auth
                        <form method="POST" action="{{ route('logout') }}" class="mb-0">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm px-3 py-1 rounded-pill d-flex align-items-center justify-content-center">
                                <i class="bi bi-box-arrow-right"></i> <!-- Logout Icon -->
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
