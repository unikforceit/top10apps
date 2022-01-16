(function ($) {
"use strict";

    var Top10appsGlobal = function ($scope, $) {

        // Js Start
        $('[data-background]').each(function() {
            $(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
        });
        // Js End

    };
    var StickySection = function ($scope, $) {
        //$scope.find('.landzai-builder-nav').each(function () {
            // Js Start
            jQuery(window).on('scroll', function () {
                if (jQuery(window).scrollTop() < 100) {
                    jQuery('.product-sidebar-sticky').addClass('product-sidebar-sticky--hidden')
                } else {
                    jQuery('.product-sidebar-sticky').removeClass('product-sidebar-sticky--hidden')
                }
            });
            // Js End
        //})
    };

    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            elementorFrontend.hooks.addAction('frontend/element_ready/global', Top10appsGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/top10apps_review_header.default', StickySection);
        }
        else {
            elementorFrontend.hooks.addAction('frontend/element_ready/global', Top10appsGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/top10apps_review_header.default', StickySection);
        }
    });
console.log('addon js loaded');
})(jQuery);