<?php
$title = "Edit Profile";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Edit Profile Details ================== -->
        <div class="box my-4">
            <div class="d-flex align-items-center my-3 section-heading">
                <span class="backLink">
                    <i class="fas fa-arrow-left go-back-icon"></i>
                </span>
                <h6 class="section-heading mb-0">Edit Profile</h6>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-md-4">
                        <div class="myProfile position-relative">
                            <img src="../../assets/images/userProfile.png" id="profile-preview" alt="avatar" class="userAvatar img-fluid">
                            <button name="file" class="camera-btn" onclick="document.getElementById('uploadFile').click()"><i class="fas fa-pencil-alt"></i></button>
                            <input id="uploadFile" type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);" class="d-none">
                        </div>
                        <a href="./changePassword.php" class="text-decoration-underline text-danger fw600 my-3 d-block">Change Password</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="fullName">Full Name <span class="text-danger">*</span> </label>
                            <input type="text" id="fullName" class="primary-inputs secInp" placeholder="Enter Full Name" value="Elsa Robert">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-2 ms-0" for="fullName"> Email </label>
                            <input type="email" class="primary-inputs disableInputs p-0 secInp" disabled placeholder="Enter Email" value="elsa@sample.com">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-2 mx-md-2" for="phone">Phone Number <span class="text-danger">*</span> </label>
                            <input id="phone" name="phone" class="primary-inputs w-100 secInp" type="tel">
                        </div>
                        <button class="main-btn mt-3" type="button" type="button" data-bs-toggle="modal" data-bs-target="#profileUpdated">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
?>
<!-- Profile Updated Modal-->
<div class="modal customModal fade" id="profileUpdated" tabindex="-1" aria-labelledby="profileUpdatedLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal_img_wrap">
                    <img src="../../assets/images/true.png" class="img-fluid" alt="Modal Image">
                </div>
                <h4>Successfully</h4>
                <p>Profile has been updated</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="sec-btn" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>