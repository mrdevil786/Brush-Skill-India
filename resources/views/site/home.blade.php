@extends('site.layout.main')

@section('website-page-title', 'Home')

@section('website-main-section')

    <!-- Hero Start -->


    <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-dark">We Bring Your Home To Lively Colors</h1>
                    <p class="fs-4 text-dark mb-4"></p>
                    <div class="pt-2">
                        <a href="#quote_form" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mx-2">Get A Quote</a>
                        <a href="/contact" class="btn btn-outline-secondary rounded-pill py-md-3 px-md-5 mx-2">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row gx-0 mb-3 mb-lg-0">
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-start bg-primary p-5">
                        <h1 class="display-5 mb-4">Welcome To Brush Skill India</h1>
                        <p>We introduce ourselves as a Gypsum & Painting Contractor in Residential &
                            Commercial Projects Since last 25 years.
                            The company Brush Skill India initiated its operation in Mumbai & Thane
                            with various Builders & Developers.
                            Today Brush Skill India is an upcoming contractor of Gypsum & Painting
                            works in housing projects at Mumbai & Thane.</p>
                        <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('site/img/about-1.jpg') }}"
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('site/img/about-2.jpg') }}"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-end bg-primary p-5">
                        <h1 class="display-5 mb-4">Why Choose Us?</h1>
                        <p>We are committed to upholding the highest standards of quality, integrity, and value
                            creation. Our vision encompasses the diligent implementation of best business
                            practices, ensuring that our every commitment reflects excellence and contributes
                            positively to the value we bring to our stakeholders </p>
                        <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Professional Painting Services</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row gy-4 gx-3">
                <div class="col-lg-4 col-md-6 pt-5">
                    <img class="img-fluid w-100" src="{{ asset('site/img/picture1.png') }}" alt="">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">

                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-paint-brush"></i></div>
                        </div>
                        <h3 class="mt-5">Regular Painting</h3>
                        {{-- <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 pt-5">
                    <img class="img-fluid w-100" src="{{ asset('site/img/picture2.png') }}" alt="">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-paint-roller"></i></div>
                        </div>
                        <h3 class="mt-5">Wall Painting</h3>
                        {{-- <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 pt-5">
                    <img class="img-fluid w-100" src="{{ asset('site/img/picture3.png') }}" alt="">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-paint-roller"></i></div>
                        </div>
                        <h3 class="mt-5">Internal Painting</h3>
                        {{-- <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 pt-5">
                    <img class="img-fluid w-100" src="{{ asset('site/img/picture4.png') }}" alt="">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-brush"></i></div>
                        </div>
                        <h3 class="mt-5">External Painting</h3>
                        {{-- <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <img class="img-fluid w-100" src="{{ asset('site/img/picture5.png') }}" alt="">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-eraser"></i></div>
                        </div>
                        <h3 class="mt-5">Graffiti Removal</h3>
                        {{-- <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <img class="img-fluid w-100" src="{{ asset('site/img/picture6.png') }}" alt="">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-spray-can"></i></div>
                        </div>
                        <h3 class="mt-5">Mildew Removal</h3>
                        {{-- <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <img class="img-fluid w-100" src="{{ asset('site/img/picture7.png') }}" alt="">
                    <div
                        class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-city"></i></div>
                        </div>
                        <h3 class="mt-5">Gypsum Works</h3>
                        {{-- <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Quote Start -->
    {{-- <div class="container-fluid bg-primary bg-quote py-5" style="margin: 90px 0"; id="quote_form">
        <div class="container py-5">
            <div class="row g-0 justify-content-start">
                <div class="col-lg-6">
                    <div class="bg-white text-center p-5">
                        <h1 class="mb-4">Get A Quote</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0 py-3" rows="2" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Get A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Quote End -->


    <!-- Team Start -->

    <div class="container-fluid py-5">
        <div class="container py-5 ">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;" id="team_members">
                <h1 class="display-5">Dedicated Directors</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>

            <div class="row g-3 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid w-100" src="{{ asset('site/img/team-1.jpg') }}" alt="">
                        <div class="team-text">
                            <div class="team-social">
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="mt-auto mb-3">
                                <h4 class="mb-1">Mr. Ghayas M. Khan</h4>
                                <span class="text-uppercase">+91-7900055544</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid w-100" src="{{ asset('site/img/team-2.jpg') }}" alt="">
                        <div class="team-text">
                            <div class="team-social">
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="mt-auto mb-3">
                                <h4 class="mb-1">Mr. Ghulam M. Khan</h4>
                                <span class="text-uppercase">+91-9473707786</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Team End -->




    <!-- Blog Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Latest Articles From Painting Blog</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row g-3">
                <div class="col-xl-4 col-lg-6">
                    <div class="blog-item bg-primary">
                        <img class="img-fluid w-100" src="{{ asset('site/img/blog-1.jpg') }}" alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4"
                                style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                <p class="m-0 text-white">Jan 01</p>
                                <small class="text-white">2045</small>
                            </div>
                            <a class="h4 m-0 text-truncate me-4" href="">Dolor clita vero elitr sea stet dolor
                                justo diam</a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-secondary p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="{{ asset('site/img/user.jpg') }}" width="30"
                                    height="30" alt="">
                                <small class="text-uppercase">John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                                <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="blog-item bg-primary">
                        <img class="img-fluid w-100" src="{{ asset('site/img/blog-2.jpg') }}" alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4"
                                style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                <p class="m-0 text-white">Jan 01</p>
                                <small class="text-white">2045</small>
                            </div>
                            <a class="h4 m-0 text-truncate me-4" href="">Dolor clita vero elitr sea stet dolor
                                justo diam</a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-secondary p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="{{ asset('site/img/user.jpg') }}" width="30"
                                    height="30" alt="">
                                <small class="text-uppercase">John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                                <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="blog-item bg-primary">
                        <img class="img-fluid w-100" src="{{ asset('site/img/blog-3.jpg') }}" alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4"
                                style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                <p class="m-0 text-white">Jan 01</p>
                                <small class="text-white">2045</small>
                            </div>
                            <a class="h4 m-0 text-truncate me-4" href="">Dolor clita vero elitr sea stet dolor
                                justo diam</a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-secondary p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="{{ asset('site/img/user.jpg') }}" width="30"
                                    height="30" alt="">
                                <small class="text-uppercase">John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                                <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->
@endsection
