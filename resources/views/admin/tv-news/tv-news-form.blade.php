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

        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ isset($tv_news) ? route('tv-news.update', ['breed' => $tv_news->id ]) :  route('tv-news.store') }}">
            @csrf
            @if (isset($tv_news))
                @method('PATCH')
            @endif
            <h5>{{isset($tv_news) ? 'Update' : 'Create'}} Tv News</h5>

        
            <div class="col-md-12 mb-1">
                <input type="text" class="form-control" id="link" name="link" value="{{ isset($tv_news->link) ? $tv_news->link : old('link') }}" placeholder="Enter link">
            </div>
            
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    @if (isset($tv_news))
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
