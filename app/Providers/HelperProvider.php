<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperProvider extends ServiceProvider
{
/**
* Bootstrap any application services.
*
* @return void
*/
public function boot()
{
    require app_path('Includes/helpers.php');
}

/**
* Register any application services.
*
* @return void
*/
public function register()
{
//
}
}