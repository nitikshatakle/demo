@extends('layout.main')
@section('main')


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">
                            Experience Excellence With Our Certified, Award-Winning Care.</h1>
                        <p class="text-white mb-0">At Phonenix Hospital, we're committed to delivering accessible, specialized healthcare for everyone. Our mission is to offer a range of high-quality medical services, ensuring excellence and compassion in every treatment. From advanced procedures to personalized care, trust us to support you on your journey to wellness.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Make Appointment</h1>
                        <form action="appointment" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select name="Service" class="form-select bg-light border-0" style="height: 55px;" id="serviceInput" name="service" value="" readonly>
                                        <option selected>Select A Service</option>
                                        <option value="1">Mother-Baby-Unit</option>
                                        <option value="2">Patient Care</option>
                                        <option value="3">ICU</option>
                                        <option value="3">Oxygen Beds</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select name="Doctor" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select Doctor</option>
                                        <option value="1">Dr. John Doe</option>
                                        <option value="2">Dr. John Smith</option>
                                        <option value="3">Dr. Emily Johnson</option>
                                        <option value="3">Dr. Michael Brown</option>
                                        <option value="3">Dr.  Sarah Davis</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="Name" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="Email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" name="Date"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="text" name="Time"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Time"  style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


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
