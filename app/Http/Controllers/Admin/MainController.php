<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index ()
    {
        return view('admin.layouts.page_main',[
            'page' => 'admin.pages.main'
        ]);
    }

    public function about ()
    {
        return view('admin.layouts.page__colomn',[
            'page' => 'client.pages.about'
        ]);
    }

  public function newArticles ()
    {
        return view('client.layouts.page_two_colomn',[
            'page' => 'client.pages.new_articles'
        ]);
    }

    public function oneArticles (Request $request, $id)
    {
        return view('client.layouts.page_one_colomn',[
            'page' => 'client.pages.one_articles'
        ]);
    }
}
