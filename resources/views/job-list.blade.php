@extends('template.app')
@section('page_title', 'Job List')
@section('content')
  <!--Page Title-->
  <section class="page-title style-two">
    <div class="auto-container">
      <!-- Job Search Form -->
      <div class="job-search-form">
        <form method="post" action="https://creativelayers.net/themes/superio/job-list-v10.html">
          <div class="row">
            <!-- Form Group -->
            <div class="form-group col-lg-4 col-md-12 col-sm-12">
              <span class="icon flaticon-search-1"></span>
              <input type="text" name="field_name" placeholder="Job title, keywords, or company">
            </div>

            <!-- Form Group -->
            <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
              <span class="icon flaticon-map-locator"></span>
              <input type="text" name="field_name" placeholder="City or postcode">
            </div>

            <!-- Form Group -->
            <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
              <span class="icon flaticon-briefcase"></span>
              <select class="chosen-select">
                <option value="">All Categories</option>
                <option value="44">Accounting / Finance</option>
                <option value="106">Automotive Jobs</option>
                <option value="46">Customer</option>
                <option value="48">Design</option>
                <option value="47">Development</option>
                <option value="45">Health and Care</option>
                <option value="105">Marketing</option>
                <option value="107">Project Management</option>
              </select>
            </div>

            <!-- Form Group -->
            <div class="form-group col-lg-2 col-md-12 col-sm-12 text-right">
              <button type="submit" class="theme-btn btn-style-one">Find Jobs</button>
            </div>
          </div>
        </form>
      </div>
      <!-- Job Search Form -->
    </div>
  </section>
  <!--End Page Title-->

  <!-- Listing Section -->
  <section class="ls-section">
    <div class="auto-container">
      <div class="filters-backdrop"></div>

      <div class="row">
        <!-- Content Column -->
        <div class="content-column col-lg-12">
          <div class="ls-outer">
            <div class="row">
              @foreach ($job as $item)
                <div class="job-block col-lg-6 col-md-12 col-sm-12">
                  <a href="{{ route('jobdetail', $item->id) }}">
                    <div class="inner-box h-100">
                      <div class="content p-0">
                        <h4>{{ $item->title }}</h4>
                        <ul class="job-info">
                          <li><span class="icon flaticon-map-locator"></span> {{ $item->regency->name }},
                            {{ $item->province->name }},
                            {{ $item->country }}</li>
                          <li><span class="icon flaticon-clock-3"></span> {{ date($item->created_at->format('Y-m-d')) }}
                          </li>
                          <li><span class="icon flaticon-money"></span> @currency($item->salary)</li>
                        </ul>
                        <ul class="job-other-info">
                          @if ($item->type == 'Fulltime')
                            <li class="time">{{ $item->type }}</li>
                          @else
                            <li class="privacy">{{ $item->type }}</li>
                          @endif
                        </ul>
                      </div>
                    </div>
                  </a>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Listing Page Section -->
@endsection
