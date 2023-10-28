@extends('admin-layouts.admin-template')


@section('content')
<main id="main" class="main">
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container col-12 dashboard">

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($marquee) ? route('marquees.update', ['marquee' => $marquee->id ]) :  route('marquees.store') }}">
            @csrf
            @if (isset($marquee))
                @method('PATCH')
            @endif
            <h5>Update Marquee</h5>
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="marquee_text" name="marquee_text" value="{{ isset($marquee->marquee_text) ? $marquee->marquee_text : old('marquee_text') }}" placeholder="Enter customer name">
            </div>
            
            
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($marquee))
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
