@extends('layouts.auth.app')

@section('content')
    <div class="login-box">
        <h2 class="header-title">ভুমি অফিস ব্যাবস্থাপনা সিস্টেম লগইন</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="container">
                <div class="form-group row">
                    <label for="email" class="col-md-12 form-control-label">ইমেইল / মোবাইল ফোন নম্বর:</label>

                    <div class="col-md-12">
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mtm-14">
                    <label for="password" class="col-md-12 form-control-label">পাসওয়ার্ড:</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>


                <button type="submit">লগইন করুন  </button>


                <a href="{{ route('register') }}" style="float: right;font-style: italic"> রেজিস্ট্রেশন করুন</a><br>
                <a href="https://youtu.be/7XiuihhPaBo" target="_blank" style="float: right;font-style: italic;margin-top: -25px"> ভিডিও টিউটোরিয়াল দেখুন</a>
                <a href="{{ route('password.request') }}" style="float: right;font-style: italic"> পাসওয়ার্ড ভুলে গেছেন?</a><br>
            </div>


            @include('layouts.auth.footer')
        </form>
    </div>
@endsection
