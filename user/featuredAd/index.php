<?php
include('../layout/loggedin-header.php');
?>

<section class="listing-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title mb-3">
                    <h5 class="">Home <i class="fa fa-chevron-right"></i> <span class="status text-theme-primary">Feature Ad</span> </h5>
                    <h3 class="font-weight-bold mb-2">Feature Ad</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="featuredAdcontent mb-3">
                    <p class="font-weight-bold mb-2">What is Featured Ad?</p>
                    <p class="f-14 mb-0 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
                    <ul>
                        <li><i class="fa fa-check"></i> Excellent Publicity</li>
                        <li><i class="fa fa-check"></i> Sell Your Vehicle Faster </li>
                        <li><i class="fa fa-check"></i> Unbeatable Coverage</li>
                    </ul>
                </div>
                <div class="featuredPackage">
                    <h3 class="font-weight-bold my-3">Feature Ad Packages <span class="f-14 text-secondary font-weight-normal">(please select any package)</span></h3>
                    <div class="d-flex justify-content-between flex-wrap flex-column">
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="days" id="day-7">
                            <label class="form-check-label" for="day-7">For 7 Days $ 150</label>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="days" id="day-14">
                            <label class="form-check-label" for="day-14">For 14 Days $ 200</label>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="days" id="day-30">
                            <label class="form-check-label" for="day-30">For 30 Days $ 300</label>
                        </div>
                    </div>
                    <div class="continueBtn mt-4">
                        <p class="mb-0"><a href="../car-inspection/payment.php" class="btn-theme-solid">Continue</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../layout/footer.php');
?>