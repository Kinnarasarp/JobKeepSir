@extends('template.app')
@section('content')
  <div class="container">
    <section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="row">
          <div class="col-lg-12">
            <form class="default-form" action="{{ route('submitapplication') }}" method="post" enctype="multipart/form-data">
              @csrf
              <!-- Ls widget -->
              <div class="ls-widget">
                <div class="tabs-box">
                  <div class="widget-title">
                    <h4>Job Application</h4>
                  </div>
                  <div class="widget-content">

                    <div class="uploading-outer">
                      <div class="uploadButton">
                        <input required class="uploadButton-input" type="file" name="cv"
                          accept="image/*, application/pdf" id="upload">
                        <label class="uploadButton-button ripple-effect" for="upload">Insert CV Here</label>
                        <span class="uploadButton-file-name"></span>
                      </div>
                      <div class="text">File Format Must Be PNG, JPEG, JPG</div>
                    </div>
                    <div class="row">
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Full Name</label>
                        <input required type="text" name="name" value="{{ $candidate->name }}" placeholder="Jerome">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Job Title</label>
                        <input required type="text" name="job_title" value="{{ $candidate->job_title }}"
                          placeholder="UI Designer">
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
                          placeholder="creativelayers">
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
                          placeholder="5-10 Years">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Age</label>
                        <input required type="number" name="age" value="{{ $candidate->age }}" placeholder="24">
                      </div>

                      <!-- About Company -->
                      <div class="form-group col-lg-12 col-md-12">
                        <label>Description</label>
                        <textarea required name="description"
                          placeholder="Spent several years working on sheep on Wall Street. Had moderate success investing in Yugo's on Wall Street. Managed a small team buying and selling Pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working it banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer collaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Ls widget -->
              <div class="ls-widget">
                <div class="tabs-box">
                  <div class="widget-title">
                    <h4>Social Network</h4>
                  </div>

                  <div class="widget-content">
                    <div class="row">
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Facebook</label>
                        <input required type="text" name="facebook" value="{{ $candidate->facebook }}"
                          placeholder="www.facebook.com/Invision">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Twitter</label>
                        <input required type="text" name="twitter" value="{{ $candidate->twitter }}" placeholder="">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Linkedin</label>
                        <input required type="text" name="linkedin" value="{{ $candidate->linkedin }}" placeholder="">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Instagram</label>
                        <input required type="text" name="instagram" value="{{ $candidate->instagram }}"
                          placeholder="">
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

                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                      <input type="hidden" name="job_id" value="{{ $job->id }}">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script>
    function getKota() {
      const kotaId = $("#province").val();
      const url = '/profile/getkota/' + kotaId;

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.get('/profile/getkota/' + kotaId, function(data) {
        $("#citySelect").html(data)
      });

    }
  </script>
@endsection
