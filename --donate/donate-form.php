<?php
include('../layout/loggedin-header.php');
?>
<section class="donate-form p-70">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="form-area shadow p-md-5 p-3">
                    <div class="form-head text-center">
                        <h1>Post to Donate</h1>
                    </div>
                    <div class="form-body pt-4">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Name <span class="required">*</span>
                                        </label>
                                        <input type="text" placeholder="Enter Name" class="form-control bg-light rounded-pill" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="petCategory">
                                            Pet Category
                                        </label>
                                        <select name="pet-category" id="petCategory" class="form-control bg-light rounded-pill">
                                            <option value="">Select</option>
                                            <option value="dog">Dog</option>
                                            <option value="cat">Cat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="color">
                                            Pet Color
                                        </label>
                                        <select name="pet-category" id="color" class="form-control bg-light rounded-pill">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">
                                            Gender
                                        </label>
                                        <select name="pet-category" id="gender" class="form-control bg-light rounded-pill">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="age">
                                            Age
                                        </label>
                                        <select name="pet-category" id="age" class="form-control bg-light rounded-pill">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="group">
                                            Group
                                        </label>
                                        <select name="pet-category" id="group" class="form-control bg-light rounded-pill">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="training">Temprament</label>
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
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="training">Training</label>
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
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="breed">
                                            Breed
                                        </label>
                                        <select name="pet-category" id="breed" class="form-control bg-light rounded-pill">
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