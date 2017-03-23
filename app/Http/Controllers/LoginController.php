<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function login(Request $request)
    {
        $login = $request->input('user');
        $password = $request->input('password');
        var_dump($login);
        var_dump($password);
        return view('pages.login');
    }
}