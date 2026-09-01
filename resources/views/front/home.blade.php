@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/home.css">
<title>Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
<link rel="stylesheet" href="/assets/front/css/home.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<style>
.our-instagram-eyebrow i {
    font-size: 18px !important;
    color: #e1306c !important;
}

.our-instagram-slider {
    margin-left: -10px !important;
    margin-right: -10px !important;
}

.our-instagram-slide {
    padding: 0 10px !important;
}


.our-instagram-card {
    width: 100% !important;
    max-width: 400px !important;
    margin: 0 auto !important;
    background: #ffffff !important;
    border: 1px solid #dbdbdb !important;
    border-radius: 14px !important;
    overflow: hidden !important;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08) !important;
}


/* =========================================
   CARD HEADER
========================================= */

.our-instagram-card-header {
    min-height: 62px !important;
    padding: 10px 13px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    background: #ffffff !important;
}

.our-instagram-profile {
    display: flex !important;
    align-items: center !important;
    gap: 10px !important;
}

.our-instagram-avatar {
    width: 38px !important;
    height: 38px !important;
    min-width: 38px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    border-radius: 50% !important;
    background: linear-gradient(135deg,
            #833ab4 0%,
            #fd1d1d 50%,
            #fcb045 100%) !important;
    color: #ffffff !important;
    font-size: 19px !important;
}

.our-instagram-user-info {
    display: flex !important;
    flex-direction: column !important;
    line-height: 1.2 !important;
}

.our-instagram-user-info strong {
    font-size: 14px !important;
    color: #171717 !important;
    font-weight: 600 !important;
}

.our-instagram-user-info span {
    margin-top: 3px !important;
    font-size: 11px !important;
    color: #8e8e8e !important;
}

.our-instagram-more {
    color: #222222 !important;
    font-size: 16px !important;
    text-decoration: none !important;
}


/* =========================================
   IMAGE
========================================= */

.our-instagram-image-wrap {
    position: relative !important;
    display: block !important;
    width: 100% !important;
    aspect-ratio: 4 / 6 !important;
    overflow: hidden !important;
    background: #f2f2f2 !important;
}

.our-instagram-image-wrap img {
    display: block !important;
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    transition: transform 0.4s ease !important;
}

.our-instagram-image-wrap:hover img {
    transform: scale(1.03) !important;
}


/* =========================================
   REEL PLAY ICON
========================================= */

.our-instagram-reel-icon {
    position: absolute !important;
    top: 15px !important;
    right: 15px !important;
    width: 34px !important;
    height: 34px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    border-radius: 50% !important;
    background: rgb(36 116 140) !important;
    color: #ffffff !important;
    font-size: 13px !important;
    backdrop-filter: blur(5px) !important;
}

.our-instagram-reel-icon i {
    margin-left: 2px !important;
    color: #fff !important;
}


/* =========================================
   ACTION BUTTONS
========================================= */

.our-instagram-actions {
    padding: 12px 14px 5px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    color: #222222 !important;
}

.our-instagram-left-actions {
    display: flex !important;
    align-items: center !important;
    gap: 17px !important;
}

.our-instagram-actions i {
    font-size: 20px !important;
    cursor: pointer !important;
    transition: transform 0.2s ease !important;
}

.our-instagram-actions i:hover {
    transform: scale(1.12) !important;
}


/* =========================================
   CONTENT
========================================= */

.our-instagram-content {
    padding: 3px 14px 17px !important;
}

.our-instagram-likes {
    display: block !important;
    margin-bottom: 5px !important;
    font-size: 13px !important;
    color: #222222 !important;
}

.our-instagram-content p {
    margin: 0 0 10px !important;
    font-size: 13px !important;
    line-height: 1.5 !important;
    color: #333333 !important;
}

.our-instagram-view {
    display: inline-block !important;
    font-size: 12px !important;
    font-weight: 600 !important;
    color: #0095f6 !important;
    text-decoration: none !important;
}

.our-instagram-view:hover {
    color: #00376b !important;
}

.our-instagram-image-wrap {
    display: block;
    position: relative;
    overflow: hidden;
}

.our-instagram-image-wrap video {
    width: 100%;
    height: 500px;
    object-fit: cover;
    display: block;
}
</style>
@endsection
@section('body')

<section class="first-hero-section">
    <picture>
        <source media="(max-width: 767px)" srcset="/assets/front/imgs/banners/1-mb.webp">
        <source media="(min-width: 768px)" srcset="/assets/front/imgs/banners/1.webp">
        <img src="/assets/front/imgs/banners/1.webp" alt="Banner" width="100%">
    </picture>
    <picture>
        <source media="(max-width: 767px)" srcset="/assets/front/imgs/banners/2-mb.webp">
        <source media="(min-width: 768px)" srcset="/assets/front/imgs/banners/2.webp">
        <img src="/assets/front/imgs/banners/2.webp" alt="Banner" width="100%">
    </picture>
    <picture>
        <source media="(max-width: 767px)" srcset="/assets/front/imgs/banners/3-mb.webp">
        <source media="(min-width: 768px)" srcset="/assets/front/imgs/banners/3.webp">
        <img src="/assets/front/imgs/banners/3.webp" alt="Banner" width="100%">
    </picture>
</section>

<section class="info-cta-section bg-yellow">
    <div class="container bg-blue">
        <div class="d-flex justify-content-start">
            <div class="left-clm">
                <div class="dicon">+</div>
                <div class="number">20</div>
                <div class="text">Years of Experience</div>
            </div>
            <div class="right-clm">
                <p class="title">Stronger <span>- A Legacy of Better Vision</span></p>
                <p class="desc">Years of experience. Thousands of lives touched.</p>
                <div class="d-flex inner-row mt-3">
                    <div class="inner-clm">
                        <p class="inner-number">50+</p>
                        <p class="inner-desc">Eye Care Professionals</p>
                    </div>
                    <div class="inner-clm">
                        <p class="inner-number">1,00,000+</p>
                        <p class="inner-desc">Patients <br>Treated</p>
                    </div>
                    <div class="inner-clm">
                        <p class="inner-number">50,000+</p>
                        <p class="inner-desc">Successful Procedures & Surgeries</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-services bg-yellow pb-5">
    <div class="container">
        <h2 class="text-center">Our Services</h2>
        <div class="row slider">
            <div class="col-12 col-md-4 service-card">
                <div class="text-clm">
                    <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                    <h3>Retina & Vitreous Care</h3>
                    <p class="mb-3"> Advanced diagnosis and treatment for retinal and vitreous disorders.</p>
                    <p class="highlight">Retina Surgery</p>
                    <p class="highlight">Laser Treatment</p>
                    <p class="highlight">Intravitreal Injections</p>
                </div>
                <img src="/assets/front/imgs/1/4.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
            <div class="col-12 col-md-4 service-card">
                <div class="text-clm">
                    <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                    <h3>Orbit & Oculoplasty</h3>
                    <p class="mb-3">Specialized care for eyelid, tear duct and orbital conditions.</p>
                    <p class="highlight">Eyelid Surgery</p>
                    <p class="highlight">Watering Eye Treatment</p>
                    <p class="highlight">Orbital Surgery</p>
                </div>
                <img src="/assets/front/imgs/1/6.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
            <div class="col-12 col-md-4 service-card">
                <div class="text-clm">
                    <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                    <h3>Cornea Care</h3>
                    <p class="mb-3">Specialized diagnosis and treatment for corneal diseases and disorders.</p>
                    <p class="highlight">Corneal Disorders</p>
                    <p class="highlight">Keratoconus & C3R</p>
                    <p class="highlight">Corneal Surgery</p>
                </div>
                <img src="/assets/front/imgs/1/7.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
            <div class="col-12 col-md-4 service-card">
                <div class="text-clm">
                    <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                    <h3>Glaucoma Care</h3>
                    <p class="mb-3">Comprehensive care to detect and manage glaucoma at every stage.</p>
                    <p class="highlight">Glaucoma Diagnosis</p>
                    <p class="highlight">Laser Treatment</p>
                    <p class="highlight">Glaucoma Surgery</p>
                </div>
                <img src="/assets/front/imgs/1/3.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
            <div class="col-12 col-md-4 service-card">
                <div class="text-clm">
                    <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                    <h3>Squint Care</h3>
                    <p class="mb-3">Expert evaluation and treatment for eye alignment problems in children and adults.
                    </p>
                    <p class="highlight">Squint Evaluation</p>
                    <p class="highlight">Amblyopia Management</p>
                    <p class="highlight">Squint Surgery</p>
                </div>
                <img src="/assets/front/imgs/1/8.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
            <div class="col-12 col-md-4 service-card">
                <div class="text-clm">
                    <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                    <h3>Eye Trauma & Emergency</h3>
                    <p class="mb-3">Prompt and specialized care for urgent eye conditions and injuries.</p>
                    <p class="highlight">Eye Injuries</p>
                    <p class="highlight">Foreign Body & Chemical Injuries</p>
                    <p class="highlight">Emergency Eye Surgery</p>
                </div>
                <img src="/assets/front/imgs/1/9.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
            <div class="col-12 col-md-4 service-card">
                <div class="text-clm">
                    <div class="icon-top"><i class="fa-solid fa-eye"></i></div>
                    <h3>Cataract & Lens Surgery</h3>
                    <p class="mb-3">Advanced cataract treatment for clear and better-quality vision.</p>
                    <p class="highlight">AI-Guided Cataract Surgery</p>
                    <p class="highlight">Premium IOLs</p>
                    <p class="highlight">MICS / Phaco Surgery</p>
                </div>
                <img src="/assets/front/imgs/1/5.png" alt="Artificial & Prosthetic eyes" width="100%">
            </div>
        </div>
    </div>

</section>

<section class="eye-about py-5">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Vision & Mission</h2>
                <p class="">Advanced eye care with a human touch.</p>
                <p class="lastline">Preserving sight. Improving lives.</p>
            </div>

            <div class="col-lg-6">
                <div class="eye-icon">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="doctor-section py-5">
    <div class="container">
        <div class="mb-5">
            <h2 class="section-title">Dedicated doctors, <span>committed to your care</span> </h2>
        </div>
        <div class="doctor-slider">

            <div>
                <div class="doctor-card">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="doctor-image">
                                <img src="/assets/front/imgs/doctors/dr-bhanu-pratap-singh-pangtey.webp"
                                    class="img-fluid" width="100%">
                                <div class="doctor-info">
                                    <img src="/assets/front/imgs/doctors/dr-bhanu-pratap-singh-pangtey.webp"
                                        alt="Dr. Bhanu Pratap Singh">
                                    <div class="short-doctor-infor">
                                        <h5>Dr. Bhanu Pratap Singh</h5>
                                        <p>Vitreo-Retina</p>
                                    </div>
                                    <a href="#" class="profile-btn"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="doctor-content">
                                <h3>About Dr. Bhanu Pratap Singh Pangtey</h3>
                                <p>Experienced Vitreo-Retina Surgeon with expertise in the
                                    diagnosis and surgical management of complex retinal and
                                    vitreous disorders.
                                </p>
                                <div class="row g-3 mt-5">
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Specialty</strong>
                                                <span>Vitreo-Retina</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-award"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Experience</strong>
                                                <span>15+ Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-user-graduate"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Qualification</strong>
                                                <span>MS Ophthalmology, FICO, Vitreo-Retina Fellowship</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-calendar-check"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Availability</strong>
                                                <span>Full-Time / Daily</span>
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
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="doctor-image">
                                <img src="/assets/front/imgs/doctors/dr-shubha-raguram-pangtey.webp" class="img-fluid"
                                    width="100%">
                                <div class="doctor-info">
                                    <img src="/assets/front/imgs/doctors/dr-shubha-raguram-pangtey.webp"
                                        alt="Dr. Shubha Raguram Pangtey">
                                    <div class="short-doctor-infor">
                                        <h5>Dr. Shubha Raguram</h5>
                                        <p>Orbit, Oculoplasty & Ocular Oncology Surgeon</p>
                                    </div>
                                    <a href="#" class="profile-btn"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="doctor-content">
                                <h3>About Dr. Shubha Raguram Pangtey:</h3>
                                <p>An experienced ophthalmic surgeon specializing in Orbit, Oculoplasty, Ocular
                                    Oncology, Neuro-Ophthalmology and Pediatric Eye Care, with expertise in managing
                                    complex eyelid, lacrimal, orbital and ocular tumour conditions.
                                </p>
                                <div class="row g-3 mt-4">
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Specialty</strong>
                                                <span>Orbit, Oculoplasty & Ocular Oncology</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-award"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Experience</strong>
                                                <span>15+ Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-user-graduate"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Qualification</strong>
                                                <span>MS Ophthalmology, Fellowship in Orbit, Oculoplasty & Ocular
                                                    Oncology</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-eye"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Additional Expertise</strong>
                                                <span>Neuro-Ophthalmology & Pediatric Ophthalmology</span>
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
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="doctor-image">
                                <img src="/assets/front/imgs/doctors/dr-shagun-sood.webp" class="img-fluid"
                                    width="100%">
                                <div class="doctor-info">
                                    <img src="/assets/front/imgs/doctors/dr-shagun-sood.webp" alt="Dr. Shagun Sood">
                                    <div class="short-doctor-infor">
                                        <h5>Dr. Shagun Sood</h5>
                                        <p>Visiting Consultant – Cataract, Squint & Refractive Surgery</p>
                                    </div>
                                    <a href="#" class="profile-btn"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="doctor-content">
                                <h3>About Dr. Shagun Sood</h3>
                                <p>Experienced ophthalmic surgeon with expertise in cataract,
                                    squint and refractive procedures, with extensive surgical
                                    experience across adult and pediatric eye care.
                                </p>
                                <div class="row g-3 mt-5">
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Specialty</strong>
                                                <span>Cataract, Squint & Refractive Surgery</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-award"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Experience</strong>
                                                <span>10+ Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-user-graduate"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Qualification</strong>
                                                <span>MBBS, MS Ophthalmology, DNB, FICO</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-eye"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Advanced Training</strong>
                                                <span>LASIK & Refractive Surgery</span>
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
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="doctor-image">
                                <img src="/assets/front/imgs/doctors/dr-mohd-sufyan-danish.webp" class="img-fluid"
                                    width="100%">
                                <div class="doctor-info">
                                    <img src="/assets/front/imgs/doctors/dr-mohd-sufyan-danish.webp"
                                        alt="Dr. Mohd Sufyan Danish">
                                    <div class="short-doctor-infor">
                                        <h5>Dr. Mohd Sufyan Danish</h5>
                                        <p>Consultant – Cornea, Cataract & Refractive Surgery</p>
                                    </div>
                                    <a href="#" class="profile-btn"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="doctor-content">
                                <h3>About Dr. Mohd Sufyan Danish</h3>
                                <p>Experienced ophthalmic surgeon specializing in corneal
                                    diseases, cataract and refractive surgery, with extensive
                                    expertise in complex anterior segment procedures.
                                </p>
                                <div class="row g-3 mt-5">
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Specialty</strong>
                                                <span>Cornea, Cataract & Refractive Surgery</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-award"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Experience</strong>
                                                <span>8+ Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-user-graduate"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Qualification</strong>
                                                <span>MBBS, DOMS, DNB Ophthalmology</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-eye"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Advanced Training</strong>
                                                <span>Fellowship in Cornea & Anterior Segment</span>
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
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="doctor-image">
                                <img src="/assets/front/imgs/doctors/dr-nabeel-firoz.webp" class="img-fluid"
                                    width="100%">
                                <div class="doctor-info">
                                    <img src="/assets/front/imgs/doctors/dr-nabeel-firoz.webp" alt="Dr. Nabeel Firoz">
                                    <div class="short-doctor-infor">
                                        <h5>Dr. Nabeel Firoz</h5>
                                        <p>Consultant – Cataract & Medical Retina</p>
                                    </div>
                                    <a href="#" class="profile-btn"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="doctor-content">
                                <h3>About Dr. Nabeel Firoz</h3>
                                <p>Experienced ophthalmologist with expertise in cataract
                                    surgery, medical retina and comprehensive eye care, with a
                                    special focus on retinal injections and laser procedures.
                                </p>
                                <div class="row g-3 mt-4">
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Specialty</strong>
                                                <span>Cataract, Medical Retina & Comprehensive Ophthalmology</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-award"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Experience</strong>
                                                <span>8 Years</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-user-graduate"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Qualification</strong>
                                                <span>MBBS, DOMS, DNB Ophthalmology</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-box">
                                            <div class="iconbox">
                                                <i class="fa-solid fa-eye"></i>
                                            </div>
                                            <div class="content">
                                                <strong>Advanced Training</strong>
                                                <span>Cataract, Medical Retina & Anterior Segment</span>
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

<section class="eqshow-section py-5">
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
                        <img src="/assets/front/imgs/equipment/2-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Lenstar</span>
                    </button>
                    <button class="eqshow-item" data-index="1">
                        <img src="/assets/front/imgs/equipment/1-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Lumera</span>
                    </button>
                    <button class="eqshow-item" data-index="2">
                        <img src="/assets/front/imgs/equipment/3-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Pentacam</span>
                    </button>
                    <button class="eqshow-item" data-index="3">
                        <img src="/assets/front/imgs/equipment/4-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Centurion</span>
                    </button>
                    <button class="eqshow-item" data-index="4">
                        <img src="/assets/front/imgs/equipment/5-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Constellation</span>
                    </button>
                    <button class="eqshow-item" data-index="5">
                        <img src="/assets/front/imgs/equipment/6-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Legion</span>
                    </button>
                    <button class="eqshow-item" data-index="6">
                        <img src="/assets/front/imgs/equipment/7-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Maestro</span>
                    </button>
                    <button class="eqshow-item" data-index="7">
                        <img src="/assets/front/imgs/equipment/8-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Tomey</span>
                    </button>
                    <button class="eqshow-item" data-index="8">
                        <img src="/assets/front/imgs/equipment/9-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Eidon</span>
                    </button>
                    <button class="eqshow-item" data-index="9">
                        <img src="/assets/front/imgs/equipment/10-mb.webp" alt="shubhanu eye hospital icon">
                        <span>Argos</span>
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
                    <h3 id="eqshowTitle">LENSTAR 900 Optical Biometry System</h3>
                    <p id="eqshowDescription">
                        An advanced optical biometry platform used for comprehensive eye measurements and precise
                        cataract surgery planning. It measures multiple anatomical parameters of the eye and supports
                        modern IOL power calculation methods.
                    </p>
                    <div class="eqshow-features">
                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Optical Low-Coherence Reflectometry (OLCR)
                        </div>
                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Precise axial length measurement
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Corneal thickness and anterior chamber depth
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Lens thickness and white-to-white measurement
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Dual-zone keratometry
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Pupillometry
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Advanced IOL power calculation and cataract planning
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>

</section>

<section class="our-services our-instagram-section pb-5">
    <div class="container">

        <div class="our-instagram-title-wrap">
            <h2 class="text-center">Instagram</h2>
        </div>

        <div class="row our-instagram-slider">

            <div class="our-instagram-slide">
                <div class="our-instagram-card">
                    <a href="https://www.instagram.com/reel/Da4olhqJ734/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="our-instagram-image-wrap">

                        <video autoplay muted loop playsinline preload="metadata"
                            poster="{{ asset('/instagram/1.jpeg') }}"
                            width="400"
                            height="500">
                            <source src="{{ asset('/instagram/1.mp4') }}" type="video/mp4">
                        </video>

                        <span class="our-instagram-reel-icon">
                            <i class="fas fa-play"></i>
                        </span>

                    </a>
                </div>
            </div>


            <div class="our-instagram-slide">
                <div class="our-instagram-card">
                    <a href="https://www.instagram.com/reel/DMsKo72I_ZV/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="our-instagram-image-wrap">

                        <video autoplay muted loop playsinline preload="metadata"
                            poster="{{ asset('/instagram/2.jpeg') }}"
                            width="400"
                            height="500">
                            <source src="{{ asset('/instagram/2.mp4') }}" type="video/mp4">
                        </video>

                        <span class="our-instagram-reel-icon">
                            <i class="fas fa-play"></i>
                        </span>

                    </a>
                </div>
            </div>


            <div class="our-instagram-slide">
                <div class="our-instagram-card">
                    <a href="https://www.instagram.com/reel/DPA-Tu5DJTm/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="our-instagram-image-wrap">

                        <video autoplay muted loop playsinline preload="metadata"
                            poster="{{ asset('/instagram/3.jpeg') }}"
                            width="400"
                            height="500">
                            <source src="{{ asset('/instagram/3.mp4') }}" type="video/mp4">
                        </video>

                        <span class="our-instagram-reel-icon">
                            <i class="fas fa-play"></i>
                        </span>

                    </a>
                </div>
            </div>


            <div class="our-instagram-slide">
                <div class="our-instagram-card">
                    <a href="https://www.instagram.com/reel/DRPPSoQEXZd/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="our-instagram-image-wrap">

                        <video autoplay muted loop playsinline preload="metadata"
                            poster="{{ asset('/instagram/4.jpeg') }}"
                            width="400"
                            height="500">
                            <source src="{{ asset('/instagram/4.mp4') }}" type="video/mp4">
                        </video>

                        <span class="our-instagram-reel-icon">
                            <i class="fas fa-play"></i>
                        </span>

                    </a>
                </div>
            </div>


            <div class="our-instagram-slide">
                <div class="our-instagram-card">
                    <a href="https://www.instagram.com/reel/DSH7lPECS1J/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="our-instagram-image-wrap">

                        <video autoplay muted loop playsinline preload="metadata"
                            poster="{{ asset('/instagram/5.jpeg') }}"
                            width="400"
                            height="500">
                            <source src="{{ asset('/instagram/5.mp4') }}" type="video/mp4">
                        </video>

                        <span class="our-instagram-reel-icon">
                            <i class="fas fa-play"></i>
                        </span>

                    </a>
                </div>
            </div>


            <div class="our-instagram-slide">
                <div class="our-instagram-card">
                    <a href="https://www.instagram.com/reel/DSMuoUOEwxd/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="our-instagram-image-wrap">

                        <video autoplay muted loop playsinline preload="metadata"
                            poster="{{ asset('/instagram/6.jpeg') }}"
                            width="400"
                            height="500">
                            <source src="{{ asset('/instagram/6.mp4') }}" type="video/mp4">
                        </video>

                        <span class="our-instagram-reel-icon">
                            <i class="fas fa-play"></i>
                        </span>

                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="zbg-blog-section py-5">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center mb-5">
                <!-- <span class="zbg-blog-subtitle text-uppercase">Recent Posts</span> -->
                <h2 class="zbg-blog-title">From Our Blog</h2>
                <!-- <div class="zbg-blog-divider"></div> -->
            </div>
        </div>

        <div class="row g-5">
            <div class="col-lg-6">
                <div class="zbg-blog-item">

                    <div class="zbg-blog-thumb">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1588776814546-daab30f310ce?w=800"
                                alt="shubhanu eye hospital icon">
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
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800"
                                alt="shubhanu eye hospital icon">
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
                            <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?w=800"
                                alt="shubhanu eye hospital icon">
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
                            <img src="https://images.unsplash.com/photo-1512678080530-7760d81faba6?w=800"
                                alt="shubhanu eye hospital icon">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script async src="//www.instagram.com/embed.js"></script>

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
            image: "/assets/front/imgs/equipment/2.webp",
            title: "LENSTAR 900 Optical Biometry System",
            desc: "An advanced optical biometry platform used for comprehensive eye measurements and precise cataract surgery planning. It measures multiple anatomical parameters of the eye and supports modern IOL power calculation methods.",
            features: [
                "Optical Low-Coherence Reflectometry (OLCR)",
                "Precise axial length measurement",
                "Corneal thickness and anterior chamber depth",
                "Lens thickness and white-to-white measurement",
                "Dual-zone keratometry",
                "Pupillometry",
                "Advanced IOL power calculation and cataract planning",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/1.webp",
            title: "ZEISS OPMI LUMERA 700",
            desc: "A premium ophthalmic surgical microscope designed to provide exceptional visualization during complex eye surgeries. Its advanced optics and illumination help surgeons achieve enhanced clarity, depth perception and precision during anterior and posterior segment procedures.",
            features: [
                "Advanced ZEISS apochromatic optics",
                "Stereo Coaxial Illumination for enhanced red reflex",
                "Motorized zoom and focusing",
                "High-definition surgical visualization",
                "Compatible with ZEISS RESIGHT for retinal surgery",
                "Optional intraoperative OCT integration",
                "Designed for cataract, retina and other microsurgical procedures",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/3.webp",
            title: "OCULUS Pentacam – Anterior Segment Tomography",
            desc: "A non-contact diagnostic system that creates a detailed three-dimensional analysis of the anterior segment of the eye. It provides valuable information about corneal shape, thickness and anterior chamber anatomy for corneal and cataract assessment. ",
            features: [
                "Scheimpflug-based anterior segment imaging",
                "Detailed corneal topography and tomography",
                "Corneal thickness mapping",
                "Keratoconus screening and evaluation",
                "Anterior chamber analysis",
                "Cataract and IOL planning support",
                "Useful for corneal and refractive surgery assessment",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/4.webp",
            title: "Alcon CENTURION Vision System",
            desc: "An advanced phacoemulsification platform designed for modern cataract surgery. Its fluidics and energy-delivery technologies help surgeons maintain a stable anterior chamber while efficiently removing the cataractous lens.",
            features: [
                "Advanced phacoemulsification technology",
                "Active Fluidics™ technology",
                "Enhanced anterior chamber stability",
                "Advanced control of intraocular pressure",
                "Efficient torsional ultrasound energy delivery",
                "Designed to minimize post-occlusion surge",
                "Optimized cataract removal and surgical control",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/5.webp",
            title: "Alcon CONSTELLATION Vision System",
            desc: "A comprehensive vitreoretinal surgical platform developed for advanced retinal and vitreous procedures. It combines vitrectomy, fluidics and surgical control technologies to support precise and complex posterior segment surgery.",
            features: [
                "Advanced vitreoretinal surgery platform",
                "High-performance vitrectomy capabilities",
                "Independent control of flow, vacuum and cut rate",
                "Automatic infusion-pressure monitoring",
                "Designed for stable intraocular pressure",
                "Multifunction footswitch control",
                "Supports complex retinal and combined procedures",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/6.webp",
            title: "Alcon LEGION Phaco System",
            desc: "A modern phacoemulsification system designed for efficient and controlled cataract surgery. It combines Alcon’s torsional ultrasound technology with responsive fluidics and an intuitive surgical interface.",
            features: [
                "OZil® Torsional ultrasound technology",
                "Stable fluidics during phacoemulsification",
                "Improved surge protection",
                "Efficient cataract removal",
                "High-vacuum surgical capability",
                "Intuitive graphical user interface",
                "Supports anterior vitrectomy",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/7.webp",
            title: "Topcon Maestro2 OCT & OCT Angiography",
            desc: "An advanced multimodal retinal imaging system combining OCT, OCT Angiography and true-colour fundus photography in a single compact platform. It enables detailed evaluation of retinal structure and vascular flow without the need for contrast dye during OCT-A imaging.",
            features: [
                "High-resolution Optical Coherence Tomography",
                "OCT Angiography (OCT-A)",
                "True-colour fundus photography",
                "Fully automated single-touch capture",
                "12 × 9 mm 3D wide scan",
                "Retinal, RNFL and ganglion-cell analysis",
                "Glaucoma assessment with Hood Report",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/8.webp",
            title: "TOMEY EM-4000 Specular Microscope",
            desc: "A non-contact diagnostic system designed for detailed analysis of corneal endothelial cells. It provides automated measurements and corneal thickness assessment, supporting evaluation before and after various eye surgeries.",
            features: [
                "Non-contact corneal endothelial imaging",
                "Automatic alignment and measurement",
                "Automatic endothelial cell analysis",
                "Integrated non-contact pachymetry",
                "13 measurement areas",
                "Multiple cell-analysis methods",
                "Integrated database for patient follow-up",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/9.webp",
            title: "iCare EIDON TrueColor Fundus Imaging System",
            desc: "An advanced confocal retinal imaging system capable of producing detailed, high-resolution TrueColor images of the retina. Its widefield technology enables visualization of both central and peripheral retinal structures, often without requiring pupil dilation.",
            features: [
                "TrueColor confocal retinal imaging",
                "High-resolution widefield fundus photography",
                "Up to 90° field in a single standard image",
                "Wide panoramic retinal imaging",
                "Non-mydriatic imaging from small pupils",
                "Automated alignment, focus and capture",
                "Effective imaging even through some media opacities",
            ]
        },
        {
            image: "/assets/front/imgs/equipment/10.webp",
            title: "Alcon ARGOS Biometer with Image Guidance",
            desc: "A swept-source OCT biometry system designed for advanced cataract surgery planning and IOL power calculation. It captures detailed biometric measurements along with a reference image of the eye to support precise, image-guided surgical planning.",
            features: [
                "Swept-Source OCT biometry",
                "Rapid biometric data acquisition",
                "Segmented axial length measurement",
                "Keratometry and anterior chamber measurements",
                "Advanced IOL power calculation",
                "Integrated Alcon Vision Planner",
                "Image-guided astigmatism management",
                "Digital transfer of surgical planning data to compatible OR systems",
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

<script>
$('.slider').slick({
    centerMode: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 500000,
    arrows: false,
    dots: true,
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
    arrows: false,
    dots: true,
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
    arrows: false,
    dots: true,
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