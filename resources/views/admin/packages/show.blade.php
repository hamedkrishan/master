@extends('dash')

@section('dash_content')
<div class="container">
    <h1>Package Details</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h4 class="card-title">{{ $package->name }}</h4>
            <p class="card-text"><strong>Description:</strong> {{ $package->description }}</p>
            <p class="card-text"><strong>Price:</strong> ${{ $package->price }}</p>
            <p class="card-text"><strong>Details:</strong> {{ $package->details }}</p>
            <a href="{{ route('packages.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
