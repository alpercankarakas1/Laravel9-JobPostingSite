@extends('layouts.adminbase')

@section('title', 'Applications')

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
                        <h4><i class="fa fa-angle-right"></i> Applications</h4><hr><table class="table table-bordered table-responsive table-striped">

                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Job ID</th>
                                <th>IP</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->user->id}}</td>
                                <td>{{$rs->job_id}}</td>
                                <td>{{$rs->ip}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.application.destroy',['id'=>$rs->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
                                <td ><a href="{{route('admin.application.show',['id'=>$rs->id])}}" class="btn btn-success">Show</a></td>
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
