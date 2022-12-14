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
                            <form action="../home/">
                                <div class="logo_wrapper">
                                    <img src="../assets/images/logo.png" class="img-fluid" alt="Logo">
                                </div>
                                <div class="text-center">
                                    <h4 class="authPrimTxt">Sign In</h4>
                                    <p class="primText fw500">Enter Your Email Address to Sign In</p>
                                </div>
                                <div class="mb-4">
                                    <label class="d-block prime-label mb-3 mx-md-3" for="email">Email Address<span class="text-danger">*</span> </label>
                                    <input type="email" id="email" contenteditable="true" class="primary-inputs" placeholder="Enter Email Address">
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
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="form-group mb-2">
                                        <input type="checkbox" class="custom-checkbox" id="rememberMe">
                                        <label for="rememberMe" class="ms-2">Remember Me</label>
                                    </div>
                                    <a href="forgot-password-1.php" class="colWhite mt-2"><u>Forget password?</u></a>
                                </div>
                                <div class="text-center mt-3">
                                    <button class="main-btn w-100" id="sign-in">Sign In</button>
                                    <p class="my-3 colWhite">Already have an Account? <a href="./signUp.php" class="text-decoration-underline">Sign Up Now</a></p>
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