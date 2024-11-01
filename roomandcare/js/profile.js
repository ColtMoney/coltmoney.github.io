$(function () {
    var $form = $('#settingsForm');

    $('.edit-control').unbind('click');

    $(".control-settings").on("click", function (e) {
        e.preventDefault()
        const currentSetting = $(this).closest(".setting-item");
        let flag = false;
        let self = this;

        if ($(self).text() === "Save") {

            $.ajax({
                type: 'post',
                url: $form.attr('action'),
                data: $form.serialize(),
                async: false,
                success: function (response) {
                    if (response.success) {
                        if(response.message == 'verify_email') {
                            $('#verify_email_address').text(response.data)

                            $.fancybox.close();
                            $.fancybox.open($('#verify_email'));

                            return false;
                        }
                        else if(response.message == 'verify_phone') {
                            $('.verify_phone_number > input').val(response.data)
                            $('.verify_phone_number span').text(response.data)
                            $.fancybox.close();
                            $.fancybox.open($('#verify_phone'));


                            return false;
                        } else {
                            swal.fire('Success!', 'Item added successfully.', 'success');

                            flag = true;
                            $(self).text("Edit");
                            currentSetting.find(".fileuploader .wrap_upload").addClass("disabled");
                        }

                        $('.invalid-feedback').hide();
                    }
                },
                error: function (jqXHR) {
                    let response = jqXHR.responseJSON;

                    $.each(response.errors, function (field, value) {
                        $('.invalid-feedback[data-field="' + field + '"]').text(value[0]).show();
                    });

                    $("html, body").animate({scrollTop: $(".invalid-feedback:visible").first().offset().top - 100}, "fast");
                }
            });
        } else {
            $(this).text("Save");
            currentSetting.find(".fileuploader .wrap_upload").removeClass("disabled");

        }
        currentSetting.find("input").prop("disabled", flag);
    });

    var $formPaymentCard = $('#save_payment_card');
    $(".payment_card_submit").on("click", function (e) {
        e.preventDefault()
        $.ajax({
            type: 'post',
            url: $formPaymentCard.attr('action'),
            data: $formPaymentCard.serialize(),
            async: false,
            success: function (response) {
                if (response.success) {
                    $.fancybox.close();
                    $('.invalid-feedback').hide();

                    document.location.reload(true);
                }
            },
            error: function (jqXHR) {
                let response = jqXHR.responseJSON;
                $('.invalid-feedback').hide();
                $.each(response.errors, function (field, value) {
                    $('.invalid-feedback[data-field="' + field + '"]').text(value[0]).show();
                });

                $("html, body").animate({scrollTop: $(".invalid-feedback:visible").first().offset().top - 100}, "fast");
            }
        });
    });
    $('.add-payment').on('click', function () {
        $('#save_payment_card').find('.title').text('Add your card')
        $('#save_payment_card').find('input[name="card_number"]').val('')
        $('#save_payment_card').find('input[name="name_on_card"]').val('')
        $('#save_payment_card').find('input[name="card_expires_mm"]').val('')
        $('#save_payment_card').find('input[name="card_expires_yy"]').val('')
        $('#save_payment_card').find('input[name="card_cvv"]').val('')
        $('.invalid-feedback').hide();
        if( $('#edit_catd').length )
        {
            $('#edit_catd').remove()
        }
        $.fancybox.open($('#payment_methods'));

    })

    $('.edit_payment_card').on('click', function () {
        $('#save_payment_card').find('.title').text('Edit your card')
        $('#save_payment_card').find('input[name="card_number"]').val($(this).data('card_number'))
        $('#save_payment_card').find('input[name="name_on_card"]').val($(this).data('name_on_card'))
        $('#save_payment_card').find('input[name="card_expires_mm"]').val($(this).data('card_expires_mm'))
        $('#save_payment_card').find('input[name="card_expires_yy"]').val($(this).data('card_expires_yy'))
        $('#save_payment_card').find('input[name="card_cvv"]').val($(this).data('card_cvv'))
        $('.invalid-feedback').hide();

        if( $('#edit_catd').length )
        {
            $('#edit_catd').remove()
        }

        $('<input>').attr({
            type: 'hidden',
            id: 'edit_catd',
            name: 'id_card',
            value: $(this).data('id')
        }).appendTo('#save_payment_card');

        $.fancybox.open($('#payment_methods'));
    })

    $('.delete_payment_card').on('click', function () {
        $('#save_payment_card').find('input[name="card_cvv"]').val($(this).data('id'))

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cancel',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                let url = $(this).data('url');

                $.ajax({
                    type: 'delete',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    success: function(response) {
                        location.reload();
                    },
                    error: function () {
                        Swal.fire('Error!', '', 'error')
                    }
                });
            }
        })

    })

    var $formVerifyEmail = $('#verify_email_form');
    $(".verif_email_button").on("click", function (e) {
        e.preventDefault()
        $.ajax({
            type: 'post',
            url: $formVerifyEmail.attr('action'),
            data: $formVerifyEmail.serialize() + "&email=" + $('#verify_email_address').text(),
            async: false,
            success: function (response) {
                if (response.success) {
                    $.fancybox.close();
                    $('.invalid-feedback').hide();
                    $('.valid-feedback[data-field="code"]').text(response.message).show();
                    document.location.reload(true);
                }else {
                    $('.invalid-feedback[data-field="code"]').text(response.message).show();
                 }
            },
            error: function (jqXHR) {
                let response = jqXHR.responseJSON;
                $('.invalid-feedback').hide();
                $.each(response.errors, function (field, value) {
                    $('.invalid-feedback[data-field="' + field + '"]').text(value[0]).show();
                });
            }
        });
    });

    var $formVerifyPhone = $('#verify_phone_form');
    $(document).on("click", '.send_phone_code', function (e) {
        e.preventDefault()
        $.ajax({
            type: 'post',
            url: $formVerifyPhone.attr('action'),
            data: $formVerifyPhone.serialize() + "&phone=" + $('.phone-number').val(),
            async: false,
            success: function (response) {
                if (response.success) {
                    $('.confirm_phone').show();
                    $('.send_phone_code').text('Confirm');
                    $('.send_phone_code').addClass('verify_phone_confirm');
                    $('.send_phone_code').removeClass('send_phone_code');
                }
            },
            error: function (jqXHR) {
                let response = jqXHR.responseJSON;
                $('.invalid-feedback').hide();
                $.each(response.errors, function (field, value) {
                    $('.invalid-feedback[data-field="' + field + '"]').text(value[0]).show();
                });
            }
        });
    });

    var $phoneFormConfirm = $('#phone_form_confirm');
    $(document).on("click", '.verify_phone_confirm', function (e) {
        e.preventDefault()
        $.ajax({
            type: 'post',
            url: $phoneFormConfirm.attr('action'),
            data: $phoneFormConfirm.serialize() + "&phone=" + $('.phone-number').val(),
            async: false,
            success: function (response) {
                if (response.success) {
                    $.fancybox.close();
                    $('.invalid-feedback').hide();
                    document.location.reload(true);
                }else {
                    $('.invalid-feedback[data-field="code_phone"]').text(response.message).show();
                }
            },
            error: function (jqXHR) {
                let response = jqXHR.responseJSON;
                $('.invalid-feedback').hide();
                $.each(response.errors, function (field, value) {
                    $('.invalid-feedback[data-field="' + field + '"]').text(value[0]).show();
                });
            }
        });
    });

    $(".view_receipt").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        iframe : {
            preload: false
        }
    });
});
