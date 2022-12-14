<?php
$title = "Delivered Orders Detail";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Order Details ================== -->
        <div class="box my-4">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center my-3 section-heading">
                    <span class="backLink">
                        <i class="fas fa-arrow-left go-back-icon"></i>
                    </span>
                    <h6 class="section-heading mb-0">Order Details</h6>
                </div>
                <select class="m-0 selectingOptions colGreen">
                    <option value="pending">Pendings</option>
                    <option value="inprocess">Inprocess</option>
                    <option value="delivered" selected>Delivered</option>
                </select>
            </div>
            <!--  -->
            <div class="row">
                <div class="col-xxl-3 col-xl-4 col-md-8">
                    <div class="details_wrap my-4 contflexBox">
                        <label for="">Order ID</label>
                        <p class="mb-0">1234</p>
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="">Order Date</label>
                        <p class="mb-0">mm/dd/yyyy</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-baseline">
                <div class="col-xl-8 my-2">
                    <!-- Table Starts Here -->
                    <div class="custom_table custom_order_table table-responsive">
                        <table class="table table-borderless w-100">
                            <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>Product</th>
                                    <th>Product Name</th>
                                    <th>Amount</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</th>
                                    <td class="product_img"> <img src="../../assets/images/product_img.png" alt="product Image"> </td>
                                    <td>Product abv</td>
                                    <td>$50</td>
                                    <td>*1</td>
                                </tr>
                                <tr>
                                    <td>01</th>
                                    <td class="product_img"> <img src="../../assets/images/product_img3.png" alt="product Image"> </td>
                                    <td>Product abv</td>
                                    <td>$50</td>
                                    <td>*1</td>
                                </tr>
                                <tr>
                                    <td>01</th>
                                    <td class="product_img"> <img src="../../assets/images/product_img4.png" alt="product Image"> </td>
                                    <td>Product abv</td>
                                    <td>$50</td>
                                    <td>*1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Table Ends Here -->
                </div>
                <div class="col-xl-4 my-2">
                    <div class="summary_box">
                        <div class="d-md-flex align-items-center justify-content-between my-4">
                            <h6 class="cGray">Total Amount:</h6>
                            <h6 class="cBlack">$250</h6>
                        </div>
                        <div class="d-md-flex align-items-center justify-content-between my-4">
                            <h6 class="cGray">Sub Total</h6>
                            <h6 class="cBlack">$1234</h6>
                        </div>
                        <div class="d-md-flex align-items-center justify-content-between my-4">
                            <h6 class="cGray">Tax</h6>
                            <h6 class="cBlack">$12</h6>
                        </div>
                        <div class="d-md-flex align-items-center justify-content-between my-4">
                            <h6 class="cGray">Delivery Fee</h6>
                            <h6 class="cBlack">$ 10</h6>
                        </div>
                        <hr>
                        <div class="d-md-flex align-items-center justify-content-between my-4">
                            <h6 class="cGray">Total</h6>
                            <h6 class="cBlack">$40</h6>
                        </div>
                    </div>
                </div>
                <!-- Contact Information  -->
                <div class="col-xxl-3 col-xl-4 col-md-8">
                    <h1 class="section-heading font-commons my-2">Contact Information</h1>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="Name">Name</label>
                        <p class="mb-0">Rikkard Ambrose</p>
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="Name">Email</label>
                        <p class="mb-0">Rikkar@gmail.com</p>
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="Name">Phone Number</label>
                        <p class="mb-0">+012 345 6789</p>
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="Name">User ID</label>
                        <p class="mb-0">001</p>
                    </div>
                </div>
                <!-- Address Information -->
                <h1 class="section-heading font-commons my-2">Address Information</h1>
                <div class="col-xxl-3 col-xl-4 col-md-8">
                    <h5 class="fw400 mt-3">Billing Address</h5>
                    <div class="details_wrap my-3">
                        <p class="cGray">Abc Street here</p>
                        <p class="cGray">City</p>
                        <p class="cGray">Country</p>
                        <p class="cGray">State</p>
                        <p class="cGray">Zipcode </p>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-8">
                    <h5 class="fw400 mt-3">Shipping Address</h5>
                    <div class="details_wrap my-3">
                        <p class="cGray">Abc Street here</p>
                        <p class="cGray">City</p>
                        <p class="cGray">Country</p>
                        <p class="cGray">State</p>
                        <p class="cGray">Zipcode </p>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
?>