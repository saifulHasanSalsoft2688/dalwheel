<?php
include('../layout/header.php');
?>
<div class="container-fluid p-0"> 
    <section class="authWrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="right-side">
                        <div class="formWrap">
                            <!-- Form  Start -->
                            <form action="../dashboard/index.php">
                                <div class="logo_wrapper"><img src="../assets/images/logo.png" class="img-fluid" alt="Logo"></div>
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
                                    <button class="main-btn w-100" type="button" data-target="#updatePassword" data-toggle="modal">Update</button>
                                    <a href="./login.php" class="colWhite d-block my-3 fw-500 text-decoration-underline"> Back to sign In </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include('../layout/auth-footer.php');
?>