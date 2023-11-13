@extends('template.app-dashboard')
@section('page_title', 'Application')
@section('application_active', 'active')
@section('content')
  <div class="container">
    <section class="user-dashboard">
      <div class="dashboard-outer">
        <a href="{{ route('application') }}">
          <p class="text-primary mb-2">
            << Back</p>
        </a>
        <div class="row">
          <div class="default-form col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>Job Application For {{ $application->job->title }}</h4>
                </div>
                <div class="widget-content">
                  <div class="row">
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Full Name</label>
                      <input disabled type="text" name="name" value="{{ $application->name }}" placeholder="Jerome">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Job Title</label>
                      <input disabled type="text" name="job_title" value="{{ $application->job_title }}"
                        placeholder="UI Designer">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Phone</label>
                      <input disabled type="text" name="phone" value="{{ $application->phone }}"
                        placeholder="Example : 082143021xxxxx">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Email address</label>
                      <input disabled type="text" name="email" value="{{ $application->email }}"
                        placeholder="creativelayers">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Languages</label>
                      <input disabled type="text" name="language" value="{{ $application->language }}"
                        placeholder="English, Turkish">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Experience</label>
                      <input disabled type="text" name="experience" value="{{ $application->experience }}"
                        placeholder="5-10 Years">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Age</label>
                      <input disabled type="number" name="age" value="{{ $application->age }}" placeholder="24">
                    </div>

                    <!-- About Company -->
                    <div class="form-group col-lg-12 col-md-12">
                      <label>Description</label>
                      <textarea disabled name="description">{{ $application->description }}</textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>Social Network</h4>
                </div>

                <div class="widget-content">
                  <div class="row">
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Facebook</label>
                      <input disabled type="text" name="facebook" value="{{ $application->facebook }}"
                        placeholder="www.facebook.com/Invision">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Twitter</label>
                      <input disabled type="text" name="twitter" value="{{ $application->twitter }}" placeholder="">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Linkedin</label>
                      <input disabled type="text" name="linkedin" value="{{ $application->linkedin }}" placeholder="">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Instagram</label>
                      <input disabled type="text" name="instagram" value="{{ $application->instagram }}"
                        placeholder="">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>Contact Information</h4>
                </div>

                <div class="widget-content">
                  <div class="row">
                    <!-- Input -->
                    <div class="form-group col-lg-12 col-md-12">
                      <label>Country</label>
                      <input disabled type="text" name="address" value="{{ $application->country }}">
                    </div>
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-6">
                      <label>Province</label>
                      <input disabled type="text" name="address" value="{{ $application->province->name }}">
                    </div>
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-6">
                      <label>City</label>
                      <input disabled type="text" name="address" value="{{ $application->regency->name }}">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-12 col-md-12">
                      <label>Complete Address</label>
                      <input disabled type="text" name="address" value="{{ $application->address }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  Curriculum Vitae
                </div>
                <div class="widget-content d-flex justify-content-center" style="padding-bottom: 35px;">
                  <img src="{{ asset('assets') }}/images/cv/{{ $application->cv }}" class="w-75 h-auto"
                    alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
