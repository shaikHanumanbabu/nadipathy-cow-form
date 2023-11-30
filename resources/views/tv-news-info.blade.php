@extends('index')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Our Media</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">TV News</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


<!-- Press News Start -->
<section class="bg-light">
    <div class="container-xxl py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Media</p>
            <h1 class="mb-5">TV News</h1>
        </div>
        <div class="row">

            @forelse ($tvNews as $tv)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="100%" height="260px" style="padding: 15px;" src="{{ $tv->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            @empty
                <h3>No News</h3>
            @endforelse
            

        </div>
    </div>
</section>
<!-- Press News End -->
@endsection