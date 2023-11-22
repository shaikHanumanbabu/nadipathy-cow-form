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

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($carousel) ? route('carousel.update', ['carousel' => $carousel->id ]) :  route('carousel.store') }}">
            @csrf
            @if (isset($carousel))
                @method('PATCH')
            @endif
            <h5>Create Carousel</h5>
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($carousel->title) ? $carousel->title : old('title') }}" placeholder="Enter Carousel Title">
            </div>
            {{-- <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="telugu_title" name="telugu_title" value="{{ isset($carousel->telugu_title) ? $carousel->telugu_title : old('telugu_title') }}" placeholder="Enter Carousel telugu_title">
            </div> --}}
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="caption" name="caption" value="{{ isset($carousel->caption) ? $carousel->caption :  old('caption') }}"
                    placeholder="Enter Carousel Caption">
            </div>
            {{-- <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="telugu_caption" name="telugu_caption" value="{{ isset($carousel->telugu_caption) ? $carousel->telugu_caption :  old('telugu_caption') }}"
                    placeholder="Enter telugu_caption">
            </div> --}}
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="btntext" name="btntext" value="{{ isset($carousel->btntext) ? $carousel->btntext :  old('btntext') }}" placeholder="Enter  Btn Text">
            </div>
            {{-- <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="telugu_btntext" name="telugu_btntext" value="{{ isset($carousel->telugu_btntext) ? $carousel->telugu_btntext :  old('telugu_btntext') }}" placeholder="Enter telugu_btntext">
            </div> --}}
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="link" name="link" value="{{ isset($carousel->link) ? $carousel->link :  old('link') }}" placeholder="Enter Btn URL">
            </div>
            <div class="col-md-12 mb-1">
                <input type="number" class="form-control" id="priority" name="priority" value="{{ isset($carousel->priority) ? $carousel->priority :  old('priority') }}" placeholder="Enter Priority">
            </div>
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Carousel Image</label>
                <input type="file" class="form-control" id="image" name="image">

                @if (isset($carousel->id))
                    <img src="/image/{{ $carousel->image }}" alt="{{ $carousel->title }}">
                @endif
                <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                    1. Follow the dimensions to upload the image (1920px / 882px). <br>
                    2. Only jpg, jpeg, png formats allowed. <br>
                    3. File size should be below 1 MB.
                </p>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($carousel))
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
