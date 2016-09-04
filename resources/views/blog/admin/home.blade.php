@extends('blog.layouts.admin-master')

@section('content')
    {{--Facebook share plugin--}}
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


    <div class="about-one">
        <p>Most Recent</p>
        <h3>{{$latestPost->title}}</h3>
    </div>
    <div class="about-two">
        <p>Posted by <a href="#">{{$latestPost->authorName}}</a> on <b>{{$latestPost->created_at->toFormattedDateString()}}</b></p>
        {!! $latestPost->content !!}
        <div class="about-btn">
            <a href="{{route('admin.getEditPost',1)}}">Edit</a>
        </div>
        <ul>
            <li><p>Share : </p></li>
            <li>
                <div class="fb-share-button" data-href="{{URL::current()}}"
                      data-layout="button"
                      data-size="small" data-mobile-iframe="true">
                    <a class="fb-xfbml-parse-ignore" target="_blank"
                       href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
                        Share
                    </a>
                </div>
            </li>
        </ul>
    </div>

@endsection