@extends('template.app-dashboard')
@section('page_title', 'Dashboard')
@section('content')
  <section class="user-dashboard">
    <div class="dashboard-outer">
      <div class="row">
        <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
          <div class="ui-item">
            <div class="left">
              <i class="icon flaticon-briefcase"></i>
            </div>
            <div class="right">
              <h4>{{ $job }}</h4>
              <p>Posted Jobs</p>
            </div>
          </div>
        </div>
        <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
          <div class="ui-item ui-red">
            <div class="left">
              <i class="icon la la-file-invoice"></i>
            </div>
            <div class="right">
              <h4>{{ $application }}</h4>
              <p>Application</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
