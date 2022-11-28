<?php
include('../layout/loggedin-header.php');
?>

<section class="listing-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title mb-3">
                    <h5 class="">Home <i class="fa fa-chevron-right"></i> <span class="text-danger">Wishlist</span> </h5>
                    <h3 class="font-weight-bold">Wishlist</h3>
                </div>
                <div class="tab-content">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active rounde-0" id="whishlist-tab" data-toggle="pill" href="#whishlist" role="tab" aria-controls="whishlist" aria-selected="true">Wishlist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounde-0" id="saved-tab" data-toggle="pill" href="#saved" role="tab" aria-controls="saved" aria-selected="false">My Saved Ads</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="whishlist" role="tabpanel" aria-labelledby="whishlist-tab">
                            <div class="listing-box my-3">
                                <div class="row align-items-center">
                                    <div class="col-md-3 mb-3">
                                        <div class="product-listing-box my-3 shadow aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
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
                                    <div class="col-md-3 mb-3">
                                        <div class="product-listing-box my-3 shadow aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
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
                                    <div class="col-md-3 mb-3">
                                        <div class="product-listing-box my-3 shadow aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
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
                                    <div class="col-md-3 mb-3">
                                        <div class="product-listing-box my-3 shadow aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
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
                                    <div class="col-md-3 mb-3">
                                        <div class="product-listing-box my-3 shadow aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
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
                                    <div class="col-md-3 mb-3">
                                        <div class="product-listing-box my-3 shadow aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
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
                                    <div class="col-md-3 mb-3">
                                        <div class="product-listing-box my-3 shadow aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
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
                                    <div class="col-md-3 mb-3">
                                        <div class="product-listing-box my-3 shadow aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
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
                                    <div class="col-md-12 mb-3">
                                        <div class="cta mt-5">
                                            <div class="d-flex gap-15 flex-wrap justify-content-center">
                                                <a href="#" class="btn-theme-solid">Add All To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="saved" role="tabpanel" aria-labelledby="saved-tab">
                            <div class="listing-box my-3">
                                <div class="row align-items-center">
                                    <div class="col-md-3 mb-3">
                                        <div class="listingCard my-3">
                                            <div class="img_wrapper">
                                                <img src="../assets/images/slide-1.png" alt="Card image cap" class="img-fluid" draggable="false">
                                                <button class="notBtn addWhishlist"><i class="fa fa-heart"></i></button>
                                            </div>
                                            <div class="cardBody">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap my-1">
                                                    <h6 class="secTitle fw-600 mb-0 my-2">Renault UK</h6>
                                                    <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                                </div>
                                                <h6 class="secTitle fw-600">New York</h6>
                                                <!-- features start -->
                                                <ul class="featureList">
                                                    <li>2008</li>
                                                    <li>92,000 Km</li>
                                                    <li>Petrol</li>
                                                    <li>1800 Cc</li>
                                                    <li>Automatic</li>
                                                </ul>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button class="notBtn contactBtn"><i class="fa fa-phone"></i></button>
                                                    <a href="./comparison.php" class="nav-link secondary-theme-button shadow">Compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="listingCard my-3">
                                            <div class="img_wrapper">
                                                <img src="../assets/images/slide-1.png" alt="Card image cap" class="img-fluid" draggable="false">
                                                <button class="notBtn addWhishlist"><i class="fa fa-heart"></i></button>
                                            </div>
                                            <div class="cardBody">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap my-1">
                                                    <h6 class="secTitle fw-600 mb-0 my-2">Renault UK</h6>
                                                    <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                                </div>
                                                <h6 class="secTitle fw-600">New York</h6>
                                                <!-- features start -->
                                                <ul class="featureList">
                                                    <li>2008</li>
                                                    <li>92,000 Km</li>
                                                    <li>Petrol</li>
                                                    <li>1800 Cc</li>
                                                    <li>Automatic</li>
                                                </ul>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button class="notBtn contactBtn"><i class="fa fa-phone"></i></button>
                                                    <a href="./comparison.php" class="nav-link secondary-theme-button shadow">Compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="listingCard my-3">
                                            <div class="img_wrapper">
                                                <img src="../assets/images/slide-1.png" alt="Card image cap" class="img-fluid" draggable="false">
                                                <button class="notBtn addWhishlist"><i class="fa fa-heart"></i></button>
                                            </div>
                                            <div class="cardBody">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap my-1">
                                                    <h6 class="secTitle fw-600 mb-0 my-2">Renault UK</h6>
                                                    <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                                </div>
                                                <h6 class="secTitle fw-600">New York</h6>
                                                <!-- features start -->
                                                <ul class="featureList">
                                                    <li>2008</li>
                                                    <li>92,000 Km</li>
                                                    <li>Petrol</li>
                                                    <li>1800 Cc</li>
                                                    <li>Automatic</li>
                                                </ul>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button class="notBtn contactBtn"><i class="fa fa-phone"></i></button>
                                                    <a href="./comparison.php" class="nav-link secondary-theme-button shadow">Compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="listingCard my-3">
                                            <div class="img_wrapper">
                                                <img src="../assets/images/slide-1.png" alt="Card image cap" class="img-fluid" draggable="false">
                                                <button class="notBtn addWhishlist"><i class="fa fa-heart"></i></button>
                                            </div>
                                            <div class="cardBody">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap my-1">
                                                    <h6 class="secTitle fw-600 mb-0 my-2">Renault UK</h6>
                                                    <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                                </div>
                                                <h6 class="secTitle fw-600">New York</h6>
                                                <!-- features start -->
                                                <ul class="featureList">
                                                    <li>2008</li>
                                                    <li>92,000 Km</li>
                                                    <li>Petrol</li>
                                                    <li>1800 Cc</li>
                                                    <li>Automatic</li>
                                                </ul>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button class="notBtn contactBtn"><i class="fa fa-phone"></i></button>
                                                    <a href="./comparison.php" class="nav-link secondary-theme-button shadow">Compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="listingCard my-3">
                                            <div class="img_wrapper">
                                                <img src="../assets/images/slide-1.png" alt="Card image cap" class="img-fluid" draggable="false">
                                                <button class="notBtn addWhishlist"><i class="fa fa-heart"></i></button>
                                            </div>
                                            <div class="cardBody">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap my-1">
                                                    <h6 class="secTitle fw-600 mb-0 my-2">Renault UK</h6>
                                                    <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                                </div>
                                                <h6 class="secTitle fw-600">New York</h6>
                                                <!-- features start -->
                                                <ul class="featureList">
                                                    <li>2008</li>
                                                    <li>92,000 Km</li>
                                                    <li>Petrol</li>
                                                    <li>1800 Cc</li>
                                                    <li>Automatic</li>
                                                </ul>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button class="notBtn contactBtn"><i class="fa fa-phone"></i></button>
                                                    <a href="./comparison.php" class="nav-link secondary-theme-button shadow">Compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="listingCard my-3">
                                            <div class="img_wrapper">
                                                <img src="../assets/images/slide-1.png" alt="Card image cap" class="img-fluid" draggable="false">
                                                <button class="notBtn addWhishlist"><i class="fa fa-heart"></i></button>
                                            </div>
                                            <div class="cardBody">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap my-1">
                                                    <h6 class="secTitle fw-600 mb-0 my-2">Renault UK</h6>
                                                    <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                                </div>
                                                <h6 class="secTitle fw-600">New York</h6>
                                                <!-- features start -->
                                                <ul class="featureList">
                                                    <li>2008</li>
                                                    <li>92,000 Km</li>
                                                    <li>Petrol</li>
                                                    <li>1800 Cc</li>
                                                    <li>Automatic</li>
                                                </ul>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button class="notBtn contactBtn"><i class="fa fa-phone"></i></button>
                                                    <a href="./comparison.php" class="nav-link secondary-theme-button shadow">Compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="listingCard my-3">
                                            <div class="img_wrapper">
                                                <img src="../assets/images/slide-1.png" alt="Card image cap" class="img-fluid" draggable="false">
                                                <button class="notBtn addWhishlist"><i class="fa fa-heart"></i></button>
                                            </div>
                                            <div class="cardBody">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap my-1">
                                                    <h6 class="secTitle fw-600 mb-0 my-2">Renault UK</h6>
                                                    <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                                </div>
                                                <h6 class="secTitle fw-600">New York</h6>
                                                <!-- features start -->
                                                <ul class="featureList">
                                                    <li>2008</li>
                                                    <li>92,000 Km</li>
                                                    <li>Petrol</li>
                                                    <li>1800 Cc</li>
                                                    <li>Automatic</li>
                                                </ul>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button class="notBtn contactBtn"><i class="fa fa-phone"></i></button>
                                                    <a href="./comparison.php" class="nav-link secondary-theme-button shadow">Compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="listingCard my-3">
                                            <div class="img_wrapper">
                                                <img src="../assets/images/slide-1.png" alt="Card image cap" class="img-fluid" draggable="false">
                                                <button class="notBtn addWhishlist"><i class="fa fa-heart"></i></button>
                                            </div>
                                            <div class="cardBody">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap my-1">
                                                    <h6 class="secTitle fw-600 mb-0 my-2">Renault UK</h6>
                                                    <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                                </div>
                                                <h6 class="secTitle fw-600">New York</h6>
                                                <!-- features start -->
                                                <ul class="featureList">
                                                    <li>2008</li>
                                                    <li>92,000 Km</li>
                                                    <li>Petrol</li>
                                                    <li>1800 Cc</li>
                                                    <li>Automatic</li>
                                                </ul>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <button class="notBtn contactBtn"><i class="fa fa-phone"></i></button>
                                                    <a href="./comparison.php" class="nav-link secondary-theme-button shadow">Compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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