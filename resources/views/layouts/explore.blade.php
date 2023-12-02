 <!-- Product Start -->
 <section class="bg-primary">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title text-center text-secondary px-3">Cows in our Goshala</p>
                <h1 class="mb-5 text-white">Let's Explore</h1>
            </div>
            <div class="row gx-4">

                @foreach ($explore_cows as $cow)
                    <div class="col-md-6 col-lg-4 col-xl-3 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ URL::asset("image/$cow->main_image") }}" alt="">
                                <div class="product-overlay">
                                    <a class="btn btn-square btn-secondary rounded-circle m-1" href="#"><i class="bi bi-link"></i></a>
                                    <!-- <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a> -->
                                </div>
                            </div>
                            <div class="text-center p-4 bg-secondary">
                                <a class="d-block h5" href="">{{ $cow->breed->title }}</a>
                                <span class="text-primary me-1">{{ $cow->name }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                
                {{-- <div style="display: flex; justify-content: center;">
                    <a href="#" class="btn btn-lg btn-secondary rounded-pill py-3 px-5 animated slideInLeft">View More</a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
    <!-- Product End -->