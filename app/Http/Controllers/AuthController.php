<?php

namespace App\Http\Controllers;

use Socialite;

class AuthController extends Controller
{
    public function login()
    {
        return Socialite::with('gitlab')->redirect();
    }

    public function user()
    {
        return response()->json(Socialite::driver('gitlab')->user());
    }
}
