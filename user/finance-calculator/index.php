<?php
include('../layout/loggedin-header.php');
?>
<section class="donate-form py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="form-head">
                    <h5 class="">Home <i class="fa fa-chevron-right"></i> <span class="text-theme-primary"> Financing Calculator   </span> </h5>
                    <h3 class="font-weight-bold">Financing Calculator</h3>
                </div>
            </div>
        </div>
        <div class="row shadow p-md-4 p-3 rounded-0">
            <div class="col-md-6">
                <div class="form-area border-0">
                    <div class="form-body">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="price">
                                            Car Price <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Car Price" class="form-control shadow border-0" id="price">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="installments">
                                             Number of Installments <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter Number of Installments (eg. 12, 24 or 36)" class="form-control shadow border-0" id="installments">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="cvv">
                                            Down Payment <span class="required">*</span>
                                        </label>
                                        <select name="payment" id="" class="form-control shadow border-0">
                                            <option value="">Select Down Payment</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="loginBtn my-3">
                                <button class="secondary-theme-button shadow btn bg-brown py-2" type="button" data-target="#payment" data-toggle="modal">Calculate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="image-banner-section">
                    <img src="../assets/images/finance.png" alt="Contact Us" draggable="false">
                </div>
            </div>
            <div class="col-md-12 my-3">
                <div class="d-flex justify-content-between align-items-center flex-wrap shadow p-md-4 p-3 rounded-0">
                    <div class="table-data flex-grow-1">
                        <p class="font-weight-bold mb-2">Car Price</p>
                        <p class="f-14 mb-0 text-secondary">$ 10,000</p>
                    </div>
                    <div class="table-data flex-grow-1">
                        <p class="font-weight-bold mb-2">Down Pament</p>
                        <p class="f-14 mb-0 text-secondary">$ 5000</p>
                    </div>
                    <div class="table-data flex-grow-1">
                        <p class="font-weight-bold mb-2">Interest Rate</p>
                        <p class="f-14 mb-0 text-secondary">5 %</p>
                    </div>
                    <div class="table-data flex-grow-1">
                        <p class="font-weight-bold mb-2">No of Installment</p>
                        <p class="f-14 mb-0 text-secondary">12</p>
                    </div>
                    <div class="table-data flex-grow-1">
                        <p class="font-weight-bold mb-2">Monthly Installment</p>
                        <p class="f-14 mb-0 text-secondary">$ 436.8</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="featuredAdcontent mb-3">
                    <ul>
                        <li><i class="fa fa-check"></i> 12 Months Installment Plan = Interest Rate 5 %</li>
                        <li><i class="fa fa-check"></i> 24 Months Installment Plan = Interest Rate 10 % </li>
                        <li><i class="fa fa-check"></i> 36 Months Installment Plan = Interest Rate 15 %</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../layout/footer.php');
?>