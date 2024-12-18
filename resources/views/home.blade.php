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
                                        <p class="fs-5 text-white">{{ $c->title }}</p>
                                    @else
                                        <p class="fs-4 text-white">{{ $c->telugu_title ?? $c->title  }}</p>
                                    @endif

                                    @if (App::currentLocale() == 'en')
                                        <h3 class="text-white mb-2 animated slideInRight">{{ $c->caption }}</h3>
                                    @else
                                        <h1 class="display-3 text-white mb-5 animated slideInRight">{{ $c->telugu_caption ?? $c->caption }}</h1>
                                    @endif

                                    @if (App::currentLocale() == 'en')
                                        <a href="{{ $c->link }}" class="btn btn-secondary rounded-pill py-2 px-4 animated slideInRight">{{ $c->btntext }}</a>
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
           
            <div class="col-md-3 col-sm-6">
                <div class="service-block color-bg">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPunganurcowsgoshala&amp;tabs=timeline&amp;width=310&amp;height=470&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=false&amp;appId" width="310" height="470" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>                 
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-12" style="margin-bottom: 10px;">
                            <div style="margin: 0 3px; padding: 18px; background-color: #5B8C51; border-radius: 10px;" data-aos="flip-right" data-aos-delay="500" class="aos-init aos-animate">
                              <iframe width="100%" height="150" src="https://www.youtube.com/embed/G0ueso0Zy18?si=fghS9ORHSwUSEKsk" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                              <button class="btn btn-danger" onclick="window.open('https://www.youtube.com/@PunganurCowsGoshala','_blank')"><i class="bi bi-play-btn-fill"></i> Subscribe</button>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-bottom: 5px;">
                            <div style="margin: 0 3px; padding: 18px; background-color: #EDDD5E; border-radius: 10px;" data-aos="flip-right" data-aos-delay="500" class="aos-init aos-animate">
                              <iframe width="100%" height="150" src="https://www.youtube.com/embed/kfY0vyEBpJI?si=g_HR_jjrIXJpu99Z" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                              <button class="btn btn-danger" onclick="window.open('https://www.youtube.com/channel/UCtpi28I5BpZV2WQdHNxiv5w','_blank')"><i class="bi bi-play-btn-fill"></i> Subscribe</button>
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


{{-- @include('layouts.explore') --}}

@include('layouts.testimonils')

@endsection


@section('js-content')

<script type="text/javascript">
    $(document).ready(function(){
        $("#mdl_close_btn").click(function(){
            if($('.alert-success').length > 0) {
                $('#appointment').css("display","none")
                $('.alert-success').remove()
            }
            $('#appointment').css("display","none")
        });
    });
</script>
    
@endsection


