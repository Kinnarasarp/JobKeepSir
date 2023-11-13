<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
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
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login')->with('error', 'as');
    }

    public function dashboard()
    {
        return view('admin.index');
    }

    public function company()
    {
        $company = Company::all();
        return view('admin.company', compact('company'));
    }

    public function verify()
    {
        $company = Company::where('status', 'unverified')->get();
        return view('admin.verify', compact('company'))->with('success', 'data updated');
    }

    public function verifystore($id, Request $request)
    {
        $company = Company::find($id);
        $company->status = $request->status;
        $company->save();
        return redirect()->route('admin.company')->with('success', 'data updated');
    }
}
