@extends('admin.master')

@section('status2', 'active')

@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="card bg-secondary">
            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #343a40;">
                <div class="text-white ">
                    <span><i class=" bi bi-table me-2"></i>Teacher & Staff List</span>
                </div>
                <div class="d-flex align-items-center">
                    <div class="input-group">
                        <input type="text" id="search-input" class="form-control bg-white border-0 flex-grow-1"
                            placeholder="Find Teacher or Staff ...">
                        <button class="btn bg-dark" type="button">
                            <i class="bi bi-search text-white"></i>
                        </button>
                    </div>
                    <button class="btn rounded-circle ms-2 bg-dark" type="button" data-toggle='modal'
                        data-target='#add_teacher'>
                        <i class="bi bi-plus text-white"></i>
                    </button>
                    <div class="modal fade" id="add_teacher" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-success">
                                    <h5 class="modal-title text-white" id="exampleModalLabel">Add Teacher or Staff Data</h5>
                                    <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="teacher-add" method="POST" id="form_create"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row mb-3">
                                            <label for="ein" class="col-sm-4 col-form-label">NIP</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="ein"
                                                    placeholder="Enter NIP" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="name" class="col-sm-4 col-form-label">Nama</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="name"
                                                    placeholder="Enter Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="gender" required>
                                                    <option value="">Choose a Gender</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="photo" class="col-sm-4 col-form-label">Choose a Photo</label>
                                            <input class="form-control form-control-sm bg-dark" id="formFileSm"
                                                name="photo" type="file" required>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <label for="subject_id" class="col-sm-4 col-form-label">Subject</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="subject_id" required>
                                                    <option value="">Choose a Subject</option>
                                                    @foreach ($data1 as $subject)
                                                        <option value='{{ $subject->id }}'>
                                                            {{ $subject->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <label for="facebook" class="col-sm-4 col-form-label">Facebook</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="facebook"
                                                    placeholder="Enter Username Facebook">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="instagram" class="col-sm-4 col-form-label">Instagram</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="instagram"
                                                    placeholder="Enter Username Instagram">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="email" name="email"
                                                    placeholder="Enter Email">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" name="add" id="add"
                                        form="form_create">Add</button>
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
                            <th scope="col">Foto</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <!-- <th scope="col">Jenis Kelamin</th> -->
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Facebook</th>
                            <th scope="col">Instagram</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $teacher)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><img src="storage/images/teacher_and_staff/{{ $teacher->photo }}"
                                        style="width: 200px; height: 200px;"></td>
                                <td>{{ $teacher->ein }}</td>
                                <td>{{ $teacher->name }}</td>
                                <!-- <td>{{ $teacher->gender }}</td> -->
                                <td>{{ $teacher->subject_name }}</td>
                                <td>{{ $teacher->facebook }}</td>
                                <td>{{ $teacher->instagram }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>
                                    <div class="justify-content-between mb-4">
                                        <button href="#"
                                            class="d-none d-sm-inline-block btn btn-sm shadow-sm text-white me-2"
                                            data-toggle='modal' data-target='#updateModal{{ $teacher->id }}'
                                            style="background-color: #182f96;">Edit</button>
                                        <button
                                            class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm delete-button"
                                            data-toggle="modal" data-target="#deleteModal{{ $teacher->id }}"
                                            style="background-color: #c40c0c;">Delete</button>
                                        <div class="modal fade" id="updateModal{{ $teacher->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-warning">
                                                        <h5 class="modal-title text-white" id="exampleModalLabel">Edit
                                                            Data Guru</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="teacher-update/{{ $teacher->id }}" method="POST"
                                                            id="form_update{{ $teacher->id }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group row mb-3">
                                                                <label for="ein" class="col-sm-12 col-form-label"
                                                                    style="text-align : left;">NIP</label>
                                                                <div class="col-sm-12">
                                                                    <input class="form-control" type="text"
                                                                        name="ein" placeholder="Masukkan NIP"
                                                                        value="{{ $teacher->ein }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mt-3">
                                                                <label for="name" class="col-sm-12 col-form-label"
                                                                    style="text-align : left;">Nama</label>
                                                                <div class="col-sm-12">
                                                                    <input class="form-control" type="text"
                                                                        name="name" placeholder="Masukkan Nama"
                                                                        value="{{ $teacher->name }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mt-3">
                                                                <label for="gender" class="col-sm-12 col-form-label"
                                                                    style="text-align : left;">Gender</label>
                                                                <div class="col-sm-12">
                                                                    <select class="form-control" name="gender" required>
                                                                        <option value="">Pilih Gender</option>
                                                                        <option value="Laki-laki"
                                                                            @if ($teacher->gender == 'Laki-laki') selected = 'selected' @endif>
                                                                            Laki-laki</option>
                                                                        <option value="Perempuan"
                                                                            @if ($teacher->gender == 'Perempuan') selected = 'selected' @endif>
                                                                            Perempuan</option>
                                                                        <!-- Tambahkan opsi lainnya di sini -->
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="mt-3">
                                                                <label for="photo" class="col-sm-12 col-form-label"
                                                                    style="text-align : left;">Pilih Foto</label>
                                                                <div class="col-sm-12">
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file"
                                                                                class="custom-file-input" name="photo"
                                                                                id="formFileSm">
                                                                            <label class="custom-file-label"
                                                                                for="formFileSm">
                                                                                {{ $teacher->photo != null ? basename($teacher->photo) : 'Choose File' }}
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mt-3">
                                                                <label for="id_subject" class="col-sm-12 col-form-label"
                                                                    style="text-align : left;">Mata Pelajaran</label>
                                                                <div class="col-sm-12">
                                                                    <select class="form-control" name="subject_id"
                                                                        required>
                                                                        <option value="">Pilih Mata Pelajaran
                                                                        </option>
                                                                        @foreach ($data1 as $subject)
                                                                            <option value='{{ $subject->id }}'
                                                                                @if ($teacher->subject_name == $subject->name) selected = 'selected' @endif>
                                                                                {{ $subject->name }}
                                                                            </option>
                                                                        @endforeach
                                                                        <!-- Tambahkan opsi lainnya di sini -->
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="form-group
                                                                                row mt-3">
                                                                <label for="facebook" class="col-sm-12 col-form-label"
                                                                    style="text-align : left;">Facebook</label>
                                                                <div class="col-sm-12">
                                                                    <input class="form-control" type="text"
                                                                        name="facebook"
                                                                        placeholder="Masukkan Akun facebook"
                                                                        value="{{ $teacher->facebook }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mt-3">
                                                                <label for="instagram" class="col-sm-12 col-form-label"
                                                                    style="text-align : left;">Instagram</label>
                                                                <div class="col-sm-12">
                                                                    <input class="form-control" type="text"
                                                                        name="instagram"
                                                                        placeholder="Masukkan Akun Instagram"
                                                                        value="{{ $teacher->instagram }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mt-3">
                                                                <label for="email" class="col-sm-12 col-form-label"
                                                                    style="text-align : left;">Email</label>
                                                                <div class="col-sm-12">
                                                                    <input class="form-control" type="email"
                                                                        name="email" placeholder="Masukkan Email"
                                                                        value="{{ $teacher->email }}">
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-info" name="edit"
                                                            id="edit"
                                                            form="form_update{{ $teacher->id }}">Edit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="deleteModal{{ $teacher->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger">
                                                        <h5 class="modal-title text-white" id="deleteModalLabel">
                                                            Konfirmasi Penghapusan</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus guru ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Batal</button>
                                                        <form action="teacher-delete/{{ $teacher->id }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger"
                                                                id="confirmDelete">Hapus</button>
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
