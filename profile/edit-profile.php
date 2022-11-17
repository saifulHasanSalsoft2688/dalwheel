<?php
include('../layout/loggedin-header.php');
?>
<section class="donate-form p-70">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="listing-title mb-3">
                    <h5 class="">Home <i class="fa fa-chevron-right"></i> <span class="text-danger">Edit Profile</span> </h5>
                    <h3 class="font-weight-bold">Edit Profile</h3>
                </div>
                <div class="form-area shadow p-md-5 p-3 text-left rounded-0">
                    <div class="form-body pt-2">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-12 mb-5">
                                    <div class="profile-box">
                                        <div class="profile-image m-0">
                                            <img src="../assets/images/user-icon.png" alt="Profile Image" class="mw-100">
                                            <div class="upload-profile-image">
                                                <label for="upload" class="m-0">
                                                    <input type="file" id="upload" class="d-none">
                                                    <p class="mb-0">
                                                        <i class="fa fa-camera"></i>
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn border-0 bg-transparent text-theme-primary font-weight-bold" data-toggle="modal" data-target="#changePassword">Change Password</button>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group col-md-6 px-0 mb-4">
                                        <label for="name">
                                            Name <span class="required">*</span>
                                        </label>
                                        <input type="text" name="name" class="form-control shadow" required placeholder="Elsa Robert">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group col-md-6 px-0 mb-4">
                                        <label for="email">
                                            Email Address
                                        </label>
                                        <p class="mb-0 text-secondary">Testing@test.com</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group col-md-6 px-0 mb-4">
                                        <label for="phone">
                                            Phone Number <span class="required">*</span>
                                        </label>
                                        <input type="number" name="phone" class="form-control shadow" required placeholder="Enter Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="loginBtn my-4">
                                <button class="secondary-theme-button shadow btn bg-brown py-2" type="button" data-target="#updatedProfile" data-toggle="modal">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../layout/footer.php');
?>