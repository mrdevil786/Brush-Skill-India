@extends('site.layout.main')

@section('website-page-title', 'About')

@section('website-main-section')


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-dark">About Us</h1>

                    <div class="col-lg-10 text-center text-lg-start">
                        <div class="pt-4">
                            <p>Welcome to Brush Skill India, a distinguished Gypsum and Painting Contractor
                                specializing in Residential and Commercial Projects with a rich legacy
                                spanning 25 years. Our journey commenced in Mumbai and Thane, where we began
                                collaborating with various Builders and Developers.
                                Over the years, Brush Skill India has evolved into a prominent contractor,
                                excelling in Gypsum and Painting works for housing projects in the vibrant
                                cities of Mumbai and Thane. Our commitment to quality and dedication to
                                excellence has positioned us as a trusted partner in the construction industry.
                            </p>
                        </div>
                        <div class="pt-4">
                            <a href="/" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Home</a>
                            <a href="/contact" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Contact us</a>
                        </div>
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
                            positively to the value we bring to our stakeholders. </p>
                        <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Quote Start -->
    {{-- <div class="container-fluid bg-primary bg-quote py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row g-0 justify-content-start">
                <div class="col-lg-6">
                    <div class="bg-white text-center p-5">
                        <h1 class="mb-4">Get A Quote</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
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
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
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


    <!-- Profile Start -->
    <div class="container-fluid bg-primary bg-quote py-5" style="margin-bottom: 90px 0;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-dark">Mission</h1>
                    <p>We strive to foster a culture of professionalism and teamwork, aiming for service
                        excellence in all our endeavours. Through the cultivation of a collaborative and
                        dynamic work environment, we are dedicated to delivering unparalleled services that
                        embody the principles of excellence.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile End -->

@endsection
