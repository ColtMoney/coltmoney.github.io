$(function() {

	$('.manufacturers a, .popap_btn, .popup_btn').fancybox({
		touch: false,
		autoFocus: false,
		protect: false
	});

	$("input[type=tel]").mask("+1 999 999-9999");
	$(".card_num").mask("9999 9999 9999 9999");
	$(".mm_yy").mask("99/99");
	$(".cvc").mask("999");
	$(".time_input").mask("99:99");

	var  wheihht = 220;
	$(window).scroll(function(){
		var bo = $(this).scrollTop();
		if ( bo >= wheihht) {$('.scroll_top').addClass('active')};
			if ( bo < wheihht) {$('.scroll_top').removeClass('active')};

		if ( bo >= 1) {$('.main-page header').addClass('active')};
			if ( bo < 1) {$('.main-page header').removeClass('active')};
	});

	$(".scroll_top").click(function(){
			$('html, body').animate({scrollTop: $('body').offset().top}, 1300);
	}); 

	$(".scroll_to").click(function(){
		let target = $(this).attr('href');
			$('html, body').animate({scrollTop: $(target).offset().top-90}, 1300);
			return false;
	}); 

	$(".btn_ulpload input, .file_label_sidebar input").change(function(e) {
		var file_name = e.target.files[0].name
		$(this).parent().find('.name').text(file_name);
	});

	let GoBack = function (){
			window.history.back();
			return false;
	};

	$('.only_numbers, .input_dollar').bind("change keyup input click", function() {
		if (this.value.match(/[^0-9]/g)) {
			this.value = this.value.replace(/[^0-9]/g, '');
		}
	});

	$(".step7 .btn_reg").click(function(){
		$('.append_block .add_expense_item').clone().appendTo('.add_expense');
		return false;
	}); 

	$(".summary_item .add_row").click(function(){
		let past_item = $(this).parents('.summary_item').find('.summary_form');
		$(this).parents('.summary_item').find('.append_block .summary_row').clone().appendTo(past_item);
		return false;
	}); 

	$(".btn_coppy_block").click(function(){
		$('.append_block .coppyed_block').clone().appendTo('.past_block');
		if ($(this).hasClass('btn_coppy_and_num')) {
			let block_eq = $('.past_block .block_item').length;
			$('.past_block').find('.block_item').eq(block_eq-1).find('.num_item').text(block_eq)
		}
		return false;
	}); 


	$(document).on("click", ".add_expense_item .del", function() {
		$(this).parents('.add_expense_item').remove();
		return false;
	});
	$(document).on("click", ".add_saving_item .remove_into", function() {
		$(this).parents('.add_saving_item').remove();
		return false;
	});
	$(document).on("click", ".summary_row .del", function() {
		$(this).parent().remove();
		return false;
	});



	$('.tabs_titles li, .tabs_titles_modal li').click(function(){
		$(this).parent().find('li').each(function(){
			$(this).removeClass("active");
		});
		$(this).parents('.tabs_block').find('.tab_item').each(function(){
			$(this).removeClass("active");
		});
		$(this).addClass('active');
		index_this = $(this).index();
		$(this).parents('.tabs_block').find('.tab_item').eq(index_this).addClass('active');
	});


	// main page

	var productreview_slider = new Swiper('.productreview_slider', {
		navigation: {
			loop:true,
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	$(".show_items_link").click(function(){
		$(this).find('span').slideToggle(0).parents('ul').find('.hidden').slideToggle('slow');
		return false;
	}); 

	// end main page



	// var allEditors = document.querySelectorAll('.comparison-table-wrap .compare-checkbox input');
	// for (var i = 0; i < allEditors.length; ++i) {
	//   ClassicEditor.create(allEditors[i]);
	// }

	var arr_banks = [];
	var number_check = $('.compare-checkbox input[type=checkbox]:checked').length;
	var close_btn ='';
	// вывод картинок
	function output_bank(){
		$('.selected-box-wrap .selected-item').each(function(){
			$(this).html(' ');
		});
		banks_list = $('.selected-box-wrap .selected-item')
		for (var i = 0; i < arr_banks.length; i++) {
			banks_list.eq(i).html(arr_banks[i]);
		}
	}

	$('.comparison-table-wrap .compare-checkbox input').change(function(){
		if ($(this).prop("checked")) {
			num_tr = $(this).parents('tr').index() + 1;
			number_check +=1;
			close_btn = '<div class="icon-close" data-num-tr="'+ num_tr +'"> <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="9" cy="9" r="9" fill="#C7C6D6"/> <path d="M12.4973 5.49928L5.49902 12.4976" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> <path d="M5.49879 5.49928L12.4971 12.4976" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg></div>'
			arr_banks.push($(this).parents('tr').find('.img-wrap').html() + close_btn);
			output_bank();
		}
		else {
			number_check -=1;
			arr_banks.splice(number_check, 1);
			output_bank();
		}
		if (number_check < 1) {
			$('.compare-bottom-panel').slideUp('slow');
		}
		else{
			$('.compare-bottom-panel').slideDown('slow');
		}
	});



	$('.compare-view-details').click(function(){
		$(this).toggleClass('active').find('.view-details-span').text($(this).is('.active') ? 'Hide details' : 'View details').parents('tr').next().slideToggle(0);
		//.toggleClass('active');
	})

	$(document).on("click", ".selected-item .icon-close", function() {
		number_check -=1;
		del_el = $(this).parents().index();
		arr_banks.splice(del_el, 1);
		check_num = $(this).attr('data-num-tr');
		$('.comparison-table tr').eq(check_num).find("input").prop('checked', false);
		output_bank()
		return false;
	});


	if($('.select-basic-single').length){
		$('.select-basic-single').select2({
			width: "100%"
		});
	}

	if($('.select-basic-hide-search').length){
		$('.select-basic-hide-search').select2({
			width: '100%',
			minimumResultsForSearch: Infinity
		});
	}

	
	var swiperSingleProduct = new Swiper('.single-product-slider', {
		pagination: {
			el: '.swiper-pagination',
			type: 'fraction',
		},
		navigation: {
			nextEl: '.single-button-next',
			prevEl: '.single-button-prev',
		},
	});

	var swiperDashMatchItem = new Swiper('.dash-match-items', {
		slidesPerView: 2,
		pagination: {
			el: '.swiper-pagination',
		},
		breakpoints: {
			767: {
				slidesPerView: 1
			}
		}
	});

	/*mob_menu*/
	$('.menu_mob').click(function () {
		$('.menu_mob').toggleClass('active_drop_men');
		$('.header-menu').toggleClass('active');
	});

	if($('.date-picker').length){
		$('.date-picker').datepicker();
	}

	$(".show-employment-fields").on("click", function(e){
		e.preventDefault();
		$(".employment-input-box").fadeIn();
	});


	new WOW().init();


	$(".accordion-title").click(function () {
		var blockFaq = $(this).parents(".accordion-item");
		if (!$(blockFaq).hasClass("accordion-active")) {
			$(".accordion-item").removeClass("accordion-active");
			$(".accordion-content").hide(300);
			$(blockFaq).addClass("accordion-active");
			$(blockFaq).find(".accordion-content").show(300);
		}
		else {
			$(".accordion-item").removeClass("accordion-active");
			$(".accordion-content").hide(300);
		}
	});


	$('.car-price-input').mask("$999999");

});
