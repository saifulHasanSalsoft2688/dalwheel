<?php
$title = "Set New Password";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Set New Password ================== -->
        <div class="box my-4">
            <div class="d-flex align-items-center my-3 section-heading">
                <span class="backLink">
                    <i class="fas fa-arrow-left go-back-icon"></i>
                </span>
                <h6 class="section-heading mb-0">Set New Password</h6>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="my-4">
                            <label class="d-block prime-label mb-3 mx-md-3" for="cpassword">Current Password<span class="text-danger">*</span> </label>
                            <div class="position-relative passwordWrapper mb-2">
                                <input class="primary-inputs secInp" id="cpassword" type="password" placeholder="Enter current password">
                                <button type="button" class="not_btn passDisplay">
                                    <i class="fas fa-eye-slash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="my-4">
                            <label class="d-block prime-label mb-3 mx-md-3" for="password">New Password<span class="text-danger">*</span> </label>
                            <div class="position-relative passwordWrapper mb-2">
                                <input class="primary-inputs secInp" id="password" type="password" placeholder="Enter new password">
                                <button type="button" class="not_btn passDisplay">
                                    <i class="fas fa-eye-slash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="my-4">
                            <label class="d-block prime-label mb-3 mx-md-3" for="ConfPassword">Confirm Password <span class="text-danger">*</span> </label>
                            <div class="position-relative passwordWrapper mb-2">
                                <input class="primary-inputs secInp" id="ConfPassword" type="password" placeholder="Confirm Password">
                                <button type="button" class="not_btn passDisplay">
                                    <i class="fas fa-eye-slash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <button class="main-btn mt-3" data-bs-toggle="modal" data-bs-target="#passwordUpdated" type="button">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
?>
<!-- Password updated Modal -->
<div class="modal customModal fade" id="passwordUpdated" tabindex="-1" aria-labelledby="passwordUpdatedLabel" aria-hidden="true">
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
                <p>Password has been updated</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="sec-btn" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>