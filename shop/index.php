<?php
include('../layout/loggedin-header.php');
?>

<section class="listing-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title text-center">
                    <h1 class="font-weight-bold">Shop</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="filter-box shadow h-100 rounded-10">
                    <div class="filter-title">
                        <h4 class="text-white mb-0">Filters</h4>
                    </div>
                    <div class="filter-feilds">
                        <form action="#">
                            <div class="form-group">
                                <div class="position-relative">
                                    <input type="text" placeholder="Search Here...." class="form-control rounded-pill" id="password">
                                    <button type="button" class="search-btn text-secondary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <div class="form-group mt-4 border-top pt-4">
                                <label for="distance" class="form-label d-flex justify-content-between align-items-center">
                                    <span>Maximum Distance</span>
                                    <span class="text-secondary">250 km</span>
                                </label>
                                <input type="range" class="form-range w-100" id="distance">
                            </div>
                            <div class="text-center">
                                <button class="secondary-theme-button shadow btn bg-brown" type="button">Apply</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="seachedFilter shadow">
                    <div class="row justify-content-between">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="form-group d-flex align-items-center justify-content-end gap-15 mb-0">
                                <label for="petCategory" class="flex-shrink-0 mb-md-0">
                                    Sort by
                                </label>
                                <select name="pet-category" id="petCategory" class="form-control rounded-pill serachFiled flex-shrink-0">
                                    <option value="">Select</option>
                                    <option value="dog">Dog</option>
                                    <option value="cat">Cat</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listing-box my-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/c1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="shop-discription">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                        <div class="rating text-yellow mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="text-secondary">4.0 (100+)</span>
                                        </div>
                                        <p class="text-secondary mb-1">10 miles away</p>
                                        <p class="text-theme-primary mb-0">$10 Delivery Fee</p>
                                    </div>
                                </div>
                                <a href="../product/product-details.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/c1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="shop-discription">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                        <div class="rating text-yellow mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="text-secondary">4.0 (100+)</span>
                                        </div>
                                        <p class="text-secondary mb-1">10 miles away</p>
                                        <p class="text-theme-primary mb-0">$10 Delivery Fee</p>
                                    </div>
                                </div>
                                <a href="../product/product-details.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/c1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="shop-discription">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                        <div class="rating text-yellow mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="text-secondary">4.0 (100+)</span>
                                        </div>
                                        <p class="text-secondary mb-1">10 miles away</p>
                                        <p class="text-theme-primary mb-0">$10 Delivery Fee</p>
                                    </div>
                                </div>
                                <a href="../product/product-details.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/c1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="shop-discription">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                        <div class="rating text-yellow mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="text-secondary">4.0 (100+)</span>
                                        </div>
                                        <p class="text-secondary mb-1">10 miles away</p>
                                        <p class="text-theme-primary mb-0">$10 Delivery Fee</p>
                                    </div>
                                </div>
                                <a href="../product/product-details.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/c1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="shop-discription">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                        <div class="rating text-yellow mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="text-secondary">4.0 (100+)</span>
                                        </div>
                                        <p class="text-secondary mb-1">10 miles away</p>
                                        <p class="text-theme-primary mb-0">$10 Delivery Fee</p>
                                    </div>
                                </div>
                                <a href="../product/product-details.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/c1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="shop-discription">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                        <div class="rating text-yellow mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="text-secondary">4.0 (100+)</span>
                                        </div>
                                        <p class="text-secondary mb-1">10 miles away</p>
                                        <p class="text-theme-primary mb-0">$10 Delivery Fee</p>
                                    </div>
                                </div>
                                <a href="../product/product-details.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/c1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="shop-discription">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                        <div class="rating text-yellow mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="text-secondary">4.0 (100+)</span>
                                        </div>
                                        <p class="text-secondary mb-1">10 miles away</p>
                                        <p class="text-theme-primary mb-0">$10 Delivery Fee</p>
                                    </div>
                                </div>
                                <a href="../product/product-details.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/c1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="shop-discription">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                        <div class="rating text-yellow mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="text-secondary">4.0 (100+)</span>
                                        </div>
                                        <p class="text-secondary mb-1">10 miles away</p>
                                        <p class="text-theme-primary mb-0">$10 Delivery Fee</p>
                                    </div>
                                </div>
                                <a href="../product/product-details.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/c1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="shop-discription">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                        <div class="rating text-yellow mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="text-secondary">4.0 (100+)</span>
                                        </div>
                                        <p class="text-secondary mb-1">10 miles away</p>
                                        <p class="text-theme-primary mb-0">$10 Delivery Fee</p>
                                    </div>
                                </div>
                                <a href="../product/product-details.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/c1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="shop-discription">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                        <div class="rating text-yellow mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="text-secondary">4.0 (100+)</span>
                                        </div>
                                        <p class="text-secondary mb-1">10 miles away</p>
                                        <p class="text-theme-primary mb-0">$10 Delivery Fee</p>
                                    </div>
                                </div>
                                <a href="../product/product-details.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/c1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="shop-discription">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                        <div class="rating text-yellow mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="text-secondary">4.0 (100+)</span>
                                        </div>
                                        <p class="text-secondary mb-1">10 miles away</p>
                                        <p class="text-theme-primary mb-0">$10 Delivery Fee</p>
                                    </div>
                                </div>
                                <a href="../product/product-details.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/c1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="shop-discription">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                        <div class="rating text-yellow mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="text-secondary">4.0 (100+)</span>
                                        </div>
                                        <p class="text-secondary mb-1">10 miles away</p>
                                        <p class="text-theme-primary mb-0">$10 Delivery Fee</p>
                                    </div>
                                </div>
                                <a href="../product/product-details.php" class="link-box"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-bar">
                    <div class="d-flex justify-content-between flex-wrap align-items-center">
                        <p class="mb-0">Showing 10 of 50 Entries</p>
                        <div class="viewAll d-flex justify-content-end flex-wrap">
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