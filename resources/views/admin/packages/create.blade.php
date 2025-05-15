@extends('dash')

@section('dash_content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Add New Package</h2>

    <form action="{{ route('packages.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Package Name</label>
            <input type="text" name="name" class="form-control" required >
        </div>

        <div class="mb-3">
            <label for="details" class="form-label">details </label>
            <textarea name="details" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description </label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price (JOD)</label>
            <input type="number" name="price" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="icon" class="form-label">Icon (optional)</label>
            <input type="text" name="icon" class="form-control" >
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('packages.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
