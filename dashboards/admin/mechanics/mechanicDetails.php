<?php
$title = "Mechanic Details";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Mechanic Profile  ================== -->
        <div class="box my-4">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center my-3 section-heading">
                    <span class="backLink">
                        <i class="fas fa-arrow-left go-back-icon"></i>
                    </span>
                    <h6 class="section-heading mb-0">Details</h6>
                </div>
                <div class="text-end show_status my-3">
                    <label for="" class="me-4">Status:</label>
                    <p class="mb-0 colGreen">Active</p>
                </div>
            </div>
            <div class="d-flex flex-wrap align-items-center justify-content-end my-3">
                <label for="" class="me-4">Status:</label>
                <select name="" class="customSelect" id="">
                    <option value="Approved">Approved</option>
                    <option value="Reject">Reject</option>
                    <option value="Pending">Pending</option>
                </select>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="user_profile mb-4">
                        <img src="../../assets/images/mechanic.png" class="img-fluid" alt="userProfile">
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="">Name</label>
                        <p class="mb-0">Elsa Robert</p>
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="">Email</label>
                        <p class="mb-0">abc@gmail.com</p>
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="">Phone</label>
                        <p class="mb-0">123123</p>
                    </div>
                    <div class="details_wrap my-4 contflexBox">
                        <label for="">Certificates</label>
                        <div class="d-flex certificates flex-wrap">
                            <img src="../../assets/images/pdf.png" class="m-2" alt="pdf">
                            <img src="../../assets/images/pdf.png" class="m-2" alt="pdf">
                            <img src="../../assets/images/pdf.png" class="m-2" alt="pdf">
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="secTitle my-3">Booking Logs</h5>
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
                            <th>Booking ID</th>
                            <th>Ad Id</th>
                            <th>User Name</th>
                            <th>Date</th>
                            <th>Slot</th>
                            <th>Amount</th>
                            <th>Platform Commission</th>
                            <th>Status</th>
                            <th>Report</th>
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
                            <td>$ 2000</td>
                            <td class="colOrange">Upcoming</td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" href="./pendingMechanicDetails.php"><i class="far fa-eye "></i>View</a>
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
                            <td>$ 2000</td>
                            <td class="colOrange">Upcoming</td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" href="./rejectedMechanicDetails.php"><i class="far fa-eye "></i>View</a>
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
                            <td>$ 2000</td>
                            <td class="colGreen">Completed</td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" href="./approvedMechanicDetails.php"><i class="far fa-eye "></i>View</a>
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
                            <td>$ 2000</td>
                            <td class="colGreen">Completed</td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" href="./approvedMechanicDetails.php"><i class="far fa-eye "></i>View</a>
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
                            <td>$ 2000</td>
                            <td class="colGreen">Completed</td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" href="./approvedMechanicDetails.php"><i class="far fa-eye "></i>View</a>
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
<?php
include('../layout/footer.php');
include('./mecModals.php');
?>