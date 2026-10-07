@extends('templates.front.main')
@section('metainfo')
<title>Thank you | Shubhanu Eye Hospital</title>
@endsection

@section('customcss')
<link rel="stylesheet" href="/assets/front/css/banner.css">
<link rel="stylesheet" href="/assets/front/css/career.css">
<style>

:root {
    --hcolor: #000;
    --pcolor: #453d3d;
    --brandcolor: #24748c;

    --fontPoppins: "Poppins", sans-serif;
    --fontKonkhmer: "Konkhmer Sleokchher", system-ui;
    --fontAlexandria: "Alexandria", sans-serif;
}


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    min-height: 100vh;
    background: #f7fbfc;
    color: var(--hcolor);
    font-family: var(--fontPoppins);
    overflow-x: hidden;
}


.thankyou-section {
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
    padding: 70px 0;
}


.thankyou-section::before {
    content: "";
    position: absolute;
    width: 650px;
    height: 650px;
    border-radius: 50%;
    background: rgba(36, 116, 140, 0.06);
    top: -280px;
    right: -180px;
}


.thankyou-section::after {
    content: "";
    position: absolute;
    width: 450px;
    height: 450px;
    border-radius: 50%;
    background: rgba(36, 116, 140, 0.04);
    bottom: -220px;
    left: -180px;
}


.thankyou-container {
    position: relative;
    z-index: 2;
}

.hospital-brand {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 45px;
    animation: fadeDown 0.8s ease forwards;
}


.brand-mark {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: var(--brandcolor);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 21px;
    box-shadow: 0 10px 25px rgba(36, 116, 140, 0.22);
}


.brand-name {
    font-family: var(--fontAlexandria);
    font-size: 17px;
    font-weight: 600;
    color: var(--hcolor);
    letter-spacing: -0.3px;
}

.thankyou-content {
    max-width: 850px;
    margin: auto;
    text-align: center;
}


.success-wrapper {
    position: relative;
    width: 115px;
    height: 115px;
    margin: 0 auto 35px;
}


.success-ring {
    position: absolute;
    inset: 0;
    border: 1px solid rgba(36, 116, 140, 0.22);
    border-radius: 50%;
    animation: pulseRing 2s infinite;
}


.success-ring:nth-child(2) {
    inset: 10px;
    animation-delay: 0.25s;
}


.success-icon {
    position: absolute;
    inset: 20px;
    border-radius: 50%;
    background: #139503;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 34px;
    box-shadow: 0 18px 40px rgba(36, 116, 140, 0.28);
    animation: successPop 0.7s cubic-bezier(.17,.67,.36,1.3) 0.3s both;
}

.thankyou-actions i{
    color: #fff !important;
}

.success-icon i {
    animation: checkAnimation 0.5s ease 0.9s both;
    color: #fff;
}


.eyebrow {
    font-family: var(--fontPoppins);
    color: var(--brandcolor);
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    margin-bottom: 15px;
    animation: fadeUp 0.7s ease 0.2s both;
}


.thankyou-content h1 {
    font-family: var(--fontAlexandria);
    font-size: clamp(42px, 6vw, 76px);
    line-height: 1.08;
    font-weight: 600;
    letter-spacing: -3px;
    margin-bottom: 22px;
    animation: fadeUp 0.7s ease 0.35s both;
}


.thankyou-content h1 span {
    color: var(--brandcolor);
}


.thankyou-content > p {
    max-width: 620px;
    margin: 0 auto;
    color: var(--pcolor);
    font-family: var(--fontPoppins);
    font-size: 16px;
    line-height: 1.9;
    animation: fadeUp 0.7s ease 0.5s both;
}

.thankyou-info {
    max-width: 620px;
    margin: 40px auto 0;
    padding: 18px 22px;
    background: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(36, 116, 140, 0.10);
    border-radius: 16px;
    display: flex;
    align-items: center;
    gap: 15px;
    text-align: left;
    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.045);
    backdrop-filter: blur(10px);
    animation: fadeUp 0.7s ease 0.65s both;
}


.info-icon {
    flex: 0 0 43px;
    width: 43px;
    height: 43px;
    border-radius: 12px;
    background: rgba(36, 116, 140, 0.09);
    color: var(--brandcolor);
    display: flex;
    align-items: center;
    justify-content: center;
}


.thankyou-info strong {
    display: block;
    font-family: var(--fontAlexandria);
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 3px;
}


.thankyou-info span {
    font-size: 12px;
    color: #756f6f;
}

.thankyou-actions {
    display: flex;
    justify-content: center;
    gap: 14px;
    margin-top: 35px;
    animation: fadeUp 0.7s ease 0.8s both;
}


.btn-home {
    min-width: 155px;
    padding: 14px 24px;
    border-radius: 10px;
    background: var(--brandcolor);
    border: 1px solid var(--brandcolor);
    color: #fff;
    text-decoration: none;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.3s ease;
}


.btn-home:hover {
    background: #1c6378;
    color: #fff;
    box-shadow: 0 12px 25px rgba(36, 116, 140, 0.22);
}


.btn-back {
    min-width: 155px;
    padding: 14px 24px;
    border-radius: 10px;
    background: #fff;
    border: 1px solid #e1e7e9;
    color: var(--pcolor);
    text-decoration: none;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.3s ease;
}


.btn-back:hover {
    color: var(--brandcolor);
    border-color: var(--brandcolor);
    transform: translateY(-3px);
}


@keyframes successPop {

    0% {
        transform: scale(0);
        opacity: 0;
    }

    70% {
        transform: scale(1.12);
        opacity: 1;
    }

    100% {
        transform: scale(1);
        opacity: 1;
    }
}


@keyframes checkAnimation {

    0% {
        transform: scale(0) rotate(-45deg);
        opacity: 0;
    }

    100% {
        transform: scale(1) rotate(0);
        opacity: 1;
    }
}


@keyframes pulseRing {

    0% {
        transform: scale(0.8);
        opacity: 0;
    }

    30% {
        opacity: 1;
    }

    100% {
        transform: scale(1.2);
        opacity: 0;
    }
}


@keyframes fadeUp {

    from {
        opacity: 0;
        transform: translateY(25px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}


@keyframes fadeDown {

    from {
        opacity: 0;
        transform: translateY(-15px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 575px) {

    .thankyou-section {
        padding: 45px 18px;
    }

    .hospital-brand {
        margin-bottom: 50px;
    }

    .success-wrapper {
        width: 100px;
        height: 100px;
        margin-bottom: 30px;
    }

    .success-icon {
        inset: 18px;
        font-size: 28px;
    }

    .thankyou-content h1 {
        font-size: 42px;
        letter-spacing: -1.8px;
    }

    .thankyou-content > p {
        font-size: 14px;
        line-height: 1.8;
    }

    .thankyou-info {
        padding: 16px;
    }

    .thankyou-actions {
        flex-direction: column;
    }

    .btn-home, .btn-back {
        width: 100%;
    }
}

</style>
<title>Thank you | Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
@endsection
@section('body')
<section class="thankyou-section mb-5">
    <div class="container thankyou-container">
        <div class="thankyou-content">

            <div class="success-wrapper">
                <div class="success-ring"></div>
                <div class="success-ring"></div>
                <div class="success-icon">
                    <i class="fa-solid fa-check"></i>
                </div>
            </div>


            <div class="eyebrow">
                Submission Successful
            </div>


            <h1>
                Thank <span>You.</span>
            </h1>


            <p>
                Thank you for reaching out to Shubhanu Eye Hospital.
                Your request has been successfully received.
                Our team will review your details and get in touch with
                you shortly.
            </p>

            <div class="thankyou-actions">

                <a href="/" class="btn-home">
                    <i class="fa-solid fa-house me-2"></i>
                    Back to Home
                </a>

            </div>


        </div>

    </div>

</section>
<br><br><br><br>

@endsection