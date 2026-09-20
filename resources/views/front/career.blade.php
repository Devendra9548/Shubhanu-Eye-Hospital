@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/front/css/banner.css">
<link rel="stylesheet" href="/assets/front/css/career.css">
<title>Career | Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
@endsection
@section('body')
<x-mainbanner />
<section class="career-section py-5">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6">
                <div class="career-content">

                    <span class="career-tag">JOIN OUR TEAM</span>

                    <h2>
                        Build Your <span>Career</span><br>
                        With Us
                    </h2>

                    <p class="career-description">
                        Be a part of a passionate team where your skills,
                        ideas, and dedication can make a meaningful difference.
                        Explore exciting career opportunities and grow with us.
                    </p>

                    <div class="career-image">
                        <img src="assets/images/career.jpg"
                             alt="Career Opportunities"
                             class="img-fluid">
                    </div>

                </div>
            </div>


            <!-- RIGHT FORM -->
            <div class="col-lg-6">
                <div class="career-form-box">

                    <div class="form-heading">
                        <h3>Apply for a Position</h3>
                        <p>Fill in your details and submit your CV.</p>
                    </div>

                    <form action="#" method="POST" enctype="multipart/form-data">

                        <!-- Full Name -->
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text"
                                   id="full_name"
                                   name="full_name"
                                   class="form-control"
                                   placeholder="Enter your full name"
                                   required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email"
                                   id="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Enter your email address"
                                   required>
                        </div>

                        <!-- Phone -->
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel"
                                   id="phone"
                                   name="phone"
                                   class="form-control"
                                   placeholder="Enter your phone number"
                                   required>
                        </div>

                        <!-- Designation -->
                        <div class="form-group">
                            <label for="designation">Select Designation</label>

                            <select id="designation"
                                    name="designation"
                                    class="form-select"
                                    required>

                                <option value="" selected disabled>
                                    Select a designation
                                </option>

                                <option value="orthotist">Orthotist</option>
                                <option value="hr">HR</option>
                                <option value="optm">OPTM</option>
                                <option value="pharmacist">Pharmacist</option>
                                <option value="receptionist">Receptionist</option>
                                <option value="marketing-executive">
                                    Marketing Executive
                                </option>
                                <option value="lab-technician">
                                    Lab Technician
                                </option>
                                <option value="ausman-mitra">
                                    Ayushman Mitra
                                </option>
                                <option value="tpa-associate">
                                    TPA Associate
                                </option>
                                <option value="surgery-counsellor">
                                    Surgery Counsellor
                                </option>
                                <option value="doctor-assistant">
                                    Doctor Assistant
                                </option>
                                <option value="admin">Admin</option>
                                <option value="admin-manager">
                                    Admin Manager
                                </option>

                            </select>
                        </div>

                        <!-- CV -->
                        <div class="form-group">
                            <label for="cv">Upload CV</label>

                            <div class="cv-upload">
                                <input type="file"
                                       id="cv"
                                       name="cv"
                                       accept=".pdf,.doc,.docx"
                                       required>

                                <div class="upload-text">
                                    <i class="bi bi-cloud-arrow-up"></i>
                                    <span>Choose your CV</span>
                                    <small>PDF, DOC or DOCX</small>
                                </div>
                            </div>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="career-submit">
                            Submit Application
                            <i class="bi bi-arrow-right"></i>
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
<br><br><br><br>
@endsection