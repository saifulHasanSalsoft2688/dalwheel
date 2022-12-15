<?php
$title = "Slot Management";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Slot Management  ================== -->
        <div class="box my-4">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <h1 class="section-heading font-commons my-3">Slot Management</h1>
                <a href="./customizeSlots.php" class="main-btn my-3">Customize</a>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-xl-8 col-lg-10">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="d-block prime-label mb-3 mx-md-3">Monday</label>
                                        <div>
                                            <label class="custom_switch custom_switch2">
                                                <input type="checkbox">
                                                <span class="custom_switch_slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="timeSlots">
                                        <div class="monTimeSlots mainSlot">
                                            <div class="mb-4 d-md-flex align-items-center justify-content-between slotBox">
                                                <input type="time" class="primary-inputs secInp me-md-3 my-2">
                                                <input type="time" class="primary-inputs secInp ms-md-3 my-2">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="button" class="notBtn text-danger me-2 removeMonSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                            <button type="button" class="notBtn addMonInp addSlot"><i class="fas fa-plus-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="d-block prime-label mb-3 mx-md-3">Tuesday</label>
                                        <div>
                                            <label class="custom_switch custom_switch2">
                                                <input type="checkbox">
                                                <span class="custom_switch_slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="timeSlots">
                                        <div class="tueTimeSlots mainSlot">
                                            <div class="mb-4 d-md-flex align-items-center justify-content-between">
                                                <input type="time" class="primary-inputs secInp me-md-3 my-2">
                                                <input type="time" class="primary-inputs secInp ms-md-3 my-2">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="button" class="notBtn text-danger me-2 removeTueSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                            <button type="button" class="notBtn addTueInp addSlot"><i class="fas fa-plus-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="d-block prime-label mb-3 mx-md-3">Wednesday</label>
                                        <div>
                                            <label class="custom_switch custom_switch2">
                                                <input type="checkbox">
                                                <span class="custom_switch_slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="timeSlots">
                                        <div class="wedTimeSlots mainSlot">
                                            <div class="mb-4 d-md-flex align-items-center justify-content-between">
                                                <input type="time" class="primary-inputs secInp me-md-3 my-2">
                                                <input type="time" class="primary-inputs secInp ms-md-3 my-2">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="button" class="notBtn text-danger me-2 removeWedSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                            <button type="button" class="notBtn addWedInp addSlot"><i class="fas fa-plus-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="d-block prime-label mb-3 mx-md-3">Thursday</label>
                                        <div>
                                            <label class="custom_switch custom_switch2">
                                                <input type="checkbox">
                                                <span class="custom_switch_slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="timeSlots">
                                        <div class="thurTimeSlots mainSlot">
                                            <div class="mb-4 d-md-flex align-items-center justify-content-between">
                                                <input type="time" class="primary-inputs secInp me-md-3 my-2">
                                                <input type="time" class="primary-inputs secInp ms-md-3 my-2">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="button" class="notBtn text-danger me-2 removeThurSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                            <button type="button" class="notBtn addThurInp addSlot"><i class="fas fa-plus-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="d-block prime-label mb-3 mx-md-3">Friday</label>
                                        <div>
                                            <label class="custom_switch custom_switch2">
                                                <input type="checkbox">
                                                <span class="custom_switch_slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="timeSlots">
                                        <div class="friTimeSlots mainSlot">
                                            <div class="mb-4 d-md-flex align-items-center justify-content-between">
                                                <input type="time" class="primary-inputs secInp me-md-3 my-2">
                                                <input type="time" class="primary-inputs secInp ms-md-3 my-2">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="button" class="notBtn text-danger me-2 removeFriSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                            <button type="button" class="notBtn addFriInp addSlot"><i class="fas fa-plus-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="d-block prime-label mb-3 mx-md-3">Suturday</label>
                                        <div>
                                            <label class="custom_switch custom_switch2">
                                                <input type="checkbox">
                                                <span class="custom_switch_slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="timeSlots">
                                        <div class="satTimeSlots mainSlot">
                                            <div class="mb-4 d-md-flex align-items-center justify-content-between">
                                                <input type="time" class="primary-inputs secInp me-md-3 my-2">
                                                <input type="time" class="primary-inputs secInp ms-md-3 my-2">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="button" class="notBtn text-danger me-2 removeSatSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                            <button type="button" class="notBtn addSatInp addSlot"><i class="fas fa-plus-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="d-block prime-label mb-3 mx-md-3">Sunday</label>
                                        <div>
                                            <label class="custom_switch custom_switch2">
                                                <input type="checkbox">
                                                <span class="custom_switch_slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="timeSlots">
                                        <div class="sunTimeSlots mainSlot">
                                            <div class="mb-4 d-md-flex align-items-center justify-content-between">
                                                <input type="time" class="primary-inputs secInp me-md-3 my-2">
                                                <input type="time" class="primary-inputs secInp ms-md-3 my-2">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="button" class="notBtn text-danger me-2 removeSunSlot removeSlot"><i class="fas fa-trash-alt"></i></button>
                                            <button type="button" class="notBtn addSunInp addSlot"><i class="fas fa-plus-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="./editSlots.php" class="main-btn my-3">Edit</a>
            </form>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
?> 