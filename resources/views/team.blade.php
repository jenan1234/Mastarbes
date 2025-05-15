@extends('welcome')
@section('contact')
   <!-- Header Start -->

   <div class="container-fluid bg-breadcrumb">
{{-- <img src="{{asset("whatsam.jpg")}}"class=" class="img-fluid rounded" style="width: 100px; height: 100px;" alt=""> --}}
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Team</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">

            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Team</li>

        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Team Start -->
<div class="container-fluid team py-5">


    <div class="container py-5">
        <div class="logo.jpg
        " data-wow-delay="0.2s" style="max-width: 800px;">
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
                                <h4 class="mb-0">Ahmad al koosh</h4>
                                <p class="mb-0">Coach Ahmad is the head coach of our team and the Jordanian national team at Prince Hamza Club. His expertise drives us towards excellence in swimming.</p>
                            </div>
                            <div>
                                <img src="{{asset("ahmad.jpg")}}"class=" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
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
                                <h4 class="mb-0">yara al atom</h4>
                                <p class="mb-0">Yara is the head coach for the ladies' team, providing professional guidance that helps players improve their skills and boost their confidence in swimming.

                                </p>
                            </div>
                            <div>
                                <img src="{{asset("yara.jpg")}}"class=" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
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
                                <h4 class="mb-0">jenan dweib</h4>
                                <p class="mb-0">Jenan is the newest coach on the team, bringing expertise and professionalism. She focuses on improving swimming techniques and boosting both physical and mental performance, inspiring and motivating all players.</p>
                            </div>
                            <div>
                                <img src="{{asset("jenan.jpg")}}" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
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
