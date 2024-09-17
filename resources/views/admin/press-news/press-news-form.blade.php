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

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($press_news) ? route('p-news.update', ['p_news' => $press_news->id ]) :  route('p-news.store') }}">
            @csrf
            @if (isset($press_news))
                @method('PATCH')
            @endif
            <h5>{{isset($press_news) ? 'Update' : 'Create'}} Press News</h5>

        
           
            
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Press News Image</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image[]" multiple accept="image/*">

                @if (isset($press_news->id))
                    <img src="{{ URL::asset("/press-news/$press_news->image")}}" alt="{{ $press_news->title }}">
                @endif
                <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                    {{-- 1. Follow the dimensions to upload the image (550px /550px). <br> --}}
                    1. Only jpg, jpeg, png formats allowed. <br>
                    2. File size should be below 1 MB.
                </p>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($press_news))
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
