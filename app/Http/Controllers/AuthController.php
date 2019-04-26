<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('login');
    }

    public function login(Auth $request)
    {
        $credentials = request(['account', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['status' => 1, 'message' => 'Unauthorized'], 401);
        }

        return response()->json(['status' => 0, 'token' => $token]);
    }

    public function logout()
    {
        auth()->logout();
        return response()->json(['status' => 0]);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }
}
