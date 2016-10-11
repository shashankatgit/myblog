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
                <div class="comment-bottom heading">
                    <h3>Leave a Comment</h3>
                    <form style="background-color:rgba(185, 185, 82, 0.31);padding:15px;" method="POST"
                          action="{{route('postAddComment')}}">
                        <input name="sender_name" type="text" value="Your Name" required="" onfocus="this.value='';"
                               onblur="if (this.value == '') {this.value ='Your Name';}">
                        <input name="email" type="text" value="Your Email" required="" onfocus="this.value='';"
                               onblur="if (this.value == '') {this.value ='Your Email';}">
                        <textarea name="content" required="" rows="3" value=" " onfocus="this.value='';"
                                  onblur="if (this.value == '') {this.value = 'Your Comment';}">Your Comment
                        </textarea>
                        <input type="hidden" name="post_id" value="{{$post_id}}">
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                        <br>
                        <h5>(Note : Comments will be shown only after they have been checked for inappropriate content)</h5>
                        <br>
                        <input class="left" type="submit" value="Send">
                    </form>
                </div>
                <br>
                <div class="comments heading">
                    <h3>Comments</h3>
                    @foreach($comments as $comment)
                        <div class="media">
                            <div style="padding: 8px 30px;background-color:rgba(105, 160, 2, 0.22);max-width: 800px">
                                <div>
                                    <div style="float: left;">
                                        <b>{{$comment->sender_name}} @ <span style="color:indianred">{{$comment->email}}</span></b>
                                    </div>
                                    <div style="float: right;">
                                        <h6>on {{$comment->created_at->toFormattedDateString()}}</h6>
                                    </div>
                                </div>
                                <div style="margin-top:30px">
                                   <h6> {{$comment->content}}</h6>
                                </div>
                            </div>
                            {{--<div class="media-right">--}}
                            {{--<a href="#">--}}
                            {{--<img src="images/si.png" alt=""> </a>--}}
                            {{--</div>--}}
                        </div>
                    @endforeach

                </div>
                <br>


                @include('blog.includes.bottom-posts-section')
            </div>

        </div>
    </div>
    </div>



@endsection