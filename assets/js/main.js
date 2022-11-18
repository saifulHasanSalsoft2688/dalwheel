AOS.init();

jQuery('#logout').click(function(){
  localStorage.setItem("session", 'false');
  window.location = '../auth-pages/login.php'
});


jQuery('#sign-in').click(function(){
  localStorage.setItem("session", 'true');
});

var sessions = localStorage.getItem("session");
if(sessions == 'true') {
  jQuery('.guest-menu-bar').hide();
  jQuery('.login-menu-bar').show();
}


jQuery('.submitButn button').click(function(index){
  var classCheck = jQuery('.show').next().hasClass('card-item');
  var activeBox = jQuery('.step-active').next().hasClass('step-box-container');
  if(classCheck == true) {
          jQuery('.step-active').next('.step-box-container').addClass('step-active');
          jQuery('.show').next('.card-item').addClass('show');
          jQuery('.show').prev('.card-item').removeClass('show');
  } else {
      jQuery(this).text('Place Order');
      jQuery(this).attr('data-toggle', 'modal');
      jQuery(this).attr('data-target', '#order');
  }
  
  });


// order status 

jQuery('table a').click(function(){
    var status = jQuery(this).parents('tr').find('.status').text();
    localStorage.setItem('status', status);
});


var getStatus = localStorage.getItem('status');
if(getStatus == "In Progress") {
    jQuery('.order-status').text(getStatus);
    jQuery('.order-status').addClass('text-inProgress');
    jQuery('.order-status').removeClass('text-deliver');
    jQuery('.order-status').removeClass('text-pending');
}


if(getStatus == "Pending") {
  jQuery('.order-status').text(getStatus);
  jQuery('.order-status').addClass('text-pending');
  jQuery('.order-status').removeClass('text-inProgress');
  jQuery('.order-status').removeClass('text-deliver');
}

if(getStatus == "Delivered" || getStatus == "Approved") {
  jQuery('.order-status').text(getStatus);
  jQuery('.order-status').addClass('text-deliver');
  jQuery('.order-status').removeClass('text-inProgress');
  jQuery('.order-status').removeClass('text-pending');
}

if(getStatus == "Rejected") {
  jQuery('.reasonRejected').show();
  jQuery('.order-status').text(getStatus);
  jQuery('.order-status').addClass('text-requested');
  jQuery('.order-status').removeClass('text-inProgress');
  jQuery('.order-status').removeClass('text-pending');
}

// end 




jQuery(window).scroll(function (event) {
  var scroll = jQuery(window).scrollTop();
  if (scroll > 2) {
    jQuery('.guest-header').css('transition', '.2s');
    jQuery('.guest-header').addClass('bg-white border-bottom');
    jQuery('.guest-header').removeClass('default');
    jQuery('.guest-header .navbar-brand img').css('width', '50px');

  } else {
    jQuery('.guest-header').removeClass('bg-white border-bottom default');
    jQuery('.guest-header').addClass('default');
    jQuery('.guest-header .navbar-brand img').css('width', 'auto');
  }

  // headlight 
  var windowTop = parseInt(scroll);
  let headlight = jQuery('.mainBanners').offset();
  headlight = parseInt(headlight.top + 200);
  if (windowTop > headlight) {
    jQuery('.hl').css('opacity', '1');
  } else {
    jQuery('.hl').css('opacity', '0');
  }


});

// adopt feature slider 

jQuery('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
jQuery('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 3,
  asNavFor: '.slider-for',
  dots: false,
  focusOnSelect: true,
  vertical: true,
  verticalSwiping: true,
  arrows: false,
});


// carousal 


jQuery(".regular").slick({
  dots: false,
  infinite: true,
  slidesToShow: 3,
  autoplay: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 540,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }
  ]
});


jQuery('.center').slick({
  dots: true,
  autoplay: true,
  centerPadding: '60px',
  slidesToShow: 3,
  prevArrow: false,
  nextArrow: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});


// banner slider 

jQuery(".banners").slick({
  dots: true,
  loop: true,
  infinite: true,
  slidesToShow: 1,
  vertical: true,
  autoplay: true,
  speed: 2000,
  autoplaySpeed: 4000,
  cssEase: 'ease-in-out',
  touchThreshold: 100
});


jQuery('.sell-featured-box').click(function () {
  let imageFind = jQuery(this).find('img').attr('src');
  let carName = jQuery(this).find('h3').text();
  jQuery('.avtive-featured-car .car-image img').attr('src', imageFind);
  jQuery('.avtive-featured-car .car-name h3').text(carName);
})

setInterval(function () {
  var displayImgae = jQuery('.slick-active').prev('.slick-slide').find('.slide-image img').attr('src');
  jQuery('.slick-active').find('.previous-image img').attr('src', displayImgae);
}, 500);


const inputElements = [...document.querySelectorAll('input.code-input')]

inputElements.forEach((ele, index) => {
  ele.addEventListener('keydown', (e) => {
    if (e.keyCode === 8 && e.target.value === '') inputElements[Math.max(0, index - 1)].focus()
  })
  ele.addEventListener('input', (e) => {
    const [first, ...rest] = e.target.value
    e.target.value = first ?? ''
    if (index !== inputElements.length - 1 && first !== undefined) {
      inputElements[index + 1].focus()
      inputElements[index + 1].value = rest.join('')
      inputElements[index + 1].dispatchEvent(new Event('input'))
    }
  })
});

// show advance filter 

jQuery('.advanceFilter').click(function () {
  jQuery('.advance-filter-option').show();
});


// custom upload button  
jQuery('.uploadBtn button').click(function () {
  jQuery('input#upload').trigger('click');
})

// upload images show 

jQuery(function () {
  var imagesPreview = function (input, placeToInsertImagePreview) {

    if (input.files) {
      var filesAmount = input.files.length;

      for (i = 0; i < filesAmount; i++) {
        var reader = new FileReader();

        reader.onload = function (event) {
          jQuery(jQuery.parseHTML('<img draggable="false">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
        }

        reader.readAsDataURL(input.files[i]);
      }
    }

  };

  jQuery('#upload').on('change', function () {
    imagesPreview(this, 'div.gallery');
  });
});


// quantity selector 

jQuery('.quantity-left-minus').click(function () {
  var getQuantity = jQuery(this).next('input[type="number"]').val();
  if (getQuantity > 1) {
    jQuery(this).next('input[type="number"]').val(getQuantity - 1);
  }
});

jQuery('.quantity-right-plus').click(function () {
  var getQuantity = parseInt(jQuery(this).prev('input[type="number"]').val());
  jQuery(this).prev('input[type="number"]').val(getQuantity + 1);
});

// remove cart items 

jQuery('.removeProduct').click(function () {
  jQuery(this).parents('tr').remove();
})

// // #zip code 

// jQuery('#zip').keyup(function(){
//   var address = jQuery(this).val();
//   if(address) {
//       jQuery(this).parents('form').find('#continue').show();
//   } else {
//       jQuery(this).parents('form').find('#continue').hide();
//   }
// });


jQuery('.showFileds').click(function () {
  jQuery(this).parents('.wizard').hide();
  jQuery(this).parents('.delivery-details').find('.showBox').show();
  jQuery(this).parents('.delivery-details').find('.editBtn').show();
});

jQuery('.editBtn').click(function () {
  jQuery(this).parents('.delivery-details').find('.wizard').show();
  jQuery(this).parents('.delivery-details').find('.showBox').hide();
  jQuery(this).hide();
});

jQuery('form > div:nth-child(3) .showFileds').click(function () {
  jQuery('.submitButn').show();
});

// adopted btn 



jQuery('.password-box button').click(function () {
  var getType = jQuery(this).prev('input').attr('type');
  if (getType == 'password') {
    jQuery(this).prev('input').attr('type', 'text');
    jQuery(this).find('i').removeClass('fa-eye-slash');
    jQuery(this).find('i').addClass('fa-eye');
  } else {
    jQuery(this).prev('input').attr('type', 'password');
    jQuery(this).find('i').addClass('fa-eye-slash');
    jQuery(this).find('i').removeClass('fa-eye');
  }
})

jQuery('.back-page a').attr('href', 'javascript:history.back()');


var rangeOne = document.querySelector('input[name="rangeOne"]'),
  rangeTwo = document.querySelector('input[name="rangeTwo"]'),
  outputOne = document.querySelector('.outputOne'),
  outputTwo = document.querySelector('.outputTwo'),
  inclRange = document.querySelector('.incl-range'),
  updateView = function () {
    if (this.getAttribute('name') === 'rangeOne') {
      outputOne.innerHTML = '$' + this.value;
      outputOne.style.left = this.value / this.getAttribute('max') * 100 + '%';
    } else {
      outputTwo.style.left = this.value / this.getAttribute('max') * 100 + '%';
      outputTwo.innerHTML = '$' + this.value
    }
    if (parseInt(rangeOne.value) > parseInt(rangeTwo.value)) {
      inclRange.style.width = (rangeOne.value - rangeTwo.value) / this.getAttribute('max') * 100 + '%';
      inclRange.style.left = rangeTwo.value / this.getAttribute('max') * 100 + '%';
    } else {
      inclRange.style.width = (rangeTwo.value - rangeOne.value) / this.getAttribute('max') * 100 + '%';
      inclRange.style.left = rangeOne.value / this.getAttribute('max') * 100 + '%';
    }
  };

document.addEventListener('DOMContentLoaded', function () {
  updateView.call(rangeOne);
  updateView.call(rangeTwo);
  $('input[type="range"]').on('mouseup', function () {
    this.blur();
  }).on('mousedown input', function () {
    updateView.call(this);
  });
});



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

