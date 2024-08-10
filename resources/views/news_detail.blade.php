@extends('layouts/master')

@section('title', 'News - Detail')
@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Get all details</h6>
                    <h2>{{ $news->title }}</h2>
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
                            <div class="meeting-single-item">
                                <div class="thumb">
                                    <div class="date">
                                        <h6>{{ $month }} <span>{{ $day }}</span></h6>
                                    </div>
                                    <img src="/storage/images/news_and_articles/{{ $news->banner }}" alt="">
                                </div>
                                <div class="down-content">
                                    <a href="meeting-details.html">
                                        <h4>{{ $news->title }}</h4>
                                    </a>
                                    <p>{{ $datefull }}</p>
                                    <p>{{ $news->news_subject }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button-red">
                                <a href="/news">Back To NEWS List</a>
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
