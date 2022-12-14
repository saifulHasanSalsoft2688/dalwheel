<?php
$title = "Sub Category Details";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Sub Category Details ================== -->
        <div class="box my-4">
            <div class="d-flex align-items-center section-heading">
                <span class="backLink">
                    <i class="fas fa-arrow-left go-back-icon"></i>
                </span>
                <h6 class="section-heading mb-0">Sub Category Details</h6>
            </div>
            <div class="row mx-xl-5">
                <div class="col-xl-4 col-md-6">
                    <div class="mb-4">
                        <label class="d-block prime-label mb-3" for="subCatName">Sub Category Name </label>
                        <input type="text" id="subCatName" class="primary-inputs secInp" placeholder="ABC" value="ABC">
                    </div>
                    <div class="mb-4">
                        <label class="d-block prime-label mb-3" for="subCatName">Category Name<span class="text-danger">*</span> </label>
                        <select name="" id="" class="customSelect secInp w-100">
                            <option value="Car Care">Car Care</option>
                            <option value="Car Care">Car</option>
                            <option value="Car Care">Care</option>
                        </select>
                    </div>
                    <button class="main-btn mt-3" type="button" data-bs-toggle="modal" data-bs-target="#subCategoryUpdated">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
include('./inventoryModals.php');
?>