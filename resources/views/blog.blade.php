@extends('welcome')

@section('contact')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Blog</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Blog</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Blog</h4>
            <h1 class="display-5 mb-4">Latest Blog & Articles</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-4">

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{ asset('ttt.jpg') }}" class="img-fluid w-100" alt="Image">>
                <div class="blog-item">
                    <div class="blog-img">

                        <a href="#">

                        </a>
                        <div class="blog-category py-2 px-4">Vacation</div>
                        <div class="blog-date"><i class="fas fa-clock me-2"></i>August , 2022</div>

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
                <img src="{{ asset('ui.jpg') }}" class="img-fluid w-100" alt="Image">>
                <div class="blog-item">
                    <div class="blog-img">
                        <a href="#">

                        </a>
                        <div class="blog-category py-2 px-4">Insight</div>
                        <div class="blog-date"><i class="fas fa-clock me-2"></i> 14, 2023</div>
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
                <img src="{{ asset('vv.jpg') }}" class="img-fluid w-100" alt="Image">>
                <div class="blog-item">
                    <div class="blog-img">
                        <a href="#">


                        </a>
                        <div class="blog-category py-2 px-4">Insight</div>
                        <div class="blog-date"><i class="fas fa-clock me-2"></i>19, 2025</div>
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

@endsection
