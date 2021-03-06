<?php

namespace App\Http\Controllers\Auth;
use Auth;

use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function login()
    {
        $credentials = $this->validate(request(),[
            'email' => 'email|required|string',
            'password'=>'required|string'

            ]);
        
       if (Auth::attempt($credentials)) {
            return 'tu sesion ha iniciado correctamente';
        } 
        return back()->withError(['email' => trans('auth.failed')]);
    }
}
