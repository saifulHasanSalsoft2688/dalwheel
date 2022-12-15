<?php
$title = "Ads Report Management";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <div class="box">
            <h1 class="section-heading font-commons my-3">Ads Report Management</h1>
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
            <!-- Table Starts Here -->
            <div class="custom_table table-responsive">
                <table class="table table-borderless w-100">
                    <thead>
                        <tr>
                            <th>S. No.</th>
                            <th>User Name</th>
                            <th>Date</th>
                            <th>Ad ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</th>
                            <td>Abc</td>
                            <td>MM/DD/YYYY</td>
                            <td>3008</td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" href="adReportReason.php"><i class="far fa-eye "></i>View</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>02</th>
                            <td>Abc</td>
                            <td>MM/DD/YYYY</td>
                            <td>3008</td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" href="adReportReason.php"><i class="far fa-eye "></i>View</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>03</th>
                            <td>Abc</td>
                            <td>MM/DD/YYYY</td>
                            <td>3008</td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" href="adReportReason.php"><i class="far fa-eye "></i>View</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>04</th>
                            <td>Abc</td>
                            <td>MM/DD/YYYY</td>
                            <td>3008</td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" href="adReportReason.php"><i class="far fa-eye "></i>View</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>05</th>
                            <td>Abc</td>
                            <td>MM/DD/YYYY</td>
                            <td>3008</td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" href="adReportReason.php"><i class="far fa-eye "></i>View</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>06</th>
                            <td>Abc</td>
                            <td>MM/DD/YYYY</td>
                            <td>3008</td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" href="adReportReason.php"><i class="far fa-eye "></i>View</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>07</th>
                            <td>Abc</td>
                            <td>MM/DD/YYYY</td>
                            <td>3008</td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" href="adReportReason.php"><i class="far fa-eye "></i>View</a>
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
?>