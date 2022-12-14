<?php
$title = "Edit Product";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Edit Product  ================== -->
        <div class="box my-4">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center my-3 section-heading">
                    <span class="backLink">
                        <i class="fas fa-arrow-left go-back-icon"></i>
                    </span>
                    <h6 class="section-heading mb-0">Edit Product </h6>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-end my-3">
                    <label for="" class="me-4">Status:</label>
                    <select name="" class="customSelect" id="">
                        <option value="Active">Active</option>
                        <option value="InActive">Inactive</option>
                    </select>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="pName">Product Name</label>
                            <input type="text" id="pName" class="primary-inputs secInp" placeholder="Enter Product Name" value="Abc">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="pC">Product Category</label>
                            <input type="text" id="pC" class="primary-inputs secInp" placeholder="Enter Product Category" value="Car Care">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="sC">Sub Category</label>
                            <input type="text" id="sC" class="primary-inputs secInp" placeholder="Enter Sub Category" value="Air Fresher">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="Qantity">Quantity</label>
                            <input type="number" id="Qantity" class="primary-inputs secInp" placeholder="Enter Quantity" value="50">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="price">Price</label>
                            <input type="number" id="price" class="primary-inputs secInp" placeholder="Enter Price" value="20">
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="desc">Description</label>
                            <textarea type="number" id="desc" rows="8" class="primary-inputs secInp" placeholder="Enter Discription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</textarea>
                        </div>
                        <div class="mb-4">
                            <label class="d-block prime-label mb-3" for="desc">Picture</label>
                            <div class="d-flex align-items-end">
                                <div class="upload_product">
                                    <button class="notBtn" onclick="deleteSrc()" type="button"><i class="fas fa-trash"></i></button>
                                    <img id="profile-preview" src="../../assets/images/product8.png" alt="product" class="productImg">
                                </div>
                                <button class="notBtn uploadFile" onclick="document.getElementById('uploadFile').click()"><i class="fas fa-upload"></i></button>
                                <input id="uploadFile" type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);" class="d-none">
                            </div>
                        </div>
                        <button class="main-btn mt-3" type="button" type="button" data-bs-toggle="modal" data-bs-target="#productUpdated">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
include('./inventoryModals.php');
?>