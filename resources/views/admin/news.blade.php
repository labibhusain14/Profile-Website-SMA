@extends('admin.master')

@section('status5', 'active')

@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="card bg-secondary">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <span><i class="bi bi-table me-2"></i>News & Articles List</span>
                </div>
                <div class="d-flex align-items-center">
                    <div class="input-group">
                        <input type="text" id="search-input" class="form-control bg-white border-0 flex-grow-1"
                            placeholder="Find News or Articles ...">
                        <button class="btn bg-dark" type="button">
                            <i class="bi bi-search text-white"></i>
                        </button>
                    </div>
                    <button class="btn rounded-circle ms-2" type="button" style="background-color: #343a40;"
                        data-toggle='modal' data-target='#add_news'>
                        <i class="bi bi-plus text-white"></i>
                    </button>
                    <div class="modal fade" id="add_news" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-warning">
                                    <h5 class="modal-title text-white" id="exampleModalLabel">Add News or Articles</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="news-add" method="POST" id="form_create" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row mb-3">
                                            <label for="title" class="col-sm-4 col-form-label">Title</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="title" id="title"
                                                    placeholder="Enter a News Title" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="slug" class="col-sm-4 col-form-label">Slug</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" readonly type="text" name="slug"
                                                    id="slug" placeholder="URL" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <label for="tags" class="col-sm-4 col-form-label">Tags</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="tags"
                                                    placeholder="Enter Tags">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="banner" class="col-sm-4 col-form-label">Choose a Banner</label>
                                            <input class="form-control form-control-sm bg-dark" id="banner"
                                                name="banner" type="file">
                                        </div>
                                        <div class="mt-3">
                                            <label for="date" class="col-sm-4 col-form-label">Published Date</label>
                                            <div class="col-sm-12">
                                                <input class="form-control date-input" type="date" name="date"
                                                    value="{{ $timenow }}">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="news_subject" class="col-sm-4 col-form-label">Isi Berita</label>
                                            <div class="col-sm-12">
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" name="news_subject" placeholder="Isi berita" style="height: 150px;" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info" name="add" id="add"
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
                            <th scope="col">Banner</th>
                            <th scope="col">Title</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Date</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $news)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><img src="storage/images/news_and_articles/{{ $news->banner }}"
                                        style="width: 100px; height: 100px;"></td>
                                <td>{{ $news->title }}</td>
                                <td>{{ $news->tags }}</td>
                                <td>{{ $news->date_publish }}</td>
                                <td>{{ $news->subtitle }}</td>
                                <td>
                                    <div class=" mb-4 ">
                                        <a href="#" class="d-none d-sm-inline-block btn btn-sm shadow-sm text-white"
                                            data-toggle='modal' data-target='#updateModal{{ $news->id }}'
                                            style="background-color: #182f96;">Update</a>
                                        <a class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm delete-button"
                                            data-toggle="modal" data-target="#deleteModal{{ $news->id }}"
                                            style="background-color: #c40c0c;">Delete</a>
                                        <div class="modal fade" id="updateModal{{ $news->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-warning">
                                                        <h5 class="modal-title text-white" id="exampleModalLabel">Update
                                                            News or Articles Data</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="news-update/{{ $news->id }}" method="POST"
                                                            id="form_update{{ $news->id }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group row mb-3">
                                                                <label for="title" class="col-sm-12 col-form-label"
                                                                    style="text-align : left;">Title</label>
                                                                <div class="col-sm-12">
                                                                    <input class="form-control" type="text"
                                                                        name="title" placeholder="Masukkan Title News"
                                                                        id="title" value="{{ $news->title }}"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <label for="slug" class="col-sm-12 col-form-label"
                                                                    style="text-align : left;">Slug</label>
                                                                <div class="col-sm-12">
                                                                    <input class="form-control" readonly type="text"
                                                                        name="slug" id="slug" placeholder="URL"
                                                                        value="{{ $news->slug }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mt-3">
                                                                <label for="tags" class="col-sm-12 col-form-label"
                                                                    style="text-align : left;">Tags</label>
                                                                <div class="col-sm-12">
                                                                    <input class="form-control" type="text"
                                                                        name="tags" placeholder="Masukkan Tags"
                                                                        value="{{ $news->tags }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mt-3">
                                                                <label for="banner" class="col-sm-12 col-form-label"
                                                                    style="text-align : left;">Pilih Banner</label>
                                                                <div class="col-sm-12">
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file"
                                                                                class="custom-file-input" name="banner"
                                                                                id="formFileSm">
                                                                            <label class="custom-file-label"
                                                                                for="formFileSm">
                                                                                {{ $news->banner != null ? basename($news->banner) : 'Choose File' }}
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-3">
                                                                <label for="date_publish" class="col-sm-12 col-form-label"
                                                                    style="text-align : left;">Tanggal Publish</label>
                                                                <div class="col-sm-12">
                                                                    <input class="form-control date-input" type="date"
                                                                        name="date_publish" value="{{ $timenow }}">
                                                                </div>
                                                            </div>
                                                            <div class="mt-3">
                                                                <label for="news_subject"
                                                                    class="col-sm-12 col-form-label" style="text-align : left;">Isi Berita</label>
                                                                <div class="col-sm-12">
                                                                    <!-- <textarea class="form-control" type="text" name="news_subject" placeholder="Isi berita" value="{{ $news->news_subject }}"
                                                                        style="height: 150px;" required></textarea> -->
                                                                        <textarea class="form-control" type="text" name="news_subject" placeholder="Isi berita" required style="height: 150px;">{{ $news->news_subject }}</textarea>
                                                                        
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-warning" name="update"
                                                            id="update"
                                                            form="form_update{{ $news->id }}">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="deleteModal{{ $news->id }}" tabindex="-1"
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
                                                            data-dismiss="modal">Cancel</button>
                                                        <form action="news-delete/{{ $news->id }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger"
                                                                id="confirmDelete">Delete</button>
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

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })
    </script>
@endsection
