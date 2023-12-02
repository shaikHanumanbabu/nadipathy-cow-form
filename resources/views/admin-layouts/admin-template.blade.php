<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nadipathy Goshala</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/simple-datatables/style.css') }}" rel="stylesheet">

  <link href="{{ URL::asset('assets/css/style.css') }} " rel="stylesheet">

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/basic_config.min.js" referrerpolicy="origin"></script>
  {{-- <script src="/tinymce/tinymce/tinymce.min.js"></script> --}}

  @stack('head')
</head>

<body>
  <!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <img src="{{ URL::asset('assets/img/logo-white.png') }}" width="252" alt="Nadipathy Goshala">
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="{{ URL::asset('assets/img/user_icon.png') }}" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block ps-2"> Log Out</span>
        </a>
      </li>
    </ul>
  </nav>
</header>
<!-- End Header -->


 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link collapsed active" href="{{ route('dashboard.index') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#Courses" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-earmark-text"></i><span>Home Page</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="Courses" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('carousel.index') }}">
            <i class="bi bi-circle"></i><span>Carousel</span>
          </a>
        </li>
        <li>
          <a href="{{ route('welcome_ones.edit', ['welcome_one' => 1]) }}">
            <i class="bi bi-circle"></i><span>Welcome Text</span>
          </a>
        </li>
        {{-- <li>
          <a href="status.html">
            <i class="bi bi-circle"></i><span>Status</span>
          </a>
        </li> --}}
        <li>
          <a href="{{ route('breeds.index') }}">
            <i class="bi bi-circle"></i><span>Breeds</span>
          </a>
        </li>
        
        <li>
          <a href="{{ route('welcome_twos.edit', ['welcome_two' => 1]) }}">
            <i class="bi bi-circle"></i><span>Welcome Text2</span>
          </a>
        </li>
        <li>
          <a href="{{ route('testimonials.index') }}">
            <i class="bi bi-circle"></i><span>Testimonials</span>
          </a>
        </li>
        <li>
          <a href="{{ route('marquees.show', ['marquee' => 1]) }}">
            <i class="bi bi-circle"></i><span>Marquee Text</span>
          </a>
        </li>
        <li>
          <a href="{{ route('appointments.index') }}?type=appointment">
            <i class="bi bi-circle"></i><span>Appointlments Info</span>
          </a>
        </li>
        {{-- <li>
          <a href="{{ route('about.edit', ['about' => 1]) }}">
            <i class="bi bi-circle"></i><span>About</span>
          </a>
        </li> --}}
        
        
        
        
        
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed active" href="{{ route('about.edit', ['about' => 1]) }}">
        <i class="bi bi-grid"></i><span>About</span>
      </a>
    </li>
    {{-- another menu --}}
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#cows_bulls" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-earmark-text"></i><span>Cows & Bulls</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="cows_bulls" class="nav-content collapse " data-bs-parent="#sidebar-nav">       
        <li>
          <a href="{{ route('subcategories.index') }}">
            <i class="bi bi-circle"></i><span>Sub Categories</span>
          </a>
        </li>
        <li>
          <a href="{{ route('cows.index') }}">
            <i class="bi bi-circle"></i><span>Cows</span>
          </a>
        </li>
      </ul>
    </li>

    

    {{--  --}}

    <li class="nav-item">
      <a class="nav-link collapsed active" href="{{ route('products.index') }}">
        <i class="bi bi-grid"></i><span>Products</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#media" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-earmark-text"></i><span>Media</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="media" class="nav-content collapse " data-bs-parent="#sidebar-nav">       
        <li>
          <a href="{{ route('p-news.index') }}">
            <i class="bi bi-circle"></i><span>Press News</span>
          </a>
        </li>
        <li>
          <a href="{{ route('tv-news.index') }}">
            <i class="bi bi-circle"></i><span>Tv News</span>
          </a>
        </li>
        <li>
          <a href="{{ route('social-media.index') }}">
            <i class="bi bi-circle"></i><span>Social Media</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed active" href="{{ route('awards.index') }}">
        <i class="bi bi-grid"></i><span>Awards</span>
      </a>
    </li>

    
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#memories" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-earmark-text"></i><span>Memories</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="memories" class="nav-content collapse " data-bs-parent="#sidebar-nav">       
        
        <li >
          <a  href="{{ route('photogalleries.index') }}">
            <i class="bi bi-grid"></i><span>Photo Gallery</span>
          </a>
        </li>

        <li >
          <a  href="{{ route('videogalleries.index') }}">
            <i class="bi bi-grid"></i><span>Video Gallery</span>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed active" href="{{ route('blogs.index') }}">
        <i class="bi bi-grid"></i><span>Blogs</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed active" href="{{ route('events.index') }}">
        <i class="bi bi-grid"></i><span>Events</span>
      </a>
    </li>

    

    <li class="nav-item">
      <a class="nav-link collapsed active" href="{{ route('appointments.index') }}?type=contact">
        <i class="bi bi-grid"></i><span>Contacts</span>
      </a>
    </li>

    
    
  </ul>
</aside><!-- End Sidebar-->
  @yield('content')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{ URL::asset('assets/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ URL::asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('assets/chart.js/chart.min.js') }}"></script>
  <script src="{{ URL::asset('assets/echarts/echarts.min.js') }}"></script>
  <script src="{{ URL::asset('assets/quill/quill.min.js') }}"></script>
  <script src="{{ URL::asset('assets/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ URL::asset('assets/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ URL::asset('assets/php-email-form/validate.js') }}"></script>
  <script src="{{ URL::asset('assets/js/main.js') }}"></script>
  
  @yield('js-content')
</body>

</html>