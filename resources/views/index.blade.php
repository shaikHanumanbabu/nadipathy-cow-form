<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nadipathy Cow Farm</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- <link href="img/favicon.ico" rel="icon"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

<style>

</style>
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    @include('layouts.topheader')

    @include('layouts.navbar')

    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousel as $c)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img class="w-100" src="image/{{ $c->image }}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-8 text-start">
                                        <p class="fs-4 text-white">{{ $c->title }}</p>
                                        <h1 class="display-3 text-white mb-5 animated slideInRight" style="text-shadow: 3px 3px 45px rgba(0, 0, 0, 1);">{{ $c->caption }}</h1>
                                        <a href="{{ $c->link }}" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">{{ $c->btntext }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <section>
        <div class="col-md-12 marquee1">
        <marquee direction="left" onmouseover="stop();" onmouseout="start();">
        <ul>
            <li>
                <div class="spinner-grow" role="status"></div>{{ $marquee->marquee_text }}
            </li>
        </ul>
        </marquee>
        </div>
    </section>
    <!-- Carousel End -->
    {{-- {{ dd($welcomeone) }} --}}
    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="text-align: justify;">
                    <p class="section-title bg-white text-start text-primary pe-3">Few facts how the miniature cow been created</p>
                    <!-- <h1 class="mb-4">Few Reasons Why People Choosing Us!</h1> -->
                    <h1 class="mb-4">{{ $welcomeone->title }}</h1>
                    <div>
                        {!! html_entity_decode($welcomeone->description) !!}
                    </div>
                    <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="{{ $welcomeone->link }}">Read More</a>
                </div>
               
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/experience.png" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">16</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Years of Experience</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/award.png" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">10</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Award Winning</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/animal.png" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">1032</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Total Cattle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/client.png" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">32</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Our Inventions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    

    

    @include('layouts.why-us-below-section')
    @include('layouts.explore-breeds')
    @include('layouts.need-cow-at-home')


    @include('layouts.explore')

    @include('layouts.testimonils')

    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <script src="js/main.js"></script>

                            
<script type='text/javascript'>
    (function(I, L, T, i, c, k, s) {if(I.iticks) return;I.iticks = {host:c, settings:s, clientId:k, cdn:L, queue:[]};var h = T.head || T.documentElement;var e = T.createElement(i);var l = I.location;e.async = true;e.src = (L||c)+'/client/inject-v2.min.js';h.insertBefore(e, h.firstChild);I.iticks.call = function(a, b) {I.iticks.queue.push([a, b]);};})(window, 'https://cdn-v1.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', 'LhTnhMXLENXHkCm2t_c', {});
</script>
                

<script>
    (function (Q, R) {
        if(Q.qr) return;
        var u = 'https://webview.quickreply.ai/whatsapp/script.min.js';
        var h = R.head || R.documentElement;
        var e = R.createElement('script');
        e.type = 'text/javascript';
        e.async = true;
        e.src = u;
        Q.qr = {
            brandSetting: {
                includePageLink: false,
                messageText: "Hi.. I have a query.",
                phoneNumber: "+918885011320"
            },
            chatButtonSetting: {
                sideMargin: 20,
                marginBottom: 20,
                position: "left",
                buttonType: "ICON",
                buttonText: undefined,
                buttonBgColor: "#04AA6D",
                buttonTextColor: "#fff"
            }
        };
        e.onload = function () {
            CreateWhatsappChatWidget(Q.qr);
        };
        h.insertBefore(e, h.lastChild);
    })(window, document);
</script>
</body>

</html>