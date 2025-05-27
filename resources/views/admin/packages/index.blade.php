@extends('dash')

@section('dash_content')
<div class="container-fluid p-0">
  <div class="row g-0">
    <nav class="col-12 col-md-3 col-lg-2 bg-light position-fixed vh-100" style="top: 70px;">
      {{-- sidebar links here --}}
    </nav>

    <div class="col offset-md-3 offset-lg-2" style="margin-top: 70px;">
      <main class="container" style="max-width: 900px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="mb-0 ms-3">Package List</h2>
          <button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#addPackageModal">
            Add Package
          </button>
        </div>

        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('success_edit'))
          <div class="alert alert-success">{{ session('success_edit') }}</div>
        @endif
        @if(session('success_delete'))
          <div class="alert alert-success">{{ session('success_delete') }}</div>
        @endif

        <div class="card">
          <div class="card-body p-3">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-sm" style="min-width: 900px;">
                <thead class="table-light">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Details</th>
                    <th>Icon</th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($packages as $package)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $package->name }}</td>
                      <td>{{ $package->description }}</td>
                      <td>${{ $package->price }}</td>
                      <td>{{ $package->details }}</td>
                      <td><i class="{{ $package->icon }} fs-4 text-dark"></i></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editPackageModal{{ $package->id }}">Edit</button>
                        <button class="btn btn-sm btn-danger" onclick="confirmDelete({{ $package->id }})">Delete</button>
                        <form id="delete-form-{{ $package->id }}" action="{{ route('admin.packages.destroy', $package->id) }}" method="POST" class="d-none">
                          @csrf @method('DELETE')
                        </form>
                      </td>
                    </tr>

                    {{-- Edit Modal --}}
                    <div class="modal fade" id="editPackageModal{{ $package->id }}" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <form action="{{ route('admin.packages.update', $package->id) }}" method="POST">
                            @csrf @method('PUT')
                            <div class="modal-header">
                              <h5 class="modal-title">Edit Package</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                              <input type="text" name="name" class="form-control mb-2" value="{{ $package->name }}" required>
                              <textarea name="description" class="form-control mb-2" rows="3" required>{{ $package->description }}</textarea>
                              <input type="number" step="0.01" name="price" class="form-control mb-2" value="{{ $package->price }}" required>
                              <textarea name="details" class="form-control mb-2" rows="3">{{ $package->details }}</textarea>
                              <select name="icon" class="form-select">
                                <option value="">— Choose icon —</option>
                                @foreach($iconOptions as $value => $label)
                                  <option value="{{ $value }}" {{ $package->icon == $value ? 'selected' : '' }}>{{ $label }}</option>
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
                      <td colspan="7" class="text-center text-muted">No packages available</td>
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
</div>

{{-- Add Modal --}}
<div class="modal fade" id="addPackageModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('admin.packages.store') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title">Add Package</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
          <textarea name="description" class="form-control mb-2" placeholder="Description" rows="3" required></textarea>
          <input type="number" step="0.01" name="price" class="form-control mb-2" placeholder="Price" required>
          <textarea name="details" class="form-control mb-2" placeholder="Details" rows="3"></textarea>
          <select name="icon" class="form-select">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function confirmDelete(id){
    Swal.fire({
        title:'Delete?',
        text:'This package will be removed!',
        icon:'warning',
        showCancelButton:true,
        confirmButtonColor:'#d33',
        cancelButtonColor:'#3085d6',
        confirmButtonText:'Yes, delete'
    }).then((r)=>{
        if(r.isConfirmed){
            document.getElementById('delete-form-'+id).submit();
        }
    });
}
</script>
@endsection
