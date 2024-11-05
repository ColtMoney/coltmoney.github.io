$(function() {

	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			window.location = "../success/index.php";
			setTimeout(function() {
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	$(".head-search-btn").on("click", function() {
		$(".head-search-box").slideToggle();
		$(this).find(".fa").toggleClass("fa-search fa-times");
	});

	$("nav#menu").mmenu({
		"slidingSubmenus": false,
		"extensions": [
			"pagedim-black", "widescreen", "effect-menu-slide" 
		]
	});

	$("#nav-icon1").click(function(){   
		$(this).addClass("open");
	});

	$(".hamburger").click(function(){   
		$("#menu ul").css("display", "block");
	});

	var api = $("nav#menu").data( "mmenu" );
	api.bind( "closed", function() {
		$("#nav-icon1").removeClass("open");
	});

	$(".slide-right-mnu-item").hover(function(){
		if ($(this).hasClass('visible')) {
			$(this).removeClass('visible');
		}
		else {
			$(this).addClass('visible');
		}
	});

	$(".head-basked a").hover(
		function(){
			$(".cart-open-wrap").fadeIn();
			$(".layer-basked-open").css("display", "block");
		});
	$(".layer-basked-open").on("click", function() {
		$(".cart-open-wrap").fadeOut();
		$(this).hide();
	});

	$(".mfp-phone").magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});

	$(".mfp-client").magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});

	$(".mfp-shop").magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});

	$(".mfp-authentication").magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});

	var owl1 = $(".custom-carousel");
	owl1.owlCarousel({
		items: 4,
		loop: true,
	});

	$(".custom-next").click(function() {
		owl1.trigger('next.owl.carousel');
	})

	$(".custom-prev").click(function() {
		owl1.trigger("prev.owl.carousel");
	})

	var owl2 = $(".first-carousel");
	owl2.owlCarousel({
		loop: true,
		responsive : {
			0 : {
				items: 1
			},
			480 : {
				items: 2
			},
			768 : {
				items: 3
			},
			1200 : {
				items: 4
			}
		}
	});

	$(".first-btn-next").click(function() {
		owl2.trigger('next.owl.carousel');
	})

	$(".first-btn-prev").click(function() {
		owl2.trigger("prev.owl.carousel");
	})

	var owl3 = $(".second-carousel");
	owl3.owlCarousel({
		loop: true,
		responsive : {
			0 : {
				items: 1
			},
			480 : {
				items: 2
			},
			768 : {
				items: 3
			},
			1200 : {
				items: 4
			}
		}
	});

	$(".second-btn-next").click(function() {
		owl3.trigger('next.owl.carousel');
	})

	$(".second-btn-prev").click(function() {
		owl3.trigger("prev.owl.carousel");
	})

	$('.custom-slide-item img').click(function () {
		var path = $(this).attr('src');
		var bigPath = path.substring(0, (path.indexOf('small')));
		console.log(bigPath);
		$(".big-img-slide img").attr('src', bigPath + 'big.jpg');
	});

	$(document).pjax(".item-link", ".pjax-container", {fragment: ".pjax-container"});

	// $(".pjax-container").on("pjax:success", function(){
	// 	$.pjax({
	// 		url: window.location.href,
	// 		container: ".product-setting-btn",
	// 		fragment: ".product-setting-btn"
	// 	});
	// });

	$("#tabs").tabs({});

});
