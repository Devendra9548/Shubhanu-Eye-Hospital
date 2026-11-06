@extends('templates.front.main')

<?php
/*
|--------------------------------------------------------------------------
| DOCTOR DATA  (har doctor ke liye sirf ye array badalna hai)
| Baad me isko controller/database se $d bana kar bhej sakte hain.
|--------------------------------------------------------------------------
*/
$d = [
    "slug"        => "dr-bhanu-pratap-singh-pangtey",
    "name"        => "Dr. Bhanu Pratap Singh Pangtey",
    "sname"        => "Dr. Bhanu Pangtey",
    "role"        => "Chairman",
    "headline"    => "Vitreo-Retina Surgeon in Haldwani",
    "img"         => "/assets/front/imgs/doctors/dr-bhanu-pratap-singh-pangtey.webp",
    "quals"       => ["MS Ophthalmology", "FICO", "Vitreo-Retina Fellowship"],
    "exp_years"   => 15,
    "specialty"   => "Vitreo-Retina",
    "availability"=> "Full-Time / Daily",
    "short"       => "Experienced Vitreo-Retina Surgeon with expertise in the diagnosis and surgical management of complex retinal and vitreous disorders.",
    "about"       => [
        "Dr. Bhanu Pratap Singh Pangtey is the Chairman of Shubhanu Eye Hospital, Haldwani, and an experienced Vitreo-Retina Surgeon. With more than 15 years of experience, he focuses on the diagnosis and surgical management of complex retinal and vitreous disorders.",
        "Patients value his calm, patient approach, clear explanations and practical advice. Every treatment plan is discussed openly so that you understand your condition and feel confident about the next step.",
    ],
    "treatments"  => [
        ["icon" => "fa-eye",          "title" => "Retina Surgery",           "text" => "Advanced surgical management of retinal and vitreous disorders."],
        ["icon" => "fa-bolt",         "title" => "Laser Treatment",          "text" => "Retinal laser procedures for protecting and stabilising vision."],
        ["icon" => "fa-syringe",      "title" => "Intravitreal Injections",  "text" => "Precise injection therapy for retinal conditions, with careful follow-up."],
        ["icon" => "fa-magnifying-glass-chart", "title" => "Retina Diagnosis", "text" => "Detailed retinal imaging and evaluation to find problems early."],
    ],
    "conditions"  => ["Diabetic Retinopathy", "Retinal Detachment", "Macular Disorders", "Vitreous Haemorrhage", "Retinal Vascular Diseases", "Floaters & Flashes"],
    "tech"        => [
        ["name" => "Alcon CONSTELLATION", "text" => "Vitreoretinal surgical platform", "img" => "/assets/front/imgs/equipment/5-mb.webp"],
        ["name" => "Topcon Maestro2",     "text" => "OCT & OCT Angiography",          "img" => "/assets/front/imgs/equipment/7-mb.webp"],
        ["name" => "iCare EIDON",         "text" => "TrueColor widefield fundus imaging", "img" => "/assets/front/imgs/equipment/9-mb.webp"],
        ["name" => "ZEISS OPMI LUMERA 700","text" => "Premium surgical microscope",   "img" => "/assets/front/imgs/equipment/1-mb.webp"],
    ],
    "reviews"     => [
        ["name" => "Rakesh Joshi", "text" => "My experience at Shubhanu Eye Hospital was excellent. Dr. Bhanu Pratap Singh Pangtey explained my treatment patiently and made me feel completely comfortable."],
        ["name" => "Pooja Rawat",  "text" => "Dr. Bhanu Pratap Singh Pangtey gave me clear advice regarding my eye problem. The consultation was reassuring, professional, and easy to understand."],
        ["name" => "Deepak Kumar", "text" => "Dr. Bhanu Pratap Singh Pangtey took time to understand my concerns and suggested the right approach. I truly appreciated his calm and caring nature."],
        ["name" => "Meena Joshi",  "text" => "I highly appreciated the guidance from Dr. Bhanu Pratap Singh Pangtey. His detailed explanation helped me understand my treatment and feel more confident."],
    ],
    "faqs"        => [
        ["q" => "Who is Dr. Bhanu Pratap Singh Pangtey?", "a" => "Dr. Bhanu Pratap Singh Pangtey is the Chairman of Shubhanu Eye Hospital in Haldwani and an experienced Vitreo-Retina Surgeon with more than 15 years of experience in managing retinal and vitreous disorders."],
        ["q" => "Which eye problems does a vitreo-retina specialist treat?", "a" => "A vitreo-retina specialist diagnoses and treats disorders of the retina and the vitreous, the gel inside the eye. Treatment may include medicines, laser, intravitreal injections or surgery depending on the condition."],
        ["q" => "Should I book an appointment before my checkup?", "a" => "Yes. We request prior appointments so that patients do not have to wait for long, as some consultations take longer than normal or an emergency may need attention."],
        ["q" => "Will my eyes be dilated for the retina check-up?", "a" => "For most eye ailments, dilating the eyes helps in diagnosis. Dilation takes about 15-30 minutes and your vision may stay blurred for a couple of hours, so please avoid driving afterwards and bring an attendant with you."],
        ["q" => "What should I bring for my first visit?", "a" => "Please bring your old prescription glasses or contact lens prescription, previous eye reports and a list of your current medicines. This helps the doctor understand your medical history."],
    ],
];

$pageTitle = $d['name'] . " | " . $d['headline'] . " | Shubhanu Eye Hospital";
$pageDesc  = $d['name'] . " is a " . strtolower($d['headline']) . " at Shubhanu Eye Hospital with " . $d['exp_years'] . "+ years of experience. Book an appointment for retina and vitreous care.";
$pageUrl   = url()->current();
$imgUrl    = url($d['img']);

$schemaPhysician = [
    "@context" => "https://schema.org",
    "@type" => "Physician",
    "name" => $d['name'],
    "url" => $pageUrl,
    "image" => $imgUrl,
    "description" => $d['short'],
    "medicalSpecialty" => "Ophthalmology",
    "knowsAbout" => array_merge([$d['specialty']], array_column($d['treatments'], 'title')),
    "worksFor" => [
        "@type" => "Hospital",
        "name" => "Shubhanu Eye Hospital",
        "url" => "https://shubhanueyehospital.com",
        "address" => [
            "@type" => "PostalAddress",
            "addressLocality" => "Haldwani",
            "addressRegion" => "Uttarakhand",
            "addressCountry" => "IN",
        ],
    ],
];
$schemaBreadcrumb = [
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
        ["@type" => "ListItem", "position" => 1, "name" => "Home",    "item" => url('/')],
        ["@type" => "ListItem", "position" => 2, "name" => "Doctors", "item" => url('/doctors')],
        ["@type" => "ListItem", "position" => 3, "name" => $d['name'], "item" => $pageUrl],
    ],
];
$schemaFaq = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array_map(fn($f) => [
        "@type" => "Question",
        "name" => $f['q'],
        "acceptedAnswer" => ["@type" => "Answer", "text" => $f['a']],
    ], $d['faqs']),
];
$jsonFlags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
?>

@section('metainfo')
<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDesc }}">
<meta name="keywords"
    content="{{ $d['name'] }}, retina specialist in Haldwani, vitreo-retina surgeon Haldwani, eye doctor Haldwani, Shubhanu Eye Hospital">
<meta name="author" content="Shubhanu Eye Hospital">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="{{ $pageUrl }}" />
<meta property="og:locale" content="en_IN" />
<meta property="og:type" content="profile" />
<meta property="og:title" content="{{ $pageTitle }}" />
<meta property="og:description" content="{{ $pageDesc }}" />
<meta property="og:url" content="{{ $pageUrl }}" />
<meta property="og:site_name" content="Shubhanu Eye Hospital" />
<meta property="og:image" content="{{ $imgUrl }}" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ $pageTitle }}" />
<meta name="twitter:description" content="{{ $pageDesc }}" />
<meta name="twitter:image" content="{{ $imgUrl }}" />
<script type="application/ld+json">
{
    !!json_encode($schemaPhysician, $jsonFlags) !!
}
</script>
<script type="application/ld+json">
{
    !!json_encode($schemaBreadcrumb, $jsonFlags) !!
}
</script>
<script type="application/ld+json">
{
    !!json_encode($schemaFaq, $jsonFlags) !!
}
</script>
@endsection

@section('customcss')
<style>
:root {
    --ds-primary: #25708D;
    --ds-dark: #0d3445;
    --ds-deep: #082431;
    --ds-soft: #e8f3f7;
    --ds-grey: #959799;
    --ds-ink: #14232b;
    --ds-muted: #5d6c74;
    --ds-accent: #6fd3f0;
    --ds-shadow: 0 20px 55px rgba(20, 60, 80, .13);
}
.ds-name .w span {
    color: #fff !important;
}
.ds-hero .row {
    height: auto !important;
}
.ds-hero .ds-short, .ds-qual, .ds-hero span, .ds-hero i{
    color: #fff !important;
}
.ds-quals, .ds-short {
    margin-top: 12px !important;
}

.ds-page {
    color: var(--ds-ink);
    overflow-x: clip;
}

.ds-page section {
    scroll-margin-top: 90px;
}


/* reveal */
.ds-rv {
    opacity: 0;
    transform: translateY(46px);
    transition: opacity .9s cubic-bezier(.2, .7, .2, 1), transform .9s cubic-bezier(.2, .7, .2, 1);
    transition-delay: var(--d, 0s);
}

.ds-rv.l {
    transform: translateX(-60px);
}

.ds-rv.r {
    transform: translateX(60px);
}

.ds-rv.z {
    transform: scale(.88);
}

.ds-rv.in {
    opacity: 1;
    transform: none;
}

/* ================= HERO ================= */
.ds-hero {
    position: relative;
    padding: 70px 0 0;
    background: radial-gradient(circle at 80% 20%, #1c5f79 0%, var(--ds-dark) 45%, var(--ds-deep) 100%);
    color: #fff;
    overflow: hidden;
}

.ds-grid-bg {
    position: absolute;
    inset: 0;
    opacity: .08;
    background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px);
    background-size: 54px 54px;
    mask-image: radial-gradient(circle at 70% 40%, #000, transparent 70%);
    -webkit-mask-image: radial-gradient(circle at 70% 40%, #000, transparent 70%);
}

.ds-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(60px);
    opacity: .5;
    animation: ds-drift 14s ease-in-out infinite;
}

.ds-orb.o1 {
    width: 340px;
    height: 340px;
    background: #2aa3cf;
    top: -80px;
    left: -90px;
}

.ds-orb.o2 {
    width: 280px;
    height: 280px;
    background: #25708D;
    bottom: 40px;
    right: 25%;
    animation-delay: -6s;
}

@keyframes ds-drift {

    0%,
    100% {
        transform: translate(0, 0) scale(1);
    }

    50% {
        transform: translate(40px, -30px) scale(1.15);
    }
}

.ds-crumb {
    display: inline-flex;
    flex-wrap: wrap;
    gap: 8px;
    align-items: center;
    font-size: 14px;
    padding: 8px 18px;
    border-radius: 50px;
    background: rgba(255, 255, 255, .1);
    border: 1px solid rgba(255, 255, 255, .18);
    backdrop-filter: blur(8px);
    margin-bottom: 26px;
}

.ds-crumb a {
    color: #fff;
    opacity: .8;
    text-decoration: none;
}

.ds-crumb a:hover {
    opacity: 1;
}

.ds-role {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1.4px;
    text-transform: uppercase;
    color: var(--ds-accent);
    margin-bottom: 14px;
}

.ds-role::before {
    content: "";
    width: 34px;
    height: 2px;
    background: var(--ds-accent);
}

.ds-name {
    font-size: clamp(36px, 5.4vw, 70px);
    font-weight: 800;
    line-height: 1.06;
    margin-bottom: 14px;
}

.ds-name .w {
    display: inline-block;
    overflow: hidden;
    vertical-align: bottom;
}

.ds-name .w>span {
    display: inline-block;
    transform: translateY(110%);
    animation: ds-word .9s cubic-bezier(.2, .8, .2, 1) forwards;
    animation-delay: calc(var(--i) * .12s + .2s);
}

@keyframes ds-word {
    to {
        transform: none;
    }
}

.ds-headline {
    font-size: clamp(18px, 2vw, 24px);
    font-weight: 500;
    opacity: .95;
    margin-bottom: 18px;
}

.ds-headline b {
    background: linear-gradient(90deg, var(--ds-accent), #fff);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.ds-short {
    max-width: 560px;
    opacity: .85;
    line-height: 1.8;
    margin-bottom: 26px;
}

.ds-quals {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 32px;
}

.ds-qual {
    display: inline-flex;
    gap: 8px;
    align-items: center;
    padding: 8px 16px;
    border-radius: 50px;
    font-size: 13.5px;
    font-weight: 600;
    background: rgba(255, 255, 255, .1);
    border: 1px solid rgba(255, 255, 255, .2);
    transition: transform .3s, background .3s;
}

.ds-qual:hover {
    transform: translateY(-4px);
    background: rgba(255, 255, 255, .2);
}

.ds-qual i {
    color: var(--ds-accent);
}

.ds-btn {
    position: relative !important;
    overflow: hidden !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 10px !important;
    padding: 15px 32px !important;
    border-radius: 50px !important;
    border: 0 !important;
    cursor: pointer !important;
    font-weight: 700 !important;
    font-size: 15px !important;
    text-decoration: none !important;
    color: var(--ds-dark) !important;
    background: #fff !important;
    box-shadow: 0 14px 34px rgba(0, 0, 0, .3) !important;
    transition: transform .3s ease, box-shadow .3s ease !important;
}

.ds-btn::after {
    content: "" !important;
    position: absolute !important;
    top: 0 !important;
    left: -80% !important;
    width: 50% !important;
    height: 100% !important;
    background: linear-gradient(120deg, transparent, rgba(37, 112, 141, .35), transparent) !important;
    transform: skewX(-20deg) !important;
}

.ds-btn:hover {
    transform: translateY(-4px) !important;
    box-shadow: 0 20px 40px rgba(0, 0, 0, .35) !important;
    color: var(--ds-dark) !important;
}

.ds-btn:hover::after {
    left: 140% !important;
    transition: left .8s ease !important;
}

.ds-btn.primary {
    background: linear-gradient(90deg, var(--ds-primary), #3a93b4) !important;
    color: #fff !important;
    box-shadow: 0 14px 30px rgba(37, 112, 141, .4) !important;
}

.ds-btn.primary:hover {
    color: #fff !important;
}
.ds-fact:hover{
    cursor: pointer !important;
}
.ds-book p, .ds-book ul li span,.ds-book .ds-btn i, .ds-fact:hover span, .ds-fact:hover strong{
    color: #fff !important;
}
.ds-badge span{
    color: #000 !important;
}
.ds-btn.ghost {
    background: transparent !important;
    color: #fff !important;
    border: 2px solid rgba(255, 255, 255, .5) !important;
    box-shadow: none !important;
}

.ds-btn.ghost:hover {
    background: #fff !important;
    color: var(--ds-dark) !important;
}

.ds-btn .pulse-dot {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    background: #2ee59d;
    box-shadow: 0 0 0 0 rgba(46, 229, 157, .7);
    animation: ds-pulse 1.8s infinite;
}

@keyframes ds-pulse {
    70% {
        box-shadow: 0 0 0 12px rgba(46, 229, 157, 0);
    }

    100% {
        box-shadow: 0 0 0 0 rgba(46, 229, 157, 0);
    }
}

/* hero photo */
.ds-photo-wrap {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    min-height: 520px;
}

.ds-ring {
    position: absolute;
    border-radius: 50%;
    left: 50%;
    bottom: -120px;
    transform: translateX(-50%);
}

.ds-ring.r1 {
    width: 520px;
    height: 520px;
    border: 2px dashed rgba(111, 211, 240, .45);
    animation: ds-spin 40s linear infinite;
}

.ds-ring.r2 {
    width: 420px;
    height: 420px;
    border: 1px solid rgba(255, 255, 255, .22);
    animation: ds-spin 28s linear infinite reverse;
}

.ds-ring.r3 {
    width: 340px;
    height: 340px;
    background: radial-gradient(circle, rgba(111, 211, 240, .45), rgba(37, 112, 141, .1) 70%);
    animation: ds-breathe 5s ease-in-out infinite;
}

@keyframes ds-spin {
    to {
        transform: translateX(-50%) rotate(360deg);
    }
}

@keyframes ds-breathe {
    50% {
        transform: translateX(-50%) scale(1.12);
    }
}

.ds-photo {
    position: relative;
    z-index: 3;
    max-height: 560px;
    max-width: 100%;
    object-fit: contain;
    filter: drop-shadow(0 24px 40px rgba(0, 0, 0, .4));
    transition: transform .2s ease-out;
    will-change: transform;
}

.ds-badge {
    position: absolute;
    z-index: 4;
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 18px;
    border-radius: 18px;
    background: rgba(255, 255, 255, .14);
    border: 1px solid rgba(255, 255, 255, .28);
    backdrop-filter: blur(12px);
    box-shadow: 0 16px 36px rgba(0, 0, 0, .25);
    animation: ds-bob 6s ease-in-out infinite;
}

.ds-badge i {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    display: grid;
    place-items: center;
    background: var(--ds-accent);
    color: var(--ds-deep);
    font-size: 17px;
}

.ds-badge strong {
    display: block;
    font-size: 20px;
    line-height: 1.1;
}

.ds-badge span {
    font-size: 12px;
    opacity: .85;
}

.ds-badge.b1 {
    top: 12%;
    left: 0;
}

.ds-badge.b2 {
    top: 44%;
    right: -2%;
    animation-delay: -2s;
}

.ds-badge.b3 {
    bottom: 14%;
    left: 2%;
    animation-delay: -4s;
}

@keyframes ds-bob {
    50% {
        transform: translateY(-16px);
    }
}

/* marquee */
.ds-marquee {
    margin-top: 70px;
    padding: 16px 0;
    background: rgba(255, 255, 255, .07);
    border-top: 1px solid rgba(255, 255, 255, .14);
    overflow: hidden;
    white-space: nowrap;
}

.ds-marquee-track {
    display: inline-flex;
    gap: 46px;
    animation: ds-marq 28s linear infinite;
}

.ds-marquee span {
    font-weight: 600;
    letter-spacing: .6px;
    opacity: .85;
}

.ds-marquee i {
    color: var(--ds-accent);
    margin-right: 12px;
}

@keyframes ds-marq {
    to {
        transform: translateX(-50%);
    }
}

/* ================= STICKY NAV ================= */
.ds-subnav {
    position: sticky;
    top: 0;
    z-index: 900;
    background: rgba(255, 255, 255, .92);
    backdrop-filter: blur(14px);
    border-bottom: 1px solid #e3edf1;
}

.ds-subnav-in {
    display: flex;
    gap: 6px;
    overflow-x: auto;
    padding: 10px 0;
    scrollbar-width: none;
}

.ds-subnav-in::-webkit-scrollbar {
    display: none;
}

.ds-subnav a {
    flex: none;
    padding: 9px 20px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    color: var(--ds-muted);
    text-decoration: none;
    transition: all .3s;
}

.ds-subnav a:hover {
    color: var(--ds-primary);
    background: var(--ds-soft);
}

.ds-subnav a.active {
    background: var(--ds-primary);
    color: #fff;
    box-shadow: 0 8px 18px rgba(37, 112, 141, .3);
}

/* ================= SECTIONS ================= */
.ds-sec {
    padding: 80px 0 10px;
}

.ds-eyebrow {
    display: inline-block;
    color: var(--ds-primary);
    background: var(--ds-soft);
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 14px;
}

.ds-title {
    font-size: clamp(27px, 3.4vw, 40px);
    font-weight: 800;
    margin-bottom: 14px;
}

.ds-p {
    color: var(--ds-muted);
    line-height: 1.85;
    font-size: 16.5px;
}

/* about + side card */
.ds-about-card {
    background: #fff;
    border-radius: 28px;
    box-shadow: var(--ds-shadow);
    padding: 38px;
    position: relative;
    overflow: hidden;
}

.ds-about-card::before {
    content: "\201C";
    position: absolute;
    top: -10px;
    right: 26px;
    font-size: 150px;
    font-family: Georgia, serif;
    color: var(--ds-soft);
    line-height: 1;
}

.ds-facts {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
    margin-top: 28px;
}

.ds-fact {
    text-align: center;
    padding: 20px 10px;
    border-radius: 18px;
    background: var(--ds-soft);
    transition: transform .35s, background .35s, color .35s;
}

.ds-fact:hover {
    transform: translateY(-8px);
    background: var(--ds-primary);
    color: #fff;
}

.ds-fact strong {
    display: block;
    font-size: 32px;
    line-height: 1.1;
}

.ds-fact span {
    font-size: 16px;
    opacity: .85;
    padding: 0px 10px;
}

.ds-book {
    position: sticky;
    top: 90px;
    border-radius: 28px;
    padding: 34px 28px;
    color: #fff;
    text-align: center;
    overflow: hidden;
    background: linear-gradient(150deg, var(--ds-primary), var(--ds-dark));
    box-shadow: 0 24px 55px rgba(37, 112, 141, .4);
}

.ds-book::before {
    content: "";
    position: absolute;
    width: 220px;
    height: 220px;
    border-radius: 50%;
    top: -90px;
    right: -70px;
    background: rgba(255, 255, 255, .1);
    animation: ds-breathe2 6s ease-in-out infinite;
}

@keyframes ds-breathe2 {
    50% {
        transform: scale(1.25);
    }
}

.ds-book h3 {
    position: relative;
    font-weight: 800;
    font-size: 23px;
    margin-bottom: 8px;
}

.ds-book p {
    position: relative;
    opacity: .9;
    font-size: 14.5px;
    margin-bottom: 20px;
}

.ds-book ul {
    position: relative;
    list-style: none;
    padding: 0;
    margin: 0 0 24px;
    text-align: left;
}

.ds-book li {
    display: flex;
    gap: 10px;
    padding: 9px 0;
    border-bottom: 1px dashed rgba(255, 255, 255, .25);
    font-size: 14.5px;
}

.ds-book li i {
    color: var(--ds-accent);
    margin-top: 4px;
}

.ds-book .ds-btn {
    position: relative;
    width: 100%;
    justify-content: center;
}

/* treatments */
.ds-treat-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}

.ds-treat {
    position: relative;
    background: #fff;
    border-radius: 24px;
    padding: 32px 26px;
    box-shadow: 0 10px 34px rgba(20, 60, 80, .09);
    overflow: hidden;
    transition: transform .45s cubic-bezier(.2, .7, .2, 1), box-shadow .45s;
}

.ds-treat::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(150deg, var(--ds-primary), var(--ds-dark));
    opacity: 0;
    transition: opacity .45s;
    z-index: 0;
}

.ds-treat>* {
    position: relative;
    z-index: 1;
    transition: color .45s;
}

.ds-treat:hover {
    transform: translateY(-12px);
    box-shadow: 0 28px 60px rgba(37, 112, 141, .3);
}

.ds-treat:hover::after {
    opacity: 1;
}

.ds-treat:hover h3,
.ds-treat:hover p {
    color: #fff;
}

.ds-ti {
    width: 62px;
    height: 62px;
    border-radius: 18px;
    display: grid;
    place-items: center;
    font-size: 25px;
    background: var(--ds-soft);
    color: var(--ds-primary);
    margin-bottom: 20px;
    transition: transform .5s, background .4s, color .4s;
}

.ds-treat:hover .ds-ti {
    transform: rotateY(360deg);
    background: #fff;
}

.ds-treat h3 {
    font-size: 19px;
    font-weight: 700;
    margin-bottom: 8px;
}

.ds-treat p {
    color: var(--ds-muted);
    font-size: 14.5px;
    margin: 0;
    line-height: 1.7;
}

.ds-treat .n {
    position: absolute;
    top: 14px;
    right: 20px;
    font-size: 54px;
    font-weight: 800;
    color: rgba(37, 112, 141, .08);
    z-index: 1;
}

.ds-treat:hover .n {
    color: rgba(255, 255, 255, .14);
}

/* conditions */
.ds-cond {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    margin-top: 8px;
}

.ds-cond span {
    display: inline-flex;
    gap: 10px;
    align-items: center;
    padding: 13px 22px;
    border-radius: 50px;
    background: #fff;
    border: 1px solid #dbe9ef;
    font-weight: 600;
    font-size: 15px;
    box-shadow: 0 6px 18px rgba(20, 60, 80, .06);
    transition: all .35s;
}

.ds-cond span i {
    color: var(--ds-primary);
    transition: color .35s;
}

.ds-cond span:hover {
    background: var(--ds-primary) !important;
    color: #fff !important;
    transform: translateY(-5px) rotate(-1.5deg) !important;
    border-color: var(--ds-primary) !important;
}

.ds-cond span:hover i {
    color: #fff !important;
}

/* timeline */
.ds-tl {
    position: relative;
    padding-left: 38px;
}

.ds-tl::before {
    content: "";
    position: absolute;
    left: 11px;
    top: 6px;
    bottom: 6px;
    width: 3px;
    border-radius: 3px;
    background: linear-gradient(var(--ds-primary), var(--ds-accent));
}

.ds-tl-item {
    position: relative;
    background: #fff;
    border-radius: 18px;
    padding: 20px 24px;
    margin-bottom: 18px;
    box-shadow: 0 8px 26px rgba(20, 60, 80, .08);
    transition: transform .35s, box-shadow .35s;
}

.ds-tl-item:hover {
    transform: translateX(10px);
    box-shadow: 0 16px 38px rgba(37, 112, 141, .2);
}

.ds-tl-item::before {
    content: "";
    position: absolute;
    left: -35px;
    top: 24px;
    width: 17px;
    height: 17px;
    border-radius: 50%;
    background: #fff;
    border: 4px solid var(--ds-primary);
    box-shadow: 0 0 0 5px rgba(37, 112, 141, .15);
}

.ds-tl-item b {
    font-size: 17px;
}

.ds-tl-item small {
    display: block;
    color: var(--ds-grey);
    margin-top: 2px;
}

/* tech */
.ds-tech-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
}

.ds-tech {
    text-align: center;
    background: #fff;
    border-radius: 24px;
    padding: 26px 18px;
    box-shadow: 0 10px 30px rgba(20, 60, 80, .08);
    transition: transform .4s, box-shadow .4s;
}

.ds-tech:hover {
    transform: translateY(-10px);
    box-shadow: 0 24px 50px rgba(37, 112, 141, .25);
}

.ds-tech .im {
    height: 130px;
    display: grid;
    place-items: center;
    margin-bottom: 14px;
    border-radius: 18px;
    background: var(--ds-soft);
    overflow: hidden;
}

.ds-tech img {
    max-height: 110px;
    max-width: 86%;
    object-fit: contain;
    transition: transform .5s;
}

.ds-tech:hover img {
    transform: scale(1.15) rotate(-3deg);
}

.ds-tech b {
    display: block;
    font-size: 16px;
}

.ds-tech span {
    font-size: 13.5px;
    color: var(--ds-muted);
}

/* reviews */
.ds-rev-wrap {
    position: relative;
    border-radius: 34px;
    padding: 60px 40px;
    color: #fff;
    overflow: hidden;
    background: linear-gradient(135deg, var(--ds-deep), var(--ds-primary));
}

.ds-rev-wrap::before {
    content: "\201C";
    position: absolute;
    top: -10px;
    left: 10px;
    font-size: 280px;
    font-family: Georgia, serif;
    color: rgb(255 255 255 / 39%);
    line-height: 1;
}

.ds-rev-viewport {
    overflow: hidden;
}

.ds-rev-track {
    display: flex;
    transition: transform .7s cubic-bezier(.7, 0, .2, 1);
}

.ds-rev {
    flex: 0 0 100%;
    text-align: center;
    padding: 0 10px;
    color: #fff !important;
}

.ds-rev p {
    font-size: clamp(18px, 2.2vw, 25px);
    line-height: 1.7;
    font-weight: 500;
    max-width: 820px;
    margin: 0 auto 24px;
    color: #fff !important;
}

.ds-stars {
    color: #ffc94d;
    letter-spacing: 4px;
    margin-bottom: 14px;
    font-size: 18px;
}

.ds-rev b {
    display: block;
    font-size: 17px;
    color: #fff !important;
    margin: 10px 0px !important;
}

.ds-rev span {
    opacity: .75;
    font-size: 14px;
    color: #fff !important;
}

.ds-dots {
    display: flex;
    gap: 10px;
    justify-content: center;
    margin-top: 30px;
}

.ds-dots button {
    width: 11px;
    height: 11px;
    border-radius: 11px;
    border: 0;
    background: rgba(255, 255, 255, .35);
    cursor: pointer;
    transition: all .4s;
    padding: 0;
}

.ds-dots button.active {
    width: 34px;
    background: #fff;
}

/* faq */
.ds-faq-item {
    background: #fff;
    border-radius: 20px;
    margin-bottom: 14px;
    box-shadow: 0 8px 26px rgba(20, 60, 80, .07);
    border: 1px solid transparent;
    overflow: hidden;
    transition: border-color .3s, box-shadow .3s;
}

.ds-faq-item.open {
    border-color: var(--ds-primary);
    box-shadow: 0 16px 40px rgba(37, 112, 141, .2);
}

.ds-faq-q {
    width: 100%;
    display: flex;
    gap: 16px;
    align-items: center;
    text-align: left;
    background: none;
    border: 0;
    padding: 22px 26px;
    font-weight: 700;
    font-size: 17px;
    color: var(--ds-ink);
    cursor: pointer;
}

.ds-faq-q .ic {
    flex: none;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: grid;
    place-items: center;
    background: var(--ds-soft);
    color: var(--ds-primary);
    transition: transform .4s, background .4s, color .4s;
}

.ds-faq-item.open .ic {
    transform: rotate(135deg);
    background: var(--ds-primary);
    color: #fff;
}

.ds-faq-a {
    max-height: 0;
    overflow: hidden;
    transition: max-height .5s ease;
}

.ds-faq-a p {
    padding: 0 26px 24px 78px;
    margin: 0;
    color: var(--ds-muted);
    line-height: 1.8;
}

/* CTA */
.ds-cta {
    position: relative;
    overflow: hidden;
    margin: 70px 0 80px;
    border-radius: 36px;
    padding: 70px 30px;
    text-align: center;
    color: #fff;
    background: radial-gradient(circle at 20% 20%, #2a8cb0, var(--ds-dark) 70%);
}

.ds-cta::before,
.ds-cta::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    border: 2px solid rgba(255, 255, 255, .14);
    animation: ds-ripple 6s ease-out infinite;
    left: 50%;
    top: 50%;
    width: 200px;
    height: 200px;
    margin: -100px 0 0 -100px;
}

.ds-cta::after {
    animation-delay: -3s;
}

@keyframes ds-ripple {
    from {
        transform: scale(.4);
        opacity: 1;
    }

    to {
        transform: scale(7);
        opacity: 0;
    }
}

.ds-cta>* {
    position: relative;
    z-index: 2;
}

.ds-cta h2 {
    font-weight: 800;
    font-size: clamp(26px, 3.6vw, 44px);
    margin-bottom: 12px;
}

.ds-cta p {
    opacity: .9;
    margin-bottom: 28px;
    color: #fff !important;
    margin-bottom: 30px !important;
}


@media (max-width: 991px) {
    .ds-photo-wrap {
        min-height: 420px;
        margin-top: 40px;
    }

    .ds-photo {
        max-height: 430px;
    }

    .ds-ring.r1 {
        width: 400px;
        height: 400px;
    }

    .ds-ring.r2 {
        width: 320px;
        height: 320px;
    }

    .ds-ring.r3 {
        width: 260px;
        height: 260px;
    }

    .ds-treat-grid,
    .ds-tech-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .ds-book {
        position: static;
        margin-top: 30px;
    }
}

@media (max-width: 640px) {
    .ds-hero {
        padding-top: 40px;
    }

    .ds-badge {
        padding: 9px 12px;
    }

    .ds-badge i {
        width: 34px;
        height: 34px;
    }

    .ds-badge strong {
        font-size: 16px;
    }

    .ds-badge.b2 {
        right: 0;
    }

    .ds-treat-grid,
    .ds-tech-grid {
        grid-template-columns: 1fr;
    }

    .ds-facts {
        grid-template-columns: 1fr;
    }

    .ds-about-card {
        padding: 26px 22px;
    }

    .ds-rev-wrap {
        padding: 44px 18px;
    }

    .ds-faq-a p {
        padding: 0 22px 22px;
    }

    .ds-faq-q {
        padding: 18px;
        font-size: 15.5px;
    }

    .ds-page {
        padding-bottom: 70px;
    }
}

@media (prefers-reduced-motion: reduce) {

    .ds-page *,
    .ds-page *::before,
    .ds-page *::after {
        animation: none !important;
        transition: none !important;
    }

    .ds-rv {
        opacity: 1;
        transform: none;
    }

    .ds-name .w>span {
        transform: none;
    }
}

@media only screen and (max-width:768px){
   .ds-page, body{
      overflow-x: hidden;
      width: 100% !important;
      max-width: 100% !important;
      position: relative;
      z-index: 9;
   }
   
   .ds-progress{
    display: none !important;
   }
   .ds-crumb a, .ds-crumb span{
    font-size: 13px !important;
   }
   .ds-crumb i{
    font-size: 11px !important;
   }
}
</style>
@endsection

@section('body')
<div class="ds-progress" id="dsProgress"></div>

<div class="ds-page">
  
    <header class="ds-hero">
        <div class="ds-grid-bg"></div>
        <span class="ds-orb o1"></span>
        <span class="ds-orb o2"></span>

        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <nav class="ds-crumb" aria-label="breadcrumb">
                        <a href="{{ url('/') }}">Home</a><i class="fa-solid fa-angle-right"></i>
                        <a href="{{ url('/doctors') }}">Doctors</a><i class="fa-solid fa-angle-right"></i>
                        <span>{{ $d['sname'] }}</span>
                    </nav>

                    <div class="ds-role">{{ $d['role'] }} &middot; Shubhanu Eye Hospital</div>

                    <h1 class="ds-name" aria-label="{{ $d['name'] }}">
                        @foreach(explode(' ', $d['name']) as $i => $word)
                        <span class="w"><span style="--i: {{ $i }}">{{ $word }}</span></span>
                        @endforeach
                    </h1>

                    <p class="ds-headline"><b>{{ $d['headline'] }}</b></p>
                    <p class="ds-short ds-rv" style="--d:.5s">{{ $d['short'] }}</p>

                    <div class="ds-quals ds-rv" style="--d:.65s">
                        @foreach($d['quals'] as $q)
                        <span class="ds-qual"><i class="fa-solid fa-graduation-cap"></i>{{ $q }}</span>
                        @endforeach
                    </div>

                    <div class="d-flex flex-wrap gap-3 ds-rv" style="--d:.8s">
                        <a href="javascript:void(0)" class="ds-btn showBookAppointment"><span class="pulse-dot"></span>
                            Book Appointment</a>
                        <a href="#about" class="ds-btn ghost">Know More <i class="fa-solid fa-arrow-down"></i></a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="ds-photo-wrap" id="dsPhotoWrap">
                        <span class="ds-ring r1"></span><span class="ds-ring r2"></span><span class="ds-ring r3"></span>
                        <img class="ds-photo" id="dsPhoto" src="{{ $d['img'] }}"
                            alt="{{ $d['name'] }} - {{ $d['headline'] }}" fetchpriority="high">

                        <div class="ds-badge b1"><i class="fa-solid fa-award"></i>
                            <div><strong>{{ $d['exp_years'] }}+</strong><span>Years Experience</span></div>
                        </div>
                        <div class="ds-badge b2"><i class="fa-solid fa-eye"></i>
                            <div><strong>Retina</strong><span>{{ $d['specialty'] }}</span></div>
                        </div>
                        <div class="ds-badge b3"><i class="fa-solid fa-calendar-check"></i>
                            <div><strong>Daily</strong><span>{{ $d['availability'] }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ds-marquee" aria-hidden="true">
            <div class="ds-marquee-track">
                @for($k = 0; $k < 2; $k++) @foreach($d['treatments'] as $t) <span><i
                        class="fa-solid fa-circle-check"></i>{{ $t['title'] }}</span>
                    @endforeach
                    @foreach($d['conditions'] as $c)
                    <span><i class="fa-solid fa-circle-check"></i>{{ $c }}</span>
                    @endforeach
                    @endfor
            </div>
        </div>
    </header>

    <div class="ds-subnav">
        <div class="container">
            <div class="ds-subnav-in" id="dsNav">
                <a href="#about" class="active">About</a>
                <a href="#treatments">Treatments</a>
                <a href="#conditions">Conditions</a>
                <a href="#education">Education</a>
                <a href="#technology">Technology</a>
                <a href="#reviews">Reviews</a>
                <a href="#faqs">FAQs</a>
            </div>
        </div>
    </div>

    <main class="container">

        <section class="ds-sec" id="about">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ds-about-card ds-rv l">
                        <span class="ds-eyebrow">About the Doctor</span>
                        <h2 class="ds-title">About {{ $d['name'] }}</h2>
                        @foreach($d['about'] as $para)
                        <p class="ds-p">{{ $para }}</p>
                        @endforeach

                        <div class="ds-facts">
                            <div class="ds-fact"><strong><span class="ds-count"
                                        data-to="{{ $d['exp_years'] }}">0</span>+</strong><span>Years of
                                    Experience</span></div>
                            <div class="ds-fact"><strong><span class="ds-count" data-to="100000"
                                        data-in="1">0</span>+</strong><span>Patients Treated at Hospital</span></div>
                            <div class="ds-fact"><strong><span class="ds-count" data-to="50000"
                                        data-in="1">0</span>+</strong><span>Procedures & Surgeries at Hospital</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="ds-book ds-rv l">
                        <h3>Consult {{ explode(' ', $d['name'])[0] }} {{ explode(' ', $d['name'])[1] }}</h3>
                        <p>Book your appointment and avoid waiting.</p>
                        <ul>
                            <li><i class="fa-solid fa-stethoscope"></i><span><b>Specialty:</b>
                                    {{ $d['specialty'] }}</span></li>
                            <li><i class="fa-solid fa-calendar-check"></i><span><b>Availability:</b>
                                    {{ $d['availability'] }}</span></li>
                            <li><i class="fa-solid fa-location-dot"></i><span><b>Location:</b> Shubhanu Eye Hospital,
                                    Haldwani</span></li>
                        </ul>
                        <a href="javascript:void(0)" class="ds-btn primary showBookAppointment"
                            style="background:#fff;color:var(--ds-dark)"><i class="fa-solid fa-calendar-check"></i> Book
                            Appointment</a>
                    </aside>
                </div>
            </div>
        </section>

        {{-- TREATMENTS --}}
        <section class="ds-sec" id="treatments">
            <div class="text-center mb-5 ds-rv">
                <span class="ds-eyebrow">Expertise</span>
                <h2 class="ds-title">Treatments & Procedures</h2>
                <p class="ds-p mx-auto" style="max-width:620px">Advanced diagnosis and treatment for retinal and
                    vitreous disorders.</p>
            </div>
            <div class="ds-treat-grid">
                @foreach($d['treatments'] as $i => $t)
                <article class="ds-treat ds-rv z" style="--d: {{ $i * 0.12 }}s">
                    <span class="n">0{{ $i + 1 }}</span>
                    <div class="ds-ti"><i class="fa-solid {{ $t['icon'] }}"></i></div>
                    <h3>{{ $t['title'] }}</h3>
                    <p>{{ $t['text'] }}</p>
                </article>
                @endforeach
            </div>
        </section>

        {{-- CONDITIONS --}}
        <section class="ds-sec" id="conditions">
            <div class="row align-items-center g-4">
                <div class="col-lg-4 ds-rv l">
                    <span class="ds-eyebrow">Conditions</span>
                    <h2 class="ds-title">Conditions Treated</h2>
                    <p class="ds-p">Common retina and vitreous conditions evaluated and managed.</p>
                </div>
                <div class="col-lg-8">
                    <div class="ds-cond">
                        @foreach($d['conditions'] as $i => $c)
                        <span class="ds-rv z" style="--d: {{ $i * 0.08 }}s"><i
                                class="fa-solid fa-circle-check"></i>{{ $c }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- EDUCATION --}}
        <section class="ds-sec" id="education">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 ds-rv l">
                    <span class="ds-eyebrow">Education</span>
                    <h2 class="ds-title">Qualifications & Training</h2>
                    <p class="ds-p">Specialist training in ophthalmology, followed by advanced fellowship training in
                        vitreo-retina.</p>
                </div>
                <div class="col-lg-7 ds-rv l">
                    <div class="ds-tl">
                        @foreach($d['quals'] as $q)
                        <div class="ds-tl-item"><b>{{ $q }}</b><small>{{ $d['name'] }}</small></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- TECHNOLOGY --}}
        <section class="ds-sec" id="technology">
            <div class="text-center mb-5 ds-rv">
                <span class="ds-eyebrow">Technology</span>
                <h2 class="ds-title">Advanced Equipment for Retina Care</h2>
                <p class="ds-p mx-auto" style="max-width:620px">Precise diagnosis and safer surgery supported by modern
                    technology.</p>
            </div>
            <div class="ds-tech-grid">
                @foreach($d['tech'] as $i => $t)
                <div class="ds-tech ds-rv z" style="--d: {{ $i * 0.12 }}s">
                    <div class="im"><img src="{{ $t['img'] }}" alt="{{ $t['name'] }}" loading="lazy"></div>
                    <b>{{ $t['name'] }}</b>
                    <span>{{ $t['text'] }}</span>
                </div>
                @endforeach
            </div>
        </section>

        {{-- REVIEWS --}}
        <section class="ds-sec" id="reviews">
            <div class="text-center mb-5 ds-rv">
                <span class="ds-eyebrow">Testimonials</span>
                <h2 class="ds-title">What Patients Say</h2>
            </div>
            <div class="ds-rev-wrap ds-rv z">
                <div class="ds-rev-viewport">
                    <div class="ds-rev-track" id="dsRevTrack">
                        @foreach($d['reviews'] as $r)
                        <div class="ds-rev">
                            <div class="ds-stars">★★★★★</div>
                            <p>{{ $r['text'] }}</p>
                            <b>{{ $r['name'] }}</b>
                            <span>Patient, Shubhanu Eye Hospital</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="ds-dots" id="dsDots">
                    @foreach($d['reviews'] as $i => $r)
                    <button type="button" class="{{ $i == 0 ? 'active' : '' }}"
                        aria-label="Review {{ $i + 1 }}"></button>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- FAQ --}}
        <section class="ds-sec" id="faqs">
            <div class="row g-5">
                <div class="col-lg-4 ds-rv l">
                    <span class="ds-eyebrow">FAQs</span>
                    <h2 class="ds-title">Frequently Asked Questions</h2>
                    <p class="ds-p">Everything you need to know before visiting {{ $d['name'] }}.</p>
                </div>
                <div class="col-lg-8">
                    @foreach($d['faqs'] as $i => $f)
                    <div class="ds-faq-item ds-rv {{ $i == 0 ? 'open' : '' }}" style="--d: {{ $i * 0.08 }}s">
                        <button type="button" class="ds-faq-q" aria-expanded="{{ $i == 0 ? 'true' : 'false' }}">
                            <span class="ic"><i class="fa-solid fa-plus"></i></span>
                            <span>{{ $f['q'] }}</span>
                        </button>
                        <div class="ds-faq-a">
                            <p>{{ $f['a'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- CTA --}}
        <section class="ds-cta ds-rv z">
            <h2>Take the first step towards better vision</h2>
            <p>Book an appointment with {{ $d['name'] }} at Shubhanu Eye Hospital, Haldwani.</p>
            <a href="javascript:void(0)" class="ds-btn showBookAppointment"><span class="pulse-dot"></span> Book
                Appointment</a>
        </section>
    </main>
</div>


<script>
document.addEventListener("DOMContentLoaded", function() {

    /* scroll progress */
    var bar = document.getElementById("dsProgress");

    function onScroll() {
        var h = document.documentElement;
        var p = (h.scrollTop || document.body.scrollTop) / ((h.scrollHeight - h.clientHeight) || 1);
        bar.style.width = (p * 100) + "%";
    }
    window.addEventListener("scroll", onScroll, {
        passive: true
    });
    onScroll();

    /* reveal */
    var rv = document.querySelectorAll(".ds-rv");
    if ("IntersectionObserver" in window) {
        var io = new IntersectionObserver(function(en) {
            en.forEach(function(e) {
                if (e.isIntersecting) {
                    e.target.classList.add("in");
                    io.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.12
        });
        rv.forEach(function(el) {
            io.observe(el);
        });
    } else {
        rv.forEach(function(el) {
            el.classList.add("in");
        });
    }

    /* counters (start when visible) */
    var counters = document.querySelectorAll(".ds-count");

    function runCount(el) {
        var to = parseInt(el.dataset.to, 10),
            indian = el.dataset["in"] === "1",
            t0 = null,
            dur = 2000;

        function step(ts) {
            if (!t0) t0 = ts;
            var p = Math.min((ts - t0) / dur, 1),
                v = Math.floor(to * (1 - Math.pow(1 - p, 3)));
            el.textContent = indian ? v.toLocaleString("en-IN") : v;
            if (p < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }
    if ("IntersectionObserver" in window) {
        var cio = new IntersectionObserver(function(en) {
            en.forEach(function(e) {
                if (e.isIntersecting) {
                    runCount(e.target);
                    cio.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.6
        });
        counters.forEach(function(c) {
            cio.observe(c);
        });
    } else {
        counters.forEach(runCount);
    }

    /* mouse parallax on hero photo (desktop) */
    var wrap = document.getElementById("dsPhotoWrap"),
        photo = document.getElementById("dsPhoto");
    if (wrap && photo && window.matchMedia("(hover: hover) and (min-width: 992px)").matches) {
        wrap.addEventListener("mousemove", function(e) {
            var r = wrap.getBoundingClientRect();
            var x = (e.clientX - r.left) / r.width - 0.5,
                y = (e.clientY - r.top) / r.height - 0.5;
            photo.style.transform = "translate(" + (x * 22) + "px," + (y * 14) + "px) scale(1.02)";
        });
        wrap.addEventListener("mouseleave", function() {
            photo.style.transform = "";
        });
    }

    /* sub nav scrollspy */
    var links = document.querySelectorAll("#dsNav a");
    var secs = Array.prototype.map.call(links, function(a) {
        return document.querySelector(a.getAttribute("href"));
    });

    function spy() {
        var pos = window.scrollY + 160,
            cur = 0;
        secs.forEach(function(s, i) {
            if (s && s.offsetTop <= pos) cur = i;
        });
        links.forEach(function(a, i) {
            a.classList.toggle("active", i === cur);
        });
        var act = links[cur];
        if (act && act.parentNode.scrollWidth > act.parentNode.clientWidth) {
            act.parentNode.scrollTo({
                left: act.offsetLeft - 20,
                behavior: "smooth"
            });
        }
    }
    window.addEventListener("scroll", spy, {
        passive: true
    });
    links.forEach(function(a) {
        a.addEventListener("click", function(e) {
            var t = document.querySelector(a.getAttribute("href"));
            if (t) {
                e.preventDefault();
                window.scrollTo({
                    top: t.offsetTop - 70,
                    behavior: "smooth"
                });
            }
        });
    });
    spy();

    /* reviews slider */
    var track = document.getElementById("dsRevTrack");
    var dots = document.querySelectorAll("#dsDots button");
    var idx = 0,
        timer;

    function go(i) {
        idx = (i + dots.length) % dots.length;
        track.style.transform = "translateX(-" + (idx * 100) + "%)";
        dots.forEach(function(d, k) {
            d.classList.toggle("active", k === idx);
        });
    }

    function auto() {
        clearInterval(timer);
        timer = setInterval(function() {
            go(idx + 1);
        }, 6000);
    }
    dots.forEach(function(d, k) {
        d.addEventListener("click", function() {
            go(k);
            auto();
        });
    });
    if (dots.length) auto();

    /* faq accordion */
    var items = document.querySelectorAll(".ds-faq-item");

    function setH(item, open) {
        var a = item.querySelector(".ds-faq-a");
        a.style.maxHeight = open ? a.scrollHeight + "px" : "0px";
        item.classList.toggle("open", open);
        item.querySelector(".ds-faq-q").setAttribute("aria-expanded", open ? "true" : "false");
    }
    items.forEach(function(item) {
        item.querySelector(".ds-faq-q").addEventListener("click", function() {
            var wasOpen = item.classList.contains("open");
            items.forEach(function(o) {
                setH(o, false);
            });
            if (!wasOpen) setH(item, true);
        });
    });
    items.forEach(function(it) {
        if (it.classList.contains("open")) setH(it, true);
    });
});
</script>
@endsection