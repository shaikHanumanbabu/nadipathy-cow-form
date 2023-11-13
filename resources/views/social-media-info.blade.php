@extends('index')

@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Our Media</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Social Media</li>
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
        <h1 class="mb-5">Social Media</h1>
    </div>
    <div class="row">
        @forelse ($socialMedias as $social)
            <div class="col-md-4">
                <div class="card">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal_{{ $loop->index }}">
                    <img src="{{ URL::asset("image/$social->image") }}" class="card-img-top" alt="{{ $social->title }}">
                    </a>
                    <div class="card-body">
                    <p class="card-text">{{ $social->title }} </p>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="videoModal_{{ $loop->index }}" tabindex="-1" aria-labelledby="videoModal1Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="{{ $social->link }}"></iframe>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        @empty
            <h3>No Content Available</h3>
        @endforelse
        
    </div>
</div>
</section>
<!-- Press News End -->

<!-- press news End -->
@endsection