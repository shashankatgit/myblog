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
            <h2>MESSAGES</h2>
        </div>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Time</th>
                <th>Content</th>
                <th>About</th>
            </tr>
            </thead>


            @foreach($messages as $message)
                <tr>
                    <td>{{$message->id}}</td>
                    <td>{{$message->sender_name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->created_at->toFormattedDateString()}}</td>
                    <td>{!!$message->content!!}</td>
                    <td>{{$message->about_sender}}</td>
                </tr>
            @endforeach
        </table>

        @if($messages->lastPage() > 1)
            <section class="pagination">
                @if($messages->currentPage()!==1)
                    <a href="{{$messages->previousPageUrl()}}">Previous</a>
                @endif

                @if($messages->currentPage()!==$messages->lastPage())
                    <a href="{{$messages->nextPageUrl()}}">Next</a>
                @endif


            </section>
        @endif

    </div>
    </div>

    </div>


@endsection
