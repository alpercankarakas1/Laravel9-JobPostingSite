@extends('layouts.withoutsidebar')

@section('title', 'User Reviews')
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
                            <h2 class="contact-title">User Comments & Reviews</h2>
                            <hr>
                        </div>
                        <h4><i class="fa fa-angle-right"></i> Comments</h4><hr><table class="table table-bordered table-responsive-md table-striped">

                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Job</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('job',['id'=>$rs->job_id])}}">{{$rs->job->title}}</a></td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->review}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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
