@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">
    
    <div class="container col-12 dashboard">

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($breed) ? route('breeds.update', ['breed' => $breed->id ]) :  route('breeds.store') }}">
            @csrf
            @if (isset($breed))
                @method('PATCH')
            @endif
            <h5>{{isset($breed) ? 'Update' : 'Create'}} Breed</h5>
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($breed->title) ? $breed->title : old('title') }}" placeholder="Enter title">
            </div>

            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="link" name="link" value="{{ isset($breed->link) ? $breed->link : old('link') }}" placeholder="Enter link">
            </div>
        
            <div class="col-md-12 mb-1">
                <textarea type="text" class="form-control" id="short_description" name="short_description" rows="5" cols="10" placeholder="Enter short_description">{{ isset($breed->short_description) ? $breed->short_description :  old('short_description') }}</textarea>
            </div>

            <div class="col-md-12 mb-1">
                <textarea type="text" class="form-control" id="long_description" name="long_description" rows="5" cols="10" placeholder="Enter long_description">{{ isset($breed->long_description) ? $breed->long_description :  old('long_description') }}</textarea>
            </div>
            
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Breed Image</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image">

                @if (isset($breed->id))
                    <img src="/image/{{ $breed->image }}" alt="{{ $breed->title }}">
                @endif
                <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                    1. Follow the dimensions to upload the image (550px / 550px). <br>
                    2. Only jpg, jpeg, png formats allowed. <br>
                    3. File size should be below 1 MB.
                </p>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($breed))
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
