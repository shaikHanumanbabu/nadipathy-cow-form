@extends('index')

@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Blog</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- blog Start -->
<section class="bg-light">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 650px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Updates</p>
                <h1 class="mb-5">Blogs</h1>
            </div>
            <div class="row g-0">
                @forelse ($blogs as $blog)
                    <div class="col-lg-12 wow fadeInUp bg-white px-4 py-4 mb-4">
                        <h3>{{ $blog->title }}</h3>
                        <p style="text-align: justify;">{!! $blog->short_description !!}</p>
                        <a href="{{ $blog->btn_link }}" target="_blank" class="btn btn-secondary rounded-pill py-2 px-4 animated slideInLeft">{{ $blog->btn_title }}</a>
                    </div>
                @empty
                    <h1>No Content</h1>
                @endforelse
                
               
            </div>
        </div>
    </div>
</section>
<!-- blog End -->




@endsection