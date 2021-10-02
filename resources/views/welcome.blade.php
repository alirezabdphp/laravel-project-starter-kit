<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ভুমি অফিস ব্যাবস্থাপনা সিস্টেম </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            background-image: url(http://covidrms.olivineltd.com/frontend/images/background.jpeg);
            background-position: center;
            background-size: cover;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
            background: rgba(255, 255, 255, 0.65);
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 70px;
        }

        .links > a {
            color: #f0f8ff;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            background: red;
            padding: 10px;
            border-radius: 5px;
        }

        .m-b-md {
            margin-bottom: 30px;
            font-weight: bold;
            color: green;
            margin-top: 15px;
            font-size: 50px
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">লগইন</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">রেজিস্ট্রেশন</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="http://covidrms.olivineltd.com/frontend/images/logo.png" height="100" alt="Avatar" class="avatar">
        <div class="title m-b-md">
            ভুমি অফিস ব্যাবস্থাপনা সিস্টেম
        </div>

        <div class="links">
            <a href="{{ url('login') }}">লগইন করুন</a>
        </div>
    </div>
</div>
</body>
</html>
