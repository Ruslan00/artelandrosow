<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function postSignin(Request $request)
    {
	    if (!Auth::attempt($request->only('email', 'password'), $request->has('remember'))) 
	    {
		return redirect()->back();
	    }
	    
	    return redirect()->route('home');
    }
    
    public function postReg(Request $request)
    {
        $user = User::create([
            'email'    => $request->input('email'),
            'name'     => $request->input('name'),
            'password' => bcrypt($request->input('password'))
        ]);

        Auth::loginUsingId($user->id);

        return redirect()
                ->back()
                ->with('success', 'Вы успешно зарегистрировались');
    }
}
