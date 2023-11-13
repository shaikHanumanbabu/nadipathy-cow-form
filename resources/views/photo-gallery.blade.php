@extends('index')

@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Our Memories</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
            <div class="col-md-4 px-1 py-1">
            <div class="card">
                <a href="photo-gallery-cht2020.html"><img src="img/photo-gallery/cowhug-therapy-2020/32.jpg" class="card-img-top" alt="Image 1"></a>
                <div class="card-body">
                    <a href="photo-gallery-cht2020.html"><h5 class="card-title">Cow Hug Therapy - 2020</h5></a>
                </div>
            </div>
            </div>
            <div class="col-md-4 px-1 py-1">
            <div class="card">
                <a href="photo-gallery-cht2023.html"><img src="img/photo-gallery/cowhug-therapy-2023/45.jpg" class="card-img-top" alt="Image 2"></a>
                <div class="card-body">
                    <a href="photo-gallery-cht2023.html"><h5 class="card-title">Cow Hug Therapy - 2023</h5></a>
                </div>
            </div>
            </div>
            <div class="col-md-4 px-1 py-1">
            <div class="card">
                <a href="photo-gallery-cht-teachers.html"><img src="img/photo-gallery/cowhug-therapy-teachers/30.jpg" class="card-img-top" alt="Image 3"></a>
                <div class="card-body">
                    <a href="photo-gallery-cht-teachers.html"><h5 class="card-title">Cow Hug Therapy with Teachers</h5></a>
                </div>
            </div>
            </div>
            <div class="col-md-4 px-1 py-1">
            <div class="card">
                <a href="photo-gallery-gokalyanam.html"><img src="img/photo-gallery/go-kalyanam/9.jpg" class="card-img-top" alt="Image 3"></a>
                <div class="card-body">
                    <a href="photo-gallery-gokalyanam.html"><h5 class="card-title">Go Kalyanam</h5></a>
                </div>
            </div>
            </div>
            <div class="col-md-4 px-1 py-1">
            <div class="card">
                <a href="photo-gallery-krishnastami.html"><img src="img/photo-gallery/srikrishna-janmastami-2023/58.jpg" class="card-img-top" alt="Image 3"></a>
                <div class="card-body">
                    <a href="photo-gallery-krishnastami.html"><h5 class="card-title">Sri Krishna Janmashtami - 2023</h5></a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Press News End -->




@endsection