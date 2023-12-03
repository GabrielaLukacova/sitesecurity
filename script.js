jQuery(document).ready(function ($) {
    // SLIDE SHOW - customers reviews
    $('.slick-carousel').slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        cssEase: 'linear',
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false
                }
            }
        ]
    });
});

jQuery(() => {
    // FAQ - opening box after clicking on arrow
    $(document).on('click', '.faq-container_box .question', function () {
        // Find the closest ancestor with the class 'faq-container_box'
        const containerBox = $(this).closest('.faq-container_box');

        // Find the answer element within the containerBox
        const answer = containerBox.find('.answer');

        // Toggle the 'open' class to trigger CSS transitions
        answer.toggleClass('open');

        // Toggle the arrow direction
        const arrow = $(this).find('.arrow');
        arrow.text(arrow.text() === '▶' ? '▼' : '▶');
    });
});
