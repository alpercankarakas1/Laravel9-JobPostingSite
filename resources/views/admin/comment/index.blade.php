@extends('layouts.adminbase')

@section('title', 'Comment List')

@section('content')
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> Comments</h4><hr><table class="table table-bordered table-responsive table-striped">

                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Job</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Show</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td><a href="{{route('admin.job.show',['id'=>$rs->job_id])}}">{{$rs->job->title}}</a></td>
                                <td>{{$rs->user->name}}</td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->review}}</td>
                                <td>{{$rs->rate}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="btn btn-success"
                                   onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">Show
                                </a>
                                </td>
                                <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
            </div>

        </section><!--/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->


@endsection
