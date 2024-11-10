$(function() {

	$(document).on("mouseup", function(e){

		var target = e.target;
		var searchBtn = $(".search-icon-btn");
		var searchInput = $(".search-box");

		var selectedLang = $(".selected-lang");
		var selectLangBox = $(".selct-lang-box");

		var btnMobMenu = $(".btn_open_mobile_dropdown");
		var mobHeaderDropdown = $(".mobile_header_dropdown");

		if (!searchBtn.is(target) && searchBtn.has(target).length === 0 && !searchInput.is(target) && searchInput.has(target).length === 0) {
			searchInput.removeClass("active");
		}

		if (!selectedLang.is(target) && selectedLang.has(target).length === 0 && !selectLangBox.is(target) && selectLangBox.has(target).length === 0) {
			selectLangBox.removeClass("active");
		}

		if (!btnMobMenu.is(target) && btnMobMenu.has(target).length === 0 && !mobHeaderDropdown.is(target) && mobHeaderDropdown.has(target).length === 0) {
			btnMobMenu.removeClass("active");
			mobHeaderDropdown.removeClass("active");
		}

	});

	$(".search-icon").on("click", function(){
		$(this).parent().addClass("active");
	});


	$('.home-slider').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<div class="prev-arrow"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.8 3.5L5.30001 12L13.8 20.5L12.1 23.9L0.200012 12L12.1 0.1L13.8 3.5Z" fill="white" fill-opacity="0.4"/></svg></div>',
		nextArrow: '<div class="next-arrow"><svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.199987 20.5L8.69999 12L0.199988 3.5L1.89999 0.0999995L13.8 12L1.89999 23.9L0.199987 20.5Z" fill="white" fill-opacity="0.4"/></svg></div>'
	});

	if($('.js-example-basic-single').length){
		$('.js-example-basic-single').select2({width: '100%'});
	}


	$(".selected-lang").on("click", function(){
		$(this).parent().find(".selct-lang-box").toggleClass("active");
	});

	$(".selct-lang-box li").on("click", function(){
		const currentLang = $(this).html();
		$(".lang-type").html(currentLang);
	});

	$('.about-items-slider').slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		// variableWidth: true,
		responsive: [
			{
			breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
			breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
        //   {
        //     breakpoint: 480,
        //     settings: {
        //       slidesToShow: 1,
        //       slidesToScroll: 1
        //     }
        //   }
        ]
	});


	var getUrlParameter = function getUrlParameter(sParam) {
		var sPageURL = window.location.search.substring(1),
		sURLVariables = sPageURL.split('&'),
		sParameterName,
		i;

		for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
				return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
			}
		}
	};

	var country = getUrlParameter('country');

	if($(".header-country-name").length){
		$(".header-country-name").html(country);
	}

	// var $filterSelect = $('#FilterSelect'),
	// $sortSelect = $('#SortSelect'),
	// $container = $('#mixItUpContainer');
	
	// $container.mixItUp();
	
	// $filterSelect.on('change', function(){
	// 	$container.mixItUp('filter', this.value);
	// });
	
	// $sortSelect.on('change', function(){
	// 	$container.mixItUp('sort', this.value);
	// });

	$(".featured_varieties_name, .fancybox").fancybox({
		btnTpl: {
			smallBtn : '<button data-fancybox-close="" class="fancybox-button fancybox-close-small" title="Close"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.1188 8.00198L15.0603 3.06048C15.2015 2.92162 15.3137 2.75619 15.3907 2.57373C15.4676 2.39127 15.5076 2.19538 15.5084 1.99737C15.5093 1.79936 15.4709 1.60315 15.3955 1.42005C15.3201 1.23695 15.2092 1.07058 15.0692 0.930554C14.9292 0.790523 14.7629 0.679596 14.5798 0.604171C14.3967 0.528747 14.2005 0.490318 14.0025 0.491101C13.8045 0.491883 13.6086 0.531863 13.4261 0.608733C13.2436 0.685602 13.0782 0.797841 12.9393 0.938975L7.9978 5.88048L3.0563 0.939475C2.917 0.800175 2.75163 0.689676 2.56963 0.614288C2.38762 0.5389 2.19255 0.500098 1.99555 0.500098C1.79855 0.500098 1.60348 0.5389 1.42148 0.614288C1.23947 0.689676 1.0741 0.800175 0.934802 0.939475C0.653473 1.2208 0.495425 1.60237 0.495425 2.00022C0.495425 2.39808 0.653473 2.77965 0.934802 3.06097L5.8763 8.00198L0.922802 12.9555C0.645314 13.2376 0.490543 13.6179 0.492201 14.0136C0.493858 14.4093 0.651811 14.7883 0.931652 15.0681C1.21149 15.3479 1.59055 15.5058 1.98626 15.5073C2.38196 15.5089 2.76226 15.354 3.0443 15.0765L7.9973 10.1235L12.9383 15.0645C13.2313 15.3575 13.6153 15.504 13.9988 15.504C14.3823 15.504 14.7663 15.3575 15.0593 15.0645C15.1987 14.9253 15.3092 14.7599 15.3846 14.578C15.4601 14.396 15.4989 14.201 15.4989 14.004C15.4989 13.807 15.4601 13.6119 15.3846 13.43C15.3092 13.248 15.1987 13.0827 15.0593 12.9435L10.1188 8.00198Z" fill="black"/></svg></button>'
		}
	});

	$(".fancybox").fancybox();


	$(".disclaimer-open").on("click", function(e){
		e.preventDefault();
		$(".disclaimer-box").addClass("active");
	});

	$(".close-disclaimer").on("click", function(e){
		e.preventDefault();
		$(".disclaimer-box").removeClass("active");
	});

	$( ".play_video_btn" ).click(function() {
		$(this).parent().addClass("hide");
	});

	if($('.blue_filter').length){
			$('.blue_filter').select2({width: '100%'});
	}

	$('.testimonials_slider').slick({
		dots: true,
		infinite: true,
		arrows: false,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
	});

	$('.featured_varieties_slider_crops_page').slick({
		dots: true,
		autoplay: true,
		infinite: true,
		arrows: false,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		appendDots: '.featured_varieties_slider_dots',
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
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

	$('.crops_country_slider_b .featured_varieties_slider').slick({
		dots: true,
		infinite: true,
		arrows: false,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
				}
			},
		]
	});

	$('.other_crops_slider').slick({
		dots: false,
		infinite: true,
		arrows: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: $('.crops_slider_prev'),
		nextArrow: $('.crops_slider_next'),
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
		]
	});

	$('.items_grey_dots_slider').slick({
		dots: true,
		infinite: true,
		arrows: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
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

	$('.crop_gallery').slick({
		dots: true,
		autoplay: true,
		infinite: true,
		arrows: false,
		speed: 300,
		slidesToShow: 2,
		slidesToScroll: 1,
		mobileFirst: true, 
		responsive: [
			{
					breakpoint: 768,
					settings: "unslick"
			}
		]
	});

	$('.slider_numbers').slick({
		dots: true,
		infinite: true,
		arrows: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
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

	$('.about_us_slider').slick({
		dots: false,
		infinite: true,
		arrows: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: $('.crops_slider_prev'),
		nextArrow: $('.crops_slider_next'),
		responsive: [
			{
				breakpoint: 768,
				settings: {
					dots: true
				}
			}
		]
	});


	$('.new_s_science_item_slider').slick({
		dots: false,
		infinite: true,
		arrows: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		nextArrow: $('.new_s_science_item_slider_arrow')
	});

	$('.simple_crops_slider').slick({
		autoplay: true,
		dots: true,
		infinite: true,
		arrows: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
		]
	});

	$(".btn_open_mobile_dropdown").on("click", function(){
		$(this).toggleClass("active");
		$('.mobile_header_dropdown').toggleClass("active");
	});

	var uaTwo = window.navigator.userAgent;
	var isIETwo = /MSIE|Trident/.test(uaTwo);

	if ( isIETwo ) {
		document.documentElement.classList.add('ie');
	}


	$(window).scroll(function(){
			if ($(this).scrollTop() > 300) {
					$('.scroll_top').addClass("active");
			} else {
				$('.scroll_top').removeClass("active");
			}

	});

	$('.scroll_top').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
	});


	function formatState (state) {
		if (!state.id) {
			return state.text;
		}
		var baseUrl = "img/flags/";
		var $state = $(
			'<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
		);
		return $state;
	};

	$(".js-example-basic-single-countries").select2({
		placeholder: "Country",
		templateResult: formatState
	});
	$(".countries_select_wrpr").click(function(){
		$( ".country_select_cant_find" ).appendTo( ".select2-results" );
		$('.country_select_cant_find').addClass("active");
	});

	$(".js-example-basic-single-countries").change(function() {
				let selectCountry = $(this).val();
				$('.world_map_country').removeClass("active_country");
				$('.world_map_country.'+selectCountry).addClass("active_country");
	});

	$('.region').removeClass("active");
	$(".region_select").change(function() {
				let selectRegion = $(this).val();

				$('.region').removeClass("active");
				$('.region.'+selectRegion).addClass("active");

				$('[data-country-region="'+selectRegion+'"]').addClass("active");
	});

	var getUrlParameter = function getUrlParameter(sParam) {
		var sPageURL = window.location.search.substring(1),
				sURLVariables = sPageURL.split('&'),
				sParameterName,
				i;

		for (i = 0; i < sURLVariables.length; i++) {
				sParameterName = sURLVariables[i].split('=');

				if (sParameterName[0] === sParam) {
						return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
				}
		}
	};

	if (window.location.href.indexOf('country=') > 0) {
		let mapCountryUrl = getUrlParameter('country');
		$(".js-example-basic-single-countries").val(mapCountryUrl).trigger('change');

		$('.world_map_svg').addClass("hide");
		$('.selector_map').addClass("crops_country_map");
		$('.selector_map').load('img/maps/country_map_'+mapCountryUrl+'.svg');
		
		setTimeout( function () {
		$('.selector_map .region').each(function(){
			let countryRegion = $(this).data('country-region');
			jQuery('<option/>', {
				value: countryRegion,
				html: countryRegion
			}).appendTo('.country_region_select');

			var seen = {};
				$('.country_region_select option').each(function() {
						var txt = $(this).text();
						if (seen[txt])
								$(this).remove();
						else
								seen[txt] = true;
				});

			});
		}, 200);
	}

	let europe = {
		"":"",
		"ukraine":"ukraine",
		"austria":"austria",
		"belgium":"belgium",
		"bulgaria":"bulgaria",
		"croatia":"croatia",
		"czech-republic":"Czech Republic",
		"denmark":"denmark",
		"estonia":"estonia",
		"finland":"finland",
		"france":"france",
		"germany":"germany",
		"greece":"greece",
		"hungary":"hungary",
		"ireland":"ireland",
		"italy":"italy",
		"latvia":"latvia",
		"lithuania":"lithuania",
		"moldova":"moldova",
		"netherlands":"netherlands",
		"norway":"norway",
		"poland":"poland",
		"united-kingdom":"United Kingdom",
		"sweden":"sweden",
		"spain":"spain",
		"slovakia":"slovakia",
		"serbia":"serbia",
		"russia":"russia",
		"romania":"romania",
		"portugal":"portugal",
	};
	let asia = {
		"":"",
		"bangladesh":"bangladesh",
		"brunei":"brunei",
		"cambodia":"cambodia",
		"china":"china",
		"east-timor":"East timor",
		"india":"india",
		"indonesia":"indonesia",
		"vietnam":"vietnam",
		"turkey":"turkey",
		"thailand":"thailand",
		"sri-lanka":"Sri Lanka",
		"korea":"korea",
		"singapore":"singapore",
		"philippines":"philippines",
		"pakistan":"pakistan",
		"myanmar":"myanmar",
		"laos":"laos",
		"kazakhstan":"kazakhstan",
		"japan":"japan",
	};
	let south_america = {
		"":"",
		"argentina":"argentina",
		"bolivia":"bolivia",
		"brazil":"brazil",
		"chile":"chile",
		"colombia":"colombia",
		"ecuador":"ecuador",
		"paraguay":"paraguay",
		"peru":"peru",
	};
	let north_america = {
		"":"",
		"canada":"canada",
		"costa-rica":"Costa Rica",
		"mexico":"mexico",
		"united-states-of-america":"USA",
	};
	let africa = {
		"egypt":"egypt",
		"ghana":"ghana",
		"ivory-coast":"Ivory Coast",
		"kenya":"kenya",
		"malawi":"malawi",
		"mali":"mali",
		"morocco":"morocco",
		"nigeria":"nigeria",
		"south-africa":"South Africa",
		"sudan":"sudan",
		"tanzania":"tanzania",
		"zambia":"zambia",
	}
	let oceania = {
		"":"",
		"australia":"australia",
		"new-zealand":"New Zeland",
	}

	$(".state_select").change(function() {
			$('.world_map_country').removeClass("active_country");

			$('.js-example-basic-single-countries').empty();

			let selectState = $(this).val();

			for(var key in eval(selectState)){
				jQuery('<option/>', {
					value: key,
					html: eval(selectState)[key]
				}).appendTo('.js-example-basic-single-countries');
			}
	});


	$('.sign_in_cropspopup').click(function() {
		$('.download_block').addClass("active");
		$('.signin_to_download').addClass("hide");
		return false;
	});


	$('.green_crops_tile_item').click(function() {
		setTimeout(function(){
			$('.featured_varieties_slider').slick('refresh');
		}, 50);
	});

	$(document).on('click', 'a[href^="#"]', function (event) {
			event.preventDefault();
	});


	$(document).on('click', '.change_link', function() {
			$(this).text("save");
			$(this).addClass("change_save");
			let changeTarget = $(this).data('change-target');
			$('.input_' + changeTarget).prop( "disabled", false );
			$('.input_' + changeTarget).focus();
			$(this).removeClass("change_link");
		return false;
	});

	$(document).on('click', '.change_save', function() {
			$(this).text("change");
			$(this).addClass("change_link");
			let changeTarget = $(this).data('change-target');
			$('.input_' + changeTarget).prop( "disabled", true );
			$(this).removeClass("change_save");
		return false;
	});

	$('#photo_input_file').change(function () {
		var file = this.files[0];
		var reader = new FileReader();
		reader.onloadend = function () {
			$('.pf_foto').css('background-image', 'url("' + reader.result + '")');
		}
		if (file) {
				reader.readAsDataURL(file);
		} else {
		}
	});

});
