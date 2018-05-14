$(function() {


	//E-mail Ajax Send
    $("form").submit(function() { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function() {

            $.fancybox.close();

            $(".error-mes").hide();

            var dlg = $("#dlgbox-success");
            dlg.fadeIn(150);

            var winWidth = window.innerWidth;
            var dialogWidth = $("#dlgbox-success").outerWidth();

            var leftstep = (winWidth/2) - dialogWidth/2 - 20 + "px";
            dlg.css("left", leftstep);
            dlg.css("top", "35%");
            $(".body-overlay").remove();
            $("body").append("<div class='body-overlay'></div>");
            $(".body-overlay").fadeIn(150);

            setTimeout(function() {
                // Done Functions
                dlg.fadeOut(150);
                $(".body-overlay").fadeOut(150);
                th.trigger("reset");
            }, 4500);
        }).fail( function(){
            $(".error-mes").text("На сервере произошла ошибка!").show();
        });
        return false;
    });

	$(".match-height").matchHeight();
	$(".img-match").matchHeight();
	$(".price-slide-item").matchHeight();
	$(".text-item").matchHeight();


	$(".fancybox").fancybox();

	var owl = $('.tsm-slider');
	owl.owlCarousel({
		items: 1,
		loop: true,
		nav: true
	});

	var owl = $('.price-slider');
	owl.owlCarousel({
		items: 4,
		loop: true,
		nav: true,
		margin: 20
	});

});
