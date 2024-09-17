@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
      <div class="col-lg-9">
        <h1>View Carousel</h1>
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
        <p align="right"><a class="btn btn-primary" href="{{ route('carousel.create') }}">Add New Carousel</a></p>
        <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                <th>S.No.</th>
                <th>Carousel Image</th>
                <th>Title</th>
                <th>Caption</th>
                <th>Btn Text</th>
                <th>Btn URL</th>
                <th>Priority</th>
                <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($carousels as $carousel)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ URL::asset("image/$carousel->image") }}" alt="{{ $carousel->title }}"></td>
                <td>{{ $carousel->title }}</td>
                <td>{{ $carousel->caption }}</td>
                <td>{{ $carousel->btntext }}</td>
                <td>{{ $carousel->link }}</td>
                <td>{{ $carousel->priority }}</td>
                <td>
                  <a  class="btn bt-sm" href="{{ route('carousel.edit', ['carousel' =>  $carousel->id ]) }}">
                    <i class="bi bi-pencil"></i>
                  </a>

                  {{-- edit modal start here --}}

                  <div class="modal fade" id="editcarousel-{{ $carousel->id }}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content" style="padding: 25px;">
                        <form class="row g-3">
                          <h5>Edit Carousel</h5>
                          <div class="col-md-12 mb-1">
                            <input type="text" class="form-control" id="title" name="title" value="{{ $carousel->title }}" placeholder="Update Carousel Title">
                          </div>
                          <div class="col-md-12 mb-1">
                            <input type="text" class="form-control" id="caption" name="caption" value="{{ $carousel->caption }}" placeholder="Update Carousel Caption">
                          </div>
                          <div class="col-md-12 mb-1">
                            <input type="text" class="form-control" id="btntext" name="btntext" value="{{ $carousel->btntext }}" placeholder="Update Btn Text">
                          </div>
                          <div class="col-md-12 mb-1">
                            <input type="text" class="form-control" id="btnurl" name="btnurl" value="{{ $carousel->btnurl }}" placeholder="Update Btn URL">
                          </div>
                          <div class="col-md-12 mb-1">
                            <input type="number" class="form-control" id="priority" name="priority" value="{{ $carousel->priority }}" placeholder="Update Priority">
                          </div>
                          <div class="col-md-12 mb-1">
                            <label for="image" class="mb-1">Update Carousel Image</label>
                            <input type="file"  accept="image/*" class="form-control" id="carouselimage" name="carouselimage">
                            <img src="image/{{ $carousel->image }}" alt="{{ $carousel->title }}">
                            <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                              1. Follow the dimensions to upload the image (1920px / 882px). <br>
                              2. Only jpg, jpeg, png formats allowed. <br>
                              3. File size should be below 1 MB.
                            </p>
                          </div>
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  {{-- edit modal end here --}}
                  <form action="{{ route('carousel.destroy', ['carousel' => $carousel->id]) }}" method="post" onsubmit="return confirm('are you sure you want to delete ?')">
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

<div class="modal fade" id="createcarousel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="padding: 25px;">
      <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ route('carousel.store') }}">
        @csrf
        <h5>Create Carousel</h5>
        <div class="col-md-12 mb-1">
          <input type="text" class="form-control" id="title" name="title" placeholder="Enter Carousel Title">
        </div>
        <div class="col-md-12 mb-1">
          <input type="text" class="form-control" id="caption" name="caption" placeholder="Enter Carousel Caption">
        </div>
        <div class="col-md-12 mb-1">
          <input type="text" class="form-control" id="btntext" name="btntext" placeholder="Enter Btn Text">
        </div>
        <div class="col-md-12 mb-1">
          <input type="text" class="form-control" id="link" name="link" placeholder="Enter Btn URL">
        </div>
        <div class="col-md-12 mb-1">
          <input type="number" class="form-control" id="priority" name="priority" placeholder="Enter Priority">
        </div>
        <div class="col-md-12 mb-1">
          <label for="image" class="mb-1">Upload Carousel Image</label>
          <input type="file" accept="image/*" class="form-control" id="image" name="image">
          <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
            1. Follow the dimensions to upload the image (1920px / 882px). <br>
            2. Only jpg, jpeg, png formats allowed. <br>
            3. File size should be below 1 MB.
          </p>
        </div>
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div><!-- End create Modal-->




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
