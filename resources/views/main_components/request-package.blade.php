@extends('welcome')

@section('content')

<div class="container-fluid py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-6 mb-3">{{ $package->name }}</h1>
            <p>{{ $package->description }}</p>
            <p>{{ $package->details }}</p>
            <p class="text-success fw-bold mb-4">{{ $package->price }} JOD</p>
        </div>

        <form action="" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit Request</button>
        </form>
    </div>
</div>




@endsection
