<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        $remember = request()->filled('remember');

        if (Auth::attempt($credentials, $remember)) {
            //regenera la sesion l csrf
            request()->session()->regenerate();
            return redirect()
                ->intended('dashboard')
                ->with('status', 'Session inicia con exito!!');
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
            'password' => __('auth.password')

        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
