<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin/login');
    }

    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ])->validate();

        if (Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            // Authentication passed...
            return response()->json(['success' => 'Login successful']); 
        }
        return redirect()->route('/payment')->with('success', 'Login successful');

        throw ValidationException::withMessages([
            'email' => trans('auth.failed'),
        ]);
    }

    
    
}
