@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/front/css/banner.css">
<link rel="stylesheet" href="/assets/front/css/career.css">
<style>
    .cv-upload {
    position: relative;
    border: 1px dashed #ccc;
    border-radius: 10px;
    padding: 25px;
    cursor: pointer;
}

.cv-upload input[type="file"] {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: pointer;
}

.upload-text {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
}

.upload-text i {
    font-size: 32px;
}

.upload-text span {
    font-weight: 600;
}

.upload-text small {
    color: #777;
}

.selected-file {
    align-items: center;
    justify-content: space-between;
    gap: 15px;
}

.file-info {
    display: flex;
    align-items: center;
    gap: 12px;
    min-width: 0;
}

.file-info > i {
    font-size: 30px;
}

.file-info div {
    display: flex;
    flex-direction: column;
    min-width: 0;
}

.file-name {
    font-weight: 600;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.file-info small {
    color: #777;
    margin-top: 3px;
}

.remove-file {
    flex-shrink: 0;
    border: 0;
    background: transparent;
    color: #dc3545;
    font-size: 14px;
    cursor: pointer;
}

.remove-file:hover {
    color: #a71d2a;
}
</style>
<title>Career | Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
@endsection
@section('body')
<x-mainbanner />
<section class="career-section pt-5 mt-3">
    <div class="container-fluid">
        <div class="row g-5">

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

                    <div class="career-image mt-3">
                        <img src="assets/front/imgs/career/career-left-1.webp" alt="Career Opportunities"
                            class="img-fluid">
                    </div>

                </div>
            </div>


            <!-- RIGHT FORM -->
            <div class="col-lg-6 mb-5">
                <div class="career-form-box mb-5">

                    <div class="form-heading">
                        <h3>Apply for a Position</h3>
                        <p>Fill in your details and submit your CV.</p>
                    </div>

                    <form action="#" method="POST" enctype="multipart/form-data">

                        <!-- Full Name -->
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" id="full_name" name="full_name" class="form-control"
                                placeholder="Enter your full name" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter your email address" required>
                        </div>

                        <!-- Phone -->
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control"
                                placeholder="Enter your phone number" required>
                        </div>

                        <!-- Designation -->
                        <div class="form-group">
                            <label for="designation">Select Designation</label>

                            <select id="designation" name="designation" class="form-select" required>

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

                                    <button type="button" class="remove-file" id="removeFile" style="position: relative;z-index: 9;">
                                        <i class="bi bi-x-lg"></i>
                                        Remove
                                    </button>
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
<script>
    const cvInput = document.getElementById('cv');
    const uploadText = document.getElementById('uploadText');
    const selectedFile = document.getElementById('selectedFile');
    const fileName = document.getElementById('fileName');
    const fileSize = document.getElementById('fileSize');
    const removeFile = document.getElementById('removeFile');

    cvInput.addEventListener('change', function () {
        const file = this.files[0];

        if (!file) return;

        fileName.textContent = file.name;
        fileSize.textContent = formatFileSize(file.size);

        uploadText.style.display = 'none';
        selectedFile.style.display = 'block';
        selectedFile.style.textAlign = 'center';
    });

    removeFile.addEventListener('click', function () {
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