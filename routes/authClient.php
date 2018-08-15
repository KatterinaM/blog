<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/


    /**
     * Routes for MainController
     */

        Route::get('/', 'AuthClient\MainController@index')
            ->name('authClient.main.index');

        Route::get('/about', 'AuthClient\MainController@about')
            ->name('authClient.main.about');

        Route::get('/feedback', 'AuthClient\MainController@feedback')
            ->name('authClient.main.feedback');

    /**
     * Routes for PostController
     */

        Route::get('/recires', 'AuthClient\PostController@allRecipes')
            ->name('authClient.post.allRecipes');

        Route::get('/recipe', 'AuthClient\PostController@oneRecipe')
            //->where ('id', '[0-9]+')   доделать
            ->name('authClient.post.oneRecipe');

        Route::get('/my_recires', 'AuthClient\PostController@myRecipes')
            ->name('authClient.post.myRecipes');

        Route::get('/add', 'AuthClient\PostController@add')
            ->name('authClient.post.add');

        Route::post('/add', 'AuthClient\PostController@addPost')
            ->name('authClient.post.addPost');

        Route::get('/edit', 'AuthClient\PostController@edit')
            ->name('authClient.post.edit');

        Route::post('/edit', 'AuthClient\PostController@edit')
            ->name('authClient.post.editPost');

