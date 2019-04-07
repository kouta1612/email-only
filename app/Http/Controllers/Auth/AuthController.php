<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\LoginToken;
use App\AuthenticatesUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    protected $auth;

    public function __construct(AuthenticatesUser $auth)
    {
        $this->auth = $auth;
    }

    public function login()
    {
        return view('login');
    }

    public function postLogin()
    {
        $this->auth->invite();

        return 'Sweet - go check that email';
    }

    public function authenticate(LoginToken $token)
    {
        $this->auth->login($token);

        return redirect('dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
