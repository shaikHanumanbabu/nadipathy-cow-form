@extends('index')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $sub_category->breed->title }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url("/breed?breedType=".$sub_category->breed->title) }}">{{ $sub_category->breed->title }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $sub_category->subcategory_name }}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">{{ $sub_category->breed->title }}</p>
            <h1 class="mb-5">{{ $sub_category->subcategory_name }}</h1>
        </div>
        <div class="row gx-4">

            @forelse ($sub_category->cows as $cow)
                <div class="col-md-6 col-lg-4 col-xl-4 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ URL::asset("image/$cow->main_image") }}" alt="image">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="{{ url("/cow-details?cowid=$cow->id") }}"></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <span>{{ $cow->name }}</span><br>
                        </div>
                    </div>
                </div>
            @empty
                <h2>No Content</h2>
            @endforelse
            
            
            
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <h2 align="center">Please Contact for More Details <span class="text-primary"> +91 8885011320 </span></h2>
            </div>
        </div>
    </div>
</div>
<!-- Product End -->


@endsection