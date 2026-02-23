<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Firebase\JWT\JWT;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            $payload = [
                'iss' => 'ecommerce-app',
                'sub' => $user->id,
                'email' => $user->email,
                'exp' => time() + 3600
            ];

            $jwt = JWT::encode($payload, env('JWT_SECRET'), 'HS256');

            $redirectUrl = $request->input('redirect_url');

            if ($redirectUrl) {
                return redirect($redirectUrl . '?token=' . $jwt);
            }

            return response()->json(['token' => $jwt]);
        }

        return back()->withErrors(['Invalid credentials']);
    }
}
