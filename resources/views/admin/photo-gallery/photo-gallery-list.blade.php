@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
      <div class="col-lg-9">
        <h1>View Photo Gallery</h1>
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
        <p align="right"><a href="{{ route('photogalleries.create') }}">Add New Photo Gallery</a></p>
        <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                <th>S.No</th>
                <th>Photo Gallery Image</th>
                <th>Photo Gallery Name</th>
                <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($photoGalleries as $photoGallery)
              <tr>
                <td>{{ $photoGallery->id }}</td>
                <td><img src="image/{{ $photoGallery->image }}" alt="{{ $photoGallery->title }}"></td>
                <td>{{ $photoGallery->title }}</td>
                <td>
                  <a  class="btn bt-sm" href="{{ route('photogalleries.edit', ['photogallery' =>   $photoGallery->id ]) }}">
                    <i class="bi bi-pencil"></i>
                  </a>                  
                  <form action="{{ route('photogalleries.destroy', ['photogallery' =>  $photoGallery->id]) }}" method="post" onsubmit="return confirm('are you sure you want to delete ?')">
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
