@extends('dash') <!-- أو أي layout رئيسي تستخدمه -->

@section('dash_content')

<div class="container mt-4">
    <h2>Test Details</h2>
    
    <div class="card mt-3">
        <div class="card-body">
            <h4 class="card-title">
                @if($test->icon_class)
                    <i class="{{ $test->icon_class }} fs-3 me-2"></i>
                @else
                    <i class="fa-solid fa-question fs-3 me-2 text-muted"></i>
                @endif
                {{ $test->name }}
            </h4>
            <p><strong>Price:</strong> ${{ number_format($test->price, 2) }}</p>
            <p><strong>Description:</strong> {{ $test->description ?? 'No description available.' }}</p>
        </div>
    </div>

    <a href="{{ route('tests.index') }}" class="btn btn-secondary mt-3">Back to Tests List</a>
</div>

@endsection
