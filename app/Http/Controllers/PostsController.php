<?php

namespace App\Http\Controllers;

use App\Author;
use App\Comment;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function getPost($id)
    {
        $post = Post::findOrFail($id);
        $title = $post->title;
        $post_id = $post->id;
        $content = $post->content;
        $author = Author::findOrFail($post->author_id);
        $author_name = $author->name;
        $time = $post->created_at;
        $category = $post->category;

        $comments = Comment::where('post_id',$id)->orderBy('created_at','desc')->get();


        return view('blog.show-post',compact('title','content','author_name','time','category','post_id','comments'));
    }
}
