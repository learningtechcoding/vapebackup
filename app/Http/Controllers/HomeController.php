<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
     public function handleLogin(Request $request)
    {
        dd($request->all());
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect to home page if login is successful
            return redirect()->route('home');
        }

        // If authentication fails, redirect back with an error message
        return redirect()->route('login')->withErrors(['login' => 'Invalid credentials']);
    }
}
