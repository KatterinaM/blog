<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $id = Auth::id();
            return redirect()->route('authClient.post.myRecipes', ['id' =>$id]);
        }

        return redirect()->back();

    }

    public function logout ()
    {
        Auth::logout();

        return redirect()->route('main.index');
    }

    public function registration () {

        return view('client.layouts.page_one_column', [
            'page' => 'client.pages.registration'
        ]);
    }

    public function registrationPost (Request $request) {
        $input = $request->all();

        $this->validate($request, [
            'name' => 'required|min:3|max:60|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'phone' => 'regex:/\+\d{1}\s{1}\(\d{3}\)\s{1}\d{3}\-\d{2}\-\d{2}/',
            'login' => 'required|min:3|max:60|', //unique:users,login
            'password' => 'required|min:6|max:60',
            'password2' => 'required|same:password',
            'about' => 'max:500'
            //'is_confirmed' => 'accepted'
    ]);
        $id = DB::table('users')->insertGetId(
            ['name' => $input['name'],
             'email' => $input['email'],
             'password' => bcrypt($input['password']),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
            ]
        );

        return redirect()->route('authClient.post.myRecipes', ['id' => $id]);
    }
}