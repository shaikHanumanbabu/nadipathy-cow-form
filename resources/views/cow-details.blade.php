@extends('index')



@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $cow->breed->title }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/cows/'.$cow->breed->slug) }}">{{ $cow->breed->title }}</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/cows/'.$cow->breed->slug. '/'.$cow->sub_category->slug) }}">{{ $cow->sub_category->subcategory_name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cow Details</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Product Start -->

<!-- Product Start -->
<div class="container-xxl">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">{{ $cow->breed->title }}</p>
            <h1 class="mb-5">{{ $cow->sub_category->subcategory_name }}</h1>
        </div>
        <div class="row gx-4 mb-5">

            <div class="col-lg-8" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
              <div class="portfolio-details-slider swiper mt-3">
                <div class="swiper-wrapper align-items-center">
  
                  <div class="swiper-slide">
                    <img class="img-fluid" src="{{ URL::asset("image/$cow->main_image") }}" alt="">
                  </div>
            @foreach ($cow->galleryimage as $image)

                  <div class="swiper-slide">
                    <img class="img-fluid" src="{{ URL::asset("image/$image->image_name") }}" alt="">
                  </div>

            @endforeach

  
                  
                </div>
                <div class="swiper-pagination"></div>

                <!-- <div class="" style="position: relative; width: 50px; height: 50px; background-color: aqua;">
                    <div style="position: absolute; width: 30px; height: 30px; top: 0; right: 0; z-index: 99999;"> <a href="#"> <img src="img/share2.png"></a></div>
                </div> -->
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
                  <li><strong>Age</strong>: {{ $cow->age }}</li>
                  <hr>
                  <li><strong>Height</strong>: {{ $cow->height  }}</li>
                  <hr>
                </ul>
              </div>
              @if ($cow->youtube_link)
              <div class="portfolio-info mt-3">
                <iframe width="100%" height="100%" src="{{ $cow->youtube_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
                  
              @endif
              
              <div class="portfolio-info mt-1 mb-3" style="text-align: center;">
                <a class="btn btn-success text-white smediains mt-2" href="{{ App\Models\Whatsapplink::find(1)->link }}" target="_blank"><i class="fab fa-whatsapp px-1 py-1"></i> Join our Whatsapp Group</a>
              </div>
            </div>
  
          </div>

        <div class="row mt-5 mb-5">
            <h2 align="center" class="mb-4">Contact for More Details</h2>
            <div class="col-lg-3" style="text-align:center;"><h4 class="bg-primary" style="color:#fff; padding:15px; font-weight:bod; font-size:18px;">+91 8885011320<h4></div>
            <div class="col-lg-3" style="text-align:center;"><h4 class="bg-warning" style="color:#fff; padding:15px; font-weight:bod; font-size:18px;">+91 8885011321<h4></div>
            <div class="col-lg-3" style="text-align:center;"><h4 class="bg-danger" style="color:#fff; padding:15px; font-weight:bod; font-size:18px;">+91 8885011322<h4></div>
            <div class="col-lg-3" style="text-align:center;"><h4 class="bg-success" style="color:#fff; padding:15px; font-weight:bod; font-size:18px;">+91 8885011323<h4></div>
        </div>
    </div>
</div>
<!-- Product End -->




@endsection

@section('js-content')

<script src="{{ URL::asset("/assets/swiper/swiper-bundle.min.js") }}"></script>


    
@endsection
