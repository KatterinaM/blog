<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('client.layouts.page_one_column',[
            'page' => 'client.pages.login'
        ]);
    }

    public function loginPost(Request $request)
    {




    }

    public function registration () {
        return view('client.layouts.page_one_column', [
            'page' => 'client.pages.registration'
        ]);
    }

    public function registrationPost (Request $request) {
        $inputData = $request->all;

        $this->validate($request, [
            'name' => 'required|min:3|max:20',
            'login' => 'required|min:3|max:20',
            'email' => 'required|email',
            'password' => 'required|max:32|min:6',
            'password2' => 'required|same:password',
            //'phone' => '/regex:/\+\d{1}\s{1}\(\d{3}\)\s{1}\d{3}\-\d{2}\-\d{2}/',
            'about' => 'max:20'
            //'is_confirmed' => 'accepted'
    ]);
        return redirect()->route('authClient.post.myRecipes');
    }
}