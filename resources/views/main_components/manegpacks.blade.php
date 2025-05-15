@extends('welcome')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-6 mb-3">Packages</h1>
            <p>Manage all available packages</p>
        </div>

        <div class="row g-4">
            @foreach($packages as $package)
                <div class="col-lg-3 col-md-6">
                    <div class="bg-white text-center p-4 shadow rounded h-100 d-flex flex-column">
                        <div>
                            <h5 class="mb-2">{{ $package->name }}</h5>
                            <p class="text-muted mb-2">{{ $package->description }}</p>
                            <p class="text-success fw-bold mb-3">{{ $package->price }} JOD</p>
                        </div>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="{{ route('request-package', ['id' => $package->id]) }}" class="btn btn-outline-primary btn-sm">View</a>

                            <a href="{{ route('packages.edit', $package) }}" class="btn btn-outline-warning btn-sm">Edit</a>

                            <form action="{{ route('packages.destroy', $package) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm w-100">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('packages.create') }}" class="btn btn-success">Add New Package</a>
        </div>
    </div>
</div>
@endsection
