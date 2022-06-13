@extends('layouts.adminbase')

@section('title', 'Edit Job')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Edit Job</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Job Elements</h4>
                        <form class="form-horizontal style-form" action="{{route('admin.job.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Parent Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control selected" name="category_id">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if ($rs->id == $data -> category_id)selected="selected" @endif>
                                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Keywords</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Company</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="company" value="{{$data->company}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Experience</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="experience" value="{{$data->experience}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Education</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="education" value="{{$data->education}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Job Type</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="job_type" value="{{$data->job_type}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Location</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="location" value="{{$data->location}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Detail</label>
                                <div class="col-sm-10">
                                    <textarea class="col-sm-2 col-sm-2 control-label" id="detail" name="detail">
                                        {!! $data->detail !!}
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#detail' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                <select class="form-control" name="status">
                                    <option disabled>-- select an option --</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary btn-lg btn-block">Update Data</button>


                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div>

        </section><!--/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->


@endsection
