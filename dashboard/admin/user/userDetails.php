<?php
$title = "Users Management";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== user Profile  ================== -->
        <div class="box my-4">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center my-3 section-heading">
                    <span class="backLink">
                        <i class="fas fa-arrow-left go-back-icon"></i>
                    </span>
                    <h6 class="section-heading mb-0">Users Management</h6>
                </div>
                <div class="text-end show_status my-3">
                    <label for="">Status:</label>
                    <p class="mb-0 text-green">Active</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="user_profile mb-4">
                        <img src="../../assets/images/userProfile.png" class="img-fluid" alt="userProfile">
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-8">
                    <div class="details_wrap my-4 contflexBox">
                        <label for="Name">Name</label>
                        <p class="mb-0">Elsa Robert</p>
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="Name">Email</label>
                        <p class="mb-0">abc@gmail.com</p>
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="Name">Phone</label>
                        <p class="mb-0">123123</p>
                    </div>
                </div> 
            </div>
            <!--  -->
            <div class="custom_tabs">
                <div class="text-center mb-3">
                    <span class="d-inline-block ul_tabs_wrapper">
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="order-logs-tab" data-bs-toggle="pill" data-bs-target="#order-logs" type="button" role="tab" aria-controls="order-logs" aria-selected="true">Order Logs</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="booking-order-tab" data-bs-toggle="pill" data-bs-target="#booking-order" type="button" role="tab" aria-controls="booking-order" aria-selected="false">Booking Logs</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="ad-logs-tab" data-bs-toggle="pill" data-bs-target="#ad-logs" type="button" role="tab" aria-controls="ad-logs" aria-selected="false">Ad Logs</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="featured-ad-tab" data-bs-toggle="pill" data-bs-target="#featured-ad" type="button" role="tab" aria-controls="featured-ad" aria-selected="true">Featured Ad Logs</button>
                            </li>
                        </ul>
                    </span>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <!-- =============== Order Logs ================== -->
                    <div class="tab-pane fade show active" id="order-logs" role="tabpanel" aria-labelledby="order-logs-tab">
                        <h5 class="secTitle">Order Logs</h5>
                        <!-- Filters Starts Here -->
                        <div class="d-flex align-items-end justify-content-between mb-xl-1 customfilters flex-wrap">
                            <div class="align-items-center d-flex mb-3 me-3">
                                <label class="d-inline-block mb-1 me-2">Show</label>
                                <select class="d-inline-block  sm-dropdown me-2">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <label class="d-inline-block mb-1 ms-1">Entries</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="filter_search my-3 me-2">
                                    <input type="search" placeholder="Search">
                                    <i class="fas fa-search searchIcon"></i>
                                </div>
                                <div class="custom_canvas my-3">
                                    <button class="notBtn filterBtn me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-filter"></i></button>
                                    <!--  Filters Offcanvas sidebar Starts Here -->
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasRightLabel">Filter</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body customfilters px-5">
                                            <!-- /// Sort By Date And Time /// -->
                                            <div class="my-3">
                                                <label for="" class="mb-2">Sort By Date:</label>
                                                <label for="from" class="d-block">From</label>
                                                <input id="from" class="inpDate w-100" type="date">
                                            </div>
                                            <div class="my-3">
                                                <label for="to" class="d-block">To</label>
                                                <input id="to" class="inpDate w-100" type="date">
                                            </div>
                                            <div class="my-3">
                                                <label for="adStatus" class="d-block mb-1">Filter By Status</label>
                                                <select name="" id="adStatus" class="primSelect w-100">
                                                    <option value="Select year">Select Status</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                            <!-- /// filter Buttons ///  -->
                                            <div class="my-4 text-center">
                                                <button class="main-btn my-2" type="button" data-bs-dismiss="offcanvas">Apply</button>
                                                <button class="sec-btn my-2 sec-transparent" type="button">Clear All</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  Filters Offcanvas sidebar Ends Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Filters Ends Here -->
                        <div class="custom_table table-responsive">
                            <table class="table table-borderless w-100">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Order ID</th>
                                        <th>Product Name </th>
                                        <th>Product Category</th>
                                        <th>Sub Category</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Car Care</td>
                                        <td>Sub Category</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="colBlue">Inprocess</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./orderDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Car Care</td>
                                        <td>Sub Category</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="colBlue">Inprocess</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./orderDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Car Care</td>
                                        <td>Sub Category</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="colGreen">Delivered</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./orderDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Car Care</td>
                                        <td>Sub Category</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="colOrange">Pending</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./orderDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Car Care</td>
                                        <td>Sub Category</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="colOrange">Pending</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./orderDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>06</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Car Care</td>
                                        <td>Sub Category</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="colOrange">Pending</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./orderDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Pagination starts -->
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <h6 class="pagination-details mb-3"> Showing 05 out of 40 records </h6>
                                <div class="custom_pagination mb-3">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item active"><a class="page-link" aria-current="page" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Pagination Ends -->
                        </div>
                        <!-- Table Ends Here -->
                    </div>
                    <!-- =============== Booking Logs ================== -->
                    <div class="tab-pane fade" id="booking-order" role="tabpanel" aria-labelledby="booking-order-tab">
                        <h5 class="secTitle">Booking Logs</h5>
                        <!-- Filters Starts Here -->
                        <div class="d-flex align-items-end justify-content-between mb-xl-1 customfilters flex-wrap">
                            <div class="align-items-center d-flex mb-3 me-3">
                                <label class="d-inline-block mb-1 me-2">Show</label>
                                <select class="d-inline-block  sm-dropdown me-2">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <label class="d-inline-block mb-1 ms-1">Entries</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="filter_search my-3 me-2">
                                    <input type="search" placeholder="Search">
                                    <i class="fas fa-search searchIcon"></i>
                                </div>
                                <div class="custom_canvas my-3">
                                    <button class="notBtn filterBtn me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2"><i class="fas fa-filter"></i></button>
                                    <!--  Filters Offcanvas sidebar Starts Here -->
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRight2Label">
                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasRightLabel">Filter</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body customfilters px-5">
                                            <!-- /// Sort By Date And Time /// -->
                                            <div class="my-3">
                                                <label for="" class="mb-2">Sort By Date:</label>
                                                <label for="from" class="d-block">From</label>
                                                <input id="from" class="inpDate w-100" type="date">
                                            </div>
                                            <div class="my-3">
                                                <label for="to" class="d-block">To</label>
                                                <input id="to" class="inpDate w-100" type="date">
                                            </div>
                                            <div class="my-3">
                                                <label for="adStatus" class="d-block mb-1">Filter By Status</label>
                                                <select name="" id="adStatus" class="primSelect w-100">
                                                    <option value="Select year">Select Status</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                            <!-- /// filter Buttons ///  -->
                                            <div class="my-4 text-center">
                                                <button class="main-btn my-2" type="button" data-bs-dismiss="offcanvas">Apply</button>
                                                <button class="sec-btn my-2 sec-transparent" type="button">Clear All</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  Filters Offcanvas sidebar Ends Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Filters Ends Here -->
                        <div class="custom_table table-responsive">
                            <table class="table table-borderless w-100">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Booking ID</th>
                                        <th>Ad Id</th>
                                        <th>Mechanic Name </th>
                                        <th>Date</th>
                                        <th>Slot</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</th>
                                        <td>3008</td>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>10 AM - 11 AM</td>
                                        <td>$ 2000</td>
                                        <td class="colOrange">Upcoming</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="../mechanics/mechanicDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</th>
                                        <td>3008</td>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>10 AM - 11 AM</td>
                                        <td>$ 2000</td>
                                        <td class="colOrange">Upcoming</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="../mechanics/mechanicDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</th>
                                        <td>3008</td>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>10 AM - 11 AM</td>
                                        <td>$ 2000</td>
                                        <td class="colGreen">Completed</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="../mechanics/mechanicDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</th>
                                        <td>3008</td>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>10 AM - 11 AM</td>
                                        <td>$ 2000</td>
                                        <td class="colGreen">Completed</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="../mechanics/mechanicDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</th>
                                        <td>3008</td>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>10 AM - 11 AM</td>
                                        <td>$ 2000</td>
                                        <td class="colGreen">Completed</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="../mechanics/mechanicDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Pagination starts -->
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <h6 class="pagination-details mb-3"> Showing 05 out of 40 records </h6>
                                <div class="custom_pagination mb-3">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item active"><a class="page-link" aria-current="page" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Pagination Ends -->
                        </div>
                        <!-- Table Ends Here -->
                    </div>
                    <!-- =============== Ad Logs  ================== -->
                    <div class="tab-pane fade" id="ad-logs" role="tabpanel" aria-labelledby="ad-logs-tab">
                        <h5 class="secTitle">Ad Logs</h5>
                        <!-- Filters Starts Here -->
                        <div class="d-flex align-items-end justify-content-between mb-xl-1 customfilters flex-wrap">
                            <div class="align-items-center d-flex mb-3 me-3">
                                <label class="d-inline-block mb-1 me-2">Show</label>
                                <select class="d-inline-block  sm-dropdown me-2">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <label class="d-inline-block mb-1 ms-1">Entries</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="filter_search my-3 me-2">
                                    <input type="search" placeholder="Search">
                                    <i class="fas fa-search searchIcon"></i>
                                </div>
                                <div class="custom_canvas my-3">
                                    <button class="notBtn filterBtn me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight3" aria-controls="offcanvasRight3"><i class="fas fa-filter"></i></button>
                                    <!--  Filters Offcanvas sidebar Starts Here -->
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight3" aria-labelledby="offcanvasRight3Label">
                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasRightLabel">Filter</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body customfilters px-5">
                                            <!-- /// Sort By Date And Time /// -->
                                            <div class="my-3">
                                                <label for="" class="mb-2">Sort By Date:</label>
                                                <label for="from" class="d-block">From</label>
                                                <input id="from" class="inpDate w-100" type="date">
                                            </div>
                                            <div class="my-3">
                                                <label for="to" class="d-block">To</label>
                                                <input id="to" class="inpDate w-100" type="date">
                                            </div>
                                            <div class="my-3">
                                                <label for="adStatus" class="d-block mb-1">Filter By Status</label>
                                                <select name="" id="adStatus" class="primSelect w-100">
                                                    <option value="Select year">Select Status</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                            <!-- /// filter Buttons ///  -->
                                            <div class="my-4 text-center">
                                                <button class="main-btn my-2" type="button" data-bs-dismiss="offcanvas">Apply</button>
                                                <button class="sec-btn my-2 sec-transparent" type="button">Clear All</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  Filters Offcanvas sidebar Ends Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Filters Ends Here -->
                        <div class="custom_table table-responsive">
                            <table class="table table-borderless w-100">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Ad Id</th>
                                        <th>Car Name</th>
                                        <th>Car Category</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Abc</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="colGreen">Approved</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./adDetails.php"><i class="far fa-eye"></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Abc</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="colGreen">Approved</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./adDetails.php"><i class="far fa-eye"></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Abc</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="text-danger">Rejected</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./adDetails.php"><i class="far fa-eye"></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Abc</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="text-danger">Rejected</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./adDetails.php"><i class="far fa-eye"></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Abc</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="text-danger">Rejected</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="#"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Pagination starts -->
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <h6 class="pagination-details mb-3"> Showing 05 out of 40 records </h6>
                                <div class="custom_pagination mb-3">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item active"><a class="page-link" aria-current="page" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Pagination Ends -->
                        </div>
                        <!-- Table Ends Here -->
                    </div>
                    <!-- =============== Featured Ad Logs ================== -->
                    <div class="tab-pane fade" id="featured-ad" role="tabpanel" aria-labelledby="featured-ad-tab">
                        <h5 class="secTitle">Featured Ad Logs</h5>
                        <!-- Filters Starts Here -->
                        <div class="d-flex align-items-end justify-content-between mb-xl-1 customfilters flex-wrap">
                            <div class="align-items-center d-flex mb-3 me-3">
                                <label class="d-inline-block mb-1 me-2">Show</label>
                                <select class="d-inline-block  sm-dropdown me-2">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <label class="d-inline-block mb-1 ms-1">Entries</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="filter_search my-3 me-2">
                                    <input type="search" placeholder="Search">
                                    <i class="fas fa-search searchIcon"></i>
                                </div>
                                <div class="custom_canvas my-3">
                                    <button class="notBtn filterBtn me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight4" aria-controls="offcanvasRight4"><i class="fas fa-filter"></i></button>
                                    <!--  Filters Offcanvas sidebar Starts Here -->
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight4" aria-labelledby="offcanvasRight4Label">
                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasRightLabel">Filter</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body customfilters px-5">
                                            <!-- /// Sort By Date And Time /// -->
                                            <div class="my-3">
                                                <label for="" class="mb-2">Sort By Date:</label>
                                                <label for="from" class="d-block">From</label>
                                                <input id="from" class="inpDate w-100" type="date">
                                            </div>
                                            <div class="my-3">
                                                <label for="to" class="d-block">To</label>
                                                <input id="to" class="inpDate w-100" type="date">
                                            </div> 
                                            <!-- /// filter Buttons ///  -->
                                            <div class="my-4 text-center">
                                                <button class="main-btn my-2" type="button" data-bs-dismiss="offcanvas">Apply</button>
                                                <button class="sec-btn my-2 sec-transparent" type="button">Clear All</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  Filters Offcanvas sidebar Ends Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Filters Ends Here -->
                        <div class="custom_table table-responsive">
                            <table class="table table-borderless w-100">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Ad Id</th>
                                        <th>Car Name</th>
                                        <th>Car Category</th>
                                        <th>Plan Name </th>
                                        <th>Date</th>
                                        <th>Expiry Date</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Abc</td>
                                        <td>Silver</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>$ 2000</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="../featureAd/packageDetails.php"><i class="far fa-eye "></i>View</a> 
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Abc</td>
                                        <td>Silver</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>$ 2000</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="../featureAd/packageDetails.php"><i class="far fa-eye "></i>View</a> 
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Abc</td>
                                        <td>Silver</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>$ 2000</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="../featureAd/packageDetails.php"><i class="far fa-eye "></i>View</a> 
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Abc</td>
                                        <td>Silver</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>$ 2000</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="../featureAd/packageDetails.php"><i class="far fa-eye "></i>View</a> 
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</th>
                                        <td>3008</td>
                                        <td>Abc</td>
                                        <td>Abc</td>
                                        <td>Silver</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>MM/DD/YYYY</td>
                                        <td>$ 2000</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="../featureAd/packageDetails.php"><i class="far fa-eye "></i>View</a> 
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Pagination starts -->
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <h6 class="pagination-details mb-3"> Showing 05 out of 40 records </h6>
                                <div class="custom_pagination mb-3">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item active"><a class="page-link" aria-current="page" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Pagination Ends -->
                        </div>
                        <!-- Table Ends Here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
?>