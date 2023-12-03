document.addEventListener('DOMContentLoaded', function () {
    // SLIDE SHOW - customers reviews
    document.querySelectorAll('.slick-carousel').forEach(function (carousel) {
        new Glider(carousel, {
            dots: '#dots',
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
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

    // FAQ - opening box after clicking on arrow
    document.querySelectorAll('.faq-container_box .question').forEach(function (question) {
        question.addEventListener('click', function () {
            console.log('Click event triggered.');

            var answer = this.closest('.faq-container_box').querySelector('.answer');

            // Toggle the 'open' class to trigger CSS transitions
            answer.classList.toggle('open');

            // Toggle the arrow direction
            var arrow = this.querySelector('.arrow');
            arrow.textContent = arrow.textContent === '▶' ? '▼' : '▶';
        });
    });
});
