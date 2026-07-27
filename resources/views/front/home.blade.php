@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/home.css">
<title>Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
<link rel="stylesheet" href="/assets/front/css/card-anime.css">
<link rel="stylesheet" href="/assets/front/css/slider.css">
<link rel="stylesheet" href="/assets/front/css/home.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>
.shbapp-section
{
    background: #267590;
    padding-top: 10px;
}

.shbapp-form {
    margin-top: 20px;
    margin-bottom: 60px;
}

.shbapp-image{
    text-align: center;
}

.shbapp-image img{
   width: 80% !important;
}

.shbapp-control {
    height: 58px;
    border: 1px solid #e7e7e7;
    border-radius: 4px;
    padding: 0 18px;
    font-size: 15px;
    color: #555;
    background: #fff;
    box-shadow: none;
    transition: .35s;
}

.shbapp-control:focus {
    border-color: #1d7bf2;
    box-shadow: none;

}

.shbapp-control::placeholder {

    color: #8d8d8d;

}

.shbapp-textarea {

    min-height: 160px;
    resize: none;
    padding-top: 16px;

}

.shbapp-form select {

    cursor: pointer;

}


</style>

@endsection
@section('body')
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

<div class="dvwave-section">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180" preserveAspectRatio="none"
        style="display:block;width:100%;height:120px;">
        <path fill="#08617e"
            d="M0,192L60,176C120,160,240,128,360,106.7C480,85,600,75,720,90.7C840,107,960,149,1080,154.7C1200,160,1320,128,1380,112L1440,96L1440,0L0,0Z">
        </path>
    </svg>
</div>

<section class="first-section">
    <div class="bg-layer pb-5">
        <h2 class="text-center">Our <span>Services</span></h2>
        <div class="wrapper">
            <ul class="row">
                <li class="row__item">
                    <div class="container">
                        <div class="cube">
                            <div class="face front">
                                <div class="card">
                                    <figure class="card__image">
                                        <img src="/assets/front/imgs/1/3.png" alt="">
                                    </figure>
                                    <div class="card__content">
                                        <div class="card__title">Retinal surgery & Injection <i
                                                class="ms-2 fa-solid fa-arrow-right-long"></i></div>

                                    </div>
                                </div>
                            </div>
                            <div class="face right">
                                <div class="card">
                                    <div class="card__content">
                                        <div class="card__description">
                                            <p class="heading">Retinal surgery & Injection</p>
                                            <p>Advanced retinal surgery and precision eye injections effectively treat
                                                retinal diseases, helping preserve vision, prevent complications, and
                                                support long-term eye health with expert care.
                                            </p>
                                            <a href="#" class="globalbtn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="row__item">
                    <div class="container">
                        <div class="cube">
                            <div class="face front">
                                <div class="card">
                                    <figure class="card__image">
                                        <img src="/assets/front/imgs/1/4.png" alt="">
                                    </figure>
                                    <div class="card__content">
                                        <div class="card__title">Lid surgery <i
                                                class="ms-2 fa-solid fa-arrow-right-long"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="face right">
                                <div class="card">
                                    <div class="card__content">
                                        <div class="card__description">
                                            <p class="heading">Lid surgery</p>
                                            <p>Lid surgery corrects drooping, damaged, or abnormal eyelids, improving
                                                vision, restoring natural appearance, and enhancing both eye function
                                                and
                                                overall facial aesthetics. </p>
                                            <a href="#" class="globalbtn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="row__item">
                    <div class="container">
                        <div class="cube">
                            <div class="face front">
                                <div class="card">
                                    <figure class="card__image">
                                        <img src="/assets/front/imgs/1/5.png" alt="">
                                    </figure>
                                    <div class="card__content">
                                        <div class="card__title">Orbital surgery <i
                                                class="ms-2 fa-solid fa-arrow-right-long"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="face right">
                                <div class="card">
                                    <div class="card__content">
                                        <div class="card__description">
                                            <p class="heading">Orbital surgery</p>
                                            <p>Orbital surgery treats disorders affecting the eye socket, including
                                                tumors, fractures, and thyroid eye disease, restoring function,
                                                protecting
                                                vision, and improving appearance.</p>
                                            <a href="#" class="globalbtn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="wrapper">
            <ul class="row">
                <li class="row__item">
                    <div class="container">
                        <div class="cube">
                            <div class="face front">
                                <div class="card">
                                    <figure class="card__image">
                                        <img src="/assets/front/imgs/1/6.png" alt="">
                                    </figure>
                                    <div class="card__content">
                                        <div class="card__title">Eye Tumors <i
                                                class="ms-2 fa-solid fa-arrow-right-long"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="face right">
                                <div class="card">
                                    <div class="card__content">
                                        <div class="card__description">
                                            <p class="heading">Eye Tumors</p>
                                            <p>Comprehensive eye tumor treatment ensures early diagnosis and advanced
                                                care,
                                                helping preserve vision, protect surrounding eye structures, and improve
                                                long-term patient outcomes.</p>
                                            <a href="#" class="globalbtn">Read More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="row__item">
                    <div class="container">
                        <div class="cube">
                            <div class="face front">
                                <div class="card">
                                    <figure class="card__image">
                                        <img src="/assets/front/imgs/1/7.png" alt="">
                                    </figure>
                                    <div class="card__content">
                                        <div class="card__title">Treatment of Watering Eyes <i
                                                class="ms-2 fa-solid fa-arrow-right-long"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="face right">
                                <div class="card">
                                    <div class="card__content">
                                        <div class="card__description">
                                            <p class="heading">Treatment of Watering Eyes</p>
                                            <p>Advanced treatment for watering eyes addresses blocked tear ducts and
                                                other
                                                underlying causes, providing lasting relief, improved comfort, and
                                                healthier
                                                eye function.</p>
                                            <a href="#" class="globalbtn">Read More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="row__item">
                    <div class="container">
                        <div class="cube">
                            <div class="face front">
                                <div class="card">
                                    <figure class="card__image">
                                        <img src="/assets/front/imgs/1/8.png" alt="">
                                    </figure>
                                    <div class="card__content">
                                        <div class="card__title">Ocular Emergencies <i
                                                class="ms-2 fa-solid fa-arrow-right-long"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="face right">
                                <div class="card">
                                    <div class="card__content">
                                        <div class="card__description">
                                            <p class="heading">Ocular Emergencies</p>
                                            <p>Prompt treatment for ocular emergencies ensures rapid diagnosis and
                                                expert
                                                care, protecting vision, preventing complications, and supporting
                                                faster,
                                                successful recovery.</p>
                                            <a href="#" class="globalbtn">Read More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="wrapper">
            <ul class="row">
                <li class="row__item">
                    <div class="container">
                        <div class="cube">
                            <div class="face front">
                                <div class="card">
                                    <figure class="card__image">
                                        <img src="/assets/front/imgs/1/9.png" alt="">
                                    </figure>
                                    <div class="card__content">
                                        <div class="card__title">Neuro-Ophthalmology <i
                                                class="ms-2 fa-solid fa-arrow-right-long"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="face right">
                                <div class="card">
                                    <div class="card__content">
                                        <div class="card__description">
                                            <p class="heading">Neuro-Ophthalmology</p>
                                            <p>Neuro-ophthalmology diagnoses and treats vision problems caused by brain
                                                and
                                                nerve disorders, ensuring accurate care, timely intervention, and
                                                improved
                                                visual outcomes.</p>
                                            <a href="#" class="globalbtn">Read More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="row__item">
                    <div class="container">
                        <div class="cube">
                            <div class="face front">
                                <div class="card">
                                    <figure class="card__image">
                                        <img src="/assets/front/imgs/1/10.png" alt="">
                                    </figure>
                                    <div class="card__content">
                                        <div class="card__title">Artificial / Prosthetic eyes <i
                                                class="ms-2 fa-solid fa-arrow-right-long"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="face right">
                                <div class="card">
                                    <div class="card__content">
                                        <div class="card__description">
                                            <p class="heading">Artificial / Prosthetic eyes</p>
                                            <p>Artificial and prosthetic eyes restore natural appearance after eye loss,
                                                improving confidence, facial symmetry, comfort, and overall quality of
                                                life.
                                            </p>
                                            <a href="#" class="globalbtn">Read More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="row__item">
                    <div class="container">
                        <div class="cube">
                            <div class="face front">
                                <div class="card">
                                    <figure class="card__image">
                                        <img src="/assets/front/imgs/1/11.png" alt="">
                                    </figure>
                                    <div class="card__content">
                                        <div class="card__title">Thyroid Eye Disease <i
                                                class="ms-2 fa-solid fa-arrow-right-long"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="face right">
                                <div class="card">
                                    <div class="card__content">
                                        <div class="card__description">
                                            <p class="heading">Thyroid Eye Disease</p>
                                            <p>Thyroid eye disease treatment reduces eye bulging, discomfort, and vision
                                                problems through specialized care, improving comfort, appearance, and
                                                long-term eye health.
                                            </p>
                                            <a href="#" class="globalbtn">Read More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

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

<section class="eye-about py-5">
    <div class="container py-5">
        <div class="row align-items-center g-5">

            <!-- Left -->
            <div class="col-lg-6">

                <span class="eye-bg-title">WHO WE ARE?</span>

                <h2 class="fw-bold mb-4">
                    Leading Eye Care Hospital Committed to Your Vision
                </h2>

                <p class="mb-4">
                    At Shubanu Eye Hospital – The Best Eye Hospital owns a fleet of modern equipment’s right from
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
                                <h5>– Narender Rautela</h5>
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
                                <h5>– Manju Arya</h5>
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
                                <h5>– Pradhuman Gangwar</h5>
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
                                <h5>– Narender Rautela</h5>
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
                                <h5>– Manju Arya</h5>
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

<section class="shbapp-section">
    <div class="container">
        <div class="row align-items-end mt-5">
            <!-- Left -->
            <div class="col-lg-6">
                <h2 class="shbapp-title"> We Are Always Ready To Help You. <span>Book An Appointment</span></h2>
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

                                <button type="submit" class="btn shbapp-btn">

                                    Book An Appointment

                                </button>

                                <span class="shbapp-note">

                                    ( We will be confirm by an SMS )

                                </span>

                            </div>

                        </div>

                    </div>

                </form>

            </div>

            <!-- Right Image -->

            <div class="col-lg-6">

                <div class="shbapp-image">

                    <img src="/assets/front/imgs/bottom-doctor.png" class="img-fluid" alt="Doctors">

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

@endsection