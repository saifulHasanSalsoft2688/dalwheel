<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footerLogo" data-aos="fade-down" data-aos-duration="1200">
                    <a href="#">
                        <img src="../assets/images/logo.png" alt="Logo" class="mw-100" draggable="false">
                    </a>
                </div>
                <div class="footer-content">
                    <p class="mb-0 text-white f-14">We Provide Everything You Need To Build An Amazing Dealership Website Developed Especially For Car Sellers Dealers Or Auto Motor Retailers</p>
                    <ul class="mt-3">
                        <li><a class="text-white" href="tel: +123-456-7890"><i class="pr-2 text-theme-primary fa fa-phone"></i> +123-456-7890</a></li>
                        <li><a class="text-white" href="mailto: info@saaviYoga.com"><i class="pr-2 text-theme-primary fa fa-envelope"></i> info@saaviYoga.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footerMenu py-4">
                    <div class="title-box">
                        <h5 class="text-white" data-aos="fade-down" data-aos-duration="1200">Quick Links</h5>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../about/">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../privacy-policy/">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../terms-and-condition/">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="blog-menu py-4">
                    <div class="title-box">
                        <h5 class="text-white" data-aos="fade-down" data-aos-duration="1200">Recent Posts</h5>
                    </div>
                    <div class="blog-footer-listing">
                        <div class="d-flex flex-wrap align-items-center gap-15 mt-4">
                            <div class="blog-image">
                                <img src="../assets/images/slide-1.png" alt="Blog" draggable="false">
                            </div>
                            <div class="blog-content text-white f-14">
                                <p class="mb-0"><a href="#" class="text-white">Buy Your Dream Car</a></p>
                                <p class="mb-0"><i class="fa fa-calendar-o text-theme-primary pr-2"></i>May 17, 2021</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap align-items-center gap-15 mt-4">
                            <div class="blog-image">
                                <img src="../assets/images/slide-2.png" alt="Blog" draggable="false">
                            </div>
                            <div class="blog-content text-white f-14">
                                <p class="mb-0"><a href="#" class="text-white">Buy Your Dream Car</a></p>
                                <p class="mb-0"><i class="fa fa-calendar-o text-theme-primary pr-2"></i>May 17, 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="newsletter py-4">
                    <div class="title-box">
                        <h5 class="text-white" data-aos="fade-down" data-aos-duration="1200">Subscribe Our Newsletter</h5>
                    </div>
                    <div class="newsletter-content f-14 text-white mt-4">
                        <p>keep up on our always evolving products features and technology. Enter your e-mail and subscribe to our newsletter.</p>
                        <form action="#" method="POST">
                            <div class="form-group">
                                <input type="email" name="newesletterEmail" placeholder="Enter Your Email" data-aos="fade-down" data-aos-duration="1200">
                            </div>
                            <div class="link-to" data-aos="fade-down" data-aos-duration="1200">
                                <button type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copy right  -->
    <div class="copyRight pt-3 text-center">
        <p class="mb-0 text-white ">2022 © All rights reserved Dalwheels.</p>
    </div>
</footer>
<?php include('../layout/popup.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- <script src="../assets/js/slick.js"></script> --> 
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/intlTelInput.js"></script>
<script src="../assets/js/intlTelInput-jquery.js"></script>
  <script>
    $(".phone").intlTelInput({
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      separateDialCode: true,
      utilsScript: "../assets/js/utils.js",
    });
  </script>

</body>

</html>