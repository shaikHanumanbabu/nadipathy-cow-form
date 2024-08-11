<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nadipathy Cow Farm</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="{{ URL::asset("img/favicon-32x32.png") }} " rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ URL::asset("/lib/animate/animate.min.css") }} " rel="stylesheet">
    <link href="{{ URL::asset("/lib/owlcarousel/assets/owl.carousel.min.css") }} " rel="stylesheet">
    <link href="{{ URL::asset("/lib/lightbox/css/lightbox.min.css") }} " rel="stylesheet">
    <link href="{{ URL::asset("/css/bootstrap.min.css") }} " rel="stylesheet">
    <link href="{{ URL::asset("/css/bootstrap-datetimepicker.min.css") }} " rel="stylesheet">
    <link href="{{ URL::asset("/css/bootstrap-datetimepicker.min.css") }} " rel="stylesheet">
    <link href="{{ URL::asset("/assets/swiper/swiper-bundle.min.css") }} " rel="stylesheet">
    

    <link href="{{ URL::asset("/css/style.css") }} " rel="stylesheet">

    <style>
        .gtrans{background-color: #34AD54; border: 3px solid #EDDD5E; border-radius: 5px;}
        .VIpgJd-ZVi9od-ORHb{position: absolute; z-index: -999 !important;}
        </style>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>
</head>

<body>
    <div style="position: fixed; right: 0; top: 150px; z-index: 9999; width: 30px;" class="sm">
        <div class="h-100">
            <a class="btn btn-link text-light smediafb" href="https://www.facebook.com/Punganurcowsgoshala" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-link text-light smediayt" href="https://www.youtube.com/c/PunganurCowsGoshala" target="_blank"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-link text-light smediayt" href="https://www.youtube.com/channel/UCtpi28I5BpZV2WQdHNxiv5w" target="_blank"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-link text-light smediayt" href="https://www.youtube.com/@Minicows" target="_blank"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-link text-light smediayt" href="https://www.youtube.com/@Miniaturecows" target="_blank"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-link text-light smediains" href="https://www.instagram.com/punganurucows/?utm_source=qr" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    {{-- <div id="google_translate_element"> --}}
    @include('layouts.topheader')

    @include('layouts.navbar', [
        'breeds' => $breeds ??  App\Models\Breed::all()
    ])
    
    @yield('content')

    @include('layouts.footer')

    </div>


    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::asset("/lib/wow/wow.min.js") }} "></script>
    <script src="{{ URL::asset("/lib/easing/easing.min.js") }} "></script>
    <script src="{{ URL::asset("/lib/waypoints/waypoints.min.js") }} "></script>
    <script src="{{ URL::asset("/lib/owlcarousel/owl.carousel.min.js") }} "></script>
    <script src="{{ URL::asset("/lib/counterup/counterup.min.js") }} "></script>
    <script src="{{ URL::asset("/lib/parallax/parallax.min.js") }} "></script>
    <script src="{{ URL::asset("/lib/lightbox/js/lightbox.min.js") }} "></script>

    <script src="{{ URL::asset("/js/main.js") }}"></script>
    <script src="{{ URL::asset("/assets/js/moment-with-locales.min.js") }}"></script>
    <script src="{{ URL::asset("/assets/js/bootstrap-datetimepicker.min.js") }}"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>           
    @yield('js-content')
        
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

    $(function() {
        $('#id_0').datetimepicker({
                "debug": true,
                "allowInputToggle": true,
                "showClose": true,
                "showClear": true,
                "showTodayButton": true,
                "format": "YYYY-MM-DD hh:mm:ss",
                "daysOfWeekDisabled": [0, 6],
                "disabledHours" : [0, 1, 2, 7, 8, 9, 10, 11, 12],
            });

    })
// </script>
</body>

</html>