<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Exibir formulário de login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Realizar login.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        $credenciais = [
            'email' => $request->email,
            'senha' => $request->senha
        ];

        if (Auth::attempt([
            'email' => $credenciais['email'],
            'senha' => $credenciais['senha'],
        ])) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'As credenciais estão incorretas.',
        ])->onlyInput('email');
    }

    /**
     * Realizar logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

