@extends('layouts.adminbase')

@section('title', 'Show Job')

@section('content')
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Show Job</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="col-md-12">
                        <div class="content-panel">
                            <div style="margin-left: 12px">
                                <a href="{{route('admin.job.edit',['id'=>$data->id])}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('admin.job.destroy',['id'=>$data->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </div>
                            <hr>
                            <table class="table table-striped table-responsive-lg">
                                <tr>
                                    <th style="width: 150px">ID</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Category</th>
                                    <td>
                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Keywords</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Description</th>
                                    <td>{{$data->description}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Company</th>
                                    <td>{{$data->company}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Experience</th>
                                    <td>{{$data->experience}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Education</th>
                                    <td>{{$data->education}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Job Type</th>
                                    <td>{{$data->job_type}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Location</th>
                                    <td>{{$data->location}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Detail</th>
                                    <td>{!! $data->detail !!}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Image</th>
                                    <td>
                                        @if($data->image)
                                            <img src="{{Storage::url($data->image)}}" style="height: 100px">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Created at</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Updated at</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>


                            </table>
                        </div><!-- --/content-panel ---->
                    </div>
                </div><!-- col-lg-12-->
            </div>

        </section><!--/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->


@endsection
