AOS.init();

jQuery(window).scroll(function (event) {
  var scroll = jQuery(window).scrollTop();
  if (scroll > 2) {
    jQuery('.guest-header').css('transition', '.2s');
    jQuery('.guest-header').addClass('bg-white border-bottom');
    jQuery('.guest-header').removeClass('default');
    jQuery('.guest-header img').css('width', '50px');

  } else {
    jQuery('.guest-header').removeClass('bg-white border-bottom default');
    jQuery('.guest-header').addClass('default');
    jQuery('.guest-header img').css('width', 'auto');
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
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 4,
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
  autoplay: false,
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

 