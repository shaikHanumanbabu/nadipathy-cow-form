@extends('index')

@section('content')
   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Our Memories</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Video Gallery</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Press News Start -->
<section class="bg-light">
<div class="container-xxl py-5">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center text-primary px-3">Our Memories</p>
        <h1 class="mb-5">Video Gallery</h1>
    </div>
    <div class="row">

        @forelse ($videoGalleries as $key => $videoGallery)
        <div class="col-md-4">
            <div class="card">
                <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal_{{$key}}">
                <img src="{{ URL::asset("/image/$videoGallery->image") }}" class="card-img-top" alt="Video 1">
                </a>
                <div class="card-body">
                <p class="card-text">{{ $videoGallery->title }}</p>
                </div>
            </div>
            </div>
            <!-- Video Modals -->
            <div class="modal fade" id="videoModal_{{$key}}" tabindex="-1" aria-labelledby="videoModal1Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="{{ $videoGallery->link }}"></iframe>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        @empty
            <h1>No Content</h1>
        @endforelse
        
    </div>
</div>
</section>
<!-- Press News End -->




@endsection