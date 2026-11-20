@extends('templates.front.main')
@section('metainfo')
<title>Contact us | Shubhanu Eye Hospital</title>
<meta name="description"
    content="Book your appointment, Call us today. Visit website, https://shubhanueyehospital.com/contacts/ for more information. Phone: +91 90689 91180">
<meta name="keywords"
    content="Shubhanu Eye Hospital, Contact Us, Eye Care Hospital, eye hospital in Haldwani, best eye hospital, eye specialist in Haldwani, eye care hospital, ophthalmology hospital, eye doctor, best eye doctor in Haldwani, cataract surgery, cataract treatment, advanced eye care, LASIK eye surgery, LASIK surgery in Haldwani, retina specialist, retina treatment, glaucoma treatment, glaucoma specialist, diabetic eye care, diabetic retinopathy treatment, pediatric eye care, eye checkup, comprehensive eye examination, refractive eye surgery, ICL eye surgery, squint eye treatment, cornea treatment, dry eye treatment, eye surgery in India, advanced eye hospital in India, super speciality eye hospital, comprehensive eye care, Retina & Vitreous Care, Orbit & Oculoplasty, Cornea Care, Glaucoma Care, Squint Care, Eye Trauma & Emergency, Cataract & Lens Surgery">
<meta name="author" content="Shubhanu Eye Hospital">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Contact us | Shubhanu Eye Hospital" />
<meta property="og:description"
    content="Book your appointment, Call us today. Visit website, https://shubhanueyehospital.com/contacts/ for more information. Phone: +91 90689 91180" />
<meta property="og:url" content="https://shubhanueyehospital.com/contact-us" />
<meta property="og:site_name" content="Shubhanu Eye Hospital" />
<meta property="og:image" content="https://shubhanueyehospital.com/assets/front/imgs/banners/1.webp" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="og:image:type" content="image/webp" />
<link rel="canonical" href="https://shubhanueyehospital.com/contact-us" />
@endsection
@section('customcss')
<style>
    .contact-sec {
  background: #fff;
}
.contact-sec input, .contact-sec textarea, .contact-sec select {
  border: 1px solid rgba(51, 51, 51, 0.5215686275);
}
.contact-sec form button {
  background: #24748c !important;
  color: #fff !important;
  border: 0px !important;
  border-radius: 12px !important;
}

.contact-sec-title {
  font-size: 42px;
  font-weight: 700;
  color: #24748c;
  line-height: 1.3;
  margin-bottom: 18px;
}

.contact-sec-divider {
  width: 90px;
  height: 4px;
  background: #24748c;
  margin: 0 auto 20px;
  border-radius: 30px;
}

.contact-sec-subtitle {
  color: #7b7b7b;
  font-size: 15px;
  max-width: 650px;
  margin: auto;
  line-height: 1.8;
}

.contact-sec-box {
  background: #fff;
  border-top: 3px solid #24748c;
  padding: 38px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
  height: 100%;
}

.contact-sec-heading {
  font-size: 22px;
  font-weight: 700;
  color: #1d2746;
  margin-bottom: 30px;
}

.contact-sec-input {
  border-radius: 0;
  min-height: 52px;
  border: 1px solid #e5e5e5;
  box-shadow: none;
  font-size: 15px;
}

.contact-sec-input:focus {
  border-color: #24748c;
  box-shadow: none;
}

textarea.contact-sec-input {
  min-height: 170px;
  resize: none;
}

.contact-sec-btn {
  background: #8bc34a;
  color: #fff;
  border-radius: 0;
  padding: 13px 32px;
  font-weight: 600;
}

.contact-sec-btn:hover {
  background: #72ab34;
  color: #fff;
}

.contact-sec-info {
  display: flex;
  align-items: flex-start;
  gap: 18px;
  margin-bottom: 32px;
}

.contact-sec-icon {
  width: 48px;
  height: 48px;
  border: 1px solid #e8e8e8;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #24748c;
  font-size: 18px;
  flex-shrink: 0;
}

.contact-sec-info h3 {
  font-size: 19px;
  color: #1d2746;
  margin-bottom: 8px;
  font-weight: 600;
}

.contact-sec-info p {
  margin: 0;
  color: #777;
  line-height: 1.8;
  font-size: 15px;
}

.contact-sec-social {
  display: flex;
  gap: 15px;
  margin-top: 8px;
}

.contact-sec-social a {
  color: #666;
  font-size: 17px;
  transition: 0.3s;
}

.contact-sec-social a:hover {
  color: #24748c;
}

@media (max-width: 991px) {
  .contact-sec-title {
    font-size: 34px;
  }
  .contact-sec-heading {
    font-size: 26px;
  }
  .contact-sec-box {
    padding: 30px;
  }
}
@media (max-width: 767px) {
  .contact-sec {
    padding: 60px 0;
  }
  .contact-sec-title {
    font-size: 28px;
  }
  .contact-sec-heading {
    font-size: 24px;
  }
  .contact-sec-box {
    padding: 22px;
  }
  .contact-sec-info {
    gap: 15px;
  }
  .contact-sec-btn {
    width: 100%;
  }
}
</style>
@endsection
@section('body')
<section class="contact-sec py-5">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h1 class="contact-sec-title">
                    Get In Touch With Us
                </h1>
                <div class="contact-sec-divider"></div>
                <p class="contact-sec-subtitle">
                    For general questions, please send us a message and we’ll get right back to you. You can also call
                    us directly to speak with a member of our service team or insurance expert.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="contact-sec-box">

                    <h2 class="contact-sec-heading">
                        Feel free to contact us for any query.
                    </h2>

                    <form method="POST" id="contactForm">
                        @csrf

                        <div class="row g-3">

                            <div class="col-md-6">
                                <input type="text" name="fullname" class="form-control contact-sec-input" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="subject" class="form-control contact-sec-input" placeholder="Your Subject" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control contact-sec-input" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-6">
                                <input type="tel" class="form-control contact-sec-input phone-input" name="phone"
                                    placeholder="Enter 10 digit mobile number" inputmode="numeric"
                                    autocomplete="tel-national" maxlength="10" pattern="[6-9][0-9]{9}" required>
                                <small class="phone-error text-danger" aria-live="polite"></small>
                            </div>

                            <div class="col-12">
                                <textarea rows="6" name="message" class="form-control contact-sec-input"
                                    placeholder="Your Message" required></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="contact-submit contact-sec-btn">
                                    <span class="text-white" id="prebuttontext">Submit Message</span>
                                    <span class="text-white" id="CtSpinner"><img src="/assets/front/imgs/spinner.gif"
                                            width="20px"> Waiting</span>
                                </button>
                            </div>

                        </div>

                    </form>

                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4">

                <div class="contact-sec-box">

                    <h2 class="contact-sec-heading mb-4">
                        Contact Information
                    </h2>

                    <!-- Address -->
                    <div class="contact-sec-info">
                        <div class="contact-sec-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div>
                            <h3>Address</h3>
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
                            <h3>Opening Hours</h3>
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
                            <h3>Contact</h3>
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
                            <h3>Social Contact</h3>

                            <div class="contact-sec-social">

                                <a target="_blank" href="https://www.facebook.com/shubhanueyehospital"><i
                                        class="fab fa-facebook-f"></i></a>

                                <a target="_blank" href="https://www.instagram.com/shubhanueyehospital"><i
                                        class="fab fa-instagram"></i></a>

                                <a target="_blank" href="https://pin.it/63bt5cuV3"><i
                                        class="fab fa-pinterest-p"></i></a>

                                <a target="_blank" href="https://www.youtube.com/@shubhanueyehospital"><i
                                        class="fab fa-youtube"></i></a>

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
@section('customjs')
<script>
$(function () {
    const form = $("#contactForm");
    if (!form.length) {
        console.error("contact form not found.");
        return;
    }
    form.on("submit", function (event) {
        event.preventDefault();
        const submitButton = form.find(".contact-submit");
        const buttonText = $("#prebuttontext");
        const spinner = $("#CtSpinner");
        buttonText.hide();
        spinner.css("display", "block");
        submitButton.prop("disabled", true);
        $.ajax({
            type: "POST",
            url: "/submit-form",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                const success =
                    res === true ||
                    res === 1 ||
                    res === "1" ||
                    res === "true" ||
                    (res && res.success === true);
                if (success) {
                    window.location.href = "/thank-you";
                    return;
                }
                console.error("Unexpected server response:", res);
                alert("Application submit nahi hui. Server response check karein.");
            },
            error: function (xhr) {
                console.error("Contact form error:", xhr.status, xhr.responseText);
                if (xhr.status === 419) {
                    alert("Session expire ho gaya hai. Page refresh karke dobara try karein.");
                }
            },
            complete: function () {
                spinner.hide();
                buttonText.show();
                submitButton.prop("disabled", false);
            }
        });
    });
});
</script>
@endsection