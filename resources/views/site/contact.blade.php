@extends('site.layout.main')

@section('website-page-title', 'Contact')

@section('website-main-section')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-dark">Contact Us</h1>
                    <div class="pt-2">
                        <a href="/" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Home</a>
                        <a href="#contact_form" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">

            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Please Feel Free To Contact Us</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
            </div>

            <div class="row g-3 mb-5">
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="contact-item d-flex flex-column align-items-center justify-content-center text-center pb-5">
                        <div class="contact-icon p-3">
                            <div><i class="fa fa-2x fa-map-marker-alt"></i></div>
                        </div>
                        <h4 class="mt-5"><a class="text-dark"
                                href="https://maps.app.goo.gl/ejpYyzYPHZDwXN1j7">E-309,Crystal Plaza, <br>
                                Opp. Infinity Mall, Link Road,<br> Andheri(W), Mumbai- 400053</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="contact-item d-flex flex-column align-items-center justify-content-center text-center pb-5">
                        <div class="contact-icon p-3">
                            <div><i class="fa fa-2x fa-phone"></i></div>
                        </div>
                        <h4 class="mt-5"><a class="text-dark" href="tel:+917900055544"">+91-7900055544</a><br><a
                                class=" text-dark" href="tel:+919322076046">+91-9322076046</a><br><a class=" text-dark"
                                href="tel:+919473707786">+91-9473707786</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="contact-item d-flex flex-column align-items-center justify-content-center text-center pb-5">
                        <div class="contact-icon p-3">
                            <div><i class="fa fa-2x fa-envelope-open"></i></div>
                        </div>
                        <h4 class="mt-5">brushskillindia@gmail.com <br><br><br></h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12" style="height: 500px;">
                    <div class="h-100">
                        <iframe class="w-100 h-100"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=E-309,Crystal%20Plaza,%20Opp.%20Infinity%20Mall,%20Link%20Road,%20Andheri(W),%20Mumbai-%20400053+(Brush%20Skill%20India)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" id="contact_form">
                <div class="col-12">
                    <div class="bg-primary p-5 mt-5 mb-0">
                        <form action="{{ route('website.sendContact') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" name="name"
                                        placeholder="Your Name" style="height: 55px;" value="{{ old('name') }}">
                                    @error('name')
                                        <info class="text-danger">{{ $message }}</info>
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" name="email"
                                        placeholder="Your Email" style="height: 55px;" value="{{ old('email') }}">
                                    @error('email')
                                        <info class="text-danger">{{ $message }}</info>
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="number" class="form-control bg-light border-0" name="phone"
                                        placeholder="Phone" style="height: 55px;" value="{{ old('phone') }}">
                                    @error('phone')
                                        <info class="text-danger">{{ $message }}</info>
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" name="subject"
                                        placeholder="Subject" style="height: 55px;" value="{{ old('subject') }}">
                                    @error('subject')
                                        <info class="text-danger">{{ $message }}</info>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="5" name="message" placeholder="Message">{{ old('message') }}</textarea>
                                    @error('message')
                                        <info class="text-danger">{{ $message }}</info>
                                    @enderror
                                </div>

                                @if (session('success'))
                                    <div class="col-12">
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    </div>
                                @endif

                                <div class="col-12 text-center">
                                    <button class="btn btn-secondary py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact End -->

@endsection
