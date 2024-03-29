@extends('layouts.withoutsidebar')

@section('title', 'Job Posting Site')
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))
@php
    $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
@endphp
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>{{$data->title}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="job_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="job_details_header">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="{{Storage::url($data->image)}}" style="height: 50px;width: 50px">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="#"><h4>{{$data->title}}</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> {{$data->location}}</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> {{$data->job_type}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                            </div>
                        </div>
                    </div>
                    <div class="descript_wrap white-bg">
                        <div class="single_wrap">
                            <h4>Job description</h4>
                            <p>{{$data->description}}</p>
                        </div>
                        <div class="single_wrap">
                            <h4>Job Details</h4>
                            <p>{!! $data->detail !!}</p>
                        </div>
                    </div>
                    <div class="apply_job_form white-bg">
                        <h4>Apply for the job</h4>
                        <form action="{{route('storeapplication')}}" method="post">
                            @csrf
                            <input class="input" type="hidden" name="job_id" value="{{$data->id}}">
                            <div class="row">
                                <div style="padding-top: 10px" class="col-md-2">
                                    <div class="input_field">
                                        <h5>Your name</h5>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="input_field">
                                        @auth
                                        <input type="text" placeholder="" name="name" value="{{Auth::user()->name}}">
                                        @endauth
                                        @guest
                                        <input type="text" placeholder="" name="name" value="">
                                        @endguest
                                    </div>
                                </div>
                                <div style="padding-top: 10px" class="col-md-2">
                                    <div class="input_field">
                                        <h5>Email</h5>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="input_field">
                                        <input type="text" name="email" placeholder="">
                                    </div>
                                </div>
                                <div style="padding-top: 10px" class="col-md-2">
                                    <div class="input_field">
                                        <h5>Upload CV</h5>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="input_field">
                                        <input style="padding-top: 15px" type="file" name="usercv" placeholder="Upload CV">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    @auth
                                    <div class="submit_btn">
                                        <button class="boxed-btn3 w-100" type="submit">Apply Now</button>
                                    </div>
                                    @endauth
                                    @guest
                                        <div class="submit_btn">
                                            <a href="/loginuser" class="boxed-btn2 w-100">You need to login to apply for a job.</a>
                                        </div>
                                    @endguest
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="job_sumary">
                        <div class="summery_header">
                            <h3>Job Summary</h3>
                        </div>
                        <div class="job_content">
                            <ul>
                                <li>Published on: <span>{{date('d-m-Y',strtotime($data->created_at))}}</span></li>
                                <li>Company: <span>{{$data->company}}</span></li>
                                <li>Location: <span>{{$data->location}}</span></li>
                                <li>Education: <span>{{$data->education}}</span></li>
                                <li>Experience: <span>{{$data->experience}}</span></li>
                                <li>Job Nature: <span> {{$data->job_type}}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="share_wrap d-flex">
                        <span>Share at:</span>
                        <ul>
                            <li><a href="{{$setting->facebook}}"> <i class="fa fa-facebook"></i></a> </li>
                            <li><a href="{{$setting->twitter}}"> <i class="fa fa-twitter"></i></a> </li>
                            <li><a href="{{$setting->instagram}}"> <i class="fa fa-instagram"></i></a> </li>
                        </ul>
                    </div>
                    <div class="job_location_wrap">
                        <div class="job_lok_inner">
                            <div id="map" style="height: 200px;"></div>
                            <script>
                                function initMap() {
                                    var uluru = {lat: -25.363, lng: 131.044};
                                    var grayStyles = [
                                        {
                                            featureType: "all",
                                            stylers: [
                                                { saturation: -90 },
                                                { lightness: 50 }
                                            ]
                                        },
                                        {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
                                    ];
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        center: {lat: -31.197, lng: 150.744},
                                        zoom: 9,
                                        styles: grayStyles,
                                        scrollwheel:  false
                                    });
                                }

                            </script>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

                        </div>

                        <div class="job_sumary">
                                <h3 style="padding-left: 15px;padding-top: 25px">Write your review</h3>
                            <hr>

                                <form action="{{route('storecomment')}}" style="padding-left: 15px;padding-right: 15px;padding-bottom: 15px" method="post">
                                    @csrf
                                    <input class="input" type="hidden" name="job_id" value="{{$data->id}}">

                                    <div class="form-group">
                                        <div class="mt-10" >
                                            <input type="text" name="subject" placeholder="Subject" class="single-input">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mt-10" >
                                            <textarea name="review" class="single-textarea" placeholder="Review"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-rating">
                                            <strong class="text-uppercase">Your Rating: </strong>

                                            <input type="radio" id="star1" name="rate" value="1" />₁<label for="star1"></label>
                                            <input type="radio" id="star2" name="rate" value="2" />₂<label for="star2"></label>
                                            <input type="radio" id="star3" name="rate" value="3" />₃<label for="star3"></label>
                                            <input type="radio" id="star4" name="rate" value="4" />₄<label for="star4"></label>
                                            <input type="radio" id="star5" name="rate" value="5" />₅<label for="star5"></label>
                                            <h1></h1>

                                        </div>
                                    </div>
                                    @auth
                                    <button class="genric-btn info radius" type="submit">Submit</button>
                                    @else
                                        <a href="/login" class="genric-btn info radius"> For submit your review, please login.</a>
                                    @endauth
                                </form>


                </div>
                </div>
                    @php
                    $average = $data->comment->average('rate')
                    @endphp
                    <h3> {{$data->comment->count('id')}} Review(s) <i class="fa fa-star"></i> {{number_format($average,2)}}</h3>
                    @foreach($reviews as $rs)
                    <div class="job_location_wrap white-bg">
                        <div class="card-body">
                            <h5 class="card-title">{{$rs->user->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$rs->created_at}}</h6>
                            <strong>{{$rs->subject}}</strong>
                            <p class="card-text">{{$rs->review}}</p>
                            <p style="">{{$rs->rate}} <i class="fa fa-star"></i></p>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>

@endsection
