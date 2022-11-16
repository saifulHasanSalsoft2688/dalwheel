<?php
include('../layout/loggedin-header.php');
?>

<section class="used-car-listing py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcurm">
                    <p><a href="#" class="text-dark">Home</a> > User Car > <a href="#" class="text-theme-primary">Car Care</a></p>
                </div>
                <div class="listing-title mb-3">
                    <h3 class="font-weight-bold">Auto Parts</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="filter-box">
                    <div class="filter-feilds border rounded mb-4 mt-0">
                        <div class="filter-label mt-0">
                            <h5 class="mb-0">Care Care</h5>
                        </div>
                        <div class="car-category">
                            <ul>
                                <li><a href="./top-cover.php">Car Top Covers</a></li>
                                <li><a href="./air-freshner.php">Air Freshner</a></li>
                                <li><a href="./car-wax.php">Car Wax</a></li>
                                <li><a href="./engine-cleaner.php">Engine Cleaner</a></li>
                                <li><a href="./tyre-care.php">Type Car</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="filter-feilds border rounded">
                        <div class="filter-label mt-0">
                            <h5 class="mb-0">Refine Your Search</h5>
                        </div>
                        <div class="accordion" id="carFilter">
                            <div class="card">
                                <div class="card-header" id="searchFilter">
                                    <h2>
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="search">
                                            Search by keyword
                                        </button>
                                    </h2>
                                </div>
                                <div id="search" class="collapse" aria-labelledby="searchFilter" data-parent="#carFilter">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="position-relative">
                                                <input type="text" placeholder="Search Here...." class="form-control rounded" id="password">
                                                <button type="button" class="search-btn text-secondary"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="priceFilter">
                                    <h2>
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#price" aria-expanded="false" aria-controls="price">
                                            Price Range
                                        </button>
                                    </h2>
                                </div>
                                <div id="price" class="collapse" aria-labelledby="priceFilter" data-parent="#carFilter">
                                    <div class="card-body pt-0 pb-5">
                                        <div class="form-group">
                                            <div class="range-slider">
                                                <span class="output outputOne"></span>
                                                <span class="output outputTwo"></span>
                                                <span class="full-range"></span>
                                                <span class="incl-range"></span>
                                                <input name="rangeOne" value="10" min="0" max="100" step="1" type="range">
                                                <input name="rangeTwo" value="90" min="0" max="100" step="1" type="range">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="ratingFilter">
                                    <h2>
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#rating" aria-expanded="false" aria-controls="rating">
                                            Filter by Ratings
                                        </button>
                                    </h2>
                                </div>
                                <div id="rating" class="collapse" aria-labelledby="ratingFilter" data-parent="#carFilter">
                                    <div class="card-body">
                                        <div class="form-group pop-up-content p-0">
                                            <div class="rating">
                                                <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                                <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                                <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                                <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                                <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="seachedFilter shadow border">
                    <div class="row justify-content-between">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="form-group d-flex align-items-center justify-content-end gap-15 mb-0">
                                <label for="carParts" class="flex-shrink-0 mb-md-0">
                                    Search :
                                </label>
                                <select name="car-part" id="carParts" class="form-control rounded serachFiled flex-shrink-0">
                                    <option value="">Eg : Lights, Tyres</option>
                                    <option value="Light">Light</option>
                                    <option value="Tyres">Tyres</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listing-box my-3">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-3">
                            <div class="product-listing-box shadow" data-aos="fade-up" data-aos-duration="1000">
                                <div class="product-listing-header px-2">
                                    <div class="d-flex align-items-end flex-column">
                                        <div class="product-whishlist-icon">
                                            <button class="btn text-theme-primary"><i class="fa fa-heart-o"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-listing-image">
                                    <figure class="mb-0">
                                        <img src="../assets/images/product8.png" alt="Car 1" draggable="false">
                                    </figure>
                                </div>
                                <div class="product-listing-footer px-2">
                                    <div class="d-flex justify-content-between flex-wrap flex-nowrap">
                                        <div class="product-name">
                                            <p class="mb-0 font-weight-bold">Headlights</p>
                                            <p class="mb-0 f-14"><i>Car Care | Car Top Covers</i></p>
                                        </div>
                                        <div class="product-price flex-shrink-0">
                                            <p class="text-theme-primary mb-0 font-weight-bold">$50K</p>
                                        </div>
                                    </div>
                                    <div class="rating text-yellow mt-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="product-listing-box shadow" data-aos="fade-up" data-aos-duration="1000">
                                <div class="product-listing-header px-2">
                                    <div class="d-flex align-items-end flex-column">
                                        <div class="product-whishlist-icon">
                                            <button class="btn text-theme-primary"><i class="fa fa-heart-o"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-listing-image">
                                    <figure class="mb-0 h-100">
                                        <img src="../assets/images/product1.png" alt="Car 1" draggable="false">
                                    </figure>
                                </div>
                                <div class="product-listing-footer px-2">
                                    <div class="d-flex justify-content-between flex-wrap flex-nowrap">
                                        <div class="product-name">
                                            <p class="mb-0 font-weight-bold">Headlights</p>
                                            <p class="mb-0 f-14"><i>Car Care | Car Top Covers</i></p>
                                        </div>
                                        <div class="product-price flex-shrink-0">
                                            <p class="text-theme-primary mb-0 font-weight-bold">$50K</p>
                                        </div>
                                    </div>
                                    <div class="rating text-yellow mt-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="product-listing-box shadow" data-aos="fade-up" data-aos-duration="1000">
                                <div class="product-listing-header px-2">
                                    <div class="d-flex align-items-end flex-column">
                                        <div class="product-whishlist-icon">
                                            <button class="btn text-theme-primary"><i class="fa fa-heart-o"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-listing-image">
                                    <figure class="mb-0">
                                        <img src="../assets/images/product2.png" alt="Car 1" draggable="false">
                                    </figure>
                                </div>
                                <div class="product-listing-footer px-2">
                                    <div class="d-flex justify-content-between flex-wrap flex-nowrap">
                                        <div class="product-name">
                                            <p class="mb-0 font-weight-bold">Headlights</p>
                                            <p class="mb-0 f-14"><i>Car Care | Car Top Covers</i></p>
                                        </div>
                                        <div class="product-price flex-shrink-0">
                                            <p class="text-theme-primary mb-0 font-weight-bold">$50K</p>
                                        </div>
                                    </div>
                                    <div class="rating text-yellow mt-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="product-listing-box shadow" data-aos="fade-up" data-aos-duration="1000">
                                <div class="product-listing-header px-2">
                                    <div class="d-flex align-items-end flex-column">
                                        <div class="product-whishlist-icon">
                                            <button class="btn text-theme-primary"><i class="fa fa-heart-o"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-listing-image">
                                    <figure class="mb-0 h-100">
                                        <img src="../assets/images/product6.png" alt="Car 1" draggable="false">
                                    </figure>
                                </div>
                                <div class="product-listing-footer px-2">
                                    <div class="d-flex justify-content-between flex-wrap flex-nowrap">
                                        <div class="product-name">
                                            <p class="mb-0 font-weight-bold">Headlights</p>
                                            <p class="mb-0 f-14"><i>Car Care | Car Top Covers</i></p>
                                        </div>
                                        <div class="product-price flex-shrink-0">
                                            <p class="text-theme-primary mb-0 font-weight-bold">$50K</p>
                                        </div>
                                    </div>
                                    <div class="rating text-yellow mt-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="product-listing-box shadow" data-aos="fade-up" data-aos-duration="1000">
                                <div class="product-listing-header px-2">
                                    <div class="d-flex align-items-end flex-column">
                                        <div class="product-whishlist-icon">
                                            <button class="btn text-theme-primary"><i class="fa fa-heart-o"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-listing-image">
                                    <figure class="mb-0">
                                        <img src="../assets/images/product8.png" alt="Car 1" draggable="false">
                                    </figure>
                                </div>
                                <div class="product-listing-footer px-2">
                                    <div class="d-flex justify-content-between flex-wrap flex-nowrap">
                                        <div class="product-name">
                                            <p class="mb-0 font-weight-bold">Headlights</p>
                                            <p class="mb-0 f-14"><i>Car Care | Car Top Covers</i></p>
                                        </div>
                                        <div class="product-price flex-shrink-0">
                                            <p class="text-theme-primary mb-0 font-weight-bold">$50K</p>
                                        </div>
                                    </div>
                                    <div class="rating text-yellow mt-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="product-listing-box shadow" data-aos="fade-up" data-aos-duration="1000">
                                <div class="product-listing-header px-2">
                                    <div class="d-flex align-items-end flex-column">
                                        <div class="product-whishlist-icon">
                                            <button class="btn text-theme-primary"><i class="fa fa-heart-o"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-listing-image">
                                    <figure class="mb-0 h-100">
                                        <img src="../assets/images/product1.png" alt="Car 1" draggable="false">
                                    </figure>
                                </div>
                                <div class="product-listing-footer px-2">
                                    <div class="d-flex justify-content-between flex-wrap flex-nowrap">
                                        <div class="product-name">
                                            <p class="mb-0 font-weight-bold">Headlights</p>
                                            <p class="mb-0 f-14"><i>Car Care | Car Top Covers</i></p>
                                        </div>
                                        <div class="product-price flex-shrink-0">
                                            <p class="text-theme-primary mb-0 font-weight-bold">$50K</p>
                                        </div>
                                    </div>
                                    <div class="rating text-yellow mt-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-bar">
                    <div class="d-flex justify-content-end flex-wrap align-items-center">
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