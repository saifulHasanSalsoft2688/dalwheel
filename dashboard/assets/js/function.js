/**
 * Toggler function of sidebar 
 */

$(document).ready(function (jQuery) {

    $(".toggleNavBtn").click(function () {
        $(".siteWrapper").toggleClass("removeSideBar");
    });
    $(".toggleMobNav").click(function () {
        $(".mobileMenu").toggleClass("show_nav");
    });
    // ================        |Slick|        ================= // 
    $(".product-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        fade: true,
        asNavFor: ".product-thumbnail",
        autoplay: false,
        arrows: true,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left sliderIcons' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right sliderIcons' aria-hidden='true'></i></button>",
    });
    $(".product-thumbnail").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: ".product-slider",
        dots: false,
        arrows: false,
        focusOnSelect: true,
        loop: true,
        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                },
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                },
            },
        ],
    });
    // Add more input types  
    $(".AddMore").click(function (e) {
        $(".breed_names").append('<div class="position-relative breed_box"><input type="text" class="primary-inputs my-2" placeholder="Enter breed name" ><button class="notBtn removeInp colRed fw600" type="button"><i class="fas fa-times-circle"></i></button></div >');
    });
    $('.customSelect').change(function () { //jQuery Change Function
        var opval = $(this).val(); //Get value from select element
        if (opval == "Reject") { //Compare it and if true
            $('#rejectionReason').modal("show"); //Open Modal
            console.log("selected")
        }
    });
    // Cloning a div in profiledetail page

});

/**
 * Password Display
 */

let eyeBtn = Array.from(document.querySelectorAll('.passDisplay'));
if (eyeBtn) {
    eyeBtn.forEach(e => {
        e.addEventListener('click', function () {
            let passwordWrapper = e.closest('.passwordWrapper');
            let passInput = passwordWrapper.querySelector('.passInput');
            let eyeIcon = passwordWrapper.querySelector('.passDisplay i');
            if (passInput.type == 'password') {
                passInput.setAttribute('type', 'text');
                eyeIcon.setAttribute('class', 'fas fa-eye');
            }
            else {
                passInput.setAttribute('type', 'password');
                eyeIcon.setAttribute('class', 'fas fa-eye-slash');
            }
        })
    })

}

/**
 * Path Actions 
 */

let path = window.location.pathname;
path = path.split('/');
let activePath = path[path.length - 2];
let sideMenu = Array.from(document.querySelectorAll('.main-menu .nav-item'));
sideMenu.forEach(e => {
    let sideMenuLink = e.querySelector('.main-menu .nav-item a').href;
    sideMenuLink = sideMenuLink.split('/');
    let sideMenuActive = sideMenuLink[sideMenuLink.length - 2];
    if (sideMenuActive == activePath) {
        e.classList.add('active');
    }
})

/**
 *  Go Back To page
 */

let backLink = Array.from(document.querySelectorAll('.backLink'));
backLink.forEach(e => {
    e.addEventListener('click', function () {
        window.history.go(-1)
    })
})

/**
 * show path of input type file
 */

let myPath = document.getElementById('uploadContent');
if (myPath) {
    myPath.onchange = function () {
        var fileName = this.value;
        document.querySelector('.image-url').innerHTML = fileName;
    };
}

/**
 * Preview Image of Profile : 
 */
var source;
function showPreview(event) {
    if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("profile-preview");
        preview.src = src;
        source = src;
        preview.style.display = "block";
    }
}

function showPreview2(event) {
    if (event.target.files.length > 0) {
        var preview = document.querySelector(".upload_product");
        preview.classList.remove('d-none')
        showPreview(event)
    } else {
        preview.classList.add('d-none')
    }
}

function showPrevPreview(event) {
    if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("img-preview");
        preview.src = src;
        source = src;
        preview.style.display = "block";
    }
}
function showPreview3(event) {
    if (event.target.files.length > 0) {
        var preview = document.querySelector(".img-preview");
        preview.classList.remove('d-none')
        showPrevPreview(event)
    } else {
        preview.classList.add('d-none')
    }
}

// delete product Image
function deleteSrc() {
    var preview = document.querySelector(".upload_product");
    preview.classList.add('d-none')
}
/**
 * Active Inactive status: 
 */

let aiCustomWrapper = document.querySelectorAll('.custom_switch_wrapper');
if (aiCustomWrapper) {
    aiCustomWrapper.forEach((item) => {
        let aiCustomCheckBox = item.querySelector('.input_type_status');
        let aiStatus = item.querySelector('.active_inactive');
        aiCustomCheckBox.addEventListener('change', () => {
            if (aiCustomCheckBox.checked) {
                aiStatus.innerText = "Active";
            } else {
                aiStatus.innerText = "Inactive";
            }
        })
    })
}

/**
 * Change Color of Add to Fav Icon
 */

let addtoFav = document.querySelectorAll(".addtoFav");
addtoFav.forEach((item) => {
    item.addEventListener("click", () => {
        item.classList.toggle("text-danger")
    })
})



// function to add slots
let timeSlots = document.querySelectorAll('.timeSlots')

timeSlots.forEach((timeSlot) => {
    let mainSlot = timeSlot.querySelector('.mainSlot')
    let removeSlot = timeSlot.querySelector('.removeSlot')
    let addSlot = timeSlot.querySelector('.addSlot') 
    addSlot.addEventListener('click', () => {
        let secondaryElem = document.createElement('div')
        secondaryElem.innerHTML = '<div class="mb-4 d-md-flex align-items-center justify-content-between slotBox"><input type="time" class="primary-inputs secInp me-md-3 my-2">  <input type="time" class="primary-inputs secInp ms-md-3 my-2"> </div>'
        mainSlot.append(secondaryElem)
    })
    removeSlot.addEventListener('click', () => {
        mainSlot.removeChild(mainSlot.lastElementChild);
        delSlots(timeSlot, removeSlot)
    })
})

jQuery('.removeSlot').click(function () {
    var getRemove = jQuery(this).parents('.timeSlots').find('div').length;
    if (getRemove == 3) {
        jQuery(this).hide();
    } else {
        jQuery(this).show();
    }
});

jQuery('.addSlot').click(function () {
    var getRemove = jQuery(this).parents('.timeSlots').find('div').length;
    if (getRemove <= 3) {
        jQuery(this).prev('.removeSlot').hide();
    } else {
        jQuery(this).prev('.removeSlot').show();
    }
});