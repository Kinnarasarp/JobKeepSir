<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Company;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $province = Province::all();
        $regency = Regency::all();
        $candidate = Candidate::where('user_id', Auth::user()->id)->first();
        return view('profile', compact('province', 'regency', 'candidate'));
    }

    public function store(Request $request)
    {
        $candidate = Candidate::where('user_id', auth()->user()->id)->first();

        $this->validate($request, [
            'name' => 'required|min:3',
            'job_title' => 'required|min:3',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'language' => 'required',
            'experience' => 'required',
            'age' => 'required|numeric',
            'description' => 'required|min:15',
            'address' => 'required|min:3'
        ]);

        if ($candidate->count() < 1) {
            $candidate = new Candidate();
        }
        $candidate->name = $request->name;
        $candidate->job_title = $request->job_title;
        $candidate->phone = $request->phone;
        $candidate->email = $request->email;
        $candidate->language = $request->language;
        $candidate->experience = $request->experience;
        $candidate->age = $request->age;
        $candidate->description = $request->description;
        $candidate->facebook = $request->facebook;
        $candidate->twitter = $request->twitter;
        $candidate->linkedin = $request->linkedin;
        $candidate->instagram = $request->instagram;
        $candidate->country = $request->country;
        $candidate->province_id = $request->province_id;
        $candidate->regency_id = $request->regency_id;
        $candidate->address = $request->address;
        $candidate->save();

        return redirect()->route('profile')->with('success', 'data updated');
    }

    public function companyprofile()
    {
        $province = Province::all();
        $regency = Regency::all();
        $company = Company::where('user_id', Auth::user()->id)->first();
        return view('employer.profile', compact('province', 'regency', 'company'));
    }

    public function storecompany(Request $request)
    {
        $comp = Company::where('user_id', auth()->user()->id)->first();

        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'website' => 'required',
            'about' => 'required|min:10',
            'address' => 'required|min:3'
        ]);

        if ($comp->count() < 1) {
            $comp = new Company();
        }
        $comp->name = $request->name;
        $comp->email = $request->email;
        $comp->phone = $request->phone;
        $comp->website = $request->website;
        $comp->about = $request->about;
        $comp->country = $request->country;
        $comp->province_id = $request->province_id;
        $comp->regency_id = $request->regency_id;
        $comp->address = $request->address;
        $comp->save();

        return redirect()->route('companyprofile')->with('success', 'data updated');
    }

    public function getKota(Request $request, $id)
    {
        $regency = Regency::where('province_id', $id)->get();

        return view('profileKota', compact('regency'));
    }
}
