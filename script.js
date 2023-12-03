jQuery(document).ready(function($) {
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

     // FAQ - opening box after clicking on arrow
     document.querySelectorAll('.faq-container_box .question').forEach(function (question) {
        question.addEventListener('click', function () {
            console.log('Click event triggered.');

            var answer = this.closest('.faq-container_box').querySelector('.answer');

            // Log the answer element to check if it's correctly selected
            console.log('Answer element:', answer);

            // Toggle the 'open' class to trigger CSS transitions
            answer.classList.toggle('open');

            // Toggle the arrow direction
            var arrow = this.querySelector('.arrow');
            arrow.textContent = arrow.textContent === '▶' ? '▼' : '▶';
        });
    });
});