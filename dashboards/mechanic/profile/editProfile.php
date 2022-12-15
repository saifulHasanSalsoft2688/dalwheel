<?php
$title = "Edit Profile";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Edit Profile Details ================== -->
        <div class="box my-4">
            <div class="d-flex align-items-center my-3 section-heading">
                <span class="backLink">
                    <i class="fas fa-arrow-left go-back-icon"></i>
                </span>
                <h6 class="section-heading mb-0">Edit Profile</h6>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-md-4">
                        <div class="myProfile position-relative">
                            <img src="../../assets/images/userProfile.png" id="profile-preview" alt="avatar" class="userAvatar img-fluid">
                            <button name="file" class="camera-btn" onclick="document.getElementById('uploadFile').click()"><i class="fas fa-pencil-alt"></i></button>
                            <input id="uploadFile" type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);" class="d-none">
                        </div>
                        <a href="./changePassword.php" class="text-decoration-underline text-danger fw600 my-3 d-block">Change Password</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="fullName">Full Name<span class="text-danger">*</span></label>
                            <input type="text" id="fullName" class="primary-inputs secInp" placeholder="Enter Full Name" value="">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-2 ms-0" for="email">Email</label>
                            <input type="email" id="email" class="primary-inputs disableInputs p-0 secInp" disabled placeholder="Enter Email" value="elsa@sample.com">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-2 mx-md-2" for="phone">Phone Number<span class="text-danger">*</span></label>
                            <input id="phone" name="phone" class="primary-inputs w-100 secInp" type="tel">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="vs">Vehicle Specilities<span class="text-danger">*</span></label>
                            <input type="text" id="vs" class="primary-inputs secInp" placeholder="Enter Vehicle Specilities" value="">
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="mt-2 notBtn text-danger me-2"><i class="fas fa-trash-alt"></i></button>
                                <button type="button" class="mt-2 notBtn  addInp"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="vs">Working Areas<span class="text-danger">*</span></label>
                            <input type="text" id="vs" class="primary-inputs secInp" placeholder="Enter Area Name" value="">
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="mt-2 notBtn text-danger me-2"><i class="fas fa-trash-alt"></i></button>
                                <button type="button" class="mt-2 notBtn  addInp"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="d-block prime-label mb-3 mx-md-3" for="serv">Services<span class="text-danger">*</span> </label>
                            <div class="d-flex align-items-center flex-wrap mb-3 mx-md-3    ">
                                <label class="chkBoxkWrap bgBlack me-5 my-2">
                                    <input type="radio" checked="" name="workDetails">
                                    <span class="chmark"></span>
                                    In-Home Inspection
                                </label>
                                <label class="chkBoxkWrap bgBlack me-5 my-2">
                                    <input type="radio" name="workDetails">
                                    <span class="chmark"></span>
                                    Workshop Inspection
                                </label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="areaName">Workshop Location<span class="text-danger">*</span></label>
                            <input type="text" id="areaName" class="primary-inputs secInp" placeholder="Enter Area Name" value="">
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="mt-2 notBtn text-danger me-2"><i class="fas fa-trash-alt"></i></button>
                                <button type="button" class="mt-2 notBtn  addInp"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                        <div class="d-flex align-items-end flex-wrap bgBlack">
                            <div class="img-preview d-none me-2  my-2">
                                <img id="img-preview" src="" alt="product" class="productImg">
                            </div>
                            <button class="notBtn uploadBtnBox me-3  my-2" type="button" onclick="document.getElementById('uploadImg').click()"><i class="fas fa-upload"></i></button>
                            <p class="mb-0">Upload File(s) <br> PDF, Docx, JPEG, PNG</p>
                            <input id="uploadImg" type="file" accept="image/*" onchange="showPreview3(event);" class="d-none">
                        </div>
                        <button class="main-btn mt-5" type="button" type="button" data-bs-toggle="modal" data-bs-target="#profileUpdated">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
?>
<!-- Profile Updated Modal-->
<div class="modal customModal fade" id="profileUpdated" tabindex="-1" aria-labelledby="profileUpdatedLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal_img_wrap">
                    <img src="../../assets/images/true.png" class="img-fluid" alt="Modal Image">
                </div>
                <h4>Successfully</h4>
                <p>Profile has been updated</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="sec-btn" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>