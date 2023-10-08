<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from creativelayers.net/themes/JobKeepSir/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Sep 2023 09:25:56 GMT -->

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

<body style="overflow-y:hidden;">
  <style>
    .text-logo {
      color: white;
      font-weight: 500;
    }
  </style>

  <div class="page-wrapper">

    <!-- Main Header-->
    <header class="main-header">
      <div class="container-fluid">
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
          </div>

          <div class="outer-box">
            <!-- Login/Register -->
            <div class="btn-box">
              @yield('button_auth')
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Header -->
      <div class="mobile-header">
        <div class="logo">
          <a href="index.html">
            <h3 class="text-logo">JobKeepSir</h3>
          </a>
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


  </div><!-- End Page Wrapper -->


  <script src="{{ asset('assets') }}/js/jquery.js"></script>
  <script src="{{ asset('assets') }}/js/popper.min.js"></script>
  <script src="{{ asset('assets') }}/js/chosen.min.js"></script>
  <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/js/jquery-ui.min.js"></script>
  <script src="{{ asset('assets') }}/js/jquery.fancybox.js"></script>
  <script src="{{ asset('assets') }}/js/jquery.modal.min.js"></script>
  <script src="{{ asset('assets') }}/js/mmenu.polyfills.js"></script>
  <script src="{{ asset('assets') }}/js/mmenu.js"></script>
  <script src="{{ asset('assets') }}/js/appear.js"></script>
  <script src="{{ asset('assets') }}/js/ScrollMagic.min.js"></script>
  <script src="{{ asset('assets') }}/js/rellax.min.js"></script>
  <script src="{{ asset('assets') }}/js/owl.js"></script>
  <script src="{{ asset('assets') }}/js/wow.js"></script>
  <script src="{{ asset('assets') }}/js/script.js"></script>

</body>


<!-- Mirrored from creativelayers.net/themes/JobKeepSir/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Sep 2023 09:25:56 GMT -->

</html>
