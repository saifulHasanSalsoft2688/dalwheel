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
                        <p class="mb-0">An email has been sent to you with a verification code. Please enter it here.</p>
                    </div>
                    <div class="form-body pt-4">
                        <form action="./forgot-password-2.php" method="POST">
                            <fieldset class="number-code">
                                <input name="code" class="code-input" required="" type="number">
                                <input name="code" class="code-input" required="" type="number">
                                <input name="code" class="code-input" required="" type="number">
                                <input name="code" class="code-input" required="" type="number">
                            </fieldset>
                            <div class="form-group mt-3">
                                <div class="d-flex align-items-center justify-content-end flex-wrap">
                                    <div class="forgot-link">
                                        <p class="mb-0"><a href="#">Resend Code</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="loginBtn text-center my-4">
                                <button class="secondary-theme-button shadow btn bg-brown py-2" href="#">Continue</button>
                            </div>
                            <div class="sign-up-link text-center">
                                <p class="mb-0"><a href="./forgot-password.php" class="text-dark">Back to Sign In</a></p>
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