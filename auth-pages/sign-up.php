<?php
include('../layout/header.php');
?>
<section class="auth-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="form-area shadow p-md-5 p-3">
                    <div class="form-head text-center">
                        <h1 class="font-weight-bold">Sign Up</h1>
                        <p class="mb-0">Sign Up below and share the love for adoptable pets.</p>
                    </div>
                    <div class="form-body pt-4">
                        <form action="./forgot-password.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Name <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Name" class="form-control rounded-pill" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address <span class="required">*</span>
                                        </label>
                                        <input type="email" placeholder="Example@email.com" class="form-control rounded-pill" id="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">
                                            Phone Number <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter Phone Number" class="form-control rounded-pill" id="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location">
                                            Location <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter City, State" class="form-control rounded-pill" id="location">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">
                                            Password <span class="required">*</span>
                                        </label>
                                        <div class="password-box">
                                            <input type="password" placeholder="Enter Password" class="form-control rounded-pill" id="password">
                                            <button type="button"><i class="fa fa-eye-slash"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="comfirmPassword">
                                            Confirm Password <span class="required">*</span>
                                        </label>
                                        <div class="password-box">
                                            <input type="password" placeholder="Confirm Password" class="form-control rounded-pill" id="comfirmPassword">
                                            <button type="button"><i class="fa fa-eye-slash"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="loginBtn text-center my-4">
                                <button class="secondary-theme-button shadow btn bg-brown py-2" type="button" data-target="#signup" data-toggle="modal">Sign Up</button>
                            </div>
                            <div class="sign-up-link text-center">
                                <p class="mb-0">Don't Have An Account ? <a href="./login.php" class="text-theme-primary">Sign In</a></p>
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