<?php
include('../layout/loggedin-header.php');
?>

<section class="listing-page py-5">
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
                <div class="filter-box shadow h-100 rounded-10">
                    <div class="filter-feilds">
                        <form action="#">
                            <div class="form-group">
                                <label for="petCategory">
                                    Pet Category
                                </label>
                                <select name="pet-category" id="petCategory" class="form-control rounded-pill">
                                    <option value="">Select</option>
                                    <option value="dog">Dog</option>
                                    <option value="cat">Cat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gender">
                                    Gender
                                </label>
                                <select name="pet-category" id="gender" class="form-control rounded-pill">
                                    <option value="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="breed">
                                    Breed
                                </label>
                                <select name="pet-category" id="breed" class="form-control rounded-pill">
                                    <option value="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="color">
                                    Select Color
                                </label>
                                <select name="pet-category" id="color" class="form-control rounded-pill">
                                    <option value="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <!-- advance filter box  -->
                            <div class="advance-filter-option" style="display: none;">
                                <div class="filter-label border-top">
                                    <h5 class="mb-0">Age & Group</h5>
                                </div>
                                <div class="form-group">
                                    <label for="age">
                                        Age
                                    </label>
                                    <select name="pet-category" id="age" class="form-control rounded-pill">
                                        <option value="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="group">
                                        Group
                                    </label>
                                    <select name="pet-category" id="group" class="form-control rounded-pill">
                                        <option value="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <!-- Behaviour  -->
                                <div class="filter-label border-top">
                                    <h5 class="mb-0">Behaviour</h5>
                                </div>
                                <div class="form-group">
                                    <label for="training" class="font-weight-bold">Temprament</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="protective" id="protective">
                                        <label class="form-check-label" for="protective">
                                            Protective
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="playful" id="playful">
                                        <label class="form-check-label" for="playful">
                                            Playful
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="affectionate" id="affectionate">
                                        <label class="form-check-label" for="affectionate">
                                            Affectionate
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="gentle" id="gentle">
                                        <label class="form-check-label" for="gentle">
                                            Gentle
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="training" class="font-weight-bold">Training</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="need" id="need">
                                        <label class="form-check-label" for="need">
                                            Needs Training
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="basic" id="basic">
                                        <label class="form-check-label" for="basic">
                                            Has Basic Training
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="trained" id="trained">
                                        <label class="form-check-label" for="trained">
                                            Well Trained
                                        </label>
                                    </div>
                                </div>
                                <!-- add type  -->
                                <div class="border-top border-bottom py-3 my-4">
                                    <div class="form-group">
                                        <label for="type">
                                            Ad Type
                                        </label>
                                        <select name="pet-category" id="type" class="form-control rounded-pill">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="shelter">
                                            Shelter
                                        </label>
                                        <select name="pet-category" id="shelter" class="form-control rounded-pill">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="country">
                                            Country
                                        </label>
                                        <select name="pet-category" id="country" class="form-control rounded-pill">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="city">
                                            City
                                        </label>
                                        <select name="pet-category" id="city" class="form-control rounded-pill">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="state">
                                            State
                                        </label>
                                        <select name="pet-category" id="state" class="form-control rounded-pill">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="distance" class="form-label d-flex justify-content-between align-items-center">
                                            <span>Maximum Distance</span>
                                            <span class="text-secondary">250 km</span>
                                        </label>
                                        <input type="range" class="form-range w-100" id="distance">
                                    </div>
                                </div>
                            </div>
                            <button class="advanceFilter border-0 bg-white text-theme-primary" type="button"><i class="fa fa-plus-circle pr-2"></i>Advance Filter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="seachedFilter shadow  my-3">
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
                                        <a href="./comparison.php" class="nav-link secondary-theme-button shadow">Compare</a>
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
                                        <a href="./comparison.php" class="nav-link secondary-theme-button shadow">Compare</a>
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
                                        <a href="./comparison.php" class="nav-link secondary-theme-button shadow">Compare</a>
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
                                        <a href="./comparison.php" class="nav-link secondary-theme-button shadow">Compare</a>
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
                                        <a href="./comparison.php" class="nav-link secondary-theme-button shadow">Compare</a>
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