<nav class="navbar navbar-expand-lg navbar-light">

    <a href="" class="navbar-brand p-0">
        <img src="{{ asset('logo.jpg') }}" class="img-fluid w-100" alt="Image">>
        {{-- <h1 class="display-6 text-dark"><i class="fas fa-swimmer text-primary me-3"></i>blue tied</h1> --}}

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="/about" class="nav-item nav-link">About</a>
            <a href="/service" class="nav-item nav-link">Service</a>
            <a href="/blog" class="nav-item nav-link">Blog</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="/feature" class="dropdown-item">Our Feature</a>
                    <a href="/gallery" class="dropdown-item">Our Gallery</a>
                    <a href="/attraction" class="dropdown-item">Attractions</a>
                    <a href="/package" class="dropdown-item">Ticket Packages</a>
                    <a href="/team" class="dropdown-item">Our Team</a>
                    <a href="/testimonial" class="dropdown-item">Testimonial</a>
                    <a href="/404" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="/contact" class="nav-item nav-link">Contact</a>
        </div>
        <div class="team-icon d-none d-xl-flex justify-content-center me-3">
            <a class="btn btn-square btn-light rounded-circle mx-1" href="https://www.facebook.com/share/1A9a9eo5ei/"><i class="fab fa-facebook-f"></i></a>

            <a class="btn btn-square btn-light rounded-circle mx-1" href="https://www.instagram.com/nadi.phc/"><i class="fab fa-instagram"></i></a>
            
        </div>
        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0">Get Started</a>
    </div>
</nav>
