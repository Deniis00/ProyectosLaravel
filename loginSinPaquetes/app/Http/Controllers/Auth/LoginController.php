<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login()
    {
        
        $credentials = request()->only('email', 'password');
        $remember = request()->filled('remember');

        if (Auth::attempt($credentials, $remember))
        {
            //regenera la sesioaaaaaaaa l csrf
            request()->session()->regenerate();
            return redirect()
                    ->intended('dashboard')
                    ->with('status','Session inicia con exito!!');
        }
        
        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
            'passwor' => __('auth.password')

        ]);
    }
}
