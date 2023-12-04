@extends('index')

@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">About us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-3">
                <img src="{{ URL::asset("image/$aboutInfo->image_one") }}" class="img-fluid mb-3">
                <img src="{{ URL::asset("image/$aboutInfo->image_two") }}" class="img-fluid mb-3">
                <img src="{{ URL::asset("image/$aboutInfo->image_three") }}" class="img-fluid mb-3">
                <img src="{{ URL::asset("image/$aboutInfo->image_four") }}" class="img-fluid mb-3">
            </div>
            <div class="col-lg-9 wow fadeIn" data-wow-delay="0.5s">
                <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                <h2 class="mb-4">{{ $aboutInfo->title}}</h2>
                <p style="text-align: justify;">
                    {!! $aboutInfo->description !!}
                </p>
                <a href="{{ $aboutInfo->creator_link }}" target="_blank" class="btn btn-secondary rounded-pill py-2 px-4 animated slideInLeft">About Creator</a>
                <a href="{{ $aboutInfo->system_link }}" target="_blank" class="btn btn-secondary rounded-pill py-2 px-4 animated slideInLeft">Nadipathy System</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection