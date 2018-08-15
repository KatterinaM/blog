<?php

namespace App\Http\Controllers\AuthClient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function allRecipes ()
    {
        return view('auth_client.layouts.page_two_column',[
            'page' => 'client.pages.all_recipes',
           // 'widgets' => ['client.parts.widgets.recipe_of_the_week', 'client.parts.widgets.tegs'  Посмотреть как передать несколько параметров
        ]);
    }

    //public function oneRecipe (Request $request, $id)

    public function oneRecipe ()
    {
        return view('auth_client.layouts.page_one_column',[
            'page' => 'client.pages.one_recipe'
        ]);
    }

    public function myRecipes ()
    {
        return view('auth_client.layouts.page_top_part',[
            'page' => 'auth_client.pages.my_recipes',
            'top_part' => 'auth_client.parts.widgets.private_office'
        ]);
    }

    public function add ()
    {
        return view('auth_client.layouts.page_top_part',[
            'page' => 'auth_client.pages.add_recipe_form',
            'top_part' => 'auth_client.parts.widgets.private_office'
        ]);
    }

    public function addPost ()
    {
        return view('auth_client.layouts.page_main');
    }

    public function edit ()
    {
        return view('auth_client.layouts.page_top_part',[
            'page' => 'auth_client.pages.add_recipe_form',
            'top_part' => 'auth_client.parts.widgets.private_office'
        ]);
    }

    public function editPost ()
    {
        return view('auth_client.layouts.page_main');
    }
}
