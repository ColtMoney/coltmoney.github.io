$(document).ready(function () {

    $('ul.tabs li').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tabs-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    })

    $('.js-tab-trigger').click(function () {
        var id = $(this).attr('data-tabs'),
            content = $('.js-tab-content[data-tabs="' + id + '"]');

        $('.js-tab-trigger.active').removeClass('active');
        $(this).addClass('active');

        $('.js-tab-content.active').removeClass('active');
        content.addClass('active');
    });

    $('.download_link').on('click', function () {
        $('.download_file_popup').addClass('active');
        return false;
    });

    $('.top-nav .menu_mobile').on('click', function () {
        $('.left-sidebar .sidebar-navigation').toggleClass('on_menu');
        return false;
    });

    var width = $('.g-recaptcha').parent().width();
    if (width < 302) {
        var scale = width / 302;
        $('.g-recaptcha').css('transform', 'scale(' + scale + ')');
        $('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
        $('.g-recaptcha').css('transform-origin', '0 0');
        $('.g-recaptcha').css('-webkit-transform-origin', '0 0');
    }

})