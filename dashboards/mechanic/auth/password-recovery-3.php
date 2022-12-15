<?php
$title = "Set Password";
include('../layout/header.php');
?>
<section class="authWrapper">
    <!-- Header Strat -->
    <div class="authHead">
        <ul>
            <li><a href="./index.php">Sign In</a></li>
            <li class="colWhite">|</li>
            <li><a href="./signUp.php">Sign Up</a></li>
        </ul>
    </div>
    <!-- Header End -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="right-side">
                    <div class="formWrap">
                        <!-- Form  Start -->
                        <form action="../dashboard/index.php">
                            <div class="logo_wrapper"><img src="../../assets/images/logo.png" class="img-fluid" alt="Logo"></div>
                            <div class="text-center my-4 mb-5">
                                <h4 class="authPrimTxt">Password Recovery</h4>
                                <p class="primText fw500">Enter verification code to recover your password.</p>
                            </div>
                            <div class="mb-4">
                                <label class="d-block prime-label mb-3 mx-md-3" for="nPassword">New Password <span class="text-danger">*</span> </label>
                                <div class="position-relative passwordWrapper mb-2">
                                    <input class="primary-inputs passInput" id="nPassword" type="password" placeholder="Enter New Password">
                                    <button type="button" class="not_btn passDisplay">
                                        <i class="fas fa-eye-slash" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="d-block prime-label mb-3 mx-md-3" for="cPassword">Confirm Password <span class="text-danger">*</span> </label>
                                <div class="position-relative passwordWrapper mb-2">
                                    <input class="primary-inputs passInput" id="cPassword" type="password" placeholder="Confirm Password">
                                    <button type="button" class="not_btn passDisplay">
                                        <i class="fas fa-eye-slash" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <button class="main-btn w-100" type="button" data-bs-target="#passUpdated" data-bs-toggle="modal">Update</button>
                                <a href="index.php" class="colWhite d-block my-3 fw-500 text-decoration-underline"> Back to sign In </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('../layout/footer.php') ?>
<!-- Password Update Modal -->
<div class="modal customModal fade" id="passUpdated" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="passUpdatedLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal_img_wrap">
                    <img src="../../assets/images/true.png" class="img-fluid" alt="Modal Image">
                </div>
                <h4>Password Updated</h4>
                <p class="cGray">Password updated successfully!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="main-btn" data-bs-dismiss="modal" onclick="window.location.assign('index.php')">OK</button>
            </div>
        </div>
    </div>
</div>