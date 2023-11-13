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
        <div class="col-md-4">
        <div class="card">
            <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal1">
            <img src="img/tvnews/1.jpg" class="card-img-top" alt="Video 1">
            </a>
            <div class="card-body">
            <p class="card-text">Some description about the video.</p>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card">
            <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal2">
            <img src="img/tvnews/2.jpg" class="card-img-top" alt="Video 2">
            </a>
            <div class="card-body">
            <p class="card-text">Some description about the video.</p>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card">
            <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal3">
            <img src="img/tvnews/3.jpg" class="card-img-top" alt="Video 3">
            </a>
            <div class="card-body">
            <p class="card-text">Some description about the video.</p>
            </div>
        </div>
        </div>
    </div>
</div>
</section>
<!-- Press News End -->




@endsection