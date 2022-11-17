<?php
include('../layout/loggedin-header.php');
?>
<section class="ad-post py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="ad-post-area">
                    <div class="listing-title mb-3">
                        <h5 class="">Home <i class="fa fa-chevron-right"></i> <span class="text-danger">Post Ad</span> </h5>
                        <h3 class="font-weight-bold">Sell Your Car With Simple Steps</h3>
                        <p>It's Free And Takes Less Than A Minute</p>
                    </div>
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="form-icon-info col-md-3 mb-3">
                            <div class="icon-content text-center">
                                <img src="../assets/images/car-info.png" alt="Enter Your Car Information" draggable="false">
                                <p class="mb-0 font-weight-bold">Enter Your Car Information</p>
                            </div>
                        </div>
                        <div class="form-icon-info col-md-3 mb-3">
                            <div class="icon-content text-center">
                                <img src="../assets/images/upload-photo.png" alt=" Upload Photos" draggable="false">
                                <p class="mb-0 font-weight-bold"> Upload Photos</p>
                            </div>
                        </div>
                        <div class="form-icon-info col-md-3 mb-3">
                            <div class="icon-content text-center">
                                <img src="../assets/images/tag.png" alt="Enter Your Selling Price" draggable="false">
                                <p class="mb-0 font-weight-bold">Enter Your Selling Price</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-body pt-4">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Car Name <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Car Name (eg. Corolla)" class="form-control shadow border-0" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="year">
                                            Model Year <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter Model year (eg 2002)" class="form-control shadow border-0" id="year">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="petCategory">
                                            City
                                        </label>
                                        <select name="city" id="city" class="form-control shadow border-0">
                                            <option value="">City</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="make">
                                            Make <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Company Name (eg. Toyota)" class="form-control shadow border-0" id="make">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mileage">
                                            Mileage (KM) <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter Milage" class="form-control shadow border-0" id="mileage">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">
                                            Car Price <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter Price" class="form-control shadow border-0" id="price">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mileage">
                                            Mileage (KM) <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter Milage" class="form-control shadow border-0" id="mileage">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">
                                            Ad Description <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Ad Description" class="form-control shadow border-0" id="description">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="catehory">
                                            Car Category
                                        </label>
                                        <select name="city" id="city" class="form-control shadow border-0">
                                            <option value="">SUV</option>
                                            <option value="">Sedan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="capacity">
                                            Engine Capacity (cc) <span class="required">*</span>
                                        </label>
                                        <input type="number" placeholder="Enter Engine Capacity" class="form-control shadow border-0" id="capacity">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <h5>Features</h5>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="ABS" id="ABS">
                                            <label class="form-check-label" for="ABS">
                                                ABS
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Climate Control" id="Climate Control">
                                            <label class="form-check-label" for="Climate Control">
                                                Climate Control
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Keyless Enter" id="Keyless Enter">
                                            <label class="form-check-label" for="Keyless Enter">
                                                Keyless Enter
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Rear Seat Entertainment" id="Rear Seat Entertainment">
                                            <label class="form-check-label" for="Rear Seat Entertainment">
                                                Rear Seat Entertainment
                                            </label>
                                        </div>

                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="USB And Auxiliary Cable" id="USB And Auxiliary Cable">
                                            <label class="form-check-label" for="USB And Auxiliary Cable">
                                                USB And Auxiliary Cable
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="CVD Player" id="CVD Player">
                                            <label class="form-check-label" for="CVD Player">
                                                CVD Player
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Front Speaker" id="Front Speaker">
                                            <label class="form-check-label" for="Front Speaker">
                                                Front Speaker
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Air Bags" id="Air Bags">
                                            <label class="form-check-label" for="Air Bags">
                                                Air Bags
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Cassette Player" id="Cassette Player">
                                            <label class="form-check-label" for="Cassette Player">
                                                Cassette Player
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Front Camera" id="Front Camera">
                                            <label class="form-check-label" for="Front Camera">
                                                Front Camera
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Power Streeing" id="Power Streeing">
                                            <label class="form-check-label" for="Power Streeing">
                                                Power Streeing
                                            </label>
                                        </div>

                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Sun Roof" id="Sun Roof">
                                            <label class="form-check-label" for="Sun Roof">
                                                Sun Roof
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Power Window" id="Power Window">
                                            <label class="form-check-label" for="Power Window">
                                                Power Window
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Steering Switch" id="Steering Switch">
                                            <label class="form-check-label" for="Steering Switch">
                                                Steering Switch
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="AM/ FM Radio" id="AM/ FM Radio">
                                            <label class="form-check-label" for="AM/ FM Radio">
                                                AM/ FM Radio
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Heated Seats" id="Heated Seats">
                                            <label class="form-check-label" for="Heated Seats">
                                                Heated Seats
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Power Mirror" id="Power Mirror">
                                            <label class="form-check-label" for="Power Mirror">
                                                Power Mirror
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Rear Camera" id="Rear Camera">
                                            <label class="form-check-label" for="Rear Camera">
                                                Rear Camera
                                            </label>
                                        </div>

                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Air Conditioning" id="Air Conditioning">
                                            <label class="form-check-label" for="Air Conditioning">
                                                Air Conditioning
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Cruise Control" id="Cruise Control">
                                            <label class="form-check-label" for="Cruise Control">
                                                Cruise Control
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Immobilizer Key" id="Immobilizer Key">
                                            <label class="form-check-label" for="Immobilizer Key">
                                                Immobilizer Key
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Alloy Rims" id="Alloy Rims">
                                            <label class="form-check-label" for="Alloy Rims">
                                                Alloy Rims
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="DVD Player" id="DVD Player">
                                            <label class="form-check-label" for="DVD Player">
                                                DVD Player
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Navigation System" id="Navigation System">
                                            <label class="form-check-label" for="Navigation System">
                                                Navigation System
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Rear AC Vents" id="Rear AC Vents">
                                            <label class="form-check-label" for="Rear AC Vents">
                                                Rear AC Vents
                                            </label>
                                        </div>

                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Power Lock" id="Power Lock">
                                            <label class="form-check-label" for="Power Lock">
                                                Power Lock
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Rear Speaker" id="Rear Speaker">
                                            <label class="form-check-label" for="Rear Speaker">
                                                Rear Speaker
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="Cool Box" id="Cool Box">
                                            <label class="form-check-label" for="Cool Box">
                                                Cool Box
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="breed">
                                            Breed
                                        </label>
                                        <select name="pet-category" id="breed" class="form-control shadow border-0">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="discription">
                                            Description
                                        </label>
                                        <textarea name="pet-category" id="discription" class="form-control bg-light rounded-20" placeholder="Enter Description" value="" rows="5">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="upload">
                                            Upload Media <span class="required">*</span>
                                        </label>
                                        <input type="file" id="upload" class="d-none" multiple>
                                        <div class="gallery">
                                            <div class="uploadBtn">
                                                <button type="button"><i class="fa fa-upload"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="loginBtn text-center my-4">
                                <button class="secondary-theme-button shadow btn bg-brown py-2" type="button" data-target="#updateAd" data-toggle="modal">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../layout/auth-footer.php');
?>