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

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($about) ? route('about.update', ['about' =>  $about->id ]) :  route('about.store') }}">
            @csrf
            @if (isset($about))
                @method('PATCH')
            @endif
            <h5>{{isset($about) ? 'Update' : 'Create'}} About</h5>

        
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($about->title) ? $about->title : old('title') }}" placeholder="Enter title">
            </div>

            

            <div class="col-md-12 mb-1">
                <textarea type="text" class="form-control" id="description" name="description" rows="5" cols="10" placeholder="Enter textarea">{{ isset($about->description) ? $about->description :  old('description') }}</textarea>
            </div>

            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="creator_link" name="creator_link" value="{{ isset($about->creator_link) ? $about->creator_link : old('creator_link') }}" placeholder="Enter creator_link">
            </div>

            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="system_link" name="system_link" value="{{ isset($about->system_link) ? $about->system_link : old('system_link') }}" placeholder="Enter system_link">
            </div>
            
        
            
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Cow Image 1</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image_one">

                @if (isset($about->id))
                    <img src="/image/{{ $about->image_one }}" alt="{{ $about->name }}" height="200px" class="mt-1">
                @endif
               
            </div>
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Cow Image 2</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image_two">

                @if (isset($about->id))
                    <img src="/image/{{ $about->image_two }}" alt="{{ $about->name }}" height="200px" class="mt-1">
                @endif
               
            </div>
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Cow Image 3</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image_three">

                @if (isset($about->id))
                    <img src="/image/{{ $about->image_three }}" alt="{{ $about->name }}" height="200px" class="mt-1">
                @endif
               
            </div>
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Cow Image 4</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image_four">

                @if (isset($about->id))
                    <img src="/image/{{ $about->image_four }}" alt="{{ $about->name }}" height="200px" class="mt-1">
                @endif
               
            </div>

            <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                {{-- 1. Follow the dimensions to upload the image (1920px / 882px). <br> --}}
                2. Only jpg, jpeg, png formats allowed. <br>
                3. File size should be below 1 MB.
            </p>
            
            
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($about))
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
    
    tinymce.init({
      selector: 'textarea#description',
    });
  </script>
    
@endsection
