<?php
$title = "Car Categories Management";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <div class="box">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <h1 class="section-heading font-commons my-3">Car Categories Management</h1>
                <a href="#" class="main-btn my-3" type="button" data-bs-toggle="modal" data-bs-target="#addCategory">Add Car Category</a>
            </div>
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
                <div class="filter_search my-3 me-2">
                    <input type="search" placeholder="Search">
                    <i class="fas fa-search searchIcon"></i>
                </div>
            </div>
            <!-- Table Starts Here -->
            <div class="custom_table table-responsive">
                <table class="table table-borderless w-100">
                    <thead>
                        <tr>
                            <th>S. No.</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</th>
                            <td>SUV</td>
                            <td>
                                <button type="button" class="btn dropdown-toggle transparent-btn colGreen" data-bs-toggle="dropdown">Active</button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                    <button class="dropdown-item  red_Btn drop_btn" data-bs-toggle="modal" data-bs-target="#inactivateModal"><i class="fas fa-times me-2"></i>Inactive</button>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#categoryDetails" type="button" href="#_"><i class="far fa-eye "></i>View</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>02</th>
                            <td>SUV</td>
                            <td>
                                <button type="button" class="btn dropdown-toggle transparent-btn colRed" data-bs-toggle="dropdown">Inactive</button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                    <button class="dropdown-item  colGreen drop_btn" data-bs-toggle="modal" data-bs-target="#activateModal"><i class="fas fa-check me-2"></i>Active</button>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#categoryDetails" type="button" href="#_"><i class="far fa-eye "></i>View</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>03</th>
                            <td>SUV</td>
                            <td>
                                <button type="button" class="btn dropdown-toggle transparent-btn colGreen" data-bs-toggle="dropdown">Active</button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                    <button class="dropdown-item  red_Btn drop_btn" data-bs-toggle="modal" data-bs-target="#inactivateModal"><i class="fas fa-times me-2"></i>Inactive</button>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#categoryDetails" type="button" href="#_"><i class="far fa-eye "></i>View</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>04</th>
                            <td>SUV</td>
                            <td>
                                <button type="button" class="btn dropdown-toggle transparent-btn colGreen" data-bs-toggle="dropdown">Active</button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                    <button class="dropdown-item  red_Btn drop_btn" data-bs-toggle="modal" data-bs-target="#inactivateModal"><i class="fas fa-times me-2"></i>Inactive</button>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#categoryDetails" type="button" href="#_"><i class="far fa-eye "></i>View</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>05</th>
                            <td>SUV</td>
                            <td>
                                <button type="button" class="btn dropdown-toggle transparent-btn colGreen" data-bs-toggle="dropdown">Active</button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                    <button class="dropdown-item  red_Btn drop_btn" data-bs-toggle="modal" data-bs-target="#inactivateModal"><i class="fas fa-times me-2"></i>Inactive</button>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#categoryDetails" type="button" href="#_"><i class="far fa-eye "></i>View</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>06</th>
                            <td>SUV</td>
                            <td>
                                <button type="button" class="btn dropdown-toggle transparent-btn colGreen" data-bs-toggle="dropdown">Active</button>
                                <div class="dropdown-menu text-left custom-dropdown">
                                    <button class="dropdown-item  red_Btn drop_btn" data-bs-toggle="modal" data-bs-target="#inactivateModal"><i class="fas fa-times me-2"></i>Inactive</button>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v opt_icon"></i>
                                </button>
                                <div class="dropdown-menu tdDropDown">
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#categoryDetails" type="button" href="#_"><i class="far fa-eye "></i>View</a>
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
include('./carModals.php');
?>