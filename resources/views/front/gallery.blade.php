@extends('templates.front.main')
@section('metainfo')
<title>Gallery | Shubhanu Eye Hospital</title>
<meta name="description" content="Explore the gallery of Shubhanu Eye Hospital, Haldwani, showcasing our modern eye care facilities, advanced technology, experienced team, and patient care environment.">
<meta name="keywords" content="Shubhanu Eye Hospital, Our Gallery, Eye Care Hospital, eye hospital in Haldwani, best eye hospital, eye specialist in Haldwani, eye care hospital, ophthalmology hospital, eye doctor, best eye doctor in Haldwani, cataract surgery, cataract treatment, advanced eye care, LASIK eye surgery, LASIK surgery in Haldwani, retina specialist, retina treatment, glaucoma treatment, glaucoma specialist, diabetic eye care, diabetic retinopathy treatment, pediatric eye care, eye checkup, comprehensive eye examination, refractive eye surgery, ICL eye surgery, squint eye treatment, cornea treatment, dry eye treatment, eye surgery in India, advanced eye hospital in India, super speciality eye hospital, comprehensive eye care, Retina & Vitreous Care, Orbit & Oculoplasty, Cornea Care, Glaucoma Care, Squint Care, Eye Trauma & Emergency, Cataract & Lens Surgery">
<meta name="author" content="Shubhanu Eye Hospital">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Gallery | Shubhanu Eye Hospital" />
<meta property="og:description" content="Explore the gallery of Shubhanu Eye Hospital, Haldwani, showcasing our modern eye care facilities, advanced technology, experienced team, and patient care environment." />
<meta property="og:url" content="https://shubhanueyehospital.com/gallery" />
<meta property="og:site_name" content="Shubhanu Eye Hospital" />
<meta property="og:image" content="https://shubhanueyehospital.com/assets/front/imgs/banners/1.webp" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="og:image:type" content="image/webp" />
<link rel="canonical" href="https://shubhanueyehospital.com/gallery" />
@endsection
@section('customcss')
<link rel="stylesheet" href="/assets/front/css/gallery.css">
@endsection

@section('body')

@php
$galleryImages = [];
for($i = 1; $i <= 12; $i++){ $galleryImages[]=asset("assets/front/imgs/gallery/{$i}.jpg"); } 
@endphp 

   <section class="gl3d-gallery-section py-5 pb-5">
    <div class="container-fluid pb-5">

        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h1 class="contact-sec-title">
                    Our Gallery
                </h1>
                <div class="contact-sec-divider"></div>
                <p class="contact-sec-subtitle">
                  EYE CAMP AT SHRI AGRAWAL DHARAMSHALA -RUDRAPUR
                </p>
            </div>
        </div>

        <!-- Gallery -->
        <div class="row g-4" id="galleryWrapper">
            @foreach($galleryImages as $index => $image)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="gl3d-gallery-item">
                    <img src="{{ $image }}" alt="Gallery Image {{ $index+1 }}" class="img-fluid gl3d-gallery-image"
                        loading="lazy">
                    <!-- Hover -->
                    <div class="gl3d-gallery-overlay" data-index="{{ $index }}" data-image="{{ $image }}">
                        <button class="gl3d-open-btn" type="button" aria-label="Open Image">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>



    <div class="gl3d-lightbox" id="gl3dLightbox">
        <button class="gl3d-close" id="gl3dClose">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <button class="gl3d-prev" id="gl3dPrev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>


        <button class="gl3d-next" id="gl3dNext">
            <i class="fa-solid fa-chevron-right"></i>
        </button>


        <div class="gl3d-image-wrapper">
            <img src="" id="gl3dPreview" alt="">
        </div>



    </div>
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const galleryItems = document.querySelectorAll(".gl3d-gallery-overlay");
        const lightbox = document.getElementById("gl3dLightbox");
        const preview = document.getElementById("gl3dPreview");
        const closeBtn = document.getElementById("gl3dClose");
        const prevBtn = document.getElementById("gl3dPrev");
        const nextBtn = document.getElementById("gl3dNext");
        const zoomIn = document.getElementById("zoomIn");
        const zoomOut = document.getElementById("zoomOut");
        const zoomReset = document.getElementById("zoomReset");
        let currentIndex = 0;
        let scale = 1;
        let images = [];
        galleryItems.forEach((item) => {
            images.push(item.dataset.image);
        });

        function showImage(index) {
            currentIndex = index;
            preview.src = images[index];
            scale = 1;
            updateZoom();
        }


        function updateZoom() {
            preview.style.transform = `scale(${scale})`;
        }

        galleryItems.forEach((item) => {
            item.addEventListener("click", () => {
                lightbox.classList.add("active");
                document.body.style.overflow = "hidden";
                showImage(parseInt(item.dataset.index));
            });
        });

        closeBtn.addEventListener("click", closeLightbox);
        function closeLightbox() {
            lightbox.classList.remove("active");
            document.body.style.overflow = "";
            scale = 1;
            updateZoom();
        }

        nextBtn.addEventListener("click", () => {
            currentIndex++;
            if (currentIndex >= images.length) {
                currentIndex = 0;
            }
            showImage(currentIndex);
        });

        prevBtn.addEventListener("click", () => {
            currentIndex--;
            if (currentIndex < 0) {
                currentIndex = images.length - 1;
            }
            showImage(currentIndex);
        });

        zoomIn.addEventListener("click", () => {
            scale += 0.2;
            if (scale > 5) {
                scale = 5;
            }

            updateZoom();

        });



        zoomOut.addEventListener("click", () => {
            scale -= 0.2;
            if (scale < 1) {
                scale = 1;
            }
            updateZoom();

        });

        zoomReset.addEventListener("click", () => {
            scale = 1;
            updateZoom();
        });

        preview.addEventListener("wheel", (e) => {
            e.preventDefault();
            if (e.deltaY < 0) {
                scale += 0.15;
            } else {
                scale -= 0.15;
            }
            if (scale < 1) {
                scale = 1;
            }
            if (scale > 5) {
                scale = 5;
            }
            updateZoom();
        });

        document.addEventListener("keydown", (e) => {
            if (!lightbox.classList.contains("active")) return;
            if (e.key === "Escape") {
                closeLightbox();
            }
            if (e.key === "ArrowRight") {
                nextBtn.click();
            }

            if (e.key === "ArrowLeft") {
                prevBtn.click();
            }

            if (e.key === "+") {
                zoomIn.click();
            }

            if (e.key === "-") {
                zoomOut.click();
            }

        });

        lightbox.addEventListener("click", (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        preview.addEventListener("dragstart", (e) => {
            e.preventDefault();
        });
    });
    </script>
    @endsection