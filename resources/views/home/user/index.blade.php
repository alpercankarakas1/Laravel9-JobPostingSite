@extends('layouts.withoutsidebar')

@section('title', 'User Panel')
@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>User Panel</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div>
                        <div>
                            <h2 class="contact-title">User Profile</h2>
                            <hr>
                        </div>
                        @include('profile.show')
                    </div>
                </div>
                <div class="col-lg-2">
                    <div>
                        <div>
                            <h2 class="contact-title">User Menu</h2>
                            <hr>
                        </div>
                        @include('home.user.usermenu')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

@endsection
