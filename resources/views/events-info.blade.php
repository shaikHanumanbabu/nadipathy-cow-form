@extends('index')

@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Events</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Events</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Events Start -->
<section class="bg-light">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 650px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Updates</p>
                <h1 class="mb-5">Events</h1>
            </div>

            @forelse ($events as $event)
                <div class="row g-0">
                    <div class="col-lg-4 wow fadeInUp bg-white px-4 py-4 mb-4"><img src="img/photo-gallery/cowhug-therapy-2020/28.jpg" class="img-fluid"></div>
                    <div class="col-lg-8 wow fadeInUp bg-white px-4 py-4 mb-4">
                    <h3>{{ $event->title }}</h3>
                    <p style="text-align: justify;">{{ $event->short_description }}</p>
                    <a href="{{ route('events-details') }}?eventId={{$event->id}}" target="_blank" class="btn btn-secondary rounded-pill py-2 px-4 animated slideInLeft">Photo Gallery</a>
                    </div>
                </div>
                
            @empty
                <h1>No Content</h1>
            @endforelse

            
        </div>
    </div>
</section>
<!-- blog End -->



@endsection