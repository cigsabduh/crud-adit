<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class   LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }
    
    // make login authentication from models User
    public function sLogin(Request $request)
    {
        $this->validate($request, [
            'user' => 'required',
            'password' => 'required'
        ]);
        
        if (Auth::attempt(['user' => $request->user, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('error', 'Username or Password is incorrect');
        }
    }
    
    public function keluar()
    {
        Auth::logout();
        return redirect('/login');
    }
}
