<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class AuthManager extends Controller
{
    public function authentication(Request $request)
    {
       
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        // return redirect()->back()->withErrors($validatedData);

        // dd($validatedData);
        $credentials = $request->only('email', 'password');
        //dd($credentials);
        //login mathod
        
        // $hashedString = bcrypt('12345678');

        // dd($hashedString);
        
        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            if ($user->status == 1) {
                $request->session()->regenerate();
                // start a session for user role and permission

                // end a session for user role and permission
                return redirect()->intended('/');
            } else {
                auth()->logout();
                return redirect()->back()->with('error', 'Employee Inactive');
            }
        }

        return redirect()->back()->with('error', 'Employee not found');
    }
    ///logout///
    public function logout()
    {
        session()->flush(); // This will remove all items from the session
        auth()->logout();
        return redirect()->route('login');
    }

}
