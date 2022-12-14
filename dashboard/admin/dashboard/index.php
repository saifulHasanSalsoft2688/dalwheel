<?php
$title = "Dashboard";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- Analytics Satrt here -->
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="boxDetails my-3 d-flex mb-1">
                    <div class="box-icon me-3">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="d-flex w-100 justify-content-between flex-wrap align-items-center">
                        <div class="mapwrap">
                            <h6 class="analytics-text fw-500">1375K</h6>
                            <h6 class="cGray fw-400">Total User</h6>
                        </div>
                        <h6 class="colRed analytics-values fw-400"><i class="fas fa-arrow-up"></i> 100%</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="boxDetails my-3 d-flex mb-1">
                    <div class="box-icon me-3">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="d-flex w-100 justify-content-between flex-wrap align-items-center">
                        <div class="mapwrap">
                            <h6 class="analytics-text fw-500">1375</h6>
                            <h6 class="cGray fw-400">TOTAL CARS</h6>
                        </div>
                        <h6 class="colRed analytics-values fw-400"><i class="fas fa-arrow-up"></i> 100%</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="boxDetails my-3 d-flex mb-1">
                    <div class="box-icon me-3">
                        <i class="fas fa-percent"></i>
                    </div>
                    <div class="d-flex w-100 justify-content-between flex-wrap align-items-center">
                        <div class="mapwrap">
                            <h6 class="analytics-text fw-500">$200</h6>
                            <h6 class="cGray fw-400">TOTAL SALES AMOUNT</h6>
                        </div>
                        <h6 class="colRed analytics-values fw-400"><i class="fas fa-arrow-up"></i> 100%</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- Analytics Ends here -->
        <!-- Graphs Start Here -->
        <div class="box my-3">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <h5 class="secTitle">Sales Analytics</h5>
                <select name="" id="" class="primSelect">
                    <option value="Select year">Select year</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </div>
            <div class="graph">
                <canvas id="SalesChart"></canvas>
            </div>
        </div>
        <div class="box my-3">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <h5 class="secTitle">Inspection Analytics</h5>
                <select name="" id="" class="primSelect">
                    <option value="Select year">Select year</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </div>
            <div class="graph">
                <canvas id="inspectionChart"></canvas>
            </div>
        </div>
        <!-- Graphs End Here -->
    </div>
</div>
<?php
include('../layout/footer.php');
?>
<!-- Graphs Configurations  -->
<script>
    new Chart("SalesChart", {
        type: "line",
        data: {
            labels: ["Nov 2015", "March 2016", "July 2017", "August 2018", "Sep 2019", "Oct 2020"],
            datasets: [{
                fill: {
                    target: 'origin',
                    above: '#F7D9D9', // Area will be red above the origin
                    below: 'transparent' // And blue below the origin
                },
                pointRadius: 2,
                borderColor: "#C90000",
                data: [20, 10, 20, 10, 20, 10, 30, 000],
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    title: {
                        display: true,
                        text: "Sales",
                        color: "#000",
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: "Year",
                        color: "#000",
                    }
                }
            }
        }
    });
    new Chart("inspectionChart", {
        type: "line",
        data: {
            labels: ["Nov 2015", "March 2016", "July 2017", "August 2018", "Sep 2019", "Oct 2020"],
            datasets: [{
                fill: {
                    target: 'origin',
                    above: '#F7D9D9', // Area will be red above the origin
                    below: 'transparent' // And blue below the origin
                },
                pointRadius: 2,
                borderColor: "#C90000",
                data: [20, 10, 20, 10, 20, 10, 30, 000],
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    title: {
                        display: true,
                        text: "Commission Amount",
                        color: "#000",
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: "Year",
                        color: "#000",
                    }
                }
            }
        }
    });
</script>