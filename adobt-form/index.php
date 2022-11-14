<?php
include('../layout/loggedin-header.php');
?>
<section class="donate-form p-70">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="form-area shadow p-md-5 p-3">
                    <div class="form-head text-center">
                        <h1 class="font-weight-bold">Adoption Inquire Form</h1>
                    </div>
                    <div class="form-body pt-4">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="adoptPet">
                                            Looking to adopt a Pet For?
                                        </label>
                                        <select name="pet-category" id="adoptPet" class="form-control bg-light rounded-pill">
                                            <option value="">Select</option>
                                            <option value="dog">Dog</option>
                                            <option value="cat">Cat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kids">
                                            Do you have Kids at Home?
                                        </label>
                                        <select name="pet-category" id="kids" class="form-control bg-light rounded-pill">
                                            <option value="">Select</option>
                                            <option value="dog">Dog</option>
                                            <option value="cat">Cat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="age">
                                            Your Kids Age?
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
                                        <label for="pets">
                                            Do You Have Pets?
                                        </label>
                                        <select name="pet-category" id="pets" class="form-control bg-light rounded-pill">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="currentlyPets">
                                            I Currently Have
                                        </label>
                                        <select name="pet-category" id="currentlyPets" class="form-control bg-light rounded-pill">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="time">
                                            How Much Time Will You Spend With Your Pet?
                                        </label>
                                        <select name="pet-category" id="time" class="form-control bg-light rounded-pill">
                                            <option value="">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="loginBtn text-center my-4">
                                <button class="secondary-theme-button shadow btn bg-brown py-2" type="button" data-target="#adoptRequest" data-toggle="modal">Submit</button>
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