<?php
include('../layout/loggedin-header.php');
?>
<section class="donate-form p-70">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="form-head text-center">
                    <h1 class="font-weight-bold">Contact Us</h1>
                </div>
                <div class="form-area shadow p-md-5 p-3">
                    <div class="form-body">
                        <form action="#" method="POST">
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
                                        <label for="lname">
                                            Last Name <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Last Name" class="form-control bg-light rounded-pill" id="lname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Email Address" class="form-control bg-light rounded-pill" id="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">
                                            Subject <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Subject" class="form-control bg-light rounded-pill" id="subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="discription">
                                            Description
                                        </label>
                                        <textarea name="pet-category" id="discription" class="form-control bg-light rounded-20" placeholder="Enter Description" value="" rows="5">
                                        </textarea>
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
include('../layout/footer.php');
?>