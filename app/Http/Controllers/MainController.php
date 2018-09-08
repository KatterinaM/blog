<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index ()
    {
        debug ("Ciao");
        return view('client.layouts.page_top_part', [
            'page' => 'client.pages.main',
            'top_part' => 'client.parts.widgets.slider'
        ]);
    }

    public function about ()
    {
        return view('client.layouts.page_two_column',[
            'page' => 'client.pages.about',
            'widgets' => 'client.parts.widgets.contacts'
        ]);
    }

    public function feedback ()
    {
        return view('client.layouts.page_one_column',[
            'page' => 'client.pages.feedback_form'
        ]);
    }


}
