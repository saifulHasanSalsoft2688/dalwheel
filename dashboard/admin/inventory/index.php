<?php
$title = "Inventory Management";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Inventory Management  ================== -->
        <div class="box my-4">
            <h1 class="section-heading font-commons my-3">Inventory Management</h1>
            <!-- Tabs start -->
            <div class="custom_tabs">
                <div class="text-center mb-3">
                    <span class="d-inline-block ul_tabs_wrapper">
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="categoryManagement-tab" data-bs-toggle="pill" data-bs-target="#categoryManagement" type="button" role="tab" aria-controls="categoryManagement" aria-selected="false">Category Management</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="subCategory-tab" data-bs-toggle="pill" data-bs-target="#subCategory" type="button" role="tab" aria-controls="subCategory" aria-selected="true">Sub-Category Management</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="inventory-tab" data-bs-toggle="pill" data-bs-target="#inventory" type="button" role="tab" aria-controls="inventory" aria-selected="true">Inventory</button>
                            </li>
                        </ul>
                    </span>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <!-- =============== Category Management ================== -->
                    <div class="tab-pane fade show active" id="categoryManagement" role="tabpanel" aria-labelledby="categoryManagement-tab">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <h5 class="secTitle">Category Management</h5>
                            <a href="#" type="button" data-bs-target="#addCategory" data-bs-toggle="modal" class="main-btn my-3">Add New Category</a>
                        </div>
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
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</th>
                                        <td>Car Care</th>
                                        <td class="colGreen">Active</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="../carCategories/index.php"><i class="far fa-eye "></i>View</a>
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
                    <!-- =============== Sub-Category Management ================== -->
                    <div class="tab-pane fade" id="subCategory" role="tabpanel" aria-labelledby="subCategory-tab">
                        <h5 class="secTitle"></h5>
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <h5 class="secTitle">Sub Category Management</h5>
                            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#subCategoryAdded" class="main-btn my-3">Add New Sub Categor</a>
                        </div>
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
                                    <button class="notBtn filterBtn me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight"><i class="fas fa-filter"></i></button>
                                    <!--  Filters Offcanvas sidebar Starts Here -->
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasRightLabel">Filter</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body customfilters px-5">
                                            <!-- /// Sort By Date And Time /// -->
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
                                        <th>Sub-Category Name</th>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</th>
                                        <td>Car Top Covers</td>
                                        <td>Car Care</td>
                                        <td class="colGreen">Active</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./subCategory.php"><i class="far fa-eye "></i>View</a>
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
                    <!-- =============== Inventory ================== -->
                    <div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <h5 class="secTitle">Inventory</h5>
                            <a href="./addProduct.php" class="main-btn my-3">Add New Item</a>
                        </div>
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
                                    <button class="notBtn filterBtn me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight3" aria-controls="offcanvasRight"><i class="fas fa-filter"></i></button>
                                    <!--  Filters Offcanvas sidebar Starts Here -->
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight3" aria-labelledby="offcanvasRightLabel">
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
                                                <label for="adStatus" class="d-block mb-1">Filter By Category</label>
                                                <select name="" id="adStatus" class="primSelect w-100">
                                                    <option value="Select year">Status</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                            <div class="my-3">
                                                <label for="adStatus" class="d-block mb-1">Filter By Sub Category</label>
                                                <select name="" id="adStatus" class="primSelect w-100">
                                                    <option value="Select year">Status</option>
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
                                        <th>Product Name</th>
                                        <th>Product Category</th>
                                        <th>Sub Category</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</th>
                                        <td>T Shirt</td>
                                        <td>Car Care</td>
                                        <td>Sub Category</td>
                                        <td>$2000</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="colGreen">Active</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./productDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</th>
                                        <td>T Shirt</td>
                                        <td>Car Care</td>
                                        <td>Sub Category</td>
                                        <td>$2000</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="text-danger">Inactive</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./productDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</th>
                                        <td>T Shirt</td>
                                        <td>Car Care</td>
                                        <td>Sub Category</td>
                                        <td>$2000</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="colGreen">Active</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./productDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</th>
                                        <td>T Shirt</td>
                                        <td>Car Care</td>
                                        <td>Sub Category</td>
                                        <td>$2000</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="colGreen">Active</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./productDetails.php"><i class="far fa-eye "></i>View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</th>
                                        <td>T Shirt</td>
                                        <td>Car Care</td>
                                        <td>Sub Category</td>
                                        <td>$2000</td>
                                        <td>MM/DD/YYYY</td>
                                        <td class="colGreen">Active</td>
                                        <td>
                                            <button type="button" class="notBtn" data-bs-toggle="dropdown">
                                                <i class="fa fa-ellipsis-v opt_icon"></i>
                                            </button>
                                            <div class="dropdown-menu tdDropDown">
                                                <a class="dropdown-item" href="./productDetails.php"><i class="far fa-eye "></i>View</a>
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
include('./inventoryModals.php');
?>