@extends('layouts.adminbase')

@section('title', 'Settings')
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
            <h3><i class="fa fa-angle-right"></i> Settings</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <form class="form-horizontal style-form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
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
                                <label class="col-sm-2 col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="address" value="{{$data->address}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Fax</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fax" value="{{$data->fax}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" value="{{$data->email}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Icon</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="icon">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">SMTP Server</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="smtpserver" value="{{$data->smtpserver}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">SMTP Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="smtpemail" value="{{$data->smtpemail}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">SMTP Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="smtppassword" value="{{$data->smtppassword}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">SMTP Port</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="smtpport" value="{{$data->smtpport}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Facebook</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Instagram</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Twitter</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Youtube</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">About Us</label>
                                <div class="col-sm-10">
                                    <textarea class="col-sm-2 col-sm-2 control-label" id="aboutus" name="aboutus">
                                        {!! $data->aboutus !!}
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#aboutus' ) )
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
                                <label class="col-sm-2 col-sm-2 control-label">Contact</label>
                                <div class="col-sm-10">
                                    <textarea class="col-sm-2 col-sm-2 control-label" id="contact" name="contact">
                                        {!! $data->contact !!}
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#contact' ) )
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
                                <label class="col-sm-2 col-sm-2 control-label">References</label>
                                <div class="col-sm-10">
                                    <textarea class="col-sm-2 col-sm-2 control-label" id="references" name="references">
                                        {!! $data->references !!}
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#references' ) )
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
