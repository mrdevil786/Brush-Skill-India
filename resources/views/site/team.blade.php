@extends('site.layout.main')

@section('website-page-title','team')

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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

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
                    <h1 class="display-1 text-dark">The Team</h1>
                    <div class="pt-2">
                        <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Home</a>
                        <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">The Team</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Dedicated Team Members</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid w-100" src={{("site/img/team-1.jpg")}} alt="">
                        <div class="team-text">
                            <div class="team-social">
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="mt-auto mb-3">
                                <h4 class="mb-1">Full Name</h4>
                                <span class="text-uppercase">Designation</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid w-100" src={{("site/img/team-2.jpg")}} alt="">
                        <div class="team-text">
                            <div class="team-social">
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="mt-auto mb-3">
                                <h4 class="mb-1">Full Name</h4>
                                <span class="text-uppercase">Designation</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid w-100" src={{("site/img/team-3.jpg")}} alt="">
                        <div class="team-text">
                            <div class="team-social">
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="mt-auto mb-3">
                                <h4 class="mb-1">Full Name</h4>
                                <span class="text-uppercase">Designation</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid w-100" src={{("site/img/team-2.jpg")}} alt="">
                        <div class="team-text">
                            <div class="team-social">
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="mt-auto mb-3">
                                <h4 class="mb-1">Full Name</h4>
                                <span class="text-uppercase">Designation</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid w-100" src={{("site/img/team-3.jpg")}} alt="">
                        <div class="team-text">
                            <div class="team-social">
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="mt-auto mb-3">
                                <h4 class="mb-1">Full Name</h4>
                                <span class="text-uppercase">Designation</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid w-100" src={{("site/img/team-1.jpg")}} alt="">
                        <div class="team-text">
                            <div class="team-social">
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="mt-auto mb-3">
                                <h4 class="mb-1">Full Name</h4>
                                <span class="text-uppercase">Designation</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid w-100" src={{("site/img/team-3.jpg")}} alt="">
                        <div class="team-text">
                            <div class="team-social">
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="mt-auto mb-3">
                                <h4 class="mb-1">Full Name</h4>
                                <span class="text-uppercase">Designation</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid w-100" src={{("site/img/team-1.jpg")}} alt="">
                        <div class="team-text">
                            <div class="team-social">
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="mt-auto mb-3">
                                <h4 class="mb-1">Full Name</h4>
                                <span class="text-uppercase">Designation</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid w-100" src={{("site/img/team-2.jpg")}} alt="">
                        <div class="team-text">
                            <div class="team-social">
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="mt-auto mb-3">
                                <h4 class="mb-1">Full Name</h4>
                                <span class="text-uppercase">Designation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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