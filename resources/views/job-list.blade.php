@extends('template.app')
@section('page_title', 'Job List')
@section('content')
  <!--Page Title-->
  <section class="page-title style-two">
    <div class="auto-container">
      <h2 class="fw-bold">Job List</h2>
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
