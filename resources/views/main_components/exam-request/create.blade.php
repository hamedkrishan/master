@extends('welcome')

@section('content')

<div style="max-width: 600px; margin: 40px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); background: #fff;">

    <h2 style="margin-bottom: 20px; text-align: center;">Confirm Your {{ ucfirst($type) }} Request</h2>

    <div style="border: 1px solid #ccc; border-radius: 6px; padding: 15px; margin-bottom: 25px; background-color: #f9f9f9;">
        <h3 style="margin-bottom: 10px;">{{ $item->name }}</h3>
        @if(!empty($item->description))
            <p style="margin-bottom: 10px; color: #555;">{{ $item->description }}</p>
        @endif

        @if($type === 'package' && !empty($item->price))
            <p style="font-weight: bold; color: #2a9d8f;">Price: {{ $item->price }} JOD</p>
        @endif
    </div>

    <form method="POST" action="{{ route('exam-request.store') }}">
        @csrf

        <input type="hidden" name="type" value="{{ $type }}">
        <input type="hidden" name="item_id" value="{{ $item->id }}">

        <div style="margin-bottom: 15px;">
            <label for="preferred_date" style="display: block; margin-bottom: 5px; font-weight: 600;">Select Date</label>
            <input type="date" id="preferred_date" name="preferred_date" required
                   style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"
                   min="{{ date('Y-m-d') }}">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="preferred_time" style="display: block; margin-bottom: 5px; font-weight: 600;">Select Time</label>
            <input type="time" id="preferred_time" name="preferred_time" required
                   style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="insurance_number" style="display: block; margin-bottom: 5px; font-weight: 600;">Insurance Number</label>
            <input type="text" id="insurance_number" name="insurance_number"
                   placeholder="Enter insurance number"
                   style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <button type="submit" style="width: 100%; padding: 12px; background-color: #2a9d8f; border: none; color: white; font-size: 16px; border-radius: 5px; cursor: pointer;">
            Confirm Request
        </button>
    </form>
</div>

@endsection
