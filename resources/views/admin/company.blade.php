@extends('admin.template.app')
@section('company_active', 'active')
@section('content')
  <style>
    tr,
    td {
      text-align: center;
    }
  </style>
  <div class="card">
    <h5 class="card-header">Company</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($company as $item)
            <tr>
              <td>{{ $item->name }}</td>
              <td>{{ $item->email }}</td>
              <td>
                @if ($item->status == 'verified')
                  <span class="badge bg-label-success">Verified</span>
                @else
                  <span class="badge bg-label-warning">Unverified</span>
                @endif
              </td>
              <td><button type="button" class="btn btn-info">Detail</button></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
