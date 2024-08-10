@extends('admin.master')

@section('status7', 'active')

@section('content')
<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="card bg-secondary">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <span><i class="bi bi-table me-2"></i>Achievement List</span>
            </div>
            <div class="d-flex align-items-center">
                <div class="input-group">
                    <input type="text" id="search-input" class="form-control bg-white border-0 flex-grow-1" placeholder="Find Achievement ...">
                    <button class="btn bg-dark" type="button">
                        <i class="bi bi-search text-white"></i>
                    </button>
                </div>
                <button class="btn rounded-circle ms-2" type="button" style="background-color: #343a40;" data-toggle='modal' data-target='#add_achievement'>
                    <i class="bi bi-plus text-white"></i>
                </button>
                <div class="modal fade" id="add_achievement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <h5 class="modal-title text-white" id="exampleModalLabel">Add Achievement Data</h5>
                                <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="achievement-add" method="post" id="form_create">
                                    @csrf
                                    <div class="form-group row mb-3">
                                        <label for="kelas" class="col-sm-3 col-form-label">Year</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="year" placeholder="Enter Year" required>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="kelas" class="col-sm-3 col-form-label">Percentage</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="percent" placeholder="Enter Percentage" required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-info" name="create" id="create" form="form_create">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body d-flex align-items-center justify-content-between mb-4 text-center">
            <table class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr class="text-white">
                        <th scope="col">No</th>
                        <th scope="col">Year</th>
                        <th scope="col">Percentage</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $achievement)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $achievement->year }}</td>
                        <td>{{ $achievement->percent }}</td>
                        <td>
                            <div class="justify-content-between mb-4">
                                <a class="d-none d-sm-inline-block btn btn-sm shadow-sm text-white" data-toggle="modal" data-target="#updateModal{{ $achievement->id }}" style="background-color: #182f96;">Update</a>
                                <a class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm delete-button" data-toggle="modal" data-target="#deleteModal{{ $achievement->id }}" style="background-color: #c40c0c;">Delete</a>
                                <div class="modal fade" id="updateModal{{ $achievement->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Update Achievement Data</h5>
                                                <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="achievement-update/{{ $achievement->id }}" method="POST" id="form_update{{ $achievement->id }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group row mb-3">
                                                        <label for="year" class="col-sm-3 col-form-label">Year</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" type="number" name="year" placeholder="Enter Year" min="1900" max="9999" value="{{ $achievement->year}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-3">
                                                        <label for="percentage" class="col-sm-3 col-form-label">Percentage</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" type="number" name="percent" placeholder="Enter Percentage" min="0" max="100" value="{{ $achievement->percent}}" required>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info" name="update" id="update" form="form_update{{ $achievement->id }}">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="deleteModal{{ $achievement->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h5 class="modal-title text-white" id="deleteModalLabel">Delete Confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to delete this data?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <form action="achievement-delete/{{ $achievement->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger" id="confirmDelete">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->
@endsection