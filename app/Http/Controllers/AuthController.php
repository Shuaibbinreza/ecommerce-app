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

            // Redirect to special products page after login
            return redirect('/special-products');
        }

        return back()->withErrors(['Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function specialProducts(Request $request)
    {
        // Auth is checked at route level via 'auth' middleware
        // If we reach here, user is authenticated
        $user = Auth::user();
        
        return view('special-products', compact('user'));
    }
}
