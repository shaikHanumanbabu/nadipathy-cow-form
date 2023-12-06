@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
      <div class="col-lg-9">
        <h1>View Video Gallery</h1>
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
        <p align="right"><a class="btn btn-primary" href="{{ route('videogalleries.create') }}">Add New Video Gallery</a></p>
        <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                <th>S.No</th>
                <th>Video Gallery Image</th>
                <th>Video Gallery Name</th>
                <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($videoGalleries as $videoGallery)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="image/{{ $videoGallery->image }}" alt="{{ $videoGallery->title }}"></td>
                <td>{{ $videoGallery->title }}</td>
                <td>
                  <a  class="btn bt-sm" href="{{ route('videogalleries.edit', ['videogallery' =>   $videoGallery->id ]) }}">
                    <i class="bi bi-pencil"></i>
                  </a>                  
                  <form action="{{ route('videogalleries.destroy', ['videogallery' =>  $videoGallery->id]) }}" method="post" onsubmit="return confirm('are you sure you want to delete ?')">
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

@section('js-content')
<script>
  $(document).ready(function () {
    $('#example').DataTable({
      "aoColumnDefs": [
        { "bSortable": false, "aTargets": [ -1 ] }, 
    ]
    });
  });

</script>
@endsection