$(function () {

    $('[data-action = room-show-more]').click(function (e) {
        e.preventDefault();

        let _this = $(this);
        let residency = _this.attr('data-residency');

        $.get('/residences/' + residency + '/rooms', function (data, status) {
            if (status === 'success') {
                _this.parents('.residency-rooms').find('[data-id = rooms]').html(data);
                _this.parent('.show_more').remove();
            }
        });
    })

    $('[data-action = list-room]').click(function (e) {
        e.preventDefault();

        let _this = $(this);
        let residency = _this.parents('.listing_box').attr('data-residency');

        $.fancybox.open({
            src: _this.attr('href'),
            type: 'inline',
            opts: {
                beforeShow: function (instance, current) {
                    $(current.src).attr('data-id', residency);
                    $(current.src).find('a[data-action="add-room"]')
                        .attr('href', '/residences/' + residency + '/rooms/create');
                }
            }
        });
    });

    $('[data-action = copy-room]').click(function (e) {
        e.preventDefault();

        let _this = $(this);
        let residency = _this.parents('[data-id]').attr('data-id');

        $.get('/residences/' + residency, function (data, status) {
            if (status === 'success') {
                $.fancybox.close();
                $.fancybox.open({
                    src: _this.attr('href'),
                    type: 'inline',
                    opts: {
                        beforeShow: function (instance, current) {
                            $(current.src).find('h3').text(data.title);
                            $(current.src).find('.copyroom_body').empty();

                            $.each(data.rooms, function (i, item) {
                                let html = '<label class="radio_btn_container">\n' +
                                    '<input type="radio" name="room" value="' + item.id + '">\n' +
                                    '<span class="radio_check"></span>' + item.name + '\n' +
                                    '</label>';

                                $(current.src).find('.copyroom_body').append(html);
                            });
                        }
                    }
                });
            }
        });
    });

    $('[data-action="duplicate-room"]').click(function (e) {
        e.preventDefault();

        let _this = $(this);
        let copyRoom = _this.parents('#copy_room').find('input[type=radio]:checked').val();

        if (copyRoom === undefined) {
            _this.parents('#copy_room').find('[data-field="copy-room"]').text('Please check room.').show();
        } else {
            $.get('/rooms/' + copyRoom + '/duplicate', function (data, status) {
                $.fancybox.close();
                if (status === 'success') {
                    Swal.fire('Success!', '', 'success').then(function () {
                        location.reload();
                    });
                } else {
                    Swal.fire('Error!', '', 'error')
                }
            })
        }
    })

    $('[data-action = delete-residency]').click(function (e) {
        e.preventDefault();

        let _this = $(this);
        let residency = _this.parents('.listing_box').attr('data-residency');
        let name = _this.parents('.listing_box').find('[data-name]').text();

        $.fancybox.open({
            src: _this.attr('href'),
            type: 'inline',
            opts: {
                beforeShow: function (instance, current) {
                    $(current.src).find('.sub_title span').text(name);
                    $(current.src).find('[data-action="delete"]').attr('href', '/residences/' + residency)
                }
            }
        });
    });

    $('#deletet a[data-action="delete"]').click(function (e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('href'),
            type: 'delete',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function () {
                location.reload();
            },
            error: function () {
                $.fancybox.close();
                $.fancybox.open($('#deleteb'));
            }
        });

    })

    $('[data-action = edit-residency]').click(function (e) {
        e.preventDefault();

        let _this = $(this);
        let residency = _this.parents('.listing_box').attr('data-residency');

        $.get('/residences/' + residency, function (data, status) {
            if (status === 'success') {
                $.fancybox.open({
                    src: _this.attr('href'),
                    type: 'inline',
                    opts: {
                        beforeShow: function (instance, current) {
                            $(current.src).find('#updateResidencyForm').attr('action', '/residences/' + residency);

                            $(current.src).find('input[name="email"]').val(data.email);
                            $(current.src).find('input[name="phone"]').val(data.phone);
                            $(current.src).find('input[name="business"]').val(data.company.name);
                        }
                    }
                });
            } else {
                Swal.fire('Error!', '', 'error')
            }
        })
    });

    $('#updateResidencyForm').submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            data: $(this).serializeArray(),
            type: 'put',
            success: function () {
                $.fancybox.close();
                Swal.fire('Success!', '', 'success').then(function () {
                    location.reload();
                });
            },
            error: function (jqXHR) {
                let response = jqXHR.responseJSON;

                $.each(response.errors, function (field, value) {
                    $('.invalid-feedback[data-field="' + field + '"]').text(value[0]).show().css('display', 'block');
                });
            }
        });
    });

});
