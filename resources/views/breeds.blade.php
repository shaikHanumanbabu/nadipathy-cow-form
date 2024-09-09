@extends('index')

@section('content')
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4  slideInDown">Our Farm</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $breed->title }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <p class="section-title bg-white text-center text-primary px-3">Our Farm</p>
            <h1 class="mb-5">{{ $breed->title }}</h1>
        </div>
        <div class="row gx-4">
            @forelse ($breed->categories as $categorie)
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="product-item">
                        <div class="position-relative">
                        <a href="{{ url("/cows/".Str::slug($breed->slug). "/" .Str::slug($categorie->slug)) }}"> <img class="img-fluid" src="{{ URL::asset("/image/$categorie->subcategory_image") }}" alt="{{ $categorie->subcategory_name }}"> </a>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="{{ url("/cows/".Str::slug($breed->slug). "/" .Str::slug($categorie->slug)) }}">{{ $categorie->subcategory_name }}</a>
                        </div>
                    </div>
                </div>
            @empty
                <h2>No Categories</h2>
            @endforelse
          
        </div>
    </div>
</div>
@endsection