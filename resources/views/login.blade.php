@extends('template.app-auth')
@section('page_title', 'Login')
@section('button_auth')
  <a href="{{ route('register') }}" class="theme-btn btn-style-three">Register for Candidate</a>
  <a href="{{ route('register.employer') }}" class="theme-btn btn-style-three">Register for Employer</a>
@endsection
@section('content')
  <!-- Info Section -->
  <div class="login-section">
    <div class="image-layer" style="background-image: url({{ asset('assets') }}/images/background/12.jpg);"></div>
    <div class="outer-box">
      <!-- Login Form -->
      <div class="login-form default-form">
        <div class="form-inner">
          <h3>Login to JobKeepSir</h3>
          @if (Session::has('success'))
            <div class="message-box success">
              <p>Account Registered! Please Login to Proceed</p>
            </div>
          @elseif(Session::has('error'))
            <div class="message-box error">
              <p>Wrong Email or Password!</p>
            </div>
          @endif
          <!--Login Form-->
          <form method="post" action="{{ route('proseslogin') }}">
            @csrf
            <div class="form-group">
              <label for="email">Email</label>
              <input required id="email" type="text" name="email" placeholder="Your Email" required>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input required id="password" type="password" name="password" placeholder="Insert Password Here">
            </div>

            <div class="form-group">
              <button class="theme-btn btn-style-one" type="submit" name="log-in">Log In</button>
            </div>
          </form>
        </div>
      </div>
      <!--End Login Form -->
    </div>
  </div>
  <!-- End Info Section -->
@endsection
