@extends('index')
@section('content')

    <!-- Carousel Start -->
<div class="container-fluid px-0">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($carousel as $c)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img class="w-100" src="image/{{ $c->image }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    @if (App::currentLocale() == 'en')
                                        <p class="fs-4 text-white">{{ $c->title }}</p>
                                    @else
                                        <p class="fs-4 text-white">{{ $c->telugu_title ?? $c->title  }}</p>
                                    @endif

                                    @if (App::currentLocale() == 'en')
                                        <h1 class="display-3 text-white mb-5 animated slideInRight" style="text-shadow: 3px 3px 45px rgba(0, 0, 0, 1);">{{ $c->caption }}</h1>
                                    @else
                                        <h1 class="display-3 text-white mb-5 animated slideInRight" style="text-shadow: 3px 3px 45px rgba(0, 0, 0, 1);">{{ $c->telugu_caption ?? $c->caption }}</h1>
                                    @endif

                                    @if (App::currentLocale() == 'en')
                                        <a href="{{ $c->link }}" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">{{ $c->btntext }}</a>
                                    @else
                                        <a href="{{ $c->link }}" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">{{ $c->telugu_btntext ?? $c->btntext }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<section>
    <div class="col-md-12 marquee1">
    <marquee direction="left" onmouseover="stop();" onmouseout="start();">
    <ul>
        @if (App::currentLocale() == 'en')
            <li>
                <div class="spinner-grow" role="status"></div>{{ $marquee->marquee_text }}
            </li>
        @else
            <li>
                <div class="spinner-grow" role="status"></div>{{ $marquee->telugu_marquee_text ?? $marquee->marquee_text }}
            </li>
        @endif
    </ul>
    </marquee>
    </div>
</section>
<!-- Carousel End -->
{{-- {{ dd($welcomeone) }} --}}
<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="text-align: justify;">
                <p class="section-title bg-white text-start text-primary pe-3">Few facts how the miniature cow been created</p>
                <!-- <h1 class="mb-4">Few Reasons Why People Choosing Us!</h1> -->
                <h1 class="mb-4">{{ $welcomeone->title }}</h1>
                <div>
                    {!! html_entity_decode($welcomeone->description) !!}
                </div>
                <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="{{ $welcomeone->link }}">Read More</a>
            </div>
           
            <div class="col-lg-6">
                <div class="rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center bg-primary py-5 px-4">
                                <img class="img-fluid mb-4" src="img/experience.png" alt="">
                                <h1 class="display-6 text-white" data-toggle="counter-up">16</h1>
                                <span class="fs-5 fw-semi-bold text-secondary">Years of Experience</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="text-center bg-secondary py-5 px-4">
                                <img class="img-fluid mb-4" src="img/award.png" alt="">
                                <h1 class="display-6" data-toggle="counter-up">10</h1>
                                <span class="fs-5 fw-semi-bold text-primary">Award Winning</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="text-center bg-secondary py-5 px-4">
                                <img class="img-fluid mb-4" src="img/animal.png" alt="">
                                <h1 class="display-6" data-toggle="counter-up">1032</h1>
                                <span class="fs-5 fw-semi-bold text-primary">Total Cattle</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center bg-primary py-5 px-4">
                                <img class="img-fluid mb-4" src="img/client.png" alt="">
                                <h1 class="display-6 text-white" data-toggle="counter-up">32</h1>
                                <span class="fs-5 fw-semi-bold text-secondary">Our Inventions</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->





@include('layouts.why-us-below-section')
@include('layouts.explore-breeds')
@include('layouts.need-cow-at-home')


@include('layouts.explore')

@include('layouts.testimonils')

@endsection
