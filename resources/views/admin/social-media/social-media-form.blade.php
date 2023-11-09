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

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($social_media) ? route('social-media.update', ['social_medium' =>  $social_media->id ]) :  route('social-media.store') }}">
            @csrf
            @if (isset($social_media))
                @method('PATCH')
            @endif
            <h5>{{isset($social_media) ? 'Update' : 'Create'}} Social Media</h5>

        
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($social_media->title) ? $social_media->title : old('title') }}" placeholder="Enter title">
            </div>

            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="link" name="link" value="{{ isset($social_media->link) ? $social_media->link : old('link') }}" placeholder="Enter link">
            </div>
            
        
            
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Cow Image</label>
                <input type="file" class="form-control" id="image" name="image">

                @if (isset($social_media->id))
                    <img src="/image/{{ $social_media->image }}" alt="{{ $social_media->name }}">
                @endif
                <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                    1. Follow the dimensions to upload the image (1920px / 882px). <br>
                    2. Only jpg, jpeg, png formats allowed. <br>
                    3. File size should be below 1 MB.
                </p>
            </div>
            
            
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($social_media))
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
