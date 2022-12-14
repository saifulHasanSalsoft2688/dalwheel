<?php
include('../layout/loggedin-header.php');
?>

<section class="listing-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title mb-3">
                    <h5 class="">Home <i class="fa fa-chevron-right"></i> <span class="status text-theme-primary">My Orders</span> </h5>
                    <h3 class="font-weight-bold">My Orders</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="seachedFilter border-0 bg-transparent">
                    <div class="row justify-content-between mb-3">
                        <div class="col-md-4">
                            <div class="form-group d-flex align-items-center gap-15 mb-0 flex-wrap entries">
                                <label class="flex-shrink-0 mb-md-0">
                                    Show
                                </label>
                                <input type="number" class="form-control w-25 flex-shrink-0" placeholder="01" min="0">
                                <p class="mb-0">Entries</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group d-flex align-items-center gap-15 mb-0 flex-wrap justify-content-md-end mb-3">
                                <label class="flex-shrink-0 mb-md-0">
                                    Sort by
                                </label>
                                <input type="date" class="form-control serachFiled flex-shrink-0">
                                <input type="date" class="form-control serachFiled flex-shrink-0">
                            </div>
                            <div class="form-group d-flex justify-content-md-end">
                                <div class="position-relative">
                                    <input type="text" placeholder="Search Here...." class="form-control" id="password">
                                    <button type="button" class="search-btn text-secondary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive ads-listing">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Order ID</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Amount Paid</th>
                                <th scope="col">Order Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>01</th>
                                <td>Order_001_4567</td>
                                <td>Sept 24, 2022</td>
                                <td>$50</td>
                                <td><span class="status text-pending">Pending</span></td>
                                <td>
                                    <p class="mb-0"><a class="text-secondary" href="./shop-order-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>01</th>
                                <td>Order_001_4567</td>
                                <td>Sept 24, 2022</td>
                                <td>$50</td>
                                <td><span class="status text-pending">Pending</span></td>
                                <td>
                                    <p class="mb-0"><a class="text-secondary" href="./shop-order-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>01</th>
                                <td>Order_001_4567</td>
                                <td>Sept 24, 2022</td>
                                <td>$50</td>
                                <td><span class="status text-inProgress">In Progress</span></td>
                                <td>
                                    <p class="mb-0"><a class="text-secondary" href="./shop-order-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>01</th>
                                <td>Order_001_4567</td>
                                <td>Sept 24, 2022</td>
                                <td>$50</td>
                                <td><span class="status text-pending">Pending</span></td>
                                <td>
                                    <p class="mb-0"><a class="text-secondary" href="./shop-order-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>01</th>
                                <td>Order_001_4567</td>
                                <td>Sept 24, 2022</td>
                                <td>$50</td>
                                <td><span class="status text-deliver">Delivered</span></td>
                                <td>
                                    <p class="mb-0"><a class="text-secondary" href="./shop-order-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- pagination  -->
                <div class="pagination-bar">
                    <div class="d-flex justify-content-between flex-wrap align-items-center">
                        <p class="mb-0">Showing 10 of 50 Entries</p>
                        <div class="viewAll d-flex justify-content-end flex-wrap py-3">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item">
                                        <a class="page-link">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
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