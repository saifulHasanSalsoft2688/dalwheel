<?php
include('../layout/loggedin-header.php');
?>

<section class="car-listing-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title mb-3">
                    <h5 class="">Used Cars <i class="fa fa-chevron-right"></i> <span class="text-danger">Used Cars</span> </h5>
                    <h3 class="font-weight-bold">Used Car For Sale</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="filter-feilds border rounded">
                    <div class="filter-label mt-0">
                        <h5 class="mb-0">Refine Your Search</h5>
                    </div>
                    <div class="accordion" id="carFilter">
                        <div class="card">
                            <div class="card-header" id="searchFilter">
                                <h2>
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="search">
                                        Search by keyword
                                    </button>
                                </h2>
                            </div>
                            <div id="search" class="collapse" aria-labelledby="searchFilter" data-parent="#carFilter" style="">
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

                        <!-- city  -->

                        <div class="card">
                            <div class="card-header" id="searchCity">
                                <h2>
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#city" aria-expanded="false" aria-controls="city">
                                        City
                                    </button>
                                </h2>
                            </div>
                            <div id="city" class="collapse" aria-labelledby="searchCity" data-parent="#carFilter">
                                <div class="card-body">
                                    <div class="position-relative mb-2">
                                        <input type="text" placeholder="Search Here...." class="form-control rounded">
                                        <button type="button" class="search-btn text-secondary"><i class="fa fa-search"></i></button>
                                    </div>
                                    <div class="ctiy-option my-2">
                                        <div class="form-group">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="New York" id="newYork">
                                                <label class="form-check-label" for="newYork">
                                                    New York
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="Chicago" id="chicago">
                                                <label class="form-check-label" for="chicago">
                                                    Chicago
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="Los Angeles" id="losAngeles">
                                                <label class="form-check-label" for="losAngeles">
                                                    Los Angeles
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="San Diego" id="sanDiego">
                                                <label class="form-check-label" for="sanDiego">
                                                    San Diego
                                                </label>
                                            </div>

                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="Boston" id="boston">
                                                <label class="form-check-label" for="boston">
                                                    Boston
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="Austin" id="austin">
                                                <label class="form-check-label" for="austin">
                                                    Austin
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Make  -->

                        <div class="card">
                            <div class="card-header" id="searchMake">
                                <h2>
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#make" aria-expanded="false" aria-controls="make">
                                        Make
                                    </button>
                                </h2>
                            </div>
                            <div id="make" class="collapse" aria-labelledby="searchMake" data-parent="#carFilter">
                                <div class="card-body">
                                    <div class="position-relative mb-2">
                                        <input type="text" placeholder="Search Here...." class="form-control rounded">
                                        <button type="button" class="search-btn text-secondary"><i class="fa fa-search"></i></button>
                                    </div>
                                    <div class="ctiy-option my-2">
                                        <div class="form-group">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="Honda" id="honda">
                                                <label class="form-check-label" for="honda">
                                                    Honda
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="Toyota" id="toyota">
                                                <label class="form-check-label" for="toyota">
                                                    Toyota
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="KIA" id="kia">
                                                <label class="form-check-label" for="kia">
                                                    KIA
                                                </label>
                                            </div>

                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="Changan" id="changan">
                                                <label class="form-check-label" for="changan">
                                                    Changan
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="Hyundai" id="hyundai">
                                                <label class="form-check-label" for="hyundai">
                                                    Hyundai
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Price Range  -->
                        <div class="card">
                            <div class="card-header" id="priceFilter">
                                <h2>
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#price" aria-expanded="false" aria-controls="price">
                                        Price Range
                                    </button>
                                </h2>
                            </div>
                            <div id="price" class="collapse" aria-labelledby="priceFilter" data-parent="#carFilter" style="">
                                <div class="card-body pt-0 pb-4">
                                    <div class="form-group">
                                        <div class="range-slider">
                                            <span class="output outputOne" style="left: 42%;">$42</span>
                                            <span class="output outputTwo" style="left: 62%;">$62</span>
                                            <span class="full-range"></span>
                                            <span class="incl-range" style="width: 20%; left: 42%;"></span>
                                            <input name="rangeOne" value="10" min="0" max="100" step="1" type="range">
                                            <input name="rangeTwo" value="90" min="0" max="100" step="1" type="range">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Year  -->
                        <div class="card">
                            <div class="card-header" id="yearFilter">
                                <h2>
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#year" aria-expanded="false" aria-controls="price">
                                        Year
                                    </button>
                                </h2>
                            </div>
                            <div id="year" class="collapse" aria-labelledby="yearFilter" data-parent="#carFilter" style="">
                                <div class="card-body pt-0 pb-4">
                                    <div class="form-group">
                                        <div class="range-slider">
                                            <span class="output outputOne" style="left: 42%;">$42</span>
                                            <span class="output outputTwo" style="left: 62%;">$62</span>
                                            <span class="full-range"></span>
                                            <span class="incl-range" style="width: 20%; left: 42%;"></span>
                                            <input name="rangeOne" value="10" min="0" max="100" step="1" type="range">
                                            <input name="rangeTwo" value="90" min="0" max="100" step="1" type="range">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mileage  -->
                        <div class="card">
                            <div class="card-header" id="mileAgeFilter">
                                <h2>
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#mileage" aria-expanded="false" aria-controls="mileage">
                                        Mileage(Km)
                                    </button>
                                </h2>
                            </div>
                            <div id="mileage" class="collapse" aria-labelledby="mileAgeFilter" data-parent="#carFilter" style="">
                                <div class="card-body pt-0 pb-4">
                                    <div class="form-group">
                                        <div class="range-slider">
                                            <span class="output outputOne" style="left: 42%;">$42</span>
                                            <span class="output outputTwo" style="left: 62%;">$62</span>
                                            <span class="full-range"></span>
                                            <span class="incl-range" style="width: 20%; left: 42%;"></span>
                                            <input name="rangeOne" value="10" min="0" max="100" step="1" type="range">
                                            <input name="rangeTwo" value="90" min="0" max="100" step="1" type="range">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Transmission  -->
                        <div class="card">
                            <div class="card-header" id="transmissionFilter">
                                <h2>
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#transmission" aria-expanded="false" aria-controls="transmission">
                                        Transmission
                                    </button>
                                </h2>
                            </div>
                            <div id="transmission" class="collapse" aria-labelledby="transmissionFilter" data-parent="#carFilter" style="">
                                <div class="card-body pt-0 pb-2">
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="trans" id="automatic" value="automatic">
                                            <label class="form-check-label" for="automatic">Automatic</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="trans" id="manual" value="manual">
                                            <label class="form-check-label" for="manual">Manual</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Color  -->
                        <div class="card">
                            <div class="card-header" id="colorFilter">
                                <h2>
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#color" aria-expanded="false" aria-controls="color">
                                        Color
                                    </button>
                                </h2>
                            </div>
                            <div id="color" class="collapse" aria-labelledby="colorFilter" data-parent="#carFilter" style="">
                                <div class="card-body pt-0">
                                    <div class="form-group d-flex flex-wrap gap-15">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="white" id="white">
                                            <label class="form-check-label" for="white">
                                                White
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="black" id="black">
                                            <label class="form-check-label" for="black">
                                                Black
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="silver" id="silver">
                                            <label class="form-check-label" for="silver">
                                                Silver
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="grey" id="grey">
                                            <label class="form-check-label" for="grey">
                                                Grey
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Energy Type  -->
                        <div class="card">
                            <div class="card-header" id="typeFilter">
                                <h2>
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#energy" aria-expanded="false" aria-controls="energy">
                                        Energy Type
                                    </button>
                                </h2>
                            </div>
                            <div id="energy" class="collapse" aria-labelledby="typeFilter" data-parent="#typeFilter" style="">
                                <div class="card-body pt-0 pb-2">
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="petrol" value="petrol">
                                            <label class="form-check-label" for="petrol">Petrol</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="diesel" value="diesel">
                                            <label class="form-check-label" for="diesel">Diesel</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="hybrid" value="hybrid">
                                            <label class="form-check-label" for="hybrid">Hybrid</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Energy Capacity  -->
                        <div class="card">
                            <div class="card-header" id="capacityFilter">
                                <h2>
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#capacity" aria-expanded="false" aria-controls="capacity">
                                        Energy Capacity
                                    </button>
                                </h2>
                            </div>
                            <div id="capacity" class="collapse" aria-labelledby="capacityFilter" data-parent="#carFilter" style="">
                                <div class="card-body pt-0 pb-4">
                                    <div class="form-group">
                                        <div class="range-slider">
                                            <span class="output outputOne" style="left: 30%;">1600cc</span>
                                            <span class="output outputTwo" style="left: 80%;">2000cc</span>
                                            <span class="full-range"></span>
                                            <span class="incl-range" style="width: 20%; left: 42%;"></span>
                                            <input name="rangeOne" value="10" min="0" max="100" step="1" type="range">
                                            <input name="rangeTwo" value="90" min="0" max="100" step="1" type="range">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Picture Availability  -->
                        <div class="card">
                            <div class="card-header" id="pictureFilter">
                                <h2>
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#picture" aria-expanded="false" aria-controls="picture">
                                        Picture Availability
                                    </button>
                                </h2>
                            </div>
                            <div id="picture" class="collapse" aria-labelledby="pictureFilter" data-parent="#carFilter" style="">
                                <div class="card-body pt-0 pb-2">
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="picture" id="wpic" value="wpic">
                                            <label class="form-check-label" for="wpic">With Picture</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="picture" id="notpic" value="notpic">
                                            <label class="form-check-label" for="notpic">Without picture</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ad type  -->
                        <div class="card border-bottom-0">
                            <div class="card-header" id="adFilter">
                                <h2>
                                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#ad" aria-expanded="false" aria-controls="ad">
                                        Ad Type
                                    </button>
                                </h2>
                            </div>
                            <div id="ad" class="collapse" aria-labelledby="adFilter" data-parent="#carFilter" style="">
                                <div class="card-body pt-0">
                                    <div class="form-group d-flex flex-wrap gap-15">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="featured" id="featured">
                                            <label class="form-check-label" for="featured">
                                                Featured
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="seachedFilter shadow mb-3">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="form-group d-flex align-items-center justify-content-end gap-15 mb-0">
                            <label for="petCategory" class="flex-shrink-0 mb-md-0">
                                Pet Category
                            </label>
                            <select name="pet-category" id="petCategory" class="form-control rounded-pill serachFiled flex-shrink-0">
                                <option value="">Price High To Low</option>
                                <option value="a-z">a-z</option>
                                <option value="z-a">z-a</option>
                            </select>
                        </div>
                        <div class=" ">
                            <button class="btn notBtn btn-list"> <i class="fa fa-list"></i> List</button>
                            <button class="btn notBtn btn-grid"> <i class="fa fa-th-large"></i> Grid</button>
                        </div>
                    </div>
                </div>
                <div class="container grid-container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-4">
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
                                        <button class="nav-link secondary-theme-button shadow compareBtn">Compare</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
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
                                        <button class="nav-link secondary-theme-button shadow compareBtn">Compare</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
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
                                        <button class="nav-link secondary-theme-button shadow compareBtn">Compare</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
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
                                        <button class="nav-link secondary-theme-button shadow compareBtn">Compare</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
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
                                        <button class="nav-link secondary-theme-button shadow compareBtn">Compare</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
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
                                        <button class="nav-link secondary-theme-button shadow compareBtn">Compare</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="comparedBtn text-center">
                                <a href="./comparison.php" class="btn-theme-solid bg-dark">Compared</a>
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
<script>
    function showList(e) {
        var $gridCont = $('.grid-container');
        e.preventDefault();
        $gridCont.hasClass('list-view') ? $gridCont.removeClass('list-view') : $gridCont.addClass('list-view');
    }

    function gridList(e) {
        var $gridCont = $('.grid-container')
        e.preventDefault();
        $gridCont.removeClass('list-view');
    }

    $(document).on('click', '.btn-grid', gridList);
    $(document).on('click', '.btn-list', showList);
</script>