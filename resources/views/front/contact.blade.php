@extends('templates.front.main')
@section('customcss')
<title>Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
<link rel="stylesheet" href="/assets/front/css/contact.css">
@endsection
@section('body')
<section class="contact-sec py-5">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="contact-sec-title">
                    We're Connected All Time To Help Our Patients
                </h2>
                <div class="contact-sec-divider"></div>
                <p class="contact-sec-subtitle">
                    There are many variations of passages of Lorem Ipsum available,
                    but the majority have suffered alteration in some form.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="contact-sec-box">

                    <h3 class="contact-sec-heading">
                        Feel free to contact us for any query.
                    </h3>

                    <form>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <input type="text" class="form-control contact-sec-input" placeholder="Your Name">
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control contact-sec-input" placeholder="Your Subject">
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control contact-sec-input" placeholder="Your Email">
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control contact-sec-input" placeholder="Your Phone">
                            </div>

                            <div class="col-12">
                                <textarea rows="6" class="form-control contact-sec-input"
                                    placeholder="Your Message"></textarea>
                            </div>

                            <div class="col-12">
                                <button class="btn contact-sec-btn">
                                    Submit Message
                                </button>
                            </div>

                        </div>

                    </form>

                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4">

                <div class="contact-sec-box">

                    <h3 class="contact-sec-heading mb-4">
                        Contact Information
                    </h3>

                    <!-- Address -->
                    <div class="contact-sec-info">
                        <div class="contact-sec-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div>
                            <h5>Address</h5>
                            <p>
                                Shubhanu Eye Hospital <br>
                                Kholi tower, Thandi Sadak, Civil Lines,<br>
                                Haldwani, Uttarakhand 263139 <br>
                            </p>
                        </div>
                    </div>

                    <!-- Opening -->
                    <div class="contact-sec-info">
                        <div class="contact-sec-icon">
                            <i class="fa-regular fa-clock"></i>
                        </div>

                        <div>
                            <h5>Opening Hours</h5>
                            <p>
                                Tue, Thur & Fri | 11AM - 5PM <br>
                                Wed & Sat | 11AM - 7PM
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-sec-info">
                        <div class="contact-sec-icon">
                            <i class="fa-regular fa-envelope"></i>
                        </div>

                        <div>
                            <h5>Contact</h5>
                            <p>
                              +91 90689 91180 <br>
                              shubhanueyehospital@gmail.com
                            </p>
                        </div>
                    </div>

                    <!-- Social -->
                    <div class="contact-sec-info mb-0">

                        <div class="contact-sec-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>

                        <div>
                            <h5>Social Contact</h5>

                            <div class="contact-sec-social">

                                <a href="#"><i class="fab fa-facebook-f"></i></a>

                                <a href="#"><i class="fab fa-twitter"></i></a>

                                <a href="#"><i class="fab fa-linkedin-in"></i></a>

                                <a href="#"><i class="fab fa-pinterest-p"></i></a>

                                <a href="#"><i class="fab fa-youtube"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
<section class="location-section">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3481.6822744783804!2d79.5295298755124!3d29.232898756564698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a09bf5e693f3dd%3A0x77c370655b81b1cd!2sShubhanu%20Eye%20Hospital!5e0!3m2!1sen!2sin!4v1786087494530!5m2!1sen!2sin"
        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="strict-origin-when-cross-origin"></iframe>
</section>
@endsection