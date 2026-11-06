@extends('templates.front.main')
@section('metainfo')
<title>Our Doctors | Shubhanu Eye Hospital</title>
<meta name="description" content="Meet the expert eye specialists at Shubhanu Eye Hospital, Haldwani. Our experienced doctors provide trusted, world-class eye care and advanced treatments.">
<meta name="keywords" content="Shubhanu Eye Hospital, doctors us, Our Vision, Our Mission, Eye Care Hospital, eye hospital in Haldwani, best eye hospital, eye specialist in Haldwani, eye care hospital, ophthalmology hospital, eye doctor, best eye doctor in Haldwani, cataract surgery, cataract treatment, advanced eye care, LASIK eye surgery, LASIK surgery in Haldwani, retina specialist, retina treatment, glaucoma treatment, glaucoma specialist, diabetic eye care, diabetic retinopathy treatment, pediatric eye care, eye checkup, comprehensive eye examination, refractive eye surgery, ICL eye surgery, squint eye treatment, cornea treatment, dry eye treatment, eye surgery in India, advanced eye hospital in India, super speciality eye hospital, comprehensive eye care, Retina & Vitreous Care, Orbit & Oculoplasty, Cornea Care, Glaucoma Care, Squint Care, Eye Trauma & Emergency, Cataract & Lens Surgery">
<meta name="author" content="Shubhanu Eye Hospital">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Our Doctors | Shubhanu Eye Hospital" />
<meta property="og:description" content="Meet the expert eye specialists at Shubhanu Eye Hospital, Haldwani. Our experienced doctors provide trusted, world-class eye care and advanced treatments." />
<meta property="og:url" content="https://shubhanueyehospital.com/doctors" />
<meta property="og:site_name" content="Shubhanu Eye Hospital" />
<meta property="og:image" content="https://shubhanueyehospital.com/assets/front/imgs/banners/1.webp" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="og:image:type" content="image/webp" />
<link rel="canonical" href="https://shubhanueyehospital.com/doctors" />
@endsection

@section('customcss')
<style>
:root {
    --dr-primary: #25708D;
    --dr-primary-dark: #174c61;
    --dr-primary-soft: #e8f3f7;
    --dr-grey: #959799;
    --dr-ink: #14232b;
    --dr-muted: #5d6c74;
    --dr-white: #ffffff;
    --dr-radius: 22px;
    --dr-shadow: 0 18px 50px rgba(20, 60, 80, .12);
}

.dr-page {
    color: var(--dr-ink) !important;
    overflow-x: hidden !important;
}
.dr-hero i, .dr-hero span, .dr-reveal, .dr-stat strong{
    color: #fff !important;
}
.dr-stat .dr-count {
    font-size: 26px !important;
}
.dr-title
{
    color: #453d3d;
}
/* ---------- reveal animation ---------- */
.dr-reveal {
    opacity: 0 !important;
    transform: translateY(40px) !important;
    transition: opacity .8s cubic-bezier(.2, .7, .2, 1), transform .8s cubic-bezier(.2, .7, .2, 1) !important;
    transition-delay: var(--delay, 0s) !important;
}

.dr-reveal.dr-left {
    transform: translateX(-60px) !important;
}

.dr-reveal.dr-right {
    transform: translateX(60px) !important;
}

.dr-reveal.dr-in {
    opacity: 1 !important;
    transform: none !important;
}

/* ---------- hero ---------- */
.dr-hero {
    position: relative !important;
    padding: 110px 0 120px !important;
    background: linear-gradient(135deg, #0f3d50 0%, var(--dr-primary) 55%, #3a93b4 100%) !important;
    color: #fff !important;
    text-align: center !important;
    overflow: hidden !important;
}

.dr-blob {
    position: absolute !important;
    border-radius: 50% !important;
    filter: blur(2px) !important;
    background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, .28), rgba(255, 255, 255, .04)) !important;
    animation: dr-float 9s ease-in-out infinite !important;
}

.dr-blob.b1 {
    width: 260px !important;
    height: 260px !important;
    top: -80px !important;
    left: -60px !important;
}

.dr-blob.b2 {
    width: 180px !important;
    height: 180px !important;
    bottom: 30px !important;
    right: 8% !important;
    animation-delay: -3s !important;
}

.dr-blob.b3 {
    width: 90px !important;
    height: 90px !important;
    top: 30% !important;
    right: 22% !important;
    animation-delay: -6s !important;
}

@keyframes dr-float {

    0%,
    100% {
        transform: translateY(0) scale(1) !important;
    }

    50% {
        transform: translateY(-28px) scale(1.06) !important;
    }
}

.dr-breadcrumb {
    display: inline-flex !important;
    gap: 10px !important;
    align-items: center !important;
    background: rgba(255, 255, 255, .14) !important;
    border: 1px solid rgba(255, 255, 255, .25) !important;
    padding: 8px 18px !important;
    border-radius: 50px !important;
    font-size: 14px !important;
    margin-bottom: 22px !important;
    backdrop-filter: blur(6px) !important;
}

.dr-breadcrumb a {
    color: #fff !important;
    text-decoration: none !important;
    opacity: .85 !important;
}

.dr-breadcrumb a:hover {
    opacity: 1 !important;
}

.dr-hero h1 {
    font-size: clamp(34px, 5.2vw, 62px) !important;
    font-weight: 800 !important;
    line-height: 1.1 !important;
    margin-bottom: 18px !important;
}

.dr-hero h1 span {
    background: linear-gradient(90deg, #bff0ff, #ffffff) !important;
    -webkit-background-clip: text !important;
    background-clip: text !important;
    color: transparent !important;
}

.dr-hero p.lead {
    max-width: 640px !important;
    margin: 0 auto 44px !important;
    font-size: 18px !important;
    opacity: .92 !important;
}

.dr-hero-stats {
    display: flex !important;
    flex-wrap: wrap !important;
    justify-content: center !important;
    gap: 18px !important;
}

.dr-stat {
    min-width: 150px !important;
    background: rgba(255, 255, 255, .12) !important;
    border: 1px solid rgba(255, 255, 255, .22) !important;
    border-radius: 18px !important;
    padding: 18px 22px !important;
    backdrop-filter: blur(8px) !important;
    transition: transform .35s ease, background .35s ease !important;
}

.dr-stat:hover {
    transform: translateY(-6px) !important;
    background: rgba(255, 255, 255, .2) !important;
}

.dr-stat strong {
    display: block !important;
    font-size: 32px !important;
    line-height: 1.1 !important;
}

.dr-stat span {
    font-size: 18px !important;
    letter-spacing: .4px !important;
    opacity: .9 !important;
}

/* ---------- section heading ---------- */
.dr-section {
    padding: 70px 0 30px !important;
}

.dr-eyebrow {
    display: inline-block !important;
    color: var(--dr-primary) !important;
    background: var(--dr-primary-soft) !important;
    padding: 6px 16px !important;
    border-radius: 50px !important;
    font-size: 13px !important;
    font-weight: 700 !important;
    letter-spacing: 1px !important;
    text-transform: uppercase !important;
    margin-bottom: 14px !important;
}

.dr-title {
    font-size: clamp(28px, 3.6vw, 42px) !important;
    font-weight: 800 !important;
    margin-bottom: 10px !important;
}

.dr-sub {
    color: var(--dr-muted) !important;
    max-width: 620px !important;
    margin: 0 auto !important;
}

/* ---------- featured doctors ---------- */
.dr-feature {
    position: relative !important;
    display: flex !important;
    align-items: stretch !important;
    background: #fff !important;
    border-radius: 30px !important;
    box-shadow: 0px 0px 9px 3px #4c4c4c33 !important;
    margin-bottom: 48px !important;
    overflow: hidden !important;
    isolation: isolate !important;
}


.dr-feature.dr-flip {
    flex-direction: row-reverse !important;
}

.dr-feature-photo {
    position: relative !important;
    flex: 0 0 42% !important;
    display: flex !important;
    align-items: flex-end !important;
    justify-content: center !important;
    padding: 36px 20px 0 !important;
}


.dr-feature-photo img {
    position: relative !important;
    z-index: 2 !important;
    max-width: 100% !important;
    max-height: 470px !important;
    width: auto !important;
    object-fit: contain !important;
    transition: transform .6s cubic-bezier(.2, .7, .2, 1) !important;
}

.dr-feature:hover .dr-feature-photo img {
    transform: scale(1.04) translateY(-6px) !important;
}

.dr-role {
    position: absolute !important;
    z-index: 3 !important;
    top: 24px !important;
    left: 24px !important;
    background: var(--dr-primary) !important;
    color: #fff !important;
    padding: 8px 18px !important;
    border-radius: 50px !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    letter-spacing: .5px !important;
    box-shadow: 0 8px 20px rgba(37, 112, 141, .35) !important;
}

.dr-feature.dr-flip .dr-role {
    left: auto !important;
    right: 24px !important;
}

.dr-feature-body {
    flex: 1 !important;
    padding: 52px 52px 46px !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: center !important;
}

.dr-quals {
    font-size: 13px !important;
    font-weight: 600 !important;
    color: var(--dr-primary) !important;
    letter-spacing: .3px !important;
    margin-bottom: 10px !important;
}

.dr-name {
    font-size: clamp(26px, 3vw, 36px) !important;
    font-weight: 800 !important;
    margin-bottom: 6px !important;
}

.dr-exp {
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    font-weight: 600 !important;
    color: var(--dr-muted) !important;
    margin-bottom: 16px !important;
}

.dr-exp i {
    color: var(--dr-primary) !important;
}

.dr-desc {
    color: var(--dr-muted) !important;
    line-height: 1.75 !important;
    margin-bottom: 22px !important;
}

.dr-desc strong {
    color: var(--dr-ink) !important;
}

.dr-chips {
    display: grid !important;
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 14px !important;
    margin-bottom: 26px !important;
}

.dr-chip {
    display: flex !important;
    gap: 12px !important;
    align-items: center !important;
    background: #fff !important;
    border: 1px solid #e3edf1 !important;
    border-radius: 16px !important;
    padding: 14px 16px !important;
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease !important;
}

.dr-chip:hover {
    transform: translateY(-4px) !important;
    box-shadow: 0 12px 26px rgba(37, 112, 141, .15) !important;
    border-color: var(--dr-primary) !important;
}

.dr-chip-icon {
    flex: 0 0 42px !important;
    height: 42px !important;
    border-radius: 12px !important;
    display: grid !important;
    place-items: center !important;
    background: var(--dr-primary-soft) !important;
    color: var(--dr-primary) !important;
    transition: background .3s, color .3s !important;
}

.dr-chip:hover .dr-chip-icon {
    background: var(--dr-primary) !important;
    color: #fff !important;
}

.dr-chip small {
    display: block !important;
    color: var(--dr-grey) !important;
    font-size: 12px !important;
    text-transform: uppercase !important;
    letter-spacing: .6px !important;
}

.dr-chip b {
    font-size: 14px !important;
    line-height: 1.3 !important;
    display: block !important;
}

/* ---------- buttons ---------- */
.dr-btn {
    position: relative !important;
    overflow: hidden !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 10px !important;
    padding: 14px 30px !important;
    border-radius: 50px !important;
    border: 0 !important;
    background: linear-gradient(90deg, var(--dr-primary), #3a93b4) !important;
    color: #fff !important;
    font-weight: 700 !important;
    font-size: 15px !important;
    text-decoration: none !important;
    cursor: pointer !important;
    box-shadow: 0 12px 26px rgba(37, 112, 141, .32) !important;
    transition: transform .3s ease, box-shadow .3s ease !important;
}

.dr-btn::after {
    content: "" !important;
    position: absolute !important;
    top: 0 !important;
    left: -75% !important;
    width: 50% !important;
    height: 100% !important;
    background: linear-gradient(120deg, transparent, rgba(255, 255, 255, .45), transparent) !important;
    transform: skewX(-20deg) !important;
}

.dr-btn:hover {
    transform: translateY(-3px) !important;
    box-shadow: 0 18px 34px rgba(37, 112, 141, .4) !important;
    color: #fff !important;
}

.dr-btn:hover::after {
    left: 130% !important;
    transition: left .75s ease !important;
}

.dr-btn-ghost {
    background: transparent !important;
    color: var(--dr-primary) !important;
    border: 2px solid var(--dr-primary) !important;
    box-shadow: none !important;
}

.dr-btn-ghost:hover {
    background: var(--dr-primary) !important;
    color: #fff !important;
}

/* ---------- filter ---------- */
.dr-filter {
    display: flex !important;
    flex-wrap: wrap !important;
    gap: 12px !important;
    justify-content: center !important;
    margin: 34px 0 44px !important;
}

.dr-filter button {
    border: 1px solid #d5e4ea !important;
    background: #fff !important;
    padding: 10px 22px !important;
    border-radius: 50px !important;
    font-weight: 600 !important;
    font-size: 14px !important;
    color: var(--dr-muted) !important;
    cursor: pointer !important;
    transition: all .3s ease !important;
}

.dr-filter button:hover {
    border-color: var(--dr-primary) !important;
    color: var(--dr-primary) !important;
    transform: translateY(-2px) !important;
}

.dr-filter button.active {
    background: var(--dr-primary) !important;
    color: #fff !important;
    border-color: var(--dr-primary) !important;
    box-shadow: 0 10px 22px rgba(37, 112, 141, .3) !important;
}

/* ---------- grid cards ---------- */
.dr-grid {
    display: grid !important;
    grid-template-columns: repeat(3, 1fr) !important;
    gap: 30px !important;
    margin-bottom: 70px !important;
}

.dr-card {
    position: relative !important;
    background: #fff !important;
    border-radius: var(--dr-radius) !important;
    box-shadow: 0 10px 34px rgba(20, 60, 80, .09) !important;
    overflow: hidden !important;
    display: flex !important;
    flex-direction: column !important;
    transition: transform .45s cubic-bezier(.2, .7, .2, 1), box-shadow .45s ease, opacity .4s ease !important;
    transform-style: preserve-3d !important;
}

.dr-card:hover {
    box-shadow: 0 26px 60px rgba(37, 112, 141, .24) !important;
}

.dr-card.dr-hide {
    display: none !important;
}

.dr-card-photo {
    position: relative !important;
    height: 310px !important;
    display: flex !important;
    align-items: flex-end !important;
    justify-content: center !important;
    background: linear-gradient(180deg, var(--dr-primary-soft), #fff) !important;
    overflow: hidden !important;
}

.dr-card-photo::before {
    content: "" !important;
    position: absolute !important;
    width: 260px !important;
    height: 260px !important;
    border-radius: 50% !important;
    bottom: -90px !important;
    background: radial-gradient(circle, rgba(37, 112, 141, .3), transparent 70%) !important;
    transition: transform .6s ease !important;
}

.dr-card:hover .dr-card-photo::before {
    transform: scale(1.4) !important;
}

.dr-card-photo img {
    position: relative !important;
    z-index: 2 !important;
    height: 92% !important;
    width: auto !important;
    max-width: 100% !important;
    object-fit: contain !important;
    transition: transform .6s cubic-bezier(.2, .7, .2, 1) !important;
}

.dr-card:hover .dr-card-photo img {
    transform: scale(1.07) translateY(-4px) !important;
}

.dr-card .dr-role {
    top: 18px !important;
    left: 18px !important;
    font-size: 12px !important;
    padding: 6px 14px !important;
}

.dr-card-body {
    padding: 26px 26px 28px !important;
    display: flex !important;
    flex-direction: column !important;
    flex: 1 !important;
}

.dr-card-body .dr-name {
    font-size: 22px !important;
}

.dr-card-body .dr-desc {
    font-size: 14.5px !important;
    margin-bottom: 18px !important;
    flex: 1 !important;
}

.dr-tags {
    display: flex !important;
    flex-wrap: wrap !important;
    gap: 8px !important;
    margin-bottom: 18px !important;
}

.dr-tag {
    background: var(--dr-primary-soft) !important;
    color: var(--dr-primary-dark) !important;
    font-size: 12px !important;
    font-weight: 600 !important;
    padding: 5px 12px !important;
    border-radius: 50px !important;
}

.dr-card-actions {
    display: flex !important;
    gap: 10px !important;
    flex-wrap: wrap !important;
}

.dr-card-actions .dr-btn {
    padding: 11px 22px !important;
    font-size: 14px !important;
}

/* ---------- CTA ---------- */
.dr-cta {
    position: relative !important;
    overflow: hidden !important;
    margin: 10px 0 80px !important;
    background: linear-gradient(120deg, #0f3d50, var(--dr-primary)) !important;
    border-radius: 34px !important;
    padding: 64px 40px !important;
    text-align: center !important;
    color: #fff !important;
}

.dr-cta::before,
.dr-cta::after {
    content: "" !important;
    position: absolute !important;
    border-radius: 50% !important;
    background: rgba(255, 255, 255, .08) !important;
    animation: dr-float 10s ease-in-out infinite !important;
}

.dr-cta::before {
    width: 320px !important;
    height: 320px !important;
    top: -120px !important;
    left: -80px !important;
}

.dr-cta::after {
    width: 240px !important;
    height: 240px !important;
    bottom: -100px !important;
    right: -60px !important;
    animation-delay: -4s !important;
}

.dr-cta h2 {
    position: relative !important;
    font-weight: 800 !important;
    font-size: clamp(26px, 3.4vw, 40px) !important;
    margin-bottom: 12px !important;
}

.dr-cta p {
    position: relative !important;
    opacity: .9 !important;
    margin-bottom: 28px !important;
    color: #fff;
}
.dr-page .dr-cta .dr-btn i{
    color: #25708d !important;
}
.dr-cta .dr-btn {
    position: relative !important;
    background: #fff !important;
    color: var(--dr-primary-dark) !important;
    box-shadow: 0 14px 30px rgba(0, 0, 0, .25) !important;
}

.dr-cta .dr-btn:hover {
    color: var(--dr-primary-dark) !important;
}

/* ---------- modal ---------- */
.dr-modal {
    position: fixed !important;
    inset: 0 !important;
    z-index: 99999 !important;
    display: grid !important;
    place-items: center !important;
    padding: 20px !important;
    background: rgba(10, 30, 40, .65) !important;
    backdrop-filter: blur(6px) !important;
    opacity: 0 !important;
    visibility: hidden !important;
    transition: opacity .35s ease, visibility .35s ease !important;
}

.dr-modal.open {
    opacity: 1 !important;
    visibility: visible !important;
}

.dr-modal-box {
    position: relative !important;
    width: min(860px, 100%) !important;
    max-height: 90vh !important;
    overflow: auto !important;
    display: grid !important;
    grid-template-columns: 300px 1fr !important;
    background: #fff !important;
    border-radius: 28px !important;
    box-shadow: 0 40px 90px rgba(0, 0, 0, .4) !important;
    transform: translateY(40px) scale(.94) !important;
    transition: transform .45s cubic-bezier(.2, .9, .3, 1.2) !important;
}

.dr-modal.open .dr-modal-box {
    transform: none !important;
}

.dr-modal-photo {
    display: flex !important;
    align-items: flex-end !important;
    justify-content: center !important;
    background: linear-gradient(180deg, var(--dr-primary-soft), #cfe6ee) !important;
    padding-top: 30px !important;
}

.dr-modal-photo img {
    max-width: 100% !important;
    max-height: 380px !important;
    object-fit: contain !important;
}

.dr-modal-body {
    padding: 40px 38px !important;
}

.dr-modal-close {
    position: absolute !important;
    top: 14px !important;
    right: 14px !important;
    z-index: 5 !important;
    width: 40px !important;
    height: 40px !important;
    border-radius: 50% !important;
    border: 0 !important;
    background: #fff !important;
    box-shadow: 0 6px 16px rgba(0, 0, 0, .18) !important;
    font-size: 18px !important;
    cursor: pointer !important;
    transition: transform .3s ease, background .3s ease, color .3s ease !important;
}

.dr-modal-close:hover {
    transform: rotate(90deg) !important;
    background: var(--dr-primary) !important;
    color: #fff !important;
}

.dr-modal-body ul {
    padding-left: 0 !important;
    list-style: none !important;
    margin: 0 0 24px !important;
}

.dr-modal-body li {
    display: flex !important;
    gap: 10px !important;
    margin-bottom: 10px !important;
    color: var(--dr-muted) !important;
}

.dr-modal-body li i {
    color: var(--dr-primary) !important;
    margin-top: 4px !important;
}

.dr-page .dr-btn i, .dr-chip:hover i{
  color: #fff !important;
}

@media (max-width: 991px) {
    .dr-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }

    .dr-feature,
    .dr-feature.dr-flip {
        flex-direction: column !important;
    }

    .dr-feature-photo {
        flex: none !important;
        padding-top: 70px !important;
    }

    .dr-feature-photo img {
        max-height: 380px !important;
    }

    .dr-feature-body {
        padding: 34px 28px 36px !important;
    }

    .dr-feature.dr-flip .dr-role {
        left: 24px !important;
        right: auto !important;
    }
}

@media (max-width: 640px) {
    .dr-stat span {
        font-size: 13px !important;
    }
    .dr-stat .dr-count {
        font-size: 16px !important;
    }
    .dr-hero {
        padding: 80px 0 100px !important;
    }

    .dr-grid {
        grid-template-columns: 1fr !important;
    }

    .dr-chips {
        grid-template-columns: 1fr !important;
    }

    .dr-modal-box {
        grid-template-columns: 1fr !important;
    }

    .dr-modal-photo {
        max-height: 260px !important;
    }

    .dr-modal-photo img {
        max-height: 240px !important;
    }

    .dr-modal-body {
        padding: 28px 22px !important;
    }

    .dr-cta {
        padding: 46px 22px !important;
    }

    .dr-stat {
        min-width: 130px !important;
        padding: 14px 16px !important;
    }
}

@media (prefers-reduced-motion: reduce) {

    .dr-page *,
    .dr-page *::before,
    .dr-page *::after {
        animation: none !important !important;
        transition: none !important !important;
    }

    .dr-reveal {
        opacity: 1 !important;
        transform: none !important;
    }
}

.dr-page .dr-btn-ghost i{
    color: #25708D !important;
}
.dr-page .dr-btn-ghost:hover i{
    color: #fff !important;
}
</style>
@endsection

@section('body')
<?php
$doctors = [
    [
        "slug" => "bhanu",
        "img" => "/assets/front/imgs/doctors/dr-bhanu-pratap-singh-pangtey.webp",
        "role" => "Chairman",
        "name" => "Dr. Bhanu Pratap Singh Pangtey",
        "url" => "/doctors/dr-bhanu-pratap-singh-pangte",
        "quals" => "MS Ophthalmology | FICO | Vitreo-Retina Fellowship",
        "exp" => "15+ Years of Experience",
        "spec" => "Experienced Vitreo-Retina Surgeon with expertise in the diagnosis and surgical management of complex retinal and vitreous disorders.",
        "specialty" => "Vitreo-Retina",
        "extra_label" => "Availability",
        "extra" => "Full-Time / Daily",
        "extra_icon" => "fa-calendar-check",
        "tags" => ["retina"],
        "pills" => ["Retina Surgery", "Vitrectomy", "Retinal Laser", "Intravitreal Injections"],
        "featured" => true,
    ],
    [
        "slug" => "shubha",
        "img" => "/assets/front/imgs/doctors/dr-shubha-raguram-pangtey.webp",
        "role" => "Chairman",
        "name" => "Dr. Shubha Raguram Pangtey",
        "url" => "/doctors",
        "quals" => "MS Ophthalmology | Fellowship in Orbit | Oculoplasty & Ocular Oncology",
        "exp" => "15+ Years of Experience",
        "spec" => "An experienced ophthalmic surgeon specializing in Orbit, Oculoplasty, Ocular Oncology, Neuro-Ophthalmology and Pediatric Eye Care, with expertise in managing complex eyelid, lacrimal, orbital and ocular tumour conditions.",
        "specialty" => "Orbit, Oculoplasty & Ocular Oncology",
        "extra_label" => "Additional Expertise",
        "extra" => "Neuro-Ophthalmology & Pediatric Ophthalmology",
        "extra_icon" => "fa-eye",
        "tags" => ["oculoplasty", "pediatric"],
        "pills" => ["Eyelid Surgery", "Orbital Surgery", "Ocular Oncology", "Pediatric Eye Care"],
        "featured" => true,
    ],
    [
        "slug" => "shagun",
        "img" => "/assets/front/imgs/doctors/dr-shagun-sood.webp",
        "role" => "Consultant",
        "name" => "Dr. Shagun Sood",
        "url" => "/doctors",
        "quals" => "MBBS | MS Ophthalmology | DNB | FICO",
        "exp" => "10+ Years of Experience",
        "spec" => "Experienced ophthalmic surgeon with expertise in cataract, squint and refractive procedures, with extensive surgical experience across adult and pediatric eye care.",
        "specialty" => "Cataract, Squint & Refractive Surgery",
        "extra_label" => "Patient Group",
        "extra" => "Adult & Pediatric Eye Care",
        "extra_icon" => "fa-users",
        "tags" => ["cataract", "pediatric"],
        "pills" => ["Cataract", "Squint", "Refractive"],
        "featured" => false,
    ],
    [
        "slug" => "sufyan",
        "img" => "/assets/front/imgs/doctors/dr-mohd-sufyan-danish.webp",
        "role" => "Consultant",
        "url" => "/doctors",
        "name" => "Dr. Mohd Sufyan Danish",
        "quals" => "MBBS | DOMS | DNB Ophthalmology",
        "exp" => "8+ Years of Experience",
        "spec" => "Experienced ophthalmic surgeon specializing in corneal diseases, cataract and refractive surgery, with extensive expertise in complex anterior segment procedures.",
        "specialty" => "Cornea, Cataract & Refractive Surgery",
        "extra_label" => "Focus Area",
        "extra" => "Complex Anterior Segment Procedures",
        "extra_icon" => "fa-bullseye",
        "tags" => ["cornea", "cataract"],
        "pills" => ["Cornea", "Cataract", "Refractive"],
        "featured" => false,
    ],
    [
        "slug" => "nabeel",
        "img" => "/assets/front/imgs/doctors/dr-nabeel-firoz.webp",
        "role" => "Consultant",
        "name" => "Dr. Nabeel Firoz",
        "url" => "/doctors",
        "quals" => "MBBS | DOMS | DNB Ophthalmology",
        "exp" => "8 Years of Experience",
        "spec" => "Experienced ophthalmologist with expertise in cataract surgery, medical retina and comprehensive eye care, with a special focus on retinal injections and laser procedures.",
        "specialty" => "Cataract Surgery & Medical Retina",
        "extra_label" => "Special Focus",
        "extra" => "Retinal Injections & Laser Procedures",
        "extra_icon" => "fa-crosshairs",
        "tags" => ["cataract", "retina"],
        "pills" => ["Cataract", "Medical Retina", "Retinal Laser"],
        "featured" => false,
    ],
];
$featured = array_values(array_filter($doctors, fn($d) => $d['featured']));
$others = array_values(array_filter($doctors, fn($d) => !$d['featured']));
?>

<div class="dr-page">

    {{-- ================= HERO ================= --}}
    <section class="dr-hero">
        <span class="dr-blob b1"></span>
        <span class="dr-blob b2"></span>
        <span class="dr-blob b3"></span>
        <div class="container position-relative">
            <div class="dr-breadcrumb dr-reveal">
                <a href="{{ url('/') }}">Home</a> <i class="fa-solid fa-angle-right"></i> <span>Our Doctors</span>
            </div>
            <h1 class="dr-reveal" style="--delay:.1s">Meet Our <span>Expert Eye Specialists</span></h1>
            <p class="lead dr-reveal" style="--delay:.2s">Experienced doctors, advanced technology and a human touch
                &mdash; dedicated to preserving your sight and improving your life.</p>

            <div class="dr-hero-stats">
                <div class="dr-stat dr-reveal" style="--delay:.3s">
                    <strong><span class="dr-count" data-to="{{ count($doctors) }}">0</span></strong>
                    <span>Senior Doctors</span>
                </div>
                <div class="dr-stat dr-reveal" style="--delay:.4s">
                    <strong><span class="dr-count" data-to="20">0</span>+</strong>
                    <span>Years of Legacy</span>
                </div>
                <div class="dr-stat dr-reveal" style="--delay:.5s">
                    <strong><span class="dr-count" data-to="100000" data-format="1">0</span>+</strong>
                    <span>Patients Treated</span>
                </div>
                <div class="dr-stat dr-reveal" style="--delay:.6s">
                    <strong><span class="dr-count" data-to="50000" data-format="1">0</span>+</strong>
                    <span>Surgeries</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= FEATURED DOCTORS ================= --}}
    <section class="dr-section">
        <div class="container">
            <div class="text-center mb-5 dr-reveal">
                <span class="dr-eyebrow">Leadership</span>
                <h2 class="dr-title">Doctors in the Spotlight</h2>
                <p class="dr-sub">The surgeons who lead Shubhanu Eye Hospital with years of specialised experience.</p>
            </div>

            @foreach($featured as $i => $doc)
            <article class="dr-feature {{ $i % 2 ? 'dr-flip' : '' }} dr-reveal {{ $i % 2 ? 'dr-right' : 'dr-left' }}">
                <div class="dr-feature-photo">
                    <span class="dr-role">{{ $doc['role'] }}</span>
                    <img src="{{ $doc['img'] }}" alt="{{ $doc['name'] }}" loading="lazy">
                </div>
                <div class="dr-feature-body">
                    <span class="dr-quals">{{ $doc['quals'] }}</span>
                    <h3 class="dr-name">{{ $doc['name'] }}</h3>
                    <span class="dr-exp"><i class="fa-solid fa-award"></i> {{ $doc['exp'] }}</span>
                    <p class="dr-desc"><strong>Specialisation:</strong> {{ $doc['spec'] }}</p>

                    <div class="dr-chips">
                        <div class="dr-chip">
                            <div class="dr-chip-icon"><i class="fa-solid fa-stethoscope"></i></div>
                            <div><small>Specialty</small><b>{{ $doc['specialty'] }}</b></div>
                        </div>
                        <div class="dr-chip">
                            <div class="dr-chip-icon"><i class="fa-solid {{ $doc['extra_icon'] }}"></i></div>
                            <div><small>{{ $doc['extra_label'] }}</small><b>{{ $doc['extra'] }}</b></div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="javascript:void(0)" class="dr-btn showBookAppointment"><i class="fa-solid fa-calendar-check"></i> Book Appointment</a>
                        <a href="{{ $doc['url'] }}" class="dr-btn dr-btn-ghost"><i class="fa-solid fa-calendar-check"></i> View Profile</a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </section>

    {{-- ================= OTHER DOCTORS ================= --}}
    <section class="dr-section" style="padding-top:20px">
        <div class="container">
            <div class="text-center dr-reveal">
                <span class="dr-eyebrow">Our Team</span>
                <h2 class="dr-title">Specialist Consultants</h2>
                <p class="dr-sub">Skilled surgeons covering every aspect of comprehensive eye care.</p>
            </div>

            <div class="dr-filter dr-reveal" id="drFilter">
                <button type="button" class="active" data-filter="all">All</button>
                <button type="button" data-filter="retina">Retina</button>
                <button type="button" data-filter="oculoplasty">Oculoplasty</button>
                <button type="button" data-filter="cataract">Cataract</button>
                <button type="button" data-filter="cornea">Cornea</button>
                <button type="button" data-filter="pediatric">Pediatric & Squint</button>
            </div>

            <div class="dr-grid" id="drGrid">
                @foreach($doctors as $i => $doc)
                <article class="dr-card dr-reveal" data-tags="{{ implode(' ', $doc['tags']) }}"
                    style="--delay: {{ ($i % 3) * 0.12 }}s">
                    <div class="dr-card-photo">
                        <span class="dr-role">{{ $doc['role'] }}</span>
                        <img src="{{ $doc['img'] }}" alt="{{ $doc['name'] }}" loading="lazy">
                    </div>
                    <div class="dr-card-body">
                        <span class="dr-quals">{{ $doc['quals'] }}</span>
                        <h3 class="dr-name">{{ $doc['name'] }}</h3>
                        <span class="dr-exp"><i class="fa-solid fa-award"></i> {{ $doc['exp'] }}</span>
                        <p class="dr-desc"><strong>Specialisation:</strong> {{ $doc['spec'] }}</p>
                        <div class="dr-tags">
                            @foreach($doc['pills'] as $pill)
                            <span class="dr-tag">{{ $pill }}</span>
                            @endforeach
                        </div>
                        <div class="dr-card-actions">
                            <a href="javascript:void(0)" class="dr-btn showBookAppointment">Book Now</a>
                            <button type="button" class="dr-btn dr-btn-ghost dr-open" data-doc="{{ $doc['slug'] }}">Know
                                More</button>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            {{-- CTA --}}
            <div class="dr-cta dr-reveal">
                <h2>Not sure which doctor to see?</h2>
                <p>Book an appointment and our team will guide you to the right specialist for your eyes.</p>
                <a href="javascript:void(0)" class="dr-btn showBookAppointment"><i
                        class="fa-solid fa-calendar-check"></i> Book Appointment</a>
            </div>
        </div>
    </section>

    {{-- ================= MODAL ================= --}}
    <div class="dr-modal" id="drModal" aria-hidden="true" role="dialog">
        <div class="dr-modal-box">
            <button type="button" class="dr-modal-close" id="drClose" aria-label="Close"><i
                    class="fa-solid fa-xmark"></i></button>
            <div class="dr-modal-photo"><img id="drmImg" src="" alt=""></div>
            <div class="dr-modal-body">
                <span class="dr-quals" id="drmQuals"></span>
                <h3 class="dr-name" id="drmName"></h3>
                <span class="dr-exp"><i class="fa-solid fa-award"></i> <span id="drmExp"></span></span>
                <p class="dr-desc" id="drmSpec"></p>
                <ul id="drmList"></ul>
                <a href="javascript:void(0)" class="dr-btn showBookAppointment" id="drmBook"><i
                        class="fa-solid fa-calendar-check"></i> Book Appointment</a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var doctors = @json($doctors);

    /* ---------- scroll reveal ---------- */
    var reveals = document.querySelectorAll(".dr-reveal");
    if ("IntersectionObserver" in window) {
        var io = new IntersectionObserver(function(entries) {
            entries.forEach(function(e) {
                if (e.isIntersecting) {
                    e.target.classList.add("dr-in");
                    io.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.12
        });
        reveals.forEach(function(el) {
            io.observe(el);
        });
    } else {
        reveals.forEach(function(el) {
            el.classList.add("dr-in");
        });
    }

    /* ---------- counters ---------- */
    function fmt(n, indian) {
        return indian ? n.toLocaleString("en-IN") : String(n);
    }
    document.querySelectorAll(".dr-count").forEach(function(el) {
        var to = parseInt(el.dataset.to, 10);
        var indian = el.dataset.format === "1";
        var start = null,
            dur = 1800;

        function step(ts) {
            if (!start) start = ts;
            var p = Math.min((ts - start) / dur, 1);
            var eased = 1 - Math.pow(1 - p, 3);
            el.textContent = fmt(Math.floor(to * eased), indian);
            if (p < 1) requestAnimationFrame(step);
        }
        setTimeout(function() {
            requestAnimationFrame(step);
        }, 500);
    });

    /* ---------- filter ---------- */
    var filterBtns = document.querySelectorAll("#drFilter button");
    var cards = document.querySelectorAll("#drGrid .dr-card");
    filterBtns.forEach(function(btn) {
        btn.addEventListener("click", function() {
            filterBtns.forEach(function(b) {
                b.classList.remove("active");
            });
            btn.classList.add("active");
            var f = btn.dataset.filter;
            cards.forEach(function(card) {
                var show = f === "all" || card.dataset.tags.split(" ").indexOf(f) !== -
                1;
                if (show) {
                    card.classList.remove("dr-hide");
                    card.style.opacity = 0;
                    card.style.transform = "translateY(24px) scale(.96)";
                    setTimeout(function() {
                        card.style.opacity = 1;
                        card.style.transform = "";
                    }, 30);
                } else {
                    card.classList.add("dr-hide");
                }
            });
        });
    });

    /* ---------- 3D tilt on cards (desktop) ---------- */
    if (window.matchMedia("(hover: hover) and (min-width: 992px)").matches) {
        cards.forEach(function(card) {
            card.addEventListener("mousemove", function(e) {
                var r = card.getBoundingClientRect();
                var x = (e.clientX - r.left) / r.width - 0.5;
                var y = (e.clientY - r.top) / r.height - 0.5;
                card.style.transition = "box-shadow .45s ease";
                card.style.transform = "perspective(900px) rotateY(" + (x * 7) +
                    "deg) rotateX(" + (-y * 7) + "deg) translateY(-8px)";
            });
            card.addEventListener("mouseleave", function() {
                card.style.transition = "";
                card.style.transform = "";
            });
        });
    }

    /* ---------- modal ---------- */
    var modal = document.getElementById("drModal");

    function openModal(slug) {
        var d = doctors.find(function(x) {
            return x.slug === slug;
        });
        if (!d) return;
        document.getElementById("drmImg").src = d.img;
        document.getElementById("drmImg").alt = d.name;
        document.getElementById("drmQuals").textContent = d.quals;
        document.getElementById("drmName").textContent = d.name;
        document.getElementById("drmExp").textContent = d.exp;
        document.getElementById("drmSpec").innerHTML = "<strong>Specialisation:</strong> " + d.spec;
        var list = document.getElementById("drmList");
        list.innerHTML = "";
        [
            ["Specialty", d.specialty],
            [d.extra_label, d.extra],
            ["Designation", d.role]
        ].forEach(function(row) {
            var li = document.createElement("li");
            li.innerHTML = '<i class="fa-solid fa-circle-check"></i><span><strong>' + row[0] +
                ':</strong> ' + row[1] + '</span>';
            list.appendChild(li);
        });
        modal.classList.add("open");
        modal.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
    }

    function closeModal() {
        modal.classList.remove("open");
        modal.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
    }
    document.querySelectorAll(".dr-open").forEach(function(btn) {
        btn.addEventListener("click", function() {
            openModal(btn.dataset.doc);
        });
    });
    document.getElementById("drClose").addEventListener("click", closeModal);
    modal.addEventListener("click", function(e) {
        if (e.target === modal) closeModal();
    });
    document.addEventListener("keydown", function(e) {
        if (e.key === "Escape") closeModal();
    });
    document.getElementById("drmBook").addEventListener("click", closeModal);
});
</script>
@endsection