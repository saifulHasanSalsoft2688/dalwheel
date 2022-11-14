<?php
include('../layout/header.php');
?>
<section class="auth-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="form-area shadow p-md-5 p-3">
                    <div class="form-head text-center">
                        <h1 class="font-weight-bold">Welcome Back!</h1>
                        <p class="mb-0">Sign In & share the love for adoptable pets.</p>
                    </div>
                    <div class="form-body pt-4">
                        <form action="../home/" method="POST">
                            <div class="form-group">
                                <label for="email">
                                    Email Address <span class="required">*</span>
                                </label>
                                <input type="email" placeholder="Example@email.com" class="form-control rounded-pill" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Password <span class="required">*</span>
                                </label>
                                <div class="password-box">
                                    <input type="password" placeholder="Enter Password" class="form-control rounded-pill" id="password">
                                    <button type="button"><i class="fa fa-eye-slash"></i></button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="remeber">
                                        <label class="custom-control-label" for="remeber">Remember Me</label>
                                    </div>
                                    <div class="forgot-link">
                                        <p class="mb-0"><a href="./forgot-password.php">Forgot Password</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="loginBtn text-center my-4">
                                <button class="secondary-theme-button shadow btn bg-brown py-2" href="#">Login</button>
                            </div>
                            <div class="sign-up-link text-center">
                                <p class="mb-0">Don't Have An Account ? <a href="./sign-up.php" class="text-theme-primary">Sign Up</a></p>
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