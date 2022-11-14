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
                        <p class="mb-0">Enter a new password.</p>
                    </div>
                    <div class="form-body pt-4">
                        <form action="./forgot-password.php" method="POST">
                            <div class="form-group">
                                <label for="password">
                                    Password <span class="required">*</span>
                                </label>
                                <div class="password-box">
                                    <input type="password" placeholder="**********************" class="form-control rounded-pill" id="password">
                                    <button type="button"><i class="fa fa-eye-slash"></i></button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comfirmPassword">
                                    Confirm Password <span class="required">*</span>
                                </label>
                                <div class="password-box">
                                    <input type="password" placeholder="**********************" class="form-control rounded-pill" id="comfirmPassword">
                                    <button type="button"><i class="fa fa-eye-slash"></i></button>
                                </div>
                            </div>
                            <div class="loginBtn text-center my-4">
                                <button class="secondary-theme-button shadow btn bg-brown py-2" type="button" data-target="#updatePassword" data-toggle="modal">Update</button>
                            </div>
                            <div class="sign-up-link text-center">
                                <p class="mb-0"><a href="./forgot-password-1.php" class="text-dark">Back to Sign In</a></p>
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