@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
      <div class="col-lg-9">
        <h1>View Tv News</h1>
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
        <p align="right"><a class="btn btn-primary" href="{{ route('tv-news.create') }}">Add Tv News</a></p>
        <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                <th>S.No.</th>
                <th>Tv News Link</th>
                <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($tv_news as $tv_new)
              <tr>
                <td>{{ $tv_new->id }}</td>
                <td>{{ $tv_new->link }}</td>
                <td>
                  <a  class="btn bt-sm" href="{{ route('tv-news.edit', ['tv_news' =>  $tv_new->id ]) }}">
                    <i class="bi bi-pencil"></i>
                  </a>                  
                  <form action="{{ route('tv-news.destroy', ['tv_news' => $tv_new->id]) }}" method="post" onsubmit="return confirm('are you sure you want to delete ?')">
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
