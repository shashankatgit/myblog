<?php
$last_id = \App\Post::orderBy('id', 'desc')->first()->id;
$random = rand(1, $last_id - 1);
for ($i = 0; $i < 2; $i++) {
    $sug_posts[$i] = \App\Post::find($random + $i);
}
?>

@if(Route::currentRouteName()!='getArchive')
    <br><br>
    <div class="bottom-read-more">
        A few more reads -
    </div>
    <div class="about-tre">
        <div class="a-1">
            <?php $count = 0;?>
            @foreach($sug_posts as $sug_post)
                @if($sug_post==null)
                    @break
                @endif
                <?php $count++; ?>
                <div class="bottom-post-div col-sm-5 abt-left">
                    <h3><a href="{{URL::route('getPosts',$sug_post->id)}}">{{$sug_post->title}}</a></h3>
                    <label>{{$sug_post->created_at->toFormattedDateString()}}</label>
                    <br>
                    <p>{!! \App\Post::shortenText(strip_tags($sug_post->content),20) !!}</p>
                </div>


                @if($count%2==0)
                    <div class="clearfix"></div>

                @endif
            @endforeach
        </div>

    </div>
@endif