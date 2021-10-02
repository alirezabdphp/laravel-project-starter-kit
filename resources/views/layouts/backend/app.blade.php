<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    @include('layouts.backend.assets.css')
    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
    @include('layouts.backend.particles.navbar')

    @include('layouts.backend.particles.sidebar.admin')

    <div class="content-wrapper">
        @yield('breadcrumbs')
        @yield('content')
    </div>
    @include('layouts.backend.particles.footer')
</div>

@include('layouts.backend.assets.js')
@yield('js')
{!! Toastr::message() !!}
</body>
</html>
