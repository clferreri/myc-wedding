<?php

namespace App\Http\Controllers\Back\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Back.login');
    }

    public function login(LoginRequest $request)
    {
        if(Auth::guard('backoffice')->attempt([
            'email' => $request->input('email'), 
            'password'  => $request->input('password')
        ])){
            return redirect()->route('dashboard.form');
        }

        return back()->withErrors(['email' => 'Credenciales Incorrectas.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('www.google.com.uy');
    }

}
