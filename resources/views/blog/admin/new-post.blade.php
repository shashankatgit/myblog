@extends('blog.layouts.admin-master')

@section('styles')
    <script type="text/javascript" src="{{URL::to('packages/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#content',
            plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste jbimages",
        ],
            toolbar: "insertfile undo redo | styleselect | bold italic | " +
            "alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",

            relative_urls: false
        });
    </script>
    <style>
        .custom-heading {
            text-align: center;
        }

        .form-horizontal .custom-input {
            width: 100%;
        }
    </style>
@endsection
@section('content')

    <div class="custom-heading">
        <h2>New Post</h2>
    </div>
    <br>
    <div class="container">
        <form class="form-horizontal col-sm-12" action="{{route('admin.postNewPost')}}" method="POST">

            <div class="form-group row col-sm-12">
                <label for="title">Title</label>
                <input class="custom-input form-control" type="text" placeholder="Title of the post" id="title"
                       name="title" required>
            </div>
            <div class="form-group row col-sm-12">
                <label for="author">Author</label>
                <input class="custom-input form-control" type="text" placeholder="Author of the post" id="author"
                       name="author" required>
            </div>
            <div class="form-group row col-sm-12">
                <label for="content">Content</label>
                <textarea class="col-sm-12" placeholder="Content of the post" id="content" name="content" rows="10"
                          ></textarea>
            </div>
            <div class="form-group row col-sm-12">
                <input class="btn btn-danger" style="padding: 5px 30px;" type="submit" value="Post"/>
            </div>
            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
    </div>



@endsection