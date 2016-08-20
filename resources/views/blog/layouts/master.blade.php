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
<!--about-starts-->
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">
               @yield('content')

                @include('blog.includes.bottom-posts-section')
            </div>
            <div class="col-md-4 about-right heading">
                <div class="abt-1">
                    @include('blog.includes.about')
                </div>
                <div class="abt-2">
                    @include('blog.includes.might-like-section')
                </div>
                <div class="abt-2">
                    @include('blog.includes.archive-section')
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!--about-end-->


@include('blog.includes.footer')
</body>
</html>