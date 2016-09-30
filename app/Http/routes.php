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

Route::get('/', function () {
	/* $posts = App\Post::all();
    return view('welcome', compact('posts')); */
    return view('welcome');
});

Route::get('api/postagens', function() {
	 return Datatables::eloquent(App\Post::query())->make(true);
});