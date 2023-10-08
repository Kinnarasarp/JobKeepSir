@section('page_title', 'Homepage')

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from creativelayers.net/themes/JobKeepSir/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Sep 2023 09:24:42 GMT -->

<head>
  <meta charset="utf-8">
  <title>JobKeepSir | @yield('page_title')</title>

  <!-- Stylesheets -->
  <link href="{{ asset('assets') }}/css/bootstrap.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/css/responsive.css" rel="stylesheet">

  <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="{{ asset('assets') }}/images/favicon.png" type="image/x-icon">

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body data-anm=".anm">
  <style>
    .text-logo {
      color: Black;
      font-weight: 500;
    }
  </style>

  <div class="page-wrapper">

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <header class="main-header alternate">
      <div class="auto-container">
        <!-- Main box -->
        <div class="main-box">
          <!--Nav Outer -->
          <div class="nav-outer">
            <div class="logo-box">
              <div class="logo">
                <a href="{{ route('home') }}">
                  <h3 class="text-logo">JobKeepSir</h3>
                </a>
              </div>
            </div>

            <nav class="nav main-menu">
              <ul class="navigation" id="navbar">
                <li>
                  <a href="{{ route('home') }}">
                    <span>Home</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('joblist') }}">
                    <span>Find Jobs</span>
                  </a>
                </li>
                <!-- Only for Mobile View -->
                <li class="mm-add-listing">
                  <a href="add-listing.html" class="theme-btn btn-style-one">Job Post</a>
                  <span>
                    <span class="contact-info">
                      <span class="phone-num"><span>Call us</span><a href="tel:1234567890">123 456 7890</a></span>
                      <span class="address">329 Queensberry Street, North Melbourne VIC <br>3051, Australia.</span>
                      <a href="mailto:support@JobKeepSir.com" class="email">support@JobKeepSir.com</a>
                    </span>
                    <span class="social-links">
                      <a href="#"><span class="fab fa-facebook-f"></span></a>
                      <a href="#"><span class="fab fa-twitter"></span></a>
                      <a href="#"><span class="fab fa-instagram"></span></a>
                      <a href="#"><span class="fab fa-linkedin-in"></span></a>
                    </span>
                  </span>
                </li>
              </ul>
            </nav>
            <!-- Main Menu End-->
          </div>

          <div class="outer-box">
            <!-- Login/Register -->
            <div class="btn-box">
              @if (Auth::user() == null)
                <a href="{{ route('login') }}" class="theme-btn btn-style-three">Login</a>
              @elseif(Auth::user()->role == 'employer')
                <a href="{{ route('companyprofile') }}" class="theme-btn btn-style-one"><span class="btn-title">Company
                    Profile</span></a>
              @else
                <a href="{{ route('profile') }}" class="theme-btn btn-style-one"><span class="btn-title">My
                    Profile</span></a>
              @endif
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Header -->
      <div class="mobile-header">
        <div class="logo"><a href="index.html"><img src="{{ asset('assets') }}/images/logo.svg" alt=""
              title=""></a>
        </div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">

          <div class="outer-box">
            <!-- Login/Register -->
            <div class="login-box">
              <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
            </div>

            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
          </div>
        </div>
      </div>

      <!-- Mobile Nav -->
      <div id="nav-mobile"></div>
    </header>
    <!--End Main Header -->

    @yield('content')

    <!-- Main Footer -->
    <footer class="main-footer alternate3">
      <!--Bottom-->
      <div class="footer-bottom">
        <div class="auto-container">
          <div class="outer-box">
            <div class="copyright-text">© 2021 <a href="#">JobKeepSir</a>. All Right Reserved.</div>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Scroll To Top -->
      <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    </footer>
    <!-- End Main Footer -->


  </div><!-- End Page Wrapper -->


  <script src="{{ asset('assets') }}/js/jquery.js"></script>
  <script src="{{ asset('assets') }}/js/popper.min.js"></script>
  <script src="{{ asset('assets') }}/js/chosen.min.js"></script>
  <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/js/jquery.fancybox.js"></script>
  <script src="{{ asset('assets') }}/js/jquery.modal.min.js"></script>
  <script src="{{ asset('assets') }}/js/mmenu.polyfills.js"></script>
  <script src="{{ asset('assets') }}/js/mmenu.js"></script>
  <script src="{{ asset('assets') }}/js/appear.js"></script>
  <script src="{{ asset('assets') }}/js/anm.min.js"></script>
  <script src="{{ asset('assets') }}/js/ScrollMagic.min.js"></script>
  <script src="{{ asset('assets') }}/js/rellax.min.js"></script>
  <script src="{{ asset('assets') }}/js/owl.js"></script>
  <script src="{{ asset('assets') }}/js/wow.js"></script>
  <script src="{{ asset('assets') }}/js/script.js"></script>

</body>


<!-- Mirrored from creativelayers.net/themes/JobKeepSir/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Sep 2023 09:24:44 GMT -->

</html>
