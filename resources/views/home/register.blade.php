@extends('layouts.withoutsidebar')

@section('title', 'User Registration')
@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>User Registration</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <!-- ================ about us section start ================= -->
    <section class="about-us-section section_padding">
        <div class="container">
            @include('auth.register')
        </div>
    </section>
    <!-- ================ about us section end ================= -->

@endsection
