<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/job-list', [HomeController::class, 'joblist'])->name('joblist');

Route::middleware('guest')->group(function () {
  //auth
  //register for candidate
  Route::get('/register', [AuthController::class, 'registration'])->name('register');
  Route::post('/register', [AuthController::class, 'customRegistration'])->name('prosesregister');

  //register for employer
  Route::get('/register-for-employer', [AuthController::class, 'registeremployer'])->name('register.employer');

  Route::get('/login', [AuthController::class, 'login'])->name('login');
  Route::post('/login', [AuthController::class, 'customLogin'])->name('proseslogin');
  //end auth

  Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.login');
  Route::post('/admin/login', [AdminController::class, 'customLogin'])->name('admin.proseslogin');
});

Route::middleware('auth')->group(function () {
  //admin
  Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
  Route::get('/admin/company', [AdminController::class, 'company'])->name('admin.company');
  Route::get('/admin/verify', [AdminController::class, 'verify'])->name('admin.verify');
  Route::post('/admin/verify/{id}', [AdminController::class, 'verifystore'])->name('admin.verifystore');
  //end admin

  //candidate
  Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
  Route::post('/profile', [ProfileController::class, 'store'])->name('profile.add');

  Route::get('/my-application', [ApplicationController::class, 'index'])->name('application');
  Route::get('/my-application/{id}', [ApplicationController::class, 'detail'])->name('applicationdetail');

  Route::get('/apply-job/{id}', [JobController::class, 'applyjob'])->name('jobapply');
  Route::post('/apply-job', [JobController::class, 'submitapplication'])->name('submitapplication');
  //end candidate

  Route::get('/profile/getkota/{id}', [ProfileController::class, 'getKota'])->name('profile.getKota');

  //employer
  Route::get('/employer-dashboard', [HomeController::class, 'employerdashboard'])->name('employer.dashboard');
  Route::get('/company-profile', [ProfileController::class, 'companyprofile'])->name('companyprofile');
  Route::post('/company-profile', [ProfileController::class, 'storecompany'])->name('companyprofile.add');
  Route::get('/job-post', [JobController::class, 'index'])->name('jobpost');
  Route::post('/job-post', [JobController::class, 'store'])->name('jobpost.add');

  Route::get('/job-edit/{id}', [JobController::class, 'edit'])->name('jobpost.edit');
  Route::post('/job-edit/{id}', [JobController::class, 'update'])->name('jobpost.update');
  Route::get('/manage-jobs', [JobController::class, 'managejobs'])->name('managejobs');

  Route::get('/{id}/applicants', [ApplicationController::class, 'applicant'])->name('applicants');
  Route::get('/{id}/applicants/{applicant}', [ApplicationController::class, 'applicantdetails'])->name('applicant.details');
  //end employer

  Route::get('/job-detail/{id}', [JobController::class, 'detail'])->name('jobdetail');

  Route::get('/signout', [AuthController::class, 'signout'])->name('signout');
});
