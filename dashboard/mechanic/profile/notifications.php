<?php
$title = "Notifications";
include('../layout/header.php');
include('../layout/sidebar.php');
?>
<div class="configuration">
    <div class="container-fluid">
        <!-- =============== Notifications  ================== -->
        <div class="box my-4">
            <div class="d-flex align-items-center my-3 section-heading justify-content-between flex-wrap ">
                <h6 class="section-heading mb-0">Notifications</h6>
                <div class="align-items-center d-flex mb-3 me-3 flex-wrap">
                    <h5 class="d-inline-block mb-1 me-2 flex-shrink-0">Showing</h5>
                    <select class="d-inline-block me-2 primSelect w_lg_100">
                        <option value="All">All</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Notification content boxes -->
                    <div class="d-lg-flex align-items-center active_notification my-5 border-bottom pb-4">
                        <div class="notif-icon mb-1 me-3">
                            <i class="far fa-bell"></i>
                        </div>
                        <div class="mb-1 w-100">
                            <p class="mb-0 fw600">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                            <p class="mb-0 fw400 cGray lh1_5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <div class="notif_time_date d-flex">
                                <h6 class="mb-0 me-3 cGray fw400">30 minutes Ago</h6>
                                <time class="cGray fw400">06:00 AM </time>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex align-items-center active_notification my-5 border-bottom pb-4">
                        <div class="notif-icon mb-1 me-3">
                            <i class="far fa-bell"></i>
                        </div>
                        <div class="mb-1 w-100">
                            <p class="mb-0 fw600">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                            <p class="mb-0 fw400 cGray lh1_5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <div class="notif_time_date d-flex">
                                <h6 class="mb-0 me-3 cGray fw400">30 minutes Ago</h6>
                                <time class="cGray fw400">06:00 AM </time>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex align-items-center active_notification my-5 border-bottom pb-4">
                        <div class="notif-icon mb-1 me-3">
                            <i class="far fa-bell"></i>
                        </div>
                        <div class="mb-1 w-100">
                            <p class="mb-0 fw600">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                            <p class="mb-0 fw400 cGray lh1_5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <div class="notif_time_date d-flex">
                                <h6 class="mb-0 me-3 cGray fw400">30 minutes Ago</h6>
                                <time class="cGray fw400">06:00 AM </time>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex align-items-center active_notification my-5 border-bottom pb-4">
                        <div class="notif-icon mb-1 me-3">
                            <i class="far fa-bell"></i>
                        </div>
                        <div class="mb-1 w-100">
                            <p class="mb-0 fw600">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                            <p class="mb-0 fw400 cGray lh1_5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <div class="notif_time_date d-flex">
                                <h6 class="mb-0 me-3 cGray fw400">30 minutes Ago</h6>
                                <time class="cGray fw400">06:00 AM </time>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex align-items-center active_notification my-5 border-bottom pb-4">
                        <div class="notif-icon mb-1 me-3">
                            <i class="far fa-bell"></i>
                        </div>
                        <div class="mb-1 w-100">
                            <p class="mb-0 fw600">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                            <p class="mb-0 fw400 cGray lh1_5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <div class="notif_time_date d-flex">
                                <h6 class="mb-0 me-3 cGray fw400">30 minutes Ago</h6>
                                <time class="cGray fw400">06:00 AM </time>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination Start -->
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <h6 class="pagination-details mb-3"> Showing 05 out of 40 records </h6>
                        <div class="custom_pagination mb-3">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" aria-current="page" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Pagination End -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../layout/footer.php');
?>