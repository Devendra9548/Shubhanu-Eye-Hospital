@extends('templates.front.main')
@section('customcss')
<title>Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
<style>
.gl3d-gallery-section {
    position: relative;
    background: #f8f9fb;
    overflow: hidden;
}

.gl3d-gallery-section::before {
    content: "";
    position: absolute;
    width: 500px;
    height: 500px;
    background: #0d6efd10;
    border-radius: 50%;
    top: -200px;
    left: -150px;
    filter: blur(120px);
}

.gl3d-gallery-section::after {
    content: "";
    position: absolute;
    width: 500px;
    height: 500px;
    background: #6610f210;
    border-radius: 50%;
    right: -150px;
    bottom: -200px;
    filter: blur(120px);
}


.gl3d-gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 22px;
    background: #fff;
    cursor: pointer;
    box-shadow: 0 12px 40px rgba(0, 0, 0, .08);
    transition: .45s;
}

.gl3d-gallery-item img {
    width: 100%;
    height: 330px;
    object-fit: cover;
    transition: .6s ease;
    display: block;
}

.gl3d-gallery-overlay {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(10, 15, 30, .28);
    backdrop-filter: blur(4px);
    opacity: 0;
    transition: .4s;
}

.gl3d-open-btn {
    width: 72px;
    height: 72px;
    border-radius: 50%;
    border: none;
    background: #ffffff;
    color: #111827;
    font-size: 26px;
    cursor: pointer;
    transform: scale(.5);
    transition: .35s;
    box-shadow: 0 10px 30px rgba(0, 0, 0, .25);
}

.gl3d-gallery-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, .18);
}

.gl3d-gallery-item:hover img {
    transform: scale(1.08);
}

.gl3d-gallery-item:hover .gl3d-gallery-overlay {
    opacity: 1;
}

.gl3d-gallery-item:hover .gl3d-open-btn {
    transform: scale(1);
}


.gl3d-lightbox {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, .95);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: .35s;
    z-index: 99999;
}

.gl3d-lightbox.active {
    opacity: 1;
    visibility: visible;
}

.gl3d-image-wrapper {
    max-width: 92%;
    max-height: 85vh;
    overflow: hidden;
}

.gl3d-image-wrapper img {
    max-width: 100%;
    max-height: 85vh;
    transition: .3s;
    cursor: grab;
    user-select: none;
}


.gl3d-close {
    position: absolute;
    top: 25px;
    right: 25px;
    width: 52px;
    height: 52px;
    border: none;
    border-radius: 50%;
    background: #fff;
    cursor: pointer;
    font-size: 22px;
}


.gl3d-prev, .gl3d-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 60px;
    height: 60px;
    border: none;
    border-radius: 50%;
    background: #fff;
    cursor: pointer;
    font-size: 22px;
}

.gl3d-prev {
    left: 30px;
}

.gl3d-next {
    right: 30px;
}


.gl3d-zoom-controls {
    position: absolute;
    bottom: 25px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 15px;
}

.gl3d-zoom-controls button {
    width: 55px;
    height: 55px;
    border: none;
    border-radius: 50%;
    background: #fff;
    cursor: pointer;
    font-size: 20px;
}


.gl3d-close:hover, .gl3d-prev:hover, .gl3d-next:hover, .gl3d-zoom-controls button:hover, .gl3d-open-btn:hover {
    background: #0d6efd;
    color: #fff;
}

@media(max-width:991px) {
    .gl3d-main-title {
        font-size: 38px;
    }

    .gl3d-gallery-item img {
        height: 280px;
    }

    #galleryWrapper .col-lg-4:nth-child(2n) img {
        height: 340px;
    }

    #galleryWrapper .col-lg-4:nth-child(3n) img {
        height: 250px;
    }

}

@media(max-width:767px) {
    .gl3d-main-title {
        font-size: 30px;
    }

    .gl3d-gallery-item {
        border-radius: 16px;
    }

    .gl3d-gallery-item img {
        height: 220px;
    }

    #galleryWrapper .col-lg-4:nth-child(2n) img {
        height: 280px;
    }

    #galleryWrapper .col-lg-4:nth-child(3n) img {
        height: 220px;
    }

    .gl3d-prev, .gl3d-next {
        width: 45px;
        height: 45px;
        font-size: 18px;
    }

    .gl3d-close {
        width: 45px;
        height: 45px;
    }

    .gl3d-open-btn {
        width: 58px;
        height: 58px;
        font-size: 20px;
    }

    .gl3d-zoom-controls button {
        width: 45px;
        height: 45px;
        font-size: 18px;
    }

}
</style>
@endsection

@section('body')

@php

$galleryImages = [];

for($i = 1; $i <= 12; $i++){ $galleryImages[]=asset("assets/front/imgs/gallery/{$i}.jpg"); } @endphp 
   <section class="gl3d-gallery-section py-5 pb-5">
    <div class="container-fluid pb-5">
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