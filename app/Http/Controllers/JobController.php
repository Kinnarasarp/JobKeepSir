<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Regency;
use App\Models\Province;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\JobApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        $province = Province::all();
        $regency = Regency::all();
        $company = Company::where('user_id', Auth::user()->id)->first();
        return view('employer.job-post', compact('province', 'regency', 'company'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'description' => 'required|min:15',
            'salary' => 'required|numeric',
            'address' => 'required'
        ]);

        $job = new Job();
        $job->title = $request->title;
        $job->description = $request->description;
        $job->type = $request->type;
        $job->salary = $request->salary;
        $job->country = $request->country;
        $job->province_id = $request->province_id;
        $job->regency_id = $request->regency_id;
        $job->company_id = $request->company_id;
        $job->address = $request->address;
        if (isset($request->status)) {
            $job->status = 'Active';
        } else {
            $job->status = 'Inactive';
        }
        $job->save();

        return redirect()->route('managejobs')->with('success', 'data updated');
    }

    public function edit($id)
    {
        $province = Province::all();
        $regency = Regency::all();
        $job = Job::find($id);
        return view('employer.job-edit', compact('job', 'province', 'regency'));
    }

    public function update($id, Request $request)
    {
        $job = Job::find($id);
        $this->validate($request, [
            'title' => 'required|min:3',
            'description' => 'required|min:15',
            'salary' => 'required|numeric',
            'address' => 'required'
        ]);
        $job->title = $request->title;
        $job->description = $request->description;
        $job->type = $request->type;
        $job->salary = $request->salary;
        $job->country = $request->country;
        $job->province_id = $request->province_id;
        $job->regency_id = $request->regency_id;
        $job->address = $request->address;
        if (isset($request->status)) {
            $job->status = 'Active';
        } else {
            $job->status = 'Inactive';
        }
        $job->save();

        return redirect()->route('managejobs')->with('success', 'data updated');
    }

    public function managejobs()
    {
        $job = Job::where('company_id', Auth::user()->company->id)->get();
        return view('employer.job-manage', compact('job'));
    }

    public function detail($id)
    {
        $job = Job::find($id);
        // $application = JobApply::find($id);
        $app = JobApply::where('job_id', $id)->get();
        $application = [];
        foreach ($app as $key => $value) {
            $application = $value->where('user_id', auth()->user()->id)->first();
        }

        // dd($application);
        if (isset(Auth::user()->company)) {
            $company = Company::find(Auth::user()->company->id);
            return view('job-detail', compact('job', 'application', 'company', 'id'));
        } else {
            return view('job-detail', compact('job', 'application'));
        }
    }

    public function applyjob($id)
    {
        $province = Province::all();
        $regency = Regency::all();
        $job = Job::find($id);
        $candidate = Candidate::find(Auth::user()->candidate->id);
        return view('job-apply', compact('province', 'regency', 'job', 'candidate'));
    }

    public function submitapplication(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|regex:/^[\pL\s\-]+$/u',
            'job_title' => 'required|min:3',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'language' => 'required',
            'experience' => 'required',
            'age' => 'required|numeric',
            'description' => 'required|min:15',
            'address' => 'required|min:3',
            'cv' => 'required|mimes:png,jpg,jpeg'
        ]);

        $file = $request->file('cv');
        $fileName = time() . '-' . $file->getClientOriginalName();

        $file->move('assets/images/cv/', $fileName);

        $application = new JobApply();
        $application->user_id = $request->user_id;
        $application->job_id = $request->job_id;
        $application->cv = $fileName;
        $application->name = $request->name;
        $application->job_title = $request->job_title;
        $application->phone = $request->phone;
        $application->email = $request->email;
        $application->language = $request->language;
        $application->experience = $request->experience;
        $application->age = $request->age;
        $application->description = $request->description;
        $application->facebook = $request->facebook;
        $application->twitter = $request->twitter;
        $application->linkedin = $request->linkedin;
        $application->instagram = $request->instagram;
        $application->country = $request->country;
        $application->province_id = $request->province_id;
        $application->regency_id = $request->regency_id;
        $application->address = $request->address;
        $application->save();

        // $array = [];
        $redirect = $request->job_id;
        // array_push($array, $redirect);
        // dd($array);

        return redirect()->route('jobdetail', $redirect)->with('success', 'data updated');
    }
}
