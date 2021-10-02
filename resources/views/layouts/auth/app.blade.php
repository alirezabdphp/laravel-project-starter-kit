<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ভুমি অফিস ব্যাবস্থাপনা সিস্টেম লগইন</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background-image: url({{ asset('images/body_bg.gif') }});background-position: center;
        }
        form {
            border: 0px solid #f1f1f1;
            padding: 10px 0px 0;
        }

        input[type=text], input[type=password], input[type=email] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            background: #e8f0fe;
            border-radius: 10px;
            max-height: 34px;
        }

        button {
            background-color: #652c90;
            color: white;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            /* width: 100%; */
            font-size: 18px;
            border-radius: 10px;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #d03333;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        .container {
            padding: 16px;
        }

        .header-title{
            color: #652c90;
            border-bottom: 3px solid #0D5E35;
            border-image: url({{ asset('images/border-bg.png') }}) 30;
            text-align: center;
            margin: 0;
            padding: 10px;
        }

        .login-box{
            margin: 10% auto 0;
            display: block;
            max-width: 650px;
            background: #FFF;
            box-shadow: inset -2px 10px 48px 19px rgba(255, 0, 0, 0);
            border-radius: 20px;
            border: 1px solid #ccc;
        }

        .register-box{
            margin: 15px auto 0;
            display: block;
            max-width: 650px;
            background: #FFF;
            box-shadow: inset -2px 10px 48px 19px rgba(255, 0, 0, 0);
            border-radius: 20px;
            border: 1px solid #ccc;
        }

        .password-reset-box{
            margin: 10% auto 0;
            max-width: 550px;
            display: block;
            background: linear-gradient(to bottom, rgba(109, 128, 109, 0.85), rgba(123, 52, 52, 0.85));
            box-shadow: inset -2px 10px 48px 19px rgba(255, 0, 0, 0);
            border-radius: 20px;
            border: 1px solid #ccc;
        }

        .mtm-14{
            /*margin-top: -14px;*/
        }

        .form-control-label{
            margin-bottom: -5px;
        }

        span.psw {
            float: right;
        }


        label {
            color: #5a5656;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
