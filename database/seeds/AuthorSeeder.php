<?php

use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = new \App\Author();
        $author->name="Shashank Singh";
        $author->email='ssinghmy@gmail.com';
        $author->save();
        
    }
}
