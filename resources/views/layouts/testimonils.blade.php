<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Testimonials</p>
            <h1 class="mb-5">What People Say About Our Farm</h1>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="/image/{{ $testimonial->image }}" alt="">
                            <p class="fs-5">{{ $testimonial->description }}</p>
                            <h5>{{ $testimonial->customer_name }}</h5>
                            <span class="text-primary">{{ $testimonial->profession }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4"> 
                <iframe width="100%" height="230" src="https://www.youtube.com/embed/uk1eVUowcFU?si=VMUCyYWWu6ADlZmc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->