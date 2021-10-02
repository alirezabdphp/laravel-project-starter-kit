@extends('layouts.auth.app')

@section('content')
    <div class="password-reset-box">
        @if (session('status'))
            <div class="alert alert-success" role="alert" style="color: #ffffff;padding: 10px;text-align: center;font-size: 18px;">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('password.email') }}" method="POST" style="border-top: 0;padding-top: 15px">
            @csrf
            <div class="container">
                <div class="form-group ">
                    <label class="form-check-label text-white" for="email">ই-মেইল ঠিকানা&nbsp;<small class="helpText"></small></label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                       </span>
                    @enderror
                </div>
                <button type="submit">পাসওয়ার্ড রিসেট </button>
                <a href="{{url('/login')}}" style="float: right;font-style: italic;color: #FFfFFF;margin-top: 13px;">  লগইন করুন</a> <br>
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
