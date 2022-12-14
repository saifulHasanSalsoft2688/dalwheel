<?php include('../layout/popup.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- <script src="../assets/js/slick.js"></script> --> 
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="../assets/js/main.js"></script>
<script>
    /**
     * Password Display
     */
    let eyeBtn = Array.from(document.querySelectorAll('.passDisplay'));
    if (eyeBtn) {
        eyeBtn.forEach(e => {
            e.addEventListener('click', function() {
                let passwordWrapper = e.closest('.passwordWrapper');
                let passInput = passwordWrapper.querySelector('.passInput');
                let eyeIcon = passwordWrapper.querySelector('.passDisplay i');
                if (passInput.type == 'password') {
                    passInput.setAttribute('type', 'text');
                    eyeIcon.setAttribute('class', 'fas fa-eye');
                } else {
                    passInput.setAttribute('type', 'password');
                    eyeIcon.setAttribute('class', 'fas fa-eye-slash');
                }
            })
        })

    }
</script>
</body>

</html>