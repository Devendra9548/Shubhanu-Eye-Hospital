@extends('templates.front.main')
@section('metainfo')
<title>Career | Shubhanu Eye Hospital</title>
<meta name="description" content="Explore career opportunities at Shubhanu Eye Hospital, Haldwani. Join our team and build a rewarding career in a professional and patient-focused eye care environment.">
<meta name="keywords" content="Shubhanu Eye Hospital, Shubhanu Eye Hospital Career, Eye Care Hospital, eye hospital in Haldwani, best eye hospital, eye specialist in Haldwani, eye care hospital, ophthalmology hospital, eye doctor, best eye doctor in Haldwani, cataract surgery, cataract treatment, advanced eye care, LASIK eye surgery, LASIK surgery in Haldwani, retina specialist, retina treatment, glaucoma treatment, glaucoma specialist, diabetic eye care, diabetic retinopathy treatment, pediatric eye care, eye checkup, comprehensive eye examination, refractive eye surgery, ICL eye surgery, squint eye treatment, cornea treatment, dry eye treatment, eye surgery in India, advanced eye hospital in India, super speciality eye hospital, comprehensive eye care, Retina & Vitreous Care, Orbit & Oculoplasty, Cornea Care, Glaucoma Care, Squint Care, Eye Trauma & Emergency, Cataract & Lens Surgery">
<meta name="author" content="Shubhanu Eye Hospital">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Career | Shubhanu Eye Hospital" />
<meta property="og:description" content="Explore career opportunities at Shubhanu Eye Hospital, Haldwani. Join our team and build a rewarding career in a professional and patient-focused eye care environment." />
<meta property="og:url" content="https://shubhanueyehospital.com/career" />
<meta property="og:site_name" content="Shubhanu Eye Hospital" />
<meta property="og:image" content="https://shubhanueyehospital.com/assets/front/imgs/banners/1.webp" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="og:image:type" content="image/webp" />
<link rel="canonical" href="https://shubhanueyehospital.com/career" />
@endsection
@section('customcss')
<link rel="stylesheet" href="/assets/front/css/banner.css">
<link rel="stylesheet" href="/assets/front/css/career.css">
<style>
</style>
<title>Career | Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
@endsection
@section('body')
<x-mainbanner img="/assets/front/imgs/career/career-banner.webp" pagename="Career" />
<section class="career-section pt-5 mt-3">
    <div class="container-fluid">
        <div class="row g-5">

            <div class="col-lg-6">
                <div class="career-content">

                    <span class="career-tag">JOIN OUR TEAM</span>

                    <h2>
                        Build Your <span>Career</span><br>
                        With Us
                    </h2>

                    <p class="career-description">
                        Join Shubhanu Eye Hospital, Haldwani, and grow your career in a professional, supportive, and
                        patient-focused eye care environment. Explore our current career opportunities and become part
                        of our team.
                    </p>

                    <div class="career-image mt-3">
                        <img src="assets/front/imgs/career/career-left-1.webp" alt="Career Opportunities"
                            class="img-fluid">
                    </div>

                </div>
            </div>


            <div class="col-lg-6 mb-5">
                <div class="career-form-box mb-5">

                    <div class="form-heading">
                        <h3>Apply for a Position</h3>
                        <p>Fill in your details and submit your CV.</p>
                    </div>

                    <form method="POST" id="careerform" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" id="full_name" name="name" class="form-control"
                                placeholder="Enter your full name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter your email address" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" class="form-control phone-input" name="phone" placeholder="Enter 10 digit mobile number" inputmode="numeric" autocomplete="tel-national" maxlength="10" pattern="[6-9][0-9]{9}" required>
                            <small class="phone-error text-danger" aria-live="polite"></small>
                        </div>

                        <div class="form-group">
                            <label for="designation">Select Designation</label>

                            <select id="designation" name="designation" class="form-select" required>
                                <option value="" selected disabled>Select a designation</option>
                                <option value="Orthotist">Orthotist</option>
                                <option value="HR">HR</option>
                                <option value="OPTM">OPTM</option>
                                <option value="Pharmacist">Pharmacist</option>
                                <option value="Receptionist">Receptionist</option>
                                <option value="Marketing Executive">Marketing Executive</option>
                                <option value="Lab Technician">Lab Technician</option>
                                <option value="Ayushman Mitra">Ayushman Mitra</option>
                                <option value="TPA Associate">TPA Associate</option>
                                <option value="Surgery Counsellor">Surgery Counsellor</option>
                                <option value="Doctor Assistant">Doctor Assistant</option>
                                <option value="Admin">Admin</option>
                                <option value="Admin Manager">Admin Manager</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="cv">Upload CV</label>
                            <div class="cv-upload" id="cvUpload">
                                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>

                                <div class="upload-text" id="uploadText">
                                    <i class="bi bi-cloud-arrow-up"></i>
                                    <span>Choose your CV</span>
                                    <small>PDF, DOC or DOCX</small>
                                </div>

                                <div class="selected-file" id="selectedFile" style="display: none;">
                                    <div class="file-info">
                                        <i class="bi bi-file-earmark-text"></i>

                                        <div>
                                            <span class="file-name" id="fileName"></span>
                                            <small id="fileSize"></small>
                                        </div>
                                    </div>

                                    <button type="button" class="remove-file" id="removeFile"
                                        style="position: relative;z-index: 9;">
                                        <i class="bi bi-x-lg"></i>
                                        Remove
                                    </button>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="career-submit">
                            <span class="text-white" id="prebuttontext">Submit Application</span>
                            <span class="text-white" id="CtSpinner"><img src="/assets/front/imgs/spinner.gif"
                                    width="20px"> Waiting</span>
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
@section('customjs')
<script>
$(function () {
    const form = $("#careerform");
    if (!form.length) {
        console.error("Career form not found.");
        return;
    }
    form.on("submit", function (event) {
        event.preventDefault();
        const submitButton = form.find(".career-submit");
        const buttonText = $("#prebuttontext");
        const spinner = $("#CtSpinner");
        buttonText.hide();
        spinner.css("display", "inline-flex");
        submitButton.prop("disabled", true);
        $.ajax({
            type: "POST",
            url: "/career",
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
                console.error("Career form error:", xhr.status, xhr.responseText);
                if (xhr.status === 419) {
                    alert("Session expire ho gaya hai. Page refresh karke dobara try karein.");
                } else if (xhr.status === 422) {
                    alert("Please form details aur CV file check karein.");
                } else {
                    alert("Application submit nahi hui. Please dobara try karein.");
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


<script>
const cvInput = document.getElementById('cv');
const uploadText = document.getElementById('uploadText');
const selectedFile = document.getElementById('selectedFile');
const fileName = document.getElementById('fileName');
const fileSize = document.getElementById('fileSize');
const removeFile = document.getElementById('removeFile');

cvInput.addEventListener('change', function() {
    const file = this.files[0];

    if (!file) return;

    fileName.textContent = file.name;
    fileSize.textContent = formatFileSize(file.size);

    uploadText.style.display = 'none';
    selectedFile.style.display = 'block';
    selectedFile.style.textAlign = 'center';
});

removeFile.addEventListener('click', function() {
    cvInput.value = '';

    fileName.textContent = '';
    fileSize.textContent = '';

    selectedFile.style.display = 'none';
    uploadText.style.display = 'flex';
});

function formatFileSize(bytes) {
    if (bytes < 1024) {
        return bytes + ' B';
    }

    if (bytes < 1024 * 1024) {
        return (bytes / 1024).toFixed(1) + ' KB';
    }

    return (bytes / (1024 * 1024)).toFixed(1) + ' MB';
}
</script>

@endsection