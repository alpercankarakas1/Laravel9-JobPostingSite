@extends('layouts.adminbase')

@section('title', 'Edit FAQ')
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
            <h3><i class="fa fa-angle-right"></i> Edit FAQ</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> FAQ Elements</h4>
                        <form class="form-horizontal style-form" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Question</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="question" value="{{$data->question}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Answer</label>
                                <div class="col-sm-10">
                                    <textarea class="col-sm-2 col-sm-2 control-label" id="answer" name="answer">
                                        {!! $data->answer !!}
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#answer' ) )
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
