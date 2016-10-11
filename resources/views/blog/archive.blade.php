@extends('blog.layouts.master')

@section('styles')
    <style>
        .custom-heading {
            margin: 0px;
            text-align: center
        }

        .well {
            background-color: whitesmoke;
            font-family: Raleway-Regular;
        }

        .archive-container {
            margin: 15px 2px;
        }

        article {
            border-bottom: 0.3px groove;
            padding: 15px 10px;
        }

        .subtitle {
            font-size: 70%;
        }

        .post-title {
            color: #3d1a1b;
            padding: 3px 0px;
            font-family: RobotoSlab-Regular;
            margin:8px 0px;
        }
        .content
        {
            font-size:80%;
            margin:15px 0px;
        }
        .read-btn{ font-size: 65%; padding:2px 40px;}
    </style>
@endsection

@section('content')
    <div class="custom-container">
        <div class="custom-heading">
            <h2>ARCHIVE</h2>
        </div>
        <br>
        <div class="archive-container">
            <div class="well">
                @foreach($posts as $post)
                    <article class="blog-post">
                        <div class="post-title">{{$post->title}}<br></div>
                        <div class="subtitle">
                            <div class="col-sm-6">
                                By <b>{{\App\Author::findOrFail($post->author_id)->name}}</b>
                            </div>

                            <div class="col-sm-6 about-right">
                                <span>{{$post->created_at->toFormattedDateString()}}</span>
                            </div>

                        </div>
                        <div class="content col-sm-12">
                            <p>{!! strip_tags($post->content) !!}</p>
                        </div>

                        <a href="{{URL::route('getPosts',$post->id)}}"><button class="read-btn btn btn-danger">Read</button></a>
                        <br>
                    </article>
                @endforeach
                @if($posts->lastPage() > 1)
                    <section class="pagination">
                        @if($posts->currentPage()!==1)
                            <a href="{{$posts->previousPageUrl()}}">Previous</a>
                        @endif

                        @if($posts->currentPage()!==$posts->lastPage())
                            <a href="{{$posts->nextPageUrl()}}">Next</a>
                        @endif


                    </section>
                @endif

            </div>
        </div>

    </div>


@endsection

