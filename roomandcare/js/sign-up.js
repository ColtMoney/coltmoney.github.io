$(function () {
    $('#sendSignUpForm').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'get',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            async: false,
            beforeSend: function () {
                $('.invalid-feedback').hide();
            },
            success: function (response) {
                location.replace(response.redirect);
            },
            error: function (jqXHR) {
                let response = jqXHR.responseJSON;

                $.each(response.errors, function (field, value) {
                    $('.invalid-feedback[data-field="' + field + '"]').text(value[0]).show().css('display', 'block');
                });

                $("html, body").animate({scrollTop: $(".invalid-feedback:visible").first().closest('.form-group').offset().top - 100}, "fast");
            }
        });
    });
});
