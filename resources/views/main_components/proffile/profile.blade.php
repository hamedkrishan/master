@extends('welcome')

@section('content')
<div class="container py-5">
    <h2>User Profile</h2>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    <!-- Button to open modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
        Edit Profile
    </button>

    <!-- Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editProfileLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
        </form>
      </div>
    </div>

    <!-- Appointments -->
    <h3 class="mt-4">Your Appointments</h3>
    @if($appointments->isEmpty())
        <p>You have no appointments.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Service</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Requested At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->service }}</td>
                    <td>{{ $appointment->message ?? '-' }}</td>
                    <td>
                        @if($appointment->status == 'approved')
                            <span class="badge bg-success">Approved</span>
                        @elseif($appointment->status == 'declined')
                            <span class="badge bg-danger">Declined</span>
                        @else
                            <span class="badge bg-secondary">Pending</span>
                        @endif
                    </td>
                    <td>{{ $appointment->created_at->format('Y-m-d H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <!-- Exam Requests -->
    <h3 class="mt-5">Your Exam Requests</h3>
    @if($requests->isEmpty())
        <p>You have no exam requests.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Test / Package</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Insurance Number</th>
                    <th>Status</th>
                    <th>Requested At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($requests as $request)
                <tr>
                    <td>{{ ucfirst($request->type) }}</td>
                    <td>
                        @if($request->type === 'test' && $request->test)
                            {{ $request->test->name }}
                        @elseif($request->type === 'package' && $request->package)
                            {{ $request->package->name }}
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $request->date }}</td>
                    <td>{{ $request->time }}</td>
                    <td>{{ $request->insurance_number ?? '-' }}</td>
                    <td>
                        @if($request->status === 'approved')
                            <span class="badge bg-success">Approved</span>
                        @elseif($request->status === 'rejected')
                            <span class="badge bg-danger">Rejected</span>
                        @else
                            <span class="badge bg-secondary">Pending</span>
                        @endif
                    </td>
                    <td>{{ $request->created_at->format('Y-m-d H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif
</div>
@endsection
