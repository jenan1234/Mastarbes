@extends('welcome')

@section('contact')




    <div class="header-carousel-item">

        {{-- <div class="carousel-caption">
            {{-- <img src="{{ asset('part.jpg') }}" class="img-fluid w-100" alt="Image">> --}}
            {{-- <div class="container align-items-center py-4">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;"> --}} --
                        {{-- <div class="text-start">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To blue tied</h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">The Biggest Theme & Amusement Park</h1>
                            <p class="mb-4 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...
                            </p> --}}
 {{-- <img src="{{ asset('part.jpg') }}" class="img-fluid w-100" alt="Image">>
                            <div class="d-flex flex-shrink-0">
                                {{-- <img src="{{ asset('part.jpg') }}" class="img-fluid w-100" alt="Image">> --}}
                                {{-- <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Our Packages</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                        <div class="ticket-form p-5">
                            <h2 class="text-dark text-uppercase mb-4">book your ticket</h2>
                            <form>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <input type="text" class="form-control border-0 py-2" id="name" placeholder="Your Name">
                                    </div> --}} --

                                    {{-- <div class="col-12 col-xl-6">
                                        <input type="email" class="form-control border-0 py-2" id="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="phone" class="form-control border-0 py-2" id="phone" placeholder="Phone">
                                    </div>
                                    <div class="col-12">
                                        <select class="form-select border-0 py-2" aria-label="Default select example">
                                            <option selected>Select Packages</option>
                                            <option value="1">Family Packages</option>
                                            <option value="2">Basic Packages</option>
                                            <option value="3">Premium Packages</option>
                                        </select>
                                    </div> --}}
                                    {{-- <div class="col-12">
                                        <input class="form-control border-0 py-2" type="date">
                                    </div>
                                    <div class="col-12">
                                        <input type="number" class="form-control border-0 py-2" id="number" placeholder="Guest"> --}}
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary w-100 py-2 px-5">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <img src="{{asset("whatsam.jpg")}}" class="img-fluid w-100" alt="Image">

        {{-- <div class="carousel-caption">
            <div class="container py-4">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                        <div class="text-start">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To blue tied</h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">The Greatest Water and Amusement Park</h1>
                            <p class="mb-4 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...
                            </p>
                            <div class="d-flex flex-shrink-0">
                                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Our Packages</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                        <div class="ticket-form p-5">
                            <h2 class="text-dark text-uppercase mb-4">book your ticket</h2>
                            <form>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <input type="text" class="form-control border-0 py-2" id="name" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="email" class="form-control border-0 py-2" id="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <input type="phone" class="form-control border-0 py-2" id="phone" placeholder="Phone">
                                    </div>
                                    <div class="col-12">
                                        <select class="form-select border-0 py-2" aria-label="Default select example">
                                            <option selected>Select Packages</option>
                                            <option value="1">Family Packages</option>
                                            <option value="2">Basic Packages</option>
                                            <option value="3">Premium Packages</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <input class="form-control border-0 py-2" type="date">
                                    </div>
                                    <div class="col-12">
                                        <input type="number" class="form-control border-0 py-2" id="number" placeholder="Guest">
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary w-100 py-2 px-5">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Feature Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item">
                    {{-- <img src="" class="img-fluid rounded w-100" alt="Image"> --}}

                    <div class="carousel-caption">
                        <div class="container py-4">
                            <div class="row g-5 align-items-center">
                                <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                    <div class="text-start">
                                        <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To blue tied</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4">The Greatest Water and Amusement Park</h1>
                                        <p class="mb-4 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...</p>
                                        <div class="d-flex flex-shrink-0">
                                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Our Packages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                    <div class="ticket-form p-5">
                                        <h2 class="text-dark text-uppercase mb-4">Book your ticket</h2>
                                        <form>
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <input type="text" class="form-control border-0 py-2" id="name" placeholder="Your Name">
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <input type="email" class="form-control border-0 py-2" id="email" placeholder="Your Email">
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <input type="phone" class="form-control border-0 py-2" id="phone" placeholder="Phone">
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-select border-0 py-2" aria-label="Default select example">
                                                        <option selected>Select Packages</option>
                                                        <option value="1">Family Packages</option>
                                                        <option value="2">Basic Packages</option>
                                                        <option value="3">Premium Packages</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <input class="form-control border-0 py-2" type="date">
                                                </div>
                                                <div class="col-12">
                                                    <input type="number" class="form-control border-0 py-2" id="number" placeholder="Guest">
                                                </div>
                                                <div class="col-12">
                                                    <button type="button" class="btn btn-primary w-100 py-2 px-5">Book Now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Carousel End -->

                    <!-- Feature Start -->
                    <div class="container-fluid feature py-5">
                        <div class="container py-5">
                            <div class="row g-4">
                                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="feature-item">
                                        <div class="feature-content p-4">
                                            <div class="feature-content-inner">
                                                <img src="{{ asset('pool.jpg') }}" class="img-fluid w-100" alt="Image">
                                                <h4 class="text-white">Best Pools</h4>
                                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro soluta voluptatum laborum mollitia blanditiis suscipit...</p>
                                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="feature-item">
                                        <img src="{{ asset('ttt.jpg') }}" class="img-fluid w-100" alt="Image">
                                        <div class="feature-content p-4">
                                            <div class="feature-content-inner">
                                                <h4 class="text-white">Swimming Pools</h4>
                                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro soluta voluptatum laborum mollitia blanditiis suscipit...</p>
                                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="feature-item">
                                        <img src="{{ asset('ccc.jpg') }}" class="img-fluid w-100" alt="Image">
                                        <div class="feature-content p-4">
                                            <div class="feature-content-inner">
                                                <h4 class="text-white">Swimming Courses</h4>
                                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro soluta voluptatum laborum mollitia blanditiis suscipit...</p>
                                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->

                    <div class="feature-content p-4">
<div class="feature-content-inner">
                            <img src="{{ asset('pool.jpg') }}" class="img-fluid w-100" alt="Image">>
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
                    <img src="{{ asset('ttt.jpg') }}" class="img-fluid w-100" alt="Image">>
                    <img src="img/feature-2.jpg" class="img-fluid rounded w-100" alt="Image">
                    <div class="feature-content p-4">
                        <div class="feature-content-inner">
                            <h4 class="text-white">
                                    <h4 class="text-white">Swimming Pools</h4>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro soluta voluptatum laborum mollitia blanditiis suscipit,
                            </p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item">
                    <img src="{{ asset('ccc.jpg') }}" class="img-fluid w-100" alt="Image">>
                    <img src="img/feature-3.jpg" class="img-fluid rounded w-100" alt="Image">
                    <div class="feature-content p-4">
                        <div class="feature-content-inner">
                            <h4 class="text-white">Swimming Courses</h4>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro soluta voluptatum laborum mollitia blanditiis suscipit,
                            </p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                        </div> --}}

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End --> --}}

<!-- About Start -->
<div class="container-fluid about pb-5">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">About blue tied</h4>
                    <h1 class="display-5 mb-4">The Best Theme & Amusement Park For Your Family</h1>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis eligendi illum inventore maiores incidunt vero id. Est ipsam, distinctio veritatis earum inventore ab fugit officiis ut ullam, laudantium facere sapiente?
                    </p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-glass-cheers fa-3x text-primary"></i></div>
                                <div>
                                    <h4>Food & Drinks</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-dot-circle fa-3x text-primary"></i></div>
                                <div>
                                    <h4>Many Attractions</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-hand-holding-usd fa-3x text-primary"></i></div>
                                <div>
                                    <h4>Affordable Price</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-lock fa-3x text-primary"></i></div>
                                <div>
                                    <h4>Safety Lockers</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="position-relative rounded">
                    <img src="{{ asset('whatsam.jpg') }}" class="img-fluid w-100" alt="Image">>
                    <div class="rounded" style="margin-top: 40px;">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="rounded mb-4">
                                    {{-- <img src="ppp" class="img-fluid rounded w-100" alt=""> --}}
                                </div>
                                <div class="row gx-4 gy-0">
                                    <div class="col-6">
                                        <div class="counter-item bg-primary rounded text-center p-4 h-100">
                                            <div class="counter-item-icon mx-auto mb-3">
                                                <i class="fas fa-thumbs-up fa-3x text-white"></i>
                                            </div>
                                            <div class="counter-counting mb-3">
                                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">150</span>
                                                <span class="h1 fw-bold text-white">K +</span>
                                            </div>
                                            <h5 class="text-white mb-0">Happy Visitors</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="counter-item bg-dark rounded text-center p-4 h-100">
                                            <div class="counter-item-icon mx-auto mb-3">
                                                <i class="fas fa-certificate fa-3x text-white"></i>
                                            </div>
                                            <div class="counter-counting mb-3">
                                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">122</span>
                                                <span class="h1 fw-bold text-white"> +</span>
                                            </div>
                                            <h5 class="text-white mb-0">Awwards Winning</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="rounded bg-primary p-4 position-absolute d-flex justify-content-center" style="width: 90%; height: 80px; top: -40px; left: 50%; transform: translateX(-50%);">
                        <h3 class="mb-0 text-white">20 Years Experiance</h3>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-fluid service py-5">
    <div class="container service-section py-5">
        <img src="{{ asset('whatsam.jpg') }}" class="img-fluid w-100" alt="Image">>
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
                    {{-- <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap"><h4 class="mb-0">Holiday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>09:00 AM - 17:00 PM</p></div> --}}
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





<!-- Attractions Start -->
<div class="container-fluid attractions py-5">
    <div class="container attractions-section py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Attractions</h4>
            <h1 class="display-5 text-white mb-4">Explore  blue tied ctetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="owl-carousel attractions-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="attractions-item wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{ asset('jjj.jpg') }}" class="img-fluid w-100" alt="Image">>
                <a href="#" class="attractions-name">Roller Coaster</a>
            </div>
            <div class="attractions-item wow fadeInUp" data-wow-delay="0.4s">
                 <img src="{{ asset('zz.jpg') }}" class="img-fluid w-100" alt="Image">>
                <a href="#" class="attractions-name">Carousel</a>
            </div>
            <div class="attractions-item wow fadeInUp" data-wow-delay="0.6s">

                <img src="{{ asset('ttt.jpg') }}" class="img-fluid w-100" alt="Image">>

                <a href="#" class="attractions-name">Arcade Game</a>
            </div>
            <div class="attractions-item wow fadeInUp" data-wow-delay="0.8s">
                <img src="{{ asset('pool.jpg') }}" class="img-fluid w-100" alt="Image">>

                <a href="#" class="attractions-name">Hanging Carousel</a>
            </div>
            <div class="attractions-item wow fadeInUp" data-wow-delay="1s">
                <img src="{{ asset('ii.jpg') }}" class="img-fluid w-100" alt="Image">>

                <a href="#" class="attractions-name">Carousel</a>
            </div>
        </div>
    </div>
</div>
<!-- Attractions End -->

<!-- Gallery Start -->
<div class="container-fluid gallery pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Gallery</h4>
            <h1 class="display-5 mb-4">Captured Moments In blue tied</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="gallery-item">
                    <img src="{{ asset('ca.jpg') }}" class="img-fluid w-100" alt="Image">>
                    <div class="search-icon">
                        {{-- <a href="img/gallery-1.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-1"><i class="fas fa-search-plus"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="gallery-item">
                    <img src="{{ asset('bu.jpg') }}" class="img-fluid w-100" alt="Image">>
                    <div class="search-icon">
                        {{-- <a href="img/gallery-2.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-2"><i class="fas fa-search-plus"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="gallery-item">
                    <img src="{{ asset('ccc.jpg') }}" class="img-fluid w-100" alt="Image">>
                    <div class="search-icon">
                        {{-- <a href="img/gallery-3.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-3"><i class="fas fa-search-plus"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="gallery-item">
                    <img src="{{ asset('ttt.jpg') }}" class="img-fluid w-100" alt="Image">>
                    <div class="search-icon">
                        {{-- <a href="img/gallery-4.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-4"><i class="fas fa-search-plus"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="gallery-item">
                    <img src="{{ asset('jjj.jpg') }}" class="img-fluid w-100" alt="Image">>
                     <div class="search-icon">
                        {{-- <a href="img/gallery-5.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-5"><i class="fas fa-search-plus"></i></a> --}} --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="gallery-item">
                    <img src="{{ asset('uu.jpg') }}" class="img-fluid w-100" alt="Image">>   <div class="search-icon">
                        {{-- <a href="img/gallery-6.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-6"><i class="fas fa-search-plus"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->


<!-- Blog Start -->
<div class="container-fluid blog pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Blog</h4>
            <h1 class="display-5 mb-4">Latest Blog & Articles</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <a href="#">
                            {{-- <img src="img/blog-2.jpg" class="img-fluid w-100 rounded-top" alt="Image"> --}}
                            <img src="{{ asset('uu.jpg') }}" class="img-fluid w-100" alt="Image">>
                        </a>
                        <div class="blog-category py-2 px-4">Vacation</div>
                        <div class="blog-date"><i class="fas fa-clock me-2"></i>August 19, 2024</div>
                    </div>
                    <div class="blog-content p-4">
                        <a href="#" class="h4 d-inline-block mb-4"></a>
                        <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam aspernatur nam quidem porro sapiente, neque a quibusdam....
                        </p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="blog-item">
                    <div class="blog-img">
                        <a href="#">
                            <img src="{{ asset('ii.jpg') }}" class="img-fluid w-100" alt="Image">>

                        </a>
                        <div class="blog-category py-2 px-4"></div>
                        <div class="blog-date"><i class="fas fa-clock me-2"></i> 22, 2023</div>
                    </div>
                    <div class="blog-content p-4">
                        <a href="#" class="h4 d-inline-block mb-4"></a>
                        <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam aspernatur nam quidem porro sapiente, neque a quibusdam....
                        </p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="blog-item">
                    <div class="blog-img">
                        <a href="#">
                            <img src="{{ asset('vv.jpg') }}" class="img-fluid w-100" alt="Image">>

                        </a>
                        <div class="blog-category py-2 px-4">Insight</div>
                        <div class="blog-date"><i class="fas fa-clock me-2"></i>August 19, 2025</div>
                    </div>
                    <div class="blog-content p-4">
                        <a href="#" class="h4 d-inline-block mb-4"></a>
                        <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam aspernatur nam quidem porro sapiente, neque a quibusdam....
                        </p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


<!-- Team Start -->
<div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Meet Our Team</h4>
            <h1 class="display-5 mb-4">Our blue tied Dedicated Team Member</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item p-4">
                    <div class="team-content">
                        <div class="d-flex justify-content-between border-bottom pb-4">

                            <div class="text-start">
                                <h4 class="mb-0">Ahmad akoosh</h4>
                                <p class="mb-0">Coach Ahmad is the head coach of our team and the Jordanian national team at Prince Hamza Club. His expertise drives us towards excellence in swimmingn</p>
                            </div>
                            <div>
                                <img src="{{ asset('ahmad.jpg') }}" class="img-fluid w-100" alt="Image">>
                            </div>

                        </div>
                        <div class="team-icon rounded-pill my-4 p-3">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <p class="text-center mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam eveniet itaque provident sequi deserunt.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item p-4">
                    <div class="team-content">

                        <div class="d-flex justify-content-between border-bottom pb-4">
                            <div class="text-start">
                                <h4 class="mb-0">yara altoom</h4>
                                <p class="mb-0">Yara is the head coach for the ladies' team, offering expert guidance to help players enhance their swimming skills and confidence.</p>
                            </div>
                            <div>
                               <img src="{{ asset('yara.jpg') }}" class="img-fluid w-100" alt="Image">>
                            </div>
                        </div>
                        <div class="team-icon rounded-pill my-4 p-3">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <p class="text-center mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam eveniet itaque provident sequi deserunt.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item p-4">
                    <div class="team-content">

                        <div class="d-flex justify-content-between border-bottom pb-4">
                            <div class="text-start">
                                <h4 class="mb-0">Jenan al dweib</h4>
                                <p class="mb-0">Jenan is the newest coach on the team, bringing expertise and professionalism. She focuses on improving swimming techniques and boosting both physical and mental performance, inspiring and motivating all players</p>
                            </div>
                            <div>
                                <img src="{{ asset('jenan.jpg') }}" class="img-fluid w-100" alt="Image">>
                            </div>
                        </div>
                        <div class="team-icon rounded-pill my-4 p-3">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <p class="text-center mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam eveniet itaque provident sequi deserunt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">

        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">

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
                        {{-- <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image"> --}}

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

@endsection
