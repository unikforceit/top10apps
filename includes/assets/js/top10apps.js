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
    var Topads2 = function ($scope, $) {
        $scope.find('.chart__body2').each(function () {
            // Js Start
            $('.toggle-accordion').on('click', function (){
                $(this).next('div.accordion').toggleClass('accordion-open');
                $('.accordion-active').next('div.accordion-items').toggleClass('accordion-items-open');
                console.log('Toggle CLicked');
            })
            // Js End
        })
    };

    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            elementorFrontend.hooks.addAction('frontend/element_ready/global', Top10appsGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/top10apps_review_header.default', StickySection);
            elementorFrontend.hooks.addAction('frontend/element_ready/top10apps_ad_block2.default', Topads2);
        }
        else {
            elementorFrontend.hooks.addAction('frontend/element_ready/global', Top10appsGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/top10apps_review_header.default', StickySection);
            elementorFrontend.hooks.addAction('frontend/element_ready/top10apps_ad_block2.default', Topads2);
        }
    });
console.log('addon js loaded');
})(jQuery);