jQuery(document).ready(function ($) {

//Слайдер проекта
    $('.project-slider').slick({
        dots: false,
        speed: 300,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

//Слайдер отзывов
    $('.reviews-slider').slick({
        dots: true,
        speed: 300,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.project-terms-toggle span').on('click', function (e) {
        e.preventDefault();

        $(this).addClass('active').siblings().removeClass('active');

        $('.project-list .project').hide();
        $('.project-list .project' + $(this).attr('data-class')).show();

        return false;
    });

//Меню в мобильной версии
    $(".menu-icon").click(function () {
        $("#site").addClass('open-menu');
    });

    $(".close-menu, .mobil-menu-overlay").click(function () {
        $("#site").removeClass('open-menu');
    });

    if ($(window).width() < 992) {
        $(".menu").accordion({
            accordion: true,
            speed: 500,
            closedSign: '',
            openedSign: ''
        });
    }

//
    $(window).scroll(function () {
        let scroll = $(this).scrollTop(),
            min = 300,
            scrollHeight = Math.max(
                document.body.scrollHeight, document.documentElement.scrollHeight,
                document.body.offsetHeight, document.documentElement.offsetHeight,
                document.body.clientHeight, document.documentElement.clientHeight
            ),
            clientHeight = document.documentElement.clientHeight,
            max = scrollHeight - clientHeight - $('.footer').height();
        if (scroll > min && scroll < max) {
            $('.scrollup').stop().fadeIn(500);
        } else {
            $('.scrollup').stop().fadeOut(500);
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });

    $(".popup-fon, .close-popup").click(function () {
        $(".popup-fon, .popup").hide();
    });

    function updateTop() {
        $(".popup").each(function () {
            var height = $(this).outerHeight();
            var windowHeight = $(window).outerHeight();
            var scrollTop = $(window).scrollTop();

            var marginTop = windowHeight * 0.15;

            if (windowHeight > height) {
                marginTop = (windowHeight - height) / 2;
            }
            // console.log(height, windowHeight, scrollTop, marginTop);

            $(this).css('top', scrollTop + marginTop);

        });
    }

    $('.ajax-mail').submit(function (event) {
        var elem = $(this);
        var formArr = $(this).serializeArray();
        var data = $(this).serialize();
        var form = [];
        var check = true;
        var required = ['name', 'email', 'massage'];

        event.stopPropagation();
        event.preventDefault();

        $('.danger', this).removeClass('danger');

        for (var i = 0; i < formArr.length; i++)
            form[formArr[i].name] = formArr[i].value;

        // Проверка введенных данных
        for (var key in form) {
            var in_array = false;
            for (var i = 0; i < required.length; i++) {
                if (required[i] == key) in_array = true;
            }

            if (in_array && form[key] == '') {
                check = false;
                $('[name="' + key + '"]', this).addClass('danger');
            }
        }


        $('input, textarea, button', this).attr('disabled', 'disabled');
        send_ajax_files($('input[name="files"]', this), function (files) {
            $.post(
                monarchSettings.ajaxurl,
                {
                    action: 'fmail',
                    data: data,
                    files: files,
                },
                function (response) {
                    if (1 == response) {

                        for (var i = 0; i < formArr.length; i++) {
                            if (formArr[i].name !== 'form') {
                                $('[name="' + formArr[i].name + '"]').val('');
                            }
                        }
                        updateTop();
                        $('.contact-flex').slideUp();
                        $('.contact-message').slideDown();
                    } else {

                    }
                    $('input, textarea, button').removeAttr('disabled');
                }
            );
        });

        return false;
    });

    $('input[type=file]').on('change', function () {
        var files = [];

        $.each(this.files, function (key, value) {
            files.push(value.name);
        });

        files = files.join(', ');

        $(this).next().text(files ? files : '');
    });

// Отправляет файлы на сервер и выполняет callback
    function send_ajax_files(input, callback) {

        // Если файлы не выбраны
        if (!$(input).length) {
            callback([]);
            return;
        }

        var files = $(input)[0].files;

        // Если файлы не выбраны
        if (!files.length) {
            callback([]);
            return;
        }

        // Создадим данные формы и добавим в них данные файлов из files
        var data = new FormData();
        $.each(files, function (key, value) {
            data.append(key, value);
        });

        // Отправляем запрос
        $.ajax({
            url: monarchSettings.ajaxurl + '?action=ajax_fileload',
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            processData: false, // Не обрабатываем файлы (Don't process the files)
            contentType: false, // Так jQuery скажет серверу что это строковой запрос
            success: function (respond, textStatus, jqXHR) {

                // Если все ОК
                // console.log(respond);

                if (respond.error) {
                    alert('Ошибка загрузки файлов: ' + respond.text);
                    console.log(respond);
                } else {
                    callback(respond.data);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log('ОШИБКИ AJAX запроса: ' + textStatus);
            }
        });

    }
});


jQuery(window).ready(function () {

    /*CAROUSEL SHORTCODE*/
    jQuery(".looper-inner p, .looper-inner .item, .lts_pricing p, .lts_blocks p, .lts_blocks br, .lts_tab br, .lts_tabtitle").each(function () {
        if (!jQuery(this).text().trim().length) {
            jQuery(this).addClass("emptyp_clear");
        }
    });

    jQuery('.looper-inner .item, .lts_pricing .pricebox, .lts_block, .lts_tab_child').siblings('.emptyp_clear').remove();
    jQuery('.price_body .emptyp_clear').remove();


    /*Responsive Video Shortcode*/
    jQuery('.thn_post_wrap .ast_vid, .frontpage_sidebar .widget .ast_vid').each(function () {
        var vidwidth = jQuery(this).data('width');
        var vidheight = jQuery(this).data('width');
        jQuery(this).find('iframe').width(vidwidth).height(vidheight);
    });

    jQuery('.thn_post_wrap .ast_vid iframe, .frontpage_sidebar .widget .ast_vid iframe').each(function () {
        var vidheights = jQuery(this).height();
        jQuery(this).closest('.ast_vid').css({'height': vidheights});

        if (jQuery(this).closest('.widget_wrap').find('.video_on_video').length) {
            jQuery(this).closest('.ast_vid').css({'height': vidheights - 240});
        }
    });


    /*Social Icons Widget Custom Color*/
    jQuery('.ast_scoial').each(function () {
        var iconscolor = jQuery(this).attr('data-icon-color');
        if (iconscolor == '#FFFFFF') {
            var iconscolor = '';
        }
        jQuery(this).find('a').css("background-color", iconscolor);
    });
    jQuery('.ast_scoial.social_style_round_text').each(function () {
        var iconscolor = jQuery(this).attr('data-icon-color');
        if (iconscolor == '#FFFFFF') {
            var iconscolor = '';
        }
        jQuery(this).find('i').css("background-color", iconscolor);
        jQuery(this).find('span').css("color", iconscolor);
    });

    //ADD ID to Carousel and MAP
    for (var i = 0; i < 20; i++) {
        jQuery('.lts_looper:eq(' + i + ')').attr('id', 'lts_looper' + i + '');
        jQuery('.lts_list:eq(' + i + ')').attr('id', 'lts_list' + i + '');
        jQuery('.lts_map_wrap:eq(' + i + ')').attr('id', 'map_' + i + '');
    }

    jQuery('.lts_looper.lts_default, .lts_looper.lts_simple').each(function () {
        jQuery(this).find('br').remove();
        var button_color = jQuery(this).attr('data-buttoncolor');
        jQuery(this).find('nav').prepend('<a style="background:' + button_color + ';" class="looper-control" data-looper="prev" href="#' + jQuery(this).attr('id') + '"><i class="fa fa-chevron-left"></i></a><a style="background:' + button_color + ';" class="looper-control right" data-looper="next" href="#' + jQuery(this).attr('id') + '"><i class="fa fa-chevron-right"></i></a>');
    });
    jQuery('.lts_looper.lts_thick_border').each(function () {
        jQuery(this).find('br').remove();
        var button_color = jQuery(this).attr('data-buttoncolor');
        jQuery(this).find('nav').prepend('<a style="background:' + jQuery('body').css("background-color") + ';" class="looper-control" data-looper="prev" href="#' + jQuery(this).attr('id') + '"><i  style="color:' + button_color + '!important;" class="fa fa-chevron-left"></i></a><a style="background:' + jQuery('body').css("background-color") + ';" class="looper-control right" data-looper="next" href="#' + jQuery(this).attr('id') + '"><i style="color:' + button_color + '!important;" class="fa fa-chevron-right"></i></a>');
    });


    /*PRICING SHORTCODE*/
    jQuery('.pricebox').has('.pricebox_featured').addClass('feat_price');

    jQuery(".lts_pricing").each(function () {
        var button_bg = jQuery(this).attr('data-button-bg');
        var button_color = jQuery(this).attr('data-button-txt');
        var pricebox_bg = jQuery(this).attr('data-price-bg');
        var pricebox_txt = jQuery(this).attr('data-price-txt');
        //Convert Background Color to RGBA
        var rgbaCol = 'rgba(' + parseInt(button_bg.slice(-6, -4), 16)
            + ',' + parseInt(button_bg.slice(-4, -2), 16)
            + ',' + parseInt(button_bg.slice(-2), 16)
            + ',0.3)';

        jQuery(this).find('.price_button, .pricebox_featured').attr('style', 'color:' + button_color + '!important;background:' + button_bg + ';');
        jQuery(this).find('.price_button').css({"borderColor": button_bg});
        jQuery(this).find('.pricebox').css({"background": pricebox_bg});

        jQuery('.pricing_style1 .pricebox_inner').hover(function () {
            jQuery(this).css({"borderColor": rgbaCol});
            jQuery(this).find('.price_head h3').css({"backgroundColor": rgbaCol, "color": button_color});
        }, function () {
            jQuery(this).css({"borderColor": "rgba(0, 0, 0, 0.04)"});
            jQuery(this).find('.price_head h3').css({"backgroundColor": 'rgba(0, 0, 0, 0.02)', "color": pricebox_txt});
        });
    });

    jQuery(".lts_pricing.pricing_style2, .lts_pricing.pricing_style3").each(function () {
        var button_bg = jQuery(this).attr('data-button-bg');
        jQuery(this).find('.price_head h3').css({"color": button_bg});
        jQuery(this).find('.pricebox_inner').hover(function () {
            jQuery(this).css({"borderColor": button_bg});
        }, function () {
            jQuery(this).css({"borderColor": "transparent"});
        });
    });
    jQuery(".lts_pricing.pricing_style5").each(function () {
        var button_bg = jQuery(this).attr('data-button-bg');
        var button_color = jQuery(this).attr('data-button-txt');
        var rgbaCol = 'rgba(' + parseInt(button_bg.slice(-6, -4), 16)
            + ',' + parseInt(button_bg.slice(-4, -2), 16)
            + ',' + parseInt(button_bg.slice(-2), 16)
            + ',0.5)';
        jQuery(this).find('.price_head h3').css({"backgroundColor": rgbaCol});
        jQuery(this).find('.pricebox').each(function () {
            jQuery(this).find('.price_ammount, .price_label').insertAfter(jQuery(this).find('.price_body'));
        });
    });


    jQuery(".lts_pricing").each(function () {

        if (jQuery(this).find('.pricebox').length == 5) {
            jQuery(this).addClass('lts_pricebox5');
        }
        if (jQuery(this).find('.pricebox').length == 4) {
            jQuery(this).addClass('lts_pricebox4');
        }
        if (jQuery(this).find('.pricebox').length == 3) {
            jQuery(this).addClass('lts_pricebox3');
        }
        if (jQuery(this).find('.pricebox').length == 2) {
            jQuery(this).addClass('lts_pricebox2');
        }
        if (jQuery(this).find('.pricebox').length == 1) {
            jQuery(this).addClass('lts_pricebox1');
        }
        //Equal Description Height
        var descheight = Math.max.apply(Math, jQuery(".price_desc").map(function () {
            return jQuery(this).outerHeight();
        }));
        jQuery(this).find('.price_desc').outerHeight(descheight);
        //Equal Feature list box Height
        var featheight = Math.max.apply(Math, jQuery(".price_body ul").map(function () {
            return jQuery(this).outerHeight();
        }));
        jQuery(this).find('.price_body ul').outerHeight(featheight);
    });


    /*Column Shortcode*/
    jQuery(".text_block_content, .thn_post_wrap, #slidera, .about_inner, .block_content").each(function () {
        jQuery(this).find('.col2:eq(1), .col2:eq(3), .col2:eq(5), .col2:eq(7), .col2:eq(9), .col2:eq(11), .col2:eq(13), .col2:eq(15), .col2:eq(17), .col2:eq(19)').after('<div class="colclear" style="clear:both" />');
    });
    jQuery(".text_block_content, .thn_post_wrap, #slidera, .about_inner, .block_content").each(function () {
        jQuery(this).find('.col3:eq(2), .col3:eq(5), .col3:eq(8), .col3:eq(11), .col3:eq(14), .col3:eq(17), .col3:eq(20), .col3:eq(23), .col3:eq(26), .col3:eq(29)').after('<div class="colclear" style="clear:both" />');
    });
    jQuery(".text_block_content, .thn_post_wrap, #slidera, .about_inner, .block_content").each(function () {
        jQuery(this).find('.col4:eq(3), .col4:eq(7), .col4:eq(11), .col4:eq(15), .col4:eq(19), .col4:eq(23), .col4:eq(27), .col4:eq(31), .col4:eq(35), .col4:eq(29)').after('<div class="colclear" style="clear:both" />');
    });

    if (jQuery(window).width() >= 480) {
        jQuery(".text_block_content, .thn_post_wrap, #slidera, .about_inner, .block_content").each(function () {
            jQuery(this).find('.col2, .col3, .col4').matchHeight({byRow: true, property: 'min-height'});
        });
        jQuery(window).on('load', function () {
            jQuery(".optimizer_front_carousel .looper .looper-inner li").matchHeight({
                byRow: false,
                property: 'min-height'
            });
        });
    }


//BLOCKS SHORTCODE
    jQuery('.lts_blocks .lts_block:empty').remove();
    jQuery(".lts_blocks").each(function () {
        jQuery(this).ready(function () {
            jQuery(this).find('.lts_block').not('.block_full').matchHeight();
        });

        if (jQuery(this).find('.lts_block').length == 4) {
            jQuery(this).addClass('lts_fourblocks');
        }
        if (jQuery(this).find('.lts_block').length == 3) {
            jQuery(this).addClass('lts_threeblocks');
        }
        if (jQuery(this).find('.lts_block').length == 2) {
            jQuery(this).addClass('lts_twoblocks');
        }
        if (jQuery(this).find('.lts_block').length == 1) {
            jQuery(this).addClass('lts_oneblock');
        }
    });


//LIST Shortcode COLOR
    jQuery(".lts_list").each(function () {
        var bulletcolor = jQuery(this).attr('data-list-color');
        var listid = jQuery(this).attr('id');
        jQuery('<style>#' + listid + ' li:before{color:' + bulletcolor + '}</style>').appendTo('head');
    });


//Shortcode JS
//Tabs Javascript
    jQuery(".lts_tab p:empty").remove();
    jQuery(".lts_tabs .lts_tabtitle.emptyp_clear").remove();
    var i = 1;
    jQuery(".tabs-container").each(function () {
        jQuery(this).find('a.tabtrigger').each(function () {
            jQuery(this).attr('href', '#tab-' + i + '');
            i++;
        });
    });

    var i = 1;
    jQuery(".tabs-container").each(function () {
        jQuery(this).find(".lts_tab_child").not(':empty').each(function () {
            jQuery(this).attr('id', 'tab-' + i + '');
            i++;
        });
    });

    var i = 1;
    jQuery(".tabs-container").each(function () {
        jQuery(this).attr('id', 'tabs-container_' + i + '');
        i++;
    });

    jQuery(".tabs-container.tabs_default").each(function () {
        var tabid = jQuery(this).attr('id');
        var active_color = jQuery(this).data('active-color');
        jQuery('<style>body #' + tabid + ' ul.tabs li.active a{color:' + active_color + '!important;border-color:' + active_color + '}</style>').appendTo('head');
    });
    jQuery(".tabs-container.tabs_circular").each(function () {
        var tabid = jQuery(this).attr('id');
        var active_color = jQuery(this).data('active-color');
        jQuery('<style>body #' + tabid + ' ul.tabs li.active a{color:' + jQuery('body').css('background-color') + '!important;background:' + active_color + '}</style>').appendTo('head');
    });
    jQuery(".tabs-container.tabs_minimal").each(function () {
        var tabid = jQuery(this).attr('id');
        var active_color = jQuery(this).data('active-color');
        jQuery('<style>body #' + tabid + ' ul.tabs li.active a{color:' + active_color + '!important;border-color:' + active_color + '}</style>').appendTo('head');
    });
    jQuery(".tabs-container.tabs_capsule").each(function () {
        var tabid = jQuery(this).attr('id');
        var active_color = jQuery(this).data('active-color');
        jQuery('<style>body #' + tabid + ' ul.tabs li.active a{color:' + jQuery('body').css('background-color') + '!important;background:' + active_color + ';border-color:' + active_color + '}</style>').appendTo('head');
    });

    // jQuery('.tabs-container').easytabs({updateHash: false});

    //Toggle Shortcode
    jQuery('.lts_toggle_content').hide(); // Hide even though it's already hidden
    jQuery('.lts_toggle .trigger').click(function () {
        jQuery(this).closest('.lts_toggle').find('.lts_toggle_content').slideToggle("fast"); // First click should toggle to 'show'
        return false;
    });
    jQuery('.lts_toggle a.trigger').toggle(function () {
        jQuery(this).find('i').animateRotate(135);
        jQuery(this).addClass('down');
    }, function () {
        jQuery(this).find('i').animateRotate(-90);
        jQuery(this).removeClass('down');
    });

    jQuery(".lts_toggle").each(function () {
        if (jQuery(this).next('br')) {
            jQuery(this).next('br').addClass('tabsbr');
        }
    });

    //Widget image opacity animation
    jQuery('.widget_wrap a img').hover(function () {
        jQuery(this).stop().animate({"opacity": "0.7"}, 300);
    }, function () {
        jQuery(this).stop().animate({"opacity": "1"}, 300);
    });


    //add CLASS for Slider Widget
    for (var i = 0; i < 10; i++) {
        jQuery('.ast_slider_widget .slide_wdgt:eq(' + i + ')').attr('id', 'lts_wdgt_nivo' + i + '');
        // jQuery('.ast_slider_widget #lts_wdgt_nivo' + i + '').nivoSlider({
        //     effect: 'fade',
        //     directionNav: true,
        //     prevText: '<i class="fa fa-chevron-left"></i>',
        //     nextText: '<i class="fa fa-chevron-right"></i>',
        //     controlNav: false
        // });
    }
    //Call to action shortcode animation
    jQuery('.act_right a').hover(function () {
        jQuery(this).addClass('animated pulse');
    }, function () {
        jQuery(this).removeClass('animated pulse');
    });
});

/**
 * jquery-match-height master by @liabru
 * http://brm.io/jquery-match-height/
 * License: MIT
 */

;(function(factory) { // eslint-disable-line no-extra-semi
    'use strict';
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery'], factory);
    } else if (typeof module !== 'undefined' && module.exports) {
        // CommonJS
        module.exports = factory(require('jquery'));
    } else {
        // Global
        factory(jQuery);
    }
})(function($) {
    /*
    *  internal
    */

    var _previousResizeWidth = -1,
        _updateTimeout = -1;

    /*
    *  _parse
    *  value parse utility function
    */

    var _parse = function(value) {
        // parse value and convert NaN to 0
        return parseFloat(value) || 0;
    };

    /*
    *  _rows
    *  utility function returns array of jQuery selections representing each row
    *  (as displayed after float wrapping applied by browser)
    */

    var _rows = function(elements) {
        var tolerance = 1,
            $elements = $(elements),
            lastTop = null,
            rows = [];

        // group elements by their top position
        $elements.each(function(){
            var $that = $(this),
                top = $that.offset().top - _parse($that.css('margin-top')),
                lastRow = rows.length > 0 ? rows[rows.length - 1] : null;

            if (lastRow === null) {
                // first item on the row, so just push it
                rows.push($that);
            } else {
                // if the row top is the same, add to the row group
                if (Math.floor(Math.abs(lastTop - top)) <= tolerance) {
                    rows[rows.length - 1] = lastRow.add($that);
                } else {
                    // otherwise start a new row group
                    rows.push($that);
                }
            }

            // keep track of the last row top
            lastTop = top;
        });

        return rows;
    };

    /*
    *  _parseOptions
    *  handle plugin options
    */

    var _parseOptions = function(options) {
        var opts = {
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        };

        if (typeof options === 'object') {
            return $.extend(opts, options);
        }

        if (typeof options === 'boolean') {
            opts.byRow = options;
        } else if (options === 'remove') {
            opts.remove = true;
        }

        return opts;
    };

    /*
    *  matchHeight
    *  plugin definition
    */

    var matchHeight = $.fn.matchHeight = function(options) {
        var opts = _parseOptions(options);

        // handle remove
        if (opts.remove) {
            var that = this;

            // remove fixed height from all selected elements
            this.css(opts.property, '');

            // remove selected elements from all groups
            $.each(matchHeight._groups, function(key, group) {
                group.elements = group.elements.not(that);
            });

            // TODO: cleanup empty groups

            return this;
        }

        if (this.length <= 1 && !opts.target) {
            return this;
        }

        // keep track of this group so we can re-apply later on load and resize events
        matchHeight._groups.push({
            elements: this,
            options: opts
        });

        // match each element's height to the tallest element in the selection
        matchHeight._apply(this, opts);

        return this;
    };

    /*
    *  plugin global options
    */

    matchHeight.version = 'master';
    matchHeight._groups = [];
    matchHeight._throttle = 80;
    matchHeight._maintainScroll = false;
    matchHeight._beforeUpdate = null;
    matchHeight._afterUpdate = null;
    matchHeight._rows = _rows;
    matchHeight._parse = _parse;
    matchHeight._parseOptions = _parseOptions;

    /*
    *  matchHeight._apply
    *  apply matchHeight to given elements
    */

    matchHeight._apply = function(elements, options) {
        var opts = _parseOptions(options),
            $elements = $(elements),
            rows = [$elements];

        // take note of scroll position
        var scrollTop = $(window).scrollTop(),
            htmlHeight = $('html').outerHeight(true);

        // get hidden parents
        var $hiddenParents = $elements.parents().filter(':hidden');

        // cache the original inline style
        $hiddenParents.each(function() {
            var $that = $(this);
            $that.data('style-cache', $that.attr('style'));
        });

        // temporarily must force hidden parents visible
        $hiddenParents.css('display', 'block');

        // get rows if using byRow, otherwise assume one row
        if (opts.byRow && !opts.target) {

            // must first force an arbitrary equal height so floating elements break evenly
            $elements.each(function() {
                var $that = $(this),
                    display = $that.css('display');

                // temporarily force a usable display value
                if (display !== 'inline-block' && display !== 'flex' && display !== 'inline-flex') {
                    display = 'block';
                }

                // cache the original inline style
                $that.data('style-cache', $that.attr('style'));

                $that.css({
                    'display': display,
                    'padding-top': '0',
                    'padding-bottom': '0',
                    'margin-top': '0',
                    'margin-bottom': '0',
                    'border-top-width': '0',
                    'border-bottom-width': '0',
                    'height': '100px',
                    'overflow': 'hidden'
                });
            });

            // get the array of rows (based on element top position)
            rows = _rows($elements);

            // revert original inline styles
            $elements.each(function() {
                var $that = $(this);
                $that.attr('style', $that.data('style-cache') || '');
            });
        }

        $.each(rows, function(key, row) {
            var $row = $(row),
                targetHeight = 0;

            if (!opts.target) {
                // skip apply to rows with only one item
                if (opts.byRow && $row.length <= 1) {
                    $row.css(opts.property, '');
                    return;
                }

                // iterate the row and find the max height
                $row.each(function(){
                    var $that = $(this),
                        style = $that.attr('style'),
                        display = $that.css('display');

                    // temporarily force a usable display value
                    if (display !== 'inline-block' && display !== 'flex' && display !== 'inline-flex') {
                        display = 'block';
                    }

                    // ensure we get the correct actual height (and not a previously set height value)
                    var css = { 'display': display };
                    css[opts.property] = '';
                    $that.css(css);

                    // find the max height (including padding, but not margin)
                    if ($that.outerHeight(false) > targetHeight) {
                        targetHeight = $that.outerHeight(false);
                    }

                    // revert styles
                    if (style) {
                        $that.attr('style', style);
                    } else {
                        $that.css('display', '');
                    }
                });
            } else {
                // if target set, use the height of the target element
                targetHeight = opts.target.outerHeight(false);
            }

            // iterate the row and apply the height to all elements
            $row.each(function(){
                var $that = $(this),
                    verticalPadding = 0;

                // don't apply to a target
                if (opts.target && $that.is(opts.target)) {
                    return;
                }

                // handle padding and border correctly (required when not using border-box)
                if ($that.css('box-sizing') !== 'border-box') {
                    verticalPadding += _parse($that.css('border-top-width')) + _parse($that.css('border-bottom-width'));
                    verticalPadding += _parse($that.css('padding-top')) + _parse($that.css('padding-bottom'));
                }

                // set the height (accounting for padding and border)
                $that.css(opts.property, (targetHeight - verticalPadding) + 'px');
            });
        });

        // revert hidden parents
        $hiddenParents.each(function() {
            var $that = $(this);
            $that.attr('style', $that.data('style-cache') || null);
        });

        // restore scroll position if enabled
        if (matchHeight._maintainScroll) {
            $(window).scrollTop((scrollTop / htmlHeight) * $('html').outerHeight(true));
        }

        return this;
    };

    /*
    *  matchHeight._applyDataApi
    *  applies matchHeight to all elements with a data-match-height attribute
    */

    matchHeight._applyDataApi = function() {
        var groups = {};

        // generate groups by their groupId set by elements using data-match-height
        $('[data-match-height], [data-mh]').each(function() {
            var $this = $(this),
                groupId = $this.attr('data-mh') || $this.attr('data-match-height');

            if (groupId in groups) {
                groups[groupId] = groups[groupId].add($this);
            } else {
                groups[groupId] = $this;
            }
        });

        // apply matchHeight to each group
        $.each(groups, function() {
            this.matchHeight(true);
        });
    };

    /*
    *  matchHeight._update
    *  updates matchHeight on all current groups with their correct options
    */

    var _update = function(event) {
        if (matchHeight._beforeUpdate) {
            matchHeight._beforeUpdate(event, matchHeight._groups);
        }

        $.each(matchHeight._groups, function() {
            matchHeight._apply(this.elements, this.options);
        });

        if (matchHeight._afterUpdate) {
            matchHeight._afterUpdate(event, matchHeight._groups);
        }
    };

    matchHeight._update = function(throttle, event) {
        // prevent update if fired from a resize event
        // where the viewport width hasn't actually changed
        // fixes an event looping bug in IE8
        if (event && event.type === 'resize') {
            var windowWidth = $(window).width();
            if (windowWidth === _previousResizeWidth) {
                return;
            }
            _previousResizeWidth = windowWidth;
        }

        // throttle updates
        if (!throttle) {
            _update(event);
        } else if (_updateTimeout === -1) {
            _updateTimeout = setTimeout(function() {
                _update(event);
                _updateTimeout = -1;
            }, matchHeight._throttle);
        }
    };

    /*
    *  bind events
    */

    // apply on DOM ready event
    $(matchHeight._applyDataApi);

    // use on or bind where supported
    var on = $.fn.on ? 'on' : 'bind';

    // update heights on load and resize events
    $(window)[on]('load', function(event) {
        matchHeight._update(false, event);
    });

    // throttled update heights on resize events
    $(window)[on]('resize orientationchange', function(event) {
        matchHeight._update(true, event);
    });

});