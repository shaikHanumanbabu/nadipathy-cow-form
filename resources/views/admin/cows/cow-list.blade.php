@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
      <div class="col-lg-9">
        <h1>View Cows</h1>
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
        <p align="right"><a class="btn btn-primary" href="{{ route('cows.create') }}">Add New Cows</a></p>
        <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                <th>S.No.</th>
                <th>Cows Image</th>
                <th>Cow Name</th>
                <th>Description</th>
                <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($cows as $cow)
              <tr>
                <td>{{ $cow->id }}</td>
                <td><img src="image/{{ $cow->main_image }}" alt="{{ $cow->name }}"></td>
                <td>{{ $cow->name }}</td>
                <td>{{ $cow->short_description }}</td>
                <td>
                  <a  class="btn bt-sm" href="{{ route('cows.edit', ['cow' =>  $cow->id ]) }}">
                    <i class="bi bi-pencil"></i>
                  </a>                  
                  <form action="{{ route('cows.destroy', ['cow' => $cow->id]) }}" method="post" onsubmit="return confirm('are you sure you want to delete ?')">
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
