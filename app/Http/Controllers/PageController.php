<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function getHomePage()
    {

        return view('blog.home');
    }


    public function getAboutPage()
    {
        return view('blog.about');
    }

    public function getContactPage()
    {
        return view('blog.contact');
    }

    public function postContactPage(Request $request)
    {

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
