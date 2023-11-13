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

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($product) ? route('products.update', ['products' => $product->id ]) :  route('products.store') }}">
            @csrf
            @if (isset($product))
                @method('PATCH')
            @endif
            <h5>Create Products</h5>
            
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($product->title) ? $product->title : old('title') }}" placeholder="Enter title">
            </div>
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="original_price" name="original_price" value="{{ isset($product->original_price) ? $product->original_price : old('original_price') }}" placeholder="Enter original_price">
            </div>
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="discount_price" name="discount_price" value="{{ isset($product->discount_price) ? $product->discount_price : old('discount_price') }}" placeholder="Enter discount_price">
            </div>
           
            
            
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Products Image</label>
                <input type="file" class="form-control" id="image" name="image">

                @if (isset($product->id))
                    <img src="/image/{{ $product->image }}" alt="{{ $product->title }}">
                @endif
                <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                    1. Follow the dimensions to upload the image (1920px / 882px). <br>
                    2. Only jpg, jpeg, png formats allowed. <br>
                    3. File size should be below 1 MB.
                </p>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($product))
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
