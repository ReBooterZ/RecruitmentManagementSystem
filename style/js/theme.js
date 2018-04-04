/*------------------------------------------------------------------
[Master JS Script]

Project Name: Coinz - Crypto Currency HTML Template
Version: 1.0.0
Author: Codeboxr
Website: https://codeboxr.com/product/coinz-crypto-currency-html-template/
Last Update: 27.02.2018
-------------------------------------------------------------------*/

(function ($) {

    "use strict";

    /**
     * get cookie value by name
     *
     * @param cname
     * @returns {*}
     */
    function getCookie(cname) {
        var cookie_value = '';
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return JSON.parse(c.substring(name.length, c.length));
            }
        }
        return "";
    }

    /**
     * Set cookie value
     *
     * @param name
     * @param value
     * @param days
     */
    function setCookie(name, value, days) {
        var expires;

        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "";
        }
        document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(JSON.stringify(value)) + expires + "; path=/";
    }

    /**
     * PHP compatible number_format function in js
     *
     * @param number
     * @param decimals
     * @param decPoint
     * @param thousandsSep
     * @returns {string}
     */
    function cbx_number_format(number, decimals, decPoint, thousandsSep) { // eslint-disable-line camelcase
        //  discuss at: http://locutus.io/php/number_format/
        // original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
        // improved by: Kevin van Zonneveld (http://kvz.io)
        // improved by: davook
        // improved by: Brett Zamir (http://brett-zamir.me)
        // improved by: Brett Zamir (http://brett-zamir.me)
        // improved by: Theriault (https://github.com/Theriault)
        // improved by: Kevin van Zonneveld (http://kvz.io)
        // bugfixed by: Michael White (http://getsprink.com)
        // bugfixed by: Benjamin Lupton
        // bugfixed by: Allan Jensen (http://www.winternet.no)
        // bugfixed by: Howard Yeend
        // bugfixed by: Diogo Resende
        // bugfixed by: Rival
        // bugfixed by: Brett Zamir (http://brett-zamir.me)
        //  revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
        //  revised by: Luke Smith (http://lucassmith.name)
        //    input by: Kheang Hok Chin (http://www.distantia.ca/)
        //    input by: Jay Klehr
        //    input by: Amir Habibi (http://www.residence-mixte.com/)
        //    input by: Amirouche
        //   example 1: number_format(1234.56)
        //   returns 1: '1,235'
        //   example 2: number_format(1234.56, 2, ',', ' ')
        //   returns 2: '1 234,56'
        //   example 3: number_format(1234.5678, 2, '.', '')
        //   returns 3: '1234.57'
        //   example 4: number_format(67, 2, ',', '.')
        //   returns 4: '67,00'
        //   example 5: number_format(1000)
        //   returns 5: '1,000'
        //   example 6: number_format(67.311, 2)
        //   returns 6: '67.31'
        //   example 7: number_format(1000.55, 1)
        //   returns 7: '1,000.6'
        //   example 8: number_format(67000, 5, ',', '.')
        //   returns 8: '67.000,00000'
        //   example 9: number_format(0.9, 0)
        //   returns 9: '1'
        //  example 10: number_format('1.20', 2)
        //  returns 10: '1.20'
        //  example 11: number_format('1.20', 4)
        //  returns 11: '1.2000'
        //  example 12: number_format('1.2000', 3)
        //  returns 12: '1.200'
        //  example 13: number_format('1 000,50', 2, '.', ' ')
        //  returns 13: '100 050.00'
        //  example 14: number_format(1e-8, 8, '.', '')
        //  returns 14: '0.00000001'
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
        var n = !isFinite(+number) ? 0 : +number
        var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
        var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
        var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
        var s = ''
        var toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec)
            return '' + (Math.round(n * k) / k)
                .toFixed(prec)
        }
        // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || ''
            s[1] += new Array(prec - s[1].length + 1).join('0')
        }
        return s.join(dec)
    }

    /**
     * Convert currency from crypto to physical currency
     *
     * @param $currency_rate
     * @param $digital_currency
     * @param $physical_currency
     * @param $dc_amount
     * @param $pc_amount
     * @param $api
     * @param $ instant of jQuery
     */
    function currency_convert($currency_rate, $digital_currency, $physical_currency, $dc_amount, $pc_amount, $api, $) {
        var amount = parseFloat($dc_amount.val());
        var target_dc = $digital_currency.find("option:selected").val();
        var target_pc = $physical_currency.find("option:selected").val();
        var rate = '';


        if (amount > 0) {

            var currency_index = target_dc + '_' + target_pc;
            if ($currency_rate.hasOwnProperty(currency_index)) {
                rate = $currency_rate[currency_index];

                //set the rate value
                $pc_amount.val(cbx_number_format(rate * amount, 2));
            } else {
                $.get("https://www.alphavantage.co/query?function=CURRENCY_EXCHANGE_RATE&from_currency=" + target_dc + "&to_currency=" + target_pc + "&apikey=" + $api, function (data, status) {

                    rate = data["Realtime Currency Exchange Rate"]["5. Exchange Rate"];

                    $currency_rate[currency_index] = rate;

                    //set the cookie
                    setCookie('currency_rate', $currency_rate, .02);

                    //set the rate value
                    $pc_amount.val(cbx_number_format(rate * amount, 2));
                });
            }

        }
    }

    jQuery(document).ready(function ($) {

        //sticky header
        $(window).on('scroll', function () {
            var sticky = $('#cbx-header'),
                scroll = $(window).scrollTop();

            if (scroll >= 50) sticky.addClass('scrolled');
            else sticky.removeClass('scrolled');
        });
        //end sticky header

        // cbx-banner-wrapper start
        var banner_height = $(".cbx-banner-wrapper");

        banner_height.css("min-height", function () {
            return $(this).find(".cbx-banner-inner-wrapper").outerHeight();
        });
        // cbx-banner-wrapper end

        //review-slider Start
        $("#review-slider").owlCarousel({
            center: true,
            loop: true,
            items: 3,
            autoplay: true,
            margin: 20,
            dots: false,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            autoPlay: 100,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });

        $("#review-slider-2").owlCarousel({
            center: true,
            loop: true,
            items: 1,
            autoplay: true,
            margin: 20,
            dots: false,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            autoPlay: 100,
            responsiveClass: true,

        });
        //review-slider End

        //client-slider Start
        $("#client-slider").owlCarousel({
            loop: true,
            items: 6,
            autoplay: true,
            margin: 30,
            dots: false,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            autoPlay: 100,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2
                },
                480: {
                    items: 3
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        });
        //client-slider End

        //smooth scrolling
        //find the window width and if greater than tablet
        var czwindowsize = $(window).width();
        var czwindowsize_break = 768;
        var czwindowsize_grtipad = (czwindowsize >= czwindowsize_break ) ? true : false;  //if desktop or greater

        $('.gotome').smoothScroll(
            {
                speed: 1000,
                //preventDefault: false,
                beforeScroll: function () {
                    //if in tablet or less mode then hide the dropdown on click of item
                    if (czwindowsize_grtipad == false) {
                        $('.navbar-toggle').trigger('click');
                    }
                }
            }
        );
        //end smooth scrolling

        //Start Contact Form Validation And Ajax Submission

        var $contactForm = $('form#cbx-contact-form');

        $contactForm.validate({
            submitHandler: function (form) {
                var $contactForm = $(form);
                $.ajax({
                    url: cbx_path + '/php/contact.php',
                    type: 'post',
                    data: $contactForm.serialize() + '&action=cbx_contact_us',
                    beforeSubmit: function (argument) {
                        // body...
                    },
                    success: function (ajaxResponse) {
                        try {
                            var ajaxResponse = $.parseJSON(ajaxResponse);
                            if (ajaxResponse.error) {
                                //for field error
                                $.each(ajaxResponse.error_field, function (i) {
                                    $('label#' + ajaxResponse.error_field[i] + '-error').text(ajaxResponse.message[ajaxResponse.error_field[i]]);
                                });
                            } else if (ajaxResponse.successmessage) {

                                $('#cbx-formalert').addClass("alert alert alert-success").html(ajaxResponse.successmessage);
                                $contactForm[0].reset();
                            }
                        } catch (e) {
                        }

                        $contactForm.reset();
                    },
                    error: function (argument) {
                        // body...
                        $contactForm.reset();
                    }
                });

                return false;

            },

            rules: {
                'cbxname': {
                    required: true
                },
                'cbxemail': {
                    required: true
                },
                'cbxmessage': {
                    required: true
                }
            }
        });

        //End Contact Form Validation And Ajax Submission

        // chart js
        var src = $("#statistics-review-chart");
        if (src.length > 0) {
            var srcChart = new Chart(src, {
                type: 'line',
                data: {
                    labels: ["Mon", "Tue", "Wed", "Thu", "Fri"],
                    datasets: [{
                        label: 'Views',
                        data: [100, 220, 160, 280, 320],
                        backgroundColor: [
                            'rgba(0, 0, 0, 0.0)',
                            'rgba(0, 0, 0, 0.0)',
                            'rgba(0, 0, 0, 0.0)',
                            'rgba(0, 0, 0, 0.0)',
                            'rgba(0, 0, 0, 0.0)',
                        ],
                        borderColor: [
                            'rgba(0,176,108,1)',
                            'rgba(0,176,108,1)',
                            'rgba(0,176,108,1)',
                            'rgba(0,176,108,1)',
                            'rgba(0,176,108,1)',
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    elements: {
                        line: {
                            tension: 0
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }


        // digital currency converter start
        var $digital_currency = $('#digital-currency'),
            $physical_currency = $('#physical-currency'),
            $dc_amount = $('#dc-amount'),
            $pc_amount = $('#pc-amount'),
            $api = 'RA9DT91G659WUF9Q'; //api key from https://www.alphavantage.co/support/#api-key

        //var $currency_rate = {};
        var $currency_rate = getCookie('currency_rate');
        if ($currency_rate == '') $currency_rate = {};


        $dc_amount.on('keyup', function () {
            currency_convert($currency_rate, $digital_currency, $physical_currency, $dc_amount, $pc_amount, $api, $);
        });

        //from currency dropdown value change
        $digital_currency.on('changed.bs.select', function () {
            currency_convert($currency_rate, $digital_currency, $physical_currency, $dc_amount, $pc_amount, $api, $);
        });

        //to currency dropdown change
        $physical_currency.on('changed.bs.select', function () {
            currency_convert($currency_rate, $digital_currency, $physical_currency, $dc_amount, $pc_amount, $api, $);
        });
        // digital currency converter end

        //Simple Codeboxr Google Maps Plugin

        var cbx_path = window.location.protocol + '//' + window.location.host;
        var pathArray = window.location.pathname.split('/');
        for (var i = 1; i < (pathArray.length - 1); i++) {
            cbx_path += '/';
            cbx_path += pathArray[i];

        }

        //google map for contact section
        if ($('#map_canvas').length > 0) {

            var $mapref = $('#map_canvas');
            var maptitle = $mapref.data('title');
            var maplat = $mapref.data('lat');
            var maplng = $mapref.data('lng');
            var mapcontent = $mapref.data('content');
            var boxText = mapcontent;

            // Show google Maps
            $mapref.jqcbxgoglemap({
                mapOptions: {
                    latitude: [maplat],
                    longitude: [maplng],
                    center: true,
                    scrollwheel: false,
                    zoom: 17,
                    mapType: 'satellite', //google.maps.MapTypeId.ROADMAP
                    icon: cbx_path + '/assets/img/map-icon.png',
                    infoWindow: [{
                        title: maptitle,
                        content: boxText
                    }]
                }
            });
        }

        // End Simple Codeboxr Google Maps Plugin

        //Check to see if the window is top if not then display button
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        //Click event to scroll to top
        $('.scrollToTop').on('click', function (e) {
            e.preventDefault();

            $('html, body').animate({scrollTop: 0}, 800);
        });


    });

})(jQuery);