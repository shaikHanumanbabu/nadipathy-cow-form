@extends('admin-layouts.admin-template')


@section('content')


<main id="main" class="main">    

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <a href="#" class="alert-link">{{$error}}</a><br>
            @endforeach
        </div>
    @endif
    
    <div class="container col-12 dashboard">

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($videogallery) ? route('videogalleries.update', ['videogallery' => $videogallery->id ]) :  route('videogalleries.store') }}">
            @csrf
            @if (isset($videogallery))
                @method('PATCH')
            @endif
            <h5>Create Video Gallery</h5>
            
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($videogallery->title) ? $videogallery->title : old('title') }}" placeholder="Enter title">
            </div>
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="link" name="link" value="{{ isset($videogallery->link) ? $videogallery->link : old('link') }}" placeholder="Enter link">
            </div>
            
           
            
            
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Video Gallery Image</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image">

                @if (isset($videogallery->id))
                    <img src="/image/{{ $videogallery->image }}" alt="{{ $videogallery->title }}">
                @endif
                <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                    1. Follow the dimensions to upload the image (1920px / 882px). <br>
                    2. Only jpg, jpeg, png formats allowed. <br>
                    3. File size should be below 1 MB.
                </p>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($videogallery))
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
