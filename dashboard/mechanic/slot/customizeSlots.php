<?php
$title = "Slot Management";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Slot Management  ================== -->
        <div class="box my-4">
            <div class="d-flex align-items-center my-3 section-heading">
                <span class="backLink">
                    <i class="fas fa-arrow-left go-back-icon"></i>
                </span>
                <h6 class="section-heading mb-0">Customize</h6>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-xxl-5 col-xl-8 col-md-10">
                        <!-- complete slot div start here -->
                        <div class="slotWrapper"> 
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="date" class="primary-inputs secInp my-3">
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <input type="time" class="primary-inputs secInp my-3">
                                </div>
                                <div class="col-lg-6">
                                    <input type="time" class="primary-inputs secInp my-3">
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="notBtn text-danger me-2"><i class="fas fa-trash-alt"></i></button>
                                <button type="button" class="notBtn text-decoration-underline">Add Days</button>
                                <button type="button" class="notBtn addInp"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                        <!-- complete slot div ends here --> 
                    </div>
                </div>
                <button class="main-btn my-3" type="button" data-bs-toggle="modal" data-bs-target="#slotUpdated">Update</button>
            </form>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
?>
<!-- Slot Updated Modal -->
<div class="modal customModal fade" id="slotUpdated" tabindex="-1" aria-labelledby="slotUpdated" aria-hidden="true">
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
                <p>Slot updated successfully</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="sec-btn" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>