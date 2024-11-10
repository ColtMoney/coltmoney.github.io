Dropzone.autoDiscover = false;
var $ = jQuery.noConflict();

$(function () {
    $(".m-search-form .search-icon").on("click", function () {
        $(this).parent().toggleClass("active");
    });

    $(document).on("mouseup", function (e) {

        var target = e.target;
        var searchBtn = $(".m-search-form .search-icon");
        var searchForm = $(".m-search-form");

        if (!searchBtn.is(target) && searchBtn.has(target).length === 0 && !searchForm.is(target) && searchForm.has(target).length === 0) {
            searchForm.removeClass("active");
        }

    });

    $(".m-action-item.chat-select").on("click", function (e) {
        e.preventDefault();
        $(this).hide();
        $(".message-item").addClass("checkbox-active");
        $(".m-action-item.delete-chat").hide();
        $(".m-action-item.m-item-delete, .m-action-item.m-select-all").addClass("active");
    });

    $(document).on("click", ".chat-container .m-select-all", function (e) {
        e.preventDefault();
        var checkboxes = $(this).closest('.chat-container').find(':checkbox');
        checkboxes.each( function () {
            this.checked = "checked";
        });
    });

    $('.main_slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        customPaging: function (slider, i) {
            return '<button class="slider_dot"></button>';
        },
        arrows: false,
    });
    var ads_images = [];
    let acceptedFileTypes = "image/*";
    let fileList = new Array;
    let i = 0;
    $("#my-awesome-dropzone").dropzone({
        addRemoveLinks: true,
        maxFiles: 5,
        dictMaxFilesExceeded: "Maximum upload limit reached",
        acceptedFiles: acceptedFileTypes,
        dictInvalidFileType: "upload only JPG/PNG",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        init: function () {
            $(this.element).addClass("dropzone");

            this.on("success", function (file, serverFile) {
                fileList[i] = {
                    "serverFileName": serverFile.name,
                    "fileName": file.name,
                    "fileId": i
                };
                ads_images.push(serverFile.name);
                // You can add 10 more photos for free TEXT
                let youCanAddCount = (fileList.length) ? 5 - fileList.length : 0;
                $('.you_can_ add_text span').text(youCanAddCount);

                $('.dz-message').show();
                i += 1;
            });
            this.on("removedfile", function (file) {
                let rmvFile = "";
                for (let f = 0; f < fileList.length; f++) {
                    if (fileList[f].fileName == file.name) {
                        rmvFile = fileList[f].serverFileName;
                    }
                }

                if (rmvFile) {
                    $.ajax({
                        url: '/delete-image', //your php file path to remove specified image
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            filenamenew: rmvFile,
                            type: 'delete',
                        },
                        success: function (data) {
                            ads_images.remove(data.name)
                        }
                    });
                }
            });

        }
    });

    Array.prototype.remove = function(value) {
        var idx = this.indexOf(value);
        if (idx != -1) {
            return this.splice(idx, 1);
        }
        return false;
    }

    $(".input_file_btn").click(function () {
        let targetForm = $(this).data("target-form");
        $("#" + targetForm).click();
    });

    $('.select_two_select').select2();

    $(".textareat_limited").on('keyup', function (event) {
        let currentString = $(".textareat_limited").val()
        $(".textareat_limit_number span").text(currentString.length);
    });

    $(".close_notif_popup").click(function () {
        $(this).closest('.notification_popup').remove();
    });

    $(document).on('click', '.my_items_dropdown_list span', function () {
        let targetData = $(this).data('items-target');
        $('.dropdown_tabs_title span').appendTo($('.my_items_dropdown_list'));
        $(this).prependTo($('.dropdown_tabs_title'));

        $('.my_items_controls_content').removeClass('active');
        $('.my_items_controls_content.' + targetData).addClass('active');

        $('.my_items_cards').removeClass('active');
        $('.my_items_cards.' + targetData).addClass('active');
    });

    let itemsControlsView = false;
    $(document).on('click', '.edit_items_btn', function (e) {
        removeItemBtn = '<button class="item_remove_btn"></button>';
        firstListBtn = '<button class="first_list_btn" data-fancybox data-src="#first_listed_popup" href="javascript:;"></button>';

        if (!itemsControlsView) {
            $(".card-item .img-wrap").append(removeItemBtn);
            $(".card-item .img-wrap").append(firstListBtn);
        } else {
            $(".item_remove_btn").remove();
            $(".first_list_btn").remove();
        }

        itemsControlsView = !itemsControlsView;
        $(this).toggleClass('active');
    });

    $(document).on('click', '.item_remove_btn', function (e) {
        $(this).closest('.card-item').remove();
        return false;
    });

    $(document).on('click', '.close_modal_btn', function (e) {
        $.fancybox.close();
        return false;
    });

    let firstListedBtnThis;
    $(document).on('click', '.first_list_btn', function (e) {
        firstListedBtnThis = $(this);
    });
    $(document).on('click', '.first_listed_confirm_btn', function (e) {
        firstListedBtnThis.addClass('active');
        $.fancybox.close();
        return false;
    });

    $(document).on('click', '.messages_sell_items_next', function (e) {
        $.fancybox.close();
        $.fancybox.open({
            src: '#messages_sell_items_confirm_popup',
            type: 'inline'
        });
        return false;
    });

    $('#uploadButton').on('click', function () {
        $('#verborgen_file').click();
    });

    $("#my-awesome-dropzone2").dropzone({
        url: "/store-media",
        maxFiles: 1,
        init: function () {
            this.on("success", function (file, serverFileName) {
                let bgData = file.dataURL;
                $('.icon_profile').css('background-image', 'url("' + bgData + '")');
                $('.icon_profile').addClass("bg_changed");
                $('#file_input_two').val(serverFileName.name);
            });
        }
    });

    $('.mob_menu_btn').on('click', function () {
        $(this).toggleClass("active");
        $('.header_nav').toggleClass("active");
        $('body').toggleClass("menu_open");
    });

    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function (event) {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            $('.header').addClass('hiden_height');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('.header').removeClass('hiden_height');
            }
        }

        lastScrollTop = st;
    }

    $(window).scroll(function() {
        if ($(this).scrollTop()>300) {
          $('.scroll_to_top').addClass('active');
        } else {
          $('.scroll_to_top').removeClass('active');
        }
    });
    
    $('.scroll_to_top').click(function () {

        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });

    var uaTwo = window.navigator.userAgent;
    var isIETwo = /MSIE|Trident/.test(uaTwo);

    if (isIETwo) {
        document.documentElement.classList.add('ie');
    }

    $('#form-sell-button').click( function (e) {
        e.preventDefault();
        $("#ads-images").val(ads_images);
        $('#form-sell').submit();

    });

    $('.credit_pay_btn').click( function () {
        $.fancybox.close();

        $.fancybox.open({
            src  : '#card_submit_popup',
            type : 'inline',
        });
        return false;
    });

    $('.title_block').click(function () {
        $(this).closest('.accordion_item').toggleClass('active_block').find('.info').slideToggle();
    });
});