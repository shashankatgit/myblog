<?php

namespace App\Http\Controllers;

use App\Author;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use phpDocumentor\Reflection\Types\Array_;

class AdminPagesController extends Controller
{

    public function getLoginPage()
    {
        if(\Auth::check())
        {
            return redirect()->route('admin.getHome');
        }
        return view('blog.admin.login');
    }
    public function postLogin(Request $request)
    {
        $credentials = [
            'username' => $request['username'],
            'password' => $request['password']
        ];
        if (\Auth::attempt($credentials)) {
            return redirect()->route('admin.getHome');
        } else
            return redirect()->route('getAdminLogin','err=incorrect');

    }


    public function getHome()
    {
        $latestPost = Post::orderBy('created_at','desc')->first();
        $latestPost['authorName']=Author::findOrFail($latestPost->author_id)->name;
        return view('blog.admin.home',compact('latestPost'));
    }

    public function getPost($id)
    {
        $post = Post::findOrFail($id);
        $post['authorName'] = Author::findOrFail($post->author_id)->name;
        $post['category'] = $post->category;

        return view('blog.admin.show-post',compact('post'));
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

        return redirect()->route('admin.getHome','status="success"');
    }


    public function getEditPost($postId)
    {
        $post=Post::findOrFail($postId);
        $post['authorName']=Author::find($post->author_id)->name;
        return view('blog.admin.edit-post',compact('post'));
    }

    public function postEditPost(Request $request)
    {
        $input = $request->all();
        $post = Post::findOrFail($input['postId']);
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

        return redirect()->route('admin.getPosts',$post->id);
    }

    public function getArchivePage()
    {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(10);

        foreach ($posts as $post) {
            $post->content = $this->shortenText($post->content, 20);
        }
        return view('blog.admin.archive', compact('posts'));
    }
    
    public function logout()
    {
        \Auth::logout();
        return redirect()->route('getHome','logout=success');
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
