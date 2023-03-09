<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login',[
            'title'=>'Masuk'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'=>'required|max:255|email',
            'password'=>'required|min:8|max:255'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended();
        }

        return back()->with('gagal','login gagal');
    }

    public function logout(Request $request){
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
