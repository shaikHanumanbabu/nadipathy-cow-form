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
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <p class="section-title bg-white text-center text-primary px-3">{{ $cow->breed->title }}</p>
            <h1 class="mb-5">{{ $cow->sub_category->subcategory_name }}</h1>
        </div>
        <div class="row gx-4 mb-5">

          <div class="col-lg-8" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
            <div class="portfolio-details-slider swiper mt-3 swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper align-items-center" id="swiper-wrapper-c5b965eaee796523" aria-live="off" style="transform: translate3d(-2520px, 0px, 0px); transition-duration: 0ms;">
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" style="width: 840px;" role="group" aria-label="3 / 3">
                        <img src="{{ URL::asset("assets/img/share2.png") }}" alt="">
                    </div>
        
                    <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 840px;" role="group" aria-label="1 / 3">
                        <img src="{{ URL::asset("assets/img/share2.png") }}" alt="">
                    </div>
        
                    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" style="width: 840px;" role="group" aria-label="2 / 3">
                        <img src="{{ URL::asset("assets/img/share2.png") }}" alt="">
                    </div>
        
                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" style="width: 840px;" role="group" aria-label="3 / 3">
                        <img src="{{ URL::asset("assets/img/share2.png") }}" alt="">
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="width: 840px;" role="group" aria-label="1 / 3">
                        <img src="{{ URL::asset("assets/img/share2.png") }}" alt="">
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"
                    tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
        
                <!-- <div class="" style="position: relative; width: 50px; height: 50px; background-color: aqua;">
                            <div style="position: absolute; width: 30px; height: 30px; top: 0; right: 0; z-index: 99999;"> <a href="#"> <img src="img/share2.png"></a></div>
                        </div> -->
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
          </div>
            <div class="col-lg-1" style="text-align: center; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
               <div class="mt-3"><a target="_blank" href="https://wa.me/+918885011320/?text={{ urlencode(url()->full()) }}" title="Share Details"><img src="{{ URL::asset("assets/img/share2.png") }}" alt="Share details"></a></div>
            </div>
  
            <div class="col-lg-3" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
              <div class="portfolio-info mt-3">
                <h4>Details of the Cow:</h4>
                <hr>
                <ul style="list-style-type: none; margin: 0; padding: 0;" class="mt-3">
                  <li><strong>Name</strong>: {{ $cow->name }}</li>
                  <hr>
                  <li><strong>Breed</strong>: {{ $cow->breed->title }}</li>
                  <hr>
                  <li><strong>Age</strong>: {{ $cow->getYear() }}</li>
                  <hr>
                  <li><strong>Height</strong>: {{ $cow->height  }}</li>
                  <hr>
                </ul>
              </div>

              <div class="portfolio-info mt-3">
                <iframe width="100%" height="100%" src="{{ $cow->youtube_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
              </div>
              
              <div class="portfolio-info mt-1 mb-3" style="text-align: center;">
                <a class="btn btn-success text-white smediains mt-2" href="https://chat.whatsapp.com/ENOG6QfzbLF0xtdnx7GL4q" target="_blank"><i class="fab fa-whatsapp px-1 py-1"></i> Join our Whatsapp Group</a>
              </div>
            </div>
  
          </div>

        <div class="row mt-3 mb-4">
            <div class="col-lg-12">
                <h2 align="center">Please Contact for More Details <span class="text-primary"> +91 8885011320 </span></h2>
            </div>
        </div>
    </div>
</div>

<!-- Product End -->



@endsection