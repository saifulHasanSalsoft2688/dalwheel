<?php
include('../layout/loggedin-header.php');
?>
<section class="donate-form p-70">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="form-head text-center mb-4">
                    <h1 class="font-weight-bold">Edit Profile</h1>
                </div>
                <div class="form-area shadow p-md-5 p-3">
                    <div class="form-body pt-2">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-12 text-center mb-5">
                                    <div class="profile-box">
                                        <div class="profile-image">
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
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Name <span class="required">*</span>
                                        </label>
                                        <input type="text" name="name" class="form-control bg-light rounded-pill" required placeholder="Elsa Robert">
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
                                            Phone Number <span class="required">*</span>
                                        </label>
                                        <input type="number" name="phone" class="form-control bg-light rounded-pill" required placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">
                                            Location <span class="required">*</span>
                                        </label>
                                        <input type="text" name="phone" class="form-control bg-light rounded-pill" required placeholder="Enter City, State">
                                    </div>
                                </div>
                            </div>
                            <div class="loginBtn text-center my-4">
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