<?php
$title = "Contact Us";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Contact Us Details ================== -->
        <div class="box my-4">
            <h6 class="section-heading my-4 mb-5">Contact Us</h6>
            <form action="#">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="name">Name<span class="text-danger">*</span> </label>
                            <input type="text" id="name" class="primary-inputs secInp" placeholder="Enter Your Name" value="">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-2" for="email"> Email<span class="text-danger">*</span> </label>
                            <input type="email" id="email" class="primary-inputs secInp" placeholder="Enter Your Email Address" value="">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="subj">Subject<span class="text-danger">*</span> </label>
                            <input type="text" id="subj" class="primary-inputs secInp" placeholder="Enter Subject" value="">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="message">Message<span class="text-danger">*</span> </label>
                            <textarea name="" id="message" class="primary-inputs secInp" rows="5" placeholder="Enter Message"></textarea>
                        </div>
                        <button class="main-btn mt-3" type="button" type="button" data-bs-toggle="modal" data-bs-target="#messageSubmit">Submit</button>
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
<div class="modal customModal fade" id="messageSubmit" tabindex="-1" aria-labelledby="messageSubmitLabel" aria-hidden="true">
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
                <p>Message sent successfully</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="sec-btn" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>