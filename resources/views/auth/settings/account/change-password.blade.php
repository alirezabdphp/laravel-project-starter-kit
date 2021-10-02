@extends('layouts.backend.app')

@section('title') {{__('app.change_password')}} @endsection

@section('breadcrumbs')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('app.dashboard')}}</a></li>
                        <li class="breadcrumb-item active">{{__('app.change_password')}}</li>
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
                    <h3 class="card-title">{{__('app.change_password')}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('update-password')}}" method="post" class="form-horizontal" enctype="multipart/form-data"  data-parsley-validate>
                        @csrf

                        <div class="row justify-content-center p-4">
                            <div class="col-md-4">
                                @input(['input_name' => 'current_password', 'type' => 'password'])
                                @input(['input_name'=>'password', 'label' => 'New Password'])
                                @input(['input_name'=>'c_password', 'label' => 'Re Type Password', 'custom_string' => "minlength=8 data-parsley-equalto=#password"])

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
