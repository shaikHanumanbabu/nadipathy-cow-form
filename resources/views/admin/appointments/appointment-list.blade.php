@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
      <div class="col-lg-9">
        <h1>View Appointments</h1>
      </div>
    </div>
  </div>

  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
  </div>
  @endif
  <!-- End Page Title -->

  <!-- carousel_page -->
  <div class="col-12 dashboard">
    <div class="card courses_page overflow-auto">

      <div class="card-body">
        <table id="example"  class="display" style="width:100%">
          <thead>
              <tr>
                <th>S.No.</th>
                <th>Cutomer Name</th>
                <th>Visiting Time</th>
                <th>address</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($appointments as $appointment)
              <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->name }}</td>
                <td>{{ $appointment->visiting_datetime }}</td>
                <td>{{ $appointment->address }}</td>
              </tr>
              @empty
                  <tr> <td>No data found</td></tr>
              @endforelse
              
          </tbody>
        </table>
      </div>

    </div>
  </div><!-- End carousel_page -->

</main><!-- End #main -->






@endsection
