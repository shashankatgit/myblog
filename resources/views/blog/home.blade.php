@extends('blog.layouts.master')

@section('content')

    <div class="about-one">
        <p>Most Recent</p>
        <h3>The beauty of Laravel</h3>
    </div>
    <div class="about-two">
        <a href="single.html"><img src="assets/images/c-1.jpg" alt="" /></a>
        <p>Posted by <a href="#">Johnson</a> on 10 feb, 2015 <a href="#">comments(2)</a></p>
        <p>Phasellus fringilla enim nibh, ac pharetra nulla vestibulum ac. Donec tempor fermentum felis, non placerat sem ultrices ut. Nam molestie nunc nec felis hendrerit, in pulvinar arcu mollis. Quisque eget purus nec velit venenatis tincidunt vitae ac massa. Proin vel ornare tellus. Duis consectetur gravida tellus ut varius. Aenean tellus massa, laoreet ut euismod et, pretium id ex. Mauris hendrerit suscipit hendrerit.</p>
        <p>Quisque ultrices ligula a nisl porttitor, vitae porta tortor eleifend. Nulla nec imperdiet ipsum, ut cursus mauris. Proin ut sodales sem, quis vestibulum libero. Proin tempor venenatis congue. Phasellus mollis massa sit amet pharetra consequat. Aliquam quis lacus at sapien tempor semper. Sed ultrices et metus et elementum. Nunc sed justo at erat consequat mollis et eu lectus.</p>
        <div class="about-btn">
            <a href="single.html">Read More</a>
        </div>
        <ul>
            <li><p>Share : </p></li>
            <li><a href="www.facebook.com/"><span class="fb"> </span></a></li>
            <li><a href="#"><span class="pin"> </span></a></li>
            <li><a href="#"><span class="rss"> </span></a></li>
            <li><a href="#"><span class="drbl"> </span></a></li>
        </ul>
    </div>

@endsection