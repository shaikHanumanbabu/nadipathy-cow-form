@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
      <div class="col-lg-9">
        <h1>View Testimonials</h1>
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
        <p align="right"><a class="btn btn-primary" href="{{ route('testimonials.create') }}">Add New Testimonial</a></p>
        <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                <th>S.No.</th>
                <th>Testimonial Image</th>
                <th>Cutomer Name</th>
                <th>Profession</th>
                <th>Description</th>
                <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($testimonials as $testimonial)
              <tr>
                <td>{{ $testimonial->id }}</td>
                <td><img src="image/{{ $testimonial->image }}" alt="{{ $testimonial->customer_name }}"></td>
                <td>{{ $testimonial->customer_name }}</td>
                <td>{{ $testimonial->profession }}</td>
                <td>{{ $testimonial->description }}</td>
                <td>
                  <a  class="btn bt-sm" href="{{ route('testimonials.edit', ['testimonial' =>  $testimonial->id ]) }}">
                    <i class="bi bi-pencil"></i>
                  </a>                  
                  <form action="{{ route('testimonials.destroy', ['testimonial' => $testimonial->id]) }}" method="post" onsubmit="return confirm('are you sure you want to delete ?')">
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
