<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post();

        $post->title='Shashank 1';
        $post->content = '<p>Hello <b>dear</b>. This is a <i>formatted </i>text';
        $post->author_id = '1';
        $post->category = '1';
        $post->save();

        $post = new \App\Post();
        $post->title='Shashank 2';
        $post->content = '<p>Hello <b>dear</b>. This is a <i>formatted </i>text';
        $post->author_id = '1';
        $post->category = '1';
        $post->save();

        $post = new \App\Post();
        $post->title='Shashank 3';
        $post->content = '<p>Hello <b>dear</b>. This is a <i>formatted </i>text';
        $post->author_id = '1';
        $post->category = '1';
        $post->save();

        $post = new \App\Post();
        $post->title='Shashank 4';
        $post->content = '<p>Hello <b>dear</b>. This is a <i>formatted </i>text';
        $post->author_id = '1';
        $post->category = '1';
        $post->save();

        $post = new \App\Post();
        $post->title='Shashank 5';
        $post->content = '<p>Hello <b>dear</b>. This is a <i>formatted </i>text';
        $post->author_id = '1';
        $post->category = '1';
        $post->save();
    }
}
