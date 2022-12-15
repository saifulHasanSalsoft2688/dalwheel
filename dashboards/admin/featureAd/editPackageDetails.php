<?php
$title = "Edit Feature Ad Package Details";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Package Details ================== -->
        <div class="box my-4">
            <div class="d-flex align-items-center section-heading">
                <span class="backLink">
                    <i class="fas fa-arrow-left go-back-icon"></i>
                </span>
                <h6 class="section-heading mb-0">Feature Ad Package Details</h6>
            </div>
            <div class="d-flex flex-wrap align-items-center justify-content-end">
                <label for="" class="me-4">Request Status:</label>
                <select name="" class="customSelect" id="">
                    <option value="Approved">Approved</option>
                    <option value="Reject">Reject</option>
                    <option value="Pending">Pending</option>
                </select>
            </div>
            <div class="row my-4">
                <div class="col-xxl-5 col-xl-6 col-md-8">
                    <form action="#">
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="subCatName">Plan Name<span class="text-danger">*</span> </label>
                            <input type="text" id="subCatName" class="primary-inputs secInp" placeholder="Silver" value="Silver">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="subCatName">Days<span class="text-danger">*</span> </label>
                            <input type="number" id="subCatName" class="primary-inputs secInp" placeholder="Enter Days" value="7">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="subCatName">Price<span class="text-danger">*</span> </label>
                            <input type="number" id="subCatName" class="primary-inputs secInp" placeholder="Enter Price" value="123">
                        </div> 
                        <button class="main-btn mt-3" type="button" data-bs-toggle="modal" data-bs-target="#packageUpdated">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
include('./featureAdModals.php');
?>