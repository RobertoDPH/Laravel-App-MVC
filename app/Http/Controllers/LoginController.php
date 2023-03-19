<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function show()
    {
        if(Auth::check()){
            return redirect('/');
        }
        return view('User/login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        if(!Auth::validate($credentials)):
           return redirect()->to('/login/error');
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        
        Auth::login($user);

        return redirect('/');
    }
}
