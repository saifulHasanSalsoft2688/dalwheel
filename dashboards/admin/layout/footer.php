<!-- Jquery cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap js -->
<script src="../../assets/vendors/bootstrap/js/bootstrap.js"></script>
<!-- slick js -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- Custom js -->
<script src="../../assets/js/function.js"></script>
<script src="../../assets/vendors/wowjs/wow.js"></script>
<!-- intlTelInput -->
<script src="../../assets/vendors/intelInput/intlTelInput.js"></script>
<script>
    wow = new WOW({
        animateClass: 'animate__animated',
        offset: 100,
        mobile: false, // default
        live: true
    });
    wow.init();
    // show flags on input type number
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        utilsScript: "../../assets/vendors/intelInput/utils.js",
    });
</script>
<!-- Logout Modal -->
<div class="modal customModal fade" id="logoutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal_img_wrap">
                    <img src="../../assets/images/sure.png" class="img-fluid" alt="Modal Image">
                </div>
                <h4>Logout</h4>
                <p>Are you sure you want to logout?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="sec-btn " data-bs-dismiss="modal" onclick="window.location.assign('../auth/index.php')">Yes</button>
                <button type="button" class="main-btn" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>