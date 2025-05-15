@extends('dash')

@section('dash_content')
<div class="container mt-5" style="max-width: 900px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0" style="margin-left: 20px;">Package List</h2>
        <button class="btn btn-success" style="margin-right: 10px;" data-toggle="modal" data-target="#addPackageModal">Add Package</button>
    </div>

    <div class="card">
        <div class="card-body p-3">
            <table class="table table-bordered table-hover table-sm" style="table-layout: fixed; width: 100%;">
                <thead class="thead-light">
                    <tr>
                        <th style="width: 35px; white-space: normal; word-wrap: break-word;">#</th>
                        <th style="width: 120px; white-space: normal; word-wrap: break-word;">Name</th>
                        <th style="width: 180px; white-space: normal; word-wrap: break-word;">Description</th>
                        <th style="width: 70px; white-space: normal; word-wrap: break-word;">Price</th>
                        <th style="width: 220px; white-space: normal; word-wrap: break-word;">Details</th>
                        <th style="width: 150px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($packages as $package)
                        <tr>
                            <td style="white-space: normal; word-wrap: break-word;">{{ $loop->iteration }}</td>
                            <td style="white-space: normal; word-wrap: break-word;">{{ $package->name }}</td>
                            <td style="white-space: normal; word-wrap: break-word;">{{ $package->description }}</td>
                            <td style="white-space: normal; word-wrap: break-word;">${{ $package->price }}</td>
                            <td style="white-space: normal; word-wrap: break-word;">{{ $package->details }}</td>
                            <td>
                                <button class="btn btn-sm btn-primary mb-1" data-toggle="modal" data-target="#editPackageModal{{ $package->id }}">Edit</button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $package->id }})">Delete</button>
                                <form id="delete-form-{{ $package->id }}" action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>

                        <!-- Edit Package Modal -->
                        <div class="modal fade" id="editPackageModal{{ $package->id }}" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <form action="{{ route('packages.update', $package->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                  <h5 class="modal-title">Edit Package</h5>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                  <input type="text" name="name" class="form-control mb-2" value="{{ $package->name }}" required>
                                  <textarea name="description" class="form-control mb-2" rows="3" required>{{ $package->description }}</textarea>
                                  <input type="number" name="price" class="form-control mb-2" value="{{ $package->price }}" required>
                                  <textarea name="details" class="form-control mb-2" rows="3">{{ $package->details }}</textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary">Update</button>
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">No packages available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Package Modal -->
<div class="modal fade" id="addPackageModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="{{ route('admin.packages.store') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title">Add Package</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
          <textarea name="description" class="form-control mb-2" placeholder="Description" rows="3" required></textarea>
          <input type="number" name="price" class="form-control mb-2" placeholder="Price" required>
          <textarea name="details" class="form-control mb-2" placeholder="Details" rows="3"></textarea>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap + jQuery -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You will not be able to recover this package!',
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
@endsection
