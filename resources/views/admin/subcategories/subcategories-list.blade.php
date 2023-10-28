@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
      <div class="col-lg-9">
        <h1>View SubCategories</h1>
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
        <p align="right"><a href="{{ route('subcategories.create') }}">Add New Sub Categories</a></p>
        <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                <th>S.No</th>
                <th>Sub Categories Image</th>
                <th>Sub Categories Name</th>
                <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($subcategories as $subcategorie)
              <tr>
                <td>{{ $subcategorie->id }}</td>
                <td><img src="image/{{ $subcategorie->subcategory_image }}" alt="{{ $subcategorie->subcategory_name }}"></td>
                <td>{{ $subcategorie->subcategory_name }}</td>
                <td>
                  <a  class="btn bt-sm" href="{{ route('subcategories.edit', ['subcategory' =>  $subcategorie->id ]) }}">
                    <i class="bi bi-pencil"></i>
                  </a>                  
                  <form action="{{ route('subcategories.destroy', ['subcategory' => $subcategorie->id]) }}" method="post" onsubmit="return confirm('are you sure you want to delete ?')">
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
