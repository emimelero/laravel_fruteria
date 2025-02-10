<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    public function loginForm(){

        return view('auth.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('frutas.index');
    }

    public function newsignup(Request $request){
        User::create([
            'login' => $request->login,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('frutas.index');
    }

    public function signup(){
        return view('auth.signup');
    }
    public function login(Request $request){
        $credenciales = $request->only('login', 'password');
        if (Auth::attempt($credenciales)){
            return redirect()->intended(route('frutas.index'));
        }else{
            $error = 'Usuario incorrecto';
            return view('auth.login', compact('error'));
        }
    }
}
