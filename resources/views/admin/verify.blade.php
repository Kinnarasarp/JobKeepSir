@extends('admin.template.app')
@section('verify_active', 'active')
@section('content')
  <style>
    tr,
    td {
      text-align: center;
    }
  </style>
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      New Company Has Been Verified !
    </div>
  @endif
  <div class="card">
    <h5 class="card-header">Verify Company</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @if ($company->isempty())
            <tr>
              <td colspan="4" class="text-success">All Company Has Been Verified !</td>
            </tr>
          @else
            @foreach ($company as $item)
              <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                  <span class="badge bg-label-warning">Unverified</span>
                </td>
                <td>
                  <form action="{{ route('admin.verifystore', $item->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="status" value="verified">
                    <button type="submit" class="btn btn-success">Verify</button>
                  </form>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
@endsection
