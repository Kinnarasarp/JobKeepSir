@extends('template.app-dashboard')
@section('page_title', 'Edit Job')
@section('manage-job_active', 'active')
@section('content')
  <!-- Dashboard -->
  <section class="user-dashboard">
    <div class="dashboard-outer">
      @if (count($errors) > 0)
        <div class="message-box error">
          <ul class="m-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="row">
        <div class="col-lg-12">
          <!-- Ls widget -->
          <div class="ls-widget">
            <div class="tabs-box">
              <div class="widget-title">
                <h4>Edit Job</h4>
              </div>

              <div class="widget-content">

                <form class="default-form" action="{{ route('jobpost.update', $job->id) }}" method="POST">
                  @csrf
                  {{-- @method('put') --}}
                  <div class="row">
                    <!-- Input -->
                    <div class="form-group col-lg-12 col-md-12">
                      <label>Job Title</label>
                      <input required type="text" name="title" value="{{ $job->title }}" placeholder="Title">
                    </div>

                    <!-- About Company -->
                    <div class="form-group col-lg-12 col-md-12">
                      <label>Job Description</label>
                      <textarea name="description" id="myeditorinstance">{!! $job->description !!}</textarea>
                    </div>

                    <div class="form-group col-lg-6 col-md-12">
                      <label>Job Type</label>
                      <select name="type" class="chosen-select">
                        <option selected disabled>Select</option>
                        <option value="Fulltime" {{ $job->type == 'Fulltime' ? 'selected' : '' }}>Fulltime</option>
                        <option value="Part Time" {{ $job->type == 'Part Time' ? 'selected' : '' }}>Part Time</option>
                      </select>
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Offered Salary</label>
                      <input required type="number" name="salary" value="{{ $job->salary }}"
                        placeholder="Example : 4000000">
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-12 col-md-12">
                      <label>Country</label>
                      <select name="country" class="chosen-select" style="display: none;">
                        <option selected value="INDONESIA">INDONESIA</option>
                      </select>
                    </div>

                    <label class="text-red fw-bold">Please Reselect Province and City!</label>
                    <!-- Input -->
                    <div class="form-group col-lg-6 col-md-12">
                      <label>Province</label>
                      <select name="province_id" onchange="getKota()" id="province" class="chosen-select"
                        style="display: none;" required>
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
                      <select name="regency_id" class="chosen-select" id="selectCity">

                      </select>
                    </div>

                    <!-- Input -->
                    <div class="form-group col-lg-12 col-md-12">
                      <label>Complete Address</label>
                      <input required type="text" name="address" value="{{ $job->address }}"
                        placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia.">
                    </div>

                    <div class="form-group col-lg-12 col-md-12">
                      <div class="input-group checkboxes square">
                        @if ($job->status == 'Inactive')
                          <input type="checkbox" name="status" id="remember">
                        @else
                          <input type="checkbox" name="status" checked id="remember">
                        @endif
                        <label for="remember" class="remember"><span class="custom-checkbox"></span> Check if you want to
                          add to the active joblist</label>
                      </div>
                    </div>
                    <!-- Input -->
                    <div class="form-group col-lg-12 col-md-12 text-right">
                      <button class="theme-btn btn-style-one" type="submit">Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Dashboard -->
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
      plugins: 'code table lists',
      toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
    });
  </script>

  <script>
    function getKota() {
      const kotaId = $("#province").val();
      const url = 'profile/getkota/' + kotaId;

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
