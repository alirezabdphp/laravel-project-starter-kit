@extends('layouts.backend.app')

@section('title') {{__('app.email_settings')}}  @endsection

@section('breadcrumbs')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('app.dashboard')}}</a></li>
                        <li class="breadcrumb-item active">{{__('app.email_settings')}}</li>
                    </ol>
                </div><!-- /.col -->

                <div class="col-sm-6 float-right">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{__('app.email_settings')}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('update.email.setting')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>MAIL DRIVER <span class="text-danger">*</span></label>
                                    <input type="text" name="MAIL_DRIVER" value="{{get_settings('MAIL_DRIVER')}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>MAIL HOST <span class="text-danger">*</span></label>
                                    <input type="text" name="MAIL_HOST" value="{{get_settings('MAIL_HOST')}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>MAIL PORT <span class="text-danger">*</span></label>
                                    <input type="number" name="MAIL_PORT" value="{{get_settings('MAIL_PORT')}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>MAIL USERNAME <span class="text-danger">*</span></label>
                                    <input type="text" name="MAIL_USERNAME" value="{{get_settings('MAIL_USERNAME')}}" class="form-control">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>MAIL PASSWORD <span class="text-danger">*</span></label>
                                    <input type="password" name="MAIL_PASSWORD" value="{{get_settings('MAIL_PASSWORD')}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>MAIL ENCRYPTION <span class="text-danger">*</span></label>
                                    <select name="MAIL_ENCRYPTION" class="form-control">
                                        <option value="tls"> tls </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>MAIL FROM_ADDRESS <span class="text-danger">*</span></label>
                                    <input type="email" name="MAIL_FROM_ADDRESS" value="{{get_settings('MAIL_FROM_ADDRESS')}}" class="form-control">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>MAIL FROM_NAME <span class="text-danger">*</span></label>
                                    <input type="text" name="MAIL_FROM_NAME" value="{{get_settings('MAIL_FROM_NAME')}}" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary rounded-0 float-right">Save & Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('js')
    <script src="{{asset('public/backend/dist/js/image-preview.js')}}"></script>
@endsection
