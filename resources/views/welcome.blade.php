<!DOCTYPE html>
<html lang="en">

  @include('include.top')

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->


        <div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0">
        @include('include.nav')
    
        </div>
        <!-- Navbar & Hero End -->

   @yield('contact')
        <!-- Footer Start -->

        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
         @include('include.footer')
        </div>
        <!-- Footer End -->




        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
  @include('include.bottom')
    </body>

</html>
