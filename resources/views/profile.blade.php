@extends('template.app-dashboard')
@section('page_title', 'Profile')
@section('profile_active', 'active')
@section('content')
  <section class="user-dashboard">
    <div class="dashboard-outer">
      @if (Session::has('success'))
        <div class="message-box success">
          <p>Success: Data Updated!</p>
          <button class="close-btn"><span class="close_icon"></span></button>
        </div>
      @endif
      <div class="row">
        <div class="col-lg-12">
          <form class="default-form" action="{{ route('profile.add') }}" method="post">
            @csrf
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>My Profile</h4>
                </div>

                <div class="widget-content">
                  <div class="row">
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Full Name</label>
                      <input required type="text" name="name" value="{{ $candidate->name }}"
                        placeholder="Insert Here">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Job Title</label>
                      <input required type="text" name="job_title" value="{{ $candidate->job_title }}"
                        placeholder="Insert Here">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Phone</label>
                      <input required type="text" name="phone" value="{{ $candidate->phone }}"
                        placeholder="Example = 082143021xxxxx">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Email address</label>
                      <input required type="text" name="email" value="{{ $candidate->email }}"
                        placeholder="www.instagram.com/example/">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Languages</label>
                      <input required type="text" name="language" value="{{ $candidate->language }}"
                        placeholder="English, Turkish">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Experience</label>
                      <input required type="text" name="experience" value="{{ $candidate->experience }}"
                        placeholder="Insert Here">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Age</label>
                      <input required type="number" name="age" value="{{ $candidate->age }}"
                        placeholder="Example : 24">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>Social Network (Optional)</h4>
                </div>

                <div class="widget-content">
                  <div class="row">
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Facebook</label>
                      <input type="text" name="facebook" value="{{ $candidate->facebook }}"
                        placeholder="www.facebook.com/example">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Twitter</label>
                      <input type="text" name="twitter" value="{{ $candidate->twitter }}"
                        placeholder="www.twitter.com/example">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Linkedin</label>
                      <input type="text" name="linkedin" value="{{ $candidate->linkedin }}"
                        placeholder="www.linkedin.com">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Instagram</label>
                      <input type="text" name="instagram" value="{{ $candidate->instagram }}"
                        placeholder="www.instagram.com/example/">
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
                      <select class="chosen-select" style="display: none;">
                        <option selected>Indonesia</option>
                      </select>
                    </div>
                    @if ($candidate->province_id != null)
                      <label class="text-red fw-bold">Please Reselect Province and City!</label>
                    @endif
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Province</label>
                      <select onchange="getKota()" name="province_id" id="province" class="chosen-select"
                        style="display: none;">
                        <option value="" selected> --- Province ---</option>
                        @foreach ($province as $item)
                          <option value="{{ $item->id }}">{{ $item->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12" id="citySelect">
                      <label>City</label>
                      <select class="chosen-select" id="selectCity">

                      </select>
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-12 col-md-12">
                      <label>Complete Address</label>
                      <input required type="text" name="address" value="{{ $candidate->address }}"
                        placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia.">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-12 col-md-12">
                      <button class="theme-btn btn-style-one">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script>
    function getKota() {
      const kotaId = $("#province").val();
      const url = 'profile/getkota/' + kotaId;

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.get('profile/getkota/' + kotaId, function(data) {
        $("#citySelect").html(data)
      });

    }
  </script>
@endsection
