<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register',[
            'title'=>'Daftar'
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|min:8|max:255'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
        
        return redirect('login');
    }
}
