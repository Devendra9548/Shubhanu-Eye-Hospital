@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/home.css">
<title>Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
<link rel="stylesheet" href="/assets/front/css/card-anime.css">
<link rel="stylesheet" href="/assets/front/css/slider.css">
<link rel="stylesheet" href="/assets/front/css/home.css">
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

<section class="shcta-section">
    <div class="container">
        <div class="shcta-wrapper">
            <div class="shcta-content">
                <span class="shcta-badge">
                    <i class="fas fa-eye"></i> Trusted Eye Care
                </span>

                <h2 class="shcta-title">
                    Experience Clear Vision with
                    <span>Expert Eye Specialists</span>
                </h2>

                <p class="shcta-text">
                    More than <strong>15,000 successful surgeries</strong> performed with
                    advanced technology and compassionate care. Book your consultation today.
                </p>
            </div>

            <div class="shcta-buttons">
                <a href="tel:+919876543210" class="shcta-btn shcta-primary">
                    <i class="fas fa-phone-alt"></i> Call Now
                </a>

                <a href="#appointment" class="shcta-btn shcta-secondary">
                    <i class="fas fa-calendar-check"></i> Book Appointment
                </a>
            </div>
        </div>
    </div>
</section>

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
@endsection