@extends('layouts.adminwindow')

@section('title', 'Show Message')

@section('content')
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Message Data</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="col-md-12">
                        <div class="content-panel">
                            <div style="margin-left: 12px">
                            </div>
                            <hr>
                            <table class="table table-striped table-responsive-lg">
                                <tr>
                                    <th style="width: 150px">ID</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Job</th>
                                    <td>{{$data->job->title}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Name & Surname</th>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Subject</th>
                                    <td>{{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Review</th>
                                    <td>{{$data->review}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Rate</th>
                                    <td>{{$data->rate}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">IP Number</th>
                                    <td>{{$data->IP}}</td>
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
                                <tr>
                                    <th style="width: 150px">Admin Note</th>
                                    <td>
                                        <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Update Comment</button>
                                            </div>
                                        </form>
                                    </td>
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
