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
                    <h1 class="font-weight-bold">Offer</h1>
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
                                <select name="type" id="type" class="form-control rounded-pill">
                                    <option value="">Select Type</option>
                                    <option value="dog">Dog</option>
                                    <option value="cat">Cat</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ad listing  -->
                <div class="table-responsive ads-listing">
                    <table class="table table-borderless text-center">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">User Name</th>
                                <th scope="col">User Email Address</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>01</th>
                                <td>John Max</td>
                                <td>John@gmail.com</td>
                                <td class="dropdown">
                                    <p class="mb-0"><a class="text-secondary" href="./offer-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>02</th>
                                <td>John Max</td>
                                <td>John@gmail.com</td>
                                <td class="dropdown">
                                    <p class="mb-0"><a class="text-secondary" href="./offer-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>03</th>
                                <td>John Max</td>
                                <td>John@gmail.com</td>
                                <td class="dropdown">
                                    <p class="mb-0"><a class="text-secondary" href="./offer-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>04</th>
                                <td>John Max</td>
                                <td>John@gmail.com</td>
                                <td class="dropdown">
                                    <p class="mb-0"><a class="text-secondary" href="./offer-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>05</th>
                                <td>John Max</td>
                                <td>John@gmail.com</td>
                                <td class="dropdown">
                                    <p class="mb-0"><a class="text-secondary" href="./offer-detail.php"><i class="fa fa-eye pr-2"></i></a></p>
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