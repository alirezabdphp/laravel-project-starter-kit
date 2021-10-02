@extends('layouts.backend.app')

@section('title') {{__('app.profile_settings')}} @endsection

@section('breadcrumbs')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('app.dashboard')}}</a></li>
                        <li class="breadcrumb-item active">{{__('app.profile_settings')}}</li>
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
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">{{__('app.profile_settings')}}</h3>
                        </div>
                        <!-- /.card-header -->

                        <form action="{{route('admin.profile.update')}}" method="post" class="form-horizontal" enctype="multipart/form-data"  data-parsley-validate>
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 pl-5 pr-5 pt-5">
                                        @imageWithPreview(['input_name' => 'profile_picture', 'preview_image' => $user->profile_picture])
                                    </div>

                                    <div class="col-md-8">
                                        <div class="row pt-4">
                                            <div class="col-md-6 col-6">
                                                @input(['input_name' => 'name', 'value'=> $user->name,])
                                            </div>

                                            <div class="col-md-6 col-6">
                                                @input(['input_name'=>'email', 'value'=>$user->email, 'required' => 'false', 'custom_string' => 'readonly'])
                                            </div>

                                            <div class="col-md-6 col-6">
                                                @input(['input_name'=>'mobile_no', 'label' => 'Mobile Number', 'value'=>$user->mobile_no, 'required' => 'false', 'custom_string' => 'readonly'])
                                            </div>

                                            <div class="col-md-6 col-6">
                                                @input(['input_name'=>'address', 'value'=>$user->address,])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer pb-0">
                                <div class="row justify-content-end pb-0">
                                    <div class="col-md-12">
                                        <div class="form-group float-right">
                                            <button type="submit" class="btn btn-primary rounded-0">{{__('app.save_and_update')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
