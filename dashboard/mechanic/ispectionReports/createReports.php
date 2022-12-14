<?php
$title = "Create Inspection Report";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <div class="box my-4">
            <form action="./viewReports.php ">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <div class="d-flex align-items-center my-3 section-heading">
                        <span class="backLink">
                            <i class="fas fa-arrow-left go-back-icon"></i>
                        </span>
                        <h6 class="section-heading mb-0">Create Inspection Report</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-9 col-xl-11">
                        <div class="row">
                            <div class="col-xl-6 col-lg-10">
                                <div class="progressWrap my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p>Engine/Transmission/Clutch</p>
                                        <p class="cGray" id="etc"></p>
                                    </div>
                                    <input type="range" class="w-100" min="1" max="100" value="75" id="etcRange">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-10">
                                <div class="progressWrap my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p>Brakes</p>
                                        <p class="cGray" id="brakes"></p>
                                    </div>
                                    <input type="range" class="w-100" min="1" max="100" value="75" id="brakesRange">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-10">
                                <div class="progressWrap my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p>Suspension / Streering</p>
                                        <p class="cGray" id="suspension"></p>
                                    </div>
                                    <input type="range" class="w-100" min="1" max="100" value="75" id="suspRange">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-10">
                                <div class="progressWrap my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p>Interior</p>
                                        <p class="cGray" id="interior"></p>
                                    </div>
                                    <input type="range" class="w-100" min="1" max="100" value="75" id="intRange">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-10">
                                <div class="progressWrap my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p>AC/Heater</p>
                                        <p class="cGray" id="heater"></p>
                                    </div>
                                    <input type="range" class="w-100" min="1" max="100" value="75" id="heaterRange">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-10">
                                <div class="progressWrap my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p>Electrical & Electronics</p>
                                        <p class="cGray" id="electronics"></p>
                                    </div>
                                    <input type="range" class="w-100" min="1" max="100" value="75" id="electronicsRange">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-10">
                                <div class="progressWrap my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p>Exterior And Body</p>
                                        <p class="cGray" id="exterior"></p>
                                    </div>
                                    <input type="range" class="w-100" min="1" max="100" value="100" id="exteriorRange">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-10">
                                <div class="progressWrap my-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p>Tyres</p>
                                        <p class="cGray" id="tyres"></p>
                                    </div>
                                    <input type="range" class="w-100" min="1" max="100" value="100" id="tyresRange">
                                </div>
                            </div>
                            <!-- Car Inspection Detail -->
                            <div class="col-12">
                                <h5 class="secTitle my-5">Car Inspection Detail</h5>
                            </div>
                            <!-- Body Frame -->
                            <div class="col-xl-6 col-lg-10">
                                <div class="accordion customAccordion my-4" id="accordionExample">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="accDiv1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span class="d-flex align-items-center justify-content-between w-100 px-1">
                                                    <p class="mb-0"> Body Frame Accident Checklist</p>
                                                    <p class="mb-0">75%</p>
                                                </span>
                                            </button>
                                            <div class="progressWrap">
                                                <div class="progress">
                                                    <div class="progress-bar pBlue" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="accDiv1" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="d-md-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Radiator Core Support</p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Not Ok Accidented">Not Ok Accidented</option>
                                                        <option value="Accidented">Accidented</option>
                                                    </select>
                                                </div>
                                                <div class="d-md-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Cowl Panel Firewall</p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Not Ok Accidented">Not Ok Accidented</option>
                                                        <option value="Accidented">Accidented</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Engine -->
                            <div class="col-xl-6 col-lg-10">
                                <div class="accordion customAccordion my-4" id="accordionExample2">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="accDiv2">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                                <span class="d-flex align-items-center justify-content-between w-100 px-1">
                                                    <p class="mb-0"> Engine </p>
                                                    <p class="mb-0">100%</p>
                                                </span>
                                            </button>
                                            <div class="progressWrap">
                                                <div class="progress">
                                                    <div class="progress-bar pGreen" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="75"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapsetwo" class="accordion-collapse collapse" aria-labelledby="accDiv2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Engine Oil Leakage</p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="No Leakage">No Leakage</option>
                                                        <option value="Leakage">Leakage</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Coolant Leakage</p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="No Leakage">No Leakage</option>
                                                        <option value="Leakage">Leakage</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Radiator</p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="OK">OK</option>
                                                        <option value="Not Ok">Not Ok</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Suction Fan</p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Working">Working</option>
                                                        <option value="Not Working">Not Working</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Mechanical Check  -->
                            <div class="col-xl-6 col-lg-10">
                                <div class="accordion customAccordion my-4" id="accordionExample">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="accDiv3">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                <span class="d-flex align-items-center justify-content-between w-100 px-1">
                                                    <p class="mb-0"> Mechanical Check</p>
                                                    <p class="mb-0">75%</p>
                                                </span>
                                            </button>
                                            <div class="progressWrap">
                                                <div class="progress">
                                                    <div class="progress-bar pBlue" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="accDiv3" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Belts (Fan0) </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Ok">Ok</option>
                                                        <option value="Not Ok">Not Ok</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Wires</p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Ok">Ok</option>
                                                        <option value="Not Ok">Not Ok</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Brakes  -->
                            <div class="col-xl-6 col-lg-10">
                                <div class="accordion customAccordion my-4" id="accordionExample2">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="accDiv2">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                                <span class="d-flex align-items-center justify-content-between w-100 px-1">
                                                    <p class="mb-0"> Brakes </p>
                                                    <p class="mb-0">100%</p>
                                                </span>
                                            </button>
                                            <div class="progressWrap">
                                                <div class="progress">
                                                    <div class="progress-bar pGreen" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="75"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="accDiv2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3"> Front Rigth Disc </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Smooth">Smooth</option>
                                                        <option value="Rough">Rough</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Front Left Disc </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Smooth">Smooth</option>
                                                        <option value="Rough">Rough</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Interior  -->
                            <div class="col-xl-6 col-lg-10">
                                <div class="accordion customAccordion my-4" id="accordionExample2">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="accDiv2">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                                <span class="d-flex align-items-center justify-content-between w-100 px-1">
                                                    <p class="mb-0"> Interior </p>
                                                    <p class="mb-0">100%</p>
                                                </span>
                                            </button>
                                            <div class="progressWrap">
                                                <div class="progress">
                                                    <div class="progress-bar pGreen" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="75"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="accDiv2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Horn </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Working">Working</option>
                                                        <option value="Not Working">Not Working</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Wiper </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Working">Working</option>
                                                        <option value="Not Working">Not Working</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Right Side Miror </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Working">Working</option>
                                                        <option value="Not Working">Not Working</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Left Side Miror </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Working">Working</option>
                                                        <option value="Not Working">Not Working</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ac / Heater Check Up  -->
                            <div class="col-xl-6 col-lg-10">
                                <div class="accordion customAccordion my-4" id="accordionExample2">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="accDiv2">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                <span class="d-flex align-items-center justify-content-between w-100 px-1">
                                                    <p class="mb-0"> Ac / Heater Check Up </p>
                                                    <p class="mb-0">100%</p>
                                                </span>
                                            </button>
                                            <div class="progressWrap">
                                                <div class="progress">
                                                    <div class="progress-bar pGreen" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="75"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="accDiv2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Blower </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Excellent Air Throw">Excellent Air Throw</option>
                                                        <option value="Bad Air Throw">Bad Air Throw</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Ac Operational </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Electrical & Electronics   -->
                            <div class="col-xl-6 col-lg-10">
                                <div class="accordion customAccordion my-4" id="accordionExample2">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="accDiv2">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                                <span class="d-flex align-items-center justify-content-between w-100 px-1">
                                                    <p class="mb-0"> Electrical & Electronics </p>
                                                    <p class="mb-0">100%</p>
                                                </span>
                                            </button>
                                            <div class="progressWrap">
                                                <div class="progress">
                                                    <div class="progress-bar pGreen" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="75"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="accDiv2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 mb-0 flex-shrink-0 me-3">Battery Warning Light </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Not Present">Not Present</option>
                                                        <option value="Present">Present</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 mb-0 flex-shrink-0 me-3"> Air Bag Warning Light </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Not Present">Not Present</option>
                                                        <option value="Present">Present</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Exterior   -->
                            <div class="col-xl-6 col-lg-10">
                                <div class="accordion customAccordion my-4" id="accordionExample2">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="accDiv2">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                                <span class="d-flex align-items-center justify-content-between w-100 px-1">
                                                    <p class="mb-0"> Exterior </p>
                                                    <p class="mb-0">100%</p>
                                                </span>
                                            </button>
                                            <div class="progressWrap">
                                                <div class="progress">
                                                    <div class="progress-bar pGreen" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="75"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="accDiv2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Turn Lock </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Ok">Ok</option>
                                                        <option value="Not Ok">Not Ok</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Sun Roof Glass </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Ok">Ok</option>
                                                        <option value="Not Ok">Not Ok</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tyres    -->
                            <div class="col-xl-6 col-lg-10">
                                <div class="accordion customAccordion my-4" id="accordionExample2">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="accDiv2">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                                <span class="d-flex align-items-center justify-content-between w-100 px-1">
                                                    <p class="mb-0"> Tyres </p>
                                                    <p class="mb-0">100%</p>
                                                </span>
                                            </button>
                                            <div class="progressWrap">
                                                <div class="progress">
                                                    <div class="progress-bar pGreen" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="75"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="accDiv2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3">Rims </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Alloy">Alloy</option>
                                                        <option value="Alloy">Alloy</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                    <p class="mb-0 flex-shrink-0 me-3"> Wheel Caps </p>
                                                    <select name="" class="primSelect w-100">
                                                        <option value="Present">Present</option>
                                                        <option value="Not Present">Not Present</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="main-btn my-3">Review Report</button>
            </form>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
?>
<script>
    var etcRange = document.getElementById("etcRange");
    var output = document.getElementById("etc");
    output.innerHTML = etcRange.value;
    etcRange.oninput = function() {
        output.innerHTML = this.value;
    }

    //======== For Brakes ========//
    var brakesRange = document.getElementById("brakesRange");
    var brakesoutput = document.getElementById("brakes");
    brakesoutput.innerHTML = brakesRange.value;
    brakesRange.oninput = function() {
        brakesoutput.innerHTML = this.value;
    }
    //======== For suspension  ========//
    var suspRange = document.getElementById("suspRange");
    var suspoutput = document.getElementById("suspension");
    suspoutput.innerHTML = suspRange.value;
    suspRange.oninput = function() {
        suspoutput.innerHTML = this.value;
    }
    //======== For interior ========//
    var intRange = document.getElementById("intRange");
    var interioroutput = document.getElementById("interior");
    interioroutput.innerHTML = intRange.value;
    intRange.oninput = function() {
        interioroutput.innerHTML = this.value;
    }
    //======== For Heater ========//
    var heaterRange = document.getElementById("heaterRange");
    var heateroroutput = document.getElementById("heater");
    heateroroutput.innerHTML = heaterRange.value;
    heaterRange.oninput = function() {
        heateroroutput.innerHTML = this.value;
    }
    //======== For Electronics  ========//
    var electronicsRange = document.getElementById("electronicsRange");
    var electronicsoroutput = document.getElementById("electronics");
    electronicsoroutput.innerHTML = electronicsRange.value;
    electronicsRange.oninput = function() {
        electronicsoroutput.innerHTML = this.value;
    }
    //======== For Exterior And Body   ========//
    var exteriorRange = document.getElementById("exteriorRange");
    var exteriororoutput = document.getElementById("exterior");
    exteriororoutput.innerHTML = exteriorRange.value;
    exteriorRange.oninput = function() {
        exteriororoutput.innerHTML = this.value;
    }
    //======== For Tyres   ========//
    var tyresRange = document.getElementById("tyresRange");
    var tyresoutput = document.getElementById("tyres");
    tyresoutput.innerHTML = tyresRange.value;
    tyresRange.oninput = function() {
        tyresoutput.innerHTML = this.value;
    }
</script>