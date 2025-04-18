<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

    // نمایش فرم لاگین
    public function showLogin() {
        return view('auth.login');
    }

    // پردازش لاگین
    public function login( Request $request ) {
        $request->validate(['email'    => 'required|email',
                            'password' => 'required',]);

        $credentials = $request->only('email', 'password');

        if ( Auth::attempt($credentials) ) {
            return redirect('/dashboard'); // پس از لاگین موفق
        }

        return back()->withErrors(['email' => 'اطلاعات وارد شده صحیح نیست.',]);
    }

    // خروج کاربر
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
