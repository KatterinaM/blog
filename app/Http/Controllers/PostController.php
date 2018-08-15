<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function allRecipes ()
    {
        return view('client.layouts.page_two_column',[
            'page' => 'client.pages.all_recipes',
            'widgets' => 'client.parts.widgets.recipe_of_the_week'
        ]);
    }

    // public function oneRecipe (Request $request, $id)

    public function oneRecipe ()
    {
        return view('auth_client.layouts.page_one_column',[
            'page' => 'client.pages.one_recipe'
        ]);
    }
}
