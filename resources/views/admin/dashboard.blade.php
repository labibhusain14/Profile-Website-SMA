@extends('admin.master')

@section('status1', 'active')

@section('content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">

    <div class="bg-secondary">
        <div class="card-header text-white" style="background-color: #343a40;">
            <span><i class=" bi bi-table me-2"></i></span> Peserta Didik SMAN 13 Bandung Yang Diterima PTN
        </div>
        <div class="row g-4  rounded p-4">
            @foreach($data1 as $index => $achievement)
            <div class="col-sm-6 col-xl-3">
                <div class="bg-dark rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2 text-white">{{ $achievement->year }}</p>
                        <h6 class="mb-0">{{ $achievement->percent }}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->


<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="card bg-secondary">
        <div class="card-header text-white" style="background-color: #343a40;">
            <span><i class="bi bi-table me-2"></i></span> Tentang Sekolah
        </div>
        <div class="card-body d-flex align-items-center justify-content-between mb-4 text-center">
            <table class="table table-striped data-table table-bordered" style="width: 100%">
                <thead>
                    <tr class="text-white">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data2 as $index => $status)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $status->title }}</td>
                        <td>{{ $status->total }}</td>
                        <td>
                            <div class="justify-content-between mb-3">
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm" data-toggle='modal' data-target='#updateModal{{ $status->id }}'>Update</a>
                                <div class="modal fade" id="updateModal{{ $status->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Update Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="dashboard-update/{{ $status->id }}" method="POST" id="form_update{{ $status->id }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group row mb-3">
                                                        <label for="{{ $status->title }}" class="col-sm-12 col-form-label" style="text-align : left;">{{ $status->title }}</label>
                                                        <div class="col-sm-12">
                                                            <input class="form-control" type="text" name="total" placeholder="Enter Data" value="{{ $status->total }}" required>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info" name="edit" id="edit" form="form_update{{ $status->id }}">Update</button>
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