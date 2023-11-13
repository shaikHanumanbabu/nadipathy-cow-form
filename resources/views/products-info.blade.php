@extends('index')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Organic Products</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
            <h1 class="mb-5">Organic Cow Products</h1>
        </div>
        <div class="row gx-4">

            @forelse ($products as $product)
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ URL::asset("image/$product->image") }}" alt="">
                            <!-- <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                            </div> -->
                        </div>
                        <div class="text-center p-4">
                            <span class="d-block h5">{{ $product->title }}</span>
                            <!-- <a class="d-block h5" href="">Desi Cow Ghee</a> -->
                            <!-- <span>2 Years</span> <br> -->
                            <span class="text-primary me-1">&#8377;{{ $product->discount_price }}</span>
                            <span class="text-decoration-line-through">&#8377;{{ $product->original_price }}</span>
                        </div>
                    </div>
                </div>
            @empty
                
            @endforelse
            
            
        </div>
    </div>
</div>
<!-- Product End -->

@endsection