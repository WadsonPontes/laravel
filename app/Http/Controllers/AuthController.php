<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    public function login() {
    	if(Auth::check() === true)
    		return redirect()->route('dashboard');

    	return view('login');
    }

    public function logindo(Request $request) {
    	$credentials = [
    		'name' => $request->name,
    		'password' => $request->password
    	];

    	if (Auth::attempt($credentials))
			return redirect()->route('dashboard');

		return redirect()->route('login');
    }

    public function logout() {
    	Auth::logout();

    	return redirect()->route('login');
    }
}
