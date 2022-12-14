<?php
$title = "Password Recovery";
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
                        <form action="./password-recovery-3.php">
                            <div class="logo_wrapper"><img src="../../assets/images/logo.png" class="img-fluid" alt="Logo"></div>
                            <div class="text-center">
                                <h4 class="authPrimTxt">Password Recovery</h4>
                                <p class="primText fw500">Enter verification code to recover your password.</p>
                            </div>
                            <div class="my-5">
                                <label class="d-block prime-label mb-3 mx-md-3" for="vfCode">Verification Code<span class="text-danger">*</span> </label>
                                <input type="number" id="vfCode" class="primary-inputs" placeholder="Enter Verification Code">
                                <div class="text-end mt-1">
                                    <button" class="notBtn colWhite"> <u>Resend Code</u> </button>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <button class="main-btn w-100">Continue</button>
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