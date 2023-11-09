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

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($blog) ? route('blogs.update', ['blog' =>   $blog->id ]) :  route('blogs.store') }}">
            @csrf
            @if (isset($blog))
                @method('PATCH')
            @endif
            <h5>{{isset($blog) ? 'Update' : 'Create'}} Blog</h5>

        
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($blog->title) ? $blog->title : old('title') }}" placeholder="Enter title">
            </div>

            <div class="col-md-12 mb-1">
                <textarea type="text" class="form-control" id="short_description" name="short_description" rows="5" cols="10" placeholder="Enter textarea">{{ isset($about->short_description) ? $about->short_description :  old('short_description') }}</textarea>
            </div>

            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="btn_title" name="btn_title" value="{{ isset($blog->btn_title) ? $blog->btn_title : old('btn_title') }}" placeholder="Enter btn_title">
            </div>

            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="btn_link" name="btn_link" value="{{ isset($blog->btn_link) ? $blog->btn_link : old('btn_link') }}" placeholder="Enter btn_link">
            </div>
            
            
            
            
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($blog))
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
