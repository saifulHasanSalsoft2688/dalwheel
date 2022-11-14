<?php
include('../layout/loggedin-header.php');
?>

<section class="cart py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title text-center mb-4">
                    <h1 class="font-weight-bold">Checkout</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <form action="#">
                    <div class="delivery-details shadow px-md-5 p-4 mb-5">
                        <div class="titleBox d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Delivery Details</h4>
                            <button class="btn border-0 bg-transparent editBtn" type="button">
                                <h4 class="mb-0"><i class="fa fa-edit"></i></h4>
                            </button>
                        </div>
                        <div class="pt-4 wizard">
                            <div class="form-group">
                                <div class="position-relative">
                                    <input type="text" placeholder="Enter City, State or Zip" class="form-control rounded-pill bg-light" id="zip">
                                    <button type="button" class="search-btn text-secondary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <div class="form-group text-center mb-0">
                                <button class="btn bg-brown rounded-pill border-0 px-5 text-white showFileds" type="button">Continue</button>
                            </div>
                        </div>
                        <div class="edit-zip showBox" style="display: none;">
                            <p class="mb-0">144 Union Ave, Los Angeles New york</p>
                        </div>
                    </div>
                    <div class="delivery-details shadow px-md-5 p-4 mb-5">
                        <div class="titleBox d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Contact Details</h4>
                            <button class="btn border-0 bg-transparent editBtn" type="button">
                                <h4 class="mb-0"><i class="fa fa-edit"></i></h4>
                            </button>
                        </div>
                        <div class="pt-4 wizard">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Name <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter First Name" class="form-control bg-light rounded-pill" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lname">
                                            Last Name <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Last Name" class="form-control bg-light rounded-pill" id="lname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">
                                            Phone Number <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter Phone Number" class="form-control bg-light rounded-pill" id="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address <span class="required">*</span>
                                        </label>
                                        <input type="email" placeholder="Enter Email Address" class="bg-light form-control rounded-pill" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center mb-0 mt-3">
                                <button class="btn bg-brown rounded-pill border-0 px-5 text-white showFileds" type="button">Continue</button>
                            </div>
                        </div>
                        <!-- edit fields  -->
                        <div class="edit-feild showBox" style="display: none;">
                            <p class="mb-1">First Name: <span class="name">James</span></p>
                            <p class="mb-1">Last Name: <span class="lname">Anderson</span></p>
                            <p class="mb-1">Phone Number: <span class="phoneNumber">+012 345 6789</span></p>
                            <p class="mb-1">Email Address: <span class="email">ABXZ@gmail.com</span></p>
                        </div>
                    </div>
                    <div class="delivery-details shadow px-md-5 p-4 mb-5">
                        <div class="titleBox d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Payment Details</h4>
                            <button class="btn border-0 bg-transparent editBtn" type="button">
                                <h4 class="mb-0"><i class="fa fa-edit"></i></h4>
                            </button>
                        </div>
                        <div class="pt-4 wizard">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Name <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Name" class="form-control bg-light rounded-pill" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cardnumber">
                                            Card Number <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter Card Number" class="form-control bg-light rounded-pill" id="cardnumber">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cvv">
                                            CVV Number <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter CVV" class="form-control bg-light rounded-pill" id="cvv">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vDate">
                                            Validity Date <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter Validity Date" class="form-control bg-light rounded-pill" id="vDate">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center mb-0 mt-3">
                                <button class="btn bg-brown rounded-pill border-0 px-5 text-white showFileds" type="button">Continue</button>
                            </div>
                        </div>
                        <!-- payment fields  -->
                        <div class="payment-feild showBox" style="display: none;">
                            <p class="mb-1">Name: <span class="pname">Tom Albert</span></p>
                            <p class="mb-1">Card Number: <span class="cardNum">1458*********321</span></p>
                            <p class="mb-1">Validity Date: <span class="validDate">07/22</span></p>
                            <p class="mb-1">CVV: <span class="cvv">589</span></p>
                        </div>
                    </div>
                    <div class="submitButn" style="display: none;">
                        <div class="form-group text-center mb-0 mt-3">
                            <button class="btn bg-brown rounded-pill border-0 px-5 text-white showFileds" type="button">Place Order</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
                <div class="cart-total shadow p-3">
                    <div class="cartTotalBox">
                        <div class="titleBox">
                            <h4 class="mb-4 h5">Product Details</h4>
                        </div>
                        <div class="total-products">
                            <div class="product-info mb-3 border-bottom pb-4">
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
                                        <p class="price mb-0">$820</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info mb-3 border-bottom pb-4">
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
                                        <p class="price mb-0">$820</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info mb-3 pb-4">
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
                                        <p class="price mb-0">$820</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="titleBox">
                            <h4 class="mb-4 h5">Order Summary</h4>
                        </div>
                        <div class="cart-items-cost">
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
</section>


<?php
include('../layout/footer.php');
?>