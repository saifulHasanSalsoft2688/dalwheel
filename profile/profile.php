<?php
include('../layout/loggedin-header.php');
?>
<section class="donate-form p-70">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="form-head text-center mb-4">
                    <h1 class="font-weight-bold">Profile</h1>
                </div>
                <div class="form-area shadow p-md-5 p-3">
                    <div class="form-body pt-2">
                        <div class="row">
                            <div class="col-md-12 text-center mb-5">
                                <div class="profile-box">
                                    <div class="profile-image">
                                        <img src="../assets/images/user-icon.png" alt="Profile Image" class="mw-100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Name
                                    </label>
                                    <p class="mb-0 text-secondary">Jessica Martin</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">
                                        Email Address
                                    </label>
                                    <p class="mb-0 text-secondary">Testing@test.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">
                                        Phone Number
                                    </label>
                                    <p class="mb-0 text-secondary">844-219-8209</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">
                                        Location
                                    </label>
                                    <p class="mb-0 text-secondary">141 N Union Ave, Los Angeles, CA</p>
                                </div>
                            </div>
                        </div>
                        <div class="loginBtn text-center my-4">
                            <p class="mb-0"><a class="secondary-theme-button shadow btn bg-brown py-2" href="./edit-profile.php">Edit Profile</a></p>
                            <button class="btn border-0 bg-transparent mt-4" data-toggle="modal" data-target="#changePassword">Change Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../layout/footer.php');
?>