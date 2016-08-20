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
   'as' => 'home',
    'uses'=>'PageController@getHomePage'
]);

Route::get('/about',[
    'as'=>'about',
    'uses'=>'PageController@getAboutPage'
]);

Route::get('/contact',[
    'as'=>'contact',
    'uses'=>'PageController@getContactPage'
]);

Route::post('contact',[
   'as'=>'postContact',
    'uses'=>'PageController@postContactPage'
]);

Route::get('archive',[
   'as'=>'archive',
    'uses'=>'PageController@getArchivePage'
]);





Route::group(['prefix'=>'admin'],function (){
   
    Route::get('/home',[
       'as' => 'admin.home',
        'uses' => 'AdminPagesController@getHome'
    ]);

    Route::get('/newPost',[
        'as'=>'admin.newPost',
        'uses'=>'AdminPagesController@getNewPost'
    ]);

    Route::post('/newPost',[
       'as'=>'admin.postNewPost',
        'uses'=>'AdminPagesController@postNewPost'
    ]);


    Route::get('/editPost/{id}',[
        'as'=>'admin.editPost',
        'uses'=>'AdminPagesController@getEditPost'
    ]);
    
});