@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
      <div class="col-lg-9">
        <h1>View {{request()->get('type') != 'contact' ? "Appointments" : "Contacts"}} </h1>
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
                <th>Phone Number</th>
                <th>Email</th>
                @if (request()->get('type') != 'contact')
                  <th>Visiting Time</th>
                    
                @endif
                <th>address</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($appointments as $appointment)
              <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->name }}</td>
                <td>{{ $appointment->phone_number }}</td>
                <td>{{ $appointment->email }}</td>
                @if (request()->get('type') != 'contact')
                  <td>{{ $appointment->visiting_datetime }}</td>
                  
                    
                @endif
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
