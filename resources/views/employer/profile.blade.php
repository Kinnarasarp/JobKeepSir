@extends('template.app-dashboard')
@section('profile_active', 'active')
@section('content')
  <!-- Dashboard -->
  <section class="user-dashboard">
    <div class="dashboard-outer">
      @if (Session::has('success'))
        <div class="message-box success">
          <p>Success: Data Updated!</p>
          <button class="close-btn"><span class="close_icon"></span></button>
        </div>
      @endif
      <div class="row">
        <form class="default-form" action="{{ route('companyprofile.add') }}" method="POST">
          @csrf
          <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>Company Profile</h4>
                </div>
                <div class="widget-content">
                  <div class="row">
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Company name</label>
                      <input type="text" name="name" id="name" placeholder="Invisionn"
                        value="{{ $company->name }}">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Email address</label>
                      <input type="email" name="email" id="email" placeholder="example@gmail.com"
                        value="{{ $company->email }}">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Phone</label>
                      <input type="number" id="phonenumber" value="{{ $company->phonenumber }}" name="phonenumber"
                        placeholder="Insert Here">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Website</label>
                      <input type="text" name="website" id="website" value="{{ $company->website }}"
                        placeholder="Insert Here">
                    </div>

                    <!-- About Company -->
                    <div class="form-group col-lg-12 col-md-12">
                      <label>About Company</label>
                      <textarea name="about" id="about" placeholder="Insert Here">{!! $company->about !!}</textarea>
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
                      <select name="country" class="chosen-select" style="display: none;">
                        <option selected value="INDONESIA">INDONESIA</option>
                      </select>
                    </div>
                    @if ($company->province_id != null)
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
                      <input type="text" name="address" id="address" value="{{ $company->address }}"
                        placeholder="Insert Here">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-12 col-md-12">
                      <button class="theme-btn btn-style-one" type="submit">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </form>


      </div>
    </div>
  </section>
  <!-- End Dashboard -->
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
        $("#CitySelect").val(kotaId)
      });

    }
  </script>
@endsection
