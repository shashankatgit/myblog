@extends('blog.layouts.admin-master')

@section('styles')
    <style>
        .custom-heading {
            margin: 0px;
            text-align: center
        }

        .custom-well {
            background-color: whitesmoke;
            font-family: Raleway-Regular;
            padding-bottom: 40px;
            box-sizing: border-box;
        }

        .archive-container {
            margin: 15px 2px;
        }

        .blog-post {
            border-bottom: 0.3px groove;

        }

        .custom-subtitle {
            font-size: 70%
        }

        .post-title {
            color: #3d1a1b;
            padding: 3px 0px;
            font-family: RobotoSlab-Regular;
            margin: 8px 0px;
        }

        .content {
            font-size: 80%;
            margin: 15px 0px;
        }

        .read-btn {
            font-size: 65%;
            padding: 2px 40px;
        }
    </style>

@endsection

@section('content')
    <div class="custom-container">
        <div class="custom-heading">
            <h2>COMMENTS APPROVAL</h2>
        </div>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Post</th>
                <th>Name</th>
                <th>Email</th>
                <th>Time</th>
                <th>Content</th>
                <th>Action</th>

            </tr>
            </thead>


            @foreach($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td><a href="{{route('admin.getPosts',$comment->post_id)}}">{{$comment->post_id}}</a></td>
                    <td>{{$comment->sender_name}}</td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->created_at->toFormattedDateString()}}</td>
                    <td>{{$comment->content}}</td>
                    <td>
                        <form method="post" action="{{route('admin.postApproveTemporaryComment')}}">
                            <input type="hidden" value="{{$comment->id}}" name="temp_comment_id" id="temp_comment_id">
                            <input type="submit" class="btn btn-primary" value="Add">
                            <input type="hidden" name="_token" value="{{Session::token()}}">

                        </form>
                        <form method="post" action="{{route('admin.postDeleteTemporaryComment')}}">
                            <input type="hidden" value="{{$comment->id}}" name="temp_comment_id" id="temp_comment_id">
                            <input type="submit" class="btn btn-danger" value="Del">
                            <input type="hidden" name="_token" value="{{Session::token()}}">

                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        @if($comments->lastPage() > 1)
            <section class="pagination">
                @if($comments->currentPage()!==1)
                    <a href="{{$comments->previousPageUrl()}}">Previous</a>
                @endif

                @if($comments->currentPage()!==$comments->lastPage())
                    <a href="{{$comments->nextPageUrl()}}">Next</a>
                @endif


            </section>
        @endif

    </div>
    </div>

    </div>


@endsection
