@extends('layouts.backend.app')

@section('title') {{__('app.email_settings')}} @endsection

@section('breadcrumbs')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('app.dashboard')}}</a></li>
                        <li class="breadcrumb-item active">{{__('app.change_email')}}</li>
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
                    <h3 class="card-title">{{__('app.change_email')}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('update-user-email')}}" method="post" class="form-horizontal" enctype="multipart/form-data"  data-parsley-validate>
                        @csrf

                        <div class="row justify-content-center p-4">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="password">{{__('app.new_email')}}<span class="text-danger">*</span></label>
                                    <input required name="email" type="email" id="email" class="form-control" placeholder="{{__('app.new_email')}}" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="cnfirm_password">{{__('app.re_type_email')}} <span class="text-danger">*</span></label>
                                    <input required name="c_email" type="email" data-parsley-equalto="#email" class="form-control" placeholder="{{__('app.re_type_email')}}">
                                </div>

                                <div class="form-group">
                                    <label for="current_password">{{__('app.current_password')}} <span class="text-danger">*</span></label>
                                    <input required name="current_password" minlength="5" type="password" class="form-control" placeholder="{{__('app.current_password')}}">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">{{__('app.save_and_update')}}</button>
                                </div>
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
