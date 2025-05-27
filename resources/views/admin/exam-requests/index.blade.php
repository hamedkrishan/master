@extends('dash')

@section('dash_content')
<div class="container-fluid p-0">
    <div class="row g-0">
        <main class="col offset-md-3 offset-lg-2" style="margin-top: 70px;">
            <div class="container" style="max-width: 900px;">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0 ms-3">Exam Requests</h2>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card">
                    <div class="card-body p-3">

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-sm align-middle mb-0" style="min-width: 1200px;">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Type</th>
                                        <th>Item</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($requests as $request)
                                        <tr>
                                            <td>{{ $request->id }}</td>
                                            <td>{{ $request->user->name ?? 'Unknown' }}</td>
                                            <td>{{ ucfirst($request->type) }}</td>
                                            <td>
                                                @if($request->type === 'test')
                                                    {{ $request->test->name ?? 'Deleted Test' }}
                                                @elseif($request->type === 'package')
                                                    {{ $request->package->name ?? 'Deleted Package' }}
                                                @endif
                                            </td>
                                            <td>{{ $request->date }}</td>
                                            <td>{{ $request->time }}</td>
                                            <td>
                                                @if($request->status === 'approved')
                                                    <span class="badge bg-success">Approved</span>
                                                @elseif($request->status === 'rejected')
                                                    <span class="badge bg-danger">Rejected</span>
                                                @else
                                                    <span class="badge bg-warning text-dark">Pending</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if($request->status === 'pending')
                                                    <form method="POST" action="{{ route('exam-requests.approve', $request->id) }}" class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success btn-sm me-1">Approve</button>
                                                    </form>
                                                    <form method="POST" action="{{ route('exam-requests.reject', $request->id) }}" class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                                                    </form>
                                                @else
                                                    <em>No actions</em>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">No exam requests found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            {{ $requests->links('pagination::bootstrap-5') }}
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
