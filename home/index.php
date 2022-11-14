<?php
include('../layout/header.php');
?>
<section class="mainBanner">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="bannerContent text-center text-white">
                    <h1 class="f-70">Find The Best</h1>
                    <h1 class="f-70">Companion With Us</h1>
                    <p>Search adoptable pets from shelters, rescues & private owners.</p>
                </div>
                <div class="filterPet">
                    <form action="">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="flex-md-shrink-0">
                                <div class="form-group mb-0">
                                    <input type="text" placeholder="Enter City, State or ZIP" name="city" class="f-14 form-control border-0 rounded-0">
                                </div>
                            </div>
                            <div class="flex-md-shrink-0">
                                <div class="form-group mb-0">
                                    <input type="text" placeholder="Search Cat, Dog etc" name="search" class="f-14 form-control border-0 rounded-0">
                                </div>
                            </div>
                            <div class="flex-md-shrink-0">
                                <div class="form-group mb-0">
                                    <select name="adoptPet" id="" class="f-14 form-control border-0 rounded-0">
                                        <option value="">Adopt a Pet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex-md-shrink-0">
                                <div class="form-group mb-0">
                                    <button type="button" class="bg-theme-primary border-0 rounded-pill text-white"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container pet_categories">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-2 position-relative">
                    <div class="categories-box bg-blue text-center">
                        <img src="../assets/images/dog.png" alt="Dog" class="mw-100" draggable="false">
                        <p class="mb-0">Dog</p>
                    </div>
                    <a href="../listing/dog-listing.php" class="text-dark link-box"></a>
                </div>
                <div class="col-md-2 position-relative">
                    <div class="categories-box bg-orange text-center">
                        <img src="../assets/images/cat.png" alt="Cat" class="mw-100" draggable="false">
                        <p class="mb-0">Cat</p>
                    </div>
                    <a href="../listing/cat-listing.php" class="text-dark link-box"></a>
                </div>
                <div class="col-md-2 position-relative">
                    <div class="categories-box bg-greaish text-center">
                        <img src="../assets/images/owl.png" alt="Owl" class="mw-100" draggable="false">
                        <p class="mb-0">Other Animals</p>
                    </div>
                    <button data-toggle="modal" data-target="#otherCat" class="text-dark link-box bg-transparent border-0"></button>
                </div>
                <div class="col-md-2 position-relative">
                    <div class="categories-box bg-green text-center">
                        <img src="../assets/images/dog-house.png" alt="Dog House" class="mw-100" draggable="false">
                        <p class="mb-0">Shelters</p>
                    </div>
                    <a href="../listing/shelters.php" class="text-dark link-box"></a>
                </div>
                <div class="col-md-2 position-relative">
                    <div class="categories-box bg-purple text-center">
                        <img src="../assets/images/shops.png" alt="Shop" class="mw-100" draggable="false">
                        <p class="mb-0">Shop</p>
                    </div>
                    <a href="../shop/" class="text-dark link-box"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- featured ad  -->

<section class="featureAd">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="f-40">Featured Ads</h1>
                <p>Adorable adoptables near you!</p>
            </div>
        </div>
        <div class="regular slider">
            <div class="featureBox position-relative">
                <div class="feature-image">
                    <div class="additional-things">
                        <div class="featureRibbon">
                            <span>Featured</span>
                        </div>
                        <div class="whislList">
                            <button><i class="fa fa-heart"></i></button>
                        </div>
                    </div>
                    <figure class="adjust-image">
                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="feature-content px-3">
                    <div class="feature-header d-flex align-items-center gap-15">
                        <h3 class="f-22">Kathy Lewis Baby</h3>
                        <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                    </div>
                    <div class="feature-body">
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">From: Pittie Love Rescue</p>
                            </div>
                        </div>
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">Greenville, Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-footer pt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price-box">
                                <h3 class="f-24 text-theme-primary">$820</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="../adopt/purchase-detail.php" class="link-box"></a>
            </div>
            <div class="featureBox position-relative">
                <div class="feature-image">
                    <div class="additional-things">
                        <div class="featureRibbon">
                            <span>Featured</span>
                        </div>
                        <div class="whislList">
                            <button><i class="fa fa-heart"></i></button>
                        </div>
                    </div>
                    <figure class="adjust-image">
                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="feature-content px-3">
                    <div class="feature-header d-flex align-items-center gap-15">
                        <h3 class="f-22">Kathy Lewis Baby</h3>
                        <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                    </div>
                    <div class="feature-body">
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">From: Pittie Love Rescue</p>
                            </div>
                        </div>
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">Greenville, Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-footer pt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price-box">
                                <h3 class="f-24 text-theme-primary">$820</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="../adopt/purchase-detail.php" class="link-box"></a>
            </div>
            <div class="featureBox position-relative">
                <div class="feature-image">
                    <div class="additional-things">
                        <div class="featureRibbon">
                            <span>Featured</span>
                        </div>
                        <div class="whislList">
                            <button><i class="fa fa-heart"></i></button>
                        </div>
                    </div>
                    <figure class="adjust-image">
                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="feature-content px-3">
                    <div class="feature-header d-flex align-items-center gap-15">
                        <h3 class="f-22">Kathy Lewis Baby</h3>
                        <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                    </div>
                    <div class="feature-body">
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">From: Pittie Love Rescue</p>
                            </div>
                        </div>
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">Greenville, Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-footer pt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price-box">
                                <h3 class="f-24 text-theme-primary">$820</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="../adopt/purchase-detail.php" class="link-box"></a>
            </div>
            <div class="featureBox position-relative">
                <div class="feature-image">
                    <div class="additional-things">
                        <div class="featureRibbon">
                            <span>Featured</span>
                        </div>
                        <div class="whislList">
                            <button><i class="fa fa-heart"></i></button>
                        </div>
                    </div>
                    <figure class="adjust-image">
                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="feature-content px-3">
                    <div class="feature-header d-flex align-items-center gap-15">
                        <h3 class="f-22">Kathy Lewis Baby</h3>
                        <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                    </div>
                    <div class="feature-body">
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">From: Pittie Love Rescue</p>
                            </div>
                        </div>
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">Greenville, Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-footer pt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price-box">
                                <h3 class="f-24 text-theme-primary">$820</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="../adopt/purchase-detail.php" class="link-box"></a>
            </div>
            <div class="featureBox position-relative">
                <div class="feature-image">
                    <div class="additional-things">
                        <div class="featureRibbon">
                            <span>Featured</span>
                        </div>
                        <div class="whislList">
                            <button><i class="fa fa-heart"></i></button>
                        </div>
                    </div>
                    <figure class="adjust-image">
                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="feature-content px-3">
                    <div class="feature-header d-flex align-items-center gap-15">
                        <h3 class="f-22">Kathy Lewis Baby</h3>
                        <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                    </div>
                    <div class="feature-body">
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">From: Pittie Love Rescue</p>
                            </div>
                        </div>
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">Greenville, Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-footer pt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price-box">
                                <h3 class="f-24 text-theme-primary">$820</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="../adopt/purchase-detail.php" class="link-box"></a>
            </div>
        </div>
    </div>
</section>

<!-- private owner  -->

<section class="privateOwner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="f-40">Adopt Pet From Private Owner</h1>
                <p>Pets Available for Adoption Nearby</p>
            </div>
            <div class="col-md-6 mb-4">
                <div class="private-owner-tab d-flex gap-15 shadow position-relative">
                    <div class="owner-image">
                        <figure class="adjust-image-owner mb-0">
                            <img src="../assets/images/d1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                        </figure>
                    </div>
                    <div class="feature-content flex-grow-1">
                        <div class="owner-additional-things">
                            <div class="whislList">
                                <button class="border"><i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="feature-header d-flex align-items-center gap-15">
                            <h3 class="f-22">Kathy Lewis Baby</h3>
                            <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                        </div>
                        <div class="feature-body">
                            <div class="d-flex gap-15">
                                <div class="icon-box flex-shrink-0">
                                    <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                                </div>
                                <div class="description-box flex-grow-1">
                                    <p class="mb-0">From: Pittie Love Rescue</p>
                                </div>
                            </div>
                            <div class="d-flex gap-15">
                                <div class="icon-box flex-shrink-0">
                                    <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                                </div>
                                <div class="description-box flex-grow-1">
                                    <p class="mb-0">Greenville, Texas</p>
                                    <p class="mb-0">10 miles away</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-footer pt-3">
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="view-more">
                                    <a href="#" class="viewMore">View Pet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="../adopt/purchase-detail.php" class="link-box"></a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="private-owner-tab d-flex gap-15 shadow position-relative">
                    <div class="owner-image">
                        <figure class="adjust-image-owner mb-0">
                            <img src="../assets/images/d2.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                        </figure>
                    </div>
                    <div class="feature-content flex-grow-1">
                        <div class="owner-additional-things">
                            <div class="whislList">
                                <button class="border"><i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="feature-header d-flex align-items-center gap-15">
                            <h3 class="f-22">Kathy Lewis Baby</h3>
                            <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                        </div>
                        <div class="feature-body">
                            <div class="d-flex gap-15">
                                <div class="icon-box flex-shrink-0">
                                    <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                                </div>
                                <div class="description-box flex-grow-1">
                                    <p class="mb-0">From: Pittie Love Rescue</p>
                                </div>
                            </div>
                            <div class="d-flex gap-15">
                                <div class="icon-box flex-shrink-0">
                                    <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                                </div>
                                <div class="description-box flex-grow-1">
                                    <p class="mb-0">Greenville, Texas</p>
                                    <p class="mb-0">10 miles away</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-footer pt-3">
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="view-more">
                                    <a href="#" class="viewMore">View Pet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="../adopt/purchase-detail.php" class="link-box"></a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="private-owner-tab d-flex gap-15 shadow position-relative">
                    <div class="owner-image">
                        <figure class="adjust-image-owner mb-0">
                            <img src="../assets/images/d3.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                        </figure>
                    </div>
                    <div class="feature-content flex-grow-1">
                        <div class="owner-additional-things">
                            <div class="whislList">
                                <button class="border"><i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="feature-header d-flex align-items-center gap-15">
                            <h3 class="f-22">Kathy Lewis Baby</h3>
                            <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                        </div>
                        <div class="feature-body">
                            <div class="d-flex gap-15">
                                <div class="icon-box flex-shrink-0">
                                    <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                                </div>
                                <div class="description-box flex-grow-1">
                                    <p class="mb-0">From: Pittie Love Rescue</p>
                                </div>
                            </div>
                            <div class="d-flex gap-15">
                                <div class="icon-box flex-shrink-0">
                                    <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                                </div>
                                <div class="description-box flex-grow-1">
                                    <p class="mb-0">Greenville, Texas</p>
                                    <p class="mb-0">10 miles away</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-footer pt-3">
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="view-more">
                                    <a href="#" class="viewMore">View Pet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="../adopt/purchase-detail.php" class="link-box"></a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="private-owner-tab d-flex gap-15 shadow position-relative">
                    <div class="owner-image">
                        <figure class="adjust-image-owner mb-0">
                            <img src="../assets/images/d4.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                        </figure>
                    </div>
                    <div class="feature-content flex-grow-1">
                        <div class="owner-additional-things">
                            <div class="whislList">
                                <button class="border"><i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="feature-header d-flex align-items-center gap-15">
                            <h3 class="f-22">Kathy Lewis Baby</h3>
                            <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                        </div>
                        <div class="feature-body">
                            <div class="d-flex gap-15">
                                <div class="icon-box flex-shrink-0">
                                    <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                                </div>
                                <div class="description-box flex-grow-1">
                                    <p class="mb-0">From: Pittie Love Rescue</p>
                                </div>
                            </div>
                            <div class="d-flex gap-15">
                                <div class="icon-box flex-shrink-0">
                                    <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                                </div>
                                <div class="description-box flex-grow-1">
                                    <p class="mb-0">Greenville, Texas</p>
                                    <p class="mb-0">10 miles away</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-footer pt-3">
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="view-more">
                                    <a href="#" class="viewMore">View Pet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="../adopt/purchase-detail.php" class="link-box"></a>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <p class="mb-0"><a class="secondary-theme-button shadow btn" href="../listing/cat-listing.php">View All Listing</a></p>
            </div>
        </div>
    </div>
</section>


<!-- app section  -->

<section class="appSection">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h1 class="f-60">Adopt The <span class="text-theme-primary font-weight-normal">Perfect</span> Pet</h1>
                <p class="ls-2">Search adoptable pets from shelters, rescues & private owners.</p>
                <div class="d-flex gap-15">
                    <a href="#">
                        <img src="../assets/images/google.png" draggable="false" class="mw-100">
                    </a>
                    <a href="#">
                        <img src="../assets/images/app.png" draggable="false" class="mw-100">
                    </a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="appImage position-relative d-flex align-items-center position-relative">
                    <div class="front-image">
                        <img src="../assets/images/mfront.png" alt="First Image" draggable="false">
                    </div>
                    <div class="back-image">
                        <img src="../assets/images/mback.png" alt="Second Image" draggable="false">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- testimonials  -->

<section class="testimonalSection">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="f-40">Testimonials</h1>
                <p>Special Quotes From Our Customers</p>
            </div>
        </div>
    </div>
    <div class="center slider">
        <div class="testimonialBox shadow">
            <div class="rating text-yellow mb-3">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="testimonialContent">
                <h4>Lorum Ipsum Dummy</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
            <div class="authorBox d-flex gap-15 align-items-center">
                <div class="author-image">
                    <figure class="mb-0">
                        <img src="../assets/images/t1.png" alt="Ben Döring" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="authorInfo">
                    <p class="mb-0 text-theme-primary">Ben Döring</p>
                    <p class="text-secondary mb-0"><small>Oct 27 - 8 Minutes read</small></p>
                </div>
            </div>
        </div>
        <div class="testimonialBox shadow">
            <div class="rating text-yellow mb-3">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="testimonialContent">
                <h4>Lorum Ipsum Dummy</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
            <div class="authorBox d-flex gap-15 align-items-center">
                <div class="author-image">
                    <figure class="mb-0">
                        <img src="../assets/images/t1.png" alt="Ben Döring" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="authorInfo">
                    <p class="mb-0 text-theme-primary">Ben Döring</p>
                    <p class="text-secondary mb-0"><small>Oct 27 - 8 Minutes read</small></p>
                </div>
            </div>
        </div>
        <div class="testimonialBox shadow">
            <div class="rating text-yellow mb-3">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="testimonialContent">
                <h4>Lorum Ipsum Dummy</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
            <div class="authorBox d-flex gap-15 align-items-center">
                <div class="author-image">
                    <figure class="mb-0">
                        <img src="../assets/images/t1.png" alt="Ben Döring" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="authorInfo">
                    <p class="mb-0 text-theme-primary">Ben Döring</p>
                    <p class="text-secondary mb-0"><small>Oct 27 - 8 Minutes read</small></p>
                </div>
            </div>
        </div>
        <div class="testimonialBox shadow">
            <div class="rating text-yellow mb-3">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="testimonialContent">
                <h4>Lorum Ipsum Dummy</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
            <div class="authorBox d-flex gap-15 align-items-center">
                <div class="author-image">
                    <figure class="mb-0">
                        <img src="../assets/images/t1.png" alt="Ben Döring" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="authorInfo">
                    <p class="mb-0 text-theme-primary">Ben Döring</p>
                    <p class="text-secondary mb-0"><small>Oct 27 - 8 Minutes read</small></p>
                </div>
            </div>
        </div>
        <div class="testimonialBox shadow">
            <div class="rating text-yellow mb-3">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="testimonialContent">
                <h4>Lorum Ipsum Dummy</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
            <div class="authorBox d-flex gap-15 align-items-center">
                <div class="author-image">
                    <figure class="mb-0">
                        <img src="../assets/images/t1.png" alt="Ben Döring" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="authorInfo">
                    <p class="mb-0 text-theme-primary">Ben Döring</p>
                    <p class="text-secondary mb-0"><small>Oct 27 - 8 Minutes read</small></p>
                </div>
            </div>
        </div>
        <div class="testimonialBox shadow">
            <div class="rating text-yellow mb-3">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="testimonialContent">
                <h4>Lorum Ipsum Dummy</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
            <div class="authorBox d-flex gap-15 align-items-center">
                <div class="author-image">
                    <figure class="mb-0">
                        <img src="../assets/images/t1.png" alt="Ben Döring" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="authorInfo">
                    <p class="mb-0 text-theme-primary">Ben Döring</p>
                    <p class="text-secondary mb-0"><small>Oct 27 - 8 Minutes read</small></p>
                </div>
            </div>
        </div>
        <div class="testimonialBox shadow">
            <div class="rating text-yellow mb-3">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="testimonialContent">
                <h4>Lorum Ipsum Dummy</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
            </div>
            <div class="authorBox d-flex gap-15 align-items-center">
                <div class="author-image">
                    <figure class="mb-0">
                        <img src="../assets/images/t1.png" alt="Ben Döring" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="authorInfo">
                    <p class="mb-0 text-theme-primary">Ben Döring</p>
                    <p class="text-secondary mb-0"><small>Oct 27 - 8 Minutes read</small></p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Shelter  -->

<section class="privateOwner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="f-40">Find Pets From Shelters</h1>
                <p>Adorable adoptables near you!</p>
            </div>
        </div>
        <div class="regular slider">
            <div class="featureBox position-relative">
                <div class="feature-image">
                    <div class="additional-things align-items-center">
                        <div class="tag">
                            <span class="bg-red">For Sale</span>
                        </div>
                        <div class="whislList">
                            <button><i class="fa fa-heart"></i></button>
                        </div>
                    </div>
                    <figure class="adjust-image">
                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="feature-content px-3">
                    <div class="feature-header d-flex align-items-center gap-15">
                        <h3 class="f-22">Kathy Lewis Baby</h3>
                        <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                    </div>
                    <div class="feature-body">
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">From: Pittie Love Rescue</p>
                            </div>
                        </div>
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">Greenville, Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-footer pt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price-box">
                                <h3 class="f-24 text-theme-primary">$820</h3>
                            </div>
                            <div class="view-more">
                                <a href="#" class="viewMore">View Pet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="../adopt/purchase-detail.php" class="link-box"></a>
            </div>
            <div class="featureBox position-relative">
                <div class="feature-image">
                    <div class="additional-things align-items-center">
                        <div class="tag">
                            <span class="bg-sold">Sold Out</span>
                        </div>
                        <div class="whislList">
                            <button><i class="fa fa-heart"></i></button>
                        </div>
                    </div>
                    <figure class="adjust-image">
                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="feature-content px-3">
                    <div class="feature-header d-flex align-items-center gap-15">
                        <h3 class="f-22">Kathy Lewis Baby</h3>
                        <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                    </div>
                    <div class="feature-body">
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">From: Pittie Love Rescue</p>
                            </div>
                        </div>
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">Greenville, Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-footer pt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price-box">
                                <h3 class="f-24 text-theme-primary">$820</h3>
                            </div>
                            <div class="view-more">
                                <a href="#" class="viewMore">View Pet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="../adopt/purchase-detail.php" class="link-box"></a>
            </div>
            <div class="featureBox position-relative">
                <div class="feature-image">
                    <div class="additional-things align-items-center">
                        <div class="tag">
                            <span class="bg-red">For Sale</span>
                        </div>
                        <div class="whislList">
                            <button><i class="fa fa-heart"></i></button>
                        </div>
                    </div>
                    <figure class="adjust-image">
                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="feature-content px-3">
                    <div class="feature-header d-flex align-items-center gap-15">
                        <h3 class="f-22">Kathy Lewis Baby</h3>
                        <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                    </div>
                    <div class="feature-body">
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">From: Pittie Love Rescue</p>
                            </div>
                        </div>
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">Greenville, Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-footer pt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price-box">
                                <h3 class="f-24 text-theme-primary">$820</h3>
                            </div>
                            <div class="view-more">
                                <a href="#" class="viewMore">View Pet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="../adopt/purchase-detail.php" class="link-box"></a>
            </div>
            <div class="featureBox position-relative">
                <div class="feature-image">
                    <div class="additional-things align-items-center">
                        <div class="tag">
                            <span class="bg-red">For Sale</span>
                        </div>
                        <div class="whislList">
                            <button><i class="fa fa-heart"></i></button>
                        </div>
                    </div>
                    <figure class="adjust-image">
                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="feature-content px-3">
                    <div class="feature-header d-flex align-items-center gap-15">
                        <h3 class="f-22">Kathy Lewis Baby</h3>
                        <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                    </div>
                    <div class="feature-body">
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">From: Pittie Love Rescue</p>
                            </div>
                        </div>
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">Greenville, Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-footer pt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price-box">
                                <h3 class="f-24 text-theme-primary">$820</h3>
                            </div>
                            <div class="view-more">
                                <a href="#" class="viewMore">View Pet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="../adopt/purchase-detail.php" class="link-box"></a>
            </div>
            <div class="featureBox position-relative">
                <div class="feature-image">
                    <div class="additional-things align-items-center">
                        <div class="tag">
                            <span class="bg-sold">Sold Out</span>
                        </div>
                        <div class="whislList">
                            <button><i class="fa fa-heart"></i></button>
                        </div>
                    </div>
                    <figure class="adjust-image">
                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="feature-content px-3">
                    <div class="feature-header d-flex align-items-center gap-15">
                        <h3 class="f-22">Kathy Lewis Baby</h3>
                        <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                    </div>
                    <div class="feature-body">
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">From: Pittie Love Rescue</p>
                            </div>
                        </div>
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">Greenville, Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-footer pt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price-box">
                                <h3 class="f-24 text-theme-primary">$820</h3>
                            </div>
                            <div class="view-more">
                                <a href="#" class="viewMore">View Pet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="../adopt/purchase-detail.php" class="link-box"></a>
            </div>
            <div class="featureBox position-relative">
                <div class="feature-image">
                    <div class="additional-things align-items-center">
                        <div class="tag">
                            <span class="bg-red">For Sale</span>
                        </div>
                        <div class="whislList">
                            <button><i class="fa fa-heart"></i></button>
                        </div>
                    </div>
                    <figure class="adjust-image">
                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                    </figure>
                </div>
                <div class="feature-content px-3">
                    <div class="feature-header d-flex align-items-center gap-15">
                        <h3 class="f-22">Kathy Lewis Baby</h3>
                        <img src="../assets/images/gender-female.png" alt="icon" draggable="false" class="mw-100">
                    </div>
                    <div class="feature-body">
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/animal-shelter.png" alt="Animal Shelter" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">From: Pittie Love Rescue</p>
                            </div>
                        </div>
                        <div class="d-flex gap-15">
                            <div class="icon-box flex-shrink-0">
                                <img src="../assets/images/pin.png" alt="Pin" draggable="false">
                            </div>
                            <div class="description-box flex-grow-1">
                                <p class="mb-0">Greenville, Texas</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-footer pt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price-box">
                                <h3 class="f-24 text-theme-primary">$820</h3>
                            </div>
                            <div class="view-more">
                                <a href="#" class="viewMore">View Pet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="../adopt/purchase-detail.php" class="link-box"></a>
            </div>
        </div>
    </div>
</section>


<?php
include('../layout/footer.php');
?>