<?php
include('../layout/loggedin-header.php');
?>
<section class="ad-post py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="ad-post-area">
                    <div class="listing-title mb-3">
                        <h5 class="">Home <i class="fa fa-chevron-right"></i> <span class="text-danger">Car Inspection</span> </h5>
                        <h3 class="font-weight-bold">Schedule Dale Wheels Car Inspection</h3>
                        <p>Please Let Us Know How We Can Improve Your Experience</p>
                    </div>
                    <div class="form-body pt-4">
                        <form action="./mechanic-listing.php" method="POST">
                            <div class="row mb-4">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="petCategory">
                                            City <span class="required">*</span>
                                        </label>
                                        <select name="city" id="city" class="form-control shadow border-0">
                                            <option value="">City</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="area">
                                            Area <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Area" class="form-control shadow border-0" id="area">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="address">
                                            Address <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Address" class="form-control shadow border-0" id="address">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="name">
                                            Car Name <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Car Name" class="form-control shadow border-0" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="date">
                                            Select Date <span class="required">*</span>
                                        </label>
                                        <input type="date" class="form-control shadow border-0" id="date">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="time">
                                            Select Slot <span class="required">*</span>
                                        </label>
                                        <div class="d-flex flex-wrap align-items-center gap-15">
                                            <div class="time-slot flex-grow-1">
                                                <input type="time" class="form-control shadow border-0">
                                            </div>
                                            <div class="time-slot flex-grow-1">
                                                <input type="time" class="form-control shadow border-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="services">
                                            Select Service
                                        </label>
                                        <select name="services" id="services" class="form-control shadow border-0">
                                            <option value="">Select Service</option>
                                            <option value="">Sedan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn-theme-solid">Find Mechanic</button>
                                </div>
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