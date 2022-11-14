<?php
include('../layout/loggedin-header.php');
?>
<section class="donate-form p-70">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="form-area shadow p-md-5 p-3">
                    <div class="form-head text-center">
                        <h1 class="font-weight-bold">Payment Details</h1>
                    </div>
                    <div class="form-body pt-4">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cname">
                                            Card Holder Name <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Card Holder Name" class="form-control bg-light rounded-pill" id="cname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cardNumber">
                                            Card Number <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter Card Number" class="form-control bg-light rounded-pill" id="cardNumber">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cVV">
                                            CVV Number <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter CVV Number" class="form-control bg-light rounded-pill" id="cVV">
                                    </div>
                                </div>
                            </div>
                            <div class="loginBtn text-center my-4">
                                <button class="secondary-theme-button shadow btn bg-brown py-2" type="button" data-target="#updateAd" data-toggle="modal">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../layout/auth-footer.php');
?>