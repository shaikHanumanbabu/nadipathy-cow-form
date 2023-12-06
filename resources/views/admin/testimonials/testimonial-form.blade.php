@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">
    
    <div class="container col-12 dashboard">

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($testimonial) ? route('testimonials.update', ['testimonial' => $testimonial->id ]) :  route('testimonials.store') }}">
            @csrf
            @if (isset($testimonial))
                @method('PATCH')
            @endif
            <h5>Create Testimonial</h5>
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ isset($testimonial->customer_name) ? $testimonial->customer_name : old('customer_name') }}" placeholder="Enter customer name">
            </div>
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="profession" name="profession" value="{{ isset($testimonial->profession) ? $testimonial->profession :  old('profession') }}"
                    placeholder="Enter profession">
            </div>
            <div class="col-md-12 mb-1">
                <textarea type="text" class="form-control" id="description" name="description" rows="5" cols="10" placeholder="Enter textarea">{{ isset($testimonial->description) ? $testimonial->description :  old('description') }}</textarea>
            </div>
            
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload testimonial Image</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image">

                @if (isset($testimonial->id))
                    <img src="/image/{{ $testimonial->image }}" alt="{{ $testimonial->title }}">
                @endif
                <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                    {{-- 1. Follow the dimensions to upload the image (1920px / 882px). <br> --}}
                    2. Only jpg, jpeg, png formats allowed. <br>
                    3. File size should be below 1 MB.
                </p>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($testimonial))
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
