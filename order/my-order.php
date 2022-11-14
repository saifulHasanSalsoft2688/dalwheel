<?php
include('../layout/loggedin-header.php');
?>

<section class="listing-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title text-center">
                    <h1 class="font-weight-bold">My Orders</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="seachedFilter">
                    <div class="row justify-content-between mb-3">
                        <div class="col-md-6">
                            <div class="form-group d-flex align-items-center gap-15 mb-0 flex-wrap">
                                <label class="flex-shrink-0 mb-md-0">
                                    Sort by
                                </label>
                                <input type="date" class="form-control rounded-pill serachFiled flex-shrink-0">
                                <input type="date" class="form-control rounded-pill serachFiled flex-shrink-0">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="position-relative">
                                    <input type="text" placeholder="Search Here...." class="form-control rounded-pill" id="password">
                                    <button type="button" class="search-btn text-secondary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-pills mb-3 justify-content-center gap-15" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link border-0 active" id="purchase-tab" data-toggle="pill" data-target="#purchase" type="button" role="tab" aria-controls="purchase" aria-selected="true">Purchased</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link border-0" id="adopted-tab" data-toggle="pill" data-target="#adopted" type="button" role="tab" aria-controls="adopted" aria-selected="false">Adopted</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link border-0" id="shop-order-tab" data-toggle="pill" data-target="#shop-order" type="button" role="tab" aria-controls="shop-order" aria-selected="false">Shop Order</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="purchase" role="tabpanel" aria-labelledby="purchase-tab">
                        <div class="table-responsive ads-listing">
                            <table class="table table-borderless text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Order Placed On</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td>$1000</td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./order-detail-purchased.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td>$1000</td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./order-detail-purchased.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td>$1000</td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./order-detail-purchased.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td>$1000</td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./order-detail-purchased.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td>$1000</td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./order-detail-purchased.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="adopted" role="tabpanel" aria-labelledby="adopted-tab">
                        <div class="table-responsive ads-listing">
                            <table class="table table-borderless text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Order Placed On</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td><span class="text-adopted">Adopted</span></td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./order-detail-adopted.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td><span class="text-adopted">Adopted</span></td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./order-detail-adopted.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td><span class="text-donate">Donated To Other</span></td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./order-detail-dto.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td><span class="text-donate">Donated To Other</span></td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./order-detail-dto.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td><span class="text-requested">Requested</span></td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./order-detail-requested.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="shop-order" role="tabpanel" aria-labelledby="shop-order-tab">
                        <div class="table-responsive ads-listing">
                            <table class="table table-borderless text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Order Placed On</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td>$50</td>
                                        <td><span class="text-pending">Pending</span></td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./shop-order-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td>$50</td>
                                        <td><span class="text-pending">Pending</span></td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./shop-order-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td>$50</td>
                                        <td><span class="text-inProgress">In Progress</span></td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./shop-order-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td>$50</td>
                                        <td><span class="text-pending">Pending</span></td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./shop-order-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>01</th>
                                        <td>Order_001_4567</td>
                                        <td>Sept 24, 2022</td>
                                        <td>$50</td>
                                        <td><span class="text-deliver">Delivered</span></td>
                                        <td>
                                            <p class="mb-0"><a class="text-secondary" href="./shop-order-detail-delivered.php"><i class="fa fa-eye pr-2"></i></a></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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