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

                        <form action="{{route('instructor.profile.update')}}" method="post" class="form-horizontal" enctype="multipart/form-data"  data-parsley-validate>
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 pl-5 pr-5 pt-5">
                                        <div class="form-group">
                                            <div class="upload-img-box">
                                                @if($user->profile_picture != '')
                                                    <img src="{{asset($user->profile_picture)}}">
                                                @else
                                                    <img src="">
                                                @endif
                                                <input type="file" name="profile_picture" id="profile_picture" accept="image/*" onchange="previewFile(this)">
                                                <div class="upload-img-box-icon">
                                                    <i class="fa fa-camera"></i>
                                                    <p class="m-0">{{__('app.profile_picture')}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="row pt-4">
                                            <div class="col-md-4 col-6">
                                                <div class="form-group">
                                                    <label for="first_name">{{__('app.first_name')}}<span class="text-danger">*</span></label>
                                                    <input type="text" name="first_name" value="{{$user->first_name}}" id="first_name" class="form-control" placeholder="{{__('app.first_name')}}" autocomplete="off">
                                                    @if ($errors->has('first_name'))
                                                        <span class="error"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('first_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-6">
                                                <div class="form-group">
                                                    <label for="cnfirm_password">{{__('app.last_name')}}</label>
                                                    <input class="form-control" value="{{$user->last_name}}" name="last_name" id="last_name" placeholder="{{__('app.last_name')}}">
                                                    @if ($errors->has('last_name'))
                                                        <span class="error"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('last_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-6">
                                                <div class="form-group">
                                                    <label for="headline">{{__('app.headline')}}</label>
                                                    <input class="form-control" value="{{$instructor_profile->headline}}" name="headline" id="headline" placeholder="{{__('app.headline')}}">
                                                    @if ($errors->has('headline'))
                                                        <span class="error"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('headline') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-6">
                                                <div class="form-group">
                                                    <label for="about">{{__('app.about_me')}}</label>
                                                    <textarea name="about" placeholder="{{__('app.about_me')}}" class="form-control"> {{$instructor_profile->about}} </textarea>
                                                    @if ($errors->has('about'))
                                                        <span class="error"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('about') }}</span>
                                                    @endif
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <label for="website">{{__('app.website')}}</label>
                                            <input type="url" class="form-control" value="{{$instructor_profile->website}}" name="website" id="website" placeholder="{{__('app.website')}}">
                                            @if ($errors->has('website'))
                                                <span class="error"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('website') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <label for="twitter">{{__('app.twitter')}}</label>
                                            <input type="url" class="form-control" value="{{$instructor_profile->twitter}}" name="twitter" id="twitter" placeholder="{{__('app.twitter')}}">
                                            @if ($errors->has('twitter'))
                                                <span class="error"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('twitter') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <label for="facebook">{{__('app.facebook')}}</label>
                                            <input type="url" class="form-control" value="{{$instructor_profile->facebook}}" name="facebook" id="facebook" placeholder="{{__('app.facebook')}}">
                                            @if ($errors->has('facebook'))
                                                <span class="error"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('facebook') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <label for="twitter">{{__('app.linkedin')}}</label>
                                            <input type="url" class="form-control" value="{{$instructor_profile->linkedin}}" name="linkedin" id="linkedin" placeholder="{{__('app.linkedin')}}">
                                            @if ($errors->has('linkedin'))
                                                <span class="error"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('linkedin') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <label for="twitter">{{__('app.youtube')}}</label>
                                            <input type="url" class="form-control" value="{{$instructor_profile->youtube}}" name="youtube" id="youtube" placeholder="{{__('app.youtube')}}">
                                            @if ($errors->has('youtube'))
                                                <span class="error"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('youtube') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <label for="address">{{__('app.address')}}</label>
                                            <input type="text" class="form-control" value="{{$instructor_profile->address}}" name="address" id="address" placeholder="{{__('app.address')}}">
                                            @if ($errors->has('address'))
                                                <span class="error"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('address') }}</span>
                                            @endif
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
