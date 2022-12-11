<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function register()
    {
        
        return view('register-tsania');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'cpassword' => 'required|same:password',
        ]);

        $user = new User([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('login-tsania')->with('success', 'Registration success. Please login!');
    }


    public function login()
    {
    
        return view('login-tsania');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Wrong email or password',
        ]);
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('password', $data);
    }

    public function password_action(Request $request)
    {   
         
        $request->validate([
            'name' => 'required',
            'no_hp' => 'required',
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->nama = $request->name;
        $user->no_hp = $request->no_hp;
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Profile and Password changed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
