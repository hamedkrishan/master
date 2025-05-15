@extends('dash')

@section('dash_content')
<div class="container mt-5 text-center">
    <h2 class="mb-4 text-danger">Delete Package</h2>
    <p>Are you sure you want to delete this package?</p>
    <h4>{{ $package->name }}</h4>
    <form action="{{ route('packages.destroy', $package->id) }}" method="POST" class="mt-3">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Yes, Delete</button>
        <a href="{{ route('packages.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
