<?php

namespace App\Http\Controllers;

use App\Author;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function getHomePage()
    {
        $top_post = Post::orderBy('id', 'desc')->first();
        $id = $top_post->id;
        $title = $top_post->title;
        $author = Author::findOrFail($top_post->author_id);
        $author_name = $author->name;
        $content = $top_post->content;
        $time = $top_post->created_at;
        return view('blog.home', compact('id','title','author_name','content','time'));
    }


    public function getAboutPage()
    {
        return view('blog.about');
    }

    public function getAboutBlogPage()
    {
        return view('blog.about');
    }

    public function getContactPage()
    {
        return view('blog.contact');
    }
    

    public function getArchivePage()
    {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(10);
        foreach ($posts as $post) {
            $post->content = $this->shortenText($post->content, 20);
        }
        return view('blog.archive', compact('posts'));
    }


    private function shortenText($text, $word_count)
    {
        if (str_word_count($text) > $word_count) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$word_count]) . '...';
        }
        return $text;
    }
    
    
}
