@extends('template.app-dashboard')\
@section('page_title', 'Application')
@section('application_active', 'active')
@section('content')
  <section class="user-dashboard">
    <div class="dashboard-outer">
      @if (Session::has('success'))
        <div class="message-box success">
          <p>Success: New Job Added!</p>
          <button class="close-btn"><span class="close_icon"></span></button>
        </div>
      @elseif (Session::has('success-edit'))
        <div class="message-box success">
          <p>Success: Data Updated!</p>
          <button class="close-btn"><span class="close_icon"></span></button>
        </div>
      @endif
      <div class="row">
        <div class="col-lg-12">
          <!-- Ls widget -->
          <div class="ls-widget">
            <div class="tabs-box">
              <div class="widget-title">
                <h4>My Applications</h4>
              </div>

              <div class="widget-content">
                <div class="table-outer">
                  <table class="default-table manage-job-table">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Salary</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      @if ($job->isempty())
                        <tr>
                          <td colspan="5" class="text-center">No Application Listed</td>
                        </tr>
                      @else
                        @foreach ($job as $item)
                          <tr>
                            <td>
                              <h6>{{ $item->job->title }}</h6>
                              <span class="info"><i class="icon flaticon-map-locator"></i>
                                {{ $item->job->regency->name }},
                                {{ $item->job->province->name }}, {{ $item->job->country }}</span>
                            </td>
                            <td>{{ $item->job->type }}</td>
                            <td>@currency($item->job->salary)</td>
                            <td>
                              <div class="option-box">
                                <ul class="option-list">
                                  <li>
                                    <a href="{{ route('applicationdetail', $item->id) }}">
                                      <button data-text="View My Application"><span class="la la-eye"></span></button>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
