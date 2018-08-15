<?php

namespace App\Http\Controllers\AuthClient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index ()
    {
        return view('auth_client.layouts.page_top_part', [
          'page' => 'client.pages.main',
          'top_part' => 'client.parts.widgets.slider'
          ]);
    }

    public function about ()
    {
        return view('auth_client.layouts.page_two_column',[
            'page' => 'client.pages.about',
            'widgets' => 'client.parts.widgets.contacts'
        ]);
    }

    public function feedback ()
    {
        return view('auth_client.layouts.page_one_column',[
            'page' => 'client.pages.feedback_form'
        ]);
    }




}
