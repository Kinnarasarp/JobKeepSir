<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            if ($user->role == 'employer') {
                return redirect()->route('companyprofile');
            }
            return redirect()->route('home');
        }

        Session::flash('error', 'Email atau Password Salah');
        return redirect("login");
    }

    public function registration()
    {
        return view('register');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'unique:users|required|email',
            'role' => 'required',
            'password' => 'required'
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect()->route('login')->with('success', 'iki pesan');
    }

    public function registeremployer()
    {
        return view('employer.register');
    }

    public function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'password' => Hash::make($data['password'])
        ]);

        if ($data['role'] == 'employer') {
            Company::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'user_id' => $user->id
            ]);
        } else {
            Candidate::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'user_id' => $user->id
            ]);
        }
    }

    public function signOut()
    {
        if (Auth::user()->role == 'admin') {
            Auth::logout();
            return redirect()->route('admin.login');
        } else {
            Auth::logout();
            return redirect()->route('home');
        }
    }
}
