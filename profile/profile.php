<?php
include('../layout/loggedin-header.php');
?>
<section class="donate-form py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="listing-title mb-3">
                    <h5 class="">Home <i class="fa fa-chevron-right"></i> <span class="text-danger">My Profile</span> </h5>
                    <h3 class="font-weight-bold">My Profile</h3>
                </div>
                <div class="form-area shadow p-md-5 p-3 text-left rounded-0">
                    <div class="form-body pt-2">
                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="profile-box">
                                    <div class="profile-image m-0">
                                        <img src="../assets/images/user-icon.png" alt="Profile Image" class="mw-100">
                                    </div>
                                    <button class="btn border-0 bg-transparent text-theme-primary font-weight-bold" data-toggle="modal" data-target="#changePassword">Change Password</button>
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
                        </div>
                        <div class="loginBtn my-4">
                            <p class="mb-0"><a class="secondary-theme-button shadow btn bg-brown py-2" href="./edit-profile.php">Edit Profile</a></p>
                            
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