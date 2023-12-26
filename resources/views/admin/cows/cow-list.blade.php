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

      {{-- <div class="col-md-12 mb-1">
        
    </div> --}}

      <div class="card-body">
        <select class="form-control" id="breed_id" name="breed_id">
          @foreach ($breeds as $breed)
          
          <option value="{{$breed->id}}" {{ isset($breedId) && $breedId == $breed->id ? "selected" : "" }}>{{$breed->title}}</option>
          @endforeach
        </select>
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

                  
              @foreach ($cows as $cow)
              <tr>
                <td>{{ $loop->iteration }}</td>
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
              
              @endforeach


              
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

  $('#breed_id').on('change', function() {
    let breedId = $(this).val()
    let breedType = $(this).find('option:selected').text();
    let url = "{{ url('') }}"
    window.location.href = `?breedType=${breedType}&breedId=${breedId}`
  })

</script>
@endsection
