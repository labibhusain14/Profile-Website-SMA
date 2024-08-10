@extends('admin.master')

@section('status8', 'active')

@section('content')
<!-- Sale & Revenue Start -->
<div div class="container-fluid pt-4 px-4">
    <div class="bg-secondary">
        <div class="card-header text-white" style="background-color: #343a40;">
            <span><i class=" bi bi-table me-2"></i>Peserta didik SMAN 13 Bandung Yang diterima PTN 4 Tahun Terakhir</span>
        </div>
        <div class="row g-4  rounded p-4 ">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-dark rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2 text-white">2019</p>
                        <h6 class="mb-0">90%</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-dark rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2 text-white">2020</p>
                        <h6 class="mb-0">80%</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-dark rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2 text-white">2021</p>
                        <h6 class="mb-0">75%</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-dark rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2 text-white">2022</p>
                        <h6 class="mb-0">95%</h6>
                    </div>
                </div>
            </div>
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
        <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Tentang Sekolah</h6>
                        <a href="">Show All</a>
                    </div> -->
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
                    <tr>
                        <td>1</td>
                        <td>Jumlah Kelas</td>
                        <td>24</td>
                        <td>
                            <div class="justify-content-between mb-4">
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm" data-toggle='modal' data-target='#exampleModal2'>Edit</a>
                                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm" onclick="return confirm('Yakin mau delete data?')" class="btn btn-danger">Delete</a> -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data Jumlah Kelas</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method="get" id="form_edit">
                                                    <div class="form-group row mb-3">
                                                        <label for="kelas" class="col-sm-2 col-form-label">Nama</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="kelas" placeholder="Masukkan Nama Atribut" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-3">
                                                        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="kelas" placeholder="Masukkan Jumlah Kelas" required>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info" name="edit" id="edit" form="form_edit">Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Prestasi</td>
                        <td>50</td>
                        <td>
                            <div class="justify-content-between mb-4">
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm" data-toggle='modal' data-target='#exampleModal3'>Edit</a>
                                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data Prestasi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method="get" id="form_edit">

                                                    <div class="form-group">
                                                        <label for="prestasi">Prestasi</label>
                                                        <input class="form-control" type="text" name="prestasi" placeholder="Masukkan Jumlah Prestasi" required>

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info" name="edit" id="edit" form="form_edit">Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Staff Pengajar & TU</td>
                        <td>56</td>
                        <td>
                            <div class="justify-content-between mb-4">
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm" data-toggle='modal' data-target='#exampleModal4'>Edit</a>
                                <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data Jumlah Kelas</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method="get" id="form_edit">

                                                    <div class="form-group">
                                                        <label for="sptu">Staff Pengajar & TU</label>
                                                        <input class="form-control" type="text" name="sptu" placeholder="Masukkan Jumlah Staff Pengajar & TU" required>

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info" name="edit" id="edit" form="form_edit">Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Ekstrakurikuler</td>
                        <td>25</td>
                        <td>
                            <div class="justify-content-between mb-4">
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm" data-toggle='modal' data-target='#exampleModal5'>Edit</a>
                                <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data Jumlah Kelas</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method="get" id="form_edit">

                                                    <div class="form-group">
                                                        <label for="ekskul">Ekstrakurikuler</label>
                                                        <input class="form-control" type="text" name="ekskul" placeholder="Masukkan Jumlah Ekstrakulikuler" required>

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info" name="edit" id="edit" form="form_edit">Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Total Siswa Aktif</td>
                        <td>797</td>
                        <td>
                            <div class="justify-content-between mb-4">
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm" data-toggle='modal' data-target='#exampleModal6'>Edit</a>
                                <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data Jumlah Kelas</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="#" method="get" id="form_edit">

                                                    <div class="form-group">
                                                        <label for="siswa">Siswa</label>
                                                        <input class="form-control" type="text" name="siswa" placeholder="Masukkan Jumlah Siswa" required>

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info" name="edit" id="edit" form="form_edit">Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->
@endsection