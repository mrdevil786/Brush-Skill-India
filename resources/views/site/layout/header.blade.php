<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('website-page-title') - {{ env('APP_NAME') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('favicon.svg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('site/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark py-2 pe-3 border-end border-white" href="tel:+917900055544"><i
                                class="bi bi-telephone text-secondary me-2"></i>+91-7900055544</a>
                        <a class="text-dark py-2 px-3" href="mailto:brushskillindia@gmail.com"><i
                                class="bi bi-envelope text-secondary me-2"></i>brushskillindia@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body py-2 px-3 border-end border-white" href="">
                            <i class="fab fa-facebook-f text-secondary"></i>
                        </a>
                        <a class="text-body py-2 px-3 border-end border-white" href="">
                            <i class="fab fa-twitter text-secondary"></i>
                        </a>
                        <a class="text-body py-2 px-3 border-end border-white" href="">
                            <i class="fab fa-linkedin-in text-secondary"></i>
                        </a>
                        <a class="text-body py-2 px-3 border-end border-white" href="">
                            <i class="fab fa-instagram text-secondary"></i>
                        </a>
                        <a class="text-body py-2 ps-3" href="">
                            <i class="fab fa-youtube text-secondary"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <img src="{{ asset('site/img/logo.svg') }}" style="width: 200px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">
                <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="/about" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                <a href="/service" class="nav-item nav-link {{ Request::is('service') ? 'active' : '' }}">Service</a>
                <a href="/testimonial" class="nav-item nav-link {{ Request::is('testimonial') ? 'active' : '' }}">Testimonial</a>
                <a href="/contact" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
            <div class="d-none d-lg-flex align-items-center ps-4">
                <i class="fa fa-2x fa-mobile-alt text-secondary me-3"></i>
                <div>
                    <h5 class="text-primary mb-1"><small>Call Now</small></h5>
                    <h6 class="text-light m-0"><a href="tel:+917900055544">+91-7900055544</a></h6>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
