@extends('templates.front.main')
@section('customcss')
<title>Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
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
                <h2 class="contact-sec-title">
                    Our Gallery
                </h2>
                <div class="contact-sec-divider"></div>
                <p class="contact-sec-subtitle">
                    There are many variations of passages of Lorem Ipsum available,
                    but the majority have suffered alteration in some form.
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