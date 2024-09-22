@extends('index')

@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Contact us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-xxl py-3">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <a href="#" class="alert-link">{{$error}}</a><br>
            @endforeach
        </div>
    @endif
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Please Contact Us</p>
            <h1 class="mb-5">If You Have Any Query</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <form method="POST" action="{{ route('contact.post') }}">
                    @csrf

                    @if (session('contact_success'))
                        <div class="alert alert-success">
                            <strong>{{ session('contact_success') }}</strong>
                        </div>
                    @endif
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" placeholder="Your Name" value="{{ old('name') }}">
                                <label for="name">Your Name</label>
                            </div>


                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <span class="label label-danger" id="phone_validation_error"></span>
                                <input type="number" oninput="limitInputLength(this)" class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" name="phone_number" placeholder="Your Mobile Number">
                                <label for="phone_number">Your Mobile</label>
                            </div>
                            @error('phone_number')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" placeholder="Leave a message here" name="address" style="height: 100px"></textarea>
                                <label for="address">Message</label>
                            </div>
                            @error('address')
                                {{ $message }}
                            @enderror
                            
                        </div>
                        <div class="col-12">
                            <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h3 class="mb-4">Contact Details</h3>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                        <i class="fa fa-map-marker text-body"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Our Address</h6>
                        <span> <b> Nadipathy Goshala. </b><br>
                            Lingamparthy,  konda thimmapuram Road, Yeleswaram Mandal, Kakinada District, Andhra Pradesh, India-533429</span>
                    </div>
                </div>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                        <i class="fa fa-phone text-body"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Call Us</h6>
                        <span>+91 88850 11320 | +91 94910 23454 | +91 94910 23456</span> <br>
                        <span><b>Contact for Hindi:</b> +91 88850 11321</span>
                    </div>
                </div>
                <div class="d-flex border-bottom-0 pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                        <i class="fa fa-envelope text-body"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Mail Us</h6>
                        <span>punganurcowskkd@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15237.048883651001!2d82.1328999!3d17.3028928!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a377dfac6175163%3A0xd29e074bd3be86e2!2sNadipathy%20Goshala!5e0!3m2!1sen!2sin!4v1687588835507!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>





@endsection