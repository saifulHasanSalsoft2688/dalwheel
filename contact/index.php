<?php
include('../layout/loggedin-header.php');
?>
<section class="donate-form py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="form-head">
                    <h5 class="">Home <i class="fa fa-chevron-right"></i><span class="text-theme-primary"> Contact Us</span> </h5>
                    <h3 class="font-weight-bold">Contact Us</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-area shadow p-md-4 p-3 rounded-0">
                    <div class="title-box mb-4">
                        <h4 class="font-weight-bold">Your Detail</h4>
                    </div>
                    <div class="form-body">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">
                                            Name <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Name" class="form-control shadow border-0" id="name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Email Address" class="form-control shadow border-0" id="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="subject">
                                            Subject <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Subject" class="form-control shadow border-0" id="subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="discription">
                                            Description
                                        </label>
                                        <textarea name="pet-category" id="discription" class="form-control shadow border-0" placeholder="Enter Description" value="" rows="5">
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="loginBtn my-4">
                                <button class="secondary-theme-button shadow btn bg-brown py-2" type="button" data-target="#updateAd" data-toggle="modal">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-banner-section h-100">
                    <img src="../assets/images/slide-1.png" alt="Contact Us" draggable="false" width="100%" height="100%" class="object-fit-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../layout/footer.php');
?>