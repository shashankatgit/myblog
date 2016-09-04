<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
   'as' => 'getHome',
    'uses'=>'PageController@getHomePage'
]);

Route::get('/about',[
    'as'=>'getAbout',
    'uses'=>'PageController@getAboutPage'
]);

Route::get('/contact',[
    'as'=>'getContact',
    'uses'=>'PageController@getContactPage'
]);

Route::post('contact',[
   'as'=>'postContact',
    'uses'=>'MessagesController@postMessage'
]);

Route::get('archive',[
   'as'=>'getArchive',
    'uses'=>'PageController@getArchivePage'
]);

Route::get('posts/{id}',[
   'as'=>'getPosts',
    'uses'=>'PostsController@getPost'
]);





Route::get('admin',[
    'uses'=>'AdminPagesController@getLoginPage',
    'as'=>'getAdminLogin'
]);

Route::post('admin',[
   'uses'=>'AdminPagesController@postLogin',
    'as'=>'postAdminLogin'
]);

Route::group(['prefix'=>'admin','middleware'=>['auth']],function (){
   
    Route::get('/home',[
       'as' => 'admin.getHome',
        'uses' => 'AdminPagesController@getHome'
    ]);

    Route::get('/posts/{id}',[
        'as'=>'admin.getPosts',
        'uses'=>'AdminPagesController@getPost'
    ]);

    Route::get('/archive',[
        'as'=>'admin.archive',
        'uses'=>'AdminPagesController@getArchivePage'
    ]);

    Route::get('/newPost',[
        'as'=>'admin.getNewPost',
        'uses'=>'AdminPagesController@getNewPost'
    ]);

    Route::post('/newPost',[
       'as'=>'admin.postNewPost',
        'uses'=>'AdminPagesController@postNewPost'
    ]);


    Route::get('/editPost/{id}',[
        'as'=>'admin.getEditPost',
        'uses'=>'AdminPagesController@getEditPost'
    ]);
    Route::post('/editPost',[
        'as'=>'admin.postEditPost',
        'uses'=>'AdminPagesController@postEditPost'
    ]);

    Route::get('/logout',[
        'as'=>'admin.logout',
        'uses'=>'AdminPagesController@logout'
    ]);

    Route::get('/showMessages',[
        'as'=>'admin.getMessages',
        'uses'=>'MessagesController@getMessages'
    ]);
    
});