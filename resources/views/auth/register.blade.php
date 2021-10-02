@extends('layouts.auth.app')

@section('content')
    <div class="register-box">
        <h2 class="header-title">ভুমি অফিস ব্যাবস্থাপনা সিস্টেম রেজিস্ট্রেশন</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="container">
                <div class="form-group">
                    <label class="form-control-label" for="name">নাম &nbsp;<span style="color: red">*</span></label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control @error('email') is-invalid @enderror"">
                    <small class="text-danger">@if ($errors->has('name')) {{ $errors->first('name') }} @endif</small>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="email">ই-মেইল ঠিকানা&nbsp;<small class="helpText"></small></label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror"">
                    <small class="text-danger">@if ($errors->has('email')) {{ $errors->first('email') }} @endif</small>
                </div>
                <div class="form-group ">
                    <label class="form-control-label" for="mobile">মোবাইল নম্বর &nbsp;<span style="color: red">*</span></label>
                    <input type="text" name="mobile_no" value="{{old('mobile_no')}}" class="form-control @error('email') is-invalid @enderror"">
                    <small class="text-danger">@if ($errors->has('mobile_no')) {{ $errors->first('mobile_no') }} @endif</small>
                </div>
                <div class="form-group ">
                    <label class="form-control-label" for="password">পাসওয়ার্ড &nbsp;<span style="color: red">*</span></label>
                    <input type="password" maxlength="15" class="form-control @error('email') is-invalid @enderror"" id="password" name="password" value="">
                    <small class="text-danger">@if ($errors->has('password')) {{ $errors->first('password') }} @endif</small>
                </div>
                <div class="form-group ">
                    <label class="form-control-label" for="password_confirmation">পুনরায় পাসওয়ার্ড  &nbsp;<span style="color: red">*</span></label>
                    <input type="password" maxlength="15" class="form-control @error('email') is-invalid @enderror"" id="password_confirmation" name="password_confirmation" value="" >
                    <small class="text-danger">@if ($errors->has('password_confirmation')) {{ $errors->first('password_confirmation') }} @endif</small>
                </div>

                <button type="submit">রেজিস্ট্রেশন করুন</button>
                <a href="{{ route('login') }}" style="float: right;font-style: italic"> লগইন করুন</a>
            </div>
            @include('layouts.auth.footer')
        </form>
    </div>
@endsection





