<!--header-top-starts-->
<div class="header-top">
    <div class="container">
        <div class="head-main">
            <h1>-HumbleBeeHive-</h1>
            <h5 style="font-size:16px;color:#b99595;float: right;padding:0;margin:0;">--- A hobby blog & Xperiment on <b>Laravel 5.2</b></h5>
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
                    <li><a href="{{route('getHome')}}" <?php if(Route::current()->getName()=='getHome') echo "class=\"active\"";?>>Home</a></li>
                    <li><a href="{{route('getArchive')}}" <?php if(Route::current()->getName()=='getArchive') echo "class=\"active\"";?>>Archive</a></li>
                    <li><a href="{{route('getAbout')}}" <?php if(Route::current()->getName()=='getAbout') echo "class=\"active\"";?>>About Me</a></li>
                    <li><a href="{{URL::route('getPosts',1)}}">About the Blog</a></li>
                    <li><a href="{{route('getContact')}}" <?php if(Route::current()->getName()=='getContact') echo "class=\"active\"";?>>Message Me</a></li>
                </ul>
            </div>
            {{--<div class="header-right">--}}
                {{--<div class="search-bar">--}}
                    {{--<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">--}}
                    {{--<input type="submit" value="">--}}
                {{--</div>--}}
                {{--<ul>--}}
                    {{--<li><a href="http://www.facebook.com/ssinghhdi"><span class="fb"> </span></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
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
