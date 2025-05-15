@extends('welcome')

@section('contact')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">About</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5">
            {{-- <img src="{{ asset('whatsam.jpg') }}" class="img-fluid w-100" alt="Image">> --}}
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
                    <div class="rounded" style="margin-top: 40px;">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="rounded mb-4">
                                    <img src="{{ asset('whatsam.jpg') }}" class="img-fluid w-100" alt="Image">>
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

<!-- Feature Start -->
<div class="container-fluid feature pb-5">
    <div class="container pb-5">
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item">
                    <img src="{{ asset('ttt.jpg') }}" class="img-fluid w-100" alt="Image">>
                    <div class="feature-content p-4">
                        <div class="feature-content-inner">
                            <h4 class="text-white">Best Pools</h4>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro soluta voluptatum laborum mollitia blanditiis suscipit,
                            </p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                        </div>
                        {{-- <img src="{{ asset('uu.jpg') }}" class="img-fluid w-100" alt="Image">> --}}
              </div> --}}

                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item">
                    <img src="{{ asset('pool.jpg') }}" class="img-fluid w-100" alt="Image">>

                    <div class="feature-content p-4">
                        <div class="feature-content-inner">
                            <h4 class="text-white">Swimming Pools</h4>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro soluta voluptatum laborum mollitia blanditiis suscipit,
                            </p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                        </div>
                        {{-- <img src="{{ asset('hhh.jpg') }}" class="img-fluid w-100" alt="Image">> --}}
                    </div>

                </div>
            {{-- </div>l-lg-4 wow fadeInUp" data-wow-delay="0.6s"> --}}

               <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item">
                    <img src="{{ asset('ca.jpg') }}" class="img-fluid w-100" alt="Image">>
                    <div class="feature-content p-4">
                                   <div class="feature-content-inner">
                            {{-- <div class="feature-content-inner"> --}}
                            <h4 class="text-white">Swimming Courses</h4>
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis porro soluta voluptatum laborum mollitia blanditiis suscipit,
                            </p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

<!-- Gallery Start -->
{{-- <div class="container-fluid gallery pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Gallery</h4>
            <h1 class="display-5 mb-4">Captured Moments In Waterland</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="gallery-item">
                    <img src="img/gallery-1.jpg" class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-1.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-1"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="gallery-item">
                    <img src="img/gallery-2.jpg" class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-2.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-2"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="gallery-item">
                    <img src="img/gallery-3.jpg" class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-3.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-3"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="gallery-item">
                    <img src="img/gallery-4.jpg" class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-4.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-4"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="gallery-item">
                    <img src="img/gallery-5.jpg" class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-5.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-5"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="gallery-item">
                    <img src="img/gallery-6.jpg" class="img-fluid rounded w-100 h-100" alt="">
                    <div class="search-icon">
                        <a href="img/gallery-6.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-6"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
{{-- </div> --}}
<!-- Gallery End -->

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

@endsection

