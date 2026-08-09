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