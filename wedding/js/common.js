$(document).ready(function () {

  var scroll = 0,
      scrollTop = $('#scroll-top');

  $(window).scroll(function () {
      var $this = $(this),
          scroll = $this.scrollTop();

      if (scroll > 120) {
          scrollTop.addClass('active');
          $("header").addClass("header-active");
      } else if (scroll < 70) {
          scrollTop.removeClass('active');
          $("header").removeClass("header-active");
      }

  });

  //SCROLL TOP
  scrollTop.click(function (e) {
      e.preventDefault();
      $('html, body').animate({
          scrollTop: 0
      }, 1000);
  });

  /*mob_menu*/
  $(".menu_mob").click(function () {
      $(".menu_mob").toggleClass("active_drop_men");
      $(".header-menu").toggleClass("menu-active");
  });

 /*  uncor */

  $(".go-to").click(function (event) {

      event.preventDefault();
      var id = $(this).attr('href'),
          top = $(id).offset().top;

      $('body,html').animate({ scrollTop: top }, 1500);
  });

  /* modal */
  $(".works-block").click(function (e) {
      e.preventDefault();
      var videoAttr = $(this).attr("data-vimeo");
      $("#vimeo-video").attr("src", "https://player.vimeo.com/video/" + videoAttr + "?title=0&byline=0&portrait=0&transparent=0&autoplay=1");
      $(".modal").css("display", "flex");
  });
  $(".close-modal").click(function () {
      $(".modal").hide();
      $("#vimeo-video").attr("src", "");
  });

  var modal = $('.modal')[0];
  $(window).click(function () {
      if (event.target == modal) {
          $(".modal").hide();
          $("#vimeo-video").attr("src", "");
      }
  });

});