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
              <h3>There Are <span class="colored">93,178</span> <br>Postings Here For you!</h3>
              <div class="text">Find Jobs, Employment & Career Opportunities</div>
            </div>

            <!-- Job Search Form -->
            <div class="job-search-form wow fadeInUp" data-wow-delay="1000ms">
              <form method="post" action="https://creativelayers.net/themes/JobKeepSir/job-list-v10.html">
                <div class="row">
                  <div class="form-group col-lg-5 col-md-12 col-sm-12">
                    <span class="icon flaticon-search-1"></span>
                    <input type="text" name="field_name" placeholder="Job title, keywords, or company">
                  </div>
                  <!-- Form Group -->
                  <div class="form-group col-lg-4 col-md-12 col-sm-12 location">
                    <span class="icon flaticon-map-locator"></span>
                    <input type="text" name="field_name" placeholder="City or postcode">
                  </div>
                  <!-- Form Group -->
                  <div class="form-group col-lg-3 col-md-12 col-sm-12 btn-box">
                    <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Find
                        Jobs</span></button>
                  </div>
                </div>
              </form>
            </div>
            <!-- Job Search Form -->

            <!-- Popular Search -->
            <div class="popular-searches wow fadeInUp" data-wow-delay="1500ms">
              <span class="title">Popular Searches : </span>
              <a href="#">Designer</a>,
              <a href="#">Developer</a>,
              <a href="#">Web</a>,
              <a href="#">IOS</a>,
              <a href="#">PHP</a>,
              <a href="#">Senior</a>,
              <a href="#">Engineer</a>,
            </div>
            <!-- End Popular Search -->

            <!--Clients Section-->
            <section class="clients-section-two wow fadeInUp" data-wow-delay="2000ms">
              <!--Sponsors Carousel-->
              <ul class="sponsors-carousel-two owl-carousel owl-theme">
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="{{ asset('assets') }}/images/clients/1-1.png"
                        alt=""></a>
                  </figure>
                </li>
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="{{ asset('assets') }}/images/clients/1-2.png"
                        alt=""></a>
                  </figure>
                </li>
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="{{ asset('assets') }}/images/clients/1-3.png"
                        alt=""></a>
                  </figure>
                </li>
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="{{ asset('assets') }}/images/clients/1-4.png"
                        alt=""></a>
                  </figure>
                </li>
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="{{ asset('assets') }}/images/clients/1-5.png"
                        alt=""></a>
                  </figure>
                </li>
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="{{ asset('assets') }}/images/clients/1-6.png"
                        alt=""></a>
                  </figure>
                </li>
                <li class="slide-item">
                  <figure class="image-box"><a href="#"><img src="{{ asset('assets') }}/images/clients/1-7.png"
                        alt=""></a>
                  </figure>
                </li>
              </ul>
            </section>
            <!-- End Clients Section-->
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

  <!-- About Section -->
  <section class="about-section style-two">
    <div class="auto-container">
      <div class="row">
        <!-- Content Column -->
        <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
          <div class="inner-column wow fadeInLeft">
            <div class="sec-title">
              <h2>Video Job Ads: Our Top Pick</h2>
              <div class="text">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</div>
            </div>
            <ul class="list-style-two">
              <li>Creative Study Pattern</li>
              <li>Quick Crash Courses</li>
              <li>Certification Awarded</li>
              <li>Provided with Experimental Examples</li>
            </ul>
            <a href="https://www.youtube.com/watch?v=4UvS3k8D4rs" class="theme-btn btn-style-one lightbox-image">Watch
              Video</a>
          </div>
        </div>

        <!-- Image Column -->
        <div class="image-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner-column wow fadeInRight">
            <figure class="image">
              <img src="{{ asset('assets') }}/images/resource/image-5.png" alt="">
              <a href="https://www.youtube.com/watch?v=4UvS3k8D4rs" class="play-btn lightbox-image"
                data-fancybox="images"><span class="flaticon-play-button-2 icon"></span></a>
            </figure>
          </div>
        </div>
      </div>


      <!-- Fun Fact Section -->
      <div class="fun-fact-section wow fadeInUp">
        <div class="row">
          <!--Column-->
          <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="4">0</span>M</div>
            <h4 class="counter-title">4 million daily active users</h4>
          </div>

          <!--Column-->
          <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="12">0</span>k</div>
            <h4 class="counter-title">Over 12k open job positions</h4>
          </div>

          <!--Column-->
          <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="20">0</span>M</div>
            <h4 class="counter-title">Over 20 million stories shared</h4>
          </div>
        </div>
      </div>
      <!-- Fun Fact Section -->
    </div>
  </section>
  <!-- End About Section -->


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

  <!-- Job Categories -->
  <section class="job-categories">
    <div class="auto-container">
      <div class="sec-title text-center">
        <h2>Popular Job Categories</h2>
        <div class="text">2020 jobs live - 293 added today.</div>
      </div>

      <div class="row wow fadeInUp">
        <!-- Category Block -->
        <div class="category-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="content">
              <span class="icon flaticon-money-1"></span>
              <h4><a href="#">Accounting / Finance</a></h4>
              <p>(2 open positions)</p>
            </div>
          </div>
        </div>

        <!-- Category Block -->
        <div class="category-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="content">
              <span class="icon flaticon-promotion"></span>
              <h4><a href="#">Marketing</a></h4>
              <p>86 open positions)</p>
            </div>
          </div>
        </div>

        <!-- Category Block -->
        <div class="category-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="content">
              <span class="icon flaticon-vector"></span>
              <h4><a href="#">Design</a></h4>
              <p>43 open positions)</p>
            </div>
          </div>
        </div>

        <!-- Category Block -->
        <div class="category-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="content">
              <span class="icon flaticon-web-programming"></span>
              <h4><a href="#">Development</a></h4>
              <p>(12 open positions)</p>
            </div>
          </div>
        </div>

        <!-- Category Block -->
        <div class="category-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="content">
              <span class="icon flaticon-headhunting"></span>
              <h4><a href="#">Human Resource</a></h4>
              <p>55 open positions)</p>
            </div>
          </div>
        </div>

        <!-- Category Block -->
        <div class="category-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="content">
              <span class="icon flaticon-rocket-ship"></span>
              <h4><a href="#">Project Management</a></h4>
              <p>(2 open positions)</p>
            </div>
          </div>
        </div>

        <!-- Category Block -->
        <div class="category-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="content">
              <span class="icon flaticon-support-1"></span>
              <h4><a href="#">Customer Service</a></h4>
              <p>(2 open positions)</p>
            </div>
          </div>
        </div>

        <!-- Category Block -->
        <div class="category-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="content">
              <span class="icon flaticon-first-aid-kit-1"></span>
              <h4><a href="#">Health and Care</a></h4>
              <p>(25 open positions)</p>
            </div>
          </div>
        </div>

        <!-- Category Block -->
        <div class="category-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="content">
              <span class="icon flaticon-car"></span>
              <h4><a href="#">Automotive Jobs</a></h4>
              <p>92 open positions</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Job Categories -->

  <!-- Job Section -->
  <section class="job-section style-two">
    <div class="auto-container wow fadeInUp">
      <div class="sec-title text-center">
        <h2>Recent Jobs</h2>
        <div class="text">Know your worth and find the job that qualify your life</div>
      </div>

      <div class="job-carousel owl-carousel owl-theme default-dots">
        <!-- Job Block -->
        <div class="job-block-three">
          <div class="inner-box">
            <div class="content">
              <span class="company-logo"><img src="{{ asset('assets') }}/images/resource/company-logo/2-1.png"
                  alt=""></span>
              <h4><a href="#">Software Engineer</a></h4>
              <ul class="job-info">
                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
              </ul>
            </div>
            <ul class="job-other-info">
              <li class="time">Full Time</li>
              <li class="required">Urgent</li>
            </ul>
            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
          </div>
        </div>

        <!-- Job Block -->
        <div class="job-block-three">
          <div class="inner-box">
            <div class="content">
              <span class="company-logo"><img src="{{ asset('assets') }}/images/resource/company-logo/2-2.png"
                  alt=""></span>
              <h4><a href="#">Recruiting Coordinator</a></h4>
              <ul class="job-info">
                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
              </ul>
            </div>
            <ul class="job-other-info">
              <li class="time">Full Time</li>
              <li class="required">Urgent</li>
            </ul>
            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
          </div>
        </div>

        <!-- Job Block -->
        <div class="job-block-three">
          <div class="inner-box">
            <div class="content">
              <span class="company-logo"><img src="{{ asset('assets') }}/images/resource/company-logo/2-3.png"
                  alt=""></span>
              <h4><a href="#">Product Manager, Studio</a></h4>
              <ul class="job-info">
                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
              </ul>
            </div>
            <ul class="job-other-info">
              <li class="time">Full Time</li>
              <li class="required">Urgent</li>
            </ul>
            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
          </div>
        </div>

        <!-- Job Block -->
        <div class="job-block-three">
          <div class="inner-box">
            <div class="content">
              <span class="company-logo"><img src="{{ asset('assets') }}/images/resource/company-logo/2-4.png"
                  alt=""></span>
              <h4><a href="#">Senior Product Designer</a></h4>
              <ul class="job-info">
                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
              </ul>
            </div>
            <ul class="job-other-info">
              <li class="time">Full Time</li>
              <li class="required">Urgent</li>
            </ul>
            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
          </div>
        </div>

        <!-- Job Block -->
        <div class="job-block-three">
          <div class="inner-box">
            <div class="content">
              <span class="company-logo"><img src="{{ asset('assets') }}/images/resource/company-logo/2-5.png"
                  alt=""></span>
              <h4><a href="#">Product Manager, Risk</a></h4>
              <ul class="job-info">
                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
              </ul>
            </div>
            <ul class="job-other-info">
              <li class="time">Full Time</li>
              <li class="privacy">Private</li>
            </ul>
            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
          </div>
        </div>

        <!-- Job Block -->
        <div class="job-block-three">
          <div class="inner-box">
            <div class="content">
              <span class="company-logo"><img src="{{ asset('assets') }}/images/resource/company-logo/2-6.png"
                  alt=""></span>
              <h4><a href="#">Technical Architect</a></h4>
              <ul class="job-info">
                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
              </ul>
            </div>
            <ul class="job-other-info">
              <li class="time">Full Time</li>
              <li class="privacy">Private</li>
            </ul>
            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
          </div>
        </div>


        <!-- Job Block -->
        <div class="job-block-three">
          <div class="inner-box">
            <div class="content">
              <span class="company-logo"><img src="{{ asset('assets') }}/images/resource/company-logo/2-7.png"
                  alt=""></span>
              <h4><a href="#">Web Developer</a></h4>
              <ul class="job-info">
                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
              </ul>
            </div>
            <ul class="job-other-info">
              <li class="time">Full Time</li>
              <li class="required">Urgent</li>
            </ul>
            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
          </div>
        </div>

        <!-- Job Block -->
        <div class="job-block-three">
          <div class="inner-box">
            <div class="content">
              <span class="company-logo"><img src="{{ asset('assets') }}/images/resource/company-logo/2-8.png"
                  alt=""></span>
              <h4><a href="#">Senior Product Designer</a></h4>
              <ul class="job-info">
                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
              </ul>
            </div>
            <ul class="job-other-info">
              <li class="time">Full Time</li>
              <li class="privacy">Private</li>
            </ul>
            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
          </div>
        </div>

        <!-- Job Block -->
        <div class="job-block-three">
          <div class="inner-box">
            <div class="content">
              <span class="company-logo"><img src="{{ asset('assets') }}/images/resource/company-logo/2-9.png"
                  alt=""></span>
              <h4><a href="#">Senior BI Analyst</a></h4>
              <ul class="job-info">
                <li><span class="icon flaticon-briefcase"></span> Segment</li>
                <li><span class="icon flaticon-map-locator"></span> London, UK</li>
              </ul>
            </div>
            <ul class="job-other-info">
              <li class="time">Full Time</li>
              <li class="privacy">Private</li>
            </ul>
            <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Job Section -->

  <!-- Candidates Section -->
  <section class="candidates-section-two">
    <div class="auto-container">
      <div class="sec-title">
        <h2>Featured Candidates</h2>
        <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</div>
      </div>

      <div class="carousel-outer wow fadeInUp">
        <div class="row">
          <!-- Candidate Block -->
          <div class="candidate-block-two col-lg-6 col-md-12 col-sm-12">
            <div class="inner-box">
              <div class="content-box">
                <figure class="image"><img src="{{ asset('assets') }}/images/resource/candidate-1.png"
                    alt=""></figure>
                <h4 class="name">Darlene Robertson</h4>
                <span class="designation">UI Designer</span>
                <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
              </div>
              <a href="#" class="theme-btn btn-style-three">View Profile</a>
            </div>
          </div>

          <!-- Candidate Block -->
          <div class="candidate-block-two col-lg-6 col-md-12 col-sm-12">
            <div class="inner-box">
              <div class="content-box">
                <figure class="image"><img src="{{ asset('assets') }}/images/resource/candidate-2.png"
                    alt=""></figure>
                <h4 class="name">Wade Warren</h4>
                <span class="designation">Developer</span>
                <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
              </div>
              <a href="#" class="theme-btn btn-style-three">View Profile</a>
            </div>
          </div>

          <!-- Candidate Block -->
          <div class="candidate-block-two col-lg-6 col-md-12 col-sm-12">
            <div class="inner-box">
              <div class="content-box">
                <figure class="image"><img src="{{ asset('assets') }}/images/resource/candidate-3.png"
                    alt=""></figure>
                <h4 class="name">Leslie Alexander</h4>
                <span class="designation">Marketing Expert</span>
                <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
              </div>
              <a href="#" class="theme-btn btn-style-three">View Profile</a>
            </div>
          </div>

          <!-- Candidate Block -->
          <div class="candidate-block-two col-lg-6 col-md-12 col-sm-12">
            <div class="inner-box">
              <div class="content-box">
                <figure class="image"><img src="{{ asset('assets') }}/images/resource/candidate-4.png"
                    alt=""></figure>
                <h4 class="name">Floyd Miles</h4>
                <span class="designation">Charted Accountant</span>
                <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
              </div>
              <a href="#" class="theme-btn btn-style-three">View Profile</a>
            </div>
          </div>

          <!-- Candidate Block -->
          <div class="candidate-block-two col-lg-6 col-md-12 col-sm-12">
            <div class="inner-box">
              <div class="content-box">
                <figure class="image"><img src="{{ asset('assets') }}/images/resource/candidate-1.png"
                    alt=""></figure>
                <h4 class="name">Darlene Robertson</h4>
                <span class="designation">UI Designer</span>
                <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
              </div>
              <a href="#" class="theme-btn btn-style-three">View Profile</a>
            </div>
          </div>

          <!-- Candidate Block -->
          <div class="candidate-block-two col-lg-6 col-md-12 col-sm-12">
            <div class="inner-box">
              <div class="content-box">
                <figure class="image"><img src="{{ asset('assets') }}/images/resource/candidate-2.png"
                    alt=""></figure>
                <h4 class="name">Wade Warren</h4>
                <span class="designation">Developer</span>
                <div class="location"><i class="flaticon-map-locator"></i> London, UK</div>
              </div>
              <a href="#" class="theme-btn btn-style-three">View Profile</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End Candidates Section -->


  <!-- Ads Section -->
  <section class="ads-section">
    <div class="auto-container">
      <div class="row wow fadeInUp">
        <!-- Ads Block -->
        <div class="advrtise-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box" style="background-image: url(images/resource/ads-bg-1.png);">
            <h4><span>Recruiting </span>Now</h4>
            <a href="#" class="theme-btn btn-style-one">View All</a>
          </div>
        </div>

        <!-- Ads Block -->
        <div class="advrtise-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box" style="background-image: url(images/resource/ads-bg-2.png);">
            <h4><span>Membership </span>Opportunities</h4>
            <a href="#" class="theme-btn btn-style-one">View All</a>
          </div>
        </div>

        <!-- Ads Block -->
        <div class="advrtise-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box" style="background-image: url(images/resource/ads-bg-3.png);">
            <h4><span>Post a </span>Vacancy</h4>
            <a href="#" class="theme-btn btn-style-one">View All</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Ads Section -->
@endsection
