@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))
@php
    $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
@endphp

@section("slider")
    @include("home.slider")
@endsection

@php
    $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
@endphp

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
                    </div>
                </div>
            </div>
            <div class="job_lists">
                <div class="row">
                    @foreach($homejoblisting as $job)
                        @php
                            $average = $job->comment->average('rate')
                        @endphp
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="{{Storage::url($job->image)}}" style="height: 50px;width: 50px">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="{{route('job',['id'=>$job->id])}}"><h4>{{$job->title}}</h4></a>
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
                                        <div class="location">
                                            <p><i class="fa fa-star"></i> {{number_format($average,2)}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now " style="padding-top: 13px">
                                    <a href="{{route('job',['id'=>$job->id])}}" class="boxed-btn3">Apply Now</a>
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




@endsection
