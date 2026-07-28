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
/*==============================
    BLOG SECTION
==============================*/

.zbg-blog-section{
    background:#fff;
    position:relative;
    overflow:hidden;
}

.zbg-blog-subtitle{
    display:inline-block;
    font-size:14px;
    font-weight:700;
    letter-spacing:1px;
    text-transform:uppercase;
    color:#0c4b8d;
    margin-bottom:12px;
}

.zbg-blog-title{
    font-size:46px;
    font-weight:800;
    color:#0c3d79;
    margin-bottom:18px;
    text-transform:uppercase;
    line-height:1.2;
}

.zbg-blog-divider{
    width:70px;
    height:2px;
    background:#0c4b8d;
    margin:0 auto;
}


/*==============================
    BLOG ITEM
==============================*/

.zbg-blog-item{
    display:flex;
    align-items:flex-start;
    gap:28px;
    transition:.35s;
}

.zbg-blog-item:hover{
    transform:translateY(-6px);
}


/*==============================
    IMAGE
==============================*/

.zbg-blog-thumb{
    flex:0 0 280px;
    max-width:280px;
}

.zbg-blog-thumb img{
    width:100%;
    height:190px;
    object-fit:cover;
    border-radius:8px;
    display:block;
    transition:.4s;
}

.zbg-blog-item:hover .zbg-blog-thumb img{
    transform:scale(1.05);
}


/*==============================
    CONTENT
==============================*/

.zbg-blog-content{
    flex:1;
}

.zbg-blog-post-title{
    margin:0 0 12px;
    font-size:36px;
    line-height:1.25;
    font-weight:700;
}

.zbg-blog-post-title a{
    color:#0b3f7a;
    text-decoration:none;
    transition:.3s;
}

.zbg-blog-post-title a:hover{
    color:#08617e;
}

.zbg-blog-meta{
    display:flex;
    align-items:center;
    flex-wrap:wrap;
    gap:8px;
    font-size:14px;
    color:#8d96a5;
    margin-bottom:18px;
}

.zbg-blog-dot{
    font-size:12px;
    color:#8d96a5;
}

.zbg-blog-content p{
    margin:0;
    color:#6f7d91;
    font-size:18px;
    line-height:1.8;
}


/*==============================
    RESPONSIVE
==============================*/

@media(max-width:1199px){

    .zbg-blog-thumb{
        flex:0 0 240px;
        max-width:240px;
    }

    .zbg-blog-thumb img{
        height:170px;
    }

    .zbg-blog-post-title{
        font-size:30px;
    }

}

@media(max-width:991px){

    .zbg-blog-item{
        flex-direction:column;
    }

    .zbg-blog-thumb{
        width:100%;
        max-width:100%;
    }

    .zbg-blog-thumb img{
        width:100%;
        height:250px;
    }

    .zbg-blog-title{
        font-size:38px;
    }

    .zbg-blog-post-title{
        font-size:28px;
    }

}

@media(max-width:767px){

    .zbg-blog-title{
        font-size:30px;
    }

    .zbg-blog-thumb img{
        height:220px;
    }

    .zbg-blog-post-title{
        font-size:24px;
    }

    .zbg-blog-content p{
        font-size:16px;
    }

}

@media(max-width:575px){

    .zbg-blog-thumb img{
        height:200px;
    }

    .zbg-blog-title{
        font-size:26px;
    }

    .zbg-blog-post-title{
        font-size:22px;
    }

}



/*==================================================
    Eye Specialist Section
==================================================*/

.esec-section{
    position:relative;
    overflow:hidden;
    background:#f8fbff;
    padding:90px 0;
}

/* Background Shape */

.esec-section::before{
    content:"";
    position:absolute;
    top:0;
    left:50%;
    transform:translateX(-50%);
    width:220px;
    height:220px;
    background:rgba(8,97,126,.05);
    border-radius:50%;
    filter:blur(60px);
}

.esec-subtitle{
    display:block;
    font-size:90px;
    font-weight:800;
    color:#edf2f7;
    line-height:1;
    position:absolute;
    left:50%;
    transform:translateX(-50%);
    margin-top:-25px;
    user-select:none;
    z-index:0;
}

.esec-title{
    position:relative;
    z-index:2;
    font-size:42px;
    font-weight:700;
    color:#123c72;
    margin-bottom:15px;
}

.esec-title-line{
    width:80px;
    height:4px;
    margin:auto;
    border-radius:30px;
    background:#14c38e;
    position:relative;
    overflow:hidden;
}

.esec-title-line::after{
    content:"";
    position:absolute;
    left:-40px;
    top:0;
    width:40px;
    height:100%;
    background:#fff;
    animation:esec-lineMove 2.5s linear infinite;
}

@keyframes esec-lineMove{
    100%{
        left:100%;
    }
}

.esec-description{
    color:#6c757d;
    max-width:720px;
    margin:auto;
}

/*==============================
Left Side
==============================*/

.esec-main-wrapper{
    margin-top:70px;
}

.esec-image-box{
    overflow:hidden;
    border-radius:8px;
    position:relative;
    box-shadow:0 18px 45px rgba(0,0,0,.08);
}

.esec-image-box img{
    transition:.7s;
    display:block;
}

.esec-image-box:hover img{
    transform:scale(1.08);
}

/* Floating Animation */

.esec-image-box{
    animation:esecFloat 5s ease-in-out infinite;
}

@keyframes esecFloat{

    0%{
        transform:translateY(0px);
    }

    50%{
        transform:translateY(-12px);
    }

    100%{
        transform:translateY(0px);
    }

}

/* Vertical Text */

.esec-vertical-text{
    position:absolute;
    left:-70px;
    top:50%;
    transform:translateY(-50%);
    width:70px;
    height:82%;
    background:#fff;
    box-shadow:0 10px 35px rgba(0,0,0,.08);
    display:flex;
    justify-content:center;
    align-items:center;
    z-index:3;
}

.esec-vertical-text span{

    writing-mode:vertical-rl;
    transform:rotate(180deg);
    font-size:22px;
    font-weight:600;
    color:#0b3d77;
    text-align:center;
    line-height:1.5;

}

.esec-vertical-text span::after{
    content:"";
    color:#14c38e;
}

.esec-vertical-text strong{
    color:#14c38e;
}

/*==============================
Right Card
==============================*/

.esec-content-card{

    background:#fff;
    padding:55px;
    border-radius:10px;
    box-shadow:0 18px 55px rgba(0,0,0,.08);
    transition:.4s;
    position:relative;
    overflow:hidden;

}

.esec-content-card:hover{

    transform:translateY(-8px);

}

.esec-content-card::before{

    content:"";
    position:absolute;
    top:0;
    left:0;
    width:6px;
    height:100%;
    background:#14c38e;

}

.esec-card-title{

    font-size:38px;
    font-weight:700;
    color:#143d74;
    line-height:1.35;
    margin-bottom:25px;

}

.esec-card-title span{

    color:#14c38e;

}

.esec-card-text{

    color:#6f7d8a;
    line-height:1.9;
    margin-bottom:35px;

}

/*==============================
List
==============================*/

.esec-list li{

    display:flex;
    align-items:flex-start;
    gap:15px;
    margin-bottom:18px;
    color:#394657;
    font-size:17px;
    transition:.35s;

}

.esec-list li:hover{

    transform:translateX(8px);

}

.esec-list i{

    color:#14c38e;
    margin-top:5px;
    font-size:18px;

}

/*==============================
Button
==============================*/

.esec-btn{

    background:#123c72;
    color:#fff;
    border-radius:50px;
    padding:15px 34px;
    font-weight:600;
    position:relative;
    overflow:hidden;
    transition:.4s;

}

.esec-btn:hover{

    color:#fff;
    transform:translateY(-3px);
    background:#14c38e;

}

.esec-btn::before{

    content:"";
    position:absolute;
    top:0;
    left:-100%;
    width:100%;
    height:100%;
    background:rgba(255,255,255,.25);
    transform:skewX(-30deg);
    transition:.7s;

}

.esec-btn:hover::before{

    left:130%;

}

/*==============================
Responsive
==============================*/

@media(max-width:991px){

    .esec-subtitle{
        display:none;
    }

    .esec-title{
        font-size:32px;
    }

    .esec-content-card{
        margin-top:40px;
        padding:35px;
    }

    .esec-card-title{
        font-size:28px;
    }

    .esec-vertical-text{
        display:none;
    }

}

@media(max-width:767px){

    .esec-section{
        padding:70px 0;
    }

    .esec-title{
        font-size:28px;
    }

    .esec-card-title{
        font-size:24px;
    }

    .esec-content-card{
        padding:25px;
    }

    .esec-btn{
        width:100%;
        text-align:center;
    }

}


/*====================================================
        Equipment Showcase Section
====================================================*/

.eqshow-section{
    position:relative;
    padding:100px 0;
    background:#f8fbff;
    overflow:hidden;
}

/* Background */

.eqshow-section::before{
    content:"";
    position:absolute;
    width:650px;
    height:650px;
    background:radial-gradient(circle,#08617e15 0%,transparent 70%);
    top:-220px;
    left:-180px;
    border-radius:50%;
}

.eqshow-section::after{
    content:"";
    position:absolute;
    width:500px;
    height:500px;
    background:radial-gradient(circle,#0dcaf015 0%,transparent 70%);
    bottom:-200px;
    right:-180px;
    border-radius:50%;
}

/* Heading */

.eqshow-bg-text{
    position:absolute;
    left:50%;
    transform:translateX(-50%);
    top:-35px;
    font-size:110px;
    font-weight:800;
    color:#edf3f7;
    white-space:nowrap;
    pointer-events:none;
    user-select:none;
    z-index:0;
}

.eqshow-subtitle{
    display:block;
    color:#08617e;
    font-size:18px;
    letter-spacing:1px;
    font-weight:600;
    margin-bottom:10px;
    position:relative;
    z-index:2;
}

.eqshow-title{
    font-size:48px;
    font-weight:700;
    color:#22304a;
    position:relative;
    z-index:2;
}

.eqshow-divider{
    width:70px;
    height:4px;
    background:#08617e;
    border-radius:30px;
    margin:18px auto;
    position:relative;
    overflow:hidden;
}

.eqshow-divider::before{
    content:"";
    position:absolute;
    left:-35px;
    top:0;
    width:35px;
    height:100%;
    background:#fff;
    animation:eqshowLine 2s linear infinite;
}

@keyframes eqshowLine{
    to{
        left:110%;
    }
}

.eqshow-desc{
    color:#6b7280;
    max-width:700px;
    margin:auto;
}

/*====================================================
        Image Area
====================================================*/

.eqshow-image-area{
    position:relative;
    text-align:center;
    min-height:520px;
    display:flex;
    justify-content:center;
    align-items:center;
}

.eqshow-glow{
    position:absolute;
    width:420px;
    height:420px;
    background:radial-gradient(circle,#0dcaf030 0%,transparent 70%);
    border-radius:50%;
    animation:eqshowGlow 4s ease-in-out infinite;
}

@keyframes eqshowGlow{

    0%,100%{
        transform:scale(1);
        opacity:.7;
    }

    50%{
        transform:scale(1.12);
        opacity:1;
    }

}

.eqshow-image-area img{
    max-width:85%;
    position:relative;
    z-index:2;
    animation:eqshowFloat 5s ease-in-out infinite;
    transition:.5s;
    filter:drop-shadow(0 25px 40px rgba(0,0,0,.15));
}

.eqshow-image-area:hover img{
    transform:scale(1.05);
}

@keyframes eqshowFloat{

    0%,100%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-18px);
    }

}

/*====================================================
        Content
====================================================*/

.eqshow-content{

    background:rgba(255,255,255,.75);
    backdrop-filter:blur(12px);
    border-radius:20px;
    padding:45px;
    box-shadow:0 20px 60px rgba(0,0,0,.08);
    border:1px solid rgba(255,255,255,.5);

}

.eqshow-tag{

    display:inline-block;
    padding:8px 18px;
    background:#08617e;
    color:#fff;
    border-radius:50px;
    font-size:14px;
    margin-bottom:20px;

}

.eqshow-content h3{

    font-size:38px;
    font-weight:700;
    color:#22304a;
    margin-bottom:20px;

}

.eqshow-content p{

    color:#6b7280;
    line-height:1.9;
    margin-bottom:30px;

}

/*====================================================
        Features
====================================================*/

.eqshow-features{
    display:flex;
    flex-direction:column;
    gap:18px;
}

.eqshow-feature{

    display:flex;
    align-items:center;
    gap:15px;
    font-weight:500;
    color:#3d4b63;
    transition:.35s;

}

.eqshow-feature:hover{

    transform:translateX(10px);

}

.eqshow-feature i{

    width:34px;
    height:34px;
    background:#08617e;
    color:#fff;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:15px;

}

/*====================================================
        Button
====================================================*/

.eqshow-btn{

    background:#08617e;
    color:#fff;
    border-radius:50px;
    padding:14px 34px;
    font-weight:600;
    transition:.35s;
    overflow:hidden;
    position:relative;

}

.eqshow-btn:hover{

    background:#0a7fa3;
    color:#fff;
    transform:translateY(-3px);

}

/*====================================================
        Bottom Navigation
====================================================*/

.eqshow-nav{

    display:flex;
    gap:18px;
    overflow-x:auto;
    padding:10px 5px;
    scrollbar-width:none;

}

.eqshow-nav::-webkit-scrollbar{
    display:none;
}

.eqshow-item{

    min-width:130px;
    border:none;
    background:#fff;
    border-radius:18px;
    padding:18px 12px;
    box-shadow:0 12px 30px rgba(0,0,0,.08);
    transition:.35s;
    cursor:pointer;
    text-align:center;
    flex-shrink:0;

}

.eqshow-item img{

    width:65px;
    height:65px;
    object-fit:contain;
    transition:.4s;

}

.eqshow-item span{

    display:block;
    margin-top:12px;
    font-weight:600;
    color:#22304a;
    font-size:15px;

}

.eqshow-item:hover{

    transform:translateY(-8px);

}

.eqshow-item:hover img{

    transform:scale(1.12) rotate(5deg);

}

.eqshow-item.active{

    background:#08617e;

}

.eqshow-item.active span{

    color:#fff;

}

/*====================================================
        Progress
====================================================*/

.eqshow-progress{

    width:100%;
    height:4px;
    background:#dbe6ec;
    border-radius:20px;
    margin-top:30px;
    overflow:hidden;

}

.eqshow-progress-bar{

    display:block;
    width:25%;
    height:100%;
    background:#08617e;
    border-radius:20px;
    transition:.5s;

}

/*====================================================
        Responsive
====================================================*/

@media(max-width:991px){

    .eqshow-bg-text{
        display:none;
    }

    .eqshow-title{
        font-size:36px;
    }

    .eqshow-image-area{
        min-height:380px;
    }

    .eqshow-content{
        padding:30px;
    }

    .eqshow-content h3{
        font-size:30px;
    }

}

@media(max-width:767px){

    .eqshow-title{
        font-size:30px;
    }

    .eqshow-content{
        padding:25px;
    }

    .eqshow-content h3{
        font-size:24px;
    }

    .eqshow-item{
        min-width:110px;
    }

    .eqshow-item img{
        width:50px;
        height:50px;
    }

    .eqshow-btn{
        width:100%;
    }

}


.eqshow-content h3,
.eqshow-content p,
.eqshow-features,
#eqshowMainImage{
    transition:.45s ease;
}

.eqshow-item.active{
    transform:translateY(-12px);
    box-shadow:0 20px 45px rgba(8,97,126,.35);
}

.eqshow-item.active img{
    transform:scale(1.1);
}

.eqshow-item.active::before{
    content:"";
    position:absolute;
    inset:0;
    border:2px solid rgba(255,255,255,.2);
    border-radius:18px;
}

.eqshow-item{
    position:relative;
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

<!--==============================
    Eye Specialist Section Start
===============================-->
<section class="esec-section py-5">
    <div class="container">

        <!-- Heading -->
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="esec-subtitle">Our Experts</span>

                <h2 class="esec-title">
                    Service Experts Eye Special.
                </h2>

                <div class="esec-title-line"></div>

                <p class="esec-description mt-3">
                    At Optrica we value our patients' overall health and encourage
                    our patients to visit their primary care doctor annually.
                </p>
            </div>
        </div>

        <!-- Content -->
        <div class="row align-items-center mt-5 g-0 esec-main-wrapper">

            <!-- Left -->
            <div class="col-lg-6 position-relative">

                <!-- Vertical Label -->
                <div class="esec-vertical-text">
                    <span>
                        Get The Right Optometrist Care Book With Our Doctors.
                    </span>
                </div>

                <!-- Doctor Image -->
                <div class="esec-image-box">
                    <img src="/assets/front/imgs/doctors/dr-bhanu-pratap-singh-pangtey.png"
                        class="img-fluid w-100"
                        alt="Eye Specialist">
                </div>

            </div>

            <!-- Right -->
            <div class="col-lg-6">

                <div class="esec-content-card">

                    <h3 class="esec-card-title">
                        Eye Care Services For Adults
                        And Children's
                        <span>Clinic</span>
                    </h3>

                    <p class="esec-card-text">
                        You are nothing without your set eyes care set in
                        consectetur elit, do eiusmod tempor incididunt ut labore
                        dolore aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip.
                    </p>

                    <!-- List -->
                    <ul class="esec-list list-unstyled">

                        <li>
                            <i class="fas fa-check"></i>
                            Drawing up an individual treatment program for patient.
                        </li>

                        <li>
                            <i class="fas fa-check"></i>
                            Performing all operations &amp; procedures in professional level.
                        </li>

                        <li>
                            <i class="fas fa-check"></i>
                            Compliance of medical equipment international standards.
                        </li>

                    </ul>

                    <a href="#" class="btn esec-btn">
                        Book Appointment
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>
<!--==============================
    Eye Specialist Section End
===============================-->


<!--=========================================
    Equipment Showcase Section Start
==========================================-->
<section class="eqshow-section py-5">

    <div class="container">

        <!-- Heading -->
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">

                <span class="eqshow-bg-text">
                    Equipment
                </span>

                <span class="eqshow-subtitle">
                    Advanced Eye Technology
                </span>

                <h2 class="eqshow-title">
                    Our Advanced Equipment
                </h2>

                <div class="eqshow-divider"></div>

                <p class="eqshow-desc">
                    We use the latest ophthalmology technology to provide
                    accurate diagnosis and advanced treatment for every patient.
                </p>

            </div>
        </div>

        <!-- Main Showcase -->
        <div class="row align-items-center mt-5 gy-5">

            <!-- Left Image -->
            <div class="col-lg-6">

                <div class="eqshow-image-area">

                    <!-- Glow -->
                    <span class="eqshow-glow"></span>

                    <!-- Equipment Image -->
                    <img
                        id="eqshowMainImage"
                        src="assets/images/equipment/oct.png"
                        class="img-fluid"
                        alt="Equipment">

                </div>

            </div>

            <!-- Right Content -->
            <div class="col-lg-6">

                <div class="eqshow-content">

                    <span class="eqshow-tag">
                        Premium Eye Technology
                    </span>

                    <h3 id="eqshowTitle">
                        Topcon OCT Maestro 2
                    </h3>

                    <p id="eqshowDescription">
                        High precision OCT imaging system designed to capture
                        retina, optic nerve and macula scans with excellent
                        clarity and speed.
                    </p>

                    <!-- Features -->

                    <div class="eqshow-features">

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            AI Assisted Imaging
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            Ultra Fast Scan
                        </div>

                        <div class="eqshow-feature">
                            <i class="fa-solid fa-circle-check"></i>
                            High Resolution Images
                        </div>

                    </div>

                    <a href="#" class="btn eqshow-btn mt-4">
                        Explore Equipment
                    </a>

                </div>

            </div>

        </div>

        <!-- Equipment Navigation -->

        <div class="row mt-5">

            <div class="col-12">

                <div class="eqshow-nav">

                    <!-- Item -->

                    <button
                        class="eqshow-item active"
                        data-index="0">

                        <img src="assets/images/equipment/oct.png" alt="">

                        <span>OCT</span>

                    </button>

                    <button
                        class="eqshow-item"
                        data-index="1">

                        <img src="assets/images/equipment/fundus.png" alt="">

                        <span>Fundus</span>

                    </button>

                    <button
                        class="eqshow-item"
                        data-index="2">

                        <img src="assets/images/equipment/laser.png" alt="">

                        <span>Laser</span>

                    </button>

                    <button
                        class="eqshow-item"
                        data-index="3">

                        <img src="assets/images/equipment/retina.png" alt="">

                        <span>Retina</span>

                    </button>

                    <button
                        class="eqshow-item"
                        data-index="4">

                        <img src="assets/images/equipment/slitlamp.png" alt="">

                        <span>Slit Lamp</span>

                    </button>

                    <button
                        class="eqshow-item"
                        data-index="5">

                        <img src="assets/images/equipment/phaco.png" alt="">

                        <span>Phaco</span>

                    </button>

                    <button
                        class="eqshow-item"
                        data-index="6">

                        <img src="assets/images/equipment/topography.png" alt="">

                        <span>Topography</span>

                    </button>

                    <button
                        class="eqshow-item"
                        data-index="7">

                        <img src="assets/images/equipment/yaglaser.png" alt="">

                        <span>YAG Laser</span>

                    </button>

                    <button
                        class="eqshow-item"
                        data-index="8">

                        <img src="assets/images/equipment/microscope.png" alt="">

                        <span>Microscope</span>

                    </button>

                </div>

            </div>

        </div>

        <!-- Progress -->
        <div class="eqshow-progress">
            <span class="eqshow-progress-bar"></span>
        </div>

    </div>

</section>
<!--=========================================
    Equipment Showcase Section End
==========================================-->

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

<section class="zbg-blog-section py-5">
    <div class="container">

        <!-- Section Heading -->
        <div class="row">
            <div class="col-12 text-center mb-5">
                <span class="zbg-blog-subtitle">RECENT POSTS</span>

                <h2 class="zbg-blog-title">
                    FROM OUR BLOG
                </h2>

                <div class="zbg-blog-divider"></div>
            </div>
        </div>

        <div class="row g-5">

            <!-- Blog Item -->
            <div class="col-lg-6">
                <div class="zbg-blog-item">

                    <div class="zbg-blog-thumb">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1588776814546-daab30f310ce?w=800"
                                alt="">
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
                            Find out what microplastics are doing to your health...
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
                                alt="">
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
                            expect before, during and after a breast biopsy...
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
                                alt="">
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
                            Here's what you need to know about the warning signs...
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
                                alt="">
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
                            steps to prevent them...
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
                                    <button type="submit" class="btn shbapp-btn">Book An Appointment <i class="fa-solid fa-arrow-right-long"></i></button>
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
document.addEventListener("DOMContentLoaded", function () {

    const equipments = [
        {
            image: "assets/images/equipment/oct.png",
            title: "Topcon OCT Maestro 2",
            desc: "High precision OCT imaging system for retina, optic nerve and macula analysis with AI-assisted scanning.",
            features: [
                "AI Assisted Imaging",
                "Ultra Fast Scan",
                "High Resolution Images"
            ]
        },
        {
            image: "assets/images/equipment/fundus.png",
            title: "Fundus Camera",
            desc: "Captures detailed retinal images for accurate diagnosis and long-term eye health monitoring.",
            features: [
                "Crystal Clear Retina Images",
                "Non Contact Capture",
                "Quick Patient Workflow"
            ]
        },
        {
            image: "assets/images/equipment/laser.png",
            title: "Green Laser System",
            desc: "Advanced laser technology for safe and effective retinal treatment procedures.",
            features: [
                "Precision Treatment",
                "Fast Procedure",
                "Minimal Recovery"
            ]
        },
        {
            image: "assets/images/equipment/retina.png",
            title: "Retina Scanner",
            desc: "Provides detailed retinal imaging for comprehensive eye examinations.",
            features: [
                "High Accuracy",
                "3D Retina Mapping",
                "Reliable Diagnosis"
            ]
        },
        {
            image: "assets/images/equipment/slitlamp.png",
            title: "Digital Slit Lamp",
            desc: "Detailed examination of the anterior and posterior segments of the eye.",
            features: [
                "Digital Imaging",
                "Excellent Magnification",
                "Comfortable Examination"
            ]
        },
        {
            image: "assets/images/equipment/phaco.png",
            title: "Phaco Machine",
            desc: "Modern cataract surgery machine ensuring precision and patient safety.",
            features: [
                "Micro Incision",
                "Smooth Surgery",
                "Rapid Recovery"
            ]
        },
        {
            image: "assets/images/equipment/topography.png",
            title: "Corneal Topography",
            desc: "Advanced corneal mapping technology for LASIK and keratoconus evaluation.",
            features: [
                "Color Mapping",
                "High Precision",
                "Fast Analysis"
            ]
        },
        {
            image: "assets/images/equipment/yaglaser.png",
            title: "YAG Laser",
            desc: "Reliable laser solution for posterior capsulotomy and glaucoma treatment.",
            features: [
                "Non-Invasive",
                "Quick Procedure",
                "Excellent Outcomes"
            ]
        },
        {
            image: "assets/images/equipment/microscope.png",
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

            equipments[index].features.forEach(function(feature){

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

        },300);

        current = index;

        startProgress();

    }

    function nextEquipment(){

        current++;

        if(current >= equipments.length){
            current = 0;
        }

        showEquipment(current);

    }

    function startAuto(){

        clearInterval(timer);

        timer = setInterval(nextEquipment,5000);

    }

    function startProgress(){

        clearInterval(progressTimer);

        progress.style.transition = "none";
        progress.style.width = "0%";

        setTimeout(function(){

            progress.style.transition = "width 5s linear";
            progress.style.width = "100%";

        },50);

    }

    items.forEach(function(button){

        button.addEventListener("click",function(){

            showEquipment(parseInt(this.dataset.index));

            startAuto();

        });

    });

    image.style.transition=".45s";
    title.style.transition=".45s";
    desc.style.transition=".45s";
    featureBox.style.transition=".45s";

    showEquipment(0);

    startAuto();

});
</script>
@endsection