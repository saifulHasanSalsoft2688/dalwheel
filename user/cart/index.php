<?php
include('../layout/loggedin-header.php');
?>

<section class="cart py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title mb-3">
                    <h3 class="font-weight-bold">My Shopping Cart</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="table-responsive cart-detail shadow p-3 h-100">
                    <table class="table">
                        <thead class="bg-black text-white">
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
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
                                    <div class="input-group-field rounded-arrow shadow">
                                        <button type="button" class="quantity-left-minus btn btn-number" data-type="minus" data-field="">
                                            <span class="fa fa-minus"></span>
                                        </button>
                                        <input type="number" id="quantity" name="quantity" class="form-control-field input-number-field" value="1" min="1" max="100">
                                        <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    $820
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn bg-white text-secondary border-0 removeProduct"><i class="fa fa-trash"></i></button>
                                        <button class="btn bg-white text-secondary border-0"><i class="fa fa-refresh"></i></button>
                                        <button class="btn bg-white text-secondary border-0"><i class="fa fa-heart"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
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
                                    <div class="input-group-field rounded-arrow shadow">
                                        <button type="button" class="quantity-left-minus btn btn-number" data-type="minus" data-field="">
                                            <span class="fa fa-minus"></span>
                                        </button>
                                        <input type="number" id="quantity" name="quantity" class="form-control-field input-number-field" value="1" min="1" max="100">
                                        <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    $820
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn bg-white text-secondary border-0 removeProduct"><i class="fa fa-trash"></i></button>
                                        <button class="btn bg-white text-secondary border-0"><i class="fa fa-refresh"></i></button>
                                        <button class="btn bg-white text-secondary border-0"><i class="fa fa-heart"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>03</td>
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
                                    <div class="input-group-field rounded-arrow shadow">
                                        <button type="button" class="quantity-left-minus btn btn-number" data-type="minus" data-field="">
                                            <span class="fa fa-minus"></span>
                                        </button>
                                        <input type="number" id="quantity" name="quantity" class="form-control-field input-number-field" value="1" min="1" max="100">
                                        <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    $820
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn bg-white text-secondary border-0 removeProduct"><i class="fa fa-trash"></i></button>
                                        <button class="btn bg-white text-secondary border-0"><i class="fa fa-refresh"></i></button>
                                        <button class="btn bg-white text-secondary border-0"><i class="fa fa-heart"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>04</td>
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
                                    <div class="input-group-field rounded-arrow shadow">
                                        <button type="button" class="quantity-left-minus btn btn-number" data-type="minus" data-field="">
                                            <span class="fa fa-minus"></span>
                                        </button>
                                        <input type="number" id="quantity" name="quantity" class="form-control-field input-number-field" value="1" min="1" max="100">
                                        <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    $820
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn bg-white text-secondary border-0 removeProduct"><i class="fa fa-trash"></i></button>
                                        <button class="btn bg-white text-secondary border-0"><i class="fa fa-refresh"></i></button>
                                        <button class="btn bg-white text-secondary border-0"><i class="fa fa-heart"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4 ml-auto">
                <div class="cart-total shadow h-100">
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
                                        <p class="mb-0">Tax 0%</p>
                                    </div>
                                    <div class="rightCartContent">
                                        <p class="mb-0">$5.00</p>
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
                            <div class="text-center my-2">
                                <a class="btn-theme-solid mb-3" href="../checkout/">Proceed to Checkout</a>
                                <!-- <a class="btn-theme-outline" href="../shop">Continue Shopping</a> -->
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