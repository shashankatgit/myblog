
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <title>Admin - HumbleBeeHive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    @yield('headers')

    <link href="{{URL::to('assets/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{URL::to('assets/css/style.css')}}" rel='stylesheet' type='text/css' />
    <script src="{{URL::to('http://localhost/laravel-projects/myblog/public_html/assets/js/jquery.min.js')}}"></script>

    @yield('styles')

</head>
<body>

<!--header-top-starts-->
<div class="header-top">
    <div class="container">
        <div class="head-main">
            <h2>-- HumbleBeeHive --</h2>
            <h4>--  ADMIN  ---</h4>
        </div>
    </div>
</div>
<!--header-top-end-->
<!--start-header-->
<div class="header">
    <div class="container">
        <div class="head">
            <div class="navigation">
                <span class="menu"></span>
                <ul class="navig">
                    <li><a href="{{route('admin.getHome')}}"  class="active">Home</a></li>
                    <li><a href="{{route('admin.archive')}}">All Posts</a></li>
                    <li><a href="{{route('admin.getNewPost')}}">New Post</a></li>
                    <li><a href="{{route('admin.getMessages')}}">Messages</a></li>
                    <li><a href="{{route('admin.getTemporaryComments')}}">Approve Comments</a></li>
                    <li><a href="{{route('admin.getChangePassword')}}">Change Password</a></li>
                </ul>
            </div>
            <div class="header-right">
                <a href="{{route('admin.logout')}}"><button class="btn btn-primary">Logout</button></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- script-for-menu -->
<!-- script-for-menu -->
<script>
    $("span.menu").click(function(){
        $(" ul.navig").slideToggle("slow" , function(){
        });
    });
</script>
<!-- script-for-menu -->

<div class="about">
    <div class="container">
        <div class="about-main">
            @yield('content')
        </div>
    </div>
</div>


<!--footer-starts-->
<div class="footer">
    <div class="container">
        <div class="footer-text">
            <p style="color:black"> Shashank Singh - 2016</p>
        </div>
    </div>
</div>
<!--footer-end--></body>
</html>