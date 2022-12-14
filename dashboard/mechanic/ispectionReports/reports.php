<?php
$title = "View Report";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <div class="box my-4">
            <div class="d-flex align-items-center my-3 section-heading">
                <span class="backLink">
                    <i class="fas fa-arrow-left go-back-icon"></i>
                </span>
                <h6 class="section-heading mb-0">View Report</h6>
            </div>
            <div class="row">
                <div class="col-xxl-9 col-xl-11">
                    <div class="row">
                        <div class="col-xl-6 col-lg-10">
                            <div class="progressWrap my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Engine/Transmission/Clutch</p>
                                    <p class="cGray">75%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar pBlue" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                            <div class="progressWrap my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Brakes</p>
                                    <p class="cGray">75%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar pBlue" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                            <div class="progressWrap my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Suspension / Streering</p>
                                    <p class="cGray">95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar pBlue" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                            <div class="progressWrap my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Interior</p>
                                    <p class="cGray">95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar pBlue" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                            <div class="progressWrap my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>AC/Heater</p>
                                    <p class="cGray">70%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar pBlue" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                            <div class="progressWrap my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Electrical & Electronics</p>
                                    <p class="cGray">70%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar pBlue" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                            <div class="progressWrap my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Exterior And Body</p>
                                    <p class="cGray">100%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar pGreen" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                            <div class="progressWrap my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Tyres</p>
                                    <p class="cGray">100%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar pGreen" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
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
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0">Radiator Core Support</p>
                                                <p class="mb-0 colGreen">Not Accidented</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0">Cowl Panel Firewall</p>
                                                <p class="mb-0 text-danger">Accidented</p>
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
                                                <p class="mb-0">Engine Oil Leakage</p>
                                                <p class="mb-0 colGreen">No Leakage</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0">Coolant Leakage</p>
                                                <p class="mb-0 colGreen">No Leakage</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0">Radiator</p>
                                                <p class="mb-0 colGreen">Ok</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0">Suction Fan</p>
                                                <p class="mb-0 colGreen">Working</p>
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
                                                <p class="mb-0">Belts (Fan0)</p>
                                                <p class="mb-0 colGreen">Ok</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0">Wires</p>
                                                <p class="mb-0 colGreen">Ok</p>
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
                                                <p class="mb-0">Front Rigth Disc </p>
                                                <p class="mb-0 colGreen">Smooth</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0">Front Left Disc </p>
                                                <p class="mb-0 colGreen">Smooth</p>
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
                                                <p class="mb-0">Horn </p>
                                                <p class="mb-0 colGreen">Working</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0">Wiper </p>
                                                <p class="mb-0 text-danger">Not Working </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0">Right Side Miror </p>
                                                <p class="mb-0 colGreen">Working</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0">Left Side Miror </p>
                                                <p class="mb-0 colGreen">Working</p>
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
                                                <p class="mb-0">Blower </p>
                                                <p class="mb-0 colGreen">Excellent Air Throw </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0">Ac Operational </p>
                                                <p class="mb-0 colGreen">Yes </p>
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
                                                <p class="mb-0">Battery Warning Light </p>
                                                <p class="mb-0 text-danger"> Not Present </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0"> Air Bag Warning Light </p>
                                                <p class="mb-0 text-danger"> Not Present </p>
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
                                                <p class="mb-0">Turn Lock </p>
                                                <p class="mb-0 colGreen">Ok </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0"> Sun Roof Glass </p>
                                                <p class="mb-0 colGreen"> Ok </p>
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
                                                <p class="mb-0">Rims </p>
                                                <p class="mb-0 colGreen"> Alloy </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border accordionContent">
                                                <p class="mb-0"> Wheel Caps </p>
                                                <p class="mb-0 colGreen"> Present </p>
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
    </div>
</div>
<?php
include('../layout/footer.php');
?>