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

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($award) ? route('awards.update', ['award' =>  $award->id ]) :  route('awards.store') }}">
            @csrf
            @if (isset($award))
                @method('PATCH')
            @endif
            <h5>{{isset($award) ? 'Update' : 'Create'}} Award</h5>

        
            
            
        
            
            <div class="col-md-12 mb-1">
                <label for="image" class="mb-1">Upload Award</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image">

                @if (isset($award->id))
                    <img src="/image/{{ $award->image }}" alt="{{ $award->name }}">
                @endif
                <p style="margin-top: 10px; font-size: 14px;"><b>Note:</b> <br>
                    1. Follow the dimensions to upload the image (831px / 1208px). <br>
                    2. Only jpg, jpeg, png formats allowed. <br>
                    3. File size should be below 1 MB.
                </p>
            </div>
            
            
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($award))
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
