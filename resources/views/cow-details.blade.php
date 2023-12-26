@extends('index')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $cow->breed->title }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url("/breed?breedType=".$cow->breed->title) }}">{{ $cow->breed->title }}</a></li>
                <li class="breadcrumb-item"><a href="{{ url("/subcategory?subCategoryId=".$cow->sub_category->id) }}">{{ $cow->sub_category->subcategory_name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cow Details</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Product Start -->
<div class="container-xxl">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">{{ $cow->breed->title }}</p>
            <h1 class="mb-5">{{ $cow->sub_category->subcategory_name }}</h1>
        </div>
        <div class="row gx-4">
            

            @foreach ($cow->galleryimage as $image)
                <div class="col-md-6 col-lg-4 col-xl-4 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ URL::asset("image/$image->image_name") }}" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="{{ URL::asset("image/$image->image_name") }}" data-lightbox="gallery"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
            
            <!--<div class="col-lg-6 mb-4 wow fadeInUp offset-lg-3" data-wow-delay="0.3s">-->
            <!--    <div class="product-item">-->
            <!--        <div class="position-relative">-->
            <!--            <img class="img-fluid" src="img/video_bg.jpg" alt="">-->
            <!--            <div class="product-overlay">-->
            <!--                <iframe width="560" height="315" src="{{ $cow->link }}" data-lightbox="gallery" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            
            <div class="col-md-6 col-md-offset-3">
            <div class="card mb-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="100%" height="350px" style="padding: 15px;" src="{{ $cow->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

            <!-- <div class="col-md-4">
                <div class="card">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal1">
                    <img src="img/tvnews/1.jpg" class="card-img-top" alt="Video 1">
                    </a>
                    <div class="card-body">
                    <p class="card-text">Some description about the video.</p>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="row mt-3">
            <div class="col-lg-12">
                <h2 align="center">Please Contact for More Details <span class="text-primary"> +91 8885011320 </span></h2>
            </div>
        </div>
    </div>
</div>
<!-- Product End -->



@endsection