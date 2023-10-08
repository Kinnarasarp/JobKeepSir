@extends('template.app-dashboard')
@section('page_title', 'Manage Jobs')
@section('manage-job_active', 'active')
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
                <h4>My Job Listings</h4>
              </div>

              <div class="widget-content">
                <div class="table-outer">
                  <table class="default-table manage-job-table">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Salary</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      @if ($job->isempty())
                        <tr>
                          <td colspan="5" class="text-center">No Job Listed</td>
                        </tr>
                      @else
                        @foreach ($job as $item)
                          <tr>
                            <td>
                              <h6>{{ $item->title }}</h6>
                              <span class="info"><i class="icon flaticon-map-locator"></i> {{ $item->regency->name }},
                                {{ $item->province->name }}, {{ $item->country }}</span>
                            </td>
                            <td>{{ $item->type }}</td>
                            <td>@currency($item->salary)</td>
                            @if ($item->status == 'Active')
                              <td class="status">{{ $item->status }}</td>
                            @else
                              <td class="text-red">{{ $item->status }}</td>
                            @endif
                            <td>
                              <div class="option-box">
                                <ul class="option-list">
                                  <li>
                                    <a href="{{ route('applicants', $item->id) }}"><button
                                        data-text="View Applicants"><span class="la la-eye"></span></button></a>
                                  </li>
                                  <li>
                                    <a href="{{ route('jobpost.edit', $item->id) }}"><button data-text="Edit Job"><span
                                          class="la la-pencil"></span></button></a>
                                  </li>
                                  <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button>
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
