@extends('blog.layouts.master')

@section('content')

    <div class="about-one">
        <p>Most Recent</p>
        <h3>{{$title}}</h3>
    </div>
    <div class="about-two">
        <p>Posted by <a href="#">{{$author_name}}</a> on <b>{{$time->toFormattedDateString()}}</b></p>
        {!! $content !!}

        <div class="about-btn">
            <a href="{{URL::route('getPosts',$id)}}">Read More</a>
        </div>
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

@endsection