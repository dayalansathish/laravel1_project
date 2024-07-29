<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register'); 
    }

    public function registerPost(Request $request){

       $request-> validate(
        [
            'email' => 'required',
            'password' => 'required|confirmed'
        ]
        );

        $user = new User();
        $user -> email = $request->input('email');
        $user -> password = Hash::make($request->input('password'));
        $user -> save();

        Auth::login($user);

        return redirect()->route('dashboard');
        
    }
    
}
