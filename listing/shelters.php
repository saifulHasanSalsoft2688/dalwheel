<?php
include('../layout/loggedin-header.php');
?>

<section class="listing-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title text-center">
                    <h1 class="font-weight-bold">Shelters</h1>
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
                                <label for="country">
                                    Country
                                </label>
                                <select name="pet-country" id="country" class="form-control rounded-pill">
                                    <option value="">Select</option>
                                    <option value="dog">UK</option>
                                    <option value="cat">USA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="city">
                                    City
                                </label>
                                <select name="pet-city" id="city" class="form-control rounded-pill">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="state">
                                    State
                                </label>
                                <select name="pet-category" id="state" class="form-control rounded-pill">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="shelter">
                                    Shelter
                                </label>
                                <select name="pet-shelter" id="shelter" class="form-control rounded-pill">
                                    <option value="">Select</option>
                                </select>
                            </div>
                            <div class="form-group mt-5">
                                <label for="distance" class="form-label d-flex justify-content-between align-items-center">
                                    <span>Maximum Distance</span>
                                    <span class="text-secondary">250 km</span>
                                </label>
                                <input type="range" class="form-range w-100" id="distance">
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
                                    Sort By:
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
                        <div class="col-md-6 mb-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="feature-header d-flex align-items-center gap-15">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                    </div>
                                    <div class="feature-body">
                                        <div class="d-flex gap-15 mb-2">
                                            <div class="icon-box flex-shrink-0">
                                                <img src="../assets/images/telephone.png" alt="Phone" draggable="false">
                                            </div>
                                            <div class="description-box flex-grow-1">
                                                <p class="mb-0"><a href="tel: +91123456787" class="text-dark">+91123456787</a></p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-15 mb-2">
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
                                <a href="../shelter/shelter-view.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="feature-header d-flex align-items-center gap-15">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                    </div>
                                    <div class="feature-body">
                                        <div class="d-flex gap-15 mb-2">
                                            <div class="icon-box flex-shrink-0">
                                                <img src="../assets/images/telephone.png" alt="Phone" draggable="false">
                                            </div>
                                            <div class="description-box flex-grow-1">
                                                <p class="mb-0"><a href="tel: +91123456787" class="text-dark">+91123456787</a></p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-15 mb-2">
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
                                <a href="../shelter/shelter-view.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="feature-header d-flex align-items-center gap-15">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                    </div>
                                    <div class="feature-body">
                                        <div class="d-flex gap-15 mb-2">
                                            <div class="icon-box flex-shrink-0">
                                                <img src="../assets/images/telephone.png" alt="Phone" draggable="false">
                                            </div>
                                            <div class="description-box flex-grow-1">
                                                <p class="mb-0"><a href="tel: +91123456787" class="text-dark">+91123456787</a></p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-15 mb-2">
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
                                <a href="../shelter/shelter-view.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="feature-header d-flex align-items-center gap-15">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                    </div>
                                    <div class="feature-body">
                                        <div class="d-flex gap-15 mb-2">
                                            <div class="icon-box flex-shrink-0">
                                                <img src="../assets/images/telephone.png" alt="Phone" draggable="false">
                                            </div>
                                            <div class="description-box flex-grow-1">
                                                <p class="mb-0"><a href="tel: +91123456787" class="text-dark">+91123456787</a></p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-15 mb-2">
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
                                <a href="../shelter/shelter-view.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="feature-header d-flex align-items-center gap-15">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                    </div>
                                    <div class="feature-body">
                                        <div class="d-flex gap-15 mb-2">
                                            <div class="icon-box flex-shrink-0">
                                                <img src="../assets/images/telephone.png" alt="Phone" draggable="false">
                                            </div>
                                            <div class="description-box flex-grow-1">
                                                <p class="mb-0"><a href="tel: +91123456787" class="text-dark">+91123456787</a></p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-15 mb-2">
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
                                <a href="../shelter/shelter-view.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="feature-header d-flex align-items-center gap-15">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                    </div>
                                    <div class="feature-body">
                                        <div class="d-flex gap-15 mb-2">
                                            <div class="icon-box flex-shrink-0">
                                                <img src="../assets/images/telephone.png" alt="Phone" draggable="false">
                                            </div>
                                            <div class="description-box flex-grow-1">
                                                <p class="mb-0"><a href="tel: +91123456787" class="text-dark">+91123456787</a></p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-15 mb-2">
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
                                <a href="../shelter/shelter-view.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="feature-header d-flex align-items-center gap-15">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                    </div>
                                    <div class="feature-body">
                                        <div class="d-flex gap-15 mb-2">
                                            <div class="icon-box flex-shrink-0">
                                                <img src="../assets/images/telephone.png" alt="Phone" draggable="false">
                                            </div>
                                            <div class="description-box flex-grow-1">
                                                <p class="mb-0"><a href="tel: +91123456787" class="text-dark">+91123456787</a></p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-15 mb-2">
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
                                <a href="../shelter/shelter-view.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="feature-header d-flex align-items-center gap-15">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                    </div>
                                    <div class="feature-body">
                                        <div class="d-flex gap-15 mb-2">
                                            <div class="icon-box flex-shrink-0">
                                                <img src="../assets/images/telephone.png" alt="Phone" draggable="false">
                                            </div>
                                            <div class="description-box flex-grow-1">
                                                <p class="mb-0"><a href="tel: +91123456787" class="text-dark">+91123456787</a></p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-15 mb-2">
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
                                <a href="../shelter/shelter-view.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="feature-header d-flex align-items-center gap-15">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                    </div>
                                    <div class="feature-body">
                                        <div class="d-flex gap-15 mb-2">
                                            <div class="icon-box flex-shrink-0">
                                                <img src="../assets/images/telephone.png" alt="Phone" draggable="false">
                                            </div>
                                            <div class="description-box flex-grow-1">
                                                <p class="mb-0"><a href="tel: +91123456787" class="text-dark">+91123456787</a></p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-15 mb-2">
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
                                <a href="../shelter/shelter-view.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="feature-header d-flex align-items-center gap-15">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                    </div>
                                    <div class="feature-body">
                                        <div class="d-flex gap-15 mb-2">
                                            <div class="icon-box flex-shrink-0">
                                                <img src="../assets/images/telephone.png" alt="Phone" draggable="false">
                                            </div>
                                            <div class="description-box flex-grow-1">
                                                <p class="mb-0"><a href="tel: +91123456787" class="text-dark">+91123456787</a></p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-15 mb-2">
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
                                <a href="../shelter/shelter-view.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="feature-header d-flex align-items-center gap-15">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                    </div>
                                    <div class="feature-body">
                                        <div class="d-flex gap-15 mb-2">
                                            <div class="icon-box flex-shrink-0">
                                                <img src="../assets/images/telephone.png" alt="Phone" draggable="false">
                                            </div>
                                            <div class="description-box flex-grow-1">
                                                <p class="mb-0"><a href="tel: +91123456787" class="text-dark">+91123456787</a></p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-15 mb-2">
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
                                <a href="../shelter/shelter-view.php" class="link-box"></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="featureBox shadow">
                                <div class="feature-image">
                                    <figure class="adjust-image">
                                        <img src="../assets/images/banerdog.png" alt="Kathy Lewis Baby" class="mw-100" draggable="false">
                                    </figure>
                                </div>
                                <div class="feature-content px-3">
                                    <div class="feature-header d-flex align-items-center gap-15">
                                        <h4 class="f-18">Kathy Lewis Baby</h4>
                                    </div>
                                    <div class="feature-body">
                                        <div class="d-flex gap-15 mb-2">
                                            <div class="icon-box flex-shrink-0">
                                                <img src="../assets/images/telephone.png" alt="Phone" draggable="false">
                                            </div>
                                            <div class="description-box flex-grow-1">
                                                <p class="mb-0"><a href="tel: +91123456787" class="text-dark">+91123456787</a></p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-15 mb-2">
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
                                <a href="../shelter/shelter-view.php" class="link-box"></a>
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
</section>

<?php
include('../layout/footer.php');
?>