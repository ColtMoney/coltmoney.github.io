$(function () {

    if ($('#zdrop').length) {

        var previewNode = document.querySelector("#zdrop-template");
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML;
        previewNode.parentNode.removeChild(previewNode);

        $("#zdrop").dropzone({
            url: 'upload.php',
            maxFiles: 1,
            maxFilesize: 30,
            thumbnailWidth: 188,
            thumbnailHeight: 188,
            previewTemplate: previewTemplate,
            previewsContainer: "#previews",
            clickable: "#upload-label",
            init: function () {
                // Create and Display Mock File
                var mockFile = {
                    name: "avatar1.jpg",
                    size: 30,
                    url: 'img/s-photo.jpg'
                };
                this.options.addedfile.call(this, mockFile);
                this.options.thumbnail.call(this, mockFile, mockFile.url);

                // Register it
                this.files = [mockFile];
                this.on('success', function () {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });

                this.on("maxfilesexceeded", function (file) {
                    this.removeAllFiles();
                    this.addFile(file);
                })
            }
        });
    }

    $(".edit-control").on("click", function () {
        const currentSetting = $(this).closest(".setting-item");
        let flag = false;
        if ($(this).text() === "Save") {
            flag = true;
            $(this).text("Edit");
            currentSetting.find(".fileuploader .wrap_upload").addClass("disabled");
        } else {
            $(this).text("Save");
            currentSetting.find(".fileuploader .wrap_upload").removeClass("disabled");
        }
        currentSetting.find("input").prop("disabled", flag);
    });


    $(".verify-new-email").on("click", function (e) {
        const $this = $(this).closest(".window");
        const newEmail = $this.find(".new-email").val();
        const retypeNewEmail = $this.find(".retype-new-email").val();
        console.log(newEmail);
        console.log(retypeNewEmail);
        if (!newEmail.length || !retypeNewEmail.length || newEmail !== retypeNewEmail) {
            e.preventDefault();
        } else {
            $.fancybox.close()
            return true
        }
    });

    // $(".save-login-email").on("click", function () {
    //     const $this = $(this).closest(".window");
    //     const newEmail = $this.find(".new-email").val();
    //     const retypeNewEmail = $this.find(".retype-new-email").val();
    //     console.log(newEmail);
    //     console.log(retypeNewEmail);
    //     if (newEmail.length && retypeNewEmail.length) {
    //         if (newEmail === retypeNewEmail) {
    //             $(".form-control.login-email").val(newEmail);
    //             $this.find(".error-message").removeClass("show").addClass("hide");
    //             $.fancybox.close();
    //         } else {
    //             $this.find(".error-message").removeClass("hide").addClass("show");
    //         }
    //     }
    // });

    $(".edit-control-item").on("click", function () {
        const currentItem = $(this).closest(".form-group");
        let flag = false;
        if ($(this).text() === "Save") {
            flag = true;
            $(this).text("Edit");
        } else {
            $(this).text("Save");
        }
        currentItem.find("input").prop("disabled", flag);
    });

    if ($(".card-number").length) {
        $(".card-number").mask("9999 9999 9999 9999");
    }

    if ($(".card-expires").length) {
        $(".card-expires").mask("99/99");
    }

    if ($(".phone-number").length) {
        $(".phone-number").mask("(999) 999-9999");
    }

    if ($(".card-ccv").length) {
        $(".card-ccv").mask("999");
    }

    $(".room-slider").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<a href="#" class="slider-arrow arrow-prev"></a>',
        nextArrow: '<a href="#" class="slider-arrow arrow-next"></a>',
        dots: true,
        customPaging: function (slider, i) {
            return '<span class="slider-dot"></span>';
        }
    });

    $(".room-slider-gallery").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<a href="#" class="slider-arrow arrow-prev"></a>',
        nextArrow: '<a href="#" class="slider-arrow arrow-next"></a>',
        dots: false
    });

    $(".room-slider-custom").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        customPaging: function (slider, i) {
            return '<span class="slider-dot"></span>';
        }
    });

    $(".tab-item").on("click", function () {
        const idx = $(this).index();

        $(".tab-content-item").removeClass("active");
        $(".tab-item").removeClass("active");
        $(this).addClass("active");
        $(".tab-content-item").eq(idx).addClass("active");
    });

    $(".accordion-title").on("click", function () {
        const accordionContent = $(this).closest(".accordion-item").find(".accordion-content");
        const accordionItem = $(this).closest(".accordion-item");
        if (accordionItem.hasClass("active")) {
            accordionItem.removeClass("active");
            accordionContent.slideUp(300);
        } else {
            $(".accordion-item").removeClass("active");
            $(".accordion-content").slideUp(300);
            accordionItem.addClass("active");
            accordionContent.slideDown(300);
        }

    });

    if ($(".datepicker").length) {
        $(".datepicker").datepicker();
    }

    var stepsSlider = document.getElementById('steps-slider');

    if (stepsSlider) {
        noUiSlider.create(stepsSlider, {
            start: [0, 10000],
            connect: true,
            tooltips: false,
            format: wNumb({
                decimals: 0,
                suffix: '$'
            }),
            range: {
                'min': 0,
                'max': 10000
            }
        });

        var input0 = document.getElementById('input-with-keypress-0');
        var input1 = document.getElementById('input-with-keypress-1');
        var inputs = [input0, input1];

        stepsSlider.noUiSlider.on('update', function (values, handle) {
            inputs[handle].value = values[handle];
        });

        inputs.forEach(function (input, handle) {
            input.addEventListener('change', function () {
                stepsSlider.noUiSlider.setHandle(handle, this.value);
            });
        });
    }


    $(".pay-action").on("click", function () {
        $(".action-lists").removeClass("active");
        $(this).parent().find(".action-lists").toggleClass("active");
    });

    $(document).on("mouseup", function (e) {
        var target = e.target;
        var toolsDropMenu = $(".action-lists");

        if (!toolsDropMenu.is(target) && toolsDropMenu.has(target).length === 0) {
            toolsDropMenu.removeClass("active");
        }
    });

    $(".room-check").on("click", function () {

        let selectedItems = [];

        $(".room-items .card-room").each(function (indx, element) {
            if ($(element).find(".room-check").is(":checked")) {
                const roomTitle = $(element).find(".top-name").text();
                const roomImagePath = $(element).find(".room-slider .img-wrap:first-child img").attr("src");
                let compareItem = $(".append .compare-item");
                compareItem.find(".compare-item-img img").attr("src", roomImagePath);
                compareItem.find(".compare-item-name").text(roomTitle);
                selectedItems.push(compareItem[0].outerHTML);
            }
        });

        if (selectedItems.length === 4) {
            $(".room-items").addClass("max-items");
            $(".room-items .card-room").each(function (indx, element) {
                if (!($(element).find(".room-check").is(":checked"))) {
                    $(element).find(".room-check").prop("disabled", true);
                }
            })
        } else {
            $(".room-items").removeClass("max-items");
            $(".card-room .room-check").prop("disabled", false);
        }

        $(".s-compare-assisted .compare-items").children().remove();
        $(".s-compare-assisted .compare-items").append(selectedItems);

        if ($(this).is(":checked")) {
            $(this).closest(".card-room").addClass("active");

        } else {
            $(this).closest(".card-room").removeClass("active");
        }

        if ($(".room-check").is(":checked")) {
            $(".s-compare-assisted").addClass("show");
        } else {
            $(".s-compare-assisted").removeClass("show");
        }

        checkSelectedItem();

    });


    function checkSelectedItem() {
        if ($(".s-favorites .room-check").is(":checked")) {
            $(".s-favorites .title-status").addClass("active");
            let count = calcRoomCheckCount();
            $(".s-title.selected-count .count").text(count);
        } else {
            $(".s-favorites .title-status").removeClass("active");
        }
    }


    $(document).on("click", ".compare-item-close", function () {
        const compareItem = $(this).closest(".compare-item");
        const compareIdx = compareItem.index();
        compareItem.remove();
        $(".room-items .card-room.active").eq(compareIdx).removeClass("active").find(".room-check").prop("checked", false);
        if ($(".compare-items").children().length === 0) {
            $(".s-compare-assisted").removeClass("show");
        }
        if ($(".compare-items").children().length < 4) {
            $(".card-room .room-check").prop("disabled", false);
            $(".room-items").removeClass("max-items");
        }
        checkSelectedItem();
    });

    $(".compare-item-remove-all").on("click", function () {
        $(".compare-box .compare-item").remove();
        $(".card-room").removeClass("active");
        $(".card-room .room-check").prop("checked", false).prop("disabled", false);
        $(".room-items").removeClass("max-items");
        $(".s-compare-assisted").removeClass("show");
        checkSelectedItem();
    });

    $(".compare-toggle").on("click", function () {
        $(".s-compare-assisted").toggleClass("active");
    });

    function calcRoomCheckCount() {
        let count = 0;
        $(".s-favorites .room-check").each(function () {
            if ($(this).is(":checked")) {
                count++;
            }
        });

        return count;
    }


    window.onload = function () {
        var tableCont = document.querySelector("#fixed-head tbody")

        function scrollHandle(e) {
            var scrollTop = this.scrollTop;
            if (scrollTop > 0) {
                document.querySelector("#fixed-head").classList.add("head-active");
            } else {
                document.querySelector("#fixed-head").classList.remove("head-active");
            }
        }

        if (tableCont) {
            tableCont.addEventListener("scroll", scrollHandle)
        }
    }


    $(".compare-btn").on("click", function () {
        $(".s-compare").addClass("active");
        $(".s-favorites, .s-discover").removeClass("active");
        $(".s-compare-assisted").removeClass("show");
    });

    $(".back-to-favorite").on("click", function () {
        $(".s-compare").removeClass("active");
        $(".s-favorites, .s-discover").addClass("active");
    });

    if ($(".datepicker").length) {
        $(".datepicker").datepicker();
    }

    $('.contact-link').click(function (e) {
        e.preventDefault();
        $('.find_your_answer').hide();
        $('.s-bottom-answer').show();
    });

    var scrollTop = 0;
    var filter = $('.checkbox-filter:not(.filter_2)');
    var filter2 = $('.checkbox-filter.filter_2');
    if (filter.length || filter2.length) {
        $(window).scroll(function (e) {
            scrollTop = window.pageYOffset;
            filter.css('top', 20 + scrollTop + 'px');
            filter2.css('top', scrollTop - 100 + 'px');
        });
    }

    $('.btn-like').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('liked');
    });

    $('.share-button').click(function (e) {
        e.preventDefault();
        $('.share-list').toggleClass('active');
    });


    $('.card-room .bottom-info .actions .action-item.fav_btn').on("click", function () {
        $(this).toggleClass('active_fav');
    });



    $('.bill_toggle_checkbox').change(function () {
        $('.bill_toggle_wrpr h3').removeClass('active');
        if (this.checked) {
            $('.bill_toggle_wrpr h3').eq(1).addClass('active');
        } else {
            $('.bill_toggle_wrpr h3').eq(0).addClass('active');
        }
    });


    if ($('.s_listing_content').length) {
        function checkWidth() {
            let imgWidth = $('.s_listing_content .listing_img').width();
            let contWidth = $('.header .container').width();
            let contOffset = $('.header .container').offset().left;

            $('.s_listing_content .inner_content_body').width((contWidth - imgWidth) + contOffset + 15);
            $('.s_listing_content .inner_footer').width((contWidth - imgWidth) + contOffset - 15);
        }

        setTimeout(function () {
            checkWidth();
        }, 100);

        $(window).resize(checkWidth);
    }

    var bussinessNames = [
        "Bussiness Name 1",
        "Bussiness Name 2",
        "Bussiness Name 3",
        "Bussiness Name 4",
        "Bussiness Name 5",
        "Bussiness Name 6",
        "Bussiness Name 7",
        "Bussiness Name 8",
        "Bussiness Name 9",
        "Bussiness Name 10"
    ];

    $('#business_input').autocomplete({
        source: bussinessNames,
        minLength: 0
    }).on('focus', function () {
        $(this).keydown();
    });

    var stateNames = [
        "State Name 1",
        "State Name 2",
        "State Name 3",
        "State Name 4",
        "State Name 5",
        "State Name 6",
        "State Name 7",
        "State Name 8",
        "State Name 9",
        "State Name 10"
    ];

    $('#state_input').autocomplete({
        source: stateNames,
        minLength: 0
    }).on('focus', function () {
        $(this).keydown();
    });

    if ($('.limited_textarea_wrpr').length) {
        $(".limited_textarea_wrpr textarea").on('keyup', function () {
            let limitTextNumber = $(".limited_textarea_wrpr textarea").attr('maxlength');
            var limitTextCount = $(".limited_textarea_wrpr textarea").val().length;

            $(".limited_textarea_wrpr .textarea_limited_number .number").text(limitTextNumber - limitTextCount);
        });
    }

    if ($('#single_dropzone').length) {
        $("#single_dropzone").dropzone({
            url: "upload.php",
            clickable: "#dz_upload_btn",
        });
    }

    if ($("#datepicker_one").length && $("#datepicker_two").length) {
        // Next Month Date
        let datepickerTwoDate = new Date();
        datepickerTwoDate.setMonth(datepickerTwoDate.getMonth() + 1, 1);


        $("#datepicker_one").datepicker();

        $("#datepicker_two").datepicker({
            defaultDate: datepickerTwoDate
        });
    }

    $('.mob_menu_btn').click(function () {
        $(this).toggleClass("active");
        $('.header_nav').toggleClass("active");
        $('body').toggleClass("menu_open");
        return false;
    });

    var isEdge = /Edge/.test(navigator.userAgent)

    if (isEdge) {
        document.documentElement.classList.add('edge');
    }

    var uaTwo = window.navigator.userAgent;
    var isIETwo = /MSIE|Trident/.test(uaTwo);

    if (isIETwo) {
        document.documentElement.classList.add('ie');
    }

    $('.fancybox_close_btn').click(function () {
        $.fancybox.close();
        return false;
    });

    $('.open_delete_buspopup').click(function () {
        $.fancybox.close();
        $.fancybox.open($('#deleteb'));

        return false;
    });

    $('.message_item_flag').click(function () {
        $(this).toggleClass("active");

        return false;
    });

    let messagesMarkedAmount = 0;

    $('.message_item_checkbox input').change(function () {
        if ($(this).prop('checked') == true) {
            messagesMarkedAmount += 1;
            $(this).closest('.message_table_item').addClass('marked');
        } else {
            messagesMarkedAmount -= 1;
            $(this).closest('.message_table_item').removeClass('marked');
        }
        messagesCheck();
    });

    function messagesCheck() {
        $('.messages_marked_amount').text(messagesMarkedAmount);
        if (messagesMarkedAmount !== 0) {
            $('.top_title_messages').removeClass('active');
            $('.top_title_actions').addClass('active');
        } else {
            $('.top_title_messages').addClass('active');
            $('.top_title_actions').removeClass('active');
        }
    }

    $('.message_table_item td:not(:nth-child(1))').click(function () {
        $('.messages_s').addClass('chat_open');

        $(this).closest('.message_table_item').addClass('this_message_chat');
        return false;
    });

    $('.close_message_btn').click(function () {
        $('.messages_s').removeClass('chat_open');

        $('.message_table_item').removeClass('this_message_chat');
        return false;
    });


    $('.verify_phone_email_btn_next').click(function () {
        $.fancybox.close();
        $.fancybox.open($('#verify_phone_email'));

        return false;
    });
    $('.almost_done_phone_email_btn').click(function () {
        $.fancybox.close();
        $.fancybox.open($('#almost_done_phone_email'));

        return false;
    });
    $('.verif_email_done_btn').click(function () {
        $.fancybox.close();
        $.fancybox.open($('#verif_email_done'));

        return false;
    });
    $('.daterangepicker_parent').datepicker({
        inline: true,
        // range: true,
        // range: true,
        language: 'en'
    });
    $('.datapicker_single_range').datepicker({
        language: 'en'
    });

    $('.datepicker_checkbox_item input').change(function () {
        if ($(this).val() == 'open_datapicker') {
            $('.single_datepicker').removeClass('datepicker_hide');
        } else {
            $('.single_datepicker').addClass('datepicker_hide');
        }
    });

    $('[data-fancybox="gallery"]').fancybox({
        thumbs: {
            autoStart: true,
            axis: 'x'
        },
    });

    $('.room_galery_right_slider').slick({
        infinite: false,
        rows: 2,
        slidesPerRow: 2,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        vertical: true,
        verticalSwiping: true,
        prevArrow: '<a href="#" class="slider_arrow arrow_prev"></a>',
        nextArrow: '<a href="#" class="slider_arrow arrow_next"></a>',
        dots: false
    });

    $('.room_galery_item img').click(function () {
        let thisSrc = $(this).attr("src");
        $('.slick-active .room_galery_item.big_item img').attr("src", thisSrc);
        $('.gallery_big_photo_expand').attr("href", thisSrc);
    });

    // $.fancybox.open({
    //     src  : '#gallery_right_photo_gallery',
    //     type : 'inline',
    //     opts : {
    //         touch: false,
    //     }
    // });

    $('#gallery_right_photo_gallery').fancybox({
        touch: false,
        toolbar: true
    });

    $(document).on('click', '.expand-all-right', function (e) {
        e.preventDefault();

        $.fancybox.open({
            src: '#gallery_right_photo_gallery',
            opts: {
                touch: false,
                toolbar: true
            }

        });

        return false;
    });

    $('.edit_phone_sendcode_btn').click(function () {
        $('.edit_phone_sendcode_btnwrpr').removeClass('active');
        $('.edit_phone_verif_code').addClass('active');

        return false;
    });

    $('.room_size input[type = radio]').on('change', function () {

        if ($(this).attr("checked") !== "checked") {
            // $(this).attr("checked", true);
            $('.input_items_wrpr.room_size input[type = text]').prop("disabled", true).css({
                'opacity': '.5',
            });
            $(this).parent().find('input[type = text]').prop("disabled", false).css({
                'opacity': '1',
            });
            $(this).parent().find('input[type = text]').focus();
            $(this).parent().find('.input_after_symbols').removeClass('disable');
        } else {
            // $(this).attr("checked", false);
            $(this).parent().find('input[type = text]').prop("disabled", true).css({
                'opacity': '.5',
            });
            $(this).parent().find('.input_after_symbols').addClass('disable');
        }

    });

    $('.payment_sources .checkbox_item input[type = checkbox], .move_in_special input[type = checkbox]').on('click', function () {

        if ($(this).attr("checked") == "checked") {
            $(this).attr("checked", false);
            $(this).parent().find('.checkbox_text_input').prop("disabled", true).css({
                'opacity': '.5',
            });
            $(this).parent().find('.checkbox_text_input').val('');

            if ($(this).hasClass('private_pay_checkbox')) {
                $('.included_in_base_price .servinc_br_row .col:nth-child(1)').removeClass('active');
            }
            if ($(this).hasClass('insurance_checkbox')) {
                $('.included_in_base_price .servinc_br_row .col:nth-child(2)').removeClass('active');
            }
            if ($(this).hasClass('medicaid_checkbox')) {
                $('.included_in_base_price .servinc_br_row .col:nth-child(3)').removeClass('active');
            }
        } else {
            $(this).attr("checked", true);
            $(this).parent().find('.checkbox_text_input').focus().prop("disabled", false).css({
                'opacity': '1',
            });
        }
    });


    $('.payment_sources .checkbox_item .checkbox_text_input').on('blur', function () {

        var val_text_clear = $(this).val();
        $(this).next().hide();
        $(this).css({
            'padding-left': '10px',
        });
        // Create our number formatter.
        var formatter = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
        });

        var val_text = $(this).val(formatter.format(val_text_clear).slice(0, -3));


        if ($(this).hasClass('private_pay_checkbox_text_input') && val_text_clear.length > 0) {
            $('.included_in_base_price .servinc_br_row .col:nth-child(1)').addClass('active');
        }

        if ($(this).hasClass('insurance_checkbox_text_input') && val_text_clear.length > 0) {
            $('.included_in_base_price .servinc_br_row .col:nth-child(2)').addClass('active');
        }

        if ($(this).hasClass('medicaid_checkbox_text_input') && val_text_clear.length > 0) {
            $('.included_in_base_price .servinc_br_row .col:nth-child(3)').addClass('active');
        }


    });




    // $('.radio_btn_container.radio_btn_container_2 input[type = text]').one('focus', function () {
    //     $(this).val('');
    // });

    // $('.radio_btn_container.radio_btn_container_2 input[type = text]').one('blur', function () {
    //     let val = $(this).val();
    //     $(this).val(val + ' sq ft')
    // });

    // $('.checkbox_item.with_text_input.with_icon_text_input input[type = text]').one('blur', function () {
    //     let val = $(this).val();
    //     $(this).val('$' + val)
    // });

    // $('.radio_btn_container.radio_btn_container_2 input[type = text]').on('keydown', function (e) {
    //     if (e.key === "Backspace") {
    //         let val = $(this).attr('value');
    //         $(this).attr('value', ' sq ft');
    //     }
    // });

    $('.radio_btn_container.radio_btn_container_2 input[type = text]').on('keyup', function (e) {
        if (/\D/g.test(this.value)) {
            this.value = this.value.replace(/\D/g, '');
        }

        $(this).closest('.input_w_after_symbols').find('.input_after_symbols').css("left", (this.value.length * 10 + 10));

    });
    $('.payment_rent input[type = text]').on('keyup', function (e) {
        if (/\D/g.test(this.value)) {
            this.value = this.value.replace(/\D/g, '');
        }
    });

    // $('.uncheck_radio input[type=radio]').on('click', function () {
    //     if ($(this).attr("checked") == "checked") {
    //         $(this).attr("checked", false);
    //         $(this).parent().find('.radio_check').addClass('no_after');
    //     } else {
    //         $(this).attr("checked", true);
    //         $(this).parent().find('.radio_check').removeClass('no_after');
    //     }
    // });

});