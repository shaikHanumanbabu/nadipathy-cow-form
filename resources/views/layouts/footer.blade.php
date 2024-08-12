
   <!-- Footer Start -->
    <div class="container-fluid bg-dark footer bg-footer mt-2 py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Reach Us</h5>
                    <p class="mb-1"><i class="fa fa-map-marker me-3"></i>Nadipathy Goshala. </b><br>
                        Lingamparthy,  konda thimmapuram Road, Yeleswaram Mandal, Kakinada District, Andhra Pradesh, India-533429</p>
                    <p class="mb-1">Call: <i class="fa fa-phone "></i> +91 8885011320</p>
                    <p class="mb-1">For Hindi: <i class="fa fa-phone "></i> +91 8885011321</p>
                    <p class="mb-0"><i class="fa fa-envelope me-3"></i>punganurcowskkd@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-secondary rounded-circle me-2 smediafbfoot" href="https://www.facebook.com/Punganurcowsgoshala" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2 smediaytfoot" href="https://www.youtube.com/c/PunganurCowsGoshala" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2 smediaytfoot" href="https://www.youtube.com/channel/UCtpi28I5BpZV2WQdHNxiv5w" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2 smediaytfoot" href="https://www.youtube.com/@Minicows" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2 smediaytfoot" href="https://www.youtube.com/@Miniaturecows" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2 smediainsfoot" href="https://www.instagram.com/punganurucows/?utm_source=qr" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                    <p><a class="btn text-light smediains mt-2" href="https://chat.whatsapp.com/ENOG6QfzbLF0xtdnx7GL4q" target="_blank"><i class="fab fa-whatsapp bg-primary px-1 py-1"></i> Join our Whatsapp Group</a></p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="{{ url('about-us') }}">About Us</a>
                    <a class="btn btn-link" href="{{ url('contact') }}">Contact Us</a>
                    <a class="btn btn-link" href="{{ url('blog') }}">Blog</a>
                    <a class="btn btn-link" href="{{ url('photo-gallery') }}">Photo Gallery</a>
                    <a class="btn btn-link" href="{{ url('video-gallery') }}">Video Gallery</a>
                    <a class="btn btn-link" href="{{ url('tv-news-info') }}">TV News</a>
                    <a class="btn btn-link" href="{{ url('press-news-info') }}">Press News</a>
                    <a class="btn btn-link" href="{{ url('social-media-info') }}">Social Media</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Cows</h5>

                    @forelse ($breeds ?? App\Models\Breed::all() as $b)
                        <a href="{{ url("/breed/?breedType=$b->title") }}" class="btn btn-link">{{ $b->title }}</a>
                        
                    @empty
                        <a href="#" class="dropdown-item">No Breeds</a>
                    @endforelse
                    {{-- <a class="btn btn-link" href="miniature.html">Miniature Cows</a>
                    <a class="btn btn-link" href="punganur.html">Punganur Cows</a>
                    <a class="btn btn-link" href="short-varieties.html">Short Varieties</a> --}}
                    <a class="btn btn-link" href="{{ url('products-info') }}">Products</a>
                    <a class="btn btn-link" href="{{ url('breedInfo?breedId=12') }}">What is Miniature</a> 
                    <a class="btn btn-link" href="{{ url('breedInfo?breedId=13') }}">What is Punganur</a>
                    <a class="btn btn-link" href="{{ url('breedInfo?breedId=14') }}">What is Short Varieties</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="d-block" href="img/Breeding-line.jpg" data-lightbox="gallery">
                        <img class="img-fluid" src="img/Breeding-line.jpg" alt="">
                    </a>
                    <!-- <h5 class="text-white mb-4">Important Links</h5>
                    <a class="btn btn-link" href="terms&conditions.html">Terms & Conditions</a>
                    <a class="btn btn-link" href="shipping-policy.html">Shipping Policy</a>
                    <a class="btn btn-link" href="feed&care.html">Feeding & Caring</a>
                    <a class="btn btn-link" href="support.html">Support</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-primary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center text-md-start text-white mb-3 mb-md-0">
                    © Copy Rights Reserved to <a class="fw-semi-bold text-secondary" href="#">Nadipathy Goshala</a>, All Rights Reserved @ 2023. Trademark Registered.
                </div>
                <div class="col-md-4 text-center text-white text-md-start">
                    Powered By <a class="fw-semi-bold text-secondary" href="https://leo9.in/" target="_blank">Leo9.in</a>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Copyright End -->

    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>