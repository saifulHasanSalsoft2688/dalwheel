<?php
$title = "Reject Mechanic Details";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Reject Mechanic Details================== -->
        <div class="box my-4">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center my-3 section-heading">
                    <span class="backLink">
                        <i class="fas fa-arrow-left go-back-icon"></i>
                    </span>
                    <h6 class="section-heading mb-0">Details</h6>
                </div>
                <div class="text-end show_status my-3">
                    <label for="" class="me-4">Status:</label>
                    <p class="mb-0 colGreen">Active</p>
                </div>
            </div>
            <div class="d-flex flex-wrap align-items-center justify-content-end my-3">
                <label for="" class="me-4">Request Status:</label>
                <select name="" class="customSelect" id="">
                    <option value="Approved">Approved</option>
                    <option value="Reject">Reject</option>
                    <option value="Pending" selected>Pending</option>
                </select>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="user_profile mb-4">
                        <img src="../../assets/images/mechanic.png" class="img-fluid" alt="userProfile">
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="">Name</label>
                        <p class="mb-0">Elsa Robert</p>
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="">Email</label>
                        <p class="mb-0">abc@gmail.com</p>
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="">Phone</label>
                        <p class="mb-0">123123</p>
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="">Certificates</label>
                        <div class="d-flex certificates flex-wrap">
                            <img src="../../assets/images/pdf.png" class="m-2" alt="pdf">
                            <img src="../../assets/images/pdf.png" class="m-2" alt="pdf">
                            <img src="../../assets/images/pdf.png" class="m-2" alt="pdf">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
include('./mecModals.php'); 
?>