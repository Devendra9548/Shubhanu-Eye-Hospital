@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/home.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<title>Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
<style>
    /*=========================
    Gallery Section
=========================*/

.eq-gallery-section{
    position:relative;
    overflow:hidden;
    background:#fff;
    z-index:1;
}

/* Floating Background */

.eq-gallery-section::before{
    content:"";
    position:absolute;
    width:420px;
    height:420px;
    background:linear-gradient(135deg,#0d6efd,#58d4ff);
    opacity:.08;
    border-radius:50%;
    top:-180px;
    left:-150px;
    filter:blur(70px);
    animation:eqFloat1 10s ease-in-out infinite;
}

.eq-gallery-section::after{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    background:linear-gradient(135deg,#00d084,#0d6efd);
    opacity:.08;
    border-radius:50%;
    bottom:-180px;
    right:-120px;
    filter:blur(70px);
    animation:eqFloat2 11s ease-in-out infinite;
}

@keyframes eqFloat1{

    0%,100%{
        transform:translateY(0px);
    }

    50%{
        transform:translateY(35px);
    }

}

@keyframes eqFloat2{

    0%,100%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-40px);
    }

}


/*=========================
    Heading
=========================*/

.eq-gallery-tag{

    display:inline-flex;
    align-items:center;
    padding:8px 18px;
    border-radius:100px;
    background:#eef6ff;
    color:#0d6efd;
    font-weight:600;
    letter-spacing:.5px;
    font-size:14px;

}

.eq-gallery-title{

    font-size:44px;
    font-weight:700;
    margin-bottom:18px;
    color:#1d1d1d;

}

.eq-gallery-desc{

    max-width:700px;
    margin:auto;
    color:#777;
    line-height:1.8;

}


/*=========================
    Filter Buttons
=========================*/

.eq-gallery-filter{

    display:flex;
    justify-content:center;
    gap:15px;
    flex-wrap:wrap;
    margin-bottom:50px;

}

.eq-gallery-filter button{

    border:none;
    background:#fff;
    padding:12px 24px;
    border-radius:50px;
    font-weight:600;
    transition:.35s;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    cursor:pointer;

}

.eq-gallery-filter button:hover{

    transform:translateY(-4px);
    color:#0d6efd;

}

.eq-gallery-filter button.active{

    background:#0d6efd;
    color:#fff;
    box-shadow:0 15px 35px rgba(13,110,253,.35);

}


/*=========================
    Gallery Card
=========================*/

.eq-gallery-card{

    display:block;
    position:relative;
    overflow:hidden;
    border-radius:24px;
    box-shadow:0 25px 45px rgba(0,0,0,.10);
    transition:.45s;
    background:#fff;

}

.eq-gallery-card img{

    width:100%;
    height:100%;
    object-fit:cover;
    transition:1s;
    display:block;

}


/* Different Heights */

.eq-gallery-grid .col-lg-6 .eq-gallery-card{

    height:500px;

}

.eq-gallery-grid .col-lg-4 .eq-gallery-card{

    height:320px;

}

.eq-gallery-grid .col-lg-3 .eq-gallery-card{

    height:240px;

}


/* Hover */

.eq-gallery-card:hover{

    transform:translateY(-12px);

}

.eq-gallery-card:hover img{

    transform:scale(1.12) rotate(2deg);

}


/*=========================
    Overlay
=========================*/

.eq-gallery-overlay{

    position:absolute;
    inset:0;
    background:linear-gradient(to top,
        rgba(0,0,0,.82),
        rgba(0,0,0,.08));

    display:flex;
    align-items:flex-end;
    justify-content:flex-start;

    padding:35px;
    opacity:0;
    transition:.45s;

}

.eq-gallery-card:hover .eq-gallery-overlay{

    opacity:1;

}

.eq-gallery-overlay div{

    transform:translateY(40px);
    transition:.45s;

}

.eq-gallery-card:hover .eq-gallery-overlay div{

    transform:translateY(0);

}

.eq-gallery-overlay i{

    width:60px;
    height:60px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#fff;
    color:#0d6efd;
    font-size:20px;
    margin-bottom:18px;

}

.eq-gallery-overlay h5{

    color:#fff;
    margin:0;
    font-size:22px;
    font-weight:600;

}


/*=========================
    Floating Animation
=========================*/

.gallery-item{

    animation:eqGalleryFloat 6s ease-in-out infinite;

}

.gallery-item:nth-child(2){

    animation-delay:.5s;

}

.gallery-item:nth-child(3){

    animation-delay:1s;

}

.gallery-item:nth-child(4){

    animation-delay:1.5s;

}

.gallery-item:nth-child(5){

    animation-delay:2s;

}

.gallery-item:nth-child(6){

    animation-delay:2.5s;

}

@keyframes eqGalleryFloat{

    0%,100%{

        transform:translateY(0px);

    }

    50%{

        transform:translateY(-10px);

    }

}


/*=========================
    Responsive
=========================*/

@media(max-width:991px){

    .eq-gallery-title{

        font-size:34px;

    }

    .eq-gallery-grid .eq-gallery-card{

        height:300px !important;

    }

}

@media(max-width:767px){

    .eq-gallery-title{

        font-size:28px;

    }

    .eq-gallery-filter{

        gap:10px;

    }

    .eq-gallery-filter button{

        padding:10px 18px;
        font-size:14px;

    }

}
</style>
@endsection
@section('body')
<section class="eq-gallery-section py-5">
    <div class="container">

        <div class="text-center mb-5">

            <span class="eq-gallery-tag">
                Gallery
            </span>

            <h2 class="eq-gallery-title mt-3">
                Experience Our World Through Images
            </h2>

            <p class="eq-gallery-desc">
                Explore our hospital facilities, advanced equipment,
                expert doctors, successful treatments, and patient care moments.
            </p>

        </div>

        <!-- Filter Buttons -->

        <div class="eq-gallery-filter">

            <button class="active" data-filter="all">
                All
            </button>

            <button data-filter="hospital">
                Hospital
            </button>

            <button data-filter="doctor">
                Doctors
            </button>

            <button data-filter="equipment">
                Equipment
            </button>

            <button data-filter="patients">
                Patients
            </button>

        </div>


        <div class="row g-4 eq-gallery-grid">

            <!-- Large -->

            <div class="col-lg-6 col-md-6 gallery-item hospital">

                <a href="https://picsum.photos/900/700?random=1"
                    class="eq-gallery-card glightbox">

                    <img src="https://picsum.photos/900/700?random=1"
                        class="img-fluid"
                        alt="">

                    <div class="eq-gallery-overlay">

                        <div>

                            <i class="fa-solid fa-expand"></i>

                            <h5>Hospital Building</h5>

                        </div>

                    </div>

                </a>

            </div>

            <!-- Small -->

            <div class="col-lg-3 col-md-6 gallery-item doctor">

                <a href="https://picsum.photos/900/700?random=1"
                    class="eq-gallery-card glightbox">

                    <img src="https://picsum.photos/900/700?random=1"
                        class="img-fluid"
                        alt="">

                    <div class="eq-gallery-overlay">

                        <div>

                            <i class="fa-solid fa-expand"></i>

                            <h5>Our Doctors</h5>

                        </div>

                    </div>

                </a>

            </div>


            <div class="col-lg-3 col-md-6 gallery-item equipment">

                <a href="https://picsum.photos/900/700?random=1"
                    class="eq-gallery-card glightbox">

                    <img src="https://picsum.photos/900/700?random=1"
                        class="img-fluid"
                        alt="">

                    <div class="eq-gallery-overlay">

                        <div>

                            <i class="fa-solid fa-expand"></i>

                            <h5>Equipment</h5>

                        </div>

                    </div>

                </a>

            </div>


            <div class="col-lg-4 col-md-6 gallery-item patients">

                <a href="https://picsum.photos/900/700?random=1"
                    class="eq-gallery-card glightbox">

                    <img src="https://picsum.photos/900/700?random=1"
                        class="img-fluid"
                        alt="">

                    <div class="eq-gallery-overlay">

                        <div>

                            <i class="fa-solid fa-expand"></i>

                            <h5>Patients</h5>

                        </div>

                    </div>

                </a>

            </div>


            <div class="col-lg-4 col-md-6 gallery-item equipment">

                <a href="https://picsum.photos/900/700?random=1"
                    class="eq-gallery-card glightbox">

                    <img src="https://picsum.photos/900/700?random=1"
                        class="img-fluid"
                        alt="">

                    <div class="eq-gallery-overlay">

                        <div>

                            <i class="fa-solid fa-expand"></i>

                            <h5>Eye Machine</h5>

                        </div>

                    </div>

                </a>

            </div>


            <div class="col-lg-4 col-md-12 gallery-item hospital">

                <a href="https://picsum.photos/900/700?random=1"
                    class="eq-gallery-card glightbox">

                    <img src="https://picsum.photos/900/700?random=1"
                        class="img-fluid"
                        alt="">

                    <div class="eq-gallery-overlay">

                        <div>

                            <i class="fa-solid fa-expand"></i>

                            <h5>Reception</h5>

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </div>
</section>
<script>
const lightbox = GLightbox({
    selector: '.glightbox'
});
document.addEventListener("DOMContentLoaded", function () {

    /*=====================================
        Scroll Reveal
    =====================================*/

    const galleryItems = document.querySelectorAll(".gallery-item");

    galleryItems.forEach((item, index) => {

        item.style.opacity = "0";
        item.style.transform = "translateY(80px) scale(.95)";
        item.style.transition =
            "opacity .8s ease, transform .8s cubic-bezier(.17,.67,.35,1.3)";

        item.style.transitionDelay = (index * 0.12) + "s";

    });

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0) scale(1)";

                observer.unobserve(entry.target);

            }

        });

    }, {
        threshold: .15
    });

    galleryItems.forEach(item => observer.observe(item));



    /*=====================================
        Filter Gallery
    =====================================*/

    const buttons = document.querySelectorAll(".eq-gallery-filter button");

    buttons.forEach(button => {

        button.addEventListener("click", function () {

            buttons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");

            let filter = this.dataset.filter;

            galleryItems.forEach(item => {

                if (filter === "all" || item.classList.contains(filter)) {

                    item.style.display = "";

                    setTimeout(() => {

                        item.style.opacity = "1";
                        item.style.transform = "scale(1)";

                    }, 100);

                } else {

                    item.style.opacity = "0";
                    item.style.transform = "scale(.8)";

                    setTimeout(() => {

                        item.style.display = "none";

                    }, 300);

                }

            });

        });

    });



    /*=====================================
        3D Tilt Effect
    =====================================*/

    const cards = document.querySelectorAll(".eq-gallery-card");

    cards.forEach(card => {

        card.addEventListener("mousemove", function (e) {

            const rect = this.getBoundingClientRect();

            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateY = (x - centerX) / 18;
            const rotateX = (centerY - y) / 18;

            this.style.transform =
                `perspective(1000px)
                 rotateX(${rotateX}deg)
                 rotateY(${rotateY}deg)
                 translateY(-10px)
                 scale(1.03)`;

        });

        card.addEventListener("mouseleave", function () {

            this.style.transform =
                "perspective(1000px) rotateX(0) rotateY(0) translateY(0) scale(1)";

        });

    });



    /*=====================================
        Mouse Parallax
    =====================================*/

    const section = document.querySelector(".eq-gallery-section");

    if(section){

        section.addEventListener("mousemove", function(e){

            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;

            galleryItems.forEach((item,index)=>{

                const speed=(index%5+1)*4;

                item.style.transform +=
                    ` translate(${(x-.5)*speed}px, ${(y-.5)*speed}px)`;

            });

        });

    }



    /*=====================================
        GLightbox
    =====================================*/

    if(typeof GLightbox !== "undefined"){

        GLightbox({

            selector:".glightbox",
            touchNavigation:true,
            loop:true,
            zoomable:true,
            autoplayVideos:true

        });

    }

});
</script>
@endsection
