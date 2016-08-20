<?php
$last_id = \App\Post::orderBy('id', 'desc')->first()->id;
$random = rand(1, $last_id - 4);
for ($i = 0; $i < 3; $i++) {
    $posts[$i] = \App\Post::find($random + $i);
}
?>

<div class="about-tre">
    <div class="a-1">
        <?php $count = 0;?>
        @foreach($posts as $post)
            <?php $count++; ?>
            <div class="col-md-6 abt-left">
                <a href="#"><img src="assets/images/s-1.jpg" alt=""/></a>
                <h3><a href="#">{{$post->title}}</a></h3>
                <label>{{$post->created_at}}</label>
                <br>
                <p>{!! \App\Post::shortenText($post->content,20) !!}</p></div>


            @if($count%2==0)
                <div class="clearfix"></div>
            @endif
        @endforeach
    </div>

</div>