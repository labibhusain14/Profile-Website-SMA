@extends('layouts.master')

@section('title', 'SMAN 13 Bandung')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay loop id="bg-video">
            <source src="assets/images/Vidprofil.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <h6>Welcome to</h6>
                            <h2>SMAN 13 Bandung </h2>
                            <p>SMA Negeri (SMAN) 13 Bandung, merupakan salah satu Sekolah Menengah Atas Negeri yang ada di
                                Provinsi Jawa Barat, Indonesia. Didirikan pada tahun 1977 dengan nama awal SMA Negeri
                                Cimindi Cimahi Kabupaten Bandung.</p>
                            <div class="main-button-red">
                                <div><a href="/profile#profil_sekolah">Show More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">

                        @foreach ($datastatus as $stat)
                            <div class="item">
                                <div class="icon">
                                    <img src="storage/images/status/{{ $stat->image }}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>{{ $stat->title }}</h4>
                                    <div class="count-digit">{{ $stat->total }}</div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <div class="section-heading">
                        
                        <h2>Berita Terbaru</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories">
                        <h4>Berita</h4>
                        <ul>
                            @foreach ($data_news as $top_4)
                                <li><a href="/news/{{$top_4->slug}}">{{ $top_4->title }}</a></li>
                            @endforeach
                        </ul>
                        <div class="main-button-red">
                            
                            <a href="/news">Lihat Semua Berita</a>
                        </div>
                    </div>
                </div>
                <style>
                        .thumb {
                            position: relative;
                            width: 100%;
                            height: 0;
                            padding-bottom: 75%; /* Mengatur aspek rasio gambar menjadi 4:3 */
                        }
                        .thumb img {
                            position: absolute;
                            width: 100%;
                            height: 100%;
                            object-fit: cover; /* Mengatur agar gambar diisi sepenuhnya tanpa merubah aspek rasio */
                        }
                        .down-content p {
                            height: 75px; /* Mengatur tinggi subtitle menjadi 75 piksel */
                            overflow: hidden; /* Mengatur agar subtitle yang terlalu panjang akan terpotong */
                            padding: 10px; /* Mengatur padding di sekitar subtitle */
                            text-align: justify; /* Mengatur rata kanan-kiri pada subtitle */
                        }
                    </style>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($data_news as $news)
                            <div class="col-lg-6">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                        </div>
                                        <a href="/news/{{ $news->slug }}"><img
                                                src="storage/images/news_and_articles/{{ $news->banner }}"
                                                alt="New Lecturer Meeting"></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>{{ $news->month }} <span>{{ $news->day }}</span></h6>
                                        </div>
                                        <a href="/news/{{ $news->slug }}">
                                            <h4>{{ $news->title }}</h4>
                                        </a>
                                        <p>{{ $news->subtitle }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="apply-now" id="haha">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>Visi</h3>
                                <p class="text-white">“MEWUJUDKAN SEKOLAH BERPRESTASI, SEHAT, RELIGIUS, DAN BERBUDAYA
                                    LINGKUNGAN”</p>
                                <div class="main-button-red">
                                    <div><a href="/profile#visi">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>Misi</h3>
                                <p class="text-white text-justify"> - Meningkatkan keimanan dan ketaqwaan kepada Tuhan Yang
                                    Maha Esa. <br>
                                    - Meningkatkan kondisi sekolah yang sehat, indah, nyaman, dan peduli terhadap
                                    lingkungan. <br>
                                    - Meningkatkan profesionalisme tenaga pendidik dan tenaga kependidikan.<br>
                                    - Meningkatkan sarana-prasarana penunjang pendidikan. Yang ramah lingkungan. <br>
                                    - Mewujudkan pembelajaran PAIKEMKU (Pembelajaran Aktif, Inovatif, Kreatif, Efektif,
                                    Menyenangkan, Kompetitif dan Unggul).<br>
                                    - Meningkatkan pembelajaran berbasis IT.<br>
                                    - Mengembangkan pembelajaran berbasis bahasa Inggris. <br>
                                    - Meningkatkan budaya belajar, bekerja, dan disiplin, peduli dan berwawasan
                                    lingkungan.<br>
                                    - Mengembangkan potensi, minat, bakat dan keterampilan melalui pengembangan diri. <br>
                                    - Meningkatkan pembinaan dan keikutsertaan dalam berbagai lomba akademik (olimpiade) dan
                                    non akademik (ekstra kurikuler) berbasis lingkungan. <br>
                                    - Mengembangkan pengelolaan sekolah yang transparan, partisipatif, dan akuntabel.</p>
                                <div class="main-button-red">
                                    <div><a href="/profile#misi">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordions is-first-expanded">
                        <h3>Meraih Cita-cita Bisa Lebih Menyenangkan</h3>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Sarana Prasarana Baik</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Sarpras yang mendukung memudahkan pembelajaran serta hasil maksimal.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Computer Based Test</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Ujian menjadi fleksibel dan mudah. Hasilnya pun cepat dan transparan..</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Banyak Pilihan Ekskul</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Memastikan peserta didik dapat menyalurkan bakat non akademiknya.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion last-accordion">
                            <div class="accordion-head">
                                <span>Kegiatan di Luar Kelas</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Menumbuhkan rasa percaya diri, empati, dan kekeluargaan peserta didik.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-courses" id="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Intra & ekstrakulikuler</h2>
                </div>
            </div>
            <style>
    .custom-image {
        width: 100%;
        height: 170px;
        object-fit: cover;
    }

</style>
        </style>
            <div class="col-lg-12">
                <div class="owl-courses-item owl-carousel">
                    @foreach ($data as $index)
                    <div class="item">
                        <img class="img-fluid custom-image" src="storage/images/extracurricular/{{ $index->image }}" >
                        <div class="down-content">
                            <h4>{{ $index->name }} <br>SMAN 13 Bandung</br></h4>
                            <div class="info">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-8">
                                        <div class="main-button-red"><a href="/ekskul#{{ $index->id }}">Show More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>




    <section class="our-facts" id="achievment">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2> Peserta didik SMAN 13 Bandung<br>Diterima PTN</h2>
                        </div>
                        @foreach ($data_achievement as $index => $achievement)
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="count-area-content percentage">
                                            <div class="count-digit2">{{ $achievement->percent }}</div>
                                            <div class="count-title">Tahun {{ $achievement->year }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="video">
                        <video controls id="video-headmaster">
                            <source src="assets/images/kepsek.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="" method="post">
                                <div id="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.893399172895!2d107.5649682!3d-6.903349899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5db71694031%3A0xb4e7a59aa621f403!2sSMAN%2013%20Bandung!5e0!3m2!1sen!2sid!4v1681034205934!5m2!1sen!2sid"
                                        width="100%" height="475px" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-info">
                        <ul>
                            <li>
                                <h6>Phone Number</h6>
                                <span>010-020-0340</span>
                            </li>
                            <li>
                                <h6>Email Address</h6>
                                <span>sman13bdg@sch.edu</span>
                            </li>
                            <li>
                                <h6>Street Address</h6>
                                <span>Jl. Raya Cibeureum No.52, Campaka, Kec. Andir, Kota Bandung, Jawa Barat 40535</span>
                            </li>
                            <li>
                                <h6>Website URL</h6>
                                <span>www.sman13bdg.sch.id</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
            <ul class="social_icon">
                <li><a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a></li>
                <li><a href="#">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a></li>
                <li><a href="#">
                        <ion-icon name="logo-instagram">
                    </a></ion-icon>
                </li>
                <li><a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a></li>
            </ul>
            <p>©2023 SMAN 13 BANDUNG | All Right Reserved</p>
        </footer>
        <div class="out">
            <div class="fade-in">
                <div class="loading_page">
                    <div class="one common"></div>
                    <div class="two common"></div>
                    <div class="three common"></div>
                    <div class="four common"></div>
                    <div class="five common"></div>
                    <div class="six common"></div>
                    <div class="seven common"></div>
                    <div class="eight common"></div>
                </div>
                <div class="bar">
                    <div class="progress"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
