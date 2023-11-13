@extends('template.app')
@section('page_title', 'Homepage')
@section('content')
  <!-- Banner Section-->
  <section class="banner-section-seven">
    <div class="image-outer">
      <figure class="image"><img src="{{ asset('assets') }}/images/resource/banner-img-8.png" alt=""></figure>
    </div>
    <div class="auto-container">
      <div class="row">
        <div class="content-column col-lg-7 col-md-12 col-sm-12">
          <div class="inner-column">
            <div class="title-box wow fadeInUp" data-wow-delay="500ms">
              <h3>There Are <span class="colored">Many Job</span> <br>Postings Here For you!</h3>
              <div class="text">Find Jobs, Employment & Career Opportunities</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Section-->

  <!-- Job Section -->
  <section class="job-section pt-0">
    <div class="auto-container">
      <div class="sec-title-outer">
        <div class="sec-title">
          <h2>Featured Jobs</h2>
          <div class="text">Know your worth and find the job that qualify your life</div>
        </div>
      </div>

      <div class="row wow fadeInUp">
        <!-- Job Block -->
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
                    <li><span class="icon flaticon-clock-3"></span> {{ date($item->created_at->format('Y-m-d')) }}</li>
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

      <div class="btn-box">
        <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Load More Listing</span></a>
      </div>
    </div>
  </section>
  <!-- End Job Section -->

  <!-- Top Companies -->
  <section class="top-companies style-three">
    <div class="auto-container">
      <div class="sec-title">
        <h2>Top Company Registered</h2>
        <div class="text">Some of the companies we've helped recruit excellent applicants over the years.</div>
      </div>

      <div class="carousel-outer wow fadeInUp">

        <div class="companies-carousel-two owl-carousel owl-theme default-dots">
          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-1">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-1.png" alt="">
              </figure>
              <h4 class="name">Udemy</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-2">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-2.png" alt="">
              </figure>
              <h4 class="name">Stripe</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-3">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-3.png" alt="">
              </figure>
              <h4 class="name">Dropbox</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-4">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-4.png" alt="">
              </figure>
              <h4 class="name">Figma</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-5">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-5.png" alt="">
              </figure>
              <h4 class="name">Upwork</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-1">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-1.png" alt="">
              </figure>
              <h4 class="name">Udemy</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-2">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-2.png" alt="">
              </figure>
              <h4 class="name">Stripe</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-3">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-3.png" alt="">
              </figure>
              <h4 class="name">Dropbox</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-4">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-4.png" alt="">
              </figure>
              <h4 class="name">Figma</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-5">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-5.png" alt="">
              </figure>
              <h4 class="name">Upwork</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-1">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-1.png" alt="">
              </figure>
              <h4 class="name">Udemy</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-2">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-2.png" alt="">
              </figure>
              <h4 class="name">Stripe</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-3">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-3.png" alt="">
              </figure>
              <h4 class="name">Dropbox</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-4">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-4.png" alt="">
              </figure>
              <h4 class="name">Figma</h4>
            </div>
          </div>

          <!-- Company Block -->
          <div class="company-block">
            <div class="inner-box bg-clr-5">
              <figure class="image"><img src="{{ asset('assets') }}/images/resource/company-5.png" alt="">
              </figure>
              <h4 class="name">Upwork</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Top Companies -->

  <!-- Testimonial Section Two -->
  <section class="testimonial-section-two style-two">
    <div class="container-fluid">
      <div class="testimonial-left"><img src="{{ asset('assets') }}/images/resource/testimonial-left.png"
          alt=""></div>
      <div class="testimonial-right"><img src="{{ asset('assets') }}/images/resource/testimonial-right.png"
          alt=""></div>
      <!-- Sec Title -->
      <div class="sec-title text-center">
        <h2>Testimonials From Our Customers</h2>
        <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</div>
      </div>

      <div class="carousel-outer wow fadeInUp">
        <!-- Testimonial Carousel -->
        <div class="testimonial-carousel owl-carousel owl-theme">

          <!--Testimonial Block -->
          <div class="testimonial-block-two">
            <div class="inner-box">
              <div class="thumb"><img src="{{ asset('assets') }}/images/resource/testi-thumb-1.png" alt="">
              </div>
              <h4 class="title">Great quality!</h4>
              <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with
                everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
              <div class="info-box">
                <h4 class="name">Brooklyn Simmons</h4>
                <span class="designation">Web Developer</span>
              </div>
            </div>
          </div>

          <!--Testimonial Block -->
          <div class="testimonial-block-two">
            <div class="inner-box">
              <div class="thumb"><img src="{{ asset('assets') }}/images/resource/testi-thumb-1.png" alt="">
              </div>
              <h4 class="title">Great quality!</h4>
              <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with
                everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
              <div class="info-box">
                <h4 class="name">Brooklyn Simmons</h4>
                <span class="designation">Web Developer</span>
              </div>
            </div>
          </div>

          <!--Testimonial Block -->
          <div class="testimonial-block-two">
            <div class="inner-box">
              <div class="thumb"><img src="{{ asset('assets') }}/images/resource/testi-thumb-1.png" alt="">
              </div>
              <h4 class="title">Great quality!</h4>
              <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with
                everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
              <div class="info-box">
                <h4 class="name">Brooklyn Simmons</h4>
                <span class="designation">Web Developer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonial Section -->
@endsection
