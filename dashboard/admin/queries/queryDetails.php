<?php
$title = "Queries Management";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <div class="box my-4">
            <div class="d-flex align-items-center section-heading">
                <span class="backLink">
                    <i class="fas fa-arrow-left go-back-icon"></i>
                </span>
                <h6 class="section-heading mb-0">Query Details</h6>
            </div>
            <div class="row">
                <div class="col-xxl-5 col-lg-6 col-md-8 mx-xl-2">
                    <div class="details_wrap my-4">
                        <label for="Name">Name</label>
                        <p>ABC</p>
                    </div>
                    <div class="details_wrap my-4">
                        <label for="Name">Email</label>
                        <p>testing@test.com</p>
                    </div>
                    <div class="details_wrap my-4">
                        <label for="Name">Subject</label>
                        <p>Abc</p>
                    </div>
                    <div class="details_wrap my-4">
                        <label for="Name">User Type</label>
                        <p>User</p>
                    </div>
                    <div class="details_wrap my-4">
                        <label for="Name">Message</label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
?>