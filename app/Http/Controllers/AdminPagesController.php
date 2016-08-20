<?php

namespace App\Http\Controllers;

use App\Author;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminPagesController extends Controller
{
    public function getHome()
    {
        return view('blog.admin.home');
    }

    public function getNewPost()
    {

        $post_id = Post::orderBy('id','desc')->first()->id + 1;
        return view('blog.admin.new-post',compact('post_id'));
    }

    public function postNewPost(Request $request)
    {
        $input = $request->all();
        $post = new Post();
        $post->title = $input['title'];

        $author = $input['author'];
        $found_author = Author::where('name',$author)->first();
        if($found_author==null)
        {
            $new_author = new Author();
            $new_author->name = $input['author'];
            $new_author->save();
            $author_id = $new_author->id;
        }
        else $author_id = $found_author->id;

        $post->author_id = $author_id;
        $post->content = $input['content'];

        $post->save();

        return redirect()->route('admin.home');
    }


    public function getEditPost(Request $request)
    {
        
    }
}
