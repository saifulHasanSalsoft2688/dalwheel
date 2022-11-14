<?php
include('../layout/loggedin-header.php');
?>

<section class="product-detail py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title text-center">
                    <h1 class="font-weight-bold">Product Details</h1>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-6">
                <div class="product-slides">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../assets/images/slide1.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../assets/images/slide1.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../assets/images/slide1.png" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev op-1" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="rounded-arrow">
                                <span class="fa fa-long-arrow-left" aria-hidden="true"></span>
                            </span>

                        </a>
                        <a class="carousel-control-next op-1" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="rounded-arrow">
                                <span class="fa fa-long-arrow-right" aria-hidden="true"></span>
                            </span>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-desc">
                    <div class="shop-content">
                        <h3 class="f-22">Spotty Pet Store</h3>
                        <div class="rating text-yellow mb-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="text-secondary">4.0 (100+)</span>
                        </div>
                        <div class="description-box flex-grow-1">
                            <div class="category-name mb-2">
                                <p class="mb-0">ABXC Category</p>
                            </div>
                            <div class="price-box mb-2">
                                <h4 class="text-theme-primary mb-0"><span class="currencySymbol">$</span>580</h4>
                            </div>
                            <div class="quantity-selector py-3 d-flex align-items-center gap-15">
                                <label class="mb-0">Quantity:</label>
                                <div class="input-group-field rounded-arrow shadow">
                                    <button type="button" class="quantity-left-minus btn btn-number" data-type="minus" data-field="">
                                        <span class="fa fa-minus"></span>
                                    </button>
                                    <input type="number" id="quantity" name="quantity" class="form-control-field input-number-field" value="1" min="1" max="100">
                                    <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                                        <span class="fa fa-plus"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-short-desc">
                            <h5>Description</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the when an unknown printer took
                                a galley of type and scrambled it to make a type specimen book.</p>
                            <p>It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.</p>
                        </div>
                        <div class="add-to-cart mt-4">
                            <button class="secondary-theme-button shadow btn bg-brown py-2" onclick="window.location = '../cart/'">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="review-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 shadow">
                <div class="review-box px-5 py-3">
                    <div class="title-box">
                        <h2>Rating & Reviews</h2>
                    </div>
                    <div class="total-review py-4">
                        <div class="d-flex gap-30">
                            <div class="review-count">
                                <h2 class="mb-2">5.0<span class="f-18 text-secondary">/5</span></h2>
                                <div class="rating text-yellow mb-2 f-18">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="total-rating">
                                    <p class="text-secondary">100 Rating</p>
                                </div>
                            </div>
                            <div class="review-bar">
                                <div class="d-flex align-items-center gap-15 flex-wrap">
                                    <div class="rating text-yellow f-18">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="review-bar-line">
                                        <div class="grey-bar">
                                            <div class="review-progress"></div>
                                        </div>
                                    </div>
                                    <div class="review-count-bar">
                                        <p class="mb-0 text-secondary">25</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-15 flex-wrap">
                                    <div class="rating text-yellow f-18">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star text-grey-light"></i>
                                    </div>
                                    <div class="review-bar-line">
                                        <div class="grey-bar">
                                            <div class="review-progress" style="width: 75%;"></div>
                                        </div>
                                    </div>
                                    <div class="review-count-bar">
                                        <p class="mb-0 text-secondary">10</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-15 flex-wrap">
                                    <div class="rating text-yellow f-18">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star text-grey-light"></i>
                                        <i class="fa fa-star text-grey-light"></i>
                                    </div>
                                    <div class="review-bar-line">
                                        <div class="grey-bar">
                                            <div class="review-progress" style="width: 85%;"></div>
                                        </div>
                                    </div>
                                    <div class="review-count-bar">
                                        <p class="mb-0 text-secondary">15</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-15 flex-wrap">
                                    <div class="rating text-yellow f-18">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star text-grey-light"></i>
                                        <i class="fa fa-star text-grey-light"></i>
                                        <i class="fa fa-star text-grey-light"></i>
                                    </div>
                                    <div class="review-bar-line">
                                        <div class="grey-bar">
                                            <div class="review-progress" style="width: 50%;"></div>
                                        </div>
                                    </div>
                                    <div class="review-count-bar">
                                        <p class="mb-0 text-secondary">01</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-15 flex-wrap">
                                    <div class="rating text-yellow f-18">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star text-grey-light"></i>
                                        <i class="fa fa-star text-grey-light"></i>
                                        <i class="fa fa-star text-grey-light"></i>
                                        <i class="fa fa-star text-grey-light"></i>
                                    </div>
                                    <div class="review-bar-line">
                                        <div class="grey-bar">
                                            <div class="review-progress" style="width: 30%;"></div>
                                        </div>
                                    </div>
                                    <div class="review-count-bar">
                                        <p class="mb-0 text-secondary">12</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customer-reviews px-5 py-3">
                    <div class="c-review mb-5">
                        <div class="rating text-yellow mb-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="d-flex gap-15 flex-wrap align-items-center mb-2">
                            <p class="mb-0 text-secondary">by James</p>
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/trust.png" alt="Verified Purchase" draggable="false" class="mw-100 pr-2">
                                <p class="mb-0 text-green">Verified Purchase</p>
                            </div>
                        </div>
                        <div class="review-content">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="c-review mb-5">
                        <div class="rating text-yellow mb-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="d-flex gap-15 flex-wrap align-items-center mb-2">
                            <p class="mb-0 text-secondary">by James</p>
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/trust.png" alt="Verified Purchase" draggable="false" class="mw-100 pr-2">
                                <p class="mb-0 text-green">Verified Purchase</p>
                            </div>
                        </div>
                        <div class="review-content">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="c-review mb-5">
                        <div class="rating text-yellow mb-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="d-flex gap-15 flex-wrap align-items-center mb-2">
                            <p class="mb-0 text-secondary">by James</p>
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/trust.png" alt="Verified Purchase" draggable="false" class="mw-100 pr-2">
                                <p class="mb-0 text-green">Verified Purchase</p>
                            </div>
                        </div>
                        <div class="review-content">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="c-review mb-5">
                        <div class="rating text-yellow mb-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="d-flex gap-15 flex-wrap align-items-center mb-2">
                            <p class="mb-0 text-secondary">by James</p>
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/trust.png" alt="Verified Purchase" draggable="false" class="mw-100 pr-2">
                                <p class="mb-0 text-green">Verified Purchase</p>
                            </div>
                        </div>
                        <div class="review-content">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="c-review mb-5">
                        <div class="rating text-yellow mb-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="d-flex gap-15 flex-wrap align-items-center mb-2">
                            <p class="mb-0 text-secondary">by James</p>
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/trust.png" alt="Verified Purchase" draggable="false" class="mw-100 pr-2">
                                <p class="mb-0 text-green">Verified Purchase</p>
                            </div>
                        </div>
                        <div class="review-content">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="similar-products py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h1 class="f-40">Similar Products</h1>
            </div>
            <div class="col-md-3 mb-3">
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
                            <p class="text-theme-primary mb-0">$820</p>
                        </div>
                    </div>
                    <a href="../product/product-details.php" class="link-box"></a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="featureBox shadow">
                    <div class="feature-image">
                        <figure class="adjust-image">
                            <img src="../assets/images/c2.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
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
                            <p class="text-theme-primary mb-0">$820</p>
                        </div>
                    </div>
                    <a href="../product/product-details.php" class="link-box"></a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="featureBox shadow">
                    <div class="feature-image">
                        <figure class="adjust-image">
                            <img src="../assets/images/d1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
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
                            <p class="text-theme-primary mb-0">$820</p>
                        </div>
                    </div>
                    <a href="../product/product-details.php" class="link-box"></a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="featureBox shadow">
                    <div class="feature-image">
                        <figure class="adjust-image">
                            <img src="../assets/images/c3.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
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
                            <p class="text-theme-primary mb-0">$820</p>
                        </div>
                    </div>
                    <a href="../product/product-details.php" class="link-box"></a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include('../layout/footer.php');
?>