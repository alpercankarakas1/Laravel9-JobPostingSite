@extends('layouts.frontbase')

@section('title', 'Job Posting Site')

@section("slider")
    @include("home.slider")
@endsection

@section('content')
    <!-- job_listing_area_start  -->
    <div class="job_listing_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3>Job Listing</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="brouse_job text-right">
                        <a href="jobs.html" class="boxed-btn4">Browse More Job</a>
                    </div>
                </div>
            </div>
            <div class="job_lists">
                <div class="row">
                    @foreach($homejoblisting as $job)
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="{{Storage::url($job->image)}}" style="height: 50px;width: 50px">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="job_details.html"><h4>{{$job->title}}</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-building"></i> {{$job->company}}</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> {{$job->location}}</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> {{$job->job_type}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                    <a href="job_details.html" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Created at: {{date('d-m-Y',strtotime($job->created_at))}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- job_listing_area_end  -->


    <div class="top_companies_area">
        <div class="container">
            <div class="row align-items-center mb-40">
                <div class="col-lg-6 col-md-6">
                    <div class="section_title">
                        <h3>Top Companies</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="brouse_job text-right">
                        <a href="jobs.html" class="boxed-btn4">Browse More Job</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="{{asset("assets")}}/img/svg_icon/5.svg" alt="">
                        </div>
                        <a href="jobs.html"><h3>Snack Studio</h3></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="{{asset("assets")}}/img/svg_icon/4.svg" alt="">
                        </div>
                        <a href="jobs.html"><h3>Snack Studio</h3></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="{{asset("assets")}}/img/svg_icon/3.svg" alt="">
                        </div>
                        <a href="jobs.html"><h3>Snack Studio</h3></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="{{asset("assets")}}/img/svg_icon/1.svg" alt="">
                        </div>
                        <a href="jobs.html"><h3>Snack Studio</h3></a>
                        <p> <span>50</span> Available position</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- job_searcing_wrap  -->
    <div class="job_searcing_wrap overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="searching_text">
                        <h3>Looking for a Job?</h3>
                        <p>We provide online instant cash loans with quick approval </p>
                        <a href="#" class="boxed-btn3">Browse Job</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="searching_text">
                        <h3>Looking for a Expert?</h3>
                        <p>We provide online instant cash loans with quick approval </p>
                        <a href="#" class="boxed-btn3">Post a Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job_searcing_wrap end  -->

@endsection
