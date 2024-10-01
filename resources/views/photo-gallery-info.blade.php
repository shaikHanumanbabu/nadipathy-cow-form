@extends('index')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Our Memories</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/photo-gallery') }}">Photo Gallery</a></li> <li class="breadcrumb-item active" aria-current="page">{{ ucwords(str_replace('-',  ' ', $photoGalleryInfo->title)) }}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Photo Gallery Start -->
<section class="bg-light">
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 650px;">
            <p class="section-title bg-white text-center text-primary px-3">PHOTO GALLERY</p>
            <h1 class="mb-5">{{ ucwords(str_replace('-',  ' ', $photoGalleryInfo->title)) }}</h1>
        </div>
        <div class="row g-0">

            @forelse ($photoGalleryInfo->galleryimage as $gallery)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-12 px-1 py-1">
                            <a class="d-block" href="{{ URL::asset("image/$gallery->image") }}" data-lightbox="gallery">
                                <img class="img-fluid" src="{{ URL::asset("image/$gallery->image") }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <h3>No Content</h3>
            @endforelse
            
            
            
            

            
           
            
        </div>

    </div>
</div>
</section>
<!-- Photo Gallery End -->




@endsection