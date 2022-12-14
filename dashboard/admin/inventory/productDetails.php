<?php
$title = "Queries Management";
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
                    <h6 class="section-heading mb-0">Product Detail</h6>
                </div>
                <a href="./editProduct.php" type="button" class="main-btn my-3">Edit</a>
            </div>
            <div class="d-flex flex-wrap align-items-center justify-content-end my-3">
                <label for="" class="me-4">Status:</label>
                <select name="" class="customSelect" disabled>
                    <option value="Active" selected>Active</option>
                    <option value="InActive">InActive</option>
                </select>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-lg-6 col-md-8 mx-xl-2">
                    <div class="details_wrap my-4">
                        <img src="../../assets/images/product8.png" alt="product" class="productImg">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="details_wrap my-4">
                                <label for="Name">Product Name</label>
                                <p>ABC</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="details_wrap my-4">
                                <label for="Name">Product Category</label>
                                <p>Care care</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="details_wrap my-4">
                                <label for="Name">Sub Category</label>
                                <p>Air Fresher</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="details_wrap my-4">
                                <label for="Name">Price</label>
                                <p>$ 10</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="details_wrap my-4">
                                <label for="Name">Quantity</label>
                                <p>50</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="details_wrap my-4">
                                <label for="Name">Description</label>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem</p>
                            </div>
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