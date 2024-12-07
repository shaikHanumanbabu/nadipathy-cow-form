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

    @if (session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    <div class="container col-12 dashboard">

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($photogallery) ? route('photogalleries.update', ['photogallery' => $photogallery->id ]) :  route('photogalleries.store') }}">
            @csrf
            @if (isset($photogallery))
                @method('PATCH')
            @endif
            <h5>Create Photo Gallery</h5>
            
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($photogallery->title) ? $photogallery->title : old('title') }}" placeholder="Enter title">
            </div>                
            
            
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Thumbanail Photo</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image">

                @if (isset($photogallery->id))
                    <img height="100px" src="/image/{{ $photogallery->image }}" alt="{{ $photogallery->title }}">
                @endif

               
                {{-- <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                    1. Follow the dimensions to upload the image (1920px / 882px). <br>
                    2. Only jpg, jpeg, png formats allowed. <br>
                    3. File size should be below 1 MB.
                </p> --}}
            </div>


            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Photo Gallery Images</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="gallery_image[]" multiple>

                @if (isset($photogallery->id))
                    @foreach ($photogallery->galleryimage as $gallery)

                    

                        <a href="{{route('photogalleries-image-delete', ['photogalleriesImage' => $gallery->id])}}" onclick="return confirm('are you sure you want to delete ?')"><i class="bi bi-trash"></i></a>
                        <img height="100px" src="/image/{{ $gallery->image }}" alt="{{ $photogallery->title }}" style="margin-right:20px; margin-top:10px " />

                        
                    @endforeach
                @endif
                <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                    1. Follow the dimensions to upload the image (900px / 600px). <br>
                    2. Only jpg, jpeg, png formats allowed. <br>
                    3. File size should be below 1 MB.
                </p>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($photogallery))
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
