@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
      <div class="col-lg-9">
        <h1>View Event</h1>
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
        <p align="right"><a class="btn btn-primary" href="{{ route('events.create') }}">Add New Event</a></p>
        <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                <th>S.No</th>
                <th>Event Image</th>
                <th>Event Name</th>
                <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($events as $event)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td><img src="image/{{ $event->image }}" alt="{{ $event->title }}"></td>
                <td>{{ $event->title }}</td>
                <td>
                  <a  class="btn bt-sm" href="{{ route('events.edit', ['event' =>   $event->id ]) }}">
                    <i class="bi bi-pencil"></i>
                  </a>                  
                  <form action="{{ route('events.destroy', ['event' =>  $event->id]) }}" method="post" onsubmit="return confirm('are you sure you want to delete ?')">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn bt-sm"><i class="bi bi-trash"></i></button>
                  </form>
                </td>
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
