@extends('template.app')
@section('page_title', 'Job Detail')
@section('content')
  <style>
    #mm-0>section>div.job-detail-outer>div>div>div.content-column.col-lg-8.col-md-12.col-sm-12>div.job-detail>ul {
      position: relative;
      margin-bottom: 50px;
    }

    #mm-0>section>div.job-detail-outer>div>div>div.content-column.col-lg-8.col-md-12.col-sm-12>div.job-detail>ul>li {
      list-style-type: disc;
      list-style-position: inside;
    }
  </style>
  <!-- Job Detail Section -->
  <section class="job-detail-section">
    @if (Session::has('success'))
      <div class="auto-container">
        <div class="message-box success">
          <p>Success: Job Application Sent!</p>
          <button class="close-btn"><span class="close_icon"></span></button>
        </div>
      </div>
    @endif
    <!-- Upper Box -->
    <div class="upper-box">
      <div class="auto-container">
        <!-- Job Block -->
        <div class="job-block-seven">
          <div class="inner-box">
            <div class="content">
              <span class="company-logo"><img src="images/resource/company-logo/5-1.png" alt=""></span>
              <h4><a href="#">{{ $job->title }}</a></h4>
              <ul class="job-info">
                <li><span class="icon flaticon-map-locator"></span> {{ $job->regency->name }},
                  {{ $job->province->name }},
                  {{ $job->country }}</li>
                <li><span class="icon flaticon-clock-3"></span> {{ date($job->created_at->format('Y-m-d')) }}
                </li>
                <li><span class="icon flaticon-money"></span> @currency($job->salary)</li>
              </ul>
              <ul class="job-other-info">
                @if ($job->type == 'Fulltime')
                  <li class="time">{{ $job->type }}</li>
                @else
                  <li class="privacy">{{ $job->type }}</li>
                @endif
              </ul>
            </div>

            <div class="btn-box">

              @if (Auth::user()->role == 'employer')
                @if ($company->id == $job->company_id)
                  <a href="{{ route('jobpost.edit', $job->id) }}" class="theme-btn btn-style-one">Manage Job</a>
                @endif
              @else
                @if ($application == null)
                  <a href="{{ route('jobapply', $job->id) }}" class="theme-btn btn-style-one">Apply For Job</a>
                @elseif ($application->user_id == Auth::user()->id)
                  <a href="{{ route('application') }}" class="theme-btn btn-style-one">See My Application
                    For This
                    Job</a>
                @else
                  <a href="{{ route('jobapply', $job->id) }}" class="theme-btn btn-style-one">Apply For Job</a>
                @endif
                {{-- @dd($application)
                @if ($application == null)
                  <a href="{{ route('jobapply', $job->id) }}" class="theme-btn btn-style-one">Apply For Job</a>
                @elseif (isset($application->job_id))
                  <a href="{{ route('applicationdetail', $job->id) }}" class="theme-btn btn-style-one">See My Application
                    For This
                    Job</a>
                @else
                  ads
                  <a href="{{ route('jobapply', $job->id) }}" class="theme-btn btn-style-one">Apply For Job</a>
                @endif --}}
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="job-detail-outer">
      <div class="auto-container">
        <div class="row">
          <div class="content-column col-lg-7 col-md-12 col-sm-12">
            <div class="job-detail">
              <h4>Job Description</h4>
              {!! $job->description !!}
            </div>
          </div>

          <div class="sidebar-column col-lg-5 col-md-12 col-sm-12">
            <aside class="sidebar">
              <div class="sidebar-widget company-widget">
                <div class="widget-content">
                  <div class="company-title">
                    <div class="company-logo"><img src="images/resource/company-7.png" alt=""></div>
                    <h5 class="company-name">{{ $job->company->name }}</h5>
                  </div>

                  <ul class="company-info">
                    <li>Phone: <span>{{ $job->company->phonenumber }}</span></li>
                    <li>Email: <span>{{ $job->company->email }}</span></li>
                    <li>Location: <span>{{ $job->company->regency->name }}, {{ $job->company->province->name }},
                        {{ $job->company->country }}</span>
                    </li>
                  </ul>

                  <div class="btn-box"><a href="#"
                      class="theme-btn btn-style-three">{{ $job->company->website }}</a>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Job Detail Section -->
@endsection
