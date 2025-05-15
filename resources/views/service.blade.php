@extends('welcome')

@section('contact')
  <!-- Header Start -->
  <div class="container-fluid bg-breadcrumb">

    <div class="container text-center py-5" style="max-width: 900px;">

        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
       
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Service</li>
            <img src="{{ asset('whatsam.jpg') }}" class="img-fluid w-100" alt="Image">>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Service Start -->
<div class="container-fluid service py-5" style="margin-top: 100px;">
    <div class="container service-section py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Service</h4>
            <h1 class="display-5 text-white mb-4">Explore blue tied service</h1>
            <p class="mb-0 text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>
            <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-days p-4">
                    <div class="py-2 border-bottom border-top d-flex align-items-center justify-content-between flex-wrap"><h4 class="mb-0 pb-2 pb-sm-0">in summer</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>4:00 AM - 8:00 PM</p></div>
                    <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap"><h4 class="mb-0 pb-2 pb-sm-0">in winter</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>6:00 AM - 7:00 PM</p></div>
                </div>
            </div>
            <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item p-4">
                    <div class="service-content">
                        <div class="mb-4">
                            <i class="fas fa-home fa-4x"></i>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Private Gazebo</a>
                        <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet vel beatae numquam.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item p-4">
                    <div class="service-content">
                        <div class="mb-4">
                            <i class="fas fa-utensils fa-4x"></i>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Delicious Food</a>
                        <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet vel beatae numquam.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item p-4">
                    <div class="service-content">
                        <div class="mb-4">
                            <i class="fas fa-door-closed fa-4x"></i>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Safety Lockers</a>
                        <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet vel beatae numquam.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="service-item p-4">
                    <div class="service-content">
                        <div class="mb-4">
                            <i class="fas fa-swimming-pool fa-4x"></i>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">River Rides</a>
                        <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet vel beatae numquam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Feature Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item">
                    <img src="{{ asset('kk.jpg') }}" class="img-fluid w-100" alt="Image">>
                    <div class="feature-content p-4">
                        <div class="feature-content-inner">
                            <h4 class="text-white">Best Pools</h4>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro soluta voluptatum laborum mollitia blanditiis suscipit,
                            </p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item">
                    <img src="{{ asset('bu.jpg') }}" class="img-fluid w-100" alt="Image">>
                    <div class="feature-content p-4">


                        <div class="feature-content-inner">
                            <h4 class="text-white">Swimming Pools<</h4>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro soluta voluptatum laborum mollitia blanditiis suscipit,
                            </p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            {{-- <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item">
                    <img src="{{ asset('hht.jpg') }}" class="img-fluid w-100" alt="Image">>
                    <div class="feature-content p-4">
                        <div class="feature-content p-4">
                        <div class="feature-content-inner">
                            <h4 class="text-white">Swimming Courses</h4>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro soluta voluptatum laborum mollitia blanditiis suscipit,
                            </p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
            <div class="feature-item">
                <img src="{{ asset('hht.jpg') }}" class="img-fluid w-100" alt="Image">
                <div class="feature-content p-4">
                    <div class="feature-content-inner">
                        <h4 class="text-white">Swimming Courses</h4>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro soluta voluptatum laborum mollitia blanditiis suscipit,</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>


<!-- Feature End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <img src="{{ asset('whatsam.jpg') }}" class="img-fluid w-100" alt="Image">>

            <h4 class="text-primary">Testimonials</h4>
            <h1 class="display-5 text-white mb-4">Our Clients Riviews</h1>
            <p class="text-white mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            <div class="testimonial-item p-4">
                <p class="text-white fs-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos mollitia fugiat, nihil autem reprehenderit aperiam maxime minima consequatur, nam iste eius velit perferendis voluptatem at atque neque soluta reiciendis doloremque.
                </p>
                <div class="testimonial-inner">
                    <div class="testimonial-img">
                        <img src="{{ asset('whatsam.jpg') }}" class="img-fluid w-100" alt="Image">>
                        <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="ms-4">
                        <h4>Person Name</h4>
                        <p class="text-start text-white">Profession</p>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item p-4">
                <p class="text-white fs-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos mollitia fugiat, nihil autem reprehenderit aperiam maxime minima consequatur, nam iste eius velit perferendis voluptatem at atque neque soluta reiciendis doloremque.
                </p>
                <div class="testimonial-inner">
                    <div class="testimonial-img">
                        <img src="{{ asset('whatsam.jpg') }}" class="img-fluid w-100" alt="Image">>
                        <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="ms-4">
                        <h4>Person Name</h4>
                        <p class="text-start text-white">Profession</p>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item p-4">
                <p class="text-white fs-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos mollitia fugiat, nihil autem reprehenderit aperiam maxime minima consequatur, nam iste eius velit perferendis voluptatem at atque neque soluta reiciendis doloremque.
                </p>
                <div class="testimonial-inner">
                    <div class="testimonial-img">
                        <img src="{{ asset('whatsam.jpg') }}" class="img-fluid w-100" alt="Image">>
                        <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="ms-4">
                        <h4>Person Name</h4>
                        <p class="text-start text-white">Profession</p>
                        <div class="d-flex text-primary">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Footer Start -->
{{-- <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item">
                    <a href="index.html" class="p-0">
                        <h4 class="text-white mb-4"><i class="fas fa-swimmer text-primary me-3"></i>WaterLand</h4>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <p class="mb-2">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt text-primary me-3"></i>
                        <p class="text-white mb-0">123 Street New York.USA</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope text-primary me-3"></i>
                        <p class="text-white mb-0">info@example.com</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-phone-alt text-primary me-3"></i>
                        <p class="text-white mb-0">(+012) 3456 7890</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Feature</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Attractions</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Support</h4>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Opening Hours</h4>
                    <div class="opening-date mb-3 pb-3">
                        <div class="opening-clock flex-shrink-0">
                            <h6 class="text-white mb-0 me-auto">Monday - Friday:</h6>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> 11:00 AM - 16:00 PM</p>
                        </div>
                        <div class="opening-clock flex-shrink-0">
                            <h6 class="text-white mb-0 me-auto">Satur - Sunday:</h6>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> 09:00 AM - 17:00 PM</p>
                        </div>
                        <div class="opening-clock flex-shrink-0">
                            <h6 class="text-white mb-0 me-auto">Holiday:</h6>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> 09:00 AM - 17:00 PM</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-white mb-2">Payment Accepted</p>
                        <img src="img/payment.png" class="img-fluid" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
{{-- </div> --}}
@endsection
