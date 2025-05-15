@extends('dash')

@section('dash_content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Edit Package</h2>

    <form action="{{ route('packages.update', $package->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Package Name</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name', $package->name) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description </label>
            <textarea name="description" class="form-control">{{ old('description', $package->description) }}</textarea>
        </div>
    
        <div class="mb-3">
                    <label for="price" class="form-label">details </label>
                    <input type="text" name="text" class="form-control" required value="{{ old('details', $package->details) }}">
                </div>


        <div class="mb-3">
            <label for="price" class="form-label">Price (JOD)</label>
            <input type="number" name="price" step="0.01" class="form-control" required value="{{ old('price', $package->price) }}">
        </div>

        <div class="mb-3">
            <label for="icon" class="form-label">Icon (optional)</label>
            <input type="text" name="icon" class="form-control" value="{{ old('icon', $package->icon) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('packages.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
