@extends('layouts.master')

@section('title', 'Teacher')

@section('content')
<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Here are our teachers</h6>
                <h2>TEACHERS of SMAN 13 Bandung</h2>
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
                                <li data-filter="*" class="active">All Teacher</li>
                                @foreach ($data1 as $index => $subject)
                                <li data-filter=".{{ str_replace(' ', '-', strtolower($subject->name)) }}">
                                    {{ $subject->name }}
                                </li>
                                @if (($index + 1) == 4 || ($index + 1) == 10 || ($index + 1) == 14 || ($index + 1) == 18)
                                <br><br>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="team section" id="team">
                        <div class="col-lg-12">
                            <div class="row grid">
                                @foreach ($data2 as $index => $teacherAndStaff)
                                <div class="col-lg-3 col-md-6 all {{ str_replace(' ', '-', strtolower($teacherAndStaff->subject_name)) }}" style="margin-bottom: 150px;">
                                    <div class="team-member">
                                        <div class="main-content">
                                            <img src="storage/images/teacher_and_staff/{{ $teacherAndStaff->photo }}" alt="">
                                            <span style="font-size: 14px;" class=" category">{{ $teacherAndStaff->subject_name }}</span>
                                            <h4 style="font-size: 14px; margin: 10px 0;">{{ $teacherAndStaff->name }}</h4>
                                            <ul class="social-icons mt-4">
                                                <li><a href="{{ $teacherAndStaff->facebook }}"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                                <li><a href="{{ $teacherAndStaff->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="{{ $teacherAndStaff->email }}"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @if(($index + 1) % 4 == 0)
                                <div class="clearfix"></div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- <div class="team section" id="team">
                        <div class="col-lg-12">
                            <div class="row grid">
                                @foreach ($data2 as $index => $teacherAndStaff)
                                <div class="col-lg-3 col-md-6 all {{ str_replace(' ', '-', strtolower($teacherAndStaff->subject_name)) }}" style="margin-bottom: 150px;">
                                    <div class="team-member">
                                        <div class="main-content">
                                            <img src="assets/images/teacher_and_staff/{{ $teacherAndStaff->photo }}" alt="" style="width: 100%">
                                            <span class="category">{{ $teacherAndStaff->subject_name }}</span>
                                            <h4 style="font-size: 16px; margin: 10px 0;">{{ $teacherAndStaff->name }}</h4>
                                            <ul class="social-icons" style="margin: 0;">
                                                <li><a href="{{ $teacherAndStaff->facebook }}"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="{{ $teacherAndStaff->instagram }}"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="{{ $teacherAndStaff->email }}"><i class="fab fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @if(($index + 1) % 4 == 0)
                                <div class="clearfix"></div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright © 2023 SMAN 13 BANDUNG.</p>

    </div>
</section>
@endsection