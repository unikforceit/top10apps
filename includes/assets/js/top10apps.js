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
            $('.toggle-accordion').on('click',function () {
                $(this).text(function(i, text){
                    return text === "More info" ? "Less info" : "More info";
                })
                $(this).find('div.accordion').toggleClass("accordion-open");
                $(this).find('div.accordion-items').toggleClass("accordion-items-open");
                console.log('Toggle CLicked');
                return false;
            });
            // Js End
        })
    };
    var slider = function ($scope, $) {
        $scope.find('.comparison-table__root-element').each(function () {
            // Js Start
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 8,
                spaceBetween: 0,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 0,
                    },
                    992: {
                        slidesPerView: 5,
                        spaceBetween: 0,
                    }
                },
            });
            // Js End
        })
    };

    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            elementorFrontend.hooks.addAction('frontend/element_ready/global', Top10appsGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/top10apps_review_header.default', StickySection);
            elementorFrontend.hooks.addAction('frontend/element_ready/top10apps_ad_block2.default', Topads2);
            elementorFrontend.hooks.addAction('frontend/element_ready/hosting_slider.default', slider);
        }
        else {
            elementorFrontend.hooks.addAction('frontend/element_ready/global', Top10appsGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/top10apps_review_header.default', StickySection);
            elementorFrontend.hooks.addAction('frontend/element_ready/top10apps_ad_block2.default', Topads2);
            elementorFrontend.hooks.addAction('frontend/element_ready/hosting_slider.default', slider);
        }
    });
console.log('addon js loaded');
})(jQuery);