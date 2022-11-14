<?php
include('../layout/loggedin-header.php');
?>

<section class="listing-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title text-center">
                    <h1 class="font-weight-bold">Animal Adoption Center</h1>
                </div>
                <div class="my-4 shelter-banner">
                    <figure class="mb-0">
                        <img src="../assets/images/shelter.png" alt="Shelter Banner" class="mw-100">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- shelter tabs  -->

<section class="privateOwner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="shelter-tab" data-toggle="tab" href="#shelter" role="tab" aria-controls="shelter" aria-selected="true">About Shelter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="view-pet-tab" data-toggle="tab" href="#view-pet" role="tab" aria-controls="view-pet" aria-selected="false">View Pets</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane py-4 fade show active" id="shelter" role="tabpanel" aria-labelledby="shelter-tab">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="shelter-discription shadow rounded-10 p-3">
                                    <h3 class="font-weight-bold">About Shelter</h3>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="filter-box shadow rounded-10 py-3">
                                    <div class="filter-feilds">
                                        <ul class="navbar-nav align-items-center avatar-box flex-md-nowrap flex-md-row gap-15">
                                            <li class="nav-item position-relative">
                                                <a href="#" class="avatar-image image-size-adjust">
                                                    <img src="../assets/images/avatar.png" alt="Avatar" class="mw-100" draggable="false">
                                                </a>
                                                <span class="user-status"></span>
                                            </li>
                                            <li class="nav-item">
                                                <div class="d-flex align-items-center">
                                                    <div class="owner-name">
                                                        <p class="mb-0">Jana James</p>
                                                    </div>
                                                    <div class="icon-boxs pl-2">
                                                        <img src="../assets/images/trust.png" alt="Trust" draggable="false" class="mw-100">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="left-info">
                                            <li class="nav-item icon-red">
                                                <a href="tel: +353 01 344 111"><i class="fa fa-phone"></i>+353 01 344 111</a>
                                            </li>
                                            <li class="nav-item icon-blue">
                                                <a href="mailto: testing@test.com"><i class="fa fa-envelope"></i>testing@test.com</a>
                                            </li>
                                            <li class="nav-item icon-red">
                                                <a href="#"><i class="fa fa-map-marker"></i>Pasadena,Texas</a>
                                                <p class="mb-0 mt-3">10 miles away</p>
                                            </li>
                                        </ul>
                                        <div class="viewPin text-center mt-5">
                                            <button class="secondary-theme-button shadow btn bg-brown py-2">View Pin Location</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane py-4 fade" id="view-pet" role="tabpanel" aria-labelledby="view-pet-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="filter-box shadow h-100 rounded-10">
                                    <div class="filter-title">
                                        <h4 class="text-white mb-0">Filters</h4>
                                    </div>
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
                                                    <label for="temprament">
                                                        Temprament
                                                    </label>
                                                    <select name="pet-category" id="temprament" class="form-control rounded-pill">
                                                        <option value="">Select</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="training">
                                                        Training
                                                    </label>
                                                    <select name="pet-category" id="training" class="form-control rounded-pill">
                                                        <option value="">Select</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
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
                            <div class="col-md-9">
                                <div class="seachedFilter shadow">
                                    <div class="row justify-content-between">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                            <div class="form-group d-flex align-items-center justify-content-end gap-15 mb-0">
                                                <label for="petCategory" class="flex-shrink-0 mb-md-0">
                                                    Pet Category
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
                                                    <div class="additional-things">
                                                        <div class="featureRibbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="whislList">
                                                            <button tabindex="-1"><i class="fa fa-heart"></i></button>
                                                        </div>
                                                    </div>
                                                    <figure class="adjust-image">
                                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="feature-content px-3">
                                                    <div class="feature-header d-flex align-items-center gap-15">
                                                        <h4 class="f-18">Kathy Lewis Baby</h4>
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
                                                                <p class="mb-0 py-2">10 miles away</p>
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
                                        <div class="col-md-4">
                                            <div class="featureBox shadow">
                                                <div class="feature-image">
                                                    <div class="additional-things">
                                                        <div class="featureRibbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="whislList">
                                                            <button tabindex="-1"><i class="fa fa-heart"></i></button>
                                                        </div>
                                                    </div>
                                                    <figure class="adjust-image">
                                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="feature-content px-3">
                                                    <div class="feature-header d-flex align-items-center gap-15">
                                                        <h4 class="f-18">Kathy Lewis Baby</h4>
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
                                                                <p class="mb-0 py-2">10 miles away</p>
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
                                        <div class="col-md-4">
                                            <div class="featureBox shadow">
                                                <div class="feature-image">
                                                    <div class="additional-things">
                                                        <div class="featureRibbon">
                                                            <span>Featured</span>
                                                        </div>
                                                        <div class="whislList">
                                                            <button tabindex="-1"><i class="fa fa-heart"></i></button>
                                                        </div>
                                                    </div>
                                                    <figure class="adjust-image">
                                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="feature-content px-3">
                                                    <div class="feature-header d-flex align-items-center gap-15">
                                                        <h4 class="f-18">Kathy Lewis Baby</h4>
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
                                                                <p class="mb-0 py-2">10 miles away</p>
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
                                        <div class="col-md-4">
                                            <div class="featureBox shadow">
                                                <div class="feature-image">
                                                    <div class="additional-things align-items-center">
                                                        <div class="tag">
                                                            <span class="bg-red">For Sale</span>
                                                        </div>
                                                        <div class="whislList">
                                                            <button tabindex="-1"><i class="fa fa-heart"></i></button>
                                                        </div>
                                                    </div>
                                                    <figure class="adjust-image">
                                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="feature-content px-3">
                                                    <div class="feature-header d-flex align-items-center gap-15">
                                                        <h4 class="f-18">Kathy Lewis Baby</h4>
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
                                                                <p class="mb-0 py-2">10 miles away</p>
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
                                        <div class="col-md-4">
                                            <div class="featureBox shadow">
                                                <div class="feature-image">
                                                    <div class="additional-things align-items-center">
                                                        <div class="tag">
                                                            <span class="bg-sold">Sold Out</span>
                                                        </div>
                                                        <div class="whislList">
                                                            <button tabindex="-1"><i class="fa fa-heart"></i></button>
                                                        </div>
                                                    </div>
                                                    <figure class="adjust-image">
                                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="feature-content px-3">
                                                    <div class="feature-header d-flex align-items-center gap-15">
                                                        <h4 class="f-18">Kathy Lewis Baby</h4>
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
                                                                <p class="mb-0 py-2">10 miles away</p>
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
                                        <div class="col-md-4">
                                            <div class="featureBox shadow">
                                                <div class="feature-image">
                                                    <div class="additional-things align-items-center">
                                                        <div class="tag">
                                                            <span class="bg-sold">Sold Out</span>
                                                        </div>
                                                        <div class="whislList">
                                                            <button tabindex="-1"><i class="fa fa-heart"></i></button>
                                                        </div>
                                                    </div>
                                                    <figure class="adjust-image">
                                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="feature-content px-3">
                                                    <div class="feature-header d-flex align-items-center gap-15">
                                                        <h4 class="f-18">Kathy Lewis Baby</h4>
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
                                                                <p class="mb-0 py-2">10 miles away</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="../adopt/purchase-detail.php" class="link-box"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="featureBox shadow">
                                                <div class="feature-image">
                                                    <div class="additional-things align-items-center">
                                                        <div class="tag">
                                                            <span class="bg-red">For Sale</span>
                                                        </div>
                                                        <div class="whislList">
                                                            <button tabindex="-1"><i class="fa fa-heart"></i></button>
                                                        </div>
                                                    </div>
                                                    <figure class="adjust-image">
                                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="feature-content px-3">
                                                    <div class="feature-header d-flex align-items-center gap-15">
                                                        <h4 class="f-18">Kathy Lewis Baby</h4>
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
                                                                <p class="mb-0 py-2">10 miles away</p>
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
                                        <div class="col-md-4">
                                            <div class="featureBox shadow">
                                                <div class="feature-image">
                                                    <div class="additional-things align-items-center">
                                                        <div class="tag">
                                                            <span class="bg-sold">Sold Out</span>
                                                        </div>
                                                        <div class="whislList">
                                                            <button tabindex="-1"><i class="fa fa-heart"></i></button>
                                                        </div>
                                                    </div>
                                                    <figure class="adjust-image">
                                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="feature-content px-3">
                                                    <div class="feature-header d-flex align-items-center gap-15">
                                                        <h4 class="f-18">Kathy Lewis Baby</h4>
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
                                                                <p class="mb-0 py-2">10 miles away</p>
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
                                        <div class="col-md-4">
                                            <div class="featureBox shadow">
                                                <div class="feature-image">
                                                    <div class="additional-things align-items-center">
                                                        <div class="tag">
                                                            <span class="bg-sold">Sold Out</span>
                                                        </div>
                                                        <div class="whislList">
                                                            <button tabindex="-1"><i class="fa fa-heart"></i></button>
                                                        </div>
                                                    </div>
                                                    <figure class="adjust-image">
                                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="feature-content px-3">
                                                    <div class="feature-header d-flex align-items-center gap-15">
                                                        <h4 class="f-18">Kathy Lewis Baby</h4>
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
                                                                <p class="mb-0 py-2">10 miles away</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="../adopt/purchase-detail.php" class="link-box"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="featureBox shadow">
                                                <div class="feature-image">
                                                    <div class="additional-things align-items-center">
                                                        <div class="tag">
                                                            <span class="bg-red">For Sale</span>
                                                        </div>
                                                        <div class="whislList">
                                                            <button tabindex="-1"><i class="fa fa-heart"></i></button>
                                                        </div>
                                                    </div>
                                                    <figure class="adjust-image">
                                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="feature-content px-3">
                                                    <div class="feature-header d-flex align-items-center gap-15">
                                                        <h4 class="f-18">Kathy Lewis Baby</h4>
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
                                                                <p class="mb-0 py-2">10 miles away</p>
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
                                        <div class="col-md-4">
                                            <div class="featureBox shadow">
                                                <div class="feature-image">
                                                    <div class="additional-things align-items-center">
                                                        <div class="tag">
                                                            <span class="bg-sold">Sold Out</span>
                                                        </div>
                                                        <div class="whislList">
                                                            <button tabindex="-1"><i class="fa fa-heart"></i></button>
                                                        </div>
                                                    </div>
                                                    <figure class="adjust-image">
                                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="feature-content px-3">
                                                    <div class="feature-header d-flex align-items-center gap-15">
                                                        <h4 class="f-18">Kathy Lewis Baby</h4>
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
                                                                <p class="mb-0 py-2">10 miles away</p>
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
                                        <div class="col-md-4">
                                            <div class="featureBox shadow">
                                                <div class="feature-image">
                                                    <div class="additional-things align-items-center">
                                                        <div class="tag">
                                                            <span class="bg-sold">Sold Out</span>
                                                        </div>
                                                        <div class="whislList">
                                                            <button tabindex="-1"><i class="fa fa-heart"></i></button>
                                                        </div>
                                                    </div>
                                                    <figure class="adjust-image">
                                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                                    </figure>
                                                </div>
                                                <div class="feature-content px-3">
                                                    <div class="feature-header d-flex align-items-center gap-15">
                                                        <h4 class="f-18">Kathy Lewis Baby</h4>
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
                                                                <p class="mb-0 py-2">10 miles away</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="../adopt/purchase-detail.php" class="link-box"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ads--featured">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="f-40">Featured Ads</h1>
                <p>Adorable adoptables near you!</p>
            </div>
        </div>
        <div class="regular slider">
            <div class="featureBox">
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
                            <div class="view-more">
                                <a href="#" class="viewMore">View Pet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featureBox">
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
                            <div class="view-more">
                                <a href="#" class="viewMore">View Pet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featureBox">
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
                            <div class="view-more">
                                <a href="#" class="viewMore">View Pet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featureBox">
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
                            <div class="view-more">
                                <a href="#" class="viewMore">View Pet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featureBox">
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
                            <div class="view-more">
                                <a href="#" class="viewMore">View Pet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- listing box -->

<section class="listing-box bg-pet-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="featureBox shadow">
                    <div class="feature-image">
                        <div class="additional-things">
                            <div class="featureRibbon">
                                <span>Featured</span>
                            </div>
                            <div class="whislList">
                                <button tabindex="-1"><i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                        <figure class="adjust-image">
                            <img src="../assets/images/c1.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                        </figure>
                    </div>
                    <div class="feature-content px-3">
                        <div class="feature-header d-flex align-items-center gap-15">
                            <h4 class="f-18">Kathy Lewis Baby</h4>
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
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="featureBox shadow">
                    <div class="feature-image">
                        <div class="additional-things">
                            <div class="featureRibbon">
                                <span>Featured</span>
                            </div>
                            <div class="whislList">
                                <button tabindex="-1"><i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                        <figure class="adjust-image">
                            <img src="../assets/images/c2.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                        </figure>
                    </div>
                    <div class="feature-content px-3">
                        <div class="feature-header d-flex align-items-center gap-15">
                            <h4 class="f-18">Kathy Lewis Baby</h4>
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
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="featureBox shadow">
                    <div class="feature-image">
                        <div class="additional-things">
                            <div class="featureRibbon">
                                <span>Featured</span>
                            </div>
                            <div class="whislList">
                                <button tabindex="-1"><i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                        <figure class="adjust-image">
                            <img src="../assets/images/c3.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                        </figure>
                    </div>
                    <div class="feature-content px-3">
                        <div class="feature-header d-flex align-items-center gap-15">
                            <h4 class="f-18">Kathy Lewis Baby</h4>
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
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="featureBox shadow">
                    <div class="feature-image">
                        <div class="additional-things align-items-center">
                            <div class="tag">
                                <span class="bg-red">For Sale</span>
                            </div>
                            <div class="whislList">
                                <button tabindex="-1"><i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                        <figure class="adjust-image">
                            <img src="../assets/images/c4.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                        </figure>
                    </div>
                    <div class="feature-content px-3">
                        <div class="feature-header d-flex align-items-center gap-15">
                            <h4 class="f-18">Kathy Lewis Baby</h4>
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
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="featureBox shadow">
                    <div class="feature-image">
                        <div class="additional-things align-items-center">
                            <div class="tag">
                                <span class="bg-sold">Sold Out</span>
                            </div>
                            <div class="whislList">
                                <button tabindex="-1"><i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                        <figure class="adjust-image">
                            <img src="../assets/images/c5.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                        </figure>
                    </div>
                    <div class="feature-content px-3">
                        <div class="feature-header d-flex align-items-center gap-15">
                            <h4 class="f-18">Kathy Lewis Baby</h4>
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
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="featureBox shadow">
                    <div class="feature-image">
                        <div class="additional-things align-items-center">
                            <div class="tag">
                                <span class="bg-sold">Sold Out</span>
                            </div>
                            <div class="whislList">
                                <button tabindex="-1"><i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                        <figure class="adjust-image">
                            <img src="../assets/images/c6.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                        </figure>
                    </div>
                    <div class="feature-content px-3">
                        <div class="feature-header d-flex align-items-center gap-15">
                            <h4 class="f-18">Kathy Lewis Baby</h4>
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
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="featureBox shadow">
                    <div class="feature-image">
                        <div class="additional-things align-items-center">
                            <div class="tag">
                                <span class="bg-red">For Sale</span>
                            </div>
                            <div class="whislList">
                                <button tabindex="-1"><i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                        <figure class="adjust-image">
                            <img src="../assets/images/c7.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                        </figure>
                    </div>
                    <div class="feature-content px-3">
                        <div class="feature-header d-flex align-items-center gap-15">
                            <h4 class="f-18">Kathy Lewis Baby</h4>
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
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="featureBox shadow">
                    <div class="feature-image">
                        <div class="additional-things align-items-center">
                            <div class="tag">
                                <span class="bg-sold">Sold Out</span>
                            </div>
                            <div class="whislList">
                                <button tabindex="-1"><i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                        <figure class="adjust-image">
                            <img src="../assets/images/c8.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                        </figure>
                    </div>
                    <div class="feature-content px-3">
                        <div class="feature-header d-flex align-items-center gap-15">
                            <h4 class="f-18">Kathy Lewis Baby</h4>
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
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../layout/footer.php');
?>