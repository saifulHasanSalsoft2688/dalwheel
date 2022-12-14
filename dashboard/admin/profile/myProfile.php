<?php
$title = "My Profile";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Profile Details ================== -->
        <div class="box my-4">
            <h6 class="section-heading my-4 mx-xl-5">My Profile</h6>
            <div class="row mx-xl-5">
                <div class="col-md-4">
                    <div class="myProfile mb-3">
                        <img src="../../assets/images/userProfile.png" class="img-fluid" alt="userProfile">
                    </div>
                    <a href="./changePassword.php" class="text-decoration-underline text-danger fw600 mb-3 d-block">Change Password</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-10">
                    <div class="row mx-xl-5">
                        <div class="col-md-6">
                            <div class="details_wrap">
                                <label for="Name">Full Name</label>
                                <p>Elsa Robert</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="details_wrap">
                                <label for="Name">Full Name</label>
                                <p>elsa@sample.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="details_wrap">
                                <label for="Name">Phone Number</label>
                                <p>0000-000-0000000</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="./editProfile.php" class="main-btn mt-3">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
?>