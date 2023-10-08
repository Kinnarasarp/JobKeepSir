<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index()
    {
        $job = JobApply::where('user_id', Auth::user()->id)->get();
        // dd($job);
        return view('appliedjobs', compact('job'));
    }

    public function detail($id)
    {
        $application = JobApply::find($id);
        // dd($application->regency);
        return view('application-detail', compact('application'));
    }

    public function applicant($id)
    {
        $applicant = JobApply::where('job_id', $id)->get();
        $job = Job::find($id);
        // dd($applicant);
        return view('employer.applicants', compact('applicant', 'job'));
    }

    public function applicantdetails($applicant)
    {
        $calon = JobApply::find($applicant);
        return view('employer.applicant-detail', compact('calon'));
    }
}
