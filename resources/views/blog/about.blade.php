@extends('blog.layouts.master-only-head')

@section('styles')
    <link href="http://localhost/laravel-projects/myblog/public_html/assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <style>
        .custom-main-container {
            margin: 0px 50px;
            min-height: 900px;
        }

        .custom-head {
            padding: 0px;
            margin: 0px auto;
            width: 250px;
        }

        .custom-head img {
            width: 250px;
            height: 140px;
        }

        .custom-container {

        }

        .side-container {

            margin-bottom:15px;
        }

        .custom-image-container img {
            max-width: 100%;
            box-shadow: whitesmoke;
            box-shadow: whitesmoke 5px 2px 5px;
        }

        .sub-container{
            box-sizing: border-box;
            box-shadow: whitesmoke 1px 2px 2px;
        }

    </style>
@endsection

@section('content')

    <div class="custom-main-container">
        <div class="custom-head">
            <img src="assets/images/about.gif">
        </div>

        <div class="custom-container col-sm-12">
            <div class="side-container col-sm-4">
                <div class="custom-image-container">
                    <img class="img-rounded" src="images/my_image2.jpg">
                </div>
            </div>
            <div class="sub-container col-sm-8">
                <h3>Shashank Singh</h3>
            </div>

        </div>


    </div>


@endsection


