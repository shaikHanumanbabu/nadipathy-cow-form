@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">
    @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
  </div>
  @endif
    <div class="container col-12 dashboard">

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($cow_at_home) ? route('cow-at-home.update', ['cow_at_home' => $cow_at_home->id ]) :  route('cow-at-home.store') }}">
            @csrf
            @if (isset($cow_at_home))
                @method('PATCH')
            @endif
            <h5>Create Cow at home</h5>
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($cow_at_home->title) ? $cow_at_home->title : old('title') }}" placeholder="Enter title">
            </div>

            

            <div class="col-md-12 mb-1">
                <textarea type="text" class="form-control" id="description" name="description" rows="5" cols="10" placeholder="Enter description">{!! html_entity_decode($cow_at_home->description) !!}</textarea>
            </div>

            {{-- <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="link" name="link" value="{{ isset($cow_at_home->link) ? $cow_at_home->link : old('link') }}" placeholder="Enter link">
            </div> --}}


            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Image 1</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image_one">

                @if (isset($cow_at_home->id))
                    <img src="/image/{{ $cow_at_home->image_one }}" alt="{{ $cow_at_home->name }}">
                @endif
               
            </div>

            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Image 2</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image_two">

                @if (isset($cow_at_home->id))
                    <img src="/image/{{ $cow_at_home->image_two }}" alt="{{ $cow_at_home->name }}">
                @endif
               
            </div>
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Image 3</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image_three">

                @if (isset($cow_at_home->id))
                    <img src="/image/{{ $cow_at_home->image_three }}" alt="{{ $cow_at_home->name }}">
                @endif
               
            </div>
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Image 4</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image_four">

                @if (isset($cow_at_home->id))
                    <img src="/image/{{ $cow_at_home->image_four }}" alt="{{ $cow_at_home->name }}">
                @endif
               
            </div>
            
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($cow_at_home))
                        Update
                    @else
                        Add
                    @endif
                </button>
            </div>
        </form>
    </div>
</main>
@endsection

@section('js-content')

<script type="text/javascript">
    // console.log('hello world');
    tinymce.init({
      selector: 'textarea#description',
    });
  </script>
    
@endsection