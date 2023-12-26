@extends('index')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $breed->title }} Breed</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $breed->title }} Breed</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-4">
                <img src="{{ URL::asset("/image/$breed->image")  }}" class="img-fluid" style="border-radius: 10px;">
            </div>
            <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                <p class="section-title bg-white text-start text-primary pe-3">{{ $breed->title }} Breed</p>
                <h1 class="mb-4">What is {{ $breed->title }} Breed?</h1>
                <p class="mb-4" style="text-align: justify;">
                    {!! $breed->long_description !!}
                </p>
                <a class="btn btn-secondary rounded-pill py-3 px-5" href="{{ $breed->link }}">Visit Our {{ $breed->title }}</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


@endsection