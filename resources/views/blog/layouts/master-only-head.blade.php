<!DOCTYPE html>
<html>
<head>
    <title>HumbleBeeHive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />

    <link href="{{URL::to('assets/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{URL::to('assets/css/style.css')}}" rel='stylesheet' type='text/css' />
    <script src="{{URL::to('assets/js/jquery.min.js')}}"></script>

    @yield('styles')
</head>
<body>

@include('blog.includes.header-master')

@yield('content')

@include('blog.includes.footer')
</body>
</html>