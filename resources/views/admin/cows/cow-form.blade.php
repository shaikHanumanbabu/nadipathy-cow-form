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

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($cow) ? route('cows.update', ['cow' => $cow->id ]) :  route('cows.store') }}">
            @csrf
            @if (isset($cow))
                @method('PATCH')
            @endif
            <h5>Create Cow</h5>

            <div class="col-md-12 mb-1">
                <select class="form-control" id="breed_id" name="breed_id">
                    <option value="">-- Select Breed --</option>
                    @foreach ($breeds as $breed)
                    
                    <option value="{{$breed->id}}">{{$breed->title}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="col-md-12 mb-1">
                <select class="form-control" id="sub_categorie_id" name="sub_categorie_id">
                    <option value="">-- Select Sub Category --</option>
                    @foreach ($sub_categories as $sub_categorie)
                    
                    <option value="{{$sub_categorie->id}}">{{$sub_categorie->subcategory_name}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="name" name="name" value="{{ isset($cow->name) ? $cow->name : old('name') }}" placeholder="Enter name">
            </div>

            
        
            <div class="col-md-12 mb-1">
                <textarea type="text" class="form-control" id="short_description" name="short_description" rows="5" cols="10" placeholder="Enter short_description">{{ isset($cow->short_description) ? $cow->short_description :  old('short_description') }}</textarea>
            </div>

            <div class="col-md-12 mb-1">
                <textarea type="text" class="form-control" id="long_description" name="long_description" rows="5" cols="10" placeholder="Enter long_description">{{ isset($cow->long_description) ? $cow->long_description :  old('long_description') }}</textarea>
            </div>
            
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Cow Image</label>
                <input type="file" class="form-control" id="main_image" name="main_image">

                @if (isset($cow->id))
                    <img src="/image/{{ $cow->main_image }}" alt="{{ $cow->name }}">
                @endif
                <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                    1. Follow the dimensions to upload the image (1920px / 882px). <br>
                    2. Only jpg, jpeg, png formats allowed. <br>
                    3. File size should be below 1 MB.
                </p>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($cow))
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
