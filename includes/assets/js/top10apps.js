(function ($) {
"use strict";

    var Top10appsGlobal = function ($scope, $) {

        // Js Start
        $('[data-background]').each(function() {
            $(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
        });
        // Js End

    };
    var adblocklist = function ($scope, $) {

        // Js Start
        var link = $('.chart-product-text-body').data('link');
        $(".chart-product-text-body").click( function() {
            window.location.href=link;
        });
        // Js End

    };

    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            elementorFrontend.hooks.addAction('frontend/element_ready/global', Top10appsGlobal);
            //elementorFrontend.hooks.addAction('frontend/element_ready/top10apps_ad_block.default', adblocklist);
        }
        else {
            elementorFrontend.hooks.addAction('frontend/element_ready/global', Top10appsGlobal);
            //elementorFrontend.hooks.addAction('frontend/element_ready/top10apps_ad_block.default', adblocklist);
        }
    });
console.log('addon js loaded');
})(jQuery);