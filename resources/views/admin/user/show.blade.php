@extends('layouts.adminwindow')

@section('title', 'User Detail')

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
                                    <th style="width: 150px">Name & Surname</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 150px">Roles</th>
                                    <td>
                                        @foreach ($data->roles as $role)
                                            {{$role->name}}
                                            <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"  onclick="return confirm('Are you sure?')">[x]</a>
                                        @endforeach
                                    </td>
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
                                    <th style="width: 150px">Add Role to User</th>
                                    <td>
                                        <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <select name="role_id">
                                                <option></option>
                                                @foreach ($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Add Role</button>
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
