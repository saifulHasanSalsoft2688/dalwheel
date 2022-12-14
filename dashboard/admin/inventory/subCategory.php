<?php
$title = "Sub Category";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <div class="box my-4"> 
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center section-heading">
                    <span class="backLink">
                        <i class="fas fa-arrow-left go-back-icon"></i>
                    </span>
                    <h6 class="section-heading mb-0">Sub Category Details</h6>
                </div>
                <a href="#" data-bs-toggle="modal" data-bs-target="#subCategoryEdit" type="button" class="main-btn my-3">Edit</a>
            </div>
            <div class="row">
                <div class="col-xxl-5 col-lg-6 col-md-8 mx-xl-2">
                    <div class="details_wrap my-4">
                        <label for="Name">Sub Category Details</label>
                        <p>ABC</p>
                    </div>
                    <div class="details_wrap my-4">
                        <label for="Name">Category Name</label>
                        <p>Car Care</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
include('./inventoryModals.php');
?>