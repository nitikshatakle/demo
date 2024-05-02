@extends('layout.main')
@section('main')


    <!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/sud.png" alt="">
                            <p class="fs-5">Went to Phoenix for booster dose of Covid vaccination and was pleasantly surprised with the courtesy and efficiency at all levels.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Sudershan Singh Gusain</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/prajkta.png" alt="">
                            <p class="fs-5">Really nice staff, quick service. All doctors are helpful.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Prajakta</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    

    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    

  
    @endsection