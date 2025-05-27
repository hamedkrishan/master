{{-- resources/views/main_components/appointment/form.blade.php --}}
@extends('welcome')

@section('content')
    {{-- keep the header, services grid, … exactly as you already have --}}
    {{-- … --}}

    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                {{-- left column — address blurb --}}
                <div class="col-lg-6">
                    <h1 class="display-6 mb-4">We Ensure You Always Get The Best Result</h1>
                    <p>Our laboratory applies stringent quality controls and participates in external proficiency
                       programs to guarantee reliable diagnostic data for physicians and patients.</p>
                    <p class="mb-4">Book your appointment or visit us for walk-in sampling; most routine tests are
                       completed within 4 hours.</p>

                    <div class="d-flex align-items-start mb-3">
                        <div class="icon-box-primary"><i class="bi bi-geo-alt text-dark fs-1"></i></div>
                        <div class="ms-3">
                            <h5>Office Address</h5>
                            <span>Wasfi Al-Tal St 133, Amman, Jordan</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="icon-box-primary"><i class="bi bi-clock text-dark fs-1"></i></div>
                        <div class="ms-3">
                            <h5>Office Time</h5>
                            <span>Sat-Thu 08:00-21:00, Fri Closed</span>
                        </div>
                    </div>
                </div>

                {{-- right column — the form --}}
                <div class="col-lg-6">
                    <h2 class="mb-4">Online Appointment</h2>

                    {{-- success flash --}}
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('appointment.store') }}">
                        @csrf

                        <div class="row g-3">

                            {{-- name --}}
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input  type="text" name="name" id="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Your Name" value="{{ old('name') }}" required>
                                    <label for="name">Your Name</label>
                                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- email --}}
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input  type="email" name="email" id="mail"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Your Email" value="{{ old('email') }}" required>
                                    <label for="mail">Your Email</label>
                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- mobile --}}
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input  type="text" name="mobile" id="mobile"
                                            class="form-control @error('mobile') is-invalid @enderror"
                                            placeholder="Your Mobile" value="{{ old('mobile') }}" required>
                                    <label for="mobile">Your Mobile</label>
                                    @error('mobile') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- service --}}
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <select name="service" id="service"
                                            class="form-select @error('service') is-invalid @enderror" required>
                                        <option disabled selected value="">— choose —</option>
                                        <option value="home sample collection"
                                                @selected(old('service')=='home sample collection')>
                                            Home sample collection
                                        </option>
                                        <option value="Appointment in Our lab"
                                                @selected(old('service')=='Appointment in Our lab')>
                                            Appointment in our lab
                                        </option>
                                    </select>
                                    <label for="service">Choose A Service</label>
                                    @error('service') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- preferred date --}}
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input  type="date" name="date" id="date"
                                            class="form-control @error('date') is-invalid @enderror"
                                            value="{{ old('date') }}"
                                            min="{{ date('Y-m-d') }}" required>
                                    <label for="date">Preferred Date</label>
                                    @error('date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- preferred time --}}
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input  type="time" name="time" id="time"
                                            class="form-control @error('time') is-invalid @enderror"
                                            value="{{ old('time') }}" required>
                                    <label for="time">Preferred Time</label>
                                    @error('time') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            {{-- message --}}
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" id="message"
                                              class="form-control @error('message') is-invalid @enderror"
                                              style="height: 130px"
                                              placeholder="Leave a message here">{{ old('message') }}</textarea>
                                    <label for="message">Message (optional)</label>
                                    @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit">
                                    Submit Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
@endsection
