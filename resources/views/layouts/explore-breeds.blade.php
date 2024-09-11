<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Breeds</p>
            <h1 class="mb-5">Explore our Breeds</h1>
        </div>
        <div class="row gy-5 gx-4">
            @foreach ($breeds as $breed)
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ URL::asset("image/$breed->image") }}" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="{{ URL::asset("image/$breed->image") }}" alt="">
                            </div>
                            <h5 class="mb-3">{{ $breed->title }}</h4>
                            <p class="mb-4 justify">
                                {!! $breed->short_description !!}
                            </p>
                            <a class="btn btn-square rounded-circle" href="{{ route("breed-info", $breed->slug) }}"><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
<!-- Service End -->