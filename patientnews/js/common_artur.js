$(function () {


    if ($('*').is('#navbar')) {
        $('body').addClass('navbar_on');
    }

    var link = $('#navbar a.dot');
    data_start = $('.section_spy').attr('data-title');
    $('.box_text span').text(data_start);
    var height_navbar = $('.navbar .nav-menu').height();
    $('.box_text').css({
        'bottom': height_navbar + 10 + 'px',
    });

    link.on('click', function (e) {
        // var target = $($(this).attr('href'));
        // $('html, body').animate({
        //     scrollTop: target.offset().top
        //
        // }, 600);
        // $(this).addClass('active');
        e.preventDefault();
    });

    // Run the scrNav when scroll
    $(window).on('scroll', function () {
        scrNav();
    });


    function scrNav() {
        var sTop = $(window).scrollTop();
        $('.section_spy').each(function () {
            var id = $(this).attr('id'),
                offset = $(this).offset().top - 1,
                height = $(this).height();
            data_s = $(this).attr('data-title');
            if (sTop >= offset && sTop < offset + height) {
                link.removeClass('active');
                $('#navbar').find('[data-scroll="' + id + '"]').addClass('active');
                $('.box_text span').text(data_s);
            }
        });
    }

    scrNav();
});