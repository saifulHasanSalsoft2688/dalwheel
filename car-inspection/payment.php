<?php
include('../layout/loggedin-header.php');
?>
<section class="donate-form py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="form-head">
                    <h5 class="">Home <i class="fa fa-chevron-right"></i> Car Inspection <i class="fa fa-chevron-right"></i> Car Mechanics <i class="fa fa-chevron-right"></i> <span class="text-theme-primary"> Payment </span> </h5>
                    <h3 class="font-weight-bold">Payment Information</h3>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="form-area shadow p-md-4 p-3 rounded-0">
                    <div class="form-body">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="name">
                                            Card Holder Name <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Card Holder Name" class="form-control shadow border-0" id="name">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="cardnumber">
                                            Card Number <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter Card Number" class="form-control shadow border-0" id="cardnumber">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="cvv">
                                            CVV Number <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter CVV Number" class="form-control shadow border-0" id="cvv">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="vDate">
                                            Validity Date <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter Validity Date" class="form-control shadow border-0" id="vDate">
                                    </div>
                                </div>
                            </div>
                            <div class="loginBtn my-4">
                                <button class="secondary-theme-button shadow btn bg-brown py-2" type="button" data-target="#payment" data-toggle="modal">Pay Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="image-banner-section">
                    <img src="../assets/images/card.png" alt="Contact Us" draggable="false">
                    <h5 class="font-weight-bold my-3">Pay: $ 150</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../layout/footer.php');
?>