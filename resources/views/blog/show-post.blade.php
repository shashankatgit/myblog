@extends('blog.layouts.master-only-head')

@section('headers')
    <meta property="og:url" content="{{URL::current()}}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{$title}}"/>
    <meta property="og:description" content="{{substr(strip_tags($content),0,150)."..."}}"/>
    <meta property="og:image" content="{{URL::to('assets/images/bee_sticker.jpg')}}"/>
@endsection

@section('content')


    <div class="about">
        <div class="container">
            <div class="about-main">
                <div class="about-one">
                    <h3>{{$title}}</h3>
                </div>
                <div class="about-two">
                    <span class="author">Posted by <a
                                href="#">{{$author_name}}</a> on <b>{{$time->toFormattedDateString()}}</b></span>

                    {!! $content !!}
                    <ul>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{URL::current()}}">
                                <div class="fb-share">
                                    <img src="{{URL::to('assets/images/fb-share.png')}}">
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>

                <br><br>
                {{--<div class="comment-bottom heading">--}}
                    {{--<h3>Leave a Comment (Not Working)</h3>--}}
                    {{--<form method="POST" action="">--}}
                        {{--<input type="text" value="Your Name" required="" onfocus="this.value='';"--}}
                               {{--onblur="if (this.value == '') {this.value ='Your Name';}">--}}
                        {{--<textarea required="" rows="3" value=" " onfocus="this.value='';"--}}
                                  {{--onblur="if (this.value == '') {this.value = 'Your Comment';}">Your Comment--}}
                        {{--</textarea>--}}
                        {{--<input class="left" type="submit" value="Send">--}}
                    {{--</form>--}}
                {{--</div>--}}
                {{--<br><br>--}}
                {{--<div class="comments heading">--}}
                    {{--<h3>Comments</h3>--}}
                    {{--<div class="media">--}}
                        {{--<div class="media-body">--}}

                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
                <br>


                @include('blog.includes.bottom-posts-section')
            </div>

        </div>
    </div>
    </div>



@endsection