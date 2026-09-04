<style>
    /* =========================================
   UNIQUE EYE DISEASE FOOTER
========================================= */

.ed-footer {
    position: relative;
    overflow: hidden;
    background: #1d3d66;
    padding: 48px 0 42px;
    color: #fff;
}

/* Subtle background decoration */
.ed-footer::before {
    content: "";
    position: absolute;
    width: 420px;
    height: 420px;
    border: 1px solid rgba(255,255,255,0.035);
    border-radius: 50%;
    top: -220px;
    right: -120px;
    pointer-events: none;
}

.ed-footer::after {
    content: "";
    position: absolute;
    width: 280px;
    height: 280px;
    border: 1px solid rgba(255,255,255,0.025);
    border-radius: 50%;
    bottom: -180px;
    left: -100px;
    pointer-events: none;
}


/* Main group */
.ed-footer-group {
    position: relative;
    z-index: 2;
}


/* Section heading */
.ed-footer-title {
    position: relative;
    display: inline-flex;
    align-items: center;
    margin-bottom: 22px;
    padding-left: 14px;

    color: rgba(255,255,255,0.28);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

/* Small vertical accent */
.ed-footer-title::before {
    content: "";
    position: absolute;
    left: 0;
    top: 2px;
    width: 3px;
    height: 12px;
    border-radius: 10px;
    background: rgba(255,255,255,0.18);
}


/* Links wrapper */
.ed-footer-links {
    display: block;
    line-height: 1.75;
}


/* Individual links */
.ed-footer-links a {
    position: relative;
    display: inline;
    color: rgba(255,255,255,0.88);
    font-size: 15px;
    font-weight: 400;
    line-height: 1.8;
    text-decoration: none;
    transition: color 0.25s ease;
}


/* Separator */
.ed-footer-links a:not(:last-child)::after {
    content: "|";
    margin: 0 6px;
    color: rgba(255,255,255,0.38);
    pointer-events: none;
}


/* Hover */
.ed-footer-links a:hover {
    color: #ffffff;
}


/* Space between sections */
.ed-footer-treatment {
    margin-top: 52px;
    padding-bottom: 48px;
}


/* Bottom elegant line */
.ed-footer-treatment::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;

    height: 1px;
    background: linear-gradient(
        90deg,
        rgba(255,255,255,0.08),
        rgba(255,255,255,0.18),
        rgba(255,255,255,0.08)
    );
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 767px) {

    .ed-footer {
        padding: 35px 0 30px;
    }

    .ed-footer-title {
        margin-bottom: 17px;
    }

    .ed-footer-links a {
        font-size: 14px;
        line-height: 1.9;
    }

    .ed-footer-treatment {
        margin-top: 38px;
        padding-bottom: 35px;
    }

}
</style>

<footer class="footer">
    <div class="container">

        <!-- Logo -->
        <div class="footer-logo text-center">
            <img src="/assets/logo.webp" alt="Logo" class="img-fluid">
        </div>

        <!-- Top Navigation -->
        <div class="footer-menu">
            <div class="row g-0 text-center">
                <div class="col"><a href="#">ABOUT US</a></div>
                <div class="col"><a href="#">GALLERY</a></div>
                <div class="col"><a href="#">CONSULTATIONS</a></div>
                <div class="col"><a href="#">CASE STUDIES</a></div>
                <div class="col"><a href="#">FAQ</a></div>
            </div>
        </div>

        <!-- Middle Section -->
        <div class="row footer-content">

            <!-- Contact -->
            <div class="col-lg-4 col-md-12 footer-box text-center">
                <h5>CONTACT</h5>

                <p>+91 90689 91180</p>
                <p>shubhanueyehospital@gmail.com</p>

                <p>Shubhanu Eye Hospital<br>
                    Kholi tower, Thandi Sadak, Civil Lines,<br>
                    Haldwani, Uttarakhand 263139
                </p>
            </div>

            <!-- Hours -->
            <div class="col-lg-4 col-md-12 footer-box text-center">
                <h5>HOURS</h5>

                <p><strong>*By appointment only</strong></p>

                <p>Tue, Thur & Fri | 11AM–5PM</p>
                <p>Wed & Sat | 11AM–7PM</p>

                <p><strong>CLOSED SUNDAY & MONDAY</strong></p>
            </div>

            <!-- Information -->
            <div class="col-lg-4 col-md-12 footer-box text-center">
                <h5>INFORMATION</h5>

                <ul>
                    <li><a href="{{route('blogs')}}">Blog</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

        </div>

        <!-- Bottom -->
        <div class="row footer-bottom align-items-center">

            <div class="col-lg-6 mb-4 mb-lg-0">

                <div class="footer-social">

                    <span class="footer-connect">
                        Let's connect
                    </span>

                    <a href="#"><i class="fab fa-facebook-f"></i></a>

                    <a href="#"><i class="fab fa-instagram"></i></a>

                    <a href="#"><i class="fab fa-pinterest-p"></i></a>

                </div>

            </div>

            <div class="col-lg-6">

                <label class="footer-news-title">
                    STAY IN THE KNOW WITH JOY ABENDMODE
                </label>

                <div class="footer-newsletter">

                    <input type="email" placeholder="Your email">

                    <button type="submit">
                        <i class="fa-regular fa-paper-plane"></i>
                    </button>

                </div>

            </div>

        </div>

    </div>
</footer>
<footer class="ed-footer">
    <div class="container">

        <!-- Eye Diseases -->
        <div class="ed-footer-group">
            <div class="ed-footer-title">
                Eye Diseases
            </div>

            <div class="ed-footer-links">
                <a href="#">Cataract</a>
                <a href="#">Glaucoma</a>
                <a href="#">Diabetic Retinopathy</a>
                <a href="#">Corneal Ulcer (Keratitis)</a>
                <a href="#">Fungal Keratitis</a>
                <a href="#">Macular Hole</a>
                <a href="#">Retinopathy Prematurity</a>
                <a href="#">Retinal Detachment</a>
                <a href="#">Keratoconus Treatment (Corneal Strengthening)</a>
                <a href="#">Macular Edema</a>
                <a href="#">Squint</a>
                <a href="#">Uveitis</a>
                <a href="#">Pterygium or Surfers Eye</a>
                <a href="#">Blepharitis</a>
                <a href="#">Nystagmus</a>
                <a href="#">Ptosis</a>
                <a href="#">Conjunctivitis</a>
                <a href="#">Cornea Transplantation</a>
                <a href="#">Behcets Disease</a>
                <a href="#">Computer Vision Syndrome</a>
                <a href="#">Hypertensive Retinopathy</a>
                <a href="#">Mucormycosis (Black Fungus)</a>
                <a href="#">Eye Twitching</a>
                <a href="#">Myopia</a>
                <a href="#">Stye</a>
                <a href="#">Central Serous Retinopathy</a>
                <a href="#">Hyperopia</a>
            </div>
        </div>


        <!-- Eye Treatment -->
        <div class="ed-footer-group ed-footer-treatment">
            <div class="ed-footer-title">
                Eye Treatment
            </div>

            <div class="ed-footer-links">
                <a href="#">Trabeculectomy Surgery for Glaucoma</a>
                <a href="#">Glaucoma Shunt Surgery</a>
                <a href="#">Silk LASIK</a>
                <a href="#">Laser Trabeculoplasty for Glaucoma Treatment</a>
                <a href="#">YAG Peripheral Iridotomy (YAG PI)</a>
                <a href="#">Minimally Invasive Glaucoma Surgery (MIGS)</a>
                <a href="#">Robotic Cataract</a>
                <a href="#">Central Serous Retinopathy (CSR)</a>
                <a href="#">Hyperopia</a>
                <a href="#">Stye Eye Treatment</a>
                <a href="#">Refractive Surgery</a>
                <a href="#">Contoura Lasik</a>
                <a href="#">Lasik Surgery</a>
                <a href="#">Flapless LASIK</a>
                <a href="#">Photorefractive Keratectomy (PRK)</a>
                <a href="#">Implantable Collamer Lens (ICL)</a>
                <a href="#">Oculoplasty</a>
                <a href="#">Eyelid & Eye Socket Correction (Oculoplasty)</a>
                <a href="#">Glued IOL</a>
                <a href="#">CAIRS Eye Surgery</a>
                <a href="#">Advanced Corneal Transplant (PDEK)</a>
                <a href="#">Pneumatic Retinopexy (PR)</a>
                <a href="#">Cornea Transplantation</a>
                <a href="#">Pinhole Pupilloplasty</a>
                <a href="#">Paediatric Ophthalmology</a>
                <a href="#">Cryopexy</a>
                <a href="#">Retina Injection Therapy (Anti-VEGF)</a>
                <a href="#">Cosmetic Eye Surgery</a>
                <a href="#">Dry Eye Treatment</a>
                <a href="#">Retinal Laser Photocoagulation</a>
                <a href="#">Retina Repair Surgery (Vitrectomy)</a>
                <a href="#">Scleral Buckle</a>
                <a href="#">Laser Cataract Surgery</a>
                <a href="#">Black Fungus Treatment & Diagnosis</a>
                <a href="#">Nystagmus Surgery</a>
                <a href="#">Neuro Ophthalmology</a>
            </div>
        </div>

    </div>
</footer>

<div class="copyright text-center">
    <p class="text-center p-0 m-0">Copyrights @2026-2027 Design and Developed By <a href="">Devendra Singh Chaudhary</a>
    </p>
</div>

<div class="book-an-appointment" id="bookAppointment">
    <div class="inner-rows">
        <div class="left-clm both-clms">
            <img src="/assets/front/imgs/12.jpg" alt="12" width="100%">
        </div>
        <div class="right-clm both-clms">
            <a href="javascript:void(0)" id="closebookAppointmentbtn" onclick="hideBookAnAppointment()">
               <i class="fa-regular fa-circle-xmark"></i>
            </a>
            <h2>Book an Appointment</h2>
            <form action="#" method="POST">
                @csrf

                <div class="mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                        required>
                </div>
                <!-- Name -->
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                        required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="phone" name="phone"
                        placeholder="Enter your phone number">
                </div>
                <div class="mb-3">
                    <select class="form-select" id="service" name="service">
                        <option value="">Select Service</option>
                        <option value="OPD">OPD</option>
                        <option value="Retinal surgery & Injection">
                            Retinal surgery & Injection
                        </option>
                        <option value="Lid Surgery">Lid Surgery</option>
                        <option value="Orbital Surgery">Orbital Surgery</option>
                        <option value="Eye tumors">Eye tumors</option>
                        <option value="Treatment of Watering eyes">
                            Treatment of Watering eyes
                        </option>
                        <option value="Ocular emergencies">
                            Ocular emergencies
                        </option>
                        <option value="Neuro-ophthalmology">
                            Neuro-ophthalmology
                        </option>
                        <option value="Artificial /prosthetic eyes">
                            Artificial /prosthetic eyes
                        </option>
                        <option value="Thyroid Eye Disease">
                            Thyroid Eye Disease
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="datetime-local" class="form-control" id="date" name="date">
                </div>

                <div class="mb-3">
                    <textarea class="form-control" id="comment" name="comment" rows="5" maxlength="2000"
                        placeholder="Enter your comment"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100 text-center">
                       <i class="fa-regular fa-calendar-days"></i> Book Now
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
document.querySelector("#showBookAppointment").addEventListener('click', function(){
    document.querySelector("#bookAppointment").style.display="flex";
});
document.querySelector("#showBookAppointment2").addEventListener('click', function(){
    document.querySelector("#bookAppointment").style.display="flex";
});

function hideBookAnAppointment(){
    document.querySelector("#bookAppointment").style.display="none";
}

</script>