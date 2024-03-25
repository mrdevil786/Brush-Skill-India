@extends('site.layout.main')

@section('website-page-title','service')

@section('website-main-section')


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-dark">Our Services</h1>
                    <div class="pt-2">
                        <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Home</a>
                        <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Testimonial Start -->
 <div class="container-fluid  py-5" style="margin: 180px 0;">
    <div class="container py-5">
        <div class="row g-0 justify-content-end">
            <div class="col-lg-12">
               
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h1 class="display-5">Projects Completed</h1>
                    <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
                </div>
                    <table class="table table-bordered text-white" style="border: 2px solid black; background-color: #8CC641;">
                    <thead>
                        <tr>
                            <th scope="col">Sr. No.</th>
                            <th scope="col">Name of Company</th>
                            <th scope="col">Location</th>
                            <th scope="col">Type of Works</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>RNA Builder (NG)</td>
                            <td>Marol Project, Andheri East</td>
                            <td>Gypsum Work</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>RNA Builder (NG)</td>
                            <td>NG Suncity, Kandivali East<br>Phase I – 12 Bldg.<br>Phase II – 3 Bldg.<br>Phase III – 13 Bldg.</td>
                            <td>Gypsum Work<br>Gypsum & Painting works<br>Gypsum & Painting works</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>RNA Builder (NG)</td>
                            <td>NG Royal Park – Kanjurmarg East<br>8 Bldg.</td>
                            <td>Gypsum & Painting works</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>RNA Builder (NG)</td>
                            <td>NG Park, Dahisar East<br>3 Bldg.</td>
                            <td>Gypsum & Painting works</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>RNA Builder (NG)</td>
                            <td>NG Regency, Thane West<br>8 Bldg.</td>
                            <td>Gypsum & Painting works</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>RNA Builder (NG)</td>
                            <td>RNA Classic, Kandivali West<br>1 Bldg.</td>
                            <td>Gypsum & Painting works</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>RNA Builder (NG)</td>
                            <td>Mira Road<br>NG Palm<br>NG Galaxy<br>NG Vedant<br>NG Vikas<br>NG Estate<br>NG Heritage<br>NG View<br>NG Paradise</td>
                            <td>Gypsum & Painting works</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Sunil Mantry Reality Ltd.</td>
                            <td>Mantry Park, Goregaon East<br>8 Bldg.</td>
                            <td>Gypsum & Painting works</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Ravi Developments</td>
                            <td>Gaurav Aster<br>Gaurav Woods<br>Gaurav Excellency</td>
                            <td>Gypsum & Painting works</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Rashmi Housing Pvt. Ltd.</td>
                            <td>Rashmi Residency, Vasai<br>Rashmi Classic - Vasai<br>Rashmi Dhruvita Park - Vasai<br>Rashmi Lake View- Vasai<br>Rashmi Hetal 1.2.3 Mira Road<br>Rashmi Drashtant - Mira Road, Thane</td>
                            <td>Gypsum & Painting works</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Kalpatru Builder</td>
                            <td>Hariom Nagar- Thane West<br>6 Bldg.</td>
                            <td>Gypsum & Painting works</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Seth Brothers</td>
                            <td>Vasant Garden, Goregaon, West<br>Golden willow<br>SilverBurch<br>SilverBell<br>Vasant Garden<br>Vasant Utsav, KandivaliEast</td>
                            <td>Gypsum & Painting works</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Professional Painting Services</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>
            <div class="row gy-4 gx-3">
                <div class="col-lg-4 col-md-6 pt-5">
                    <img class="img-fluid w-100" src="{{asset('site/img/picture1.png')}}" alt="">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-paint-brush"></i></div>
                        </div>
                        <h3 class="mt-5">Regular Painting</h3>
                        {{-- <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 pt-5">
                    <img class="img-fluid w-100" src="{{asset('site/img/picture2.png')}}" alt="">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-paint-roller"></i></div>
                        </div>
                        <h3 class="mt-5">Wall Painting</h3>
                        {{-- <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <img class="img-fluid w-100" src="{{asset('site/img/picture3.png')}}" alt="">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-brush"></i></div>
                        </div>
                        <h3 class="mt-5">Floor Coating</h3>
                        {{-- <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <img class="img-fluid w-100" src="{{asset('site/img/picture4.png')}}" alt="">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-eraser"></i></div>
                        </div>
                        <h3 class="mt-5">Graffiti Removal</h3>
                        {{-- <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <img class="img-fluid w-100" src="{{asset('site/img/picture5.png')}}" alt="">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i class="fa fa-2x fa-spray-can"></i></div>
                        </div>
                        <h3 class="mt-5">Mildew Removal</h3>
                        {{-- <a class="btn shadow-none text-secondary" href="">View Detail<i class="bi bi-arrow-right ms-1"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <img class="img-fluid w-100" src="{{asset('site/img/picture6.png')}}" alt="">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
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





     {{-- <!-- About Start --> 
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row gx-0">
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('site/img/about-2.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 my-lg-5 py-lg-5">
                    <div class="about-end bg-primary p-5">
                        <h1 class="display-5 mb-4">Why Choose Us?</h1>
                        <p>Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum et, tempor sit sit diam amet et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor magna dolore erat amet </p>
                        <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End --> --}}


 <!-- Testimonial Start -->
 <div class="container-fluid  py-5" style="margin: 180px 0;">
    <div class="container py-5">
        <div class="row g-0 justify-content-end">
            <div class="col-lg-12">
               
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h1 class="display-5">Work In Progress</h1>
                    <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
                </div>
                <table class="table table-bordered text-white" style="border: 2px solid black; background-color: #8CC641;">
                    <thead>
                        <tr>
                            <th scope="col">Sr. No.</th>
                            <th scope="col">Name of Company</th>
                            <th scope="col">Location</th>
                            <th scope="col">Type of Works</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ravi Developments</td>
                            <td>Gaurav Excellency & Samruddhi Phase-II, Mira Road East</td>
                            <td>Gypsum & Painting works</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Rashmi Hsg. Pvt. Ltd.</td>
                            <td>Pink City, Naigaon East</td>
                            <td>Gypsum works</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Rashmi Hsg. Pvt. Ltd.</td>
                            <td>Rashmi Heights - Vasai East</td>
                            <td>Gypsum & Painting works</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Sheth Development Pvt. Ltd.</td>
                            <td>Vasant Lawns – Thane West<br>Bldg. No.8 Sheth Cnergy – Thane West</td>
                            <td>Painting works<br>Gypsum works</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Punit Group</td>
                            <td>Kalptaru Elegante Akruli Road No.3, Opp. Pioneer School, Kandivali- E, Mumbai</td>
                            <td>Gypsum works</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Shapoorji Pallonji & Company</td>
                            <td>EWS Buildings, Jui Nagar, Navi Mumbai</td>
                            <td>Painting Works</td>
                        </tr>
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection