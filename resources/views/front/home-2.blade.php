@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/home.css">
<title>Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
<link rel="stylesheet" href="/assets/front/css/card-anime.css">

<link rel="stylesheet" href="/assets/front/css/home.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<script async src="//www.instagram.com/embed.js"></script>
<style>
.hero-section .slide:nth-child(1) .slide__inner {
    background-image: url(/assets/front/imgs/banners/6.webp) !important;
}

.hero-section .slide:nth-child(2) .slide__inner {
    background-image: url(/assets/front/imgs/banners/7.webp) !important;
}

.hero-section .slide:nth-child(3) .slide__inner {
    background-image: url(/assets/front/imgs/banners/8.webp) !important;
}

.hero-section .slide:nth-child(4) .slide__inner {
    background-image: url(/assets/front/imgs/banners/6.webp) !important;
}

@media only screen and (max-width:768px) {
    .hero-section .slide:nth-child(1) .slide__inner {
        background-image: url(/assets/front/imgs/banners/6-mb.webp) !important;
    }

    .hero-section .slide:nth-child(2) .slide__inner {
        background-image: url(/assets/front/imgs/banners/7-mb.webp) !important;
    }

    .hero-section .slide:nth-child(3) .slide__inner {
        background-image: url(/assets/front/imgs/banners/8-mb.webp) !important;
    }

    .hero-section .slide:nth-child(4) .slide__inner {
        background-image: url(/assets/front/imgs/banners/6-mb.webp) !important;
    }
}
</style>

@endsection
@section('body')
{{-- 
<section class="hero-section">
    <div class="slider">
        <div class="slider__slides">
            <div class="slide s--active">
                <div class="slide__inner">
                    <div class="slide__content">

                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide__inner">
                    <div class="slide__content">

                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide__inner">
                    <div class="slide__content">

                    </div>
                </div>
            </div>
            <div class="slide s--prev">
                <div class="slide__inner">
                    <div class="slide__content">

                    </div>
                </div>
            </div>
        </div>
        <!-- slides end -->
        <div class="slider__control">
            <div class="slider__control-line"></div>
            <div class="slider__control-line"></div>
        </div>
        <div class="slider__control slider__control--right m--right">
            <div class="slider__control-line"></div>
            <div class="slider__control-line"></div>
        </div>
    </div>
</section>
--}}

<section class="first-hero-section">
    <picture>
        <source media="(max-width: 767px)" srcset="/assets/front/imgs/banners/6-mb.webp">
        <source media="(min-width: 768px)" srcset="/assets/front/imgs/banners/6.webp">
        <img src="/assets/front/imgs/banners/6.webp" alt="Banner" width="100%">
    </picture>
    <picture>
        <source media="(max-width: 767px)" srcset="/assets/front/imgs/banners/7-mb.webp">
        <source media="(min-width: 768px)" srcset="/assets/front/imgs/banners/7.webp">
        <img src="/assets/front/imgs/banners/7.webp" alt="Banner" width="100%">
    </picture>
    <picture>
        <source media="(max-width: 767px)" srcset="/assets/front/imgs/banners/8-mb.webp">
        <source media="(min-width: 768px)" srcset="/assets/front/imgs/banners/8.webp">
        <img src="/assets/front/imgs/banners/8.webp" alt="Banner" width="100%">
    </picture>
</section>

{{-- 
<div class="dvwave-section">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180" preserveAspectRatio="none"
        style="display:block;width:100%;height:120px;">
        <path fill="#08617e"
            d="M0,192L60,176C120,160,240,128,360,106.7C480,85,600,75,720,90.7C840,107,960,149,1080,154.7C1200,160,1320,128,1380,112L1440,96L1440,0L0,0Z">
        </path>
    </svg>
</div>
--}}

<section class="info-cta-section bg-yellow">
    <div class="container bg-blue">
        <div class="d-flex justify-content-start">
            <div class="left-clm">
                <div class="dicon">+</div>
                <div class="number">20</div>
                <div class="text">Year of Experience</div>
            </div>
            <div class="right-clm">
                <p class="title">Stronger <span>Footprints</span></p>
                <p class="desc">Working Towards The Betterment, Everyday.</p>
                <div class="d-flex inner-row mt-3">
                    <div class="inner-clm">
                        <p class="inner-number">20</p>
                        <p class="inner-desc">Working Towards The Betterment, Everyday.</p>
                    </div>
                    <div class="inner-clm">
                        <p class="inner-number">50+</p>
                        <p class="inner-desc">Working Towards The Betterment, Everyday.</p>
                    </div>
                    <div class="inner-clm">
                        <p class="inner-number">5000K+</p>
                        <p class="inner-desc">Working Towards The Betterment, Everyday.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services
Retinal Surgery & Injection
Lid Surgery
Orbital Surgery
Eye Tumors
Treatment of Watering Eyes
Ocular Emergencies
Neuro-Ophthalmology
Artificial & Prosthetic eyes
Thyroid Eye Disease 
-->

<section class="our-services bg-yellow pb-5">
    <div class="container">
        <h2 class="text-end">Our Services</h2>
        <div class="row slider">
            <div class="col-12 col-md-4 service-card">
                <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                <h3>Lid Surgery</h3>
                <p class="mb-3">Retinal surgery is a serious eye condition.</p>
                <p class="highlight">Neuro-Ophthalmology</p>
                <p class="highlight">Lid Surgery</p>
                <p class="highlight">Orbital Surgery</p>
                <p class="highlight">Eye Tumors</p>
                <p class="highlight">Thyroid Eye Disease </p>
                <p class="highlight"><a href="#">Read More</a></p>
                <img src="/assets/front/imgs/1/4.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
            <div class="col-12 col-md-4 service-card">
                <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                <h3>Orbital Surgery</h3>
                <p class="mb-3">Retinal surgery is a serious eye condition.</p>
                <p class="highlight">Neuro-Ophthalmology</p>
                <p class="highlight">Lid Surgery</p>
                <p class="highlight">Orbital Surgery</p>
                <p class="highlight">Eye Tumors</p>
                <p class="highlight">Thyroid Eye Disease </p>
                <p class="highlight"><a href="#">Read More</a></p>
                <img src="/assets/front/imgs/1/5.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
            <div class="col-12 col-md-4 service-card">
                <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                <h3>Eye Tumors</h3>
                <p class="mb-3">Retinal surgery is a serious eye condition.</p>
                <p class="highlight">Neuro-Ophthalmology</p>
                <p class="highlight">Lid Surgery</p>
                <p class="highlight">Orbital Surgery</p>
                <p class="highlight">Eye Tumors</p>
                <p class="highlight">Thyroid Eye Disease </p>
                <p class="highlight"><a href="#">Read More</a></p>
                <img src="/assets/front/imgs/1/6.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
            <div class="col-12 col-md-4 service-card">
                <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                <h3>Retinal Surgery & Injection</h3>
                <p class="mb-3">Retinal surgery is a serious eye condition.</p>
                <p class="highlight">Neuro-Ophthalmology</p>
                <p class="highlight">Lid Surgery</p>
                <p class="highlight">Orbital Surgery</p>
                <p class="highlight">Eye Tumors</p>
                <p class="highlight">Thyroid Eye Disease </p>
                <p class="highlight"><a href="#">Read More</a></p>
                <img src="/assets/front/imgs/1/3.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
            <div class="col-12 col-md-4 service-card">
                <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                <h3>Treatment of Watering Eyes</h3>
                <p class="mb-3">Retinal surgery is a serious eye condition.</p>
                <p class="highlight">Neuro-Ophthalmology</p>
                <p class="highlight">Lid Surgery</p>
                <p class="highlight">Orbital Surgery</p>
                <p class="highlight">Eye Tumors</p>
                <p class="highlight">Thyroid Eye Disease </p>
                <p class="highlight"><a href="#">Read More</a></p>
                <img src="/assets/front/imgs/1/7.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
            <div class="col-12 col-md-4 service-card">
                <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                <h3>Ocular Emergencies</h3>
                <p class="mb-3">Retinal surgery is a serious eye condition.</p>
                <p class="highlight">Neuro-Ophthalmology</p>
                <p class="highlight">Lid Surgery</p>
                <p class="highlight">Orbital Surgery</p>
                <p class="highlight">Eye Tumors</p>
                <p class="highlight">Thyroid Eye Disease </p>
                <p class="highlight"><a href="#">Read More</a></p>
                <img src="/assets/front/imgs/1/8.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
            <div class="col-12 col-md-4 service-card">
                <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                <h3>Neuro-Ophthalmology</h3>
                <p class="mb-3">Retinal surgery is a serious eye condition.</p>
                <p class="highlight">Neuro-Ophthalmology</p>
                <p class="highlight">Lid Surgery</p>
                <p class="highlight">Orbital Surgery</p>
                <p class="highlight">Eye Tumors</p>
                <p class="highlight">Thyroid Eye Disease </p>
                <p class="highlight"><a href="#">Read More</a></p>
                <img src="/assets/front/imgs/1/9.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
        </div>
    </div>

</section>

<section class="eye-about bg-yellow">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- Left -->
            <div class="col-lg-6">

                <!-- <span class="eye-bg-title">WHO WE ARE?</span> -->

                <h2 class="fw-bold mb-4">
                    Vision & Mission
                </h2>

                <p class="mb-4">
                    At Shubanu Eye Hospital - The Best Eye Hospital owns a fleet of modern equipment’s right from
                    diagnostics to state of the art operation theater. We have built a reputation of providing technical
                    excellence and cutting edge technology which enables our Doctors to perform complex surgeries with
                    increased precision, control and safety resulting in faster recovery and comfort for our patients.
                    We take pride in using the best technology available
                    for all our patients
                </p>

                <h4 class="mb-4">Our Specialized Services:</h4>

                <div class="row">
                    <div class="col-sm-6">
                        <ul class="eye-list">
                            <li>High Standard of Ophthalmology</li>
                            <li>Committed Ophthalmology Team</li>
                            <li>Modern Ophthalmology Equipment</li>
                        </ul>
                    </div>

                    <div class="col-sm-6">
                        <ul class="eye-list">
                            <li>Cutting Edge Technology</li>
                            <li>Expert Doctors</li>
                            <li>Quality Eye Care</li>
                        </ul>
                    </div>
                </div>

                <a href="#" class="eye-btn mt-3">
                    Read More
                </a>

            </div>

            <!-- Right -->
            <div class="col-lg-6">

                <div class="eye-img">

                    <img src="/assets/front/imgs/right-side-man.webp" class="img-fluid" alt="Doctor">

                    <div class="eye-exp">
                        <h2>12+</h2>
                        <p>Years of Experience in This Field</p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<section class="doctor-section bg-yellow py-5">
    <div class="container">
        <div class="mb-5">
            <!-- <span class="small-title">
                <i class="fa-solid fa-binoculars"></i> Specialized Doctors
            </span> -->
            <h2 class="section-title">Dedicated doctors, committed to your care </h2>
        </div>
        <div class="doctor-slider">

            <div>
                <div class="doctor-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5">
                            <div class="doctor-image">
                                <img src="/assets/front/imgs/doctors/dr-bhanu-pratap-singh-pangtey.png"
                                    class="img-fluid" width="100%">
                                <div class="doctor-info">
                                    <img src="/assets/front/imgs/doctors/dr-bhanu-pratap-singh-pangtey.png"
                                        alt="Dr. Bhanu Pratap Singh">
                                    <div>
                                        <h5>Dr. Bhanu Pratap Singh</h5>
                                        <p>Vitreoretinal Surgeon</p>
                                    </div>
                                    <a href="#" class="profile-btn"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="doctor-content">
                                <h3>About Dr. Bhanu Pratap Singh Pangtey:</h3>
                                <p>Experienced in treating complex heart
                                    conditions with a compassionate,
                                    patient-first care approach.
                                </p>
                                <div class="row g-3 mt-3">
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Specialty</strong>
                                                <span>Cardiologist</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Experience</strong>
                                                <span>12+ Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Hospital</strong>
                                                <span>City Heart Clinic</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Availability</strong>
                                                <span>Mon - Fri</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="appointment-btn">
                                    Book Appointment
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="doctor-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5">
                            <div class="doctor-image">
                                <img src="/assets/front/imgs/doctors/dr.-shubha-raguram-pangtey.png" class="img-fluid"
                                    width="100%">
                                <div class="doctor-info">
                                    <img src="/assets/front/imgs/doctors/dr.-shubha-raguram-pangtey.png"
                                        alt="Dr. Shubha Raguram Pangtey">
                                    <div>
                                        <h5>Dr. Shubha Raguram</h5>
                                        <p>Vitreoretinal Surgeon</p>
                                    </div>
                                    <a href="#" class="profile-btn"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="doctor-content">
                                <h3>About Dr. Shubha Raguram Pangtey:</h3>
                                <p>Experienced in treating complex heart
                                    conditions with a compassionate,
                                    patient-first care approach.
                                </p>
                                <div class="row g-3 mt-3">
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Specialty</strong>
                                                <span>Cardiologist</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Experience</strong>
                                                <span>12+ Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Hospital</strong>
                                                <span>City Heart Clinic</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Availability</strong>
                                                <span>Mon - Fri</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="appointment-btn">
                                    Book Appointment
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

</section>

<section class="dvc-doctors-section bg-yellow py-5">
    <div class="container">

        <div class="dvc-section-header">

            <div class="">
                <span class="small-title">
                    <i class="fa-solid fa-binoculars"></i> Doctor's
                </span>
                <h2 class="section-title">Meet Our Experienced Doctor </h2>
            </div>

            <a href="#" class="dvc-see-all-btn">
                See All Doctors
                <span>→</span>
            </a>
        </div>

        <div class="row g-4">

            <!-- Doctors Area -->
            <div class="col-lg-8">
                <div class="row g-4">

                    <!-- Doctor 1 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="dvc-doctor-card">
                            <div class="dvc-doctor-image">
                                <img src="/assets/front/imgs/doctors/1.jpg" alt="Dr. Norman Collins">
                            </div>

                            <h3>Dr. Norman Collins</h3>
                            <p>Dental Surgeon</p>

                            <a href="#" class="dvc-appointment-btn">
                                Get Appointment
                            </a>
                        </div>
                    </div>

                    <!-- Doctor 2 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="dvc-doctor-card">
                            <div class="dvc-doctor-image">
                                <img src="/assets/front/imgs/doctors/2.jpg" alt="Dr. Steven Lee">
                            </div>

                            <h3>Dr. Steven Lee</h3>
                            <p>Cardiology</p>

                            <a href="#" class="dvc-appointment-btn">
                                Get Appointment
                            </a>
                        </div>
                    </div>

                    <!-- Doctor 3 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="dvc-doctor-card">
                            <div class="dvc-doctor-image">
                                <img src="/assets/front/imgs/doctors/3.jpg" alt="Dr. David Kim">
                            </div>

                            <h3>Dr. David Kim</h3>
                            <p>Dental Surgeon</p>

                            <a href="#" class="dvc-appointment-btn">
                                Get Appointment
                            </a>
                        </div>
                    </div>

                    <!-- Doctor 4 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="dvc-doctor-card">
                            <div class="dvc-doctor-image">
                                <img src="/assets/front/imgs/doctors/3.jpg" alt="Dr. Sarah Lee">
                            </div>

                            <h3>Dr. Sarah Lee</h3>
                            <p>Dermatologist</p>

                            <a href="#" class="dvc-appointment-btn">
                                Get Appointment
                            </a>
                        </div>
                    </div>

                    <!-- Doctor 5 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="dvc-doctor-card">
                            <div class="dvc-doctor-image">
                                <img src="/assets/front/imgs/doctors/1.jpg" alt="Dr. Natalie Foster">
                            </div>

                            <h3>Dr. Natalie Foster</h3>
                            <p>Gynecologist</p>

                            <a href="#" class="dvc-appointment-btn">
                                Get Appointment
                            </a>
                        </div>
                    </div>

                    <!-- Doctor 6 -->
                    <div class="col-md-4 col-sm-6">
                        <div class="dvc-doctor-card">
                            <div class="dvc-doctor-image">
                                <img src="/assets/front/imgs/doctors/2.jpg" alt="Dr. Johan Smith">
                            </div>

                            <h3>Dr. Johan Smith</h3>
                            <p>Orthopedic</p>

                            <a href="#" class="dvc-appointment-btn">
                                Get Appointment
                            </a>
                        </div>
                    </div>

                </div>
            </div>


            <!-- Appointment Form -->
            <div class="col-lg-4">
                <div class="dvc-appointment-box">

                    <div class="dvc-appointment-heading">
                        Book An Appointment
                    </div>

                    <form>

                        <!-- Doctor -->
                        <div class="dvc-form-group">
                            <label for="dvc-doctor">
                                Choose Doctor
                                <span>*</span>
                            </label>

                            <select id="dvc-doctor" class="dvc-form-control">
                                <option value="">Select a Doctor</option>
                                <option>Dr. Norman Collins</option>
                                <option>Dr. Steven Lee</option>
                                <option>Dr. David Kim</option>
                                <option>Dr. Sarah Lee</option>
                                <option>Dr. Natalie Foster</option>
                                <option>Dr. Johan Smith</option>
                            </select>
                        </div>

                        <!-- Name -->
                        <div class="dvc-form-group">
                            <label for="dvc-name">
                                Your Name
                                <span>*</span>
                            </label>

                            <input type="text" id="dvc-name" class="dvc-form-control" placeholder="">
                        </div>

                        <!-- Phone -->
                        <div class="dvc-form-group">
                            <label for="dvc-phone">
                                Phone Number
                                <span>*</span>
                            </label>

                            <input type="tel" id="dvc-phone" class="dvc-form-control" placeholder="">
                        </div>

                        <!-- Date -->
                        <div class="dvc-form-group">
                            <label for="dvc-date">
                                Select Date
                            </label>

                            <input type="date" id="dvc-date" class="dvc-form-control">
                        </div>

                        <!-- Time -->
                        <div class="dvc-form-group">
                            <label for="dvc-time">
                                Select Time
                                <span>*</span>
                            </label>

                            <input type="time" id="dvc-time" class="dvc-form-control">
                        </div>

                        <button type="submit" class="dvc-book-btn">
                            Book Appointment Now
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="eqshow-section bg-yellow py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="eqshow-title">Our Advanced Equipment</h2>
                <p class="eqshow-desc m-auto">We use the latest ophthalmology technology to provide
                    accurate diagnosis and advanced treatment for every patient.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="eqshow-nav">
                    <button class="eqshow-item active" data-index="0">
                        <img src="/assets/front/imgs/equipment/1.webp" alt="">
                        <span>OCT</span>
                    </button>
                    <button class="eqshow-item" data-index="1">
                        <img src="/assets/front/imgs/equipment/2.webp" alt="">
                        <span>Fundus</span>
                    </button>
                    <button class="eqshow-item" data-index="2">
                        <img src="/assets/front/imgs/equipment/3.webp" alt="">
                        <span>Laser</span>
                    </button>
                    <button class="eqshow-item" data-index="3">
                        <img src="/assets/front/imgs/equipment/4.webp" alt="">
                        <span>Retina</span>
                    </button>
                    <button class="eqshow-item" data-index="4">
                        <img src="/assets/front/imgs/equipment/5.webp" alt="">
                        <span>Slit Lamp</span>
                    </button>
                    <button class="eqshow-item" data-index="5">
                        <img src="/assets/front/imgs/equipment/1.webp" alt="">
                        <span>Phaco</span>
                    </button>
                    <button class="eqshow-item" data-index="6">
                        <img src="/assets/front/imgs/equipment/2.webp" alt="">
                        <span>Topography</span>
                    </button>
                    <button class="eqshow-item" data-index="7">
                        <img src="/assets/front/imgs/equipment/3.webp" alt="">
                        <span>YAG Laser</span>
                    </button>
                    <button class="eqshow-item" data-index="8">
                        <img src="/assets/front/imgs/equipment/4.webp" alt="">
                        <span>Microscope</span>
                    </button>
                </div>

            </div>

        </div>
        <div class="row align-items-center mt-2 gy-5">
            <div class="col-lg-6">
                <div class="eqshow-image-area">
                    <span class="eqshow-glow"></span>
                    <img id="eqshowMainImage" src="/assets/front/imgs/equipment/1.webp" class="img-fluid"
                        alt="Equipment">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="eqshow-content">
                    <h3 id="eqshowTitle">Topcon OCT Maestro</h3>
                    <p id="eqshowDescription">
                        At Shubhanu we are equipped with the latest technology equipment – The OMS-90 Operation
                        Microscope is the new standard in versatile microsurgery. It features a water-repellent coated
                        objective lens, new coaxial illumination, a PD adjustment knob, and a five-step magnification.
                    </p>
                    <div class="eqshow-features">
                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            New coaxial illumination
                        </div>
                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            New coaxial illumination
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Stain-proof coated objective lens
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Parallel binocular tube
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            PD adjustment knob
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Built-in yellow filter
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Focal length of 200mm
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Compact base ensures optimal use of limited operating room floor space
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Wide assortment of optional accessories
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Shown with optional XY translator
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>

</section>

<section class="our-services our-instagram-section bg-yellow pb-5">
    <div class="container">
        <h2 class="text-end">Instagram</h2>
        <div class="row our-instagram-slider">
            <div class="service-card">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/Da4olhqJ734/"
                    data-instgrm-version="14">
                </blockquote>
            </div>
            <div class="service-card">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/Da4olhqJ734/"
                    data-instgrm-version="14">
                </blockquote>
            </div>
            <div class="service-card">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/Da4olhqJ734/"
                    data-instgrm-version="14">
                </blockquote>
            </div>
            <div class="service-card">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/Da4olhqJ734/"
                    data-instgrm-version="14">
                </blockquote>
            </div>
            <div class="service-card">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/Da4olhqJ734/"
                    data-instgrm-version="14">
                </blockquote>
            </div>
        </div>
    </div>

</section>

{{-- 
    
<section class="shbadv-section py-5">
    <div class="container position-relative">
        <h2 class="shbadv-bg-text">Advantages</h2>
        <div class="text-center mb-5 position-relative">
            <h2 class="shbadv-title">The Heart and Science <span>of Ophthalmology</span></h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6">
                <div class="shbadv-card">

                    <div class="shbadv-icon">
                        <i class="fa-regular fa-handshake"></i>
                    </div>

                    <h4>Covid Ready</h4>

                    <p>
                        Every patient deserves safe, reliable care. We maintain strict hygiene standards, follow
                        advanced safety protocols, and provide a clean, comfortable environment for every visit. with
                        trusted experts.
                    </p>

                    <ul class="list-unstyled shbadv-list">
                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            COVID Vaccinated Staff
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Sanitized Treatment Rooms
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Advanced Safety Protocols
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Contactless Patient Registration
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Regular Surface Disinfection
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Safe Patient Environment
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Temperature Screening Daily
                        </li>

                    </ul>

                    <div class="group-bts d-flex align-items-center">
                        <div class="shb-video-btn me-3" data-bs-toggle="modal" data-bs-target="#videoModal"
                            data-video="https://www.youtube.com/embed/NSoIVaaDN0s?autoplay=1">
                            <i class="fa-brands fa-youtube"></i>
                            Watch Video
                        </div>
                        <a href="#" class="shbadv-read">
                            Read More <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="shbadv-card">

                    <div class="shbadv-icon">
                        <i class="fa-regular fa-file-lines"></i>
                    </div>

                    <h4>Outpatient Procedures</h4>

                    <p>
                        Our outpatient services provide comprehensive eye examinations, advanced diagnostic testing,
                        personalized consultations, and efficient treatment planning for accurate diagnosis and
                        exceptional patient care.
                    </p>

                    <ul class="list-unstyled shbadv-list">
                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Comprehensive Eye Examination
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Vision Acuity Testing
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Accurate Refraction Assessment
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Slit Lamp Examination
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Digital Retina Evaluation
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Eye Pressure Testing
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Personalized Treatment Planning
                        </li>

                    </ul>

                    <div class="group-bts d-flex align-items-center">
                        <div class="shb-video-btn me-3" data-bs-toggle="modal" data-bs-target="#videoModal"
                            data-video="https://www.youtube.com/embed/2I33akej3G4?autoplay=1">
                            <i class="fa-brands fa-youtube"></i>
                            Watch Video
                        </div>
                        <a href="#" class="shbadv-read">
                            Read More <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="shbadv-card">

                    <div class="shbadv-icon"><i class="fa-regular fa-map"></i></div>
                    <h4>Interstate Travelers</h4>
                    <p>
                        We provide seamless eye care for interstate travelers with expert consultations, advanced
                        treatments, minimal waiting time, and personalized support for a comfortable healthcare
                        experience.
                    </p>

                    <ul class="list-unstyled shbadv-list">
                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Priority Appointments
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Expert Eye Specialists
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Minimal Waiting Time
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Advanced Diagnostic Technology
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Personalized Patient Assistance
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Comfortable Travel Support
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            World Class Facilities
                        </li>

                    </ul>

                    <div class="group-bts d-flex align-items-center">
                        <div class="shb-video-btn me-3" data-bs-toggle="modal" data-bs-target="#videoModal"
                            data-video="https://www.youtube.com/embed/2I33akej3G4?autoplay=1">
                            <i class="fa-brands fa-youtube"></i>
                            Watch Video
                        </div>
                        <a href="#" class="shbadv-read">
                            Read More <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<div class="modal fade" id="videoModal" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered modal-xl">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Watch Video
                </h5>

                <button class="btn-close" data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body p-0">

                <div class="ratio ratio-16x9">

                    <iframe id="ytVideo" src="" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>

                </div>

            </div>

        </div>

    </div>

</div>

<section class="eyecta-sec">

    <div class="eyecta-box">

        <div class="eyecta-badge">
            <i class="fa-regular fa-eye"></i> Trusted Eye Care Since Years
        </div>

        <h2 class="eyecta-title">
            More than <span>15,000</span> Surgeries
            <br>
            <strong><i>Between 2 Expert Surgeons</i></strong>
        </h2>

        <!-- <p class="eyecta-desc">
            Restoring vision with advanced technology, experienced surgeons,
            and compassionate care. Your eyesight deserves nothing but the best.
        </p> -->

        <div class="eyecta-btns">
            <a href="#appointment" class="eyecta-btn eyecta-btn-primary">
                <i class="fa-regular fa-calendar-days"></i> Book Appointment
            </a>

            <a href="tel:+919068991180" class="eyecta-btn eyecta-btn-outline">
                <i class="fa-solid fa-phone"></i> Call Now
            </a>
        </div>

    </div>

</section>

<section class="esec-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="esec-subtitle">Our Experts</span>
                <h2 class="esec-title">Service Experts <span>Eye Special</span>.</h2>
                <div class="esec-title-line"></div>
                <p class="esec-description mt-3">At Optrica we value our patients' overall health and encourage
                    our patients to visit their primary care doctor annually.</p>
            </div>
        </div>
        <div class="row align-items-center mt-5 g-0 esec-main-wrapper">
            <div class="col-lg-6 position-relative">
                <div class="esec-vertical-text">
                    <span>Get The Right Optometrist Care Book With Our Doctors.</span>
                </div>
                <div class="esec-image-box">
                    <img src="/assets/front/imgs/doctors/dr-bhanu-pratap-singh-pangtey.png" class="img-fluid w-100"
                        alt="Eye Specialist">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="esec-content-card">
                    <h3 class="esec-card-title">Dr. Bhanu Pratap Singh Pangtey</h3>
                    <table>
                        <tr>
                            <td><i class="fas fa-check"></i> Specialty:</td>
                            <td>Vitreoretinal Surgeon</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-check"></i> Areas of Expertise:</td>
                            <td>Vitreoretina, Retinopathy of Prematurity, Uvea related disorder</td>
                        </tr>
                        <tr>
                            <td> <i class="fas fa-check"></i>Certifications:</td>
                            <td>Vitreo retinal society - India , European Vitreoretinal Society, All India Ophthalmogy
                                Society.</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-check"></i> Years of Practice:</td>
                            <td>15 Years</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-check"></i> Medical Education:</td>
                            <td>MS (OPHTHAL), FVRS, FICO</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-check"></i> Working Time:</td>
                            <td>Mon-Fri 09:00 - 18:00</td>
                        </tr>
                    </table>
                    <a href="#" class="btn esec-btn">
                        Book Appointment
                    </a>

                </div>

            </div>

        </div>
        <div class="row align-items-center mt-5 g-0 esec-main-wrapper esec-main-wrapper-2">
            <div class="col-lg-6">
                <div class="esec-content-card esec-content-card-2">
                    <h3 class="esec-card-title">Dr. Shubha Raguram Pangtey</h3>
                    <table>
                        <tr>
                            <td>Specialty:</td>
                            <td>Ophthalmologist</td>
                        </tr>
                        <tr>
                            <td>Areas of Expertise:</td>
                            <td>Orbit, Oculoplastic and ocular Oncology and cataracts</td>
                        </tr>
                        <tr>
                            <td>Certifications:</td>
                            <td>All India Ophthalmologist Society, Oculoplasty Society Of India, Tamil Nadu Society Of
                                Ophthalmologist, Uttarakhand Ophthalmological Society</td>
                        </tr>
                        <tr>
                            <td>Years of Practice:</td>
                            <td>15Years</td>
                        </tr>
                        <tr>
                            <td>Medical Education:</td>
                            <td>MBBS , MS ophthalmology<br>
                                Fellow orbit Oculoplasty and ocular oncology</td>
                        </tr>
                        <tr>
                            <td>Working Time:</td>
                            <td>Mon-Fri 09:00 – 18:00</td>
                        </tr>
                    </table>
                    <a href="#" class="btn esec-btn">
                        Book Appointment
                    </a>

                </div>

            </div>
            <div class="col-lg-6 position-relative">
                <div class="esec-vertical-text">
                    <span>Get The Right Optometrist Care Book With Our Doctors.</span>
                </div>
                <div class="esec-image-box">
                    <img src="/assets/front/imgs/doctors/dr.-shubha-raguram-pangtey.png" class="img-fluid w-100"
                        alt="Eye Specialist">
                </div>
            </div>

        </div>

    </div>
</section>
--}}


<section class="eyecta-sec">

    <div class="eyecta-box">

        <div class="eyecta-badge">
            <i class="fa-regular fa-eye"></i> Trusted Eye Care Since Years
        </div>

        <h2 class="eyecta-title">
            More than <span>15,000</span> Surgeries
            <br>
            <strong><i>Between 2 Expert Surgeons</i></strong>
        </h2>

        <!-- <p class="eyecta-desc">
            Restoring vision with advanced technology, experienced surgeons,
            and compassionate care. Your eyesight deserves nothing but the best.
        </p> -->

        <div class="eyecta-btns">
            <a href="#appointment" class="eyecta-btn eyecta-btn-primary">
                <i class="fa-regular fa-calendar-days"></i> Book Appointment
            </a>

            <a href="tel:+919068991180" class="eyecta-btn eyecta-btn-outline">
                <i class="fa-solid fa-phone"></i> Call Now
            </a>
        </div>

    </div>

</section>

<section class="tsw-section py-5">

    <div class="container">
        <div class="tsw-heading text-center">
            <span class="tsw-subtitle">TESTIMONIALS</span>
            <h2 class="tsw-title">What Our Patients Say<h2>
                    <p class="tsw-description">Hear from Patients Who Chose Us for Their Eye Care</p>

        </div>
        <div class="swiper tsw-slider">
            <div class="swiper-wrapper">

                <!-- Card 1 -->
                <div class="swiper-slide">
                    <div class="tsw-card">
                        <div class="tsw-quote">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <p class="tsw-review">
                            "Most reliable Hospital in Haldwani. Doctors and staff are very cordial and take care of the
                            patients very well. I went for a seasonal allergy and the treatment suggested by doctor
                            worked very well. I would like to thank Mr. Bharat who is very friendly and very helpful."
                        </p>
                        <div class="tsw-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="tsw-user">
                            <div class="tsw-user-image">
                                <img src="/assets/front/imgs/male.png" alt="">
                            </div>
                            <div class="tsw-user-info">
                                <h5>- Narender Rautela</h5>
                                <span>Customer</span>
                            </div>
                        </div>
                        <div class="tsw-line"></div>
                        <span class="tsw-badge">Cataract Surgery</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="swiper-slide">
                    <div class="tsw-card">
                        <div class="tsw-quote">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <p class="tsw-review">"Dr. Bhanu Pangtey is one of the most renowned retina surgeon in the whole
                            of Kumaon And Dr.
                            Shubha Pangtey is one of the most renowned Oculoplasty surgeon in the whole of Kumaon."</p>
                        <div class="tsw-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="tsw-user">
                            <div class="tsw-user-image">
                                <img src="/assets/front/imgs/female.png" alt="">
                            </div>
                            <div class="tsw-user-info">
                                <h5>- Manju Arya</h5>
                                <span>Customer</span>
                            </div>
                        </div>
                        <div class="tsw-line"></div>
                        <span class="tsw-badge">Glaucoma Treatment</span>
                    </div>

                </div>

                <!-- Card 3 -->

                <div class="swiper-slide">
                    <div class="tsw-card">
                        <div class="tsw-quote">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <p class="tsw-review">"optometrist sanjeev gangwar is best employ in shubhanu eye hospital he
                            guide me that what
                            is best care of eye he suddgest me lensses quality and treatment"</p>
                        <div class="tsw-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>

                        <div class="tsw-user">
                            <div class="tsw-user-image">
                                <img src="/assets/front/imgs/male.png" alt="">
                            </div>
                            <div class="tsw-user-info">
                                <h5>- Pradhuman Gangwar</h5>
                                <span>Customer</span>

                            </div>
                        </div>
                        <div class="tsw-line"></div>
                        <span class="tsw-badge">
                            Cataract Surgery
                        </span>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="swiper-slide">
                    <div class="tsw-card">
                        <div class="tsw-quote">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <p class="tsw-review">
                            "Most reliable Hospital in Haldwani. Doctors and staff are very cordial and take care of the
                            patients very well. I went for a seasonal allergy and the treatment suggested by doctor
                            worked very well. I would like to thank Mr. Bharat who is very friendly and very helpful."
                        </p>
                        <div class="tsw-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="tsw-user">
                            <div class="tsw-user-image">
                                <img src="/assets/front/imgs/male.png" alt="">
                            </div>
                            <div class="tsw-user-info">
                                <h5>- Narender Rautela</h5>
                                <span>Customer</span>
                            </div>
                        </div>
                        <div class="tsw-line"></div>
                        <span class="tsw-badge">Cataract Surgery</span>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="swiper-slide">
                    <div class="tsw-card">
                        <div class="tsw-quote">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <p class="tsw-review">"Dr. Bhanu Pangtey is one of the most renowned retina surgeon in the whole
                            of Kumaon And Dr.
                            Shubha Pangtey is one of the most renowned Oculoplasty surgeon in the whole of Kumaon."</p>
                        <div class="tsw-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="tsw-user">
                            <div class="tsw-user-image">
                                <img src="/assets/front/imgs/female.png" alt="">
                            </div>
                            <div class="tsw-user-info">
                                <h5>- Manju Arya</h5>
                                <span>Customer</span>
                            </div>
                        </div>
                        <div class="tsw-line"></div>
                        <span class="tsw-badge">Glaucoma Treatment</span>
                    </div>

                </div>

            </div>

        </div>

        <!-- Navigation -->

        <div class="tsw-navigation">

            <div class="tsw-prev">
                <i class="fa-solid fa-chevron-left"></i>
            </div>

            <div class="tsw-play">
                <i class="fa-solid fa-pause"></i>
            </div>

            <div class="tsw-next">
                <i class="fa-solid fa-chevron-right"></i>
            </div>

        </div>

    </div>

</section>

<section class="zbg-blog-section py-5">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center mb-5">
                <span class="zbg-blog-subtitle text-uppercase">Recent Posts</span>

                <h2 class="zbg-blog-title">From Our <span>Blog</span></h2>

                <div class="zbg-blog-divider"></div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-lg-6">
                <div class="zbg-blog-item">

                    <div class="zbg-blog-thumb">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1588776814546-daab30f310ce?w=800" alt="">
                        </a>
                    </div>

                    <div class="zbg-blog-content">

                        <h3 class="zbg-blog-post-title">
                            <a href="#">
                                Should You Be Worried About Microplastics in Your Food?
                            </a>
                        </h3>

                        <div class="zbg-blog-meta">
                            <span>John Doe</span>
                            <span class="zbg-blog-dot">•</span>
                            <span>10 Jan, 2019</span>
                        </div>

                        <p>
                            Plastic — it's in the air, sea and probably your body.
                            Find out what microplastics are doing to your health,
                            Find out what microplastics are doing to your health
                        </p>

                    </div>

                </div>
            </div>

            <!-- Blog Item -->
            <div class="col-lg-6">
                <div class="zbg-blog-item">

                    <div class="zbg-blog-thumb">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800" alt="">
                        </a>
                    </div>

                    <div class="zbg-blog-content">

                        <h3 class="zbg-blog-post-title">
                            <a href="#">
                                What to Expect During and After a Breast Biopsy
                            </a>
                        </h3>

                        <div class="zbg-blog-meta">
                            <span>William Petro</span>
                            <span class="zbg-blog-dot">•</span>
                            <span>03 Feb, 2019</span>
                        </div>

                        <p>
                            We interview Dr Lim Siew Kuan to understand what to
                            expect before, during and after a breast biopsy,
                            expect before, during and after a breast biopsy.
                        </p>

                    </div>

                </div>
            </div>

            <!-- Blog Item -->
            <div class="col-lg-6">
                <div class="zbg-blog-item">

                    <div class="zbg-blog-thumb">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?w=800" alt="">
                        </a>
                    </div>

                    <div class="zbg-blog-content">

                        <h3 class="zbg-blog-post-title">
                            <a href="#">
                                How Heart Attack Signs Differ in Men & Women
                            </a>
                        </h3>

                        <div class="zbg-blog-meta">
                            <span>Sultan Sentu</span>
                            <span class="zbg-blog-dot">•</span>
                            <span>05 Mar, 2019</span>
                        </div>

                        <p>
                            Is there gender equality in heart attacks?
                            Here's what you need to know about the warning signs,
                            expect before, during and after a breast biopsy,
                        </p>

                    </div>

                </div>
            </div>

            <!-- Blog Item -->
            <div class="col-lg-6">
                <div class="zbg-blog-item">

                    <div class="zbg-blog-thumb">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1512678080530-7760d81faba6?w=800" alt="">
                        </a>
                    </div>

                    <div class="zbg-blog-content">

                        <h3 class="zbg-blog-post-title">
                            <a href="#">
                                Prenatal Infections and How to Avoid Them
                            </a>
                        </h3>

                        <div class="zbg-blog-meta">
                            <span>Marry Com</span>
                            <span class="zbg-blog-dot">•</span>
                            <span>29 Jun, 2019</span>
                        </div>

                        <p>
                            Prenatal infections can interfere with the health of
                            both you and your baby, so it's important to take
                            steps to prevent them,expect before, during and after a breast biopsy,
                        </p>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>


<section class="shbapp-section">
    <div class="layercolor">
        <div class="container">
            <div class="row align-items-end mt-5">
                <!-- Left -->
                <div class="col-lg-6">
                    <h2 class="shbapp-title"> We Are Always Ready To Help You. Book An Appointment</h2>
                    <form class="shbapp-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control shbapp-control" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control shbapp-control" placeholder="Email">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control shbapp-control" placeholder="Phone">
                            </div>
                            <div class="col-md-6">
                                <select class="form-select shbapp-control">
                                    <option selected>Department</option>
                                    <option>Cataract</option>
                                    <option>Retina</option>
                                    <option>LASIK</option>
                                    <option>Glaucoma</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <select class="form-select shbapp-control">
                                    <option selected>Doctor</option>
                                    <option>Dr. Shubhanu</option>
                                    <option>Dr. Rakesh</option>
                                    <option>Dr. Pooja</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="datetime-local" class="form-control shbapp-control">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control shbapp-control shbapp-textarea"
                                    placeholder="Write Your Message Here......"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="d-lg-flex align-items-center">
                                    <button type="submit" class="btn shbapp-btn">Book An Appointment <i
                                            class="fa-solid fa-arrow-right-long"></i></button>
                                    <span class="shbapp-note">( We will be confirm by an SMS )</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="shbapp-image">
                        <img src="/assets/front/imgs/bottom-doctor.png" class="img-fluid" alt="Doctors">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
const videoModal = document.getElementById('videoModal');
const iframe = document.getElementById('ytVideo');

videoModal.addEventListener('show.bs.modal', function(event) {

    const button = event.relatedTarget;
    const video = button.getAttribute('data-video');

    iframe.src = video;

});

videoModal.addEventListener('hidden.bs.modal', function() {

    iframe.src = "";

});
</script>

<script>
(function() {

    const slides = document.querySelectorAll(".slide");
    const controls = document.querySelectorAll(".slider__control");

    const totalSlides = slides.length;
    const slidingAT = 1300;
    let slidingBlocked = false;
    let current = 1;

    // Initialize
    slides.forEach((slide, index) => {
        slide.classList.add(`slide-${index + 1}`);
        slide.dataset.slide = index + 1;
    });

    controls.forEach(control => {
        control.addEventListener("click", function() {

            if (slidingBlocked) return;

            slidingBlocked = true;

            const isRight = this.classList.contains("m--right");

            const currentSlide = document.querySelector(".slide.s--active");

            if (!currentSlide) {
                slidingBlocked = false;
                return;
            }

            current = parseInt(currentSlide.dataset.slide);

            let next = isRight ? current + 1 : current - 1;

            if (next > totalSlides) next = 1;
            if (next < 1) next = totalSlides;

            const nextSlide = document.querySelector(`.slide-${next}`);

            // Remove old classes
            slides.forEach(slide => {
                slide.classList.remove("s--active", "s--active-prev", "s--prev");
            });

            // Previous slide
            let prev = next - 1;
            if (prev < 1) prev = totalSlides;

            document
                .querySelector(`.slide-${prev}`)
                .classList.add("s--prev");

            // Active slide
            nextSlide.classList.add("s--active");

            if (!isRight) {
                nextSlide.classList.add("s--active-prev");
            }

            this.classList.add("a--rotation");

            setTimeout(() => {
                this.classList.remove("a--rotation");
                slidingBlocked = false;
            }, slidingAT);

        });
    });

})();
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const testimonialSwiper = new Swiper(".tsw-slider", {
        loop: true,
        speed: 800,
        spaceBetween: 30,
        centeredSlides: true,
        grabCursor: true,
        watchOverflow: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },

        navigation: {
            nextEl: ".tsw-next",
            prevEl: ".tsw-prev",
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        keyboard: {
            enabled: true,
        },

        breakpoints: {

            0: {
                slidesPerView: 1,
                spaceBetween: 20
            },

            576: {
                slidesPerView: 1.2,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 25
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30
            }
        }
    });
    const playBtn = document.querySelector(".tsw-play");
    let playing = true;
    playBtn.addEventListener("click", function() {
        if (playing) {
            testimonialSwiper.autoplay.stop();
            this.innerHTML = '<i class="fa-solid fa-play"></i>';
        } else {
            testimonialSwiper.autoplay.start();
            this.innerHTML = '<i class="fa-solid fa-pause"></i>';
        }
        playing = !playing;
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {

    const equipments = [{
            image: "/assets/front/imgs/equipment/1.webp",
            title: "Topcon OCT Maestro",
            desc: "At Shubhanu we are equipped with the latest technology equipment – The OMS-90 Operation Microscope is the new standard in versatile microsurgery. It features a water-repellent coated objective lens, new coaxial illumination, a PD adjustment knob, and a five-step magnification.",
            features: [
                "New coaxial illumination",
                "New coaxial illumination",
                "Stain-proof coated objective lens",
                "Parallel binocular tube",
                "PD adjustment knob",
                "Built-in yellow filter",
                "Focal length of 200mm",
                "Compact base ensures optimal use of limited operating room floor space",
                "Wide assortment of optional accessories",
                "Shown with optional XY translator"
            ]
        },
        {
            image: "/assets/front/imgs/equipment/2.webp",
            title: "Topcon OCT Maestro",
            desc: "At Shubhanu we are equipped with the latest technology equipment – The OMS-90 Operation Microscope is the new standard in versatile microsurgery. It features a water-repellent coated objective lens, new coaxial illumination, a PD adjustment knob, and a five-step magnification.",
            features: [
                "New coaxial illumination",
                "New coaxial illumination",
                "Stain-proof coated objective lens",
                "Parallel binocular tube",
                "PD adjustment knob",
                "Built-in yellow filter",
                "Focal length of 200mm",
                "Compact base ensures optimal use of limited operating room floor space",
                "Wide assortment of optional accessories",
                "Shown with optional XY translator"
            ]
        },
        {
            image: "/assets/front/imgs/equipment/3.webp",
            title: "Green Laser System",
            desc: "Advanced laser technology for safe and effective retinal treatment procedures.",
            features: [
                "Precision Treatment",
                "Fast Procedure",
                "Minimal Recovery"
            ]
        },
        {
            image: "/assets/front/imgs/equipment/4.webp",
            title: "Retina Scanner",
            desc: "Provides detailed retinal imaging for comprehensive eye examinations.",
            features: [
                "High Accuracy",
                "3D Retina Mapping",
                "Reliable Diagnosis"
            ]
        },
        {
            image: "/assets/front/imgs/equipment/5.webp",
            title: "Digital Slit Lamp",
            desc: "Detailed examination of the anterior and posterior segments of the eye.",
            features: [
                "Digital Imaging",
                "Excellent Magnification",
                "Comfortable Examination"
            ]
        },
        {
            image: "/assets/front/imgs/equipment/1.webp",
            title: "Phaco Machine",
            desc: "Modern cataract surgery machine ensuring precision and patient safety.",
            features: [
                "Micro Incision",
                "Smooth Surgery",
                "Rapid Recovery"
            ]
        },
        {
            image: "/assets/front/imgs/equipment/2.webp",
            title: "Corneal Topography",
            desc: "Advanced corneal mapping technology for LASIK and keratoconus evaluation.",
            features: [
                "Color Mapping",
                "High Precision",
                "Fast Analysis"
            ]
        },
        {
            image: "/assets/front/imgs/equipment/3.webp",
            title: "YAG Laser",
            desc: "Reliable laser solution for posterior capsulotomy and glaucoma treatment.",
            features: [
                "Non-Invasive",
                "Quick Procedure",
                "Excellent Outcomes"
            ]
        },
        {
            image: "/assets/front/imgs/equipment/4.webp",
            title: "Operating Microscope",
            desc: "Premium surgical microscope providing exceptional optical clarity.",
            features: [
                "HD Visualization",
                "Advanced Optics",
                "Superior Surgical Precision"
            ]
        }
    ];

    const image = document.getElementById("eqshowMainImage");
    const title = document.getElementById("eqshowTitle");
    const desc = document.getElementById("eqshowDescription");
    const featureBox = document.querySelector(".eqshow-features");
    const items = document.querySelectorAll(".eqshow-item");
    const progress = document.querySelector(".eqshow-progress-bar");

    let current = 0;
    let timer;
    let progressTimer;

    function animateOut() {

        image.style.opacity = 0;
        image.style.transform = "translateX(-40px)";

        title.style.opacity = 0;
        title.style.transform = "translateY(20px)";

        desc.style.opacity = 0;
        desc.style.transform = "translateY(20px)";

        featureBox.style.opacity = 0;
        featureBox.style.transform = "translateY(20px)";
    }

    function animateIn() {

        image.style.opacity = 1;
        image.style.transform = "translateX(0)";

        title.style.opacity = 1;
        title.style.transform = "translateY(0)";

        desc.style.opacity = 1;
        desc.style.transform = "translateY(0)";

        featureBox.style.opacity = 1;
        featureBox.style.transform = "translateY(0)";
    }

    function showEquipment(index) {
        animateOut();
        setTimeout(() => {
            image.src = equipments[index].image;
            title.textContent = equipments[index].title;
            desc.textContent = equipments[index].desc;
            featureBox.innerHTML = "";
            equipments[index].features.forEach(function(feature) {
                featureBox.innerHTML += `
                    <div class="eqshow-feature">
                        <i class="fa-solid fa-circle-check"></i>
                        ${feature}
                    </div>
                `;

            });

            items.forEach(btn => btn.classList.remove("active"));
            items[index].classList.add("active");

            animateIn();

        }, 300);

        current = index;

        startProgress();

    }

    function nextEquipment() {

        current++;

        if (current >= equipments.length) {
            current = 0;
        }

        showEquipment(current);

    }

    function startAuto() {

        clearInterval(timer);

        timer = setInterval(nextEquipment, 5000000);

    }

    function startProgress() {

        clearInterval(progressTimer);

        progress.style.transition = "none";
        progress.style.width = "0%";

        setTimeout(function() {

            progress.style.transition = "width 5s linear";
            progress.style.width = "100%";

        }, 50);

    }

    items.forEach(function(button) {

        button.addEventListener("click", function() {

            showEquipment(parseInt(this.dataset.index));

            startAuto();

        });

    });

    image.style.transition = ".45s";
    title.style.transition = ".45s";
    desc.style.transition = ".45s";
    featureBox.style.transition = ".45s";

    showEquipment(0);

    startAuto();

});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script async src="//www.instagram.com/embed.js"></script>

<script>
$('.slider').slick({
    centerMode: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 500000,
    arrows: true,
    infinite: true,

    responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
</script>

<script>
$('.our-instagram-slider').slick({
    centerMode: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 500000,
    arrows: true,
    infinite: true,

    responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
</script>

<script>
$('.doctor-slider').slick({
    slidesToShow: 1,
    arrows: true,
    infinite: true,
    responsive: [{
        breakpoint: 768,
    }]
});
</script>

<script>
$('.first-hero-section').slick({
    slidesToShow: 1,
    arrows: true,
    infinite: true,
    responsive: [{
        breakpoint: 768,
    }]
});
</script>

@endsection