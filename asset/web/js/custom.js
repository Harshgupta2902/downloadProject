(function($) {
    "use strict";
    $(document).ready(function() {
        $('.live-auctions').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            prevArrow: '<i class="bi bi-chevron-left live-left-arrow"></i>',
            nextArrow: '<i class="bi bi-chevron-right live-right-arrow"></i>',
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false,
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                }
            }]
        });
    });
    $('[data-toggle="tooltip"]').tooltip();
})(jQuery);