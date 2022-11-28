<?php
include('../layout/loggedin-header.php');
?>

<section class="checkout py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title mb-3">
                    <h3 class="font-weight-bold">Checkout</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <form action="#">
                    <div class="steps-icons my-4">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1 step-box-container step-active">
                                <div class="step-box shadow">
                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 step-box-container">
                                <div class="step-box shadow">
                                    <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 step-box-container">
                                <div class="step-box shadow">
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-item show">
                        <div class="delivery-details my-5">
                            <div class="titleBox d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-weight-bold">Contact Information</h4>
                            </div>
                            <div class="pt-4 wizard">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="name">
                                                Name <span class="required">*</span>
                                            </label>
                                            <input type="text" placeholder="Enter First Name" class="form-control shadow border-0" id="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="lname">
                                                Last Name <span class="required">*</span>
                                            </label>
                                            <input type="text" placeholder="Enter Last Name" class="form-control shadow border-0" id="lname">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="phone">
                                                Phone Number <span class="required">*</span>
                                            </label>
                                            <input type="number" placeholder="Enter Phone Number" class="form-control shadow border-0" id="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="email">
                                                Email Address <span class="required">*</span>
                                            </label>
                                            <input type="email" placeholder="Enter Email Address" class="form-control shadow border-0" id="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bolling-address mb-5">
                            <div class="titleBox d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-weight-bold">Billing Address</h4>
                            </div>
                            <div class="pt-4 wizard">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="address">
                                                Address Line 2
                                            </label>
                                            <input type="text" placeholder="Address Line 2" class="form-control shadow border-0" id="address">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="city">
                                                City <span class="required">*</span>
                                            </label>
                                            <select class="form-control shadow border-0" name="city" id="city">
                                                <option value="">Select City</option>
                                                <option value="">Chicago</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="state">
                                                State <span class="required">*</span>
                                            </label>
                                            <select class="form-control shadow border-0" name="state" id="state">
                                                <option value="">Select State</option>
                                                <option value="">A2213</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="postal">
                                                ZIP / Postal Code <span class="required">*</span>
                                            </label>
                                            <input type="number" placeholder="Enter Postal Code" class="form-control shadow border-0" id="postal">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="shippingAddress">
                                            <label class="form-check-label" for="shippingAddress">Use above details as shipping address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="shipping-address mb-5">
                            <div class="titleBox d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-weight-bold">Shipping Address</h4>
                            </div>
                            <div class="pt-4 wizard">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="address">
                                                Address Line 2
                                            </label>
                                            <input type="text" placeholder="Address Line 2" class="form-control shadow border-0" id="address">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="city">
                                                City <span class="required">*</span>
                                            </label>
                                            <select class="form-control shadow border-0" name="city" id="city">
                                                <option value="">Select City</option>
                                                <option value="">Chicago</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="state">
                                                State <span class="required">*</span>
                                            </label>
                                            <select class="form-control shadow border-0" name="state" id="state">
                                                <option value="">Select State</option>
                                                <option value="">A2213</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="postal">
                                                ZIP / Postal Code <span class="required">*</span>
                                            </label>
                                            <input type="number" placeholder="Enter Postal Code" class="form-control shadow border-0" id="postal">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="delivery-details my-5">
                            <div class="titleBox d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-weight-bold">Payment Information</h4>
                            </div>
                            <div class="pt-4 wizard">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="name">
                                                Name <span class="required">*</span>
                                            </label>
                                            <input type="text" placeholder="Enter Name" class="form-control shadow border-0" id="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="cardnumber">
                                                Card Number <span class="required">*</span>
                                            </label>
                                            <input type="number" placeholder="Enter Card Number" class="form-control shadow border-0" id="cardnumber">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="cvv">
                                                CVV Number <span class="required">*</span>
                                            </label>
                                            <input type="number" placeholder="Enter CVV" class="form-control shadow border-0" id="cvv">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="vDate">
                                                Validity Date <span class="required">*</span>
                                            </label>
                                            <input type="number" placeholder="Enter Validity Date" class="form-control shadow border-0" id="vDate">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <div class="table-responsive cart-detail shadow my-5">
                            <table class="table">
                                <thead class="bg-black text-white">
                                    <tr>
                                        <th scope="col">Products</th>
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
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <button class="btn bg-white text-secondary border-0 removeProduct"><i class="fa fa-trash"></i></button>
                                            </div>
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
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <button class="btn bg-white text-secondary border-0 removeProduct"><i class="fa fa-trash"></i></button>
                                            </div>
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
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <button class="btn bg-white text-secondary border-0 removeProduct"><i class="fa fa-trash"></i></button>
                                            </div>
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
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <button class="btn bg-white text-secondary border-0 removeProduct"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="submitButn">
                        <div class="form-group mb-0 mt-3">
                            <button class="btn-theme-solid" type="button">Continue</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
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

<!-- 
<div class="delivery-details shadow px-md-5 p-4 mb-5">
    <div class="titleBox d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-weight-bold">Payment Details</h4>
    </div>
  
</div> -->


<?php
include('../layout/footer.php');
?>