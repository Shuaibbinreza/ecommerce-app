<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Firebase\JWT\JWT;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        $payload = [
            'iss' => 'ecommerce-app',
            'sub' => $user->id,
            'email' => $user->email,
            'exp' => time() + 3600
        ];

        $jwt = JWT::encode($payload, env('JWT_SECRET'), 'HS256');

        return redirect('/special-products?token=' . $jwt)->with('success', 'Account created successfully!');
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
