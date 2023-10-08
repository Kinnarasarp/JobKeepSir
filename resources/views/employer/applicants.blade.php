@extends('template.app-dashboard')
@section('page_title', 'Applicants')
@section('manage-job_active', 'active')
@section('content')
  <section class="user-dashboard">
    <div class="dashboard-outer">
      <a href="{{ route('managejobs') }}">
        <p class="text-primary mb-2">
          << Back</p>
      </a>
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
                <h4>Applicants of {{ $job->title }}</h4>
              </div>

              <div class="widget-content">
                <div class="table-outer">
                  <table class="default-table manage-job-table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Job Title</th>
                        <th>Experience</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      @if ($applicant->isempty())
                        <tr>
                          <td colspan="5" class="text-center">No Applicants Listed</td>
                        </tr>
                      @else
                        @foreach ($applicant as $item)
                          <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->job_title }}</td>
                            <td>{{ $item->experience }}</td>
                            <td>
                              <div class="option-box">
                                <ul class="option-list">
                                  <li>
                                    <a href="{{ route('applicant.details', ['id' => $job->id, 'applicant' => $item->id]) }}"><button
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
