<?php
include('../layout/loggedin-header.php');
?>

<section class="listing-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title text-center">
                    <h1 class="font-weight-bold">My Ads</h1>
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
                    <div class="row justify-content-between mb-3">
                        <div class="col-md-3">
                            <div class="form-group mb-3 mb-md-0">
                                <select name="status" id="status" class="form-control rounded-pill">
                                    <option value="">Filter by Status</option>
                                    <option value="dog">Dog</option>
                                    <option value="cat">Cat</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-3 mb-md-0">
                                <select name="adoption" id="adoption" class="form-control rounded-pill">
                                    <option value="">Selection Adoption Status</option>
                                    <option value="dog">Dog</option>
                                    <option value="cat">Cat</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-3 mb-md-0">
                                <select name="pet" id="pet" class="form-control rounded-pill">
                                    <option value="">Select Pet Type</option>
                                    <option value="dog">Dog</option>
                                    <option value="cat">Cat</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-3 mb-md-0">
                                <select name="ads" id="ads" class="form-control rounded-pill">
                                    <option value="">Select Ad Status</option>
                                    <option value="dog">Dog</option>
                                    <option value="cat">Cat</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ad listing  -->
                <div class="table-responsive ads-listing">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Ads</th>
                                <th scope="col">Pet Type</th>
                                <th scope="col">Adoption Status</th>
                                <th scope="col">Ad Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>01</th>
                                <td>Tails -U-Win</td>
                                <td>Dog</td>
                                <td><span class="text-theme-primary">Pending</span></td>
                                <td class="status">
                                    <select name="adoopton-status" id="" class="border-0 bg-transparent">
                                        <option value="active">Active</option>
                                        <option value="in-active">In Active</option>
                                    </select>
                                </td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" class="border-0 bg-transparent"><i class="fa fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item viewPage" href="../offer/offer-detail.php"><i class="fa fa-eye pr-2"></i> View Offer</a>
                                        <a class="dropdown-item" href="./ad-pending-view.php"><i class="fa fa-bullhorn pr-2"></i> View Ad</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>02</th>
                                <td>Tails -U-Win</td>
                                <td>Dog</td>
                                <td><span class="text-theme-primary">Pending</span></td>
                                <td class="status">
                                    <select name="adoopton-status" id="" class="border-0 bg-transparent">
                                        <option value="active">Active</option>
                                        <option value="in-active">In Active</option>
                                    </select>
                                </td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" class="border-0 bg-transparent"><i class="fa fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item viewPage" href="../offer/offer-detail.php"><i class="fa fa-eye pr-2"></i> View Offer</a>
                                        <a class="dropdown-item" href="./ad-pending-view.php"><i class="fa fa-bullhorn pr-2"></i> View Ad</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>03</th>
                                <td>Tails -U-Win</td>
                                <td>Dog</td>
                                <td><span class="text-theme-secondary">Adopted</span></td>
                                <td class="status">
                                    <select name="adoopton-status" id="" class="border-0 bg-transparent">
                                        <option value="active">Active</option>
                                        <option value="in-active">In Active</option>
                                    </select>
                                </td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" class="border-0 bg-transparent"><i class="fa fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item viewPage" href="../offer/offer-detail.php"><i class="fa fa-eye pr-2"></i> View Offer</a>
                                        <a class="dropdown-item" href="./ad-active-view.php"><i class="fa fa-bullhorn pr-2"></i> View Ad</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>04</th>
                                <td>Tails -U-Win</td>
                                <td>Dog</td>
                                <td><span class="text-theme-primary">Pending</span></td>
                                <td class="status">
                                    <select name="adoopton-status" id="" class="border-0 bg-transparent">
                                        <option value="active">Active</option>
                                        <option value="in-active">In Active</option>
                                    </select>
                                </td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" class="border-0 bg-transparent"><i class="fa fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item viewPage" href="../offer/offer-detail.php"><i class="fa fa-eye pr-2"></i> View Offer</a>
                                        <a class="dropdown-item" href="./ad-pending-view.php"><i class="fa fa-bullhorn pr-2"></i> View Ad</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>05</th>
                                <td>Tails -U-Win</td>
                                <td>Dog</td>
                                <td><span class="text-theme-secondary">Adopted</span></td>
                                <td class="status">
                                    <select name="adoopton-status" id="" class="border-0 bg-transparent">
                                        <option value="active">Active</option>
                                        <option value="in-active">In Active</option>
                                    </select>
                                </td>
                                <td class="dropdown">
                                    <button id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" class="border-0 bg-transparent"><i class="fa fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item viewPage" href="../offer/offer-detail.php"><i class="fa fa-eye pr-2"></i> View Offer</a>
                                        <a class="dropdown-item" href="./ad-active-view.php"><i class="fa fa-bullhorn pr-2"></i> View Ad</a>
                                    </div>
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