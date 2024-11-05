$(function() {
    $('.video_slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<a href="#" class="slider_arrow arrow_prev"></a>',
        nextArrow: '<a href="#" class="slider_arrow arrow_next"></a>',
        dots: true,
        customPaging : function(slider, i) {
            return '<span class="slider_dot"></span>';
        },
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
        ]
    });

    $('.imgs_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<a href="#" class="slider_arrow arrow_prev"></a>',
        nextArrow: '<a href="#" class="slider_arrow arrow_next"></a>',
        dots: true,
        customPaging : function(slider, i) {
            return '<span class="slider_dot"></span>';
        },
        autoplay: true,
        autoplaySpeed: 3000,
    });

    $('.mob_menu_btn').click(function () {
        $(this).toggleClass("active");
        $('.header_nav').toggleClass("active");
        $('body').toggleClass("menu_open");
        return false;
    });

  var isEdge = /Edge/.test(navigator.userAgent)
	
	if (isEdge) {
		document.documentElement.classList.add('edge');
	}

	var uaTwo = window.navigator.userAgent;
    var isIETwo = /MSIE|Trident/.test(uaTwo);
    
    if ( isIETwo ) {
      document.documentElement.classList.add('ie');
	}

});
