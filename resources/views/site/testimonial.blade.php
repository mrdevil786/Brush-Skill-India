@extends('site.layout.main')

@section('website-page-title', 'Testimonial')

@section('website-main-section')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PAINTER - Painting Company Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
            <div class="container py-5">
                <div class="row justify-content-start">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 class="display-1 text-dark">Testimonial</h1>
                        <div class="pt-2">
                            <a href="/" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Home</a>
                            <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Testimonial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Testimonial Start -->
        <div class="container-fluid bg-primary bg-testimonial py-5" style="margin: 180px 0;">
            <div class="container py-5">
                <div class="row g-0 justify-content-end">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-4">Testimonials</h1>
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item">
                                <p class="fs-4 fw-normal text-dark"><i class="fa fa-quote-left text-secondary me-3"></i>I
                                    found Brush Skill India
                                    really helpful, and I had a great experience with them.The outcome is excellent, and the
                                    price was
                                    extremely fair. I would heartily urge everyone to check out Brush Skill India.</p>
                                <div class="d-flex align-items-center">
                                    <!-- <img class="img-fluid p-1 bg-secondary" src="{{ asset('site/img/testimonial-1.jpg') }}" alt=""> -->
                                    <div class="ps-0">
                                        <h3>Rakesh Sankpal</h3>
                                        <span class="text-uppercase"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <p class="fs-4 fw-normal text-dark"><i class="fa fa-quote-left text-secondary me-3"></i>The
                                    work that Brush Skill India
                                    completed at our home is to our satisfaction.Everyday, they arrived early and the work
                                    appears really
                                    well. They completed the task efficiently and according to schedule.</p>
                                <div class="d-flex align-items-center">
                                    <!-- <img class="img-fluid p-1 bg-secondary" src="{{ asset('site/img/testimonial-2.jpg') }}" alt=""> -->
                                    <div class="ps-0">
                                        <h3>Harsh Agarwal</h3>
                                        <span class="text-uppercase"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded-circle back-to-top"><i
                class="bi bi-arrow-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

    </html>
@endsection
