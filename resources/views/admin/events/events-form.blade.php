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

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($event) ? route('events.update', ['event' => $event->id ]) :  route('events.store') }}">
            @csrf
            @if (isset($event))
                @method('PATCH')
            @endif
            <h5>Create Events</h5>
            
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($event->title) ? $event->title : old('title') }}" placeholder="Enter title">
            </div>  
            
            <div class="col-md-12 mb-1">
                <textarea type="text" class="form-control" id="short_description" name="short_description" value="{{ isset($event->short_description) ? $event->short_description : old('short_description') }}" rows="5" cols="10" placeholder="Enter short_description">{{ isset($event->short_description) ? $event->short_description :  old('short_description') }}</textarea>
            </div>
            
            
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Main Events</label>
                <input accept="image/*"  type="file" class="form-control" id="image" name="image">

                @if (isset($event->id))
                    <img src="/image/{{ $event->image }}" alt="{{ $event->title }}">
                @endif

               
                <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                    1. Follow the dimensions to upload the image (324px / 216px). <br>
                    2. Only jpg, jpeg, png formats allowed. <br>
                    3. File size should be below 1 MB.
                </p>
            </div>


            <div class="col-md-12 mb-1">
                <label for="">Enter Link</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ isset($event->link) ? $event->link : old('link') }}" placeholder="Enter link">
            </div> 


            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($event))
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
      selector: 'textarea#short_description',
    });
  </script>
    
@endsection