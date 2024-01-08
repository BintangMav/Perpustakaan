<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        if(Auth::guard('web')->attempt ($request->only('username', 'password'))){
           if(Auth::User()->level=='admin'){
            return redirect('/dashboard');
           }elseif(Auth::User()->level=='petugas'){
            return redirect('/dashboard');
           }
        }else{
            return redirect('/login')->with('error', 'Maaf Username dan Password yang Anda Masukan Salah!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return view('login');
    }

}
