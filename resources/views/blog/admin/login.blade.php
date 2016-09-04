<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>{{htmlentities('Admin-HumbleBeeHive')}}</title>
    <link rel="stylesheet" href="{{URL::to('/assets/css/login.css')}}" />
</head>
<body>

<div class="container">
    <section id="content">
        <form action="{{route('postAdminLogin')}}" method="post">
            <h1>{{htmlentities('</Admin/>')}}</h1>
            <div>
                <input type="text" placeholder="Username" required="" id="email" name="username"/>
            </div>
            <div>
                <input type="password" placeholder="Password" required="" id="password" name="password"/>
            </div>
            <div class="btn-container">
                <input type="submit" value="Log in"/>
            </div>
            {{--<div>--}}
            {{--<a href="#">Lost your password?</a>--}}
            {{--<a href="#">Register</a>--}}
            {{--</div>--}}

            <input type="hidden" name="_token" value="{{Session::token()}}"/>
        </form><!-- form -->
    </section><!-- content -->
</div><!-- container -->
</body>
</html>