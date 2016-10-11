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

    <div class="about">
        <div class="container">
            <div class="about-main">
                <div class="about-one">
                    <h3>{{$post->title}}</h3>
                </div>
                <div class="about-two">
                    <span class="author">Posted by <a
                                href="#">{{$post->authorName}}</a> on <b>{{$post->created_at->toFormattedDateString()}}</b></span>

                    {!! $post->content !!}
                    <div class="about-btn">
                        <a href="{{route('admin.getEditPost',$post->id)}}">Edit</a>
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



        </div>
    </div>
    </div>



@endsection