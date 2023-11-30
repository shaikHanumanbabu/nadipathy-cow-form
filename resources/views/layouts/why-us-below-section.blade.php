<!-- Banner Start -->
<div class="container-fluid banner my-5 py-5" data-parallax="scroll" data-image-src="img/banner.jpg">
    <div class="container py-5">
        <div class="row g-5">
            @foreach ($breeds->slice(0, 2)->all() as $breed)
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded" src="{{ URL::asset("image/$breed->image") }}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="text-white mb-3">{{ $breed->title }}</h2>
                            <p class="text-white mb-4 justify">{{ $breed->short_description }}</p>
                            <a class="btn btn-secondary rounded-pill py-2 px-4" href="{{ url('/breedInfo?breedId='. $breed->id) }}">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
<!-- Banner End -->