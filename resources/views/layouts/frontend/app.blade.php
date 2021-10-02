<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layouts.frontend.assets.css')
</head>
<body>

@include('layouts.frontend.particles.header')

@yield('content')

@include('website.modules.modal-add-to-carts')
@include('website.modules.modal-favorite-list')
@include('layouts.frontend.particles.footer')


<input type="hidden" id="base_url" value="{{url('/')}}">
@include('layouts.frontend.assets.js')
@yield('js')
</body>
</html>
