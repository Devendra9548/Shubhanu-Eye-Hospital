@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/front/css/about.css">
<title>Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
@endsection
@section('body')
<section class="ec-about-section py-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <span class="ec-about-badge">
                    <i class="fa-solid fa-circle"></i>
                    About Us
                </span>
                <h2 class="ec-about-title">
                    Trusted Eye Care for Every <span>Generation</span>
                </h2>
                <p class="ec-about-desc">
                    Shubhanu Eye Hospital is one of the leading Eye Hospitals in Uttarakhand,offering state of the art
                    modern diagnostic and therapeutic services with the highest quality ophthalmic care. Recognized as a
                    premier eye care service provider, this Hospital is empaneled with various national organizations
                    and leading health insurance companies.
                </p>
                <div class="row align-items-center mt-5">
                    <div class="col-sm-4 text-center mb-4 mb-sm-0">
                        <img src="/assets/front/imgs/eye.webp" class="img-fluid ec-eye-img" alt="Eye">
                    </div>
                    <div class="col-sm-8">
                        <ul class="ec-feature-list">
                            <li><i class="fa-solid fa-check"></i>Comprehensive Eye Exams</li>
                            <li><i class="fa-solid fa-check"></i>Experienced Eye Care Professionals</li>
                            <li><i class="fa-solid fa-check"></i>Advanced Diagnostic Technology</li>
                            <li><i class="fa-solid fa-check"></i>Wide Selection of Eyewear</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="ec-image-wrapper">
                    <div class="ec-main-image">
                        <img src="/assets/front/imgs/11.jpg" class="img-fluid" alt="Eye Care">
                    </div>
                    <div class="ec-small-image">
                        <img src="/assets/front/imgs/12.jpg" class="img-fluid" alt="Eye Care">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<br><br><br><br>
@endsection