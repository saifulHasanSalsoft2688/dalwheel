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
                            <form action="./forgot-password-2.php">
                                <div class="logo_wrapper"><img src="../assets//images/logo.png" class="img-fluid" alt="Logo"></div>
                                <div class="text-center">
                                    <h4 class="authPrimTxt">Password Recovery</h4>
                                    <p class="primText fw500">Enter your email address to recieve a verification code.</p>
                                </div>
                                <div class="my-5">
                                    <label class="d-block prime-label mb-3 mx-md-3" for="email">Email Address <span class="text-danger">*</span> </label>
                                    <input type="email" id="email" contenteditable="true" class="primary-inputs" placeholder="Enter Email Address">
                                </div>
                                <div class="text-center mt-3">
                                    <button class="main-btn w-100">Continue</button>
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