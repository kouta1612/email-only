<?php

namespace App\Http\Controllers\Auth;

use App\LoginToken;
use App\AuthenticatesUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(AuthenticatesUser $auth)
    {
        $auth->invite();

        return 'Sweet - go check that email';
    }

    public function authenticate(LoginToken $token)
    {
        dd($token);
    }
}
