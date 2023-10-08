<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $job = Job::where('status', 'active')->limit(6)->get();
        return view('index', compact('job'));
    }

    public function joblist()
    {
        $job = Job::where('status', 'active')->get();
        return view('job-list', compact('job'));
    }

    public function employerdashboard()
    {
        $job = Job::where('company_id', Auth::user()->company->id)->count();
        $application = JobApply::where('job_id', Auth::user()->company->id)->count();
        return view('employer.dashboard', compact('job', 'application'));
    }
}
