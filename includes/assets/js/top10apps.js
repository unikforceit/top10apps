(function ($) {
"use strict";

    var Top10appsGlobal = function ($scope, $) {

        // Js Start
        $('[data-background]').each(function() {
            $(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
        });
        // Js End

    };
    var Scrollbar = function ($scope, $) {

        // Js Start

        // Js End

    };

    $(window).on('elementor/frontend/init', function () {
        if (elementorFrontend.isEditMode()) {
            elementorFrontend.hooks.addAction('frontend/element_ready/global', Top10appsGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/sidebar_scroll.default', Scrollbar);
            //elementorFrontend.hooks.addAction('frontend/element_ready/nav-builder.default', CDNavMenu);
        }
        else {
            elementorFrontend.hooks.addAction('frontend/element_ready/global', Top10appsGlobal);
            elementorFrontend.hooks.addAction('frontend/element_ready/sidebar_scroll.default', Scrollbar);
        }
    });
console.log('addon js loaded');
})(jQuery);