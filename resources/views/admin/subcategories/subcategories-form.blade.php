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

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($subcategorie) ? route('subcategories.update', ['subcategory' => $subcategorie->id ]) :  route('subcategories.store') }}">
            @csrf
            @if (isset($subcategorie))
                @method('PATCH')
            @endif
            <h5>Create Subcategories</h5>
            <div class="col-md-12 mb-1">
                <select class="form-control" id="breed_id" name="breed_id">
                    <option>-- Select Breed --</option>
                    @foreach ($breeds as $breed)
                    
                    <option value="{{$breed->id}}" {{ $subcategorie->breed_id == $breed->id ? "selected" : "" }}>{{$breed->title}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="subcategory_name" name="subcategory_name" value="{{ isset($subcategorie->subcategory_name) ? $subcategorie->subcategory_name : old('subcategory_name') }}" placeholder="Enter subcategory_name">
            </div>
           
            
            
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Subcategories Image</label>
                <input type="file" class="form-control" id="image" name="image">

                @if (isset($subcategorie->id))
                    <img src="/image/{{ $subcategorie->subcategory_image }}" alt="{{ $subcategorie->subcategory_name }}">
                @endif
                <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                    1. Follow the dimensions to upload the image (1920px / 882px). <br>
                    2. Only jpg, jpeg, png formats allowed. <br>
                    3. File size should be below 1 MB.
                </p>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($subcategorie))
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
