<!-- Banner Start -->
<div class="container-fluid banner py-3" data-parallax="scroll" data-image-src="img/3.jpg">
    <div class="container py-5">
        <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h1 class="mb-5" style="color: #fff;">{{ $cow_at_home->title }}</h1>
        </div>
        <div class="row gx-4">
            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <p style="text-align: justify; color: #fff;">
                    {{-- {!! $cow_at_home->description !!} --}}
                    {!! html_entity_decode($cow_at_home->description) !!}
                </p>
            </div>
            <div style="display: flex; justify-content: center;">
                <a href="{{ route("cow-at-home") }}"  class="btn btn-lg btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->