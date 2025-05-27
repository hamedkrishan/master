@extends('dash')

@section('dash_content')
<div class="container-fluid p-0">
    <div class="row g-0">

        <!-- Main Content -->
        <main class="col offset-md-3 offset-lg-2" style="margin-top: 70px;">
            <div class="container" style="max-width: 900px;">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0 ms-3">Appointment Requests</h2>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card">
                    <div class="card-body p-3">

                        <!-- Scrollable Table Container -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-sm align-middle mb-0" style="min-width: 1200px;">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 5%">ID</th>
                                        <th style="width: 12%">User</th>
                                        <th style="width: 15%">Email</th>
                                        <th style="width: 12%">Mobile</th>
                                        <th style="width: 12%">Service</th>
                                        <th style="width: 20%">Message</th>
                                        <th style="width: 8%">Status</th>
                                        <th style="width: 10%">Requested At</th>
                                        <th style="width: 6%" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($appointments as $appointment)
                                        <tr>
                                            <td>{{ $appointment->id }}</td>
                                            <td>{{ $appointment->user ? $appointment->user->name : $appointment->name }}</td>
                                            <td>{{ $appointment->email }}</td>
                                            <td>{{ $appointment->mobile }}</td>
                                            <td>{{ $appointment->service }}</td>
                                            <td class="text-truncate" style="max-width: 200px;" title="{{ $appointment->message }}">
                                                {{ Str::limit($appointment->message, 50) }}
                                            </td>
                                            <td>
                                                @if($appointment->status === 'pending')
                                                    <span class="badge bg-warning text-dark">Pending</span>
                                                @elseif($appointment->status === 'approved')
                                                    <span class="badge bg-success">Approved</span>
                                                @else
                                                    <span class="badge bg-danger">Declined</span>
                                                @endif
                                            </td>
                                            <td>{{ $appointment->created_at->format('Y-m-d H:i') }}</td>
                                            <td class="text-center">
                                                @if($appointment->status === 'pending')
                                                    <form method="POST" action="{{ route('appointments.status', $appointment->id) }}" class="d-inline">
                                                        @csrf @method('PATCH')
                                                        <input type="hidden" name="status" value="approved">
                                                        <button type="submit" class="btn btn-success btn-sm me-1">Approve</button>
                                                    </form>
                                                    <form method="POST" action="{{ route('appointments.status', $appointment->id) }}" class="d-inline">
                                                        @csrf @method('PATCH')
                                                        <input type="hidden" name="status" value="declined">
                                                        <button type="submit" class="btn btn-danger btn-sm">Decline</button>
                                                    </form>
                                                @else
                                                    <em>No actions</em>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center">No appointment requests found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $appointments->links('pagination::bootstrap-5') }}
                        </div>

                        <!-- Footer -->
                        

                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection