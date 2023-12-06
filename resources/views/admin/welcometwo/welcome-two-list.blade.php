@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
      <div class="col-lg-9">
        <h1>View Welcome Text - Two</h1>
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
        {{-- <p align="right"><a href="{{ route('welcome_ones.create') }}">Add New Welcome Text - One</a></p> --}}
        <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                <th>S.No.</th>
                <th>Welcome Text - One</th>
                <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($welcometwos as $welcometwo)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $welcometwo->title }}</td>
                <td>
                  <a  class="btn bt-sm" href="{{ route('welcome_twos.edit', ['welcome_two' =>  $welcometwo->id ]) }}">
                    <i class="bi bi-pencil"></i>
                  </a>                  
                  {{-- <form action="{{ route('welcome_ones.destroy', ['welcome_one' => $welcometwo->id]) }}" method="post" onsubmit="return confirm('are you sure you want to delete ?')">
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