<?php
include('../layout/loggedin-header.php');
?>
<section class="notification py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-head">
                    <h3 class="font-weight-bold">Notifications</h3>
                </div>
                <div class="notification-section">
                    <div class="notification-title border-top mt-3 pt-3">
                        <h4 class="text-secondary">Today</h4>
                    </div>
                    <div class="notificaton-box mb-3 py-3 border-bottom">
                        <div class="d-flex justify-content-md-between align-items-center flex-wrap justify-content-center">
                            <div class="notification-content">
                                <div class="d-flex gap-15 align-items-center flex-wrap">
                                    <div class="notification-image position-relative">
                                        <img src="../assets/images/user-icon.png" alt="Person" draggable="false" class="mw-100">
                                        <span class="count">1</span>
                                    </div>
                                    <div class="notification-block">
                                        <div class="text">
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean uismod Lorem ipsum
                                                dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-status flex-shrink-0">
                                <button class="border-0 bg-transparent">2 min</button>
                            </div>
                        </div>
                    </div>
                    <div class="notificaton-box mb-3 py-3 border-bottom">
                        <div class="d-flex justify-content-md-between align-items-center flex-wrap justify-content-center">
                            <div class="notification-content">
                                <div class="d-flex gap-15 align-items-center flex-wrap">
                                    <div class="notification-image position-relative">
                                        <img src="../assets/images/user-icon.png" alt="Person" draggable="false" class="mw-100">
                                        <span class="count">1</span>
                                    </div>
                                    <div class="notification-block">
                                        <div class="text">
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean uismod Lorem ipsum
                                                dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-status flex-shrink-0">
                                <button class="border-0 bg-transparent">2 min</button>
                            </div>
                        </div>
                    </div>
                    <div class="notificaton-box mb-3 py-3">
                        <div class="d-flex justify-content-md-between align-items-center flex-wrap justify-content-center">
                            <div class="notification-content">
                                <div class="d-flex gap-15 align-items-center flex-wrap">
                                    <div class="notification-image position-relative">
                                        <img src="../assets/images/user-icon.png" alt="Person" draggable="false" class="mw-100">
                                        <span class="count">1</span>
                                    </div>
                                    <div class="notification-block">
                                        <div class="text">
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean uismod Lorem ipsum
                                                dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-status flex-shrink-0">
                                <button class="border-0 bg-transparent">2 min</button>
                            </div>
                        </div>
                    </div>
                    <div class="notification-title border-top mt-3 pt-3">
                        <h4 class="text-secondary">Yesterday</h4>
                    </div>
                    <div class="notificaton-box mb-3 py-3 border-bottom">
                        <div class="d-flex justify-content-md-between align-items-center flex-wrap justify-content-center">
                            <div class="notification-content">
                                <div class="d-flex gap-15 align-items-center flex-wrap">
                                    <div class="notification-image position-relative">
                                        <img src="../assets/images/user-icon.png" alt="Person" draggable="false" class="mw-100">
                                        <span class="count">1</span>
                                    </div>
                                    <div class="notification-block">
                                        <div class="text">
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean uismod Lorem ipsum
                                                dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-status flex-shrink-0">
                                <button class="border-0 bg-transparent">2 min</button>
                            </div>
                        </div>
                    </div>
                    <div class="notificaton-box mb-3 py-3 border-bottom">
                        <div class="d-flex justify-content-md-between align-items-center flex-wrap justify-content-center">
                            <div class="notification-content">
                                <div class="d-flex gap-15 align-items-center flex-wrap">
                                    <div class="notification-image position-relative">
                                        <img src="../assets/images/user-icon.png" alt="Person" draggable="false" class="mw-100">
                                        <span class="count">1</span>
                                    </div>
                                    <div class="notification-block">
                                        <div class="text">
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean uismod Lorem ipsum
                                                dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-status flex-shrink-0">
                                <button class="border-0 bg-transparent">2 min</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="viewAll d-flex justify-content-end flex-wrap mt-5">
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
</section>

<?php
include('../layout/footer.php');
?>