@extends('blog.layouts.admin-master')


@section('content')

    <div class="custom-heading">
        <h2>
            <?php
            if (isset($_GET['status']) && $_GET['status']=='success')
                echo '(Successful Change!)';
            else
                echo 'Change Password';
            ?>


            <?php
            if (isset($_GET['error']))
                echo '(Failed, Retry?)';
            ?>
        </h2>

    </div>
    <br><br>
    <div class="container">
        <form class="form-horizontal col-sm-12" action="{{route('admin.postChangePassword')}}" method="POST">

            <div class="form-group row col-sm-12">
                <label for="title">Old Password</label>
                <input class="custom-input form-control" type="password" placeholder="Old Password" id="oldPassword"
                       name="oldPassword" required>
            </div>
            <div class="form-group row col-sm-12">
                <label for="author">New Password</label>
                <input class="custom-input form-control" type="password" placeholder="New Password" id="newPassword"
                       name="newPassword" required>
            </div>
            <div class="form-group row col-sm-12">
                <label for="author">Confirm Password</label>
                <input class="custom-input form-control" type="password" placeholder="Confirm Password" id="newConfirmPassword"
                       name="newConfirmPassword" required>
            </div>

            <div class="form-group row col-sm-12">
                <input class="btn btn-danger" style="padding: 5px 30px;" type="submit" value="Change"/>
            </div>
            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
    </div>



@endsection