$(function () {

    let filtersObj = {
        form: $('form[data-action="filters"]'),
        inputKeyupTimeout: 1000,
        inputs: {
            search: $('input[name="search"]'),
            address: $('input[name="address"]'),
        },
        inputsChange: {
            availability_from: $('input[name="availability_from"]'),
            availability_to: $('input[name="availability_to"]'),
        },
        selects: {
            sort: $('select[name="sort"]'),
            radius: $('select[name="radius"]'),
        },
        checkboxes: {
            roomType: $('input[name="room_type[]"]'),
            livingType: $('input[name="living_type[]"]'),
            availability: $('input[name="availability[]"]'),
            paymentSource: $('input[name="payment_source"]')
        },
        inputsTimeouts: {},
        containerAjax: $(document).find('#container'),

        init: function () {
            this.bindFormSubmit();
            this.bindInputs();
            this.bindInputsChange();
            this.bindSelects();
            this.bindCheckboxes();
        },
        bindFormSubmit: function () {
            let self = this;
            if (self.form.length && self.form.attr('action') !== '') {
                self.form.on('submit', function (e) {
                    e.preventDefault(); e.stopPropagation();

                    let otherData = '';
                    $('form[data-filter]').each(function () {
                        otherData += '&' + $(this).serialize();
                    });

                    let url = self.form.attr('action')  + '?' + self.form.serialize() + otherData;
                    // url = url.replace(/[^=&]+=(&|$)/g,"").replace(/&$/,"");

                    window.history.pushState("", "", url);

                    $.get(url, function (data, status) {
                        self.containerAjax.html(data);
                        initRoomSlider();
                        // $(document).find('.container-ajax').html(data);
                    });
                });
            }
        },
        bindInputs: function () {
            let self = this;

            for (let key in self.inputs) {
                if (!self.inputs.hasOwnProperty(key)) {
                    continue;
                }

                let $input = self.inputs[key];

                if (!$input.length) {
                    continue;
                }

                $input.on('keyup', function () {
                    self.inputsTimeouts[key] = setTimeout(function () {
                        self.form.trigger('submit');
                        clearTimeout(self.inputsTimeouts[key]);
                    }, self.inputKeyupTimeout);
                });
            }
        },
        bindInputsChange: function () {
            let self = this;

            for (let key in self.inputsChange) {
                if (!self.inputsChange.hasOwnProperty(key)) {
                    continue;
                }

                let $input = self.inputsChange[key];

                if (!$input.length) {
                    continue;
                }

                $input.on('change', function () {
                    self.inputsTimeouts[key] = setTimeout(function () {
                        self.form.trigger('submit');
                        clearTimeout(self.inputsTimeouts[key]);
                    }, self.inputKeyupTimeout);
                });
            }
        },
        bindSelects: function () {
            let self = this;

            for (let key in self.selects) {

                if (!self.selects.hasOwnProperty(key)) {
                    continue;
                }

                let $select = self.selects[key];

                if (!$select.length) {
                    continue;
                }

                $select.on('change', function () {
                    self.form.trigger('submit');
                });

            }
        },

        bindCheckboxes: function () {
            let self = this;

            for (let key in self.checkboxes) {
                if (!self.checkboxes.hasOwnProperty(key)) {
                    continue;
                }

                let $checkbox = self.checkboxes[key];

                if (!$checkbox.length) {
                    continue;
                }

                $checkbox.on('change', function () {
                    self.form.trigger('submit');
                });
            }
        }
    };

    if (filtersObj.form.length > 0) {
        filtersObj.init();
    }


    const paginationLinksSelector = '.pagination li a';
    const $paginationContainer =  $('#container');

    const hasPaginationLinks  = $(paginationLinksSelector).length;
    const hasPaginationContainer = $paginationContainer.length;

    if (hasPaginationContainer && hasPaginationLinks) {

        $(document).on('click', paginationLinksSelector, function (e) {
            e.preventDefault(); e.stopPropagation();

            let href = $(this).attr('href');

            const url = new URL(href);
            const urlParams = new URLSearchParams(url.search);


            if (href !== '#') {
                window.history.pushState("", "", href);

                $.get(href, function (data, status) {
                    $paginationContainer.html(data);
                    initRoomSlider();

                    $('input[name="page"]').val(urlParams.get('page'));
                });
            }
        });

    }

    function initRoomSlider() {
        if ($(".room-slider").length) {
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
        }
    }
});

