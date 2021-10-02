@extends('layouts.auth.app')

@section('content')
    <div class="login-box">
        @if (session('error'))
            <div class="alert alert-danger"  id="error" style="color: #ffffdd;padding: 10px;text-align: center">
                <strong><i class="glyphicon glyphicon-exclamation-sign"></i>&#9888; {{ session('error') }}</strong>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success"  id="error" style="color: #ffffdd;padding: 10px;text-align: center">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        <form action="{{ route('password.update') }}" method="POST" style="border-top: 0;padding-top: 15px">
            @csrf
            <input type="hidden" value="{{$token}}" name="token">
            <div class="container">
                @if (session('success'))
                    <div class="alert alert-success" id="success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                        <strong>{{ session('success') }}</strong>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger" id="error">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                        <strong>{{ session('error') }}</strong>
                    </div>
                @endif
                <div class="form-group">
                    <label for="email">ইমেইল দিন&nbsp;<span id="mark">*</span></label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control" />
                    <small class="text-danger">@if ($errors->has('email')) {{ $errors->first('email') }} @endif</small>
                </div>
                <div class="form-group">
                    <label for="password">নতুন পাসওয়ার্ড দিন&nbsp;<span id="mark">*</span></label>
                    <input type="password" id="password" name="password" value="{{ old('password') }}" class="form-control" />
                    <small class="text-danger">@if ($errors->has('password')) {{ $errors->first('password') }} @endif</small>

                </div>

                <div class="form-group">
                    <label for="password_confirmation">নতুন পাসওয়ার্ড পুনরায় নিশ্চিত করুন&nbsp;<span id="mark">*</span></label>
                    <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" />
                    <small class="text-danger">@if ($errors->has('password_confirmation')) {{ $errors->first('password_confirmation') }} @endif</small>
                </div>


                <button type="submit">পাসওয়ার্ড রিসেট  </button>
            </div>
            <div class="container" style="background: linear-gradient(to bottom, #ffffff , #5a9847);text-align: center;border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;position: relative">
                <strong style="font-size: 12px">উদ্ভাবন ও বাস্তবায়নে: <a target="_blank" href="http://mustafiz.me">মো: মোস্তাফিজুর রহমান &nbsp;&nbsp;পিএএ, বিভাগীয় কমিশনার, ঢাকা</a></strong>
                <a target="_blank" href="http://olivineltd.com/" title="উন্নয়ন, রক্ষনাবেক্ষন ও পরিসেবায়: অলিভিন লিমিটেড">
                    <img style="position: relative;max-height: 30px;float: right;" src="http://olivineltd.com/upload/company_basic_info_logo/LG_20171014123407.svg" alt="অলিভিন লিমিটেড" />
                </a>
            </div>
        </form>
    </div>
@endsection
