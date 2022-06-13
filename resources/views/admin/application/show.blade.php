@extends('layouts.adminwindow')

@section('title', 'Show Application')

@section('content')
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Show Application</h3>
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
                                    <th style="width: 150px">User ID</th>
                                    <td>{{$data->user_id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Job ID</th>
                                    <td>{{$data->job_id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Name & Surname</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">IP</th>
                                    <td>{{$data->ip}}</td>
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
                                    <th style="width: 150px">Admin Note & Status Update</th>
                                    <td>
                                        <form role="form" action="{{route('admin.application.update',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <textarea class="sample-text-area" cols="100" id="note" name="note">
                                            {{$data->note}}
                                        </textarea>
                                            <select name="status">
                                                <option selected disabled>-- select an option --</option>
                                                <option>New</option>
                                                <option>Pending</option>
                                                <option>Done</option>
                                            </select>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Update Application</button>
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
