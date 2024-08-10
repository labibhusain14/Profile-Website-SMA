@extends('layouts.master')

@section('title', 'SMAN 13 Bandung-Articles')

@section('content')
<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Get all details</h6>
                <h2>Penerimaan Siswa Baru</h2>
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
                                    <h6>Nov <span>12</span></h6>
                                </div>
                                <a href="meeting-details.html"><img src="assets/images/single-meeting.jpg" alt=""></a>
                            </div>
                            <div class="down-content">
                                <a href="meeting-details.html">
                                    <h4>Penerimaan Siswa Baru</h4>
                                </a>
                                <p>04 April 2023, Bandung</p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="hours">
                                            <h5>Hours</h5>
                                            <p>Monday - Friday: 07:00 AM - 13:00 PM<br>Saturday- Sunday: 09:00 AM - 15:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="location">
                                            <h5>Location</h5>
                                            <p>SMAN 13 Bandung</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="book now">
                                            <h5>Book Now</h5>
                                            <p>010-020-0340<br>090-080-0760</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="share">
                                            <h5>Share:</h5>
                                            <ul>
                                                <li><a href="#">Facebook</a>,</li>
                                                <li><a href="#">Twitter</a>,</li>
                                                <li><a href="#">Linkedin</a>,</li>
                                                <li><a href="#">Behance</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button-red">
                            <a href="meetings.html">Back To NEWS List</a>
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