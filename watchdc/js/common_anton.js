$(function() {

	$('.accordion_plus_btn').click(function(){
		let popupTarget = $(this).data('popup-target');

		$('.popup_wrpr').removeClass('active');
		$('.popup_wrpr.'+popupTarget).addClass('active');

		return false;
	});

	$('.close_popup_btn').click(function(){
		$('.popup_wrpr').removeClass('active');

		return false;
	});

	$('.bell-info a').click(function(){
		$('.alerts_notifications').toggleClass('active');

		return false;
	});

	$('.alerts_notifications_close').click(function(){
		$('.alerts_notifications').removeClass('active');

		return false;
	});

});