$(function () {
    $('.case-slide').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<a href="" class="slider_arrow arrow_prev"></a>',
        nextArrow: '<a href="" class="slider_arrow arrow_next"></a>',
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: true
                }
            }
        ]
    });

    $('.careers-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        customPaging : function(slider, i) {
            return '<span class="slider_dot"></span>';
        },
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: true
                }
            }
        ]
    });

});