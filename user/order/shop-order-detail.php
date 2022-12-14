<?php
include('../layout/loggedin-header.php');
?>

<section class="cart py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="listing-title mb-4">
                    <h5 class="">Home <i class="fa fa-chevron-right"></i> My Orders <i class="fa fa-chevron-right"></i> <span class="text-theme-primary">Order Details</span> </h5>
                    <h3 class="font-weight-bold">Order Details</h3>
                </div>
                <div class="row align-items-end">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <div class="order-meta">
                            <p class="font-weight-bold mb-1">Order ID</p>
                            <p class="mb-0 f-14 text-secondary">1234</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="order-meta">
                            <p class="font-weight-bold mb-1">Order Date</p>
                            <p class="mb-0 f-14 text-secondary">mm/dd/yyyy</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <div class="d-flex justify-content-md-end">
                            <p class="mb-0"><span class="order-status"></span></p>
                        </div>
                    </div>
                </div>
                <div class="order-item">
                    <div class="table-responsive cart-detail shadow my-5">
                        <table class="table">
                            <thead class="bg-black text-white">
                                <tr>
                                    <th scope="col">Product</th>
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
                                                    <p class="f-14 mb-0"><a href="#" class="text-secondary">Car Care</a> | <a href="#" class="text-secondary">Car Top Covers</a> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        1
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
                                                    <p class="f-14 mb-0"><a href="#" class="text-secondary">Car Care</a> | <a href="#" class="text-secondary">Car Top Covers</a> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        1
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
                                                    <p class="f-14 mb-0"><a href="#" class="text-secondary">Car Care</a> | <a href="#" class="text-secondary">Car Top Covers</a> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        1
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
                                                    <p class="f-14 mb-0"><a href="#" class="text-secondary">Car Care</a> | <a href="#" class="text-secondary">Car Top Covers</a> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $820
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="cart-total shadow">
                    <div class="title-summary text-center bg-black text-white py-2">
                        <h5 class="mb-0">Summary</h5>
                    </div>
                    <div class="cartTotalBox p-3">
                        <div class="titleBox">
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
    </div>
</section>


<?php
include('../layout/footer.php');
?>