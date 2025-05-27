@extends('dash')

@section('dash_content')
<div class="container mt-4" style="max-width: 700px">

    <h2 class="mb-4">Package Details</h2>

    <div class="card shadow-sm">
        <div class="card-body">

            {{-- Icon --}}
            @if($package->icon)
                <div class="mb-3">
                    <i class="bi {{ $package->icon }} text-primary" style="font-size:48px;"></i>
                </div>
            @endif

            <h4 class="card-title">{{ $package->name }}</h4>

            <p class="card-text">
                <strong>Description:</strong><br>
                {{ $package->description ?: '—' }}
            </p>

            <p class="card-text">
                <strong>Price:</strong>
                {{ number_format($package->price, 2) }} JOD
            </p>

            <p class="card-text">
                <strong>Details:</strong><br>
                {{ $package->details ?: '—' }}
            </p>

            <a href="{{ route('packages.index') }}" class="btn btn-secondary">Back to list</a>
        </div>
    </div>
</div>
@endsection
