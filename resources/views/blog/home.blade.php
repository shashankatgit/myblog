@extends('blog.layouts.master')

@section('headers')
    <meta property="og:url" content="{{URL::current()}}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{$title}}"/>
    <meta property="og:description" content="{{substr(strip_tags($content),0,150)."..."}}"/>
    <meta property="og:image" content="{{URL::to('assets/images/bee_sticker.jpg')}}"/>
@endsection

@section('content')

    <div class="about-one">
        <p>Most Recent</p>
        <h3>{{$title}}</h3>
    </div>
    <div class="about-two">
        <p>Posted by <a href="#">{{$author_name}}</a> on <b>{{$time->toFormattedDateString()}}</b></p>
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
        <div class="about-btn">
            <a href="{{URL::route('getPosts',$id)}}">View in Full Page</a>
        </div>
    </div>

@endsection