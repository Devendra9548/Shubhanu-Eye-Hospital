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

<section class="first-section py-5">
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
                                            vision, restoring natural appearance, and enhancing both eye function and
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
                                            tumors, fractures, and thyroid eye disease, restoring function, protecting
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
                                        <p>Comprehensive eye tumor treatment ensures early diagnosis and advanced care,
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
                                        <p>Advanced treatment for watering eyes addresses blocked tear ducts and other
                                            underlying causes, providing lasting relief, improved comfort, and healthier
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
                                        <p>Prompt treatment for ocular emergencies ensures rapid diagnosis and expert
                                            care, protecting vision, preventing complications, and supporting faster,
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
                                        <p>Neuro-ophthalmology diagnoses and treats vision problems caused by brain and
                                            nerve disorders, ensuring accurate care, timely intervention, and improved
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
                                            improving confidence, facial symmetry, comfort, and overall quality of life.
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
</section>

<script>
(function() {
    var $slides = document.querySelectorAll('.slide');
    var $controls = document.querySelectorAll('.slider__control');
    var numOfSlides = $slides.length;
    var slidingAT = 1300; // sync this with scss variable
    var slidingBlocked = false;

    [].slice.call($slides).forEach(function($el, index) {
        var i = index + 1;
        $el.classList.add('slide-' + i);
        $el.dataset.slide = i;
    });

    [].slice.call($controls).forEach(function($el) {
        $el.addEventListener('click', controlClickHandler);
    });

    function controlClickHandler() {
        if (slidingBlocked) return;
        slidingBlocked = true;

        var $control = this;
        var isRight = $control.classList.contains('m--right');
        var $curActive = document.querySelector('.slide.s--active');
        var index = +$curActive.dataset.slide;
        (isRight) ? index++ : index--;
        if (index < 1) index = numOfSlides;
        if (index > numOfSlides) index = 1;
        var $newActive = document.querySelector('.slide-' + index);

        $control.classList.add('a--rotation');
        $curActive.classList.remove('s--active', 's--active-prev');
        document.querySelector('.slide.s--prev').classList.remove('s--prev');

        $newActive.classList.add('s--active');
        if (!isRight) $newActive.classList.add('s--active-prev');


        var prevIndex = index - 1;
        if (prevIndex < 1) prevIndex = numOfSlides;

        document.querySelector('.slide-' + prevIndex).classList.add('s--prev');

        setTimeout(function() {
            $control.classList.remove('a--rotation');
            slidingBlocked = false;
        }, slidingAT * 0.75);
    };
}());
</script>
@endsection