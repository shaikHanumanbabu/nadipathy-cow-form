@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">
    
    <div class="container col-12 dashboard">

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($welcomeTwo) ? route('welcome_twos.update', ['welcome_two' => $welcomeTwo->id ]) :  route('welcome_twos.store') }}">
            @csrf
            @if (isset($welcomeTwo))
                @method('PATCH')
            @endif
            <h5>Create Welcome Two</h5>
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($welcomeTwo->title) ? $welcomeTwo->title : old('title') }}" placeholder="Enter title">
            </div>

            

            <div class="col-md-12 mb-1">
                <textarea type="text" class="form-control" id="description" name="description" rows="5" cols="10" placeholder="Enter description">{!! html_entity_decode($welcomeTwo->description) !!}</textarea>
            </div>

            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="link" name="link" value="{{ isset($welcomeTwo->link) ? $welcomeTwo->link : old('link') }}" placeholder="Enter link">
            </div>
            
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($welcomeTwo))
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