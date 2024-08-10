<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="https://www.sman13bdg.sch.id/wp-content/uploads/2021/05/LOGO.png">
    <title>SMAN 13 Bandung</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-info" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar">
                <a href="/admin" class="navbar-brand mx-4 mb-4">
                    <h6 class="text-info"><img class="rounded-circle me-2"
                            src="https://www.dbl.id/uploads/school/7019/813-SMAN_13_BANDUNG.png" alt=""
                            style="width: 45px; height: 45px;">SMAN 13 Bandung</h6>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle"
                            src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg"
                            alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Admin-1</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/admin" class="nav-item nav-link @yield('status1')"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="/teacher-admin" class="nav-item nav-link @yield('status2')"><i class="fa fa-laptop me-2"></i>Teacher & Staff</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle @yield('status2')"
                            data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Teacher & Staff</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="/teacher-admin" class="dropdown-item @yield('status3') ">Teacher</a>
                            <a href="/staff-admin" class="dropdown-item @yield('status4')">Staff</a>
                        </div>
                    </div> -->
                    <a href="/news-admin" class="nav-item nav-link @yield('status5')"><i
                            class="fa fa-keyboard me-2"></i>News & Article</a>
                    <a href="/extracurricular-admin" class="nav-item nav-link @yield('status6')"><i
                            class="fa fa-table me-2"></i>Intra & Ekskul</a>
                    <a href="/achievement-admin" class="nav-item nav-link @yield('status7')"><i
                            class="fa fa-chart-bar me-2"></i>Achievement</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-white sticky-top px-4 py-0">
                <a href="/admin" class="navbar-brand d-flex d-lg-none me-4">
                    <h6 class="text-info"><img class="rounded-circle me-2"
                            src="https://www.dbl.id/uploads/school/7019/813-SMAN_13_BANDUNG.png" alt=""
                            style="width: 40px; height: 40px;">SMAN 13 Bandung</h6>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars text-info"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2"
                                src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg"
                                alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="/logout" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            @yield('content')

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">SMAN 13 Bandung</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="#">UPI</a>
                            <br>Distributed By: <a href="#" target="_blank">UPI</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-info btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        var myModalBtn = document.getElementById('myModalBtn');
        var myModal = document.getElementById('myModal');

        myModalBtn.addEventListener('click', function() {
            $('#myModal').modal('show');
        });
    </script>

    <script>
        // Dapatkan elemen input pencarian
        var searchInput = document.getElementById('search-input');

        // Tambahkan event listener untuk input pencarian
        searchInput.addEventListener('input', function() {
            var searchText = searchInput.value.toLowerCase(); // Ambil teks pencarian dan ubah ke huruf kecil

            var table = document.querySelector('.table'); // Dapatkan tabel
            var rows = table.querySelectorAll('tbody tr'); // Dapatkan semua baris di dalam tbody

            // Loop melalui setiap baris dan sembunyikan/munculkan berdasarkan pencarian
            rows.forEach(function(row) {
                var name = row.querySelector('td:nth-child(3)').textContent.toLowerCase(); // Nama
                var subject = row.querySelector('td:nth-child(4)').textContent.toLowerCase(); // Deskripsi
                var number = row.querySelector('td:nth-child(1)').textContent.toLowerCase(); // Deskripsi
                var content = row.querySelector('td:nth-child(5)').textContent.toLowerCase(); // Deskripsi
                var desc = row.querySelector('td:nth-child(6)').textContent.toLowerCase(); // Deskripsi

                if (name.includes(searchText) || subject.includes(searchText) || number.includes(searchText) || content.includes(searchText) || desc.includes(
                        searchText)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
