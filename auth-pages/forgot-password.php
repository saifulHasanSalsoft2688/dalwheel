<?php
include('../layout/header.php');
?>
<section class="auth-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="form-area shadow p-md-5 p-3">
                    <div class="form-head text-center">
                        <h1 class="font-weight-bold">Forgot Your Password?</h1>
                        <p class="mb-0">Enter your active email address. You will receive a verification code there.</p>
                    </div>
                    <div class="form-body pt-4">
                        <form action="./forgot-password-1.php" method="POST">
                            <div class="form-group">
                                <label for="email">
                                    Email Address <span class="required">*</span>
                                </label>
                                <input type="email" placeholder="Example@email.com" class="form-control rounded-pill" id="email">
                            </div>
                            <div class="loginBtn text-center my-4">
                                <button class="secondary-theme-button shadow btn bg-brown py-2" href="#">Continue</button>
                            </div>
                            <div class="sign-up-link text-center">
                                <p class="mb-0"><a href="./login.php" class="text-dark">Back to Sign In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
include('../layout/auth-footer.php');
?>