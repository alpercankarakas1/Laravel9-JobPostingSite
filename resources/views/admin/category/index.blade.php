@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <a href="{{route('admin.category.create')}}" class="btn btn-primary btn-lg" style="margin-top: 12px">Add Category</a>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> Categories</h4><hr><table class="table table-bordered table-responsive table-striped">

                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Parent</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                    @endif
                                </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-primary">Edit</a></td>
                                <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
                                <td ><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-success">Show</a></td>
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
