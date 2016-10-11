<h3>ARCHIVES</h3>
<ul>
    <?php

    $archive_posts = \App\Post::orderBy('updated_at', 'desc')->limit(5)->get();
    ?>

    @foreach($archive_posts as $post)
        <li>
            <a href="{{URL::route('getPosts',$post->id)}}">{{$post->title}}</a>
            <p>{!!\App\Post::shortenText(strip_tags($post->content),20)  !!}</p>
        </li>
    @endforeach
</ul>