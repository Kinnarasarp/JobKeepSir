@extends('template.app-dashboard')
@section('page_title', 'Applicant Details')
@section('manage-job_active', 'active')
@section('content')
  @php
    $new_char = '+62';
    $mes = $calon->phone;
    $mes2 = substr($mes, 1);
    $mes2 = $new_char . substr($mes, 1);
  @endphp
  <div class="container">
    <section class="user-dashboard">
      <div class="dashboard-outer">
        <a href="{{ route('applicants', $calon->job->id) }}">
          <p class="text-primary mb-2">
            << Back</p>
        </a>
        <div class="row">
          <div class="default-form col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>Job Application For {{ $calon->job->title }}</h4>
                </div>
                <div class="widget-content">
                  <div class="row">
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Full Name</label>
                      <input disabled type="text" name="name" value="{{ $calon->name }}" placeholder="Jerome">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Job Title</label>
                      <input disabled type="text" name="job_title" value="{{ $calon->job_title }}"
                        placeholder="UI Designer">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Phone</label>
                      <input disabled type="text" name="phone" value="{{ $calon->phone }}"
                        placeholder="Example : 082143021xxxxx">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Email address</label>
                      <input disabled type="text" name="email" value="{{ $calon->email }}"
                        placeholder="creativelayers">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Languages</label>
                      <input disabled type="text" name="language" value="{{ $calon->language }}"
                        placeholder="English, Turkish">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Experience</label>
                      <input disabled type="text" name="experience" value="{{ $calon->experience }}"
                        placeholder="5-10 Years">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Age</label>
                      <input disabled type="number" name="age" value="{{ $calon->age }}" placeholder="24">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Whatsapp</label>
                      <div class="row">
                        <a href="https://wa.me/{{ $mes2 }}?text=Ini Perusahaan {{ $calon->job->company->name }}">
                          <button class="theme-btn btn-style-four large col-12">Click To Contact This Person</button>
                        </a>
                      </div>
                    </div>

                    <!-- About Company -->
                    <div class="form-group col-lg-12 col-md-12">
                      <label>Description</label>
                      <textarea disabled name="description">{{ $calon->description }}</textarea>
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
                      <input disabled type="text" name="facebook" value="{{ $calon->facebook }}"
                        placeholder="www.facebook.com/Invision">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Twitter</label>
                      <input disabled type="text" name="twitter" value="{{ $calon->twitter }}" placeholder="">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Linkedin</label>
                      <input disabled type="text" name="linkedin" value="{{ $calon->linkedin }}" placeholder="">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Instagram</label>
                      <input disabled type="text" name="instagram" value="{{ $calon->instagram }}" placeholder="">
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
                      <input disabled type="text" name="address" value="{{ $calon->country }}">
                    </div>
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-6">
                      <label>Province</label>
                      <input disabled type="text" name="address" value="{{ $calon->province->name }}">
                    </div>
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-6">
                      <label>City</label>
                      <input disabled type="text" name="address" value="{{ $calon->regency->name }}">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-12 col-md-12">
                      <label>Complete Address</label>
                      <input disabled type="text" name="address" value="{{ $calon->address }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>
                    Curriculum Vitae
                  </h4>
                </div>
                <div class="widget-content d-flex justify-content-center" style="padding-bottom: 35px;">
                  <img src="{{ asset('assets') }}/images/cv/{{ $calon->cv }}" class="w-75 h-auto" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
