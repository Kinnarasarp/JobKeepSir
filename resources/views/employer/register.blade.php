@extends('template.app-auth')
@section('page_title', 'Register')
@section('button_auth')
  <a href="{{ route('login') }}" class="theme-btn btn-style-three">Login</a>
  <a href="{{ route('register') }}" class="theme-btn btn-style-three">Register for Candidate</a>
@endsection
@section('content')
  <!-- Info Section -->
  <div class="login-section">
    <div class="image-layer" style="background-image: url({{ asset('assets') }}/images/background/12.jpg);"></div>
    <div class="outer-box">
      <!-- Login Form -->
      <div class="login-form default-form">
        <div class="form-inner">
          <h3>Create Account for Employer | JobKeepSir</h3>
          <!--Login Form-->
          <form method="post" action="{{ route('prosesregister') }}">
            @csrf
            <div class="form-group">
              <label for="name">Company Name</label>
              <input type="text" id="name" name="name" placeholder="Your Name" required>
            </div>

            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="text" id="email" name="email" placeholder=" Your Email" required>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="Insert Password Here">
            </div>

            <input type="hidden" name="role" value="employer">

            <div class="form-group">
              <button class="theme-btn btn-style-one" type="submit">Register</button>
            </div>
          </form>
        </div>
      </div>
      <!--End Login Form -->
    </div>
  </div>
  <!-- End Info Section -->
@endsection
