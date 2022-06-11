@extends('layouts.withoutsidebar')

@section('title', $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Contact</h3>
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
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-horizontal style-form" action="{{route("storemessage")}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="col-sm-10" style="padding: 6px">
                                <input type="text" name="name" placeholder="Name & Surname" required="" class="single-input">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10" style="padding: 6px">
                                <input type="text" name="email" placeholder="Email" class="single-input">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10" style="padding: 6px">
                                <input type="text" name="phone" placeholder="Phone Number" class="single-input">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10" style="padding: 6px">
                                <input type="text" name="subject" placeholder="Subject" class="single-input">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10" style="padding: 6px;">
                                <textarea class="single-textarea" placeholder="Message" name="message" id="message"></textarea>
                            </div>
                        </div>

                        <button class="genric-btn info" type="submit">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>{{$setting->address}}</h3>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>{{$setting->phone}}</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>{{$setting->email}}</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

@endsection
