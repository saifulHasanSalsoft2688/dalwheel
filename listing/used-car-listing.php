<?php
include('../layout/loggedin-header.php');
?>

<section class="listing-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="listing-title text-center">
                    <h1 class="font-weight-bold">Cats</h1>
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
            <div class="col-md-9">
                <div class="seachedFilter shadow  my-3">
                    <div class="d-flex flex-wrap align-items-center justify-content-between"> 
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
                        <div class=" ">
                            <button class="btn btn-primary btn-grid">Grid View</button>
                            <button class="btn btn-danger btn-list">List View</button>
                        </div>
                    </div>
                </div>
                <div class="container grid-container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="listingCard">
                                <img class="card-img-top" src="https://picsum.photos/362/180" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="listingCard">
                                <img class="card-img-top" src="https://picsum.photos/362/180" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="listingCard">
                                <img class="card-img-top" src="https://picsum.photos/362/180" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="listingCard">
                                <img class="card-img-top" src="https://picsum.photos/362/180" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="listingCard">
                                <img class="card-img-top" src="https://picsum.photos/362/180" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="listingCard">
                                <img class="card-img-top" src="https://picsum.photos/362/180" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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