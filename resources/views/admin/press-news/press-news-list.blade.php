@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
      <div class="col-lg-9">
        <h1>View Press News</h1>
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
        <p align="right"><a href="{{ route('p-news.create') }}">Add Press News</a></p>
        <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                <th>S.No.</th>
                <th>Press News Image</th>
                <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($press_news as $press_new)
              <tr>
                <td>{{ $press_new->id }}</td>
                <td><img src="press-news/{{ $press_new->image }}" alt="demo.png"></td>
                <td>
                  <a  class="btn bt-sm" href="{{ route('p-news.edit', ['p_news' =>  $press_new->id ]) }}">
                    <i class="bi bi-pencil"></i>
                  </a>                  
                  {{-- <form action="{{ route('p-news.destroy', ['p_news' => $press_new->id]) }}" method="post" onsubmit="return confirm('are you sure you want to delete ?')">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn bt-sm"><i class="bi bi-trash"></i></button>
                  </form> --}}
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
