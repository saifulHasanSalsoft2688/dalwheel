<?php
include('../layout/loggedin-header.php');
?>

<section class="cart py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="back-page">
                    <a href="./my-order.php" class="back-arrow"><i class="fa fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="listing-title text-center">
                    <h1 class="font-weight-bold mb-0">Order Details</h1>
                </div>
            </div>
            <div class="col-md-3">
                <p class="mb-0 font-weight-bold f-18">Status: <span class="text-theme-primary">Pending</span></p>
            </div>
            <div class="col-md-12 mt-3">
                <div class="order-no">
                    <h5>Order ID: <span class="font-weight-bold text-theme-primary">#123456789</span></h5>
                    <p>Order Date: <span class="font-weight-bold">July 06, 2022</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="cart-detail shadow p-3 h-100">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-theme-primary text-white">
                                <tr>
                                    <th scope="col">Products</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="product-info">
                                            <div class="d-flex gap-15 flex-wrap flex-md-nowrap align-items-center">
                                                <div class="cart-image">
                                                    <figure class="mb-0">
                                                        <a href="#">
                                                            <img src="../assets/images/cart-1.png" alt="Newest Couch" draggable="false" class="mw-100">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="product-title">
                                                    <p class="mb-0">Newest Couch</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $820
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        $820
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-info">
                                            <div class="d-flex gap-15 flex-wrap flex-md-nowrap align-items-center">
                                                <div class="cart-image">
                                                    <figure class="mb-0">
                                                        <a href="#">
                                                            <img src="../assets/images/cart-1.png" alt="Newest Couch" draggable="false" class="mw-100">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="product-title">
                                                    <p class="mb-0">Newest Couch</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $820
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        $820
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-info">
                                            <div class="d-flex gap-15 flex-wrap flex-md-nowrap align-items-center">
                                                <div class="cart-image">
                                                    <figure class="mb-0">
                                                        <a href="#">
                                                            <img src="../assets/images/cart-1.png" alt="Newest Couch" draggable="false" class="mw-100">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="product-title">
                                                    <p class="mb-0">Newest Couch</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $820
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        $820
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-info">
                                            <div class="d-flex gap-15 flex-wrap flex-md-nowrap align-items-center">
                                                <div class="cart-image">
                                                    <figure class="mb-0">
                                                        <a href="#">
                                                            <img src="../assets/images/cart-1.png" alt="Newest Couch" draggable="false" class="mw-100">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="product-title">
                                                    <p class="mb-0">Newest Couch</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $820
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        $820
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- total  -->
                    <div class="cart-total">
                        <div class="cartTotalBox">
                            <div class="titleBox">
                                <h4 class="mb-4 h5">Order Summary</h4>
                                <div class="cartBox">
                                    <div class="d-flex justify-content-between flex-md-mowrap flex-wrap mb-4">
                                        <div class="leftContent">
                                            <p class="mb-0">Subtotal</p>
                                        </div>
                                        <div class="rightCartContent">
                                            <p class="mb-0">$100.00</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between flex-md-mowrap flex-wrap mb-4">
                                        <div class="leftContent">
                                            <p class="mb-0">Delivery Charges</p>
                                        </div>
                                        <div class="rightCartContent">
                                            <p class="mb-0">$5.00</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between flex-md-mowrap flex-wrap mb-4">
                                        <div class="leftContent">
                                            <p class="mb-0 font-weight-bold">Total:</p>
                                        </div>
                                        <div class="rightCartContent">
                                            <p class="mb-0 theme-primary-text font-weight-bold">$100.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="filter-box shadow rounded-10 py-3 mb-4">
                    <div class="bg-white filter-title py-0">
                        <h4 class="mb-0">Customer Details</h4>
                    </div>
                    <div class="filter-feilds">
                        <ul class="navbar-nav align-items-center avatar-box flex-md-nowrap flex-md-row gap-15">
                            <li class="nav-item position-relative">
                                <a href="#" class="avatar-image image-size-adjust">
                                    <img src="../assets/images/avatar.png" alt="Avatar" class="mw-100" draggable="false">
                                </a>
                                <span class="user-status"></span>
                            </li>
                            <li class="nav-item">
                                <div class="d-flex align-items-center">
                                    <div class="owner-name">
                                        <p class="mb-0">Jana James</p>
                                    </div>
                                    <div class="icon-boxs pl-2">
                                        <img src="../assets/images/trust.png" alt="Trust" draggable="false" class="mw-100">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="left-info">
                            <li class="nav-item icon-red">
                                <a href="tel: +353 01 344 111"><i class="fa fa-phone"></i>+353 01 344 111</a>
                            </li>
                            <li class="nav-item icon-blue">
                                <a href="mailto: testing@test.com"><i class="fa fa-envelope"></i>testing@test.com</a>
                            </li>
                        </ul>
                        <div class="viewPin text-center mt-5">
                            <button class="secondary-theme-button shadow btn bg-brown py-2">View Pin Location</button>
                        </div>
                    </div>
                </div>
                <div class="filter-box shadow rounded-10 py-3">
                    <div class="bg-white filter-title py-0">
                        <h4 class="mb-0">Vendor Details</h4>
                    </div>
                    <div class="filter-feilds">
                        <ul class="navbar-nav align-items-center avatar-box flex-md-nowrap flex-md-row gap-15">
                            <li class="nav-item position-relative">
                                <a href="#" class="avatar-image image-size-adjust">
                                    <img src="../assets/images/user-icon.png" alt="Avatar" class="mw-100" draggable="false">
                                </a>
                                <span class="user-status"></span>
                            </li>
                            <li class="nav-item">
                                <div class="d-flex align-items-center">
                                    <div class="owner-name">
                                        <p class="mb-0">Jana James</p>
                                    </div>
                                    <div class="icon-boxs pl-2">
                                        <img src="../assets/images/trust.png" alt="Trust" draggable="false" class="mw-100">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="left-info">
                            <li class="nav-item icon-red">
                                <a href="tel: +353 01 344 111"><i class="fa fa-phone"></i>+353 01 344 111</a>
                            </li>
                            <li class="nav-item icon-blue">
                                <a href="mailto: testing@test.com"><i class="fa fa-envelope"></i>testing@test.com</a>
                            </li>
                        </ul>
                        <div class="viewPin text-center mt-5">
                            <button class="secondary-theme-button shadow btn bg-brown py-2">View Pin Location</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include('../layout/footer.php');
?>