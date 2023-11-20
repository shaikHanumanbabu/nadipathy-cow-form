@extends('index')

@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Our Memories</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Press News Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Memories</p>
            <h1 class="mb-5">Photo Gallery</h1>
        </div>
        <div class="row g-0">

            @forelse ($photoGalleries as $photoGallery)
                <div class="col-md-4 px-1 py-1">
                    <div class="card">
                        <a href="{{ url("photo-gallery-info?title=$photoGallery->title")  }}"><img src="{{ URL::asset("image/$photoGallery->image") }}" class="card-img-top" alt="Image 1"></a>
                        <div class="card-body">
                            <a href="{{ $photoGallery->title }}"><h5 class="card-title">{{ $photoGallery->title }}</h5></a>
                        </div>
                    </div>
                </div> 
            @empty
                <h2>No Content</h2>
            @endforelse
                      
            
        </div>
    </div>
</div>
<!-- Press News End -->




@endsection