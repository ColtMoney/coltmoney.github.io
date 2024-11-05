$(function() {
    $(".scroll_down").click(function(){
        $('html, body').animate({scrollTop: $('.main_s').height()}, 800);
        return false;
    });
    $(".nav_btn").click(function(){
        $(this).toggleClass("active");
        $('.header_nav').toggleClass("active");
    });

    var uaTwo = window.navigator.userAgent;
    var isIETwo = /MSIE|Trident/.test(uaTwo);
    
    if ( isIETwo ) {
      document.documentElement.classList.add('ie');
    }
    
});
