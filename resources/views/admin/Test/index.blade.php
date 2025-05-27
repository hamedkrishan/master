@extends('dash')

@section('dash_content')
<div class="container-fluid p-0">
    <div class="row g-0">
        <!-- Sidebar is assumed to be in layout -->

        <!-- Main Content -->
        <main class="col offset-md-3 offset-lg-2" style="margin-top: 70px;">
            <div class="container" style="max-width: 900px;">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0 ms-3">Test List</h2>
                    <button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#addTestModal">
                        Add Test
                    </button>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card">
                    <div class="card-body p-3">
                        <table class="table table-bordered table-hover table-sm">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Icon</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($tests as $test)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $test->name }}</td>
                                        <td>${{ $test->price }}</td>
                                        <td>{{ Str::limit($test->description, 60) }}</td>
                                        <td><i class="{{ $test->icon_class }} fs-4 text-dark"></i></td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editTestModal{{ $test->id }}">
                                                Edit
                                            </button>

                                            <button type="button" class="btn btn-sm btn-danger"
                                                    onclick="confirmDelete({{ $test->id }})">
                                                Delete
                                            </button>

                                            <form id="delete-form-{{ $test->id }}"
                                                  action="{{ route('tests.destroy', $test->id) }}"
                                                  method="POST" class="d-none">
                                                @csrf @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>

                                    {{-- Edit Modal --}}
                                    <div class="modal fade" id="editTestModal{{ $test->id }}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ route('tests.update', $test->id) }}" method="POST">
                                                    @csrf @method('PUT')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Test</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="text" name="name" class="form-control mb-2"
                                                               value="{{ $test->name }}" required>
                                                        <input type="number" step="0.01" name="price" class="form-control mb-2"
                                                               value="{{ $test->price }}" required>
                                                        <textarea name="description" class="form-control mb-2"
                                                                  rows="3" required>{{ $test->description }}</textarea>

                                                        <select name="icon_class" class="form-select">
                                                            <option value="">— Choose icon —</option>
                                                            @foreach($iconOptions as $value => $label)
                                                                <option value="{{ $value }}"
                                                                    {{ $test->icon_class == $value ? 'selected' : '' }}>
                                                                    {{ $label }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary">Update</button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">No tests available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

{{-- Modals Below --}}

{{-- Add Modal --}}
<div class="modal fade" id="addTestModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('tests.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Test</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
                    <input type="number" step="0.01" name="price" class="form-control mb-2" placeholder="Price" required>
                    <textarea name="description" class="form-control mb-2" placeholder="Description" rows="3" required></textarea>

                    <select name="icon_class" id="iconPicker" class="form-select">
                        <option value="">— Choose icon —</option>
                        @foreach($iconOptions as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'This test will be deleted!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    });
}
</script>

@if(session('success_edit'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Updated!',
        text: '{{ session("success_edit") }}',
        timer: 2000,
        showConfirmButton: false
    });
</script>
@endif

@endsection