<?php
$title = "Profile Details";
include('../layout/header.php');
?>
<section class="authWrapper">
    <!-- Header Strat -->
    <div class="authHead">
        <ul>
            <li><a href="./index.php">Sign In</a></li>
            <li class="colWhite">|</li>
            <li><a href="./signUp.php">Sign Up</a></li>
        </ul>
    </div>
    <!-- Header End -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="right-side">
                    <div class="formWrap authFormWrap">
                        <!-- Form  Start -->
                        <form action="../dashboard/index.php">
                            <div class="text-center">
                                <h4 class="authPrimTxt">Profile Details</h4>
                            </div>
                            <div class="mb-3">
                                <label class="d-block prime-label mb-3 mx-md-3" for="vs">Vehicle Specilities<span class="text-danger">*</span> </label>
                                <input type="text" id="name" class="primary-inputs VSpecilities" placeholder="Enter Vehicle Specilities">
                                <div class="d-flex align-items-center justify-content-end">
                                    <button type="button" class="mt-2 notBtn text-danger me-2"><i class="fas fa-trash-alt"></i></button>
                                    <button type="button" class="mt-2 notBtn colWhite addInp"><i class="fas fa-plus-circle"></i></button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="d-block prime-label mb-3 mx-md-3" for="WA">Working Areas<span class="text-danger">*</span> </label>
                                <input type="text" id="WA" class="primary-inputs" placeholder="Enter Working Areas">
                                <div class="d-flex align-items-center justify-content-end">
                                    <button type="button" class="mt-2 notBtn text-danger me-2"><i class="fas fa-trash-alt"></i></button>
                                    <button type="button" class="mt-2 notBtn colWhite addInp"><i class="fas fa-plus-circle"></i></button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="d-block prime-label mb-3 mx-md-3" for="serv">Services<span class="text-danger">*</span> </label>
                                <div class="d-flex align-items-center flex-wrap mb-3 mx-md-3    ">
                                    <label class="chkBoxkWrap me-5 my-2">
                                        <input value="inHome" type="radio" checked name="workDetails" class="radioBtns">
                                        <span class="chmark"></span>
                                        In-Home Inspection
                                    </label>
                                    <label class="chkBoxkWrap me-5 my-2">
                                        <input value="workshop" type="radio" name="workDetails" class="radioBtns">
                                        <span class="chmark"></span>
                                        Workshop Inspection
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="d-block prime-label mb-3 mx-md-3" for="price">Price<span class="text-danger">*</span> </label>
                                <input type="number" id="price" class="primary-inputs" placeholder="Enter Price" value="">
                            </div>
                            <div class="mb-3 d-none" id="workLocation">
                                <label class="d-block prime-label mb-3 mx-md-3" for="worKlocation">Workshop Location<span class="text-danger">*</span> </label>
                                <input type="text" id="worKlocation" class="primary-inputs" placeholder="Enter Google Location" value="">
                            </div>
                            <div class="mb-3">
                                <label class="d-block prime-label mb-3 mx-md-3" for="upCertificates">Upload Certificates<span class="text-danger">*</span> </label>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-end flex-wrap">
                                        <div class="upload_product d-none me-2  my-2">
                                            <img id="profile-preview" src="" alt="product" class="productImg">
                                        </div>
                                        <button class="notBtn uploadBtnBox me-3  my-2" type="button" onclick="document.getElementById('uploadFile').click()"><i class="fas fa-upload"></i></button>
                                        <p class="colWhite mb-0">Upload File(s) <br> PDF, Docx, JPEG, PNG</p>
                                        <input id="uploadFile" type="file" accept="image/*" onchange="showPreview2(event);" class="d-none">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p>Slot Management<span class="text-danger">*</span> </p>
                                <p class="text-decoration-underline">Customize</p>
                            </div>
                            <!-- Slots -->
                            <div class="my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="d-block prime-label mb-3 mx-md-3">Monday</label>
                                    <div>
                                        <label class="custom_switch">
                                            <input type="checkbox" checked>
                                            <span class="custom_switch_slider"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="timeSlots">
                                    <div class="monTimeSlots mainSlot">
                                        <div class="mb-4 d-md-flex align-items-center justify-content-between slotBox">
                                            <input type="time" class="primary-inputs me-md-3 my-2">
                                            <input type="time" class="primary-inputs ms-md-3 my-2">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button type="button" class="notBtn text-danger me-2 removeMonSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                        <button type="button" class="notBtn colWhite addSlot"><i class="fas fa-plus-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="d-block prime-label mb-3 mx-md-3">Tuesday</label>
                                    <div>
                                        <label class="custom_switch">
                                            <input type="checkbox">
                                            <span class="custom_switch_slider"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="timeSlots">
                                    <div class="monTimeSlots mainSlot">
                                        <div class="mb-4 d-md-flex align-items-center justify-content-between slotBox">
                                            <input type="time" class="primary-inputs me-md-3 my-2">
                                            <input type="time" class="primary-inputs ms-md-3 my-2">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button type="button" class="notBtn text-danger me-2 removeMonSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                        <button type="button" class="notBtn colWhite addSlot"><i class="fas fa-plus-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="d-block prime-label mb-3 mx-md-3">Wednesday</label>
                                    <div>
                                        <label class="custom_switch">
                                            <input type="checkbox">
                                            <span class="custom_switch_slider"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="timeSlots">
                                    <div class="monTimeSlots mainSlot">
                                        <div class="mb-4 d-md-flex align-items-center justify-content-between slotBox">
                                            <input type="time" class="primary-inputs me-md-3 my-2">
                                            <input type="time" class="primary-inputs ms-md-3 my-2">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button type="button" class="notBtn text-danger me-2 removeMonSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                        <button type="button" class="notBtn colWhite addSlot"><i class="fas fa-plus-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="d-block prime-label mb-3 mx-md-3">Thursday</label>
                                    <div>
                                        <label class="custom_switch">
                                            <input type="checkbox">
                                            <span class="custom_switch_slider"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="timeSlots">
                                    <div class="monTimeSlots mainSlot">
                                        <div class="mb-4 d-md-flex align-items-center justify-content-between slotBox">
                                            <input type="time" class="primary-inputs me-md-3 my-2">
                                            <input type="time" class="primary-inputs ms-md-3 my-2">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button type="button" class="notBtn text-danger me-2 removeMonSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                        <button type="button" class="notBtn colWhite addSlot"><i class="fas fa-plus-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="d-block prime-label mb-3 mx-md-3">Friday</label>
                                    <div>
                                        <label class="custom_switch">
                                            <input type="checkbox">
                                            <span class="custom_switch_slider"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="timeSlots">
                                    <div class="monTimeSlots mainSlot">
                                        <div class="mb-4 d-md-flex align-items-center justify-content-between slotBox">
                                            <input type="time" class="primary-inputs me-md-3 my-2">
                                            <input type="time" class="primary-inputs ms-md-3 my-2">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button type="button" class="notBtn text-danger me-2 removeMonSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                        <button type="button" class="notBtn colWhite addSlot"><i class="fas fa-plus-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="d-block prime-label mb-3 mx-md-3">Suturday</label>
                                    <div>
                                        <label class="custom_switch">
                                            <input type="checkbox">
                                            <span class="custom_switch_slider"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="timeSlots">
                                    <div class="monTimeSlots mainSlot">
                                        <div class="mb-4 d-md-flex align-items-center justify-content-between slotBox">
                                            <input type="time" class="primary-inputs me-md-3 my-2">
                                            <input type="time" class="primary-inputs ms-md-3 my-2">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button type="button" class="notBtn text-danger me-2 removeMonSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                        <button type="button" class="notBtn colWhite addSlot"><i class="fas fa-plus-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="d-block prime-label mb-3 mx-md-3">Sunday</label>
                                    <div>
                                        <label class="custom_switch">
                                            <input type="checkbox">
                                            <span class="custom_switch_slider"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="timeSlots">
                                    <div class="monTimeSlots mainSlot">
                                        <div class="mb-4 d-md-flex align-items-center justify-content-between slotBox">
                                            <input type="time" class="primary-inputs me-md-3 my-2">
                                            <input type="time" class="primary-inputs ms-md-3 my-2">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button type="button" class="notBtn text-danger me-2 removeMonSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                        <button type="button" class="notBtn colWhite addSlot"><i class="fas fa-plus-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="d-block prime-label mb-3 mx-md-3" for="password">Password<span class="text-danger">*</span> </label>
                                <div class="position-relative passwordWrapper mb-2">
                                    <input class="primary-inputs passInput" id="password" type="password" placeholder="Enter Password">
                                    <button type="button" class="not_btn passDisplay">
                                        <i class="fas fa-eye-slash" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="d-block prime-label mb-3 mx-md-3" for="cPassword">Confirm Password <span class="text-danger">*</span> </label>
                                <div class="position-relative passwordWrapper mb-2">
                                    <input class="primary-inputs passInput" id="cPassword" type="password" placeholder="Confirm Password">
                                    <button type="button" class="not_btn passDisplay">
                                        <i class="fas fa-eye-slash" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <button class="main-btn w-100  mt-3">Submit Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('../layout/footer.php') ?>
<script>
    var element = document.getElementById("workLocation");
    $(document).ready(function() {
        $(".radioBtns").click(function() {
            var checkedValue = $(this).val();
            if (checkedValue == "workshop") {
                console.log("workshop");
                element.classList.add("d-block");
                element.classList.remove("d-none");
            } else {
                console.log("INHOME");
                element.classList.add("d-none");
            }
        });
    });
</script>