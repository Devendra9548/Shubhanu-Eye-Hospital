<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Home | Shubhanu Eye Hospital</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    body {
        color: white;
        position: relative;
        color: white;
        /* background: linear-gradient(135deg, #1f2937, #111827); */
    }

    .hero-section {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
        height: 100vh;
        background: #050505;
    }

    .text-danger {
        font-size: 14px;
        color: red;
        font-weight: bold;
        position: relative;
        top: 4px;
        left: 2px;
    }

    .hero-section::before,
    .hero-section::after {
        content: "";
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        filter: blur(120px);
        opacity: 0.25;
        animation: move 10s infinite alternate ease-in-out;
    }

    .hero-section::before {
        background: #00c3ff;
        top: -150px;
        left: -100px;
    }

    .hero-section::after {
        background: #8b5cf6;
        bottom: -150px;
        right: -100px;
        animation-delay: 2s;
    }

    @keyframes move {
        from {
            transform: translateY(0px) translateX(0px);
        }

        to {
            transform: translateY(40px) translateX(30px);
        }
    }

    .container {
        text-align: center;
        padding: 40px;
        max-width: 900px;
        animation: fadeIn 1.5s ease;
    }

    .icon {
        font-size: 90px;
        margin-bottom: 0px;
        animation: bounce 2s infinite;
    }

    .icon img {
        width: 30%;
        background: #fff;
        border: 1px solid;
        border-radius: 10px;
    }

    h1 {
        font-size: 4rem;
        margin-bottom: 0px;
        line-height: 5.2rem;
        font-weight: bold;
    }

    p {
        font-size: 1.1rem;
        color: #d1d5db;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .progress-box {
        width: 100%;
        height: 14px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 50px;
        overflow: hidden;
        margin-bottom: 25px;
    }

    .progress-bar {
        width: 70%;
        height: 100%;
        background: linear-gradient(90deg, #facc15, #f59e0b);
        border-radius: 50px;
        animation: loading 3s infinite;
    }

    .btn {
        display: inline-block;
        padding: 12px 28px;
        border: 2px solid #facc15;
        color: #facc15;
        text-decoration: none;
        border-radius: 30px;
        transition: 0.3s ease;
        font-weight: bold;
    }

    .btn:hover {
        background: #facc15;
        color: #111827;
        transform: scale(1.05);
    }

    .background-shape {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.05);
        animation: float 6s infinite ease-in-out;
    }

    .shape1 {
        width: 220px;
        height: 220px;
        top: 10%;
        left: 10%;
    }

    .shape2 {
        width: 320px;
        height: 320px;
        bottom: 5%;
        right: 10%;
        animation-delay: 2s;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes loading {
        0% {
            width: 10%;
        }

        50% {
            width: 75%;
        }

        100% {
            width: 10%;
        }
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 2.2rem;
        }

        p {
            font-size: 1rem;
        }

        .icon {
            font-size: 70px;
        }
    }


    .hero-heading {
        text-align: center;
        padding: 40px 20px;
    }

    .hero-heading h2 {
        font-size: clamp(2rem, 5vw, 4rem);
        font-size: 20px;
        font-weight: 700;
        line-height: 1.3;
        color: #ffffff;
        /* Static text white */
    }

    #main-animated-service {
        background: linear-gradient(90deg,
                #0f4c81,
                #00a6d6,
                #1ec8a5);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
    }

    #animated-service,
    .animated-draw {
        background: linear-gradient(90deg,
                #4facfe,
                #00f2fe,
                #43e97b);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
    }


    #animated-service::after {
        content: "|";
        color: #ffffff;
        /* Cursor visible on dark background */
        -webkit-text-fill-color: #ffffff;
        animation: blink .8s infinite;
    }

    @keyframes blink {
        50% {
            opacity: 0;
        }
    }

    .video-section {
        background: linear-gradient(135deg, #1f2937, #111827);
        background: #ffeeeeb8;
    }

    .video-wrapper {
        position: relative;
        border-radius: 24px;
        overflow: hidden;
        padding: 0px;
        box-shadow: 0px 0px 8px 6px #0003;
    }

    .video-wrapper::before {
        content: '';
        position: absolute;
        inset: -20px;
        background: inherit;
        filter: blur(40px);
        opacity: .4;
        z-index: -1;
    }

    .video-wrapper iframe {
        border: 0px solid #585858;
        border-radius: 20px;
        transition: all .4s ease;
    }

    .video-section h2 {
        color: #000 !important;
        font-weight: bold;
        font-size: 52px;
        width: 70%;
        text-align: center;
        margin: auto;
        margin-bottom: 25px;

    }
    </style>
</head>

<body>
    <section class="hero-section">
        <div class="background-shape shape1"></div>
        <div class="background-shape shape2"></div>

        <div class="container">
            <div class="icon">
                <img src="/assets/logo.png" alt="Shubhanu Eye Hospital" width="100%">
            </div>
            <h1>Welcome to The <span id="main-animated-service">Shubhanu Eye Hospital</span></h1>
            <div class="hero-heading">
                <h2>Specialized Care for <span id="animated-service"></span></h2>
            </div>
            <div class="progress-box">
                <div class="progress-bar"></div>
            </div>

            <p>Shubhanu Eye Hospital is one of the leading Eye Hospitals in Uttarakhand,offering state of the art modern
                diagnostic and therapeutic services with the highest quality ophthalmic care.
            </p>



            <a href="/ds-admin" class="btn">Book an Appointment</a>
        </div>
    </section>

    <section class="video-section py-5">
        <div class="container p-0 py-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h2 class="text-center">The Heart and Science of <span class="animated-draw">Ophthalmology</span>
                    </h2>
                    <div class="video-wrapper">
                        <div class="ratio ratio-16x9">
                            <iframe width="100%" src="https://www.youtube.com/embed/yo7TySV3Bi4?si=YnH9VL3h4042mQej"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</body>



<script>
const services = [
    "Thyroid Eye Disease",
    "Lid Surgery",
    "Orbital Surgery",
    "Eye Tumors",
    "Ocular Emergencies",
    "Neuro-Ophthalmology",
    "Retinal Surgery & Injection",
    "Artificial / Prosthetic Eyes",
    "Treatment of Watering Eyes"
];

const animatedText = document.getElementById("animated-service");

let serviceIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeEffect() {
    const currentService = services[serviceIndex];

    if (!isDeleting) {
        animatedText.textContent = currentService.substring(0, charIndex + 1);
        charIndex++;

        if (charIndex === currentService.length) {
            isDeleting = true;
            setTimeout(typeEffect, 1800); // pause after typing
            return;
        }
    } else {
        animatedText.textContent = currentService.substring(0, charIndex - 1);
        charIndex--;

        if (charIndex === 0) {
            isDeleting = false;
            serviceIndex = (serviceIndex + 1) % services.length;
        }
    }

    const speed = isDeleting ? 50 : 90;
    setTimeout(typeEffect, speed);
}

typeEffect();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>