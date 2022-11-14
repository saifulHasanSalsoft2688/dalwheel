<?php
include('../layout/loggedin-header.php');
?>

<section class="listing-page py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="back-page">
                    <a href="./my-ads.php" class="back-arrow"><i class="fa fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="listing-title text-center">
                    <h1 class="font-weight-bold">Offer Details</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 mb-4 mb-md-0">
                <div class="adopt-details shadow rounded-10 p-3">
                    <div class="behavior-box mb-4 mx-10">
                        <div class="row justify-content-between">
                            <div class="col-md-8">
                                <div class="offer-detail-section mb-3">
                                    <div class="tag-title question py-3">
                                        <p class="m-0">Looking to adopt a Pet For?</p>
                                    </div>
                                    <div class="answer">
                                        <span class="tag-btn shadow">Playful</span>
                                    </div>
                                </div>
                                <div class="offer-detail-section mb-3">
                                    <div class="tag-title question py-3">
                                        <p class="m-0">Do you have Kids at Home?</p>
                                    </div>
                                    <div class="answer">
                                        <span class="tag-btn shadow">No Kids</span>
                                    </div>
                                </div>
                                <div class="offer-detail-section mb-3">
                                    <div class="tag-title question py-3">
                                        <p class="m-0">Your Kids Age?</p>
                                    </div>
                                    <div class="answer">
                                        <span class="tag-btn shadow">Younger (Under 8)</span>
                                    </div>
                                </div>
                                <div class="offer-detail-section mb-3">
                                    <div class="tag-title question py-3">
                                        <p class="m-0">I am a Pet Owner</p>
                                    </div>
                                    <div class="answer">
                                        <span class="tag-btn shadow">First Time</span>
                                    </div>
                                </div>
                                <div class="offer-detail-section mb-3">
                                    <div class="tag-title question py-3">
                                        <p class="m-0">I Currently Have</p>
                                    </div>
                                    <div class="answer">
                                        <span class="tag-btn shadow">Cats</span>
                                    </div>
                                </div>
                                <div class="offer-detail-section mb-3">
                                    <div class="tag-title question py-3">
                                        <p class="m-0">How Much Time Will You Spend With Your Pet?</p>
                                    </div>
                                    <div class="answer">
                                        <span class="tag-btn shadow">02 Hour a Day</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group d-flex align-items-center justify-content-end gap-15 mb-0">
                                    <label for="status" class="flex-shrink-0 mb-md-0">
                                        Status
                                    </label>
                                    <select name="pet-status" id="status" class="form-control rounded-pill serachFiled flex-shrink-0">
                                        <option value="">Select</option>
                                        <option value="pending">Pending</option>
                                        <option value="active">Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="filter-box shadow rounded-10 py-3">
                    <div class="bg-white filter-title py-0">
                        <h4 class="mb-0">Owner Details</h4>
                    </div>
                    <div class="filter-feilds">
                        <ul class="navbar-nav align-items-center avatar-box flex-md-nowrap flex-md-row gap-15">
                            <li class="nav-item position-relative">
                                <a href="#" class="avatar-image image-size-adjust">
                                    <img src="../assets/images/avatar.png" alt="Avatar" class="mw-100" draggable="false">
                                </a>
                                <span class="user-status"></span>
                            </li>
                            <li class="nav-item">
                                <div class="d-flex align-items-center">
                                    <div class="owner-name">
                                        <p class="mb-0">Jana James</p>
                                    </div>
                                    <div class="icon-boxs pl-2">
                                        <img src="../assets/images/trust.png" alt="Trust" draggable="false" class="mw-100">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="left-info">
                            <li class="nav-item icon-red">
                                <a href="tel: +353 01 344 111"><i class="fa fa-phone"></i>+353 01 344 111</a>
                            </li>
                            <li class="nav-item icon-blue">
                                <a href="mailto: testing@test.com"><i class="fa fa-envelope"></i>testing@test.com</a>
                            </li>
                        </ul>
                        <div class="viewPin text-center mt-5">
                            <button class="secondary-theme-button shadow btn bg-brown py-2">View Pin Location</button>
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