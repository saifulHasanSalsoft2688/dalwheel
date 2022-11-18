<?php
include('../layout/loggedin-header.php');
?>

<section class="listing-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title mb-3">
                    <h5 class="">Home <i class="fa fa-chevron-right"></i> <span class="status text-theme-primary">My Ads</span> </h5>
                    <h3 class="font-weight-bold">My Ads</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="seachedFilter border-0 bg-transparent">
                    <div class="row justify-content-between mb-3">
                        <div class="col-md-3">
                            <div class="form-group d-flex align-items-center gap-15 mb-0 flex-wrap">
                                <label class="flex-shrink-0 mb-md-0">
                                    Show
                                </label>
                                <input type="number" class="form-control w-25 flex-shrink-0">
                                <p class="mb-0">Entries</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group d-flex gap-15 flex-wrap flex-md-nowrap align-items-center">
                                <p class="mb-0 flex-shrink-0">Search by Ad Id</p>
                                <div class="position-relative">
                                    <input type="text" placeholder="Search...." class="form-control" id="password">
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
                                <th scope="col">Ad Id</th>
                                <th scope="col">Car Name</th>
                                <th scope="col">Car Category</th>
                                <th>Date</th>
                                <th scope="col">Order Status</th>
                                <th>Test Drive Request</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>01</th>
                                <td>001</td>
                                <td>Prius</td>
                                <td>SUV</td>
                                <td>mm/dd/yyyy</td>
                                <td><span class="status text-pending">Pending</span></td>
                                <td><a href="#" class="text-dark">View</a></td>
                                <td>
                                    <p class="mb-0"><a class="text-secondary" href="./ad-details.php"><i class="fa fa-eye pr-2"></i></a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>01</th>
                                <td>001</td>
                                <td>Prius</td>
                                <td>SUV</td>
                                <td>mm/dd/yyyy</td>
                                <td><span class="status text-pending">Pending</span></td>
                                <td><a href="#" class="text-dark">View</a></td>
                                <td>
                                    <p class="mb-0"><a class="text-secondary" href="./ad-details.php"><i class="fa fa-eye pr-2"></i></a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>01</th>
                                <td>001</td>
                                <td>Prius</td>
                                <td>SUV</td>
                                <td>mm/dd/yyyy</td>
                                <td><span class="status text-requested">Rejected</span></td>
                                <td><a href="#" class="text-dark">View</a></td>
                                <td>
                                    <p class="mb-0"><a class="text-secondary" href="./ad-details.php"><i class="fa fa-eye pr-2"></i></a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>01</th>
                                <td>001</td>
                                <td>Prius</td>
                                <td>SUV</td>
                                <td>mm/dd/yyyy</td>
                                <td><span class="status text-pending">Pending</span></td>
                                <td><a href="#" class="text-dark">View</a></td>
                                <td>
                                    <p class="mb-0"><a class="text-secondary" href="./ad-details.php"><i class="fa fa-eye pr-2"></i></a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>01</th>
                                <td>001</td>
                                <td>Prius</td>
                                <td>SUV</td>
                                <td>mm/dd/yyyy</td>
                                <td><span class="status text-deliver">Approved</span></td>
                                <td><a href="#" class="text-dark">View</a></td>
                                <td>
                                    <p class="mb-0"><a class="text-secondary" href="./ad-details.php"><i class="fa fa-eye pr-2"></i></a></p>
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