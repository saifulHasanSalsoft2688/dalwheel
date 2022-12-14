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
                            <form action="profileDetails.php">
                                <div class="logo_wrapper"><img src="../assets/images/logo.png" class="img-fluid" alt="Logo"></div>
                                <div class="text-center">
                                    <h4 class="authPrimTxt">Sign In</h4>
                                    <p class="primText fw500">Create Your Account</p>
                                </div>
                                <div class="mb-4">
                                    <label class="d-block prime-label mb-3 mx-md-3" for="name">Name<span class="text-danger">*</span> </label>
                                    <input type="text" id="name" class="primary-inputs" placeholder="Enter Name">
                                </div>
                                <div class="mb-4">
                                    <label class="d-block prime-label mb-3 mx-md-3" for="email">Email Address<span class="text-danger">*</span> </label>
                                    <input type="email" id="email" class="primary-inputs" placeholder="Enter Email Address">
                                </div>
                                <div class="mb-4">
                                    <label class="d-block prime-label mb-3 mx-md-3" for="number">Phone Number<span class="text-danger">*</span> </label>
                                    <input type="number" id="number" class="primary-inputs" placeholder="Enter Phone No.">
                                </div>
                                <div class="mb-4">
                                    <label class="d-block prime-label mb-3 mx-md-3" for="password">Password<span class="text-danger">*</span> </label>
                                    <div class="position-relative passwordWrapper mb-2">
                                        <input class="primary-inputs passInput" id="password" type="password" placeholder="Enter Password">
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
                                    <button class="main-btn w-100" data-target="#signUp" type="button" data-toggle="modal">Sign Up</button>
                                    <p class="my-3 colWhite">Already have an Account? <a href="./login.php" class="primColor text-decoration-underline">Sign in </a></p>
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