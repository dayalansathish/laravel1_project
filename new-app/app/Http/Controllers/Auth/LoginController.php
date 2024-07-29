<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request){

        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
            );

            $email = $request->input('email');
            $password = $request->input('password');

            if(Auth::attempt(['email'=>$email,'password'=>$password])){
                $user = User::where('email',$email)->first();
                Auth::login($user);
                echo 1;
            }else{
                echo 2;
            }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('account.login');
    }
}
