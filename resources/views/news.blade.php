@extends('layouts/master')

@section('title', 'SMAN 13 Bandung-Profile')

@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Here are our news</h6>
                    <h2>NEWS of SMAN 13 Bandung</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="filters">
                                <ul>
                                    <li data-filter="*" class="active">All NEWS</li>
                                    <li data-filter=".soon">Soon</li>
                                    <li data-filter=".imp">Important</li>
                                    <li data-filter=".att">Attractive</li>
                                </ul>
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
                        <div class="col-lg-12">
                            <div class="row grid">
                                @foreach ($data as $index => $theNews)
                                    <div class="col-lg-4 templatemo-item-col all {{ $theNews->tags }}">
                                        <div class="meeting-item">
                                            <div class="thumb">
                                                <a href="/news/{{ $theNews->slug }}"><img
                                                        src="storage/images/news_and_articles/{{ $theNews->banner }}" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="down-content">
                                                <div class="date">
                                                    <h6>{{ $theNews->month }}
                                                        <span>{{ $theNews->day }}</span>
                                                    </h6>
                                                </div>
                                                <a href="/news/{{ $theNews->slug }}">
                                                    <h4>{{ $theNews->title }}</h4>
                                                </a>
                                                <p>{{ $theNews->subtitle }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Copyright © 2023 SMAN 13 BANDUNG.</p>

        </div>
    </section>
@endsection
