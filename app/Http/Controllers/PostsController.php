<?php

namespace App\Http\Controllers;

use App\Author;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function getPost($id)
    {
        $post = Post::findOrFail($id);
        $title = $post->title;
        $content = $post->content;
        $author = Author::findOrFail($post->author_id);
        $author_name = $author->name;
        $time = $post->created_at;
        $category = $post->category;

        return view('blog.show-post',compact('title','content','author_name','time','category'));
    }
}
