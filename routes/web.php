<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    /**
     * Routes for MainController
     **/

        Route::get('/', 'MainController@index')
        ->name('main.index');

        Route::get('/about', 'MainController@about')
            ->name('main.about');

        Route::get('/feedback', 'MainController@feedback')
            ->name('main.feedback');



    /**
     * Routes for PostController
     */

        Route::get('/recires', 'PostController@allRecipes')
            ->name('post.allRecipes');
        //Route::get('/recipe/{id}', 'PostController@oneRecipe')
          //  ->where ('id', '[0-9]+')
        Route::get('/recipe', 'PostController@oneRecipe')
            ->name('post.oneRecipe');
    /**
    * Routes for AuthController
    */
        Route::get('/login', 'AuthController@login')
            ->name('auth.login');

        Route::post('/login', 'AuthController@loginPost')
            ->name('auth.loginPost');

        Route::get('/registration', 'AuthController@registration')
            ->name('auth.registration');

        Route::post('/registration', 'AuthController@registrationPost')
            ->name('auth.registrationPost');



