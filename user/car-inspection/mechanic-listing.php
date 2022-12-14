<?php
include('../layout/loggedin-header.php');
?>

<section class="mechanic-listing py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title mb-3">
                    <h5 class="">Home <i class="fa fa-chevron-right"></i> Car Inspection <i class="fa fa-chevron-right"></i> <span class="text-danger">Car Mechanics</span> </h5>
                    <h3 class="font-weight-bold">Available Mechanics</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="filter-box">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="listing-box mb-3">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-3">
                            <div class="listingCard">
                                <div class="img_wrapper">
                                    <img src="../assets/images/m1.png" alt="Card image cap" class="img-fluid" draggable="false">
                                </div>
                                <div class="cardBody">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap my-2">
                                        <h6 class="secTitle fw-600 mb-0 my-2">Jaxon Maverick</h6>
                                        <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="./mechanic-detail.php" class="nav-link secondary-theme-button shadow">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="listingCard">
                                <div class="img_wrapper">
                                    <img src="../assets/images/m2.png" alt="Card image cap" class="img-fluid" draggable="false">
                                </div>
                                <div class="cardBody">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap my-2">
                                        <h6 class="secTitle fw-600 mb-0 my-2">Jaxon Maverick</h6>
                                        <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="./mechanic-detail.php" class="nav-link secondary-theme-button shadow">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="listingCard">
                                <div class="img_wrapper">
                                    <img src="../assets/images/m3.png" alt="Card image cap" class="img-fluid" draggable="false">
                                </div>
                                <div class="cardBody">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap my-2">
                                        <h6 class="secTitle fw-600 mb-0 my-2">Jaxon Maverick</h6>
                                        <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="./mechanic-detail.php" class="nav-link secondary-theme-button shadow">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="listingCard">
                                <div class="img_wrapper">
                                    <img src="../assets/images/m4.png" alt="Card image cap" class="img-fluid" draggable="false">
                                </div>
                                <div class="cardBody">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap my-2">
                                        <h6 class="secTitle fw-600 mb-0 my-2">Jaxon Maverick</h6>
                                        <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="./mechanic-detail.php" class="nav-link secondary-theme-button shadow">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="listingCard">
                                <div class="img_wrapper">
                                    <img src="../assets/images/m5.png" alt="Card image cap" class="img-fluid" draggable="false">
                                </div>
                                <div class="cardBody">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap my-2">
                                        <h6 class="secTitle fw-600 mb-0 my-2">Jaxon Maverick</h6>
                                        <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="./mechanic-detail.php" class="nav-link secondary-theme-button shadow">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="listingCard">
                                <div class="img_wrapper">
                                    <img src="../assets/images/m6.png" alt="Card image cap" class="img-fluid" draggable="false">
                                </div>
                                <div class="cardBody">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap my-2">
                                        <h6 class="secTitle fw-600 mb-0 my-2">Jaxon Maverick</h6>
                                        <h6 class="secTitle mb-0 fw-bold my-2 text-danger"> <sup class="fw400">$</sup> 566. <sub>90</sub> </h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="./mechanic-detail.php" class="nav-link secondary-theme-button shadow">Book Now</a>
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