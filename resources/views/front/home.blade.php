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
                                        <div class="card__title">Retinal surgery & Injection</div>
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
                                        <div class="card__title">Lid surgery</div>
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
                                        <div class="card__title">Orbital surgery</div>
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
                                        <div class="card__title">Eye Tumors</div>
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
                                        <div class="card__title">Treatment of Watering Eyes</div>
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
                                        <div class="card__title">Ocular Emergencies</div>
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
                                        <div class="card__title">Neuro-Ophthalmology</div>
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
                                        <div class="card__title">Artificial / Prosthetic eyes</div>
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
                                        <div class="card__title">Thyroid Eye Disease</div>
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
                    We Are a Leading Eye Care Hospital
                </h2>

                <p class="mb-4">
                    Riti Eye Care Hospital was founded in 2014 with a vision to provide world-class eye care services to
                    our community. Over the years, we have grown into a leading institution for comprehensive eye care,
                    serving thousands of patients every year. Our commitment to excellence has made us a trusted name in
                    eye health.
                </p>

                <h4 class="mb-4">Our Specialized Services:</h4>

                <div class="row">
                    <div class="col-sm-6">
                        <ul class="eye-list">
                            <li>Advanced Cataract Surgery</li>
                            <li>Cornea Transplantation</li>
                            <li>Pterygium Excision</li>
                        </ul>
                    </div>

                    <div class="col-sm-6">
                        <ul class="eye-list">
                            <li>Glaucoma Surgery</li>
                            <li>Yag Laser</li>
                            <li>Riti Opticals</li>
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

<section class="tsw-section py-5">

    <div class="container">

        <div class="tsw-heading text-center">

            <span class="tsw-subtitle">
                TESTIMONIALS
            </span>

            <h2 class="tsw-title">
                What Our Patients Say
            </h2>

            <p class="tsw-description">
                Real experiences from people who trusted us with their vision
            </p>

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

                            "Riti Eye Care Hospital transformed my life.
                            The team's expertise and care made my eye surgery
                            experience completely stress-free."

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

                                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="">

                            </div>

                            <div class="tsw-user-info">

                                <h5>Sonika Yadav</h5>

                                <span>Mumbai</span>

                            </div>

                        </div>

                        <div class="tsw-line"></div>

                        <span class="tsw-badge">
                            Cataract Surgery
                        </span>

                    </div>

                </div>

                <!-- Card 2 -->

                <div class="swiper-slide">

                    <div class="tsw-card">

                        <div class="tsw-quote">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>

                        <p class="tsw-review">

                            "From the moment I walked in, I knew I was in
                            good hands. The facility is world-class and
                            the doctors are incredibly knowledgeable."

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

                                <img src="https://randomuser.me/api/portraits/men/36.jpg" alt="">

                            </div>

                            <div class="tsw-user-info">

                                <h5>Abhishek Verma</h5>

                                <span>Delhi</span>

                            </div>

                        </div>

                        <div class="tsw-line"></div>

                        <span class="tsw-badge">
                            Glaucoma Treatment
                        </span>

                    </div>

                </div>

                <!-- Card 3 -->

                <div class="swiper-slide">

                    <div class="tsw-card">

                        <div class="tsw-quote">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>

                        <p class="tsw-review">

                            "Professional, caring, and thorough.
                            My cataract surgery was quick and painless.
                            The follow-up care was exceptional."

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

                                <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="">

                            </div>

                            <div class="tsw-user-info">

                                <h5>Farhan Ahmad</h5>

                                <span>Hyderabad</span>

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

                            "Excellent doctors, friendly staff and
                            modern facilities. Everything from
                            consultation to surgery was smooth."

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

                                <img src="https://randomuser.me/api/portraits/women/42.jpg" alt="">

                            </div>

                            <div class="tsw-user-info">

                                <h5>Pooja Sharma</h5>

                                <span>Lucknow</span>

                            </div>

                        </div>

                        <div class="tsw-line"></div>

                        <span class="tsw-badge">
                            Retina Treatment
                        </span>

                    </div>

                </div>

                <!-- Card 5 -->

                <div class="swiper-slide">

                    <div class="tsw-card">

                        <div class="tsw-quote">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>

                        <p class="tsw-review">

                            "Highly recommended. The doctors explained
                            everything clearly and made me feel
                            comfortable throughout my treatment."

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

                                <img src="https://randomuser.me/api/portraits/men/71.jpg" alt="">

                            </div>

                            <div class="tsw-user-info">

                                <h5>Rahul Kapoor</h5>

                                <span>Jaipur</span>

                            </div>

                        </div>

                        <div class="tsw-line"></div>

                        <span class="tsw-badge">
                            LASIK Surgery
                        </span>

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

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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