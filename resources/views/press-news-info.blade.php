@extends('index')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Our Media</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Press News</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- press news Start -->

<section class="bg-light">
<div class="container-xxl py-5 px-0 gallery">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center text-primary px-3">Our Media</p>
        <h1 class="mb-5">Press News</h1>
    </div>
    <div class="row g-0">
        @forelse ($pressNews as $news)
            <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ URL::asset("press-news/$news->image") }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ URL::asset("press-news/$news->image") }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <h1>No Content</h1>
        @endforelse
    </div>
</div>
</section>

<!-- press news End -->
@endsection