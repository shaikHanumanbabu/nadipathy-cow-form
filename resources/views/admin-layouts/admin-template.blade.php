<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nadipathy Goshala</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/quill/quill.snow.css" rel="stylesheet">
  <link href="/assets/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assets/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/simple-datatables/style.css" rel="stylesheet">

  <link href="/assets/css/style.css" rel="stylesheet">

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/basic_config.min.js" referrerpolicy="origin"></script>
  {{-- <script src="/tinymce/tinymce/tinymce.min.js"></script> --}}

  @stack('head')
</head>

<body>
  <!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <img src="/assets/img/logo-white.png" width="252" alt="Nadipathy Goshala">
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="/assets/img/user_icon.png" alt="Profile" class="rounded-circle">
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
          <a href="{{ route('welcome_ones.index') }}">
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
          <a href="{{ route('welcome_twos.index') }}">
            <i class="bi bi-circle"></i><span>Welcome Text2</span>
          </a>
        </li>
        <li>
          <a href="{{ route('testimonials.index') }}">
            <i class="bi bi-circle"></i><span>Testimonials</span>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</aside><!-- End Sidebar-->
  @yield('content')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="/assets/apexcharts/apexcharts.min.js"></script>
  <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/chart.js/chart.min.js"></script>
  <script src="/assets/echarts/echarts.min.js"></script>
  <script src="/assets/quill/quill.min.js"></script>
  <script src="/assets/simple-datatables/simple-datatables.js"></script>
  <script src="/assets/tinymce/tinymce.min.js"></script>
  <script src="/assets/php-email-form/validate.js"></script>
  <script src="/assets/js/main.js"></script>
  
  @yield('js-content')
</body>

</html>