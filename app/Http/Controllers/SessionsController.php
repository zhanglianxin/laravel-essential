<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

/**
 * Sign in and sign out
 */
class SessionsController extends Controller
{
    public function __construct()
    {
        // only guest can access login view
        $this->middleware('guest', [
            'only' => ['create'],
        ]);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            if (Auth::user()->activated) {
                session()->flash('success', 'Welcome back here!');

                return redirect()->intended(route('users.show', [Auth::user()]));
            } else {
                Auth::logout();
                session()->flash('warning', 'Your account is not activated, please check your registration email!');

                return redirect('/');
            }
        } else {
            session()->flash('danger', 'Sorry, your information is not matched.');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'You have logout!');

        return redirect('login');
    }
}
