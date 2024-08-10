@extends('admin.master')

@section('status6', 'active')

@section('content')
<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="card bg-secondary">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <span><i class="bi bi-table me-2"></i>Extracurricular & Intracurricular List</span>
            </div>
            <div class="d-flex align-items-center">
                <div class="input-group">
                    <input type="text" id="search-input" class="form-control bg-white border-0 flex-grow-1" placeholder="Find Extra or Intra Curricular ...">
                    <button class="btn bg-dark" type="button">
                        <i class="bi bi-search text-white"></i>
                    </button>
                </div>
                <button class="btn rounded-circle ms-2" type="button" style="background-color: #343a40;" data-toggle='modal' data-target='#add_teacher'>
                    <i class="bi bi-plus text-white"></i>
                </button>
                <div class="modal fade" id="add_teacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <h5 class="modal-title text-white" id="exampleModalLabel">Add Extra or Intra Curricular Data</h5>
                                <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="extracurricular-add" method="POST" id="form_create" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row mb-3">
                                        <label for="name" class="col-sm-4 col-form-label">Name</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" type="text" name="name" placeholder="Enter Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="description" class="col-sm-4 col-form-label">Description</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="description" placeholder="Enter Description" required style="height: 150px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="image" class="col-sm-4 col-form-label">Choose a Photo</label>
                                        <input class="form-control form-control-sm bg-dark" id="formFileSm" name="image" type="file">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-info" name="add" id="add" form="form_create">Add</button>
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
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $ekskul)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><img src="storage/images/extracurricular/{{ $ekskul->image }}" style="width: 150px; height: 120px;"></td>
                        <td>{{ $ekskul->name }}</td>
                        <td>{{ $ekskul->description }}</td>
                        <td>
                            <div class="justify-content-between mb-4">
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm shadow-sm text-white" data-toggle='modal' data-target='#updateModal{{ $ekskul->id }}' style="background-color: #182f96;">Update</a>
                                <a class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm delete-button" data-toggle="modal" data-target="#deleteModal{{ $ekskul->id }}" style="background-color: #c40c0c;">Delete</a>
                                <div class="modal fade" id="updateModal{{ $ekskul->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Update Extra or Intra Curricular Data</h5>
                                                <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="extracurricular-update/{{ $ekskul->id }}" method="POST" id="form_update{{ $ekskul->id }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group row mb-3">
                                                        <label for="name" class="col-sm-4 col-form-label" style="text-align:left;">Name</label>
                                                        <div class="col-sm-12">
                                                            <input class="form-control" type="text" name="name" placeholder="Enter Name" value="{{ $ekskul->name }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-3">
                                                        <label for="description" class="col-sm-4 col-form-label" style="text-align:left;">Description</label>
                                                        <div class="col-sm-12">
                                                            <textarea class="form-control" type="text" name="description" placeholder="Enter Description" required style="height: 150px;">{{ $ekskul->description }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-3">
                                                        <label for="image" class="col-sm-4 col-form-label" style="text-align:left;">Choose a Photo</label>
                                                        <div class="col-sm-12">
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="image" id="formFileSm">
                                                                    <label class="custom-file-label" for="formFileSm">
                                                                        {{ $ekskul->image != null ? basename($ekskul->image) : 'Choose File' }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info" name="update" id="update" form="form_update{{ $ekskul->id }}">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="deleteModal{{ $ekskul->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                                                <form action="extracurricular-delete/{{ $ekskul->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="sumbit" class="btn btn-danger" id="confirmDelete">Delete</button>
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