@extends('welcome')

@section('contact')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Testimonials</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Testimonial</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5" style="margin-top: 100px;">
    <div class="container py-5">
        <img src="{{ asset('whatsam.jpg') }}" class="img-fluid w-100" alt="Image">>
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Testimonials</h4>
            <h1 class="display-5 text-white mb-4">Our Clients Riviews</h1>
            <p class="text-white mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            <div class="testimonial-item p-4">
                <img src="{{ asset('whatsam.jpg') }}" class="img-fluid w-100" alt="Image">>
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
@endsection
